<?php

namespace MVC\models;

use DB\Connection;

abstract class dbModel
{
    //se connecte a la base de donnée en fonction des paramètres du fichier de configuration (config/database.php)
    protected Connection $db;
    
    public function __construct()
    {
        $config = require 'App/DB/DBConfig.php';
        $this->db = new Connection($config);
    }
}