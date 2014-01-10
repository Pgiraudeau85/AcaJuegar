SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

USE `acajuegar`;

INSERT INTO `categorie` (`id`, `libelle`, `categorie_id`) VALUES
(1, 'historia', NULL),
(2, 'geografia', NULL);

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
(11, 'Cristina Fernandez', 1, 1, 4);

INSERT INTO `question` (`id`, `libelle`, `categorie_id`) VALUES
(1, 'Cuál es la bandera de Brasil', 2),
(2, 'Como se llama el Cabo que se situa al Sud del Chili', 2),
(3, 'Como se llama el pais de nacimiento del Che (Che Guevara)', 1),
(4, 'Quién es el presidente de Argentina', 2);

INSERT INTO `succes` (`id`, `libelle`, `nbQuestion`, `temps`) VALUES
(1, 'Importante es participar', 1, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
