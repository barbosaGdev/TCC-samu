-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Abr-2018 às 01:22
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'AdminSamu', '$2y$10$3SBVcTBkQicYVleQkasVOOrShhasCq0v1zVm2ofT7dOp7NCx22Y9m', 'admin@adm.com', '2018-03-31 18:18:21', '2018-03-19 00:50:09', 'HIvjs071x7KKFmtDi8HWi0M5LENA0fvbqdEKz6xZtdisbee15xIugnUMVOTu'),
(2, 'Hugo', '$2y$10$f8YkGr/3LRYFfyaM2CGEguP6RuznYsNnyJBP4L7nQqL2DWHXzkrae', 'a@a.com', '2018-03-31 18:05:22', '2018-03-19 00:50:33', 'ZZCrfMKN69NKHEg9r0p4RsalPRFNYDqLvqa2pQmxoHLzfLBRvBsU7b2d2xi3'),
(3, 'Marquinho', '$2y$10$x6lDvScxazts2k4Uw0163u3V56Sbm2zq4r3rlfZVJLn6yREmav0du', 'b@b.com', '2018-03-31 18:02:04', '2018-03-23 19:40:04', 'cmZXLbY29bdITLQhjCfSbI6yIHknV7BxCkj7s4TNhfidpumW9vn8UVKzzm0P'),
(4, 'Judas', '$2y$10$oc.JSDnToQjmZsHzKHOPpeE177Yf2dwyjfiTcF9LfFlW30IoICxpa', 'c@c.com', '2018-03-31 18:09:19', '2018-03-31 21:08:38', '2QJkHl4225CtMKLBg66MNIghZ4nirXJur48bX0xSwNgUDhxy136BCef4GGFA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
