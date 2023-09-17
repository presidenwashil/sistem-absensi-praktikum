-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 06:03 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sipl`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `aktif` varchar(5) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_lengkap`, `username`, `password`, `aktif`, `foto`) VALUES
(1, 'Raihan Presiden Washil', 'admin@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Y', 'admin.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_aslab`
--

CREATE TABLE `tb_aslab` (
  `id_aslab` int(11) NOT NULL,
  `nia` varchar(15) NOT NULL,
  `nama_aslab` varchar(120) NOT NULL,
  `email` varchar(65) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_aslab`
--

INSERT INTO `tb_aslab` (`id_aslab`, `nia`, `nama_aslab`, `email`, `password`, `foto`, `status`) VALUES
(6, '001', 'Lab Pemrograman', 'pemrograman@wicida.ac.id', 'e193a01ecf8d30ad0affefd332ce934e32ffce72', '123141236_187678159509081_4718326500560383993_n.jpg', 'Y'),
(7, '002', 'Aplikasi Komputasi', 'aplikasikomputasi@wicida.ac.id', '6fc978af728d43c59faa400d5f6e0471ac850d4c', '123141236_187678159509081_4718326500560383993_n.jpg', 'Y'),
(8, '003', 'Aplikasi Profesional', 'aplikasiprofesional@wicida.ac.id', '221407c03ae5c73109cce71d27e24637824f3333', '123141236_187678159509081_4718326500560383993_n.jpg', 'Y'),
(9, '004', 'Jaringan Komputer', 'jaringankomputer@wicida.ac.id', 'c63528a52274a35d1c07bd9e55a83c6eb073de81', '123141236_187678159509081_4718326500560383993_n.jpg', 'Y'),
(10, '005', 'Sistem Informasi', 'sisteminformasi@wicida.ac.id', 'de1f53b6fbc3fecd35b0bbc963e21902a149e5e3', '123141236_187678159509081_4718326500560383993_n.jpg', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id_dosen` int(11) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `nama_dosen` varchar(120) NOT NULL,
  `email` varchar(65) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id_dosen`, `nip`, `nama_dosen`, `email`, `password`, `foto`, `status`) VALUES
(14, '001', 'Ita Arfyanti, S.Kom., M.M', 'itaarfyanti@wicida.ac.id', 'e193a01ecf8d30ad0affefd332ce934e32ffce72', 'guru.png', 'Y'),
(15, '002', 'Siti Lailiyah, S.Kom., M.Kom', 'sitilailiyah@wicida.ac.id', '6fc978af728d43c59faa400d5f6e0471ac850d4c', 'guru.png', 'Y'),
(17, '003', 'Wahyuni, S.Kom., M.Kom', 'wahyuni@wicida.ac.id', '221407c03ae5c73109cce71d27e24637824f3333', 'guru.png', 'Y'),
(18, '004', 'Andi Yusika Rangan, S.Kom., M.Kom', 'andiyusika@wicida.ac.id', 'c63528a52274a35d1c07bd9e55a83c6eb073de81', 'kepala.png', 'Y'),
(19, '006', 'Vilianty Rafidah, S.T.,M.Kom', 'viliantyrafidah@wicida.ac.id', '20dd129da16a9afb802d8b595485f8d2719aea44', 'guru.png', 'Y'),
(20, '007', 'Muhammad Fahmi, S.Kom., M.Kom', 'fahmi@wicida.ac.id', '15346b593c4d0cf05fb6e67a5669d852e6550481', 'kepala.png', 'Y'),
(21, '008', 'Ahmad Abul Khair, S.Kom., M.T', 'abulkhair@wicida.ac.id', '52c24d49be8ef49d19f9983b6c3d1c5892c593db', 'kepala.png', 'Y'),
(22, '009', 'Jundro Daud Hasiholan, S.Kom., M.Kom', 'jundrodaud@wicida.ac.id', '19b3f0ed02e60c8bae808b496b3cce99dc8f9e69', 'kepala.png', 'Y'),
(23, '010', 'Kusno Harianto, S.Kom., M.Kom', 'kusnoharianto@wicida.ac.id', '47ab9979443fb7ed1c193d06773333ba7876094f', 'kepala.png', 'Y'),
(24, '011', 'Dr. Heny Pratiwi, S.Kom., M.Pd., M.TI', 'henypratiwi@wicida.ac.id', 'e7001334d9d19559a8bb0dd6015f16e31d15566c', 'guru.png', 'Y'),
(25, '012', 'Ahmad Fajri, S.Kom., M.Kom', 'ahmadfajri@wicida.ac.id', 'c4a2d99bc28d236098a095277b7eb0718d6be068', 'kepala.png', 'Y'),
(27, '013', 'Salmon, S.Kom., M.Kom', 'salmon@wicida.ac.id', '7c12b5f75af904d7adffb56a0611ab308d8698c4', 'kepala.png', 'Y'),
(29, '014', 'Muhammad Ibnu Saad, S.Kom., M.Kom', 'ibnusaad@wicida.ac.id', 'c24c173dae0e230c94ab301f276b5ad1366e71c1', 'kepala.png', 'Y'),
(30, '015', 'Eka Arriyanti, S.Pd., M.Kom', 'ekaarriyanti@wicida.ac.id', '37444e63907d968b4a4947cb38ce9c019e6b6310', 'guru.png', 'Y'),
(31, '016', 'Reza Andrea, S.Kom., M.Kom', 'rezaandrea@wicida.ac.id', '399fcd69b06a4f8e2ba3ec7fb9cb3c6d3dc687a8', 'kepala.png', 'Y'),
(32, '005', 'Pitrasacha Adytia, S.T., M.T', 'pitrasacha@wicida.ac.id', 'de1f53b6fbc3fecd35b0bbc963e21902a149e5e3', 'kepala.png', 'Y'),
(33, '017', 'Amelia Yusnita, S.Kom., M.Kom', 'ameliayusnita@wicida.ac.id', '1a0092b5af6d86bcb51d99bec0cffdbc19824481', 'guru.png', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dospem`
--

CREATE TABLE `tb_dospem` (
  `id_dospem` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `id_mkelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dospem`
--

INSERT INTO `tb_dospem` (`id_dospem`, `id_dosen`, `id_mkelas`) VALUES
(13, 14, 30),
(14, 15, 31),
(21, 18, 36),
(22, 14, 33),
(23, 14, 34),
(24, 19, 38),
(25, 18, 37),
(26, 25, 39),
(27, 25, 40),
(28, 25, 41),
(29, 25, 42),
(30, 25, 43),
(31, 25, 44),
(32, 17, 76),
(33, 29, 79);

-- --------------------------------------------------------

--
-- Table structure for table `tb_izin`
--

CREATE TABLE `tb_izin` (
  `id_izin` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `id_matakuliah` int(11) NOT NULL,
  `id_mkelas` int(11) NOT NULL,
  `kelompok` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `alasan` varchar(20) NOT NULL,
  `surat_izin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_izin`
--

INSERT INTO `tb_izin` (`id_izin`, `nama`, `nim`, `id_matakuliah`, `id_mkelas`, `kelompok`, `tanggal`, `alasan`, `surat_izin`) VALUES
(24, 'Raihan Presiden Washil', '2031006', 15, 30, 1, '2023-07-03', 'Sakit', 'final exam.pdf'),
(25, 'Raihan Presiden Washil', '2031006', 24, 31, 1, '2023-07-02', 'Sakit', 'clmsCertificate.pdf'),
(26, 'Raihan Presiden Washil', '2031006', 15, 30, 1, '2023-07-06', 'Izin', 'final exam.pdf'),
(27, 'MINI. H', '2243074', 23, 36, 1, '2023-07-27', 'Sakit', 'sertifikat_course_261_2871075_060323194734.pdf'),
(28, 'RESKI WIDHIANTO', '2143068', 23, 36, 1, '2023-08-05', 'Sakit', 'IMG_20230411_123659~2.jpg'),
(29, 'RESKI WIDHIANTO', '2143068', 19, 37, 4, '2023-08-07', 'Sakit', 'IMG_20230411_123659~2.jpg'),
(30, 'RESKI WIDHIANTO', '2143068', 16, 30, 1, '2023-08-07', 'Sakit', 'IMG_20230411_123659~2.jpg'),
(31, 'RIZKY', '2141011', 37, 79, 1, '2023-08-21', 'Izin', 'Surat izin.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_laboratorium`
--

CREATE TABLE `tb_laboratorium` (
  `id_lab` int(11) NOT NULL,
  `kd_lab` varchar(40) NOT NULL,
  `nama_lab` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_laboratorium`
--

INSERT INTO `tb_laboratorium` (`id_lab`, `kd_lab`, `nama_lab`) VALUES
(1, 'P', 'Pemrograman'),
(2, 'AK', 'Aplikasi Komputasi'),
(3, 'AP', 'Aplikasi Profesional'),
(4, 'JARKOM', 'Jaringan Komputer'),
(5, 'SI', 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nim` varchar(60) NOT NULL,
  `nama_mahasiswa` varchar(120) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mahasiswa`, `nim`, `nama_mahasiswa`, `password`, `foto`, `status`) VALUES
(58, '2143068', 'RESKI WIDHIANTO', '80a1e4c9231fffd65a806d177018f1404b2a992a', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(59, '2243002', 'DARWIS', '34eb3b35b69ae9ad415088b1f50509039da4c533', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(60, '2243003', 'DIVIA YUDITA FIANI', 'b34d9b9bea769a64ae81a3ac94cfc59e14a8c12a', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(61, '2243004', 'FADILLAH ANGREANI', 'd22cc92ddf622ea9d7de70b13156aded02fbd12b', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(62, '2243009', 'MUHAMMAD RIZKI ADITIYA', '41aee852242d4ad233ecb33480dd81cd7a6d867c', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(63, '2243017', 'MUHAMMAD ADWA YUDA', 'f89623c07c0149ffa60d3f603bc9ebf43df7735f', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(64, '2243054', 'MUHAMMAD NUR RAIHAN SUDIRMAN', '6a741babcd5d5acc560255ae7ffaa6a67c3ee5d1', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(65, '2243066', 'MUHAMMAD SAFA NUR SYAM', '3292e1fecf119d713c1c4a1c9a7e7cf70192f3bf', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(66, '2243074', 'MINI. H', 'c7a47ae5726587fe283a81ad10f5454d80c52a19', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(67, '2243079', 'ADJIE BAYU WIBOWO', '0e89520614d4b667d43dc788bafe85dc80764d7d', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(68, '2243102', 'WISNU WARDHANA', 'ad66b567e3d2816baeb427d0e47b7c520d7c57be', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(69, '2243121', 'SANTI NADELLA', '74357a19650e1e5a2c5e86eca75ba57ebcd3b73e', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(70, '2243909', 'ISHMAH HANANI', 'ba4d9a0630cdfda5e53eded19d232727fdbe80af', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(71, '1943119', 'EVANDER YOSE GULTOM', 'ac0c71b6c4030c47a955b9fd4e23ceebb09d41c3', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(72, '2243005', 'AMALIA RAHMAN', '76112c6cba689088b7cc48e6f7b2884a7e54237a', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(73, '2243011', 'BARTOLOMEUS SEMAI KABELEN', 'c2ea2477ca5f3e3fcaf9add8c1b4002f08f703c0', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(74, '2243013', 'RONALD PAONGANAN', 'ad0272dd933431f6b946e3f9936ad9de1cd9f2d2', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(75, '2243014', 'RIDWAN DWI TAJUDIN', '8aa523020b753d874dc0d1f098d4c77b2e4043e5', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(76, '2243015', 'MUHAMMAD AL-FARISI ADINEGARA', '56c847e84b1021738c425207ddb7725fb5259c6c', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(77, '2243016', 'ANANDAYA DIFI DZULARDI KALIMANTI', '31367b9c030403b68b69f152b0da67b81bd35da7', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(78, '2243020', 'ANSELMUS LEBOING', '64c0082ba49c3a8a13d1c449ade0733cdfa69fe3', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(79, '2243021', 'ALVIN KORNELIUS LIE', 'bbf86224b3d07598f9c5979e779fbad0f0a48d67', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(80, '2243022', 'ALDI NUR FAHREZA', '5ea3d17fd76a7674db11eff03f6086f8228f5997', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(81, '2243029', 'MUHAMMAD ALFATIH PIMADA', '07de67377673e89fd2a2e5d1320c00a202f7c142', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(82, '2243036', 'ZHORIF ARROSYID', '61a6e7e66797c2da20c915d8e465d44df44a1f43', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(83, '2243037', 'ABIL FIRNANDA', '592c5741cc5348524721eb51a5abd21406f3a8ee', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(84, '2243043', 'MUHAMMAD FAJAR', 'bcecdb71003fa36ebf4a151e0d48ba61a3915281', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(85, '2243045', 'MUH NUR RAMADHAN', '108eef53e8881e64dcfb0c6c4204bd1e8affc47c', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(86, '2243046', 'ALYUDANI', '8836f17474ffb449582ef75c375440d94f084559', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(87, '2243050', 'DHAFFA ARIZKI', 'ea2869a915aaa25e9fec891e51839c1e4f0f5e68', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(88, '2243052', 'MICKHAEL GUNAWAN', 'bbc0774ad1bb56875fbeba31f63c5af9229a5c2c', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(89, '2243059', 'JOSE VINCENT', 'f5eceeeceffe50f0abb05cca537f084f44a56dec', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(90, '2243060', 'HIERONIMUS FELDI', 'e073c57a3ef7ef9ae18c40419a5de4e4e323034d', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(91, '2243064', 'RAMADHINI HIDAYATULLAH', 'ac3c4f04891cf8d90cc2221f721f4cc9f50f8289', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(92, '2243065', 'WINZKY DAWAMUZ ASYARI', 'b8a3beeea3d81d85746c3419e61a035912bc0103', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(93, '2243069', 'FAJAR RAMADHAN', '9e1f92f6beca32649a0cfa4ce130a5958c3ae160', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(94, '2243071', 'APRILIANA SISKA BILUNG', '795b283429f568abb2eac829a0f003eb3dcae413', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(95, '2243075', 'AMELIA NUR MAULIDIATI', '0ced6483635b1b0cf7b4bf126d464f8dbec644cf', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(96, '2243076', 'GIOVANNI OSWALD NEMAN', '994b514d263347385711b68871560336a3657f37', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(97, '2243077', 'YOKTAN VALENS BHAKTI', '9207dadfe21b43679b5f8be0c4f85a2361ed7f21', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(98, '2243082', 'STEVEND BERNARD YUDISTIRA', '46e9110c446615c7336d4e795a0fb6576bba7613', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(99, '2243094', 'AKHMAD RIZKY FAHROZY', '0d81dee54f3681f79c4c1776ae24234566bec67a', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(100, '2243097', 'DICKY CHANDRA', '2feb4dab52bed30e60912eed6e5ca60f2e936f62', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(101, '2243098', 'JULIA EMAKULATA BURING', 'e54451baf3b7028b69a88f85cee4a2563fbd8708', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(102, '2243100', 'SEPRIANA OSE GUNAWAN', '8c6297ca004229ba29f9088bba371fe2304122b1', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(103, '2243103', 'MICKY ARNOLD SEFAN', '58c101ba29a5d1946602381c75e0094bfcf7a8d8', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(104, '2243105', 'MICSHAEL ZEENS IMANUEL FAISAN', 'a6a945a2dc33e37307f220b64709eb1acf42a88c', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(105, '2243107', 'CRISTHOFER NENGUN', '4b9b296431a608e2d121cda91c2d22e681ef6f79', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(106, '2243115', 'MUHAMMAD ZHAQI HAFIZI', 'd7b8a9ee89df0e125a56caec8519fdf490f9528c', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(107, '2243124', 'MUHAMMAD AKBAR YASIN', '7a863d24409eb18ca7856fe6ae1757a9908bf399', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(108, '2243127', 'RACHMAD SYAID DARMAWIJAYA', 'e8b1e1c8d742fcc6503745da0001ea33bbbd2209', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(109, '2043004', 'KHOIRULLI NURUL FATIMAH', '89fc3346b856a91d36153df43bf99f351948f970', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(110, '2043007', 'MUHAMMAD FIRDAUS', 'c01940ca0065b759fff9bcf5bab9b8bc8e26db24', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(111, '2043011', 'SIGIT SYAMSU ALAM', '2079a7d66097e59570c5c4a9fab8fe8981bf0c52', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(112, '2043019', 'DESYA PUTRA RIZKY ARIFIAN', 'fd11b4a26eba18d1cd6b5062ccb606071ca95f9c', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(113, '2043023', 'ANDREAS JOHAN', 'beedd27dcf88bc5a4f004c4579bb2dc8c99f3f1a', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(114, '2043026', 'AFIT NUR RAHMAN', '526cebb9a362e41f33023db080ab3b6fc1e78a85', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(115, '2043027', 'MUHAMMAD SARIPIDATULLAH', '3f7bbf3da5d4271b7b8ef302b4c89fa64bc5ca05', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(116, '2043032', 'ABDURAHMAN AMIN', 'a4c9aebedd7771f52fff07021a9fe80bd63051c6', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(117, '2043043', 'ANDRE IRAWAN AMENG', 'e0adcad87e2c3dba0ba60a5ffd07f492fea4e9b2', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(118, '2043045', 'NAUFAL JULI SAPUTRA', 'e11be33aa98026559e8abfbebf9ee8f01ee25e87', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(119, '2043049', 'MUHAMMAD RIDHO ALFARISI', '7e265e6ca28e194f44f5ae8cee36830fb7e7260e', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(120, '2043051', 'RAIHAN ALIFF WAHYUDINNUR', 'adb25f9d6e9e9c8817b3c15b4d008626bbc2775a', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(121, '2043055', 'EKSAKTA RAMANG KRIDHO HARYONO', '2fac600f2a2f4ab0509752c5b7b6569596862fef', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(122, '2043058', 'TALU BELLA LESTIAWATI', 'd73f22bc5caa3b6367661e929a89d2d4619fa5b6', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(123, '2043061', 'DANIEL EVAN RORY', '95f59ea3f9058bfd334152bf3951977dadef85e5', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(124, '2043062', 'ABIZER APRIDO SEKA', 'd28a3d08d1179595c1abd48da9b59d4771ac7cd1', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(125, '2043070', 'MUHAMMAD RIZKY', '9d3943123f64f2cadef7b8062b30ae279fa4082c', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(126, '2043071', 'RAGIL AL-FIJRIN', 'f7b5e3be51ee7e88c9bb7473522723d35ce344ed', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(127, '2043072', 'NANDA PRATAMA', 'db7f19c99ecf260439a09e48089d10bb6d33c25d', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(128, '2043074', 'BENIDIKTUS HIMANG', 'dc2ad0f0cd392e35667f2542e94137fcb2636e4f', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(129, '2043079', 'MUHAMMAD SYAIFULLAH', '20cde9f62ad632dee8283af8886683da41f1d1f5', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(130, '2043080', 'HAIQAL ADITYA PERDANA', 'ba8ed30e497b775c3f4137d4c26ac8fc76b945cd', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(131, '2043084', 'EUNIKE', 'df44d27fb4d7b800aa8e78c7e2b1748ea90e92ce', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(132, '2043087', 'MUHAMMAD SYAFAAT ARIEF', '71982dbd91179c9380e0954f8e70fd55d257821d', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(133, '2043089', 'ANDINI NURFIANDA', 'df7970c0edff93914163dd1b77303e952e35ea92', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(134, '2043091', 'JOE FRY JONATHAN LORENTZ', '7f2d2cf1aebd9ab710a522b4c6f7c044dd74ec5c', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(135, '2043094', 'BAYU ADHILA NURRAHMAN', '752cb9e993f6625d170aa4453a87b1119f428c06', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(136, '2043096', 'CLAUDIO DIVA CHRISTIAN PUTRA', 'b0b48eebcb12ed2aeeaac8eb0e46a2aabb7573b6', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(137, '2043099', 'GERRY CORVALLIS PALITTING', 'c6b002488cceaa1f39b3610b95a9cb885ba388d0', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(138, '2043109', 'DEA ARDILA RAHMAYANTI', 'f6f1d72271b9e8205d030a3accb8afe10c70f5ab', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(139, '2043111', 'MUHAMMAD HAFRIYANDI SAPUTRA', '92593151fd6e6ab578232dbbe397d9d43e21e9c2', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1'),
(140, '2141011', 'RIZKY', 'added548bb2923d0518dfd7e565a41dafb06119a', '495-4952535_create-digital-profile-icon-blue-user-profile-icon.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa_kelas`
--

CREATE TABLE `tb_mahasiswa_kelas` (
  `id_mhskelas` int(11) NOT NULL,
  `id_mahasiswa` int(11) DEFAULT NULL,
  `id_mkelas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa_kelas`
--

INSERT INTO `tb_mahasiswa_kelas` (`id_mhskelas`, `id_mahasiswa`, `id_mkelas`) VALUES
(37, 58, 36),
(38, 59, 36),
(39, 60, 36),
(40, 61, 36),
(41, 62, 36),
(42, 63, 36),
(43, 64, 36),
(44, 65, 36),
(45, 66, 36),
(46, 67, 36),
(47, 68, 36),
(48, 69, 36),
(49, 70, 36),
(50, 72, 30),
(51, 72, 31),
(52, 72, 37),
(53, 72, 38),
(54, 73, 30),
(55, 73, 31),
(56, 73, 37),
(57, 73, 38),
(58, 74, 30),
(59, 74, 31),
(60, 74, 37),
(61, 74, 38),
(63, 71, 30),
(64, 109, 76),
(65, 110, 76),
(66, 111, 76),
(67, 112, 76),
(68, 113, 76),
(69, 114, 76),
(70, 115, 76),
(71, 116, 76),
(72, 117, 76),
(73, 118, 76),
(74, 119, 76),
(75, 120, 76),
(76, 121, 76),
(77, 122, 76),
(78, 123, 76),
(79, 124, 76),
(80, 125, 76),
(81, 126, 76),
(82, 127, 76),
(83, 128, 76),
(84, 129, 76),
(85, 130, 76),
(86, 131, 76),
(87, 132, 76),
(88, 133, 76),
(89, 134, 76),
(90, 135, 76),
(91, 136, 76),
(92, 137, 76),
(93, 138, 76),
(94, 139, 76),
(95, 140, 79);

-- --------------------------------------------------------

--
-- Table structure for table `tb_matakuliah`
--

CREATE TABLE `tb_matakuliah` (
  `id_matakuliah` int(11) NOT NULL,
  `kode_matakuliah` varchar(40) NOT NULL,
  `matakuliah` varchar(60) NOT NULL,
  `sks` int(11) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `id_thajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_matakuliah`
--

INSERT INTO `tb_matakuliah` (`id_matakuliah`, `kode_matakuliah`, `matakuliah`, `sks`, `id_semester`, `id_thajaran`) VALUES
(15, 'SIP2217', 'Praktikum Algoritma Dan Pemrograman 2', 2, 5, 9),
(16, 'SIP2125', 'Praktikum Struktur Data', 1, 5, 9),
(17, 'SIP4142', 'Praktikum Multimedia', 1, 5, 9),
(18, 'SIP4138', 'Praktikum Jaringan Komputer', 1, 5, 9),
(19, 'SIP4147', 'Praktikum Sistem Operasi', 1, 5, 9),
(20, 'SIP4144', 'Praktikum Pemrograman Berorientasi Objek', 1, 5, 9),
(21, 'SIP6163', 'Praktikum APSI', 1, 5, 9),
(22, 'SIP6165', 'Praktikum Bahasa Pemrograman Ilmu Data', 1, 5, 9),
(23, 'IFP2105', 'Praktikum Sistem Operasi', 1, 5, 9),
(24, 'IFP2206', 'Praktikum Sistem Basis Data 1', 1, 5, 9),
(25, 'IFP2203', 'Praktikum Algoritma Dan Pemrograman 2', 2, 5, 9),
(26, 'IF2178', 'Praktikum Struktur Data', 1, 5, 9),
(27, 'IFP4211', 'Praktikum Jaringan Komputer', 2, 5, 9),
(28, 'IFP4213', 'Praktikum Pemrograman Web', 2, 5, 9),
(29, 'IFP4212', 'Praktikum Kecerdasan Buatan', 2, 5, 9),
(30, 'IFP4210', 'Praktikum Sistem Multimedia', 2, 5, 9),
(31, 'IFP6221', 'Praktikum Jaringan Komputer Terapan', 2, 5, 9),
(32, 'IFP6220', 'Praktikum Pemrograman dan Desain Permainan', 2, 5, 9),
(33, 'IFP6218', 'Praktikum Sistem Tertanam', 2, 5, 9),
(34, 'IFP6219', 'Praktikum Pemrograman Ilmu Data', 2, 5, 9),
(37, 'SIP3213', 'Pemrograman Web', 1, 4, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tb_materi`
--

CREATE TABLE `tb_materi` (
  `id_materi` int(11) NOT NULL,
  `id_mengajar` int(11) DEFAULT NULL,
  `pertemuan_ke` int(11) DEFAULT NULL,
  `materi` varchar(255) DEFAULT NULL,
  `modul` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mengajar`
--

CREATE TABLE `tb_mengajar` (
  `id_mengajar` int(11) NOT NULL,
  `kode_pelajaran` varchar(30) NOT NULL,
  `hari` varchar(40) NOT NULL,
  `jam_mengajar` varchar(60) NOT NULL,
  `jamke` varchar(11) NOT NULL,
  `id_aslab` int(11) NOT NULL,
  `id_matakuliah` int(11) NOT NULL,
  `id_lab` int(11) NOT NULL,
  `id_mkelas` int(11) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `id_thajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mengajar`
--

INSERT INTO `tb_mengajar` (`id_mengajar`, `kode_pelajaran`, `hari`, `jam_mengajar`, `jamke`, `id_aslab`, `id_matakuliah`, `id_lab`, `id_mkelas`, `id_semester`, `id_thajaran`) VALUES
(27, 'MPL-1688983381', 'Selasa', '20.30 - 22.00', '8', 6, 23, 1, 36, 5, 9),
(28, 'MPL-1689633256', 'Rabu dan Jumat', '14.00 - 15.30', '5', 6, 25, 1, 30, 5, 9),
(29, 'MPL-1689633467', 'Kamis', '14.00 - 15.30', '5', 6, 26, 1, 38, 5, 9),
(30, 'MPL-1689633601', 'Kamis', '08.00-09.30', '1', 6, 23, 1, 37, 5, 9),
(31, 'MPL-1689633843', 'Selasa, Kamis', '11.00 - 12.30, 12.30 - 14.00', '3, 4', 6, 24, 1, 31, 5, 9),
(32, 'MPL-1691479497', 'Senin dan Rabu', '15.30 - 17.00', '6', 6, 34, 1, 76, 5, 9),
(34, 'MPL-1691547983', 'Senin dan Selasa', '08.00 - 09.30', '1', 6, 37, 1, 79, 4, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mkelas`
--

CREATE TABLE `tb_mkelas` (
  `id_mkelas` int(11) NOT NULL,
  `kd_kelas` varchar(40) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mkelas`
--

INSERT INTO `tb_mkelas` (`id_mkelas`, `kd_kelas`, `nama_kelas`) VALUES
(30, 'KL-043432', 'ALPRO 2 Kel.1 (S1/TI/II/2/PA)'),
(31, 'KL-043433', 'SISTEM BASIS DATA 1 Kel.1 (S1/TI/II/2/PA)'),
(32, 'KL-1687751974', 'Pemrograman Web Kel.1 (S1/TI/IV/2/PA)'),
(33, 'KL-1687752554', 'ALPRO 2 Kel.2 (S1/TI/II/2/PB)'),
(34, 'KL-1687755767', 'ALPRO 2 Kel.3 (S1/TI/II/2/PB)'),
(35, 'KL-1687757908', 'Pemrograman Web Kel.2 (S1/TI/IV/PB)'),
(36, 'KL-1688983224', 'SISTEM OPERASI Kel.1 (S1/TI/II/1/M)'),
(37, 'KL-1689632844', 'SISTEM OPERASI Kel.1 (S1/TI/II/1/PA)'),
(38, 'KL-1689632902', 'STRUKTUR DATA Kel.1 (S1/TI/II/1/PA)'),
(39, 'KL-1691414788', 'SISTEM TERTANAM Kel.1 (S1/TI/VI/2/PA)'),
(40, 'KL-1691414859', 'SISTEM TERTANAM Kel.2 (S1/TI/VI/2/PA)'),
(41, 'KL-1691414871', 'SISTEM TERTANAM Kel.3 (S1/TI/VI/2/PA)'),
(42, 'KL-1691414886', 'SISTEM TERTANAM Kel.4 (S1/TI/VI/2/PB)'),
(43, 'KL-1691414907', 'SISTEM TERTANAM Kel.5 (S1/TI/VI/2/PB)'),
(44, 'KL-1691414914', 'SISTEM TERTANAM Kel.6 (S1/TI/VI/2/PB)'),
(45, 'KL-1691414925', 'SISTEM TERTANAM Kel.1 (S1/TI/VI/2/M)'),
(46, 'KL-1691414977', 'SISTEM TERTANAM Kel.2 (S1/TI/VI/2/M)'),
(48, 'KL-1691415080', 'Pemrograman Web Kel.3 (S1/TI/IV/PB)'),
(49, 'KL-1691415125', 'Pemrograman Web Kel.1 (S1/TI/IV/M)'),
(50, 'KL-1691415211', 'SISTEM OPERASI Kel.2 (S1/TI/II/1/PB)'),
(51, 'KL-1691415265', 'SISTEM OPERASI Kel.3 (S1/TI/II/1/PB)'),
(52, 'KL-1691415274', 'JARINGAN KOMPUTER TERAPAN Kel.1 (S1/TI/VI/2/P)'),
(53, 'KL-1691415339', 'JARINGAN KOMPUTER TERAPAN Kel.1 (S1/TI/VI/2/M)'),
(54, 'KL-1691415348', 'ALPRO 2 Kel.1 (S1/TI/II/2/M)'),
(55, 'KL-1691415522', 'SISTEM BASIS DATA 1 Kel.2 (S1/TI/II/2/PB)'),
(56, 'KL-1691415552', 'SISTEM BASIS DATA 1 Kel.3 (S1/TI/II/2/PB)'),
(57, 'KL-1691415560', 'SISTEM BASIS DATA 1 Kel.1 (S1/TI/II/2/M)'),
(58, 'KL-1691415582', 'STRUKTUR DATA Kel.2 (S1/TI/II/1/PB)'),
(59, 'KL-1691415736', 'STRUKTUR DATA Kel.3 (S1/TI/II/1/PB)'),
(60, 'KL-1691415747', '	STRUKTUR DATA Kel.1 (S1/TI/II/1/M)'),
(61, 'KL-1691415763', 'SISTEM MULTIMEDIA Kel.1 (S1/TI/IV/2/PA)'),
(62, 'KL-1691415854', 'SISTEM MULTIMEDIA Kel.2 (S1/TI/IV/2/PB)'),
(63, 'KL-1691415868', 'SISTEM MULTIMEDIA Kel.3 (S1/TI/IV/2/PB)'),
(64, 'KL-1691415875', 'SISTEM MULTIMEDIA Kel.4 (S1/TI/IV/2/PB)'),
(65, 'KL-1691415882', 'SISTEM MULTIMEDIA Kel.1 (S1/TI/IV/2/M)'),
(66, 'KL-1691476117', 'JARKOM Kel.1 (S1/TI/IV/2/PA)'),
(67, 'KL-1691476179', 'JARKOM Kel.2 (S1/TI/IV/2/PB)'),
(68, 'KL-1691476196', 'JARKOM Kel.3 (S1/TI/IV/2/PB)'),
(69, 'KL-1691476217', 'JARKOM Kel.4 (S1/TI/IV/2/PB)'),
(70, 'KL-1691476225', 'JARKOM Kel.1 (S1/TI/IV/2/M)'),
(71, 'KL-1691476241', 'KECERDASAN BUATAN Kel.1 (S1/TI/IV/2/PA)'),
(72, 'KL-1691476284', 'KECERDASAN BUATAN Kel.2 (S1/TI/IV/2/PB)'),
(73, 'KL-1691476294', 'KECERDASAN BUATAN Kel.3 (S1/TI/IV/2/PB)'),
(74, 'KL-1691476303', 'KECERDASAN BUATAN Kel.4 (S1/TI/IV/2/PB)'),
(75, 'KL-1691476309', 'KECERDASAN BUATAN Kel.1 (S1/TI/IV/2/M)'),
(76, 'KL-1691476339', 'PEMROGRAMAN ILMU DATA Kel.1 (S1/TI/VI/2/PA)'),
(77, 'KL-1691476382', 'PEMROGRAMAN & DESAIN PERMAINAN Kel.1 (S1/TI/VI/2/PA)'),
(78, 'KL-1691547150', 'STRUTUR DATA Kel.2 (S1/SI/II/1/PB)'),
(79, 'KL-1691547821', 'Pemrograman Web Kel.1 (S1/SI/V/1/PA)');

-- --------------------------------------------------------

--
-- Table structure for table `tb_semester`
--

CREATE TABLE `tb_semester` (
  `id_semester` int(11) NOT NULL,
  `semester` varchar(45) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_semester`
--

INSERT INTO `tb_semester` (`id_semester`, `semester`, `status`) VALUES
(4, 'Ganjil', 0),
(5, 'Genap', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_staff`
--

CREATE TABLE `tb_staff` (
  `id_staff` int(11) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `nama_staff` varchar(120) NOT NULL,
  `email` varchar(65) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_staff`
--

INSERT INTO `tb_staff` (`id_staff`, `nip`, `nama_staff`, `email`, `password`, `foto`, `status`) VALUES
(3, '001', 'Ahmad Fajri, S.Kom., M.Kom.', 'ahmadfajri@wicida.ac.id', 'e193a01ecf8d30ad0affefd332ce934e32ffce72', 'kepala.png', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tb_thajaran`
--

CREATE TABLE `tb_thajaran` (
  `id_thajaran` int(11) NOT NULL,
  `tahun_ajaran` varchar(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_thajaran`
--

INSERT INTO `tb_thajaran` (`id_thajaran`, `tahun_ajaran`, `status`) VALUES
(7, '2019/2020', 0),
(8, '2020/2021', 0),
(9, '2022/2023', 1);

-- --------------------------------------------------------

--
-- Table structure for table `_logabsensi`
--

CREATE TABLE `_logabsensi` (
  `id_presensi` int(11) NOT NULL,
  `id_mengajar` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `tgl_absen` date NOT NULL,
  `ket` enum('H','I','S','T','A','C') NOT NULL,
  `pertemuan_ke` varchar(30) NOT NULL,
  `materi` varchar(100) NOT NULL,
  `kode_aslab` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_logabsensi`
--

INSERT INTO `_logabsensi` (`id_presensi`, `id_mengajar`, `id_mahasiswa`, `tgl_absen`, `ket`, `pertemuan_ke`, `materi`, `kode_aslab`) VALUES
(66, 27, 58, '2023-04-04', 'A', '1', 'Install Ubuntu 9.10', 'MC,FZ,FO'),
(67, 27, 59, '2023-04-04', 'H', '1', 'Install Ubuntu 9.10', 'MC,FZ,FO'),
(68, 27, 60, '2023-04-04', 'H', '1', 'Install Ubuntu 9.10', 'MC,FZ,FO'),
(69, 27, 61, '2023-04-04', 'H', '1', 'Install Ubuntu 9.10', 'MC,FZ,FO'),
(70, 27, 62, '2023-04-04', 'H', '1', 'Install Ubuntu 9.10', 'MC,FZ,FO'),
(71, 27, 63, '2023-04-04', 'H', '1', 'Install Ubuntu 9.10', 'MC,FZ,FO'),
(72, 27, 64, '2023-04-04', 'H', '1', 'Install Ubuntu 9.10', 'MC,FZ,FO'),
(73, 27, 65, '2023-04-04', 'H', '1', 'Install Ubuntu 9.10', 'MC,FZ,FO'),
(74, 27, 66, '2023-04-04', 'H', '1', 'Install Ubuntu 9.10', 'MC,FZ,FO'),
(75, 27, 67, '2023-04-04', 'H', '1', 'Install Ubuntu 9.10', 'MC,FZ,FO'),
(76, 27, 68, '2023-04-04', 'H', '1', 'Install Ubuntu 9.10', 'MC,FZ,FO'),
(77, 27, 69, '2023-04-04', 'H', '1', 'Install Ubuntu 9.10', 'MC,FZ,FO'),
(78, 27, 70, '2023-04-04', 'A', '1', 'Install Ubuntu 9.10', 'MC,FZ,FO'),
(79, 27, 58, '2023-04-11', 'A', '2', 'Perintah dasar SO Linux', 'MC,FZ,FO'),
(80, 27, 59, '2023-04-11', 'H', '2', 'Perintah dasar SO Linux', 'MC,FZ,FO'),
(81, 27, 60, '2023-04-11', 'I', '2', 'Perintah dasar SO Linux', 'MC,FZ,FO'),
(82, 27, 61, '2023-04-11', 'H', '2', 'Perintah dasar SO Linux', 'MC,FZ,FO'),
(83, 27, 62, '2023-04-11', 'A', '2', 'Perintah dasar SO Linux', 'MC,FZ,FO'),
(84, 27, 63, '2023-04-11', 'H', '2', 'Perintah dasar SO Linux', 'MC,FZ,FO'),
(85, 27, 64, '2023-04-11', 'H', '2', 'Perintah dasar SO Linux', 'MC,FZ,FO'),
(86, 27, 65, '2023-04-11', 'A', '2', 'Perintah dasar SO Linux', 'MC,FZ,FO'),
(87, 27, 66, '2023-04-11', 'H', '2', 'Perintah dasar SO Linux', 'MC,FZ,FO'),
(88, 27, 67, '2023-04-11', 'H', '2', 'Perintah dasar SO Linux', 'MC,FZ,FO'),
(89, 27, 68, '2023-04-11', 'H', '2', 'Perintah dasar SO Linux', 'MC,FZ,FO'),
(90, 27, 69, '2023-04-11', 'H', '2', 'Perintah dasar SO Linux', 'MC,FZ,FO'),
(91, 27, 70, '2023-04-11', 'I', '2', 'Perintah dasar SO Linux', 'MC,FZ,FO'),
(92, 27, 58, '2023-05-02', 'A', '3', 'Sistem File', 'FZ,FO,HF'),
(93, 27, 59, '2023-05-02', 'H', '3', 'Sistem File', 'FZ,FO,HF'),
(94, 27, 60, '2023-05-02', 'I', '3', 'Sistem File', 'FZ,FO,HF'),
(95, 27, 61, '2023-05-02', 'H', '3', 'Sistem File', 'FZ,FO,HF'),
(96, 27, 62, '2023-05-02', 'A', '3', 'Sistem File', 'FZ,FO,HF'),
(97, 27, 63, '2023-05-02', 'H', '3', 'Sistem File', 'FZ,FO,HF'),
(98, 27, 64, '2023-05-02', 'H', '3', 'Sistem File', 'FZ,FO,HF'),
(99, 27, 65, '2023-05-02', 'H', '3', 'Sistem File', 'FZ,FO,HF'),
(100, 27, 66, '2023-05-02', 'H', '3', 'Sistem File', 'FZ,FO,HF'),
(101, 27, 67, '2023-05-02', 'H', '3', 'Sistem File', 'FZ,FO,HF'),
(102, 27, 68, '2023-05-02', 'A', '3', 'Sistem File', 'FZ,FO,HF'),
(103, 27, 69, '2023-05-02', 'H', '3', 'Sistem File', 'FZ,FO,HF'),
(104, 27, 70, '2023-05-02', 'H', '3', 'Sistem File', 'FZ,FO,HF'),
(105, 27, 58, '2023-05-09', 'A', '4', 'Konfigurasi Linux', 'FZ,FO,HF'),
(106, 27, 59, '2023-05-09', 'H', '4', 'Konfigurasi Linux', 'FZ,FO,HF'),
(107, 27, 60, '2023-05-09', 'A', '4', 'Konfigurasi Linux', 'FZ,FO,HF'),
(108, 27, 61, '2023-05-09', 'H', '4', 'Konfigurasi Linux', 'FZ,FO,HF'),
(109, 27, 62, '2023-05-09', 'I', '4', 'Konfigurasi Linux', 'FZ,FO,HF'),
(110, 27, 63, '2023-05-09', 'A', '4', 'Konfigurasi Linux', 'FZ,FO,HF'),
(111, 27, 64, '2023-05-09', 'H', '4', 'Konfigurasi Linux', 'FZ,FO,HF'),
(112, 27, 65, '2023-05-09', 'H', '4', 'Konfigurasi Linux', 'FZ,FO,HF'),
(113, 27, 66, '2023-05-09', 'A', '4', 'Konfigurasi Linux', 'FZ,FO,HF'),
(114, 27, 67, '2023-05-09', 'H', '4', 'Konfigurasi Linux', 'FZ,FO,HF'),
(115, 27, 68, '2023-05-09', 'H', '4', 'Konfigurasi Linux', 'FZ,FO,HF'),
(116, 27, 69, '2023-05-09', 'H', '4', 'Konfigurasi Linux', 'FZ,FO,HF'),
(117, 27, 70, '2023-05-09', 'H', '4', 'Konfigurasi Linux', 'FZ,FO,HF'),
(118, 27, 58, '2023-05-16', 'A', '5', 'Utilitas Linux', 'FZ,FO,HF'),
(119, 27, 59, '2023-05-16', 'H', '5', 'Utilitas Linux', 'FZ,FO,HF'),
(120, 27, 60, '2023-05-16', 'A', '5', 'Utilitas Linux', 'FZ,FO,HF'),
(121, 27, 61, '2023-05-16', 'H', '5', 'Utilitas Linux', 'FZ,FO,HF'),
(122, 27, 62, '2023-05-16', 'H', '5', 'Utilitas Linux', 'FZ,FO,HF'),
(123, 27, 63, '2023-05-16', 'H', '5', 'Utilitas Linux', 'FZ,FO,HF'),
(124, 27, 64, '2023-05-16', 'H', '5', 'Utilitas Linux', 'FZ,FO,HF'),
(125, 27, 65, '2023-05-16', 'H', '5', 'Utilitas Linux', 'FZ,FO,HF'),
(126, 27, 66, '2023-05-16', 'H', '5', 'Utilitas Linux', 'FZ,FO,HF'),
(127, 27, 67, '2023-05-16', 'H', '5', 'Utilitas Linux', 'FZ,FO,HF'),
(128, 27, 68, '2023-05-16', 'I', '5', 'Utilitas Linux', 'FZ,FO,HF'),
(129, 27, 69, '2023-05-16', 'A', '5', 'Utilitas Linux', 'FZ,FO,HF'),
(130, 27, 70, '2023-05-16', 'A', '5', 'Utilitas Linux', 'FZ,FO,HF'),
(131, 27, 58, '2023-05-23', 'A', '6', 'Proses Input/Output', 'FZ,FO'),
(132, 27, 59, '2023-05-23', 'H', '6', 'Proses Input/Output', 'FZ,FO'),
(133, 27, 60, '2023-05-23', 'I', '6', 'Proses Input/Output', 'FZ,FO'),
(134, 27, 61, '2023-05-23', 'H', '6', 'Proses Input/Output', 'FZ,FO'),
(135, 27, 62, '2023-05-23', 'A', '6', 'Proses Input/Output', 'FZ,FO'),
(136, 27, 63, '2023-05-23', 'A', '6', 'Proses Input/Output', 'FZ,FO'),
(137, 27, 64, '2023-05-23', 'H', '6', 'Proses Input/Output', 'FZ,FO'),
(138, 27, 65, '2023-05-23', 'H', '6', 'Proses Input/Output', 'FZ,FO'),
(139, 27, 66, '2023-05-23', 'A', '6', 'Proses Input/Output', 'FZ,FO'),
(140, 27, 67, '2023-05-23', 'H', '6', 'Proses Input/Output', 'FZ,FO'),
(141, 27, 68, '2023-05-23', 'H', '6', 'Proses Input/Output', 'FZ,FO'),
(142, 27, 69, '2023-05-23', 'A', '6', 'Proses Input/Output', 'FZ,FO'),
(143, 27, 70, '2023-05-23', 'H', '6', 'Proses Input/Output', 'FZ,FO'),
(144, 27, 58, '2023-05-30', 'A', '7', 'Manajemen Proses', 'FO,HF'),
(145, 27, 59, '2023-05-30', 'H', '7', 'Manajemen Proses', 'FO,HF'),
(146, 27, 60, '2023-05-30', 'I', '7', 'Manajemen Proses', 'FO,HF'),
(147, 27, 61, '2023-05-30', 'H', '7', 'Manajemen Proses', 'FO,HF'),
(148, 27, 62, '2023-05-30', 'H', '7', 'Manajemen Proses', 'FO,HF'),
(149, 27, 63, '2023-05-30', 'A', '7', 'Manajemen Proses', 'FO,HF'),
(150, 27, 64, '2023-05-30', 'H', '7', 'Manajemen Proses', 'FO,HF'),
(151, 27, 65, '2023-05-30', 'H', '7', 'Manajemen Proses', 'FO,HF'),
(152, 27, 66, '2023-05-30', 'S', '7', 'Manajemen Proses', 'FO,HF'),
(153, 27, 67, '2023-05-30', 'H', '7', 'Manajemen Proses', 'FO,HF'),
(154, 27, 68, '2023-05-30', 'A', '7', 'Manajemen Proses', 'FO,HF'),
(155, 27, 69, '2023-05-30', 'H', '7', 'Manajemen Proses', 'FO,HF'),
(156, 27, 70, '2023-05-30', 'I', '7', 'Manajemen Proses', 'FO,HF'),
(157, 27, 58, '2023-07-10', 'A', '8', 'Pemrograman Shell 1', 'FZ,FO,HF'),
(158, 27, 59, '2023-07-10', 'H', '8', 'Pemrograman Shell 1', 'FZ,FO,HF'),
(159, 27, 60, '2023-07-10', 'A', '8', 'Pemrograman Shell 1', 'FZ,FO,HF'),
(160, 27, 61, '2023-07-10', 'H', '8', 'Pemrograman Shell 1', 'FZ,FO,HF'),
(161, 27, 62, '2023-07-10', 'H', '8', 'Pemrograman Shell 1', 'FZ,FO,HF'),
(162, 27, 63, '2023-07-10', 'A', '8', 'Pemrograman Shell 1', 'FZ,FO,HF'),
(163, 27, 64, '2023-07-10', 'H', '8', 'Pemrograman Shell 1', 'FZ,FO,HF'),
(164, 27, 65, '2023-07-10', 'H', '8', 'Pemrograman Shell 1', 'FZ,FO,HF'),
(165, 27, 66, '2023-07-10', 'H', '8', 'Pemrograman Shell 1', 'FZ,FO,HF'),
(166, 27, 67, '2023-07-10', 'A', '8', 'Pemrograman Shell 1', 'FZ,FO,HF'),
(167, 27, 68, '2023-07-10', 'A', '8', 'Pemrograman Shell 1', 'FZ,FO,HF'),
(168, 27, 69, '2023-07-10', 'H', '8', 'Pemrograman Shell 1', 'FZ,FO,HF'),
(169, 27, 70, '2023-07-10', 'H', '8', 'Pemrograman Shell 1', 'FZ,FO,HF'),
(170, 27, 58, '2023-06-13', 'A', '9', 'Pemrograman Shell 2', 'FO,HF'),
(171, 27, 59, '2023-06-13', 'H', '9', 'Pemrograman Shell 2', 'FO,HF'),
(172, 27, 60, '2023-06-13', 'A', '9', 'Pemrograman Shell 2', 'FO,HF'),
(173, 27, 61, '2023-06-13', 'A', '9', 'Pemrograman Shell 2', 'FO,HF'),
(174, 27, 62, '2023-06-13', 'A', '9', 'Pemrograman Shell 2', 'FO,HF'),
(175, 27, 63, '2023-06-13', 'A', '9', 'Pemrograman Shell 2', 'FO,HF'),
(176, 27, 64, '2023-06-13', 'H', '9', 'Pemrograman Shell 2', 'FO,HF'),
(177, 27, 65, '2023-06-13', 'H', '9', 'Pemrograman Shell 2', 'FO,HF'),
(178, 27, 66, '2023-06-13', 'A', '9', 'Pemrograman Shell 2', 'FO,HF'),
(179, 27, 67, '2023-06-13', 'A', '9', 'Pemrograman Shell 2', 'FO,HF'),
(180, 27, 68, '2023-06-13', 'A', '9', 'Pemrograman Shell 2', 'FO,HF'),
(181, 27, 69, '2023-06-13', 'H', '9', 'Pemrograman Shell 2', 'FO,HF'),
(182, 27, 70, '2023-06-13', 'H', '9', 'Pemrograman Shell 2', 'FO,HF'),
(183, 27, 58, '2023-06-20', 'A', '10', 'Lanjut Pemrograman Shell 2', 'FZ,DF'),
(184, 27, 59, '2023-06-20', 'H', '10', 'Lanjut Pemrograman Shell 2', 'FZ,DF'),
(185, 27, 60, '2023-06-20', 'A', '10', 'Lanjut Pemrograman Shell 2', 'FZ,DF'),
(186, 27, 61, '2023-06-20', 'H', '10', 'Lanjut Pemrograman Shell 2', 'FZ,DF'),
(187, 27, 62, '2023-06-20', 'A', '10', 'Lanjut Pemrograman Shell 2', 'FZ,DF'),
(188, 27, 63, '2023-06-20', 'A', '10', 'Lanjut Pemrograman Shell 2', 'FZ,DF'),
(189, 27, 64, '2023-06-20', 'H', '10', 'Lanjut Pemrograman Shell 2', 'FZ,DF'),
(190, 27, 65, '2023-06-20', 'H', '10', 'Lanjut Pemrograman Shell 2', 'FZ,DF'),
(191, 27, 66, '2023-06-20', 'H', '10', 'Lanjut Pemrograman Shell 2', 'FZ,DF'),
(192, 27, 67, '2023-06-20', 'H', '10', 'Lanjut Pemrograman Shell 2', 'FZ,DF'),
(193, 27, 68, '2023-06-20', 'A', '10', 'Lanjut Pemrograman Shell 2', 'FZ,DF'),
(194, 27, 69, '2023-06-20', 'H', '10', 'Lanjut Pemrograman Shell 2', 'FZ,DF'),
(195, 27, 70, '2023-06-20', 'H', '10', 'Lanjut Pemrograman Shell 2', 'FZ,DF'),
(196, 32, 109, '2023-04-03', 'H', '1', 'Data Understanding', 'RN,RF'),
(197, 32, 110, '2023-04-03', 'H', '1', 'Data Understanding', 'RN,RF'),
(198, 32, 111, '2023-04-03', 'H', '1', 'Data Understanding', 'RN,RF'),
(199, 32, 112, '2023-04-03', 'H', '1', 'Data Understanding', 'RN,RF'),
(200, 32, 113, '2023-04-03', 'H', '1', 'Data Understanding', 'RN,RF'),
(201, 32, 114, '2023-04-03', 'H', '1', 'Data Understanding', 'RN,RF'),
(202, 32, 115, '2023-04-03', 'H', '1', 'Data Understanding', 'RN,RF'),
(203, 32, 116, '2023-04-03', 'H', '1', 'Data Understanding', 'RN,RF'),
(204, 32, 117, '2023-04-03', 'A', '1', 'Data Understanding', 'RN,RF'),
(205, 32, 118, '2023-04-03', 'A', '1', 'Data Understanding', 'RN,RF'),
(206, 32, 119, '2023-04-03', 'H', '1', 'Data Understanding', 'RN,RF'),
(207, 32, 120, '2023-04-03', 'H', '1', 'Data Understanding', 'RN,RF'),
(208, 32, 121, '2023-04-03', 'H', '1', 'Data Understanding', 'RN,RF'),
(209, 32, 122, '2023-04-03', 'H', '1', 'Data Understanding', 'RN,RF'),
(210, 32, 123, '2023-04-03', 'H', '1', 'Data Understanding', 'RN,RF'),
(211, 32, 124, '2023-04-03', 'H', '1', 'Data Understanding', 'RN,RF'),
(212, 32, 125, '2023-04-03', 'H', '1', 'Data Understanding', 'RN,RF'),
(213, 32, 126, '2023-04-03', 'H', '1', 'Data Understanding', 'RN,RF'),
(214, 32, 127, '2023-04-03', 'H', '1', 'Data Understanding', 'RN,RF'),
(215, 32, 128, '2023-04-03', 'H', '1', 'Data Understanding', 'RN,RF'),
(216, 32, 129, '2023-04-03', 'H', '1', 'Data Understanding', 'RN,RF'),
(217, 32, 130, '2023-04-03', 'H', '1', 'Data Understanding', 'RN,RF'),
(218, 32, 131, '2023-04-03', 'H', '1', 'Data Understanding', 'RN,RF'),
(219, 32, 132, '2023-04-03', 'H', '1', 'Data Understanding', 'RN,RF'),
(220, 32, 133, '2023-04-03', 'H', '1', 'Data Understanding', 'RN,RF'),
(221, 32, 134, '2023-04-03', 'H', '1', 'Data Understanding', 'RN,RF'),
(222, 32, 135, '2023-04-03', 'H', '1', 'Data Understanding', 'RN,RF'),
(223, 32, 136, '2023-04-03', 'H', '1', 'Data Understanding', 'RN,RF'),
(224, 32, 137, '2023-04-03', 'H', '1', 'Data Understanding', 'RN,RF'),
(225, 32, 138, '2023-04-03', 'H', '1', 'Data Understanding', 'RN,RF'),
(226, 32, 139, '2023-04-03', 'H', '1', 'Data Understanding', 'RN,RF'),
(227, 32, 109, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(228, 32, 110, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(229, 32, 111, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(230, 32, 112, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(231, 32, 113, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(232, 32, 114, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(233, 32, 115, '2023-04-05', 'A', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(234, 32, 116, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(235, 32, 117, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(236, 32, 118, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(237, 32, 119, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(238, 32, 120, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(239, 32, 121, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(240, 32, 122, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(241, 32, 123, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(242, 32, 124, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(243, 32, 125, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(244, 32, 126, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(245, 32, 127, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(246, 32, 128, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(247, 32, 129, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(248, 32, 130, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(249, 32, 131, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(250, 32, 132, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(251, 32, 133, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(252, 32, 134, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(253, 32, 135, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(254, 32, 136, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(255, 32, 137, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(256, 32, 138, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(257, 32, 139, '2023-04-05', 'H', '2', 'VISUALISASI DATA', 'SP,RN,RF'),
(289, 32, 109, '2023-04-10', 'H', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(290, 32, 110, '2023-04-10', 'I', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(291, 32, 111, '2023-04-10', 'H', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(292, 32, 112, '2023-04-10', 'H', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(293, 32, 113, '2023-04-10', 'H', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(294, 32, 114, '2023-04-10', 'H', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(295, 32, 115, '2023-04-10', 'A', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(296, 32, 116, '2023-04-10', 'H', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(297, 32, 117, '2023-04-10', 'H', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(298, 32, 118, '2023-04-10', 'H', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(299, 32, 119, '2023-04-10', 'H', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(300, 32, 120, '2023-04-10', 'H', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(301, 32, 121, '2023-04-10', 'H', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(302, 32, 122, '2023-04-10', 'H', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(303, 32, 123, '2023-04-10', 'H', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(304, 32, 124, '2023-04-10', 'H', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(305, 32, 125, '2023-04-10', 'H', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(306, 32, 126, '2023-04-10', 'H', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(307, 32, 127, '2023-04-10', 'H', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(308, 32, 128, '2023-04-10', 'H', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(309, 32, 129, '2023-04-10', 'H', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(310, 32, 130, '2023-04-10', 'H', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(311, 32, 131, '2023-04-10', 'H', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(312, 32, 132, '2023-04-10', 'H', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(313, 32, 133, '2023-04-10', 'H', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(314, 32, 134, '2023-04-10', 'H', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(315, 32, 135, '2023-04-10', 'H', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(316, 32, 136, '2023-04-10', 'H', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(317, 32, 137, '2023-04-10', 'H', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(318, 32, 138, '2023-04-10', 'H', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(319, 32, 139, '2023-04-10', 'H', '3', 'VISUALISASI DATA 2', 'RN,RF'),
(320, 32, 109, '2023-04-12', 'H', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(321, 32, 110, '2023-04-12', 'H', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(322, 32, 111, '2023-04-12', 'H', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(323, 32, 112, '2023-04-12', 'H', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(324, 32, 113, '2023-04-12', 'H', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(325, 32, 114, '2023-04-12', 'H', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(326, 32, 115, '2023-04-12', 'A', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(327, 32, 116, '2023-04-12', 'H', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(328, 32, 117, '2023-04-12', 'H', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(329, 32, 118, '2023-04-12', 'H', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(330, 32, 119, '2023-04-12', 'H', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(331, 32, 120, '2023-04-12', 'H', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(332, 32, 121, '2023-04-12', 'H', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(333, 32, 122, '2023-04-12', 'H', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(334, 32, 123, '2023-04-12', 'I', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(335, 32, 124, '2023-04-12', 'H', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(336, 32, 125, '2023-04-12', 'H', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(337, 32, 126, '2023-04-12', 'H', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(338, 32, 127, '2023-04-12', 'H', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(339, 32, 128, '2023-04-12', 'H', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(340, 32, 129, '2023-04-12', 'H', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(341, 32, 130, '2023-04-12', 'H', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(342, 32, 131, '2023-04-12', 'H', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(343, 32, 132, '2023-04-12', 'H', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(344, 32, 133, '2023-04-12', 'H', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(345, 32, 134, '2023-04-12', 'H', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(346, 32, 135, '2023-04-12', 'H', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(347, 32, 136, '2023-04-12', 'H', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(348, 32, 137, '2023-04-12', 'H', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(349, 32, 138, '2023-04-12', 'H', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(350, 32, 139, '2023-04-12', 'H', '4', 'VISUALISASI DATA 3', 'SP,RN,RF'),
(351, 32, 109, '2023-05-03', 'H', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(352, 32, 110, '2023-05-03', 'H', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(353, 32, 111, '2023-05-03', 'H', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(354, 32, 112, '2023-05-03', 'H', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(355, 32, 113, '2023-05-03', 'H', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(356, 32, 114, '2023-05-03', 'S', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(357, 32, 115, '2023-05-03', 'A', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(358, 32, 116, '2023-05-03', 'H', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(359, 32, 117, '2023-05-03', 'H', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(360, 32, 118, '2023-05-03', 'H', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(361, 32, 119, '2023-05-03', 'H', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(362, 32, 120, '2023-05-03', 'H', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(363, 32, 121, '2023-05-03', 'H', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(364, 32, 122, '2023-05-03', 'H', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(365, 32, 123, '2023-05-03', 'H', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(366, 32, 124, '2023-05-03', 'H', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(367, 32, 125, '2023-05-03', 'H', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(368, 32, 126, '2023-05-03', 'H', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(369, 32, 127, '2023-05-03', 'H', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(370, 32, 128, '2023-05-03', 'H', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(371, 32, 129, '2023-05-03', 'H', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(372, 32, 130, '2023-05-03', 'H', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(373, 32, 131, '2023-05-03', 'H', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(374, 32, 132, '2023-05-03', 'H', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(375, 32, 133, '2023-05-03', 'H', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(376, 32, 134, '2023-05-03', 'H', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(377, 32, 135, '2023-05-03', 'H', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(378, 32, 136, '2023-05-03', 'H', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(379, 32, 137, '2023-05-03', 'A', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(380, 32, 138, '2023-05-03', 'H', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(381, 32, 139, '2023-05-03', 'H', '5', 'LANJUT VISUALISASI DATA 3', 'SP,RN,RF'),
(382, 32, 109, '2023-05-08', 'H', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(383, 32, 110, '2023-05-08', 'H', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(384, 32, 111, '2023-05-08', 'H', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(385, 32, 112, '2023-05-08', 'H', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(386, 32, 113, '2023-05-08', 'H', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(387, 32, 114, '2023-05-08', 'A', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(388, 32, 115, '2023-05-08', 'A', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(389, 32, 116, '2023-05-08', 'H', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(390, 32, 117, '2023-05-08', 'H', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(391, 32, 118, '2023-05-08', 'H', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(392, 32, 119, '2023-05-08', 'H', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(393, 32, 120, '2023-05-08', 'H', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(394, 32, 121, '2023-05-08', 'S', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(395, 32, 122, '2023-05-08', 'A', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(396, 32, 123, '2023-05-08', 'H', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(397, 32, 124, '2023-05-08', 'H', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(398, 32, 125, '2023-05-08', 'H', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(399, 32, 126, '2023-05-08', 'H', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(400, 32, 127, '2023-05-08', 'I', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(401, 32, 128, '2023-05-08', 'H', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(402, 32, 129, '2023-05-08', 'H', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(403, 32, 130, '2023-05-08', 'H', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(404, 32, 131, '2023-05-08', 'H', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(405, 32, 132, '2023-05-08', 'H', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(406, 32, 133, '2023-05-08', 'H', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(407, 32, 134, '2023-05-08', 'H', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(408, 32, 135, '2023-05-08', 'H', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(409, 32, 136, '2023-05-08', 'H', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(410, 32, 137, '2023-05-08', 'A', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(411, 32, 138, '2023-05-08', 'H', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(412, 32, 139, '2023-05-08', 'H', '6', 'VISUALISASI DATA 4', 'RN,RF'),
(413, 32, 109, '2023-05-10', 'H', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(414, 32, 110, '2023-05-10', 'H', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(415, 32, 111, '2023-05-10', 'H', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(416, 32, 112, '2023-05-10', 'H', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(417, 32, 113, '2023-05-10', 'H', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(418, 32, 114, '2023-05-10', 'H', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(419, 32, 115, '2023-05-10', 'A', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(420, 32, 116, '2023-05-10', 'H', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(421, 32, 117, '2023-05-10', 'H', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(422, 32, 118, '2023-05-10', 'A', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(423, 32, 119, '2023-05-10', 'H', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(424, 32, 120, '2023-05-10', 'H', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(425, 32, 121, '2023-05-10', 'S', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(426, 32, 122, '2023-05-10', 'H', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(427, 32, 123, '2023-05-10', 'H', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(428, 32, 124, '2023-05-10', 'H', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(429, 32, 125, '2023-05-10', 'H', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(430, 32, 126, '2023-05-10', 'H', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(431, 32, 127, '2023-05-10', 'I', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(432, 32, 128, '2023-05-10', 'A', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(433, 32, 129, '2023-05-10', 'H', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(434, 32, 130, '2023-05-10', 'H', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(435, 32, 131, '2023-05-10', 'H', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(436, 32, 132, '2023-05-10', 'H', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(437, 32, 133, '2023-05-10', 'H', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(438, 32, 134, '2023-05-10', 'H', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(439, 32, 135, '2023-05-10', 'H', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(440, 32, 136, '2023-05-10', 'H', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(441, 32, 137, '2023-05-10', 'A', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(442, 32, 138, '2023-05-10', 'H', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(443, 32, 139, '2023-05-10', 'H', '7', 'LANJUT VISUALISASI DATA 4', 'RN,RF'),
(444, 32, 109, '2023-05-15', 'H', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(445, 32, 110, '2023-05-15', 'H', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(446, 32, 111, '2023-05-15', 'H', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(447, 32, 112, '2023-05-15', 'H', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(448, 32, 113, '2023-05-15', 'H', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(449, 32, 114, '2023-05-15', 'H', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(450, 32, 115, '2023-05-15', 'H', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(451, 32, 116, '2023-05-15', 'H', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(452, 32, 117, '2023-05-15', 'H', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(453, 32, 118, '2023-05-15', 'H', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(454, 32, 119, '2023-05-15', 'H', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(455, 32, 120, '2023-05-15', 'H', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(456, 32, 121, '2023-05-15', 'H', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(457, 32, 122, '2023-05-15', 'A', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(458, 32, 123, '2023-05-15', 'H', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(459, 32, 124, '2023-05-15', 'H', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(460, 32, 125, '2023-05-15', 'A', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(461, 32, 126, '2023-05-15', 'H', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(462, 32, 127, '2023-05-15', 'H', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(463, 32, 128, '2023-05-15', 'H', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(464, 32, 129, '2023-05-15', 'H', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(465, 32, 130, '2023-05-15', 'H', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(466, 32, 131, '2023-05-15', 'H', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(467, 32, 132, '2023-05-15', 'A', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(468, 32, 133, '2023-05-15', 'H', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(469, 32, 134, '2023-05-15', 'H', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(470, 32, 135, '2023-05-15', 'H', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(471, 32, 136, '2023-05-15', 'H', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(472, 32, 137, '2023-05-15', 'A', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(473, 32, 138, '2023-05-15', 'H', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(474, 32, 139, '2023-05-15', 'H', '8', 'VISUALISASI DATA 5', 'RN,RF'),
(475, 32, 109, '2023-05-17', 'H', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(476, 32, 110, '2023-05-17', 'I', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(477, 32, 111, '2023-05-17', 'H', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(478, 32, 112, '2023-05-17', 'A', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(479, 32, 113, '2023-05-17', 'H', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(480, 32, 114, '2023-05-17', 'H', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(481, 32, 115, '2023-05-17', 'A', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(482, 32, 116, '2023-05-17', 'H', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(483, 32, 117, '2023-05-17', 'H', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(484, 32, 118, '2023-05-17', 'H', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(485, 32, 119, '2023-05-17', 'H', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(486, 32, 120, '2023-05-17', 'H', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(487, 32, 121, '2023-05-17', 'H', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(488, 32, 122, '2023-05-17', 'H', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(489, 32, 123, '2023-05-17', 'H', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(490, 32, 124, '2023-05-17', 'H', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(491, 32, 125, '2023-05-17', 'H', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(492, 32, 126, '2023-05-17', 'H', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(493, 32, 127, '2023-05-17', 'H', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(494, 32, 128, '2023-05-17', 'H', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(495, 32, 129, '2023-05-17', 'H', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(496, 32, 130, '2023-05-17', 'H', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(497, 32, 131, '2023-05-17', 'H', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(498, 32, 132, '2023-05-17', 'H', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(499, 32, 133, '2023-05-17', 'H', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(500, 32, 134, '2023-05-17', 'H', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(501, 32, 135, '2023-05-17', 'H', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(502, 32, 136, '2023-05-17', 'H', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(503, 32, 137, '2023-05-17', 'A', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(504, 32, 138, '2023-05-17', 'H', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(505, 32, 139, '2023-05-17', 'H', '9', 'LANJUT VISUALISASI DATA 5', 'RN,RF'),
(506, 32, 109, '2023-05-22', 'H', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(507, 32, 110, '2023-05-22', 'H', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(508, 32, 111, '2023-05-22', 'A', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(509, 32, 112, '2023-05-22', 'H', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(510, 32, 113, '2023-05-22', 'H', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(511, 32, 114, '2023-05-22', 'H', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(512, 32, 115, '2023-05-22', 'A', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(513, 32, 116, '2023-05-22', 'H', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(514, 32, 117, '2023-05-22', 'H', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(515, 32, 118, '2023-05-22', 'A', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(516, 32, 119, '2023-05-22', 'H', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(517, 32, 120, '2023-05-22', 'H', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(518, 32, 121, '2023-05-22', 'A', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(519, 32, 122, '2023-05-22', 'H', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(520, 32, 123, '2023-05-22', 'H', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(521, 32, 124, '2023-05-22', 'H', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(522, 32, 125, '2023-05-22', 'H', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(523, 32, 126, '2023-05-22', 'H', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(524, 32, 127, '2023-05-22', 'A', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(525, 32, 128, '2023-05-22', 'H', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(526, 32, 129, '2023-05-22', 'H', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(527, 32, 130, '2023-05-22', 'H', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(528, 32, 131, '2023-05-22', 'H', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(529, 32, 132, '2023-05-22', 'A', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(530, 32, 133, '2023-05-22', 'H', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(531, 32, 134, '2023-05-22', 'H', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(532, 32, 135, '2023-05-22', 'H', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(533, 32, 136, '2023-05-22', 'H', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(534, 32, 137, '2023-05-22', 'A', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(535, 32, 138, '2023-05-22', 'H', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(536, 32, 139, '2023-05-22', 'H', '10', 'VISUALISASI DATA 6', 'RN,RF'),
(537, 32, 109, '2023-05-24', 'H', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(538, 32, 110, '2023-05-24', 'H', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(539, 32, 111, '2023-05-24', 'H', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(540, 32, 112, '2023-05-24', 'H', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(541, 32, 113, '2023-05-24', 'H', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(542, 32, 114, '2023-05-24', 'S', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(543, 32, 115, '2023-05-24', 'A', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(544, 32, 116, '2023-05-24', 'H', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(545, 32, 117, '2023-05-24', 'H', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(546, 32, 118, '2023-05-24', 'H', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(547, 32, 119, '2023-05-24', 'H', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(548, 32, 120, '2023-05-24', 'H', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(549, 32, 121, '2023-05-24', 'H', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(550, 32, 122, '2023-05-24', 'H', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(551, 32, 123, '2023-05-24', 'H', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(552, 32, 124, '2023-05-24', 'H', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(553, 32, 125, '2023-05-24', 'H', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(554, 32, 126, '2023-05-24', 'H', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(555, 32, 127, '2023-05-24', 'H', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(556, 32, 128, '2023-05-24', 'H', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(557, 32, 129, '2023-05-24', 'H', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(558, 32, 130, '2023-05-24', 'H', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(559, 32, 131, '2023-05-24', 'H', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(560, 32, 132, '2023-05-24', 'H', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(561, 32, 133, '2023-05-24', 'H', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(562, 32, 134, '2023-05-24', 'H', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(563, 32, 135, '2023-05-24', 'H', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(564, 32, 136, '2023-05-24', 'H', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(565, 32, 137, '2023-05-24', 'A', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(566, 32, 138, '2023-05-24', 'H', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(567, 32, 139, '2023-05-24', 'H', '11', 'LANJUT VISUALISASI DATA 6', 'RN,RF'),
(568, 28, 71, '2023-08-08', 'H', '1', 'asdadada', 'RN,RF'),
(569, 28, 72, '2023-08-08', 'H', '1', 'asdadada', 'RN,RF'),
(570, 28, 73, '2023-08-08', 'H', '1', 'asdadada', 'RN,RF'),
(571, 28, 74, '2023-08-08', 'H', '1', 'asdadada', 'RN,RF'),
(572, 28, 71, '2023-08-10', 'H', '2', 'adasdaddasd', 'RN,RF'),
(573, 28, 72, '2023-08-10', 'H', '2', 'adasdaddasd', 'RN,RF'),
(574, 28, 73, '2023-08-10', 'H', '2', 'adasdaddasd', 'RN,RF'),
(575, 28, 74, '2023-08-10', 'H', '2', 'adasdaddasd', 'RN,RF'),
(576, 28, 71, '2023-08-15', 'H', '3', 'adsadadadadasd', 'RN,RF'),
(577, 28, 72, '2023-08-15', 'H', '3', 'adsadadadadasd', 'RN,RF'),
(578, 28, 73, '2023-08-15', 'H', '3', 'adsadadadadasd', 'RN,RF'),
(579, 28, 74, '2023-08-15', 'H', '3', 'adsadadadadasd', 'RN,RF'),
(580, 28, 71, '2023-08-17', 'H', '4', 'sadadadsdadads', 'RN,RF'),
(581, 28, 72, '2023-08-17', 'H', '4', 'sadadadsdadads', 'RN,RF'),
(582, 28, 73, '2023-08-17', 'H', '4', 'sadadadsdadads', 'RN,RF'),
(583, 28, 74, '2023-08-17', 'H', '4', 'sadadadsdadads', 'RN,RF'),
(584, 28, 71, '2023-08-22', 'H', '5', 'asdadadadad', 'RN,RF'),
(585, 28, 72, '2023-08-22', 'H', '5', 'asdadadadad', 'RN,RF'),
(586, 28, 73, '2023-08-22', 'H', '5', 'asdadadadad', 'RN,RF'),
(587, 28, 74, '2023-08-22', 'H', '5', 'asdadadadad', 'RN,RF'),
(588, 28, 71, '2023-08-24', 'H', '6', 'asdadadadad', 'RN,RF'),
(589, 28, 72, '2023-08-24', 'H', '6', 'asdadadadad', 'RN,RF'),
(590, 28, 73, '2023-08-24', 'H', '6', 'asdadadadad', 'RN,RF'),
(591, 28, 74, '2023-08-24', 'H', '6', 'asdadadadad', 'RN,RF'),
(592, 28, 71, '2023-08-29', 'H', '7', 'asdadadadasdada', 'RN,RF'),
(593, 28, 72, '2023-08-29', 'H', '7', 'asdadadadasdada', 'RN,RF'),
(594, 28, 73, '2023-08-29', 'H', '7', 'asdadadadasdada', 'RN,RF'),
(595, 28, 74, '2023-08-29', 'H', '7', 'asdadadadasdada', 'RN,RF'),
(596, 28, 71, '2023-08-31', 'H', '8', 'sdaffdsgdgdfg', 'RN,RF'),
(597, 28, 72, '2023-08-31', 'H', '8', 'sdaffdsgdgdfg', 'RN,RF'),
(598, 28, 73, '2023-08-31', 'H', '8', 'sdaffdsgdgdfg', 'RN,RF'),
(599, 28, 74, '2023-08-31', 'H', '8', 'sdaffdsgdgdfg', 'RN,RF'),
(600, 28, 71, '2023-09-05', 'H', '9', 'aafdgdfgdfhdfhfdh', 'SP,RN,RF'),
(601, 28, 72, '2023-09-05', 'H', '9', 'aafdgdfgdfhdfhfdh', 'SP,RN,RF'),
(602, 28, 73, '2023-09-05', 'H', '9', 'aafdgdfgdfhdfhfdh', 'SP,RN,RF'),
(603, 28, 74, '2023-09-05', 'H', '9', 'aafdgdfgdfhdfhfdh', 'SP,RN,RF'),
(604, 28, 71, '2023-09-07', 'H', '10', 'adgfdnbmvmvm', 'SP,RN,RF'),
(605, 28, 72, '2023-09-07', 'H', '10', 'adgfdnbmvmvm', 'SP,RN,RF'),
(606, 28, 73, '2023-09-07', 'H', '10', 'adgfdnbmvmvm', 'SP,RN,RF'),
(607, 28, 74, '2023-09-07', 'H', '10', 'adgfdnbmvmvm', 'SP,RN,RF'),
(608, 28, 71, '2023-09-09', 'H', '10', 'asdcxvcxbmm', 'SP,RN,RF'),
(609, 28, 72, '2023-09-09', 'H', '10', 'asdcxvcxbmm', 'SP,RN,RF'),
(610, 28, 73, '2023-09-09', 'H', '10', 'asdcxvcxbmm', 'SP,RN,RF'),
(611, 28, 74, '2023-09-09', 'H', '10', 'asdcxvcxbmm', 'SP,RN,RF'),
(612, 32, 109, '2023-05-29', 'H', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(613, 32, 110, '2023-05-29', 'H', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(614, 32, 111, '2023-05-29', 'H', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(615, 32, 112, '2023-05-29', 'H', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(616, 32, 113, '2023-05-29', 'H', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(617, 32, 114, '2023-05-29', 'H', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(618, 32, 115, '2023-05-29', 'A', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(619, 32, 116, '2023-05-29', 'H', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(620, 32, 117, '2023-05-29', 'H', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(621, 32, 118, '2023-05-29', 'H', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(622, 32, 119, '2023-05-29', 'H', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(623, 32, 120, '2023-05-29', 'H', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(624, 32, 121, '2023-05-29', 'H', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(625, 32, 122, '2023-05-29', 'H', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(626, 32, 123, '2023-05-29', 'H', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(627, 32, 124, '2023-05-29', 'H', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(628, 32, 125, '2023-05-29', 'H', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(629, 32, 126, '2023-05-29', 'S', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(630, 32, 127, '2023-05-29', 'H', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(631, 32, 128, '2023-05-29', 'H', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(632, 32, 129, '2023-05-29', 'H', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(633, 32, 130, '2023-05-29', 'H', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(634, 32, 131, '2023-05-29', 'H', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(635, 32, 132, '2023-05-29', 'H', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(636, 32, 133, '2023-05-29', 'H', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(637, 32, 134, '2023-05-29', 'S', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(638, 32, 135, '2023-05-29', 'H', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(639, 32, 136, '2023-05-29', 'H', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(640, 32, 137, '2023-05-29', 'A', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(641, 32, 138, '2023-05-29', 'I', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(642, 32, 139, '2023-05-29', 'H', '12', 'LANJUT VISUALISASI DATA 6', 'RN,RF,MC'),
(643, 32, 109, '2023-08-08', 'H', '13', 'CLUSTERING', 'RN,RF'),
(644, 32, 110, '2023-08-08', 'A', '13', 'CLUSTERING', 'RN,RF'),
(645, 32, 111, '2023-08-08', 'H', '13', 'CLUSTERING', 'RN,RF'),
(646, 32, 112, '2023-08-08', 'H', '13', 'CLUSTERING', 'RN,RF'),
(647, 32, 113, '2023-08-08', 'H', '13', 'CLUSTERING', 'RN,RF'),
(648, 32, 114, '2023-08-08', 'H', '13', 'CLUSTERING', 'RN,RF'),
(649, 32, 115, '2023-08-08', 'A', '13', 'CLUSTERING', 'RN,RF'),
(650, 32, 116, '2023-08-08', 'H', '13', 'CLUSTERING', 'RN,RF'),
(651, 32, 117, '2023-08-08', 'H', '13', 'CLUSTERING', 'RN,RF'),
(652, 32, 118, '2023-08-08', 'A', '13', 'CLUSTERING', 'RN,RF'),
(653, 32, 119, '2023-08-08', 'H', '13', 'CLUSTERING', 'RN,RF'),
(654, 32, 120, '2023-08-08', 'H', '13', 'CLUSTERING', 'RN,RF'),
(655, 32, 121, '2023-08-08', 'H', '13', 'CLUSTERING', 'RN,RF'),
(656, 32, 122, '2023-08-08', 'H', '13', 'CLUSTERING', 'RN,RF'),
(657, 32, 123, '2023-08-08', 'H', '13', 'CLUSTERING', 'RN,RF'),
(658, 32, 124, '2023-08-08', 'H', '13', 'CLUSTERING', 'RN,RF'),
(659, 32, 125, '2023-08-08', 'H', '13', 'CLUSTERING', 'RN,RF'),
(660, 32, 126, '2023-08-08', 'H', '13', 'CLUSTERING', 'RN,RF'),
(661, 32, 127, '2023-08-08', 'H', '13', 'CLUSTERING', 'RN,RF'),
(662, 32, 128, '2023-08-08', 'H', '13', 'CLUSTERING', 'RN,RF'),
(663, 32, 129, '2023-08-08', 'H', '13', 'CLUSTERING', 'RN,RF'),
(664, 32, 130, '2023-08-08', 'H', '13', 'CLUSTERING', 'RN,RF'),
(665, 32, 131, '2023-08-08', 'H', '13', 'CLUSTERING', 'RN,RF'),
(666, 32, 132, '2023-08-08', 'H', '13', 'CLUSTERING', 'RN,RF'),
(667, 32, 133, '2023-08-08', 'H', '13', 'CLUSTERING', 'RN,RF'),
(668, 32, 134, '2023-08-08', 'H', '13', 'CLUSTERING', 'RN,RF'),
(669, 32, 135, '2023-08-08', 'H', '13', 'CLUSTERING', 'RN,RF'),
(670, 32, 136, '2023-08-08', 'H', '13', 'CLUSTERING', 'RN,RF'),
(671, 32, 137, '2023-08-08', 'A', '13', 'CLUSTERING', 'RN,RF'),
(672, 32, 138, '2023-08-08', 'A', '13', 'CLUSTERING', 'RN,RF'),
(673, 32, 139, '2023-08-08', 'A', '13', 'CLUSTERING', 'RN,RF'),
(674, 32, 109, '2023-06-05', 'H', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(675, 32, 110, '2023-06-05', 'I', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(676, 32, 111, '2023-06-05', 'H', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(677, 32, 112, '2023-06-05', 'H', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(678, 32, 113, '2023-06-05', 'H', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(679, 32, 114, '2023-06-05', 'I', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(680, 32, 115, '2023-06-05', 'A', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(681, 32, 116, '2023-06-05', 'H', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(682, 32, 117, '2023-06-05', 'H', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(683, 32, 118, '2023-06-05', 'H', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(684, 32, 119, '2023-06-05', 'H', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(685, 32, 120, '2023-06-05', 'H', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(686, 32, 121, '2023-06-05', 'H', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(687, 32, 122, '2023-06-05', 'I', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(688, 32, 123, '2023-06-05', 'H', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(689, 32, 124, '2023-06-05', 'H', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(690, 32, 125, '2023-06-05', 'H', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(691, 32, 126, '2023-06-05', 'H', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(692, 32, 127, '2023-06-05', 'I', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(693, 32, 128, '2023-06-05', 'H', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(694, 32, 129, '2023-06-05', 'H', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(695, 32, 130, '2023-06-05', 'H', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(696, 32, 131, '2023-06-05', 'H', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(697, 32, 132, '2023-06-05', 'H', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(698, 32, 133, '2023-06-05', 'H', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(699, 32, 134, '2023-06-05', 'H', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(700, 32, 135, '2023-06-05', 'H', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(701, 32, 136, '2023-06-05', 'H', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(702, 32, 137, '2023-06-05', 'A', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(703, 32, 138, '2023-06-05', 'H', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(704, 32, 139, '2023-06-05', 'H', '14', 'LANJUT CLUSTERING', 'RN,MC'),
(705, 32, 109, '2023-06-07', 'H', '15', 'REGRESI', 'RN,RF'),
(706, 32, 110, '2023-06-07', 'A', '15', 'REGRESI', 'RN,RF'),
(707, 32, 111, '2023-06-07', 'H', '15', 'REGRESI', 'RN,RF'),
(708, 32, 112, '2023-06-07', 'H', '15', 'REGRESI', 'RN,RF'),
(709, 32, 113, '2023-06-07', 'H', '15', 'REGRESI', 'RN,RF'),
(710, 32, 114, '2023-06-07', 'H', '15', 'REGRESI', 'RN,RF'),
(711, 32, 115, '2023-06-07', 'A', '15', 'REGRESI', 'RN,RF'),
(712, 32, 116, '2023-06-07', 'H', '15', 'REGRESI', 'RN,RF'),
(713, 32, 117, '2023-06-07', 'H', '15', 'REGRESI', 'RN,RF'),
(714, 32, 118, '2023-06-07', 'A', '15', 'REGRESI', 'RN,RF'),
(715, 32, 119, '2023-06-07', 'H', '15', 'REGRESI', 'RN,RF'),
(716, 32, 120, '2023-06-07', 'H', '15', 'REGRESI', 'RN,RF'),
(717, 32, 121, '2023-06-07', 'H', '15', 'REGRESI', 'RN,RF'),
(718, 32, 122, '2023-06-07', 'H', '15', 'REGRESI', 'RN,RF'),
(719, 32, 123, '2023-06-07', 'H', '15', 'REGRESI', 'RN,RF'),
(720, 32, 124, '2023-06-07', 'H', '15', 'REGRESI', 'RN,RF'),
(721, 32, 125, '2023-06-07', 'H', '15', 'REGRESI', 'RN,RF'),
(722, 32, 126, '2023-06-07', 'H', '15', 'REGRESI', 'RN,RF'),
(723, 32, 127, '2023-06-07', 'H', '15', 'REGRESI', 'RN,RF'),
(724, 32, 128, '2023-06-07', 'H', '15', 'REGRESI', 'RN,RF'),
(725, 32, 129, '2023-06-07', 'H', '15', 'REGRESI', 'RN,RF'),
(726, 32, 130, '2023-06-07', 'H', '15', 'REGRESI', 'RN,RF'),
(727, 32, 131, '2023-06-07', 'H', '15', 'REGRESI', 'RN,RF'),
(728, 32, 132, '2023-06-07', 'H', '15', 'REGRESI', 'RN,RF'),
(729, 32, 133, '2023-06-07', 'H', '15', 'REGRESI', 'RN,RF'),
(730, 32, 134, '2023-06-07', 'H', '15', 'REGRESI', 'RN,RF'),
(731, 32, 135, '2023-06-07', 'H', '15', 'REGRESI', 'RN,RF'),
(732, 32, 136, '2023-06-07', 'H', '15', 'REGRESI', 'RN,RF'),
(733, 32, 137, '2023-06-07', 'A', '15', 'REGRESI', 'RN,RF'),
(734, 32, 138, '2023-06-07', 'H', '15', 'REGRESI', 'RN,RF'),
(735, 32, 139, '2023-06-07', 'H', '15', 'REGRESI', 'RN,RF'),
(736, 32, 109, '2023-06-12', 'H', '16', 'LANJUT REGRESI', 'RF,MC'),
(737, 32, 110, '2023-06-12', 'H', '16', 'LANJUT REGRESI', 'RF,MC'),
(738, 32, 111, '2023-06-12', 'H', '16', 'LANJUT REGRESI', 'RF,MC'),
(739, 32, 112, '2023-06-12', 'H', '16', 'LANJUT REGRESI', 'RF,MC'),
(740, 32, 113, '2023-06-12', 'H', '16', 'LANJUT REGRESI', 'RF,MC'),
(741, 32, 114, '2023-06-12', 'A', '16', 'LANJUT REGRESI', 'RF,MC'),
(742, 32, 115, '2023-06-12', 'A', '16', 'LANJUT REGRESI', 'RF,MC'),
(743, 32, 116, '2023-06-12', 'H', '16', 'LANJUT REGRESI', 'RF,MC'),
(744, 32, 117, '2023-06-12', 'H', '16', 'LANJUT REGRESI', 'RF,MC'),
(745, 32, 118, '2023-06-12', 'H', '16', 'LANJUT REGRESI', 'RF,MC'),
(746, 32, 119, '2023-06-12', 'H', '16', 'LANJUT REGRESI', 'RF,MC'),
(747, 32, 120, '2023-06-12', 'H', '16', 'LANJUT REGRESI', 'RF,MC'),
(748, 32, 121, '2023-06-12', 'H', '16', 'LANJUT REGRESI', 'RF,MC'),
(749, 32, 122, '2023-06-12', 'H', '16', 'LANJUT REGRESI', 'RF,MC'),
(750, 32, 123, '2023-06-12', 'H', '16', 'LANJUT REGRESI', 'RF,MC'),
(751, 32, 124, '2023-06-12', 'H', '16', 'LANJUT REGRESI', 'RF,MC'),
(752, 32, 125, '2023-06-12', 'H', '16', 'LANJUT REGRESI', 'RF,MC'),
(753, 32, 126, '2023-06-12', 'H', '16', 'LANJUT REGRESI', 'RF,MC'),
(754, 32, 127, '2023-06-12', 'H', '16', 'LANJUT REGRESI', 'RF,MC'),
(755, 32, 128, '2023-06-12', 'H', '16', 'LANJUT REGRESI', 'RF,MC'),
(756, 32, 129, '2023-06-12', 'H', '16', 'LANJUT REGRESI', 'RF,MC'),
(757, 32, 130, '2023-06-12', 'H', '16', 'LANJUT REGRESI', 'RF,MC'),
(758, 32, 131, '2023-06-12', 'H', '16', 'LANJUT REGRESI', 'RF,MC'),
(759, 32, 132, '2023-06-12', 'H', '16', 'LANJUT REGRESI', 'RF,MC'),
(760, 32, 133, '2023-06-12', 'H', '16', 'LANJUT REGRESI', 'RF,MC'),
(761, 32, 134, '2023-06-12', 'H', '16', 'LANJUT REGRESI', 'RF,MC'),
(762, 32, 135, '2023-06-12', 'H', '16', 'LANJUT REGRESI', 'RF,MC'),
(763, 32, 136, '2023-06-12', 'H', '16', 'LANJUT REGRESI', 'RF,MC'),
(764, 32, 137, '2023-06-12', 'A', '16', 'LANJUT REGRESI', 'RF,MC'),
(765, 32, 138, '2023-06-12', 'H', '16', 'LANJUT REGRESI', 'RF,MC'),
(766, 32, 139, '2023-06-12', 'H', '16', 'LANJUT REGRESI', 'RF,MC'),
(767, 32, 109, '2023-06-14', 'A', '17', 'DECISION TREE', 'RN,RF'),
(768, 32, 110, '2023-06-14', 'H', '17', 'DECISION TREE', 'RN,RF'),
(769, 32, 111, '2023-06-14', 'H', '17', 'DECISION TREE', 'RN,RF'),
(770, 32, 112, '2023-06-14', 'H', '17', 'DECISION TREE', 'RN,RF'),
(771, 32, 113, '2023-06-14', 'H', '17', 'DECISION TREE', 'RN,RF'),
(772, 32, 114, '2023-06-14', 'H', '17', 'DECISION TREE', 'RN,RF'),
(773, 32, 115, '2023-06-14', 'A', '17', 'DECISION TREE', 'RN,RF'),
(774, 32, 116, '2023-06-14', 'H', '17', 'DECISION TREE', 'RN,RF'),
(775, 32, 117, '2023-06-14', 'H', '17', 'DECISION TREE', 'RN,RF'),
(776, 32, 118, '2023-06-14', 'H', '17', 'DECISION TREE', 'RN,RF'),
(777, 32, 119, '2023-06-14', 'H', '17', 'DECISION TREE', 'RN,RF'),
(778, 32, 120, '2023-06-14', 'H', '17', 'DECISION TREE', 'RN,RF'),
(779, 32, 121, '2023-06-14', 'S', '17', 'DECISION TREE', 'RN,RF'),
(780, 32, 122, '2023-06-14', 'H', '17', 'DECISION TREE', 'RN,RF'),
(781, 32, 123, '2023-06-14', 'S', '17', 'DECISION TREE', 'RN,RF'),
(782, 32, 124, '2023-06-14', 'H', '17', 'DECISION TREE', 'RN,RF'),
(783, 32, 125, '2023-06-14', 'H', '17', 'DECISION TREE', 'RN,RF'),
(784, 32, 126, '2023-06-14', 'H', '17', 'DECISION TREE', 'RN,RF'),
(785, 32, 127, '2023-06-14', 'I', '17', 'DECISION TREE', 'RN,RF'),
(786, 32, 128, '2023-06-14', 'A', '17', 'DECISION TREE', 'RN,RF'),
(787, 32, 129, '2023-06-14', 'H', '17', 'DECISION TREE', 'RN,RF'),
(788, 32, 130, '2023-06-14', 'H', '17', 'DECISION TREE', 'RN,RF'),
(789, 32, 131, '2023-06-14', 'H', '17', 'DECISION TREE', 'RN,RF'),
(790, 32, 132, '2023-06-14', 'H', '17', 'DECISION TREE', 'RN,RF'),
(791, 32, 133, '2023-06-14', 'H', '17', 'DECISION TREE', 'RN,RF'),
(792, 32, 134, '2023-06-14', 'H', '17', 'DECISION TREE', 'RN,RF'),
(793, 32, 135, '2023-06-14', 'H', '17', 'DECISION TREE', 'RN,RF'),
(794, 32, 136, '2023-06-14', 'H', '17', 'DECISION TREE', 'RN,RF'),
(795, 32, 137, '2023-06-14', 'A', '17', 'DECISION TREE', 'RN,RF'),
(796, 32, 138, '2023-06-14', 'H', '17', 'DECISION TREE', 'RN,RF'),
(797, 32, 139, '2023-06-14', 'H', '17', 'DECISION TREE', 'RN,RF'),
(798, 32, 109, '2023-06-19', 'H', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(799, 32, 110, '2023-06-19', 'H', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(800, 32, 111, '2023-06-19', 'H', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(801, 32, 112, '2023-06-19', 'H', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(802, 32, 113, '2023-06-19', 'H', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(803, 32, 114, '2023-06-19', 'H', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(804, 32, 115, '2023-06-19', 'A', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(805, 32, 116, '2023-06-19', 'H', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(806, 32, 117, '2023-06-19', 'H', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(807, 32, 118, '2023-06-19', 'H', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(808, 32, 119, '2023-06-19', 'H', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(809, 32, 120, '2023-06-19', 'H', '18', 'LANJUT DECISION TREE', 'RN,RF');
INSERT INTO `_logabsensi` (`id_presensi`, `id_mengajar`, `id_mahasiswa`, `tgl_absen`, `ket`, `pertemuan_ke`, `materi`, `kode_aslab`) VALUES
(810, 32, 121, '2023-06-19', 'H', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(811, 32, 122, '2023-06-19', 'A', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(812, 32, 123, '2023-06-19', 'H', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(813, 32, 124, '2023-06-19', 'H', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(814, 32, 125, '2023-06-19', 'H', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(815, 32, 126, '2023-06-19', 'H', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(816, 32, 127, '2023-06-19', 'I', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(817, 32, 128, '2023-06-19', 'H', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(818, 32, 129, '2023-06-19', 'H', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(819, 32, 130, '2023-06-19', 'H', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(820, 32, 131, '2023-06-19', 'H', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(821, 32, 132, '2023-06-19', 'H', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(822, 32, 133, '2023-06-19', 'H', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(823, 32, 134, '2023-06-19', 'H', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(824, 32, 135, '2023-06-19', 'H', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(825, 32, 136, '2023-06-19', 'H', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(826, 32, 137, '2023-06-19', 'A', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(827, 32, 138, '2023-06-19', 'H', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(828, 32, 139, '2023-06-19', 'H', '18', 'LANJUT DECISION TREE', 'RN,RF'),
(829, 34, 140, '2023-08-09', '', '1', 'OOP PHP', 'RN,RF'),
(830, 34, 140, '2023-08-14', 'H', '2', 'dasar web', 'SP,RN,RF'),
(831, 34, 140, '2023-08-21', 'I', '3', 'dasar web 2', 'RN,MC'),
(832, 28, 71, '2023-09-12', 'H', '11', 'VISUALISASI DATA', 'RN,RF'),
(833, 28, 72, '2023-09-12', '', '11', 'VISUALISASI DATA', 'RN,RF'),
(834, 28, 73, '2023-09-12', 'H', '11', 'VISUALISASI DATA', 'RN,RF'),
(835, 28, 74, '2023-09-12', 'H', '11', 'VISUALISASI DATA', 'RN,RF'),
(836, 28, 71, '2023-09-14', 'H', '12', 'Struktur Seleksi', 'AD,DF'),
(837, 28, 72, '2023-09-14', 'I', '12', 'Struktur Seleksi', 'AD,DF'),
(838, 28, 73, '2023-09-14', 'H', '12', 'Struktur Seleksi', 'AD,DF'),
(839, 28, 74, '2023-09-14', 'H', '12', 'Struktur Seleksi', 'AD,DF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_aslab`
--
ALTER TABLE `tb_aslab`
  ADD PRIMARY KEY (`id_aslab`);

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `tb_dospem`
--
ALTER TABLE `tb_dospem`
  ADD PRIMARY KEY (`id_dospem`),
  ADD KEY `id_dosen` (`id_dosen`) USING BTREE,
  ADD KEY `FK_tb_dospem_tb_mkelas` (`id_mkelas`);

--
-- Indexes for table `tb_izin`
--
ALTER TABLE `tb_izin`
  ADD PRIMARY KEY (`id_izin`),
  ADD KEY `id_mkelas` (`id_mkelas`),
  ADD KEY `id_mapel` (`id_matakuliah`);

--
-- Indexes for table `tb_laboratorium`
--
ALTER TABLE `tb_laboratorium`
  ADD PRIMARY KEY (`id_lab`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tb_mahasiswa_kelas`
--
ALTER TABLE `tb_mahasiswa_kelas`
  ADD PRIMARY KEY (`id_mhskelas`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`),
  ADD KEY `id_mkelas` (`id_mkelas`);

--
-- Indexes for table `tb_matakuliah`
--
ALTER TABLE `tb_matakuliah`
  ADD PRIMARY KEY (`id_matakuliah`),
  ADD KEY `id_semester` (`id_semester`),
  ADD KEY `id_thajaran` (`id_thajaran`);

--
-- Indexes for table `tb_materi`
--
ALTER TABLE `tb_materi`
  ADD PRIMARY KEY (`id_materi`),
  ADD KEY `id_mengajar` (`id_mengajar`);

--
-- Indexes for table `tb_mengajar`
--
ALTER TABLE `tb_mengajar`
  ADD PRIMARY KEY (`id_mengajar`),
  ADD KEY `id_mapel` (`id_matakuliah`),
  ADD KEY `id_guru` (`id_aslab`),
  ADD KEY `id_lab` (`id_lab`),
  ADD KEY `id_mkelas` (`id_mkelas`),
  ADD KEY `id_semester` (`id_semester`),
  ADD KEY `id_thajaran` (`id_thajaran`);

--
-- Indexes for table `tb_mkelas`
--
ALTER TABLE `tb_mkelas`
  ADD PRIMARY KEY (`id_mkelas`);

--
-- Indexes for table `tb_semester`
--
ALTER TABLE `tb_semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indexes for table `tb_staff`
--
ALTER TABLE `tb_staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indexes for table `tb_thajaran`
--
ALTER TABLE `tb_thajaran`
  ADD PRIMARY KEY (`id_thajaran`);

--
-- Indexes for table `_logabsensi`
--
ALTER TABLE `_logabsensi`
  ADD PRIMARY KEY (`id_presensi`),
  ADD KEY `FK__logabsensi_tb_mahasiswa` (`id_mahasiswa`),
  ADD KEY `FK___logabsensi_tb_mengajar` (`id_mengajar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_aslab`
--
ALTER TABLE `tb_aslab`
  MODIFY `id_aslab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_dospem`
--
ALTER TABLE `tb_dospem`
  MODIFY `id_dospem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_izin`
--
ALTER TABLE `tb_izin`
  MODIFY `id_izin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tb_laboratorium`
--
ALTER TABLE `tb_laboratorium`
  MODIFY `id_lab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `tb_mahasiswa_kelas`
--
ALTER TABLE `tb_mahasiswa_kelas`
  MODIFY `id_mhskelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `tb_matakuliah`
--
ALTER TABLE `tb_matakuliah`
  MODIFY `id_matakuliah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_materi`
--
ALTER TABLE `tb_materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_mengajar`
--
ALTER TABLE `tb_mengajar`
  MODIFY `id_mengajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_mkelas`
--
ALTER TABLE `tb_mkelas`
  MODIFY `id_mkelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `tb_semester`
--
ALTER TABLE `tb_semester`
  MODIFY `id_semester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_staff`
--
ALTER TABLE `tb_staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_thajaran`
--
ALTER TABLE `tb_thajaran`
  MODIFY `id_thajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `_logabsensi`
--
ALTER TABLE `_logabsensi`
  MODIFY `id_presensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=840;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_dospem`
--
ALTER TABLE `tb_dospem`
  ADD CONSTRAINT `FK_tb_dospem_tb_mkelas` FOREIGN KEY (`id_mkelas`) REFERENCES `tb_mkelas` (`id_mkelas`),
  ADD CONSTRAINT `tb_dospem_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `tb_dosen` (`id_dosen`);

--
-- Constraints for table `tb_izin`
--
ALTER TABLE `tb_izin`
  ADD CONSTRAINT `FK_tb_izin_tb_master_mapel` FOREIGN KEY (`id_matakuliah`) REFERENCES `tb_matakuliah` (`id_matakuliah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tb_izin_tb_mkelas` FOREIGN KEY (`id_mkelas`) REFERENCES `tb_mkelas` (`id_mkelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_mahasiswa_kelas`
--
ALTER TABLE `tb_mahasiswa_kelas`
  ADD CONSTRAINT `tb_mahasiswa_kelas_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `tb_mahasiswa` (`id_mahasiswa`),
  ADD CONSTRAINT `tb_mahasiswa_kelas_ibfk_2` FOREIGN KEY (`id_mkelas`) REFERENCES `tb_mkelas` (`id_mkelas`);

--
-- Constraints for table `tb_matakuliah`
--
ALTER TABLE `tb_matakuliah`
  ADD CONSTRAINT `FK_tb_matakuliah_tb_semester` FOREIGN KEY (`id_semester`) REFERENCES `tb_semester` (`id_semester`),
  ADD CONSTRAINT `FK_tb_matakuliah_tb_thajaran` FOREIGN KEY (`id_thajaran`) REFERENCES `tb_thajaran` (`id_thajaran`);

--
-- Constraints for table `tb_materi`
--
ALTER TABLE `tb_materi`
  ADD CONSTRAINT `tb_materi_ibfk_1` FOREIGN KEY (`id_mengajar`) REFERENCES `tb_mengajar` (`id_mengajar`);

--
-- Constraints for table `tb_mengajar`
--
ALTER TABLE `tb_mengajar`
  ADD CONSTRAINT `FK_tb_mengajar_tb_thajaran` FOREIGN KEY (`id_thajaran`) REFERENCES `tb_thajaran` (`id_thajaran`),
  ADD CONSTRAINT `tb_mengajar_ibfk_1` FOREIGN KEY (`id_aslab`) REFERENCES `tb_aslab` (`id_aslab`),
  ADD CONSTRAINT `tb_mengajar_ibfk_2` FOREIGN KEY (`id_matakuliah`) REFERENCES `tb_matakuliah` (`id_matakuliah`),
  ADD CONSTRAINT `tb_mengajar_ibfk_3` FOREIGN KEY (`id_lab`) REFERENCES `tb_laboratorium` (`id_lab`),
  ADD CONSTRAINT `tb_mengajar_ibfk_4` FOREIGN KEY (`id_mkelas`) REFERENCES `tb_mkelas` (`id_mkelas`),
  ADD CONSTRAINT `tb_mengajar_ibfk_5` FOREIGN KEY (`id_semester`) REFERENCES `tb_semester` (`id_semester`);

--
-- Constraints for table `_logabsensi`
--
ALTER TABLE `_logabsensi`
  ADD CONSTRAINT `FK___logabsensi_tb_mengajar` FOREIGN KEY (`id_mengajar`) REFERENCES `tb_mengajar` (`id_mengajar`),
  ADD CONSTRAINT `FK__logabsensi_tb_mahasiswa` FOREIGN KEY (`id_mahasiswa`) REFERENCES `tb_mahasiswa` (`id_mahasiswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
