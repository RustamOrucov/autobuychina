<?php

namespace App\Http\Controllers\Front;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Category;
use App\Services\RepositoryService\UserService;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function __construct(protected UserService $service)
    {
    }

    public function register()
    {
        $user = Auth::user();
        $categories =Category::all();
        return view('front.pages.register',compact('categories','user'));
    }



    public function storeClient(UserRequest $userRequest)
    {
        $user = $this->service->store($userRequest);

        $messageContent = "Hesabınız yoxlanışdan keçdikdən sonra sizə geri dönüş ediləcək!";

//        Mail::raw($messageContent, function ($message) use ($user) {
//            $message->to($user->email)
//                ->subject('User Notification');
//        });

        return redirect()->route('home.index');
    }

    public function changeStatus(Request $request)
    {
        $model = User::find($request->id);

        if ($model) {
            $model->status = $request->input('status');
            $model->save();

            return response()->json(['success' => true, 'status' => $model->status]);
        }

        return response()->json(['success' => false, 'message' => 'Model not found'], 404);
    }

}
