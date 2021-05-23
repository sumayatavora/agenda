-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 30, 2013 at 01:34 AM
-- Server version: 5.5.15
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agenda`
--
DROP DATABASE IF EXISTS `agenda`;
CREATE DATABASE `agenda` DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE `agenda`;

-- --------------------------------------------------------

--
-- Table structure for table `contatos`
--

DROP TABLE IF EXISTS `contatos`;
CREATE TABLE IF NOT EXISTS `contatos` (
  `id_cont` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_swedish_ci DEFAULT NULL,
  `fone` char(10) COLLATE utf8_swedish_ci DEFAULT NULL,
  `email` char(50) COLLATE utf8_swedish_ci DEFAULT NULL,
  `data` date DEFAULT NULL,
  `sexo` enum('m','f') COLLATE utf8_swedish_ci DEFAULT NULL,
  `tipo` char(3) COLLATE utf8_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id_cont`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `contatos`
--

INSERT INTO `contatos` (`id_cont`, `nome`, `fone`, `email`, `data`, `sexo`, `tipo`) VALUES
(1, 'lalé', '1111-1111', 'lala@lala', '2013-01-28', 'f', 'par'),
(2, 'lelé', '2222-2222', 'lele@lele', '2013-01-21', 'm', 'esc'),
(4, 'huguinho', '4444-4444', 'hugo@zinho', '2013-01-07', 'm', 'tra'),
(6, 'zézinho', '258963', 'ze@zinho', '2013-01-30', 'm', 'fam'),
(7, 'luizão', '58582525', 'lu@zinho', '2013-01-30', 'm', 'fam');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usu` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) COLLATE utf8_swedish_ci DEFAULT NULL,
  `senha` char(12) COLLATE utf8_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id_usu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usu`, `usuario`, `senha`) VALUES
(1, 'jose', '123'),
(2, 'maria', '456');
