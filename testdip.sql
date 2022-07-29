-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 29 2022 г., 15:12
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testdip`
--
CREATE DATABASE IF NOT EXISTS `testdip` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `testdip`;

-- --------------------------------------------------------

--
-- Структура таблицы `main2`
--

CREATE TABLE `main2` (
  `IDm` int(11) NOT NULL,
  `IDp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `main2`
--

INSERT INTO `main2` (`IDm`, `IDp`) VALUES
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(2, 165),
(3, 166),
(4, 167),
(13, 365),
(4, 370),
(15, 374),
(10, 375),
(18, 376),
(18, 377),
(13, 379),
(4, 380),
(4, 382),
(4, 383),
(19, 384),
(4, 386),
(20, 387),
(22, 389),
(23, 390);

-- --------------------------------------------------------

--
-- Структура таблицы `maps`
--

CREATE TABLE `maps` (
  `IDm` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `verify` int(11) NOT NULL DEFAULT 0,
  `description` varchar(3000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `maps`
--

INSERT INTO `maps` (`IDm`, `name`, `verify`, `description`) VALUES
(1, 'Тургенев', 2, 'Тургенев'),
(2, 'Пушкин', 2, NULL),
(3, 'gvhjnk', 2, 'Описание Описание Описание Описаниние Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание '),
(4, 'Любая123', 2, 'описаниеffddhgfjdhgjfghj'),
(5, 'Kthvjynjd', 0, NULL),
(6, 'qwwer', 0, NULL),
(7, 'qwwer', 0, NULL),
(8, 'qwwer13', 0, NULL),
(9, 'erghmq', 2, NULL),
(10, 'sdjsdkvn', 1, 'уцкеенапрдло'),
(13, 'Карта какая-то ', 1, 'привет'),
(15, 'Карта1', 1, 'гпнаенпгрпсангнаспагррпмргпсмрущпгидгрокшуыплратдпощзшэц9увшагтоешэцкувптоьшзэ9егшкрувтодспзшоештолкдлпвашочтлд'),
(18, 'test', 2, 'test 1 test 1 test 1 test 2 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 test 1 '),
(19, 'Карта тест ', 2, 'Описание Описание Описание Описание Описание Описание Описание Описание '),
(20, 'И. С. Тургенев', 2, 'Любимые места Тургенева'),
(21, 'Музей им И.С.Тургенева', 0, 'Здесь располагается музей им. И.С. Тургенева'),
(22, 'карта', 2, 'Опивание'),
(23, 'qwerty', 2, 'jtuyioihh');

-- --------------------------------------------------------

--
-- Структура таблицы `placemarks`
--

CREATE TABLE `placemarks` (
  `IDp` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `placemarks`
--

INSERT INTO `placemarks` (`IDp`, `name`, `info`, `link`, `img`, `description`) VALUES
(6, 'Музей им И.С.Тургенева', '55.738713, 37.596157', 'http://www.pushkinmuseum.ru/?q=content/muzey-turgeneva', '../uploads/1655221436.jpg', 'Музей Тургенева - это очень важное место в его истории'),
(7, 'Дом Гоголя', '55.754142, 37.599831', 'https://ru.wikipedia.org/wiki/Дом_Гоголя#:~:text=Дом%20Гоголя%20(официальное%20название%20Дом,центром%20памяти%20Гоголя%20в%20России\r\n', NULL, NULL),
(8, 'Старое здание МГУ', '55.754446, 37.610646', 'https://ru.wikipedia.org/wiki/Казаковский_корпус_МГУ', NULL, NULL),
(9, 'Большой театр', '55.760221, 37.618561', 'https://bolshoi.ru/', NULL, NULL),
(10, 'Малый театр', '55.759731, 37.620540', 'https://www.maly.ru/', NULL, NULL),
(20, 'Дом', '55.756505548947224, 37.59078316381833', 'https://www.tripadvisor.ru/Attractions-g298484-Activities-c49-Moscow_Central_Russia.html', NULL, NULL),
(21, 'Музей какой-то там', '55.78457229672195, 37.2703691504277', 'https://tmuseum.ru/', NULL, NULL),
(165, 'Дом Пушкина', '55.75727995638136, 37.600224539550744', 'http://www.pushkinmuseum.ru/?q=content/istoriya-doma-i-muzeya', NULL, NULL),
(166, 'Дом онегина', '55.75495668775224, 37.60125450781247', 'https://ilibrary.ru/text/436/p.2/index.html', NULL, 'ewrthjgfdswefdfdsffsfcx'),
(167, 'ptjhgeratfgj,hgyehc,jvhtyhrd', '55.748760625251215, 37.63352684667966', 'rewgfhgeawsd', NULL, ''),
(168, 'вдлсмчтл', '55.75089063322124, 37.6527529208984', 'тваамь', NULL, NULL),
(169, 'errfgh', '55.743144589866645, 37.58906655004879', 'tfgh', NULL, NULL),
(170, 'Точка', '55.74643684700252, 37.649319693359345', 'дллвьыавьм', NULL, NULL),
(171, 'wdsvm', '55.75631194467587, 37.58752159765622', 'ssd,l;', NULL, NULL),
(172, 'wdsvm', '55.75631194467587, 37.58752159765622', 'ssd,l;', NULL, NULL),
(173, 'wdsvm', '55.75631194467587, 37.58752159765622', 'ssd,l;', NULL, NULL),
(174, 'wdsvm', '55.75631194467587, 37.58752159765622', 'ssd,l;', NULL, NULL),
(175, 'wdsvm', '55.75631194467587, 37.58752159765622', 'ssd,l;', NULL, NULL),
(176, 'ewrds', '55.747792401209956, 37.633698508056604', 'sdxcvxc', NULL, NULL),
(177, 'ewrds', '55.747792401209956, 37.633698508056604', 'sdxcvxc', NULL, NULL),
(178, 'dscx', '55.75263328014035, 37.591298147949196', 'dsvcx', NULL, NULL),
(179, 'dscx', '55.75263328014035, 37.591298147949196', 'dsvcx', NULL, NULL),
(180, 'qds', '55.747792401209956, 37.63490013769528', 'sdcx', NULL, NULL),
(181, 'wesdf', '55.745662223362295, 37.59164147070309', 'sdcv', NULL, NULL),
(182, 'wesdf', '55.745662223362295, 37.59164147070309', 'sdcv', NULL, NULL),
(183, 'wedf', '55.74604953711298, 37.578080221923805', 'wds', NULL, NULL),
(184, 'wedf', '55.74604953711298, 37.578080221923805', 'wds', NULL, NULL),
(185, 'wdv', '55.742176225852305, 37.58837990454098', 'dsc', NULL, NULL),
(186, 'wdv', '55.742176225852305, 37.58837990454098', 'dsc', NULL, NULL),
(187, 'wdv', '55.742176225852305, 37.58837990454098', 'dsc', NULL, NULL),
(188, 'wedsf', '55.7443065948283, 37.62631706884763', 'sdvc', NULL, NULL),
(189, 'wedsf', '55.7443065948283, 37.62631706884763', 'sdvc', NULL, NULL),
(190, 'wedsf', '55.7443065948283, 37.62631706884763', 'sdvc', NULL, NULL),
(191, 'wedsf', '55.7443065948283, 37.62631706884763', 'sdvc', NULL, NULL),
(192, 'wedsf', '55.7443065948283, 37.62631706884763', 'sdvc', NULL, NULL),
(193, 'wedsf', '55.7443065948283, 37.62631706884763', 'sdvc', NULL, NULL),
(194, 'qwe', '55.74604953711298, 37.63129524877928', 'ds', NULL, NULL),
(195, 'qwe', '55.74604953711298, 37.63129524877928', 'ds', NULL, NULL),
(196, 'qwe', '55.74837333853423, 37.64828972509764', 'qwe', NULL, NULL),
(197, 'qwe', '55.74837333853423, 37.64828972509764', 'qwe', NULL, NULL),
(198, 'qwe', '55.74837333853423, 37.64828972509764', 'qwe', NULL, NULL),
(199, 'qwe', '55.74837333853423, 37.64828972509764', 'qwe', NULL, NULL),
(200, '', '', '', NULL, NULL),
(201, '', '', '', NULL, NULL),
(202, 'wqe', '55.74372559669139, 37.59507469824217', 'ew', NULL, NULL),
(203, 'wqe', '55.74372559669139, 37.59507469824217', 'ew', NULL, NULL),
(204, 'qwe', '55.744403427006496, 37.58837990454098', 'wd', NULL, NULL),
(205, 'ewdc', '55.74469392209306, 37.58340172460935', 'dsxc', NULL, NULL),
(206, 'ewdc', '55.74469392209306, 37.58340172460935', 'dsxc', NULL, NULL),
(207, 'qwe', '55.74372559669139, 37.58786492041014', 'qwscc', NULL, NULL),
(208, 'qwe', '55.74372559669139, 37.58786492041014', 'qwscc', NULL, NULL),
(209, 'qwe', '55.74372559669139, 37.58786492041014', 'qwscc', NULL, NULL),
(210, 'qewds', '55.74295091899443, 37.59610466650388', 'dsc', NULL, NULL),
(211, 'qewds', '55.74295091899443, 37.59610466650388', 'dsc', NULL, NULL),
(212, 'qewds', '55.74295091899443, 37.59610466650388', 'dsc', NULL, NULL),
(213, 'qewds', '55.74295091899443, 37.59610466650388', 'dsc', NULL, NULL),
(214, 'ewd', '55.74420976240881, 37.59387306860349', 'edcx', NULL, NULL),
(215, 'ewd', '55.74420976240881, 37.59387306860349', 'edcx', NULL, NULL),
(216, 'ewded', '55.74420976240881, 37.59387306860349', 'edcx', NULL, NULL),
(217, 'edc', '55.743241424940734, 37.6439981906738', 'dscx', NULL, NULL),
(218, 'ewdsqwe', '55.74420976240881, 37.62975029638668', 'sdcx', NULL, ''),
(219, 'ewsd', '55.74459709063886, 37.61206917456051', 'edsx', NULL, NULL),
(220, 'eds', '55.74140151726486, 37.581685110839814', 'dx', NULL, NULL),
(221, 'eds', '55.74140151726486, 37.581685110839814', 'dx', NULL, NULL),
(222, 'eds', '55.74140151726486, 37.581685110839814', 'dx', NULL, NULL),
(223, 'edsewds', '55.74275724715687, 37.619965597900354', 'dxsdx', NULL, NULL),
(224, 'edsewds', '55.74275724715687, 37.619965597900354', 'dxsdx', NULL, NULL),
(225, 'edsewdseds', '55.74450025894333, 37.64022164038083', 'dxsdxds', NULL, NULL),
(226, 'edsewdseds', '55.74450025894333, 37.64022164038083', 'dxsdxds', NULL, NULL),
(227, 'edsewdseds', '55.74450025894333, 37.64022164038083', 'dxsdxds', NULL, NULL),
(228, 'edsewdseds', '55.74450025894333, 37.64022164038083', 'dxsdxds', NULL, NULL),
(229, 'edsewdseds', '55.74450025894333, 37.64022164038083', 'dxsdxds', NULL, NULL),
(230, 'edsewdseds', '55.74450025894333, 37.64022164038083', 'dxsdxds', NULL, NULL),
(231, 'edsewdseds', '55.74450025894333, 37.64022164038083', 'dxsdxds', NULL, NULL),
(232, 'edsewdseds', '55.74450025894333, 37.64022164038083', 'dxsdxds', NULL, NULL),
(233, 'edsewdseds', '55.74450025894333, 37.64022164038083', 'dxsdxds', NULL, NULL),
(234, 'edsewdseds', '55.74450025894333, 37.64022164038083', 'dxsdxds', NULL, NULL),
(235, 'edsewdsedsed', '55.74450025894333, 37.64022164038083', 'dxsdxdssd', NULL, NULL),
(236, 'wesd', '55.743241424940734, 37.58786492041014', 'wesd', NULL, NULL),
(237, 'wesd', '55.743241424940734, 37.58786492041014', 'wesd', NULL, NULL),
(238, 'wesd', '55.743241424940734, 37.58786492041014', 'wesd', NULL, NULL),
(239, 'wesdwesd', '55.743241424940734, 37.58786492041014', 'wesdwesd', NULL, NULL),
(240, 'weds', '55.74479075330594, 37.62683205297849', 'wesda', NULL, NULL),
(241, 'weds', '55.74479075330594, 37.62683205297849', 'wesda', NULL, NULL),
(242, 'wedsedfv', '55.74479075330594, 37.62683205297849', 'fasfdadsf', NULL, NULL),
(243, 'wesd', '55.74488758427751, 37.58855156591795', 'ds', NULL, NULL),
(244, 'wesdes', '55.74488758427751, 37.58855156591795', 'dsasd', NULL, NULL),
(245, 'ewsd', '55.74847016057702, 37.63215355566404', 'esda', NULL, NULL),
(246, 'qwe', '55.7443065948283, 37.630436941894494', 'qsa', NULL, NULL),
(247, 'qw', '55.74285408319631, 37.605031058105446', 'asd', NULL, NULL),
(248, 'qw', '55.74285408319631, 37.605031058105446', 'asd', NULL, NULL),
(249, 'qw', '55.74285408319631, 37.605031058105446', 'asd', NULL, NULL),
(250, 'qw', '55.74285408319631, 37.605031058105446', 'asd', NULL, NULL),
(251, 'qw', '55.74285408319631, 37.605031058105446', 'asd', NULL, NULL),
(252, 'qw', '55.74285408319631, 37.605031058105446', 'asd', NULL, NULL),
(253, 'qw', '55.74285408319631, 37.605031058105446', 'asd', NULL, NULL),
(254, 'wesd', '55.74459709063886, 37.59816460302731', 'ewsda', NULL, NULL),
(255, 'Дос Онегина', '55.751277894848585, 37.62460045507811', 'link', NULL, NULL),
(256, 'wesdfdfa', '55.74585588072028, 37.581685110839814', 'wds', NULL, NULL),
(257, 'wesda', '55.74372559669139, 37.589409872802705', 'wsaf', NULL, NULL),
(258, 'лол', '55.75786075182312, 37.59438805273436', '', NULL, NULL),
(362, 'Точка3', '55.75916146010458, 37.619107291015595', 'https://yandex.ru/', '../uploads/1646918756.jpg', 'Здесь кто-то что-то сделал'),
(363, 'wew', '55.745081245496635, 37.585633322509736', 'edf', '../uploads/1647257161.', 'dscxvdfcxv'),
(364, 'Точка', '55.75011609838398, 37.58546166113279', 'цуывоиаволт', '../uploads/1647257475.', 'уолавптышукрпшоупшцутиовпоцшщупорурадгуовпраойшщцуиаорйурагшцруовр'),
(365, 'ыеолюлддорвеукывпр', '55.748857446335045, 37.58958153417966', 'wqesfdv', '../uploads/1647259496.jpg', 'mmdfvsmdfmvspdvmpdxvmfo'),
(366, 'Точка123', '55.78630908943169, 37.47010521582025', 'уцвавмсуцавимиавыцуцуапауцуа', '../uploads/1647259569.jpg', 'вамсууцавауцкпвраонйеукоыгпдыощушавопрылугреидыусргтафтвдадпрсдтыкщпоощс'),
(367, 'точка2', '55.75456946280197, 37.58855156591795', 'ваы', '../uploads/1647935904.jpg', 'ОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписание'),
(368, 'ewegfb', '55.74982564383847, 37.584088370117165', 'ewrgfg', '../uploads/1647943894.', 'ewrsgf'),
(369, 'eqwfdscx', '55.747598753504676, 37.59009651831052', 'eqwfsd', '../uploads/1647949132.', 'dscqwesdfedsfdxcv'),
(370, 'weraesghfgfmnfmhng', '55.7478892247006, 37.60211281469723', 'ewfdsg', '../uploads/1647949182.', 'ewafgdbnbgfdfsdxcvb'),
(371, 'ычвпрощлзщшгнаолгрш', '55.74982564383847, 37.59026817968746', 'куыевариаи', '../uploads/1647951483.', 'увапвдлапьвдапль'),
(372, 'Точка12345', '55.753891809849264, 37.596962973388635', 'ецук4', '../uploads/1647981763.jpg', '3кцеулкеротлкушйзоаоипвлшщтлщодшлоимрогщшрири'),
(373, '', '', '', '../uploads/1648027056.', ''),
(374, 'йцекоцйуавм', '55.75119318169751, 37.592996876832835', 'йцукео', '../uploads/1648027867.jpg', 'йцуек'),
(375, 'dfdg', '55.747223558328876, 37.62853078186213', 'sdfgc', '../uploads/1648112797.jpg', 'sadf'),
(376, 'lol', '55.75554961847549, 37.59677342712579', 'ewfdsdfgsdvcgfd', '../uploads/1648113906.jpg', 'ewadfsgfbgdewarstfyoi;puilikjyhgrfdswedfghjk;dglkfjsdg'),
(377, 'wedfgh', '55.75642084719726, 37.59969167053401', 'qwef', '../uploads/1648114242.jpg', 'qwefd'),
(378, 'йцукенл', '', '', '../uploads/1648461212.', ''),
(379, '1234567', '55.75312943614487, 37.59934834778009', '', '../uploads/1648461244.', ''),
(380, 'eqrteryu', '55.75976514090506, 37.60177209557202', '', '../uploads/1648992935.', ''),
(381, 'test1', '55.75860359829895, 37.60966851891186', 'e', '../uploads/1648999904.png', 'eeeeeeeeeeeeeeeeee'),
(382, 'wer', '55.756764418116326, 37.60366037071848', '', '../uploads/1649693442.', ''),
(383, 'dafehttkyo;ilkhtrsfhjghm', '55.75845363821053, 37.60072163879573', '', '../uploads/1650439559.', 'ertkyuttyetuljyudtyjftgjmyrjgdgfjdfgjhsrsgjdfgjdgfjdrgjdrtjdgfjdyj'),
(384, 'Тестовая точка', '55.75342087491276, 37.60091118505856', 'https://yandex.ru/', '../uploads/1651155305.jpg', 'Описание Описание Описание Описание Описание Описание Описание Описание '),
(385, 'tochka', '55.7465467863174, 37.64811806372067', '', '../uploads/1651226466.', ''),
(386, 'uhuyhu', '55.750045502971425, 37.589409872802655', 'jhnh', '../uploads/1654239753.', 'hniun'),
(387, 'Охотный ряд', '55.75501820018605, 37.61464409521481', 'https://yandex.ru/', '../uploads/1654240152.jpg', 'Здесь любил ходить Тургенев'),
(388, 'qwert', '55.75037125333456, 37.64416985205075', '', '../uploads/1654244368.', ''),
(389, 'Точки', '55.730584625097535, 37.633969794468584', 'https://yandex.ru/', '../uploads/1655284557.jpg', 'Описание 1'),
(390, '1234567', '55.750528989311064, 37.61972210816672', 'https://yandex.ru/', '../uploads/1655803434.jpg', 'mgjygjblln');

-- --------------------------------------------------------

--
-- Структура таблицы `usermap`
--

CREATE TABLE `usermap` (
  `IDu` int(11) NOT NULL,
  `IDm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `usermap`
--

INSERT INTO `usermap` (`IDu`, `IDm`) VALUES
(6, 4),
(6, 3),
(9, 9),
(6, 10),
(6, 13),
(6, 15),
(6, 18),
(6, 19),
(6, 20),
(6, 21),
(6, 22),
(6, 23);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `IDu` int(11) NOT NULL,
  `name` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`IDu`, `name`, `password`, `role`) VALUES
(4, 'ewrseqwer', '$2y$10$U2zULmHdtIGQnx8xtviRtuNqhZi.c71cuJMxat5TRIvFQpv/IIr8e', 0),
(5, 'mitos', '$2y$10$/94QeLfvS6DUwYfY/WbZQO7IGPzewc6ulVxXA45t2kcXuFJZtcpTq', 2),
(6, 'test', '$2y$10$Q7BO/zjRWnVPynH0hc3Uc.3SJoyLzmNutoU6UAOHVCMNldVdHVKmO', 1),
(7, 'mitos1', '$2y$10$HNiE5CyJP5mHzbUwIDHebObr1NeAgkjM4fwBcsnCabq/tXP3dUKXi', 0),
(9, 'mitos2', '$2y$10$OtG258R3mzdpNoOKHWMtw.JPzf8k.1Wl0xsSQj24Dj4SSUUq6OLG.', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `main2`
--
ALTER TABLE `main2`
  ADD KEY `1` (`IDm`) USING BTREE,
  ADD KEY `2` (`IDp`);

--
-- Индексы таблицы `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`IDm`);

--
-- Индексы таблицы `placemarks`
--
ALTER TABLE `placemarks`
  ADD PRIMARY KEY (`IDp`) USING HASH;

--
-- Индексы таблицы `usermap`
--
ALTER TABLE `usermap`
  ADD KEY `1` (`IDu`),
  ADD KEY `2` (`IDm`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`IDu`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `maps`
--
ALTER TABLE `maps`
  MODIFY `IDm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `placemarks`
--
ALTER TABLE `placemarks`
  MODIFY `IDp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=391;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `IDu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `main2`
--
ALTER TABLE `main2`
  ADD CONSTRAINT `main2_ibfk_1` FOREIGN KEY (`IDp`) REFERENCES `placemarks` (`IDp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `main2_ibfk_2` FOREIGN KEY (`IDm`) REFERENCES `maps` (`IDm`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `usermap`
--
ALTER TABLE `usermap`
  ADD CONSTRAINT `usermap_ibfk_1` FOREIGN KEY (`IDu`) REFERENCES `users` (`IDu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usermap_ibfk_2` FOREIGN KEY (`IDm`) REFERENCES `maps` (`IDm`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
