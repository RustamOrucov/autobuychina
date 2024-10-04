<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\DelaerProfileUpdateRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Dealer;
use App\Services\RepositoryService\DealerService;
use App\Services\RepositoryService\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DealerController extends Controller
{
    public function __construct(protected DealerService $service)
    {
    }

    public function store(RegisterRequest $dealerRequest){
        $user = $this->service->store($dealerRequest);
        Auth::guard('dealer')->logout();
        $messageContent = "Your account will be reviewed, and you will be notified once the review is complete!";

//        Mail::raw($messageContent, function ($message) use ($user) {
//            $message->to($user->email)
//                ->subject('User Notification');
//        });

        return redirect()->route('home')->with('success', $messageContent);
    }


    public function detail(){

       $dealer=Auth::guard('dealer')->user();
        return view('front.pages.avtosalon-detail',['dealer'=>$dealer]);
    }

   public function profile(){
    $dealer=Auth::guard('dealer')->user();
    return view('front.pages.dealer-profile',['dealer'=>$dealer]);
   }


    public function update(DelaerProfileUpdateRequest $profilerequest,Dealer $dealer){
        $this->service->update($profilerequest,$dealer);
        return redirect()->back()->with('success', 'Profile updated successfully');
    }

}
