-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 22, 2022 at 03:45 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chillflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `genre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(800) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `year` year NOT NULL,
  `picture` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `genre`, `description`, `year`, `picture`) VALUES
(1, 'Demon Slayer: Mugen Train', 'Anime', 'Tanjiro and Nezuko, along with Zenitsu and Inosuke, join one of the most powerful swordsmen within the Demon Slayer Corps, Flame Hashira Kyojuro Rengoku, to face the demon aboard the Mugen Train on track to despair..', 2020, 'img2/demonslayermugentrain.jpg'),
(2, 'Spider-Man: No Way Home', 'Action', 'When a spell goes wrong, dangerous foes from other worlds start to appear, forcing Peter to discover what it truly means to be Spider-Man. Peter Parker\'s secret identity is revealed to the entire world. Desperate for help, Peter turns to Doctor Strange to make the world forget that he is Spider-Man.', 2021, ''),
(3, 'Her', 'Romance', 'In a near future, a lonely writer develops an unlikely relationship with an operating system designed to meet his every need. Theodore is a lonely man in the final stages of his divorce. When he\'s not working as a letter writer, his down time is spent playing video games and occasionally hanging out with friends.', 2013, ''),
(4, 'Star Wars: The Rise of Skywalker', 'Action', 'The Rise of Skywalker follows Rey, Finn, and Poe Dameron as they lead the Resistance\'s final stand against Supreme Leader Kylo Ren and the First Order, who are aided by the return of the deceased Galactic Emperor, Palpatine.', 2019, ''),
(5, 'The Avengers', 'Action', 'Earth\'s mightiest heroes must come together and learn to fight as a team if they are going to stop the mischievous Loki and his alien army from enslaving humanity.', 2012, ''),
(6, 'Avengers: Infinity War', 'Action', 'The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe.', 2018, ''),
(7, 'Oblivion', 'SF', 'A veteran assigned to extract Earth\'s remaining resources begins to question what he knows about his mission and himself.', 2013, ''),
(8, 'Due Date', 'Comedy', 'High-strung father-to-be Peter Highman is forced to hitch a ride with aspiring actor Ethan Tremblay on a road trip in order to make it to his child\'s birth on time.', 2010, ''),
(9, 'Don\'t Look Up', 'Drama', 'Two low-level astronomers must go on a giant media tour to warn mankind of an approaching comet that will destroy planet Earth.', 2021, ''),
(10, 'The Matrix Resurrections', 'SF', 'Return to a world of two realities: one, everyday life; the other, what lies behind it. To find out if his reality is a construct, to truly know himself, Mr. Anderson will have to choose to follow the white rabbit once more.', 2021, ''),
(11, 'Encanto', 'Animation', 'A young Colombian girl has to face the frustration of being the only member of her family without magical powers.', 2021, ''),
(12, 'The King\'s Man', 'Adventure', 'In the early years of the 20th century, the Kingsman agency is formed to stand against a cabal plotting a war to wipe out millions.', 2021, ''),
(13, 'Licorice Pizza', 'Comedy', 'The story of Alana Kane and Gary Valentine growing up, running around and going through the treacherous navigation of first love in the San Fernando Valley, 1973.', 2021, ''),
(14, 'Dune', 'Drama', 'Feature adaptation of Frank Herbert\'s science fiction novel about the son of a noble family entrusted with the protection of the most valuable asset and most vital element in the galaxy.', 2021, ''),
(15, 'Kick-Ass 2', 'Comedy', 'Following Kick-Ass\' heroics, other citizens are inspired to become masked crusaders. But Red Mist leads his own group of evil supervillains to get revenge, kill Kick-Ass and destroy everything he stands for.', 2013, ''),
(16, 'Eternals', 'Fantasy', 'The saga of the Eternals, a race of immortal beings who lived on Earth and shaped its history and civilizations.', 2021, ''),
(17, 'Toy Story 3', 'Animation', 'The toys are mistakenly delivered to a day-care center instead of the attic right before Andy leaves for college, and it\'s up to Woody to convince the other toys that they weren\'t abandoned and to return home.', 2010, ''),
(18, 'How to Train Your Dragon', 'Animation', 'A hapless young Viking who aspires to hunt dragons becomes the unlikely friend of a young dragon himself, and learns there may be more to the creatures than he assumed.', 2010, ''),
(19, 'Avatar', 'Fantasy', 'A paraplegic Marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home.', 2009, ''),
(20, 'Spider-man: Homecoming', 'Action', 'Peter Parker balances his life as an ordinary high school student in Queens with his superhero alter-ego Spider-Man, and finds himself on the trail of a new menace prowling the skies of New York City.', 2017, ''),
(21, 'Thor: Ragnarok', 'Action', 'Imprisoned on the planet Sakaar, Thor must race against time to return to Asgard and stop Ragnarök, the destruction of his world, at the hands of the powerful and ruthless villain Hela.', 2017, ''),
(22, 'Split', 'Horror', 'Three girls are kidnapped by a man with a diagnosed 23 distinct personalities. They must try to escape before the apparent emergence of a frightful new 24th.', 2016, ''),
(23, 'Get Out', 'Horror', 'A young African-American visits his white girlfriend\'s parents for the weekend, where his simmering uneasiness about their reception of him eventually reaches a boiling point.', 2017, ''),
(24, 'Alien: Covenant', 'Horror', 'The crew of a colony ship, bound for a remote planet, discover an uncharted paradise with a threat beyond their imagination, and must attempt a harrowing escape.', 2017, ''),
(25, 'Anabelle: Creation', 'Horror', 'Twelve years after the tragic death of their little girl, a doll-maker and his wife welcome a nun and several girls from a shuttered orphanage into their home, where they become the target of the doll-maker\'s possessed creation, Annabelle.', 2017, ''),
(26, 'It', 'Horror', 'In the summer of 1989, a group of bullied kids band together to destroy a shape-shifting monster, which disguises itself as a clown and preys on the children of Derry, their small Maine town.', 2017, ''),
(27, 'Cult of Chucky', 'Horror', 'Chucky returns to terrorize his human victim, Nica. Meanwhile, the killer doll has some scores to settle with his old enemies, with the help of his former wife.', 2017, ''),
(28, 'Dark', 'SF', 'A family saga with a supernatural twist, set in a German town, where the disappearance of two young children exposes the relationships among four families.', 2017, ''),
(33, 'Iisus din Nazareth', 'horror', 'maica', 2001, 'img/no');

-- --------------------------------------------------------

--
-- Table structure for table `serials`
--

DROP TABLE IF EXISTS `serials`;
CREATE TABLE IF NOT EXISTS `serials` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `genre` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(800) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `year` year NOT NULL,
  `picture` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `serials`
--

INSERT INTO `serials` (`id`, `title`, `genre`, `description`, `year`, `picture`) VALUES
(1, 'Dark', 'SF', 'A family saga with a supernatural twist, set in a German town, where the disappearance of two young children exposes the relationships among four families.', 2017, ''),
(2, 'Game of Thrones', 'Adventure', 'Nine noble families fight for control over the lands of Westeros, while an ancient enemy returns after being dormant for millennia.', 2011, ''),
(3, 'Mr. Robot', 'Thriller', 'Elliot, a brilliant but highly unstable young cyber-security engineer and vigilante hacker, becomes a key figure in a complex game of global dominance when he and his shadowy allies try to take down the corrupt corporation he works for.', 2015, ''),
(4, 'Breaking Bad', 'Thriller', 'A high school chemistry teacher diagnosed with inoperable lung cancer turns to manufacturing and selling methamphetamine in order to secure his family\'s future.', 2008, ''),
(5, 'Stranger Things', 'Horror', 'When a young boy disappears, his mother, a police chief and his friends must confront terrifying supernatural forces in order to get him back.', 2016, ''),
(6, 'Demon Slayer: Kimetsu No Yaiba', 'Animation', 'A family is attacked by demons and only two members survive - Tanjiro and his sister Nezuko, who is turning into a demon slowly. Tanjiro sets out to become a demon slayer to avenge his family and cure his sister.', 2019, ''),
(7, 'The Witcher', 'Adventure', 'Geralt of Rivia, a solitary monster hunter, struggles to find his place in a world where people often prove more wicked than beasts.', 2019, ''),
(8, 'Harley Quinn', 'Animation', 'The series focuses on a single Harley Quinn, who sets off to make it on her own in Gotham City.', 2019, ''),
(9, 'Arcane', 'Animation', 'Set in utopian Piltover and the oppressed underground of Zaun, the story follows the origins of two iconic League champions-and the power that will tear them apart.', 2021, ''),
(10, 'Loki', 'Action', 'The mercurial villain Loki resumes his role as the God of Mischief in a new series that takes place after the events of “Avengers: Endgame.”', 2021, ''),
(11, 'What If...?', 'Animation', 'Exploring pivotal moments from the Marvel Cinematic Universe and turning them on their head, leading the audience into uncharted territory.', 2021, ''),
(12, 'Vikings', 'Adventure', 'Vikings transports us to the brutal and mysterious world of Ragnar Lothbrok, a Viking warrior and farmer who yearns to explore - and raid - the distant shores across the ocean.', 2013, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rol` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `rol`, `user`, `email`, `password`) VALUES
(1, 'admin', 'user1', 'user1@mail.com', '12345'),
(2, 'utilizator', 'user2', 'user2@mail.com', '54321'),
(3, 'utilizator', 'user3', 'user3@mail.com', '5445'),
(4, 'admin', 'user4', 'user4@mail.com', '22445'),
(6, 'utilizator', 'user5', 'abracadabra@gmail.com', 'weeeee'),
(8, 'admin', 'rakamaka', 'mamba@gmail.com', 'dmc54411');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
