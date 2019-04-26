<?php

require_once '../bootloader.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$app = new \App\App();
$user = new \Core\User\User();
$user->setAge(11);
$user->setEmail('antanas@gmail.com');
$user->setFullName('pizdabol von Pizdabolovich');
$user->setGender(\Core\User\User::GENDER_MALE);
$user->setIsActive(true);
$user->setAccountType(\Core\User\User::ACCOUNT_TYPE_USER);
$user->setOrientation(\Core\User\User::ORIENTATION_STRAIGHT);
$user->setPassword('zajabys');
$user->setPhoto('nofoto');
App\App::$user_repo->insert($user);