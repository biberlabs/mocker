<?php
chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$mocker = new \Mocker\Mocker(new \Mocker\Adapter\Mockaroo('----Mockaroo Key-----'));
$mocker->scan(__DIR__ . '/UserEntity');
var_dump($mocker->mockOne());
var_dump($mocker->mockMore(2));

$mocker->scan(__DIR__ . '/AddressEntity');
var_dump($mocker->mockOne());
var_dump($mocker->mockMore(2));