-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2024 at 08:50 PM
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
-- Database: `myapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `body` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `pinned` tinyint(4) NOT NULL DEFAULT 0,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `body`, `user_id`, `pinned`, `updated_at`) VALUES
(9, 'My name is Elsayed and this is my first note.', 5, 1, '2024-06-15 18:22:45'),
(10, 'I am a student at BFCAI.', 5, 1, '2024-06-15 18:36:57'),
(11, 'I love programming.', 5, 0, '2024-06-15 18:22:45'),
(12, 'This is my first note.', 6, 0, '2024-06-15 18:22:45'),
(13, 'Great one.', 6, 0, '2024-06-15 18:22:45'),
(14, 'aajdagavasavshcscxahss\r\n', 12, 0, '2024-06-15 18:22:45'),
(16, '#include <iostream>\r\nusing namespace std;\r\nint main (){\r\n    cout<<\"Hello World!\";\r\n    system(\"pause\");\r\n    return 0;\r\n}', 5, 0, '2024-06-15 18:46:09');

--
-- Triggers `notes`
--
DELIMITER $$
CREATE TRIGGER `update_trigger` BEFORE UPDATE ON `notes` FOR EACH ROW BEGIN
    IF NEW.pinned <> OLD.pinned THEN
        SET NEW.updated_at = CURRENT_TIMESTAMP;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(5, 'Elsayed Moawad', 'smoawad66@gmail.com', '$2y$10$enlQyqYNgX5jDhy7bcAzGeayezQ5bARfbTvMiKD00nliyewgtiqra'),
(6, 'Mohamed', 'm006@gmail.com', '$2y$10$Za64545Lkt4JM9Ycooe3tu7RO4ujHuLU/K37s2zaR6YR8gfvR/lxu'),
(7, 'Elsayed Moawad 2', 'elsayed403396@fci.bu.edu.eg', '$2y$10$scWNbnBW7OFm4.CK8VlSp.MSmK7lw2Tl6r8YC.V8Mc5PWhPMu.FpC'),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
