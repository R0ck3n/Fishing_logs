<?php

namespace MVC\Controllers;
use MVC\models\dbModel;
use MVC\models\usermodel;

class SubscribeFormController extends dbModel{
    public function subscribe():void {
        $model = new userModel();
        if($_POST['password']===$_POST['passwordCheck']){
            $model->create([
                'user-lastname' => $_POST['lastname'],
                'user-firstname' => $_POST['firstname'],
                'email' => $_POST['email'],
                'user-sex' => $_POST['sex'],
                'user-birthday'=>$_POST['birthday'],
                'password' => password_hash($_POST['password'], PASSWORD_ARGON2ID)
            ]);
            header('Location: /');
        }
    }
}