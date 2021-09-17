<?php

class Conexao
{
    private static $instance;

    public static function get()
    {
        try {
            if(!isset(self::$instance)) {
                self::$instance = new PDO("mysql:host=localhost;dbname=suporte_cliente", "root", "root");
            }
            return self::$instance;
        } catch(Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}