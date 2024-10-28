<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Http\Requests\MobileRegisterRequest;
use App\Models\Policy;
use App\Services\RepositoryService\DealerService;
use App\Services\RepositoryService\MobileDealerService;
use App\Services\RepositoryService\MobileTraderService;
use App\Services\RepositoryService\TraderRegisterService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class MobileRegisterController extends Controller
{
    public function __construct(
        protected MobileDealerService $dealerservice,
        protected MobileTraderService $traiderservice
    ) {
    }

    public function register(Request $request){
        $costumer=$request->costumer;
        $policys = Policy::all();
        return view('mobile.pages..register',compact('policys','costumer'));
    }
    public function registerStore(MobileRegisterRequest $dealerRequest){


        if ($dealerRequest->input('costumer') === 'dealer') {
            $user = $this->dealerservice->store($dealerRequest);
            Auth::guard('dealer')->logout();
            $messageContent = "Your account will be reviewed, and you will be notified once the review is complete!";

    //        Mail::raw($messageContent, function ($message) use ($user) {
    //            $message->to($user->email)
    //                ->subject('User Notification');
    //        });

            return redirect()->route('mobile.home')->with('success', $messageContent);


        } elseif ($dealerRequest->input('costumer') === 'traider') {

            $user = $this->traiderservice->store($dealerRequest);

            Auth::guard('trader')->logout();
            $messageContent = "Your account will be reviewed, and you will be notified once the review is complete!";

    //        Mail::raw($messageContent, function ($message) use ($user) {
    //            $message->to($user->email)
    //                ->subject('User Notification');
    //        });

            return redirect()->route('home')->with('success', $messageContent);
        } else {

            dd('Customer type is unknown');
        }
    }
}
