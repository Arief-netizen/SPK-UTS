-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Okt 2021 pada 09.23
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simapres`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prestasi` int(11) NOT NULL,
  `bahasa_asing` int(11) NOT NULL,
  `karya_ilmiah` int(11) NOT NULL,
  `ipk` double NOT NULL,
  `indeks_sks` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `fakultas`, `prestasi`, `bahasa_asing`, `karya_ilmiah`, `ipk`, `indeks_sks`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Dzikrul Hakam', '19051397001', 'VOKASI', 100, 100, 100, 4, 24, '2021-10-22 23:56:41', '2021-10-22 23:56:41'),
(2, 'Ni Made Widiasanti', '19051397002', 'VOKASI', 54, 58, 70, 3.54, 20.39, '2021-10-22 23:56:41', '2021-10-22 23:56:41'),
(3, 'Annisa Rusydina Sabila', '19051397004', 'VOKASI', 55, 86, 42, 3.71, 23.84, '2021-10-22 23:56:41', '2021-10-22 23:56:41'),
(4, 'Haidar Guhardy Muhammad', '19051397005', 'VOKASI', 85, 79, 80, 3.42, 22.81, '2021-10-22 23:56:41', '2021-10-22 23:56:41'),
(5, 'Imam Arief Al Baihaqy', '19051397006', 'VOKASI', 85, 79, 80, 3.72, 22.81, '2021-10-22 23:56:41', '2021-10-22 23:56:41'),
(6, 'Alvira Rhiza Ridwani', '19051397007', 'VOKASI', 68, 87, 60, 3.79, 18.84, '2021-10-22 23:56:41', '2021-10-22 23:56:41'),
(7, 'Muhammad Saiful Adim', '19051397009', 'VOKASI', 90, 76, 49, 3.53, 23.77, '2021-10-22 23:56:41', '2021-10-22 23:56:41'),
(8, 'Kharismaharani Aisyah Putri', '19051397015', 'VOKASI', 95, 79, 80, 3.92, 22.81, '2021-10-22 23:56:41', '2021-10-22 23:56:41'),
(9, 'Novan Ari Pradana', '19051397013', 'VOKASI', 90, 96, 42, 3.98, 22.06, '2021-10-22 23:56:41', '2021-10-22 23:56:41'),
(10, 'Mohammad Ibnu Nadhir', '19051397020', 'VOKASI', 1, 1, 1, 3.5, 18.84, '2021-10-22 23:56:41', '2021-10-22 23:56:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_10_24_000000_create_users_table', 1),
(2, '2021_10_24_100000_create_password_resets_table', 1),
(3, '2021_10_24_174820_create_role_table', 1),
(4, '2021_10_24_174943_create_role_user_table', 1),
(5, '2021_10_24_075836_create_mahasiswa_table', 1),
(6, '2021_10_24_143250_create_setting_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Operator', '2021-10-22 23:56:41', '2021-10-22 23:56:41'),
(2, 'User', '2021-10-22 23:56:41', '2021-10-22 23:56:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(1, 2, NULL, NULL),
(4, 1, NULL, NULL),
(4, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'c1', '{\"weight\":4,\"is_cost\":true}', '2021-10-22 20:57:31', '2021-10-22 20:57:31'),
(2, 'c2', '{\"weight\":2,\"is_cost\":false}', '2021-10-22 20:57:31', '2021-10-22 20:57:31'),
(3, 'c3', '{\"weight\":5,\"is_cost\":true}', '2021-10-22 20:57:31', '2021-10-22 20:57:31'),
(4, 'c4', '{\"weight\":1,\"is_cost\":false}', '2021-10-22 20:57:31', '2021-10-22 20:57:31'),
(5, 'c5', '{\"weight\":3,\"is_cost\":true}', '2021-10-22 20:57:31', '2021-10-22 20:57:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Operator', 'operator@gmail.com', NULL, '$2y$10$d0iBajk3flSWSayvhVFRe.yNJu0Ijy1nGaV3J0bVBDIo76lTQ/d8W', '87woUPiswV1n9stYP4SgaQUlZY7vf4CDWuwoqJmE8yigeSXZpfi0v2k98O6y', '2021-10-22 23:56:41', '2021-10-22 23:56:41');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- Indeks untuk tabel `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `role_id` (`role_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`,`key`) USING BTREE,
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `role`
--
ALTER TABLE `role`
  ADD CONSTRAINT `role_ibfk_1` FOREIGN KEY (`id`) REFERENCES `role_user` (`role_id`);

--
-- Ketidakleluasaan untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD CONSTRAINT `setting_ibfk_1` FOREIGN KEY (`id`) REFERENCES `mahasiswa` (`id`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id`) REFERENCES `role_user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
