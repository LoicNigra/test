<?php
require 'include.php';


// TODO form met factuur


$producten = array_values((array)json_decode(Form::post('producten')));


class Bestelling
{
    const AUTH_COOKIE = 'user';

    // Login functie
    public static function login($username, $password)
    {
        $statement = Database::getInstance()->prepared('SELECT username, password FROM users WHERE username = :username');
        $statement->execute([':username' => $username]);

        $result = $statement->fetchAll();
        if (sizeof($result) == 0) {
            return false;
        }
        $result = $result[0];

        $isLoggedIn = password_verify($password, $result['password']);

        if ($isLoggedIn) {
            setcookie(static::AUTH_COOKIE, $result['username'], null, '/');
        }

        return $isLoggedIn;
    }

    // Zien als hij ingelogged is
    public static function isLoggedIn()
    {
        if (isset($_COOKIE[static::AUTH_COOKIE])) {
            return true;
        }

        return false;
    }

// Bepaalde user
    public static function user()
    {
        if (Authenticatie::isLoggedIn() == false) {
            return null;
        }

        $statement = Database::getInstance()->prepared('SELECT * FROM users WHERE username = :username');
        $statement->execute([':username' => $_COOKIE[static::AUTH_COOKIE]]);

        return $statement->fetch(PDO::FETCH_OBJ);
    }

    public static function protect()
    {
        if (Authenticatie::isLoggedIn() == false) {
            header('Location: login.php');
        }
    }

    // Registreren/Aanmaken van een bestelling
    public static function registerBestelling($postcode_Factuur, $stad_Factuur, $adres_Factuur, $huisnummer_Factuur, $postcode_Lever, $stad_Lever, $adres_Lever, $huisnummer_Lever, $betaalmethode)
    {


        $statement = Database::getInstance()->prepared('INSERT INTO Bestellingen (postcode_Factuur, stad_Factuur, adres_Factuur, huisnummer_Factuur, postcode_Lever, stad_Lever, adres_Lever, huisnummer_Lever, betaalmethode) VALUES (:postcode_Factuur, :stad_Factuur, :adres_Factuur, :huisnummer_Factuur, :postcode_Lever, :stad_Lever, :adres_Lever, :huisnummer_Lever, :betaalmethode)');
        return $statement->execute([':postcode_Factuur' => $postcode_Factuur, ':stad_Factuur' => $stad_Factuur, ':adres_Factuur' => $adres_Factuur, ':huisnummer_Factuur' => $huisnummer_Factuur, ':postcode_Lever' => $postcode_Lever, ':stad_Lever' => $stad_Lever, ':adres_Lever' => $adres_Lever, ':huisnummer_Lever' => $huisnummer_Lever, 'betaalmethode' => $betaalmethode]);
    }

// Al de gevraagde bestellingen tonen
    public static function showBestellingen()
    {
        if (Authenticatie::user()->admin) {

            $statement = Database::getInstance()->prepared('SELECT * FROM Bestellingen');
            $statement->execute();
            $bestellingen = $statement->fetchAll(PDO::FETCH_OBJ);

            return $bestellingen;
        } else {
            // foutboodschap -> user is geen admin!
            echo '<script>alert("U bent geen admin!")</script>';
        }
    }
}



