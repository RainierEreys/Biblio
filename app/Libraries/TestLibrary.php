<?php

namespace App\Libraries;

class TestLibrary{

    public $db;

    public function _construct(){
        $this->db = \Config\Database::connect();
    }
    public function getData(){
        $query = $this->db->get("usuario")->getResultArray();

        echo $query;
    }
}