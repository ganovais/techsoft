<?php

require_once("./helpers/pecee.php");

class UserController
{
    public function cadastrar()
    {
        $data = input()->all();
        $email = $data['email'];

        $userModel = new User();
        $user = $userModel->findUserByEmail($email);

        if(!empty($user)) {
            return json_encode([
                'error' => true,
                'message' => 'E-mail já cadastrado no sistema.'
            ]);
        }

    }
}