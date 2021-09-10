<?php

class SiteController
{
    use ViewTrait;

    public function index() 
    {
        $this->view('site/login/index');
    }
}