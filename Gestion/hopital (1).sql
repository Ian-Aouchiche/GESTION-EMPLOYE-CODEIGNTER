-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 24 avr. 2024 à 01:10
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hopital`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(7, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `dmdrdv`
--

CREATE TABLE `dmdrdv` (
  `id` int(11) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `user` int(11) NOT NULL,
  `date_demande` timestamp NOT NULL DEFAULT current_timestamp(),
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_naissance` date NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `dmdrdv`
--

INSERT INTO `dmdrdv` (`id`, `sujet`, `user`, `date_demande`, `nom`, `prenom`, `date_naissance`, `telephone`, `adresse`, `mail`) VALUES
(4, 'douleur a la jambe', 39, '2024-04-23 14:46:29', 'Aouchiche', 'Ian', '2024-04-12', '0638121085', '13 rue de Mâcon', ''),
(5, 'douleur a la jambe', 49, '2024-04-23 15:18:59', 'Aouchiche', 'Ian', '2024-04-13', '0638121085', '13 rue de Mâcon', ''),
(6, 'dshbserdbs', 49, '2024-04-23 15:20:07', 'Aouchiche', 'Ian', '2024-04-20', '0638121085', '13 rue de Mâcon', ''),
(7, 'douleur a la jambehiih', 49, '2024-04-23 16:05:48', 'Aouchiche', 'Ian', '2024-04-13', '0638121085', '13 rue de Mâcon', 'ianaouchiche6@gmail.com'),
(8, 'douleur a la jambehiih', 49, '2024-04-23 16:06:33', 'Aouchiche', 'Ian', '2024-04-13', '0638121085', '13 rue de Mâcon', 'ianaouchiche6@gmail.com'),
(9, 'douleur a la jambehiih', 49, '2024-04-23 16:07:09', 'Aouchiche', 'Ian', '2024-04-13', '0638121085', '13 rue de Mâcon', 'ianaouchiche6@gmail.com'),
(10, 'douleur a la jambehiih', 49, '2024-04-23 16:08:58', 'Aouchiche', 'Ian', '2024-04-13', '0638121085', '13 rue de Mâcon', 'ianaouchiche6@gmail.com'),
(11, 'douleur a la jambehiih', 49, '2024-04-23 16:09:56', 'Aouchiche', 'Ian', '2024-04-13', '0638121085', '13 rue de Mâcon', 'ianaouchiche6@gmail.com'),
(12, 'douleur a la jambehiih', 49, '2024-04-23 16:12:30', 'Aouchiche', 'Ian', '2024-04-13', '0638121085', '13 rue de Mâcon', 'ianaouchiche6@gmail.com'),
(13, 'douleur a la jambehiih', 49, '2024-04-23 16:14:49', 'Aouchiche', 'Ian', '2024-04-13', '0638121085', '13 rue de Mâcon', 'ianaouchiche6@gmail.com'),
(14, 'douleur a la jambe', 39, '2024-04-23 16:24:31', 'Aouchiche', 'Ian', '2024-04-13', '0638121085', '13 rue de Mâcon', 'ianaouchiche6@gmail.com'),
(15, 'douleur a la jambe', 39, '2024-04-23 16:28:42', 'Aouchiche', 'Ian', '2024-04-13', '0638121085', '13 rue de Mâcon', 'ianaouchiche6@gmail.com'),
(16, 'douleur a la jambe', 39, '2024-04-23 16:30:57', 'Aouchiche', 'Ian', '2024-04-13', '0638121085', '13 rue de Mâcon', 'ianaouchiche6@gmail.com'),
(17, 'douleur a la jambe', 39, '2024-04-23 16:31:19', 'Aouchiche', 'Ian', '2024-04-20', '0638121085', '13 rue de Mâcon', 'ianaouchiche6@gmail.com'),
(18, 'douleur a la jambe', 39, '2024-04-23 16:31:57', 'Aouchiche', 'Ian', '2024-04-20', '0638121085', '13 rue de Mâcon', 'ianaouchiche6@gmail.com'),
(19, 'douleur a la jambe', 39, '2024-04-23 16:32:17', 'Aouchiche', 'Ian', '2024-04-20', '0638121085', '13 rue de Mâcon', 'ianaouchiche6@gmail.com'),
(20, 'gytf', 49, '2024-04-23 18:12:54', 'Aouchiche', 'Ian', '2024-04-14', '0638121085', '13 rue de Mâcon', 'ianaouchiche6@gmail.com'),
(21, 'sfsfsf', 39, '2024-04-23 20:45:50', 'Aouchiche', 'fsge', '2024-04-19', '0638121085', '13 rue de Mâcon', 'ianaouchiche6@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) NOT NULL,
  `emploi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `email`, `emploi`) VALUES
(39, 'ian.aouchiche', '$2y$10$AafvUr35yW0OnlYoBveuAOV/h1XFWGSpqx64Vb99UPINvzHx5Kuly', '2024-04-18 13:41:46', 'ianaouchiche6@gmail.com', NULL),
(49, 'tlefay', '$2y$10$ygnb8LXHrb2H9TIBmXgX8.P9U/pGGTlMotXRJQL7qBF90b7js7qQ2', '2024-04-23 17:14:52', 'titi@gmail.com', NULL),
(50, 'ach', '$2y$10$ZTRGNwVv9/xsyUzPkouZYOoxEpsVyu7wJuxlZRo1epBOJiEAGM7pu', '2024-04-23 21:24:27', 'ianaouchiche6@gmail.com', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `dmdrdv`
--
ALTER TABLE `dmdrdv`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `dmdrdv`
--
ALTER TABLE `dmdrdv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
