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
}