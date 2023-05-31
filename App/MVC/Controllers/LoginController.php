<?php

namespace MVC\Controllers;



class LoginController extends DisplayController{
    public function login():void {
        $this->display('Login',[
            'title' =>'Login',
        ]);
    }
}