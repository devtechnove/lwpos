<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\PasswordBroker;

class ResetPasswordController extends Controller
{
    public function index(Request $request, PasswordBroker $passwords)
    {
        if( $request->ajax() )
        {
            $this->validate($request, ['email' => 'required|email']);
            $response = $passwords->sendResetLink($request->only('email'));

            switch ($response)
            {
                case PasswordBroker::RESET_LINK_SENT:
                    return "sended.true";

                case PasswordBroker::INVALID_USER:
                   return[
                       'error'=>'true',
                       'msg'=>"We can't find a user with that email address"
                   ];
            }

        }


    }

    public function reset(Request $request)
    {

        if( $request->ajax() )
        {

            $this->validate($request,
             [
                'email' => 'required|email',
                'password' => 'required | confirmed'
            ]);

            $user = \App\Models\User::FiltrarPorEmail($request->email)->first();
            $user->password = bcrypt($request->password);
            $user->save();


             return "changed.true";

       }


    }


}
