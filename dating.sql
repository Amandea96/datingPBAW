-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 06 Lis 2018, 10:40
-- Wersja serwera: 10.1.30-MariaDB
-- Wersja PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `randki`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `assignment`
--

CREATE TABLE `assignment` (
  `id_person` int(11) NOT NULL,
  `id_fea` int(11) NOT NULL,
  `grade` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `description`
--

CREATE TABLE `description` (
  `id_pd` int(11) NOT NULL,
  `id_desc` int(11) NOT NULL,
  `date` varchar(20) COLLATE utf8mb4_polish_ci NOT NULL,
  `text` text COLLATE utf8mb4_polish_ci NOT NULL,
  `main` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `description`
--

INSERT INTO `description` (`id_pd`, `id_desc`, `date`, `text`, `main`) VALUES
(43, 1, '2018-09-04', 'Mieszkam w chacie.', 1),
(46, 2, '2018-09-20', 'Jestem nowy na takich portalach.', 1),
(49, 3, '2018-09-01', 'jljl', 1),
(1, 4, '2018-09-01', 'Mieszkam od kiedy się urodziłam w chacie. Lubię stare budownictwo. Uwielbiam słodycze.', 1),
(48, 5, '2018-09-01', 'Każdego ranka biegam 5km. Jestem biznesmenem w branży komputerowej.', 1),
(50, 6, '2018-09-01', 'Często oglądam anime i interesuję się kulturą Japonii.', 1),
(50, 7, '2018-10-03', 'Właśnie wyjechałam do Japonii.', 0),
(50, 8, '2018-10-04', 'Tokio tak jak się spodziewałam jest naprawdę tłoczne, a zarazem piękne.', 0),
(43, 11, '2018-09-01', 'Interesuję się technologią, możliwościami nowo powstałych smarphonów, muzyką.', 0),
(43, 14, '2018-09-01', 'Jestem studentką trzeciego roku Informatyki. ', 0),
(43, 21, '2018-09-01', 'Uwielbiam zwierzęta, śpiewać oraz oglądać seriale.', 0),
(43, 22, '2018-09-01', 'Jestem technikiem cyfrowych procesów graficznych :)', 0),
(43, 23, '2018-09-01', 'Uwielbiam czarne koty.', 0),
(1, 24, '2018-09-01', 'Mam stado kruków', 0),
(1, 25, '2018-09-01', 'W każdą sobotę piekę ciasto jabłkowe. ', 0),
(1, 26, '2018-09-01', 'A we wtorek sernik z rodzynkami.', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `feature`
--

CREATE TABLE `feature` (
  `id_fea` int(11) NOT NULL,
  `name_fea` varchar(20) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `feature`
--

INSERT INTO `feature` (`id_fea`, `name_fea`) VALUES
(1, 'Odwaga'),
(2, 'Wrażliwość'),
(3, 'Altruizm');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `friend`
--

CREATE TABLE `friend` (
  `id_person1` int(11) NOT NULL,
  `id_person2` int(11) NOT NULL,
  `type` varchar(15) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `friend`
--

INSERT INTO `friend` (`id_person1`, `id_person2`, `type`) VALUES
(1, 45, 'friend'),
(1, 50, 'friend'),
(1, 43, 'friend'),
(1, 51, 'friend'),
(43, 51, 'friend'),
(43, 50, 'friend'),
(44, 43, 'friend'),
(44, 46, 'friend'),
(44, 50, 'friend'),
(44, 1, 'friend'),
(43, 53, 'friend');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `msg`
--

CREATE TABLE `msg` (
  `sender` int(11) NOT NULL,
  `receiver` int(11) NOT NULL,
  `id_msg` int(11) NOT NULL,
  `datemsg` varchar(19) COLLATE utf8mb4_polish_ci NOT NULL,
  `message` text COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `msg`
--

INSERT INTO `msg` (`sender`, `receiver`, `id_msg`, `datemsg`, `message`) VALUES
(1, 43, 5, '2018-10-07 21:42:29', 'Lubisz zwierzęta?'),
(43, 1, 6, '2018-10-07 22:49:21', 'Tak, nawet mam kilka :)'),
(1, 43, 7, '2018-10-08 01:04:31', 'Uwielbiam czarne ptaki.'),
(1, 43, 92, '2018-09-01', 'Lubię szarlotkę'),
(43, 1, 93, '2018-09-01', 'Wolę sernik :)'),
(43, 1, 95, '2018-09-01', 'i ciasto orzechowe'),
(43, 1, 97, '2018-09-01', 'Interesuję się telefonami'),
(1, 43, 99, '2018-09-01', 'ghfh');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `person`
--

CREATE TABLE `person` (
  `id_person` int(11) NOT NULL,
  `nick` varchar(25) COLLATE utf8mb4_polish_ci NOT NULL,
  `pass` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `gender` varchar(15) COLLATE utf8mb4_polish_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `prefM` varchar(3) COLLATE utf8mb4_polish_ci NOT NULL,
  `age` date NOT NULL,
  `height` int(11) NOT NULL,
  `complex` varchar(15) COLLATE utf8mb4_polish_ci NOT NULL,
  `ecolor` varchar(15) COLLATE utf8mb4_polish_ci NOT NULL,
  `hcolor` varchar(15) COLLATE utf8mb4_polish_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `prefW` varchar(3) COLLATE utf8mb4_polish_ci NOT NULL,
  `nation` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `image` varchar(300) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `person`
--

INSERT INTO `person` (`id_person`, `nick`, `pass`, `gender`, `email`, `prefM`, `age`, `height`, `complex`, `ecolor`, `hcolor`, `city`, `prefW`, `nation`, `image`) VALUES
(1, 'baba', 'jaga', 'Kobieta', 'bj@hmail.com', 'Tak', '1900-11-01', 160, 'Biała', 'Niebieskie', 'Białe', 'Chatka', 'Nie', 'Rumunia', 'http://4.bp.blogspot.com/-A5fAsQgsFfM/VeNDYPtEbvI/AAAAAAAAHBY/IRgHqtW-mI0/s1600/baba1.jpg'),
(43, 'Amanda', 'haha', 'Kobieta', 'am@gmail.com', 'Tak', '1996-11-01', 160, 'Biała', 'Niebieski', '', 'Sosnowiec', 'Nie', 'Polska', 'http://images4.fanpop.com/image/photos/23300000/Faith-hill-faith-hill-23342964-1024-768.jpg'),
(44, 'Teresa87', 'tera', '', 'tera@gmail.com', 'Tak', '1987-09-17', 160, 'Biała', 'Zielone', 'Szatyn', 'Gdańsk', 'Nie', 'Polska', ''),
(45, 'Meara', 'jkk', 'Kobieta', 'ter@gmail.com', '', '1966-02-27', 202, '', '', '', '', '', '', ''),
(46, 'Jarek99', 'xkghsxg', 'Mężczyzna', 'jaro@gmail.com', 'Nie', '1999-03-07', 185, 'Śniada', 'Brązowe', 'Czarne', 'Tokio', 'Tak', 'Japonia', ''),
(47, 'Ures99', 'xvnxax', 'Mężczyzna', 'ures@wp.pl', '', '1999-03-02', 160, '', '', '', '', '', '', ''),
(48, 'Krzynio87', 'dadad', 'Mężczyzna', 'krzy@hjgd.com', 'Nie', '1987-09-11', 188, 'Oliwkowa', 'Szare', 'Ciemny blond', 'Los Angeles', 'Tak', 'USA', 'https://www.mens-hairstyle.com/wp-content/uploads/2016/12/Mens-Medium-Hairstyles.jpg'),
(49, 'Yerta95', 'gaga', '', 'yerta@vjhx.com', '', '1995-06-06', 160, '', '', '', '', '', '', ''),
(50, 'Kiryuu', 'sakamoto', 'Kobieta', 'kiryuu@gmail.com', 'Tak', '1997-11-17', 160, 'Biała', 'Szare', 'Ciemny blond', 'Osaka', 'Nie', 'Japonia', ''),
(51, 'Hiroshi', 'cbkjbc', 'Mężczyzna', 'hiro@shj.com', 'Nie', '1994-09-19', 177, 'Śniada', 'Brązowe', 'Czarne', 'Nagoja', 'Tak', 'Japonia', 'https://qph.fs.quoracdn.net/main-qimg-1eb98e9014aba33d567809fcd36a03a8'),
(52, 'Dente', 'fsfsf', 'Mężczyzna', 'des2@gm.com', 'Tak', '1989-05-04', 179, 'Jasnobrązowa', 'Zielone', 'Czarne', 'Los Angeles', 'Tak', 'Stany Zjednoczone', ''),
(53, 'Heresen87', 'dqeqe', 'Mężczyzna', 'herresen@hdghd.com', 'Nie', '1987-01-03', 188, 'Biała', 'Piwne', 'Ciemny blond', 'Amsterdam', 'Tak', 'Holandia', 'https://m.media-amazon.com/images/M/MV5BNjkzZTZjNTItMDc2Mi00OTQwLTlkZjUtYzkzYjhjNjU5YTRiXkEyXkFqcGdeQXVyMTgwOTc3Mw@@._V1_SY1000_CR0,0,666,1000_AL_.jpg');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id_person`),
  ADD KEY `id_fea` (`id_fea`);

--
-- Indeksy dla tabeli `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`id_desc`),
  ADD KEY `id_pd` (`id_pd`);

--
-- Indeksy dla tabeli `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`id_fea`),
  ADD KEY `id_fea` (`id_fea`);

--
-- Indeksy dla tabeli `friend`
--
ALTER TABLE `friend`
  ADD KEY `id_person1` (`id_person1`),
  ADD KEY `id_person2` (`id_person2`);

--
-- Indeksy dla tabeli `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id_msg`),
  ADD KEY `sender` (`sender`),
  ADD KEY `receiver` (`receiver`);

--
-- Indeksy dla tabeli `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id_person`),
  ADD KEY `id_person` (`id_person`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `description`
--
ALTER TABLE `description`
  MODIFY `id_desc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT dla tabeli `feature`
--
ALTER TABLE `feature`
  MODIFY `id_fea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `msg`
--
ALTER TABLE `msg`
  MODIFY `id_msg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT dla tabeli `person`
--
ALTER TABLE `person`
  MODIFY `id_person` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `assignment`
--
ALTER TABLE `assignment`
  ADD CONSTRAINT `assignment_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `person` (`id_person`),
  ADD CONSTRAINT `assignment_ibfk_2` FOREIGN KEY (`id_fea`) REFERENCES `feature` (`id_fea`);

--
-- Ograniczenia dla tabeli `description`
--
ALTER TABLE `description`
  ADD CONSTRAINT `description_ibfk_1` FOREIGN KEY (`id_pd`) REFERENCES `person` (`id_person`);

--
-- Ograniczenia dla tabeli `friend`
--
ALTER TABLE `friend`
  ADD CONSTRAINT `friend_ibfk_1` FOREIGN KEY (`id_person1`) REFERENCES `person` (`id_person`),
  ADD CONSTRAINT `friend_ibfk_2` FOREIGN KEY (`id_person2`) REFERENCES `person` (`id_person`);

--
-- Ograniczenia dla tabeli `msg`
--
ALTER TABLE `msg`
  ADD CONSTRAINT `msg_ibfk_1` FOREIGN KEY (`sender`) REFERENCES `person` (`id_person`),
  ADD CONSTRAINT `msg_ibfk_2` FOREIGN KEY (`receiver`) REFERENCES `person` (`id_person`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
