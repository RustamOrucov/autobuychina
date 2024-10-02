<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Services\RepositoryService\DealerService;
use App\Services\RepositoryService\UserService;
use Illuminate\Http\Request;

class DealerController extends Controller
{
    public function __construct(protected DealerService $service)
    {
    }

    public function store(RegisterRequest $dealerRequest){
        $user = $this->service->store($dealerRequest);

        $messageContent = "Your account will be reviewed, and you will be notified once the review is complete!";

//        Mail::raw($messageContent, function ($message) use ($user) {
//            $message->to($user->email)
//                ->subject('User Notification');
//        });

        return redirect()->back()->with('success', $messageContent);
    }

    public function login(Request $request){
        dd($request->all());
    }
}
