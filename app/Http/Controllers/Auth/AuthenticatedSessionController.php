<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function signIn(Request $request){
       
$request->validate(['email'=>['required','exists:users,email'],'password'=>['required']]);

$user=User::where('email',$request->email)->first();
if($user){
   
$check=Hash::check($request->password,$user->password);
if($check){

    if($user->role->value == 1){
     
Auth::login($user);
return redirect()->route('dashboard');
    }else{
      return  redirect()->back()->with('massage','you are not avendor');
    }
}else{
return redirect()->back()->with('massage','the password not correct');
}
}else{
    abort(403);
}
    }
}
