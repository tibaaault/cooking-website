-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 02 fév. 2024 à 17:36
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cuisine`
--

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20240124075315', '2024-01-24 07:54:11', 92),
('DoctrineMigrations\\Version20240124100717', '2024-01-24 10:07:30', 181),
('DoctrineMigrations\\Version20240124131553', '2024-01-24 13:16:03', 60),
('DoctrineMigrations\\Version20240124134116', '2024-01-24 13:41:33', 16),
('DoctrineMigrations\\Version20240124134545', '2024-01-24 13:45:48', 48),
('DoctrineMigrations\\Version20240126095207', '2024-01-26 09:52:29', 61),
('DoctrineMigrations\\Version20240126152205', '2024-01-26 15:22:31', 81),
('DoctrineMigrations\\Version20240126152656', '2024-01-26 15:27:31', 45),
('DoctrineMigrations\\Version20240126153056', '2024-01-26 15:30:59', 45),
('DoctrineMigrations\\Version20240201120739', '2024-02-01 12:08:21', 145),
('DoctrineMigrations\\Version20240201133428', '2024-02-01 14:26:56', 30),
('DoctrineMigrations\\Version20240201142313', '2024-02-01 14:31:29', 2),
('DoctrineMigrations\\Version20240201142843', '2024-02-01 14:31:29', 0),
('DoctrineMigrations\\Version20240201150112', '2024-02-01 15:01:17', 69),
('DoctrineMigrations\\Version20240201212346', '2024-02-01 21:24:00', 56),
('DoctrineMigrations\\Version20240201222819', '2024-02-01 22:28:22', 70);

-- --------------------------------------------------------

--
-- Structure de la table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `id_user_id` int(11) NOT NULL,
  `id_recette_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `favorites`
--

INSERT INTO `favorites` (`id`, `id_user_id`, `id_recette_id`) VALUES
(7, 4, 3),
(12, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

CREATE TABLE `ingredient` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ingredient`
--

INSERT INTO `ingredient` (`id`, `name`) VALUES
(3, 'Pâtes'),
(4, 'Riz'),
(5, 'Carottes'),
(6, 'Tomates'),
(7, 'Poivrons'),
(8, 'Sauce tomate'),
(9, 'Sauce à la crème'),
(10, 'Fromage râpé'),
(11, 'Brocolis'),
(12, 'Aubergines'),
(13, 'Champignons'),
(14, 'Oignons'),
(15, 'Poulet'),
(16, 'Boeuf'),
(17, 'Crevettes'),
(18, 'Saumon'),
(19, 'Parmesan'),
(20, 'Basilic'),
(21, 'Persil'),
(22, 'Thym'),
(23, 'Curry'),
(24, 'Huile d\'olive'),
(25, 'Vinaigre balsamique'),
(26, 'Sel'),
(27, 'Poivre'),
(28, 'Gingembre'),
(29, 'Ail'),
(30, 'Crème fraîche'),
(32, 'Mozzarella'),
(33, 'Lentilles'),
(34, 'Quinoa'),
(35, 'Patates douces'),
(36, 'Courgettes'),
(37, 'Haricots verts'),
(38, 'Sauce soja'),
(39, 'Sauce chili'),
(40, 'Gruyère'),
(41, 'Cheddar'),
(42, 'Moutarde'),
(43, 'Cumin'),
(44, 'Coriandre'),
(45, 'Paprika'),
(46, 'Safran'),
(47, 'Miel'),
(48, 'Yaourt nature'),
(49, 'Concombre'),
(50, 'Citron'),
(51, 'Noix de coco'),
(52, 'Basilic thaï'),
(53, 'Ricotta'),
(54, 'Sauge'),
(55, 'Muscade'),
(56, 'Ciboulette'),
(57, 'Origan'),
(58, 'Sauce au poivre'),
(59, 'Sauce barbecue'),
(60, 'Piment rouge'),
(61, 'Câpres'),
(62, 'Aneth'),
(63, 'Huile de sésame'),
(64, 'Noix de cajou'),
(65, 'Ananas'),
(66, 'Mangue'),
(67, 'Melon'),
(68, 'Cassis'),
(69, 'Feta'),
(70, 'Lardons'),
(71, 'Oeuf'),
(73, 'Laitue'),
(74, 'Poulet grillé'),
(75, 'Croûtons'),
(76, 'Sauce César'),
(77, 'Lait de coco'),
(79, 'Curry en poudre'),
(80, 'nef'),
(81, 'Banana'),
(82, 'Saucisse de Morteau'),
(84, 'zef'),
(85, 'Saucisses'),
(86, 'Tomate');

-- --------------------------------------------------------

--
-- Structure de la table `ingredient_recette`
--

CREATE TABLE `ingredient_recette` (
  `id` int(11) NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recette_id` int(11) NOT NULL,
  `ingredient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ingredient_recette`
--

INSERT INTO `ingredient_recette` (`id`, `quantity`, `recette_id`, `ingredient_id`) VALUES
(32, '17', 1, 3),
(33, '15', 1, 19),
(34, '11', 1, 27),
(35, '12', 1, 30),
(36, '16', 1, 70),
(37, '14', 1, 71),
(38, '10', 2, 4),
(39, '10', 2, 5),
(40, '11', 2, 7),
(41, '14', 2, 23),
(42, '15', 2, 36),
(43, '15', 3, 19),
(44, '10', 3, 73),
(45, '15', 3, 74),
(46, '16', 3, 75),
(47, '13', 3, 76),
(48, '16', 4, 18),
(49, '12', 4, 24),
(50, '11', 4, 44),
(51, '18', 4, 50),
(52, '20', 4, 66),
(53, '15', 5, 6),
(54, '14', 5, 24),
(55, '14', 5, 34),
(56, '20', 5, 49),
(57, '17', 5, 69),
(58, '16', 6, 7),
(59, '10', 6, 17),
(60, '12', 6, 28),
(61, '11', 6, 77),
(62, '18', 6, 79),
(104, '200g', 28, 4),
(105, 'Facultatif', 28, 27),
(106, '3 pièces', 28, 6),
(107, '1 pièce', 28, 29),
(108, '3 pièces', 28, 85);

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

CREATE TABLE `recette` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `recette`
--

INSERT INTO `recette` (`id`, `user_id`, `name`, `img`, `description`) VALUES
(1, 1, 'Pâtes carbonara', '1.jpeg', 'Un classique italien délicieusement crémeux, associant des pâtes al dente à une sauce carbonara riche en lardons, œufs, et parmesan, le tout relevé par une touche de poivre noir.'),
(2, 1, 'Riz aux Légumes Curry', '2.jpeg', 'Un plat végétarien savoureux mêlant le parfum du curry aux légumes croquants, servi sur un lit de riz, pour une expérience gustative exotique.'),
(3, 1, 'Salade César au Poulet', '3.jpeg', 'Une salade croustillante et satisfaisante, associant la fraîcheur de la laitue à la tendreté du poulet grillé, le tout nappé d\'une délicieuse sauce César, garnie de croûtons et de parmesan.'),
(4, 1, 'Poisson Saumon à la Mangue', '4.jpeg', 'Une fusion de saveurs, alliant la richesse du saumon grillé à la douceur de la mangue, relevée par des notes d\'agrumes du citron et sublimée par une touche d\'huile d\'olive.'),
(5, 1, 'Quinoa aux Légumes Méditerranéens', '5.jpeg', 'Un plat sain et équilibré mariant le quinoa aux légumes méditerranéens tels que les tomates, le concombre et la feta, le tout agrémenté d\'une vinaigrette à l\'huile d\'olive.'),
(6, 1, 'Crevettes au Curry et à la Noix de Coco', '6.jpeg', 'Un festin tropical, mélangeant des crevettes juteuses à une sauce onctueuse à base de lait de coco, de poivrons croquants, de curry et de gingembre, pour une explosion de saveurs exotiques.'),
(28, 4, 'Rougail Saucisse', 'rougail-65bcfb8a4cff1.jpg', 'Plat Créole.');

-- --------------------------------------------------------

--
-- Structure de la table `step`
--

CREATE TABLE `step` (
  `id` int(11) NOT NULL,
  `step` int(11) NOT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `recette_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `step`
--

INSERT INTO `step` (`id`, `step`, `detail`, `recette_id`) VALUES
(1, 1, 'Cuisez les pâtes al dente dans de l\'eau salée.', 1),
(2, 2, 'Faites revenir les lardons dans une poêle jusqu\'à ce qu\'ils soient croustillants.', 1),
(3, 3, 'Mélangez les œufs avec du parmesan et du poivre, puis ajoutez-les aux pâtes égouttées.', 1),
(4, 4, 'Incorporez les lardons et remuez jusqu\'à ce que la sauce soit crémeuse.', 1),
(5, 5, 'Servez immédiatement, saupoudré de parmesan supplémentaire.', 1),
(55, 1, 'Faire cuire du riz', 28),
(56, 2, 'Couper les saucisses en petits bouts', 28),
(57, 3, 'Couper les tomates', 28),
(58, 4, 'Faire cuire à feu doux.', 28),
(59, 5, ' Servir', 28),
(60, 6, 'Déguster !', 28);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`) VALUES
(1, 'troelstrate@myges.fr', '[\"ROLE_USER\"]', 'Admin'),
(2, 'troelstrate@gmail.com', '[\"ROLE_USER\"]', '$2y$13$w1nVtVQa8/fTbrq6b4PcjOonQcePcoYa1LKGPfSUF6Q85yPv7UuZe'),
(3, 'thibault.roelstrate@gmail.com', '[\"ROLE_USER\"]', '$2y$13$iHjUqgJZ5gLs8OWLo6GuEeO1O4bzmfJ3pdJW.Zt0rZ2LJSmT6hXGi'),
(4, 'henry@gmail.com', '[]', '$2y$13$TddudLy8lWoU4n44yNTbYOqaJhBR/Okzx.OST/7zynUEwCUJyLNHO');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E46960F579F37AE5` (`id_user_id`),
  ADD KEY `IDX_E46960F52CBBAF3E` (`id_recette_id`);

--
-- Index pour la table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ingredient_recette`
--
ALTER TABLE `ingredient_recette`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_488C685689312FE9` (`recette_id`),
  ADD KEY `IDX_488C6856933FE08C` (`ingredient_id`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `recette`
--
ALTER TABLE `recette`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_49BB6390A76ED395` (`user_id`);

--
-- Index pour la table `step`
--
ALTER TABLE `step`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_43B9FE3C89312FE9` (`recette_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT pour la table `ingredient_recette`
--
ALTER TABLE `ingredient_recette`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `recette`
--
ALTER TABLE `recette`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `step`
--
ALTER TABLE `step`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `FK_E46960F52CBBAF3E` FOREIGN KEY (`id_recette_id`) REFERENCES `recette` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_E46960F579F37AE5` FOREIGN KEY (`id_user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ingredient_recette`
--
ALTER TABLE `ingredient_recette`
  ADD CONSTRAINT `FK_488C685689312FE9` FOREIGN KEY (`recette_id`) REFERENCES `recette` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_488C6856933FE08C` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredient` (`id`);

--
-- Contraintes pour la table `recette`
--
ALTER TABLE `recette`
  ADD CONSTRAINT `FK_49BB6390A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `step`
--
ALTER TABLE `step`
  ADD CONSTRAINT `FK_43B9FE3C89312FE9` FOREIGN KEY (`recette_id`) REFERENCES `recette` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
