<?php

//det som visas på sidan syns pågrund av att följande är kopplat. 
require ('resources/db.php');
require ('resources/controller.php');
require ('model/model.php');
require ('model/djur.php');

$config = require('resources/config.php');
$db = new Database($config);
$controller = new Controller($db);
$controller->index();

