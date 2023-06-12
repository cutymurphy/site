-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 23 2023 г., 23:43
-- Версия сервера: 8.0.30
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `space-site`
--

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `admin` tinyint NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `admin`, `username`, `email`, `password`, `created`) VALUES
(2, 0, 'Vlad', 'vlad2004@yandex.ru', 'fsdjnsdfvladgovno', '2023-05-21 17:52:04'),
(3, 0, 'Sobaka', 'doggy@dog.com', 'doooooogggg000', '2023-05-21 18:26:47'),
(4, 1, 'KITTY', 'cat@kitty.com', 'kittykitty', '2023-05-21 18:31:37'),
(7, 0, 'Alena', 'alena@gmail.com', 'dfsfsede', '2023-05-21 19:15:23'),
(12, 0, 'Сушкова Дарья Сергеевна', 'daryasushkova030105@gmail.com', '$2y$10$diskTB5KPPDfZgMYG1ATBe54GhogkDR.lUqPpSOI0w8Fdb2BA6Wzy', '2023-05-22 14:01:00'),
(15, 0, 'Дарья', 'dashmiss745@gmail.com', 'fgdgdfg', '2023-05-22 14:42:12'),
(16, 0, 'ДАШАSSS', 'ds745@gmail.com', '555', '2023-05-22 15:58:05'),
(19, 0, 'ДАША', 'dashms745@gmail.com', 'ццц', '2023-05-22 16:17:36'),
(20, 0, 'Дарья', 'dashkamiss745@gmail.com', 'EWEW', '2023-05-22 16:19:56'),
(23, 0, 'Дарья', 'dass745@gmail.com', 'ааа', '2023-05-22 16:20:42'),
(25, 0, 'murphy', 'murrr@ya.com', 'yaya', '2023-05-22 16:21:54'),
(26, 0, 'murphy', 'mur@ya.com', 'sfsfsfsef', '2023-05-22 16:27:41'),
(27, 0, 'ДАША', 'dasha.030105@gmail.com', 'wewe', '2023-05-22 16:41:38'),
(28, 0, 'Дарья', 'dhbfshwewf@gmail.com', 'wewew', '2023-05-22 17:42:22'),
(29, 0, 'Проверяю', 'check@gmail.com', 'checkme', '2023-05-22 18:00:30'),
(30, 0, 'Дарья', 'daiss745@gmail.com', 'fff', '2023-05-22 18:03:00'),
(31, 0, 'AKAKIY', 'akakiu1021210@ua.com', '454545', '2023-05-23 18:47:01'),
(32, 0, 'ццуйц', 'diss745@gmail.com', '1111', '2023-05-23 18:54:00'),
(33, 0, 'Дарья', 'd@gmail.com', '111', '2023-05-23 19:00:14');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
