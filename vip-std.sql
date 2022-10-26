-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 15 2022 г., 12:13
-- Версия сервера: 8.0.29
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `vip-std`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id_posts` int NOT NULL,
  `post_name` varchar(32) NOT NULL,
  `post_date` datetime NOT NULL,
  `post_author` varchar(10) NOT NULL,
  `post_cat` varchar(12) NOT NULL,
  `post_cat_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `post_cat`
--

CREATE TABLE `post_cat` (
  `id_cat` int NOT NULL,
  `cat_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `progects`
--

CREATE TABLE `progects` (
  `id_progect` int UNSIGNED NOT NULL,
  `progect_name` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `progect_screen` varchar(512) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `progect_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `progect_cat_id` int NOT NULL,
  `progect_thamb` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `progect_thamb_2` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `progect_thamb_3` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `progect_price` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `progects`
--

INSERT INTO `progects` (`id_progect`, `progect_name`, `progect_screen`, `progect_desc`, `progect_cat_id`, `progect_thamb`, `progect_thamb_2`, `progect_thamb_3`, `progect_price`) VALUES
(1, 'Проект', '', 'Нормальный блог', 0, '../img/gallery/gallery_12.jpg', '', '', '124');

-- --------------------------------------------------------

--
-- Структура таблицы `progect_cat`
--

CREATE TABLE `progect_cat` (
  `id` int NOT NULL,
  `cat_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_posts`);

--
-- Индексы таблицы `post_cat`
--
ALTER TABLE `post_cat`
  ADD PRIMARY KEY (`id_cat`);

--
-- Индексы таблицы `progects`
--
ALTER TABLE `progects`
  ADD PRIMARY KEY (`id_progect`);

--
-- Индексы таблицы `progect_cat`
--
ALTER TABLE `progect_cat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id_posts` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `post_cat`
--
ALTER TABLE `post_cat`
  MODIFY `id_cat` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `progect_cat`
--
ALTER TABLE `progect_cat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
