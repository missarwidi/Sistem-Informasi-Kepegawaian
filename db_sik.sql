-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 18 Feb 2017 pada 06.11
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_sik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `isi` text,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `tanggal`) VALUES
(1, 'Seleksi Terbuka Calon Pimpinan Tinggi Madya dan Pratama BKN Th. 2016', '<div class="row row-padded text-center">\r\n<div class="col-sm-8 col-sm-offset-2 text-center">\r\n<h3><strong>Seleksi Jabatan Pimpinan Tinggi Madya dan Pratama</strong></h3>\r\n\r\n<p align="center">Dalam rangka pengisian Jabatan Pimpinan Tinggi Madya dan Pratama Badan Kepegawaian Negara (BKN) dan sesuai dengan Undang-Undang Nomor 5 Tahun 2014 tentang Aparatur Sipil Negara serta Peraturan Menteri PAN-RB Nomor 13 Tahun 2014, dengan ini kami mengundang Pegawai Negeri Sipil, yang memenuhi persyaratan untuk mengikuti seleksi terbuka JPT Madya dan Pratama BKN Tahun 2016</p>\r\n</div>\r\n</div>\r\n', NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `datakenaikanpangkat`
--
CREATE TABLE IF NOT EXISTS `datakenaikanpangkat` (
`nip` varchar(35)
,`nama` varchar(75)
,`tanggal_lahir` date
,`tmt` date
,`gol` varchar(50)
,`jabatan` varchar(75)
,`id` int(12)
,`idpangkat` varchar(75)
,`sk_terakhir` varchar(75)
,`minimaltahun` varchar(75)
,`status` int(2)
,`user` varchar(75)
,`tanggal` datetime
,`keterangan` text
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `datapensiun`
--
CREATE TABLE IF NOT EXISTS `datapensiun` (
`nip` varchar(35)
,`nama` varchar(75)
,`tanggal_lahir` date
,`tempat_lahir` varchar(35)
,`tempat_tinggal` varchar(100)
,`tmt` date
,`gol` varchar(50)
,`unitkerja` varchar(50)
,`jabatan` varchar(75)
,`id` int(12)
,`idpensiun` varchar(75)
,`surat_keputusan_pangkat_terakhir` varchar(75)
,`surat_nikah` varchar(75)
,`akta_kelahiran` varchar(75)
,`daftar_keluarga` varchar(75)
,`foto` varchar(75)
,`status` int(11)
,`user` varchar(75)
,`tanggal` datetime
,`keterangan` text
);
-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kenaikanpangkat`
--

CREATE TABLE IF NOT EXISTS `data_kenaikanpangkat` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `idpangkat` varchar(75) DEFAULT NULL,
  `nip` varchar(75) NOT NULL,
  `sk_terakhir` varchar(75) NOT NULL,
  `minimaltahun` varchar(75) NOT NULL,
  `user` varchar(75) NOT NULL,
  `status` int(2) NOT NULL,
  `tanggal` datetime NOT NULL,
  `keterangan` text,
  `gollama` varchar(255) DEFAULT NULL,
  `tmtlama` date DEFAULT NULL,
  `golbaru` varchar(255) DEFAULT NULL,
  `pangkatlama` varchar(255) DEFAULT NULL,
  `pangkatbaru` varchar(255) DEFAULT NULL,
  `kesetiaan` int(3) DEFAULT '0',
  `prestasi` int(3) DEFAULT '0',
  `tanggungjawab` int(3) DEFAULT '0',
  `ketaatan` int(3) DEFAULT '0',
  `kejujuran` int(3) DEFAULT '0',
  `kerjasama` int(3) DEFAULT '0',
  `prakarsa` int(3) DEFAULT '0',
  `kepemimpinan` int(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `data_kenaikanpangkat`
--

INSERT INTO `data_kenaikanpangkat` (`id`, `idpangkat`, `nip`, `sk_terakhir`, `minimaltahun`, `user`, `status`, `tanggal`, `keterangan`, `gollama`, `tmtlama`, `golbaru`, `pangkatlama`, `pangkatbaru`, `kesetiaan`, `prestasi`, `tanggungjawab`, `ketaatan`, `kejujuran`, `kerjasama`, `prakarsa`, `kepemimpinan`) VALUES
(1, 'GOL - 2P228H', '197712312007011021', '197712312007011021_SK.jpg', '4', 'Bangsawan', 2, '2016-12-14 00:00:00', ' ', 'II.A', '0000-00-00', 'II.B', 'Subag Umum dan Kepegawaian', 'Subag Umum dan Kepegawaian', 89, 86, 89, 98, 85, 79, 91, 88);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pensiun`
--

CREATE TABLE IF NOT EXISTS `data_pensiun` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `idpensiun` varchar(75) DEFAULT NULL,
  `nip` varchar(75) NOT NULL,
  `surat_keputusan_pangkat_terakhir` varchar(75) NOT NULL,
  `surat_nikah` varchar(75) NOT NULL,
  `akta_kelahiran` varchar(75) NOT NULL,
  `daftar_keluarga` varchar(75) NOT NULL,
  `foto` varchar(75) NOT NULL,
  `status` int(11) NOT NULL,
  `user` varchar(75) NOT NULL,
  `tanggal` datetime NOT NULL,
  `keterangan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `data_pensiun`
--

INSERT INTO `data_pensiun` (`id`, `idpensiun`, `nip`, `surat_keputusan_pangkat_terakhir`, `surat_nikah`, `akta_kelahiran`, `daftar_keluarga`, `foto`, `status`, `user`, `tanggal`, `keterangan`) VALUES
(3, 'PEN - MFSFON', 'admin', '', '', '', '', '', 1, 'Administrator', '2016-11-13 00:00:00', 'afdsa'),
(6, 'PEN - JVRHT4', '196810282007012004', '196810282007012004_SK.jpg', '196810282007012004_surat nikah.jpg', '', '', '196810282007012004_foto.jpg', 2, 'Dra. Nining Selviani', '2016-12-13 00:00:00', 'Pensiun'),
(7, 'PEN - 47CU4R', '197712312007011021', '197712312007011021_SK.jpg', '', '', '', '', 2, 'Bangsawan', '2016-12-15 00:00:00', 'pensiun'),
(8, 'PEN - W6YZN6', '196008162009041004', '196008162009041004_SK.jpg', '', '', '', '', 0, 'Muhammad Akbar', '2016-12-15 00:00:00', 'pensiun\r\n'),
(9, 'PEN - 4F0CTA', 'admin', 'admin_KK.jpg', '', '', '', '', 1, 'Administrator', '2016-12-17 00:00:00', 'pensiun'),
(10, 'PEN - 2KNG77', '1234567', '1234567_Chrysanthemum.jpg', '', '', '', '', 1, 'widi', '2017-02-16 00:00:00', 'pengajuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_bagian`
--

CREATE TABLE IF NOT EXISTS `master_bagian` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `bagian` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `master_bagian`
--

INSERT INTO `master_bagian` (`id`, `bagian`) VALUES
(1, 'Pegawai'),
(2, 'Sub Bagian Kepegawaian'),
(3, 'Kepala Sub Bagian'),
(4, 'Kepala Bagian'),
(5, 'Kepala Dinas'),
(6, 'Badan Kepegawaian Daerah (BKD)'),
(7, 'Badan Kepegawaian Nasional (BKN)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_gaji`
--

CREATE TABLE IF NOT EXISTS `master_gaji` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `angkagolongan` varchar(5) NOT NULL,
  `hurufgolongan` varchar(5) NOT NULL,
  `tingkatangolongan` int(10) NOT NULL,
  `masakerja` int(10) NOT NULL,
  `gaji` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=617 ;

--
-- Dumping data untuk tabel `master_gaji`
--

INSERT INTO `master_gaji` (`id`, `angkagolongan`, `hurufgolongan`, `tingkatangolongan`, `masakerja`, `gaji`) VALUES
(113, 'I', 'A', 1, 0, '1486500'),
(114, 'I', 'A', 2, 1, ''),
(115, 'I', 'A', 3, 2, '1533400'),
(116, 'I', 'A', 4, 3, ''),
(117, 'I', 'A', 5, 4, '1581700'),
(118, 'I', 'A', 6, 5, ''),
(119, 'I', 'A', 7, 6, '1631500'),
(120, 'I', 'A', 8, 7, ''),
(121, 'I', 'A', 9, 8, '1682900'),
(122, 'I', 'A', 10, 9, ''),
(123, 'I', 'A', 11, 10, '1735900'),
(124, 'I', 'A', 12, 11, ''),
(125, 'I', 'A', 13, 12, '1790500'),
(126, 'I', 'A', 14, 13, ''),
(127, 'I', 'A', 15, 14, '1846900'),
(128, 'I', 'A', 16, 15, ''),
(129, 'I', 'A', 17, 16, '1905100'),
(130, 'I', 'A', 18, 17, ''),
(131, 'I', 'A', 19, 18, '1905100'),
(132, 'I', 'A', 20, 19, ''),
(133, 'I', 'A', 21, 20, '2027000'),
(134, 'I', 'A', 22, 21, ''),
(135, 'I', 'A', 23, 22, '2090800'),
(136, 'I', 'A', 24, 23, ''),
(137, 'I', 'A', 25, 24, '2156700'),
(138, 'I', 'A', 26, 25, ''),
(139, 'I', 'A', 27, 26, '2224600'),
(140, 'I', 'A', 28, 27, ''),
(141, 'I', 'B', 29, 0, ''),
(142, 'I', 'B', 30, 1, ''),
(143, 'I', 'B', 31, 2, ''),
(144, 'I', 'B', 32, 3, '1623400'),
(145, 'I', 'B', 33, 4, ''),
(146, 'I', 'B', 34, 5, '1674500'),
(147, 'I', 'B', 35, 6, ''),
(148, 'I', 'B', 36, 7, '1727300'),
(149, 'I', 'B', 37, 8, ''),
(150, 'I', 'B', 38, 9, '1781700'),
(151, 'I', 'B', 39, 10, ''),
(152, 'I', 'B', 40, 11, '1837800'),
(153, 'I', 'B', 41, 12, ''),
(154, 'I', 'B', 42, 13, '1895700'),
(155, 'I', 'B', 43, 14, ''),
(156, 'I', 'B', 44, 15, '1955400'),
(157, 'I', 'B', 45, 16, ''),
(158, 'I', 'B', 46, 17, '2016900'),
(159, 'I', 'B', 47, 18, ''),
(160, 'I', 'B', 48, 19, '2080500'),
(161, 'I', 'B', 49, 20, ''),
(162, 'I', 'B', 50, 21, '2146000'),
(163, 'I', 'B', 51, 22, ''),
(164, 'I', 'B', 52, 23, '2213000'),
(165, 'I', 'B', 53, 24, ''),
(166, 'I', 'B', 54, 25, '2283300'),
(167, 'I', 'B', 55, 26, ''),
(168, 'I', 'B', 56, 27, '2355200'),
(169, 'I', 'C', 57, 0, ''),
(170, 'I', 'C', 58, 1, ''),
(171, 'I', 'C', 59, 2, ''),
(172, 'I', 'C', 60, 3, '1692100'),
(173, 'I', 'C', 61, 4, ''),
(174, 'I', 'C', 62, 5, '1744400'),
(175, 'I', 'C', 63, 6, ''),
(176, 'I', 'C', 64, 7, '1800300'),
(177, 'I', 'C', 65, 8, ''),
(178, 'I', 'C', 66, 9, '1857000'),
(179, 'I', 'C', 67, 10, ''),
(180, 'I', 'C', 68, 11, '1915500'),
(181, 'I', 'C', 69, 12, ''),
(182, 'I', 'C', 70, 13, '1975800'),
(183, 'I', 'C', 71, 14, ''),
(184, 'I', 'C', 72, 15, '2038100'),
(185, 'I', 'C', 73, 16, ''),
(186, 'I', 'C', 74, 17, '2102300'),
(187, 'I', 'C', 75, 18, ''),
(188, 'I', 'C', 76, 19, '2168500'),
(189, 'I', 'C', 77, 20, ''),
(190, 'I', 'C', 78, 21, '2236800'),
(191, 'I', 'C', 79, 22, ''),
(192, 'I', 'C', 80, 23, '2307200'),
(193, 'I', 'C', 81, 24, ''),
(194, 'I', 'C', 82, 25, '2379900'),
(195, 'I', 'C', 83, 26, ''),
(196, 'I', 'C', 84, 27, '2454800'),
(197, 'I', 'D', 85, 0, ''),
(198, 'I', 'D', 86, 1, ''),
(199, 'I', 'D', 87, 2, ''),
(200, 'I', 'D', 88, 3, '1763600'),
(201, 'I', 'D', 89, 4, ''),
(202, 'I', 'D', 90, 5, '18119200'),
(203, 'I', 'D', 91, 6, ''),
(204, 'I', 'D', 92, 7, '1876500'),
(205, 'I', 'D', 93, 8, ''),
(206, 'I', 'D', 94, 9, '1935600'),
(207, 'I', 'D', 95, 10, ''),
(208, 'I', 'D', 96, 11, '1996500'),
(209, 'I', 'D', 97, 12, ''),
(210, 'I', 'D', 98, 13, '2059400'),
(211, 'I', 'D', 99, 14, ''),
(212, 'I', 'D', 100, 15, '2124300'),
(213, 'I', 'D', 101, 16, ''),
(214, 'I', 'D', 102, 17, '2191200'),
(215, 'I', 'D', 103, 18, ''),
(216, 'I', 'D', 104, 19, '2260200'),
(217, 'I', 'D', 105, 20, ''),
(218, 'I', 'D', 106, 21, '2331400'),
(219, 'I', 'D', 107, 22, ''),
(220, 'I', 'D', 108, 23, '2404800'),
(221, 'I', 'D', 109, 24, ''),
(222, 'I', 'D', 110, 25, '2480500'),
(223, 'I', 'D', 111, 26, ''),
(224, 'I', 'D', 112, 27, '2558700'),
(225, 'II', 'A', 113, 0, '1926000'),
(226, 'II', 'A', 114, 1, '1956300'),
(227, 'II', 'A', 115, 2, ''),
(228, 'II', 'A', 116, 3, '2017900'),
(229, 'II', 'A', 117, 4, ''),
(230, 'II', 'A', 118, 5, '2081500'),
(231, 'II', 'A', 119, 6, ''),
(232, 'II', 'A', 120, 7, '2147000'),
(233, 'II', 'A', 121, 8, ''),
(234, 'II', 'A', 122, 9, '2214700'),
(235, 'II', 'A', 123, 10, ''),
(236, 'II', 'A', 124, 11, '2284400'),
(237, 'II', 'A', 125, 12, ''),
(238, 'II', 'A', 126, 13, '2356400'),
(239, 'II', 'A', 127, 14, ''),
(240, 'II', 'A', 128, 15, '2430600'),
(241, 'II', 'A', 129, 16, ''),
(242, 'II', 'A', 130, 17, '2507100'),
(243, 'II', 'A', 131, 18, ''),
(244, 'II', 'A', 132, 19, '2586100'),
(245, 'II', 'A', 133, 20, ''),
(246, 'II', 'A', 134, 21, '2667500'),
(247, 'II', 'A', 135, 22, ''),
(248, 'II', 'A', 136, 23, '2751600'),
(249, 'II', 'A', 137, 24, ''),
(250, 'II', 'A', 138, 25, '2828200'),
(251, 'II', 'A', 139, 26, ''),
(252, 'II', 'A', 140, 27, '2927600'),
(253, 'II', 'A', 141, 28, ''),
(254, 'II', 'A', 142, 29, '3019800'),
(255, 'II', 'A', 143, 30, ''),
(256, 'II', 'A', 144, 31, '3115900'),
(257, 'II', 'B', 145, 0, ''),
(258, 'II', 'B', 146, 1, ''),
(259, 'II', 'B', 147, 2, ''),
(260, 'II', 'B', 148, 3, '2103300'),
(261, 'II', 'B', 149, 4, ''),
(262, 'II', 'B', 150, 5, '2169500'),
(263, 'II', 'B', 151, 6, ''),
(264, 'II', 'B', 152, 7, '2237900'),
(265, 'II', 'B', 153, 8, ''),
(266, 'II', 'B', 154, 9, '2308300'),
(267, 'II', 'B', 155, 10, ''),
(268, 'II', 'B', 156, 11, '2381100'),
(269, 'II', 'B', 157, 12, ''),
(270, 'II', 'B', 158, 13, '2456000'),
(271, 'II', 'B', 159, 14, ''),
(272, 'II', 'B', 160, 15, '2533400'),
(273, 'II', 'B', 161, 16, ''),
(274, 'II', 'B', 162, 17, '2613200'),
(275, 'II', 'B', 163, 18, ''),
(276, 'II', 'B', 164, 19, '2695500'),
(277, 'II', 'B', 165, 20, ''),
(278, 'II', 'B', 166, 21, '2780400'),
(279, 'II', 'B', 167, 22, ''),
(280, 'II', 'B', 168, 23, '2857900'),
(281, 'II', 'B', 169, 24, ''),
(282, 'II', 'B', 170, 25, '2958300'),
(283, 'II', 'B', 171, 26, ''),
(284, 'II', 'B', 172, 27, '3051400'),
(285, 'II', 'B', 173, 28, ''),
(286, 'II', 'B', 174, 29, '3147600'),
(287, 'II', 'B', 175, 30, ''),
(288, 'II', 'B', 176, 31, '3246700'),
(289, 'II', 'C', 177, 0, ''),
(290, 'II', 'C', 178, 1, ''),
(291, 'II', 'C', 179, 2, ''),
(292, 'II', 'C', 180, 3, '2192300'),
(293, 'II', 'C', 181, 4, ''),
(294, 'II', 'C', 182, 5, '2261300'),
(295, 'II', 'C', 183, 6, ''),
(296, 'II', 'C', 184, 7, '2332500'),
(297, 'II', 'C', 185, 8, ''),
(298, 'II', 'C', 186, 9, '2406000'),
(299, 'II', 'C', 187, 10, ''),
(300, 'II', 'C', 188, 11, '2481800'),
(301, 'II', 'C', 189, 12, ''),
(302, 'II', 'C', 190, 13, '2559900'),
(303, 'II', 'C', 191, 14, ''),
(304, 'II', 'C', 192, 15, '2640600'),
(305, 'II', 'C', 193, 16, ''),
(306, 'II', 'C', 194, 17, '2723700'),
(307, 'II', 'C', 195, 18, ''),
(308, 'II', 'C', 196, 19, '2809500'),
(309, 'II', 'C', 197, 20, ''),
(310, 'II', 'C', 198, 21, '2898000'),
(311, 'II', 'C', 199, 22, ''),
(312, 'II', 'C', 200, 23, '2989300'),
(313, 'II', 'C', 201, 24, ''),
(314, 'II', 'C', 202, 25, '3083400'),
(315, 'II', 'C', 203, 26, ''),
(316, 'II', 'C', 204, 27, '3180500'),
(317, 'II', 'C', 205, 28, ''),
(318, 'II', 'C', 206, 29, '3280700'),
(319, 'II', 'C', 207, 30, ''),
(320, 'II', 'C', 208, 31, '3384000'),
(321, 'II', 'D', 209, 0, ''),
(322, 'II', 'D', 210, 1, ''),
(323, 'II', 'D', 211, 2, ''),
(324, 'II', 'D', 212, 3, '2285000'),
(325, 'II', 'D', 213, 4, ''),
(326, 'II', 'D', 214, 5, '2357000'),
(327, 'II', 'D', 215, 6, ''),
(328, 'II', 'D', 216, 7, '2431200'),
(329, 'II', 'D', 217, 8, ''),
(330, 'II', 'D', 218, 9, '2586700'),
(331, 'II', 'D', 219, 10, ''),
(332, 'II', 'D', 220, 11, '2668200'),
(333, 'II', 'D', 221, 12, ''),
(334, 'II', 'D', 222, 13, '2752300'),
(335, 'II', 'D', 223, 14, ''),
(336, 'II', 'D', 224, 15, '2838900'),
(337, 'II', 'D', 225, 16, ''),
(338, 'II', 'D', 226, 17, '2838900'),
(339, 'II', 'D', 227, 18, ''),
(340, 'II', 'D', 228, 19, '2928300'),
(341, 'II', 'D', 229, 20, ''),
(342, 'II', 'D', 230, 21, '3020600'),
(343, 'II', 'D', 231, 22, ''),
(344, 'II', 'D', 232, 23, '3115700'),
(345, 'II', 'D', 233, 24, ''),
(346, 'II', 'D', 234, 25, '3213800'),
(347, 'II', 'D', 235, 26, ''),
(348, 'II', 'D', 236, 27, '3315100'),
(349, 'II', 'D', 237, 28, ''),
(350, 'II', 'D', 238, 29, '3419500'),
(351, 'II', 'D', 239, 30, ''),
(352, 'II', 'D', 240, 31, '3527200'),
(353, 'III', 'A', 241, 0, '2456700'),
(354, 'III', 'A', 242, 1, ''),
(355, 'III', 'A', 243, 2, '2534000'),
(356, 'III', 'A', 244, 3, ''),
(357, 'III', 'A', 245, 4, '2613800'),
(358, 'III', 'A', 246, 5, ''),
(359, 'III', 'A', 247, 6, '2696200'),
(360, 'III', 'A', 248, 7, ''),
(361, 'III', 'A', 249, 8, '2781100'),
(362, 'III', 'A', 250, 9, ''),
(363, 'III', 'A', 251, 10, '2868700'),
(364, 'III', 'A', 252, 11, ''),
(365, 'III', 'A', 253, 12, '2969000'),
(366, 'III', 'A', 254, 13, ''),
(367, 'III', 'A', 255, 14, '3052200'),
(368, 'III', 'A', 256, 15, ''),
(369, 'III', 'A', 257, 16, '3148300'),
(370, 'III', 'A', 258, 17, ''),
(371, 'III', 'A', 259, 18, '3247500'),
(372, 'III', 'A', 260, 19, ''),
(373, 'III', 'A', 261, 20, '3349800'),
(374, 'III', 'A', 262, 21, ''),
(375, 'III', 'A', 263, 22, '3455300'),
(376, 'III', 'A', 264, 23, ''),
(377, 'III', 'A', 265, 24, '3504100'),
(378, 'III', 'A', 266, 25, ''),
(379, 'III', 'A', 267, 26, '3676400'),
(380, 'III', 'A', 268, 27, ''),
(381, 'III', 'A', 269, 28, '3792100'),
(382, 'III', 'A', 270, 29, ''),
(383, 'III', 'A', 271, 30, '3911600'),
(384, 'III', 'A', 272, 31, ''),
(385, 'III', 'A', 273, 32, '4034800'),
(386, 'III', 'B', 274, 0, '2560600'),
(387, 'III', 'B', 275, 1, ''),
(388, 'III', 'B', 276, 2, '2641200'),
(389, 'III', 'B', 277, 3, ''),
(390, 'III', 'B', 278, 4, '2724400'),
(391, 'III', 'B', 279, 5, ''),
(392, 'III', 'B', 280, 6, '2810200'),
(393, 'III', 'B', 281, 7, ''),
(394, 'III', 'B', 282, 8, '2898700'),
(395, 'III', 'B', 283, 9, ''),
(396, 'III', 'B', 284, 10, '2980000'),
(397, 'III', 'B', 285, 11, ''),
(398, 'III', 'B', 286, 12, '3084200'),
(399, 'III', 'B', 287, 13, ''),
(400, 'III', 'B', 288, 14, '3181300'),
(401, 'III', 'B', 289, 15, ''),
(402, 'III', 'B', 290, 16, '3281000'),
(403, 'III', 'B', 291, 17, ''),
(404, 'III', 'B', 292, 18, '3384900'),
(405, 'III', 'B', 293, 19, ''),
(406, 'III', 'B', 294, 20, '3491500'),
(407, 'III', 'B', 295, 21, ''),
(408, 'III', 'B', 296, 22, '3601400'),
(409, 'III', 'B', 297, 23, ''),
(410, 'III', 'B', 298, 24, '3714900'),
(411, 'III', 'B', 299, 25, ''),
(412, 'III', 'B', 300, 26, '3831900'),
(413, 'III', 'B', 301, 27, ''),
(414, 'III', 'B', 302, 28, '3952600'),
(415, 'III', 'B', 303, 29, ''),
(416, 'III', 'B', 304, 30, '4077000'),
(417, 'III', 'B', 305, 31, ''),
(418, 'III', 'B', 306, 32, '4205400'),
(419, 'III', 'C', 307, 0, '2668900'),
(420, 'III', 'C', 308, 1, ''),
(421, 'III', 'C', 309, 2, '2752900'),
(422, 'III', 'C', 310, 3, ''),
(423, 'III', 'C', 311, 4, '2839700'),
(424, 'III', 'C', 312, 5, ''),
(425, 'III', 'C', 313, 6, '2929100'),
(426, 'III', 'C', 314, 7, ''),
(427, 'III', 'C', 315, 8, '3021300'),
(428, 'III', 'C', 316, 9, ''),
(429, 'III', 'C', 317, 10, '3116500'),
(430, 'III', 'C', 318, 11, ''),
(431, 'III', 'C', 319, 12, '3214700'),
(432, 'III', 'C', 320, 13, ''),
(433, 'III', 'C', 321, 14, '3315900'),
(434, 'III', 'C', 322, 15, ''),
(435, 'III', 'C', 323, 16, '3420300'),
(436, 'III', 'C', 324, 17, ''),
(437, 'III', 'C', 325, 18, '3528100'),
(438, 'III', 'C', 326, 19, ''),
(439, 'III', 'C', 327, 20, '3639200'),
(440, 'III', 'C', 328, 21, ''),
(441, 'III', 'C', 329, 22, '3753800'),
(442, 'III', 'C', 330, 23, ''),
(443, 'III', 'C', 331, 24, '3872000'),
(444, 'III', 'C', 332, 25, ''),
(445, 'III', 'C', 333, 26, '3994000'),
(446, 'III', 'C', 334, 27, ''),
(447, 'III', 'C', 335, 28, '4119700'),
(448, 'III', 'C', 336, 29, ''),
(449, 'III', 'C', 337, 30, '4249500'),
(450, 'III', 'C', 338, 31, ''),
(451, 'III', 'C', 339, 32, '4383300'),
(452, 'III', 'D', 340, 0, '2781800'),
(453, 'III', 'D', 341, 1, ''),
(454, 'III', 'D', 342, 2, '2859400'),
(455, 'III', 'D', 343, 3, ''),
(456, 'III', 'D', 344, 4, '2959800'),
(457, 'III', 'D', 345, 5, ''),
(458, 'III', 'D', 346, 6, '3053000'),
(459, 'III', 'D', 347, 7, ''),
(460, 'III', 'D', 348, 8, '3149100'),
(461, 'III', 'D', 349, 9, ''),
(462, 'III', 'D', 350, 10, '3248300'),
(463, 'III', 'D', 351, 11, ''),
(464, 'III', 'D', 352, 12, '3380600'),
(465, 'III', 'D', 353, 13, ''),
(466, 'III', 'D', 354, 14, '3456200'),
(467, 'III', 'D', 355, 15, ''),
(468, 'III', 'D', 356, 16, '3565000'),
(469, 'III', 'D', 357, 17, ''),
(470, 'III', 'D', 358, 18, '3677300'),
(471, 'III', 'D', 359, 19, ''),
(472, 'III', 'D', 360, 20, '3793100'),
(473, 'III', 'D', 361, 21, ''),
(474, 'III', 'D', 362, 22, '3912600'),
(475, 'III', 'D', 363, 23, ''),
(476, 'III', 'D', 364, 24, '4035800'),
(477, 'III', 'D', 365, 25, ''),
(478, 'III', 'D', 366, 26, '4162900'),
(479, 'III', 'D', 367, 27, ''),
(480, 'III', 'D', 368, 28, '4294000'),
(481, 'III', 'D', 369, 29, ''),
(482, 'III', 'D', 370, 30, '4429300'),
(483, 'III', 'D', 371, 31, ''),
(484, 'III', 'D', 372, 32, '4568800'),
(485, 'IV', 'A', 373, 0, '2899500'),
(486, 'IV', 'A', 374, 1, ''),
(487, 'IV', 'A', 375, 2, '2990800'),
(488, 'IV', 'A', 376, 3, ''),
(489, 'IV', 'A', 377, 4, '3085000'),
(490, 'IV', 'A', 378, 5, ''),
(491, 'IV', 'A', 379, 6, '3182100'),
(492, 'IV', 'A', 380, 7, ''),
(493, 'IV', 'A', 381, 8, '3282400'),
(494, 'IV', 'A', 382, 9, ''),
(495, 'IV', 'A', 383, 10, '3385700'),
(496, 'IV', 'A', 384, 11, ''),
(497, 'IV', 'A', 385, 12, '3492400'),
(498, 'IV', 'A', 386, 13, ''),
(499, 'IV', 'A', 387, 14, '3602400'),
(500, 'IV', 'A', 388, 15, ''),
(501, 'IV', 'A', 389, 16, '3715800'),
(502, 'IV', 'A', 390, 17, ''),
(503, 'IV', 'A', 391, 18, '3832800'),
(504, 'IV', 'A', 392, 19, ''),
(505, 'IV', 'A', 393, 20, '3953600'),
(506, 'IV', 'A', 394, 21, ''),
(507, 'IV', 'A', 395, 22, '4078100'),
(508, 'IV', 'A', 396, 23, ''),
(509, 'IV', 'A', 397, 24, '4206500'),
(510, 'IV', 'A', 398, 25, ''),
(511, 'IV', 'A', 399, 26, '4339000'),
(512, 'IV', 'A', 400, 27, ''),
(513, 'IV', 'A', 401, 28, '4475700'),
(514, 'IV', 'A', 402, 29, ''),
(515, 'IV', 'A', 403, 30, '4616600'),
(516, 'IV', 'A', 404, 31, ''),
(517, 'IV', 'A', 405, 32, '4762000'),
(518, 'IV', 'B', 406, 0, '3022100'),
(519, 'IV', 'B', 407, 1, ''),
(520, 'IV', 'B', 408, 2, '3117300'),
(521, 'IV', 'B', 409, 3, ''),
(522, 'IV', 'B', 410, 4, '3215500'),
(523, 'IV', 'B', 411, 5, ''),
(524, 'IV', 'B', 412, 6, '3316700'),
(525, 'IV', 'B', 413, 7, ''),
(526, 'IV', 'B', 414, 8, '3421200'),
(527, 'IV', 'B', 415, 9, ''),
(528, 'IV', 'B', 416, 10, '3528900'),
(529, 'IV', 'B', 417, 11, ''),
(530, 'IV', 'B', 418, 12, '3040100'),
(531, 'IV', 'B', 419, 13, ''),
(532, 'IV', 'B', 420, 14, '3754700'),
(533, 'IV', 'B', 421, 15, ''),
(534, 'IV', 'B', 422, 16, '3873000'),
(535, 'IV', 'B', 423, 17, ''),
(536, 'IV', 'B', 424, 18, '3995000'),
(537, 'IV', 'B', 425, 19, ''),
(538, 'IV', 'B', 426, 20, '4120800'),
(539, 'IV', 'B', 427, 21, ''),
(540, 'IV', 'B', 428, 22, '4250600'),
(541, 'IV', 'B', 429, 23, ''),
(542, 'IV', 'B', 430, 24, '4384400'),
(543, 'IV', 'B', 431, 25, ''),
(544, 'IV', 'B', 432, 26, '4522500'),
(545, 'IV', 'B', 433, 27, ''),
(546, 'IV', 'B', 434, 28, '4665000'),
(547, 'IV', 'B', 435, 29, ''),
(548, 'IV', 'B', 436, 30, '4811900'),
(549, 'IV', 'B', 437, 31, ''),
(550, 'IV', 'B', 438, 32, '4963400'),
(551, 'IV', 'C', 439, 0, '3149900'),
(552, 'IV', 'C', 440, 1, ''),
(553, 'IV', 'C', 441, 2, '3249100'),
(554, 'IV', 'C', 442, 3, ''),
(555, 'IV', 'C', 443, 4, '3351500'),
(556, 'IV', 'C', 444, 5, ''),
(557, 'IV', 'C', 445, 6, '3457000'),
(558, 'IV', 'C', 446, 7, ''),
(559, 'IV', 'C', 447, 8, '3565900'),
(560, 'IV', 'C', 448, 9, ''),
(561, 'IV', 'C', 449, 10, '3678200'),
(562, 'IV', 'C', 450, 11, ''),
(563, 'IV', 'C', 451, 12, '3794100'),
(564, 'IV', 'C', 452, 13, ''),
(565, 'IV', 'C', 453, 14, '3913600'),
(566, 'IV', 'C', 454, 15, ''),
(567, 'IV', 'C', 455, 16, '4036800'),
(568, 'IV', 'C', 456, 17, ''),
(569, 'IV', 'C', 457, 18, '4164000'),
(570, 'IV', 'C', 458, 19, ''),
(571, 'IV', 'C', 459, 20, '4295100'),
(572, 'IV', 'C', 460, 21, ''),
(573, 'IV', 'C', 461, 22, '4430400'),
(574, 'IV', 'C', 462, 23, ''),
(575, 'IV', 'C', 463, 24, '4569900'),
(576, 'IV', 'C', 464, 25, ''),
(577, 'IV', 'C', 465, 26, '4713800'),
(578, 'IV', 'C', 466, 27, ''),
(579, 'IV', 'C', 467, 28, '4862300'),
(580, 'IV', 'C', 468, 29, ''),
(581, 'IV', 'C', 469, 30, '5015400'),
(582, 'IV', 'C', 470, 31, ''),
(583, 'IV', 'C', 471, 32, '5173400'),
(584, 'IV', 'D', 472, 0, '3283200'),
(585, 'IV', 'D', 473, 1, ''),
(586, 'IV', 'D', 474, 2, '3386600'),
(587, 'IV', 'D', 475, 3, ''),
(588, 'IV', 'D', 476, 4, '3493200'),
(589, 'IV', 'D', 477, 5, ''),
(590, 'IV', 'D', 478, 6, '3603300'),
(591, 'IV', 'D', 479, 7, ''),
(592, 'IV', 'D', 480, 8, '3716700'),
(593, 'IV', 'D', 481, 9, ''),
(594, 'IV', 'D', 482, 10, '3833800'),
(595, 'IV', 'D', 483, 11, ''),
(596, 'IV', 'D', 484, 12, '4079100'),
(597, 'IV', 'D', 485, 13, ''),
(598, 'IV', 'D', 486, 14, '4079100'),
(599, 'IV', 'D', 487, 15, ''),
(600, 'IV', 'D', 488, 16, '4207600'),
(601, 'IV', 'D', 489, 17, ''),
(602, 'IV', 'D', 490, 18, '4340100'),
(603, 'IV', 'D', 491, 19, ''),
(604, 'IV', 'D', 492, 20, '4476800'),
(605, 'IV', 'D', 493, 21, ''),
(606, 'IV', 'D', 494, 22, '4617800'),
(607, 'IV', 'D', 495, 23, ''),
(608, 'IV', 'D', 496, 24, '4763200'),
(609, 'IV', 'D', 497, 25, ''),
(610, 'IV', 'D', 498, 26, '4913200'),
(611, 'IV', 'D', 499, 27, ''),
(612, 'IV', 'D', 500, 28, '5068000'),
(613, 'IV', 'D', 501, 29, ''),
(614, 'IV', 'D', 502, 30, '5227600'),
(615, 'IV', 'D', 503, 31, ''),
(616, 'IV', 'D', 504, 32, '5382200');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_golongan`
--

CREATE TABLE IF NOT EXISTS `master_golongan` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `angkagolongan` varchar(5) NOT NULL,
  `hurufgolongan` varchar(5) NOT NULL,
  `tingkatangolongan` int(10) NOT NULL,
  `golongan` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=633 ;

--
-- Dumping data untuk tabel `master_golongan`
--

INSERT INTO `master_golongan` (`id`, `angkagolongan`, `hurufgolongan`, `tingkatangolongan`, `golongan`) VALUES
(617, 'I', 'A', 1, 'I.A'),
(618, 'I', 'B', 2, 'I.B'),
(619, 'I', 'C', 3, 'I.C'),
(620, 'I', 'D', 4, 'I.D'),
(621, 'II', 'A', 5, 'II.A'),
(622, 'II', 'B', 6, 'II.B'),
(623, 'II', 'C', 7, 'II.C'),
(624, 'II', 'D', 9, 'II.D'),
(625, 'III', 'A', 9, 'III.A'),
(626, 'III', 'B', 9, 'III.B'),
(627, 'III', 'C', 10, 'III.C'),
(628, 'III', 'D', 12, 'III.D'),
(629, 'IV', 'A', 13, 'IV.A'),
(630, 'IV', 'B', 14, 'IV.B'),
(631, 'IV', 'C', 15, 'IV.C'),
(632, 'IV', 'D', 16, 'IV.D');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_pangkatgolongan`
--

CREATE TABLE IF NOT EXISTS `master_pangkatgolongan` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `golongan` varchar(20) DEFAULT NULL,
  `pangkat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `master_pangkatgolongan`
--

INSERT INTO `master_pangkatgolongan` (`id`, `golongan`, `pangkat`) VALUES
(2, 'IV.D', 'Kepala Dinas Pendidikan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_pendidikan`
--

CREATE TABLE IF NOT EXISTS `master_pendidikan` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `tingkatan` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `master_pendidikan`
--

INSERT INTO `master_pendidikan` (`id`, `tingkatan`) VALUES
(1, 'SD'),
(2, 'SMP'),
(3, 'SMA'),
(4, 'Diploma I'),
(5, 'Diploma III'),
(6, 'S1'),
(7, 'S2'),
(8, 'S3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasi`
--

CREATE TABLE IF NOT EXISTS `notifikasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(75) DEFAULT NULL,
  `judul` varchar(75) DEFAULT NULL,
  `notifikasi` text,
  `baca` int(1) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data untuk tabel `notifikasi`
--

INSERT INTO `notifikasi` (`id`, `nip`, `judul`, `notifikasi`, `baca`, `tanggal`) VALUES
(5, 'moehfitrah', 'Hasil Verifikasi Pengajuan Pensiun', ' ', 1, NULL),
(6, 'moehfitrah', 'Hasil Verifikasi Pengajuan Pensiun', ' masih dibutuhkan', 1, NULL),
(7, 'admin', 'Hasil Verifikasi Kenaikan Pangkat Dan Golongan', 'tingkatkan lagi kinerjanya', 0, NULL),
(8, 'admin', 'Hasil Verifikasi Kenaikan Pangkat Dan Golongan', ' adf', 0, NULL),
(9, 'admin', 'Hasil Verifikasi Kenaikan Pangkat Dan Golongan', ' ', 0, NULL),
(10, 'moehfitrah', 'Hasil Verifikasi Kenaikan Pangkat Dan Golongan', ' ', 1, NULL),
(11, 'moehfitrah', 'Hasil Verifikasi Kenaikan Pangkat Dan Golongan', ' ok', 0, NULL),
(12, '176001021980032087', 'Hasil Verifikasi Kenaikan Pangkat Dan Golongan', ' ', 1, NULL),
(13, '196810282007012004', 'Hasil Verifikasi Pengajuan Pensiun', ' ', 0, NULL),
(14, '197712312007011021', 'Hasil Verifikasi Kenaikan Pangkat Dan Golongan', ' ', 1, NULL),
(15, '197712312007011021', 'Hasil Verifikasi Pengajuan Pensiun', ' ', 1, NULL),
(16, '196008162009041004', 'Hasil Verifikasi Pengajuan Pensiun', ' Lengkapi berkas', 0, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peg_datapribadi`
--

CREATE TABLE IF NOT EXISTS `peg_datapribadi` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `nip` varchar(35) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `umur` int(3) NOT NULL,
  `tempat_lahir` varchar(35) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `bangsa` varchar(50) NOT NULL,
  `agama` varchar(35) NOT NULL,
  `tempat_tinggal` varchar(100) NOT NULL,
  `notelp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `noktp` varchar(35) NOT NULL,
  `tmt` date NOT NULL,
  `gol` varchar(50) NOT NULL,
  `jabatan` varchar(75) DEFAULT NULL,
  `folder` varchar(50) NOT NULL,
  `foto` varchar(75) NOT NULL,
  `unitkerja` varchar(50) DEFAULT NULL,
  `golbaru` varchar(50) DEFAULT NULL,
  `tmtbaru` date DEFAULT NULL,
  `jabatanbaru` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`nip`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=141 ;

--
-- Dumping data untuk tabel `peg_datapribadi`
--

INSERT INTO `peg_datapribadi` (`id`, `nip`, `nama`, `umur`, `tempat_lahir`, `tanggal_lahir`, `bangsa`, `agama`, `tempat_tinggal`, `notelp`, `email`, `noktp`, `tmt`, `gol`, `jabatan`, `folder`, `foto`, `unitkerja`, `golbaru`, `tmtbaru`, `jabatanbaru`) VALUES
(84, ' 196102141984032004', 'Andi Nuhaidah ', 55, 'Watampone', '1961-02-14', 'Indonesia', 'Islam', 'Tamalate', '084776882121', 'nuhaidah', '78887671909213', '2009-12-14', 'III.B', 'Seksi Pembinaan Manajemen Sekolah Bidang Dikmenjur', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.B', '2009-12-14', 'Seksi Pembinaan Manajemen Sekolah Bidang Dikmenjur'),
(140, '1234567', 'widi', 40, 'Makassar', '2017-02-16', 'Indonesia', 'Islam', 'rumah', '094546223121', 'fatmaw@gmail.com', '09876543', '2003-02-01', 'II.C', 'Kepala Seksi PTPTK Dikmenjur', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.C', '2003-02-01', 'Kepala Seksi PTPTK Dikmenjur'),
(61, '195601251982031003', 'Muh. Yusuf', 53, 'Bone', '1963-08-14', 'Indonesia', 'Islam', 'Paccerakkang', '085878663263', 'myusuf@gmail.com', '79893290987872', '2000-04-01', 'IV.A', 'Guru Madya SLB Swasta Makassar', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.A', '2000-04-01', 'Guru Madya SLB Swasta Makassar'),
(50, '195609281986031006', 'Drs.Muhammad Jufri Mappiare', 58, 'Ujung Pandang', '1958-12-30', 'Indonesia', 'Islam', 'Tidung X', '085767334267', 'jufrimappa@gmail.com', '78965768762312', '2010-04-01', 'IV.A', 'Guru Madya SMK SulSel', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.A', '2010-04-01', 'Guru Madya SMK SulSel'),
(40, '195611081986032003', 'Dra. Widyastuti', 60, 'Jeneponto', '1956-11-08', 'Indonesia', 'Islam', 'Manuruki VI', '085737224178', 'widyaastuti@gmail.com', '71233423529867', '2000-04-01', 'IV.B', 'Guru Madya Pembina SulSel', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2000-04-01', 'Guru Madya Pembina SulSel'),
(15, '195701031983031014', 'Drs. Muhammad Sidik Salam, MM', 54, 'Makassar', '1957-01-03', 'Indonesia', 'Islam', 'Urip sumiharjo', '085343999149', 'sidik@gmail.com', '73159303029339', '2015-10-28', 'IV.D', 'Kepala Dinas Pendidikan', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.D', '2015-10-28', 'Kepala Dinas Pendidikan'),
(20, '195702091985031015', 'Drs. A. Samad', 59, 'Makassar', '1957-02-09', 'Indonesia', 'Islam', 'Jl Tun Abd Razak', '085767993239', 'samad@gmail.com', '79889987829998', '2004-10-01', 'IV.B', 'Pengawas Sekolah Madya', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2004-10-01', 'Pengawas Sekolah Madya'),
(54, '195704301983031007', 'Purwndi,S.pd', 59, 'Toraja', '1957-04-30', 'Indonesia', 'Islam', 'Dg Tata Raya', '083254667451', 'purpur@gmail.com', '79289832123156', '2015-07-01', 'IV.A', 'Pengawas Sekolah Madya', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.A', '2015-07-01', 'Pengawas Sekolah Madya'),
(29, '195708081982031016', 'Muh. Natsir, S. Pd', 59, 'Manado', '1957-08-08', 'Indonesia', 'Islam', 'Manuruki Raya', '085121775147', 'natsir@gmail.com', '7144998969323', '2014-04-01', 'IV.B', 'Guru Madya YPPLB', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2014-04-01', 'Guru Madya YPPLB'),
(31, '195708171983032010', 'Nuraeni, S. Pd', 59, 'Majene', '1957-08-17', 'Indonesia', 'Islam', 'Andi Tonro', '085878332189', 'eni@gmail.com', '78892335529211', '2000-04-01', 'IV.B', 'Guru Madya ', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2000-04-01', 'Guru Madya '),
(28, '195712021982011004', 'H. Baharuddin A. Md', 59, 'Sinjai', '1957-12-02', 'Indonesia', 'Islam', 'Toddopuli', '085643443159', 'baharuddin@gmail.com', '71239090529228', '2000-09-02', 'IV.B', 'Guru Madya SMK SulSel', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2000-09-02', 'Guru Madya SMK SulSel'),
(22, '195712311986021055', 'Drs. H. Basrun Ponta, M.Pd', 59, 'Mamuju', '1957-12-31', 'Indonesia', 'Islam', 'Tidung', '085767993139', 'basrun@gmail.com', '72449986629399', '2006-10-01', 'IV.B', 'Pengawas Sekolah Madya', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2006-10-01', 'Pengawas Sekolah Madya'),
(19, '195803041986031018', 'Drs. Muh. Natsir, M.Pd', 68, 'Pangkep', '1958-03-01', 'Indonesia', 'Islam', 'Tamalate', '085878443349', 'natsir@gmail.com', '78959986829377', '2005-09-01', 'IV.B', 'Pengawas Sekolah Madya', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2005-09-01', 'Pengawas Sekolah Madya'),
(30, '195803141983031015', 'Drs. Cayus  Satyawani, M.M', 58, 'Gorontalo', '1958-03-14', 'Indonesia', 'Islam', 'Manuruki XI', '085878334989', 'cayus@gmail.com', '71239090529228', '2005-03-23', 'IV.B', 'Guru Madya Pembina', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2005-03-23', 'Guru Madya Pembina'),
(52, '195804301982031016', 'Drs.Tanwir', 58, 'Ujung Pandang', '1958-04-30', 'Indonesia', 'Islam', 'AP Pettarani', '084676881123', 'tanwir@gmail.com', '79034759834542', '2000-04-01', 'IV.A', 'Guru Madya SMK SulSel', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.A', '2000-04-01', 'Guru Madya SMK SulSel'),
(60, '195805311981032003', 'Bahraeni Idrus Fattah, S.sos', 58, 'Sidrap', '1958-05-31', 'indonesia', 'Islam', 'Abd Dg Sirua', '085343993178', 'idursfattah@gmail.com', '78989757343215', '2003-04-01', 'IV.A', 'Pengawas Sekolah Madya', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.A', '2003-04-01', 'Pengawas Sekolah Madya'),
(56, '19580715 198603 1 021', 'Drs.M.Basir', 58, 'Bulukumba', '1958-07-05', 'Indonesia', 'Islam', 'Btn andi tonro', '083878221141', 'mbasir@gmail.com', '79823123198976', '2001-04-01', 'IV.A', 'Guru Madya SMK SulSel', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.A', '2001-04-01', 'Guru Madya SMK SulSel'),
(83, '195812021982061001', 'Abdul Madjid. D', 58, 'Ujung Pandang', '1958-12-02', 'Indonesia', 'Islam', 'Toddopuli IX', '0846576339121', 'majid@gmail.com', '76798982453298', '2010-01-01', 'III.B', 'Subag Umum dan Kepegawaian', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.B', '2010-01-01', 'Subag Umum dan Kepegawaian'),
(59, '195812101984031007', 'Drs.Suardi Rasyid', 58, 'Mamuju Tengah', '1958-12-10', 'Indonesia', 'Islam', 'Hartaco Indah', '083565992342', 'suardira@gmail.com', '79809212198912', '2003-04-01', 'IV.B', 'Guru Madya SMK SulSel', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2003-04-01', 'Guru Madya SMK SulSel'),
(33, '195812131984112002', 'Damaris Payung', 58, 'Makassar', '1958-12-13', 'Indonesia', 'Islam', 'Borong Raya', '085868993121', 'damaris@gmail.com', '79908877829980', '2006-03-01', 'IV.B', 'Guru Madya', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2006-03-01', 'Guru Madya'),
(48, '195812131986031156', 'Drs.Kamaruddin', 58, 'Barru', '1958-12-31', 'Indonesia', 'Islam', 'Perumahan Sudiang', '084343667561', 'kamad@gmail.com', '73432198786545', '1998-10-01', 'IV.A', 'Guru Madya SMK SulSel', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.A', '1998-10-01', 'Guru Madya SMK SulSel'),
(42, '195812311979031048', 'Drs. Sederhana Ali', 58, 'Pangkep', '1958-12-31', 'Indonesia', 'Islam', 'Sam Ratulangi', '085232994567', 'sederhana@gmail.com', '76632312529909', '2009-04-01', 'IV.B', 'Arsiparis Madya', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2009-04-01', 'Arsiparis Madya'),
(24, '195812311981031004', 'Drs. H. Hamire, M.Si.', 58, 'Bandung', '1958-12-31', 'Indonesia', 'Islam', 'Mongisidi', '085656887129', 'hamire@gmail.com', '72349944529335', '2009-11-19', 'IV.B', 'Kepala Bidang Pendidikan Menegah Atas', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2009-11-19', 'Kepala Bidang Pendidikan Menegah Atas'),
(25, '195812311984031084', 'Drs. H. Djamal Abdi, M.Ed.', 58, 'sidrap', '1858-12-31', 'Indonesia', 'Islam', 'Pendidikan Raya', '085878995565', 'djamalabdi@gmail.com', '79899124529123', '2009-11-19', 'IV.B', 'Kepala Bidang Pendidikan Non Formal dan Informal', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2009-11-19', 'Kepala Bidang Pendidikan Non Formal dan Informal'),
(53, '195812311986031156', 'Drs. Kamaruddin', 58, 'Yogyakarta', '1958-12-31', 'Indonesia', 'Islam', 'Perum Puri Indah', '084343665121', 'kamaruddin@gmail.com', '71094548982343', '1998-10-01', 'IV.A', 'Pengawas Sekolah Madya', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.A', '1998-10-01', 'Pengawas Sekolah Madya'),
(58, '195903241989031007', 'Drs.Petrus Dore Deren', 57, 'Toraja', '1959-03-24', 'Indonesia', 'Kristen Katolik', 'Cenrawasih', '085232998121', 'petrusdore@gmail.com', '79812321978623', '1998-10-01', 'IV.A', 'Guru Madya SMK SulSel', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.A', '1998-10-01', 'Guru Madya SMK SulSel'),
(47, '195904061986021003', 'Drs. Rusdi L', 57, 'Barru', '1959-04-06', 'Indonesia', 'Islam', 'Perintis Kemerdekaan', '094546223121', 'rusdil@gmail.com', '72342768546754', '2013-10-18', 'IV.A', 'Kasi Pendi Khusus UPTD BPPK dan Pl', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.A', '2013-10-18', 'Kasi Pendi Khusus UPTD BPPK dan Pl'),
(85, '195904171981031013', 'Paris Sule Padang', 57, 'Ujung Pandang', '1959-04-17', 'Indonesia', 'Islam', 'Jl Nuri ', '085898339829', 'parissul@gmail.com', '798984938983212', '2009-02-11', 'III.B', 'Seksi PTPTK Bidang Dikmenum', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.B', '2009-02-11', 'Seksi PTPTK Bidang Dikmenum'),
(18, '195912081986031024', 'Drs. Muhammad Yasin', 57, 'Pangkep', '1959-12-08', 'Indonesia', 'Islam', 'Jl Landak Baru', '085434778238', 'yasin@gmail.com', '71159987829387', '2010-10-01', 'IV.B', 'Pamong Belajar Madya', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2010-10-01', 'Pamong Belajar Madya'),
(49, '19591231 198603 1 215 ', 'Drs.Bushran', 57, 'Pangkep', '1959-12-31', 'Indonesia', 'Islam', 'Makkio Baji', '085676445156', 'bushhran@gmail.com', '73423878922121', '2010-02-01', 'IV.A', 'Staf Bidang Pendidikan Menegah Kejuruan', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.A', '2010-02-01', 'Staf Bidang Pendidikan Menegah Kejuruan'),
(57, '195912311989031073', 'Drs.Abd. Kadir. D', 57, 'Takalar', '1959-12-31', 'Indonesia', 'Islam', 'Hartaco Indah', '085232889129', 'abdkadir@gmail.com', '78985649809121', '2002-10-01', 'IV.A', 'Guru Madya SMK SulSel', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.A', '2002-10-01', 'Guru Madya SMK SulSel'),
(65, '196001301989032001', 'Dra. Ester Galla ', 56, 'Ujung Pandang', '1960-01-30', 'Indonesia', 'Islam', 'Toddopuli Raya', '086767443121', 'estergalla@gmail.com', '78565423687634', '2014-05-07', 'III.D', 'Kasi Teknologi Informasi dan Komunikasi UPTD BPKPTIK', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.D', '2014-05-07', 'Kasi Teknologi Informasi dan Komunikasi UPTD BPKPTIK'),
(71, '196004211985031014', 'Drs. Mappisau', 56, 'Bulukmba', '1960-04-21', 'Indonesia', 'Islam', 'Borong Raya', '085878332121', 'mappisau@gmail.com', '78786565676523', '2014-11-12', 'III.D', 'Kepala Seksi PTPTK Dikmenjur', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.D', '2014-11-12', 'Kepala Seksi PTPTK Dikmenjur'),
(37, '196006011985032009', 'Dra. Nurbasari', 56, 'Sigeri', '1960-06-01', 'Indonesia', 'Islam', 'Sultan Hasanuddin', '085656332565', 'nurbasari@gmail.com', '72345987829989', '2014-02-19', 'IV.B', 'Arsiparis Madya', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2014-02-19', 'Arsiparis Madya'),
(139, '196008162009041004', 'Muhammad Akbar', 36, 'Pangkajene', '1980-08-16', 'Indonesia', 'Islam', 'btn minasaupa blok 3', '082134578901', 'Akbarjhy@gmail.com', '789650943216543', '2009-04-01', 'II.A', 'Subag Tata Usaha UPTD-BPKB', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.A', '2009-04-01', 'Subag Tata Usaha UPTD-BPKB'),
(17, '196008291987101002', 'Drs. Ahmad Farumbian, M.Pd.', 56, 'Pinrang', '1960-08-29', 'Indonesia', 'Islam', 'AP Pettarani', '085232993553', 'farum@gmail.com', '79989303029347', '2009-11-19', 'IV.B', 'Kepala UPTD BPKB', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2009-11-19', 'Kepala UPTD BPKB'),
(62, '196010171986032008', 'Dra. Andi Buliana, M. Pd', 56, 'Bone', '1960-10-07', 'Indonesia', 'Islam', 'Sultan Alauddin no 9', '089565663875', 'andbuliana@gmail.com', '79893287471213', '2000-04-01', 'IV.A', 'Staf Pd Dinas Pendidikan', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.A', '2000-04-01', 'Staf Pd Dinas Pendidikan'),
(34, '19601018 198503 2 006', 'Dra. Hj. Tiktik Suarsih', 56, 'Malino', '1960-10-18', 'Indonesia', 'Islam', 'Hertasning', '085989445345', 'suarsih@gmail.com', '78891922329998', '2007-09-17', 'IV.B', 'Guru Madya', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2007-09-17', 'Guru Madya'),
(64, '196011191985031011', 'Drs. Tenri Sessu ', 56, 'Pangkajene', '1960-11-19', 'Indonesia', 'Islam', 'Perm Puri Indah', '085232776341', 'tenrisessu@gmail.com', '78654657689885', '2001-03-31', 'III.D', 'Subag Umum dan Kepegawaian', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.D', '2001-03-31', 'Subag Umum dan Kepegawaian'),
(118, '196103192007011002', 'Syaharuddin Yahya', 55, 'Ujung Pandang', '1961-03-19', 'Indonesia', 'Islam', 'Jl veteran selatan', '085454998121', 'yahya@gmail.com', '78736456390389', '2007-01-01', 'II.B', 'Subag Umum dan Kepegawaian', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.B', '2007-01-01', 'Subag Umum dan Kepegawaian'),
(66, '196104241990032003', 'Dra. Fatmawati', 55, 'Ujung Pandang', '1961-04-24', 'Indonesia', 'Islam', 'Perum Sudiang', '085654776121', 'fatmaw@gmail.com', '76578765435162', '2010-01-01', 'III.D', 'Staf Pd Dikmenum', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.D', '2010-01-01', 'Staf Pd Dikmenum'),
(86, '196107211986031013', 'Sulu Palinggi', 55, 'Kasimpo', '1961-07-21', 'Indonesia', 'Islam', 'Racing Center', '086565337212', 'sulupalinggi@gmail.com', '78789398939898', '2010-01-01', 'III.B', 'Seksi Kurikulum dan Penilaian Bidang Dikmenum', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.B', '2010-01-01', 'Seksi Kurikulum dan Penilaian Bidang Dikmenum'),
(36, '196107241985031012', 'Drs. Kamargono', 55, 'Sengkang', '1961-07-24', 'Indonesia', 'Islam', 'Jl Singa', '085232866121', 'kamargono@gmail.com', '73432332129266', '2000-04-01', 'IV.B', 'Guru Madya', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2000-04-01', 'Guru Madya'),
(88, '196109251986031014', 'Piter', 55, 'Buntu Tator', '1961-09-25', 'Indonesia', 'Islam', 'Perm Taman Sari', '086545009120', 'piterau@gmail.com', '78785434365678', '2010-01-01', 'III.B', 'Subag Keuangan', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.B', '2010-01-01', 'Subag Keuangan'),
(38, '19611107 198512 2 003', 'Haliah', 55, 'Camba', '1961-11-07', 'Indonesia', 'Islam', 'Sultan Alauddin', '089451552657', 'haliah@gmail.com', '70936787829221', '2000-04-01', 'IV.B', 'Guru Madya', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2000-04-01', 'Guru Madya'),
(136, '196112152010011021', 'Fajrin Syaiful Adam', 35, 'Ujung Pandang', '1981-12-15', 'Indonesia', 'Islam', 'jlan.bontotanga no.21', '082111906753', 'fajrinkece@gmail.com', '72389012902345', '2010-01-01', 'II.B', 'Subag Keuangan', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.B', '2010-01-01', 'Subag Keuangan'),
(35, '196203081985032007', 'Dra. Hj. Jumiati', 54, 'Barru', '1962-03-06', 'Indonesia', 'Islam', 'Perintis Kemerdekaan', '085232995343', 'jumiatii@gmail.com', '79808234329145', '2007-04-01', 'IV.B', 'Arsiparis Madya', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2007-04-01', 'Arsiparis Madya'),
(39, '196205291986032008', 'Sitti Aisyah Abbas', 54, 'Majene', '1962-05-29', 'Indonesia', 'Islam', 'Bontoduri X', '085767332123', 'aisyahabbas@gmail.com', '74539896529345', '2008-05-12', 'IV.B', 'Guru Madya', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2008-05-12', 'Guru Madya'),
(21, '196207131988031015', 'Drs. Suriadi , M.Pd', 54, 'Maros', '1962-07-13', 'Indonesia', 'Islam', 'Jl Raya Pendidikan', '085989257665', 'Suriadi@gmail.com', '79859211029445', '2004-10-01', 'IV.B', 'Guru Pertama Smanko SulSel', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2004-10-01', 'Guru Pertama Smanko SulSel'),
(41, '196210061986032007', 'Teti Supriati', 54, 'Banyorang', '1962-10-06', 'Indonesia', 'Islam', 'Racing Center', '086343991231', 'teti@gmail.com', '71138767229456', '2000-04-01', 'IV.B', 'Guru Madya Pembina SulSel', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2000-04-01', 'Guru Madya Pembina SulSel'),
(91, '196210102007012007', 'Dra. Sukraeni', 54, 'Bone', '1962-10-10', 'Indonesia', 'Islam', 'Jl Sungan Saddang', '085434889820', 'sukraeni@gmail.com', '78987656541421', '2007-01-01', 'III.B', 'Staf PD Bid Pendidikan Nonformal dan Informal', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.B', '2007-01-01', 'Staf PD Bid Pendidikan Nonformal dan Informal'),
(32, '196211231984032007', 'Eli Susilawati', 54, 'Wajo', '1962-11-23', 'Indonesia', 'Islam', 'Perintis Kemerdekaan', '085989223134', 'susilawati@gmail.com', '74159007834345', '2005-05-02', 'IV.B', 'Guru Madya Pembina', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2005-05-02', 'Guru Madya Pembina'),
(16, '196212311989031173', 'Drs. Zainuddin, M.Si', 54, 'Wajo', '1962-12-31', 'Indonesia', 'Islam', 'Perintis Kemerdekaan', '087121993262', 'zainuddin@gmail.com', '79159203099339', '2011-12-01', 'IV.C', 'Staf Umum dan Kepegawaian', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.C', '2011-12-01', 'Staf Umum dan Kepegawaian'),
(23, '196212311989031306', 'Drs. Santri, MT', 54, 'Barombong', '1962-12-31', 'Indonesia', 'Islam', 'Toddopuli XI', '085767447246', 'santri@gmail.com', '71159987829387', '2013-06-01', 'IV.B', 'Staf Subag Tata Usaha Balai Pengmb.PK-PLK', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2013-06-01', 'Staf Subag Tata Usaha Balai Pengmb.PK-PLK'),
(106, '196304292007012005', 'Jumatiah', 53, 'Labbakkang', '1963-04-29', 'Indonesia', 'Islam', 'Tamalate VII', '0846736889213', 'jumatiah@gmail.com', '76768980987564', '2007-01-01', 'II.C', 'Guru Muda SLB Swasta Makassar', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.C', '2007-01-01', 'Guru Muda SLB Swasta Makassar'),
(72, '196305241994122001', 'Dra. Hamsiah', 53, 'Parepare', '1953-05-24', 'Indonesia', 'Islam', 'Perumhan Dosen Tamalanrea', '085435121909', 'hamsiah@gmail.com', '70198973263521', '2012-01-01', 'III.D', 'Seksi Pend Masyarakat dan Kelembagaan Bidang PNR', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.D', '2012-01-01', 'Seksi Pend Masyarakat dan Kelembagaan Bidang PNR'),
(26, '196306061989031014', 'Ir. Rachman Syah, M. Si', 53, 'Takalar', '1953-06-06', 'Indonesia', 'Islam', 'Patalassang', '085767994121', 'rachmansyah@gmail.com', '72449986629399', '2012-03-09', 'IV.B', 'Kepala Balai Pengembangan PK-PLK', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2012-03-09', 'Kepala Balai Pengembangan PK-PLK'),
(105, '196308222007012010', 'Marhamah Amin', 53, 'Ujung Pandang', '1963-08-22', 'Indonesia', 'Islam', 'Jl Hartako Indah', '086563778090', 'marhamahamin@gmail.com', '76894874563897', '2007-01-01', 'II.D', 'Guru Madya SLB Swasta', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.D', '2007-01-01', 'Guru Madya SLB Swasta'),
(135, '196404242014082001', 'Asmirawati', 52, 'Maros', '1964-04-24', 'Indonesia', 'Islam', 'jlan tamalate 2 no.37', '082192745839', 'asmirawaticoy@gmail.com', '70961923748520', '2014-11-01', 'II.B', 'PK-PLK SLB Bulurokeng', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.B', '2014-11-01', 'PK-PLK SLB Bulurokeng'),
(87, '196404251989031012', 'Firman, SE', 52, 'Watampone', '1964-04-25', 'Indonesia', 'Islam', 'Borong Raya', '08565443549', 'firmanas@gmail.com', '78785432321218', '2013-03-01', 'III.B', 'Seksi Kurikulum dan Penilaian Bidang Dikmenum', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.B', '2013-03-01', 'Seksi Kurikulum dan Penilaian Bidang Dikmenum'),
(100, '196407052007012014', 'Ruksanawati', 52, 'Bongoro', '1964-07-05', 'Indonesia', 'Islam', 'Jl Ahmad Yani', '085343993242', 'ruksanawati@gmail.com', '78765670976521', '2010-04-01', 'II.D', 'Guru Madya SLB Barru', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.D', '2010-04-01', 'Guru Madya SLB Barru'),
(74, '196407052008012002', 'Nurmiati, S.Sos', 40, 'Kassi', '1972-11-18', 'Indonesia', 'Islam', 'Pao pao perma No 3', '085434332126', 'nurmiatii@gmail.com', '79289381212329', '2008-01-01', 'III.C', 'Seksi Teknologi Pendidikan UPTD-BP-TIK', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.C', '2008-01-01', 'Seksi Teknologi Pendidikan UPTD-BP-TIK'),
(103, '19640805207012014', 'Rahmatan', 52, 'Watampone', '1964-08-05', 'Indonesia', 'Islam', 'Urip Sumiharjo', '084756338121', 'rahmatan@gmail.com', '78656736589821', '2007-10-01', 'II.D', 'Guru Muda SLB Swasta Makassar', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.D', '2007-10-01', 'Guru Muda SLB Swasta Makassar'),
(51, '196409171989031019', 'Drs.Farid', 52, 'Toraja', '1964-09-17', 'Indonesia', 'Islam', 'Maccini Gusung', '082434887912', 'farid@gmail.com', '72325656767898', '2000-04-01', 'IV.B', 'Guru Madya SMK SulSel', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2000-04-01', 'Guru Madya SMK SulSel'),
(44, '196412311992031109', 'Muh.Syarif', 52, 'Enrekang', '1964-12-31', 'Indonesia', 'Islam', 'Jl seroya No 20', '0852318852345', 'syarif@gmail.com', '72231234529867', '2000-07-01', 'IV.B', 'Guru Madya SLB Swasta Makassar', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2000-07-01', 'Guru Madya SLB Swasta Makassar'),
(45, '196412311993032038', 'Daramina, S.Pd', 52, 'Ujung Pandang', '1964-12-31', 'Indonesia', 'Islam', 'Sungai Sadang', '083676993123', 'daramina@gmail.com', '74330102529734', '2000-04-01', 'IV.B', 'Guru Madya SLB Swasta Makassar', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2000-04-01', 'Guru Madya SLB Swasta Makassar'),
(43, '19650120198803 1001', 'Lanyokong,S.Pd', 51, 'Makassar', '1965-01-20', 'Indonesia', 'Islam', 'Minasa upa blok ab', '085767334981', 'lanyoka@gmail.com', '71233423529878', '2008-04-01', 'IV.B', 'Guru Madya', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2008-04-01', 'Guru Madya'),
(104, '19650302 200701 2 010', 'Aliyas', 51, 'Bone', '1965-03-02', 'Indonesia', 'Islam', 'Jl Sungai Saddang', '087354778191', 'aliyas@gmail.com', '78764537587982', '2010-04-01', 'II.D', 'Guru Madya SLB Pembina', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.D', '2010-04-01', 'Guru Madya SLB Pembina'),
(108, '196504182007012009', 'Nuraeni', 51, 'Ujung Pandang', '1965-04-08', 'Indonesia', 'Islam', 'Jl Boulevard', '083656889219', 'nuraeni@gmail.com', '78987876501213', '2007-01-01', 'II.C', 'Guru Muda SLBN Makassar', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.C', '2007-01-01', 'Guru Muda SLBN Makassar'),
(70, '196504271994032004', 'Hj. Asridah Jafar, SH.', 51, 'Paduppa', '1965-04-27', 'Indonesia', 'Islam', 'Abd Dg Sirua', '085434668349', 'asrindahjaf@gmail.com', '7898393848321', '2010-01-01', 'III.D', 'Subag Keuangan', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.D', '2010-01-01', 'Subag Keuangan'),
(27, '196510181987032011', 'Masliani, S. Pd', 51, 'Bulukumba', '1965-10-18', 'Indonesia', 'Islam', 'Cendrawasih', '084989332139', 'masliani@gmail.com', '71239090529228', '2004-04-01', 'IV.B', 'Guru Madya Pembina SulSel', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2004-04-01', 'Guru Madya Pembina SulSel'),
(69, '19651101195032003', 'Dra. Nasra Gasali', 31, 'Ujung Pandang', '1985-11-01', 'Indonesia', 'Islam', 'Tamalate', '084736221192', 'nasraga@gmail.com', '78789231213218', '1985-11-01', 'III.D', 'Seksi Pend Masyarakat dan Kelembagaan Bidang PNR', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.D', '1985-11-01', 'Seksi Pend Masyarakat dan Kelembagaan Bidang PNR'),
(68, '196511281992102006', 'Dra. Suriyani, M.Pd454112142', 51, 'Makassar', '1965-11-28', 'Indonesia', 'Islam', 'Manuruki X', '085898556131', 'suriyani@gmail.com', '7837382738371212', '1965-11-28', 'III.D', 'Kasi Kurikulum dan Penilaian Bidang Dikmentas', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.D', '1965-11-28', 'Kasi Kurikulum dan Penilaian Bidang Dikmentas'),
(67, '196512311988031115', 'Muhammad Sahib, S.Pd, MH', 51, 'Bulukumba', '1965-12-31', 'Indonesia', 'Islam', 'Jl Sunu', '087676443123', 'msuaib@gmail.com', '7876565879876', '2008-10-31', 'III.D', 'Guru ahli madya', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.D', '2008-10-31', 'Guru ahli madya'),
(99, '196512312007011122', 'Muh.Sabri', 51, 'Bonelempe', '2010-04-01', 'Indonesia', 'Islam', 'Palangga', '084343990121', 'sabri@gmail.com', '78984536547896', '2010-04-01', 'II.D', 'Guru Madya SLB Bone', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.D', '2010-04-01', 'Guru Madya SLB Bone'),
(46, '196604031992032013', 'Hj. Nuhari, S.Sos', 50, 'Bima', '1966-04-03', 'Indonesia', 'Islam', 'Sudiang', '083212998454', 'nuhari@gmail.com', '78987956568768', '2010-04-01', 'IV.B', 'Guru Muda SLB-B YPPLB Makassar', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.B', '2010-04-01', 'Guru Muda SLB-B YPPLB Makassar'),
(95, '196608252007011022', 'Muhammad Kasim,S.Pd', 50, 'Malino', '1966-07-01', 'Indonesia', 'Islam', 'Palangga', '087878443657', 'kasim@gmail.com', '7898975654576', '2007-01-01', 'III.A', 'Guru Madya SLB Takalar', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.A', '2007-01-01', 'Guru Madya SLB Takalar'),
(102, '196701012007012048', 'Amriani', 49, 'Soppeng', '1967-01-01', 'Indonesia', 'Islam', 'Perintis Kemerdekaan', '084676443879', 'amriani@gmail.com', '78989323287564', '2007-01-01', 'II.D', 'Guru Muda SLB Soppeng', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.D', '2007-01-01', 'Guru Muda SLB Soppeng'),
(98, '196701252007012009', 'Sitti Purnama.F', 49, 'Ujung Pandang', '1967-01-25', 'Indonesia', 'Islam', 'Jl Borong Raya', '085465889218', 'sittipurnama@gmail.com', '78987656533272', '2007-01-01', 'II.D', 'Guru Madya SLB Swasta Makassar', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.D', '2007-01-01', 'Guru Madya SLB Swasta Makassar'),
(90, '196701262007012015', 'Dra. Sitti Haeriah', 49, 'Bantaeng', '1962-10-10', 'Indonesia', 'Islam', 'Jl Onta Lama', '085343998121', 'haeriah@gmail.com', '78789098736590', '2007-01-01', 'III.B', 'Seksi Kurikulum dan Penilaian Bidang Dikmenjur', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.B', '2007-01-01', 'Seksi Kurikulum dan Penilaian Bidang Dikmenjur'),
(122, '196708272007011017', 'Muhammad Amir', 49, 'Romang Polong', '1967-08-27', 'Indonesia', 'Islam', 'Jl Syech Yusuf', '084545889121', 'amir@gmail.com', '78976545879121', '2007-01-01', 'II.B', 'Seksi Pembinaan Manajemen Sekolah Bidang Dikdas', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.B', '2007-01-01', 'Seksi Pembinaan Manajemen Sekolah Bidang Dikdas'),
(89, '196709092007012007', 'Dra. Rosdiana Arsyad', 49, 'Barru', '1967-09-09', 'Indonesia', 'Islam', 'Jl Ahmad Yani', '085434998129', 'rosdianaarsyad@gmail.com', '78987565676121', '2007-01-01', 'III.B', 'Seksi PAUD Bidang PNR', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.B', '2007-01-01', 'Seksi PAUD Bidang PNR'),
(55, '196709121988032009', 'Andi Sasmi,SE', 45, 'Daya', '1967-09-12', 'Indonesia', 'Islam', 'Perum Puri Taman Sari', '084343667121', 'sasmiadni@gmail.com', '70934312879343', '2001-04-01', 'IV.A', 'Satf Pembinaan Manajemen Sekolah Bid Dikmenjur', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.A', '2001-04-01', 'Satf Pembinaan Manajemen Sekolah Bid Dikmenjur'),
(93, '196712312007011132', 'Paharuddin,S.pd', 49, 'Takalar', '1967-12-31', 'Indonesia', 'Islam', 'Camba', '089898665423', 'paharuddin@gmail.com', '788379283938321', '2007-01-01', 'III.A', 'Guru Ahli Pertama SLB Gowa', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.A', '2007-01-01', 'Guru Ahli Pertama SLB Gowa'),
(132, '196712312009011016', 'Jamaluddin', 49, 'Dompu', '1967-12-31', 'Indonesia', 'Islam', 'jlan.dg sirua no.121', '085381724902', 'jamaluddinkece@gmail.com', '71234689017284', '2009-01-01', 'II.B', 'SLB Makassar', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.B', '2009-01-01', 'SLB Makassar'),
(134, '196712312009011022', 'Muhammad Yunus', 49, 'Ujung Pandang', '1967-12-31', 'Indonesia', 'Islam', 'jlan.buntu no.2', '085321214343', 'yunusgombara@gmail.com', '79106239107392', '2009-01-01', 'II.B', 'SLBN Makassar', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.B', '2009-01-01', 'SLBN Makassar'),
(125, '196806142007011026', 'Agus Sudrajat', 48, 'Tasikmalaya', '1968-06-18', 'Indonesia', 'Islam', 'Jl Amanagappa', '085898332199', 'agussudrajat@gmail.com', '78938347845489', '2010-07-01', 'II.B', 'Pembina SLB SulSel', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.B', '2010-07-01', 'Pembina SLB SulSel'),
(92, '196810282007012004', 'Dra. Nining Selviani', 48, 'Makassar', '1969-10-28', 'Indonesia', 'Islam', 'Jl Mongisidi', '085434889121', 'nining@gmail.com', '79898565456598', '2007-01-01', 'III.B', 'Seksi Pembinaan Kesetaraan Bidang', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.B', '2007-01-01', 'Seksi Pembinaan Kesetaraan Bidang'),
(121, '196812232007011018', 'Zakeus Panggo', 48, 'Mamuju', '1968-12-23', 'Indonesia', 'Islam', 'Jl Singa', '084565337812', 'zakeus@gmail.com', '78765689089121', '2007-01-01', 'II.B', 'Subag Umum dan Kepegawaian Bidang Dikmenum', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.B', '2007-01-01', 'Subag Umum dan Kepegawaian Bidang Dikmenum'),
(63, '196910021989031004', 'Rudi Haryono, SE.M.Si', 47, 'Bone', '1969-10-02', 'Indonesia', 'Islam', 'Hertasning', '087656886121', 'haryuno@gmmail.com', '78985461232334', '2009-04-01', 'IV.A', 'Seksi PTPTK Bidang Dikmenum', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'IV.A', '2009-04-01', 'Seksi PTPTK Bidang Dikmenum'),
(120, '196911092007011020', 'Ramlan', 47, 'Gowa', '1969-11-09', 'Indonesia', 'Islam', 'Jl Riburane', '085458992129', 'ramlan@gmail.com', '78935421898652', '2007-01-01', 'II.B', 'Subag Umum dan Kepegawaian', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.B', '2007-01-01', 'Subag Umum dan Kepegawaian'),
(81, '197008082009011003', 'Muhammad Sani Paca,ST', 46, 'Pinrang', '1970-08-08', 'Indonesia', 'Islam', 'Sam Ratulangi', '0865757998121', 'sanipaca@gmail.com', '787872635461213', '2009-01-01', 'III.C', 'Pustakawan', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.C', '2009-01-01', 'Pustakawan'),
(94, '197009082007012023', 'Sitti Nursiah,S.pd', 46, 'Palampang', '1970-09-08', 'Indonesia', 'Islam', 'Solo', '085453998439', 'nursiah@gmail.com', '78767589098765', '2007-01-01', 'III.A', 'Guru Ahli Pertama SLB Swasta', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.A', '2007-01-01', 'Guru Ahli Pertama SLB Swasta'),
(107, '197017052007012018', 'Juliana', 45, 'Ujung Pandang', '1971-07-05', 'Indonesia', 'Islam', 'Toddopuli IX', '087989332232', 'juliana@gmail.com', '78989032109097', '2007-01-01', 'II.C', 'Guru Muda SLB Gowa', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.C', '2007-01-01', 'Guru Muda SLB Gowa'),
(97, '197102102007012018', 'St. Hadira, S.Pd', 45, 'Ujung Pandang', '2007-01-01', 'Indonesia', 'Islam', 'Sultan Alauddin', '087676554376', 'hadira@gmail.com', '78787645456576', '2007-01-01', 'III.A', 'Guru Ahli Pertama SLB Swasta', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.A', '2007-01-01', 'Guru Ahli Pertama SLB Swasta'),
(82, '197109252009012002', 'Andi Resnidar. SP', 45, 'Watampone', '1971-09-25', 'Indonesia', 'Islam', 'Karunrung', '085343998121', 'anresnidar@gmail.com', '79890909876567', '2009-01-01', 'III.B', 'Seksi Pembinaan Manajemen Sekolah Bidang Dikdas', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.B', '2009-01-01', 'Seksi Pembinaan Manajemen Sekolah Bidang Dikdas'),
(75, '197203072008011008', 'Andi Thamrin S.Sos', 44, 'Makassar', '1972-03-07', 'Indonesia', 'Islam', 'Jipang ', '084353776561', 'atamrin@gmai.com', '79893849798321', '2008-01-01', 'III.C', 'Staf PD Bidang PNR', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.C', '2008-01-01', 'Staf PD Bidang PNR'),
(128, '197203142009011006', 'Syamsul Bahri', 44, 'Ujung Pandang', '1972-03-14', 'Indonesia', 'Islam', 'Jl Onta Baru', '085454998213', 'syamsul@gmail.com', '7989876546789', '2009-01-01', 'II.B', 'Subag Program', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.B', '2009-01-01', 'Subag Program'),
(110, '197309192005031004', 'Syahrir', 43, 'Maros', '1973-09-19', 'Indonesia', 'Islam', 'Jl Bau Mangga', '083654778121', 'syahrir@gmail.com', '78783567863531', '2010-01-01', 'II.C', 'Subag Umum dan Kepegawaian', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.C', '2010-01-01', 'Subag Umum dan Kepegawaian'),
(113, '197309242006041016', 'Usman M', 43, 'Sinjai', '1973-09-24', 'Indonesia', 'Islam', 'Jl Maccini Gusung', '0843438889121', 'usman@gmail.com', '78909863527321', '2006-12-01', 'II.C', 'Subag Umum dan Kepegawaian', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.C', '2006-12-01', 'Subag Umum dan Kepegawaian'),
(112, '197309242006041017', 'Suharsono, S.Sos', 43, 'Kendari', '1973-08-08', 'Indonesia', 'Islam', 'Jl Sungai Cerekang', '0834347784219', 'suharsono@gmail.com', '784896873432121', '2006-12-01', 'II.C', 'Subag Umum dan Kepegawaian', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.C', '2006-12-01', 'Subag Umum dan Kepegawaian'),
(73, '197311222008012002', 'Patmawati. T, S.P,MM', 43, 'Bone', '1973-11-22', 'Indonesia', 'Islam', 'Samata Indah', '085434223129', 'patmawati', '79090983435898', '2008-01-01', 'III.C', 'Staf Subag Umum dan Kepegawaian', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.C', '2008-01-01', 'Staf Subag Umum dan Kepegawaian'),
(137, '197403072007011015', 'Mansyur', 42, 'Ujung Pandang', '1974-03-07', 'Indonesia', 'Islam', 'jalan.bontang stp 4 no.21', '082109872345', 'mansyurkece@gmail.com', '721130987456432', '2007-01-01', 'II.A', 'Seksi Kesetaraan Bidang PNFI', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.A', '2007-01-01', 'Seksi Kesetaraan Bidang PNFI'),
(76, '19740521 2008011008', 'Mariwawo.SS', 42, 'Saukang', '1974-05-21', 'Indonesia', 'Islam', 'Perm Bakung Permai', '085463990120', 'mariwaeo@gmail.com', '79091210932123', '2008-01-01', 'III.C', 'Subag Umum dan Kepegawaian', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.C', '2008-01-01', 'Subag Umum dan Kepegawaian'),
(116, '197406012007011029', 'Halim', 42, 'Makassar', '1974-06-01', 'Indonesia', 'Islam', 'Jl Bulusaraung', '0847584990121', 'halim@gmail.com', '7874865748294832', '2007-01-01', 'II.C', 'Seksi Kurikulum dan Penilaian', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.C', '2007-01-01', 'Seksi Kurikulum dan Penilaian'),
(77, '197406102008012011', 'Erniyati, S.Pd', 42, 'Bulukumba', '1974-06-10', 'Indonesia', 'Islam', 'Perm Aging Mammiri', '085493880938', 'ermiyanti@gmail.com', '79894549098934', '2008-01-01', 'III.C', 'Staf PD Bidang PNR', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.C', '2008-01-01', 'Staf PD Bidang PNR'),
(124, '197409282007011009', 'Alwi', 42, 'Sinjai', '1974-09-28', 'Indonesia', 'Islam', 'Jl Kudus', '084545993121', 'alwi@gmail.com', '787874342980768', '2007-01-01', 'II.B', 'Subag Umum dan Kepegawaian', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.B', '2007-01-01', 'Subag Umum dan Kepegawaian'),
(109, '197506092003121006', 'Rahmad Jumakir', 41, 'Binjai', '2010-01-01', 'Indonesia', 'Islam', 'Jl Adiyaksa', '083238773212', 'rahmadjum@gmail.com', '76567654215789', '2010-01-01', 'II.C', 'Subag Umum dan Kepegawaian', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.C', '2010-01-01', 'Subag Umum dan Kepegawaian'),
(123, '197506142007011006', 'Jufri', 41, 'Ujung Pandang', '1975-06-14', 'Indonesia', 'Islam', 'Jl Tupai', '0856476221981', 'mjufri@gmail.com', '78787654324548', '2007-01-01', 'II.B', 'Seksi Pembinaan Manajemen Sekolah Bidang Dikmenjur', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.B', '2007-01-01', 'Seksi Pembinaan Manajemen Sekolah Bidang Dikmenjur'),
(115, '197507062006041020', 'Syahril', 41, 'Ujung Pandang', '1975-07-06', 'Indonesia', 'Islam', 'Jl Mesjid Raya', '084545993121', 'syahhril@gmail.com', '78984657823219', '2006-12-01', 'II.C', 'Subag Umum dan Kepegawaian', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.C', '2006-12-01', 'Subag Umum dan Kepegawaian'),
(114, '197508222006041013', 'Muhammad Nur Agung Apri', 41, 'Ujung Pandang', '1975-10-22', 'Indonesia', 'Islam', 'Jl Gunung Bawakaraeng', '086895883941', 'agung@gmail.com', '78785432137892', '2006-02-01', 'II.C', 'Subag Umum dan Kepegawaian', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.C', '2006-02-01', 'Subag Umum dan Kepegawaian'),
(96, '197509192007011015', 'Diah Lukitasari, S.Pd', 41, 'Ujung Pandang', '1975-09-19', 'Indonesia', 'Islam', 'Perintis Kemerdekaan', '086568332121', 'lukitasari@gmail.com', '78765654356589', '2011-04-01', 'III.A', 'Guru Pertama SLB Pembina', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.A', '2011-04-01', 'Guru Pertama SLB Pembina'),
(79, '197605032008012008', 'Andi Tenri Umpu, SP,MM', 40, 'Selayar', '1976-05-03', 'Indonesia', 'Islam', 'Jl Ahmad Yani', '084354110129', 'tenriumpu@gmail.com', '78498678389821', '2008-01-01', 'III.C', 'Seksi Teknologi Pendidikan UPTD-PK-PLK', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.C', '2008-01-01', 'Seksi Teknologi Pendidikan UPTD-PK-PLK'),
(78, '197605312008011006', 'Ahmad Muzakkir  R., S.Sos', 40, 'Sinjai', '1976-05-31', 'Indonesia', 'Islam', 'Jl Faisal IV', '085343776980', 'ahmmuzakkir@gmail.com', '7893809389380293', '2008-01-01', 'III.C', 'Seksi Dikmas dan Kelembagaan', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.C', '2008-01-01', 'Seksi Dikmas dan Kelembagaan'),
(138, '197701232007011010', 'Rahmat Satria,Spd', 39, 'Ujung Pandang', '1977-01-23', 'Indonesia', 'Islam', 'jlan.tidung raya 5 no.69', '082118795374', 'RahmatSatribh@gmail.com', '79021647590134', '2010-07-01', 'II.A', 'Guru Pratama SLB Pembina', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.A', '2010-07-01', 'Guru Pratama SLB Pembina'),
(127, '197704302009011004', 'Saipuddin', 39, 'Takalar', '1977-04-20', 'Indonesia', 'Islam', 'Jl Kakak Tua', '084343998212', 'saipuddin@gmail.com', '78787654345487', '2009-01-01', 'II.B', 'Seksi Pembinaan Manajemen Sekolah Bidang Dikmenjur', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.B', '2009-01-01', 'Seksi Pembinaan Manajemen Sekolah Bidang Dikmenjur'),
(119, '197712312007011021', 'Bangsawan', 39, 'Bantaeng', '1997-12-31', 'Indonesia', 'Islam', 'Jl Pelita Raya', '085623112109', 'bangsawan@gmail.com', '787836452837432', '2007-01-01', 'II.A', 'Subag Umum dan Kepegawaian', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.B', '2016-12-14', 'Subag Umum dan Kepegawaian'),
(80, '197808012008012014', 'Marwah, SP', 38, 'Solo', '1978-08-01', 'Indonesia', 'Islam', 'Paccinongang', '085349009121', 'marwahh@gmail.com', '789483938374638', '2008-01-01', 'III.C', 'Seksi Pembinaan Kesetaraan Bidang PNR', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'III.C', '2008-01-01', 'Seksi Pembinaan Kesetaraan Bidang PNR'),
(111, '19782014082001', 'MariyaniKalang, A.Md', 38, 'Ujung Pandang', '1978-03-05', 'Indonesia', 'Islam', 'Jl Makkio Baji', '083434887121', 'mariyanikalang@gmail.com', '78983219836478', '2014-11-01', 'II.C', 'PK-PLK SLB Bulurokeng', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.C', '2014-11-01', 'PK-PLK SLB Bulurokeng'),
(131, '198008162009041004', 'Bahtiar', 36, 'Ujung Pandang', '1980-12-21', 'Indonesia', 'Islam', 'jlan.keramat no.42', '085281479272', 'bahtiarkece@gmail.com', '78201736459286', '2009-01-01', 'II.B', 'Kepala Seksi PTPTK Dikmenjur', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.B', '2009-01-01', 'Kepala Seksi PTPTK Dikmenjur'),
(117, '198009082007011008', 'Mustakim', 36, 'Sungguminasa', '2016-12-13', 'Indonesia', 'Islam', 'JL Nusantara', '085454221891', 'mustakim@gmail.com', '78784436789707', '2007-01-01', 'II.B', 'Guru SLB Pembina', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.B', '2007-01-01', 'Guru SLB Pembina'),
(133, '198405252009011004', 'Kalvin', 32, 'ParePare', '1984-05-05', 'Indonesia', 'Kristen Protestan', 'btn pao-pao permai blok am no.1', '081342987456', 'kalvinkece@gmail.com', '79820128739402', '2009-01-01', 'II.B', 'Subag Umum dan Kepegawaian', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.B', '2009-01-01', 'Subag Umum dan Kepegawaian'),
(126, '198507122009011004', 'Hebib', 49, 'Ende', '1967-04-16', 'Indonesia', 'Islam', 'Jl Singa', '084545889212', 'hebib@gmail.com', '789847629832319', '2008-01-01', 'II.B', 'Subag Program', '', '', 'Dinas Pendidikan Provinsi Sulawesi Selatan', 'II.B', '2008-01-01', 'Subag Program');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peg_jabatan`
--

CREATE TABLE IF NOT EXISTS `peg_jabatan` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `nip` varchar(50) NOT NULL,
  `levelgolongan` varchar(50) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `jabatan_lama` varchar(50) NOT NULL,
  `tmt` date NOT NULL,
  `tmtlama` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peg_keluarga`
--

CREATE TABLE IF NOT EXISTS `peg_keluarga` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `hubungan` enum('Anak','Istri','Suami') DEFAULT 'Anak',
  `nama` varchar(75) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `nip` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `peg_keluarga`
--

INSERT INTO `peg_keluarga` (`id`, `hubungan`, `nama`, `tgl_lahir`, `nip`) VALUES
(1, 'Anak', 'diba', '2009-04-01', '176001021980032087'),
(2, 'Istri', 'Dibaa', '1971-03-04', '176001021980032087'),
(3, 'Anak', 'Fani', '1994-06-09', '197106132009011006');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peg_kemampuan`
--

CREATE TABLE IF NOT EXISTS `peg_kemampuan` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `nip` varchar(50) NOT NULL,
  `kemampuan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peg_pendidikan`
--

CREATE TABLE IF NOT EXISTS `peg_pendidikan` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `tingkatan` varchar(20) NOT NULL,
  `nama_sekolah` varchar(75) NOT NULL,
  `jurusan` varchar(75) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `ipk` varchar(10) NOT NULL,
  `nip` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=131 ;

--
-- Dumping data untuk tabel `peg_pendidikan`
--

INSERT INTO `peg_pendidikan` (`id`, `tingkatan`, `nama_sekolah`, `jurusan`, `tanggal_masuk`, `tanggal_selesai`, `ipk`, `nip`) VALUES
(10, 'S2', 'UMI Makassar', '', '2004-06-10', '2007-04-09', '3.8', '195701031983031014'),
(11, 'S2', 'Adm Publik Unhas', '', '2007-04-02', '2009-12-01', '3.6', '196212311989031173'),
(12, 'S2', 'UNM', '', '2001-03-01', '2003-05-15', '3.7', '196008291987101002'),
(13, 'S1', 'IKIP/PLS', '', '1978-06-10', '1983-05-05', '3.9', '195912081986031024'),
(14, 'S2', 'UNM Magister Pendidikan', '', '2003-06-12', '2005-07-03', '3.5', '195803041986031018'),
(15, 'S2', 'KIP', 'Teknik Mesin', '1983-06-18', '1985-07-28', '3.4', '195702091985031015'),
(16, 'S2', 'UNM Magister', 'Ilmu Pengetahuan', '2002-07-19', '2005-06-27', '3.4', '196207131988031015'),
(17, 'S2', 'UNM Magister', 'Manajemen Pendidikan', '1997-06-18', '1998-08-29', '3.6', '195712311986021055'),
(18, 'S2', 'TS. Manajemen', 'Manajemen Pendidikan', '2003-05-07', '2005-06-16', '3.5', '196212311989031306'),
(19, 'S2', 'Universitas Hasanuddin', 'Pembangunan', '1998-06-09', '2000-07-08', '3.4', '195812311981031004'),
(20, 'S2', 'Universitas Hasanuddin', 'Pendidikan', '1994-06-29', '1997-07-23', '3.1', '195812311984031084'),
(21, 'S1', 'STIA YAPPI', 'Administrasi Negara', '1989-06-05', '1993-09-12', '3.6', '195812311979031048'),
(22, 'S1', 'UNM', 'Pendidikan', '1994-04-21', '1999-02-19', '3.5', '19650120198803 1001'),
(23, 'Diploma III', 'SGLPLB', 'Sarmud Pendidkan', '1986-04-03', '1989-03-12', '3.2', '196412311992031109'),
(24, 'S1', 'UNM', 'Pendidikan Guru', '2001-04-03', '2005-09-27', '3.4', '196412311993032038'),
(25, 'S1', 'UNM', 'Pendidikan', '2005-06-21', '2009-02-21', '3.5', '196604031992032013'),
(26, 'S1', 'IKIP', 'Geografi', '1979-05-24', '1984-09-21', '3.2', '195904061986021003'),
(27, 'S1', 'KIP', 'Teknik Sipil', '1980-06-13', '1985-07-28', '3.5', '195812311986031156'),
(28, 'S1', 'IKP Ujung Pandang', 'Pendidikan Teknologi dan Keguruan', '1980-06-14', '1985-08-22', '3.5', '195812131986031156'),
(29, 'S1', 'KIP', 'Pendidikan Bahasa dan Sastra Inggris', '1980-07-25', '1984-03-22', '3.5', '19591231 198603 1 215'),
(30, 'S1', 'KIP', 'Teknik Eletro', '1984-07-25', '1988-02-21', '3.5', '196409171989031019'),
(31, 'S1', 'UNISMUH', 'Tuna Daksa', '1986-05-30', '1990-09-01', '3.5', '195804301982031016'),
(32, 'S1', 'UNISMUH', 'Administrasi', '1996-07-14', '2000-02-21', '3.5', '195704301983031007'),
(33, 'S1', 'Universitas Hasanuddin', 'Ilmu Ekonomi', '1992-06-17', '1996-04-21', '3.6', '196709121988032009'),
(34, 'S1', 'KIP', 'Teknik Sipil', '1981-07-12', '1985-08-13', '3.7', '19580715 198603 1 021'),
(35, 'S1', 'KIP', 'Teknik Otomotif', '1983-05-18', '1987-04-21', '3.9', '195912311989031073'),
(36, 'S1', 'KIP', 'Teknik Elektro', '1984-07-25', '1988-02-21', '3.8', '195903241989031007'),
(37, 'S1', 'KIP', 'Teknik Mesin', '1979-05-24', '1983-05-05', '3.6', '195812101984031007'),
(38, 'S1', 'STIKS', 'Kesejahteraan Sosial', '1998-06-09', '2002-04-15', '3.2', '195805311981032003'),
(39, 'Diploma III', 'Sarmud', 'Pendidikan Anak Tunanetra', '2003-05-07', '2007-04-09', '3.2', '195601251982031003'),
(40, 'S2', 'UNM', 'Geografi', '1998-06-09', '2002-04-15', '3.7', '196010171986032008'),
(41, 'S2', 'Universitas Hasanuddin', 'Ekonomi Sosial', '1993-06-24', '1997-07-23', '3.2', '196910021989031004'),
(42, 'S1', 'KIP', 'Administrasi Negara', '1982-07-27', '1986-09-21', '3.4', '196011191985031011'),
(43, 'S1', 'Universitas Hasanuddin', 'sastra Inggris', '1981-07-12', '2016-12-12', '3.3', '196001301989032001'),
(44, 'S1', 'UVRI', 'Pendidikan IPS', '1984-07-25', '1988-02-21', '3.7', '196104241990032003'),
(45, 'S2', 'UMI Makassar', 'Illmu Hukum', '2002-07-19', '2004-08-21', '3.7', '196512311988031115'),
(46, 'S2', 'Universitas PGRI', 'Pendidikan', '2006-07-22', '2008-09-25', '3.5', '196511281992102006'),
(47, 'S1', 'STIA LAN', 'Administrasi', '1988-06-22', '1992-07-27', '3.5', '19651101195032003'),
(48, 'S1', 'UMI Makassar', 'Hukum Keperdataan', '1986-04-03', '1990-09-01', '3.5', '196504271994032004'),
(49, 'Diploma III', 'SGLPLB', 'Tuna Grahita', '1986-05-30', '1989-03-12', '3.1', '196004211985031014'),
(50, 'S1', 'KIP', 'Administrasi Pendidikan', '1985-06-24', '1989-03-12', '3.4', '196305241994122001'),
(51, 'S2', 'UMI Makassar', 'Manajemen', '2012-07-13', '2014-09-23', '3.6', '197311222008012002'),
(52, 'S1', 'UMI Makassar', 'Tarbiyah', '1995-06-07', '1999-02-19', '3.4', '196407052008012002'),
(53, 'S1', 'Universitas Hasanuddin', 'Administrasi Negara', '1993-06-24', '1997-07-23', '3.6', '197203072008011008'),
(54, 'S1', 'UMI Makassar', 'Sastra Indonesia', '1995-06-07', '1999-02-19', '3.5', '19740521 2008011008'),
(55, 'S1', 'STKIP Muhammadiyah', 'Pendidikan Luar Sekolah', '1994-06-29', '1998-08-29', '3.2', '197406102008012011'),
(56, 'S1', 'Universitas Hasanuddin', 'Administrasi Negara', '1995-06-07', '1999-02-19', '3.6', '197605312008011006'),
(57, 'S2', 'UMI Makassar', 'Budidaya Pertanian', '1998-06-09', '2000-07-08', '3.8', '197605032008012008'),
(58, 'S1', 'Universitas Hasanuddin', 'Agribisnis Pertanian', '1998-06-09', '2002-04-15', '3.5', '197808012008012014'),
(59, 'S1', 'Universitas Hasanuddin', 'Arsitektur', '1993-06-24', '1997-07-23', '3.6', '197008082009011003'),
(60, 'S1', 'UNM', 'Akta Bidang Pendidikan', '1998-06-09', '2002-04-15', '3.4', '197109252009012002'),
(61, 'S2', 'Universitas Hasanuddin', 'Manajemen Agribisnis', '2004-06-10', '2006-03-04', '3.5', '196306061989031014'),
(62, 'S1', 'KIP', 'Pendidikan Luar Sekolah', '1987-06-23', '2001-08-23', '3.7', '196510181987032011'),
(63, 'Diploma III', 'Sarmud', 'Administrasi Negara', '1985-06-24', '1987-04-21', '3.4', '195712021982011004'),
(64, 'S1', 'UNM', 'Pendidikan Luar Biasa', '2000-07-22', '2004-08-21', '3.7', '195708081982031016'),
(65, 'S2', 'UIT', 'Manajemen SDM', '2008-06-22', '2010-08-07', '3.7', '195803141983031015'),
(66, 'Diploma III', 'SGLPLB', 'Tuna Rugu', '1979-05-24', '1982-04-05', '3.5', '195708171983032010'),
(67, 'S1', 'SGLPLB', 'Pendidikan Luar Biasa', '1979-05-24', '1983-05-05', '3.5', '196211231984032007'),
(68, 'S1', 'Sarmud', 'Tuna Graha', '1980-06-14', '1984-09-21', '3.5', '195812131984112002'),
(69, 'S1', 'KIP', 'Pendidikan', '1981-07-12', '1985-08-13', '3.2', '19601018 198503 2 006'),
(70, 'S1', 'UVRI', 'Administrasi Negara', '1988-06-22', '1992-07-27', '3.5', '196203081985032007'),
(71, 'S1', 'KIP', 'Pendidikan Luar Biasa', '1985-06-24', '1989-03-12', '3.7', '196107241985031012'),
(72, 'S1', 'KIP', 'Pemerintahan STIPK', '1982-07-27', '1986-09-21', '3.7', '196006011985032009'),
(73, 'Diploma III', 'Sarmud', 'Tuna Rugu', '1981-07-12', '1984-03-22', '3.8', '19611107 198512 2 003'),
(74, 'Diploma III', 'Sarmud', 'Tuna Rugu SLPB', '1981-07-12', '1985-08-13', '3.4', '196205291986032008'),
(75, 'S1', 'Universitas Hasanuddin', 'Ilmu Ekonomi dan Studi Pembangunan', '1979-05-24', '1983-05-05', '3.8', '195611081986032003'),
(76, 'S1', 'Sarmud', 'Tuna Rugu', '1980-06-13', '1984-03-22', '3.1', '196210061986032007'),
(77, 'SMA', 'SMA Umum', '', '1976-06-06', '1980-07-21', '7.2', '195812021982061001'),
(78, 'SMA', 'SMA Negeri 156', '', '1978-06-10', '1981-07-06', '8.6', ' 196102141984032004'),
(79, 'SD', 'SMA Umum', '', '1958-06-29', '1961-07-06', '7.5', '195904171981031013'),
(80, 'SMA', 'SMA Umum', '', '1979-05-24', '1982-06-02', '8.1', '196107211986031013'),
(81, 'S1', 'STIE-PI', 'Manajemen', '2005-06-21', '2009-02-21', '3.4', '196404251989031012'),
(82, 'SMA', 'SMA IPS', '', '1985-06-24', '1988-06-05', '7.9', '196109251986031014'),
(83, 'S1', 'STIA ALGAZALI', 'Administrasi Negara', '1988-06-22', '1992-07-27', '3.5', '196709092007012007'),
(84, 'S1', 'IAIN Alauddin', 'Dakwah', '1987-06-23', '1991-06-07', '3.5', '196701262007012015'),
(85, 'S1', 'Universitas Hasanuddin', 'Sastra Indonesia', '1985-06-24', '1989-03-12', '3.6', '196210102007012007'),
(86, 'S1', 'KIP', 'Administrasi Pendidikan', '1988-06-22', '1992-07-27', '3.5', '196810282007012004'),
(87, 'S1', 'UNM', 'Pendidikan Luar Biasa', '2002-07-19', '2006-03-04', '3.5', '196712312007011132'),
(88, 'S1', 'UNM', 'Pendidikan Luar Biasa', '2004-06-10', '2006-03-04', '3.4', '197009082007012023'),
(89, 'S1', 'UNISMUH', 'Kurikulum dan Teknologi Pendidikan', '2000-07-22', '2004-08-21', '3.5', '196608252007011022'),
(90, 'S1', 'UNM', 'Tata Busana', '2001-04-03', '2005-06-16', '3.7', '197509192007011015'),
(91, 'S1', 'UNM', 'Pendidikan Luar Biasa', '2004-06-10', '2008-09-25', '3.7', '197102102007012018'),
(92, 'Diploma III', 'SGLPLB', 'Tuna Grahita', '1987-06-23', '1990-09-01', '3.5', '196701252007012009'),
(93, 'Diploma III', 'SGLPLB', 'Tuna Grahita', '1984-07-25', '1987-04-21', '3.8', '196512312007011122'),
(94, 'Diploma III', 'SGLPLB', 'Tuna Daksa', '1983-06-18', '1986-09-21', '3.2', '196407052007012014'),
(95, 'Diploma III', 'SGLPLB', 'Tuna Daksa', '1983-06-18', '1986-09-21', '3.6', '196701012007012048'),
(96, 'Diploma III', 'SGLPLB', 'Tuna Rungu', '1985-06-24', '1988-06-05', '3.4', '19640805207012014'),
(97, 'Diploma III', 'SGLPLB', 'Tuna Grahita', '1984-07-25', '1987-04-21', '3.5', '19650302 200701 2 010'),
(98, 'Diploma III', 'SGLPLB', 'Tuna Grahita', '1985-06-24', '1988-06-05', '3.7', '196308222007012010'),
(99, 'Diploma III', 'SGLPLB', 'Tuna Rungu', '1987-06-23', '1990-09-01', '3.2', '196304292007012005'),
(100, 'Diploma III', 'SGLPLB', 'Tuna Daksa', '1990-06-07', '1993-09-12', '3.5', '197017052007012018'),
(101, 'Diploma III', 'SGLPLB', 'Tuna Daksa', '1985-06-24', '1988-06-05', '3.6', '196504182007012009'),
(102, 'SMA', 'SMA', '', '1990-06-07', '1993-09-12', '7.9', '197506092003121006'),
(103, 'Diploma III', 'SPP', 'Kejuruan Perikanan', '1989-06-05', '1992-07-27', '3.4', '197309192005031004'),
(104, 'S1', 'UNM', 'Pendidikan Tata Boga', '2000-07-22', '2016-12-13', '3.5', '19782014082001'),
(105, 'S1', 'STIA YAPPI', 'Administrasi Negara', '2000-07-22', '2003-05-15', '3.4', '197309242006041017'),
(106, 'SMA', 'SMA', '', '1989-06-05', '1992-07-27', '7.6', '197309242006041016'),
(107, 'SMA', 'SMA', '', '1990-06-07', '1993-09-12', '7.8', '197508222006041013'),
(108, 'SMA', 'SMA', '', '1991-07-06', '1994-07-06', '7.6', '197507062006041020'),
(109, 'SMA', 'SMa', '', '1998-06-09', '2001-08-23', '8.1', '197406012007011029'),
(110, 'SMA', 'SMA', '', '1997-06-18', '2000-07-08', '8.3', '198009082007011008'),
(111, 'SMA', 'SMA', '', '1987-06-23', '1990-09-01', '8.4', '197203142009011006'),
(112, 'SMA', 'SA', '', '1997-06-18', '1980-07-21', '8.5', '196103192007011002'),
(113, 'SMA', 'SMA', '', '1993-06-24', '1996-04-21', '8.7', '197712312007011021'),
(114, 'SMA', 'SMA', '', '1993-06-24', '1996-04-21', '8.8', '196911092007011020'),
(115, 'SMA', 'SMA', '', '1993-06-24', '1996-04-21', '7.1', '196812232007011018'),
(116, 'SMA', 'SMA', '', '1985-06-24', '1988-06-05', '7.3', '196708272007011017'),
(117, 'SMA', 'STM Kartika Bhakti', 'Elektronika', '1992-06-17', '1995-07-08', '7.4', '197506142007011006'),
(118, 'SMA', 'SMA', '', '1997-06-18', '2000-07-08', '7.7', '197409282007011009'),
(119, 'S1', 'UNM', 'Pendidikan Jasmani Kesehatan dan Rekreasi', '2005-06-21', '2009-12-01', '3.8', '196806142007011026'),
(120, 'SMA', 'SMA', '', '1985-06-24', '1988-06-05', '3.6', '198507122009011004'),
(121, 'SMA', 'SMA', '', '1993-06-24', '1996-04-21', '7.8', '197704302009011004'),
(122, 'SMA', 'SMA', '', '2001-04-03', '2004-08-21', '7.8', '198008162009041004'),
(123, 'SMA', 'SMA', '', '1989-06-05', '1985-07-28', '7.8', '196712312009011016'),
(124, 'SMA', 'SMA', '', '1999-07-08', '2001-08-23', '7.8', '198405252009011004'),
(125, 'SMA', 'STM', '', '1984-06-23', '1987-04-21', '7.7', '196712312009011022'),
(126, 'S1', 'PLS UNM', 'Kesehatan dan Rekreasi', '1996-07-14', '1999-02-19', '3.4', '196404242014082001'),
(127, 'SMA', 'SMA', '', '1998-06-09', '2001-08-23', '7.7', '196112152010011021'),
(128, 'SMA', 'SMA', '', '1997-06-18', '2000-07-08', '7.7', '197403072007011015'),
(129, 'S1', 'UNM', 'Pendidikan Jasmani Kesehatan dan Rekreasi', '2006-07-22', '2009-12-01', '7.4', '197701232007011010'),
(130, 'SMA', 'SMA', '', '1995-06-07', '1998-08-29', '7.6', '196008162009041004');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peg_pengalaman`
--

CREATE TABLE IF NOT EXISTS `peg_pengalaman` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `nip` varchar(50) NOT NULL,
  `namaperusahaan` varchar(75) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `tugas` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `unitkerja`
--

CREATE TABLE IF NOT EXISTS `unitkerja` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `unitkerja` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `unitkerja`
--

INSERT INTO `unitkerja` (`id`, `unitkerja`) VALUES
(2, 'Sulawesi Selatan'),
(3, 'Sulawesi Barat'),
(4, 'Sulawesi Tenggara'),
(5, 'Sulawesi Tengah'),
(6, 'Sulawesi Utara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `foto` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT 'img/pegawai/nopic.jpg',
  `level` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT 'user',
  `blokir` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `id_session` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `password`, `nama_lengkap`, `email`, `no_telp`, `foto`, `level`, `blokir`, `id_session`) VALUES
('195702091985031015', 'e38b966df4ca4abdec1bb4e293d806fe', 'Drs. A. Samad', 'samad@gmail.com', '085767993239', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('admin', '202cb962ac59075b964b07152d234b70', 'Administrator', 'administrator@gmail.com', '085343993149', 'img/pegawai/moeh.jpg', 'Sub Bagian Kepegawaian', 'N', '8dh4slcvb9omoukpo0tkphj2a3'),
('195812311981031004', '678578dbd5f0ae9c6f4027596bfb7d8a', 'Drs. H. Hamire, M.Si.', 'hamire@gmail.com', '085656887129', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('195803041986031018', '0ef8811984d2fc24140c819642f07514', 'Drs. Muh. Natsir, M.Pd', 'natsir@gmail.com', '085878443349', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('195912081986031024', '0545faaaeb39b4cb66b26cae87793949', 'Drs. Muhammad Yasin', 'yasin@gmail.com', '085434778238', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196008291987101002', 'b7b0da0c1d2aa409828cab3b34c30ee0', 'Drs. Ahmad Farumbian, M.Pd.', 'farum@gmail.com', '085232993553', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('1234567', '202cb962ac59075b964b07152d234b70', 'widi', 'fatmaw@gmail.com', '094546223121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', 's0c2nt3pkki1ieb5p48vanq1g3'),
('196207131988031015', '93dde8806bda5a6f6513d38c91e73886', 'Drs. Suriadi , M.Pd', 'Suriadi@gmail.com', '085989257665', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('195701031983031014', '3087b0dd307a20e978676ebddba328d1', 'Drs. Muhammad Sidik Salam, MM', 'sidik@gmail.com', '085343999149', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196212311989031173', '16129976f0dd3dd39a15ab044ac4e8e4', 'Drs. Zainuddin, M.Si', 'zainuddin@gmail.com', '087121993262', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('195712311986021055', '36df3bad292a689457e664388f421c6c', 'Drs. H. Basrun Ponta, M.Pd', 'basrun@gmail.com', '085767993139', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196212311989031306', '33dce730aa1a97d0e6626f1b8cbd5392', 'Drs. Santri, MT', 'santri@gmail.com', '085767447246', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('195812311984031084', '6f31fdd7cbcde40c0e41a02ae887dbc0', 'Drs. H. Djamal Abdi, M.Ed.', 'djamalabdi@gmail.com', '085878995565', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196306061989031014', '1f390880662449936f2fd0846cb3cfdf', 'Ir. Rachman Syah, M. Si', 'rachmansyah@gmail.com', '085767994121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196510181987032011', 'fa7fe88e27cf169c42bf89d5287ac84b', 'Masliani, S. Pd', 'masliani@gmail.com', '084989332139', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('195712021982011004', 'b8354ae8a4c976bd7d3eceb825041b8e', 'H. Baharuddin A. Md', 'baharuddin@gmail.com', '085643443159', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('195708081982031016', 'ddd83f97a7982861d3dce2c8a6f3b5ec', 'Muh. Natsir, S. Pd', 'natsir@gmail.com', '085121775147', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('195803141983031015', 'dd73863e767adedeeb43530102b37cf1', 'Drs. Cayus  Satyawani, M.M', 'cayus@gmail.com', '085878334989', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('195708171983032010', 'b3aa849e82e6d297459957f751887ad5', 'Nuraeni, S. Pd', 'eni@gmail.com', '085878332189', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196211231984032007', '7d9663685d848c58ea23dd0344878c78', 'Eli Susilawati', 'susilawati@gmail.com', '085989223134', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('195812131984112002', 'aa71c90597b87db4a1f7a510f865b5ec', 'Damaris Payung', 'damaris@gmail.com', '085868993121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('19601018 198503 2 006', 'f6570baba03ccfa217f3842d49b69994', 'Dra. Hj. Tiktik Suarsih', 'suarsih@gmail.com', '085989445345', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196203081985032007', 'ec8b1efe6ef9a88c6915e8d0e0d2c959', 'Dra. Hj. Jumiati', 'jumiatii@gmail.com', '085232995343', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196107241985031012', '2f3995b0a809d58918f95363b45dcb50', 'Drs. Kamargono', 'kamargono@gmail.com', '085232866121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196006011985032009', '5835fc51674590e35645028cd255917b', 'Dra. Nurbasari', 'nurbasari@gmail.com', '085656332565', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('19611107 198512 2 003', 'a82c77f5971662de63d55b2be9b8d958', 'Haliah', 'haliah@gmail.com', '089451552657', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196205291986032008', '0022f0268d8ce560c2dcdcf42e42c1ac', 'Sitti Aisyah Abbas', 'aisyahabbas@gmail.com', '085767332123', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('195611081986032003', '18c5760f95969e4998bd9aa9e1dc03d7', 'Dra. Widyastuti', 'widyaastuti@gmail.com', '085737224178', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196210061986032007', 'fa3aafa2c3c6552ca53be9bfb4255d71', 'Teti Supriati', 'teti@gmail.com', '086343991231', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('195812311979031048', '6421aca5787697922a737631e8596b18', 'Drs. Sederhana Ali', 'sederhana@gmail.com', '085232994567', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('19650120198803 1001', '1a86b993e34b26ed9335ead6a3b5e8d5', 'Lanyokong,S.Pd', 'lanyoka@gmail.com', '085767334981', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196412311992031109', 'a399566af1b49c97e308b934ea091330', 'Muh.Syarif', 'syarif@gmail.com', '0852318852345', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196412311993032038', '2c6f70c0533dc037a39c1bca9d34957a', 'Daramina, S.Pd', 'daramina@gmail.com', '083676993123', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196604031992032013', 'a244c5f5d9edd2adb7c4ed8e13f9d96c', 'Hj. Nuhari, S.Sos', 'nuhari@gmail.com', '083212998454', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('195904061986021003', '245a38f7435557a62bb35c9600c53aaa', 'Drs. Rusdi L', 'rusdil@gmail.com', '094546223121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('195812131986031156', 'd76da41b3fa797cc54ec4719feac5201', 'Drs.Kamaruddin', 'kamad@gmail.com', '084343667561', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('19591231 198603 1 215 ', '3cd0bba554578dc0f608984ae6c5c2e3', 'Drs.Bushran', 'bushhran@gmail.com', '085676445156', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('195609281986031006', '0f8aa415c25f6e386895c2548a794f3b', 'Drs.Muhammad Jufri Mappiare', 'jufrimappa@gmail.com', '085767334267', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196409171989031019', '7e9e2e8241220346a0e7cc0fe4fff32e', 'Drs.Farid', 'farid@gmail.com', '082434887912', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('195804301982031016', 'ff84d5c2b0bd8214e305bcce9d75b812', 'Drs.Tanwir', 'tanwir@gmail.com', '084676881123', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('195812311986031156', '07b98a4beeefcfbffb7ebd6e7a32d45c', 'Drs. Kamaruddin', 'kamaruddin@gmail.com', '084343665121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('195704301983031007', '93c59a67bf2dabfa4edea577fc1497ae', 'Purwndi,S.pd', 'purpur@gmail.com', '083254667451', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196709121988032009', 'a31e6c6403d522bdbc71704223986967', 'Andi Sasmi,SE', 'sasmiadni@gmail.com', '084343667121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('19580715 198603 1 021', '49bbc10606c387460042b8823cf8bd7f', 'Drs.M.Basir', 'mbasir@gmail.com', '083878221141', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('195912311989031073', 'd869f236e8391af0fd4603de15e5601e', 'Drs.Abd. Kadir. D', 'abdkadir@gmail.com', '085232889129', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('195903241989031007', 'b9e32ac383c5350288bdf3aa20c642b0', 'Drs.Petrus Dore Deren', 'petrusdore@gmail.com', '085232998121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('195812101984031007', '055668e52a2a3b9e8e0d53cd924bbffd', 'Drs.Suardi Rasyid', 'suardira@gmail.com', '083565992342', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('195805311981032003', '33fc3673bdcdb4cb9ec144dd95117794', 'Bahraeni Idrus Fattah, S.sos', 'idursfattah@gmail.com', '085343993178', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('195601251982031003', '71acdad15a38d5d889ae3fc25194b1ee', 'Muh. Yusuf', 'myusuf@gmail.com', '085878663263', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196010171986032008', 'd6cfc91ab02a554b5e1a930648a595b8', 'Dra. Andi Buliana, M. Pd', 'andbuliana@gmail.com', '089565663875', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196910021989031004', 'cf3b54068a7be04eb240668fec89a256', 'Rudi Haryono, SE.M.Si', 'haryuno@gmmail.com', '087656886121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196011191985031011', '06104056c41bb7f86222ca0e9c6381f2', 'Drs. Tenri Sessu ', 'tenrisessu@gmail.com', '085232776341', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196001301989032001', 'a30e4dd2776589694619411dea803ce3', 'Dra. Ester Galla ', 'estergalla@gmail.com', '086767443121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196104241990032003', '71816763305591a0bae207f8fef0c34b', 'Dra. Fatmawati', 'fatmaw@gmail.com', '085654776121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196512311988031115', '6e6c5fa16e39d7962af09d5a219226d6', 'Muhammad Sahib, S.Pd, MH', 'msuaib@gmail.com', '087676443123', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196511281992102006', '9a150b29172a5230319edc445d02431d', 'Dra. Suriyani, M.Pd454112142', 'suriyani@gmail.com', '085898556131', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('19651101195032003', '8f78e6394fde6d7aec9c6e20f6c923a6', 'Dra. Nasra Gasali', 'nasraga@gmail.com', '084736221192', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196504271994032004', 'c428972f18881e1209afd6f00db64d3c', 'Hj. Asridah Jafar, SH.', 'asrindahjaf@gmail.com', '085434668349', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196004211985031014', '136357cae0efecf6fcf4c30b2c4004be', 'Drs. Mappisau', 'mappisau@gmail.com', '085878332121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196305241994122001', '517e7259a7f4a442c1309b21f1cc2545', 'Dra. Hamsiah', 'hamsiah@gmail.com', '085435121909', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('197311222008012002', '759e8950f9d24d995a1c4fc64b131b96', 'Patmawati. T, S.P,MM', 'patmawati', '085434223129', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196407052008012002', 'dee9ce24f9dbf9b8db52e76c5b03121a', 'Nurmiati, S.Sos', 'nurmiatii@gmail.com', '085434332126', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('197203072008011008', '9a5d237433ceb8f56f34bb9c5cec159a', 'Andi Thamrin S.Sos', 'atamrin@gmai.com', '084353776561', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('19740521 2008011008', '22c042a4ddcdb4e987ef5088944f9146', 'Mariwawo.SS', 'mariwaeo@gmail.com', '085463990120', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('197406102008012011', 'cc7fac3a562b56b30bd5d3eb5485b6b0', 'Erniyati, S.Pd', 'ermiyanti@gmail.com', '085493880938', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('197605312008011006', '11df4e015a60acb88ecd8d9e6ff2b0f5', 'Ahmad Muzakkir  R., S.Sos', 'ahmmuzakkir@gmail.com', '085343776980', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('197605032008012008', 'e9e0be5502aaaff55aba58fb6a8b4e26', 'Andi Tenri Umpu, SP,MM', 'tenriumpu@gmail.com', '084354110129', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('197808012008012014', 'f5d7cb17b14867299a973916415c7a00', 'Marwah, SP', 'marwahh@gmail.com', '085349009121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('197008082009011003', '37d51c301a0946a12d247bf24f2b8b02', 'Muhammad Sani Paca,ST', 'sanipaca@gmail.com', '0865757998121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('197109252009012002', '870c19c9fe1f0e54448055828d172a9d', 'Andi Resnidar. SP', 'anresnidar@gmail.com', '085343998121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('195812021982061001', '9d5dd8fd4a04164e4fcf31687dbe591c', 'Abdul Madjid. D', 'majid@gmail.com', '0846576339121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
(' 196102141984032004', '0d0ad8e3eb68e91896433a584ce079ff', 'Andi Nuhaidah ', 'nuhaidah', '084776882121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('195904171981031013', 'ca4ee23c822a9496ff4fb168f71c591a', 'Paris Sule Padang', 'parissul@gmail.com', '085898339829', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196107211986031013', '3ebdfa5c7bd96e1e12be91899f881bb6', 'Sulu Palinggi', 'sulupalinggi@gmail.com', '086565337212', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196404251989031012', '98f61fae259f2f84bd01c6b253510483', 'Firman, SE', 'firmanas@gmail.com', '08565443549', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196109251986031014', 'aeb3cd349d9bcaef01d445e67d676c49', 'Piter', 'piterau@gmail.com', '086545009120', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196709092007012007', '944631543bee5e4002d43478fdabc6d1', 'Dra. Rosdiana Arsyad', 'rosdianaarsyad@gmail.com', '085434998129', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196701262007012015', '55175f13364cc0409a427b657472dfa5', 'Dra. Sitti Haeriah', 'haeriah@gmail.com', '085343998121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196210102007012007', '98e1af71eed1cb556db92c63ebfe63c2', 'Dra. Sukraeni', 'sukraeni@gmail.com', '085434889820', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196810282007012004', '202cb962ac59075b964b07152d234b70', 'Dra. Nining Selviani', 'nining@gmail.com', '085434889121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', '2kiu0t6t05hmkh9biqg47kvtm3'),
('196712312007011132', '2f955390e787fbe544256b25e04ad54d', 'Paharuddin,S.pd', 'paharuddin@gmail.com', '089898665423', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('197009082007012023', '792b764e11f9b3b791424dde85813127', 'Sitti Nursiah,S.pd', 'nursiah@gmail.com', '085453998439', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196608252007011022', '6edd4640fd5d3f6dc6a78fe3c9ab6e2c', 'Muhammad Kasim,S.Pd', 'kasim@gmail.com', '087878443657', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('197509192007011015', 'bbdbe2168eafca4d112d766b6eea6aad', 'Diah Lukitasari, S.Pd', 'lukitasari@gmail.com', '086568332121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('197102102007012018', '81dd4b210cc91fb0924eede2c7338d6c', 'St. Hadira, S.Pd', 'hadira@gmail.com', '087676554376', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196701252007012009', '4de8d70a7bdcd2c4fd285aea5da1b39e', 'Sitti Purnama.F', 'sittipurnama@gmail.com', '085465889218', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196512312007011122', '23fd871ade7c874dc5d43c67d44fc228', 'Muh.Sabri', 'sabri@gmail.com', '084343990121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196407052007012014', '266bb836eab76840ed79c9df1bbc516c', 'Ruksanawati', 'ruksanawati@gmail.com', '085343993242', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196701012007012048', '70d14cc84b73021b759acc7511d46ad7', 'Amriani', 'amriani@gmail.com', '084676443879', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('19640805207012014', 'f1c8cd4aa3cdc59cc522c81a14388cd3', 'Rahmatan', 'rahmatan@gmail.com', '084756338121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('19650302 200701 2 010', '5c1065ca40d8babdba7dd6d08c3e32c2', 'Aliyas', 'aliyas@gmail.com', '087354778191', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196308222007012010', 'f3d109adb76295e0e5d13bfc9ea37009', 'Marhamah Amin', 'marhamahamin@gmail.com', '086563778090', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196304292007012005', '721ca3976110267e1c2a2dffa94c480c', 'Jumatiah', 'jumatiah@gmail.com', '0846736889213', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('197017052007012018', '6b839205c596ee33a292ae384ead877c', 'Juliana', 'juliana@gmail.com', '087989332232', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196504182007012009', '18242bf151dfb446beace98e8fd5003e', 'Nuraeni', 'nuraeni@gmail.com', '083656889219', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('197506092003121006', 'c769c9443b5dd2ba2e8ae70c37d5f197', 'Rahmad Jumakir', 'rahmadjum@gmail.com', '083238773212', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('197309192005031004', '6ee3ca2060cfb21045cda72b6f0058ad', 'Syahrir', 'syahrir@gmail.com', '083654778121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('19782014082001', 'c09ff43d98a0a919e9f687ab99272b14', 'MariyaniKalang, A.Md', 'mariyanikalang@gmail.com', '083434887121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('197309242006041017', 'bfb33511bd3076f90c97e8873fab3559', 'Suharsono, S.Sos', 'suharsono@gmail.com', '0834347784219', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('197309242006041016', '0aa6004393bde28382c532b80917050f', 'Usman M', 'usman@gmail.com', '0843438889121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('197508222006041013', '702a310ea76daddedd09fe58d36cbd7a', 'Muhammad Nur Agung Apri', 'agung@gmail.com', '086895883941', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('197507062006041020', '19fc0723d7add3fbcabf82421aaca0f8', 'Syahril', 'syahhril@gmail.com', '084545993121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('197406012007011029', '57742baa85f2e61113c0a00df05df3ee', 'Halim', 'halim@gmail.com', '0847584990121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('198009082007011008', '32234ded5af5adeea8d490e44c747f09', 'Mustakim', 'mustakim@gmail.com', '085454221891', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196103192007011002', '52e679d5987e58665baeb087f24dac4f', 'Syaharuddin Yahya', 'yahya@gmail.com', '085454998121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('197712312007011021', '202cb962ac59075b964b07152d234b70', 'Bangsawan', 'bangsawan@gmail.com', '085623112109', 'img/pegawai/nopic.jpg', 'Kepala Bagian', 'N', 'bm90ql5q654p69gk656jjdbog7'),
('196911092007011020', '593186129ace442065fbe76a91c9ddd2', 'Ramlan', 'ramlan@gmail.com', '085458992129', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196812232007011018', 'c41c5fda1303b36be1625e72c59e2f1f', 'Zakeus Panggo', 'zakeus@gmail.com', '084565337812', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196708272007011017', '519594327c5692569e41b2aac59e5fcf', 'Muhammad Amir', 'amir@gmail.com', '084545889121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('197506142007011006', '9af1c7e91adc173a5fb097a8554a9e66', 'Jufri', 'mjufri@gmail.com', '0856476221981', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('197409282007011009', '58b34a2c2338b6d8931f013d9fb60731', 'Alwi', 'alwi@gmail.com', '084545993121', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196806142007011026', 'cf152e1895bebb1c3617f2b1c43e41e1', 'Agus Sudrajat', 'agussudrajat@gmail.com', '085898332199', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('198507122009011004', 'c01102b3c7ec3f0d8b60a1687955f35a', 'Hebib', 'hebib@gmail.com', '084545889212', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('197704302009011004', 'a2a0e1abb150607abcd6d19df04f2f6a', 'Saipuddin', 'saipuddin@gmail.com', '084343998212', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('197203142009011006', '1aff72875c4c02815c20cd76d44f8305', 'Syamsul Bahri', 'syamsul@gmail.com', '085454998213', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('198008162009041004', '006fa944edc4b5fb005a4433ab4ce0c5', 'Bahtiar', 'bahtiarkece@gmail.com', '085281479272', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196712312009011016', '2d3aca5bfeb347ed3eb90e36f3239d64', 'Jamaluddin', 'jamaluddinkece@gmail.com', '085381724902', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('198405252009011004', '1253263b7961df2aeba0b3fcbb003d91', 'Kalvin', 'kalvinkece@gmail.com', '081342987456', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196712312009011022', '89a474ca58dd5a11a145f2bb4a385114', 'Muhammad Yunus', 'yunusgombara@gmail.com', '085321214343', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196404242014082001', '3d7ce27744f981058743a275ab61cba2', 'Asmirawati', 'asmirawaticoy@gmail.com', '082192745839', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196112152010011021', 'f45055d56a1dd9d00faf747c90d5a9e5', 'Fajrin Syaiful Adam', 'fajrinkece@gmail.com', '082111906753', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('197403072007011015', '99ac02a6d90bce342a6071c93cb435b1', 'Mansyur', 'mansyurkece@gmail.com', '082109872345', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('197701232007011010', 'e05626c7dcbc1f818d757bc90fc38b5d', 'Rahmat Satria,Spd', 'RahmatSatribh@gmail.com', '082118795374', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', ''),
('196008162009041004', '202cb962ac59075b964b07152d234b70', 'Muhammad Akbar', 'Akbarjhy@gmail.com', '082134578901', 'img/pegawai/nopic.jpg', 'Pegawai', 'N', 'aq9r68t6o5dlfniqol3m2k0r74');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_pengajuan_notifikasi`
--
CREATE TABLE IF NOT EXISTS `view_pengajuan_notifikasi` (
`ID` int(12)
,`idpengajuan` varchar(75)
,`nip` varchar(75)
,`user` varchar(75)
,`status` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_sortgolongan`
--
CREATE TABLE IF NOT EXISTS `view_sortgolongan` (
`id` int(12)
,`nip` varchar(35)
,`nama` varchar(75)
,`umur` int(3)
,`tempat_lahir` varchar(35)
,`tanggal_lahir` date
,`bangsa` varchar(50)
,`agama` varchar(35)
,`tempat_tinggal` varchar(100)
,`notelp` varchar(50)
,`email` varchar(50)
,`noktp` varchar(35)
,`tmt` date
,`gol` varchar(50)
,`jabatan` varchar(75)
,`folder` varchar(50)
,`foto` varchar(75)
,`unitkerja` varchar(50)
,`golbaru` varchar(50)
,`tmtbaru` date
,`jabatanbaru` varchar(75)
);
-- --------------------------------------------------------

--
-- Struktur untuk view `datakenaikanpangkat`
--
DROP TABLE IF EXISTS `datakenaikanpangkat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `datakenaikanpangkat` AS select `d`.`nip` AS `nip`,`d`.`nama` AS `nama`,`d`.`tanggal_lahir` AS `tanggal_lahir`,`d`.`tmt` AS `tmt`,`d`.`gol` AS `gol`,`d`.`jabatan` AS `jabatan`,`p`.`id` AS `id`,`p`.`idpangkat` AS `idpangkat`,`p`.`sk_terakhir` AS `sk_terakhir`,`p`.`minimaltahun` AS `minimaltahun`,`p`.`status` AS `status`,`p`.`user` AS `user`,`p`.`tanggal` AS `tanggal`,`p`.`keterangan` AS `keterangan` from (`peg_datapribadi` `d` join `data_kenaikanpangkat` `p`) where (`d`.`nip` = `p`.`nip`) order by `p`.`id` desc;

-- --------------------------------------------------------

--
-- Struktur untuk view `datapensiun`
--
DROP TABLE IF EXISTS `datapensiun`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `datapensiun` AS select `d`.`nip` AS `nip`,`d`.`nama` AS `nama`,`d`.`tanggal_lahir` AS `tanggal_lahir`,`d`.`tempat_lahir` AS `tempat_lahir`,`d`.`tempat_tinggal` AS `tempat_tinggal`,`d`.`tmt` AS `tmt`,`d`.`golbaru` AS `gol`,`d`.`unitkerja` AS `unitkerja`,`d`.`jabatanbaru` AS `jabatan`,`p`.`id` AS `id`,`p`.`idpensiun` AS `idpensiun`,`p`.`surat_keputusan_pangkat_terakhir` AS `surat_keputusan_pangkat_terakhir`,`p`.`surat_nikah` AS `surat_nikah`,`p`.`akta_kelahiran` AS `akta_kelahiran`,`p`.`daftar_keluarga` AS `daftar_keluarga`,`p`.`foto` AS `foto`,`p`.`status` AS `status`,`p`.`user` AS `user`,`p`.`tanggal` AS `tanggal`,`p`.`keterangan` AS `keterangan` from (`peg_datapribadi` `d` join `data_pensiun` `p`) where (`d`.`nip` = `p`.`nip`) order by `p`.`id` desc;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_pengajuan_notifikasi`
--
DROP TABLE IF EXISTS `view_pengajuan_notifikasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pengajuan_notifikasi` AS select `data_kenaikanpangkat`.`id` AS `ID`,`data_kenaikanpangkat`.`idpangkat` AS `idpengajuan`,`data_kenaikanpangkat`.`nip` AS `nip`,`data_kenaikanpangkat`.`user` AS `user`,`data_kenaikanpangkat`.`status` AS `status` from `data_kenaikanpangkat` union select `data_pensiun`.`id` AS `ID`,`data_pensiun`.`idpensiun` AS `idpengajuan`,`data_pensiun`.`nip` AS `nip`,`data_pensiun`.`user` AS `user`,`data_pensiun`.`status` AS `status` from `data_pensiun`;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_sortgolongan`
--
DROP TABLE IF EXISTS `view_sortgolongan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_sortgolongan` AS select `p`.`id` AS `id`,`p`.`nip` AS `nip`,`p`.`nama` AS `nama`,`p`.`umur` AS `umur`,`p`.`tempat_lahir` AS `tempat_lahir`,`p`.`tanggal_lahir` AS `tanggal_lahir`,`p`.`bangsa` AS `bangsa`,`p`.`agama` AS `agama`,`p`.`tempat_tinggal` AS `tempat_tinggal`,`p`.`notelp` AS `notelp`,`p`.`email` AS `email`,`p`.`noktp` AS `noktp`,`p`.`tmt` AS `tmt`,`p`.`gol` AS `gol`,`p`.`jabatan` AS `jabatan`,`p`.`folder` AS `folder`,`p`.`foto` AS `foto`,`p`.`unitkerja` AS `unitkerja`,`p`.`golbaru` AS `golbaru`,`p`.`tmtbaru` AS `tmtbaru`,`p`.`jabatanbaru` AS `jabatanbaru` from (`peg_datapribadi` `p` join `master_golongan` `g`) where (`p`.`gol` = `g`.`golongan`) order by `g`.`tingkatangolongan` desc;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
