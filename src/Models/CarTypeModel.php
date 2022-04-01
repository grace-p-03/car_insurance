<?php

namespace App\Models;

class CarTypeModel
{
    private $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getCarTypes()
    {
        $query = $this->db->prepare("SELECT `type` FROM `car_type`;");
        $query->execute();
        return $query->fetchAll();
    }
}
