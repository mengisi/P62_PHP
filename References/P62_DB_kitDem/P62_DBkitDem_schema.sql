-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Lun 19 Janvier 2015 à 00:26
-- Version du serveur: 5.5.16
-- Version de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `p62_dbkitdem`
--

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id (clef principale) produit',
  `name` varchar(256) NOT NULL COMMENT 'Nom du produit',
  `category_id` int(11) DEFAULT NULL COMMENT 'Categorie du produit',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Table des produits du site' AUTO_INCREMENT=5 ;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`) VALUES
(1, 'Celine au Centre Bell', 1),
(2, 'Grand prix cycliste de Montréal', 2),
(3, 'Lady Gaga au centre Bell', 1),
(4, 'Formule 1 au Parc Jean Drapeau', 2);

-- --------------------------------------------------------

--
-- Structure de la table `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id (clef principale) categorie',
  `name` varchar(256) NOT NULL COMMENT 'Nom du categorie',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Table des catégories de produit du site' AUTO_INCREMENT=3 ;

--
-- Contenu de la table `product_category`
--

INSERT INTO `product_category` (`id`, `name`) VALUES
(1, 'Variété'),
(2, 'Sport');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id (clef principale) utilisateur',
  `username` varchar(128) NOT NULL COMMENT 'Username',
  `password` varchar(128) NOT NULL COMMENT 'Mot de passe',
  `prenom` varchar(128) NOT NULL COMMENT 'Prénom',
  `nom` varchar(256) NOT NULL COMMENT 'Nom',
  `adr_courriel` varchar(128) NOT NULL COMMENT 'Adresse courriel utilisateur',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Table des utilisateurs du site' AUTO_INCREMENT=84 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `prenom`, `nom`, `adr_courriel`) VALUES
(1, 'aaa', '47bce5c74f589f4867dbd57e9ca9f808', 'aaa', 'AAA', 'aaa@domaine.com'),
(2, 'bbb', '08f8e0260c64418510cefb2b06eee5cd', 'bbb', 'BBB', 'bbb@domaine.com'),
(3, 'ccc', '9df62e693988eb4e1e1444ece0578579', 'ccc', 'CCC', 'bbb@domaine.com'),
(4, 'ddd', '77963b7a931377ad4ab5ad6a9cd718aa', 'ddd', 'DDD', 'ddd@domaine.com'),
(63, 'eee', 'd2f2297d6e829cd3493aa7de4416a18f', 'eee', 'eee', 'eee@eee.com'),
(70, 'fff', '343d9040a671c45832ee5381860e2996', 'fff', 'fff', 'fff@fff.com'),
(73, 'ggg', 'ba248c985ace94863880921d8900c53f', 'ggg', 'ggg', 'fff@fff.com'),
(74, 'dbkitdem4', 'bebb6bd41fe128f095807c3e055e4bb0', 'ddd', 'DDD', 'ddd@domaine.com'),
(78, 'trimouille', '445a55e4c88f3806bf82d6e702e67e85', 'Gilles', 'GÃ©PÃ©', 'trimouille@com.com'),
(83, 'alpha', 'beta', 'gamma', 'epsilon', 'alpha@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `user_cnx`
--

CREATE TABLE IF NOT EXISTS `user_cnx` (
  `cnx_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id de connexion',
  `user_id` int(11) NOT NULL COMMENT 'Id de l''utilisateur',
  `date_cnx` datetime NOT NULL COMMENT 'Date de la dernière connexion',
  `date_discnx` datetime DEFAULT NULL COMMENT 'Date de la dernière déconnexion',
  PRIMARY KEY (`cnx_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Contenu de la table `user_cnx`
--

INSERT INTO `user_cnx` (`cnx_id`, `user_id`, `date_cnx`, `date_discnx`) VALUES
(2, 1, '2014-08-30 22:36:02', '2014-08-30 22:36:17'),
(18, 2, '2014-08-28 18:19:12', '2014-08-29 12:29:31'),
(20, 4, '2014-08-30 23:04:29', '2014-08-30 23:05:28'),
(21, 70, '2014-08-29 12:29:31', '2014-08-29 12:29:31'),
(22, 73, '2014-08-30 17:22:50', '2014-08-30 23:08:05'),
(25, 3, '2014-08-30 17:23:40', '2014-08-30 17:24:15'),
(26, 63, '2014-08-29 12:28:42', '2014-08-29 12:29:28'),
(27, 78, '2014-08-30 23:05:14', '2014-08-30 23:04:00');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `user_cnx`
--
ALTER TABLE `user_cnx`
  ADD CONSTRAINT `user_cnx_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
