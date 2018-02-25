-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 25 Lut 2018, 18:14
-- Wersja serwera: 10.1.28-MariaDB
-- Wersja PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `rynek_transferowy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kluby`
--

CREATE TABLE `kluby` (
  `ID_klub_PK` int(11) NOT NULL,
  `nazwa_klubu` varchar(30) CHARACTER SET latin1 NOT NULL,
  `data_zalozenia` date NOT NULL,
  `ID_kraj_FK` int(11) NOT NULL,
  `ID_stadion_FK` int(11) NOT NULL,
  `ID_trener_FK` int(11) NOT NULL,
  `ID_liga_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `kluby`
--

INSERT INTO `kluby` (`ID_klub_PK`, `nazwa_klubu`, `data_zalozenia`, `ID_kraj_FK`, `ID_stadion_FK`, `ID_trener_FK`, `ID_liga_FK`) VALUES
(2, 'Chelsea FC', '1905-03-10', 284, 2, 4, 1),
(3, 'Manchester City', '1880-01-01', 284, 3, 5, 1),
(4, 'Manchester United', '1878-03-05', 284, 4, 6, 1),
(5, 'Tottenham Hotspur', '1882-09-05', 284, 5, 7, 1),
(6, 'FC Liverpool', '1892-03-15', 284, 6, 8, 1),
(7, 'FC Arsenal', '1886-12-01', 284, 7, 9, 1),
(8, 'FC Everton', '1878-06-01', 284, 8, 10, 1),
(9, 'FC Southampton', '1885-11-21', 284, 9, 11, 1),
(10, 'Leicester City', '1884-01-01', 284, 10, 12, 1),
(11, 'West Ham United', '1895-01-01', 284, 11, 13, 1),
(12, 'Crystal Palace', '1905-01-01', 284, 12, 14, 1),
(13, 'Stoke City', '1863-01-01', 284, 13, 15, 1),
(14, 'West Bromwich Albion', '1878-11-01', 284, 14, 16, 1),
(15, 'Swansea City', '1912-09-07', 284, 15, 17, 1),
(16, 'FC Watford', '1881-01-01', 284, 17, 18, 1),
(17, 'Newcastle United', '1892-12-01', 284, 19, 19, 1),
(18, 'AFC Bournemouth', '1899-01-01', 284, 21, 20, 1),
(19, 'Brighton & Hove Albion', '1901-08-21', 284, 16, 22, 1),
(20, 'Huddersfield Town', '1908-01-01', 284, 20, 23, 1),
(21, 'FC Burnley', '1882-01-01', 284, 18, 21, 1),
(22, 'Bayern Monachium', '1912-12-12', 211, 30, 38, 3),
(23, 'Real Madryt', '1909-03-08', 152, 22, 6, 2),
(24, 'Paris Saint-Germain', '1923-07-01', 138, 41, 38, 5),
(25, 'FC Barcelona', '1897-01-23', 152, 23, 35, 2),
(27, 'asd', '2018-01-01', 7, 2, 4, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kraje`
--

CREATE TABLE `kraje` (
  `ID_kraj_PK` int(11) NOT NULL,
  `nazwa_kraju` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `kraje`
--

INSERT INTO `kraje` (`ID_kraj_PK`, `nazwa_kraju`) VALUES
(7, 'Andora'),
(11, 'Argentyna'),
(16, 'Bahamy'),
(19, 'Barbados'),
(21, 'Belize'),
(22, 'Benin'),
(23, 'Bhutan'),
(25, 'Boliwia'),
(28, 'Brazylia'),
(29, 'Brunei'),
(31, 'Burkina Faso'),
(33, 'Chile'),
(36, 'Cypr'),
(37, 'Czad'),
(39, 'Czechy'),
(40, 'Dania'),
(41, 'Demokratyczna Republika Konga'),
(42, 'Dominika'),
(43, 'Dominikana'),
(44, 'Afganistan'),
(48, 'Angola'),
(49, 'Antigua i Barbuda'),
(50, 'Arabia Saudyjska'),
(90, 'Albania'),
(91, 'Algieria'),
(97, 'Armenia'),
(98, 'Australia'),
(99, 'Austria'),
(100, 'Azerbejdzan'),
(102, 'Bahrajn'),
(103, 'Bangladesz'),
(105, 'Belgia'),
(109, 'Bialorus'),
(111, 'Bosnia i Hercegowina'),
(112, 'Botswana'),
(115, 'Bulgaria'),
(117, 'Burundi'),
(119, 'Chiny'),
(120, 'Chorwacja'),
(123, 'Czarnogora'),
(129, 'Dzibudi'),
(130, 'Egipt'),
(131, 'Ekwador'),
(132, 'Erytrea'),
(133, 'Estonia'),
(134, 'Etiopia'),
(135, 'Fidzi'),
(136, 'Filipiny'),
(137, 'Finlandia'),
(138, 'Francja'),
(139, 'Gabon'),
(140, 'Gambia'),
(141, 'Ghana'),
(142, 'Grecja'),
(143, 'Grenada'),
(144, 'Gruzja'),
(145, 'Gujana'),
(146, 'Gwatemala'),
(147, 'Gwinea'),
(148, 'Gwinea Bissau'),
(149, 'Gwinea Bissau'),
(150, 'Gwinea Równikowa'),
(151, 'Haiti'),
(152, 'Hiszpania'),
(153, 'Holandia'),
(154, 'Honduras'),
(155, 'Indie'),
(156, 'Indonezja'),
(157, 'Irak'),
(158, 'Iran'),
(160, 'Islandia'),
(161, 'Izrael'),
(162, 'Jamajka'),
(163, 'Japonia'),
(164, 'Jemen'),
(165, 'Jordania'),
(166, 'Kambodza'),
(167, 'Kamerun'),
(168, 'Kanada'),
(169, 'Katar'),
(170, 'Kazachstan'),
(171, 'Kenia'),
(172, 'Kirgistan'),
(173, 'Kiribati'),
(174, 'Kolumbia'),
(175, 'Komory'),
(176, 'Kongo'),
(177, 'Korea Poludniowa'),
(178, 'Korea Polnocna'),
(179, 'Kostaryka'),
(180, 'Kuba'),
(181, 'Kuwejt'),
(182, 'Laos'),
(183, 'Lesotho'),
(184, 'Liban'),
(185, 'Liberia'),
(186, 'Libia'),
(187, 'Liechtenstein'),
(188, 'Litwa'),
(189, 'Luksemburg'),
(190, 'Lotwa'),
(191, 'Macedonia'),
(192, 'Madagaskar'),
(193, 'Malawi'),
(194, 'Malediwy'),
(195, 'Malezja'),
(196, 'Mali'),
(197, 'Malta'),
(198, 'Maroko'),
(199, 'Mauretania'),
(200, 'Mauritius'),
(201, 'Meksyk'),
(202, 'Mikronezja'),
(203, 'Mjanma'),
(204, 'Moldawia'),
(205, 'Monako'),
(206, 'Mongolia'),
(207, 'Mozambik'),
(208, 'Namibia'),
(209, 'Nauru'),
(210, 'Nepal'),
(211, 'Niemcy'),
(212, 'Niger'),
(213, 'Nigeria'),
(214, 'Nikaragua'),
(215, 'Norwegia'),
(216, 'Nowa Zelandia'),
(217, 'Oman'),
(218, 'Pakistan'),
(219, 'Palau'),
(220, 'Panama'),
(221, 'Papua-Nowa Gwinea'),
(222, 'Paragwaj'),
(223, 'Peru'),
(224, 'Polska'),
(225, 'Portugalia'),
(226, 'Poludniowa Afryka'),
(227, 'Republika Srodkoafrykanska'),
(228, 'Republika Zielonego Przyladka'),
(229, 'Rosja'),
(230, 'Rumunia'),
(231, 'Rwanda'),
(232, 'Saint Kitts i Nevis'),
(233, 'Saint Lucia'),
(234, 'Saint Vincent i Grenadyny'),
(235, 'Salwador'),
(236, 'Samoa'),
(237, 'San Marino'),
(238, 'Senegal'),
(239, 'Serbia'),
(240, 'Seszele'),
(241, 'Sierra Leone'),
(242, 'Singapur'),
(243, 'Slowacja'),
(244, 'Slowenia'),
(245, 'Somalia'),
(246, 'Sri Lanka'),
(247, 'Stany Zjednoczone'),
(248, 'Suazi'),
(249, 'Sudan'),
(250, 'Sudan Poludniowy'),
(251, 'Surinam'),
(252, 'Syria'),
(253, 'Szwajcaria'),
(254, 'Szwecja'),
(255, 'Tadzykistan'),
(256, 'Tajlandia'),
(257, 'Tanzania'),
(258, 'Timor Wschodni'),
(259, 'Togo'),
(260, 'Tonga'),
(261, 'Trynidad I Tobago'),
(262, 'Tunezja'),
(263, 'Turcja'),
(264, 'Turkmenistan'),
(265, 'Tuvalu'),
(266, 'Uganda'),
(267, 'Ukraina'),
(268, 'Urugwaj'),
(269, 'Uzbekistan'),
(270, 'Vanuatu'),
(271, 'Watykan'),
(272, 'Wenezuela'),
(273, 'Wegry'),
(274, 'Wielka Brytania'),
(275, 'Wietnam'),
(276, 'Wlochy'),
(277, 'WKS'),
(278, 'Wyspy Marshala'),
(279, 'Wyspy Salomona'),
(280, 'Wyspy Swi Tomasza i Ksiazeca'),
(281, 'Zambia'),
(282, 'Zimbabwe'),
(283, 'Zjednoczone Emiraty Arabski'),
(284, 'Anglia'),
(285, 'Walia'),
(286, 'Irlandia'),
(287, 'Irlandia Polnocna'),
(288, 'Szkocja');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ligi`
--

CREATE TABLE `ligi` (
  `ID_liga_PK` int(11) NOT NULL,
  `nazwa_ligi` varchar(30) CHARACTER SET latin1 NOT NULL,
  `szczebel` int(11) NOT NULL,
  `ilosc_druzyn` int(11) NOT NULL,
  `ID_kraj_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `ligi`
--

INSERT INTO `ligi` (`ID_liga_PK`, `nazwa_ligi`, `szczebel`, `ilosc_druzyn`, `ID_kraj_FK`) VALUES
(1, 'Premier League', 1, 20, 284),
(2, 'La Liga', 1, 20, 152),
(3, 'Bundesliga', 1, 18, 211),
(4, 'Serie A', 1, 20, 276),
(5, 'Ligue 1', 1, 20, 138),
(7, 'Super Lig', 2, 18, 263),
(8, 'Liga Nos', 1, 18, 225),
(9, 'Premier Liga', 3, 16, 229),
(10, 'Eredivise', 1, 18, 153),
(11, 'Jupiler Pro League', 2, 16, 105),
(12, 'Super League', 1, 18, 142),
(13, 'Premier Liha', 1, 12, 267),
(14, 'Super League', 2, 10, 253),
(15, 'Het Liga', 3, 16, 39),
(16, 'Championship', 2, 24, 284),
(17, 'LaLiga2', 2, 22, 152),
(18, 'Serie B', 2, 22, 276),
(19, '2.Bundesliga', 2, 18, 211),
(20, 'Ligue 2', 2, 18, 138),
(21, '1.Lig', 2, 24, 263),
(24, 'asdasd', 1, 1, 7);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pilkarze`
--

CREATE TABLE `pilkarze` (
  `ID_pilkarz_PK` int(11) NOT NULL,
  `imie_pilkarza` varchar(30) CHARACTER SET latin1 NOT NULL,
  `nazwisko_pilkarza` varchar(30) CHARACTER SET latin1 NOT NULL,
  `wartosc_pilkarza` int(11) NOT NULL,
  `ID_pozycja_FK` int(11) NOT NULL,
  `ID_kraj_FK` int(11) NOT NULL,
  `ID_klub_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `pilkarze`
--

INSERT INTO `pilkarze` (`ID_pilkarz_PK`, `imie_pilkarza`, `nazwisko_pilkarza`, `wartosc_pilkarza`, `ID_pozycja_FK`, `ID_kraj_FK`, `ID_klub_FK`) VALUES
(3, 'Thibaut', 'Courtois', 40000000, 1, 105, 2),
(4, 'Willy ', 'Caballero', 1500000, 1, 11, 2),
(5, 'David', 'Luiz', 30000000, 3, 28, 2),
(6, 'Antonio', 'Rudiger', 25000000, 3, 211, 2),
(7, 'Andreas', 'Christensen', 18000000, 3, 40, 13),
(8, 'Gary', 'Cahill', 16000000, 3, 284, 2),
(9, 'Marcos', 'Alonso', 25000000, 2, 152, 7),
(10, '', 'Kenedy', 7000000, 2, 28, 2),
(11, 'Cesar ', 'Azpilicueta', 30000000, 3, 152, 2),
(12, 'Davide', 'Zappacosta', 15000000, 4, 276, 2),
(13, 'N\'Golo', 'Kante', 50000000, 5, 138, 2),
(14, 'Tiemoue', 'Bakayoko', 30000000, 5, 138, 2),
(15, 'Cesc', 'Fabregas', 35000000, 6, 152, 2),
(16, 'Danny', 'Drinkwater', 15000000, 6, 284, 2),
(17, 'Eden', 'Hazard', 75000000, 11, 105, 2),
(18, 'Charly', 'Musonda', 5000000, 11, 105, 2),
(19, '', 'Willian', 32000000, 12, 28, 2),
(20, 'Pedro ', 'Rodriguez', 28000000, 12, 152, 2),
(21, 'Victor', 'Moses', 18000000, 4, 213, 2),
(22, 'Alvaro', 'Morata', 50000000, 10, 152, 2),
(23, 'Diego', 'Costa', 50000000, 10, 152, 2),
(24, 'Michy', 'Batshuayi', 25000000, 10, 105, 2),
(25, '', 'Ederson', 25000000, 1, 28, 3),
(26, 'Claudio', 'Bravo', 8000000, 1, 33, 3),
(27, 'John', 'Stones', 35000000, 3, 284, 3),
(28, 'Nicolas', 'Otamendi', 30000000, 3, 11, 3),
(29, 'Vincent', 'Kompany', 15000000, 10, 105, 3),
(30, 'Eliaquim ', 'Mangala', 15000000, 3, 138, 3),
(31, 'Benjamin', 'Mendy', 30000000, 2, 138, 3),
(32, 'Kyle', 'Walker', 35000000, 4, 284, 3),
(33, '', 'Danilo', 18000000, 4, 28, 3),
(34, 'Ilkay', 'Gundogan', 30000000, 6, 211, 3),
(36, 'Fabian', 'Delph', 8000000, 6, 284, 3),
(37, 'Yaya', 'Toure', 8000000, 6, 277, 3),
(38, 'Kevin', 'De Bruyne', 75000000, 7, 105, 3),
(39, 'David ', 'Silva', 30000000, 7, 152, 3),
(40, 'Leroy', 'Sane', 45000000, 11, 211, 3),
(41, 'Raheem', 'Sterling', 50000000, 12, 284, 3),
(42, 'Bernardo', 'Silva', 40000000, 12, 225, 3),
(43, 'Sergio', 'Aguero', 65000000, 10, 11, 7),
(44, 'Gabriel ', 'Jesus', 45000000, 10, 28, 3),
(45, 'David', 'De Gea', 40000000, 1, 152, 4),
(46, 'Sergio', 'Romero', 6000000, 1, 152, 4),
(47, 'Eric', 'Bailly', 30000000, 3, 277, 4),
(48, 'Victor', 'Lindelof', 22000000, 3, 254, 4),
(49, 'Phil', 'Jones', 18000000, 3, 284, 4),
(50, 'Marcos', 'Roja', 18000000, 3, 11, 4),
(51, 'Chris', 'Smalling', 18000000, 3, 284, 4),
(52, 'Daley', 'Blind', 22000000, 2, 153, 4),
(53, 'Luke', 'Shaw', 18000000, 2, 284, 4),
(54, 'Matteo', 'Darmian', 12000000, 4, 276, 4),
(62, 'Antonia', 'Valencia', 10000000, 4, 131, 4),
(63, 'Nemanja', 'Matic', 35000000, 5, 239, 4),
(64, 'Michael', 'Carrick', 1500000, 5, 284, 4),
(65, 'Paul', 'Pogba', 75000000, 6, 138, 4),
(66, 'Ander', 'Herrera', 30000000, 6, 152, 4),
(67, 'Marouane', 'Fellaini', 12000000, 6, 105, 4),
(68, 'Ashley', 'Young', 5000000, 8, 284, 4),
(69, 'Henrikh', 'Mkhitaryan', 35000000, 7, 97, 4),
(70, 'Juan', 'Mata', 30000000, 7, 152, 4),
(71, 'Anthony', 'Martial', 35000000, 11, 138, 4),
(72, 'Jesse', 'Lingard', 12000000, 11, 284, 4),
(73, 'Romelu', 'Lukaku', 70000000, 10, 105, 4),
(74, 'Marcus', 'Rashford', 30000000, 10, 224, 4),
(75, 'Zlatan', 'Ibrahimovic', 8000000, 10, 254, 4),
(76, 'Hugo', 'LLoris', 24000000, 1, 138, 5),
(77, 'Michel', 'Vorm', 4000000, 1, 153, 5),
(78, 'Toby', 'Alderweireld', 35000000, 3, 105, 5),
(79, 'Jan', 'Vertonghen', 28000000, 3, 105, 5),
(80, 'Davinson', 'Sanchez', 25000000, 3, 174, 5),
(81, 'Danny', 'Rose', 28000000, 2, 284, 5),
(82, 'Ben', 'Davies', 15000000, 2, 285, 5),
(83, 'Serge', 'Aurier', 15000000, 4, 277, 7),
(84, 'Kieran', 'Trippier', 12000000, 4, 284, 5),
(85, 'Kyle', 'Walker_Peters', 1000000, 4, 284, 5),
(86, 'Eric', 'Dier', 30000000, 5, 284, 5),
(87, 'Victor', 'Wanyama', 25000000, 5, 171, 5),
(88, 'Moussa', 'Sissoko', 20000000, 6, 138, 5),
(89, 'Moussa', 'Dembele', 18000000, 6, 105, 5),
(90, 'Harry', 'Winks', 5000000, 6, 284, 5),
(91, 'Dele', 'Alli', 60000000, 7, 284, 5),
(92, 'Heung-Min', 'Son', 30000000, 11, 177, 5),
(93, 'Georges_Kevin', 'N\'Koudou', 7000000, 11, 138, 5),
(94, 'Erik', 'Lamela', 25000000, 12, 11, 5),
(95, 'Harry', 'Kane', 80000000, 10, 284, 5),
(96, 'Fernando', 'Llorente', 8000000, 10, 152, 5),
(97, 'Simon', 'Mignolet', 12000000, 1, 105, 6),
(98, 'Loris', 'Karius', 8000000, 1, 211, 6),
(99, 'Danny', 'Ward', 2500000, 1, 285, 6),
(100, 'Joel', 'Matip', 25000000, 3, 167, 6),
(101, 'Dejan', 'Lovren', 17000000, 3, 120, 6),
(102, 'Joe', 'Gomez', 8000000, 3, 284, 6),
(103, 'Ragnar', 'Klavan', 3500000, 3, 133, 6),
(104, 'Alberto', 'Moreno', 10000000, 2, 152, 6),
(105, 'Andrew', 'Robertson', 7000000, 2, 288, 6),
(106, 'Nathaniel', 'Clyne', 21000000, 4, 284, 12),
(107, 'Trent', 'Alexander-Arnold', 5000000, 4, 284, 19),
(108, 'Jon', 'Flanagan', 3500000, 4, 284, 6),
(109, 'Emre', 'Can', 22000000, 5, 211, 6),
(110, 'Georginio', 'Wijnaldum', 28000000, 6, 153, 6),
(111, 'Jordan', 'Henderson', 28000000, 6, 284, 6),
(112, 'James', 'Milner', 12000000, 6, 284, 6),
(113, 'Marko', 'Grujic', 5000000, 6, 239, 6),
(114, 'Alex', 'Oxlade-Chamberlain', 30000000, 9, 284, 6),
(115, 'Phillipe', 'Coutinho', 65000000, 7, 28, 25),
(116, 'Adam', 'Lallana', 25000000, 7, 284, 6),
(117, 'Sadio', 'Mane', 50000000, 11, 238, 6),
(118, 'Ben', 'Woodburn', 5000000, 11, 285, 6),
(119, 'Mohamed', 'Salah', 40000000, 12, 130, 6),
(120, 'Lazar', 'Markovic', 10000000, 12, 239, 6),
(121, 'Roberto', 'Firmino', 38000000, 13, 28, 6),
(122, 'Daniel', 'Sturridge', 20000000, 10, 284, 6),
(123, 'Danny', 'Ings', 8000000, 10, 284, 6),
(124, 'Dominic', 'Solanke', 5000000, 10, 284, 6),
(125, 'David', 'Ospina', 7000000, 1, 174, 7),
(126, 'Petr', 'Cech', 7000000, 1, 39, 7),
(127, 'Shkodran', 'Mustafi', 28000000, 3, 211, 7),
(128, 'Laurent', 'Koscielny', 22000000, 3, 138, 7),
(129, 'Rob', 'Holding', 7000000, 3, 284, 7),
(130, 'Per', 'Mertesacker', 6000000, 3, 211, 7),
(131, 'Sead', 'Kolasinac', 15000000, 2, 111, 7),
(132, 'Nacho', 'Monreal', 13000000, 2, 152, 7),
(133, 'Hector', 'Bellerin', 30000000, 4, 152, 7),
(134, 'Calum', 'Chambers', 14000000, 4, 284, 7),
(135, 'Mathieu', 'Debuchy', 3500000, 4, 138, 7),
(136, 'Granit', 'Xhaka', 35000000, 5, 253, 7),
(137, 'Francis', 'Coquelin', 3500000, 5, 138, 7),
(138, 'Mahamed', 'Elneny', 10000000, 5, 130, 7),
(139, 'Aaron', 'Ramsey', 35000000, 6, 285, 7),
(140, 'Jack', 'Wilshere', 15000000, 6, 284, 7),
(141, 'Santi', 'Cazorla', 12000000, 6, 152, 7),
(142, 'Mesut', 'Ozil', 50000000, 7, 211, 7),
(143, 'Alexis', 'Sanchez', 65000000, 11, 33, 4),
(144, 'Alex', 'Iwobi', 10000000, 11, 284, 7),
(145, 'Theo', 'Walcott', 20000000, 12, 284, 7),
(146, 'Alexandre', 'Lacazette', 50000000, 10, 138, 7),
(147, 'Olivier', 'Giroud', 22000000, 10, 138, 7),
(148, 'Danny', 'Welbeck', 15000000, 10, 284, 7),
(149, 'Chuba', 'Akpom', 1000000, 10, 284, 7),
(150, 'Jordan', 'Pickford', 15000000, 1, 284, 8),
(151, 'Joel', 'Robles', 5000000, 1, 152, 8),
(152, 'Maarten', 'Stekelenburg', 2000000, 1, 153, 8),
(153, 'Michael', 'Keane', 18000000, 3, 284, 8),
(154, 'Ramiro', 'Funes Mori', 12000000, 3, 11, 8),
(155, 'Ashley', 'Williams', 8000000, 3, 285, 8),
(156, 'Mason', 'Holgate', 5000000, 3, 284, 8),
(157, 'Phil', 'Jagielka', 2000000, 3, 284, 8),
(158, 'Leighton', 'Baines', 12000000, 2, 284, 8),
(159, 'Luke', 'Garbutt', 1000000, 2, 284, 8),
(160, 'Seamus', 'Coleman', 17000000, 4, 286, 8),
(161, 'Cuco', 'Martina', 2000000, 4, 153, 8),
(162, 'Morgan', 'Schneiderlin', 22000000, 5, 138, 8),
(163, 'Muhamed', 'Besic', 5000000, 5, 239, 8),
(164, 'Idrissa', 'Gueye', 18000000, 5, 238, 8),
(165, 'James', 'McCarthy', 15000000, 6, 286, 8),
(166, 'Tom', 'Davies', 8000000, 6, 284, 8),
(167, 'Gylfi', 'Sigurdsson', 30000000, 7, 160, 8),
(168, 'Ross', 'Barkley', 25000000, 7, 284, 8),
(169, 'Davy', 'Klaassen', 18000000, 7, 153, 8),
(170, 'Nikola', 'Vlasic', 8000000, 7, 120, 8),
(171, 'Yannick', 'Bolasie', 20000000, 11, 41, 18),
(172, 'Ademola', 'Lookman', 5000000, 11, 284, 8),
(173, 'Kevin', 'Mirallas', 13000000, 11, 105, 8),
(174, 'Aaron', 'Lennon', 5000000, 12, 284, 8),
(175, 'Wayne', 'Rooney', 15000000, 7, 284, 8),
(176, 'Dominic', 'Calvert-Lewin', 8000000, 13, 284, 8),
(177, 'Sandro', 'Ramirez', 10000000, 10, 152, 8),
(178, 'Oumar', 'Niasse', 9000000, 10, 238, 8),
(179, 'Frazer', 'Forster', 15000000, 1, 284, 9),
(180, 'Alex', 'McCarthy', 3000000, 1, 284, 9),
(181, 'Stuart', 'Taylor', 250000, 1, 284, 9),
(182, 'Jack', 'Rose', 100000, 1, 284, 9),
(183, 'Virgil', 'van Dijk', 30000000, 3, 153, 9),
(184, 'Wesley', 'Hoedt', 12000000, 3, 153, 9),
(185, 'Maya', 'Yoshida', 5000000, 3, 163, 9),
(186, 'Jack', 'Stephens', 5000000, 3, 284, 9),
(187, 'Jan', 'Bednarek', 5000000, 3, 224, 9),
(188, 'Florin', 'Gardos', 2500000, 3, 230, 9),
(189, 'Ryan', 'Bertrand', 20000000, 2, 284, 9),
(190, 'Matt', 'Targett', 3000000, 2, 284, 9),
(191, 'Cedric', 'Soares', 15000000, 4, 225, 9),
(192, 'Jeremy', 'Pied', 3500000, 4, 138, 9),
(193, 'Mario', 'Lemina', 12000000, 5, 138, 9),
(194, 'Oriol', 'Romeu', 10000000, 5, 152, 9),
(195, 'James', 'Ward-Prowse', 15000000, 6, 284, 9),
(196, 'Pierre-Emile', 'Hojbjerg', 8000000, 6, 40, 9),
(197, 'Steven', 'Davis', 6000000, 6, 287, 9),
(198, 'Sam', 'McQueen', 750000, 8, 284, 9),
(199, 'Sofiane', 'Boufal', 15000000, 7, 198, 9),
(200, 'Dusan', 'Tadic', 17000000, 7, 239, 9),
(201, 'Nathan', 'Redmond', 15000000, 12, 284, 9),
(202, 'Josh', 'Sims', 500000, 12, 284, 9),
(203, 'Manolo', 'Gabbiadini', 15000000, 10, 276, 9),
(204, 'Charlie', 'Austin', 13000000, 10, 284, 9),
(205, 'Shane', 'Long', 9000000, 10, 286, 9),
(206, 'Robert', 'Lewandowski', 90000000, 10, 224, 22),
(207, 'Lionel', 'Messi', 120000000, 12, 11, 25),
(208, 'Cristiano', 'Ronaldo', 120000000, 11, 225, 23),
(209, 'da Silva', 'Neymar', 140000000, 11, 28, 24),
(211, 'asd', 'asd', 123, 1, 7, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pozycje`
--

CREATE TABLE `pozycje` (
  `ID_pozycja_PK` int(11) NOT NULL,
  `nazwa_pozycji` varchar(32) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `pozycje`
--

INSERT INTO `pozycje` (`ID_pozycja_PK`, `nazwa_pozycji`) VALUES
(1, 'Bramkarz'),
(2, 'Lewy Obronca'),
(3, 'Srodkowy Obronca'),
(4, 'Prawy Obronca'),
(5, 'Defensywny Pomocnik'),
(6, 'Srodkowy Pomocnik'),
(7, 'Ofensywny Pomocnik'),
(8, 'Lewy Pomocnik'),
(9, 'Prawy Pomocnik'),
(10, 'Srodkowy Napastnik'),
(11, 'Lewy Napastnik'),
(12, 'Prawy Napastnik'),
(13, 'Cofniety Napastnik');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `stadiony`
--

CREATE TABLE `stadiony` (
  `ID_stadion_PK` int(11) NOT NULL,
  `nazwa_stadionu` varchar(30) CHARACTER SET latin1 NOT NULL,
  `pojemnosc` int(11) NOT NULL,
  `rok_budowy` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `stadiony`
--

INSERT INTO `stadiony` (`ID_stadion_PK`, `nazwa_stadionu`, `pojemnosc`, `rok_budowy`) VALUES
(2, 'Stamford Bridge', 41631, 1877),
(3, 'Etihad Stadium', 55097, 2002),
(4, 'Old Trafford', 75643, 1910),
(5, 'White Hart Lane', 36284, 1899),
(6, 'Anfield', 54074, 1884),
(7, 'Emirates Stadium', 60260, 2006),
(8, 'Goodison Park', 39571, 1892),
(9, 'St Mary;s Stadium', 32384, 2001),
(10, 'King Power Stadium', 32273, 2002),
(11, 'Boleyn Ground', 34977, 1904),
(12, 'Selhurst Park', 25456, 1924),
(13, 'Britannia Stadium', 30089, 1997),
(14, 'The Hawthorns', 26850, 1900),
(15, 'Liberty Stadium', 21088, 2003),
(16, 'AMEX Stadium', 30750, 2011),
(17, 'Vicarage Road', 21438, 1922),
(18, 'Turf Moor', 21401, 1883),
(19, 'St James\' Park', 52338, 1880),
(20, 'John Smith\'s Stadium', 24500, 1994),
(21, 'Vitality Stadium', 11464, 1910),
(22, 'Santiago Bernabeu', 81044, 1947),
(23, 'Camp Nou', 98772, 1957),
(24, 'Vicente Calderón', 54907, 1966),
(25, 'Ramon Sanchez Pizjuan', 42714, 1958),
(26, 'La Ceramica', 23500, 1923),
(27, 'Mestalla', 50242, 1919),
(28, 'San Mames', 53000, 2013),
(29, 'Anoeta', 32076, 1993),
(30, 'Balaidos', 29000, 1928),
(31, 'Estadio de Gran Canaria', 32400, 2003),
(32, 'Benito Villamarin', 60720, 1929),
(33, 'Riazor', 32900, 1944),
(34, 'RCDE Stadium', 40500, 2009),
(35, 'La Rosaleda', 30044, 1941),
(36, 'Ipurua', 7083, 1947),
(37, 'Mendizorrotza', 19840, 1924),
(38, 'Municipal de Butarque', 11454, 1998),
(39, 'Ciutat de Valencia', 25354, 1969),
(40, 'Municipal de Montilivi', 13500, 1970),
(41, 'Coliseum Alfonso Perez', 16800, 1998);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `transfery`
--

CREATE TABLE `transfery` (
  `ID_transfer_PK` int(11) NOT NULL,
  `kwota` int(11) NOT NULL,
  `data_transferu` date NOT NULL,
  `ID_klub_poz_FK` int(11) NOT NULL,
  `ID_klub_odd_FK` int(11) NOT NULL,
  `ID_pilkarz_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `transfery`
--

INSERT INTO `transfery` (`ID_transfer_PK`, `kwota`, `data_transferu`, `ID_klub_poz_FK`, `ID_klub_odd_FK`, `ID_pilkarz_FK`) VALUES
(1, 75000000, '2018-01-04', 6, 9, 183),
(2, 15000000, '2018-01-08', 2, 8, 168),
(7, 46000000, '2018-01-05', 13, 18, 163),
(11, 80000000, '2018-01-02', 4, 8, 73),
(13, 56000000, '2018-01-09', 6, 3, 6),
(14, 12000000, '2018-01-13', 4, 15, 128),
(15, 20000000, '2018-01-16', 10, 20, 41),
(16, 45000000, '2018-01-04', 3, 6, 130),
(20, 23000000, '2018-01-04', 7, 25, 121),
(21, 28000000, '2018-01-07', 24, 15, 131),
(22, 60000000, '2018-01-10', 8, 2, 105),
(25, 47000000, '2018-01-13', 2, 24, 81),
(27, 21000000, '2018-01-15', 3, 17, 127),
(28, 29000000, '2018-01-17', 9, 18, 112),
(29, 30000000, '2018-01-18', 12, 20, 26),
(30, 14000000, '2018-01-13', 12, 20, 152),
(32, 45000000, '2018-01-14', 3, 24, 150),
(33, 20000000, '2018-01-01', 3, 15, 92),
(34, 18000000, '2018-01-04', 8, 12, 40),
(36, 70000000, '2018-01-17', 3, 4, 180),
(37, 40000000, '2018-01-08', 15, 11, 46),
(38, 14000000, '2018-01-09', 21, 8, 155),
(43, 15000000, '2018-01-17', 18, 2, 171),
(51, 14000000, '2018-01-31', 2, 2, 43),
(52, 13000000, '2018-01-14', 25, 2, 115),
(54, 30000000, '2018-01-01', 18, 2, 43),
(55, 140000000, '2018-01-28', 7, 2, 91);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `trenerzy`
--

CREATE TABLE `trenerzy` (
  `ID_trener_PK` int(11) NOT NULL,
  `imie_trenera` varchar(30) CHARACTER SET latin1 NOT NULL,
  `nazwisko_trenera` varchar(30) CHARACTER SET latin1 NOT NULL,
  `ID_kraj_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `trenerzy`
--

INSERT INTO `trenerzy` (`ID_trener_PK`, `imie_trenera`, `nazwisko_trenera`, `ID_kraj_FK`) VALUES
(4, 'Antonio', 'Conte', 284),
(5, 'Pep', 'Guardiola', 152),
(6, 'Jose', 'Mourinho', 225),
(7, 'Mauricio', 'Pochettina', 11),
(8, 'Jurgen', 'Klopp', 211),
(9, 'Arsene', 'Wenger', 138),
(10, 'David', 'Unsworth', 284),
(11, 'Mauricio', 'Pellegrino', 11),
(12, 'Claude', 'Puel', 138),
(13, 'David', 'Moyes', 288),
(14, 'Roy', 'Hodgson', 284),
(15, 'Mark', 'Hughes', 285),
(16, 'Tony', 'Pulis', 285),
(17, 'Paul', 'Clement', 284),
(18, 'Marco', 'Silva', 225),
(19, 'Rafael ', 'Benitez', 152),
(20, 'Eddie', 'Howe', 284),
(21, 'Sean ', 'Dyche', 284),
(22, 'Chris', 'Hughton', 286),
(23, 'David', 'Wagner', 247),
(24, 'Zinedine', 'Zidane', 138),
(25, 'Ernesto', 'Valverde', 152),
(26, 'Diego', 'Simeone', 11),
(27, 'Eduardo', 'Berizzo', 11),
(28, 'Javier', 'Calleja', 138),
(29, '', 'Marcelino', 152),
(30, 'Cuco ', 'Ziganda', 152),
(31, '', 'Eusebio', 152),
(32, 'Juan Carlos', 'Unzue', 152),
(33, '', 'Paquito', 152),
(34, 'Quique', 'Setien', 152),
(35, 'Cristobal', 'Parralo', 152),
(36, 'Quique', 'Flores', 152),
(37, '', 'Michel', 152),
(38, 'Jose Luis', 'Mendilibar', 152),
(39, '', 'Abelardo', 152),
(40, 'Asier', 'Garitano', 152),
(41, 'Juan', 'Muniz', 152),
(42, 'Pablo', 'Machin', 152),
(43, 'Pepe', 'Bordalas', 152),
(46, 'asd', 'asdsad', 7);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `register_date`) VALUES
(4, 'admin', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2018-02-15 23:46:45'),
(5, 'piotrek', 'piotrek@gmail.com', 'piotrek', '5fab6c2a4e468a15f5926dc20e952ce7', '2018-02-15 23:53:08');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `kluby`
--
ALTER TABLE `kluby`
  ADD PRIMARY KEY (`ID_klub_PK`),
  ADD KEY `ID_kraj_FK` (`ID_kraj_FK`),
  ADD KEY `ID_stadion_FK` (`ID_stadion_FK`),
  ADD KEY `ID_trener_FK` (`ID_trener_FK`),
  ADD KEY `ID_liga_FK` (`ID_liga_FK`);

--
-- Indexes for table `kraje`
--
ALTER TABLE `kraje`
  ADD PRIMARY KEY (`ID_kraj_PK`);

--
-- Indexes for table `ligi`
--
ALTER TABLE `ligi`
  ADD PRIMARY KEY (`ID_liga_PK`),
  ADD KEY `ID_kraj_FK` (`ID_kraj_FK`);

--
-- Indexes for table `pilkarze`
--
ALTER TABLE `pilkarze`
  ADD PRIMARY KEY (`ID_pilkarz_PK`),
  ADD KEY `ID_kraj_FK` (`ID_kraj_FK`,`ID_klub_FK`),
  ADD KEY `ID_klub_FK` (`ID_klub_FK`),
  ADD KEY `ID_pozycja_FK` (`ID_pozycja_FK`);

--
-- Indexes for table `pozycje`
--
ALTER TABLE `pozycje`
  ADD PRIMARY KEY (`ID_pozycja_PK`);

--
-- Indexes for table `stadiony`
--
ALTER TABLE `stadiony`
  ADD PRIMARY KEY (`ID_stadion_PK`);

--
-- Indexes for table `transfery`
--
ALTER TABLE `transfery`
  ADD PRIMARY KEY (`ID_transfer_PK`),
  ADD KEY `ID_klub_odd_FK` (`ID_klub_odd_FK`),
  ADD KEY `ID_klub_poz_FK` (`ID_klub_poz_FK`,`ID_pilkarz_FK`),
  ADD KEY `ID_pilkarz_FK` (`ID_pilkarz_FK`);

--
-- Indexes for table `trenerzy`
--
ALTER TABLE `trenerzy`
  ADD PRIMARY KEY (`ID_trener_PK`),
  ADD KEY `ID_kraj_FK` (`ID_kraj_FK`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `kluby`
--
ALTER TABLE `kluby`
  MODIFY `ID_klub_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT dla tabeli `kraje`
--
ALTER TABLE `kraje`
  MODIFY `ID_kraj_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=289;

--
-- AUTO_INCREMENT dla tabeli `ligi`
--
ALTER TABLE `ligi`
  MODIFY `ID_liga_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT dla tabeli `pilkarze`
--
ALTER TABLE `pilkarze`
  MODIFY `ID_pilkarz_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT dla tabeli `pozycje`
--
ALTER TABLE `pozycje`
  MODIFY `ID_pozycja_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT dla tabeli `stadiony`
--
ALTER TABLE `stadiony`
  MODIFY `ID_stadion_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT dla tabeli `transfery`
--
ALTER TABLE `transfery`
  MODIFY `ID_transfer_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT dla tabeli `trenerzy`
--
ALTER TABLE `trenerzy`
  MODIFY `ID_trener_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `kluby`
--
ALTER TABLE `kluby`
  ADD CONSTRAINT `kluby_ibfk_1` FOREIGN KEY (`ID_kraj_FK`) REFERENCES `kraje` (`ID_kraj_PK`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `kluby_ibfk_2` FOREIGN KEY (`ID_liga_FK`) REFERENCES `ligi` (`ID_liga_PK`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `kluby_ibfk_3` FOREIGN KEY (`ID_stadion_FK`) REFERENCES `stadiony` (`ID_stadion_PK`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `kluby_ibfk_4` FOREIGN KEY (`ID_trener_FK`) REFERENCES `trenerzy` (`ID_trener_PK`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `ligi`
--
ALTER TABLE `ligi`
  ADD CONSTRAINT `ligi_ibfk_1` FOREIGN KEY (`ID_kraj_FK`) REFERENCES `kraje` (`ID_kraj_PK`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `pilkarze`
--
ALTER TABLE `pilkarze`
  ADD CONSTRAINT `pilkarze_ibfk_1` FOREIGN KEY (`ID_kraj_FK`) REFERENCES `kraje` (`ID_kraj_PK`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pilkarze_ibfk_2` FOREIGN KEY (`ID_klub_FK`) REFERENCES `kluby` (`ID_klub_PK`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pilkarze_ibfk_3` FOREIGN KEY (`ID_pozycja_FK`) REFERENCES `pozycje` (`ID_pozycja_PK`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `transfery`
--
ALTER TABLE `transfery`
  ADD CONSTRAINT `transfery_ibfk_1` FOREIGN KEY (`ID_pilkarz_FK`) REFERENCES `pilkarze` (`ID_pilkarz_PK`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `transfery_ibfk_2` FOREIGN KEY (`ID_klub_poz_FK`) REFERENCES `kluby` (`ID_klub_PK`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `transfery_ibfk_3` FOREIGN KEY (`ID_klub_odd_FK`) REFERENCES `kluby` (`ID_klub_PK`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `trenerzy`
--
ALTER TABLE `trenerzy`
  ADD CONSTRAINT `trenerzy_ibfk_1` FOREIGN KEY (`ID_kraj_FK`) REFERENCES `kraje` (`ID_kraj_PK`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
