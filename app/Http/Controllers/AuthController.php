<?php

namespace App\Http\Controllers;

use App\Jobs\ForgotUserEmailJob;
use App\Mail\ForgotPassword;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }
    public function showRegisterForm(){
        return view('auth.register');
    }
    public function login(Request $request){
        $data = $request->validate([
            "email" => ["required", "email", "string"],
            "password"=>["required"]
        ]);

        if(auth("web")->attempt($data)){
            return redirect(route('index'));
        }
        return redirect(route('login'))->withErrors(["email" => "Користувача не знайдено, або невірні дані!"]);
    }
    public function register(Request $request): \Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $data = $request->validate([
            "name" => ["required", "string"],
            "email" => ["required", "email", "string", "unique:users,email"],
            "password"=>["required", "confirmed"]
        ]);

        $user = User::create([
            "name" => $data["name"],
            "email"=> $data["email"],
            "password"=> bcrypt( $data["password"] ) ,
        ]);

        if($user){
            event(new Registered($user));

            auth("web")->login($user);
            return redirect()->route('verification.notice');
        }
        return redirect(route('index'));
    }
    public function showForgotForm(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('auth.forgot');
    }
    public function forgot_process(Request $request): \Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $data = $request->validate([
            "email" => ["required", "email", "string", "exists:users"],
        ]);
        // поиск юзера
        $user = User::where( [ "email"=> $data["email"] ] )->first();
        // создаем новый пароль (набор символов)
        $password = uniqid();
        // обновляем пароль у юзера
        $user->password = bcrypt($password);
        // сохраняем пароль
        $user->save();
        // отправляем юзеру новый пароль
        ForgotUserEmailJob::dispatch( $user, $password );
        return redirect(route('index'));
    }
    public function logout(){
        auth("web")->logout();
        return redirect(route('index'));
    }
}
