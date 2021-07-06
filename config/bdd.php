<?php

$pdo = new PDO('mysql:host=localhost;dbname=stunejoke', 'joke', 'password', [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
