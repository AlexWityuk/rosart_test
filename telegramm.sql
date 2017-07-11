-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3307
-- Час створення: Лип 11 2017 р., 15:27
-- Версія сервера: 5.5.48
-- Версія PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `telegramm`
--

-- --------------------------------------------------------

--
-- Структура таблиці `catagory`
--

CREATE TABLE IF NOT EXISTS `catagory` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `catagory`
--

INSERT INTO `catagory` (`id`, `name`) VALUES
(1, 'Мастер'),
(2, 'Категория'),
(3, 'Техника');

-- --------------------------------------------------------

--
-- Структура таблиці `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `categories`
--

INSERT INTO `categories` (`id`, `name`, `subid`) VALUES
(1, 'Рейпольский А.Д.', 1),
(2, 'Рудаева Е.Л.', 1),
(3, 'Митков Павел', 1),
(4, 'Уркинеев Д.Л.', 1),
(5, 'Гусев Валерий', 1),
(6, 'Живопись', 2),
(7, 'Графика', 2),
(8, 'Изделия', 2),
(9, 'Карандаш', 3),
(10, 'Акрил', 3),
(11, 'Акварель', 3),
(12, 'Масло', 3),
(13, 'Тушь', 3),
(14, 'Каменная живопись', 3);

-- --------------------------------------------------------

--
-- Структура таблиці `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` varchar(10) NOT NULL,
  `master` int(11) NOT NULL,
  `technika` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  `url` varchar(250) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `master`, `technika`, `date`, `url`, `category_id`) VALUES
(1, 'ДЕВУШКА В КРАСНОМ ПЛАТКЕ', '2500', 2, 9, '2010', '/views/img/pic8.jpg', 6),
(2, 'Цикл Литографий  «Маскарад» Лит.№26', '3000', 1, 9, '2011', '/views/img/pic8.jpg', 7),
(3, 'Цикл Литографий  «Маскарад» Лит.№27', '1500', 3, 10, '2008', '/views/img/pic8.jpg', 6),
(4, 'Цикл Литографий  «Маскарад» Лит.№21', '1477', 5, 12, '2001', '/views/img/pic8.jpg', 8),
(5, 'Цикл Литографий  «Маскарад» Лит.№22', '1580', 4, 14, '2002', '/views/img/pic8.jpg', 7),
(6, 'Цикл Литографий  «Маскарад» Лит.№31', '4500', 2, 12, '2012', '/views/img/pic8.jpg', 6),
(7, 'Цикл Литографий  «Маскарад» Лит.№32', '1200', 1, 9, '2005', '/views/img/pic8.jpg', 7),
(8, 'Цикл Литографий  «Маскарад» Лит.№33', '2200', 1, 9, '2001', '/views/img/pic8.jpg', 6),
(9, 'Цикл Литографий  «Маскарад» Лит.№34', '2200', 2, 10, '2011', '/views/img/pic8.jpg', 6);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subid` (`subid`),
  ADD KEY `subid_2` (`subid`);

--
-- Індекси таблиці `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `master` (`master`),
  ADD KEY `technika` (`technika`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблиці `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблиці `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
