<?php
require("vendor/autoload.php");

use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get('/', 'SiteController@index');
Router::get('/cadastrar', 'SiteController@cadastrar');

Router::post('/cadastrar', 'UserController@cadastrar');
Router::start();