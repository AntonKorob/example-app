<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Web\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function save(Request $request){
        if(Auth::check()){
            return redirect(route('user.private'));
        }    

        $validateFields = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::create($validateFields);
        if($user){
            Auth::login($user);
            return redirect()->to(route('user.private'));
        }
        return redirect(route('user.login'))->withErrors([
            'formError'=> 'Произошла ошибка при сохраниении пользоватуля'
        ]);
    }
}
