<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerificationController extends Controller
{

        public function verify($code)
    {
        dd($code);

        $user = User::where('confirmation_code', $code)->first();

        if (! $user)
            return redirect('/home');

        $user->confirmed = 1;
        $user->status = 1;
        $user->save();

        return redirect('/home')->with('notification', 'Has confirmado correctamente tu correo!');
    }
}
