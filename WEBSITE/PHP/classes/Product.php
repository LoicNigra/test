<?php

/**
 * Created by PhpStorm.
 * User: Loïc
 * Date: 12/04/2017
 * Time: 22:45
 */
class Product
{
    // Alle producten oproepen
    public static function all()
    {
        $statement = Database::getInstance()->prepared('SELECT * FROM Producten');
        $statement->execute();
        $producten = $statement->fetchAll(PDO::FETCH_OBJ);

        return $producten;
    }

    // Enkel aflsankproducten oproepen
    public static function afslank()
    {
        $statement = Database::getInstance()->prepared('SELECT * FROM Producten WHERE type = :afslank');
        $statement->execute([':afslank' => 'afslank']);
        $producten = $statement->fetchAll(PDO::FETCH_OBJ);

        return $producten;
    }

    // Enkel weightgain producten oproepen
    public static function weight()
    {
        $statement = Database::getInstance()->prepared('SELECT * FROM Producten WHERE type = :weight');
        $statement->execute([':weight' => 'weight']);
        $producten = $statement->fetchAll(PDO::FETCH_OBJ);

        return $producten;
    }
    // Enkel Creatine producten oproepen
    public static function creatine()
    {
        $statement = Database::getInstance()->prepared('SELECT * FROM Producten WHERE type = :creatine');
        $statement->execute([':creatine' => 'creatine']);
        $producten = $statement->fetchAll(PDO::FETCH_OBJ);

        return $producten;
    }
    // Searchfunctie
    public static function search($query)
    {
        $statement = Database::getInstance()->prepared('SELECT * FROM Producten WHERE naam LIKE :name');
        $statement->execute([':name' => "%$query%"]);
        $producten = $statement->fetchAll(PDO::FETCH_OBJ);

        return $producten;
    }
    // Random functie van alle producten, met een limiet van 4
    public static function random()
    {
        $statement = Database::getInstance()->prepared('SELECT * FROM Producten ORDER BY RAND() LIMIT 4');
        $statement->execute();
        $producten = $statement->fetchAll(PDO::FETCH_OBJ);

        return $producten;
    }
    // Random functie van al de afslank, met een limiet van 4
    public static function randomAfslank($except)
    {
        $statement = Database::getInstance()->prepared('SELECT * FROM Producten WHERE type =\'afslank\' AND ID <> :id ORDER BY RAND() LIMIT 4');
        $statement->execute([':id' => $except]);
        $producten = $statement->fetchAll(PDO::FETCH_OBJ);

        return $producten;
    }

    // Random functie van al de weightgain , met een limiet van 4
    public static function randomWeight($except)
    {
        $statement = Database::getInstance()->prepared('SELECT * FROM Producten WHERE type =\'weight\' AND ID <> :id ORDER BY RAND() LIMIT 4');
        $statement->execute([':id' => $except]);
        $producten = $statement->fetchAll(PDO::FETCH_OBJ);

        return $producten;
    }
    // Random functie van al de creatine, met een limiet van 4
    public static function randomCreatine($except)
    {
        $statement = Database::getInstance()->prepared('SELECT * FROM Producten WHERE type =\'creatine\' AND ID <> :id ORDER BY RAND() LIMIT 4');
        $statement->execute([':id' => $except]);
        $producten = $statement->fetchAll(PDO::FETCH_OBJ);

        return $producten;
    }
    // Random functie van al de nieuwste producten, met een limiet van 4, Gesorteerd op Hoogste ID. Hoger ID = Nieuwer product
    public static function nieuwste()
    {
        $statement = Database::getInstance()->prepared('SELECT * FROM Producten ORDER BY ID DESC LIMIT 4');
        $statement->execute();
        $producten = $statement->fetchAll(PDO::FETCH_OBJ);

        return $producten;

    }
    // Find Functie
    public static function find($product)
    {
        $statement = Database::getInstance()->prepared('SELECT * FROM Producten WHERE ID = :ID');
        $statement->execute([':ID' => $product]);
        $producten = $statement->fetch(PDO::FETCH_OBJ);

        return $producten;
    }
}


