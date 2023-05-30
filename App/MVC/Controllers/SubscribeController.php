<?php

namespace Controllers;



class SubscribeController extends DisplayController{
    public function subscribe():void {
        $this->display('Subscribe',[
            'title' =>'Subscribe',
        ]);
    }
}