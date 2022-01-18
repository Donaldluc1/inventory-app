-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 18 jan. 2022 à 15:39
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `project_inv`
--

-- --------------------------------------------------------

--
-- Structure de la table `brands`
--

CREATE TABLE `brands` (
  `bid` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `brands`
--

INSERT INTO `brands` (`bid`, `brand_name`, `status`) VALUES
(1, 'Samsung', '1'),
(17, 'Hp 2', '1'),
(18, 'Adobe', '1'),
(19, 'Huawei', '1'),
(24, 'Microsoft corporation', '1'),
(25, 'Brand 3', '1'),
(26, 'Orange', '1');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `cid` int(11) NOT NULL,
  `parent_cat` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`cid`, `parent_cat`, `category_name`, `status`) VALUES
(1, 0, 'Electronics', '1'),
(2, 0, 'Software', '1'),
(5, 1, 'Mobiles', '1'),
(9, 2, 'Antivirus', '1'),
(10, 2, 'Editing Software', '1'),
(17, 1, 'Laptop', '1'),
(18, 0, 'Bible 1', '1'),
(19, 0, 'Gospel', '1'),
(20, 2, 'another', '1');

-- --------------------------------------------------------

--
-- Structure de la table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_no` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `order_date` date NOT NULL,
  `sub_total` double NOT NULL,
  `gst` double NOT NULL,
  `discount` double NOT NULL,
  `net_total` double NOT NULL,
  `paid` double NOT NULL,
  `due` double NOT NULL,
  `payment_type` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `invoice`
--

INSERT INTO `invoice` (`invoice_no`, `customer_name`, `order_date`, `sub_total`, `gst`, `discount`, `net_total`, `paid`, `due`, `payment_type`) VALUES
(8, 'Ondoua FranÃ§oise', '0000-00-00', 3560000, 712000, 12000, 4260000, 4260000, 0, 'Cash'),
(9, 'ddddd', '0000-00-00', 3500000, 700000, 200000, 4000000, 4000000, 0, 'Cash'),
(10, 'aaaaa', '0000-00-00', 3500000, 700000, 500000, 3700000, 3700000, 0, 'Cash'),
(11, '', '0000-00-00', 3500000, 700000, 500000, 3700000, 3700000, 0, 'Cash'),
(12, 'aaaa', '0000-00-00', 3500000, 700000, 500000, 3700000, 3700000, 0, 'Cash'),
(13, 'Francky', '0000-00-00', 2124000, 424800, 0, 2548800, 2548800, 0, 'Cash'),
(14, 'erfgwsrgws', '0000-00-00', 1300000, 260000, 0, 1560000, 1560000, 0, 'Cash'),
(15, 'erfgwsrgws', '0000-00-00', 1300000, 260000, 0, 1560000, 1560000, 0, 'Cash'),
(16, 'erfgwsrgws', '0000-00-00', 5900000, 1180000, 0, 7080000, 7080000, 0, 'Cash'),
(17, 'qfsgfgws', '0000-00-00', 712000, 142400, 0, 854400, 854400, 0, 'Cash'),
(18, 'YYYYYYY', '0000-00-00', 660000, 132000, 0, 792000, 792000, 0, 'Cash'),
(19, 'FFFFF', '0000-00-00', 12000, 2400, 0, 14400, 14400, 0, 'Cash'),
(20, 'Rizwhan', '0000-00-00', 6600000, 1320000, 0, 7920000, 7920000, 0, 'Cash'),
(21, 'Eding', '0000-00-00', 24000, 4800, 0, 28800, 28800, 0, 'Cash'),
(22, 'Atangana Lucien', '0000-00-00', 2000000, 400000, 400000, 2000000, 2000000, 0, 'Cash'),
(23, 'Mariama Cisse', '0000-00-00', 1324000, 264800, 264800, 1324000, 1324000, 0, 'Cash'),
(24, 'Cisma', '0000-00-00', 1312000, 262400, 262400, 1312000, 1312000, 0, 'Cash'),
(25, 'Foe', '0000-00-00', 612000, 122400, 122400, 612000, 612000, 0, 'Cash'),
(26, 'Esuke', '0000-00-00', 600000, 120000, 0, 720000, 720000, 0, 'Cash'),
(27, 'Paolo', '0000-00-00', 5200000, 1040000, 0, 6240000, 6240000, 0, 'Cash'),
(28, 'test customer', '0000-00-00', 5224000, 1044800, 0, 6268800, 6268800, 0, 'Cash'),
(29, 'test customer', '0000-00-00', 5800000, 1160000, 0, 6960000, 6960000, 0, 'Cash'),
(30, 'cool customer', '0000-00-00', 5912000, 1182400, 0, 7094400, 7094400, 0, 'Cash'),
(31, 'cool customer', '0000-00-00', 13212000, 2642400, 0, 15854400, 15854400, 0, 'Cash');

-- --------------------------------------------------------

--
-- Structure de la table `invoice_details`
--

CREATE TABLE `invoice_details` (
  `id` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `invoice_details`
--

INSERT INTO `invoice_details` (`id`, `invoice_no`, `product_name`, `price`, `qty`) VALUES
(1, 8, 'Samsung Galaxy S8', 700000, 5),
(2, 8, 'Office 2010', 12000, 5),
(3, 10, 'Samsung Galaxy S8', 700000, 5),
(4, 12, 'Samsung Galaxy S8', 700000, 5),
(5, 13, 'Samsung Galaxy S8', 700000, 3),
(6, 13, 'Office 2010', 12000, 2),
(7, 14, 'Samsung Galaxy S8', 700000, 1),
(8, 14, 'Iphone 6', 600000, 1),
(9, 15, '', 0, 0),
(10, 16, 'Samsung Galaxy S8', 700000, 1),
(11, 16, 'Conditional air', 5200000, 1),
(12, 17, 'Samsung Galaxy S8', 700000, 1),
(13, 17, 'Office 2010', 12000, 1),
(14, 18, 'Iphone 6', 600000, 1),
(15, 18, 'Office 2010', 12000, 5),
(16, 19, 'Office 2010', 12000, 1),
(17, 20, 'Samsung Galaxy S8', 700000, 2),
(18, 20, 'Conditional air', 5200000, 1),
(19, 21, 'Office 2010', 12000, 2),
(20, 22, 'Samsung Galaxy S8', 700000, 2),
(21, 22, 'Iphone 6', 600000, 1),
(22, 23, 'Samsung Galaxy S8', 700000, 1),
(23, 23, 'Office 2010', 12000, 2),
(24, 23, 'Iphone 6', 600000, 1),
(25, 24, 'Office 2010', 12000, 1),
(26, 24, 'Iphone 6', 600000, 1),
(27, 24, 'Samsung Galaxy S8', 700000, 1),
(28, 25, 'Office 2010', 12000, 1),
(29, 25, 'Iphone 6', 600000, 1),
(30, 26, 'Iphone 6', 600000, 1),
(31, 27, 'Conditional air', 5200000, 1),
(32, 28, 'Conditional air', 5200000, 1),
(33, 28, 'Office 2010', 12000, 1),
(34, 28, 'Office 2010', 12000, 1),
(35, 29, 'Iphone 6', 600000, 1),
(36, 29, 'Conditional air', 5200000, 1),
(37, 30, 'Conditional air', 5200000, 1),
(38, 30, 'Office 2010', 12000, 1),
(39, 30, 'Samsung Galaxy S8', 700000, 1),
(40, 31, 'Conditional air', 5200000, 2),
(41, 31, 'Samsung Galaxy S8', 700000, 4),
(42, 31, 'Office 2010', 12000, 1);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` double NOT NULL,
  `product_stock` int(11) NOT NULL,
  `added_date` date NOT NULL,
  `p_status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`pid`, `cid`, `bid`, `product_name`, `product_price`, `product_stock`, `added_date`, `p_status`) VALUES
(2, 2, 24, 'Office 2010', 12000, 2982, '2018-09-11', '1'),
(3, 5, 26, 'Iphone 6', 600000, 1992, '2018-09-12', '1'),
(4, 1, 1, 'Conditional air', 5200000, 492, '2018-09-12', '1'),
(5, 5, 1, 'Samsung Galaxy S8', 700000, 993, '2018-09-13', '1');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `usertype` enum('Admin','Other') NOT NULL,
  `register_date` date NOT NULL,
  `last_login` datetime NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `usertype`, `register_date`, `last_login`, `notes`) VALUES
(1, 'Atangana', 'atang@gmail.com', '$2y$08$mtssJRkHelVahHjXwnlKC.F7G6IAEtMaBKGWh6fZy0Wb2a9btao7m', 'Admin', '2018-09-05', '2018-09-05 10:09:09', ''),
(2, 'test', 'test@gmail.com', '$2y$08$ZvWY1xjVGquidkbEmqpCsegtp7MqgrinBK0h68ScuV50PcRpQ.x0C', 'Admin', '2018-09-05', '2018-09-05 10:09:57', ''),
(3, 'atangana', 'atangana@gmail.com', '$2y$08$J7ArT/v2j.1y6vH/O7wZkOJsoYJcIwrvFBv0NanYFiHJ9/zucwW3W', 'Admin', '2018-09-05', '2018-09-15 10:09:50', ''),
(4, 'ondoua', 'ondoua@gmail.com', '$2y$08$pvxNcUXZd1tBHXWJLxs31uxWzooFC1H3GbWedOcRC4VMKOss35cd6', 'Admin', '2018-09-05', '2018-09-05 00:00:00', ''),
(5, 'Cisse ', 'cisse@gmail.com', '$2y$08$HiOw/xNAbFzWrNyUDJB9Ye68rtLUMzsYvIaa457EOQTuLsRFe0uCm', 'Admin', '2018-09-06', '2018-09-15 07:09:43', ''),
(6, 'Nsangou', 'nsangou@gmail.com', '$2y$08$edjblc9zPLXCN.MaemYWSuBI899DXEbQb0RFwoZO2nC5psSOLRWHm', 'Admin', '2018-09-10', '2022-01-16 11:01:07', ''),
(7, 'lucien dony', 'lucien@lucien.com', '$2y$08$cx8PDVtaQjyoIISsaK1UFuofdDn7kR4rWQG5ICi3izEwe0OoybUsO', 'Admin', '2022-01-16', '2022-01-17 11:01:27', ''),
(8, 'test name', 'test@test.com', '$2y$08$pK5g1MqK3AGsV2U2/5gZFeEvP751E.MTXau7kMLpMzV45iOCwaI6m', 'Admin', '2022-01-17', '2022-01-17 08:01:46', ''),
(9, 'coll name', 'coll@coll.com', '$2y$08$j.QfhgdFqBmfqWAZnejUP.9y4JlkoDvDOJKRraiA95nIUibzsSLqa', 'Admin', '2022-01-18', '2022-01-18 12:01:09', ''),
(10, 'cool name', 'cool@cool.com', '$2y$08$DZg5fqIUdcPqyryhRJAzXe2z5WWssJJlzDMboaaMuyPhBulyZRlIW', 'Admin', '2022-01-18', '2022-01-18 12:01:20', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`bid`),
  ADD UNIQUE KEY `brand_name` (`brand_name`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `category_name` (`category_name`);

--
-- Index pour la table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_no`);

--
-- Index pour la table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_no` (`invoice_no`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `product_name` (`product_name`),
  ADD KEY `cid` (`cid`),
  ADD KEY `bid` (`bid`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `brands`
--
ALTER TABLE `brands`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `invoice_details`
--
ALTER TABLE `invoice_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD CONSTRAINT `invoice_details_ibfk_1` FOREIGN KEY (`invoice_no`) REFERENCES `invoice` (`invoice_no`);

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `categories` (`cid`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`bid`) REFERENCES `brands` (`bid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
