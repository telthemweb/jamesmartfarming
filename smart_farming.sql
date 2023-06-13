-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 06:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_farming`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ticked` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment`, `user_id`, `post_id`, `created_at`, `ticked`) VALUES
(1, 'Biological control: Biological control involves using natural enemies of plant pests, such as predators or parasites, to control disease-causing organisms.\r\nChemical control: Chemicals such as fungicides, insecticides, and herbicides can be used to contro', 3, 2, '2023-05-15 09:23:35', 'checked'),
(2, 'Some of the tips are .....', 5, 1, '2023-05-15 07:15:39', NULL),
(3, 'Early detection and prevention of diseases', 5, 1, '2023-05-19 09:00:05', NULL),
(4, 'After your tomato plants reach about 2 to 3 feet tall, remove the leaves from the bottom foot of the stem. These are the oldest leaves, and they are usually the first leaves to develop fungus problems. As the plants fill out, the bottom leaves get the lea', 7, 1, '2023-05-27 06:57:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `disease` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `disease`, `user_id`, `image`, `created_at`) VALUES
(2, 'Tomato___Septoria_leaf_spot', 3, '0a5edec2-e297-4a25-86fc-78f03772c100___JR_Sept.L.S_8468.JPG', '2023-05-15 07:16:57'),
(3, 'Tomato___Early_blight', 3, '0fbc786c-62a7-44f3-8db8-2649809bf1aa___RS_Erly.B_9514.JPG', '2023-05-15 07:17:10'),
(4, 'Tomato___healthy', 3, '1af0bfe1-4bcf-4b8b-be66-5d0953eb647e___GH_HL_Leaf_482.2.JPG', '2023-05-19 08:55:55'),
(5, 'Tomato___Tomato_Yellow_Leaf_Curl_Virus', 7, '0d07c65d-0a4f-4a0b-8e5a-ade16407928a___UF.GRC_YLCV_Lab_02450.JPG', '2023-05-27 08:21:40'),
(6, 'Tomato___healthy', 7, '1af0bfe1-4bcf-4b8b-be66-5d0953eb647e___GH_HL_Leaf_482.2.JPG', '2023-05-27 08:24:00'),
(7, 'Tomato___Tomato_Yellow_Leaf_Curl_Virus', 7, '0d07c65d-0a4f-4a0b-8e5a-ade16407928a___UF.GRC_YLCV_Lab_02450.JPG', '2023-06-04 14:14:27');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `street`, `city`, `country`, `user_id`, `created_at`) VALUES
(1, '5646 Tafara', 'Harare', 'Zimbabwe', 2, '2023-05-15 04:33:56'),
(2, '78 Json Moyo', 'Harare', 'Zimbabwe', 3, '2023-05-15 04:35:58'),
(3, '78 Eastlea', 'Chinhoyi', 'Zimbabwe', 4, '2023-05-15 04:37:27'),
(4, '783 Zimre', 'Harare', 'Zimbabwe', 5, '2023-05-15 07:12:46'),
(5, 'Harare', 'Harare', 'Zimbabwe', 6, '2023-05-19 08:34:52'),
(6, '948 Mangwende east Highfield ', 'Harare', 'Zimbabwe', 7, '2023-05-27 06:51:19');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `body`, `user_id`, `created_at`) VALUES
(1, 'What are some tips for growing the best tomatoes?', '                    ', 3, '2023-05-15 04:42:18'),
(2, 'What is plant disease control and treatment?', '                    From my research I have found two  which are \r\n1.Prevention: The best way to control plant diseases is to prevent them from occurring in the first place. This can be done by selecting disease-resistant plant varieties, maintaining good', 4, '2023-05-15 04:45:06');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(80) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `description`) VALUES
(1, 'farmer', NULL),
(2, 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles_users`
--

CREATE TABLE `roles_users` (
  `user_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles_users`
--

INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES
(1, 2),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `confirmed_at` datetime DEFAULT NULL,
  `fs_uniquifier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `phone`, `active`, `created_at`, `confirmed_at`, `fs_uniquifier`) VALUES
(1, 'admin', 'admin@gmail.com', '$2b$12$fyvMT47pA4OMFmftbcM5SOkpslwE1AnK0EhURDO3a54IPkFMzTNK2', '0777547547', 1, '2023-05-15 09:21:13', NULL, '5609b88675ab4d749059340f39e5aa85'),
(2, 'tony', 'tony@gmail.com', '$2b$12$2w5rtrVcRzwwpPnsK0TWK.f5eTUi2TiOITv9B3lYcaY2JP4OP3pTu', NULL, 1, '2023-05-15 04:33:56', NULL, '6cdd19b80ba447d589088a693e47a225'),
(3, 'james', 'james@gmail.com', '$2b$12$NYTFuL2D3pHCCfWRe1su0erotXFAXAFB5xo.l1.bqpumOwp.GyyQa', NULL, 1, '2023-05-15 09:21:58', NULL, '3a0e6d1f56a1480d9b0576152e65eb5b'),
(4, 'lee', 'lee@gmail.com', '$2b$12$crY/eO0fH.3gtiU3ZkkWYebo6TnztJsgTEozrHi0dZWDd/2eHCHN6', NULL, 1, '2023-05-15 04:37:27', NULL, 'fc14fd1edaf343a4b29489443624e5d3'),
(5, 'sam', 'sam@gmail.com', '$2b$12$9H2ab/H9HzU3bJVxm1XZWe4es.USI8c4e2JHD.PCK6.M29.fT7xEG', NULL, 1, '2023-05-15 07:12:46', NULL, 'f4c38975baa34952b39dc30ed6811bdc'),
(6, 'John', 'john@gmail.co', '$2b$12$iKQulwGxOAqAVTwyrhy0luGfIMWmhLrN7nKznBt5KX2oR1wFEyksG', NULL, 1, '2023-05-19 08:34:52', NULL, '812b44efeb1a460fbda7d0bbf243e221'),
(7, 'Guylord ', 'gsuprinyu@gmail.com', '$2b$12$hYBvMjL6xLmJar.xBeUEZe4mE/rYqDXX9NOPMyL7Ka21JotCI/Dfe', NULL, 1, '2023-05-27 06:51:19', NULL, '8ad64a5758654e668ec15df2c15dd294');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `roles_users`
--
ALTER TABLE `roles_users`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `fs_uniquifier` (`fs_uniquifier`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`);

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `roles_users`
--
ALTER TABLE `roles_users`
  ADD CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
