-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 25 2020 г., 19:03
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET utf16 COLLATE utf16_bin;
USE `project`;

-- --------------------------------------------------------

--
-- Структура таблицы `diary`
--

CREATE TABLE `diary` (
  `users_id` int(11) NOT NULL COMMENT '№',
  `exercise` varchar(500) COLLATE utf16_bin NOT NULL COMMENT 'Упражнение',
  `lead time` varchar(50) COLLATE utf16_bin NOT NULL COMMENT 'время выполнения',
  `date` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Дата'
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Дамп данных таблицы `diary`
--

INSERT INTO `diary` (`users_id`, `exercise`, `lead time`, `date`) VALUES
(30, 'прыжки', '25мин', '2020-08-21 19:40:16');

-- --------------------------------------------------------

--
-- Структура таблицы `group`
--

CREATE TABLE `group` (
  `id` int(11) NOT NULL COMMENT '№',
  `name` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Имя',
  `cod` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Код'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `group`
--

INSERT INTO `group` (`id`, `name`, `cod`) VALUES
(1, 'Администратор', 'admin'),
(2, 'Пользователь', 'user');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT '№',
  `login` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Пользователь',
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Пароль',
  `group_id` int(11) NOT NULL COMMENT 'Группа',
  `FIO` varchar(150) NOT NULL COMMENT 'ФИО',
  `Weight` int(11) NOT NULL COMMENT 'Вес',
  `Growth` int(11) NOT NULL COMMENT 'Рост',
  `Gender` varchar(11) NOT NULL COMMENT 'Пол'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `group_id`, `FIO`, `Weight`, `Growth`, `Gender`) VALUES
(30, 'start', '123', 1, 'AAA BBB CCC', 68, 167, '1'),
(31, 'finish', '987', 1, 'DD DD  DD', 89, 158, '1'),
(32, 'tyt', 'rty', 1, ' rtyr ty r ty', 89, 188, 'women'),
(33, 'yrtyrt', 'tyrt rty ', 2, 'yt rty rty', 89, 158, 'men'),
(34, 'Pavel', '987', 2, 'DD DD  DD', 78, 225, 'М'),
(35, 'Vasya', '569', 2, 'ерке ке ке ', 99, 185, 'М');

-- --------------------------------------------------------

--
-- Структура таблицы `workouts`
--

CREATE TABLE `workouts` (
  `user_id` int(11) NOT NULL COMMENT '№',
  `exercise` varchar(500) COLLATE utf16_bin NOT NULL COMMENT 'Упражнение',
  ` number of repetitions` varchar(100) COLLATE utf16_bin NOT NULL COMMENT 'Количество повторений',
  ` lead time` varchar(100) COLLATE utf16_bin NOT NULL COMMENT 'Время выполнения'Количество повторений
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Дамп данных таблицы `workouts`
--

INSERT INTO `workouts` (`user_id`, `exercise`, ` number of repetitions`, ` lead time`) VALUES
(30, 'Бег', '-', '10мин');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `diary`
--
ALTER TABLE `diary`
  ADD PRIMARY KEY (`users_id`);

--
-- Индексы таблицы `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD KEY `group_id` (`group_id`);

--
-- Индексы таблицы `workouts`
--
ALTER TABLE `workouts`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `group`
--
ALTER TABLE `group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `workouts`
--
ALTER TABLE `workouts`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=31;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `diary`
--
ALTER TABLE `diary`
  ADD CONSTRAINT `diary_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `group` (`id`);

--
-- Ограничения внешнего ключа таблицы `workouts`
--
ALTER TABLE `workouts`
  ADD CONSTRAINT `workouts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
