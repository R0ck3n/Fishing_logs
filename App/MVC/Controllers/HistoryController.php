<?php

namespace Controllers;



class HistoryController extends DisplayController{
    public function history():void {
        $this->display('Apropos',[
            'title' =>'history',
        ]);
    }
}