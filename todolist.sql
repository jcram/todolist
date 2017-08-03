-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 03/08/2017 às 00:07
-- Versão do servidor: 5.6.31-0ubuntu0.15.10.1
-- Versão do PHP: 5.6.11-1ubuntu3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `todolist`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_tarefa`
--

CREATE TABLE IF NOT EXISTS `tb_tarefa` (
  `id_tarefa` int(2) NOT NULL,
  `desc_tarefa` varchar(50) NOT NULL,
  `flg_feito` char(1) NOT NULL,
  `desc_prioridade` char(1) NOT NULL,
  `dt_inclusao` date NOT NULL,
  `dt_prev_concl` date NOT NULL,
  `obs_tarefa` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

