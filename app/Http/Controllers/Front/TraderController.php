<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\TraderProfileUpdateRequest;
use App\Http\Requests\TraderRegisterRequest;
use App\Models\Spare;
use App\Models\Traderregis;
use App\Services\RepositoryService\TraderRegisterService;
use Illuminate\Support\Facades\Auth;

class TraderController extends Controller
{
    public function __construct(protected TraderRegisterService $service)
    {
    }

    public function store(TraderRegisterRequest $traderRegisterRequest){

        $user = $this->service->store($traderRegisterRequest);

        Auth::guard('trader')->logout();
        $messageContent = "Your account will be reviewed, and you will be notified once the review is complete!";

//        Mail::raw($messageContent, function ($message) use ($user) {
//            $message->to($user->email)
//                ->subject('User Notification');
//        });

        return redirect()->route('home')->with('success', $messageContent);
    }

    public function detail(){

        $trader=Auth::guard('trader')->user();
        $spares=Spare::where('trader_id',$trader->id)
//            ->with('Ro', 'region', 'ModelType', 'carModel', 'EngineVolume')
//            ->select('id', 'price','vincode', 'created_at', 'year', 'odometer_km', 'engine_v', 'ro_id', 'region_id', 'model_type_id', 'car_models_id', 'car_image', 'engine_volume_id','status')
//            ->orderBy('created_at', 'desc')
            ->get();
        return view('front.pages.partsalon-detail',['trader'=>$trader,'spares'=>$spares]);
    }

    public function profile(){
        $trader=Auth::guard('trader')->user();
        return view('front.pages.trader-profile',['trader'=>$trader]);
    }


    public function update(TraderProfileUpdateRequest $traderProfileUpdateRequest,Traderregis $trader){
        $this->service->update($traderProfileUpdateRequest,$trader);
        return redirect()->back()->with('success', 'Profile updated successfully');
    }
}
