-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2017 at 02:56 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hadoop`
--

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `query` varchar(100) NOT NULL,
  `hyperlink` varchar(100) NOT NULL,
  `explain` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`query`, `hyperlink`, `explain`) VALUES
('	The Art of Yui Toshiki', 'http://archive.rhps.org/fritters/yui/index.html', ' \r\nYui\'s galleries of his anime and hentai artwork.'),
(' Edge of the Mind\'s Eye', ' http://ironmouse.dhs.org/MindsEdge/', '\r\nMostly original art, with drawings from Parasite Eve and Darkstalkers. Gift art and links.'),
(' The Black Book ', 'http://www.geocities.com/rtuko/ ', '\r\nA site of RPG, anime, and original literature. Final Fantasy and Pokemon yaoi fiction.'),
('Adult Anime Collection', 'http://animecollection.web1000.com/', ' \r\nFan art from Final Fantasy, Pokémon, Dragon Ball Z, Tenchi, Sailor Moon, Ranma, Evangelion, Slaye'),
('Angels Paradise ', 'http://www.rli-net.net/~abaddon', ' \r\nAnime style fan art, original works, and guest art.'),
('Anime House', 'http://www.animehouse.com/', ' \r\nLarge free collection of hentai pictures. Includes echii by Awatake.'),
('AnimeCrack', ' http://www.terra.es/personal3/animecrack/', ' \r\nA small collection of game and KiSS doll downloads. [AVS - Adult Check]'),
('CG Fun', 'http://www.dreamwater.net/art/cgfun/howdy.htm', '\r\nOriginal CG images of anime girls.'),
('Clay.anime.net', ' http://clay.anime.net/', ' \r\nOnline comics and artwork. Traditional and computer techniques. Guest art, gifts, and collaborati'),
('Cold Lemonade ', ' http://www.angelfire.com/journal/coldlemonade/index.html', ' \r\nWorks sorted by series, also a requested couples list.'),
('Corin Wentworth Productions', ' http://www.angelfire.com/art/cwproductions', ' \r\nOriginal anime and doujinshi, prints for sale as well.'),
('CutePet', ' http://www.cutepet.org/', ' \r\nOriginal art, anime and manga fan art, gifts, and commissioned works.'),
('Ecchi Art', 'http://www.angelfire.com/anime/ecchiart/', ' \r\nGalleries of pin-up fan art, sketches and links.'),
('Ecchi Games', ' http://www.ecchigames.com', ' \r\nOriginal hentai games in production, including some Sailor Moon spoofs. Free web games and games '),
('Elena Enema', ' http://free-adult-hosting.net/elena ', '\r\nAnime styled drawings focusing on bondage, enemas, and other fetishes.'),
('Fanservice, Unlimited ', 'http://members.tripod.com/ballisticsausage/index.html', ' \r\nFiction from Ranma, Tenchi Muyo, Evangelion, Xenogears, and Slayers.'),
('Free Cartoon Sex', 'http://www.freecartoonsex.com', '\r\nLarge free archive of anime fan art, hentai series, English and Japanese manga, and artist\'s image'),
('GamelexGS.Com ', ' http://www.gamelexgs.com/', ' \r\nThe official weekly web magazine for adult Bishojo Games, also known as Beautiful Girls Games.'),
('Get-doujinshi.com', 'http://www.get-doujinshi.com', ' \r\nJapanese hentai fan manga for sale. Cover images, page count, price, and contact information.'),
('Happy Otaku Site', ' http://www.interq.or.jp/tokyo/antique/manga.html', ' \r\nDirty Pair, Gundam, Final Fantasy, Nadesico, Kenshin, Ranma, Sailor Moon, and other doujinshi tit'),
('Hentai Doujinshi ', 'http://www.bdr517.com/animegoods/hentaidoujinshi/hentaidoujinshi.html ', '\r\nAh My Goddess, Tenchi, Bubblegum Crisis, Dragonball, Evangelion, Gundam, Rayearth and other series'),
('Hentai Game', ' http://www.hentaigame.com/', ' \r\nDirect from Tokyo, the newest and hottest games on the market. [Membership]'),
('Hentaikogal CG Fun', ' http://free-adult-hosting.net/hentaikogal/hentai.htm', '\r\n \r\nOriginal CG art, manga, and links.'),
('Himeya Soft, Inc.', 'http://www.himeya.com/', ' \r\nJapanese PC games and English translated games including anime, simulation, action, real time net'),
('Home - Where the Heart is ', 'http://www.vidrio-negro.net/home/', ' \r\nArchive of Gundam Wing, Yu Yu Hakusho, Fushigi Yuugi and Gasaraki shonen ai/yaoi fan fiction. Als'),
('Ironmouse\'s Character Shrines ', 'http://ironmouse.dhs.org/dragon/index3.html', ' \r\nCharacter shrines with large image galleries and links'),
('Jason Meador Artwork', 'http://www.io.com/~cwagner/jason/', ' \r\nColor and black and white works from Sailor Moon, Ranma, Ah My Goddess, and Tenchi'),
('Jast USA ', 'http://www.jastusa.com/', ' \r\nThe premier maker and full-service distributor of adult anime and hentai games, collections of er'),
('Juan\'s Hentai Workshop', 'http://xjuan.majorhost.com/', ' \r\nAnime and hentai images by the Japanese artist. Includes private teacher series and anime/game ch'),
('Kasey Sanada\'s Fanfiction Archive ', 'http://www.geocities.com/kaseychan17/index.html', ' \r\nFiction from Gundam Wing, Digimon, Ranma, and crossovers. Submissions accepted.'),
('Lady Saiyajin Sekai ', 'http://www.shinyuu.com/sekai', ' \r\nThis site does have a section with ehntai fanfiction.'),
('Mad Brains Hentai', 'http://www2.117.ne.jp/~mb1996ax/enadc.html', ' \r\nKureichi Matsudo\'s anime, hentai, echii and doujin images, as well as some Sailor Moon parodies. '),
('Milky House ', ' http://www.milkyhouse.com/', ' \r\nHigh-quality hentai games, with faithful English translations, no mosaic censorship, and great gr'),
('Nami Hentai', 'http://www.redlighthost.com/fetish/hentaibee/index.html', ' \r\nOriginal art, sketches, CG, and Sailor Moon drawings focusing on large breasts, animated .gifs an'),
('Nanami\'s Den', 'http://ramz.netherweb.com/', ' \r\nEcchi and hentai art work and gifts. CG, sketches. Message board, information, and links.'),
('Norman\'s Hentai Fan Art', 'http://www1.tip.nl/users/t479478/index.htm', ' \r\nOriginal fan art, requests, and drawings from various anime. Links and webring.'),
('Peach Princess -- hentai and bishojo games ', ' http://www.peachprincess.com', ' \r\nPeach Princess - bringing Japan\'s rare and excellent bishoujo and hentai games out in English.'),
('Pornographite', 'http://www.internetdump.com/users/pornographite/index1.html', ' \r\nOriginal hentai art, accepts commissions and requests.'),
('RVincent\'s Fanfiction ', 'http://meltingpot.fortunecity.com/brodie/735/fanfic.html', ' \r\nArchive of Ranma, Slayers, and Pokémon fiction.'),
('Sakura Lemon Archive', ' http://anime.muck.com/~sakura/', ' \r\nFan fiction sorted by title, series, alphabetical, or date. Submissions accepted.'),
('Saninji Temple', ' http://saninji.homestead.com', ' \r\nOriginal erotic anime styled drawings. Also features fantasy artwork and traditional Japanese ink'),
('Shokushu High School', ' http://www.shokushu.com/', ' \r\nAn erotic interactive story using art, photographic manipulations and words to create a place for'),
('Streetlife\'s Hentai Anime Picture Gallery', ' http://hentai.asian-space.com/streetlife/Main.html', ' \r\nCollection of fan submitted images from series including El Hazard, Evangelion, Tenchi and Gundam'),
('Tareme Paradise', 'http://www.taremeparadise.com/', ' \r\nIntroduction, large galleries of original and fan works sorted by artist, and links.'),
('UltraVixen', ' http://www.ultravixen.com/', ' \r\nOfficial website of a super-hot sci-fi sex star whose powerful super climaxes can warp both time '),
('Wallpaper Flowers ', 'http://home.att.net/~wpflowers/', ' \r\nFeatures original artwork in the style of Japanese anime or manga. Also offers links to favorite ');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `age` int(11) NOT NULL,
  `nationality` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`firstname`, `lastname`, `age`, `nationality`, `gender`, `email`, `mobile`, `password`) VALUES
('anu', 'jain', 45, 'ind', 'Male', 'abc1@gmail.com', '7867867', 'anug'),
('anu', 'jain', 45, 'chinese', 'Female', 'abc4@gmail.com', '7867867', 'anug'),
('keshav', 'gupta', 45, 'Indian', 'Female', 'abc@gmail.com', '7867867', 'hellog'),
('anu', 'jain', 45, 'Indian', 'Female', 'anu@gmail.com', '78678679', 'hello'),
('anu', 'jain', 45, 'Indian', 'Male', 'jatinderjolly5676@hadoop.com', '7867867', 'anug'),
('anu', 'jain', 45, 'Indian', 'Male', 'jatinderjolly@hadoop.com', '7867867', 'anug'),
('Keshav', 'd', 14, 'pak', 'Male', 'pak@gmail.xom', '44444', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`query`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
