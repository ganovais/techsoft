<?php

class Attendance {

    public function getAttendances() 
    {
        $db = Conexao::get();
        $query = $db->prepare("SELECT * FROM attendances");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public static function getAttendanceWithUser() 
    {
        $db = Conexao::get();
        $query = $db->prepare("SELECT a.*, (SELECT u.name FROM  users u WHERE u.id = a.user_id) as user FROM attendances a");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public static function create($data) {
        try {
            $db = Conexao::get();
            $title = $data['title'];
            $text = $data['text'];
            $user_id = $_SESSION['user_id'];
            $_SESSION["msg"] = true;

            $sql = "INSERT INTO attendances (title, text, user_id) VALUES ('" . $title . "', '" . $text . "', " . $user_id . ");";
            $db->exec($sql);
        } catch(Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
}