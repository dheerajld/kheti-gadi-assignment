<?php

namespace App\Http\Controllers\Auth;

use ...
use .....
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;


class RegisterController extends Controller
{
    use RegistersUsers;
    protected $redirectTo = RouteServiceProvider::HOME;


      public function __construct()
    {
        $this->middleware('guest');
    }
    .
    ...
    ....
    protected function create(array $data)
    {
        $user =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'mobile_no' => $data['mobile_no'],
            'password' => bcrypt($data['password']),
        ]);

        Mail::to($data['email'])->send(new WelcomeMail($user));

        return $user;
    }
}