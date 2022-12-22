-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Дек 22 2022 г., 23:39
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `landingPage`
--

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) NOT NULL,
  `review` varchar(500) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `review`, `date`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis obcaecati ipsa nobis quos nesciunt quia, vero recusandae hic aliquam necessitatibus velit reprehenderit magni enim quibusdam eum, nulla natus esse porro unde praesentium, deserunt pariatur facilis dicta? Aut reiciendis perferendis voluptatem saepe hic fugit. Recusandae ullam tempora at, repellendus dolor sequi!\r\n', '2022-12-23'),
(2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis obcaecati ipsa nobis quos nesciunt quia, vero recusandae hic aliquam necessitatibus velit reprehenderit magni enim quibusdam eum, nulla natus esse porro unde praesentium, deserunt pariatur facilis dicta? Aut reiciendis perferendis voluptatem saepe hic fugit. Recusandae ullam tempora at, repellendus dolor sequi!\r\n', '2022-12-23'),
(3, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis obcaecati ipsa nobis quos nesciunt quia, vero recusandae hic aliquam necessitatibus velit reprehenderit magni enim quibusdam eum, nulla natus esse porro unde praesentium, deserunt pariatur facilis dicta? Aut reiciendis perferendis voluptatem saepe hic fugit. Recusandae ullam tempora at, repellendus dolor sequi!\r\n', '2022-12-23'),
(4, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis obcaecati ipsa nobis quos nesciunt quia, vero recusandae hic aliquam necessitatibus velit reprehenderit magni enim quibusdam eum, nulla natus esse porro unde praesentium, deserunt pariatur facilis dicta? Aut reiciendis perferendis voluptatem saepe hic fugit. Recusandae ullam tempora at, repellendus dolor sequi!\r\n', '2022-12-23');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`) VALUES
(1, 'Paul Willson', 'Willson@gmail.com'),
(2, 'Sandra Parker', 'sNdPArker@gmail.com'),
(3, 'James Watts', 'Watts@gmail.com'),
(4, 'Harold Pain', 'pain@gmail.com'),
(8, 'Vova', 'Coff33Only@yandex.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
