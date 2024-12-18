-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 18, 2024 at 05:10 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int NOT NULL,
  `body` text COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` int NOT NULL,
  `is_pinned` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `body`, `user_id`, `is_pinned`, `created_at`, `updated_at`) VALUES
(9, 'My name is Elsayed and this is my first note because it is the first note.', 5, 1, '2024-12-02 15:45:14', '2024-12-18 15:04:24'),
(10, 'I am a student at BFCAI.', 5, 0, '2023-10-05 15:45:24', '2024-06-15 18:36:57'),
(11, 'I love programming.', 5, 0, '2022-12-07 15:46:08', '2024-06-15 18:22:45'),
(12, 'This is my first note.', 6, 0, '2021-12-01 15:46:28', '2024-06-15 18:22:45'),
(13, 'Test.', 6, 0, '2022-04-21 15:46:35', '2024-06-15 18:22:45'),
(14, 'aajdagavasavsahss\r\n', 12, 0, '2024-09-01 15:46:46', '2024-06-15 18:22:45'),
(16, '#include <iostream>\r\nusing namespace std;\r\nint main (){\r\n    cout<<\"Hello World!\";\r\n    system(\"pause\");\r\n    return 0;\r\n}', 5, 0, '2023-11-08 15:47:02', '2024-12-18 13:44:20'),
(18, 'Last note', 5, 0, '2024-12-18 17:06:58', '2024-12-18 17:06:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(5, 'Elsayed Moawad', 's014578@gmail.com', '$2y$10$enlQyqYNgX5jDhy7bcAzGeayezQ5bARfbTvMiKD00nliyewgtiqra'),
(6, 'Mohamed', 'm006@gmail.com', '$2y$10$Za64545Lkt4JM9Ycooe3tu7RO4ujHuLU/K37s2zaR6YR8gfvR/lxu'),
(7, 'Elsayed Moawad 2', 'elsayed4096@fci.bu.edu.eg', '$2y$10$scWNbnBW7OFm4.CK8VlSp.MSmK7lw2Tl6r8YC.V8Mc5PWhPMu.FpC'),
(12, 'Ahmed', 'h1204@outlook.com', '$2y$10$ygSH11t39zElLaYEpcp0heWSLGK7cpTjADi7BM/YQQRRiClJCHxie');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
