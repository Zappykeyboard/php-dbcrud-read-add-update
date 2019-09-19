-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Creato il: Set 19, 2019 alle 16:35
-- Versione del server: 5.7.26
-- Versione PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `PubDB`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `inventario`
--

CREATE TABLE `inventario` (
  `ID` int(10) UNSIGNED NOT NULL,
  `nome_bevanda` varchar(30) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `prezzo` float UNSIGNED NOT NULL,
  `data_di_scadenza` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `inventario`
--

INSERT INTO `inventario` (`ID`, `nome_bevanda`, `marca`, `prezzo`, `data_di_scadenza`) VALUES
(1, 'Birra Raffo', 'Asahi', 2, '2025-09-19'),
(2, 'Coca-cola light', 'Coca-cola Company', 2.5, '2020-10-13'),
(3, 'The al limone', 'San Benedetto', 3, '2020-03-01'),
(4, 'Yougurt da bere', 'Danone', 1.2, '2019-10-01'),
(5, 'Jack Daniel\'s', 'Jack Daniel\'s company', 30, '2030-01-01'),
(6, 'Birra Ichnusa', 'Heineken Italia', 3, '2020-08-08');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `inventario`
--
ALTER TABLE `inventario`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
