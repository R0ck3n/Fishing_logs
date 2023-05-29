<?php

/**
 * Affiche mieu un var dump
 * @param $variable
 */
function debug($variable):void {
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';

}