-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 11 2024 г., 17:16
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
-- База данных: `СТО`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Клиенты`
--

CREATE TABLE `Клиенты` (
  `id` int NOT NULL,
  `ФИО` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Телефон` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Название машины` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `Клиенты`
--

INSERT INTO `Клиенты` (`id`, `ФИО`, `Телефон`, `Название машины`) VALUES
(1, 'Горшков Х. Г.', '09-80-70-50', 'Опель 001'),
(2, ' Цветков В. Г.', '70-60-40-30', 'Рено 056'),
(3, 'Ерошкин Г. К.', '02-90-07-08', 'Лада Калина 013');

-- --------------------------------------------------------

--
-- Структура таблицы `Данные мастеров,`
--

CREATE TABLE `Данные мастеров,` (
  `id` int NOT NULL,
  `ФИО` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Специализация` text NOT NULL,
  `Зарплата` float NOT NULL,
  `Адрес` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Стаж` int NOT NULL,
  `Телефон` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `Данные мастеров,`
--

INSERT INTO `Данные мастеров,` (`id`, `ФИО`, `Специализация`, `Зарплата`, `Адрес`, `Стаж`, `Телефон`) VALUES
(1, 'Голова О. Д.', 'Мастер по деталям', 2000, 'Серпуховская 42', 5, '12-06-90-80'),
(2, 'Пупсяров З. В.', 'Мастер по ходовой', 1800, 'Мира 42-1', 7, '70-89-98-00'),
(3, 'Клюш  Е. В.', 'Мастер по кузову', 1000, 'Мишунов Е. Г.', 9, '90-80-60-50');

-- --------------------------------------------------------

--
-- Структура таблицы `Запчастей на складе`
--

CREATE TABLE `Запчастей на складе` (
  `id` int NOT NULL,
  `Название` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Цена` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `Запчастей на складе`
--

INSERT INTO `Запчастей на складе` (`id`, `Название`, `Цена`) VALUES
(1, 'Фара правая', 1000),
(2, 'Багажник ', 3500),
(3, 'Глушитель ', 2000),
(4, 'Сигнал звуковой', 2000),
(5, 'Шайба ', 1000);

-- --------------------------------------------------------

--
-- Структура таблицы `Ремонт`
--

CREATE TABLE `Ремонт` (
  `id` int NOT NULL,
  `Фамилия` varchar(255) NOT NULL,
  `Цена запчастей` int NOT NULL,
  `Цена роботы` int NOT NULL,
  `Запчасть` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `Ремонт`
--

INSERT INTO `Ремонт` (`id`, `Фамилия`, `Цена запчастей`, `Цена роботы`, `Запчасть`) VALUES
(1, 'Горшков Х. Г.', 1000, 2000, 'Фара правая'),
(2, ' Цветков В. Г.', 2000, 3000, 'Глушитель'),
(3, 'Ерошкин Г. К. 	', 3500, 2500, 'Багажник\r\n');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Клиенты`
--
ALTER TABLE `Клиенты`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Данные мастеров,`
--
ALTER TABLE `Данные мастеров,`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Запчастей на складе`
--
ALTER TABLE `Запчастей на складе`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Ремонт`
--
ALTER TABLE `Ремонт`
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
-- AUTO_INCREMENT для таблицы `Данные мастеров,`
--
ALTER TABLE `Данные мастеров,`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `Запчастей на складе`
--
ALTER TABLE `Запчастей на складе`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `Ремонт`
--
ALTER TABLE `Ремонт`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
