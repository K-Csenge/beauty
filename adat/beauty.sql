-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 07:42 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beauty`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(20) NOT NULL,
  `userid` int(10) NOT NULL,
  `date` date NOT NULL,
  `text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `userid`, `date`, `text`) VALUES
(1, 8, '2022-03-17', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas et scelerisque arcu. Curabitur iaculis at eros in venenatis. Nunc ut odio nec neque egestas laoreet non non mauris. Nulla quis neque id nisi pellentesque dictum non at neque. Nunc elit nisl, tempus vitae eleifend sit amet, molestie eget nunc. In facilisis, tellus vitae egestas gravida, nibh dolor ultricies ex, consequat egestas mauris massa in elit. Phasellus vulputate gravida est ac tristique. Vestibulum eu orci orci. Nunc convallis ipsum eget lectus aliquet mollis. Nam vel diam placerat, luctus metus id, blandit nibh. Cras hendrerit sagittis vehicula. Nunc blandit euismod erat sed consequat.'),
(2, 8, '2022-03-02', 'Sed ac maximus purus, non mollis libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque tellus velit, molestie vel rhoncus ut, pharetra ut diam. Ut finibus turpis at velit mattis pretium. Suspendisse sed purus lorem. Mauris eu pulvinar quam. Morbi venenatis condimentum tincidunt. Duis rutrum lacus tortor, ut vulputate felis varius ac. Vestibulum tristique tristique felis quis vehicula. Etiam vestibulum tincidunt ligula, ut maximus enim scelerisque vitae. Mauris interdum, dui id auctor sagittis, nisi est feugiat tortor, in hendrerit felis enim dictum massa. Proin vestibulum eu tortor ut efficitur. Quisque hendrerit odio a est euismod pellentesque. Nulla varius ex eu enim pellentesque ullamcorper.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `admin` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `gender`, `email`, `password`, `admin`) VALUES
(8, 'joshika39', 'Joshua', 'Hegedűs', 1, 'jhegedus9@gmail.com', 'asdasd', 'y'),
(9, 'test', 'Laci', 'asdasd', 1, 'laci@test.com', 'asdasd', 'n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
