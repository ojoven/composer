<?php
require 'vendor/autoload.php';

$log = new Monolog\Logger('mylog');
$log->pushHandler(
    new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING)
);
$log->addWarning('Booooh!');