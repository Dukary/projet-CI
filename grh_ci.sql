-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 10 déc. 2023 à 15:34
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `grh_ci`
--

-- --------------------------------------------------------

--
-- Structure de la table `cathegoriepersos`
--

CREATE TABLE `cathegoriepersos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cathegorie` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cathegoriepersos`
--

INSERT INTO `cathegoriepersos` (`id`, `cathegorie`, `etat`, `created_at`, `updated_at`) VALUES
(1, 'APTES TOUS SERVICES', 'perso_pre', NULL, NULL),
(2, 'APTITUDES LIMITEES', 'perso_pre', NULL, NULL),
(3, 'STAGE', 'perso_abs_jus', NULL, NULL),
(4, 'MISSION/DETA', 'perso_abs_jus', NULL, NULL),
(5, 'P.L.D.', 'perso_abs_jus', NULL, NULL),
(6, 'REPOS MEDICAL', 'perso_abs_jus', NULL, NULL),
(7, 'MALADES', 'perso_abs_jus', NULL, NULL),
(8, 'DETENTION', 'perso_abs_jus', NULL, NULL),
(9, 'PRISON', 'perso_abs_jus', NULL, NULL),
(10, 'EVASAN', 'perso_abs_jus', NULL, NULL),
(11, 'NON REJOINTS', 'perso_abs_jus', NULL, NULL),
(12, 'AUTRES', 'perso_abs_jus', NULL, NULL),
(13, 'RETARD', 'perso_abs_non_jus', NULL, NULL),
(14, 'ASM PLUS DE 24 H', 'perso_abs_non_jus', NULL, NULL),
(15, 'DESERTEURS', 'perso_abs_non_jus', NULL, NULL),
(16, 'AUTRES', 'perso_abs_non_jus', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stage` varchar(255) NOT NULL,
  `form` varchar(255) NOT NULL,
  `lieu_form` varchar(255) NOT NULL,
  `matri` varchar(255) NOT NULL,
  `type_stag` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `formations`
--

INSERT INTO `formations` (`id`, `stage`, `form`, `lieu_form`, `matri`, `type_stag`, `created_at`, `updated_at`) VALUES
(1, 'FES AIR', 'Ingénieurie', 'Douala', 'VBNET', 'perso', '2023-11-19 21:03:53', '2023-11-19 21:03:53'),
(2, 'CAT1 FUSAIR', 'Ingénieurie', 'Douala', 'CVBTU9', 'stag', '2023-11-19 21:55:01', '2023-11-19 21:55:01');

-- --------------------------------------------------------

--
-- Structure de la table `grades`
--

CREATE TABLE `grades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `cath` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `grades`
--

INSERT INTO `grades` (`id`, `code`, `titre`, `cath`, `created_at`, `updated_at`) VALUES
(1, 'Col', 'Colonel', 'off', NULL, NULL),
(2, 'Lcl', 'Lieutenant-colonel', 'off', NULL, NULL),
(3, 'Cmt', 'Commandant', 'off', NULL, NULL),
(4, 'Cne', 'Capitaine', 'off', NULL, NULL),
(5, 'Lt', 'Lieutenant', 'off', NULL, NULL),
(6, 'Slt', 'Sous-lieutenant', 'off', NULL, NULL),
(7, 'Acm', 'Adjoudant-chef Major', 'sous_off', NULL, NULL),
(8, 'Ac', 'Adjudant-chef', 'sous_off', NULL, NULL),
(9, 'At', 'Adjudant', 'sous_off', NULL, NULL),
(10, 'Sc', 'Sergent-chef', 'sous_off', NULL, NULL),
(11, 'Sgt', 'Sergent', 'sous_off', NULL, NULL),
(12, 'C/c', 'Caporal-chef', 'mil_rang', NULL, NULL),
(13, 'Cal', 'Caporal', '', NULL, NULL),
(14, '1cl', '1ere classe', 'mil_rang', NULL, NULL),
(15, '2cl', '2e classe', 'mil_rang', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `infostags`
--

CREATE TABLE `infostags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `matri` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `date_nais` varchar(255) NOT NULL,
  `lieu_nais` varchar(255) NOT NULL,
  `ethnie` varchar(255) NOT NULL,
  `reg_ori` varchar(255) NOT NULL,
  `dep` varchar(255) NOT NULL,
  `arron` varchar(255) NOT NULL,
  `mat_solde` varchar(255) NOT NULL,
  `num_cni` varchar(255) NOT NULL,
  `date_deliv` varchar(255) NOT NULL,
  `date_eng` varchar(255) NOT NULL,
  `relig` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `dip_elev` varchar(255) NOT NULL,
  `nom_pere` varchar(255) NOT NULL,
  `nom_mere` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `emp_tenu` varchar(255) NOT NULL,
  `qual_alea` varchar(255) NOT NULL,
  `form_spe` varchar(255) NOT NULL,
  `stat_civ` varchar(255) NOT NULL,
  `nom_per_acc` varchar(255) NOT NULL,
  `tel_per_acc` varchar(255) NOT NULL,
  `lien_par_per_acc` varchar(255) NOT NULL,
  `adress_per_acc` varchar(255) NOT NULL,
  `ville_per_acc` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `infostags`
--

INSERT INTO `infostags` (`id`, `matri`, `nom`, `grade`, `sexe`, `date_nais`, `lieu_nais`, `ethnie`, `reg_ori`, `dep`, `arron`, `mat_solde`, `num_cni`, `date_deliv`, `date_eng`, `relig`, `tel`, `dip_elev`, `nom_pere`, `nom_mere`, `unit`, `emp_tenu`, `qual_alea`, `form_spe`, `stat_civ`, `nom_per_acc`, `tel_per_acc`, `lien_par_per_acc`, `adress_per_acc`, `ville_per_acc`, `img`, `created_at`, `updated_at`) VALUES
(1, 'CVBTU9', 'Balkissou', '2e classe', 'Feminin', '1998-11-03', 'LIMBE', 'Moundang', 'Extreme-Nord', 'Menoa', 'null', 'WXC7UY', 'NO846463JH3331', '2023-11-19', '2010-10-10', 'Musulmane', '698765434', 'Licence Pro', 'Papa', 'Maman', 'CI-BA 301', 'null', 'null', 'null', 'Marie', 'null', 'null', 'null', 'null', 'null', 'img/img_new_stag/aYbM67Tcz6MiZfAZRZPqIjYgiodEXEXgAFoBitxm.jpg', '2023-11-19 22:08:39', '2023-11-19 22:08:39');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_11_05_003651_create_personnel_table', 1),
(4, '2023_11_10_202313_create_grade_table', 2),
(5, '2023_11_12_235743_create_cathegorieperso_table', 3),
(6, '2023_11_13_001350_create_spa_table', 4),
(7, '2014_10_12_100000_create_password_resets_table', 5),
(8, '2023_11_18_183744_create_formation_table', 5),
(9, '2023_11_18_184205_create_infostag_table', 5),
(10, '2023_11_19_180849_create_stage_table', 6);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personnels`
--

CREATE TABLE `personnels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `num_cni` varchar(255) NOT NULL,
  `matri` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `date_nais` date NOT NULL,
  `lieu_nais` varchar(255) NOT NULL,
  `ethnie` varchar(255) NOT NULL,
  `reg_ori` varchar(255) NOT NULL,
  `dep` varchar(255) NOT NULL,
  `arron` varchar(255) NOT NULL,
  `mat_solde` varchar(255) NOT NULL,
  `date_eng` date NOT NULL,
  `relig` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `nom_pere` varchar(255) NOT NULL,
  `nom_mere` varchar(255) NOT NULL,
  `dip_elev` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `stat_civ` varchar(255) NOT NULL,
  `descrip` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `personnels`
--

INSERT INTO `personnels` (`id`, `num_cni`, `matri`, `nom`, `grade`, `sexe`, `date_nais`, `lieu_nais`, `ethnie`, `reg_ori`, `dep`, `arron`, `mat_solde`, `date_eng`, `relig`, `tel`, `nom_pere`, `nom_mere`, `dip_elev`, `unit`, `stat_civ`, `descrip`, `img`, `created_at`, `updated_at`) VALUES
(1, 'NO846463JH8UI2', 'VBNET', 'Samo Simo Jean-Baptiste', 'Caporal', 'Masculin', '2001-06-24', 'Garoua', 'Bamiléké', 'Ouest', 'Nde', 'Baganté', 'MKVB5', '2026-09-10', 'Chrétiene', '691191705', 'Simo Laurent', 'Tchembou Wantcho', 'BTS', 'CI-BA 301', 'Célibataire', '', 'img/users/team-3.jpg', '2023-11-14 18:36:46', '2023-11-14 18:36:46'),
(2, 'NO846463JH3338', 'BRO4500', 'Atsamo Kenfack Robernis', 'Caporal', 'Masculin', '1994-03-02', 'Penja', 'Bamiléké', 'Ouest', 'Menoa', 'Fongotongo', 'M876G6', '2013-09-10', 'Chrétiene', '698765439', 'Maman', 'Maman', 'BTS', 'CI-BA 301', 'Célibataire', '', 'img/users/testimonials-5.jpg', '2023-11-14 18:33:15', '2023-11-19 15:45:32'),
(3, 'NO846463JH3330', 'NT0P6', 'Fadimatou Ahmadou', 'Sergent', 'Feminin', '1996-03-02', 'YAOUNDÉ', 'Bamiléké', 'Ouest', 'Bamboutos', 'Fongotongo', 'M876G6', '2013-09-10', 'Chrétiene', '698765439', 'Maman', 'Maman', 'Licence Tech', 'CI-BA 301', 'Marié', '', 'img/users/testimonials-2.jpg', '2023-11-18 18:27:25', '2023-11-19 15:35:15');

-- --------------------------------------------------------

--
-- Structure de la table `spas`
--

CREATE TABLE `spas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `num_spa` varchar(255) NOT NULL,
  `matri` varchar(255) NOT NULL,
  `cath` varchar(255) NOT NULL,
  `date_jour` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `spas`
--

INSERT INTO `spas` (`id`, `num_spa`, `matri`, `cath`, `date_jour`, `created_at`, `updated_at`) VALUES
(1, '0001', 'BRO4500', 'perso_pre', '2023-11-18', '2023-11-18 20:20:16', '2023-11-18 20:20:16'),
(2, '0002', 'VBNET', 'perso_pre', '2023-11-19', '2023-11-18 23:25:17', '2023-11-18 23:25:17');

-- --------------------------------------------------------

--
-- Structure de la table `stages`
--

CREATE TABLE `stages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `stages`
--

INSERT INTO `stages` (`id`, `titre`, `created_at`, `updated_at`) VALUES
(1, 'FES AIR \r\n', NULL, NULL),
(2, 'CAT1 FUSAIR \r\n', NULL, NULL),
(3, 'CAT1 FUSCO AIR', NULL, NULL),
(4, 'CAT2 FUSAIR \r\n', NULL, NULL),
(5, 'CAT2 FUSCO AIR', NULL, NULL),
(6, 'CAT3 SPEACIAL AIR', NULL, NULL),
(7, 'BA1 FUSAIR\r\n', NULL, NULL),
(8, 'BS1 FUSCO AIR \r\n', NULL, NULL),
(9, 'BA2 FUSAIR \r\n', NULL, NULL),
(10, 'BS2 FUSCO AIR \r\n', NULL, NULL),
(11, 'RECYCLAGE', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `matri` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `niv_sec` varchar(10) NOT NULL,
  `statut` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `matri`, `pseudo`, `password`, `img`, `created_at`, `updated_at`, `niv_sec`, `statut`) VALUES
(1, 'VBNET', 'Ghost', '$2y$12$TFmotQbpa22NLQsFDlEC6upO6gCQHjrS/fXDIdS./saX1Xs9Vg5iq', 'img/users/team-3.jpg', '2023-11-14 18:35:37', '2023-11-14 18:35:37', 'niv2', ''),
(2, 'BRO4500', 'Atsamo ', '$2y$12$PQacxoNiLPn3lTfkfzaTxOyRSyrrmHgjMjC3LAxNFom49UwGRhSK.', 'testimonials-5.jpg', '2023-11-14 18:33:16', '2023-11-14 18:33:16', 'niv1', '0'),
(3, 'NT0P6', 'Fadimatou Ahmadou', '$2y$12$.NgRnZhJDEbH2TKQVviJMeR078nDOPHbuHGUfvK3wvVpX8ApXewqK', 'testimonials-2.jpg', '2023-11-18 18:27:26', '2023-11-18 18:27:26', 'niv1', '0');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cathegoriepersos`
--
ALTER TABLE `cathegoriepersos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `formation_matricule_unique` (`matri`);

--
-- Index pour la table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `grade_code_unique` (`code`);

--
-- Index pour la table `infostags`
--
ALTER TABLE `infostags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `infostag_matri_unique` (`matri`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `personnels`
--
ALTER TABLE `personnels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personnel_matri_unique` (`matri`);

--
-- Index pour la table `spas`
--
ALTER TABLE `spas`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `stages`
--
ALTER TABLE `stages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_matri_unique` (`matri`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cathegoriepersos`
--
ALTER TABLE `cathegoriepersos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `infostags`
--
ALTER TABLE `infostags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personnels`
--
ALTER TABLE `personnels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `spas`
--
ALTER TABLE `spas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `stages`
--
ALTER TABLE `stages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
