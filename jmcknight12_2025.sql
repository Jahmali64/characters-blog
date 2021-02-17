-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 11, 2021 at 01:22 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jmcknight12_2025`
--

-- --------------------------------------------------------

--
-- Table structure for table `jmc_characters`
--

CREATE TABLE `jmc_characters` (
  `jmc_fname` varchar(40) NOT NULL,
  `jmc_lname` varchar(40) NOT NULL,
  `jmc_description` text NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jmc_characters`
--

INSERT INTO `jmc_characters` (`jmc_fname`, `jmc_lname`, `jmc_description`, `cid`) VALUES
('Rayleigh', 'Silvers', 'The \"Dark King\" (å†¥çŽ‹, Mei-ÅŒ) Silvers Rayleigh (ã‚·ãƒ«ãƒãƒ¼ã‚ºãƒ»ãƒ¬ã‚¤ãƒªãƒ¼, ShirubÄzu ReirÄ«) is a swordsman who, after serving as first mate of the Roger Pirates, comes to live on the Sabaody Archipelago as a ship coater and gambler. He is a skilled user of Haki, including the rare Color of the Supreme King and, following the war between the Whitebeard Pirates and the World Government, instructs Luffy in its use.', 64),
('Hawkins', 'Basil', 'Basil Hawkins (ãƒã‚¸ãƒ«ãƒ»ãƒ›ãƒ¼ã‚­ãƒ³ã‚¹, Bajiru HÅkinsu), nicknamed \"Magician\" (é­”è¡“å¸« Majutsushi), is the captain of the Hawkins Pirates. He ate the Straw-Straw Fruit, a Paramecia-type Devil Fruit that allows him to create and manipulate straw. He can cover himself in straw and make scarecrow-like straw avatars to aid his offense. He also has a habit of reading tarot cards to find out what is going to happen, and the percentage probability that what he predicts will happen.', 65),
('Bege', 'Capone', 'Capone \"Gang\" Bege (ã‚«ãƒãƒãƒ»â€œã‚®ãƒ£ãƒ³ã‚°â€ãƒ»ãƒ™ãƒƒã‚¸, Kapone \"Gyangu\" Bejji) is a mafia don-turned-pirate. He has the power of the Castle-Castle Fruit, which allows him to create and maintain a dimensional fortress inside his body, being able to put people inside after being reduced when approaching the entrances of his body, or becoming himself into a great castle that serves as a fortress. He is the captain of the Firetank Pirates (ãƒ•ã‚¡ã‚¤ã‚¢ã‚¿ãƒ³ã‚¯æµ·è³Šå›£, Faia Tanku Kaizokudan), among which are the advisor Vito (ãƒ´ã‚£ãƒˆ, Vito) and the combatant Gotti (ã‚´ãƒƒãƒ†ã‚£, Gotti). Bege is married to Big Mom\'s 22nd daughter Charlotte Chiffon (ã‚·ãƒ£ãƒ¼ãƒ­ãƒƒãƒˆãƒ»ã‚·ãƒ•ã‚©ãƒ³ShÄrotto Shifon), and they are both the parents of Capone Pez (ã‚«ãƒãƒãƒ»ãƒšãƒƒãƒ„, Kapone Pettsu).', 66),
('Kid', 'Eustass', 'Eustass \"Captain\" Kid (ãƒ¦ãƒ¼ã‚¹ã‚¿ã‚¹ãƒ»ã‚­ãƒ£ãƒ—ãƒ†ãƒ³ãƒ»ã‚­ãƒƒãƒ‰, YÅ«sutasu \"Kyaputen\" Kiddo) is the captain of the Kid Pirates. Among his crew is his childhood friend Killer. Kid has the ability to attract metal objects with magnetism. During the time skip, he lost his arm after an encounter with Shanks, depending on a metal pieces arm created by his ability. After trying to form an alliance with Scratchmen Apoo and Basil Hawkins, he ended up being betrayed by them and captured by Kaido, having to later ally himself with Luffy and Law in their plan to defeat him.', 67),
('Law', 'D. Water Trafalgar', 'The \"Surgeon of Death\" (æ­»ã®å¤–ç§‘åŒ», Shi no Gekai), Trafalgar D. Water Law (ãƒˆãƒ©ãƒ•ã‚¡ãƒ«ã‚¬ãƒ¼ãƒ»Dãƒ»ãƒ¯ãƒ¼ãƒ†ãƒ«ãƒ»ãƒ­ãƒ¼, TorafarugÄ DÄ« WÄteru RÅ), originates from the North Blue. Having eaten the Op-Op Fruit (ã‚ªãƒšã‚ªãƒšã®å®Ÿ, Ope Ope no Mi), Law can, within a spherical area around himself, cut and teleport objects as well as perform body swaps. He is the captain of the Heart Pirates (ãƒãƒ¼ãƒˆã®æµ·è³Šå›£, HÄto no Kaizokudan), consisting of twenty-one members, including the polar bear mink and crew\'s navigator Bepo (ãƒ™ãƒ, Bepo), Shachi (ã‚·ãƒ£ãƒ, Shachi), Penguin (ãƒšãƒ³ã‚®ãƒ³, Pengin), and the former slave Jean Bart (ã‚¸ãƒ£ãƒ³ãƒãƒ¼ãƒ«, JanbÄru). Originally a member of the Don Quixote Pirates, Law makes a name for himself and, following the Paramount War, joins the Seven Warlords of the Sea. Though he enters into an alliance with Luffy and the Straw Hats to take down Kaido, one of the Four Emperors, Law is actually hunting down Don Quixote Doflamingo.', 68),
('Teach', 'D. Marshall', 'Marshall D. Teach (ãƒžãƒ¼ã‚·ãƒ£ãƒ«ãƒ»Dãƒ»ãƒ†ã‚£ãƒ¼ãƒ, MÄsharu DÄ« TÄ«chi), better known as Blackbeard (é»’ã²ã’, Kurohige), is the captain of the Blackbeard Pirates. As a member of the Whitebeard Pirates, he killed his crewmate Thatch to get hold of the Devil Fruit he has sought for several decades, the Dark-Dark Fruit (ãƒ¤ãƒŸãƒ¤ãƒŸã®å®Ÿ, Yami Yami no Mi). It grants him the ability to create and control black holes, which are represented as flowing darkness, as well as the ability to disable the Devil Fruit powers of others, as long as he is touching the person. For betraying Whitebeard\'s crew and the murder of his crewmate, he is pursued by Ace who eventually confronts him. After defeating Ace and turning him in to the World Government, he is appointed Crocodile\'s replacement as one of the Seven Warlords of the Sea, a position he promptly abuses to expand his crew with prisoners from Impel Down and resigns once he is finished. After killing Whitebeard with the help of his new crew, Blackbeard somehow adds his former captain\'s Devil Fruit ability to his own and manages to take Whitebeard\'s place as one of the Four Emperors.', 69),
('Newgate', 'Edward', 'Edward Newgate (ã‚¨ãƒ‰ãƒ¯ãƒ¼ãƒ‰ãƒ»ãƒ‹ãƒ¥ãƒ¼ã‚²ãƒ¼ãƒˆ, EdowÄdo NyÅ«gÄ“to), better known as Whitebeard (ç™½ã²ã’, Shirohige), is the captain of the Whitebeard Pirates and one of the Four Emperors. He is a very large and burly old man who fights with a naginata as his weapon and uses the ability of the Paramecia-type Tremor-Tremor Fruit (ã‚°ãƒ©ã‚°ãƒ©ã®å®Ÿ, Gura Gura no Mi) to create shock waves powerful enough to cause earthquakes and tsunamis. He is regarded as the world\'s strongest man and the only one to have matched Gol D. Roger in combat. He considers all of his crewmen as his sons and protects them with all his might. Eventually, after being badly wounded while fighting to save Ace from execution, he is killed by the Blackbeard Pirates just before Blackbeard uses an unknown method to steal his Devil Fruit power.', 70),
('Luffy', 'D. Monkey', 'Monkey D. Luffy (ãƒ¢ãƒ³ã‚­ãƒ¼ãƒ»Dãƒ»ãƒ«ãƒ•ã‚£, MonkÄ« DÄ« Rufi) is the primary protagonist of the One Piece series. At age seven, he admires and tries to join the pirates of the \"Red Haired\" Shanks. Ridiculed and rejected, he inadvertently eats their treasure, the Paramecia-type Gum-Gum Fruit (ã‚´ãƒ ã‚´ãƒ ã®å®Ÿ, Gomu Gomu no Mi), which gives his body the properties of rubber. His reckless efforts ultimately lead him into grave peril causing Shanks to lose an arm while rescuing him. After this, Luffy gives up on joining Shanks, resolving instead to start a crew of his own and become King of the Pirates. Displeased by Shanks spoiling his grandson, Garp takes Luffy to be raised by Curly Dadan and her mountain bandits, who he strong-arms into taking him in. During Luffy\'s time there, he becomes a sworn brother with Ace, Garp\'s other ward, and Sabo, alocal runaway noble.', 73),
('Ace', 'D. Portgas', 'Portgas D. Ace (ãƒãƒ¼ãƒˆã‚¬ã‚¹ãƒ»Dãƒ»ã‚¨ãƒ¼ã‚¹, PÅtogasu DÄ« Ä’su), also called \"Fire Fist\" Ace (ç«æ‹³ã®ã‚¨ãƒ¼ã‚¹, Hiken no Ä’su), is the second division commander of the Whitebeard Pirates and Luffy\'s older brother. He is the son of Gol D. Roger and Portgas D. Rouge (ãƒãƒ¼ãƒˆã‚¬ã‚¹ãƒ»Dãƒ»ãƒ«ãƒ¼ã‚¸ãƒ¥, PÅtogasu DÄ« RÅ«ju). Having eaten the Logia-type Flare-Flare Fruit or Flame-Flame Fruit (ãƒ¡ãƒ©ãƒ¡ãƒ©ã®å®Ÿ, Mera Mera no Mi), Ace is capable of manipulating, creating, and transforming into fire. Ace is also capable of using the Color of the Supreme King. Eventually, after being saved from execution, he shields Luffy from Akainu\'s magma attack at the cost of his own life. He is buried on an unnamed island in the New World alongside his captain, Whitebeard.', 74),
('Zoro', 'Roronoa', 'Roronoa Zoro (ãƒ­ãƒ­ãƒŽã‚¢ãƒ»ã‚¾ãƒ­) is a swordsman who uses up to three swords simultaneously, holding one in each hand and a third in his mouth. To fulfill a promise to Kuina, his deceased childhood friend and rival, he aims to defeat \"Hawk Eye\" Mihawk and become the world\'s greatest swordsman. Traveling the seas in search of Mihawk and making a living as a bounty hunter, he becomes infamously known as \"Pirate Hunter\" Zoro (æµ·è³Šç‹©ã‚Šã®ã‚¾ãƒ­, Kaizoku-Gari no Zoro).', 90),
('Robin', 'Nico', 'Being raised in Ohara (ã‚ªãƒãƒ©), home of the world\'s oldest and largest library, Nico Robin (ãƒ‹ã‚³ãƒ»ãƒ­ãƒ“ãƒ³, Niko Robin) becomes an archaeologist at the age of eight. At some point she gains the power of the Paramecia-type Flower-Flower Fruit (ãƒãƒŠãƒãƒŠã®å®Ÿ, Hana Hana no Mi), which allows her to have temporary copies of parts of her body, including her eyes and ears, which spring up on surfaces near her. Behind her teachers\' backs, she acquires from them the outlawed knowledge of how to translate the ancient stones called Poneglyphs (æ­´å²ã®æœ¬æ–‡ãƒãƒ¼ãƒã‚°ãƒªãƒ•, PÅnegurifu, alt. Poneglyphs), which are scattered around the world. She comes to share their goal of finding the elusive Real Ponegliff (çœŸã®æ­´å²ã®æœ¬æ–‡ãƒªã‚ªãƒ»ãƒãƒ¼ãƒã‚°ãƒªãƒ•, Rio PÅnegurifu), which is said to tell the world\'s lost history. However, the World Government finds out about these efforts and sends a battlefleet to stop them. Only Robin escapes the devastating attack that claims the lives of the island\'s entire population, including that of her mother.', 91);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jmc_characters`
--
ALTER TABLE `jmc_characters`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jmc_characters`
--
ALTER TABLE `jmc_characters`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
