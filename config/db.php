<?php

$_fn=realpath(__DIR__."/..")."/sqlitedb.sqlite";

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'sqlite:'.$_fn,
];
