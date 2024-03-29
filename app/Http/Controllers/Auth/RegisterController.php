<?php

namespace App\Http\Controllers\Auth;

use Redirect;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm(){
        return view('signup');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'bank_name' => ['required', 'string'],
            'bank_account_number' => ['required', 'string'],
            'dob' => ['required', 'string'],
            'home_address' => ['required', 'string'],
            'business_address' => ['required', 'string'],
            'account_type' => ['required', 'string'],
            'profile_picture' => ['required'],
        ]);
    }

    public function register(Request $request){
        $data = $request->all();
        $validation = $this->validator($data);
        if($validation->fails()) {
            return Redirect::back()->withErrors($validation);
        }
        else{
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->bank_name = $request->bank_name;
            $user->bank_account_number = $request->bank_account_number;
            $user->dob = $request->dob;
            $user->home_address = $request->home_address;
            $user->business_address = $request->business_address;
            $user->account_type = $request->account_type;
            $user->password = bcrypt($request->password);
            if(Input::hasFile('profile_picture')){
                $file = Input::file('profile_picture');
                $filename = str_random(5)."_".$user->name.".".$file->getClientOriginalExtension();
                $file->move('img/profile_pictures', $filename);
                $user->profile_picture = $filename;
            }
            $user->save();
        }
        return redirect("/");
    }
}
