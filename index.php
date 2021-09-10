<?php
require("vendor/autoload.php");

use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get('/', 'SiteController@index');

Router::start();