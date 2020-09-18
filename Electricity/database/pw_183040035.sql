-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2020 at 03:12 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_183040035`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand` varchar(128) NOT NULL,
  `founded` varchar(10) NOT NULL,
  `base` varchar(50) NOT NULL,
  `area_served` varchar(30) NOT NULL,
  `revenue` varchar(15) NOT NULL,
  `image` varchar(30) NOT NULL,
  `featured` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand`, `founded`, `base`, `area_served`, `revenue`, `image`, `featured`) VALUES
('Asus', '1989/03/02', 'Beitou District, Taipei, Taiwan', 'World Wide', '354.2', '5f6467ac1c7c9.png', 1),
('Dell', '1984/02/01', 'Round Rock, Texas, United States', 'World Wide', '92.2', 'dell.png', 1),
('MSI', '1986/08/09', 'Zhonghe District, Taipei, Taiwan', 'World Wide', '4', '5f64ab6a31919.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id_laptop` int(11) NOT NULL,
  `nama_laptop` varchar(128) NOT NULL,
  `jenis_laptop` varchar(128) NOT NULL,
  `prosesor` varchar(128) NOT NULL,
  `vga` varchar(128) NOT NULL,
  `ram` varchar(128) NOT NULL,
  `storage` varchar(128) NOT NULL,
  `dimensi` varchar(128) NOT NULL,
  `merek` varchar(128) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(256) NOT NULL,
  `detail` text NOT NULL,
  `featured` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id_laptop`, `nama_laptop`, `jenis_laptop`, `prosesor`, `vga`, `ram`, `storage`, `dimensi`, `merek`, `harga`, `gambar`, `detail`, `featured`) VALUES
(2, 'Dell XPS 13 7390', 'Laptop Productivity', 'Intel Core i5-10210', 'Intel® Iris Plus Graphics', '8GB DDR4 3733MHz ', '256GB SSD', '13\"', 'Dell', 15599000, 'dell-g7.png', '', 1),
(3, 'ASUS TUF FX505GE', 'Laptop Gaming', 'Intel Core i7-8750H', 'GeForce GTX 1050Ti', '8GB DDR4 2666MHz ', '128GB NVME SSD + 1TB HDD', '15.6\"', 'Asus', 15999000, 'fx505ge.png', '', 1),
(6, 'MSI GL63 8SC - 013ID', 'Laptop Gaming', 'Intel Core i7-8750H', 'GeForce GTX 1650', '8GB DDR4', '512GB SSD', '15.6&quot;', 'MSI', 16499000, '5f64661f51f2a.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam reiciendis laborum repudiandae nesciunt recusandae ipsam iusto consequatur, dicta pariatur illum, ratione modi aliquam eius officiis molestias vero quas voluptatum eum.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(128) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `admin`, `time`) VALUES
(2, 'admin', 'hadisutarma12@gmail.com', '$2y$10$pAY5KSqGVJUnvxXFl9AN4es17nrz8kUfoIQtK/V4FE8c3u5w0qGYO', 1, '2020-09-17 13:10:01'),
(9, 'hadi', 'hadi@example.com', '$2y$10$PWmZGbeINDj0llWD7Ntb/OKet2SqZRWbY5qrKxSo/flxMEW31L2sa', 0, '2019-05-02 14:37:26'),
(10, 'laura', 'luara@gmail.com', '$2y$10$ts1w0UsUEemyC./KKY5MUeWyYHzYipmEyHONDT94sCjeBTKkF6Aoq', 0, '2019-05-02 14:41:18'),
(11, 'bagas', 'bagas@gmail.com', '$2y$10$RkMXJJ2ZUQ/y6KAfXWUhtebtEDXYFLnRGfhePGAFWc5LJf8hUbHby', 0, '2019-05-02 14:49:27'),
(12, 'vhirza', 'z@gmail.com', '$2y$10$Lzr.9S8kGQMhrzHSCFuLB.noPJiuhHps4tvXAHxTXXeTKtCaHsST.', 0, '2019-05-02 14:55:37'),
(13, 'fadhlan', 'fadhlan@yahoo.co.id', '$2y$10$vPyWQPdDGGMf.SGuCdTRlOpyChVWcCGhxqHzEWQIDFryzLA.REeW2', 0, '2019-05-03 07:03:04'),
(14, 'Test', 'test@gmail.com', '$2y$10$9PW.49HsHmNqIw9Z2JhVCOckhxpKo5qxxONOHd4EyFKVdWle30kpC', 127, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id_laptop`),
  ADD KEY `merek` (`merek`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id_laptop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laptop`
--
ALTER TABLE `laptop`
  ADD CONSTRAINT `laptop_ibfk_1` FOREIGN KEY (`merek`) REFERENCES `brand` (`brand`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
