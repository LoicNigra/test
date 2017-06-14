<?php

/**
 * Created by PhpStorm.
 * User: Loïc
 * Date: 12/04/2017
 * Time: 22:25
 */
class Authenticatie
{
    const AUTH_COOKIE = 'user';

    // Login functie
    public static function login($username, $password) {
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
    public static function isLoggedIn() {
        if (isset($_COOKIE[static::AUTH_COOKIE])) {
            return true;
        }

        return false;
    }
// Bepaalde user
    public static function user() {
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

    // Registreren/Aanmaken van een klant
    public static function register($voornaam, $naam, $email, $postcode, $stad, $adres, $huisnummer, $username, $password) {
        $password = password_hash($password, PASSWORD_DEFAULT);

        $statement = Database::getInstance()->prepared('INSERT INTO users (voornaam, naam, email, postcode, stad, adres, huisnummer, username, password) VALUES (:voornaam, :naam, :email, :postcode, :stad, :adres, :huisnummer, :username, :password)');
        return $statement->execute([':voornaam' => $voornaam, ':naam' => $naam, ':email' => $email, ':postcode' => $postcode, ':stad' => $stad, ':adres' => $adres, ':huisnummer' => $huisnummer, ':username' => $username, ':password' => $password]);
    }
}