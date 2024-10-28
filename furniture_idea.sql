-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 28, 2024 at 03:14 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furniture_idea`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_barang` int NOT NULL,
  `deskripsi_barang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok_barang` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `nama_barang`, `kategori_barang`, `harga_barang`, `deskripsi_barang`, `gambar_barang`, `stok_barang`, `created_at`, `updated_at`) VALUES
(1, 'Kursi', 'chair', 200000, 'Kursi nyaman dan estetik', 'image/VWRoOLXtewhl066oLzIQOnfd8R0csd0Ja0ayIa95.webp', 99, '2023-12-05 04:51:33', '2024-01-16 02:31:01'),
(3, 'Janinge', 'chair', 425000, 'Kursi dg sandaran lengan, abu-abu', 'image/iB4TcU88eKxma1XD8FmlAw6egtker5CRYFPuA6jT.webp', 78, '2023-12-05 05:04:42', '2024-04-12 01:12:01'),
(4, 'Linneback', 'chair', 795000, 'Kursi malas, orrsta abu-abu muda', 'image/QD9U4NWb2BkGsFFt0HRtCcyPJo0jZGIDisy5IPRO.webp', 180, '2023-12-05 05:05:47', '2024-01-16 02:33:09'),
(5, 'KARLPETTER', 'chair', 800000, 'Kursi, gunnared abu-abu medium/sefast hitam', 'image/HJgvGFjsPegEUDetSsqGytCoZY1jesbn2Zquv2ki.webp', 296, '2023-12-05 05:07:08', '2024-01-16 01:19:22'),
(6, 'Nanmaro', 'chair', 1000000, 'Kursi santai, luar ruang, diwarnai cokelat muda/kuddarna krem', 'image/LbIdAi4K2NgktTLufsZbKmY7ypFa8kMlD5N86Zd3.webp', 230, '2023-12-05 05:07:55', '2023-12-05 05:07:55'),
(7, 'ÄPPLARYD', 'sofa', 999000, 'Sofa 3 dudukan, lejde abu-abu muda', 'image/HGRvU6ylzxnsJk9dylMvTGsxXZHYpJkMjnZcozAn.webp', 400, '2023-12-05 05:17:31', '2023-12-05 05:17:31'),
(8, 'Extorp', 'sofa', 5000000, 'Sofa 2 dudukan, hallarp krem', 'image/fD6BrAFGhWQIvug6oc5roCx1QV3B2m4MeFpUmfsR.webp', 118, '2023-12-05 05:19:07', '2023-12-07 03:35:48'),
(9, 'Linanas', 'sofa', 2000000, 'Sofa 2 dudukan, vissle abu-abu tua', 'image/QSSWCiYySPtCZTu2pmT6waEHWC2J7hGIr7GSiIrj.webp', 204, '2023-12-05 05:20:05', '2023-12-05 05:20:05'),
(10, 'ÄPPLARYD', 'sofa', 12000000, 'Sofa 3 dudukan, djuparp biru tua', 'image/tglXcxfffjL7RZJtR7eYELM5rAhZNVELKAH5pb38.webp', 100, '2023-12-05 05:23:11', '2023-12-05 05:23:11'),
(11, 'LANDSKRONA', 'sofa', 11000000, 'Sofa 3 dudukan, dengan chaise longue/gunnared hijau muda/kayu', 'image/RCdWEg9dkgYFAPEFaErEhV4GEyxtO9AzILHroF71.webp', 117, '2023-12-05 05:24:17', '2023-12-07 02:39:51'),
(12, 'EKTORP', 'sofa', 8000000, 'Sofa 3 dudukan dengan chaise longue, hallarp abu-abu', 'image/xWcBNuG7DxXeNiUwLtiMdzqoz68AGsPMKYZufTGs.webp', 230, '2023-12-05 05:25:11', '2023-12-05 05:25:11'),
(14, 'VATNESTRÖM', 'bed', 3990000, 'Kasur kantong pegas, kepadatan tambahan/alami, 180x200 cm', 'image/w5Z9HhWwezBQfR5mYzqszrvhWgkz0rZ3ordgiJJ9.webp', 210, '2023-12-05 07:07:43', '2023-12-05 07:07:43'),
(15, 'VADSÖ', 'bed', 3000000, 'Kasur pegas, kepadatan tambahan/biru muda, 90x200 cm', 'image/UOeWzN4dNyCwzkrS3Og0lNcUucUuGquZDs8XvQK4.webp', 130, '2023-12-05 07:08:50', '2023-12-05 07:08:50'),
(16, 'ÅFJÄLL', 'bed', 2000000, 'Kasur busa, keras medium/putih, 140x200 cm', 'image/LhG4xcSieMqt2G8MtCd6yd5UGBg3vvQx7VTtfqDx.webp', 140, '2023-12-05 07:10:08', '2023-12-05 07:10:08'),
(17, 'JESSHEIM', 'bed', 300000, 'Kasur futon, 80x195 cm', 'image/4sKYJ5ap6szpVoHf7BEqRAljHBZOimQabujasZaE.webp', 200, '2023-12-05 07:11:21', '2023-12-05 07:11:21'),
(18, 'ÅKREHAMN', 'bed', 5000000, 'Kasur busa, keras/putih, 90x200 cm', 'image/2qdiSsOsvyqWOks7WLSqVJF0zd9LMffNX2ph9s0g.webp', 120, '2023-12-05 07:15:14', '2023-12-05 07:15:14'),
(19, 'LAUTERS', 'lamp', 700000, 'Lampu lantai, kayu ash/putih', 'image/sHLwYFsqpXSGaRmE9WXQCX0TuX8G1ilFpXYgHitO.webp', 80, '2023-12-05 07:16:44', '2023-12-05 07:16:44'),
(20, 'SKURUP', 'lamp', 200000, 'Lampu gantung, hitam, 38 cm', 'image/H7NlaZViFyf8iImdfGjRokKE6NplJxMtO5HITJzj.webp', 25, '2023-12-05 07:18:08', '2023-12-05 07:18:08'),
(22, 'KINNAHULT', 'lamp', 500000, 'Lampu lantai, hitam kayu ash/hitam, 150 cm', 'image/Ql4UUWjA20DusCTvm7ouAlzicXJXP2TjNqTSRve6.webp', 50, '2023-12-05 07:19:58', '2023-12-05 07:19:58'),
(23, 'FYXNÄS', 'lamp', 100000, 'Lampu meja, toska, 44 cm', 'image/y5Ip6HrZsF8tHrI3JxkMu62DR84LZUlBnyDLjuir.webp', 104, '2023-12-05 07:24:29', '2023-12-05 07:24:29'),
(24, 'MONAZIT', 'lamp', 400000, 'Lampu sorot plafon dg 3 tempat, dilapisi nikel', 'image/taQx94AlFzOPOGIy2r1tZPeUyy2pqzWTSvHlliDy.webp', 40, '2023-12-05 07:25:35', '2023-12-05 07:25:35'),
(25, 'HEKTAR', 'lamp', 1000000, 'Lampu lantai dengan 3 tangkai lampu, abu-abu tua', 'image/jIKmxEoUJjFDlsgHwVaJUTwXFk64xcst8WyTSVdU.webp', 100, '2023-12-05 07:26:35', '2023-12-05 07:26:35'),
(26, 'ARÖD', 'lamp', 100000, 'Lampu lantai/baca, toska', 'image/4J5GjYbZNavVLRVzBQAYVlZKoJo9xbEKGQtbQENa.webp', 100, '2023-12-05 20:44:59', '2023-12-05 20:44:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_26_104043_add_image_users_table', 2),
(8, '2023_12_05_090644_create_barangs_table', 3),
(9, '2023_12_05_103141_add_kode_alamat_to_users_table', 4),
(14, '2023_12_06_070604_create_orders_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_brg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int NOT NULL,
  `jumlah` int NOT NULL,
  `total` int NOT NULL,
  `bukti` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `id_user`, `nama_brg`, `tanggal`, `alamat`, `harga`, `jumlah`, `total`, `bukti`, `status`, `created_at`, `updated_at`) VALUES
(1, '12', 'Linneback', 'Wednesday 6 December 2023', 'perumahan lupa', 795000, 2, 1590000, 'image/cdodpxZKj4ajrIO4vnaBgvJ2MctnbUpS1LIh9hLP.webp', 'Dikirim', '2023-12-06 10:13:22', '2023-12-11 03:35:56'),
(2, '12', 'Kursi', 'Wednesday 6 December 2023', 'perumahan lupa', 200000, 20, 4000000, 'image/eD6BIzjm1dT11Il4uQcyVoeMmlsJQfH3ebhgrLpU.webp', 'sampai', '2023-12-06 10:15:24', '2023-12-15 06:03:06'),
(3, '13', 'LANDSKRONA', 'Thursday 7 December 2023', 'perumahan lupa', 11000000, 3, 33000000, 'image/kLHx2MCmSJb2Q6x82VIEwYVvXQxm4rEusfgZLBQT.webp', 'Dikirim', '2023-12-07 02:39:51', '2023-12-11 03:42:19'),
(4, '12', 'Extorp', 'Thursday 7 December 2023', 'perumahan lupa', 5000000, 2, 10000000, 'image/aKiNzrXiJ3G1lAZzB8lr35FvFQMLTVqjobs8eZyJ.webp', 'Dikirim', '2023-12-07 03:35:48', '2023-12-18 02:02:30'),
(5, '14', 'Janinge', 'Friday 8 December 2023', 'asgard', 425000, 9, 3825000, 'image/l59W2xYh6yw3XM4JXnZTBteJUyO4cXiXlYQlSFg4.png', 'Dikirim', '2023-12-08 02:48:28', '2024-02-19 02:18:13'),
(6, '17', 'Janinge', 'Saturday 9 December 2023', 'Perumahan green amalia residence blok b3 no 1', 425000, 1, 425000, 'image/GqtqfUAvlYsti7gCAG3zyDZk08gQC7EKik3Wa60Q.jpg', 'Dikirim', '2023-12-09 10:23:50', '2024-05-01 02:32:04'),
(7, '17', 'KARLPETTER', 'Saturday 9 December 2023', 'Perumahan green amalia residence blok b3 no 2', 800000, 2, 1600000, 'image/OTPq2nC0ftej3cVwKTJEMReD6pbsmQGymEiArizi.jpg', 'Dikirim', '2023-12-09 10:24:48', '2024-05-01 02:34:44'),
(8, '12', 'KARLPETTER', 'Tuesday 16 January 2024', 'Perumahan Andreas', 800000, 2, 1600000, 'image/d8g2YV3QGOyc8iZbC0K3RnA1hShvRuI60vXq6jmN.png', 'Dikirim', '2024-01-16 01:19:22', '2024-01-16 01:20:06'),
(9, '12', 'Janinge', 'Tuesday 16 January 2024', 'Perumahan Green Amalia Residence', 425000, 1, 425000, 'image/2sBenof1gZ9sGhP92FoL97IdWQ0z1xar62reyRp0.jpg', 'Dikirim', '2024-01-16 02:17:39', '2024-05-01 02:34:17'),
(10, '12', 'Kursi', 'Tuesday 16 January 2024', 'Perumahan Andreas', 200000, 1, 200000, 'image/5uLPluNoLBhFYxl1jbSnVHI1X50t3JpZbPviytfB.jpg', 'Proses', '2024-01-16 02:31:01', '2024-01-16 02:31:01'),
(11, '12', 'Linneback', 'Tuesday 16 January 2024', 'smpn 31 bekasi', 795000, 3, 2385000, 'image/GrCzbJX5kMnS4w0HNBGlI97mBnCPxzlOjor73tj8.jpg', 'Proses', '2024-01-16 02:33:06', '2024-01-16 02:33:06'),
(12, '12', 'Linneback', 'Tuesday 16 January 2024', 'smpn 31 bekasi', 795000, 3, 2385000, 'image/v5dmMhI1YYjGwTyzMPsVxfMg212wqHiVPWr9TiE4.jpg', 'Proses', '2024-01-16 02:33:09', '2024-01-16 02:33:09'),
(13, '12', 'Janinge', 'Friday 12 April 2024', 'prambanan', 425000, 2, 850000, 'image/pVUnIl9hGppwN9rI43uAYUjn6WZZRKnGAaku4eJm.png', 'Dikirim', '2024-04-12 01:12:01', '2024-05-01 02:34:06');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kode` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `role`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`, `kode`, `alamat`) VALUES
(1, 'master', 'PROKER 1', 'zabuza@gmail.com', 'admin', NULL, '$2y$12$rt5VstjQUUqYBAc23tobneFY/KIvQYLRcDaLJmyUwo4zhMN8HlKcK', 'image/PMPsTq1ptvpJuFsuE2aKJa503dDmLJ1yd6Gx565t.jpg', NULL, '2023-11-27 20:02:48', '2023-11-27 20:02:48', '', ''),
(4, 'guru', 'Hafidz Dwi Rahmansyah', 'dwihafidz009@gmail.com', 'admin', NULL, '$2y$12$ycUOhfJc0j1xqTi93YeaYex1bZKv.q15X74dKNBG.t7aJHHycKpg2', 'image/48K56RF0MsMToBxP7tTGvo2ilwLHdEMIsTmYCFNz.jpg', NULL, '2023-11-29 19:15:11', '2023-11-29 19:15:11', '', ''),
(5, 'admin', 'hafidz', 'admin@gmail.com', 'admin', NULL, '$2y$12$/rvlpxS/03SquolTPpfLaeQu26KIecx54MetPNyutH86vSfZvRUqW', 'image/hpfSuu4XbX6azcCGfmSeXj8C8LxtSqUTtFOyGMf7.jpg', NULL, '2023-12-02 02:11:54', '2023-12-02 02:11:54', '', ''),
(7, 'tes', 'sbdsd', 'dws@gmail.com', 'admin', NULL, '$2y$12$H6IcAa5AsGlpk.UJCTNFC.iDH4bwL8juzqCD7iITsfuzOQlCxWtUC', 'image/O5c1DuKyeBzK1YqmFEzqlX5DNCnqbiTmK4O7vbh4.jpg', NULL, '2023-12-02 02:13:33', '2023-12-02 02:13:33', '', ''),
(8, 'guru', 'hafidz12', 'asd@gmail.com', 'admin', NULL, '$2y$12$1TSRy5JQaNCrjSOF8SXxRuzjILCqmvX0vF7lI1t1vfcr7BEx8eHK6', 'image/B7xHYfZn8JMbWGPd2Fq3B3Uje3VTm57AnwLT1s1S.jpg', NULL, '2023-12-02 02:15:17', '2023-12-02 02:15:17', '', ''),
(9, 'guru', 'Hafidz Dwi Rahmansyah', 'ahx@gmail.com', 'admin', NULL, '$2y$12$Hc3uhX1L8sJegis2KnCEi.P2UjFuoRv1E3qJfxVFFi3xNwORZabIK', 'image/PFan6BbafZ78F6hHmxSLLglpIi86kikjIsLvxxe6.jpg', NULL, '2023-12-03 21:55:15', '2023-12-03 21:55:15', '', ''),
(10, 'guru', 'hafidz12', 'akdhsjc@gmail.com', 'admin', NULL, '$2y$12$gnfmdkKlWTYvQZ.5NaMWdu0VXPUL.7yxqY45IbeJnknva913GKBym', 'image/gNJXTdKLZMSBFviX5syLTxRU5iNG97wrsqsfoCBL.jpg', NULL, '2023-12-03 21:58:52', '2023-12-03 21:58:52', '', ''),
(11, 'uji', 'uji', 'uji@gmail.com', 'admin', NULL, '$2y$12$z.6zoAMMQ3tyxaDgTGAjHu3Xwf1dQ.6GbBw81YZh7mFv/Mg3sNvPa', 'image/5hQtqPpkPTaCxd2KdMHKyChlPtSWWg9cyk1ZjJzt.jpg', NULL, '2023-12-05 01:37:22', '2023-12-05 01:37:22', '', ''),
(12, NULL, 'Rizky Pratama', 'rizky@gmail.com', 'user', NULL, '$2y$12$iS5yHsuG.iUK1UNdOAfvq.0BHqwxkz0OtO3jDAqKl2PL.7qI0LEwy', 'image/nUMH4Esr7E4vDJhmsORhS7w76SM1ozeKi5RHdP57.png', NULL, '2023-12-05 03:54:42', '2023-12-05 03:54:42', '16720', 'perumahan lupa'),
(14, NULL, 'fathirmh', 'fathir@gmail.com', 'user', NULL, '$2y$12$qIpZtKrd1howhJ/4CS5BFe/Gw3hbUScSnfqJh7say4BUaTOErMwDW', 'image/AiUeIMoCO2zQvklSHtAOhOCmR6r7PkqnOQwNlCzB.png', NULL, '2023-12-08 02:45:48', '2023-12-08 02:45:48', '16720', 'asgard'),
(15, NULL, 'Andi', 'andi@gmail.com', 'user', NULL, '$2y$12$hBzKlNDetd8DN9Ob2jla7euz.fYGhJJX5jZDLyziLeceaRVSoZRRC', 'image/2o2OE4L7HxmjjQmTUIfQ57m50RJ0iSqYacz0Nk4Q.jpg', NULL, '2023-12-08 13:37:42', '2023-12-08 13:37:42', '10110', 'Jl. Merdeka No. 1, Jakarta Pusat'),
(16, NULL, 'Budi', 'budi@gmail.com', 'user', NULL, '$2y$12$ozzddB5eiqCENbOeo4LWx.3H2yWsJVIyZ6sBRFZlvVmgm7hvMg.fC', 'image/obtCSfgz4OAiVOpAGsPSkginBxY8803Ah6CpBTsd.jpg', NULL, '2023-12-08 13:38:51', '2023-12-08 13:38:51', '10350', 'Jl. Thamrin No. 2, Jakarta Pusat'),
(17, NULL, 'Cici', 'cici@gmail.com', 'user', NULL, '$2y$12$aLt9xz8ke31frroWqWW6wudmtUM/j0oS/W2uc2mPwcGdf1CFWjGpW', 'image/P9s9kAWHbx7DvsBEhHSXPChRCMFuRsVkXKOknn69.jpg', NULL, '2023-12-08 13:40:00', '2023-12-08 13:40:00', '10270', 'Jl. Gatot Subroto No. 3, Jakarta Pusat'),
(18, NULL, 'Doni', 'doni@gmail.com', 'user', NULL, '$2y$12$wd7AGR78YQ8R7MJ8TumqtelBiWuHhp7PPRCz.zhTH75l0lmBnwVNO', 'image/JRTf9egWMVGbV4uLoV7NetP8XiymI4lsJgvpj2G6.jpg', NULL, '2023-12-08 13:41:02', '2023-12-08 13:41:02', '10210', 'Jl. Sudirman No. 4, Jakarta Pusat'),
(19, NULL, 'Erna', 'erna@gmail.com', 'user', NULL, '$2y$12$e9Ym24SsN9sx1FNH/tHtAeQh0UKitInQiaG4hYbIwC13YQCMUBQui', 'image/dhpqCYe0MUvQZCKIE4ZOfrF0Zw8MS7zWqvMqJFSx.jpg', NULL, '2023-12-08 13:41:57', '2023-12-08 13:41:57', '10350', 'Jl. MH. Thamrin No. 5, Jakarta Pusat'),
(20, NULL, 'Fajar', 'fajar@gmail.com', 'user', NULL, '$2y$12$u13w.A/2vC7/ZDX7cNLmf.HGGzaEv95MSvykd2Eae/wR1in9da0ma', 'image/YKQ0u43Lbq9nSx0yBdsfrJOunltMcUmShA8vlHmY.jpg', NULL, '2023-12-08 13:43:06', '2023-12-08 13:43:06', '10270', 'Jl. Gatot Subroto No. 6, Jakarta Pusat'),
(21, NULL, 'Galih', 'galih@gmail.com', 'user', NULL, '$2y$12$u87LJf9.k2XcVlMwen5oKO9NHn5bumMdhBwtWtozrFTOJmgDW3Sba', 'image/awy7Z4rU1RbpbOilS6Lqf5vXEDGscZsNWoKOo2Bg.jpg', NULL, '2023-12-08 13:44:19', '2023-12-08 13:44:19', '10210', 'Jl. Sudirman No. 7, Jakarta Pusat'),
(22, NULL, 'Hana', 'hana@gmail.com', 'user', NULL, '$2y$12$3ccCsP6M08F5XOwosVgIeOMIjs7s2pwmWOxQM8g3x1uY1d.OTnlA.', 'image/9l41UEjry8staocfunbXUwaUp0V6TOARnRimMmpT.jpg', NULL, '2023-12-08 13:45:12', '2023-12-08 13:45:12', '10350', 'Jl. MH. Thamrin No. 8, Jakarta Pusat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
