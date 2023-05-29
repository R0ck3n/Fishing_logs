<?php

namespace Controllers;



class HomeController extends DisplayController{
    public function index():void {
        $this->display('Acceuil',[
            'title' =>'Accueil',
        ]);
    }
}