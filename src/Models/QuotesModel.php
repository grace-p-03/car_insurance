<?php

namespace App\Models;

class QuotesModel
{
    private $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function addNewQuote(string $name, int $carType, int $cover, float $cost) : void {
        $addQuote = $this->db->prepare("INSERT INTO `quotes` (`customer_name`, `car_type_id`, `cover_id`, `cost`, `accepted`) VALUES (:name, :carType, :coverType, :cost, 0;");
        $addQuote->bindParam(':name', $name);
        $addQuote->bindParam(':carType', $carType);
        $addQuote->bindParam(':coverType', $coverType);
        $addQuote->bindParam(':cost', $cost);
        $addQuote->execute();

    }

    public function acceptQuote() : void {
        query = $this->db->prepare("UPDATE `todos` SET `completed` = 1 WHERE `id` = :id");
        $query->bindParam(':id', $id);
        $query->execute();
    }



    public function getUnacceptedQuotes()
    {

    }

}