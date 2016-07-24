<?php

//$_fn=realpath(__DIR__."/..")."/sqlitedb.sqlite";

return [
//    'class' => 'yii\db\Connection',
//    'dsn' => 'sqlite:'.$_fn,
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=ec2-54-243-200-63.compute-1.amazonaws.com;dbname=d1eoqtg8bdgafl',
    'username' => 'olicfdnxffficg',
    'password' => 'kQXyD1Va3AYqTX_MXkGOZnecyD',
    'charset' => 'utf8',
];
