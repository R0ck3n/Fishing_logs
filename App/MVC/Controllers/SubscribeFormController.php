<?php

namespace MVC\Controllers;
use MVC\models\dbModel;
use MVC\models\usermodel;

class SubscribeFormController extends dbModel{
    public function subscribe():void {
        $model = new userModel();
        $errors = [];

        try{

            $errors = checkSubscriptionForm();

            if (count($errors) > 0) {
                $_SESSION['errors']= $errors;
                header('Location: /subscribe');

            }else{
                unset($_SESSION['errors']);
                    $model->create([
                        'user-lastname' => $_POST['lastname'],
                        'user-firstname' => $_POST['firstname'],
                        'email' => $_POST['email'],
                        'user-sex' => $_POST['sex'],
                        'user-birthday'=>$_POST['birthday'],
                        'password' => password_hash($_POST['password'], PASSWORD_ARGON2ID)
                    ]);
                    
                    header('Location: /');
                    $_SESSION['user']['lastname']= $_POST['lastname'];
                    $_SESSION['user']['firstname']= $_POST['firstname'];
                    
            }


        }catch(Exeption $e){
            var_dump($e);
        }

    }
}