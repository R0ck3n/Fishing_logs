<?php

namespace MVC\Controllers;



class SubscribeController extends DisplayController{
    public function subscribeDisplay():void {
        $this->display('Subscribe',[
            'title' =>'Subscribe',
        ]);
    }
}