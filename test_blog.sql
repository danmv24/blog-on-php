-- phpMyAdmin SQL Dump
-- version 5.0.4deb2~bpo10+1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 09, 2021 at 09:30 PM
-- Server version: 10.3.27-MariaDB-0+deb10u1
-- PHP Version: 7.3.27-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `age_children`
--

CREATE TABLE `age_children` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `text` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `age_children`
--

INSERT INTO `age_children` (`id`, `title`, `description`, `text`, `img`) VALUES
(1, 'Космос', 'привет это работает?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '6.jpg'),
(2, 'dfbgfnbb', 'fgbdfgbdfb', 'dfbgfgbdfbgfbggfbfgbfgb', '12.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `age_old`
--

CREATE TABLE `age_old` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `text` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `age_old`
--

INSERT INTO `age_old` (`id`, `title`, `description`, `text`, `img`) VALUES
(1, 'работает', 'привет как тебя зовут', 'аиппаипаиапивипаапиапиапиапипаипаипаиапиапи', '14.jpg\r\n'),
(2, 'trtertret', 'erterggggggggggggggggggggggggggggggggg', 'gggggggggggggggggggggggggggggggggggggggggggg', ''),
(3, 'gggggggggggggggggggggggggggggggggggggggg', 'gggggggggggggggggggggggggggggggg', 'gggggggggggggggggggggggggggggg', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'Статьи', 'В этом разделе вас ждут интересные статьи о космосе, потрясающие факты, о которых вы ещё не слышали. Читая наши статьи, Вы точно не соскучитесь!'),
(2, 'Самостоятельные работы', 'В данном разделе вы можете проверить свои знания о космосе. Тут вас ждут интересные вопросы, увлекательные кроссворды и многое другое.'),
(3, 'Видеоролики', 'Мы собрали для вас интереснейшие видеоролики, чтобы вы смогли насладиться их просмотром и отправиться в путешествие по космосу.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `age_children`
--
ALTER TABLE `age_children`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `age_old`
--
ALTER TABLE `age_old`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `age_children`
--
ALTER TABLE `age_children`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `age_old`
--
ALTER TABLE `age_old`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
