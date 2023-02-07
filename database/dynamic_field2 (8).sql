-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 07:07 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dynamic_field2`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'Afghanistan'),
(2, 'Aland Islands'),
(3, 'Albania'),
(4, 'Algeria'),
(5, 'American Samoa'),
(6, 'Andorra'),
(7, 'Angola'),
(8, 'Anguilla'),
(9, 'Antarctica'),
(10, 'Antigua and Barbuda'),
(11, 'Argentina'),
(12, 'Armenia'),
(13, 'Aruba'),
(14, 'Australia'),
(15, 'Austria'),
(16, 'Azerbaijan'),
(17, 'Bahamas'),
(18, 'Bahrain'),
(19, 'Bangladesh'),
(20, 'Barbados'),
(21, 'Belarus'),
(22, 'Belgium'),
(23, 'Belize'),
(24, 'Benin'),
(25, 'Bermuda'),
(26, 'Bhutan'),
(27, 'Bolivia'),
(28, 'Bonaire, Sint Eustatius and Saba'),
(29, 'Bosnia and Herzegovina'),
(30, 'Botswana'),
(31, 'Bouvet Island'),
(32, 'Brazil'),
(33, 'British Indian Ocean Territory'),
(34, 'Brunei Darussalam'),
(35, 'Bulgaria'),
(36, 'Burkina Faso'),
(37, 'Burundi'),
(38, 'Cambodia'),
(39, 'Cameroon'),
(40, 'Canada'),
(41, 'Cape Verde'),
(42, 'Cayman Islands'),
(43, 'Central African Republic'),
(44, 'Chad'),
(45, 'Chile'),
(46, 'China'),
(47, 'Christmas Island'),
(48, 'Cocos (Keeling) Islands'),
(49, 'Colombia'),
(50, 'Comoros'),
(51, 'Congo'),
(52, 'Congo, Democratic Republic of the Congo'),
(53, 'Cook Islands'),
(54, 'Costa Rica'),
(55, 'Cote D\'Ivoire'),
(56, 'Croatia'),
(57, 'Cuba'),
(58, 'Curacao'),
(59, 'Cyprus'),
(60, 'Czech Republic'),
(61, 'Denmark'),
(62, 'Djibouti'),
(63, 'Dominica'),
(64, 'Dominican Republic'),
(65, 'Ecuador'),
(66, 'Egypt'),
(67, 'El Salvador'),
(68, 'Equatorial Guinea'),
(69, 'Eritrea'),
(70, 'Estonia'),
(71, 'Ethiopia'),
(72, 'Falkland Islands (Malvinas)'),
(73, 'Faroe Islands'),
(74, 'Fiji'),
(75, 'Finland'),
(76, 'France'),
(77, 'French Guiana'),
(78, 'French Polynesia'),
(79, 'French Southern Territories'),
(80, 'Gabon'),
(81, 'Gambia'),
(82, 'Georgia'),
(83, 'Germany'),
(84, 'Ghana'),
(85, 'Gibraltar'),
(86, 'Greece'),
(87, 'Greenland'),
(88, 'Grenada'),
(89, 'Guadeloupe'),
(90, 'Guam'),
(91, 'Guatemala'),
(92, 'Guernsey'),
(93, 'Guinea'),
(94, 'Guinea-Bissau'),
(95, 'Guyana'),
(96, 'Haiti'),
(97, 'Heard Island and Mcdonald Islands'),
(98, 'Holy See (Vatican City State)'),
(99, 'Honduras'),
(100, 'Hong Kong'),
(101, 'Hungary'),
(102, 'Iceland'),
(103, 'India'),
(104, 'Indonesia'),
(105, 'Iran, Islamic Republic of'),
(106, 'Iraq'),
(107, 'Ireland'),
(108, 'Isle of Man'),
(109, 'Israel'),
(110, 'Italy'),
(111, 'Jamaica'),
(112, 'Japan'),
(113, 'Jersey'),
(114, 'Jordan'),
(115, 'Kazakhstan'),
(116, 'Kenya'),
(117, 'Kiribati'),
(118, 'Korea, Democratic People\'s Republic of'),
(119, 'Korea, Republic of'),
(120, 'Kosovo'),
(121, 'Kuwait'),
(122, 'Kyrgyzstan'),
(123, 'Lao People\'s Democratic Republic'),
(124, 'Latvia'),
(125, 'Lebanon'),
(126, 'Lesotho'),
(127, 'Liberia'),
(128, 'Libyan Arab Jamahiriya'),
(129, 'Liechtenstein'),
(130, 'Lithuania'),
(131, 'Luxembourg'),
(132, 'Macao'),
(133, 'Macedonia, the Former Yugoslav Republic of'),
(134, 'Madagascar'),
(135, 'Malawi'),
(136, 'Malaysia'),
(137, 'Maldives'),
(138, 'Mali'),
(139, 'Malta'),
(140, 'Marshall Islands'),
(141, 'Martinique'),
(142, 'Mauritania'),
(143, 'Mauritius'),
(144, 'Mayotte'),
(145, 'Mexico'),
(146, 'Micronesia, Federated States of'),
(147, 'Moldova, Republic of'),
(148, 'Monaco'),
(149, 'Mongolia'),
(150, 'Montenegro'),
(151, 'Montserrat'),
(152, 'Morocco'),
(153, 'Mozambique'),
(154, 'Myanmar'),
(155, 'Namibia'),
(156, 'Nauru'),
(157, 'Nepal'),
(158, 'Netherlands'),
(159, 'Netherlands Antilles'),
(160, 'New Caledonia'),
(161, 'New Zealand'),
(162, 'Nicaragua'),
(163, 'Niger'),
(164, 'Nigeria'),
(165, 'Niue'),
(166, 'Norfolk Island'),
(167, 'Northern Mariana Islands'),
(168, 'Norway'),
(169, 'Oman'),
(170, 'Pakistan'),
(171, 'Palau'),
(172, 'Palestinian Territory, Occupied'),
(173, 'Panama'),
(174, 'Papua New Guinea'),
(175, 'Paraguay'),
(176, 'Peru'),
(177, 'Philippines'),
(178, 'Pitcairn'),
(179, 'Poland'),
(180, 'Portugal'),
(181, 'Puerto Rico'),
(182, 'Qatar'),
(183, 'Reunion'),
(184, 'Romania'),
(185, 'Russian Federation'),
(186, 'Rwanda'),
(187, 'Saint Barthelemy'),
(188, 'Saint Helena'),
(189, 'Saint Kitts and Nevis'),
(190, 'Saint Lucia'),
(191, 'Saint Martin'),
(192, 'Saint Pierre and Miquelon'),
(193, 'Saint Vincent and the Grenadines'),
(194, 'Samoa'),
(195, 'San Marino'),
(196, 'Sao Tome and Principe'),
(197, 'Saudi Arabia'),
(198, 'Senegal'),
(199, 'Serbia'),
(200, 'Serbia and Montenegro'),
(201, 'Seychelles'),
(202, 'Sierra Leone'),
(203, 'Singapore'),
(204, 'Sint Maarten'),
(205, 'Slovakia'),
(206, 'Slovenia'),
(207, 'Solomon Islands'),
(208, 'Somalia'),
(209, 'South Africa'),
(210, 'South Georgia and the South Sandwich Islands'),
(211, 'South Sudan'),
(212, 'Spain'),
(213, 'Sri Lanka'),
(214, 'Sudan'),
(215, 'Suriname'),
(216, 'Svalbard and Jan Mayen'),
(217, 'Swaziland'),
(218, 'Sweden'),
(219, 'Switzerland'),
(220, 'Syrian Arab Republic'),
(221, 'Taiwan, Province of China'),
(222, 'Tajikistan'),
(223, 'Tanzania, United Republic of'),
(224, 'Thailand'),
(225, 'Timor-Leste'),
(226, 'Togo'),
(227, 'Tokelau'),
(228, 'Tonga'),
(229, 'Trinidad and Tobago'),
(230, 'Tunisia'),
(231, 'Turkey'),
(232, 'Turkmenistan'),
(233, 'Turks and Caicos Islands'),
(234, 'Tuvalu'),
(235, 'Uganda'),
(236, 'Ukraine'),
(237, 'United Arab Emirates'),
(238, 'United Kingdom'),
(239, 'United States'),
(240, 'United States Minor Outlying Islands'),
(241, 'Uruguay'),
(242, 'Uzbekistan'),
(243, 'Vanuatu'),
(244, 'Venezuela'),
(245, 'Viet Nam'),
(246, 'Virgin Islands, British'),
(247, 'Virgin Islands, U.s.'),
(248, 'Wallis and Futuna'),
(249, 'Western Sahara'),
(250, 'Yemen'),
(251, 'Zambia'),
(252, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb1`
--

CREATE TABLE `tb1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `profession` varchar(255) NOT NULL,
  `bio` longtext NOT NULL,
  `country` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb1`
--

INSERT INTO `tb1` (`id`, `name`, `date`, `profession`, `bio`, `country`, `address`, `location`, `phone`, `email`, `website`, `linkedin`, `twitter`, `facebook`, `github`, `image`, `created_at`, `updated_at`) VALUES
(8, 'dfs', 'sd-df-dfdf', 'dfdfdffdf', 'sdfffff', 'Algeria', 'dfs', 'sdf', 'dfs', 'dsf@gmail.com', 'fdsfsd', 'fsdfdsf', 'sdfsd', 'fsdfd', 'ssdf', 'ads.png', '2023-01-16 13:36:05', '2022-10-17 18:58:48.000000'),
(21, 'Mrinal  Kanth Padhi', '2023-01-03', 'Jr. Developer', 'I am a junior developer', 'Andorra', 'C/o- Deepali Padhi, Near Ananda Nursurey (village- Hagrapulli), P.O. Amoni , P.S. - Samaguri', 's', '9678001910', 'minalkanth.9@gmail.com', 'sssssssssssssssssss', 'sssssssssssssssssssssssssss', 'ssssssssss', 'ssssssssss', 'sssssss', 'aaaaa.png', '2023-01-16 13:35:16', '2023-01-10 12:59:28.000000'),
(76, 'Mrinal Padhi', '1996-12-29', 'Developer', 'I am a chota sa Developer', 'India', 'C/o- Deepali Padhi, Near Ananda Nursurey (village- Hagrapulli), P.O. Amoni , P.S. - Samaguri', 'Nagaon', '9678001910', 'minalkanth@gmail.com', 'www.minal.com', 'minal@linkedin.com', 'minal@twitter.com', 'minal@facebook.com', 'minal@github.com', 'mrinal_padhi.jpg', '2023-01-12 01:39:48', '2023-01-12 07:09:48.000000'),
(77, 'aaaaaaaaaa', '2022-12-28', 'aaa', 'aaaaaaaaaaaaaaaaaa', 'Austria', 'asd', 'aaaaaaa', '7785421321', 'sa9@gmail.com', 'sad', 'asd', 'asd', 'asd', 'asd', 'aaaaaaaaaa.png', '2023-01-12 02:49:22', '2023-01-12 08:19:22.000000'),
(78, 'aaaaaaaaaa', '2022-12-28', 'aaa', 'aaaaaaaaaaaaaaaaaa', 'Austria', 'asd', 'aaaaaaa', '7785421321', 'sa9@gmail.com', 'sad', 'asd', 'asd', 'asd', 'asd', 'aaaaaaaaaaaaa.png', '2023-01-16 13:35:21', '2023-01-12 08:24:57.000000'),
(79, 'aaaaa', '2023-01-04', 'aaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaa', 'Austria', 'a', 'aaaaaaaaaaaaaaa', '9678001910', 'as@gmail.com', 'as', 'as', 'asasasasasasasasasasas', 'asasasasasasasasasasas', 'asasasasasasasasasasasas', 'aaaaa.png', '2023-01-12 03:48:00', '2023-01-12 09:18:00.000000'),
(80, 'aaaaaaaaaaaaa', '2022-12-30', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', 'Bahamas', 'a', 'aaaaaaaaaa', '9678001910', 'a@gmail.com', 'aa', 'a', 'aaaaaaaa', 'aaaaaaaaaaaa', 'aaaaaaaaa', 'aaaaaaaaaaaaa.png', '2023-01-12 04:36:47', '2023-01-12 10:06:47.000000'),
(81, 'aaaaaaaaaaaaa', '2022-12-30', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', 'Bahamas', 'a', 'aaaaaaaaaa', '9678001910', 'a@gmail.com', 'aa', 'a', 'aaaaaaaa', 'aaaaaaaaaaaa', 'aaaaaaaaa', 'aaaaaaaaaaaaa.png', '2023-01-12 04:37:11', '2023-01-12 10:07:11.000000'),
(82, 'ads', '2022-12-27', 'ads', 'ads', 'Chile', 'asd', 'asd', '7876454648', 'dalkaas@gmail.com', 'dassa', 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaa', 'aaaaaaa', 'ads.png', '2023-01-12 05:29:12', '2023-01-12 10:59:12.000000'),
(83, 'ertert', '2023-01-13', 'retert', 'ertert', 'Algeria', 'ertert', 'erte', '3453453453', 'minalkanth.9+123@gmail.com', 'sad', 'rtyrty', 'rtyrty', 'rtyrty', 'rtyrty', 'ertert.png', '2023-01-12 07:32:47', '2023-01-12 13:02:47.000000');

-- --------------------------------------------------------

--
-- Table structure for table `tb2`
--

CREATE TABLE `tb2` (
  `id` int(11) NOT NULL,
  `tb1_id` int(11) NOT NULL,
  `platform_title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb2`
--

INSERT INTO `tb2` (`id`, `tb1_id`, `platform_title`, `description`, `updated_at`, `created_at`) VALUES
(1, 76, 'Php', 'Php wala', '2023-01-12 07:09:48', '2023-01-12 01:39:48'),
(2, 76, 'aaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2023-01-12 08:19:22', '2023-01-16 12:50:31'),
(3, 78, 'aaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2023-01-12 08:24:57', '2023-01-12 02:54:57'),
(4, 79, 'aaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaa', '2023-01-12 09:18:00', '2023-01-12 03:48:00'),
(5, 80, 'aaaaaaaaaaaaaaaaa', 'aaaaaa', '2023-01-12 10:06:47', '2023-01-12 04:36:47'),
(6, 81, 'aaaaaaaaaaaaaaaaa', 'aaaaaa', '2023-01-12 10:07:11', '2023-01-12 04:37:11'),
(7, 82, 'ads', 'asd', '2023-01-12 10:59:12', '2023-01-12 05:29:12'),
(8, 83, 'ytyutu', 'tyuytuytu', '2023-01-12 13:02:47', '2023-01-12 13:02:47');

-- --------------------------------------------------------

--
-- Table structure for table `tb3`
--

CREATE TABLE `tb3` (
  `id` int(11) NOT NULL,
  `tb1_id` int(11) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb3`
--

INSERT INTO `tb3` (`id`, `tb1_id`, `skill`, `value`, `created_at`, `updated_at`) VALUES
(1, 76, 'Php', '8', '2023-01-12 07:09:48', '2023-01-12 01:39:48'),
(2, 76, 'asd', '1', '2023-01-12 08:19:22', '2023-01-17 05:17:00'),
(3, 78, 'asd', '1', '2023-01-12 08:24:57', '2023-01-12 02:54:57'),
(4, 79, 'as', '1', '2023-01-12 09:18:00', '2023-01-12 03:48:00'),
(5, 80, 'aaaa', '1', '2023-01-12 10:06:47', '2023-01-12 04:36:47'),
(6, 81, 'aaaa', '1', '2023-01-12 10:07:11', '2023-01-12 04:37:11'),
(7, 82, 'aaaaaaaaaaaaaaaa', '1', '2023-01-12 10:59:12', '2023-01-12 05:29:12'),
(8, 83, 'rtyrty', '1', '2023-01-12 13:02:47', '2023-01-12 07:32:47'),
(9, 83, 'ytyutu', '2', '2023-01-12 13:02:47', '2023-01-12 07:32:47');

-- --------------------------------------------------------

--
-- Table structure for table `tb4`
--

CREATE TABLE `tb4` (
  `id` int(11) NOT NULL,
  `tb1_id` int(11) NOT NULL,
  `collage_name` varchar(255) NOT NULL,
  `e_start_from` varchar(255) NOT NULL,
  `e_end_at` varchar(255) NOT NULL,
  `e_description` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb4`
--

INSERT INTO `tb4` (`id`, `tb1_id`, `collage_name`, `e_start_from`, `e_end_at`, `e_description`, `created_at`, `updated_at`) VALUES
(1, 76, 'Kaliabor College', '2023-01', '2023-02', 'About Kaliabor College', '2023-01-12 07:09:48', '2023-01-12 01:39:48'),
(2, 77, 'asdasd', '2023-05', '2023-02', 'ads', '2023-01-12 08:19:22', '2023-01-12 02:49:22'),
(3, 78, 'asdasd', '2023-05', '2023-02', 'ads', '2023-01-12 08:24:57', '2023-01-12 02:54:57'),
(4, 79, 'dasd', '2023-02', '2023-03', 'asdasd', '2023-01-12 09:18:00', '2023-01-12 03:48:00'),
(5, 80, 'aaaaaa', '2023-02', '2023-06', 'aaaaaaaa', '2023-01-12 10:06:47', '2023-01-12 04:36:47'),
(6, 81, 'aaaaaa', '2023-02', '2023-06', 'aaaaaaaa', '2023-01-12 10:07:11', '2023-01-12 04:37:11'),
(7, 82, 'aaaaaaaaaaaaa', '2023-02', '2023-02', 'adsdasasd', '2023-01-12 10:59:12', '2023-01-12 05:29:12'),
(8, 83, 'ertertet', '2023-02', '2023-11', 'tygjgjg', '2023-01-12 13:02:47', '2023-01-12 07:32:47'),
(9, 83, 'werwr', '2023-03', '2023-11', 'fghfghfh', '2023-01-12 13:02:47', '2023-01-12 07:32:47');

-- --------------------------------------------------------

--
-- Table structure for table `tb5`
--

CREATE TABLE `tb5` (
  `id` int(11) NOT NULL,
  `tb1_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `w_location` varchar(255) NOT NULL,
  `w_start_from` varchar(255) NOT NULL,
  `w_end_at` varchar(255) NOT NULL,
  `w_description` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb5`
--

INSERT INTO `tb5` (`id`, `tb1_id`, `company_name`, `job_title`, `w_location`, `w_start_from`, `w_end_at`, `w_description`, `created_at`, `updated_at`) VALUES
(1, 76, 'ATC', 'Data entry Operator', 'Assam', '2023-05', '2023-06', 'Assam Tea Garden Cooperation', '2023-01-12 07:09:48', '2023-01-12 01:39:48'),
(2, 77, 'ViPrak', 'asdasd', 'asdasd', '2023-06', '2023-07', 'asdasd', '2023-01-12 08:19:22', '2023-01-12 02:49:22'),
(3, 78, 'ViPrak', 'asdasd', 'asdasd', '2023-06', '2023-07', 'asdasd', '2023-01-12 08:24:57', '2023-01-12 02:54:57'),
(4, 79, 'ViPrak', 'asd', 'asd', '2023-10', '2023-11', 'asddddd', '2023-01-12 09:18:00', '2023-01-12 03:48:00'),
(5, 80, 'ViPrak', 'aaaaa', 'aaaaaaaaaaaaaaaaa', '2023-02', '2023-06', 'a', '2023-01-12 10:06:47', '2023-01-12 04:36:47'),
(6, 81, 'ViPrak', 'aaaaa', 'aaaaaaaaaaaaaaaaa', '2023-02', '2023-06', 'a', '2023-01-12 10:07:11', '2023-01-12 04:37:11'),
(7, 82, 'ViPrak', 'asd', 'asdasd', '2023-06', '2023-02', 'asdasdasd', '2023-01-12 10:59:12', '2023-01-12 05:29:12'),
(8, 83, 'ViPrak', 'fghfgh', 'fghfhfh', '2023-07', '2023-09', 'rtyrty', '2023-01-12 13:02:47', '2023-01-12 07:32:47'),
(9, 83, 'wewrer', 'werwr', 'cvxbcvb', '2023-02', '2023-10', 'bnmbmbnm', '2023-01-12 13:02:47', '2023-01-12 07:32:47');

-- --------------------------------------------------------

--
-- Table structure for table `tb6`
--

CREATE TABLE `tb6` (
  `id` int(11) NOT NULL,
  `tb1_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `file_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tb1`
--
ALTER TABLE `tb1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb2`
--
ALTER TABLE `tb2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb3`
--
ALTER TABLE `tb3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb4`
--
ALTER TABLE `tb4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb5`
--
ALTER TABLE `tb5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb6`
--
ALTER TABLE `tb6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb1`
--
ALTER TABLE `tb1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `tb2`
--
ALTER TABLE `tb2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb3`
--
ALTER TABLE `tb3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb4`
--
ALTER TABLE `tb4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb5`
--
ALTER TABLE `tb5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb6`
--
ALTER TABLE `tb6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
