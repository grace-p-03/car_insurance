<?php

namespace App\Models;

class QuotesModel
{
    private $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function addNewQuote(string $name, int $carType, int $cover, float $cost): void
    {
        $addQuote = $this->db->prepare("INSERT INTO `quotes` (`customer_name`, `car_type_id`, `cover_id`, `cost`, `accepted`) VALUES (:name, :carType, :coverType, :cost, 0;");
        $addQuote->bindParam(':name', $name);
        $addQuote->bindParam(':carType', $carType);
        $addQuote->bindParam(':coverType', $coverType);
        $addQuote->bindParam(':cost', $cost);
        $addQuote->execute();
    }

    public function acceptQuote(int $id): void
    {
        $acceptQuote = $this->db->prepare("UPDATE `quotes` SET `accepted` = 1 WHERE `id` = :id");
        $acceptQuote->bindParam(':id', $id);
        $acceptQuote->execute();
    }


    public function getAcceptedQuotes(): void
    {
        $unacceptQuote = $this->db->prepare("SELECT `quotes`.`id`, `customer_name`, `car_type`.`type`, `cover_type`.`name`, `cost`, `accepted` FROM `quotes` LEFT JOIN `car_type` ON `quotes`.`car_type_id` = `car_type`.`id` LEFT JOIN `cover_type` ON `quotes`.`cover_id` = `cover_type`.`id` WHERE `accepted` = 0");
        $unacceptQuote->bindParam(':id', $id);
        $unacceptQuote->execute();
    }

    public function getUnacceptedQuotes(): void
    {
        $unacceptQuote = $this->db->prepare("SELECT `quotes`.`id`, `customer_name`, `car_type`.`type`, `cover_type`.`name`, `cost`, `accepted` FROM `quotes` LEFT JOIN `car_type` ON `quotes`.`car_type_id` = `car_type`.`id` LEFT JOIN `cover_type` ON `quotes`.`cover_id` = `cover_type`.`id` WHERE `accepted` = 1");
        $unacceptQuote->bindParam(':id', $id);
        $unacceptQuote->execute();
    }

//    public function getSingleQuote():
//    {
//
//
//    }
}
