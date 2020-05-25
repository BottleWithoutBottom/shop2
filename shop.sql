-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 09 2020 г., 17:47
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `prod_cat_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(128) NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `p_description` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`product_id`, `prod_cat_id`, `product_name`, `quantity`, `p_description`) VALUES
(1, 1, 'Iphone X', 10, 'ОС iPhone iOS 12, экран: 5.8\", 2436×1125, процессор: Apple A11 Bionic, + Встроенный сопроцессор движения М11, GPS, ГЛОНАСС, с защитой от пыли и влаги, время работы в режиме разговора, до: 21ч, встроенная память: 64Гб'),
(2, 1, 'Samsung A7', 2, 'Samsung Galaxy A7 – первый смартфон от знаменитого южнокорейского производителя, получивший тройную камеру: один её объектив делает панорамные фото, другой предназначен для съёмки при слабом освещении, а третий создаёт портреты с эффектом боке. Для любой с'),
(3, 2, 'ASUS TUF GAMING FX504 SERIES', 1, 'ASUS TUF Gaming FX504 – это мощный, но доступный по цене ноутбук с операционной системой Windows 10, который отличается повышенной надежностью и увеличенным сроком службы по сравнению с обычными геймерскими моделями. Дисплей с частотой обновления 120 Гц и '),
(4, 2, 'ASUS R459UA-EK256T', 0, 'Ноутбук Asus R459UA-EK256T сделает вашу повседневную работу по-настоящему комфортной. Откинув экран, вы приподнимете его корпус на 3 градуса. Это улучшит охлаждение, повысит громкость звука и поможет выбрать оптимальное положение клавиатуры.'),
(5, 4, 'Galaxy Tab A10.1 LTE', 0, 'Samsung совместили универсальность и функциональность планшета с доступной стоимостью. Экран с большой диагональю, высокие рабочие характеристики, толщина всего 7.5 мм и металлический корпус делают планшет идеальным для развлечений. Выберите цвет, подходящ'),
(6, 4, 'Huawei MediaPad T5 (AGS2-L09)', 0, '(AGS2-L09), сенсорный экран 10.1\" (25.7 см), разрешение: 1920 x 1200, Multitouch, поддержка 3G, поддержка 4G, Wi-Fi, Bluetooth, GPRS, EDGE, GPS, A-GPS, ГЛОНАСС, основная камера: 5Мп, фронтальная камера: 2Мп, встроенная память: 32Гб, операционная система: A');

-- --------------------------------------------------------

--
-- Структура таблицы `prod_categories`
--

CREATE TABLE `prod_categories` (
  `prod_cat_id` int(10) UNSIGNED NOT NULL,
  `cat_title` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `prod_categories`
--

INSERT INTO `prod_categories` (`prod_cat_id`, `cat_title`) VALUES
(1, 'Телефоны'),
(2, 'Ноутбуки'),
(3, 'ПК'),
(4, 'Планшеты');

-- --------------------------------------------------------

--
-- Структура таблицы `sessions`
--

CREATE TABLE `sessions` (
  `session_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(128) NOT NULL,
  `dt_add` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `sessions`
--

INSERT INTO `sessions` (`session_id`, `user_id`, `token`, `dt_add`) VALUES
(1, 3, 'af04da6ad4961ade8e1965bcb6ba2c6932fdb55ed19ba03227b1183acd8754def59b6b245ceb94996eade47d3b3858921195ea6f79110b14920a18de89ab242f', '2020-04-25 04:17:12'),
(2, 3, '9eba9a1ed7be3f690361715795ba6533cc4e97a168e8e47394d231c7dd415625693e73fd5bcb84aba238faea42fab95c03fe4b1122e5638e2cf8091fc43690e5', '2020-04-25 04:17:27'),
(3, 3, '37eea70784131eb14559448424d19883719ccfe112d9162e718b1914b99aa5b7deb417528089057e4a0f9970354f8a24f01ecad6de39a563fe7c8e58ac175496', '2020-04-25 04:17:38'),
(4, 3, '666304ebf1fa719926547d13bb5d3a1fe16fb75db0bdf0f65b4f32f982b0aabe33191527e8db5735d05bbce9cb8b6c64a7979db6f477c61218ca7c0da27a2dd7', '2020-04-25 05:11:38'),
(5, 3, 'f553905c39d0c8f51190bccbaf4de6e0912eb526e292075e6e3b7d79946bf54c64c41e422a07fceb17ee2cf8af55ac7eb5ce11db9d44fb02f798c569e0c0a42d', '2020-04-25 05:11:58'),
(6, 3, '3329d95e98b81474403ccb940f350576ac6727157a3f82e9ef887a78c177ecf178d4097f1b0023017e2596e59780f8a736f2a133a0a86dcb8629afabffbb55ff', '2020-04-25 05:13:19'),
(7, 3, 'e8c2be956d52f1629cd4f37373942d14f782d5a3fb194dd077f322c0125f43ab81e2d85da8502ef155c62e0807700096a770bb714b2da3dafce3d594d2fb04c6', '2020-04-25 05:13:32'),
(8, 3, '56ba296942fb2fabf51d706b82736c5fdafcaa95360b29641eedc6d01826313dbcf07e34370b2fe5a7d45ee913c228f5ef1a8e7e1ef4344c4cbc4ba3a5f99556', '2020-04-25 05:13:45'),
(10, 3, 'd98060888509e5dfe5ad465d63e77c808a6d490be0160578589f3328b99edc8ffaaf590863280e5c4125ac6c5a7d67f0de7e4d80f3bc1b6b9b45b284a3d3ee75', '2020-04-25 05:52:24'),
(11, 3, 'a6d3a5b662881fbe682df15f64a198c1d387577f807bb36de3e24760a8fba7c8c8dec52bfd5f4995f463485674b3a6cc1a32d58716d71402a17a9e63f0a9bbb4', '2020-04-25 06:16:05'),
(12, 3, 'b76ff65e1dc3551b056e4073cca6c73beed58adb908e2788f3461592a12e6d88f7dbd79b6796b1ef99003b90caaefbc1115104d55af0c1b11f7712c46d3117f1', '2020-04-25 06:16:35'),
(13, 3, '292375244a3d2ea71aff24e3f6ba676ec5a93f562e73bb4d04564c96be9e947c2d8498255b95d64c9026cf2f6cd068eacf813b07b2a766f2535283a9e020bf6c', '2020-04-26 03:00:06'),
(14, 3, '8f008b3e7fd92eb792a5285647d350f1de75d7fa4981253c17be70494a8197aab6586ca80f38d77364b63453d802a26b9261870092193b3488cabab1a0be2627', '2020-04-26 03:19:52'),
(15, 3, '004a824fa42c7cfa5e513dc86aa2272de066e8b9bb1739b2b918bf3f9f878f912885f53b4db32f7f9b337764e4dc53e485850c2a84804be45f6d134f61654966', '2020-04-26 05:32:52');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `login` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `phone` smallint(5) UNSIGNED NOT NULL,
  `email` varchar(128) NOT NULL,
  `cash` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `login`, `password`, `phone`, `email`, `cash`) VALUES
(2, 'user', '$2y$10$YHztjgJ3sblTOMxK8HtSiOV8n1wyHYWDZzIOWTjWej.RH2ECn/8Y.', 65535, '', NULL),
(3, 'Marina', '232123', 0, 'essletit', NULL),
(4, 'Levron', '123', 8903, 'none', NULL),
(5, 'asdwas', '$2y$10$TejiIMh0eAVZHJUAEZ8Rx.7/445eRPLS9X3ZVQuXa3iAZKrMU9z02', 12312, '', NULL),
(6, 'sss', '123', 3245, 'eeecom', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `prod_cat_id` (`prod_cat_id`);

--
-- Индексы таблицы `prod_categories`
--
ALTER TABLE `prod_categories`
  ADD PRIMARY KEY (`prod_cat_id`);

--
-- Индексы таблицы `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `prod_categories`
--
ALTER TABLE `prod_categories`
  MODIFY `prod_cat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `sessions`
--
ALTER TABLE `sessions`
  MODIFY `session_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`prod_cat_id`) REFERENCES `prod_categories` (`prod_cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
