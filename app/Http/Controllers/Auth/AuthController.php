<?php

namespace App\Http\Controllers\Auth;

use Throwable;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\MessageBag;
use Symfony\Component\Console\Input\Input;

class AuthController extends Controller
{
    public function showregisterform(){
        return view('Auth.register');
    }

    public function register(RegisterRequest $request){
        DB::beginTransaction();
        try {
            $validated = $request->validated();
            User::create($validated);
            DB::commit();
        }catch(Throwable $e){
            DB::rollBack();
            report($e);
        }
        return redirect()->route('showlogin');
    }

    public function showloginform(){
        return view('Auth.login');
    }

    public function login(LoginRequest $request){
        $user = $request->validated();
        if(Auth::attempt((['email'=>$user['email'], 'password' => $user['password']])))
        {
           return redirect()->route('Dashboard');
        }
        $errors = new MessageBag(['password'=>['Invalid Password']]);
        return redirect()->back()->withErrors($errors)->withInput($request->except('password'));
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect()->route('logout');
    }
}
