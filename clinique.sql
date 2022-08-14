-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 12 août 2021 à 16:51
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `clinique`
--

-- --------------------------------------------------------

--
-- Structure de la table `diagnostic`
--

DROP TABLE IF EXISTS `diagnostic`;
CREATE TABLE IF NOT EXISTS `diagnostic` (
  `id_diag` int NOT NULL AUTO_INCREMENT,
  `desc_diag` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `date_diag` date NOT NULL,
  PRIMARY KEY (`id_diag`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Structure de la table `dossier`
--

DROP TABLE IF EXISTS `dossier`;
CREATE TABLE IF NOT EXISTS `dossier` (
  `id_dos` int NOT NULL AUTO_INCREMENT,
  `date_dos` date NOT NULL,
  `matriculep` int NOT NULL,
  `id_diag` int NOT NULL,
  `id_ord` int NOT NULL,
  `date_rv` date NOT NULL,
  PRIMARY KEY (`id_dos`),
  KEY `matriculep` (`matriculep`),
  KEY `id_ord` (`id_ord`),
  KEY `id_diag` (`id_diag`),
  KEY `date_rv` (`date_rv`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

DROP TABLE IF EXISTS `employe`;
CREATE TABLE IF NOT EXISTS `employe` (
  `id_emp` int NOT NULL AUTO_INCREMENT,
  `prenom_emp` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `nom_emp` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `adr_emp` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `numtel_emp` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `cni` int NOT NULL,
  `age` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `fonc_emp` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id_emp`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`id_emp`, `prenom_emp`, `nom_emp`, `adr_emp`, `numtel_emp`, `cni`, `age`, `fonc_emp`) VALUES
(1, 'khouge', 'niang', 'kounoune', '77458922', 50000, '25ans', 'infirmiere'),
(2, 'fatou', 'mbengue', 'rufisque', '78965231', 150000, '22ans', 'assistante'),
(3, 'astouchou', 'Samb', 'Mbour', '784208612', 45000, '18', 'infirmiere'),
(4, 'laakh', 'mbaye', 'diamcity', '778541216', 125000, '10', 'infirmier'),
(5, 'babacar', 'sene', 'diamniadio', '774125698', 300000, '25', 'menage'),
(6, 'mbaye', 'faye', 'diamcity', '789651230', 75000, '7ans', 'infirmier'),
(7, 'fallou', 'diagne', 'diamniadio', '776464485', 80000, '26 ans', 'infirmier');

-- --------------------------------------------------------

--
-- Structure de la table `maladie`
--

DROP TABLE IF EXISTS `maladie`;
CREATE TABLE IF NOT EXISTS `maladie` (
  `nom_mal` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`nom_mal`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `maladie`
--

INSERT INTO `maladie` (`nom_mal`) VALUES
('arthrose'),
('babacar'),
('babs'),
('cancer'),
('covid19'),
('diabete'),
('fievre jaune'),
('gale'),
('grippe'),
('hypertension'),
('marasme'),
('ndiaye'),
('nerf_sciatique'),
('niambale'),
('paludisme'),
('polio'),
('sida'),
('sunisite'),
('typhoite'),
('waga');

-- --------------------------------------------------------

--
-- Structure de la table `ordonnance`
--

DROP TABLE IF EXISTS `ordonnance`;
CREATE TABLE IF NOT EXISTS `ordonnance` (
  `id_ord` int NOT NULL AUTO_INCREMENT,
  `diagnostic` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `desc_ord` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `date_ord` date NOT NULL,
  `matriculep` int NOT NULL,
  PRIMARY KEY (`id_ord`),
  KEY `matriculep` (`matriculep`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `ordonnance`
--

INSERT INTO `ordonnance` (`id_ord`, `diagnostic`, `desc_ord`, `date_ord`, `matriculep`) VALUES
(1, 'Cholera', 'paracetamol', '2021-05-17', 1),
(2, 'sida', 'effaralgan\r\ndoliprane', '2021-05-20', 5),
(3, 'tetanos', 'CA-C1000', '2021-05-31', 1),
(4, 'access palustre', 'dentifrice\r\nparacetamol\r\ndoliprane\r\n', '2021-05-22', 1),
(5, 'cancer', 'lahat mbaye\r\n\r\nkhoudia niang\r\n\r\nmichelle tendeng\r\n\r\nlamp fam\r\n\r\niks\r\n\r\nbabs\r\n\r\nbach\r\n\r\nyumyum\r\n\r\n\r\n', '2021-05-21', 2),
(6, 'diabete', 'lahat mbaye\r\n\r\nkhoudia niang\r\n\r\nmichelle tendeng\r\n\r\nlamp fam\r\n\r\niks\r\n\r\nbabs\r\n\r\nbach\r\n\r\nyumyum\r\n\r\n\r\n', '2021-05-21', 1),
(17, 'toux', 'coumba', '2021-05-18', 6),
(16, 'covid', 'khoudia', '2021-05-14', 1),
(15, 'polio', 'aminata youm', '2021-05-30', 4),
(14, 'cancer col de l\'uterus', 'riffo rif', '2021-05-28', 7),
(18, 'cancer saint', 'rjtergrj', '2021-05-10', 2),
(19, 'arthrose', 'kyfghhzkjhhfhzh', '2021-05-10', 10),
(20, 'mboro', 'vibe/darkness/zou', '2021-05-21', 4),
(21, 'cholera', 'ca c100', '2021-06-09', 1),
(22, 'diabete', 'doliprane / effaralgan / ca c100\r\n', '2021-06-09', 1),
(23, 'cholera', 'doliprqne\r\n', '2021-06-09', 11),
(24, 'sida', 'cetamil', '2021-06-09', 11),
(25, 'sida', 'paracetamol', '2021-06-28', 12),
(26, 'cholera', 'imbecile/colochard/chochon/defeant/fou/dingue/^paracetamaol/effaralgan/doliprane/ibuprofene/ca c100', '2021-06-30', 13),
(27, 'diabete', 'paracetamol', '2021-07-01', 14);

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `matriculep` int NOT NULL AUTO_INCREMENT,
  `prenom` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `nom` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `adresse` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `numtel` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `age` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `sexep` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`matriculep`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`matriculep`, `prenom`, `nom`, `adresse`, `numtel`, `age`, `sexep`) VALUES
(1, 'oumar', 'thiombane', 'ouakam', '786351787', '233ans', 'Masculin'),
(2, 'aminayo', 'yumyum', 'ngapcity', '774546611', '7ans', 'Feminin'),
(3, 'ibrahima', 'Thiombane', 'diamniadio', '6564699646', '23', 'Masculin'),
(4, 'ibrahima', 'Thiombane', 'diamniadio', '6564699646', '23', 'Masculin'),
(5, 'Oumar', 'niang', 'Mboure', '54678776664', '25 ans', 'Masculin'),
(6, 'ibou', 'Ndiaye', 'diam', '5499898', '26 ans', 'Masculin'),
(7, 'ibrahima', 'Ndiaye', 'diamniadio', '5499898', '23 ans', 'Masculin'),
(8, 'pape', 'fam', 'keur massar', '784125623', '25', 'Masculin'),
(9, 'khady', 'thiam', 'diamniadio', '784512548', '20ans', 'Feminin'),
(10, 'riffo', 'ndiaye', 'Mbour', '7845556566', '35ans', 'Masculin'),
(11, 'fff', 'kkkk', 'Ouakam', '155999999', '25 ans', 'Masculin'),
(12, 'mamadou', 'thiam', 'Ouakam', '780142178', '24ans', 'Masculin'),
(13, 'niokhor', 'diouf', 'Ouakam', '784521423', '25 ans', 'Feminin'),
(14, 'charlotte', 'mendy', 'Mbour', '78451296', '22ans', 'Feminin');

-- --------------------------------------------------------

--
-- Structure de la table `pharmacie`
--

DROP TABLE IF EXISTS `pharmacie`;
CREATE TABLE IF NOT EXISTS `pharmacie` (
  `nom_medic` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `quantite` int NOT NULL,
  `prix` int NOT NULL,
  `historique` int NOT NULL,
  PRIMARY KEY (`nom_medic`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `pharmacie`
--

INSERT INTO `pharmacie` (`nom_medic`, `quantite`, `prix`, `historique`) VALUES
('cetamil', 2, 1000, 13),
('effaralgan', 300, 3000, 775),
('ca-c1000', 180, 1250, 10),
('doliprane', 185, 2154, 20),
('pracetamol', 20, 1890, 100),
('biofar', 60, 3000, 0),
('advil', 95, 500, 0),
('laticoldd', 35, 1350, 0),
('panadol', 150, 1520, 0),
('neutrocold', 850, 2460, 0),
('celestamine', 140, 3000, 10),
('clamoxyl', 25, 3000, 0),
('ibex', 140, 1500, 10),
('santex', 33, 1245, 12);

-- --------------------------------------------------------

--
-- Structure de la table `rapport`
--

DROP TABLE IF EXISTS `rapport`;
CREATE TABLE IF NOT EXISTS `rapport` (
  `id_rap` int NOT NULL AUTO_INCREMENT,
  `date_rap` date NOT NULL,
  `tranche` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `sexe` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `nom_mal` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `annee` int NOT NULL,
  `mois` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id_rap`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `rapport`
--

INSERT INTO `rapport` (`id_rap`, `date_rap`, `tranche`, `sexe`, `nom_mal`, `annee`, `mois`) VALUES
(53, '2021-01-09', '50_59ans', 'feminin', 'covid19', 2021, '01'),
(78, '2022-02-28', '5_9ans', 'masculin', 'niambale', 2022, '02'),
(79, '2022-03-30', '20_24ans', 'feminin', 'nerf_sciatique', 2022, '03'),
(77, '2022-01-27', '0_11mois', 'masculin', 'diabete', 2022, '01'),
(76, '2022-01-27', '15_19ans', 'feminin', 'diabete', 2022, '01'),
(75, '2021-04-27', '15_19ans', 'masculin', 'polio', 2021, '04'),
(74, '2021-04-27', '0_11mois', 'masculin', 'polio', 2021, '04'),
(73, '2021-04-27', '0_11mois', 'masculin', 'polio', 2021, '04'),
(72, '2021-02-13', 'AgeNd', 'masculin', 'arthrose', 2021, '02'),
(71, '2021-04-13', '10_14ans', 'masculin', 'arthrose', 2021, '04'),
(70, '2021-06-13', '20_24ans', 'feminin', 'sida', 2021, '06'),
(69, '2021-06-23', '50_59ans', 'masculin', 'arthrose', 2021, '06'),
(68, '2021-06-08', '0_11mois', 'masculin', 'arthrose', 2021, '06'),
(67, '2021-01-12', '0_11mois', 'masculin', 'arthrose', 2021, '01'),
(80, '2021-08-07', '10_14ans', 'feminin', 'nerf_sciatique', 2021, '08'),
(81, '2021-08-07', '50_59ans', 'masculin', 'nerf_sciatique', 2021, '08');

-- --------------------------------------------------------

--
-- Structure de la table `rv`
--

DROP TABLE IF EXISTS `rv`;
CREATE TABLE IF NOT EXISTS `rv` (
  `date_rv` date NOT NULL,
  `matriculep` int NOT NULL,
  PRIMARY KEY (`date_rv`),
  KEY `matriculep` (`matriculep`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'omzo', '2468');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
