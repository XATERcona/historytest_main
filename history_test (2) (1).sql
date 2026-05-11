-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 01 2026 г., 17:02
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
-- База данных: `history_test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_text` text NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `answer_text`, `score`) VALUES
(1, 1, 'Игорь', 0),
(2, 1, 'Владимир', 1),
(3, 1, 'Олег', 0),
(4, 2, 'Перун', 1),
(5, 2, 'Яровит', 0),
(6, 2, 'Велес', 0),
(7, 3, 'Опричнина', 0),
(8, 3, 'Золотой век', 0),
(9, 3, 'Смутное время', 1),
(10, 4, 'Федор Алексеевич', 0),
(11, 4, 'Петр 1', 0),
(12, 4, 'Михаил Федорович', 1),
(13, 5, '1691 год', 0),
(14, 5, '1721 год', 1),
(15, 5, '1747 год', 0),
(16, 6, '988 год', 1),
(17, 6, '1012 год', 0),
(18, 6, '901 год', 0),
(19, 7, 'Александр 1', 1),
(20, 7, 'Николай 2', 0),
(21, 7, 'Александр 2', 0),
(22, 8, 'Барщина', 1),
(23, 8, 'Оброк', 0),
(24, 8, 'Юрьев день', 0),
(25, 9, 'Полюдье', 1),
(26, 9, 'Оброк', 0),
(27, 9, 'Подушная подать', 0),
(28, 10, 'Большевики', 0),
(29, 10, 'Временное правительство', 1),
(30, 10, 'Кадеты', 0),
(31, 11, 'Волга', 0),
(32, 11, 'Дон', 0),
(33, 11, 'Днепр', 1),
(34, 12, '1775 год', 0),
(35, 12, '1791 год', 0),
(36, 12, '1783 год', 1),
(37, 13, 'Игорь', 0),
(38, 13, 'Святослав', 1),
(39, 13, 'Олег', 0),
(40, 14, 'Поражение во время Прутского похода', 0),
(41, 14, 'Указ о престолонаследии', 1),
(42, 14, 'Реформы Петра', 0),
(43, 15, 'Судебник', 0),
(44, 15, 'Повесть Временных лет', 0),
(45, 15, 'Русская Правда', 1),
(46, 16, 'Павел 1', 0),
(47, 16, 'Николай 2', 0),
(48, 16, 'Александр 3', 1),
(49, 17, 'Олег', 0),
(50, 17, 'Ольга', 1),
(51, 17, 'Игорь', 0),
(52, 18, 'Юрий Долгорукий', 0),
(53, 18, 'Степан Кучка', 0),
(54, 18, 'Иван 3', 1),
(55, 19, 'Повышение авторитета князя', 1),
(56, 19, 'Из-за языческого синкретизма', 0),
(57, 19, 'Чтобы получать материальные подаяния от общины', 0),
(58, 20, 'Допускает прием в гимназии детей из низших сословий', 0),
(59, 20, 'Ограничивает прием в гимназии детей из низших сословий', 1),
(60, 20, 'Запрет на нахождение детей на императорской кухне', 0),
(61, 21, 'Князь, царь, император', 1),
(62, 21, 'Князь, король, царь', 0),
(63, 21, 'Царь, президент, князь', 0),
(64, 22, 'Бирон', 0),
(65, 22, 'Григорий Орлов', 1),
(66, 22, 'Владимир Орлов', 0),
(67, 23, 'Кючук-Кайнарджийский', 1),
(68, 23, 'Каучук-Кайнарджийский', 0),
(69, 23, 'Кючук-Кайноджинский', 0),
(70, 24, 'Аракчеевщина', 1),
(71, 24, 'Опричнина', 0),
(72, 24, 'Бироновщина', 0),
(73, 25, '1709 год', 0),
(74, 25, '1708 год', 1),
(75, 25, '1714 год', 0),
(76, 26, 'Требование стрельцов немедленно начать войну с Крымским ханством', 0),
(77, 26, 'Нежелание стрельцов служить под командованием иностранных офицеров', 0),
(78, 26, 'Слухи о том, что царевича Ивана незаконно лишили престола и хотят «извести»', 1),
(79, 27, 'Введение подушной подати', 0),
(80, 27, 'Создание Славяно-греко-латинской академии', 1),
(81, 27, 'Отмена местничества', 0),
(82, 28, 'Предательства, в результате которого половцы разорили Черниговскую землю', 0),
(83, 28, 'Разрыва связи с христианской церковью', 0),
(84, 28, 'Убийства братьев-князей Бориса и Глеба', 1),
(85, 29, 'Милюков', 0),
(86, 29, 'Коновалов', 0),
(87, 29, 'Керенский', 1),
(88, 30, 'Способствовала духовному кризису', 1),
(89, 30, 'Дала свободу крестьянам', 0),
(90, 30, 'Способствовала развитию капитализма', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `scenario_id` int(11) NOT NULL,
  `question_text` text NOT NULL,
  `question_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `scenario_id`, `question_text`, `question_order`) VALUES
(1, 1, 'Какой князь крестил Русь?', 1),
(2, 1, 'Кто считается главным языческим богом у славян?', 2),
(3, 1, 'Как назывался период в истории России с 1598 по 1613 год?', 3),
(4, 1, 'Кто стал первым правителем из династии Романовых?', 4),
(5, 1, 'В каком году Петр 1 провозгласил Россию - Империей?', 5),
(6, 1, 'В каком году крестили Русь?', 6),
(7, 1, 'При каком российском правителе состоялось Бородинское сражение?', 7),
(8, 1, 'Работа на земле феодала - это..', 8),
(9, 1, 'Как называется ежегодной сбор дани на Древней Руси?', 9),
(10, 1, 'Кто сверг Николая 2?', 10),
(11, 2, 'Через какую из этих рек проходил торговый путь \"из варяг в греки\"?', 1),
(12, 2, 'В каком году Екатерина 2 присоединила Крым к России?', 2),
(13, 2, 'При правлении какого князя произошел разгром Хазарского каганата?  ', 3),
(14, 2, 'Причиной дворцовых переворотов стало..', 4),
(15, 2, 'Первый русский свод законов..', 5),
(16, 2, 'При каком императоре Россия не вела ни одной войны?', 6),
(17, 2, '\"Уроки\" и \"Погосты\" были введены..', 7),
(18, 2, 'Кто временно прекратил выплату дани Золотой Орде? ', 8),
(19, 2, 'Причина принятия христианства..', 9),
(20, 2, 'О чем гласит циркуляр  о «кухаркиных детях»?', 10),
(21, 3, 'Какие были титулы у правителей России?', 1),
(22, 3, 'Кто сыграл решающую роль в свержении Петра 3?', 2),
(23, 3, 'Какой договор был подписан между Российской и Османской империями в 1774г?', 3),
(24, 3, 'Как называлась вторая половина правления Александра 1?', 4),
(25, 3, 'В каком году была битва при Лесной?', 5),
(26, 3, 'Каков был формальный повод для начала Стрелецкого бунта 1682 года?', 6),
(27, 3, 'Что из перечисленного стало одним из значимых достижений правительства Софьи и В. Голицына?', 7),
(28, 3, 'После каких действий Святополк получил прозвище «Окаянный»?', 8),
(29, 3, 'Кто считался инициатором многих постановлений Временного правительства, которые имели революционный характер?', 9),
(30, 3, 'Последствия реформы 1861г (выберите лишнее)', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `scenario_id` int(11) NOT NULL,
  `total_score` int(11) NOT NULL,
  `result_id` int(11) NOT NULL,
  `passed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `results`
--

INSERT INTO `results` (`id`, `user_id`, `scenario_id`, `total_score`, `result_id`, `passed_at`) VALUES
(1, 2, 1, 9, 3, '2026-04-27 14:39:28'),
(2, 2, 1, 0, 1, '2026-04-27 14:40:51'),
(3, 2, 1, 3, 1, '2026-04-27 14:43:20'),
(4, 2, 1, 5, 2, '2026-04-27 14:45:59'),
(5, 2, 1, 7, 2, '2026-04-27 14:51:40'),
(6, 2, 1, 9, 3, '2026-04-27 14:52:00');

-- --------------------------------------------------------

--
-- Структура таблицы `result_text`
--

CREATE TABLE `result_text` (
  `id` int(11) NOT NULL,
  `scenario_id` int(11) NOT NULL,
  `title_text` varchar(255) NOT NULL,
  `min_score` int(11) NOT NULL,
  `max_score` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `result_text`
--

INSERT INTO `result_text` (`id`, `scenario_id`, `title_text`, `min_score`, `max_score`, `description`) VALUES
(1, 1, 'Плохой результат', 0, 3, 'Больше НИКОГДА не участвуй в исторических викторинах, лучше не позорься.'),
(2, 1, 'Нормальный результат', 4, 8, 'Береги голову свою, она еще пригодится.'),
(3, 1, 'Хороший результат', 8, 10, 'Проверь свои знания на следующем уровне) '),
(4, 2, 'Плохой результат', 0, 3, 'Неплохо только для холопа. '),
(5, 2, 'Нормальный результат', 4, 7, 'Смельчай, да выбирай верный путь - сложный уровень.\r\n'),
(6, 2, 'Хороший результат', 8, 10, 'Готов стать писарем царским? '),
(7, 3, 'Плохой результат', 0, 3, 'Да поможет тебе табель о рангах.'),
(8, 3, 'Нормальный результат', 4, 7, 'Совсем немного не хватило до победы, но Валерия Грозная не серчает.'),
(9, 3, 'Хороший результат', 8, 10, 'Да быть тебе 6 генералиссимусом.');

-- --------------------------------------------------------

--
-- Структура таблицы `scenarios`
--

CREATE TABLE `scenarios` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `scenarios`
--

INSERT INTO `scenarios` (`id`, `title`, `description`, `category`, `created_at`) VALUES
(1, 'Легкий уровень', '-', 'Легкий', '2026-04-21 08:19:09'),
(2, 'Средний уровень', '-', 'Средний', '2026-04-21 08:19:28'),
(3, 'Сложный уровень', '-', 'Сложный', '2026-04-21 08:19:46');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`, `role`, `created_at`) VALUES
(1, '111', '111@111.ru', '$2y$10$vZ6uPhR.oKkAvgZuJw5vcO2eLmI0NwJZNva/6ob.AN4ZnoF302FOu', 'admin', '2026-04-27 13:37:52'),
(2, '222', '222@222.com', '$2y$10$4LvEVjRj.8sylLCLlz3dEuT8RiyD6AAcBjQoqi1mDFu8.Tplz/vjW', 'user', '2026-04-27 13:49:49');

-- --------------------------------------------------------

--
-- Структура таблицы `user_answers`
--

CREATE TABLE `user_answers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `scenario_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_id` (`question_id`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `scenario_id` (`scenario_id`);

--
-- Индексы таблицы `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `scenario_id` (`scenario_id`),
  ADD KEY `result_id` (`result_id`);

--
-- Индексы таблицы `result_text`
--
ALTER TABLE `result_text`
  ADD PRIMARY KEY (`id`),
  ADD KEY `scenario_id` (`scenario_id`);

--
-- Индексы таблицы `scenarios`
--
ALTER TABLE `scenarios`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Индексы таблицы `user_answers`
--
ALTER TABLE `user_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `scenario_id` (`scenario_id`),
  ADD KEY `question_id` (`question_id`),
  ADD KEY `answer_id` (`answer_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `result_text`
--
ALTER TABLE `result_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `scenarios`
--
ALTER TABLE `scenarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `user_answers`
--
ALTER TABLE `user_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`scenario_id`) REFERENCES `scenarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `results_ibfk_2` FOREIGN KEY (`scenario_id`) REFERENCES `scenarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `results_ibfk_3` FOREIGN KEY (`result_id`) REFERENCES `result_text` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `result_text`
--
ALTER TABLE `result_text`
  ADD CONSTRAINT `result_text_ibfk_1` FOREIGN KEY (`scenario_id`) REFERENCES `scenarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user_answers`
--
ALTER TABLE `user_answers`
  ADD CONSTRAINT `user_answers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_answers_ibfk_2` FOREIGN KEY (`scenario_id`) REFERENCES `scenarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_answers_ibfk_3` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_answers_ibfk_4` FOREIGN KEY (`answer_id`) REFERENCES `answers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
