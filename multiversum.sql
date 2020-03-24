-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 24 mrt 2020 om 14:37
-- Serverversie: 10.4.11-MariaDB
-- PHP-versie: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multiversum`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `producten`
--

CREATE TABLE `producten` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `resolutie` text NOT NULL,
  `refreshrate` text NOT NULL,
  `aansluiting` text NOT NULL,
  `EAN` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `producten`
--

INSERT INTO `producten` (`id`, `name`, `description`, `price`, `image`, `resolutie`, `refreshrate`, `aansluiting`, `EAN`) VALUES
(1, 'Oculus Rift S', 'De Oculus Rift S is de opvolger van de originele Oculus Rift. Deze nieuwe VR bril is voorzien van inside-out tracking, wat inhoudt dat je geen externe sensors meer nodig hebt. Hierdoor heb je meer bewegingsruimte en nauwkeurigere tracking wanneer je de bril op je hoofd hebt. Ook hoef je niet eerst de Oculus Rift in te stellen. Je pakt de Rift S uit, sluit hem aan op een computer of laptop en je gaat meteen ermee aan de slag. Verder zie je door de Passthrough+ technologie de echte wereld als je de bril op hebt, zodat je niet per ongeluk ergens tegenaan loopt.\r\n\r\n', '616,50', 'https://tweakers.net/i/suEW48fJnUOM_rpkJ5ZHJjOMe0o=/i/2002572294.jpeg', '2560x1440 (Quad HD)', '80Hz', '3.5mm', '0815820020387'),
(2, 'Oculus Quest 64GB', 'De Oculus Quest 64GB is Oculus\' eerste actieve VR-bril zonder dat je een pc nodig hebt. Het enige wat je nodig hebt is de mobiele app om overal gebruik te maken van de Quest. Ook is de Quest draadloos, dus je zit niet langer vast aan de lengte van kabels. Bovenop zitten 4 camera\'s, die de omgeving scannen en op die manier voor de six degrees of freedom (SDOF) zorgen. Deze techniek herkent wanneer je springt, draait of bukt en vertaalt dit op die manier naar de game die je speelt. Dit zorgt voor een nog realistischere ervaring dan ooit. Ook de controllers zijn nieuw en verbeterd, maar de lay-out is hetzelfde als bij de Oculus Rift controllers. Jong geleerd, oud gedaan dus voor degenen die weleens met de Rift in de weer zijn geweest.\r\n\r\n', '449,00', 'https://tweakers.net/i/d12tvu4A1jaY9zDtcrPX2lhrQ1s=/fit-in/1280x/filters:strip_icc()/i/2002730254.jpeg?f=imagegallery', '2880x1600', '72Hz', 'USB 3.2 (Gen1, 5Gb/s) type-c', '0815820020318'),
(3, 'HP Windows Mixed Reality headset', 'De HP Windows Mixed Reality VR HMD behoort tot de nieuwste generatie Virtual Reality of eigenlijk Mixed Reality brillen. Een van de grootste voordelen van deze, onder Windows licentie gebouwde, VR brillen is het feit dat deze zijn voorzien van het zogenaamde Inside Out tracking systeem. (lees hier meer over dit unieke samenwerkingsverband tussen Windows en een aantal grote producenten)\r\n\r\nDit tracking systeem is afkomstig uit de Microsoft Hololens en maakt een hoge kwaliteit headtracking en positionele tracking mogelijk. Een ander groot voordeel is het feit dat Inside Out tracking werkt zonder Basestations of andere bijkomende apparaten voor de tracking.\r\nEen andere (grote) stap voorwaarts is de beeldkwaliteit, deze generatie Windows VR brillen kent aanmerkelijk minder “screendoor” effect problemen dan bijvoorbeeld de HTC Vive of Oculus Rift.\r\nGewoon aansluiten op een (geschikte!) Windows 10 PC en gelijk van start, bijvoorbeeld met het reeds aanwezige Mixed Reality portal in Windows 10', '331,32', 'https://tweakers.net/i/3zlY-iXBYkyio2QeSDuxoUuT-Ds=/fit-in/1280x/filters:strip_icc()/i/2001712141.jpeg?f=imagegallery', '2880x1440', '90Hz', '3.5mm, HDMI, USB 3.2 (Gen1, 5Gb/s)', '0192018001602\r\n'),
(4, 'HTC Vive Cosmos', 'De HTC VIVE Cosmos is een geavanceerde VR-bril. Koppel de Cosmos aan je computer of laptop met minimaal een NVIDIA GeForce GTX 1060 videokaart en ga aan de slag. Het nieuwe trackingsysteem ondersteunt 6 degrees of freedom, zodat de Cosmos al je bewegingen, ook als je springt en snel om je heen draait, nauwkeurig meet en registreert. De bril zelf klap je door het nieuwe kantelsysteem eenvoudig omhoog wanneer je de bril niet gebruikt. Wel zo handig als je iets aan de kant wil leggen of iets wil pakken. Via de hoofdband verstel je de Cosmos zo dat hij altijd goed zit op je hoofd. Ook de lenzen stel je in naar wens om altijd scherp beeld te hebben.\r\n\r\n', '749,52', 'https://tweakers.net/i/tvFVyun4k8DgV4xiFUNtbtR2JP8=/fit-in/1280x/filters:strip_icc()/i/2003398638.jpeg?f=imagegallery', '2880x1700', '90Hz', '3.5mm', '4718487715022'),
(7, 'Sony Playstation VR', 'Vanaf het moment dat je PlayStation VR opzet, het nieuwe virtual reality-systeem voor PlayStation 4, ervaar je games op een geheel nieuwe manier. Je bent zelf het middelpunt van de actie en beleeft ieder detail van fantastische nieuwe werelden — hierdoor lijkt het alsof je echt in de game zit.\r\n', '297,87', 'https://tweakers.net/i/5KEywUU_UHPe8g6rPtFt7sZNSpQ=/i/2000774356.png', '1920x1080 (Full HD)', '90Hz', 'HDMI, USB 2.0', '0711719843757'),
(8, 'Oculus Go 64GB', 'Met de Oculus Go maak je kennis met VR zonder dat je een zware pc nodig hebt of afhankelijk bent van je smartphone. Als zelfstandige VR bril heeft de Oculus namelijk zijn eigen processor en sensoren aan boord, zodat je met de Go in één keer aan de slag gaat. Met de Oculus Go beschik je over 360 graden head tracking en gebruik je de meegeleverde controller als virtuele aanwijzer. Met een hogere resolutie en pixeldichtheid dan de Oculus Rift geeft de Oculus Go de virtuele omgeving helder weer. Via de Oculus Store heb je toegang tot verschillende gratis- en betaalde apps en games. Zo kijk je bijvoorbeeld met Netflix en Plex jouw favoriete films en series.\r\n\r\n', '232,90', 'https://tweakers.net/i/UzTqEKxuqq2prxsnuVSEq3aqtic=/i/2001963381.png', '2560x1440 (Quad HD)', '72Hz', '3.5mm', '0815820020219\r\n'),
(9, 'HTC Vive Pro Eye', 'Ontworpen voor de meest veeleisende professionele gebruikers, de HTC Vive Pro Eye is nu voorzien van nauwkeurige eye-tracking in aanvulling op eigenschappen zoals superieure graphics, high-end audio en uitgebreide modulaire tracking. Met LED-sensoren rond de lenzen ondersteunt Vive Pro Eye de allernieuwste eye-tracking technologie voor VR en maakt het mogelijk om oogbewegingen te volgen en te analyseren.\r\n', '1399,-', 'https://tweakers.net/i/N2WLx2ekLy0oi5rdDlIqDRRlHoI=/fit-in/1280x/filters:strip_icc()/i/2002728002.jpeg?f=imagegallery', '2880x1600', '90Hz', '3.5mm, USB 3.2 (Gen1, 5Gb/s) type-c\r\n', '0815820020219'),
(10, 'Acer Mixed Reality Headset', 'De Windows Mixed Reality Headset is comfortabel en gemakkelijk aan te passen. Geniet van verschillende apps terwijl je gaat waar je maar wilt.\r\n', '349,-', 'https://tweakers.net/i/QVVCIb5Y958m2MObqrLq-NndU8c=/i/2001712799.png', '2880x1440', '90Hz', '3.5mm, HDMI, USB 3.2 (Gen1, 5Gb/s)\r\n', '4713883398558');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `producten`
--
ALTER TABLE `producten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `producten`
--
ALTER TABLE `producten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
