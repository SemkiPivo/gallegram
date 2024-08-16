-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 16 2024 г., 10:48
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `php-framework`
--

-- --------------------------------------------------------

--
-- Структура таблицы `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `reports`
--

INSERT INTO `reports` (`id`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(5, 'test@test.com', 'Message subject', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis facilisis sem, quis iaculis orci. Aenean vitae pretium nisi, id blandit eros. Donec in leo fringilla, sagittis orci in, laoreet nisl. Duis vestibulum mi lorem, eget pharetra arcu elementum vitae. Aenean fermentum quam nec venenatis viverra. Nulla sagittis ante mauris, non venenatis nisl pharetra vel. Praesent fermentum elementum quam id condimentum. Mauris pretium ligula pharetra dictum mattis. Proin velit metus, placerat ac sapien porttitor, varius faucibus odio. Quisque eleifend varius aliquam. Sed et pellentesque nibh.\r\n            ', '2024-08-13 07:01:19', '2024-08-13 07:01:19'),
(6, 'test@test.com', 'Message subject', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis facilisis sem, quis iaculis orci. Aenean vitae pretium nisi, id blandit eros. Donec in leo fringilla, sagittis orci in, laoreet nisl. Duis vestibulum mi lorem, eget pharetra arcu elementum vitae. Aenean fermentum quam nec venenatis viverra. Nulla sagittis ante mauris, non venenatis nisl pharetra vel. Praesent fermentum elementum quam id condimentum. Mauris pretium ligula pharetra dictum mattis. Proin velit metus, placerat ac sapien porttitor, varius faucibus odio. Quisque eleifend varius aliquam. Sed et pellentesque nibh.\r\n            ', '2024-08-13 07:05:46', '2024-08-13 07:05:46'),
(7, 'test@test.com', 'Message subject', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis facilisis sem, quis iaculis orci. Aenean vitae pretium nisi, id blandit eros. Donec in leo fringilla, sagittis orci in, laoreet nisl. Duis vestibulum mi lorem, eget pharetra arcu elementum vitae. Aenean fermentum quam nec venenatis viverra. Nulla sagittis ante mauris, non venenatis nisl pharetra vel. Praesent fermentum elementum quam id condimentum. Mauris pretium ligula pharetra dictum mattis. Proin velit metus, placerat ac sapien porttitor, varius faucibus odio. Quisque eleifend varius aliquam. Sed et pellentesque nibh.\r\n            ', '2024-08-13 07:06:02', '2024-08-13 07:06:02'),
(8, 'test@test.com', 'Message subject', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis facilisis sem, quis iaculis orci. Aenean vitae pretium nisi, id blandit eros. Donec in leo fringilla, sagittis orci in, laoreet nisl. Duis vestibulum mi lorem, eget pharetra arcu elementum vitae. Aenean fermentum quam nec venenatis viverra. Nulla sagittis ante mauris, non venenatis nisl pharetra vel. Praesent fermentum elementum quam id condimentum. Mauris pretium ligula pharetra dictum mattis. Proin velit metus, placerat ac sapien porttitor, varius faucibus odio. Quisque eleifend varius aliquam. Sed et pellentesque nibh.\r\n            ', '2024-08-13 09:58:14', '2024-08-13 09:58:14'),
(9, 'test@test.com', 'Message subject', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis facilisis sem, quis iaculis orci. Aenean vitae pretium nisi, id blandit eros. Donec in leo fringilla, sagittis orci in, laoreet nisl. Duis vestibulum mi lorem, eget pharetra arcu elementum vitae. Aenean fermentum quam nec venenatis viverra. Nulla sagittis ante mauris, non venenatis nisl pharetra vel. Praesent fermentum elementum quam id condimentum. Mauris pretium ligula pharetra dictum mattis. Proin velit metus, placerat ac sapien porttitor, varius faucibus odio. Quisque eleifend varius aliquam. Sed et pellentesque nibh.\r\n            ', '2024-08-15 08:27:30', '2024-08-15 08:27:30'),
(10, 'test@test.com', 'Message subject', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis facilisis sem, quis iaculis orci. Aenean vitae pretium nisi, id blandit eros. Donec in leo fringilla, sagittis orci in, laoreet nisl. Duis vestibulum mi lorem, eget pharetra arcu elementum vitae. Aenean fermentum quam nec venenatis viverra. Nulla sagittis ante mauris, non venenatis nisl pharetra vel. Praesent fermentum elementum quam id condimentum. Mauris pretium ligula pharetra dictum mattis. Proin velit metus, placerat ac sapien porttitor, varius faucibus odio. Quisque eleifend varius aliquam. Sed et pellentesque nibh.\r\n            ', '2024-08-15 08:27:44', '2024-08-15 08:27:44');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `token`, `created_at`, `updated_at`) VALUES
(19, 'Kirill', 'test@test.com', '$2y$10$vqPV17S8QhRVXtfTLjn0vO8.BTzDIPr0s.mN/8nrUdnAHwaw7uldi', 'qcmozsvsS5UcuoktWojAIms8r7chOhdQIQWGXoAzbzo3ToE81P', '2024-08-15 13:28:12', '2024-08-15 13:28:16');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
