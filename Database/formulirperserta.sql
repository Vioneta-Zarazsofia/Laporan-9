-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 06:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formulirperserta`
--

-- --------------------------------------------------------

--
-- Table structure for table `ayahkandung`
--

CREATE TABLE `ayahkandung` (
  `id` int(11) NOT NULL,
  `namaayah` varchar(50) NOT NULL,
  `tahunlahir` int(30) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `penghasilan` varchar(100) NOT NULL,
  `berkebutuhan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ayahkandung`
--

INSERT INTO `ayahkandung` (`id`, `namaayah`, `tahunlahir`, `pendidikan`, `pekerjaan`, `penghasilan`, `berkebutuhan`) VALUES
(1, 'lucas', 1999, 'D4/S1', 'KaryawanSwasta', ' 1 juta - 1.999.999 ', 'Tidak'),
(2, 'Metawin', 1888, 'S3', 'Pensiunan', ' > 20 juta ', 'Hiper Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `datapribadi`
--

CREATE TABLE `datapribadi` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(100) NOT NULL,
  `berkebutuhan_khusus` varchar(100) NOT NULL,
  `alamat_jalan` varchar(100) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `nama_dusun` varchar(50) DEFAULT NULL,
  `kelurahan_desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `tempat_tinggal` varchar(100) NOT NULL,
  `transportasi` varchar(100) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `penerima_kps` enum('Ya','Tidak') NOT NULL,
  `no_kps` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(100) NOT NULL,
  `namaneg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datapribadi`
--

INSERT INTO `datapribadi` (`id`, `nama_lengkap`, `jenis_kelamin`, `nisn`, `nik`, `tempat_lahir`, `tanggal_lahir`, `agama`, `berkebutuhan_khusus`, `alamat_jalan`, `rt`, `rw`, `nama_dusun`, `kelurahan_desa`, `kecamatan`, `kode_pos`, `tempat_tinggal`, `transportasi`, `hp`, `telepon`, `email`, `penerima_kps`, `no_kps`, `kewarganegaraan`, `namaneg`) VALUES
(1, 'Vioneta Zarazsofia Permatasari', 'Perempuan', '2108201001', '35245432311', 'ngawi', '2003-07-30', 'Islam', 'Tidak', 'sudirman', '02', '02', 'prajan', 'banyubiru', 'widodaren', '35625', 'Bersama Orang Tua', 'Kereta Api', '+6285156477822', '+6285156477822', 'vionitazarazz@gmail.com', 'Ya', '1234345436545', 'Indonesia (WNI)', 'indonesia'),
(2, 'Cia Kireina', 'Perempuan', '3108201001', '45245432311', 'Surabaya', '2023-05-22', 'Hindu', 'Indigo (O)', 'sudirman VII', '10', '22', 'Rungkut', 'Gunung Anyar', 'Widodaren', '35625', 'Wali', 'Jemputan Sekolah', '+6285156477822', '+6285156477844', 'ciakireina@gmail.com', 'Ya', '1234345436545', 'Asing (WNA)', 'Jepang');

-- --------------------------------------------------------

--
-- Table structure for table `ibukandung`
--

CREATE TABLE `ibukandung` (
  `id` int(11) NOT NULL,
  `namaibu` varchar(50) NOT NULL,
  `tahunlahir` int(30) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `penghasilan` varchar(100) NOT NULL,
  `berkebutuhan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ibukandung`
--

INSERT INTO `ibukandung` (`id`, `namaibu`, `tahunlahir`, `pendidikan`, `pekerjaan`, `penghasilan`, `berkebutuhan`) VALUES
(1, 'Lisa', 1999, 'D4/S1', 'KaryawanSwasta', '2 juta - 4.999.999', 'Tidak'),
(2, 'Prim', 1777, 'D4/S1', 'Wiraswasta', '2 juta - 4.999.999', 'Indigo');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(11) NOT NULL,
  `jenispendaftaran` enum('Siswa Baru','Pindahan') NOT NULL,
  `tanggalmasuk` date NOT NULL,
  `nis` int(50) NOT NULL,
  `nomerps` int(50) NOT NULL,
  `paud` enum('Ya','Tidak') NOT NULL,
  `tk` enum('Ya','Tidak') NOT NULL,
  `skhun` int(50) NOT NULL,
  `ijazah` int(50) NOT NULL,
  `hobi` enum('Olahraga','Kesenian','Membaca','Menulis','Traveling','Lainnya') NOT NULL,
  `cita` enum('PNS','TNI/POLRI','Guru/Dosen','Dokter','Politikus','Wiraswasta','Seni/Lukis/Artis/Sejenisnya','Lainnya') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id`, `jenispendaftaran`, `tanggalmasuk`, `nis`, `nomerps`, `paud`, `tk`, `skhun`, `ijazah`, `hobi`, `cita`) VALUES
(1, 'Siswa Baru', '2023-05-15', 2147483647, 2147483647, 'Ya', 'Ya', 2147483647, 2147483647, 'Membaca', 'Guru/Dosen'),
(2, 'Pindahan', '2023-05-22', 2147483647, 2147483647, 'Ya', 'Ya', 2147483647, 2147483647, 'Traveling', 'Dokter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ayahkandung`
--
ALTER TABLE `ayahkandung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datapribadi`
--
ALTER TABLE `datapribadi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ibukandung`
--
ALTER TABLE `ibukandung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ayahkandung`
--
ALTER TABLE `ayahkandung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `datapribadi`
--
ALTER TABLE `datapribadi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ibukandung`
--
ALTER TABLE `ibukandung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
