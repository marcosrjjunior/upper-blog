<?php

class LoginController extends \BaseController {

    public function postLogin()
    {
        $user = array(
            'email'   => Input::get('email'),
            'password'   => Input::get('password')
        );

        //tenta logar o usuário
        if (Auth::attempt($user)) {
            return Redirect::to('posts');
        }
        else {
            return Redirect::to('login')->withErrors('Usuário ou Senha Inválido');
        }
    }
}