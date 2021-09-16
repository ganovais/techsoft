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
        } catch(\Throwable $th) {
            throw $th;
        }
    }
}