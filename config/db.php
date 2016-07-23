<?php

//$_fn=realpath(__DIR__."/..")."/sqlitedb.sqlite";

return [
//    'class' => 'yii\db\Connection',
//    'dsn' => 'sqlite:'.$_fn,
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=localhost;dbname=hobby-dev',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];
