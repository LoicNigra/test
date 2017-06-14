-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 21, 2017 at 02:23 PM
-- Server version: 5.5.54-0ubuntu0.14.04.1-log
-- PHP Version: 5.6.23-1+deprecated+dontuse+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `WDA053`
--
CREATE DATABASE IF NOT EXISTS `WDA053` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `WDA053`;

-- --------------------------------------------------------

--
-- Table structure for table `Bestellingen`
--

CREATE TABLE IF NOT EXISTS `Bestellingen` (
  `ID` int(11) NOT NULL,
  `postcode_Factuur` int(11) NOT NULL,
  `stad_Factuur` text NOT NULL,
  `adres_Factuur` text NOT NULL,
  `huisnummer_Factuur` text NOT NULL,
  `postcode_Lever` int(11) NOT NULL,
  `stad_Lever` text NOT NULL,
  `adres_Lever` text NOT NULL,
  `huisnummer_Lever` text NOT NULL,
  `betaalmethode` text NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Bestellingen`
--

INSERT INTO `Bestellingen` (`ID`, `postcode_Factuur`, `stad_Factuur`, `adres_Factuur`, `huisnummer_Factuur`, `postcode_Lever`, `stad_Lever`, `adres_Lever`, `huisnummer_Lever`, `betaalmethode`) VALUES
(1, 0, '', '', '', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `Producten`
--

CREATE TABLE IF NOT EXISTS `Producten` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `naam` text NOT NULL,
  `prijs` double NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `type` text NOT NULL,
  `rating` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`),
  KEY `ID_2` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Producten`
--

INSERT INTO `Producten` (`ID`, `naam`, `prijs`, `description`, `image`, `type`, `rating`) VALUES
(1, 'CellTech', 17.5, '- HPLC-gecertificeerde en Creatine\n- 5 gram Creatine per scoop\n- 2000mg Taurine per dosering\n- 2000mg BCAA per dosering\n- Postworkout Creatine\n- Hardcore Bodybuilding! ', '/Creatine/CellTech.jpg', 'creatine', 0),
(2, 'Cocktail', 19.5, '- Niet te evenaren! Veruit de leider!\r\n- De ultieme spiergroeishake; alles in 1!\r\n- Alleen de allerbeste eiwitten, 26 gram per shake!', '/Creatine/Cocktail.jpg', 'creatine', 0),
(3, 'Creapure', 19.5, '- Heerlijk fris en tropische smaak !\r\n- De garantie voor zuivere creatine die echt werkt\r\n- De beste keus\r\n- Voor meer kracht bij explosieve krachtingspanningen', '/Creatine/CreaPure.jpg', 'creatine', 0),
(4, 'CreaUltra', 16.5, '- Alles wordt opname in het lichaam\r\n- Creatine voor meer kracht bij explosieve krachtinspanningen\r\n- Creatine, bij een verhoogde behoefte bij sport\r\n- Ultra geconcentreerd', '/Creatine/CreatineUltra.jpg', 'creatine', 0),
(5, 'Creatine', 16.5, '- Neem 3 lekkere Tasty Tabs per dag\r\n- De meest zuivere creatine met de beste werking\r\n- Gepatenteerde en gegarandeerde kwaliteit\r\n- Voor meer kracht bij explosieve krachtingspanningen \r\n', '/Creatine/Creatine.jpg', 'creatine', 0),
(6, 'CreaXtreme', 21.9, '- #1 snellere en sterkere resultaten\r\n- Premium creatine voor een sensationele prijs!\r\n- Maar liefst 75 doseringen\r\n- Voor meer kracht\r\n- Verbetert de prestaties\r\n- Stimuleert (vetvrije) spiermassa', '/Creatine/CreaXtreme.jpg', 'creatine', 0),
(7, 'Fitness Meal', 29.95, '- Geef jouw spieren de powermeal!\r\n- 25 gram eiwitten per shake!\r\n- Alleen de beste eiwitten in 1 product!\r\n- Pure complexe koolhydraten\r\n- Perfect voor sport en spieren\r\n- Hoogwaardige eiwitten', '/weight/FitnessMeal.jpg', 'weight', 0),
(8, 'Mass Perfection', 19.95, '- Bomvol vitamines en bouwstoffen\r\n- Ongeevenaard in de opbouw van massa\r\n- Elke shake laat je groeien!\r\n- Pure kwaliteit en dat merk je\r\n- De 4 allerbeste koolhydraten\r\n- Vrijwel vrij van suikers', '/weight/MassPerfection.jpg', 'weight', 0),
(9, 'Mutant Mass', 59.9, '- Gemiddelde spiermassa toename 3.7kg!\r\n- 92% rapporteerde toename in borst- en biceps omvang\r\n- 92% ervaarde meer lichaamsenergie\r\n- 87% voelde strakkere en sterkere spieren', '/weight/MutantMass.jpg', 'weight', 0),
(10, 'Sport Breakfast', 39.9, '- Beste ontbijt voor de sporters !\r\n- Zuiver de allerbeste eiwitten en koolhydraten\r\n- Bevat Omega-3 vetzuren\r\n- 0 kunstmatige zoet-, of smaakstof\r\n- 0 kunstmatige kleurstoffen, 0 conserveermiddel', '/weight/SportBreakfast.jpg', 'weight', 0),
(11, 'Perfect Muscle', 39.9, '- Kwalitatief op een hogere klasse\r\n- Pure Rice Powder AND Proteins!\r\n- #1 MASSA Gainer voor elke bodybuilder\r\n- 100% de beste eiwitten! Extreem zuiver en effectief\r\n- 100% de beste complexe koolhydraten!', '/weight/PerfectMuscle.jpg', 'weight', 0),
(12, 'True Mass', 69.9, '- Maltodextrine neemt zeer snel op\r\n- Whey Eiwit Concentraat voor goede opname\r\n- Wei Eiwit Isolaat voor snelle opname, geen vet of lactose\r\n- Zonnebloem Olie is rijk aan Omega vetzuren', '/weight/TrueMass.jpg', 'weight', 0),
(13, '24h Burner', 15.5, '-Maximaal werkzame totaalformule\r\n-Heerlijk Feel good gevoel! \r\n-Maandverpakking \r\n-1 tablet per dag \r\n-Vlak innemen voor de inspanning \r\n-Een beter prestatievermogen \r\n-Voor zowel hij als zij \r\n', '/Afslank/24h.jpg', 'afslank', 0),
(14, 'GreenTea', 14.9, '- 2 capsules per dag is voldoende \r\n- 250mg E G C G per capsule ! \r\n- Topkwaliteit - extreem hoge zuiverheid! \r\n- met de frisse smaak van muntthee ', '/Afslank/GreenTea.jpg', 'afslank', 0),
(15, 'Smart Protein', 19.9, '- Hoogwaardig eiwit met toegevoegde vitamines en mineralen \r\n- Eiwitten ondersteunen spierherstel na training/sporten \r\n- Eiwitten dragen bij tot de instandhouding van spiermassa \r\n- Slechts 93 Kcal per shake ', '/Afslank/smartprotein.jpg', 'afslank', 0),
(16, 'Matrix', 34.9, '- Revolutionair totaal supplement! \r\n- Unieke totaal formule \r\n- Superieure ingredienten en resultaten \r\n- Effectief! Altijd voor iedereen', '/Afslank/Matrix.jpg', 'afslank', 0),
(17, 'Perfect Burn', 11.9, '- De hele dag 200% meer energie ! \r\n- Werkt zeer snel! \r\n- 8 uur werking per pil! \r\n- 1 pil per dag \r\n- 2 maanden voorraad \r\n- Euforisch gevoel ', '/Afslank/PerfectBurn.jpg', 'afslank', 0),
(18, 'Ripped', 15.9, '- Nieuwste generatie van burner ! \r\n- Slechts 1 capsule per dag \r\n- Hardcore! \r\n- 2 maanden verpakking \r\n- Voor de aflijning die iedereen wilt! #1 product op dit gebied! ', '/Afslank/Ripped.jpg', 'afslank', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bestellingen_producten`
--

CREATE TABLE IF NOT EXISTS `bestellingen_producten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bestelling_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bestellingen_producten`
--

INSERT INTO `bestellingen_producten` (`id`, `bestelling_id`, `product_id`) VALUES
(1, 1, 1),
(2, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `voornaam` text NOT NULL,
  `naam` text NOT NULL,
  `email` text NOT NULL,
  `postcode` int(11) NOT NULL,
  `stad` text NOT NULL,
  `adres` text NOT NULL,
  `huisnummer` text NOT NULL,
  `admin` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `voornaam`, `naam`, `email`, `postcode`, `stad`, `adres`, `huisnummer`, `admin`) VALUES
(1, 'loic', '$2y$10$7/1fRSR6ZRklkC/axi3Bt.uRlhd6.ZMaRj2I8Z4kaZ4Y.frA6KLsy', 'Nigra', 'Loic', 'loic.nigra@student.ehb.be', 1800, 'Peutie', 'Aarschotsestraat', '82', 1),
(2, 'NeleDB', '$2y$10$E8jvlDCZ3w0G0cM2FXbOf.jqHwNCfLqDPyXUGME9p/cs0qYLHz5u6', 'Nele', 'De Backer', 'NeleDB@kvzp.be', 1800, 'Vilvoorde', 'Teststraat', '6', 0),
(3, 'Bernd', '$2y$10$DPfrR6IS5Wvh75aG5.8yke0a5wr1BD74E6t5.1rG6Vas6.TglnGLG', 'Bernd', 'Wethmar', 'ehb@ehb.be', 1160, 'Oudergem', 'test', '85', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
