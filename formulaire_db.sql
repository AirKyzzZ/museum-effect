-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 17, 2024 at 06:48 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formulaire_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `titre` varchar(255) NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`titre`, `contenu`, `image`) VALUES
('mussée d\'aquitaine', 'Ceci est le contenu de mon premier article. Il est super bien complet et en plus je suis super fatigué aled j\'en peux mon code marche pas je vais rater ma vie en plus je suis malade je pourrai rester chez moi a jouer a elden ring par pitié', 'image1.jpg'),
('test', 'Voici un autre contenu test pour un autre article.', 'image2.png'),
('les-objets-phares-du-musee', 'Découvrez les oeuvres et objets phares de la collection du musée d\'Aquitaine.', 'image1.jpg'),
('acquisitions', 'Installation sonore Guy Régis junior - Photo musée d\'Aquitaine\nLes voix de la traversée\nPendule au matelot, photo L. Gauthier\nPendule au matelot\nLa bulle de savon (détail), photo L. Gauthier\nLa bulle de savon\nAcquisition du musée en 2021\n\nStatue de femme ', 'image2.jpg'),
('contacter-un-ou-une-chargee-de-collections', 'Demandes de prêts\n\nAttention ! Les équipes du musée d\'Aquitaine sont actuellement mobilisées par d\'importants travaux. Aucun prêt n\'est consenti jusqu\'au 1er septembre 2025. Vos éventuelles demandes de prêts et de dépôts seront étudiées à partir de juin 2', 'image3.jpg'),
('histoire-du-musee-aquitaine', 'Le musée d\'Aquitaine a ouvert ses portes au public le 9 janvier 1987, mais l\'histoire de ses collections est bien plus ancienne !\n\nDécouvrez les temps forts de l\'histoire du musée, depuis le projet de Georges-Henri Rivière jusqu\'aux chantiers de rénovatio', 'image4.jpg'),
('centre-national-jean-moulin', 'Centre national de la Résistance, des Forces Françaises Libres et de la Déportation\nCréé en 1967, à l’instigation de Jacques Chaban-Delmas, Compagnon de la Libération, Délégué Militaire National du Général de Gaulle en France occupée, le Centre National J', 'image5.jpg'),
('Bienvenue-dans-la-boutique', 'La boutique du musée propose un large choix d\'ouvrages, catalogues d\'expositions, affiches, cartes postales et cadeaux pour les grands et les petits. \r\nLa librairie Idées cadeaux Offrez un tirage photographique Félix Arnaudin. \r\nMusée ouvert du mardi au d', 'images/Boutique-Bienvenue.jpg'),
('Idées-cadeaux', 'Voici quelques modèles présents dans notre boutique ! Pour plus d\'envies, nous vous accueillons sur les heures d\'ouverture du musée. Vous pouvez également nous contacter pour en savoir plus : boutique.musaq@mairie-bordeaux.fr.', ''),
('Librairie', '• Catalogue d\'exposition - Vivre et mourir en Égypte, d\'Alexandre le Grand à Cléopâtre \r\nLire la suite \r\nMusée d\'Aquitaine : 400 000 ans d\'histoire(s) \r\nLire la suite \r\nBordeaux au XVIIIe siècle, le commerce atlantique et l\'esclavage \r\nLire la suite \r\nCat', ''),
('Tirage-Felix-Arnaudin', 'Suite à l\'exposition « Félix Arnaudin, le guetteur mélancolique » présentée en avril 2015, la boutique vous propose des tirages photographiques en noir et blanc d\'après les plaques d\'Arnaudin. \r\nLes tirages photographiques sont réalisés uniquement sur com', ''),
('exposition-photographique-28-aout-1944-libres', 'Jusqu\'au 15 avril 2025. Exposition présentée sur la façade du Centre national Jean Moulin, dans le cadre de 80 ans de la Libération de Bordeaux.\r\n\r\nDepuis le 28 août, place Jean-Moulin et rue Vital-Carles, les façades du Centre national Jean Moulin s’orne', 'image1.jpg'),
('le-parcours-400-000-ans-dhistoires', 'Grâce à la richesse et à la variété de ses collections, le musée d\'Aquitaine invite le visiteur à partir à la découverte de l\'histoire régionale, de la préhistoire à l\'époque contemporaine.', 'image2.jpg'),
('expo-virtuelle-destinees-juives-bordeaux-durant-la-seconde-guerre-mondiale', 'Explorer l\'exposition \"Destinées juives\" ...\r\n\r\n[HISTOIRE JUIVE]', 'image3.jpg'),
('musee-virtuel-epigraphie', 'Le musée d\'Aquitaine vous présente son musée virtuel d\'épigraphie ...\r\n\r\n[ARCHÉOLOGIE]', 'image4.jpg'),
('archives-des-expositions-temporaires', 'Expositions 2024 ...\r\n[ARCHIVES]', 'image5.jpg'),
('Agenda', 'Ciné-débat | Derrière le soleil 12/01/2025 11:00 Visite | Bordeaux dans la Seconde Guerre mondiale 15/01/2025 14:15 Visite | Bordeaux dans la Seconde Guerre mondiale 22/01/2025 14:15 Conférence | Vivre en exil en France 23/01/2025 16:00 Conférence | Accue', ''),
('Feuilleter les nouveaux programmes', 'Consultez la programmation du musée d\'Aquitaine et partez aussi à la découverte du patrimoine bordelais et de l\'histoire de la ville avec les Balades Urbaines proposées par Bordeaux Patrimoine Mondial. Ces programmes peuvent aussi vous être adressés par c', ''),
('Accueil des groupes', 'Fermeture prochaine du musée pour travaux, à compter du 4 novembre 2024. En savoir plus. La réservation est obligatoire pour tous les groupes (mini 10 pers, max 30 pers). Les réservations pour les groupes se feront exclusivement par mail : service.mediati', ''),
('Relais et publics du champ social', 'Fermeture prochaine du musée pour travaux, à compter du 4 novembre 2024. En savoir plus. Vous êtes éducateurs, formateurs, animateurs, responsables d\'associations, acteurs du champ social ou médico-social ? Le musée d\'Aquitaine s\'engage à vos côtés pour f', ''),
('Visiteurs en situation de handicap', 'Accessibilité du musée. Consultez le registre d\'accessibilité du musée. L\'accès au musée et à ses expositions est libre et gratuit pour les visiteurs en situation de handicap et leur accompagnateur. Plusieurs dispositifs sont proposés pour faciliter l\'acc', ''),
('S\'amuser au musée', '• Vacances de la Toussaint 2024 Chasse au trésor Escape game / Les voyageurs du temps Tous les dimanches ! Les livrets jeux et livrets découvertes Un ensemble de livrets pour visiter en s\'amusant !', ''),
('Vous êtes guide-conférencier', 'Vous êtes guide-conférencier et vous souhaitez organiser une visite et / ou un atelier, au musée d\'Aquitaine, avec un groupe de personnes ? Le musée peut vous accueillir dans les espaces d\'exposition de votre choix, de la Préhistoire au XXIe siècle.', ''),
('Bibliothèque', 'Le musée et sa bibliothèque seront fermés pour travaux, à compter du 4 novembre 2024. En savoir plus. La bibliothèque du musée d\'Aquitaine est ouverte du mardi au vendredi, dans la limite des places disponibles.', ''),
('Activités scolaires', 'Retrouvez ici toutes les offres à destination des scolaires, proposées par le service de médiation du musée d\'Aquitaine et le service d\'animation de l\'architecture et du patrimoine de Bordeaux Patrimoine Mondial.', ''),
('Le musée dans la classe', 'Espace ressources enseignants Pour préparer une séquence pédagogique / une visite au musée, autour des collections du musée et du Centre Jean Moulin, découvrez toutes nos ressources disponibles.', ''),
('Bienvenue dans la boutique', 'La boutique du musée propose un large choix d\'ouvrages, catalogues d\'expositions, affiches, cartes postales et cadeaux pour les grands et les petits.', ''),
('Idées cadeaux', 'Voici quelques modèles présents dans notre boutique ! Pour plus d\'envies, nous vous accueillons sur les heures d\'ouverture du musée.', ''),
('Librairie', 'Catalogue d\'exposition - Vivre et mourir en Égypte, d\'Alexandre le Grand à Cléopâtre. Musée d\'Aquitaine : 400 000 ans d\'histoires(s).', ''),
('Tirage Félix Arnaudin', 'Suite à l\'exposition « Félix Arnaudin, le guetteur mélancolique » présentée en avril 2015, la boutique vous propose des tirages photographiques en noir et blanc d\'après les plaques d\'Arnaudin.', ''),
('Le musée d\'hier à aujourd\'hui', 'Le musée d\'Aquitaine a ouvert ses portes au public le 9 janvier 1987, mais l\'histoire de ses collections est bien plus ancienne ! \r\n\r\nDécouvrez les temps forts de l\'histoire du musée, depuis le projet de Georges-Henri Rivière jusqu\'aux chantiers de rénova', '');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `age` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date_envoi` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `age`, `email`, `message`, `date_envoi`) VALUES
(1, 'Mansiet', 'Maxime', 18, 'test.mael@test.fr', 'j&#039;aime pas les agrumes', '2024-11-19 08:37:03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
