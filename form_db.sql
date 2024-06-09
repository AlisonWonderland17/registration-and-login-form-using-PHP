-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2024 at 05:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `hashedPass` varchar(255) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`id`, `fname`, `lname`, `user`, `email`, `pass`, `hashedPass`, `reg_date`) VALUES
(1, 'Alison', 'Estrella', 'alison17', 'alice.estrella17@gmail.com', '123456', '$2y$10$Q0Ln2zexVvkJN1NZDfdaG.LEFKKiH1p1g47vX4zkvEqUYCHplMvzW', '2024-06-01 05:20:15'),
(2, 'Felix', 'Glucksborg', 'felix123', 'felixglucksborg@gmail.com', 'July222002', '$2y$10$1gLtiDqIa944GDKztvZNrunc/gYGPQ/GAfBeKUArMVH01xK41P7ju', '2024-06-01 05:21:19'),
(3, 'Nikolai', 'Frederiksborg', 'princenikolai', 'nikofrederiksborg@gmail.com', '123456', '$2y$10$CWWzPDCjRXRAkZVyCSL25uA6bD52TjcNI9KFRRwwRumTbAZY3G9ku', '2024-06-01 05:21:40'),
(4, 'Danica Elisse', 'Valdemar', 'danlisse123', 'danlissevaldemar@gmail.com', '123456', '$2y$10$rmQRWyp08B3D1N5.hxaUIuM9mrmvcNtUQg5WCjKx9pPX0DfFJqvEu', '2024-06-01 05:22:04'),
(5, 'Juan', 'Dela Cruz', 'jdc11', 'juandelacruz@gmail.com', '123456', '$2y$10$hSKBxpazvp34WByD6/wUnOCzuPUyimrSGHnxiftoni8hKEGMbRE/q', '2024-06-01 05:22:31'),
(6, 'John', 'Doe', 'johndoe123', 'johndoe123@gmail.com', '123456', '$2y$10$OqfcK7AO.0fVHXWagjbJl.KJGZeOwNKSGp8iO0YmvehTELQwubfjS', '2024-06-01 05:23:41'),
(7, 'Jane', 'Doe', 'janedoe', 'janedoe@gmail.com', '123456', '$2y$10$HRMKXJb2f2hTsr.1U8x5/.lzJIVagd5l.vQhzYLS8suMBan7Ubvam', '2024-06-01 05:24:01'),
(8, 'Danielle', 'Watts', 'prog-AMER_123', 'danwatts@gmail.com', '123456', '$2y$10$Zmpy1.A1sPAIG9CwLDhE/.nYiyrV10J6IwU6w7.ya.j6CMoY3Cm3a', '2024-06-01 05:24:27'),
(9, 'Georgie', 'Cooper', 'texanboy', 'georgiecooper@gmail.com', '123456', '$2y$10$pqY6ja1i3Gwb9UyCvmx..OX./lpvl7I6dl1km41IUodeIxUPLSyvu', '2024-06-01 05:24:55'),
(10, 'Missy', 'Cooper', 'missycooper', 'missycooper@gmail.com', '123456', '$2y$10$f//XMkB5Yhd6eEy5RxjwOe/3P7nHsWRvZAYqOqs8laX2Z.rZT6Ziq', '2024-06-01 05:25:15'),
(18, 'Yoo jung', 'Kim', 'kimyoojung', 'yoojungkim@gmail.com', '123456', '$2y$10$/CvdZqyKVXkbUJlhpW99fOtPNABcz7v9o6CenUiRwdDC5TBYd/aca', '2024-06-01 07:20:37'),
(19, 'Grant', 'Estrella', 'catlover143', 'grantestrella143@gmail.com', '123456123456', '$2y$10$VhQUfAiyouBzFt536aY91.I8RR.j8NkgOeI8K.JEt616oaEb3ap.y', '2024-06-01 07:22:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
