-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 13 2019 г., 21:14
-- Версия сервера: 10.1.32-MariaDB
-- Версия PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `itproger_php_blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `intro` text NOT NULL,
  `text` text NOT NULL,
  `date` int(10) UNSIGNED NOT NULL,
  `author` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `intro`, `text`, `date`, `author`) VALUES
(1, 'Our first post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur ea est harum perferendis saepe ullam!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis perspiciatis repellendus unde? Aliquam aspernatur blanditiis consequuntur iusto labore libero magni modi pariatur reprehenderit sequi. Amet at aut consequatur optio perspiciatis quasi quos rerum soluta. A adipisci cumque dolorem est harum illo in inventore ipsam ipsum nihil, nostrum sint suscipit voluptatibus?', 1547384836, 'test'),
(2, 'Our second post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur ea est harum perferendis saepe ullam!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis perspiciatis repellendus unde? Aliquam aspernatur blanditiis consequuntur iusto labore libero magni modi pariatur reprehenderit sequi. Amet at aut consequatur optio perspiciatis quasi quos rerum soluta. A adipisci cumque dolorem est harum illo in inventore ipsam ipsum nihil, nostrum sint suscipit voluptatibus?', 1547384837, 'test'),
(3, 'Our third post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur ea est harum perferendis saepe ullam!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis perspiciatis repellendus unde? Aliquam aspernatur blanditiis consequuntur iusto labore libero magni modi pariatur reprehenderit sequi. Amet at aut consequatur optio perspiciatis quasi quos rerum soluta. A adipisci cumque dolorem est harum illo in inventore ipsam ipsum nihil, nostrum sint suscipit voluptatibus?', 1547384838, 'test'),
(4, 'Curious facts', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquam aut beatae.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquam aut beatae, blanditiis cupiditate eaque error.\r\nLibero minus modi, nemo non nostrum obcaecati, odio quasi qui ratione repudiandae voluptates!', 1547386018, 'george99'),
(5, 'Codi&#39;s first post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquam aut beatae, blanditiis cupiditate eaque error libero minus modi, nemo non nostrum obcaecati, odio quasi qui ratione repudiandae voluptates!', 1547386358, 'Codi'),
(16, 'Johny&#39;s post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquam aut beatae, blanditiis cupiditate eaque error libero minus modi, nemo non nostrum obcaecati, odio quasi qui ratione repudiandae voluptates!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquam aut beatae, blanditiis cupiditate eaque error libero minus modi, nemo non nostrum obcaecati, odio quasi qui ratione repudiandae voluptates!\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquam aut beatae, blanditiis cupiditate eaque error libero minus modi, nemo non nostrum obcaecati, odio quasi qui ratione repudiandae voluptates!', 1547394189, 'Johny');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(25) NOT NULL,
  `mess` text NOT NULL,
  `article_id` int(11) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `name`, `mess`, `article_id`) VALUES
(2, 'Guil H', 'Nice post', 16),
(3, 'Andrew', 'Lorem ipsum dolor sit amet, consectetur.\r\n\r\nAdipisicing elit. Ad adipisci aliquam aut beatae, blanditiis', 16),
(4, 'Johny', 'Just new comment', 5),
(5, 'Codi', 'Hey it\'s my post.\r\n\r\nThanks!', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `login`, `password`) VALUES
(1, 'George', 'george@gmail.com', 'george99', '5cfeade498c005b9bca8f0c41c335971'),
(4, 'Ashley', 'ash@gmail.com', 'ash13', '5cfeade498c005b9bca8f0c41c335971'),
(13, 'Hamol', 'ham@test.com', 'Haml09', '1648a84babf40127a94cf40ad34eb0cd'),
(33, 'Codi', 'codi@gmail.com', 'Codi', '1e6258a0b3ef9d6750e0989a30486fc0'),
(32, 'Johny', 'test2@test.com', 'Johny', '1e6258a0b3ef9d6750e0989a30486fc0');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
