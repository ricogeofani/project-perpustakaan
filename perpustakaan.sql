-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 04:43 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggotas`
--

CREATE TABLE `anggotas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggotas`
--

INSERT INTO `anggotas` (`id`, `nama`, `sex`, `telp`, `alamat`, `email`, `created_at`, `updated_at`) VALUES
(2, 'Cawisono Niyaga Thamrin', 'L', '0201 4378 697', 'Kpg. Bagis Utama No. 45, Kupang 22214, Jabar', 'yosef.widiastuti@example.net', '2021-11-18 09:06:40', '2021-11-18 09:06:40'),
(7, 'Kemal Siregar', 'P', '0691 8451 4640', 'Dk. Babadak No. 509, Pagar Alam 77523, Sumbar', 'jinawi.permata@example.org', '2021-11-18 09:06:40', '2021-11-18 09:06:40'),
(9, 'Marwata Tri Samosir M.M.', 'P', '(+62) 808 5061 5367', 'Gg. Gajah No. 597, Pariaman 53382, Bengkulu', 'natalia93@example.net', '2021-11-18 09:06:40', '2021-11-18 09:06:40'),
(13, 'Edward Prayoga', 'P', '(+62) 337 2433 277', 'Jln. Bakin No. 473, Balikpapan 37960, Maluku', 'galar.halimah@example.org', '2021-11-18 09:06:40', '2021-11-18 09:06:40'),
(14, 'Bella Maryati', 'L', '0272 3009 3942', 'Jln. Wora Wari No. 547, Bau-Bau 58252, Kaltara', 'hutapea.ella@example.net', '2021-11-18 09:06:40', '2021-11-18 09:06:40'),
(16, 'Bakijan Narpati', 'L', '(+62) 753 5679 1943', 'Dk. Elang No. 185, Pangkal Pinang 90955, Banten', 'lega.firgantoro@example.com', '2021-11-18 09:06:40', '2021-11-18 09:06:40'),
(60, 'Febi Ella Usamah', 'P', '(+62) 309 6261 497', 'Psr. Laswi No. 853, Bekasi 82126, Sumbar', 'znatsir@example.org', '2021-11-26 23:23:57', '2021-11-26 23:23:57'),
(61, 'Rachel Padmasari', 'P', '0689 9863 980', 'Jr. Batako No. 220, Tarakan 40198, Kaltara', 'ihassanah@example.com', '2021-11-26 23:23:57', '2021-11-26 23:23:57'),
(62, 'Okta Nugroho', 'L', '0861 948 667', 'Jln. Babah No. 598, Bandar Lampung 95828, Malut', 'clara.winarno@example.org', '2021-11-26 23:23:57', '2021-11-26 23:23:57'),
(63, 'Mulyono Maulana', 'L', '0217 4085 020', 'Gg. Krakatau No. 823, Bengkulu 83627, Jatim', 'farhunnisa60@example.org', '2021-11-26 23:23:57', '2021-11-26 23:23:57'),
(64, 'Taufik Anggriawan', 'P', '0748 9161 9017', 'Gg. Jaksa No. 465, Banjarbaru 69346, Sumbar', 'iyuniar@example.org', '2021-11-26 23:23:57', '2021-11-26 23:23:57'),
(65, 'Arta Pratama', 'P', '(+62) 20 0283 8878', 'Jln. Pasteur No. 131, Pasuruan 60801, Sulbar', 'nova82@example.org', '2021-11-26 23:23:57', '2021-11-26 23:23:57'),
(66, 'Cengkal Hidayat S.I.Kom', 'P', '(+62) 417 1439 354', 'Kpg. Bah Jaya No. 529, Pekanbaru 88596, Babel', 'ehutagalung@example.com', '2021-11-26 23:23:57', '2021-11-26 23:23:57'),
(67, 'Daliman Sitompul', 'P', '(+62) 904 1457 7720', 'Ds. Tubagus Ismail No. 297, Probolinggo 21428, Banten', 'wasita.oliva@example.com', '2021-11-26 23:23:57', '2021-11-26 23:23:57'),
(68, 'Taufan Halim S.Kom', 'P', '0975 5696 638', 'Kpg. Bak Mandi No. 782, Tebing Tinggi 16968, Sulteng', 'ylatupono@example.net', '2021-11-26 23:23:57', '2021-11-26 23:23:57'),
(69, 'Daruna Jaeman Siregar S.Kom', 'P', '0272 2812 673', 'Dk. Baha No. 446, Lhokseumawe 43273, Banten', 'jinawi60@example.com', '2021-11-26 23:23:57', '2021-11-26 23:23:57'),
(70, 'Bagiya Prasetya M.Pd', 'P', '(+62) 640 3017 2908', 'Jln. Sutami No. 479, Sungai Penuh 49058, Riau', 'dsaptono@example.net', '2021-11-26 23:23:57', '2021-11-26 23:23:57'),
(71, 'Nadine Kartika Suartini', 'L', '(+62) 322 0379 382', 'Dk. Baing No. 541, Sorong 73916, Kalsel', 'xpuspita@example.com', '2021-11-26 23:23:57', '2021-11-26 23:23:57'),
(72, 'Tari Kuswandari', 'L', '(+62) 583 6756 6230', 'Kpg. Cihampelas No. 346, Padangsidempuan 74233, Banten', 'nurdiyanti.wirda@example.com', '2021-11-26 23:23:57', '2021-11-26 23:23:57'),
(73, 'Darimin Nashiruddin', 'L', '(+62) 701 1588 0088', 'Gg. Laksamana No. 553, Probolinggo 27934, Sultra', 'fwaluyo@example.com', '2021-11-26 23:23:57', '2021-11-26 23:23:57'),
(74, 'Ratna Rahayu', 'P', '(+62) 676 6240 340', 'Jr. Bank Dagang Negara No. 722, Bogor 25525, Kepri', 'patricia52@example.net', '2021-11-26 23:23:57', '2021-11-26 23:23:57'),
(75, 'Virman Nasrullah Hakim', 'L', '0810 146 845', 'Psr. Padma No. 885, Banjarmasin 98023, Pabar', 'agustina.bakti@example.net', '2021-11-26 23:23:57', '2021-11-26 23:23:57'),
(76, 'Ghani Mahendra', 'L', '0941 0121 778', 'Ki. Nangka No. 689, Parepare 19657, Pabar', 'gunarto.aisyah@example.org', '2021-11-26 23:23:57', '2021-11-26 23:23:57'),
(77, 'Wirda Lestari', 'P', '(+62) 835 882 073', 'Psr. Sutan Syahrir No. 614, Palangka Raya 46341, Kaltim', 'melani.almira@example.org', '2021-11-26 23:23:57', '2021-11-26 23:23:57'),
(78, 'Tiara Hassanah S.Pt', 'L', '(+62) 971 3150 260', 'Jr. Labu No. 890, Langsa 75338, Sulbar', 'rahayu.radit@example.org', '2021-11-26 23:23:57', '2021-11-26 23:23:57'),
(79, 'Tri Zulkarnain', 'L', '(+62) 398 4739 106', 'Ds. Basudewo No. 722, Administrasi Jakarta Selatan 24334, NTB', 'jamalia83@example.com', '2021-11-26 23:23:57', '2021-11-26 23:23:57'),
(80, 'Sarah Hilda Andriani', 'L', '(+62) 212 4526 3731', 'Dk. Tubagus Ismail No. 476, Mojokerto 58076, Kaltim', 'hardiansyah.irma@example.org', '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(81, 'Salman Widodo', 'L', '(+62) 28 3504 915', 'Ki. Bakit  No. 31, Surakarta 94470, Kepri', 'habibi.ira@example.net', '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(82, 'Zelaya Pertiwi', 'P', '0596 4741 4672', 'Ds. Pahlawan No. 833, Kupang 65189, Kaltara', 'aramadan@example.net', '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(83, 'Yosef Bakiono Siregar S.Sos', 'L', '0456 3740 3000', 'Jr. Veteran No. 858, Banjarmasin 63620, Papua', 'aditya76@example.net', '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(84, 'Prasetyo Iswahyudi', 'P', '(+62) 737 1509 956', 'Dk. Ikan No. 304, Tual 42420, Kaltim', 'kayla79@example.com', '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(85, 'Sabar Firgantoro', 'L', '0918 6151 038', 'Ki. Abdul Muis No. 807, Palu 22767, Jatim', 'aryani.carub@example.net', '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(86, 'Mustika Thamrin S.Farm', 'L', '0381 5071 650', 'Ds. Baiduri No. 404, Mojokerto 71435, Kaltim', 'atmaja50@example.net', '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(87, 'Laras Purwanti', 'P', '0517 6019 776', 'Dk. Fajar No. 192, Salatiga 35878, Lampung', 'utama.tina@example.com', '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(88, 'Daliono Uwais', 'L', '0719 2608 180', 'Jr. Flores No. 94, Salatiga 26647, Jambi', 'gwidodo@example.net', '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(89, 'Wulan Agustina', 'L', '(+62) 319 1969 5325', 'Kpg. Sudirman No. 724, Salatiga 99141, DKI', 'kenzie.kusmawati@example.org', '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(90, 'Cahyadi Wasita', 'P', '(+62) 747 7091 6465', 'Ds. Bakau No. 977, Banjar 75323, Malut', 'padma00@example.org', '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(91, 'Halima Kusmawati', 'L', '(+62) 830 907 219', 'Ki. Yoga No. 377, Mojokerto 57277, Pabar', 'zmelani@example.org', '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(92, 'Bella Yuniar', 'L', '(+62) 946 9835 574', 'Kpg. Sutoyo No. 705, Tebing Tinggi 40927, Sulteng', 'tpratama@example.com', '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(93, 'Anita Suartini', 'P', '0392 2504 063', 'Ds. Bayan No. 177, Payakumbuh 13148, Pabar', 'ivan.najmudin@example.org', '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(94, 'Hamima Iriana Rahayu', 'P', '(+62) 862 634 900', 'Psr. Juanda No. 399, Parepare 90937, Kaltara', 'eka.hartati@example.org', '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(95, 'Upik Laksana Nashiruddin M.Kom.', 'L', '029 4656 0306', 'Dk. Yap Tjwan Bing No. 235, Cilegon 25561, Aceh', 'rahmat78@example.com', '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(96, 'Jamalia Suryatmi', 'L', '(+62) 414 0007 440', 'Dk. Sukabumi No. 664, Dumai 35433, Kepri', 'ellis15@example.net', '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(97, 'Zalindra Intan Lestari M.M.', 'P', '0268 0724 2698', 'Jln. Baladewa No. 845, Bekasi 80152, Kaltara', 'amelia39@example.net', '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(98, 'Marwata Ganep Putra', 'P', '0957 8265 8009', 'Jr. Batako No. 921, Malang 42924, NTB', 'zulfa24@example.net', '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(99, 'Paulin Paramita Nuraini S.IP', 'L', '0215 6991 2185', 'Kpg. Sadang Serang No. 760, Tangerang Selatan 32288, Jatim', 'hlatupono@example.com', '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(100, 'Saiful Latupono', 'L', '(+62) 587 1285 948', 'Dk. Padma No. 322, Salatiga 97669, Sumsel', 'qharyanti@example.net', '2021-11-26 23:39:00', '2021-11-26 23:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `bukus`
--

CREATE TABLE `bukus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isbn` int(11) NOT NULL,
  `judul` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` int(11) NOT NULL,
  `id_penerbit` bigint(20) UNSIGNED DEFAULT NULL,
  `id_pengarang` bigint(20) UNSIGNED DEFAULT NULL,
  `id_katalog` bigint(20) UNSIGNED DEFAULT NULL,
  `qty_stok` int(11) NOT NULL,
  `harga_pinjam` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bukus`
--

INSERT INTO `bukus` (`id`, `isbn`, `judul`, `tahun`, `id_penerbit`, `id_pengarang`, `id_katalog`, `qty_stok`, `harga_pinjam`, `created_at`, `updated_at`) VALUES
(2, 468446, 'budidaya lele', 1986, 2, 5, 6, 54, 24000, '2021-11-18 09:06:41', '2021-11-18 09:06:41'),
(5, 883540, 'bahasa python to machine learning', 1977, 7, 3, 1, 16, 50000, '2021-11-18 09:06:41', '2021-11-18 09:06:41'),
(11, 117717, 'budaya gotong royong masyarakat indonesia', 2016, 2, 4, 5, 99, 24646, '2021-11-18 09:06:41', '2021-11-18 09:06:41'),
(12, 113375, 'bisnis untung di tengah pandemi', 2021, 2, 7, 6, 23, 22000, '2021-11-18 09:06:41', '2021-11-18 09:06:41'),
(14, 789748, 'hubungan politik indonesia dan amerika', 1979, 4, 3, 2, 72, 21000, '2021-11-18 09:06:41', '2021-11-18 09:06:41'),
(24, 601936, 'cara mengamankan data penting', 2020, 6, 1, 4, 82, 36205, '2021-11-18 09:06:41', '2021-11-18 09:06:41'),
(27, 145048, 'Lintang Rahayu S.H.', 2015, 3, 4, 3, 20, 6212, '2021-11-26 23:15:12', '2021-11-26 23:15:12'),
(28, 401028, 'Vega Kurniawan M.Pd', 2016, 6, 6, 5, 14, 16208, '2021-11-26 23:15:12', '2021-11-26 23:15:12'),
(29, 644319, 'Dacin Widodo', 2020, 2, 1, 6, 19, 9478, '2021-11-26 23:15:12', '2021-11-26 23:15:12'),
(30, 380739, 'Pranawa Sihotang', 2019, 6, 2, 1, 7, 8665, '2021-11-26 23:15:12', '2021-11-26 23:15:12'),
(31, 655853, 'Zalindra Usamah', 2016, 4, 1, 3, 5, 5857, '2021-11-26 23:15:12', '2021-11-26 23:15:12'),
(32, 818329, 'Hasna Pudjiastuti', 2018, 8, 6, 4, 7, 9802, '2021-11-26 23:15:12', '2021-11-26 23:15:12'),
(33, 786429, 'Dewi Kayla Mandasari S.Pd', 2021, 4, 3, 5, 7, 10369, '2021-11-26 23:15:12', '2021-11-26 23:15:12'),
(34, 760323, 'Virman Firmansyah', 2016, 5, 8, 4, 7, 17905, '2021-11-26 23:15:12', '2021-11-26 23:15:12'),
(35, 638786, 'Anggabaya Pradana', 2015, 8, 7, 3, 8, 16776, '2021-11-26 23:15:12', '2021-11-26 23:15:12'),
(36, 368144, 'Wirda Pertiwi', 2021, 1, 1, 1, 15, 7066, '2021-11-26 23:15:12', '2021-11-26 23:15:12'),
(37, 606499, 'Kiandra Wastuti', 2019, 5, 1, 6, 15, 12799, '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(38, 679053, 'Nadia Indah Wastuti S.Sos', 2021, 8, 1, 5, 19, 5410, '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(39, 590624, 'Adika Widodo', 2017, 3, 8, 5, 20, 7466, '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(40, 859581, 'Salwa Rahayu Laksmiwati S.Pt', 2021, 2, 7, 3, 14, 15652, '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(41, 497828, 'Yuni Hasanah', 2016, 3, 2, 4, 7, 13368, '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(42, 777485, 'Prasetyo Salahudin', 2017, 8, 2, 3, 5, 17125, '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(43, 840557, 'Eli Septi Nasyidah', 2019, 8, 7, 6, 5, 11282, '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(44, 681698, 'Vino Suwarno', 2021, 3, 4, 3, 14, 8343, '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(45, 169821, 'Septi Jasmin Namaga M.Kom.', 2015, 6, 1, 6, 12, 14971, '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(46, 449350, 'Mutia Nasyidah', 2021, 5, 3, 2, 17, 8699, '2021-11-26 23:38:05', '2021-11-26 23:38:05'),
(47, 260149, 'Cindy Ulva Farida', 2020, 5, 2, 1, 16, 9273, '2021-11-26 23:39:00', '2021-11-26 23:39:00'),
(48, 980129, 'Laswi Kusumo', 2015, 2, 6, 2, 20, 8775, '2021-11-26 23:39:00', '2021-11-26 23:39:00'),
(49, 392855, 'Nabila Nasyidah S.IP', 2017, 7, 6, 4, 13, 11614, '2021-11-26 23:39:00', '2021-11-26 23:39:00'),
(50, 714755, 'Wahyu Habibi M.M.', 2017, 8, 5, 5, 9, 11294, '2021-11-26 23:39:00', '2021-11-26 23:39:00'),
(51, 843192, 'Suci Pudjiastuti', 2017, 3, 8, 2, 17, 18903, '2021-11-26 23:39:00', '2021-11-26 23:39:00'),
(52, 887788, 'Qori Nadine Palastri', 2015, 2, 7, 6, 11, 13543, '2021-11-26 23:39:00', '2021-11-26 23:39:00'),
(53, 528777, 'Oliva Fitria Wulandari', 2017, 8, 6, 1, 13, 18897, '2021-11-26 23:39:00', '2021-11-26 23:39:00'),
(54, 835926, 'Sabrina Haryanti', 2016, 2, 7, 6, 9, 9545, '2021-11-26 23:39:00', '2021-11-26 23:39:00'),
(55, 836754, 'Jasmin Puspasari', 2021, 8, 2, 5, 16, 12495, '2021-11-26 23:39:00', '2021-11-26 23:39:00'),
(56, 140996, 'Nabila Hastuti', 2015, 4, 5, 4, 18, 12732, '2021-11-26 23:39:00', '2021-11-26 23:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `detail_peminjaman`
--

CREATE TABLE `detail_peminjaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_peminjaman` bigint(20) UNSIGNED NOT NULL,
  `id_buku` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_peminjaman`
--

INSERT INTO `detail_peminjaman` (`id`, `id_peminjaman`, `id_buku`, `qty`, `created_at`, `updated_at`) VALUES
(1, 3, 5, 3, '2021-11-18 02:17:16', '2021-11-18 02:17:16'),
(2, 2, 5, 4, '2021-11-18 02:17:16', '2021-11-18 02:17:16'),
(3, 1, 24, 2, '2021-11-18 02:17:16', '2021-11-18 02:17:16'),
(4, 4, 14, 1, '2021-11-18 02:17:16', '2021-11-18 02:17:16'),
(5, 8, 12, 4, '2021-11-18 02:17:16', '2021-11-18 02:17:16'),
(6, 3, 11, 4, '2021-11-18 02:17:16', '2021-11-18 02:17:16'),
(7, 6, 11, 2, '2021-11-18 02:17:16', '2021-11-18 02:17:16'),
(8, 7, 2, 6, '2021-11-18 02:17:16', '2021-11-18 02:17:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `katalogs`
--

CREATE TABLE `katalogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_katalog` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `katalogs`
--

INSERT INTO `katalogs` (`id`, `nama_katalog`, `created_at`, `updated_at`) VALUES
(1, 'pemrogaman', '2021-11-18 09:06:41', '2021-11-18 09:06:41'),
(2, 'politik', '2021-11-18 09:06:41', '2021-11-18 09:06:41'),
(3, 'olahraga', '2021-11-18 09:06:41', '2021-11-18 09:06:41'),
(4, 'teknologi', '2021-11-18 09:06:41', '2021-11-18 09:06:41'),
(5, 'budaya', '2021-11-18 09:06:41', '2021-11-18 09:06:41'),
(6, 'bisnis', '2021-11-18 09:06:41', '2021-11-18 09:06:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2010_11_16_215256_create_anggotas_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_11_16_214951_create_penerbits_table', 1),
(7, '2021_11_16_215116_create_pengarangs_table', 1),
(8, '2021_11_16_215131_create_katalogs_table', 1),
(9, '2021_11_16_215205_create_peminjamen_table', 1),
(10, '2021_11_16_215217_create_bukus_table', 1),
(11, '2021_11_16_215244_create_detail_peminjamen_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peminjamen`
--

CREATE TABLE `peminjamen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_anggota` bigint(20) UNSIGNED NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peminjamen`
--

INSERT INTO `peminjamen` (`id`, `id_anggota`, `tgl_pinjam`, `tgl_kembali`, `created_at`, `updated_at`) VALUES
(1, 16, '2021-11-08', '2021-11-08', '2021-11-18 02:13:28', '2021-11-18 02:13:28'),
(2, 9, '2021-11-07', '2021-11-08', '2021-11-18 02:13:28', '2021-11-18 02:13:28'),
(3, 14, '2021-07-06', '2021-11-01', '2021-11-18 02:13:28', '2021-11-18 02:13:28'),
(4, 9, '2021-11-01', '2021-11-15', '2021-11-18 02:13:28', '2021-11-18 02:13:28'),
(5, 7, '2021-06-14', '2021-09-06', '2021-11-18 02:13:28', '2021-11-18 02:13:28'),
(6, 13, '2021-07-19', '2021-11-08', '2021-11-18 02:13:28', '2021-11-18 02:13:28'),
(7, 2, '2021-08-10', '2021-11-02', '2021-11-18 02:13:28', '2021-11-18 02:13:28'),
(8, 9, '2021-07-05', '2021-11-15', '2021-11-18 02:13:28', '2021-11-18 02:13:28');

-- --------------------------------------------------------

--
-- Table structure for table `penerbits`
--

CREATE TABLE `penerbits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_penerbit` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penerbits`
--

INSERT INTO `penerbits` (`id`, `nama_penerbit`, `email`, `telp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Prakosa Iswahyudi', 'adika.pradana@example.org', '(+62) 299 9037 701', 'Jln. Casablanca No. 123, Singkawang 73663, Gorontalo', '2021-11-18 09:06:41', '2021-11-18 09:06:41'),
(2, 'Drajat Nugroho', 'jgunawan@example.org', '022 3912 6445', 'Jln. Jend. A. Yani No. 687, Lubuklinggau 78916, Jatim', '2021-11-18 09:06:41', '2021-11-18 09:06:41'),
(3, 'Luluh Wahyu Hidayanto', 'nwidiastuti@example.org', '0243 1485 494', 'Dk. Rajawali Barat No. 501, Pematangsiantar 88446, DIY', '2021-11-18 09:06:41', '2021-11-18 09:06:41'),
(4, 'Mahdi Nainggolan', 'dsusanti@example.org', '(+62) 397 9477 869', 'Gg. Baabur Royan No. 896, Surakarta 76322, Sulteng', '2021-11-18 09:06:41', '2021-11-18 09:06:41'),
(5, 'Bagya Ganep Firgantoro S.IP', 'ipudjiastuti@example.net', '(+62) 265 8733 4266', 'Ds. Otista No. 334, Palopo 96504, Kaltara', '2021-11-18 09:06:41', '2021-11-18 09:06:41'),
(6, 'Dina Utami', 'cahya.yuliarti@example.com', '0710 3598 236', 'Dk. Hasanuddin No. 717, Cirebon 19668, Jambi', '2021-11-18 09:06:41', '2021-11-18 09:06:41'),
(7, 'Endah Palastri', 'rahmat.suartini@example.com', '0558 3174 5067', 'Kpg. Pasteur No. 725, Payakumbuh 90833, Kaltim', '2021-11-18 09:06:41', '2021-11-18 09:06:41'),
(8, 'Diana Laksmiwati S.E.I', 'uusamah@example.com', '0926 4890 7632', 'Kpg. W.R. Supratman No. 443, Sungai Penuh 93754, Pabar', '2021-11-18 09:06:41', '2021-11-18 09:06:41'),
(55, 'penerbit 20 bvbvbv', 'admin@gmail.com', '0439340333', 'dsn karangagung tengah', '2021-11-25 01:12:29', '2021-11-26 00:38:26');

-- --------------------------------------------------------

--
-- Table structure for table `pengarangs`
--

CREATE TABLE `pengarangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pengarang` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengarangs`
--

INSERT INTO `pengarangs` (`id`, `nama_pengarang`, `email`, `telp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Hafshah Hasanah', 'rahayu.ophelia@example.com', '(+62) 858 800 547', 'Kpg. Bak Mandi No. 543, Medan 45359, Pabar', '2021-11-18 09:06:41', '2021-11-18 09:06:41'),
(2, 'Vicky Nasyiah', 'pnajmudin@example.net', '020 5980 9232', 'Ki. Supono No. 414, Lhokseumawe 99932, Babel', '2021-11-18 09:06:41', '2021-11-18 09:06:41'),
(3, 'Darman Praba Widodo', 'umandasari@example.net', '(+62) 963 7034 878', 'Ki. Lumban Tobing No. 393, Tebing Tinggi 39897, Aceh', '2021-11-18 09:06:41', '2021-11-18 09:06:41'),
(4, 'Chandra Prasetyo', 'hasan23@example.org', '(+62) 924 3811 177', 'Ds. Krakatau No. 178, Kotamobagu 52286, Kalbar', '2021-11-18 09:06:41', '2021-11-18 09:06:41'),
(5, 'Bakiono Maryadi', 'dimas43@example.com', '(+62) 567 6281 989', 'Psr. Monginsidi No. 6, Kotamobagu 54976, DIY', '2021-11-18 09:06:41', '2021-11-18 09:06:41'),
(6, 'Lala Nasyidah', 'busada@example.org', '(+62) 888 5815 7219', 'Psr. Padang No. 935, Sibolga 69579, Bali', '2021-11-18 09:06:41', '2021-11-18 09:06:41'),
(7, 'Okta Wira Hardiansyah', 'jumari36@example.net', '(+62) 779 6014 8759', 'Ki. Yogyakarta No. 921, Pariaman 75862, Lampung', '2021-11-18 09:06:41', '2021-11-18 09:06:41'),
(8, 'Damar Sirait', 'dono79@example.com', '0398 7112 0598', 'Jr. Panjaitan No. 582, Yogyakarta 46323, Jateng', '2021-11-18 09:06:41', '2021-11-18 09:06:41'),
(18, 'rico geofani aliand', 'admin@gmail.com', '0848473707767', 'dsn karangagung tengah', '2021-11-25 23:51:06', '2021-11-26 00:28:43');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_anggota` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `id_anggota`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'rico geofani', 'rico@gmail.com', NULL, '$2y$10$9TqSgnZC1O7vC0e1a0Ke.u8Ngrco7nUMOApxI2JzuV.kqLDbYJcgq', NULL, NULL, '2021-11-18 10:32:38', '2021-11-18 10:32:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggotas`
--
ALTER TABLE `anggotas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bukus_id_penerbit_foreign` (`id_penerbit`),
  ADD KEY `bukus_id_pengarang_foreign` (`id_pengarang`),
  ADD KEY `bukus_id_katalog_foreign` (`id_katalog`);

--
-- Indexes for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_peminjaman_id_peminjaman_foreign` (`id_peminjaman`),
  ADD KEY `detail_peminjaman_id_buku_foreign` (`id_buku`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `katalogs`
--
ALTER TABLE `katalogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `peminjamen`
--
ALTER TABLE `peminjamen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peminjaman_id_anggota_foreign` (`id_anggota`);

--
-- Indexes for table `penerbits`
--
ALTER TABLE `penerbits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengarangs`
--
ALTER TABLE `pengarangs`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_anggota_foreign` (`id_anggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggotas`
--
ALTER TABLE `anggotas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `bukus`
--
ALTER TABLE `bukus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `katalogs`
--
ALTER TABLE `katalogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `peminjamen`
--
ALTER TABLE `peminjamen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `penerbits`
--
ALTER TABLE `penerbits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `pengarangs`
--
ALTER TABLE `pengarangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bukus`
--
ALTER TABLE `bukus`
  ADD CONSTRAINT `bukus_id_katalog_foreign` FOREIGN KEY (`id_katalog`) REFERENCES `katalogs` (`id`),
  ADD CONSTRAINT `bukus_id_penerbit_foreign` FOREIGN KEY (`id_penerbit`) REFERENCES `penerbits` (`id`),
  ADD CONSTRAINT `bukus_id_pengarang_foreign` FOREIGN KEY (`id_pengarang`) REFERENCES `pengarangs` (`id`);

--
-- Constraints for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD CONSTRAINT `detail_peminjaman_id_buku_foreign` FOREIGN KEY (`id_buku`) REFERENCES `bukus` (`id`),
  ADD CONSTRAINT `detail_peminjaman_id_peminjaman_foreign` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjamen` (`id`);

--
-- Constraints for table `peminjamen`
--
ALTER TABLE `peminjamen`
  ADD CONSTRAINT `peminjaman_id_anggota_foreign` FOREIGN KEY (`id_anggota`) REFERENCES `anggotas` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_anggota_foreign` FOREIGN KEY (`id_anggota`) REFERENCES `anggotas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
