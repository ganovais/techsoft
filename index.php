<?php
require("vendor/autoload.php");

use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get('/', 'SiteController@index');
Router::get('/cadastrar', 'SiteController@cadastrar');
Router::get('/atendimento', 'SiteController@atendimento');
Router::get('/mensagem', 'SiteController@mensagem');

Router::post('/cadastrar', 'UserController@cadastrar');
Router::post('/login', 'UserController@login');
Router::post('/atendimento', 'AttendanceController@cadastrar');


Router::get('/logout', 'UserController@logout');

Router::start();