-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 24 Mai 2018 à 16:24
-- Version du serveur :  5.7.22-0ubuntu0.16.04.1
-- Version de PHP :  7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `banana_store`
--

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(22) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` int(250) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(250) NOT NULL,
  `quantity` int(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`, `photo`, `quantity`, `is_active`) VALUES
(1, 'banane', 8, 'une superbe banane d\'espagne', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqVgg32m6fLrUbkaJuIH-hUx_P7mdJnAmSw685Nka7favKqRUQoA', 4000, 0),
(2, 'kiwi', 25, 'Un bon Kiwi des familles', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQddr5zhEnV9M4t4P06gmeOXqRg7yig0A9wJrnMYRuupTpAkncyuw', 117, 1),
(3, 'fraise', 25, 'La fraise au mille secrets', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTiJRL3RIimQzETxiBii6kuYlyQFYoxzJWCc5pFA0dPtfh9Czlw', 4100, 1),
(4, 'odeur', 200, 'Un parfum à lui seul', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRSc3ewWinJkonGExkvAT3Up70RD9FgQm91kksfoSNlevNfDim', 10, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `firstname`, `lastname`, `is_active`, `photo`) VALUES
(1, 'yoann@gmail.com', 'yoyo', 'yoann', 'laurent', 1, ''),
(2, 'elodie@gmail.com', 'eloelo', 'elodie', 'poule', 1, ''),
(3, 'julien@gmail.com', 'juju', 'julien', 'prof', 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWKdfZfDosTepVzPeT__cGrsxEDGBvF7uY1v25Xg3HzxxNxvK4'),
(4, 'quentin@gmail.com', 'quen', 'quentin', 'voisin', 1, '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
