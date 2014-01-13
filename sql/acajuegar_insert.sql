-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 13 Janvier 2014 à 18:10
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `acajuegar`
--
CREATE DATABASE IF NOT EXISTS `acajuegar` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `acajuegar`;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `libelle`, `categorie_id`) VALUES
(1, 'historia', NULL),
(2, 'geografia', NULL);

--
-- Contenu de la table `choix`
--

INSERT INTO `choix` (`id`, `libelle`, `afficherLibelle`, `estReponse`, `question_id`) VALUES
(1, 'bresil', 0, 1, 1),
(2, 'argentina', 0, 0, 1),
(3, 'chili', 0, 1, 1),
(4, 'Cabo de las Antibes', 1, 0, 2),
(5, 'Cabo Horn', 1, 1, 2),
(6, 'Cabo de la Naoa', 1, 0, 2),
(7, 'Argentina', 1, 1, 3),
(8, 'Cuba', 1, 0, 3),
(9, 'Sebastián Piñera', 1, 0, 4),
(10, 'Raul Castro', 1, 0, 4),
(11, 'Cristina Fernandez', 1, 1, 4),
(12, 'Ecuador', 1, 0, 5),
(13, 'Colombia', 1, 1, 5),
(14, 'Venezuela', 1, 0, 5),
(15, 'Panamá', 1, 0, 5),
(16, 'El Salvador', 1, 1, 6),
(17, 'Honduras', 1, 0, 6),
(18, 'Guatemala', 1, 0, 6),
(19, 'El monte McKinley', 1, 0, 7),
(20, 'El volcán Chimborazo', 1, 0, 7),
(21, 'Aconcagua', 1, 1, 7),
(22, 'Feijoada', 1, 1, 8),
(23, 'La sopa de Minas Gerais', 1, 0, 8),
(24, 'Moqueca', 1, 0, 8),
(25, 'Colombia', 0, 0, 9),
(26, 'Cuba', 0, 0, 9),
(27, 'México', 0, 1, 9),
(28, 'El lago titicaca', 1, 1, 10),
(29, 'Lago Uru Uru', 1, 0, 10),
(30, 'Lago Poopó', 1, 0, 10),
(31, 'Bresil', 1, 1, 12),
(32, 'Argentina', 1, 0, 12),
(33, 'Venezuela', 1, 0, 12),
(34, 'Desierto de Atacama', 1, 1, 13),
(35, 'Desierto de Sechura', 1, 0, 13),
(36, 'Patagonia oriental', 1, 0, 13),
(37, 'Colombia', 1, 0, 14),
(38, 'Venezuela', 1, 1, 14),
(39, 'Panamá', 1, 0, 14),
(40, 'El Tango', 1, 1, 16),
(41, 'La salsa', 1, 0, 16),
(42, 'La samba', 1, 0, 16),
(43, 'Inca Lola', 0, 1, 19),
(44, 'TuKola', 0, 0, 19),
(45, 'Kola Real', 0, 0, 19),
(46, 'Hugo Chavez', 1, 0, 20),
(47, 'Augusto Pinochet', 1, 1, 20),
(48, 'Jorge Videla', 1, 0, 20),
(49, 'Cuauhtemoc', 1, 1, 11),
(50, 'Moctezuma II', 1, 0, 11),
(51, 'Itzcoat', 1, 0, 11),
(52, 'Francisco Pizarro', 1, 0, 21),
(53, 'Diego de Almagro', 1, 0, 21),
(54, 'Hernan Cortès', 1, 1, 21),
(55, 'La República Dominicana', 1, 1, 22),
(56, 'Cuba', 1, 0, 22),
(57, 'Nicaragua', 1, 0, 22),
(58, 'Fidel Castro', 1, 0, 23),
(59, 'Augusto Pinochet', 1, 0, 23),
(60, 'Ernesto Guevara', 1, 1, 23);

--
-- Contenu de la table `question`
--

INSERT INTO `question` (`id`, `libelle`, `categorie_id`) VALUES
(1, 'Cuál es la bandera de Brasil', 2),
(2, 'Cómo se llama el Cabo que se situa al Sud del Chili', 2),
(3, 'Cómo se llama el pais de nacimiento del Che (Che Guevara)', 1),
(4, 'Quién es el presidente de Argentina', 2),
(5, 'Dónde se sitúa el río Magdalens', 2),
(6, 'Cuál es el país más pequeño de América Latina', 2),
(7, 'Cuál es el punto más alto en América del Sur', 2),
(8, 'Cuál es el plato nacional de Brasil', 2),
(9, 'Cuál es la bandera de México', 2),
(10, 'Cuál es el lago más grande de Sudamérica y también el más alto del mundo', 2),
(11, 'Qué gobernante azteca llevó el asalto contra los españoles durante la "noche triste" ', 1),
(12, 'En qué país es la Copa del Mundo en 2014', 2),
(13, 'Qué desierto se encuentra en Chile', 2),
(14, 'Donde se situa el Rio Orinoco', 2),
(16, 'Qué danza se originó en Argentina', 2),
(19, 'Cuál es el nombre del refresco local del Perú más popular que Coca-Cola', 2),
(20, 'Quién es el dictador del Chile desde 1973 a 1988', 1),
(21, 'Qué conquistador envió una expedición en 1518 para conquistar México', 1),
(22, 'Qué país Rafael Leonidas Trujillo Molina era el dictador', 1),
(23, 'Sudamericano revolucionario que llevó a los guerrilleros cubanos', 1);

--
-- Contenu de la table `succes`
--

INSERT INTO `succes` (`id`, `libelle`, `nbQuestion`, `temps`) VALUES
(1, 'Importante es participar', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
