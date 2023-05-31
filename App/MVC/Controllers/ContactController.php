<?php

namespace MVC\Controllers;



class ContactController extends DisplayController{
    public function contact():void {
        $this->display('Contact',[
            'title' =>'Contact',
        ]);
    }
}