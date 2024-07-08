-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2024 at 02:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psi_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel_sampah`
--

CREATE TABLE `artikel_sampah` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel_sampah`
--

INSERT INTO `artikel_sampah` (`id`, `judul`, `gambar`, `link`) VALUES
(1, 'Pilah Sampah di Sumbernya, Bukti Nyata Kepedulian Kita pada Lingkungan', 'https://dlh.kulonprogokab.go.id/files/news/normal/037c2c616e3d03f8977044f525de8a40.jpeg', 'https://dlh.kulonprogokab.go.id/detil/1144/pilah-sampah-di-sumbernya-bukti-nyata-kepedulian-kita-pada-lingkungan'),
(2, 'Sampah Adalah Sumber Bencana, Kok Bisa?', 'https://kahuripancitra.com/wp-content/uploads/2024/02/23426-scaled.jpg', 'https://kahuripancitra.com/sampah-adalah-sumber-bencana-kok-bisa/'),
(3, 'MARI KELOLA SAMPAH DENGAN BIJAK MULAI HARI INI', 'https://citarumharum.jabarprov.go.id/eusina/uploads/2022/03/pexels-marta-ortigosa-3480494-scaled-1-2048x1366.jpeg', 'https://citarumharum.jabarprov.go.id/mari-kelola-sampah-dengan-bijak-mulai-hari-ini/'),
(4, 'Pengertian, Jenis, dan Cara mengelola Sampah dengan baik dan benar.', 'https://sdnungaran1.sch.id/assets/images/posts/1675141321-image_750x_63c9fa357e205.jpg', 'https://sdnungaran1.sch.id/berita/read/Pengertian-Jenis-dan-Cara-mengelola-Sampah-dengan-baik-dan-benar'),
(5, 'DIY Terus Upayakan Perbaikan Pengelolaan Sampah', 'https://dlh.kulonprogokab.go.id/files/news/normal/11775d082ee4a5c88968ebcab7795390.jpeg', 'https://jogjaprov.go.id/berita/diy-terus-upayakan-perbaikan-pengelolaan-sampah'),
(6, 'MENGATASI DARURAT SAMPAH DI KOTA YOGYAKARTA: KREATIVITAS MENUJU KEBERSIHAN YANG MEMIKAT HATI', 'https://bkpsdm.jogjakota.go.id/assets/instansi/bkpsdm/article/20230809085502.png', 'https://bkpsdm.jogjakota.go.id/detail/index/28545');

-- --------------------------------------------------------

--
-- Table structure for table `komposisi_jenis_sampah`
--

CREATE TABLE `komposisi_jenis_sampah` (
  `id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `sisa_makanan` float NOT NULL,
  `kayu_ranting` float NOT NULL,
  `kertas_karton` float NOT NULL,
  `plastik` float NOT NULL,
  `logam` float NOT NULL,
  `kain` float NOT NULL,
  `karet_kulit` float NOT NULL,
  `kaca` float NOT NULL,
  `lainnya` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komposisi_jenis_sampah`
--

INSERT INTO `komposisi_jenis_sampah` (`id`, `tahun`, `kabupaten`, `sisa_makanan`, `kayu_ranting`, `kertas_karton`, `plastik`, `logam`, `kain`, `karet_kulit`, `kaca`, `lainnya`) VALUES
(1, 2022, ' Sleman', 46.49, 25.04, 25.04, 17.08, 32.77, 0.99, 0.16, 0.03, 0.57),
(2, 2022, ' Yogyakarta', 43.28, 22.75, 52.85, 40.72, 77.23, 20.98, 10.96, 71.47, 62.47),
(3, 2022, ' Sleman', 31.61, 89.25, 29.41, 90.67, 41.55, 25.04, 44.26, 20.1, 66.1),
(4, 2022, ' Kulonprogo', 53.15, 94.08, 46.05, 60.55, 96.23, 58.06, 20.86, 94.32, 5.42),
(5, 2022, ' Gunungkidul', 87.44, 52.89, 24.56, 75.82, 64.72, 12.87, 85.57, 18.8, 17.17),
(6, 2022, ' Bantul', 17.64, 29.74, 49.05, 24.4, 80.46, 49.35, 2.83, 73.92, 42.22),
(7, 2022, ' Yogyakarta', 6.87, 48.29, 88.1, 85.2, 40.77, 0.95, 42.22, 15.62, 78.77),
(8, 2022, ' Yogyakarta', 89.69, 28.64, 11.55, 30.87, 57.55, 78.4, 83.78, 70.31, 55.01),
(9, 2022, ' Bantul', 91.05, 97.8, 65.65, 49.93, 2.52, 40.78, 34.06, 79.12, 19.37),
(10, 2022, ' Kulonprogo', 62.45, 93.1, 95.85, 1.77, 15.8, 28.33, 90.32, 20.67, 51.67),
(11, 2022, ' Bantul', 40.6, 3.07, 41.97, 42.26, 75.66, 1.6, 39.2, 82.66, 83.3),
(12, 2022, ' Sleman', 43.16, 97.03, 64.78, 16.21, 20.35, 42.22, 62.58, 25.48, 22.33),
(13, 2022, ' Bantul', 84.21, 98.71, 79.42, 78.58, 17.58, 76.92, 38.16, 87.35, 72.15),
(14, 2022, ' Bantul', 52.68, 56.63, 81.02, 36.19, 97.88, 64.98, 22.29, 49.08, 41.65),
(15, 2022, ' Yogyakarta', 29.98, 91.75, 72.36, 79.5, 27.67, 97.38, 63.75, 2.89, 25.36),
(16, 2022, ' Kulonprogo', 91.47, 54.45, 62.36, 46.88, 45.01, 46.87, 18.46, 20.3, 46.85),
(17, 2022, ' Bantul', 73.69, 70.2, 84.35, 27.34, 83.36, 55.33, 64.99, 25.07, 11.71),
(18, 2022, ' Bantul', 93.36, 8.24, 84.41, 20.91, 50.87, 52.85, 73.86, 82.08, 98.8),
(19, 2023, ' Gunungkidul', 10.21, 90.21, 26.06, 77.03, 23.32, 40.5, 76.61, 16.03, 55.04),
(20, 2023, ' Gunungkidul', 56.71, 84.31, 58.67, 64.71, 99.61, 52.35, 79.1, 65.34, 53.33),
(21, 2023, ' Bantul', 80.31, 58.55, 69.52, 68.9, 73.22, 1.62, 50.75, 92.24, 1.03),
(22, 2023, ' Sleman', 7.58, 17.49, 25.72, 89.03, 93.44, 38.51, 24.13, 56.77, 55.86),
(23, 2023, ' Gunungkidul', 64.97, 38.2, 83.94, 85.97, 98.5, 73.5, 62.03, 96.21, 25.23),
(24, 2023, ' Sleman', 23.54, 93.76, 37.99, 25.61, 21.48, 24.43, 11.38, 49.38, 86.01),
(25, 2023, ' Kulonprogo', 25.49, 0.7, 74.69, 42.23, 38.49, 75.57, 24.61, 96.56, 1.39),
(26, 2023, ' Sleman', 96.57, 7.16, 84.01, 55.71, 32.16, 47.62, 81.85, 65.53, 31.73),
(27, 2023, ' Bantul', 32.59, 4.75, 96.12, 42.99, 64.5, 1.67, 41.2, 42.18, 92.8),
(28, 2023, ' Kulonprogo', 79.51, 71.4, 46.93, 20.12, 17.78, 90.99, 61.42, 77.52, 40.15),
(29, 2023, ' Yogyakarta', 92.38, 89.53, 45.04, 11.22, 14.13, 58.48, 99.63, 2.49, 61.11),
(30, 2023, ' Yogyakarta', 74.1, 17.69, 37.09, 41.01, 80.66, 46.7, 25.87, 86.11, 96.47),
(31, 2023, ' Kulonprogo', 89.5, 96.03, 42.94, 2.57, 91.66, 33.33, 73.95, 59.43, 77.73),
(32, 2023, ' Sleman', 62.45, 37.66, 6.45, 6.84, 82.2, 36.29, 37.8, 65.39, 20.44),
(33, 2023, ' Kulonprogo', 8.33, 87.1, 98.42, 63.39, 10.63, 74.57, 9.78, 99.81, 47.4),
(34, 2023, ' Bantul', 8.37, 88.2, 55.53, 13.59, 20.42, 87.87, 48.25, 80.86, 4.98),
(35, 2023, ' Bantul', 48.35, 83.15, 24.99, 85, 30.47, 51.03, 41.32, 89.2, 35.64),
(36, 2023, ' Sleman', 69.95, 16.53, 13.26, 64.13, 82.09, 33.08, 11.9, 85.58, 34.35),
(37, 2023, ' Kulonprogo', 66.76, 3.99, 66.95, 95.87, 92.41, 5.46, 44.35, 71.73, 17.2),
(38, 2023, ' Sleman', 57.48, 18.18, 95.28, 99.8, 16.62, 41.95, 75.09, 67.82, 96.79),
(39, 2023, ' Kulonprogo', 51.76, 78.77, 16.96, 38.95, 64.68, 34.58, 54.61, 98.57, 98.41);

-- --------------------------------------------------------

--
-- Table structure for table `komposisi_jenis_sampah_bantul`
--

CREATE TABLE `komposisi_jenis_sampah_bantul` (
  `id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `sisa_makanan` float NOT NULL,
  `kayu_ranting` float NOT NULL,
  `kertas_karton` float NOT NULL,
  `plastik` float NOT NULL,
  `logam` float NOT NULL,
  `kain` float NOT NULL,
  `karet_kulit` float NOT NULL,
  `kaca` float NOT NULL,
  `lainnya` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komposisi_jenis_sampah_bantul`
--

INSERT INTO `komposisi_jenis_sampah_bantul` (`id`, `tahun`, `kabupaten`, `sisa_makanan`, `kayu_ranting`, `kertas_karton`, `plastik`, `logam`, `kain`, `karet_kulit`, `kaca`, `lainnya`) VALUES
(0, 2022, 'Bantul', 17.64, 29.74, 49.05, 24.4, 80.46, 49.35, 2.83, 73.92, 42.22),
(0, 2022, 'Bantul', 91.05, 97.8, 65.65, 49.93, 2.52, 40.78, 34.06, 79.12, 19.37),
(0, 2022, 'Bantul', 40.6, 3.07, 41.97, 42.26, 75.66, 1.6, 39.2, 82.66, 83.3),
(0, 2022, 'Bantul', 84.21, 98.71, 79.42, 78.58, 17.58, 76.92, 38.16, 87.35, 72.15),
(0, 2022, 'Bantul', 52.68, 56.63, 81.02, 36.19, 97.88, 64.98, 22.29, 49.08, 41.65),
(0, 2022, 'Bantul', 73.69, 70.2, 84.35, 27.34, 83.36, 55.33, 64.99, 25.07, 11.71),
(0, 2022, 'Bantul', 93.36, 8.24, 84.41, 20.91, 50.87, 52.85, 73.86, 82.08, 98.8),
(0, 2023, 'Bantul', 80.31, 58.55, 69.52, 68.9, 73.22, 1.62, 50.75, 92.24, 1.03),
(0, 2023, 'Bantul', 32.59, 4.75, 96.12, 42.99, 64.5, 1.67, 41.2, 42.18, 92.8),
(0, 2023, 'Bantul', 8.37, 88.2, 55.53, 13.59, 20.42, 87.87, 48.25, 80.86, 4.98),
(0, 2023, 'Bantul', 48.35, 83.15, 24.99, 85, 30.47, 51.03, 41.32, 89.2, 35.64);

-- --------------------------------------------------------

--
-- Table structure for table `komposisi_jenis_sampah_gunungkidul`
--

CREATE TABLE `komposisi_jenis_sampah_gunungkidul` (
  `id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `sisa_makanan` float NOT NULL,
  `kayu_ranting` float NOT NULL,
  `kertas_karton` float NOT NULL,
  `plastik` float NOT NULL,
  `logam` float NOT NULL,
  `kain` float NOT NULL,
  `karet_kulit` float NOT NULL,
  `kaca` float NOT NULL,
  `lainnya` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komposisi_jenis_sampah_gunungkidul`
--

INSERT INTO `komposisi_jenis_sampah_gunungkidul` (`id`, `tahun`, `kabupaten`, `sisa_makanan`, `kayu_ranting`, `kertas_karton`, `plastik`, `logam`, `kain`, `karet_kulit`, `kaca`, `lainnya`) VALUES
(0, 2022, 'Gunungkidul', 87.44, 52.89, 24.56, 75.82, 64.72, 12.87, 85.57, 18.8, 17.17),
(0, 2023, 'Gunungkidul', 10.21, 90.21, 26.06, 77.03, 23.32, 40.5, 76.61, 16.03, 55.04),
(0, 2023, 'Gunungkidul', 56.71, 84.31, 58.67, 64.71, 99.61, 52.35, 79.1, 65.34, 53.33),
(0, 2023, 'Gunungkidul', 64.97, 38.2, 83.94, 85.97, 98.5, 73.5, 62.03, 96.21, 25.23);

-- --------------------------------------------------------

--
-- Table structure for table `komposisi_jenis_sampah_kulonprogo`
--

CREATE TABLE `komposisi_jenis_sampah_kulonprogo` (
  `id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `sisa_makanan` float NOT NULL,
  `kayu_ranting` float NOT NULL,
  `kertas_karton` float NOT NULL,
  `plastik` float NOT NULL,
  `logam` float NOT NULL,
  `kain` float NOT NULL,
  `karet_kulit` float NOT NULL,
  `kaca` float NOT NULL,
  `lainnya` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komposisi_jenis_sampah_kulonprogo`
--

INSERT INTO `komposisi_jenis_sampah_kulonprogo` (`id`, `tahun`, `kabupaten`, `sisa_makanan`, `kayu_ranting`, `kertas_karton`, `plastik`, `logam`, `kain`, `karet_kulit`, `kaca`, `lainnya`) VALUES
(0, 2022, 'Kulonprogo', 53.15, 94.08, 46.05, 60.55, 96.23, 58.06, 20.86, 94.32, 5.42),
(0, 2022, 'Kulonprogo', 62.45, 93.1, 95.85, 1.77, 15.8, 28.33, 90.32, 20.67, 51.67),
(0, 2022, 'Kulonprogo', 91.47, 54.45, 62.36, 46.88, 45.01, 46.87, 18.46, 20.3, 46.85),
(0, 2023, 'Kulonprogo', 25.49, 0.7, 74.69, 42.23, 38.49, 75.57, 24.61, 96.56, 1.39),
(0, 2023, 'Kulonprogo', 79.51, 71.4, 46.93, 20.12, 17.78, 90.99, 61.42, 77.52, 40.15),
(0, 2023, 'Kulonprogo', 89.5, 96.03, 42.94, 2.57, 91.66, 33.33, 73.95, 59.43, 77.73),
(0, 2023, 'Kulonprogo', 8.33, 87.1, 98.42, 63.39, 10.63, 74.57, 9.78, 99.81, 47.4),
(0, 2023, 'Kulonprogo', 66.76, 3.99, 66.95, 95.87, 92.41, 5.46, 44.35, 71.73, 17.2);

-- --------------------------------------------------------

--
-- Table structure for table `komposisi_jenis_sampah_sleman`
--

CREATE TABLE `komposisi_jenis_sampah_sleman` (
  `id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `sisa_makanan` float NOT NULL,
  `kayu_ranting` float NOT NULL,
  `kertas_karton` float NOT NULL,
  `plastik` float NOT NULL,
  `logam` float NOT NULL,
  `kain` float NOT NULL,
  `karet_kulit` float NOT NULL,
  `kaca` float NOT NULL,
  `lainnya` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komposisi_jenis_sampah_sleman`
--

INSERT INTO `komposisi_jenis_sampah_sleman` (`id`, `tahun`, `kabupaten`, `sisa_makanan`, `kayu_ranting`, `kertas_karton`, `plastik`, `logam`, `kain`, `karet_kulit`, `kaca`, `lainnya`) VALUES
(0, 2022, 'Sleman', 46.49, 25.04, 25.04, 17.08, 32.77, 0.99, 0.16, 0.03, 0.57),
(0, 2022, 'Sleman', 31.61, 89.25, 29.41, 90.67, 41.55, 25.04, 44.26, 20.1, 66.1),
(0, 2022, 'Sleman', 43.16, 97.03, 64.78, 16.21, 20.35, 42.22, 62.58, 25.48, 22.33),
(0, 2023, 'Sleman', 7.58, 17.49, 25.72, 89.03, 93.44, 38.51, 24.13, 56.77, 55.86),
(0, 2023, 'Sleman', 23.54, 93.76, 37.99, 25.61, 21.48, 24.43, 11.38, 49.38, 86.01),
(0, 2023, 'Sleman', 96.57, 7.16, 84.01, 55.71, 32.16, 47.62, 81.85, 65.53, 31.73),
(0, 2023, 'Sleman', 62.45, 37.66, 6.45, 6.84, 82.2, 36.29, 37.8, 65.39, 20.44);

-- --------------------------------------------------------

--
-- Table structure for table `komposisi_jenis_sampah_yogyakarta`
--

CREATE TABLE `komposisi_jenis_sampah_yogyakarta` (
  `id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `sisa_makanan` float NOT NULL,
  `kayu_ranting` float NOT NULL,
  `kertas_karton` float NOT NULL,
  `plastik` float NOT NULL,
  `logam` float NOT NULL,
  `kain` float NOT NULL,
  `karet_kulit` float NOT NULL,
  `kaca` float NOT NULL,
  `lainnya` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komposisi_jenis_sampah_yogyakarta`
--

INSERT INTO `komposisi_jenis_sampah_yogyakarta` (`id`, `tahun`, `kabupaten`, `sisa_makanan`, `kayu_ranting`, `kertas_karton`, `plastik`, `logam`, `kain`, `karet_kulit`, `kaca`, `lainnya`) VALUES
(0, 2022, 'Yogyakarta', 43.28, 22.75, 52.85, 40.72, 77.23, 20.98, 10.96, 71.47, 62.47),
(0, 2022, 'Yogyakarta', 6.87, 48.29, 88.1, 85.2, 40.77, 0.95, 42.22, 15.62, 78.77),
(0, 2022, 'Yogyakarta', 89.69, 28.64, 11.55, 30.87, 57.55, 78.4, 83.78, 70.31, 55.01),
(0, 2022, 'Yogyakarta', 92.98, 15.96, 70.97, 55.18, 64.85, 67.6, 21.89, 70.25, 98.5),
(0, 2023, 'Yogyakarta', 22.55, 98.22, 91.53, 80.29, 82.85, 3.88, 61.43, 84.07, 63.3),
(0, 2023, 'Yogyakarta', 11.88, 89.84, 58.33, 19.89, 52.95, 19.19, 61.08, 45.14, 19.16),
(0, 2023, 'Yogyakarta', 90.79, 57.04, 20.82, 71.33, 60.38, 85.62, 48.47, 20.87, 33.22),
(0, 2023, 'Yogyakarta', 13.99, 90.24, 67.29, 92.45, 57.12, 96.12, 62.67, 63.14, 84.34);

-- --------------------------------------------------------

--
-- Table structure for table `sumber_sampah`
--

CREATE TABLE `sumber_sampah` (
  `id` int(11) NOT NULL,
  `tahun` int(11) DEFAULT NULL,
  `kabupaten` varchar(50) DEFAULT NULL,
  `rumah_tangga` float DEFAULT NULL,
  `perkantoran` float DEFAULT NULL,
  `pasar` float DEFAULT NULL,
  `perniagaan` float DEFAULT NULL,
  `fasilitas_publik` float DEFAULT NULL,
  `kawasan` float DEFAULT NULL,
  `lain` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sumber_sampah`
--

INSERT INTO `sumber_sampah` (`id`, `tahun`, `kabupaten`, `rumah_tangga`, `perkantoran`, `pasar`, `perniagaan`, `fasilitas_publik`, `kawasan`, `lain`) VALUES
(1, 2023, 'Sleman', 413.23, 2.53, 56.2, 1, 115.28, 4800, 13.55),
(2, 2023, 'Kulonprogo', 250.75, 11, 4700, 3200, 9300, 27, 4800),
(3, 2023, 'Gunungkidul', 300, 6300, 13200, 4750, 1, 29, 28),
(4, 2023, 'Bantul', 200, 4500.5, 7200, 3100, 5.5, 15, 12),
(5, 2023, 'Yogyakarta', 500, 7800, 13500, 4200, 10, 20, 25),
(6, 2023, 'Sleman', 100.5, 1200, 3300, 900, 3, 10, 8),
(7, 2023, 'Kulonprogo', 250.75, 3000, 5400, 1800, 7, 25, 20),
(8, 2023, 'Gunungkidul', 310.6, 4900, 11200, 4700, 1.5, 27, 30),
(9, 2023, 'Bantul', 275.2, 5000, 9100, 3200, 4.5, 17, 15),
(10, 2023, 'Yogyakarta', 520, 8500, 14500, 4600, 12, 22, 27),
(11, 2023, 'Sleman', 125.75, 1300, 3500, 950, 3.5, 11, 9),
(12, 2023, 'Kulonprogo', 270.5, 3200, 5600, 1900, 8, 26, 21),
(13, 2023, 'Gunungkidul', 330.45, 5100, 11300, 4800, 2, 28, 31),
(14, 2023, 'Bantul', 290.1, 5100, 9200, 3300, 5, 18, 16),
(15, 2023, 'Yogyakarta', 540, 8700, 14600, 4700, 13, 23, 28),
(16, 2023, 'Sleman', 150, 1400, 3600, 1000, 4, 12, 10),
(17, 2023, 'Kulonprogo', 280, 3300, 5700, 2000, 9, 27, 22),
(18, 2023, 'Gunungkidul', 350, 5200, 11400, 4900, 2.5, 29, 32),
(19, 2023, 'Bantul', 300, 5200, 9300, 3400, 5.5, 19, 17),
(20, 2023, 'Yogyakarta', 560, 8900, 14700, 4800, 14, 24, 29),
(21, 2022, 'Sleman', 175, 1500, 3700, 1050, 4.5, 13, 11),
(22, 2022, 'Kulonprogo', 290, 3400, 5800, 2100, 10, 28, 23),
(23, 2022, 'Gunungkidul', 370, 5300, 11500, 5000, 3, 30, 33),
(24, 2022, 'Bantul', 310, 5300, 9400, 3500, 5.5, 19, 17),
(25, 2022, 'Yogyakarta', 580, 9100, 14800, 4900, 15, 25, 30),
(26, 2022, 'Sleman', 200, 1600, 3800, 1100, 5, 14, 12),
(27, 2022, 'Kulonprogo', 300, 3500, 5900, 2200, 11, 29, 24),
(28, 2022, 'Gunungkidul', 390, 5400, 11600, 5100, 3.5, 31, 34),
(29, 2022, 'Bantul', 320, 5400, 9500, 3600, 6, 20, 18),
(30, 2022, 'Yogyakarta', 600, 9300, 14900, 5000, 16, 26, 31),
(31, 2022, 'Sleman', 225, 1700, 3900, 1150, 5.5, 15, 13),
(32, 2022, 'Kulonprogo', 310, 3600, 6000, 2300, 12, 30, 25),
(33, 2022, 'Gunungkidul', 410, 5500, 11700, 5200, 4, 32, 35),
(34, 2022, 'Bantul', 330, 5500, 9600, 3700, 6.5, 21, 19),
(35, 2022, 'Yogyakarta', 620, 9500, 15000, 5100, 17, 27, 32),
(36, 2022, 'Sleman', 250, 1800, 4000, 1200, 6, 16, 14),
(37, 2022, 'Kulonprogo', 320, 3700, 6100, 2400, 13, 31, 26),
(38, 2022, 'Gunungkidul', 430, 5600, 11800, 5300, 4.5, 33, 36),
(39, 2022, 'Bantul', 340, 5600, 9700, 3800, 7, 23, 21);

-- --------------------------------------------------------

--
-- Table structure for table `timbulan_sampah`
--

CREATE TABLE `timbulan_sampah` (
  `id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `timbulan_sampah_harian` float NOT NULL,
  `timbulan_sampah_tahunan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timbulan_sampah`
--

INSERT INTO `timbulan_sampah` (`id`, `tahun`, `kabupaten`, `timbulan_sampah_harian`, `timbulan_sampah_tahunan`) VALUES
(1, 2022, 'Bantul', 6.8, 2482),
(2, 2022, 'Bantul', 7.2, 2628),
(3, 2022, 'Bantul', 6.5, 2372.5),
(4, 2022, 'Kulonprogo', 5.5, 2007.5),
(5, 2022, 'Kulonprogo', 6.2, 2263),
(6, 2022, 'Kulonprogo', 5.9, 2143.5),
(7, 2022, 'Yogyakarta', 8, 2920),
(8, 2022, 'Yogyakarta', 8.5, 3102.5),
(9, 2022, 'Yogyakarta', 7.8, 2847),
(10, 2022, 'Sleman', 7.3, 2664.5),
(11, 2022, 'Sleman', 7.1, 2591.5),
(12, 2022, 'Sleman', 7.6, 2774),
(13, 2022, 'Gunungkidul', 4.9, 1788.5),
(14, 2022, 'Gunungkidul', 5.2, 1898),
(15, 2022, 'Gunungkidul', 4.7, 1715.5),
(16, 2022, 'Bantul', 7, 2555),
(17, 2022, 'Bantul', 6.3, 2299.5),
(18, 2022, 'Bantul', 6.9, 2518.5),
(19, 2022, 'Kulonprogo', 5.8, 2111),
(20, 2022, 'Kulonprogo', 6.1, 2224.5),
(21, 2022, 'Kulonprogo', 6.4, 2338),
(22, 2022, 'Yogyakarta', 7.7, 2810.5),
(23, 2022, 'Yogyakarta', 8.2, 2993),
(24, 2022, 'Yogyakarta', 7.5, 2737.5),
(25, 2022, 'Sleman', 7.4, 2691),
(26, 2022, 'Sleman', 7.8, 2847),
(27, 2022, 'Sleman', 7.2, 2628),
(28, 2022, 'Gunungkidul', 5, 1824),
(29, 2022, 'Gunungkidul', 5.3, 1934.5),
(30, 2022, 'Gunungkidul', 4.8, 1751),
(55, 2023, 'Sleman', 7.4, 2691),
(56, 2023, 'Sleman', 7.8, 2847),
(57, 2023, 'Sleman', 7.2, 2628),
(58, 2023, 'Gunungkidul', 5, 1824),
(59, 2023, 'Gunungkidul', 5.3, 1934.5),
(60, 2023, 'Gunungkidul', 4.8, 1751),
(61, 2023, 'Bantul', 6.6, 2400),
(62, 2023, 'Bantul', 6.4, 2300),
(63, 2023, 'Bantul', 6.8, 2480),
(64, 2023, 'Kulonprogo', 5.7, 2050),
(65, 2023, 'Kulonprogo', 6, 2200),
(66, 2023, 'Kulonprogo', 6.3, 2300),
(67, 2023, 'Yogyakarta', 7.9, 2870),
(68, 2023, 'Yogyakarta', 8.3, 3030),
(69, 2023, 'Yogyakarta', 7.6, 2770),
(70, 2023, 'Sleman', 7.5, 2730),
(71, 2023, 'Sleman', 7.7, 2790),
(72, 2023, 'Sleman', 7, 2550),
(73, 2023, 'Gunungkidul', 5, 1800),
(74, 2023, 'Gunungkidul', 5.5, 2000),
(75, 2023, 'Gunungkidul', 4.5, 1650);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(10, 'admin A', 'admin01@gmail.com', '698d51a19d8a121ce581499d7b701668', 'admin'),
(14, 'user A', 'user01@gmail.com', '698d51a19d8a121ce581499d7b701668', 'user'),
(15, 'user B', 'user02@gmail.com', '698d51a19d8a121ce581499d7b701668', 'user'),
(16, 'ardra', 'satriyo@gmail.com', '0085dc406fdd7334737b92e17d059a96', 'admin'),
(17, 'ardra', 'ardra123@gmail.com', 'ardra', 'admin'),
(19, 'userbaru', 'userbaru@gmail.com', 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users_new`
--

CREATE TABLE `users_new` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user',
  `gambar` text NOT NULL,
  `tanggal_pelaporan` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `tempat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_new`
--

INSERT INTO `users_new` (`id`, `name`, `email`, `password`, `user_type`, `gambar`, `tanggal_pelaporan`, `alamat`, `status`, `tempat`) VALUES
(1, 'admin A', 'admin01@gmail.com', '698d51a19d8a121ce581499d7b701668', 'admin', '', '0000-00-00', '', 1, ''),
(2, 'user A', 'user01@gmail.com', '698d51a19d8a121ce581499d7b701668', 'user', '', '0000-00-00', '', 0, ''),
(3, 'user B', 'user02@gmail.com', '698d51a19d8a121ce581499d7b701668', 'user', '', '0000-00-00', '', 0, ''),
(4, 'ardra', 'satriyo@gmail.com', '0085dc406fdd7334737b92e17d059a96', 'admin', '', '0000-00-00', '', 0, ''),
(5, 'ardra', 'ardra123@gmail.com', 'ardra', 'admin', '', '0000-00-00', '', 0, ''),
(6, 'userbaru', 'userbaru@gmail.com', 'user', 'user', '', '0000-00-00', '', 0, ''),
(7, '', 'psi@gmail', '$2y$10$UxqFgWCp2v/hStSNp5Y9XOUT6HocXheQ3VYJC4mTN8xhwnNF6ZTpa', 'user', '', '0000-00-00', '', 0, ''),
(8, '', 'tkd', '$2y$10$HmpmwnGwIRz/CCvETK013uVkUsv0wB5ujZiTzijR2p5XuenAMExJK', 'user', '', '0000-00-00', '', 0, ''),
(9, '', 'batari', '$2y$10$eLcBR1qZkJea0zclL6INxOLAIHKDAaPpoKmWcz0Gf7rQXMyNN.YOy', 'user', '', '0000-00-00', '', 0, ''),
(10, 'bintangaaa', 'bintangaaa@gmail.com', '987', 'user', 'hihi', '2024-07-29', 'sinni', 1, ''),
(11, 'ardra', 'ardra1@gmail.com', '0085dc406fdd7334737b92e17d059a96', 'user', '', '0000-00-00', '', 0, ''),
(12, 'adminardra', 'adminardra@gmail.com', 'admin', 'admin', '', '0000-00-00', '', 0, ''),
(14, '', 'jogreenadmin@gmail.com', '$2y$10$TCjiZTXXkZUlehBF6wKQYeEDftlVXfqm89vCtFkRzalDE8tut3IGG', 'user', '', '0000-00-00', '', 0, ''),
(15, 'coba', '', '', 'user', '3_UII Background Terang.png', '2004-03-21', 'kaliurang uii', 0, 'jogja'),
(16, 'Ardra', '', '', 'user', '3_UII Background Terang.png', '2004-02-10', 'kaliurang uii', 1, 'jogja');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel_sampah`
--
ALTER TABLE `artikel_sampah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komposisi_jenis_sampah`
--
ALTER TABLE `komposisi_jenis_sampah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sumber_sampah`
--
ALTER TABLE `sumber_sampah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timbulan_sampah`
--
ALTER TABLE `timbulan_sampah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_new`
--
ALTER TABLE `users_new`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel_sampah`
--
ALTER TABLE `artikel_sampah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `komposisi_jenis_sampah`
--
ALTER TABLE `komposisi_jenis_sampah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `sumber_sampah`
--
ALTER TABLE `sumber_sampah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `timbulan_sampah`
--
ALTER TABLE `timbulan_sampah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users_new`
--
ALTER TABLE `users_new`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
