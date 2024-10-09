<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\TraderRegisterRequest;
use App\Services\RepositoryService\DealerService;
use Illuminate\Support\Facades\Auth;

class TraderRegisController extends Controller
{
    public function __construct(protected DealerService $service)
    {
    }

    public function store(TraderRegisterRequest $traderregisterRequest){
        $user = $this->service->store($traderregisterRequest);
        Auth::guard('dealer')->logout();
        $messageContent = "Your account will be reviewed, and you will be notified once the review is complete!";

//        Mail::raw($messageContent, function ($message) use ($user) {
//            $message->to($user->email)
//                ->subject('User Notification');
//        });

        return redirect()->route('home')->with('success', $messageContent);
    }
}
