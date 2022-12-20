-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 20 2022 г., 13:00
-- Версия сервера: 10.4.26-MariaDB
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `appName`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Data`
--

CREATE TABLE `Data` (
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Data`
--

INSERT INTO `Data` (`Name`, `Email`, `id`) VALUES
('sdg dsfgdg', 'drammongi@gmail.com', 1),
('sdg dsfgdg', 'drammongi@gmail.com', 2),
('sdg dsfgdg', 'drammongi@gmail.com', 3),
('asg', 'drammongi@gmail.com', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `ID` int(7) NOT NULL,
  `Author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`ID`, `Author`, `text`, `date`) VALUES
(1, 'henry hill', '				Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis obcaecati ipsa nobis quos nesciunt quia, vero recusandae hic aliquam necessitatibus velit reprehenderit magni enim quibusdam eum, nulla natus esse porro unde praesentium, deserunt pariatur facilis dicta? Aut reiciendis perferendis voluptatem saepe hic fugit. Recusandae ullam tempora at, repellendus dolor sequi!\r\n', '2022-12-02'),
(2, 'man', '				Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis obcaecati ipsa nobis quos nesciunt quia, vero recusandae hic aliquam necessitatibus velit reprehenderit magni enim quibusdam eum, nulla natus esse porro unde praesentium, deserunt pariatur facilis dicta? Aut reiciendis perferendis voluptatem saepe hic fugit. Recusandae ullam tempora at, repellendus dolor sequi!\r\n', '2022-12-02'),
(3, 'man', '				Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis obcaecati ipsa nobis quos nesciunt quia, vero recusandae hic aliquam necessitatibus velit reprehenderit magni enim quibusdam eum, nulla natus esse porro unde praesentium, deserunt pariatur facilis dicta? Aut reiciendis perferendis voluptatem saepe hic fugit. Recusandae ullam tempora at, repellendus dolor sequi!\r\n', '2022-12-02'),
(7, 'dude', '				Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis obcaecati ipsa nobis quos nesciunt quia, vero recusandae hic aliquam necessitatibus velit reprehenderit magni enim quibusdam eum, nulla natus esse porro unde praesentium, deserunt pariatur facilis dicta? Aut reiciendis perferendis voluptatem saepe hic fugit. Recusandae ullam tempora at, repellendus dolor sequi!\r\n', '2022-12-03');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Data`
--
ALTER TABLE `Data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Data`
--
ALTER TABLE `Data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
