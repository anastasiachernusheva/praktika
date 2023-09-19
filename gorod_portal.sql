-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 19 2023 г., 09:19
-- Версия сервера: 5.7.39
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gorod_portal`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(1, 'Ямы и разрушения'),
(2, 'Ремонт дорог'),
(3, 'Мусор, листва'),
(5, 'Наружное освещение'),
(6, 'Приведение в порядок газонов'),
(7, 'Приведение в порядок игровых площадок'),
(8, 'Новые ограждения, знаки, \"лежачие полицейские\"');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `fio` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Пользователь'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `fio`, `email`, `login`, `password`, `role`) VALUES
(1, 'Алиев Илья Андреевич', 'alliev@mail.ru', 'admin', 'admin', 'Админ'),
(2, 'АНДРЕЕВ МАКСИМ', 'Ayd@mail.ru', '1234', '111', 'Пользователь'),
(3, 'Карнеева Анна', 'Anna@mail.ru', 'a1123', '123', 'Пользователь'),
(4, 'Фастов Артем', 'Ahykyd@mail.ru', '12356', '333', 'Пользователь'),
(5, 'Сокол Максим', 'chernyshova_a99@mail.ru', '1111', '123', 'Пользователь'),
(6, 'Иванов Иван', 'anastasiacernysheva708@gmail.com', 'user', 'user', 'Пользователь');

-- --------------------------------------------------------

--
-- Структура таблицы `zayavki`
--

CREATE TABLE `zayavki` (
  `id_zayavki` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_category` int(11) NOT NULL,
  `photo_d` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_p` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Новая',
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `zayavki`
--

INSERT INTO `zayavki` (`id_zayavki`, `name`, `discription`, `id_category`, `photo_d`, `photo_p`, `status`, `date_start`, `date_end`, `id_user`) VALUES
(8, 'Дворовые территории. Мусор, листва ', '\'Эта куча лежит с момента опиловки деревьев, опиловка происходила весной.', 3, 'k3.jpg', 'k4.jpg', 'Выполненно', '2023-09-14', '2023-09-18', 2),
(9, '\'Освещение\', \'Ул. Береговая', ' вблизи д. 14 не работает мачта искусственного освещения', 5, 'k6.jpg', 'k5.jpg', 'Выполненно', '2023-09-15', '2023-09-26', 3),
(10, 'Дороги. Ремонт покрытия дороги', 'Каждое рабочее утро с 7 утра начинается пробка по ул.Совесткой Конституции. Дорога от детского Мира до ул.Климова занимает около 40 минут. Работы по ремонту дорожного полотна у Комсомольского пруда брошены! Памятник открыли, а дорогу не доделали. ', 2, 'k2.jpg', 'k1.jpg', ' Выполнена', '2023-09-05', '2023-09-24', 5),
(11, 'Дворовые территории.Новый асфальт во дворе', 'Садовая д. 20 Пожалуйста включите в план по благоустройству эту пешеходную зону! Дожди размывают тропинку ходить не возможно!\r\n', 2, 'k4.jpg', 'k9.jpg', 'Выполнена', '2023-09-03', '2023-09-12', 4),
(12, 'Дворовые территории. Приведение в порядок газона, зеленых насаждений', 'Я проживаю по адресу: ул. Ленина, д. 5, кв. 4. Рядом с окнами моей квартиры имеются деревья и кусты (менее 5 метров от фасада дома), к', 3, 'k10.jpg', 'Новая', 'Новая', '2023-09-19', '0000-00-00', 6);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Индексы таблицы `zayavki`
--
ALTER TABLE `zayavki`
  ADD PRIMARY KEY (`id_zayavki`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `zayavki`
--
ALTER TABLE `zayavki`
  MODIFY `id_zayavki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `zayavki`
--
ALTER TABLE `zayavki`
  ADD CONSTRAINT `zayavki_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `zayavki_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
