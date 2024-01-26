-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jan 26, 2024 at 08:33 AM
-- Server version: 10.6.12-MariaDB-1:10.6.12+maria~ubu2004-log
-- PHP Version: 8.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Clonestagram-TP`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `post_id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `user_id`, `photo`, `created_at`) VALUES
(25, 57, 'Screenshot 2024-01-25 at 13-28-56 Exotic Animals sur Instagram.png', '2025-01-24 01:29:14'),
(26, 57, 'Screenshot 2024-01-25 at 13-30-02 Exotic Animals sur Instagram.png', '2025-01-24 01:30:21'),
(27, 57, 'promo8.jpg', '2025-01-24 01:31:46'),
(31, 59, 'aguila.jpg', '2025-01-24 02:32:29'),
(32, 59, 'oso.jpg', '2025-01-24 02:32:54'),
(33, 59, 'giraffe.jpg', '2025-01-24 02:32:58'),
(34, 59, 'colibri.jpg', '2025-01-24 02:33:07'),
(36, 59, 'camaleon.jpg', '2025-01-24 02:33:27'),
(37, 59, 'venado.jpg', '2025-01-24 02:33:41'),
(38, 59, 'leon.jpg', '2025-01-24 02:33:46'),
(39, 60, 'charolaise_500x700_11.jpg', '2025-01-24 02:36:02'),
(42, 62, 'devweb1.jpg', '2025-01-24 03:57:16'),
(43, 62, 'devweb.png', '2025-01-24 03:57:28'),
(44, 62, 'developpement-web-prestataires-methodes-outils.jpg', '2025-01-24 03:57:40'),
(45, 63, 'redbull.jpg', '2025-01-24 04:08:47'),
(46, 64, 'kawai.jpg', '2025-01-24 04:12:24'),
(47, 65, '4032580-cod_site.jpg', '2025-01-24 04:14:24'),
(48, 65, '2024-01-03-134437.jpg', '2025-01-24 04:17:05'),
(49, 65, 'IMG_0401.jpg', '2025-01-24 04:18:10'),
(50, 65, 'IMG_0427.jpg', '2025-01-24 04:19:00'),
(51, 62, '2000004611667.webp', '2025-01-24 04:22:07'),
(52, 66, 'Ch ji_Akimichi.webp', '2025-01-24 04:30:56'),
(53, 67, 'kalista.jpg', '2025-01-24 04:37:35'),
(54, 68, 'adams1.jpg', '2025-01-24 04:40:23'),
(55, 59, 'elon.jpg', '2026-01-24 09:22:14'),
(56, 59, 'robot.webp', '2026-01-24 09:24:48');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `profilephoto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `datetime`, `profilephoto`) VALUES
(57, 'stephane__supercars', '$2y$10$FAS9hWfyMiDRLYa4t7Azs.oXFRtdO3MJDI9ME4GfKhZzlbTPqqcom', '2025-01-24 01:25:23', 'Capture d’écran du 2024-01-25 13-26-19.png'),
(59, 'Jorge', '$2y$10$G54gXpM71lHgfzcAMsv7SO0aopC.9j0ajC69LvFQfcjWuGc9OZSee', '2025-01-24 02:32:18', 'jorgejoanrobles.png'),
(60, 'Mélanie Robles', '$2y$10$J0R5FuEXdmFMCuAHsIAjOuBPzP9i8vqFGlOWCLbMtrCKI/LPry3ey', '2025-01-24 02:34:36', 'meme.jpeg'),
(61, 'Romain', '$2y$10$sHTcXwL4z2hfqgfP5MEAP.sJcOc585zooSJfURtrKh0K4nLQyidpC', '2025-01-24 03:03:32', 'messicup.jpg'),
(62, 'Garage404', '$2y$10$7OW5m.r7vWH74N8.yCiqUualliJiaqW6wCme9dBmX2K7XZqUSp6uG', '2025-01-24 03:56:23', 'g404.png'),
(63, 'Lucas', '$2y$10$T1GHB947nj9cU6rtM4QPhO8HaeAQCpFFlLleO6utHpDdjn6m96ul.', '2025-01-24 04:08:36', 'kaaris-actus-68721923-837762793286518-3632780357916241829-n-e1569248226963.jpg'),
(64, 'Orlanesthesie ', '$2y$10$t39v7f8k0EVtkcOZf4Evf.ZXD3a7cX9EvpVfBG7thnlVPMIVlEI1G', '2025-01-24 04:11:05', 'uwu.jpg'),
(65, 'Yacine', '$2y$10$u0zmUiIaObARGKTcPh7rmeFWVwoNWHCG16JqoNxxwVXSB/tIGpP0.', '2025-01-24 04:13:17', 'call-of-duty.jpg'),
(66, 'Martin', '$2y$10$JkxPtombFhwA20pLD/.Cs.krqvsW5HI.eZnsdqBZqumU.npiGCY2u', '2025-01-24 04:28:32', 'Ch ji_Akimichi_Pt_I.webp'),
(67, 'Rabeh', '$2y$10$RBw2454AZWkqQFV7bKbATeFoeEjUhaNmUlPbn6D8EtQwSGqTPv13S', '2025-01-24 04:37:03', 'kalista.jpg'),
(68, 'Adam', '$2y$10$cAfuEL3iHqntBnoqQBpkpu9ETj61oszziI8OTae5fn6eaXgDHt7wW', '2025-01-24 04:40:08', 'pantera.jpg'),
(69, 'JorgeRobles', '$2y$10$ZlB6UWD0hC9TLS.ikTcLVuByHhjAvFZWm1bYsiS494QG.l/iChl1C', '2026-01-24 09:30:56', 'robot.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `photo` (`photo`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
