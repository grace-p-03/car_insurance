<?php

namespace App\Models;

class CoverTypeModel
{
    private $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getCoverTypes()
    {
        $query = $this->db->prepare("SELECT `name` FROM `cover_type`;");
        $query->execute();
        return $query->fetchAll();
    }
}