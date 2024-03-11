-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 11 2024 г., 17:15
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `БД Интернет-магазина (`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Клиенты`
--

CREATE TABLE `Клиенты` (
  `id` int NOT NULL,
  `ФИО` varchar(255) NOT NULL,
  `Товар` varchar(255) NOT NULL,
  `Цена` int NOT NULL,
  `Кол-во` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `Клиенты`
--

INSERT INTO `Клиенты` (`id`, `ФИО`, `Товар`, `Цена`, `Кол-во`) VALUES
(1, 'Жирков  Н. Г.', 'Компьютер', 100000, 10),
(2, 'Григорьев  Г. Л.', 'Принтер', 55000, 10),
(3, 'Овощев Е. О,', 'Ноутбук', 70000, 10);

-- --------------------------------------------------------

--
-- Структура таблицы `Продоно`
--

CREATE TABLE `Продоно` (
  `id` int NOT NULL,
  `Название` varchar(255) NOT NULL,
  `Цена` int NOT NULL,
  `Кол-во` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `Продоно`
--

INSERT INTO `Продоно` (`id`, `Название`, `Цена`, `Кол-во`) VALUES
(1, 'Компьютер', 100000, 10),
(2, 'Принтер', 55000, 10),
(3, 'Ноутбук', 70000, 10);

-- --------------------------------------------------------

--
-- Структура таблицы `Склад`
--

CREATE TABLE `Склад` (
  `id` int NOT NULL,
  `Товар` varchar(255) NOT NULL,
  `Цена` int NOT NULL,
  `кол-во` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `Склад`
--

INSERT INTO `Склад` (`id`, `Товар`, `Цена`, `кол-во`) VALUES
(1, 'Компьютер', 10000, 10),
(2, 'Ноутбук', 7000, 10),
(3, 'Принтер', 5500, 10);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Клиенты`
--
ALTER TABLE `Клиенты`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Продоно`
--
ALTER TABLE `Продоно`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Склад`
--
ALTER TABLE `Склад`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Клиенты`
--
ALTER TABLE `Клиенты`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `Продоно`
--
ALTER TABLE `Продоно`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `Склад`
--
ALTER TABLE `Склад`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
