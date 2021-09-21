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

        $user = new User();
        return json_encode([
            'error' => false,
            'user' => $user->login($data),
        ]);
    }

    public function logout()
    {
        $user = new User();
        $user->logout();
        header("Location: ./");
    }
}