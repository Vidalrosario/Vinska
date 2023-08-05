-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 05, 2023 at 05:58 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_vinska`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacto`
--

DROP TABLE IF EXISTS `contacto`;
CREATE TABLE IF NOT EXISTS `contacto` (
  `id_contacto` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(150) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Telefono` int NOT NULL,
  `Comentario` varchar(500) NOT NULL,
  PRIMARY KEY (`id_contacto`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `Nombre`, `Email`, `Telefono`, `Comentario`) VALUES
(1, 'John', 'john3@gmail.com', 809, 'hola');

-- --------------------------------------------------------

--
-- Table structure for table `cotizacion`
--

DROP TABLE IF EXISTS `cotizacion`;
CREATE TABLE IF NOT EXISTS `cotizacion` (
  `Id_cotización` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(155) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Telefono` int NOT NULL,
  `Preferencia` varchar(50) NOT NULL,
  `Fecha` date NOT NULL,
  `Detalles` text NOT NULL,
  PRIMARY KEY (`Id_cotización`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `cotizacion`
--

INSERT INTO `cotizacion` (`Id_cotización`, `Nombre`, `Email`, `Telefono`, `Preferencia`, `Fecha`, `Detalles`) VALUES
(1, 'Aurelio', 'aurelio@gmail.com', 809, 'Asesoría', '2023-02-02', 'hola');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
