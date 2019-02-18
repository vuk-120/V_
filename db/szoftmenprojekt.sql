-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3306
-- Létrehozás ideje: 2019. Feb 09. 16:37
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
CREATE DATABASE IF NOT EXISTS `szoftmenprojekt` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `szoftmenprojekt`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `text` varchar(256) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

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
-- Tábla szerkezet ehhez a táblához `like`
--

DROP TABLE IF EXISTS `like`;
CREATE TABLE IF NOT EXISTS `like` (
  `id` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `like`
--

INSERT INTO `like` (`id`) VALUES
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
  `text` varchar(256) COLLATE utf8_hungarian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `post`
--

INSERT INTO `post` (`id`, `text`) VALUES
(18, '</th>'),
(19, '<td>'),
(20, 'de nem igazán tudom, hogy minek kéne bele kerülnie….'),
(21, '</td>'),
(22, '<td>'),
(23, 'bár ennek a szerkezetnek így semmi értelme sincs…'),
(24, '</br>'),
(25, 'kivéve mondjuk, ha horizontális táblázatot készít az ember….'),
(26, '</td>'),
(27, '</tr>'),
(28, '</table>'),
(29, 'na talán ennyi egyenlőre elég lesz'),
(1, 'ez az első posztom'),
(2, 'kíváncsian várom hogyan alakul a táblaszerkezet'),
(3, 'remélem úgy fog működni, ahogy én azt szeretném'),
(4, 'jó lenne valami érdekeset kitalálni végre'),
(5, 'mi a halált írjak ebbe a táblába még'),
(6, 'semmi ötletem sincs'),
(7, 'meghalni nincs idő, így élni kell'),
(8, 'sose lesz ennek vége'),
(9, 'valami értelmeset is igazán írhatnék végre ebbe a dologba'),
(10, 'nemtudom mit lehetne még'),
(11, 'kéne legalább 20 rekord, hogy mormálisan lehessen tesztelni'),
(12, 'a legkézenfekvőbbet még nem írtam…'),
(13, 'Helló World!'),
(14, '<table class=\"valami\" id=\"semmi\">'),
(15, '<tr class=\"center\">'),
(16, '<th>'),
(17, 'ez lesz a táblázat egyik fő mezője…');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `share`
--

DROP TABLE IF EXISTS `share`;
CREATE TABLE IF NOT EXISTS `share` (
  `userId` varchar(256) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `postId` int(6) DEFAULT NULL,
  `comId` int(6) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `likeId` int(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

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
  `age` int(4) DEFAULT NULL,
  `lastName` varchar(256) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `firstName` varchar(256) COLLATE utf8_hungarian_ci DEFAULT NULL,
  PRIMARY KEY (`userName`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `user`
--

INSERT INTO `user` (`userName`, `eMail`, `password`, `age`, `lastName`, `firstName`) VALUES
('kristof', 'kristof@nemtudom.org', 'sdgfds', 36, 'Kristóf', 'Abért'),
('balazs02', 'balazska@gmail.com', 'graeio', 22, 'Balázs', 'Tóth'),
('skyrim', 'kiss.erzsi@indamail.hu', 'gafdse', 20, 'Erzsébet', 'Kiss'),
('linuxProf', 'house@linux.info', 'gfaeghfd', 47, 'Gábor', 'Házi'),
('igazolas032', 'adatbazis@microsoft.com', 'gfdserds', 34, 'Beáta', 'Petőné'),
('valaki', 'adsgfda@gfadfs.hu', 'asdf', 12, 'Vala', 'Ki'),
('senki', 'fdssgfds@fdsgsf.com', 'qwer', 21, 'Sen', 'Ki'),
('nemtom', 'gfdgfhtr@gsfdg.org', 'ghjk', 65, 'Nem', 'Tudom'),
('bence', 'bence@gmail.com', 'gasdf', 34, 'Bence', 'Kiss'),
('anna', 'anna@hotmail.hu', 'hfdsg', 21, 'Anna', 'Balogh'),
('kkgigiioo', 'kassai.gigi@gmail.com', '912ec803b2ce49e4a541068d495ab570', 23, 'Kassai', 'KristÃ³f');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
