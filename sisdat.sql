-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 04:45 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisdat`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `Kode_kelas` char(2) NOT NULL,
  `Kelas` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`Kode_kelas`, `Kelas`) VALUES
('01', 'A'),
('02', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NPM` int(12) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Kelas` char(1) DEFAULT NULL,
  `akun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NPM`, `Nama`, `Kelas`, `akun`) VALUES
(200001, 'Ariq Hakim Ruswadi', 'A', 0),
(200002, 'Rommel Malik Kusnadi', 'B', 0),
(200003, 'Affan Rifqy Kurniadi', 'A', 0),
(200004, 'Aulia Rahmanita', 'B', 0),
(200005, 'Alfadli Maulana Siddik', 'A', 0),
(200006, 'Hali Putri Aisyah', 'B', 0),
(200007, 'Rangga Putra', 'A', 0),
(200008, 'Anggie Forestry', 'B', 0),
(200009, 'Wafi Fahruzzaman', 'A', 0),
(200010, 'Rizky Mahardika', 'B', 0),
(200011, 'Faiq Muhammad', 'A', 0),
(200012, 'Della Fauziyyah Husna', 'B', 0),
(200013, 'Rihlan Lumenda Suherman', 'A', 0),
(200014, 'Nawang Ilmi Adzani', 'B', 0),
(200015, 'Nanda Raihan Sukma', 'A', 0),
(200016, 'Muhammad Daffa Alifiandi', 'B', 0),
(200017, 'Mohammad Keenan Febriansyah', 'A', 0),
(200018, 'Zhillan Thafhan Ahda', 'B', 0),
(200019, 'Muhammad Zidan Khairan', 'A', 0),
(200020, 'Andaru Danurdara Wibisana', 'B', 0),
(200021, 'Rifqi Akmal Fauzi', 'A', 0),
(200022, 'Osmond Haylim', 'B', 0),
(200023, 'Rheza Pandya Andhikaputra', 'A', 0),
(200024, 'Jonathan Victor Goklas', 'B', 0),
(200025, 'Raihan Fadhlal Aziz', 'A', 0),
(200026, 'Mu\'az Abdul Rohim', 'B', 0),
(200027, 'Harta Rama', 'A', 0),
(200028, 'Ananda Shaquille Farell', 'B', 0),
(200029, 'Adnan Rafiyansyah Majid', 'A', 0),
(200030, 'Fauzan Azmi Dwicahyo', 'B', 0),
(200031, 'Ahmad Yahya Salim', 'A', 0),
(200032, 'Irfan Kamal', 'B', 0),
(200033, 'Rafa Azka Ulinnuha', 'A', 0),
(200034, 'Anna Safira Dila', 'B', 0),
(200035, 'Naufal Fahrezi', 'A', 0),
(200036, 'Laura Azra Aprilyanti', 'B', 0),
(200037, 'Azka Ghafara Putra Agung', 'A', 0),
(200038, 'Pujo Prayogo', 'B', 0),
(200039, 'Rifqy Kurnia Sudarman', 'A', 0),
(200040, 'Indah Sutriyati', 'B', 0),
(200041, 'Alvaro Dwi Oktaviano', 'A', 0),
(200042, 'Andre Nathaniel Adipraja', 'B', 0),
(200043, 'Johanes Bagus Prasetyo', 'A', 0),
(200044, 'Ade Dwi Fatwa Sembiring', 'B', 0),
(200045, 'Amalia Nur Fitri', 'A', 0),
(200046, 'Muhammad Nabil Fikri S P', 'B', 0),
(200047, 'Kharisma Fitri Nurunnisa S', 'A', 0),
(200048, 'Muhammad Attila An Naufal', 'B', 0),
(200049, 'Rafiansyah Rasyid Wikawang', 'A', 0),
(200050, 'Fikri Arkani Salim', 'B', 0),
(200051, 'Wildan Hanif Musyaffa', 'A', 0),
(200052, 'Fasya Nurina Izzati', 'B', 0),
(200053, 'Calvin Calfi Montolalu', 'A', 0),
(200055, 'Wafa Tsabita', 'A', 0),
(200056, 'Rafi Alauddin', 'B', 0),
(200057, 'Bismo Panji Kusumo', 'A', 0),
(200058, 'Amariel Danendra Dagna', 'B', 0),
(200059, 'Deani Puteri Virdiana', 'A', 0),
(200060, 'Alya Raisa Hidayat', 'B', 0),
(200061, 'Andyka Baswara Putra', 'A', 0),
(200062, 'Zahran Hanif Fathanmubin', 'B', 0),
(200063, 'Muhammad Davio Athallah', 'A', 0),
(200064, 'Muhammad Ariiq Rakha Shafa', 'B', 0),
(200065, 'Hanifan Ayusti Khairunnisa', 'A', 0),
(200066, 'Muthia Azzahra', 'B', 0),
(200067, 'Abraham Javier Sebastien S', 'A', 0),
(200068, 'Satriyatama Tristan Suharjono', 'B', 0),
(200069, 'Akmal Lutfi Muzzaki', 'A', 0);

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `Kode_matkul` char(9) NOT NULL,
  `Matkul` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`Kode_matkul`, `Matkul`) VALUES
('D10G2202', 'Arsitektur dan '),
('UNX104001', 'Bahasa Inggris '),
('D10H2201', 'Fisika Informat'),
('D10A2201', 'Kalkulus II'),
('UNX102002', 'Kewarganegaraan'),
('D10G2203', 'Sistem Database'),
('D10E2201', 'Statistika'),
('D10G2201', 'Struktur Data');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `Kode_Tugas` int(11) NOT NULL,
  `NPM` int(12) NOT NULL,
  `Status` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `Kode_tugas` int(11) NOT NULL,
  `Matkul` varchar(15) NOT NULL,
  `Deadline` date NOT NULL,
  `Deskripsi` varchar(300) NOT NULL,
  `Kode_kelas` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `NPM` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `NPM`) VALUES
(5, '200001', '200001', 200001),
(6, '200003', '200003', 200003),
(7, '200002', '200002', 200002),
(8, '200004', '200004', 200004),
(9, '200005', '200005', 200005),
(10, '200006', '200006', 200006),
(11, '200007', '200007', 200007),
(12, '200008', '200008', 200008),
(13, '200009', '200009', 200009),
(14, '200010', '200010', 200010),
(15, '200011', '200011', 200011),
(16, '200012', '200012', 200012),
(17, '200013', '200013', 200013),
(18, '200014', '200014', 200014),
(19, '200015', '200015', 200015),
(20, '200016', '200016', 200016),
(21, '200017', '200017', 200017),
(22, '200018', '200018', 200018),
(23, '200019', '200019', 200019),
(24, '200020', '200020', 200020),
(25, '200021', '200021', 200021),
(26, '200022', '200022', 200022),
(27, '200023', '200023', 200023),
(28, '200024', '200024', 200024),
(29, '200025', '200025', 200025),
(30, '200026', '200026', 200026),
(31, '200027', '200027', 200027),
(32, '200028', '200028', 200028),
(33, '200029', '200029', 200029),
(34, '200030', '200030', 200030),
(35, '200031', '200031', 200031),
(36, '200032', '200032', 200032),
(37, '200034', '200034', 200034),
(38, '200035', '200035', 200035),
(39, '200036', '200036', 200036),
(40, '200037', '200037', 200037),
(41, '200038', '200038', 200038),
(42, '200039', '200039', 200039),
(43, '200040', '200040', 200040),
(44, '200041', '200041', 200041),
(45, '200042', '200042', 200042),
(46, '200043', '200043', 200043),
(47, '200044', '200044', 200044),
(48, '200045', '200045', 200045),
(49, '200046', '200046', 200046),
(50, '200047', '200047', 200047),
(51, '200048', '200048', 200048),
(52, '200049', '200049', 200049),
(53, '200050', '200050', 200050),
(54, '200051', '200051', 200051),
(55, '200052', '200052', 200052),
(56, '200053', '200053', 200053),
(57, '200055', '200055', 200055),
(58, '200056', '200056', 200056),
(59, '200057', '200057', 200057),
(60, '200058', '200058', 200058),
(61, '200059', '200059', 200059),
(62, '200060', '200060', 200060),
(63, '200061', '200061', 200061),
(64, '200062', '200062', 200062),
(65, '200063', '200063', 200063),
(66, '200064', '200064', 200064),
(67, '200065', '200065', 200065),
(68, '200066', '200066', 200066),
(69, '200067', '200067', 200067),
(72, '200068', '200068', 200068),
(73, '200069', '200069', 200069);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`Kode_kelas`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NPM`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`Kode_matkul`),
  ADD UNIQUE KEY `Matkul` (`Matkul`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD KEY `NPM` (`NPM`),
  ADD KEY `Kode_Tugas` (`Kode_Tugas`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`Kode_tugas`),
  ADD KEY `Kode_kelas` (`Kode_kelas`),
  ADD KEY `Matkul` (`Matkul`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password` (`password`),
  ADD KEY `NPM` (`NPM`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `Kode_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `status_ibfk_1` FOREIGN KEY (`NPM`) REFERENCES `mahasiswa` (`NPM`),
  ADD CONSTRAINT `status_ibfk_2` FOREIGN KEY (`Kode_Tugas`) REFERENCES `tugas` (`Kode_tugas`);

--
-- Constraints for table `tugas`
--
ALTER TABLE `tugas`
  ADD CONSTRAINT `tugas_ibfk_3` FOREIGN KEY (`Kode_kelas`) REFERENCES `kelas` (`Kode_kelas`),
  ADD CONSTRAINT `tugas_ibfk_4` FOREIGN KEY (`Matkul`) REFERENCES `matkul` (`Matkul`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`NPM`) REFERENCES `mahasiswa` (`NPM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
