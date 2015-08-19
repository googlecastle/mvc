-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2015 at 05:07 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin', 'admin'),
(3, 'admin', 'admin'),
(4, 'admin', 'admin'),
(5, 'admin', 'admin'),
(6, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
`aid` int(11) NOT NULL,
  `aname` varchar(50) NOT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`aid`, `aname`, `bio`) VALUES
(1, 'Marc Delisle', 'Marc Delisle is a member of the MySQL\nDevelopers Guide'),
(2, 'Dave Smith', ''),
(7, 'Christian Darlie', ''),
(8, 'Wallace Jackson', ''),
(10, 'Jeff Frickson', ''),
(11, 'Java java', ''),
(12, 'john luna', ''),
(13, 'John Doe', ''),
(14, 'john doe', ''),
(15, 'sdf', ''),
(16, '33335', ''),
(17, 'John lenon', ''),
(18, '4', ''),
(19, '6', '');

-- --------------------------------------------------------

--
-- Table structure for table `booklist`
--

CREATE TABLE IF NOT EXISTS `booklist` (
`listid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `blsid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
`bid` int(11) NOT NULL,
  `author` int(11) NOT NULL,
  `cid` varchar(255) NOT NULL,
  `title` varchar(150) NOT NULL,
  `isbn` varchar(30) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `edition` int(4) NOT NULL,
  `summary` text NOT NULL,
  `available` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `author`, `cid`, `title`, `isbn`, `publisher`, `edition`, `summary`, `available`) VALUES
(1, 11, '000', 'Database Mysql', 'sdaf', 'sdf', 2015, 'sdfsd', 2),
(2, 12, '000', 'Professional JavaScript for Web Developers, 3rd Edition', 'sdf', 'sdf', 2015, 'sdf', 100),
(3, 17, '000', 'java Da ', '34342', '2', 4, 'note te', 60),
(4, 18, '000', '2', '343424', '4', 4, 'sdfsd', 404),
(5, 19, '000', '6', '6', '6', 6, 'dfsdf', 6);

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE IF NOT EXISTS `borrow` (
`brid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `datereturn` datetime DEFAULT NULL,
  `flag` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`cid` int(11) NOT NULL,
  `c_dewey` varchar(255) NOT NULL,
  `c_category` varchar(255) NOT NULL,
  `cname` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=302 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `c_dewey`, `c_category`, `cname`) VALUES
(1, '000', '000', ' Computer science, knowledge & systems'),
(2, '000', '001', 'Knowledge'),
(3, '000', '002', 'The Book'),
(4, '000', '003', 'System'),
(5, '000', '004', 'Data processing Computer Science'),
(6, '000', '005', 'Computer programming, Programs, data'),
(7, '000', '006', 'Special computer methods '),
(8, '000', '007', 'Not assigned or no longer used '),
(9, '000', '008', 'Not assigned or no longer used '),
(10, '000', '009', 'Not assigned or no longer used '),
(11, '000', '010', 'Bibliography'),
(12, '000', '011', 'Bibliographies'),
(13, '000', '012', 'Bibliographies of individuals'),
(14, '000', '013', 'Bibliographies of works by specific classes of authors '),
(15, '000', '014', 'Bibliographies of anonymous and pseudonymous works '),
(16, '000', '015', 'Bibliographies of works from specific places '),
(17, '000', '016', 'Bibliographies of works from specific subjects'),
(18, '000', '017', 'General subject catalogs '),
(19, '000', '018', 'Catalogs arranged by author & date '),
(20, '000', '019', 'Dictionary catalogs'),
(21, '000', '020', 'Library & information sciences '),
(22, '000', '021', 'Library relationships'),
(23, '000', '022', 'Administration of the physical plant '),
(24, '000', '023', 'Personnel administration '),
(25, '000', '024', 'Not assigned or no longer used '),
(26, '000', '025', 'Library operations '),
(27, '000', '026', 'Libraries for specific subjects '),
(28, '000', '027', 'General libraries '),
(29, '000', '028', 'Reading, use of other information media '),
(30, '000', '029', 'Not assigned or no longer used '),
(31, '000', '030', 'General encyclopedic works '),
(32, '000', '031', 'General encyclopedic works -- American '),
(33, '000', '032', 'General encyclopedic works in English '),
(34, '000', '033', 'General encyclopedic works in other Germanic languages '),
(35, '000', '034', 'General encyclopedic works in French, Provencal, Catalan '),
(36, '000', '035', 'General encyclopedic works in Italian, Romanian, Rhaeto-Romanic '),
(37, '000', '036', 'General encyclopedic works in Spanish & Portuguese '),
(38, '000', '037', 'General encyclopedic works in Slavic languages '),
(39, '000', '038', 'General encyclopedic works in Scandinavian languages '),
(40, '000', '039', 'General encyclopedic works in other languages '),
(41, '000', '040', 'Not assigned or no longer used '),
(42, '000', '041', 'Not assigned or no longer used '),
(43, '000', '042', 'Not assigned or no longer used '),
(44, '000', '043', 'Not assigned or no longer used '),
(45, '000', '044', 'Not assigned or no longer used '),
(46, '000', '045', 'Not assigned or no longer used '),
(47, '000', '046', 'Not assigned or no longer used '),
(48, '000', '047', 'Not assigned or no longer used '),
(49, '000', '048', 'Not assigned or no longer used '),
(50, '000', '049', 'Not assigned or no longer used '),
(51, '000', '050', 'General serials & their indexes'),
(52, '000', '051', 'General serials & their indexes American '),
(53, '000', '052', 'General serials & their indexes In English'),
(54, '100', '100', 'Philosophy & psychology '),
(55, '100', '101', 'Theory of philosophy '),
(56, '100', '102', 'Miscellany of philosophy '),
(57, '100', '103', 'Dictionaries of philosophy '),
(58, '100', '104', 'Not assigned or no longer used '),
(59, '100', '105', 'Serial publications of philosophy '),
(60, '100', '106', 'Organizations of philosophy '),
(61, '100', '107', 'Education, research in philosophy '),
(62, '200', '200', 'Religion'),
(63, '200', '201', 'Philosophy of Christianity '),
(64, '200', '202', 'Miscellany of Christianity '),
(65, '200', '203', 'Dictionaries of Christianity '),
(66, '200', '204', 'Special topics '),
(67, '200', '205', 'Serial publications of Christianity '),
(68, '300', '300', 'Social sciences '),
(69, '300', '301', 'Sociology & anthropology'),
(70, '300', '302', 'Social interaction'),
(71, '300', '303', 'Social processes '),
(72, '300', '304', 'Factors affecting social behavior '),
(73, '300', '305', 'Social groups '),
(74, '300', '306', 'Culture & institutions '),
(75, '100', '108', 'Kinds of persons in philosophy '),
(76, '100', '109', 'Historical treatment of philosophy '),
(77, '100', '110', 'Metaphysics '),
(78, '200', '206', 'Organizations of Christianity'),
(79, '200', '207', 'Education, research in Christianity'),
(80, '200', '208', 'Kinds of persons in Christianity '),
(81, '200', '209', 'History & geography of Christianity'),
(82, '200', '210', 'Natural theology'),
(83, '300', '307', 'Communities'),
(84, '300', '308', 'Not assigned or no longer used'),
(85, '300', '309', 'Not assigned or no longer used'),
(86, '300', '310', 'General statistics'),
(87, '400', '400', 'Language'),
(88, '400', '401', 'Philosophy & theory '),
(89, '400', '402', 'Miscellany'),
(90, '400', '403', 'Dictionaries & encyclopedias '),
(91, '400', '404', 'Special topics'),
(92, '400', '405', 'Serial publications '),
(93, '400', '406', 'Organizations & management'),
(94, '400', '407', 'Education, research, related topics '),
(95, '400', '408', 'With respect to kinds of persons '),
(96, '400', '409', 'Geographical & persons treatment '),
(97, '400', '410', 'Linguistics'),
(98, '500', '500', 'Natural sciences & mathematics '),
(99, '500', '501', 'Philosophy & theory'),
(100, '500', '502', 'Miscellany'),
(101, '500', '503', 'Dictionaries & encyclopedias '),
(102, '500', '504', 'Not assigned or no longer used'),
(103, '500', '505', 'Serial publications '),
(104, '500', '506', 'Organizations & management '),
(105, '500', '507', 'Education, research, related topics'),
(106, '500', '508', 'Natural history'),
(107, '500', '509', 'Historical, areas, persons treatment '),
(108, '500', '510', 'Mathematics'),
(109, '600', '600', 'Technology (Applied sciences) '),
(110, '600', '601', 'Philosophy & theory '),
(111, '600', '602', 'Miscellany'),
(112, '600', '603', 'Dictionaries & encyclopedias '),
(113, '600', '604', 'Special topics '),
(114, '600', '605', 'Serial publications '),
(115, '600', '606', 'Organizations'),
(116, '600', '607', 'Education, research, related topics '),
(117, '600', '608', 'Invention & patents'),
(118, '600', '609', 'Historical, areas, persons treatment '),
(119, '600', '610', 'Medical sciences Medicine '),
(120, '700', '700', 'The arts '),
(121, '700', '701', 'Philosophy & theory '),
(122, '700', '702', 'Miscellany'),
(123, '700', '703', 'Dictionaries & encyclopedias '),
(124, '700', '704', 'Special topics '),
(125, '700', '705', 'Serial publications '),
(126, '700', '706', 'Organizations & management '),
(127, '700', '707', 'Education, research, related topics '),
(128, '700', '708', 'Galleries, museums, private collections'),
(129, '700', '709', 'Historical, areas, persons treatment '),
(130, '700', '710', 'Civic & landscape art'),
(131, '000', '053', 'General serials & their indexes In other Germanic languages '),
(132, '000', '054', ' General serials & their indexes In French, Provencal, Catalan '),
(133, '000', '055', 'General serials & their indexes In Italian, Romanian, Rhaeto-Romanic '),
(134, '000', '056', 'General serials & their indexes In Spanish & Portuguese '),
(135, '000', '057', 'General serials & their indexes In Slavic languages'),
(136, '000', '058', 'General serials & their indexes In Scandinavian languages'),
(137, '000', '059', 'General serials & their indexes In other languages'),
(138, '000', '060', 'General organization & museology '),
(139, '000', '061', 'General organization & museology In North America '),
(140, '000', '062', 'General organization & museology In British Isles In England '),
(141, '000', '063', 'General organization & museology In central Europe In Germany'),
(142, '000', '064', 'General organization & museology In France & Monaco '),
(143, '000', '065', 'General organization & museology In Italy & adjacent territories '),
(144, '000', '066', 'General organization & museology In Iberian Peninsula & adjacent islands '),
(145, '000', '067', 'General organization & museology In eastern Europe In Soviet Union'),
(146, '000', '068', 'General organization & museology In other areas '),
(147, '000', '069', 'Museology (Museum science) '),
(148, '000', '070', 'News media, journalism, publishing'),
(149, '000', '071', 'News media, journalism, publishing In North America'),
(150, '000', '072', 'News media, journalism, publishing In British Isles In England'),
(151, '000', '073', 'News media, journalism, publishing In central Europe In Germany '),
(152, '000', '074', 'News media, journalism, publishing In France & Monaco '),
(153, '000', '075', 'News media, journalism, publishing In Italy & adjacent territories '),
(154, '000', '076', 'News media, journalism, publishing In Iberian Peninsula & adjacent islands '),
(155, '000', '077', 'News media, journalism, publishing In eastern Europe In Soviet Union '),
(156, '000', '078', 'News media, journalism, publishing In Scandinavia'),
(157, '000', '079', 'News media, journalism, publishing In other languages'),
(158, '000', '080', 'General collections'),
(159, '000', '081', 'General collections American'),
(160, '000', '082', 'General collections In English '),
(161, '000', '083', 'General collections In other Germanic languages '),
(162, '000', '084', 'General collections In French, Provencal, Catalan'),
(163, '000', '085', 'General collections In Italian, Romanian, Rhaeto-Romanic '),
(164, '000', '086', 'General collections In Spanish & Portuguese '),
(165, '000', '087', 'General collections In Slavic languages '),
(166, '000', '088', 'General collections In Scandinavian languages '),
(167, '000', '089', 'General collections In other languages '),
(168, '000', '090', 'Manuscripts & rare books '),
(169, '000', '091', 'Manuscripts '),
(170, '000', '092', 'Block books '),
(171, '000', '093', 'Incunabula'),
(172, '000', '094', 'Printed books '),
(173, '000', '095', 'Books notable for bindings'),
(174, '000', '096', 'Books notable for illustrations'),
(175, '000', '097', 'Books notable for ownership or origin'),
(176, '000', '098', 'Prohibited works, forgeries, hoaxes'),
(177, '000', '099', 'Books notable for format'),
(178, '100', '111', 'Ontology '),
(179, '100', '112', 'Not assigned or no longer used '),
(180, '100', '113', 'Cosmology (Philosophy of nature) '),
(181, '100', '114', 'Space '),
(182, '100', '115', 'Time '),
(183, '100', '116', 'Change '),
(184, '100', '117', 'Structure '),
(185, '100', '118', ' Force & Energy'),
(186, '100', '119', 'Number & quantity '),
(187, '100', '120', 'Epistemology, causation, humankind '),
(188, '100', '121', 'Epistemology (Theory of knowledge) '),
(189, '100', '122', 'Causation'),
(190, '100', '123', 'Determinism & indeterminism '),
(191, '100', '124', 'Teleology'),
(192, '100', '125', 'Not assigned or no longer used '),
(193, '100', '126', 'The self '),
(194, '100', '127', 'The unconscious & the subconscious'),
(195, '100', '128', 'Humankind '),
(196, '100', '129', 'Origin & destiny of individual souls '),
(197, '100', '130', 'Paranormal phenomena '),
(198, '100', '131', 'Occult methods for achieving well-being'),
(199, '100', '132', 'Not assigned or no longer used '),
(200, '100', '133', 'Parapsychology & occultism'),
(201, '100', '134', 'Not assigned or no longer used '),
(202, '100', '135', 'Dreams & mysteries '),
(203, '100', '136', 'Not assigned or no longer used '),
(204, '100', '137', 'Divinatory graphology '),
(205, '100', '138', 'Physiognomy '),
(206, '100', '139', 'Phrenology'),
(207, '100', '140', 'Specific philosophical schools'),
(208, '100', '141', 'Idealism & related systems'),
(209, '100', '142', 'Critical philosophy '),
(210, '100', '143', 'Intuitionism & Bergsonism '),
(211, '100', '144', 'Humanism & related systems '),
(212, '100', '145', 'Sensationalism'),
(213, '100', '146', 'Naturalism & related systems '),
(214, '100', '147', 'Pantheism & related systems'),
(215, '100', '148', 'Liberalism, eclecticism, traditionalism'),
(216, '100', '149', 'Other philosophical systems '),
(217, '100', '150', 'Psychology '),
(218, '100', '151', 'Not assigned or no longer used '),
(219, '100', '152', 'Perception, movement, emotions, drives '),
(220, '100', '153', 'Mental processes & intelligence'),
(221, '100', '154', 'Subconscious & altered states'),
(222, '100', '155', 'Differential & developmental psychology'),
(223, '100', '156', 'Comparative psychology '),
(224, '100', '157', 'Not assigned or no longer used '),
(225, '100', '158', 'Applied psychology'),
(226, '100', '159', 'Not assigned or no longer used '),
(227, '100', '160', 'Logic '),
(228, '100', '161', 'Induction'),
(229, '100', '162', 'Deduction'),
(230, '100', '163', 'Not assigned or no longer used '),
(231, '100', '164', 'Not assigned or no longer used '),
(232, '100', '165', 'Fallacies & sources of error'),
(233, '100', '166', 'Syllogisms '),
(234, '100', '167', 'Hypotheses'),
(235, '100', '168', 'Argument & persuasion'),
(236, '100', '169', 'Analogy '),
(237, '100', '170', 'Ethics (Moral philosophy)'),
(238, '100', '171', 'Systems & doctrines '),
(239, '100', '172', 'Political ethics '),
(240, '100', '173', 'Ethics of family relationships '),
(241, '100', '174', 'Economic & professional ethics '),
(242, '100', '175', 'Ethics of recreation & leisure'),
(243, '100', '176', 'Ethics of sex & reproduction'),
(244, '100', '177', 'Ethics of social relations '),
(245, '100', '178', 'Ethics of consumption '),
(246, '100', '179', 'Other ethical norms'),
(247, '100', '180', 'Ancient, medieval, Oriental philosophy '),
(248, '100', '181', 'Oriental philosophy'),
(249, '100', '182', 'Pre-Socratic Greek philosophies '),
(250, '100', '183', 'Sophistic & Socratic philosophies '),
(251, '100', '184', 'Platonic philosophy '),
(252, '100', '185', 'Aristotelian philosophy '),
(253, '100', '186', 'Skeptic and Neoplatonic philosophies '),
(254, '100', '187', 'Epicurean philosophy '),
(255, '100', '188', 'Stoic philosophy '),
(256, '100', '189', 'Medieval Western philosophy '),
(257, '100', '190', 'Modern Western philosophy '),
(258, '100', '191', 'Modern Western philosophy United States & Canada '),
(259, '100', '192', 'Modern Western philosophy British Isles '),
(260, '100', '193', 'Modern Western philosophy Germany & Austria'),
(261, '100', '194', 'Modern Western philosophy France '),
(262, '100', '195', 'Modern Western philosophy Italy '),
(263, '100', '196', 'Modern Western philosophy Spain & Portugal '),
(264, '100', '197', 'Modern Western philosophy Soviet Union'),
(265, '100', '198', 'Modern Western philosophy Scandinavia '),
(266, '100', '199', 'Modern Western philosophy Other geographical areas'),
(267, '200', '211', 'Concepts of God '),
(268, '200', '212', 'Existence, attributes of God '),
(269, '200', '213', 'Creation '),
(270, '200', '214', 'Theodicy'),
(271, '200', '215', 'Science & religion'),
(272, '200', '216', 'Good & Evil'),
(273, '200', '217', 'Not assigned or no longer used'),
(274, '200', '218', 'Humankind'),
(275, '200', '219', 'Not assigned or no longer used'),
(276, '200', '220', 'Bible'),
(277, '200', '221', 'Old Testament'),
(278, '200', '222', 'Historical books of Old Testament'),
(279, '200', '223', 'Poetical books of Old Testament'),
(280, '200', '224', 'Prophetic books of Old Testament'),
(281, '200', '225', 'New Testament'),
(282, '200', '226', 'Gospels & Acts'),
(283, '200', '227', 'Epistles'),
(284, '200', '228', 'Revelation (Apocalypse)'),
(285, '200', '229', 'Apocrypha & pseudepigrapha'),
(286, '200', '230', 'Christian theology'),
(287, '200', '231', 'God'),
(288, '200', '232', 'Jesus Christ & his family'),
(289, '200', '233', 'Humankind'),
(290, '200', '234', 'Salvation (Soteriology) & grace'),
(291, '200', '235', 'Spiritual beings'),
(292, '200', '236', 'Eschatology'),
(293, '200', '237', 'Not assigned or no longer used'),
(294, '200', '238', 'Creeds & catechisms'),
(295, '200', '239', 'Apologetics & polemis'),
(296, '200', '240', 'Christian moral & devotional theology'),
(297, '200', '241', 'Moral theology'),
(298, '200', '242', 'Devotional literature'),
(299, '200', '243', 'Evangelistic writings for individuals'),
(300, '200', '244', 'Not assigned or no longer used'),
(301, '200', '245', 'Texts of hymns ');

-- --------------------------------------------------------

--
-- Table structure for table `dewey`
--

CREATE TABLE IF NOT EXISTS `dewey` (
`did` int(11) NOT NULL,
  `d_id` varchar(255) NOT NULL,
  `d_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dewey`
--

INSERT INTO `dewey` (`did`, `d_id`, `d_name`) VALUES
(1, '000', 'Computer science, information & general works'),
(2, '100', 'Philosophy and psychology'),
(3, '200', 'Religion'),
(5, '300', 'Social sciences'),
(6, '400', 'Language'),
(7, '500', 'Science'),
(8, '600', 'Technology'),
(9, '700', 'Arts & recreation'),
(10, '800', 'Literature'),
(11, '900', 'History & geography');

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE IF NOT EXISTS `librarian` (
`lid` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`lid`, `fname`, `mname`, `lname`, `position`, `contact`, `address`, `username`, `password`) VALUES
(1, 'Lyn Kristine', 'M.', 'Asis', 'Librarian', '09123456789', 'Tacloban City', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `returnbooks`
--

CREATE TABLE IF NOT EXISTS `returnbooks` (
  `brid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `returnbook` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `returnbooks`
--

INSERT INTO `returnbooks` (`brid`, `sid`, `bid`, `date`, `returnbook`) VALUES
(1, 1101887, 1, '2015-04-11 04:49:24', '2015-04-11 06:43:47');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `sid` varchar(100) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `year` varchar(20) NOT NULL,
  `section` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `fname`, `mname`, `lname`, `year`, `section`, `contact`, `address`) VALUES
('110099', 'Johnnice', 'Yaos', 'park', '2nd', 'one', '09287875109', 'Brgy. Nula-tula '),
('1101447', 'Jeff', 'K', 'Doe', '4rt', 'Diamond', '09000000000', 'brgy. wara-wara'),
('1101887', 'Nicko', 'J', 'Doe', '2nd', 'Anagase', '09077778999', 'Brgy. Legaspi Tac. city'),
('11018871', 'Gon ', 'O', 'Freak', '4rt', 'Bequerel', '09077778999', 'Brgy. Legaspi Tac. city'),
('11111', 'garcy', 'tape', 'kkljkfds', 'Grade 7', 'dsf', '787', 'jggu'),
('12000', 'Mang Jose', 'U', 'Super', '4rt', 'four', '09000000000', 'brgy. wara-wara'),
('140077', 'Jose', 'R', 'Tao', '1st', 'two', '09000000000', 'brgy. wara-wara'),
('15000', 'Mark Loyd', 'W', 'Murak', '3rd', 'three', '09000000000', 'brgy. wara-wara'),
('2015', 'Eduar', 'fuentes', 'Rizal', 'Fourt Year', 'Anagase', '34343', 'Brgy. santa fe tacloban city');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
 ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `booklist`
--
ALTER TABLE `booklist`
 ADD PRIMARY KEY (`listid`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
 ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
 ADD PRIMARY KEY (`brid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `dewey`
--
ALTER TABLE `dewey`
 ADD PRIMARY KEY (`did`);

--
-- Indexes for table `librarian`
--
ALTER TABLE `librarian`
 ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `returnbooks`
--
ALTER TABLE `returnbooks`
 ADD PRIMARY KEY (`brid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `booklist`
--
ALTER TABLE `booklist`
MODIFY `listid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
MODIFY `brid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=302;
--
-- AUTO_INCREMENT for table `dewey`
--
ALTER TABLE `dewey`
MODIFY `did` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `librarian`
--
ALTER TABLE `librarian`
MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
