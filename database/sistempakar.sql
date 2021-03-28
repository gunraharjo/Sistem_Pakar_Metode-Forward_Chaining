-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Sep 2020 pada 13.48
-- Versi server: 10.1.33-MariaDB
-- Versi PHP: 7.1.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistempakar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id` int(11) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `nama_gejala` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id`, `kode`, `nama_gejala`, `created_at`, `updated_at`) VALUES
(1, 'G1', 'Konsentrasi Mudah Teralihkan', '2020-07-02 03:12:48', '2020-07-11 06:25:55'),
(2, 'G2', 'Mudah Merasa Lelah dan Cemas', '2020-07-01 23:28:50', '2020-07-11 06:26:07'),
(3, 'G3', 'Susah bernapas dengan normal', '2020-07-01 23:28:50', '2020-07-11 06:26:18'),
(4, 'G4', 'Suka Gelisah', '2020-07-01 23:28:50', '2020-07-11 06:26:46'),
(5, 'G5', 'menarik diri dari aktivitas sosial', '2020-07-01 23:28:50', '2020-07-11 06:26:56'),
(6, 'G6', 'Kesulitan mengendalikan perasaan khawatir,kecemasan, dan ketakutan', '2020-07-01 23:28:50', '2020-07-11 06:27:10'),
(7, 'G7', 'Bermasalah dengan memori dan penalaran', '2020-07-01 23:28:50', '2020-07-11 06:27:21'),
(8, 'G8', 'Ekspresi Muka Kurang Hidup', '2020-07-01 23:28:50', '2020-07-11 06:27:33'),
(9, 'G9', 'Sulit beradaptasi sosial dengan orang lain', '2020-07-01 23:28:50', '2020-07-26 07:04:04'),
(10, 'G10', 'Merasa ingin selalu sendiri', '2020-07-01 23:28:50', '2020-07-26 07:05:33'),
(11, 'G11', 'Kurangnya Konsentrasi', '2020-07-01 23:28:50', '2020-07-11 06:28:10'),
(12, 'G12', 'Tidak bisa fokus', '2020-07-01 23:28:50', '2020-07-11 06:28:24'),
(13, 'G13', 'Tidak Sabar', '2020-07-01 23:28:50', '2020-07-11 06:28:46'),
(14, 'G14', 'Jantung berdebar debar', '2020-07-01 23:28:50', '2020-07-11 06:28:58'),
(15, 'G15', 'Berkeringat dan Gemetar', '2020-07-01 23:28:50', '2020-07-11 06:29:12'),
(16, 'G16', 'Memilih berdiam bersembunyi menghindari orang', '2020-07-01 23:28:50', '2020-07-11 06:29:27'),
(17, 'G17', 'Menghindari tatap mata dengan lawan bicara', '2020-07-01 23:28:50', '2020-07-11 06:30:19'),
(18, 'G18', 'Cepat Bosan dengan rutinitas', '2020-07-01 23:28:50', '2020-07-11 06:30:31'),
(19, 'G19', 'Tidak Mempunyai Perhatian', '2020-07-01 23:28:50', '2020-07-11 06:30:43'),
(20, 'G20', 'Mengalami kesulitan koordinasi', '2020-07-01 23:28:50', '2020-07-11 06:30:55'),
(21, 'G21', 'Mengalami Gangguan Tidur(mimpi buruk)', '2020-07-01 23:28:50', '2020-07-11 06:31:09'),
(22, 'G22', 'Kram Otot(baik kepala maupun perut)', '2020-07-01 23:28:50', '2020-07-11 06:31:20'),
(23, 'G23', 'Napas tersengal-sengal', '2020-07-01 23:28:50', '2020-07-11 06:31:50'),
(24, 'G24', 'Tangan kaki kram dan kesemutan(Otot Tegang)', '2020-07-01 23:28:50', '2020-07-11 06:32:05'),
(25, 'G25', 'wajah memerah ketika diminta berbicara didepan orang', '2020-07-01 23:28:50', '2020-07-26 07:27:03'),
(26, 'G26', 'Gugup berlebihan ketika melakukan interaksi sosial', '2020-07-01 23:28:50', '2020-07-11 06:32:30'),
(27, 'G27', 'Kurangnya kepercayaan diri', '2020-07-01 23:28:50', '2020-07-11 06:32:41'),
(28, 'G28', 'Ketidak pedulian dan kurangnya emosi ke obyek, orang dan peristiwa', '2020-07-01 23:28:50', '2020-07-11 06:32:56'),
(29, 'G29', 'Gerakan tubuh dan pola yang aneh', '2020-07-01 23:28:50', '2020-07-11 06:33:06'),
(30, 'G30', 'Kesulitan dalam berbicara', '2020-07-01 23:28:50', '2020-07-11 06:33:17'),
(31, 'G31', 'Sangat aktif tidak bisa diam', '2020-07-01 23:28:50', '2020-07-11 06:33:31'),
(32, 'G32', 'Kesulitan belajar membaca,mengeja,menulis, dan melafalkan sesuatu', '2020-07-01 23:28:50', '2020-07-11 06:33:44'),
(33, 'G33', 'Sulit dalam mengembangkan potensi belajar', '2020-07-01 23:28:50', '2020-07-26 07:09:09'),
(34, 'G34', 'Mengalami kesulitan untuk belajar huruf-huruf dasar (alfabet)', '2020-07-01 23:28:50', '2020-07-26 08:15:37'),
(35, 'G35', 'Sulit membedakan kata-kata yang serupa, atau bahkan huruf yang serupa (seperti b dan d)', '2020-07-01 23:28:50', '2020-07-11 06:34:24'),
(36, 'G36', 'Kesulitan untuk menghafal', '2020-07-01 23:28:50', '2020-07-11 06:34:34'),
(37, 'G37', 'Memiliki dua kepribadian yang berbeda-beda', '2020-07-01 23:28:50', '2020-07-11 06:34:45'),
(38, 'G38', 'Halusinasi baik audio maupun visual juga mungkin terjadi', '2020-07-01 23:28:50', '2020-07-11 06:34:56'),
(39, 'G39', 'Tindakan yang dilakukan dapat merugikan orang lain.', '2020-07-01 23:28:50', '2020-07-11 06:35:07'),
(40, 'G40', 'Ketakutan pada tempat umum', '2020-07-01 23:28:50', '2020-07-11 06:35:20'),
(41, 'G41', 'Banyak berbicara', '2020-07-01 23:28:50', '2020-07-26 07:15:31'),
(42, 'G42', 'Berbicara dan melihat hal-hal yang tidak ada Halusinasi', '2020-07-01 23:28:50', '2020-07-11 06:36:16'),
(43, 'G43', 'Mengalami peningkatan atau penurunan mood yang intensitasnya jauh lebih ekstrem dan durasi perubahan cukup lama', '2020-07-01 23:28:50', '2020-07-26 08:08:30'),
(44, 'G44', 'Gangguan suasana hati yang berlebihan', '2020-07-01 23:28:50', '2020-07-11 06:37:15'),
(45, 'G45', 'Berbicara tanpa berfikir dan bertindak emosional', '2020-07-01 23:28:50', '2020-07-11 06:37:27'),
(46, 'G46', 'Berbicara terus tanpa mendengarkan disekitar', '2020-07-01 23:28:50', '2020-07-26 08:22:06'),
(47, 'G47', 'Menyentuh dan bermain dengan segala sesuatu', '2020-07-01 23:28:50', '2020-07-11 06:38:06'),
(48, 'G48', 'Masing-masing dari kepribadian ini memiliki nama, pola pikir, kebiasaan, berbeda', '2020-07-01 23:28:50', '2020-07-11 06:38:16'),
(49, 'G49', 'Agresif', '2020-07-01 23:28:50', '2020-07-11 06:38:30'),
(50, 'G50', 'Tidak akan merasa bersalah jika melakukan kesalahan', '2020-07-01 23:28:50', '2020-07-11 06:38:42'),
(51, 'G51', 'Jarang menunjukkan emosi, terutama emosi sosial seperti rasa malu atau bersalah', '2020-07-01 23:28:50', '2020-07-11 06:38:54'),
(52, 'G52', 'Tidak bertanggung jawab atau justru menyalahkan orang lain atas kesalahan yang dilakukannya sendiri', '2020-07-01 23:28:50', '2020-07-11 06:39:04'),
(53, 'G53', 'Kata-kata yang diucapkan terasa tidak tulus', '2020-07-01 23:28:50', '2020-07-11 06:39:14'),
(55, 'G54', 'Berulang kali melanggar hak orang lain, dan mengintimidasi', '2020-07-02 01:56:06', '2020-07-26 07:20:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id` int(11) NOT NULL,
  `id_konsultasi` varchar(11) NOT NULL,
  `id_user` varchar(11) NOT NULL,
  `kode_penyakit` varchar(5) NOT NULL,
  `kode_gejala` varchar(5) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konsultasi`
--

INSERT INTO `konsultasi` (`id`, `id_konsultasi`, `id_user`, `kode_penyakit`, `kode_gejala`, `status`, `created_at`, `updated_at`) VALUES
(527, '2970106', '15', 'P1', 'G1', 1, '2020-07-26 09:38:47', '2020-07-26 09:38:47'),
(528, '2970106', '15', 'P1', 'G2', 1, '2020-07-26 09:38:47', '2020-07-26 09:38:47'),
(529, '2970106', '15', 'P1', 'G3', 1, '2020-07-26 09:38:47', '2020-07-26 09:38:47'),
(530, '2970106', '15', 'P1', 'G4', 1, '2020-07-26 09:38:48', '2020-07-26 09:38:48'),
(531, '2970106', '15', 'P1', 'G6', 1, '2020-07-26 09:38:48', '2020-07-26 09:38:48'),
(532, '2970106', '15', 'P1', 'G13', 1, '2020-07-26 09:38:48', '2020-07-26 09:38:48'),
(533, '2970106', '15', 'P1', 'G18', 1, '2020-07-26 09:38:48', '2020-07-26 09:38:48'),
(534, '2970106', '15', 'P1', 'G21', 1, '2020-07-26 09:38:48', '2020-07-26 09:38:48'),
(535, '2970106', '15', 'P1', 'G22', 1, '2020-07-26 09:38:48', '2020-07-26 09:38:48'),
(536, '6922045', '16', 'Tidak', 'G1', 1, '2020-07-26 10:07:28', '2020-07-26 10:07:28'),
(537, '6922045', '16', 'Tidak', 'G2', 1, '2020-07-26 10:07:28', '2020-07-26 10:07:28'),
(538, '6922045', '16', 'Tidak', 'G3', 1, '2020-07-26 10:07:28', '2020-07-26 10:07:28'),
(539, '6922045', '16', 'Tidak', 'G4', 1, '2020-07-26 10:07:28', '2020-07-26 10:07:28'),
(540, '6922045', '16', 'Tidak', 'G6', 1, '2020-07-26 10:07:28', '2020-07-26 10:07:28'),
(541, '6922045', '16', 'Tidak', 'G13', 1, '2020-07-26 10:07:28', '2020-07-26 10:07:28'),
(542, '6922045', '16', 'Tidak', 'G18', 1, '2020-07-26 10:07:28', '2020-07-26 10:07:28'),
(543, '7084458', '16', 'Tidak', 'G1', 1, '2020-07-26 10:10:16', '2020-07-26 10:10:16'),
(544, '7084458', '16', 'Tidak', 'G3', 1, '2020-07-26 10:10:16', '2020-07-26 10:10:16'),
(545, '7084458', '16', 'Tidak', 'G2', 0, '2020-07-26 10:10:16', '2020-07-26 10:10:16'),
(546, '2329222', '15', 'P1', 'G1', 1, '2020-07-29 03:25:52', '2020-07-29 03:25:52'),
(547, '2329222', '15', 'P1', 'G2', 1, '2020-07-29 03:25:52', '2020-07-29 03:25:52'),
(548, '2329222', '15', 'P1', 'G3', 1, '2020-07-29 03:25:52', '2020-07-29 03:25:52'),
(549, '2329222', '15', 'P1', 'G4', 1, '2020-07-29 03:25:52', '2020-07-29 03:25:52'),
(550, '2329222', '15', 'P1', 'G6', 1, '2020-07-29 03:25:52', '2020-07-29 03:25:52'),
(551, '2329222', '15', 'P1', 'G13', 1, '2020-07-29 03:25:52', '2020-07-29 03:25:52'),
(552, '2329222', '15', 'P1', 'G18', 1, '2020-07-29 03:25:52', '2020-07-29 03:25:52'),
(553, '2329222', '15', 'P1', 'G21', 1, '2020-07-29 03:25:52', '2020-07-29 03:25:52'),
(554, '2329222', '15', 'P1', 'G22', 1, '2020-07-29 03:25:53', '2020-07-29 03:25:53'),
(555, '3893408', '15', 'Tidak', 'G1', 1, '2020-07-29 14:08:52', '2020-07-29 14:08:52'),
(556, '3893408', '15', 'Tidak', 'G4', 1, '2020-07-29 14:08:52', '2020-07-29 14:08:52'),
(557, '3893408', '15', 'Tidak', 'G5', 1, '2020-07-29 14:08:52', '2020-07-29 14:08:52'),
(558, '3893408', '15', 'Tidak', 'G7', 1, '2020-07-29 14:08:52', '2020-07-29 14:08:52'),
(559, '3893408', '15', 'Tidak', 'G2', 0, '2020-07-29 14:08:52', '2020-07-29 14:08:52'),
(560, '3893408', '15', 'Tidak', 'G3', 0, '2020-07-29 14:08:52', '2020-07-29 14:08:52'),
(561, '5728910', '15', 'P6', 'G1', 1, '2020-07-29 14:10:13', '2020-07-29 14:10:13'),
(562, '5728910', '15', 'P6', 'G4', 1, '2020-07-29 14:10:14', '2020-07-29 14:10:14'),
(563, '5728910', '15', 'P6', 'G5', 1, '2020-07-29 14:10:14', '2020-07-29 14:10:14'),
(564, '5728910', '15', 'P6', 'G7', 1, '2020-07-29 14:10:14', '2020-07-29 14:10:14'),
(565, '5728910', '15', 'P6', 'G8', 1, '2020-07-29 14:10:14', '2020-07-29 14:10:14'),
(566, '5728910', '15', 'P6', 'G9', 1, '2020-07-29 14:10:14', '2020-07-29 14:10:14'),
(567, '5728910', '15', 'P6', 'G10', 1, '2020-07-29 14:10:14', '2020-07-29 14:10:14'),
(568, '5728910', '15', 'P6', 'G11', 1, '2020-07-29 14:10:14', '2020-07-29 14:10:14'),
(569, '5728910', '15', 'P6', 'G12', 1, '2020-07-29 14:10:14', '2020-07-29 14:10:14'),
(570, '5728910', '15', 'P6', 'G13', 1, '2020-07-29 14:10:14', '2020-07-29 14:10:14'),
(571, '5728910', '15', 'P6', 'G17', 1, '2020-07-29 14:10:14', '2020-07-29 14:10:14'),
(572, '5728910', '15', 'P6', 'G19', 1, '2020-07-29 14:10:14', '2020-07-29 14:10:14'),
(573, '5728910', '15', 'P6', 'G20', 1, '2020-07-29 14:10:15', '2020-07-29 14:10:15'),
(574, '5728910', '15', 'P6', 'G27', 1, '2020-07-29 14:10:15', '2020-07-29 14:10:15'),
(575, '5728910', '15', 'P6', 'G28', 1, '2020-07-29 14:10:15', '2020-07-29 14:10:15'),
(576, '5728910', '15', 'P6', 'G29', 1, '2020-07-29 14:10:15', '2020-07-29 14:10:15'),
(577, '5728910', '15', 'P6', 'G30', 1, '2020-07-29 14:10:15', '2020-07-29 14:10:15'),
(578, '5728910', '15', 'P6', 'G31', 1, '2020-07-29 14:10:15', '2020-07-29 14:10:15'),
(579, '5728910', '15', 'P6', 'G32', 1, '2020-07-29 14:10:15', '2020-07-29 14:10:15'),
(580, '5728910', '15', 'P6', 'G33', 1, '2020-07-29 14:10:15', '2020-07-29 14:10:15'),
(581, '5728910', '15', 'P6', 'G34', 1, '2020-07-29 14:10:15', '2020-07-29 14:10:15'),
(582, '5728910', '15', 'P6', 'G35', 1, '2020-07-29 14:10:15', '2020-07-29 14:10:15'),
(583, '5728910', '15', 'P6', 'G36', 1, '2020-07-29 14:10:15', '2020-07-29 14:10:15'),
(584, '5728910', '15', 'P6', 'G2', 0, '2020-07-29 14:10:15', '2020-07-29 14:10:15'),
(585, '5728910', '15', 'P6', 'G3', 0, '2020-07-29 14:10:15', '2020-07-29 14:10:15'),
(586, '2660744', '15', 'Tidak', 'G1', 0, '2020-07-29 14:11:04', '2020-07-29 14:11:04'),
(587, '2660744', '15', 'Tidak', 'G2', 0, '2020-07-29 14:11:04', '2020-07-29 14:11:04'),
(588, '2660744', '15', 'Tidak', 'G5', 0, '2020-07-29 14:11:04', '2020-07-29 14:11:04'),
(589, '2660744', '15', 'Tidak', 'G7', 0, '2020-07-29 14:11:04', '2020-07-29 14:11:04'),
(590, '9845191', '17', 'P1', 'G1', 1, '2020-07-29 14:30:04', '2020-07-29 14:30:04'),
(591, '9845191', '17', 'P1', 'G2', 1, '2020-07-29 14:30:04', '2020-07-29 14:30:04'),
(592, '9845191', '17', 'P1', 'G3', 1, '2020-07-29 14:30:04', '2020-07-29 14:30:04'),
(593, '9845191', '17', 'P1', 'G4', 1, '2020-07-29 14:30:04', '2020-07-29 14:30:04'),
(594, '9845191', '17', 'P1', 'G6', 1, '2020-07-29 14:30:04', '2020-07-29 14:30:04'),
(595, '9845191', '17', 'P1', 'G13', 1, '2020-07-29 14:30:04', '2020-07-29 14:30:04'),
(596, '9845191', '17', 'P1', 'G18', 1, '2020-07-29 14:30:04', '2020-07-29 14:30:04'),
(597, '9845191', '17', 'P1', 'G21', 1, '2020-07-29 14:30:04', '2020-07-29 14:30:04'),
(598, '9845191', '17', 'P1', 'G22', 1, '2020-07-29 14:30:04', '2020-07-29 14:30:04'),
(599, '3979936', '15', 'P1', 'G1', 1, '2020-07-29 15:30:59', '2020-07-29 15:30:59'),
(600, '3979936', '15', 'P1', 'G2', 1, '2020-07-29 15:30:59', '2020-07-29 15:30:59'),
(601, '3979936', '15', 'P1', 'G3', 1, '2020-07-29 15:30:59', '2020-07-29 15:30:59'),
(602, '3979936', '15', 'P1', 'G4', 1, '2020-07-29 15:30:59', '2020-07-29 15:30:59'),
(603, '3979936', '15', 'P1', 'G6', 1, '2020-07-29 15:30:59', '2020-07-29 15:30:59'),
(604, '3979936', '15', 'P1', 'G13', 1, '2020-07-29 15:30:59', '2020-07-29 15:30:59'),
(605, '3979936', '15', 'P1', 'G18', 1, '2020-07-29 15:30:59', '2020-07-29 15:30:59'),
(606, '3979936', '15', 'P1', 'G21', 1, '2020-07-29 15:30:59', '2020-07-29 15:30:59'),
(607, '3979936', '15', 'P1', 'G22', 1, '2020-07-29 15:30:59', '2020-07-29 15:30:59'),
(608, '6391478', '18', 'P1', 'G1', 1, '2020-07-29 18:06:49', '2020-07-29 18:06:49'),
(609, '6391478', '18', 'P1', 'G2', 1, '2020-07-29 18:06:49', '2020-07-29 18:06:49'),
(610, '6391478', '18', 'P1', 'G3', 1, '2020-07-29 18:06:49', '2020-07-29 18:06:49'),
(611, '6391478', '18', 'P1', 'G4', 1, '2020-07-29 18:06:49', '2020-07-29 18:06:49'),
(612, '6391478', '18', 'P1', 'G6', 1, '2020-07-29 18:06:49', '2020-07-29 18:06:49'),
(613, '6391478', '18', 'P1', 'G13', 1, '2020-07-29 18:06:49', '2020-07-29 18:06:49'),
(614, '6391478', '18', 'P1', 'G18', 1, '2020-07-29 18:06:50', '2020-07-29 18:06:50'),
(615, '6391478', '18', 'P1', 'G21', 1, '2020-07-29 18:06:50', '2020-07-29 18:06:50'),
(616, '6391478', '18', 'P1', 'G22', 1, '2020-07-29 18:06:50', '2020-07-29 18:06:50'),
(617, '9429283', '19', 'Tidak', 'G1', 1, '2020-07-29 19:07:27', '2020-07-29 19:07:27'),
(618, '9429283', '19', 'Tidak', 'G2', 1, '2020-07-29 19:07:27', '2020-07-29 19:07:27'),
(619, '9429283', '19', 'Tidak', 'G3', 1, '2020-07-29 19:07:27', '2020-07-29 19:07:27'),
(620, '9429283', '19', 'Tidak', 'G4', 1, '2020-07-29 19:07:27', '2020-07-29 19:07:27'),
(621, '4583127', '19', 'P1', 'G1', 1, '2020-07-29 19:44:10', '2020-07-29 19:44:10'),
(622, '4583127', '19', 'P1', 'G2', 1, '2020-07-29 19:44:10', '2020-07-29 19:44:10'),
(623, '4583127', '19', 'P1', 'G3', 1, '2020-07-29 19:44:10', '2020-07-29 19:44:10'),
(624, '4583127', '19', 'P1', 'G4', 1, '2020-07-29 19:44:10', '2020-07-29 19:44:10'),
(625, '4583127', '19', 'P1', 'G6', 1, '2020-07-29 19:44:10', '2020-07-29 19:44:10'),
(626, '4583127', '19', 'P1', 'G13', 1, '2020-07-29 19:44:11', '2020-07-29 19:44:11'),
(627, '4583127', '19', 'P1', 'G18', 1, '2020-07-29 19:44:11', '2020-07-29 19:44:11'),
(628, '4583127', '19', 'P1', 'G21', 1, '2020-07-29 19:44:11', '2020-07-29 19:44:11'),
(629, '4583127', '19', 'P1', 'G22', 1, '2020-07-29 19:44:11', '2020-07-29 19:44:11'),
(630, '5299087', '15', 'Tidak', 'G1', 0, '2020-07-29 19:56:10', '2020-07-29 19:56:10'),
(631, '5299087', '15', 'Tidak', 'G2', 0, '2020-07-29 19:56:10', '2020-07-29 19:56:10'),
(632, '5299087', '15', 'Tidak', 'G5', 0, '2020-07-29 19:56:10', '2020-07-29 19:56:10'),
(633, '5299087', '15', 'Tidak', 'G7', 0, '2020-07-29 19:56:10', '2020-07-29 19:56:10'),
(634, '8931317', '15', 'P1', 'G1', 1, '2020-09-01 22:24:17', '2020-09-01 22:24:17'),
(635, '8931317', '15', 'P1', 'G2', 1, '2020-09-01 22:24:17', '2020-09-01 22:24:17'),
(636, '8931317', '15', 'P1', 'G3', 1, '2020-09-01 22:24:17', '2020-09-01 22:24:17'),
(637, '8931317', '15', 'P1', 'G4', 1, '2020-09-01 22:24:17', '2020-09-01 22:24:17'),
(638, '8931317', '15', 'P1', 'G6', 1, '2020-09-01 22:24:17', '2020-09-01 22:24:17'),
(639, '8931317', '15', 'P1', 'G13', 1, '2020-09-01 22:24:17', '2020-09-01 22:24:17'),
(640, '8931317', '15', 'P1', 'G18', 1, '2020-09-01 22:24:17', '2020-09-01 22:24:17'),
(641, '8931317', '15', 'P1', 'G21', 1, '2020-09-01 22:24:17', '2020-09-01 22:24:17'),
(642, '8931317', '15', 'P1', 'G22', 1, '2020-09-01 22:24:17', '2020-09-01 22:24:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_07_03_061953_create_sessions_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `email`, `password`, `no_hp`, `jk`, `alamat`, `created_at`, `updated_at`) VALUES
(15, 'GunawanRaharjo', 'gunawanr14@gmail.com', '3f060ada63e49cb0504b59ec4b3a5309af9fc0449e6028f2c32cdd85e7fc3e61', '083837388547', 'L', 'Tegal', '2020-07-26 09:32:41', '2020-07-26 09:34:29'),
(19, 'Gunawan', 'gunawanraharjo60@gmail.com', '3f060ada63e49cb0504b59ec4b3a5309af9fc0449e6028f2c32cdd85e7fc3e61', '08', 'L', 'Tegal', '2020-07-29 19:05:19', '2020-07-29 19:05:19'),
(20, 'gunawan', 'gunawanr15@gmail.com', '0c581da1da23d7e55554b7b4c424c6f13d30100485b4497d3eab6f44bfbf3ecd', '1', 'L', 't', '2020-07-29 19:51:50', '2020-07-29 19:51:50'),
(21, 'asdsasdasd', 'asdsdadsa@saddsadsa', 'b6d7528eb21b4e5e95950f2d70015e3b6d42b519f612094c870bc5d172ea72eb', '213223211212', 'L', 'saddasdas', '2020-08-13 00:04:25', '2020-08-13 00:04:25'),
(22, 'sadsadsa', 'asddsa@sadsasad', 'b6c976b11de9aa3ce35fd5e607be98aa70e52c71163e4160eb37751df7ac1a78', '661661611661', 'L', 'asdsaddas', '2020-08-13 00:04:53', '2020-08-13 00:04:53'),
(23, 'sasadsad', 'sasdjg@sadsda', '21fb3e98621be623e6ad6b666bda4a81455ebc4e9dd39d35e7d0db835f1d7ae5', '232311212121', 'L', 'adsdssadsda', '2020-08-13 00:06:52', '2020-08-13 00:06:52'),
(24, 'sadasdsa', 'adsdaasd@asdsadsdsadas', '590970798fef8880b4bdb450781fabbdd2c128ae3b08541558cff1811a028fde', '12121121212', 'L', 'saddsadas', '2020-08-13 00:07:20', '2020-08-13 00:07:20'),
(25, 'sadsdasad', 'sdadsaasd@asddas', 'f5d31a59688ba0207f4f22a9d2f068c76eadf71634c97ad753190e5aa27a8b7b', '214', 'L', 'sadsdasda', '2020-08-13 00:12:19', '2020-08-13 00:12:19'),
(26, 'asdasdas', 'asdas@asddasw', 'f9226ecaf275898e406e88c9674d4391f4bcb2c99bbc87c3d166186d19934ae6', '123973', 'L', 'adsadssad', '2020-08-13 00:14:21', '2020-08-13 00:14:21'),
(27, 'gu', 'g@gmail.com', '2055bc2c4bc3ff6e0428fe9a1d611ace830f6fb224e24e17c66f9cb815cd30b2', '1111111111111', 'L', 's', '2020-08-13 00:26:33', '2020-08-13 00:26:33'),
(28, 'Gun', 'gu@gmail.com', '91bba11ff9cef9758e6fbcb79b59b1267de842d927a22d32fb0eb2664c465ec0', '0888888888888', 'L', 'a', '2020-08-13 00:35:09', '2020-08-13 00:35:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('gunawanraharjo@gmail.com', '$2y$10$7lG2YOkU4Ts4cfO8CuMdWOzK8zL6wyumpT0AtT6JLVBgZvmJjlCPu', '2020-07-05 19:30:04'),
('gunawanr14@gmail.com', '$2y$10$m7UPrUj8RJKPe0UlV.PsLO02BjVifobJwRRnQjH/yWh5hzzR4NxNq', '2020-07-26 10:14:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int(11) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `penyebab` varchar(5000) NOT NULL,
  `solusi` varchar(5000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id`, `kode`, `nama_penyakit`, `penyebab`, `solusi`, `created_at`, `updated_at`) VALUES
(1, 'P1', 'Gangguan Kecemasan Umum', 'Hingga saat ini belum diketahui penyebab pasti dari gangguan kecemasan umum. Meski demikian, kombinasi berbagai faktor diduga berkontribusi dalam memicu munculnya gangguan kecemasan umum. Faktor-faktor tersebut adalah:  Memiliki riwayat trauma atau pernah mengalami peristiwa yang membuat stres, seperti bullying atau perundungan. Memiliki keluarga dengan riwayat gangguan kecemasan umum. Memiliki penyakit yang membutuhkan pengobatan jangka panjang, seperti arthritis. Memiliki riwayat penggunaan obat-obatan terlarang atau kecanduan minuman keras. Memiliki riwayat gangguan pada sistem saraf.', 'JIka Mengalami dibawah 2 Bulan tergolong AKUT,Namun diatas 2Bulan tergolong kronis disarankan langsung ke Psikolognya(*)Pengobatan medikamentosa. Obat - obat yang digunakan untuk mengatasi gejala anxiety disorder berupa anti depresan, beberapa jenis anti konvulsan dan juga anti psikotik dosis rendah serta obat untuk mengurangi kecemasan lainnya. (*)Psikoterapi. Pengobatan ini dilakukan dengan strategi membantu pasien untuk memahami dan berdamai dengan penyakit yang dialaminya. (*)Terapi kognitif – behavior. Ini merupakan salah satu jenis psikoterapi dimana pasien dibantu untuk mengenali dan mengubah pola pikir serta perilakunya yang menyebabkan perasaan tak menyenangkan tersebut. (*)Menjaga asupan makanan dan mengubah pola hidup. (*)Terapi relaksasi seperti mendengarkan musik yang santai.', '2020-07-02 01:47:42', '2020-07-29 07:26:32'),
(2, 'P2', 'Gangguan Panik', 'Berikut ini adalah faktor-faktor pemicu gangguan panik:  Stres merupakan pemicu paling utama. Riwayat kesehatan keluarga. Kejadian traumatis yang pernah dialami, seperti kecelakaan atau sakit keras. Perubahan drastis dalam hidup. Mengonsumsi kafein dan nikotin yang terlalu berlebihan. Riwayat mengalami kekerasan fisik atau seksual.', '(JIka Mengalami dibawah 2 Bulan tergolong AKUT,Namun diatas 2Bulan tergolong kronis disarankan langsung ke Psikolognya)Psikoterapi Psikoterapi dipercaya sebagai metode pengobatan utama gangguan panik yang efektif. Dalam psikoterapi, dokter akan memberikan pemahaman dan perubahan cara pikir kepada pasien agar bisa menghadapi situasi panik yang sedang dihadapi. Salah bentuk psikoterapi adalah terapi kognitif perilaku (cognitive behavioral therapy) yang akan memberikan pemahaman dan cara berpikir dalam menghadapi panik sebagai suatu situasi yang tidak membahayakan jiwa. Pada tahap ini, dokter akan menciptakan kondisi secara bertahap yang akan memicu timbulnya gejala-gejala dari gangguan panik. Namun kondisi tersebut akan dilakukan dengan memperhatikan keamanan pasien. Terapi tersebut diharapkan akan membentuk kebiasaan serta perilaku pasien yang tidak lagi merasa terancam. Selain itu, psikoterapi juga akan berhasil meningkatkan kepercayaan diri pasien dalam menghilangkan perasaan takut, bila serangan panik yang terjadi sebelumnya telah mampu ditangani. Psikoterapi memang membutuhkan waktu dan usaha dari pasien, akan tetapi terapi ini akan membawa pasien pada kondisi yang lebih baik dari sebelumnya. Hasil psikoterapi, yakni berubahnya cara berpikir dan tindakan yang akan dilakukan oleh pasien dalam mengatasi serangan, bisa dirasakan dalam beberapa minggu hingga beberapa bulan. Oleh sebab itu, pasien akan disarankan untuk melakukan psikoterapi secara rutin demi memastikan gejala-gejala gangguan panik bisa ditangani dan mencegahnya kambuh.', '2020-07-01 23:14:51', '2020-07-29 07:27:15'),
(3, 'P3', 'Fobia Sosial', 'Peristiwa masa lalu Fobia sosial bisa jadi muncul karena penderita pernah mengalami peristiwa memalukan atau tidak menyenangkan, yang disaksikan oleh orang lain. Keturunan atau pola asuh Fobia sosial cenderung diturunkan dalam keluarga. Namun demikian, belum bisa dipastikan apakah hal ini dipicu oleh faktor genetik atau karena pola asuh orang tua, misalnya terlalu mengekang. Kemungkinan lainnya adalah anak meniru sikap orang tua yang kerap merasa cemas saat berhadapan dengan orang lain. Struktur otak Rasa takut sangat dipengaruhi oleh bagian otak yang disebut amygdala. Amygdala yang terlalu aktif akan membuat seseorang mengalami rasa takut yang lebih kuat. Kondisi ini dapat meningkatkan risiko munculnya kecemasan secara berlebihan saat berinteraksi dengan orang lain.', '(JIka Mengalami dibawah 2 Bulan tergolong AKUT,Namun diatas 2Bulan tergolong kronis disarankan langsung ke Psikolognya)Psikoterapi Salah satu bentuk psikoterapi untuk mengatasi fobia sosial adalah terapi perilaku kognitif. Terapi ini bertujuan untuk mengurangi rasa cemas pada penderita. Penderita akan dihadapkan pada situasi yang membuatnya cemas atau takut, kemudian psikolog atau psikiater akan memberikan solusi untuk menghadapi situasi tersebut., atau dengan cara berlatih berbicara dengan diri sendiri di hadapan cermin, sebelum berbicara di depan orang banyak', '2020-07-01 23:14:51', '2020-07-29 07:27:37'),
(4, 'P4', 'Skizophrenia', 'Sampai saat ini para ahli belum mengetahui apa yang menyebabkan seseorang mengalami penyakit kejiwaan. Meski begitu, para peneliti percaya bahwa ada beberapa hal yang dapat memicu penyakit ini. Beberapa hal yang dapat menjadi penyebab penyakit skizofrenia adalah:  Senyawa kimia di otak. Kadar seratonin dan dopamine di dalam otak yang tidak seimbang diyakini apara hli bisa menyebabkan penyakit ini. Perbedaan struktur otak. Studi pemindai saraf otak menunjukkan perbedaan dalam struktur otak dan sistem saraf pusat orang dengan penyakit ini Para peneliti tidak yakin mengapa hal tersebut bisa terjadi, namun mereka menyebutkan bahwa gangguan kejiwaan ini terkait dengan penyakit otak. Genetik. Penyakit ini mungkin diwariskan di dalam keluarga. Jadi, jika salah satu keluarga inti Anda terkena penyakit ini, Anda berisiko tinggi mengalami hal yang serupa. Faktor lingkungan. Terkena infeksi virus dan kekurangan beberapa nutrisi ketika masih dalam kandungan. Obat-obatan tertentu. Penyalahgunaan obat-obatan terlarang seperti narkotika.', '(JIka Mengalami dibawah 2 Bulan tergolong AKUT,Namun diatas 2Bulan tergolong kronis disarankan langsung ke Psikolognya)Solusi Skizophrenia:(*).Dengan Obat,(*).Dengan terapi kognitif,(*)Hindari alkohol,(*).Jangan biarkan anggota keluarga yang mengidap penyakit ini merasa tertekan. Stres, kurang tidur, diet yang tidak seimbang, dan kafein dapat menyebabkan gejala kambuh. Jika Anda mencurigai seseorang di sekitar Anda menunjukkan gejala skizofrenia seperti yang sudah hampir ingin bunuh diri, segera ajak orang tersebut ke dokter/psikiater/psikolog.', '2020-07-01 23:14:51', '2020-07-29 07:36:26'),
(5, 'P5', 'Gangguan Mood Bipolar', 'Penyebab Mood Bipolar: Secara umum Faktor-faktor yang bisa menjadi penyebab gangguan bipolar (bipolar disorder) adalah: Kondisi otak. Otak dapat melewati berbagai perubahan fisik yang memengaruhi tingkat bahan kimia otak (neurotransmitter) yang ada di dalamnya. Transmiter tersebut merupakan zat-zat yang memengaruhi mood. Keturunan (genetik). Orangtua atau angota keluarga lain bisa saja memiliki kemungkinan punya bibit bipolar disorder yang diwariskan kepada Anda. Pengaruh lingkungan sosial. Para peneliti telah menemukan bahwa mungkin terdapat beberapa faktor sosial yang dapat menyebabkan timbulnya bipolar disorder. Faktor-faktor tersebut dapat berupa perasaan stres akan suatu kejadian trauma di masa kecil, rendahnya kepercayaan diri, atau mengalami suatu kehilangan yang tragis.', '(JIka Mengalami dibawah 2 Bulan tergolong AKUT,Namun diatas 2Bulan tergolong kronis disarankan langsung ke Psikolognya)Solusi Mood Bipolar: (*).Terapi obat Obat-obatan yang ada biasanya tediri dari antidepresan, penstabil mood, antipsikotiin. (*).Meninggalkan hubungan yang tidak, dan obat anti-stres, tetapi harus sesuai dengan resep dokter. (*).Tidur yang cukup dengan mengikuti jadwal tidur yang rutin Melakukan aktivitas fisik secara rutmbahagiakan. (*).Akhiri kebiasaan mengkonsumsi alkohol dan hindari penyalahgunaan zat terlarang. Jika Anda curiga mengalami gangguan bipolar atau memiliki gejala berikut, jangan ragu untuk segera memeriksakan diri ke dokter/psikolog: (-)Munculnya episode mood yang terjadi dalam jangka waktu panjang (-)Memiliki pemikiran untuk bunuh diri.', '2020-07-01 23:14:51', '2020-07-29 07:33:40'),
(6, 'P6', 'Autisme', 'Apa yang meningkatkan risiko saya untuk autisme? Beberapa hal yang bisa meningkatkan faktor risiko seseorang mengalami autisme adalah:  Jenis kelamin. Autisme terjadi 4 kali lebih sering pada laki-laki dibanding wanita. Riwayat keluarga. Keluarga yang memiliki anak autis mungkin akan memiliki anak autis lain. Penyakit lain. Autis cenderung terjadi lebih sering pada anak dengan genetik atau kondisi kromosom tertentu, seperti sindrom fragile X atau sklerosis tuberous. Bayi prematur. Autisme lebih sering terjadi pada bayi prematur dengan berat badan yang rendah. Biasanya bayi lebih berisiko jika lahir sebelum 26 minggu. Paparan bahan kimia dan obat tertentu. Paparan logam berat, obat valproic acid (Depakene) atau thalidomide (Thalomid) pada janin dapat meningkatkan risiko terjadinya autis(hellosehat)', '(JIka Mengalami dibawah 2 Bulan tergolong AKUT,Namun diatas 2Bulan tergolong kronis disarankan langsung ke Psikolognya)Terapi okupasi, yakni terapi yang mengajarkan berbagai keterampilan berpakaian, makan, mandi, dan menjalin hubungan dengan orang lain. Terapi integrasi sensoris, yakni membantu mengolah informasi dari pemandangan, suara, sentuhan, dan bau sehingga kurang tingkat sensitivitasnya pada hal tersebut. Terapi wicara, yakni meningkatkan keterampilan berkomunikasi, baik verbal maupun non verbal (bahasa dan gerak tubuh).(hellosehat)', '2020-07-01 23:14:51', '2020-07-29 07:37:23'),
(7, 'P7', 'ADHD(Attention-deficit hyperactivity disorder)', 'Gangguan otak dan gangguan saraf pusat Gangguan psikologis Ibu menggunakan NAPZA, mengonsumsi minuman beralkohol, atau merokok selama masa kehamilan. Ibu mengalami stres sewaktu hamil. Paparan racun dari lingkungan sewaktu masa kanak-kanak, misalnya paparan timbal dari cat.', '(JIka Mengalami dibawah 2 Bulan tergolong AKUT,Namun diatas 2Bulan tergolong kronis disarankan langsung ke Psikolognya).Terapi perilaku Perawatan penyakit dengan metode ini biasanya melibatkan terapis untuk membantu penderita membangun keterampilan sosial, mempelajari teknik perencanaan, dan meningkatkan kemampuan dalam menyelesaikan tugas, jaga pola makan terutama hindari makanan makanan yang manis', '2020-07-01 23:14:51', '2020-07-29 08:22:10'),
(8, 'P8', 'Disleksia Disorder', 'Genetik. Penyebab disleksia adalah cacat pada gen DCD2, ini yang paling umum. Biasanya kondisi ini diwariskan dari anggota keluarga. Kondisi yang ditandai dengan tidak berfungsinya cerebrum, yaitu bagian otak yang mengatur aktivitas berpikir dan bergerak. Cedera atau kondisi lainnya. Selain faktor keturunan, penyebab disleksia adalah gangguan yang dialami anak setelah mereka dilahirkan seperti cedera otak, stroke, atau trauma lainnya.', '(JIka Mengalami dibawah 2 Bulan tergolong AKUT,Namun diatas 2Bulan tergolong kronis disarankan langsung ke Psikolognya)Guna membantu proses penyembuhan anak, orang tua dapat melakukan sejumlah hal berikut:  Membaca dengan suara keras di hadapan anak. Langkah ini akan lebih efektif bila dilakukan pada anak usia 6 bulan atau lebih muda. Apabila anak sudah cukup dewasa, ajak anak membaca cerita bersama-sama setelah diperdengarkan cerita sebelumnya. Beri semangat pada anak agar berani membaca. Hilangkan ketakutan anak untuk membaca. Dengan rutin membaca, kemampuan anak dalam membaca akan meningkat. Bekerja sama dengan guru di sekolah. Bicarakan kondisi anak dengan guru di sekolah anak, kemudian diskusikan cara yang paling tepat untuk membantu anak agar berhasil dalam pelajaran. Rutinlah berkomunikasi dengan guru agar Anda mengetahui perkembangan anak di sekolah. Bicara dengan anak tentang kondisinya. Beri pemahaman pada anak bahwa kondisi yang dialaminya dapat diperbaiki, sehingga anak menjadi semangat untuk belajar. Batasi menonton televisi. Batasi waktu anak menonton televisi, dan sediakan waktu lebih banyak untuk belajar membaca. Pilih tema bacaan yang menarik bagi anak, atau pilih tempat yang menyenangkan untuk belajar agar anak tertarik membaca. Bergabung dengan support group. Bergabunglah dengan kelompok dukungan dengan kondisi yang sama. Pengalaman orang tua lain yang memiliki anak dengan disleksia, dapat menjadi informasi berharga guna meningkatkan kemampuan anak.', '2020-07-01 23:14:51', '2020-07-29 08:45:52'),
(9, 'P9', 'Disosiatif Disorder', 'Tidak ada penjelasan pasti mengapa seseorang bisa menderita gangguan identitas disosiatif. Meskipun banyak faktor yang terlibat dalam penyakit ini, tetapi penderita gangguan identitas disosiatif biasanya memiliki latar belakang pengalaman traumatis, terutama pada saat masa kecilnya. Pengalaman traumatis ini bisa berupa penyiksaan berulang kali baik secara emosional, kekerasan fisik, maupun pelecehan seksual. Karena pengalaman ini, seseorang kemudian seolah-olah menciptakan mekanisme pertahanan diri dengan cara menciptakan kepribadian lain di luar kesadarannya agar terlepas dari rasa trauma hebat yang dialaminya.', 'Psikoterapi: Tujuan utama dari terapi adalah ‘menyatukan’ beberapa kepribadian yang ada sehingga menjadi satu kepribadian yang utuh. Psikoterapi juga membantu penderita menghadapi trauma yang memicu munculnya kepribadian lain. Tahapan yang dilakukan biasanya mempelajari kepribadian apa saja yang muncul, mengatasi trauma, dan menyatukan beberapa kepribadian yang ada menjadi satu. Terapi keluarga: dilakukan untuk memberi penjelasan lebih kepada keluarga terkait gangguan identitas disosiatif. Menginformasikan keluarga, perubahan apa yang akan terjadi dan mengamati tanda-tanda atau gejala perubahan kepribadian. Pengobatan: meskipun tidak ada obat khusus yang dapat menyembuhkan gangguan identitas disosiatif, tetapi gejala-gejala yang muncul seperti kecemasan berlebih dan depresi dapat diatasi dengan antidepresan.', '2020-07-01 23:14:51', '2020-07-19 08:07:16'),
(10, 'P10', 'Psikopat', 'Penyebab pasti psikopat tidak bisa diidentifikasi secara pasti. Gangguan ini diprediksi timbul karena pengaruh genetik dan pengalaman traumatis masa kecil. Disimpulkan demikian, karena psikopat biasanya tumbuh dari latar belakang keluarga yang tidak harmonis.  Ketidakharmonisan tersebut bisa dalam bentuk adanya pelecehan dan penelantaran anak, orang tua yang kecanduan alkohol, atau perkelahian orang tua. Psikopat sendiri lebih sering ditemukan pada kaum pria dibandingkan perempuan.', 'Ajak bicara santai, ngobrol bareng karena seseorang yang psikopat sebenarnya hanya ingin dihargai keberadaannya.', '2020-07-01 23:14:51', '2020-07-29 08:30:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_relasi`
--

CREATE TABLE `tabel_relasi` (
  `id` int(11) NOT NULL,
  `kode_penyakit` varchar(5) NOT NULL,
  `kode_gejala` varchar(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_relasi`
--

INSERT INTO `tabel_relasi` (`id`, `kode_penyakit`, `kode_gejala`, `created_at`, `updated_at`) VALUES
(1, 'P1', 'G1', '2020-07-13 15:52:15', '2020-07-13 15:52:15'),
(2, 'P1', 'G2', '2020-07-13 15:52:15', '2020-07-13 15:52:15'),
(3, 'P1', 'G3', '2020-07-13 15:52:15', '2020-07-13 15:52:15'),
(4, 'P1', 'G4', '2020-07-13 15:52:16', '2020-07-13 15:52:16'),
(5, 'P1', 'G6', '2020-07-13 15:52:16', '2020-07-13 15:52:16'),
(6, 'P1', 'G13', '2020-07-13 15:52:16', '2020-07-13 15:52:16'),
(7, 'P1', 'G18', '2020-07-13 15:52:16', '2020-07-13 15:52:16'),
(8, 'P1', 'G21', '2020-07-13 15:52:17', '2020-07-13 15:52:17'),
(9, 'P1', 'G22', '2020-07-13 15:52:17', '2020-07-13 15:52:17'),
(10, 'P2', 'G2', '2020-07-13 15:52:17', '2020-07-13 15:52:17'),
(11, 'P2', 'G3', '2020-07-13 15:52:17', '2020-07-13 15:52:17'),
(12, 'P2', 'G4', '2020-07-13 15:52:17', '2020-07-13 15:52:17'),
(13, 'P2', 'G6', '2020-07-13 15:52:18', '2020-07-13 15:52:18'),
(14, 'P2', 'G14', '2020-07-13 15:52:18', '2020-07-13 15:52:18'),
(15, 'P2', 'G15', '2020-07-13 15:52:18', '2020-07-13 15:52:18'),
(16, 'P2', 'G22', '2020-07-13 15:52:18', '2020-07-13 15:52:18'),
(17, 'P2', 'G23', '2020-07-13 15:52:18', '2020-07-13 15:52:18'),
(18, 'P2', 'G24', '2020-07-13 15:52:18', '2020-07-13 15:52:18'),
(19, 'P2', 'G25', '2020-07-13 15:52:18', '2020-07-13 15:52:18'),
(20, 'P3', 'G2', '2020-07-13 15:52:19', '2020-07-13 15:52:19'),
(21, 'P3', 'G3', '2020-07-13 15:52:19', '2020-07-13 15:52:19'),
(22, 'P3', 'G5', '2020-07-13 15:52:19', '2020-07-13 15:52:19'),
(23, 'P3', 'G9', '2020-07-13 15:52:19', '2020-07-13 15:52:19'),
(24, 'P3', 'G10', '2020-07-13 15:52:19', '2020-07-13 15:52:19'),
(25, 'P3', 'G13', '2020-07-13 15:52:19', '2020-07-13 15:52:19'),
(26, 'P3', 'G14', '2020-07-13 15:52:19', '2020-07-13 15:52:19'),
(27, 'P3', 'G15', '2020-07-13 15:52:19', '2020-07-13 15:52:19'),
(28, 'P3', 'G16', '2020-07-13 15:52:20', '2020-07-13 15:52:20'),
(29, 'P3', 'G17', '2020-07-13 15:52:20', '2020-07-13 15:52:20'),
(30, 'P3', 'G23', '2020-07-13 15:52:20', '2020-07-13 15:52:20'),
(31, 'P3', 'G24', '2020-07-13 15:52:20', '2020-07-13 15:52:20'),
(32, 'P3', 'G25', '2020-07-13 15:52:20', '2020-07-13 15:52:20'),
(33, 'P3', 'G26', '2020-07-13 15:52:20', '2020-07-13 15:52:20'),
(34, 'P3', 'G27', '2020-07-13 15:52:20', '2020-07-13 15:52:20'),
(35, 'P3', 'G40', '2020-07-13 15:52:20', '2020-07-13 15:52:20'),
(36, 'P4', 'G1', '2020-07-13 15:52:20', '2020-07-13 15:52:20'),
(37, 'P4', 'G2', '2020-07-13 15:52:20', '2020-07-13 15:52:20'),
(38, 'P4', 'G4', '2020-07-13 15:52:21', '2020-07-13 15:52:21'),
(39, 'P4', 'G5', '2020-07-13 15:52:21', '2020-07-13 15:52:21'),
(40, 'P4', 'G6', '2020-07-13 15:52:21', '2020-07-13 15:52:21'),
(41, 'P4', 'G7', '2020-07-13 15:52:21', '2020-07-13 15:52:21'),
(42, 'P4', 'G8', '2020-07-13 15:52:21', '2020-07-13 15:52:21'),
(43, 'P4', 'G11', '2020-07-13 15:52:21', '2020-07-13 15:52:21'),
(44, 'P4', 'G12', '2020-07-13 15:52:21', '2020-07-13 15:52:21'),
(45, 'P4', 'G16', '2020-07-13 15:52:21', '2020-07-13 15:52:21'),
(46, 'P4', 'G18', '2020-07-13 15:52:21', '2020-07-13 15:52:21'),
(47, 'P4', 'G19', '2020-07-13 15:52:21', '2020-07-13 15:52:21'),
(48, 'P4', 'G21', '2020-07-13 15:52:21', '2020-07-13 15:52:21'),
(49, 'P4', 'G28', '2020-07-13 15:52:21', '2020-07-13 15:52:21'),
(50, 'P4', 'G38', '2020-07-13 15:52:22', '2020-07-13 15:52:22'),
(51, 'P4', 'G41', '2020-07-13 15:52:22', '2020-07-13 15:52:22'),
(52, 'P4', 'G42', '2020-07-13 15:52:23', '2020-07-13 15:52:23'),
(53, 'P4', 'G45', '2020-07-13 15:52:23', '2020-07-13 15:52:23'),
(54, 'P5', 'G1', '2020-07-13 15:52:23', '2020-07-13 15:52:23'),
(55, 'P5', 'G2', '2020-07-13 15:52:23', '2020-07-13 15:52:23'),
(56, 'P5', 'G4', '2020-07-13 15:52:23', '2020-07-13 15:52:23'),
(57, 'P5', 'G5', '2020-07-13 15:52:23', '2020-07-13 15:52:23'),
(58, 'P5', 'G6', '2020-07-13 15:52:23', '2020-07-13 15:52:23'),
(59, 'P5', 'G7', '2020-07-13 15:52:23', '2020-07-13 15:52:23'),
(60, 'P5', 'G8', '2020-07-13 15:52:24', '2020-07-13 15:52:24'),
(61, 'P5', 'G9', '2020-07-13 15:52:24', '2020-07-13 15:52:24'),
(62, 'P5', 'G10', '2020-07-13 15:52:24', '2020-07-13 15:52:24'),
(63, 'P5', 'G14', '2020-07-13 15:52:24', '2020-07-13 15:52:24'),
(64, 'P5', 'G16', '2020-07-13 15:52:24', '2020-07-13 15:52:24'),
(65, 'P5', 'G18', '2020-07-13 15:52:24', '2020-07-13 15:52:24'),
(66, 'P5', 'G19', '2020-07-13 15:52:24', '2020-07-13 15:52:24'),
(67, 'P5', 'G20', '2020-07-13 15:52:24', '2020-07-13 15:52:24'),
(68, 'P5', 'G26', '2020-07-13 15:52:24', '2020-07-13 15:52:24'),
(69, 'P5', 'G43', '2020-07-13 15:52:24', '2020-07-13 15:52:24'),
(70, 'P5', 'G44', '2020-07-13 15:52:25', '2020-07-13 15:52:25'),
(71, 'P6', 'G1', '2020-07-13 15:52:25', '2020-07-13 15:52:25'),
(72, 'P6', 'G4', '2020-07-13 15:52:25', '2020-07-13 15:52:25'),
(73, 'P6', 'G5', '2020-07-13 15:52:25', '2020-07-13 15:52:25'),
(74, 'P6', 'G7', '2020-07-13 15:52:25', '2020-07-13 15:52:25'),
(75, 'P6', 'G8', '2020-07-13 15:52:25', '2020-07-13 15:52:25'),
(76, 'P6', 'G9', '2020-07-13 15:52:25', '2020-07-13 15:52:25'),
(77, 'P6', 'G10', '2020-07-13 15:52:25', '2020-07-13 15:52:25'),
(78, 'P6', 'G11', '2020-07-13 15:52:25', '2020-07-13 15:52:25'),
(79, 'P6', 'G12', '2020-07-13 15:52:26', '2020-07-13 15:52:26'),
(80, 'P6', 'G13', '2020-07-13 15:52:26', '2020-07-13 15:52:26'),
(81, 'P6', 'G17', '2020-07-13 15:52:26', '2020-07-13 15:52:26'),
(82, 'P6', 'G19', '2020-07-13 15:52:26', '2020-07-13 15:52:26'),
(83, 'P6', 'G20', '2020-07-13 15:52:27', '2020-07-13 15:52:27'),
(84, 'P6', 'G27', '2020-07-13 15:52:27', '2020-07-13 15:52:27'),
(85, 'P6', 'G28', '2020-07-13 15:52:27', '2020-07-13 15:52:27'),
(86, 'P6', 'G29', '2020-07-13 15:52:28', '2020-07-13 15:52:28'),
(87, 'P6', 'G30', '2020-07-13 15:52:28', '2020-07-13 15:52:28'),
(88, 'P6', 'G31', '2020-07-13 15:52:28', '2020-07-13 15:52:28'),
(89, 'P6', 'G32', '2020-07-13 15:52:28', '2020-07-13 15:52:28'),
(90, 'P6', 'G33', '2020-07-13 15:52:28', '2020-07-13 15:52:28'),
(91, 'P6', 'G34', '2020-07-13 15:52:29', '2020-07-13 15:52:29'),
(92, 'P6', 'G35', '2020-07-13 15:52:29', '2020-07-13 15:52:29'),
(93, 'P6', 'G36', '2020-07-13 15:52:29', '2020-07-13 15:52:29'),
(94, 'P7', 'G1', '2020-07-13 15:52:29', '2020-07-13 15:52:29'),
(95, 'P7', 'G3', '2020-07-13 15:52:29', '2020-07-13 15:52:29'),
(96, 'P7', 'G11', '2020-07-13 15:52:30', '2020-07-13 15:52:30'),
(97, 'P7', 'G12', '2020-07-13 15:52:30', '2020-07-13 15:52:30'),
(98, 'P7', 'G15', '2020-07-13 15:52:30', '2020-07-13 15:52:30'),
(99, 'P7', 'G17', '2020-07-13 15:52:30', '2020-07-13 15:52:30'),
(100, 'P7', 'G29', '2020-07-13 15:52:30', '2020-07-13 15:52:30'),
(101, 'P7', 'G31', '2020-07-13 15:52:30', '2020-07-13 15:52:30'),
(102, 'P7', 'G46', '2020-07-13 15:52:30', '2020-07-13 15:52:30'),
(103, 'P7', 'G47', '2020-07-13 15:52:31', '2020-07-13 15:52:31'),
(104, 'P8', 'G1', '2020-07-13 15:52:31', '2020-07-13 15:52:31'),
(105, 'P8', 'G3', '2020-07-13 15:52:31', '2020-07-13 15:52:31'),
(106, 'P8', 'G11', '2020-07-13 15:52:31', '2020-07-13 15:52:31'),
(107, 'P8', 'G12', '2020-07-13 15:52:31', '2020-07-13 15:52:31'),
(108, 'P8', 'G20', '2020-07-13 15:52:31', '2020-07-13 15:52:31'),
(109, 'P8', 'G30', '2020-07-13 15:52:31', '2020-07-13 15:52:31'),
(110, 'P8', 'G32', '2020-07-13 15:52:31', '2020-07-13 15:52:31'),
(111, 'P8', 'G33', '2020-07-13 15:52:31', '2020-07-13 15:52:31'),
(112, 'P8', 'G34', '2020-07-13 15:52:31', '2020-07-13 15:52:31'),
(113, 'P8', 'G35', '2020-07-13 15:52:31', '2020-07-13 15:52:31'),
(114, 'P8', 'G36', '2020-07-13 15:52:31', '2020-07-13 15:52:31'),
(115, 'P9', 'G7', '2020-07-13 15:52:31', '2020-07-13 15:52:31'),
(116, 'P9', 'G8', '2020-07-13 15:52:31', '2020-07-13 15:52:31'),
(117, 'P9', 'G9', '2020-07-13 15:52:32', '2020-07-13 15:52:32'),
(118, 'P9', 'G37', '2020-07-13 15:52:32', '2020-07-13 15:52:32'),
(119, 'P9', 'G38', '2020-07-13 15:52:32', '2020-07-13 15:52:32'),
(120, 'P9', 'G39', '2020-07-13 15:52:32', '2020-07-13 15:52:32'),
(121, 'P9', 'G48', '2020-07-13 15:52:32', '2020-07-13 15:52:32'),
(122, 'P9', 'G49', '2020-07-13 15:52:33', '2020-07-13 15:52:33'),
(123, 'P10', 'G5', '2020-07-13 15:52:33', '2020-07-13 15:52:33'),
(124, 'P10', 'G10', '2020-07-13 15:52:33', '2020-07-13 15:52:33'),
(125, 'P10', 'G37', '2020-07-13 15:52:33', '2020-07-13 15:52:33'),
(126, 'P10', 'G39', '2020-07-13 15:52:33', '2020-07-13 15:52:33'),
(127, 'P10', 'G50', '2020-07-13 15:52:33', '2020-07-13 15:52:33'),
(128, 'P10', 'G51', '2020-07-13 15:52:33', '2020-07-13 15:52:33'),
(129, 'P10', 'G52', '2020-07-13 15:52:33', '2020-07-13 15:52:33'),
(130, 'P10', 'G53', '2020-07-13 15:52:33', '2020-07-13 15:52:33'),
(131, 'P10', 'G54', '2020-07-13 15:52:33', '2020-07-13 15:52:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `laporan` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `test`
--

INSERT INTO `test` (`id`, `laporan`, `created_at`, `updated_at`) VALUES
(2, 'error', '2020-07-29 15:29:52', '2020-07-29 15:29:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Gunawan Raharjo', 'gunawanr14@gmail.com', NULL, '$2y$10$TeMtOOYjymLONmv5DCNqFeLnYB.KaXDrpjgzH6OZFe59LNh8FTd8e', 'erU39rjYXs9s9H1F8xmHOpG4bgWo58gMQfd0fdIYzQlkSUWIy2bsEF0wr3hI', '2020-06-30 07:06:08', '2020-07-26 09:37:40'),
(2, 'ilyas abdurahman yusuf', 'andrenuryana@gmail.com', NULL, '$2y$10$zkNRK49MTUSx2mv3wz', '2kc07IhaZdssHJuKZwPgtaTXNR87FYjcWIW92GKXBiD0ncidXy3HgxsGfAWa', '2020-07-05 19:31:19', '2020-07-06 06:08:39');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_relasi`
--
ALTER TABLE `tabel_relasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=643;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tabel_relasi`
--
ALTER TABLE `tabel_relasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT untuk tabel `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
