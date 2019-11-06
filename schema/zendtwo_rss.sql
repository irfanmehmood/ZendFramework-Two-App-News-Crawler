-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 18, 2013 at 12:12 AM
-- Server version: 5.5.31
-- PHP Version: 5.4.17RC1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zendtwo_rss`
--

-- --------------------------------------------------------

--
-- Table structure for table `rss`
--

CREATE TABLE IF NOT EXISTS `rss` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=154 ;

--
-- Dumping data for table `rss`
--

INSERT INTO `rss` (`id`, `name`, `title`, `url`) VALUES
(4, 'David Bowie', 'The Next Day (Deluxe Version)', ''),
(5, 'Bastille', 'Bad Blood', ''),
(6, 'Bruno Mars', 'Unorthodox Jukebox', ''),
(7, 'Emeli Sandé', 'Our Version of Events (Special Edition)', ''),
(8, 'Bon Jovi', 'What About Now (Deluxe Version)', ''),
(9, 'Justin Timberlake', 'The 20/20 Experience (Deluxe Version)', ''),
(10, 'Bastille', 'Bad Blood (The Extended Cut)', ''),
(11, 'P!nk', 'The Truth About Love', ''),
(12, 'Sound City - Real to Reel', 'Sound City - Real to Reel', ''),
(13, 'Jake Bugg', 'Jake Bugg', ''),
(14, 'Various Artists', 'The Trevor Nelson Collection', ''),
(15, 'David Bowie', 'The Next Day', ''),
(16, 'Mumford & Sons', 'Babel', ''),
(17, 'The Lumineers', 'The Lumineers', ''),
(18, 'Various Artists', 'Get Ur Freak On - R&B Anthems', ''),
(19, 'The 1975', 'Music For Cars EP', ''),
(20, 'Various Artists', 'Saturday Night Club Classics - Ministry of Sound', ''),
(21, 'Hurts', 'Exile (Deluxe)', ''),
(22, 'Various Artists', 'Mixmag - The Greatest Dance Tracks of All Time', ''),
(23, 'Ben Howard', 'Every Kingdom', ''),
(24, 'Stereophonics', 'Graffiti On the Train', ''),
(25, 'The Script', '#3', ''),
(26, 'Stornoway', 'Tales from Terra Firma', ''),
(27, 'David Bowie', 'Hunky Dory (Remastered)', ''),
(28, 'Worship Central', 'Let It Be Known (Live)', ''),
(29, 'Ellie Goulding', 'Halcyon', ''),
(30, 'Various Artists', 'Dermot O''Leary Presents the Saturday Sessions 2013', ''),
(31, 'Stereophonics', 'Graffiti On the Train (Deluxe Version)', ''),
(32, 'Dido', 'Girl Who Got Away (Deluxe)', ''),
(33, 'Hurts', 'Exile', ''),
(34, 'Bruno Mars', 'Doo-Wops & Hooligans', ''),
(35, 'Calvin Harris', '18 Months', ''),
(36, 'Olly Murs', 'Right Place Right Time', ''),
(37, 'Alt-J (?)', 'An Awesome Wave', ''),
(38, 'One Direction', 'Take Me Home', ''),
(39, 'Various Artists', 'Pop Stars', ''),
(40, 'Various Artists', 'Now That''s What I Call Music! 83', ''),
(41, 'John Grant', 'Pale Green Ghosts', ''),
(42, 'Paloma Faith', 'Fall to Grace', ''),
(43, 'Laura Mvula', 'Sing To the Moon (Deluxe)', ''),
(44, 'Duke Dumont', 'Need U (100%) [feat. A*M*E] - EP', ''),
(45, 'Watsky', 'Cardboard Castles', ''),
(46, 'Blondie', 'Blondie: Greatest Hits', ''),
(47, 'Foals', 'Holy Fire', ''),
(48, 'Maroon 5', 'Overexposed', ''),
(49, 'Bastille', 'Pompeii (Remixes) - EP', ''),
(50, 'Imagine Dragons', 'Hear Me - EP', ''),
(51, 'Various Artists', '100 Hits: 80s Classics', ''),
(52, 'Various Artists', 'Les Misérables (Highlights From the Motion Picture Soundtrack)', ''),
(53, 'Mumford & Sons', 'Sigh No More', ''),
(54, 'Frank Ocean', 'Channel ORANGE', ''),
(55, 'Bon Jovi', 'What About Now', ''),
(56, 'Various Artists', 'BRIT Awards 2013', ''),
(57, 'Taylor Swift', 'Red', ''),
(58, 'Fleetwood Mac', 'Fleetwood Mac: Greatest Hits', ''),
(59, 'David Guetta', 'Nothing But the Beat Ultimate', ''),
(60, 'Various Artists', 'Clubbers Guide 2013 (Mixed By Danny Howard) - Ministry of Sound', ''),
(61, 'David Bowie', 'Best of Bowie', ''),
(62, 'Laura Mvula', 'Sing To the Moon', ''),
(63, 'ADELE', '21', ''),
(64, 'Of Monsters and Men', 'My Head Is an Animal', ''),
(65, 'Rihanna', 'Unapologetic', ''),
(66, 'Various Artists', 'BBC Radio 1''s Live Lounge - 2012', ''),
(67, 'Avicii & Nicky Romero', 'I Could Be the One (Avicii vs. Nicky Romero)', ''),
(68, 'The Streets', 'A Grand Don''t Come for Free', ''),
(69, 'Tim McGraw', 'Two Lanes of Freedom', ''),
(70, 'Foo Fighters', 'Foo Fighters: Greatest Hits', ''),
(71, 'Various Artists', 'Now That''s What I Call Running!', ''),
(72, 'Swedish House Mafia', 'Until Now', ''),
(73, 'The xx', 'Coexist', ''),
(74, 'Five', 'Five: Greatest Hits', ''),
(75, 'Jimi Hendrix', 'People, Hell & Angels', ''),
(76, 'Biffy Clyro', 'Opposites (Deluxe)', ''),
(77, 'The Smiths', 'The Sound of the Smiths', ''),
(78, 'The Saturdays', 'What About Us - EP', ''),
(79, 'Fleetwood Mac', 'Rumours', ''),
(80, 'Various Artists', 'The Big Reunion', ''),
(81, 'Various Artists', 'Anthems 90s - Ministry of Sound', ''),
(82, 'The Vaccines', 'Come of Age', ''),
(83, 'Nicole Scherzinger', 'Boomerang (Remixes) - EP', ''),
(84, 'Bob Marley', 'Legend (Bonus Track Version)', ''),
(85, 'Josh Groban', 'All That Echoes', ''),
(86, 'Blue', 'Best of Blue', ''),
(87, 'Ed Sheeran', '+', ''),
(88, 'Olly Murs', 'In Case You Didn''t Know (Deluxe Edition)', ''),
(89, 'Macklemore & Ryan Lewis', 'The Heist (Deluxe Edition)', ''),
(90, 'Various Artists', 'Defected Presents Most Rated Miami 2013', ''),
(91, 'Gorgon City', 'Real EP', ''),
(92, 'Mumford & Sons', 'Babel (Deluxe Version)', ''),
(93, 'Various Artists', 'The Music of Nashville: Season 1, Vol. 1 (Original Soundtrack)', ''),
(94, 'Various Artists', 'The Twilight Saga: Breaking Dawn, Pt. 2 (Original Motion Picture Soundtrack)', ''),
(95, 'Various Artists', 'Mum - The Ultimate Mothers Day Collection', ''),
(96, 'One Direction', 'Up All Night', ''),
(97, 'Bon Jovi', 'Bon Jovi Greatest Hits', ''),
(98, 'Agnetha Fältskog', 'A', ''),
(99, 'Fun.', 'Some Nights', ''),
(100, 'Justin Bieber', 'Believe Acoustic', ''),
(101, 'Atoms for Peace', 'Amok', ''),
(102, 'Justin Timberlake', 'Justified', ''),
(103, 'Passenger', 'All the Little Lights', ''),
(104, 'Kodaline', 'The High Hopes EP', ''),
(105, 'Lana Del Rey', 'Born to Die', ''),
(106, 'JAY Z & Kanye West', 'Watch the Throne (Deluxe Version)', ''),
(107, 'Biffy Clyro', 'Opposites', ''),
(108, 'Various Artists', 'Return of the 90s', ''),
(109, 'Gabrielle Aplin', 'Please Don''t Say You Love Me - EP', ''),
(110, 'Various Artists', '100 Hits - Driving Rock', ''),
(111, 'Jimi Hendrix', 'Experience Hendrix - The Best of Jimi Hendrix', ''),
(112, 'Various Artists', 'The Workout Mix 2013', ''),
(113, 'The 1975', 'Sex', ''),
(114, 'Chase & Status', 'No More Idols', ''),
(115, 'Rihanna', 'Unapologetic (Deluxe Version)', ''),
(116, 'The Killers', 'Battle Born', ''),
(117, 'Olly Murs', 'Right Place Right Time (Deluxe Edition)', ''),
(118, 'A$AP Rocky', 'LONG.LIVE.A$AP (Deluxe Version)', ''),
(119, 'Various Artists', 'Cooking Songs', ''),
(120, 'Haim', 'Forever - EP', ''),
(121, 'Lianne La Havas', 'Is Your Love Big Enough?', ''),
(122, 'Michael Bublé', 'To Be Loved', ''),
(123, 'Daughter', 'If You Leave', ''),
(124, 'The xx', 'xx', ''),
(125, 'Eminem', 'Curtain Call', ''),
(126, 'Kendrick Lamar', 'good kid, m.A.A.d city (Deluxe)', ''),
(127, 'Disclosure', 'The Face - EP', ''),
(128, 'Palma Violets', '180', ''),
(129, 'Cody Simpson', 'Paradise', ''),
(130, 'Ed Sheeran', '+ (Deluxe Version)', ''),
(131, 'Michael Bublé', 'Crazy Love (Hollywood Edition)', ''),
(132, 'Bon Jovi', 'Bon Jovi Greatest Hits - The Ultimate Collection', ''),
(133, 'Rita Ora', 'Ora', ''),
(134, 'g33k', 'Spabby', ''),
(135, 'Various Artists', 'Annie Mac Presents 2012', ''),
(136, 'David Bowie', 'The Platinum Collection', ''),
(137, 'Bridgit Mendler', 'Ready or Not (Remixes) - EP', ''),
(138, 'Dido', 'Girl Who Got Away', ''),
(139, 'Various Artists', 'Now That''s What I Call Disney', ''),
(140, 'The 1975', 'Facedown - EP', ''),
(141, 'Kodaline', 'The Kodaline - EP', ''),
(142, 'Various Artists', '100 Hits: Super 70s', ''),
(143, 'Fred V & Grafix', 'Goggles - EP', ''),
(144, 'Biffy Clyro', 'Only Revolutions (Deluxe Version)', ''),
(145, 'Train', 'California 37', ''),
(146, 'Ben Howard', 'Every Kingdom (Deluxe Edition)', ''),
(147, 'Various Artists', 'Motown Anthems', ''),
(148, 'Courteeners', 'ANNA', ''),
(149, 'Johnny Marr', 'The Messenger', ''),
(150, 'Rodriguez', 'Searching for Sugar Man', ''),
(151, 'Jessie Ware', 'Devotion', ''),
(152, 'Bruno Mars', 'Unorthodox Jukebox', ''),
(153, 'Various Artists', 'Call the Midwife (Music From the TV Series)', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
