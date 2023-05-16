-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 16 mai 2023 à 11:39
-- Version du serveur : 5.7.33
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mondomiservice`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `beneficiaries`
--

CREATE TABLE `beneficiaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `beneficiaries`
--

INSERT INTO `beneficiaries` (`id`, `user_id`) VALUES
(2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `evaluations`
--

CREATE TABLE `evaluations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `score` int(11) DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evaluations`
--

INSERT INTO `evaluations` (`id`, `service_id`, `score`, `comment`) VALUES
(1, 1, 5, 'Génial!'),
(2, 1, 5, 'Génial!'),
(3, 3, 4, 'Merci beaucoup!'),
(4, 5, 5, 'TikSa7a'),
(5, 11, 5, 'good job');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2013_05_02_124755_create_service_categories_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(11, '2019_08_19_000000_create_failed_jobs_table', 2),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(13, '2023_05_02_133808_create_services_table', 2),
(14, '2023_05_02_135151_create_evaluations_table', 2),
(15, '2023_05_11_213056_add_image_to_service_categories', 2),
(16, '2023_05_11_213203_add_image_to_service_subcategories', 2),
(19, '2023_05_12_173729_add_slug_to_service_categories', 3),
(20, '2023_05_12_173820_add_slug_to_service_sub_categories', 3),
(21, '2023_05_14_105522_add_status_and_created_at_to_services', 4),
(22, '2023_05_14_131618_add_score_and_comment_to_evaluations', 5);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_provider_id` bigint(20) UNSIGNED NOT NULL,
  `beneficiary_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `service_provider_id`, `beneficiary_id`, `status`, `created_at`) VALUES
(1, 1, 2, 'accepted', '2023-05-14 11:01:55'),
(3, 1, 2, 'accepted', '2023-05-14 14:37:49'),
(4, 2, 2, 'refused', '2023-05-14 14:38:45'),
(5, 2, 2, 'accepted', '2023-05-15 07:03:54'),
(6, 1, 2, 'accepted', '2023-05-15 12:30:37'),
(11, 4, 2, 'accepted', '2023-05-16 11:08:36'),
(12, 4, 2, 'pending', '2023-05-16 10:35:04');

-- --------------------------------------------------------

--
-- Structure de la table `service_categories`
--

CREATE TABLE `service_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `service_categories`
--

INSERT INTO `service_categories` (`id`, `name`, `slug`, `image`) VALUES
(1, 'Bricolage', 'bricolage', 'bricolage.svg'),
(2, 'Jardinage', 'jardinage', 'jardinage.svg'),
(3, 'Déménagement', 'demenagement', 'demenagement.svg'),
(4, 'Enfants', 'enfants', 'enfants.svg'),
(5, 'Animaux', 'animaux', 'animaux.svg'),
(6, 'Ménage', 'menage', 'menage.svg'),
(7, 'Informatique', 'informatique', 'informatique.svg'),
(8, 'Aide à domicile', 'aide-a-domicile', 'aide_à_domicile.svg'),
(9, 'Cours particuliers', 'cours-particuliers\r\n', 'cours-particuliers.svg\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `service_providers`
--

CREATE TABLE `service_providers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_sub_category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `service_providers`
--

INSERT INTO `service_providers` (`id`, `profile_picture`, `service_description`, `service_sub_category_id`, `user_id`) VALUES
(1, 'mouldi.jpg', NULL, 2, 8),
(2, '1683932034.jpg', NULL, 5, 9),
(4, '1684232191.jpg', '  Licence en chimie, 23 ans, Bilingue, j’ai fais du baby-sitting avec plus de 8 familles de Bambinosit qui étaient plus que satisfaites, ( âge des bébés entre 3 mois et 4 ans )  Je propose plusieurs jeux et activité ', 14, 12);

-- --------------------------------------------------------

--
-- Structure de la table `service_sub_categories`
--

CREATE TABLE `service_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_category_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `service_sub_categories`
--

INSERT INTO `service_sub_categories` (`id`, `name`, `slug`, `service_category_id`, `image`) VALUES
(1, 'Ameublement', 'ameublement', 1, 'ameublement.svg'),
(2, 'Assemblage de meuble', 'assemblage-de-meuble', 1, 'assemblage_de_meuble.svg'),
(5, 'Taille de haie', 'taille-de-haie', 2, 'taille_de_haie.svg'),
(6, 'Débroussaillage', 'debroussaillage', 2, 'debroussaillage.svg'),
(9, 'Faire promener son chien', 'faire-promener-son-chien', 5, 'faire_promener_son_chien.svg'),
(10, 'Gard de chat', 'garde-de-chat', 5, 'garde_de_chat.svg'),
(11, 'Déménagement tout compris', 'demenagement-tout-compris', 3, 'tout_compris.svg'),
(12, 'Garde de chien', 'garede-de-chien', 5, 'garde_de_chien.svg'),
(13, 'Garde d\'autres animaux', 'garde-d-autres-animaux', 5, 'autre_Animaux.svg'),
(14, 'Garde d\'enfants', 'garde-d-enfants', 4, 'garde_Enfant.svg'),
(15, 'Garde périscolaire', 'garde-periscolaire', 4, 'garde_périscolaire.svg'),
(16, 'Nettoyer mon ordinateur', 'nettoyer-mon-ordinateur', 7, 'nettoyer_mon_ordinateur.svg'),
(17, 'Cours d\'informatique', 'cours-d-informatique', 7, 'cours_d\'informatique.svg'),
(18, 'Installer une imprimante', 'installer-une-imprimante', 7, 'installer_une_imprimante.svg'),
(19, 'Autre job d\'informatique', 'autre-job-d-informatique', 7, 'autre_job_d\'informatique.svg'),
(20, 'Maintien à domicile', 'maintien-a-domicile', 8, 'maintien_à_domicile.svg'),
(21, 'Livraison de médicaments', 'livraison-de-medicaments', 8, 'livraison_de_médicaments.svg'),
(22, 'Retouche couture', 'retouche-couture', 8, 'retouche_couture.svg'),
(23, 'Livraison à domicile', 'livraison-a-domicile', 8, 'livraison-a-domicile.svg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_card_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone_number`, `id_card_number`, `city`, `email`, `email_verified_at`, `password`, `remember_token`) VALUES
(2, 'Iyed', 'Zairi', '25253125', '11125654', 'Sfax', 'Iyed@Example.com', NULL, '$2y$10$UUXZ6bE1Q3IWmbhTtPGn9O9NYk7HF/nq51p/EjoZXZX0RroZZkW4K', NULL),
(8, 'Mouldi', 'ElBanney', '12345678', '12345678', 'Sfax', 'Mouldi@Elbanney.com', NULL, '$2y$10$5tyf/R74IvUVlxszgnoAt.dEY9FQ349KCoqA1HHPWl9/YIC2Ugyhm', NULL),
(9, 'Mouldi', 'ElJardini', '87654321', '87654321', 'Sfax', 'Mouldi@Jardini.com', NULL, '$2y$10$JSRPekX1sZezZAHiMG6lMu06eF1Vtj7lGo892Ha45q2ENFriNh292', NULL),
(12, 'omar', 'talbi', '59662235', '11056985', 'Sfax', 'omar.talbi@gmail.com', NULL, '$2y$10$UnAOV0xibVPHTwjbC4ykiOFShLktVg4OCTItKX7CJvdODr3u9lsbq', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admins_user_id_foreign` (`user_id`);

--
-- Index pour la table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `beneficiaries_user_id_foreign` (`user_id`);

--
-- Index pour la table `evaluations`
--
ALTER TABLE `evaluations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `evaluations_service_id_foreign` (`service_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_service_provider_id_foreign` (`service_provider_id`),
  ADD KEY `services_beneficiary_id_foreign` (`beneficiary_id`);

--
-- Index pour la table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `service_categories_slug_unique` (`slug`);

--
-- Index pour la table `service_providers`
--
ALTER TABLE `service_providers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_providers_service_sub_category_id_foreign` (`service_sub_category_id`),
  ADD KEY `service_providers_user_id_foreign` (`user_id`);

--
-- Index pour la table `service_sub_categories`
--
ALTER TABLE `service_sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `service_sub_categories_slug_unique` (`slug`),
  ADD KEY `service_sub_categories_service_category_id_foreign` (`service_category_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`),
  ADD UNIQUE KEY `users_id_card_number_unique` (`id_card_number`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `evaluations`
--
ALTER TABLE `evaluations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `service_providers`
--
ALTER TABLE `service_providers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `service_sub_categories`
--
ALTER TABLE `service_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  ADD CONSTRAINT `beneficiaries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `evaluations`
--
ALTER TABLE `evaluations`
  ADD CONSTRAINT `evaluations_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_beneficiary_id_foreign` FOREIGN KEY (`beneficiary_id`) REFERENCES `beneficiaries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `services_service_provider_id_foreign` FOREIGN KEY (`service_provider_id`) REFERENCES `service_providers` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `service_providers`
--
ALTER TABLE `service_providers`
  ADD CONSTRAINT `service_providers_service_sub_category_id_foreign` FOREIGN KEY (`service_sub_category_id`) REFERENCES `service_sub_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `service_providers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `service_sub_categories`
--
ALTER TABLE `service_sub_categories`
  ADD CONSTRAINT `service_sub_categories_service_category_id_foreign` FOREIGN KEY (`service_category_id`) REFERENCES `service_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
