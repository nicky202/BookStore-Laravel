-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 07 fév. 2024 à 12:37
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `book_store`
--

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_borrowed` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `description`, `image`, `is_borrowed`, `created_at`, `updated_at`) VALUES
(1, 'L\'Étranger', 'Albert Camus', 'Un classique philosophique explorant l\'absurdité de la vie à travers le personnage de Meursault.', 'images/8CvjGvEgvgvAnPTidyG3X69cT0eLmObVbb6lfZpB.jpg', 0, '2024-02-07 06:08:05', '2024-02-07 06:08:05'),
(2, '1984', 'George Orwell', 'Un roman dystopique qui décrit un monde sous surveillance constante et la lutte d\'un homme contre un régime totalitaire.', 'images/s8mSnTc9Ew5RRPVOD1jPonvkoPNGyeGT4HMd0mSc.jpg', 0, '2024-02-07 06:08:39', '2024-02-07 06:08:39'),
(3, 'Le Seigneur des Anneaux', 'J.R.R. Tolkien', 'Une épopée fantastique suivant la quête pour détruire un anneau maléfique et sauver la Terre du Milieu.', 'images/wCf1of8YGStbfEjDmBaOdlxYRB2fjymxnEaASh4h.jpg', 0, '2024-02-07 06:09:19', '2024-02-07 06:09:19'),
(4, 'Orgueil et Préjugés', 'Jane Austen', 'Une comédie romantique classique explorant les relations sociales et les préjugés au début du XIXe siècle en Angleterre.', 'images/tD00l8Jl30iCaGjougQGU7ta5bC6SvFKWdgBd8UC.jpg', 0, '2024-02-07 06:09:37', '2024-02-07 06:09:37'),
(5, 'Crime et Châtiment', 'Fiodor Dostoïevski', 'Un roman psychologique qui examine les conséquences morales d\'un meurtre et la recherche de la rédemption.', 'images/eynqYzfXSdJqGx03gLx12lTx09dcMMMchxkfeQwN.jpg', 0, '2024-02-07 06:10:05', '2024-02-07 06:10:05'),
(6, 'Chroniques martiennes', 'Ray Bradbury', 'Une série de récits explorant la colonisation de Mars et réfléchissant sur la nature humaine.', 'images/yLajMsZCLjOuIAp3u3ssENZQny6atlG6f9rUxRnG.jpg', 0, '2024-02-07 06:10:31', '2024-02-07 06:10:31'),
(7, 'La Servante écarlate', 'Margaret Atwood', 'Un récit dystopique dépeignant une société totalitaire où les femmes sont asservies pour procréer.', 'images/1Ur3U4gApR54B18dFCkSis0g2q66mK8wtgREpJsV.jpg', 0, '2024-02-07 06:11:50', '2024-02-07 06:11:50'),
(8, 'Harry Potter à l\'école des sorciers', 'J.K. Rowling', 'Le premier livre de la série qui suit les aventures magiques de Harry Potter et ses amis à Poudlard.', 'images/ekuHha3TVuVwvstk7mq1zAIF345JHUu24YlkRAIB.png', 0, '2024-02-07 06:12:12', '2024-02-07 06:12:12'),
(9, 'Cent Ans de Solitude', 'Gabriel García Márquez', 'Une saga familiale magique et poétique qui traverse plusieurs générations en Amérique latine.', 'images/mDy8oBJtoXnnZ7oyiZNmlPHcmcmDIjJXtmxDqoJK.jpg', 0, '2024-02-07 06:12:35', '2024-02-07 06:12:35'),
(10, 'Le Petit Prince', 'Antoine de Saint-Exupéry', 'Un conte philosophique mettant en lumière les rencontres du Petit Prince lors de son voyage à travers les planètes.', 'images/Pns1EQT1OsUCrU1nCwvZYd0fMWyCOvwcut43ag7j.jpg', 0, '2024-02-07 06:13:02', '2024-02-07 06:13:02');

-- --------------------------------------------------------

--
-- Structure de la table `book_users`
--

CREATE TABLE `book_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `borrowed_at` timestamp NULL DEFAULT NULL,
  `returned_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(25, '2014_10_12_000000_create_users_table', 1),
(26, '2014_10_12_100000_create_password_resets_table', 1),
(27, '2019_08_19_000000_create_failed_jobs_table', 1),
(28, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(29, '2024_02_06_025614_create_books_table', 1),
(30, '2024_02_06_051626_create_book_user_table', 1),
(31, '2024_02_06_052240_add_is_admin_to_users_table', 1),
(32, '2024_02_06_070442_add_is_active_to_users_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`, `is_active`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$HBqxUNEqb/iI1aY6BsWxue491PowkC/b6LbLiHBaBscgUUmPc42Qe', NULL, '2024-02-07 06:06:34', '2024-02-07 06:06:34', 1, 0),
(2, 'nicky rabesoa', 'nicky@gmail.com', NULL, '$2y$10$x7QVZbTseGz8uyiPal5GU.l44qP7ew9TrLT9l/ILqs3k3LZxz1oY2', NULL, '2024-02-07 06:13:35', '2024-02-07 06:19:18', 0, 1),
(3, 'rakoto be', 'rakoto@gmail.com', NULL, '$2y$10$XsTq.XoXf4NAWnZotyFu2e3Ze74HKYVpoMN8sSd571wc04fFWOPV2', NULL, '2024-02-07 06:19:03', '2024-02-07 06:19:03', 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `book_users`
--
ALTER TABLE `book_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_users_user_id_foreign` (`user_id`),
  ADD KEY `book_users_book_id_foreign` (`book_id`);

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
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `book_users`
--
ALTER TABLE `book_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `book_users`
--
ALTER TABLE `book_users`
  ADD CONSTRAINT `book_users_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `book_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
