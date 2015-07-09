<?php
$CONF = array();
$CONF['db'] = array(
    'connectionString' => 'mysql:host=127.0.0.1;dbname=yiibbs;port=3306',
    'emulatePrepare' => true,
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',
    'tablePrefix' => 'bbs_',
    'schemaCachingDuration' => 3600
);
$CONF['params'] = array(
    'adminEmail'=>'test@gmail.com',
    'mail' => array(
    'noreply' => 'smtp.google.com',
    'smtp' => 'test@gmail.com',
    'password' => 'test',
));
