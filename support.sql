-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 30, 2016 at 04:59 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `support`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE `tbl_country` (
  `country_id` int(11) NOT NULL,
  `sortName` int(3) NOT NULL,
  `country_name` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`country_id`, `sortName`, `country_name`) VALUES
(3, 0, 'Algeria'),
(2, 0, 'Albania'),
(1, 0, 'Afghanistan'),
(4, 0, 'American Samoa'),
(5, 0, 'Andorra'),
(6, 0, 'Angola'),
(7, 0, 'Anguilla'),
(8, 0, 'Antarctica'),
(9, 0, 'Antigua And Barbuda'),
(10, 0, 'Argentina'),
(11, 0, 'Armenia'),
(12, 0, 'Aruba'),
(13, 0, 'Australia'),
(14, 0, 'Austria'),
(15, 0, 'Azerbaijan'),
(16, 0, 'Bahamas The'),
(17, 0, 'Bahrain'),
(18, 0, 'Bangladesh'),
(19, 0, 'Barbados'),
(20, 0, 'Belarus'),
(21, 0, 'Belgium'),
(22, 0, 'Belize'),
(23, 0, 'Benin'),
(24, 0, 'Bermuda'),
(25, 0, 'Bhutan'),
(26, 0, 'Bolivia'),
(27, 0, 'Bosnia and Herzegovina'),
(28, 0, 'Botswana'),
(29, 0, 'Bouvet Island'),
(30, 0, 'Brazil'),
(31, 0, 'British Indian Ocean Territory'),
(32, 0, 'Brunei'),
(33, 0, 'Bulgaria'),
(34, 0, 'Burkina Faso'),
(35, 0, 'Burundi'),
(36, 0, 'Cambodia'),
(37, 0, 'Cameroon'),
(38, 0, 'Canada'),
(39, 0, 'Cape Verde'),
(40, 0, 'Cayman Islands'),
(41, 0, 'Central African Republic'),
(42, 0, 'Chad'),
(43, 0, 'Chile'),
(44, 0, 'China'),
(45, 0, 'Christmas Island'),
(46, 0, 'Cocos (Keeling) Islands'),
(47, 0, 'Colombia'),
(48, 0, 'Comoros'),
(49, 0, 'Congo'),
(50, 0, 'Congo The Democratic Republic Of The'),
(51, 0, 'Cook Islands'),
(52, 0, 'Costa Rica'),
(53, 0, 'Cote D''Ivoire (Ivory Coast)'),
(54, 0, 'Croatia (Hrvatska)'),
(55, 0, 'Cuba'),
(56, 0, 'Cyprus'),
(57, 0, 'Czech Republic'),
(58, 0, 'Denmark'),
(59, 0, 'Djibouti'),
(60, 0, 'Dominica'),
(61, 0, 'Dominican Republic'),
(62, 0, 'East Timor'),
(63, 0, 'Ecuador'),
(64, 0, 'Egypt'),
(65, 0, 'El Salvador'),
(66, 0, 'Equatorial Guinea'),
(67, 0, 'Eritrea'),
(68, 0, 'Estonia'),
(69, 0, 'Ethiopia'),
(70, 0, 'External Territories of Australia'),
(71, 0, 'Falkland Islands'),
(72, 0, 'Faroe Islands'),
(73, 0, 'Fiji Islands'),
(74, 0, 'Finland'),
(75, 0, 'France'),
(76, 0, 'French Guiana'),
(77, 0, 'French Polynesia'),
(78, 0, 'French Southern Territories'),
(79, 0, 'Gabon'),
(80, 0, 'Gambia The'),
(81, 0, 'Georgia'),
(82, 0, 'Germany'),
(83, 0, 'Ghana'),
(84, 0, 'Gibraltar'),
(85, 0, 'Greece'),
(86, 0, 'Greenland'),
(87, 0, 'Grenada'),
(88, 0, 'Guadeloupe'),
(89, 0, 'Guam'),
(90, 0, 'Guatemala'),
(91, 0, 'Guernsey and Alderney'),
(92, 0, 'Guinea'),
(93, 0, 'Guinea-Bissau'),
(94, 0, 'Guyana'),
(95, 0, 'Haiti'),
(96, 0, 'Heard and McDonald Islands'),
(97, 0, 'Honduras'),
(98, 0, 'Hong Kong S.A.R.'),
(99, 0, 'Hungary'),
(100, 0, 'Iceland'),
(101, 0, 'India'),
(102, 0, 'Indonesia'),
(103, 0, 'Iran'),
(104, 0, 'Iraq'),
(105, 0, 'Ireland'),
(106, 0, 'Israel'),
(107, 0, 'Italy'),
(108, 0, 'Jamaica'),
(109, 0, 'Japan'),
(110, 0, 'Jersey'),
(111, 0, 'Jordan'),
(112, 0, 'Kazakhstan'),
(113, 0, 'Kenya'),
(114, 0, 'Kiribati'),
(115, 0, 'Korea North'),
(116, 0, 'Korea South'),
(117, 0, 'Kuwait'),
(118, 0, 'Kyrgyzstan'),
(119, 0, 'Laos'),
(120, 0, 'Latvia'),
(121, 0, 'Lebanon'),
(122, 0, 'Lesotho'),
(123, 0, 'Liberia'),
(124, 0, 'Libya'),
(125, 0, 'Liechtenstein'),
(126, 0, 'Lithuania'),
(127, 0, 'Luxembourg'),
(128, 0, 'Macau S.A.R.'),
(129, 0, 'Macedonia'),
(130, 0, 'Madagascar'),
(131, 0, 'Malawi'),
(132, 0, 'Malaysia'),
(133, 0, 'Maldives'),
(134, 0, 'Mali'),
(135, 0, 'Malta'),
(136, 0, 'Man (Isle of)'),
(137, 0, 'Marshall Islands'),
(138, 0, 'Martinique'),
(139, 0, 'Mauritania'),
(140, 0, 'Mauritius'),
(141, 0, 'Mayotte'),
(142, 0, 'Mexico'),
(143, 0, 'Micronesia'),
(144, 0, 'Moldova'),
(145, 0, 'Monaco'),
(146, 0, 'Mongolia'),
(147, 0, 'Montserrat'),
(148, 0, 'Morocco'),
(149, 0, 'Mozambique'),
(150, 0, 'Myanmar'),
(151, 0, 'Namibia'),
(152, 0, 'Nauru'),
(153, 0, 'Nepal'),
(154, 0, 'Netherlands Antilles'),
(155, 0, 'Netherlands The'),
(156, 0, 'New Caledonia'),
(157, 0, 'New Zealand'),
(158, 0, 'Nicaragua'),
(159, 0, 'Niger'),
(160, 0, 'Nigeria'),
(161, 0, 'Niue'),
(162, 0, 'Norfolk Island'),
(163, 0, 'Northern Mariana Islands'),
(164, 0, 'Norway'),
(165, 0, 'Oman'),
(166, 0, 'Pakistan'),
(167, 0, 'Palau'),
(168, 0, 'Palestinian Territory Occupied'),
(169, 0, 'Panama'),
(170, 0, 'Papua new Guinea'),
(171, 0, 'Paraguay'),
(172, 0, 'Peru'),
(173, 0, 'Philippines'),
(174, 0, 'Pitcairn Island'),
(175, 0, 'Poland'),
(176, 0, 'Portugal'),
(177, 0, 'Puerto Rico'),
(178, 0, 'Qatar'),
(179, 0, 'Reunion'),
(180, 0, 'Romania'),
(181, 0, 'Russia'),
(182, 0, 'Rwanda'),
(183, 0, 'Saint Helena'),
(184, 0, 'Saint Kitts And Nevis'),
(185, 0, 'Saint Lucia'),
(186, 0, 'Saint Pierre and Miquelon'),
(187, 0, 'Saint Vincent And The Grenadines'),
(188, 0, 'Samoa'),
(189, 0, 'San Marino'),
(190, 0, 'Sao Tome and Principe'),
(191, 0, 'Saudi Arabia'),
(192, 0, 'Senegal'),
(193, 0, 'Serbia'),
(194, 0, 'Seychelles'),
(195, 0, 'Sierra Leone'),
(196, 0, 'Singapore'),
(197, 0, 'Slovakia'),
(198, 0, 'Slovenia'),
(199, 0, 'Smaller Territories of the UK'),
(200, 0, 'Solomon Islands'),
(201, 0, 'Somalia'),
(202, 0, 'South Africa'),
(203, 0, 'South Georgia'),
(204, 0, 'South Sudan'),
(205, 0, 'Spain'),
(206, 0, 'Sri Lanka'),
(207, 0, 'Sudan'),
(208, 0, 'Suriname'),
(209, 0, 'Svalbard And Jan Mayen Islands'),
(210, 0, 'Swaziland'),
(211, 0, 'Sweden'),
(212, 0, 'Switzerland'),
(213, 0, 'Syria'),
(214, 0, 'Taiwan'),
(215, 0, 'Tajikistan'),
(216, 0, 'Tanzania'),
(217, 0, 'Thailand'),
(218, 0, 'Togo'),
(219, 0, 'Tokelau'),
(220, 0, 'Tonga'),
(221, 0, 'Trinidad And Tobago'),
(222, 0, 'Tunisia'),
(223, 0, 'Turkey'),
(224, 0, 'Turkmenistan'),
(225, 0, 'Turks And Caicos Islands'),
(226, 0, 'Tuvalu'),
(227, 0, 'Uganda'),
(228, 0, 'Ukraine'),
(229, 0, 'United Arab Emirates'),
(230, 0, 'United Kingdom'),
(231, 0, 'United States'),
(232, 0, 'United States Minor Outlying Islands'),
(233, 0, 'Uruguay'),
(234, 0, 'Uzbekistan'),
(235, 0, 'Vanuatu'),
(236, 0, 'Vatican City State (Holy See)'),
(237, 0, 'Venezuela'),
(238, 0, 'Vietnam'),
(239, 0, 'Virgin Islands (British)'),
(240, 0, 'Virgin Islands (US)'),
(241, 0, 'Wallis And Futuna Islands'),
(242, 0, 'Western Sahara'),
(243, 0, 'Yemen'),
(244, 0, 'Yugoslavia'),
(245, 0, 'Zambia'),
(246, 0, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `state_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_name` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`state_id`, `country_id`, `state_name`) VALUES
(1, 160, 'Delta'),
(2, 160, 'Imo'),
(3, 160, 'Abia'),
(4, 160, 'Lagos'),
(9, 231, 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `id` int(11) NOT NULL,
  `code` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`id`, `code`) VALUES
(1, 'ABC12345'),
(3, 'DKZ16817'),
(4, 'FQB09245'),
(5, 'LRI77648'),
(6, 'ndV40819'),
(7, 'eYn31487'),
(8, 'pMU88572'),
(9, 'Luw38176'),
(10, 'wsD55218'),
(11, 'Acf16027'),
(12, 'giR54822'),
(13, 'vLe19993'),
(14, 'xRi94278'),
(15, 'mxi94058'),
(16, 'LQp01358'),
(17, 'nUm88204'),
(18, 'Tbh44454'),
(19, 'CeM36293'),
(20, 'FKs87252'),
(21, 'skU75662'),
(22, 'bsX29475'),
(23, 'ndR70663'),
(24, 'xRk91632'),
(25, 'gNz89873'),
(26, 'pWq85755');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `country_id` varchar(40) NOT NULL,
  `state_id` varchar(40) NOT NULL,
  `mobileNumber` varchar(30) NOT NULL,
  `tellerCode` varchar(20) NOT NULL,
  `tokenCode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `firstName`, `lastName`, `email`, `country_id`, `state_id`, `mobileNumber`, `tellerCode`, `tokenCode`) VALUES
(53, 'Mariam', 'Garba', 'jumokemariam@gmail.com', '2', '4', '2147483647', '12345678901', 'ABC12345'),
(98, 'ogoo', 'lgiihiii', 'kviyriidly@gmail.com', 'kcujuvuuu', 'jjvuuuii', '07031253981', '12345678967', 'DKZ16817');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_country`
--
ALTER TABLE `tbl_country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `tokenCode` (`tokenCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_country`
--
ALTER TABLE `tbl_country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20000;
--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
