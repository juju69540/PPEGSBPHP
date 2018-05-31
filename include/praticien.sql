-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 30 Mai 2018 à 16:19
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gsbfrais`
--

-- --------------------------------------------------------

--
-- Structure de la table `praticien`
--

CREATE TABLE `praticien` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `social` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `coefficiant_notorieter` int(11) NOT NULL,
  `coefficiant_confiance` int(11) NOT NULL,
  `specialite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `praticien`
--

INSERT INTO `praticien` (`id`, `nom`, `social`, `adresse`, `telephone`, `contact`, `coefficiant_notorieter`, `coefficiant_confiance`, `specialite`) VALUES
(3, 'patrick', 'ezrzr', 'ezrze', 'rzerz', 'erze', 1, 2, 1),
(4, 'floflo', 'gregre', '23 tourtereleles', '0646565656', 'gregre', 12, 2, 2),
(5, 'Julien', 'ergerg', '23 tourtereleles', '0646565656', 'regerg', 25745, 54, 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `praticien`
--
ALTER TABLE `praticien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `praticien`
--
ALTER TABLE `praticien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
