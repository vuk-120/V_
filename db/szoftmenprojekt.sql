-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3306
-- Létrehozás ideje: 2019. Feb 17. 17:57
-- Kiszolgáló verziója: 5.7.19
-- PHP verzió: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `szoftmenprojekt`
--
CREATE DATABASE IF NOT EXISTS `szoftmenprojekt` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `szoftmenprojekt`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `text` varchar(256) COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`)
);

--
-- A tábla adatainak kiíratása `comment`
--

INSERT INTO `comment` (`id`, `text`) VALUES
(1, 'ez az első teszt comment'),
(2, 'ez a második teszt komment'),
(3, 'kérdés hogy hogyan működnek együtt a táblák'),
(4, 'ennyi elég is lesz egyenlőre'),
(5, 'ennek a postnak semmi értelme…'),
(6, 'miért kellett ezt megnéznem'),
(7, 'ki az a hülye aki ilyent kirak…'),
(8, 'ki kérdezett téged…'),
(9, 'minek vagy itt'),
(10, 'sose lesz ennek vége'),
(11, 'nézzünk még egy teszt kommentet,'),
(12, 'hogy biztos jó legyen a dolog'),
(13, 'bár nem látom egyenlőre értelmét'),
(14, 'ennek a semmit sem mondó szövegnek'),
(15, 'se ennek'),
(16, 'és nem is igazán kell, hogy legyen értelme'),
(17, 'mert ezek csak teszt szövegek'),
(18, 'amik azért vannak, hogy az elméletet'),
(19, 'lehessen tesztelni'),
(20, 'különben nem kellene ezekkel foglalkozni'),
(21, 'ha mondjuk a facebook odaadná az adatbázisát'),
(22, 'mennyivel egyszerűbb lenne a dolog'),
(23, 'bár azthiszem azt várhatjuk'),
(24, 'CIA'),
(25, 'HDTV'),
(26, 'nemtudom még mit lehetne ide hantázni'),
(27, 'de kezdek kifogyni az ötletekből'),
(28, 'na jó egyenlőre elég lesz');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(6) NOT NULL,
  PRIMARY KEY (`id`)
);

--
-- A tábla adatainak kiíratása `likes`
--

INSERT INTO `likes` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(6) NOT NULL,
  `title` varchar(250) COLLATE utf8_hungarian_ci NOT NULL,
  `text` varchar(256) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `opportunity` varchar(10) COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`)
);

--
-- A tábla adatainak kiíratása `post`
--

INSERT INTO `post` (`id`, `title`, `text`, `opportunity`) VALUES
(18, 'valami', '</th>', 'V_main'),
(19, 'mert miért ne', '<td>', 'V_java'),
(20, 'ez', 'de nem igazán tudom, hogy minek kéne bele kerülnie….', 'V_python'),
(21, 'ez igen', '</td>', 'V_AI'),
(22, 'ez nem maradhat', '<td>', 'V_main'),
(23, 'nemtudom', 'bár ennek a szerkezetnek így semmi értelme sincs…', 'V_java'),
(24, 'valami értelmes is lehetne', '</br>', 'V_python'),
(25, 'nem kell', 'kivéve mondjuk, ha horizontális táblázatot készít az ember….', 'V_AI'),
(26, 'ez megint egy html', '</td>', 'V_main'),
(27, 'na jó', '</tr>', 'V_java'),
(28, 'ideje', '</table>', 'V_python'),
(29, 'időt', 'na talán ennyi egyenlőre elég lesz', 'V_AI'),
(1, 'spórolni', 'ez az első posztom', 'V_main'),
(2, 'hjkl', 'kíváncsian várom hogyan alakul a táblaszerkezet', 'V_java'),
(3, 'hiuobnj', 'remélem úgy fog működni, ahogy én azt szeretném', 'V_python'),
(4, 'nubijlkbni', 'jó lenne valami érdekeset kitalálni végre', 'V_AI'),
(5, 'hbuniljh', 'mi a halált írjak ebbe a táblába még', 'V_main'),
(6, 'hiunljh', 'semmi ötletem sincs', 'V_java'),
(7, 'huiolh', 'meghalni nincs idő, így élni kell', 'V_python'),
(8, 'hiuoljk', 'sose lesz ennek vége', 'V_AI'),
(9, 'uhiklh', 'valami értelmeset is igazán írhatnék végre ebbe a dologba', 'V_main'),
(10, 'huilkh', 'nemtudom mit lehetne még', 'V_java'),
(11, 'huiklj', 'kéne legalább 20 rekord, hogy mormálisan lehessen tesztelni', 'V_python'),
(12, 'huikljh', 'a legkézenfekvőbbet még nem írtam…', 'V_AI'),
(13, 'huikljh', 'Helló World!', 'V_main'),
(14, 'üres', '<table class=\"valami\" id=\"semmi\">', 'V_AI'),
(15, 'mert akkor', '<tr class=\"center\">', 'V_java'),
(16, 'ki tudja mi fog ', '<th>', 'V_python'),
(17, 'történni', 'ez lesz a táblázat egyik fő mezője…', 'V_main');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `share`
--

DROP TABLE IF EXISTS `share`;
CREATE TABLE IF NOT EXISTS `share` (
  `userId` varchar(256) DEFAULT NULL,
  `postId` int(6) DEFAULT NULL,
  `comId` int(6) DEFAULT NULL,
  `date` date NOT NULL,
  `likeId` int(6) DEFAULT NULL,
  KEY `userId` (`userId`),
  KEY `postId` (`postId`),
  KEY `comId` (`comId`),
  KEY `likeId` (`likeId`)
);

--
-- A tábla adatainak kiíratása `share`
--

INSERT INTO `share` (`userId`, `postId`, `comId`, `date`, `likeId`) VALUES
('valaki', 3, NULL, '2019-02-02', 0),
('valaki', 1, NULL, '2018-12-31', 0),
('senki', 1, 2, '2019-02-04', 0),
('bence', 10, NULL, '2019-01-24', 0),
('bence', 13, NULL, '2017-10-06', 0),
('bence', 25, NULL, '2018-07-24', 0),
('skyrim', 10, 7, '2019-01-24', 0),
('bence', 10, 8, '2019-01-24', 0),
('skyrim', 10, 9, '2019-01-25', 0),
('valaki', 3, NULL, '2019-02-02', 0),
('valaki', 1, NULL, '2018-12-31', 0),
('senki', 1, 2, '2019-02-04', 0),
('bence', 10, NULL, '2019-01-24', 0),
('bence', 13, NULL, '2017-10-06', 0),
('bence', 25, NULL, '2018-07-24', 0),
('skyrim', 10, 7, '2019-01-24', 0),
('bence', 10, 8, '2019-01-24', 0),
('skyrim', 10, 9, '2019-01-25', 0),
('balazs02', NULL, 9, '2019-01-24', 1),
('linuxProf', NULL, 9, '2019-01-25', 2),
('valaki', NULL, 9, '2019-01-24', 3);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userName` varchar(256) COLLATE utf8_hungarian_ci NOT NULL,
  `eMail` varchar(256) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `password` varchar(256) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `lastName` varchar(256) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `firstName` varchar(256) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `profilePictures` varchar(256) COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`userName`)
);

--
-- A tábla adatainak kiíratása `user`
--

INSERT INTO `user` (`userName`, `eMail`, `password`, `lastName`, `firstName`, `profilePictures`) VALUES
('kristof', 'kristof@nemtudom.org', 'sdgfds', 'Kristóf', 'Abért', ''),
('balazs02', 'balazska@gmail.com', 'graeio', 'Balázs', 'Tóth', ''),
('skyrim', 'kiss.erzsi@indamail.hu', 'gafdse', 'Erzsébet', 'Kiss', ''),
('linuxProf', 'house@linux.info', 'gfaeghfd', 'Gábor', 'Házi', ''),
('igazolas032', 'adatbazis@microsoft.com', 'gfdserds', 'Beáta', 'Petőné', ''),
('valaki', 'adsgfda@gfadfs.hu', 'asdf', 'Vala', 'Ki', ''),
('senki', 'fdssgfds@fdsgsf.com', 'qwer', 'Sen', 'Ki', ''),
('nemtom', 'gfdgfhtr@gsfdg.org', 'ghjk', 'Nem', 'Tudom', ''),
('bence', 'bence@gmail.com', 'gasdf', 'Bence', 'Kiss', ''),
('anna', 'anna@hotmail.hu', 'hfdsg', 'Anna', 'Balogh', ''),
('kkgigiioo', 'kassai.gigi@gmail.com', '912ec803b2ce49e4a541068d495ab570', 'Kassai', 'KristÃ³f', '../profilePics/maxresdefault.jpg'),
('csana23', 'csanaki.ricsi@gmail.com', '4fded1464736e77865df232cbcb4cd19', 'Csanaki', 'Richard', '../ProfilePics/566f242d1f00002d00e9bb83.jpeg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
