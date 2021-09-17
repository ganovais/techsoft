<?php

require_once("./helpers/pecee.php");

class UserController
{
    public function cadastrar()
    {
        $data = input()->all();
        $email = $data['email'];

        $user = User::findUserByEmail($email);

        if(!empty($user)) {
            return json_encode([
                'error' => true,
                'message' => 'E-mail já cadastrado no sistema.'
            ]);
        }

        return json_encode([
           'error'  => false,
           'user' => User::create($data),
        ]);
    }

    public function login()
    {
        $data = input()->all();

        return json_encode([
            'error' => false,
            'user' => User::login($data),
        ]);
    }
}