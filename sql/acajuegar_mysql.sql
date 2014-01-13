-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 13 Janvier 2014 à 19:49
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

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) DEFAULT NULL,
  `categorie_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_CATEGORIE_id_1` (`categorie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `libelle`, `categorie_id`) VALUES
(1, 'historia', NULL),
(2, 'geografia', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `choix`
--

CREATE TABLE IF NOT EXISTS `choix` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) DEFAULT NULL,
  `afficherLibelle` tinyint(1) NOT NULL DEFAULT '0',
  `estReponse` tinyint(1) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_CHOIX_id_QUESTION` (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=61 ;

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

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `categorie_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_QUESTION_id_CATEGORIE` (`categorie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

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

-- --------------------------------------------------------

--
-- Structure de la table `succes`
--

CREATE TABLE IF NOT EXISTS `succes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) DEFAULT NULL,
  `nbQuestion` int(11) DEFAULT NULL,
  `temps` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `succes`
--

INSERT INTO `succes` (`id`, `libelle`, `nbQuestion`, `temps`) VALUES
(2, '¡ Qué genio !', 20, NULL),
(3, 'El importante es participar', 5, 0),
(4, 'Eres un explorador ', 10, 300),
(5, '¡ Qué rapidez !', NULL, 150);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `FK_CATEGORIE_id_1` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `choix`
--
ALTER TABLE `choix`
  ADD CONSTRAINT `FK_CHOIX_id_QUESTION` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`);

--
-- Contraintes pour la table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `FK_QUESTION_id_CATEGORIE` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
