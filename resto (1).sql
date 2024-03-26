-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 01 juil. 2022 à 11:17
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `resto`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idclient` int(11) NOT NULL,
  `nomcli` varchar(255) NOT NULL,
  `prenomcli` varchar(255) NOT NULL,
  `telcli` int(11) NOT NULL,
  `adress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idclient`, `nomcli`, `prenomcli`, `telcli`, `adress`) VALUES
(9, 'ppppppppppppppp', 'xssq', 78787, 'ooooo'),
(10, 'ppppppppppppppp', 'xssq', 78787, 'ooooo'),
(11, 'ppppppppppppppp', 'xssq', 78787, 'ooooo'),
(12, 'ppppppppppppppp', 'xssq', 78787, 'ooooo'),
(13, 'ppppppppppppppp', 'xssq', 78787, 'ooooo'),
(14, 'ppppppppppppppp', 'xssq', 78787, 'ooooo'),
(15, 'ppppppppppppppp', 'xssq', 78787, 'ooooo'),
(16, 'ppppppppppppppp', 'xssq', 78787, 'ooooo'),
(17, 'ppppppppppppppp', 'xssq', 78787, 'ooooo'),
(18, 'ppppppppppppppp', 'xssq', 78787, 'ooooo'),
(19, 'ppppppppppppppp', 'xssq', 78787, 'ooooo'),
(20, 'ppppppppppppppp', 'xssq', 78787, 'ooooo'),
(21, 'ppppppppppppppp', 'xssq', 78787, 'ooooo'),
(22, 'ppppppppppppppp', 'xssq', 78787, 'ooooo'),
(23, 'ppppppppppppppp', 'xssq', 78787, 'ooooo');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `idclient` int(11) NOT NULL,
  `idplat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `idplat` int(11) NOT NULL,
  `nomplat` varchar(255) NOT NULL,
  `prixplat` float NOT NULL,
  `imgplat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `menu`
--

INSERT INTO `menu` (`idplat`, `nomplat`, `prixplat`, `imgplat`) VALUES
(1, 'COUSCOUS', 189, 'assets/img/coco.png'),
(2, 'TAJINE', 149, 'assets/img/tajine.png'),
(3, 'RFISA', 199, 'assets/img/rfisa.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idclient`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD KEY `idplat` (`idplat`),
  ADD KEY `idclient` (`idclient`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idplat`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idclient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
