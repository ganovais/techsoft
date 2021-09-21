<?php

class User 
{
    public function __construct()
    {
        session_start();
    }

    public static function findUserByEmail($email)
    {
        try {
            $db = Conexao::get();
            $query = $db->prepare("SELECT *
                                     FROM users 
                                    WHERE email = '" . $email . "'");
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
        } catch(\Throwable $th) {
            throw $th;
        }
    }

    public static function create($data)
    {
        $db = Conexao::get();
        $name = $data['name'];
        $email = $data['email'];
        $passwordHash = password_hash($data['password'], PASSWORD_BCRYPT);

        $sql = "INSERT INTO users (name, email, password)
                VALUES ('".$name. "', '" . $email . "', '" .
                $passwordHash . "');";
        $db->exec($sql);

        $query = $db->prepare("SELECT *
                                 FROM users 
                                WHERE email = '" . $email . "'");
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public static function login($data)
    {
        $db = Conexao::get();
        $email = $data['email'];
        $password = $data['password'];

        $query = $db->prepare("SELECT *
                                 FROM users 
                                WHERE email = '" . $email . "'");
        $query->execute();
        $user = $query->fetch(PDO::FETCH_OBJ);

        if(!empty($user)) {
            if(password_verify($password, $user->password)) {
                $_SESSION['logado'] = true;
                $_SESSION['usuario'] = $user->name;
                $_SESSION['admin'] = $user->admin;
                $_SESSION['user_id'] = $user->id;
                $_SESSION['email'] = $user->email;

                return $user;
            }
        }

        return false;
    }

    public static function isLogged() 
    {
        if(!empty($_SESSION['logado']) && $_SESSION['logado']) {
            return true;
        } else {
            return false;
        }
    }
}