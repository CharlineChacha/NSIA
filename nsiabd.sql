-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 05 oct. 2021 à 17:08
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `nsiabd`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`, `email`, `role`, `created_at`, `updated_at`) VALUES
(1, 'AWILON', 'admin', 'admin@gmail.com', '0', '2021-09-23 06:32:32', '2021-09-23 06:32:32');

-- --------------------------------------------------------

--
-- Structure de la table `avoir`
--

CREATE TABLE `avoir` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `consommable_id` bigint(20) UNSIGNED NOT NULL,
  `fournisseur_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomCategorie` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nomCategorie`, `created_at`, `updated_at`) VALUES
(1, 'materiel numerique', '2021-09-23 05:27:30', '2021-09-23 05:27:30'),
(2, 'meubles bureautiques', '2021-09-23 05:27:42', '2021-09-23 05:27:42'),
(3, 'materiels bureautiques', '2021-09-23 05:28:05', '2021-09-23 05:28:05'),
(4, 'fournitures bureautiques', '2021-09-23 05:28:16', '2021-09-23 05:28:16'),
(5, 'fournitures informatiques', '2021-09-23 05:28:26', '2021-09-23 05:28:26');

-- --------------------------------------------------------

--
-- Structure de la table `consommables`
--

CREATE TABLE `consommables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `nomConsommable` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombreCritique` int(11) NOT NULL DEFAULT 0,
  `nombreAlert` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `consommables`
--

INSERT INTO `consommables` (`id`, `categorie_id`, `nomConsommable`, `nombreCritique`, `nombreAlert`, `created_at`, `updated_at`) VALUES
(1, 1, 'imprimante', 0, 0, '2021-09-23 05:28:43', '2021-09-23 05:28:43'),
(2, 1, 'scanner', 0, 0, '2021-09-23 05:29:25', '2021-09-23 05:29:25'),
(3, 1, 'projecteur', 0, 0, '2021-09-23 05:29:37', '2021-09-23 05:29:37'),
(4, 1, 'photocopieuse', 0, 0, '2021-09-23 05:30:13', '2021-09-23 05:30:13'),
(5, 2, 'tables de bureau', 0, 0, '2021-09-23 05:30:33', '2021-09-23 05:30:33'),
(6, 2, 'Chaises de bureau', 0, 0, '2021-09-23 05:30:46', '2021-09-23 05:30:46'),
(7, 4, 'papiers rames', 0, 0, '2021-09-23 05:31:30', '2021-09-23 05:31:30'),
(8, 4, 'cahier de registre', 0, 0, '2021-09-23 05:31:45', '2021-09-23 05:31:45'),
(9, 4, 'marker', 0, 0, '2021-09-23 05:31:56', '2021-09-23 05:31:56'),
(10, 5, 'cable RJ45', 0, 0, '2021-09-23 05:32:13', '2021-09-23 05:32:13'),
(11, 5, 'Disque dur', 0, 0, '2021-09-23 05:32:29', '2021-09-23 05:32:29'),
(12, 5, 'cle USB', 0, 0, '2021-09-23 05:32:51', '2021-09-23 05:32:51');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fournisseur_id` bigint(20) UNSIGNED NOT NULL,
  `numeroTel` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `fournisseur_id`, `numeroTel`, `created_at`, `updated_at`) VALUES
(1, 1, 97425860, '2021-09-23 06:30:26', '2021-09-23 06:30:26'),
(2, 2, 92658741, '2021-09-23 06:30:35', '2021-09-23 06:30:35'),
(3, 3, 97425810, '2021-09-23 06:30:56', '2021-09-23 06:30:56'),
(5, 4, 97427410, '2021-09-23 06:31:25', '2021-09-23 06:31:25'),
(6, 5, 22452245, '2021-09-23 06:31:41', '2021-09-23 06:31:41');

-- --------------------------------------------------------

--
-- Structure de la table `demandes`
--

CREATE TABLE `demandes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `consommable_id` bigint(20) UNSIGNED NOT NULL,
  `employe_id` bigint(20) UNSIGNED NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `choix` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplementaire` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `demandes`
--

INSERT INTO `demandes` (`id`, `consommable_id`, `employe_id`, `details`, `choix`, `supplementaire`, `created_at`, `updated_at`) VALUES
(1, 11, 3, 'disque externe 1To', 'besoin', 'besoin pour enregistrer les donnees', '2021-09-23 06:50:40', '2021-09-23 06:50:40'),
(2, 4, 3, 'photocopieuse', 'panne', 'panne', '2021-09-23 10:02:02', '2021-09-23 10:02:02');

-- --------------------------------------------------------

--
-- Structure de la table `departements`
--

CREATE TABLE `departements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomdep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomchefdep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `departements`
--

INSERT INTO `departements` (`id`, `nomdep`, `nomchefdep`, `created_at`, `updated_at`) VALUES
(1, 'administration', 'amouzou', '2021-09-23 05:42:39', '2021-09-23 05:42:39'),
(2, 'informatique', 'ALI', '2021-09-23 05:42:56', '2021-09-23 05:42:56'),
(3, 'secretariat', 'DOSSOU', '2021-09-23 05:43:06', '2021-09-23 05:43:06'),
(4, 'finance', 'FOLLY', '2021-09-23 05:43:17', '2021-09-23 05:43:17'),
(5, 'assurance', 'YAME', '2021-09-23 05:43:28', '2021-09-23 05:43:28'),
(6, 'Droit', 'YAYA', '2021-09-23 05:43:55', '2021-09-23 05:43:55'),
(7, 'affaires  internationaux', 'DJAME', '2021-09-23 05:44:23', '2021-09-23 05:44:23'),
(8, 'affaires publics', 'OURO', '2021-09-23 05:44:46', '2021-09-23 05:44:46'),
(9, 'affaires privees', 'GNANZIM', '2021-09-23 05:45:16', '2021-09-23 05:45:16');

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

CREATE TABLE `employes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `poste_id` bigint(20) UNSIGNED NOT NULL,
  `nomEmploye` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenomEmploye` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mailEmploye` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numeroTelinterne` int(11) NOT NULL,
  `photoEmploye` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`id`, `poste_id`, `nomEmploye`, `prenomEmploye`, `mailEmploye`, `password`, `numeroTelinterne`, `photoEmploye`, `created_at`, `updated_at`) VALUES
(3, 3, 'AZITO', 'alex', 'alex@gmail.com', 'dao130', 97428108, 'employe/K5dKAuN61Tfq8XfUokJc5kC0rovwlyR0dQrzyrTa.jpg', '2021-09-23 06:16:43', '2021-09-23 06:16:43');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseurs`
--

CREATE TABLE `fournisseurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomFournisseur` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresseFournisseur` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fournisseurs`
--

INSERT INTO `fournisseurs` (`id`, `nomFournisseur`, `adresseFournisseur`, `created_at`, `updated_at`) VALUES
(1, 'salemshop', 'avenou', '2021-09-23 06:28:50', '2021-09-23 06:28:50'),
(2, 'kimikoshop', 'baguida', '2021-09-23 06:29:16', '2021-09-23 06:29:16'),
(3, 'vase d\'honneur', 'zanguera', '2021-09-23 06:29:29', '2021-09-23 06:29:29'),
(4, 'bb services', 'adidoadin', '2021-09-23 06:29:40', '2021-09-23 06:29:40'),
(5, 'nematech', 'adidogome', '2021-09-23 06:29:53', '2021-09-23 06:29:53');

-- --------------------------------------------------------

--
-- Structure de la table `imputationbudgetaires`
--

CREATE TABLE `imputationbudgetaires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codeAnalytique` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `demande_id` bigint(20) UNSIGNED NOT NULL,
  `typeimputationbudgetaire_id` bigint(20) UNSIGNED NOT NULL,
  `montantBudgetAnnuel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `realisationBudget` int(11) NOT NULL,
  `montantBudgetRestant` int(11) NOT NULL,
  `montantDepense` int(11) NOT NULL,
  `montantBudgetApresDepense` int(11) NOT NULL,
  `observation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `journals`
--

CREATE TABLE `journals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employe_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_27_234804_create_departement_table', 1),
(5, '2021_07_27_235857_create_service_table', 1),
(6, '2021_07_28_000242_create_poste_table', 1),
(7, '2021_07_28_002230_create_profil_table', 1),
(8, '2021_07_28_002850_create_categorie_table', 1),
(9, '2021_07_28_005757_create_fournisseur_table', 1),
(10, '2021_07_28_005857_create_contact_table', 1),
(11, '2021_07_28_010205_create_type_imputation_budgetaire_table', 1),
(12, '2021_07_31_220611_create_employes_table', 1),
(13, '2021_07_31_220944_create_journals_table', 1),
(14, '2021_07_31_221151_create_consommables_table', 1),
(15, '2021_07_31_221409_create_demandes_table', 1),
(16, '2021_07_31_221612_create_niveaudevalidations_table', 1),
(17, '2021_07_31_221727_create_stockconsommables_table', 1),
(18, '2021_07_31_221840_create_imputationbudgetaires_table', 1),
(19, '2021_07_31_221945_create_avoir_table', 1),
(20, '2021_08_01_191212_create_modelles_table', 1),
(21, '2021_08_01_202103_create_admins_table', 1),
(22, '2021_08_31_153614_create__employe_profil__table', 1),
(23, '2021_09_15_225812_create_validateurs_table', 1),
(24, '2021_09_20_225921_notifications_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `modelles`
--

CREATE TABLE `modelles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `consommable_id` bigint(20) UNSIGNED NOT NULL,
  `referenceModel` int(11) NOT NULL,
  `detailModel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `modelles`
--

INSERT INTO `modelles` (`id`, `consommable_id`, `referenceModel`, `detailModel`, `created_at`, `updated_at`) VALUES
(1, 1, 1001, 'imprimante laser', '2021-09-23 05:38:03', '2021-09-23 05:38:03'),
(2, 2, 1002, 'scanner', '2021-09-23 05:38:56', '2021-09-23 05:38:56'),
(3, 3, 1003, 'projecteur', '2021-09-23 05:39:24', '2021-09-23 05:39:24'),
(4, 4, 1004, 'photocopieuse', '2021-09-23 05:39:47', '2021-09-23 05:39:47'),
(5, 7, 1005, 'papiers A4 et A5', '2021-09-23 05:40:27', '2021-09-23 05:40:27'),
(6, 8, 1006, 'cahier de registre', '2021-09-23 05:40:45', '2021-09-23 05:40:45'),
(7, 11, 1007, 'disque SATA', '2021-09-23 05:41:12', '2021-09-23 05:41:12'),
(8, 11, 1008, 'disque DDR', '2021-09-23 05:41:35', '2021-09-23 05:41:35'),
(9, 12, 1009, '16GB et 32GB', '2021-09-23 05:42:12', '2021-09-23 05:42:12');

-- --------------------------------------------------------

--
-- Structure de la table `niveaudevalidations`
--

CREATE TABLE `niveaudevalidations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `niveau1` tinyint(1) NOT NULL,
  `employe_id` bigint(20) UNSIGNED NOT NULL,
  `demande_id` bigint(20) UNSIGNED NOT NULL,
  `niveau2` tinyint(1) NOT NULL,
  `niveau3` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `postes`
--

CREATE TABLE `postes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `nomposte` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomuserposte` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datedebut` date NOT NULL,
  `datefin` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `postes`
--

INSERT INTO `postes` (`id`, `service_id`, `nomposte`, `nomuserposte`, `datedebut`, `datefin`, `created_at`, `updated_at`) VALUES
(1, 1, 'Directeur general', 'awuiti', '2021-08-30', '2021-10-10', '2021-09-23 05:53:47', '2021-09-23 05:53:47'),
(2, 2, 'secretaire', 'ATTIGAN', '2021-08-30', '2021-09-25', '2021-09-23 05:54:28', '2021-09-23 05:54:28'),
(3, 3, 'informaticien', 'AZITO', '2021-04-27', '2022-01-16', '2021-09-23 05:55:18', '2021-09-23 05:55:18'),
(4, 4, 'informaticien en reseau', 'QUITI', '2020-12-03', '2022-08-06', '2021-09-23 05:55:57', '2021-09-23 05:55:57'),
(5, 5, 'maintenancier  technnique', 'DOGBUI', '2021-09-02', '2022-03-13', '2021-09-23 05:56:33', '2021-09-23 05:56:33'),
(6, 6, 'assistante diecteur', 'BITOU', '2021-04-02', '2022-04-17', '2021-09-23 05:57:17', '2021-09-23 05:57:17'),
(7, 7, 'comptable', 'KPODO', '2021-03-12', '2022-01-15', '2021-09-23 05:57:47', '2021-09-23 05:57:47'),
(8, 8, 'protecteur d\'assurance', 'PALANGA', '2021-04-28', '2021-10-03', '2021-09-23 05:58:27', '2021-09-23 05:58:27'),
(9, 9, 'economiste', 'WATY', '2021-09-01', '2021-10-24', '2021-09-23 05:59:16', '2021-09-23 05:59:16'),
(10, 10, 'anbassadeur', 'WAFO', '2021-06-30', '2021-10-10', '2021-09-23 06:00:10', '2021-09-23 06:00:10');

-- --------------------------------------------------------

--
-- Structure de la table `profils`
--

CREATE TABLE `profils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libProfil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `profils`
--

INSERT INTO `profils` (`id`, `libProfil`, `created_at`, `updated_at`) VALUES
(1, 'assistante directeur', '2021-09-23 06:01:18', '2021-09-23 06:01:18'),
(2, 'informaticien', '2021-09-23 06:01:28', '2021-09-23 06:01:28'),
(3, 'protecteur d\'assurance', '2021-09-23 06:01:43', '2021-09-23 06:01:43'),
(4, 'gestionnaire des archives', '2021-09-23 06:02:29', '2021-09-23 06:02:29'),
(5, 'gestionnaire des finances', '2021-09-23 06:02:37', '2021-09-23 06:02:37'),
(6, 'Directeur general', '2021-09-23 06:02:48', '2021-09-23 06:02:48'),
(7, 'comptable', '2021-09-23 06:03:23', '2021-09-23 06:03:23'),
(8, 'community management', '2021-09-23 06:03:34', '2021-09-23 06:03:34');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `departement_id` bigint(20) UNSIGNED NOT NULL,
  `nomservice` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomchefservice` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `departement_id`, `nomservice`, `nomchefservice`, `created_at`, `updated_at`) VALUES
(1, 1, 'Direction', 'KOURA', '2021-09-23 05:46:08', '2021-09-23 05:46:08'),
(2, 1, 'secretariat', 'YOROU', '2021-09-23 05:46:28', '2021-09-23 05:46:28'),
(3, 2, 'developpement', 'AZIM', '2021-09-23 05:47:25', '2021-09-23 05:47:25'),
(4, 2, 'maintenancier web', 'HITOU', '2021-09-23 05:47:52', '2021-09-23 05:47:52'),
(5, 2, 'maintenancier  technnique', 'ATTIVI', '2021-09-23 05:48:30', '2021-09-23 05:48:30'),
(6, 3, 'secretariat assistance', 'MAVI', '2021-09-23 05:49:06', '2021-09-23 05:49:06'),
(7, 4, 'comptabilite', 'WIRI', '2021-09-23 05:49:31', '2021-09-23 05:49:31'),
(8, 5, 'assurance general (maladie, accident, deces)', 'AGBO', '2021-09-23 05:50:57', '2021-09-23 05:50:57'),
(9, 6, 'droit economique', 'KOMLAN', '2021-09-23 05:51:29', '2021-09-23 05:51:29'),
(10, 7, 'affaires internationaux', 'KODJO', '2021-09-23 05:52:00', '2021-09-23 05:52:00');

-- --------------------------------------------------------

--
-- Structure de la table `stockconsommables`
--

CREATE TABLE `stockconsommables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `consommable_id` bigint(20) UNSIGNED NOT NULL,
  `dateEntree` date NOT NULL,
  `quantite` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `stockconsommables`
--

INSERT INTO `stockconsommables` (`id`, `consommable_id`, `dateEntree`, `quantite`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-09-15', 14, '2021-09-23 05:33:51', '2021-09-23 05:33:51'),
(2, 2, '2021-09-14', 2, '2021-09-23 05:34:43', '2021-09-23 05:34:43'),
(3, 3, '2021-09-10', 1, '2021-09-23 05:34:58', '2021-09-23 05:34:58'),
(4, 4, '2021-09-06', 5, '2021-09-23 05:35:12', '2021-09-23 05:35:12'),
(5, 5, '2021-08-30', 21, '2021-09-23 05:35:30', '2021-09-23 05:35:30'),
(6, 6, '2021-09-06', 42, '2021-09-23 05:35:53', '2021-09-23 05:35:53'),
(7, 7, '2021-09-02', 58, '2021-09-23 05:36:12', '2021-09-23 05:36:12'),
(8, 8, '2021-09-03', 13, '2021-09-23 05:36:27', '2021-09-23 05:36:27'),
(9, 9, '2021-09-29', 59, '2021-09-23 05:36:44', '2021-09-23 05:36:44'),
(10, 10, '2021-09-06', 78, '2021-09-23 05:37:00', '2021-09-23 05:37:00'),
(11, 11, '2021-09-11', 24, '2021-09-23 05:37:18', '2021-09-23 05:37:18'),
(12, 12, '2021-09-07', 85, '2021-09-23 05:37:33', '2021-09-23 05:37:33'),
(13, 3, '2021-09-24', 5, '2021-09-23 09:55:58', '2021-09-23 09:55:58');

-- --------------------------------------------------------

--
-- Structure de la table `typeimputationbudgetaires`
--

CREATE TABLE `typeimputationbudgetaires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codeTypeImput` int(11) NOT NULL,
  `libelleTypeImput` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `validateurs`
--

CREATE TABLE `validateurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employe_id` bigint(20) UNSIGNED NOT NULL,
  `niveau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `validateurs`
--

INSERT INTO `validateurs` (`id`, `employe_id`, `niveau`, `created_at`, `updated_at`) VALUES
(4, 3, '1 : Comptable', '2021-09-23 09:58:46', '2021-09-23 09:58:46');

-- --------------------------------------------------------

--
-- Structure de la table `_employe_profil_`
--

CREATE TABLE `_employe_profil_` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profil_id` bigint(20) UNSIGNED NOT NULL,
  `employe_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `avoir_consommable_id_foreign` (`consommable_id`),
  ADD KEY `avoir_fournisseur_id_foreign` (`fournisseur_id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `consommables`
--
ALTER TABLE `consommables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `consommables_categorie_id_foreign` (`categorie_id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_numerotel_unique` (`numeroTel`),
  ADD KEY `contacts_fournisseur_id_foreign` (`fournisseur_id`);

--
-- Index pour la table `demandes`
--
ALTER TABLE `demandes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `demandes_consommable_id_foreign` (`consommable_id`),
  ADD KEY `demandes_employe_id_foreign` (`employe_id`);

--
-- Index pour la table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employes_mailemploye_unique` (`mailEmploye`),
  ADD UNIQUE KEY `employes_numerotelinterne_unique` (`numeroTelinterne`),
  ADD UNIQUE KEY `employes_photoemploye_unique` (`photoEmploye`),
  ADD KEY `employes_poste_id_foreign` (`poste_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fournisseurs_adressefournisseur_unique` (`adresseFournisseur`);

--
-- Index pour la table `imputationbudgetaires`
--
ALTER TABLE `imputationbudgetaires`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `imputationbudgetaires_codeanalytique_unique` (`codeAnalytique`),
  ADD KEY `imputationbudgetaires_demande_id_foreign` (`demande_id`),
  ADD KEY `imputationbudgetaires_typeimputationbudgetaire_id_foreign` (`typeimputationbudgetaire_id`);

--
-- Index pour la table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `journals_employe_id_foreign` (`employe_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `modelles`
--
ALTER TABLE `modelles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `modelles_consommable_id_foreign` (`consommable_id`);

--
-- Index pour la table `niveaudevalidations`
--
ALTER TABLE `niveaudevalidations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `niveaudevalidations_employe_id_foreign` (`employe_id`),
  ADD KEY `niveaudevalidations_demande_id_foreign` (`demande_id`);

--
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `postes`
--
ALTER TABLE `postes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postes_service_id_foreign` (`service_id`);

--
-- Index pour la table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_departement_id_foreign` (`departement_id`);

--
-- Index pour la table `stockconsommables`
--
ALTER TABLE `stockconsommables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stockconsommables_consommable_id_foreign` (`consommable_id`);

--
-- Index pour la table `typeimputationbudgetaires`
--
ALTER TABLE `typeimputationbudgetaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `validateurs`
--
ALTER TABLE `validateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `validateurs_niveau_unique` (`niveau`),
  ADD KEY `validateurs_employe_id_foreign` (`employe_id`);

--
-- Index pour la table `_employe_profil_`
--
ALTER TABLE `_employe_profil_`
  ADD PRIMARY KEY (`id`),
  ADD KEY `_employe_profil__profil_id_foreign` (`profil_id`),
  ADD KEY `_employe_profil__employe_id_foreign` (`employe_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `avoir`
--
ALTER TABLE `avoir`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `consommables`
--
ALTER TABLE `consommables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `demandes`
--
ALTER TABLE `demandes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `departements`
--
ALTER TABLE `departements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `employes`
--
ALTER TABLE `employes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `imputationbudgetaires`
--
ALTER TABLE `imputationbudgetaires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `journals`
--
ALTER TABLE `journals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `modelles`
--
ALTER TABLE `modelles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `niveaudevalidations`
--
ALTER TABLE `niveaudevalidations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `postes`
--
ALTER TABLE `postes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `stockconsommables`
--
ALTER TABLE `stockconsommables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `typeimputationbudgetaires`
--
ALTER TABLE `typeimputationbudgetaires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `validateurs`
--
ALTER TABLE `validateurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `_employe_profil_`
--
ALTER TABLE `_employe_profil_`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD CONSTRAINT `avoir_consommable_id_foreign` FOREIGN KEY (`consommable_id`) REFERENCES `consommables` (`id`),
  ADD CONSTRAINT `avoir_fournisseur_id_foreign` FOREIGN KEY (`fournisseur_id`) REFERENCES `fournisseurs` (`id`);

--
-- Contraintes pour la table `consommables`
--
ALTER TABLE `consommables`
  ADD CONSTRAINT `consommables_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_fournisseur_id_foreign` FOREIGN KEY (`fournisseur_id`) REFERENCES `fournisseurs` (`id`);

--
-- Contraintes pour la table `demandes`
--
ALTER TABLE `demandes`
  ADD CONSTRAINT `demandes_consommable_id_foreign` FOREIGN KEY (`consommable_id`) REFERENCES `consommables` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `demandes_employe_id_foreign` FOREIGN KEY (`employe_id`) REFERENCES `employes` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `employes`
--
ALTER TABLE `employes`
  ADD CONSTRAINT `employes_poste_id_foreign` FOREIGN KEY (`poste_id`) REFERENCES `postes` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `imputationbudgetaires`
--
ALTER TABLE `imputationbudgetaires`
  ADD CONSTRAINT `imputationbudgetaires_demande_id_foreign` FOREIGN KEY (`demande_id`) REFERENCES `demandes` (`id`),
  ADD CONSTRAINT `imputationbudgetaires_typeimputationbudgetaire_id_foreign` FOREIGN KEY (`typeimputationbudgetaire_id`) REFERENCES `typeimputationbudgetaires` (`id`);

--
-- Contraintes pour la table `journals`
--
ALTER TABLE `journals`
  ADD CONSTRAINT `journals_employe_id_foreign` FOREIGN KEY (`employe_id`) REFERENCES `employes` (`id`);

--
-- Contraintes pour la table `modelles`
--
ALTER TABLE `modelles`
  ADD CONSTRAINT `modelles_consommable_id_foreign` FOREIGN KEY (`consommable_id`) REFERENCES `consommables` (`id`);

--
-- Contraintes pour la table `niveaudevalidations`
--
ALTER TABLE `niveaudevalidations`
  ADD CONSTRAINT `niveaudevalidations_demande_id_foreign` FOREIGN KEY (`demande_id`) REFERENCES `demandes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `niveaudevalidations_employe_id_foreign` FOREIGN KEY (`employe_id`) REFERENCES `employes` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `postes`
--
ALTER TABLE `postes`
  ADD CONSTRAINT `postes_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_departement_id_foreign` FOREIGN KEY (`departement_id`) REFERENCES `departements` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `stockconsommables`
--
ALTER TABLE `stockconsommables`
  ADD CONSTRAINT `stockconsommables_consommable_id_foreign` FOREIGN KEY (`consommable_id`) REFERENCES `consommables` (`id`);

--
-- Contraintes pour la table `validateurs`
--
ALTER TABLE `validateurs`
  ADD CONSTRAINT `validateurs_employe_id_foreign` FOREIGN KEY (`employe_id`) REFERENCES `employes` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `_employe_profil_`
--
ALTER TABLE `_employe_profil_`
  ADD CONSTRAINT `_employe_profil__employe_id_foreign` FOREIGN KEY (`employe_id`) REFERENCES `employes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `_employe_profil__profil_id_foreign` FOREIGN KEY (`profil_id`) REFERENCES `profils` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
