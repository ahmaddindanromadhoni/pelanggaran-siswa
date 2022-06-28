-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2021 pada 01.51
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peringatan_hk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `nama_adm` varchar(50) NOT NULL,
  `email_adm` varchar(80) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `nama_adm`, `email_adm`, `password`) VALUES
(1, 'SMK Hasan Kafrawi', 'smkhkm@gmail.com', 'smkhk205');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `no_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `total_siswa` varchar(30) NOT NULL,
  `wali_kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`no_kelas`, `nama_kelas`, `total_siswa`, `wali_kelas`) VALUES
(5, 'X-RPL-I', '100', 'dindan'),
(6, 'X-RPL-II', '300', 'dindan'),
(7, 'X-RPL-III', '200', 'dindan'),
(10, 'X-Multimedia', '100', 'dindan'),
(11, 'XI-RPL-I', '100', 'dindan'),
(12, 'XI-RPL-II', '100', 'dindan'),
(13, 'XI-RPL-III', '100', 'dindan'),
(14, 'XI-Multimedia', '100', 'dindan'),
(15, 'XII-RPL-I', '100', 'dindan'),
(16, 'XII-RPL-II', '100', 'dindan'),
(17, 'XII-RPL-III', '10', 'dindan'),
(19, 'XII-Multimedia', '100', 'dindan romadhonii');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `no_peringatan` int(11) NOT NULL,
  `nis` int(40) NOT NULL,
  `nama_user` varchar(60) NOT NULL,
  `nama_wali` varchar(60) NOT NULL,
  `nama_kelas` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `pelanggaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggaran`
--

INSERT INTO `pelanggaran` (`no_peringatan`, `nis`, `nama_user`, `nama_wali`, `nama_kelas`, `tanggal`, `pelanggaran`) VALUES
(1, 123, 'Ahmad Dindan Romadhoni', 'dindan', 'XII-RPL-I', '2021-12-10', 'telat masuk kelas'),
(44, 456, 'Ahmad Supriyanto', 'dindan', 'XII-RPL-I', '2021-12-12', 'telat'),
(45, 789, 'Purwanto', 'dindan', 'XII-RPL-I', '2021-12-13', 'gak tau saya ngapain'),
(46, 789, 'Purwanto', 'dindan', 'XII-RPL-I', '2021-12-12', 'gak tau saya ngapain'),
(47, 987, 'Reza Dani', 'dindan', 'XII-RPL-I', '2021-12-13', 'telat'),
(48, 321, 'Prasetyo', 'dindan', 'XII-RPL-I', '2021-12-21', 'gak tau saya ngapain'),
(49, 654, 'Lelly Ermawati', 'dindan', 'XII-RPL-I', '2021-12-21', 'gak tau saya ngapain'),
(50, 145, 'Adelia Nor Fadilah', 'dindan', 'XII-RPL-I', '2021-12-14', 'telat'),
(51, 1234, 'Dindan Romadhoni', 'dindan', 'XII-Multimedia', '2021-12-15', 'gak tau saya ngapain'),
(52, 5678, 'Lelly Ermawati', 'dindan', 'XII-Multimedia', '2021-12-13', 'gak tau saya ngapain'),
(53, 1234, 'Dindan Romadhoni', 'dindan', 'XII-Multimedia', '2021-12-11', 'gak tau saya ngapain'),
(54, 1234, 'Dindan Romadhoni', 'dindan', 'XII-Multimedia', '2021-12-12', 'gak tau saya ngapain'),
(55, 5678, 'Lelly Ermawati', 'dindan', 'XII-Multimedia', '2021-12-17', 'gak tau saya ngapain'),
(56, 234, 'Dindan Romadhoni', 'dindan', 'XII-RPL-II', '2021-12-14', 'gak tau saya ngapain'),
(57, 234, 'Dindan Romadhoni', 'Syarif Abdurrohman', 'XII-RPL-II', '2021-12-13', 'gak tau saya ngapain'),
(58, 987, 'Lelly Ermawati', 'dindan', 'XII-RPL-II', '2021-12-12', 'gak tau saya ngapain'),
(59, 987, 'Lelly Ermawati', 'dindan', 'XII-RPL-II', '2021-12-11', 'gak tau saya ngapain'),
(60, 321, 'Adelia Nor Fadilah', 'dindan', 'XII-RPL-III', '2021-12-10', 'gak tau saya ngapain'),
(61, 321, 'Adelia Nor Fadilah', 'dindan', 'XII-RPL-III', '2021-12-13', 'gak tau saya ngapain'),
(62, 567, 'Ahmad Supriyanto', 'dindan', 'XII-RPL-III', '2021-12-14', 'telat'),
(63, 567, 'Ahmad Supriyanto', 'dindan', 'XII-RPL-III', '2021-12-12', 'gak tau saya ngapain'),
(64, 1987, 'Purwanto', 'dindan', 'XI-Multimedia', '2021-12-12', 'gak tau saya ngapain'),
(65, 1987, 'Purwanto', 'dindan', 'XI-Multimedia', '2021-12-11', 'gak tau saya ngapain'),
(66, 8787, 'Prasetyo', 'dindan', 'XI-Multimedia', '2021-12-12', 'gak tau saya ngapain'),
(67, 8787, 'Prasetyo', 'dindan', 'XI-Multimedia', '2021-12-12', 'gak tau saya ngapain'),
(68, 4321, 'Dindan Romadhoni', 'dindan', 'XI-RPL-III', '2021-12-12', 'gak tau saya ngapain'),
(69, 4321, 'Dindan Romadhoni', 'dindan', 'XI-RPL-III', '2021-12-14', 'gak tau saya ngapain'),
(70, 3456, 'Lelly Ermawati', 'dindan', 'XI-RPL-III', '2021-12-14', 'gak tau saya ngapain'),
(71, 6789, 'Adelia Nor Fadilah', 'dindan', 'XI-RPL-II', '2021-12-14', 'gak tau saya ngapain'),
(72, 5679, 'Ahmad Supriyanto', 'dindan', 'XI-RPL-II', '2021-12-13', 'telat'),
(73, 5679, 'Ahmad Supriyanto', 'dindan', 'XI-RPL-II', '2021-12-13', 'gak tau saya ngapain'),
(74, 4325, 'Dindan Romadhoni', 'dindan', 'XI-RPL-I', '2021-12-13', 'gak tau saya ngapain'),
(75, 4325, 'Dindan Romadhoni', 'dindan', 'XI-RPL-I', '2021-12-14', 'gak tau saya ngapain'),
(76, 7643, 'Purwanto', 'dindan', 'XI-RPL-I', '2021-12-15', 'gak tau saya ngapain'),
(77, 5432, 'Dindan Romadhoni', 'dindan', 'X-RPL-III', '2021-12-16', 'gak tau saya ngapain'),
(78, 5432, 'Dindan Romadhoni', 'dindan', 'X-RPL-III', '2021-12-13', 'gak tau saya ngapain'),
(79, 3451, 'Lelly Ermawati', 'dindan', 'X-RPL-III', '2021-12-12', 'gak tau saya ngapain'),
(80, 1235, 'Dindan Romadhoni', 'dindan', 'X-Multimedia', '2021-12-11', 'gak tau saya ngapain'),
(81, 1235, 'Dindan Romadhoni', 'dindan', 'X-Multimedia', '2021-12-11', 'gak tau saya ngapain'),
(82, 4345, 'Lelly Ermawati', 'dindan', 'X-Multimedia', '2021-12-12', 'gak tau saya ngapain'),
(83, 9867, 'Ahmad Supriyanto', 'dindan', 'X-RPL-II', '2021-12-12', 'gak tau saya ngapain'),
(84, 9867, 'Ahmad Supriyanto', 'dindan', 'X-RPL-II', '2021-12-14', 'gak tau saya ngapain'),
(85, 4534, 'Dindan Romadhoni', 'dindan', 'X-RPL-II', '2021-12-14', 'gak tau saya ngapain'),
(86, 6547, 'Lelly Ermawati', 'dindan', 'X-RPL-I', '2021-12-28', 'gak tau saya ngapain'),
(87, 3209, 'Dindan Romadhoni', 'dindan', 'X-RPL-I', '2021-12-14', 'gak tau saya ngapain');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`no_kelas`);

--
-- Indeks untuk tabel `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`no_peringatan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `no_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `no_peringatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
