<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

require_once("./helpers/pecee.php");

class AttendanceController
{
    public function getWithUser()
    {
        return json_encode([
            'error' => false,
            'attendances' => Attendance::getAttendanceWithUser(),
        ]);
    }

    public function cadastrar()
    {
        $user = new User();
        if($user->isLogged() == false) {
            return json_encode([
                'message' => 'usuário não está logado',
                'error' => true,
            ]);
        }

        $data = input()->all();
        
        // $this->sendEmail($data);

        return json_encode([
            'message' => 'Atendimento registrado com sucesso!',
            'error' => false,
            'attendance' => Attendance::create($data)
        ]);
    }

    public function sendEmail($data)
    {
        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = false;
            $mail->isSMTP(); 
            $mail->Host       = 'smtp.gmail.com'; 
            $mail->SMTPAuth   = true;
            $mail->Username   = 'seu_email@example.com'; 
            $mail->Password   = 'suasenha'; 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            $title = $data['title'];
            $text = $data['text'];

            $mail->setFrom('seu_email@example.com'); 
            $mail->addAddress('para_quem@example.com'); 

            $mail->isHTML(true);
            $mail->Subject = 'Atendimento via Site recebido';
            $mail->Body    = '<strong>Assunto: </strong>' . $title . '<br><strong>Mensagem: </strong>' . $text;

            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}