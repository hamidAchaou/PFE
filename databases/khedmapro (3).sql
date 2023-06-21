-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 21 juin 2023 à 10:58
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `khedmapro`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `Id_client` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `password` varchar(150) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `img_profile` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`Id_client`, `first_name`, `last_name`, `email`, `phone_number`, `password`, `gender`, `img_profile`) VALUES
(1, 'Alden', 'Mckee', 'pirogo@gmail.com', 304, '$2y$10$Zuzhx6THDsoUjMRgraigPexZb.CqRTabebRj0Q5z95tKnse16mvuC', 'male', NULL),
(2, 'Noel', 'Wright', 'Noel@gmail.com', 511, '$2y$10$J0mojdG60FsSFcysWhfxuOeeazwSeAiK85Gvul/aXBeLAU2nAHXn6', 'male', NULL),
(3, 'Ethan', 'William', 'Ethan@gmail.com', 203, '$2y$10$28LOoan/GRhLBZm3Lz/une2JGIjdsm.OccU3Bhc1oppKaVitYOou2', 'male', NULL),
(4, 'Ryder', 'Carney', 'Ryder@gmail.com', 903, '$2y$10$916QvdvwRTmQpASui.f44.mkGU4EttkwJxFoI3SLkTijU6TKcdA/a', 'female', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `evaluate`
--

CREATE TABLE `evaluate` (
  `Id_Professionals` int(11) NOT NULL,
  `Id_client` int(11) NOT NULL,
  `num_rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `evaluate`
--

INSERT INTO `evaluate` (`Id_Professionals`, `Id_client`, `num_rating`) VALUES
(1, 4, 5),
(2, 1, 4),
(3, 1, 3),
(4, 1, 1),
(5, 4, 4);

-- --------------------------------------------------------

--
-- Structure de la table `liked`
--

CREATE TABLE `liked` (
  `Id_Posts` int(11) NOT NULL,
  `Id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `liked`
--

INSERT INTO `liked` (`Id_Posts`, `Id_client`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 4),
(4, 4);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `Id_message` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`Id_message`, `name`, `email`, `subject`, `message`) VALUES
(1, 'hamid', 'hamid@gmail.com', 'hamid@gmail.com', 'SCLJKDLCSD CNQCJKLS');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `Id_Posts` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date_created` date NOT NULL,
  `type` varchar(50) NOT NULL,
  `img_posts` varchar(100) NOT NULL,
  `confirmed` varchar(50) NOT NULL,
  `Id_Professionals` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`Id_Posts`, `title`, `description`, `date_created`, `type`, `img_posts`, `confirmed`, `Id_Professionals`) VALUES
(1, 'test one', 'test one test one test onetest one test one test one test onetest one ', '2023-06-16', 'test', 'pexels-ono-kosuki-5974396.jpg', 'true', 1),
(2, 'dyeing', 'Painting a client&#039;s house', '2023-06-16', 'dyeing', 'uploads5.jpg', 'true', 4),
(3, 'Kitchen dye', 'Painting a kitchen for one of the clients, when I used the gray color', '2023-06-18', 'dyeing', 'pexels-curtis-adams-16249144.jpg', 'false', 10),
(4, 'dyeing house', 'Dyeing the front of the house for a friend, where I used the white color', '2023-06-18', 'dyeing', 'pexels-samet-berber-17128240.jpg', 'true', 10),
(5, 'plaster man', 'Making a man out of gypsum', '2023-06-18', 'plaster', 'pexels-lisa-fotios-6363660.jpg', 'false', 11),
(6, 'test', 'test test test testtest test test test test test', '2023-06-20', 'test test', 'pexels-digital-buggu-352899.jpg', 'false', 12),
(7, 'test two', 'testtwo testtwo  testtwotesttwo testtwo testtwo testtwotesttwo', '2023-06-20', 'test two', 'pexels-artem-podrez-8985456.jpg', 'false', 12),
(8, 'dfd', 'dfdfqw e q we', '2023-06-20', 'ef', '33.jpg', 'false', 12);

-- --------------------------------------------------------

--
-- Structure de la table `professionals`
--

CREATE TABLE `professionals` (
  `Id_Professionals` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_created` date NOT NULL,
  `city` varchar(50) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `img_profile` varchar(150) DEFAULT NULL,
  `occupation` varchar(50) NOT NULL,
  `description` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `professionals`
--

INSERT INTO `professionals` (`Id_Professionals`, `first_name`, `last_name`, `email`, `password`, `date_created`, `city`, `phone_number`, `date_of_birth`, `gender`, `img_profile`, `occupation`, `description`) VALUES
(1, 'Harrison', 'Alvarez', 'Harrison@gmail.com.com', '$2y$10$jM31hBw1FAAKJ6ial1G5jOufPyMw5QcCumOehST3v9ssKZxEpIPjW', '2023-06-16', 'Fes', 1, '1994-03-09', 'male', 'pexels-ksenia-chernaya-5691516.jpg', 'carpentry', 'Pariatur Sunt elit'),
(2, 'Kirestin', 'Mccoy', 'Kirestin@gmail.com', '$2y$10$.XfZUA0IC3Q3l5/rPIBF3OT5h.bdqKHG9RTaw.Wa3FiI.OqWeyHYS', '2023-06-16', 'Fes', 1564656, '1994-08-14', 'male', '4.jpg', 'carpentry', 'Tenetur officia elit'),
(3, 'Alia', 'Landry', 'Alia@gmail.com', '$2y$10$G4MzkkXgArfxHL48z0aPhO77v4B3dXIBEOOIn3HW3mOK8PbEhNFw.', '2023-06-16', 'Fse', 123325353, '2005-06-10', 'male', 'man-1.jpg', 'carpentry', 'Non obcaecati natus '),
(4, 'Kylie', 'Estes', 'Kylie@gmail.com', '$2y$10$l5.22kPBprKKkEsj24gCo.z6WgrDAWsWb0dAeswEXC/MUMVU9C73S', '2023-06-16', 'Fes', 1, '2011-01-20', 'male', NULL, 'carpentry', 'Excepturi excepturi '),
(5, 'Ashton', 'Newman', 'votafi@mailinator.com', '$2y$10$BX0e3OYrFtE2hkZs4PTxAuW1nQPh2A9Cg/yffK96w.9qyGJMedjqG', '2023-06-17', 'Fes', 1, '1982-12-06', 'female', NULL, 'carpentry', 'Nobis suscipit velit'),
(6, 'Belle', 'Delgado', 'revewa@mailinator.com', '$2y$10$ipwhnzz.wJPS5EgWX533HOyhhtJi0CNHMFtViZxq8e6YtQ9grcEIC', '2023-06-17', 'fes', 1, '2013-04-30', 'female', NULL, 'carpentry', 'Adipisicing voluptat'),
(7, 'Steel', 'House', 'micugogilo@mailinator.com', '$2y$10$9ago7gE1dlJmtVQ0mSfzFOXr78mfaaq.lrhOdJY42sx5gFYkAv7TO', '2023-06-17', 'fes', 1, '2017-07-21', 'male', NULL, 'carpentry ', 'Qui voluptatem non '),
(8, 'Alexander', 'Pope', 'tewypisyv@mailinator.com', '$2y$10$JNaIzqjvVMgaK/S2qlhiAeWK9GEh5uIdKhMbj/u.WXwbT74wn7mva', '2023-06-17', 'fes', 1, '1989-01-21', 'female', NULL, 'carpentry', 'Quam aut ex nostrum '),
(9, 'Aquila', 'Davenport', 'bojez@mailinator.com', '$2y$10$y1JTsQ9x29lleS/qdQoidub0N97hp/XCvpgV/jDUZ8Cv/jT6otCWK', '2023-06-17', 'Tanger', 1, '2006-12-28', 'male', NULL, 'Ut qui enim assumend', 'Sint aut est cum dol'),
(10, 'L3arbi', 'bodrob', 'l3arbi@gmail.com', '$2y$10$MrMe8bMrFAjt9v7mfG8NqOi6ErXoUgLbR7e9cZ0MoXnaWuEqHiT3m', '2023-06-18', 'Khouribga', 654679876, '1990-03-12', 'male', 'man.jpg', 'dyer', 'Dolores temporibus q'),
(11, 'mohamed', 'ali', 'mohamed@gmail.com', '$2y$10$PYhN/3afmlq/PAubiXrmh.lcn3pWy1RRoRQcIAfxYdXmD7Eb.PI7.', '2023-06-18', 'El Jadida', 615141315, '2015-04-27', 'male', 'pexels-ksenia-chernaya-5691479.jpg', 'plaster', 'Et pariatur Sit a d'),
(12, 'Yasir', 'Sheppard', 'Yasir@gmail.com', '$2y$10$1oaYb8wNUu2sVcFTFpzK5O68C7F4VH60pKU5DKxzb84RWR.H9Sczi', '2023-06-20', 'Settat', 1, '1995-03-04', 'female', NULL, 'Ut voluptatum ration', 'Accusamus culpa ut m');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`Id_client`);

--
-- Index pour la table `evaluate`
--
ALTER TABLE `evaluate`
  ADD PRIMARY KEY (`Id_Professionals`,`Id_client`),
  ADD KEY `Id_client` (`Id_client`);

--
-- Index pour la table `liked`
--
ALTER TABLE `liked`
  ADD PRIMARY KEY (`Id_Posts`,`Id_client`),
  ADD KEY `Id_client` (`Id_client`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`Id_message`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`Id_Posts`),
  ADD KEY `Id_Professionals` (`Id_Professionals`);

--
-- Index pour la table `professionals`
--
ALTER TABLE `professionals`
  ADD PRIMARY KEY (`Id_Professionals`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `Id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `Id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `Id_Posts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `professionals`
--
ALTER TABLE `professionals`
  MODIFY `Id_Professionals` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `evaluate`
--
ALTER TABLE `evaluate`
  ADD CONSTRAINT `evaluate_ibfk_1` FOREIGN KEY (`Id_Professionals`) REFERENCES `professionals` (`Id_Professionals`),
  ADD CONSTRAINT `evaluate_ibfk_2` FOREIGN KEY (`Id_client`) REFERENCES `clients` (`Id_client`);

--
-- Contraintes pour la table `liked`
--
ALTER TABLE `liked`
  ADD CONSTRAINT `liked_ibfk_1` FOREIGN KEY (`Id_Posts`) REFERENCES `posts` (`Id_Posts`),
  ADD CONSTRAINT `liked_ibfk_2` FOREIGN KEY (`Id_client`) REFERENCES `clients` (`Id_client`);

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`Id_Professionals`) REFERENCES `professionals` (`Id_Professionals`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
