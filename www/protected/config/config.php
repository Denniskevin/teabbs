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
    'adminEmail'=>'meilunzhi@gmail.com',
    'mail' => array(
    'noreply' => 'smtp.google.com',
    'smtp' => 'meilunzhi@gmail.com',
    'password' => 'stxwwxfn9828',
));
