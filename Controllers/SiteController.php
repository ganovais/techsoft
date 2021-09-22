<?php

class SiteController
{
    use ViewTrait;

    public function index() 
    {
        $this->view('site/login/index');
    }

    public function cadastrar()
    {
        $this->view('site/cadastrar/index');
    }

    public function atendimento()
    {
        $user = new User();
        if($user->isLogged()) {
            if($_SESSION['admin']) {
                header("Location: ../admin");
            }
        } else {
            header("Location: ../");
        }

        $this->view('site/atendimento/index');
    }

    public function mensagem() {
        $user = new User();
        if($user->isLogged() == false){
            header("Location: ../");
        }
        if($_SESSION["msg"] == false){
            header("Location: ../");
        }
        $_SESSION["msg"] = false;
        $this->view('site/mensagem_envio');
    }
}