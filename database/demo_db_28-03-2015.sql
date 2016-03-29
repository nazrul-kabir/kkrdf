-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2016 at 06:51 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `demo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(5) NOT NULL,
  `admin_full_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `admin_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admin_password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `admin_phone` varchar(255) CHARACTER SET utf8 NOT NULL,
  `admin_address` text CHARACTER SET utf8 NOT NULL,
  `admin_zip` varchar(255) CHARACTER SET utf8 NOT NULL,
  `admin_city` varchar(255) CHARACTER SET utf8 NOT NULL,
  `admin_country` varchar(255) CHARACTER SET utf32 NOT NULL,
  `admin_status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'inactive',
  `admin_updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `admin_updated_by` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_full_name`, `admin_email`, `admin_password`, `admin_phone`, `admin_address`, `admin_zip`, `admin_city`, `admin_country`, `admin_status`, `admin_updated_on`, `admin_updated_by`) VALUES
(1, 'ADMIN', 'admin@kkrdf.com', '21232f297a57a5a74#kkrdf#3894a0e4a801fc3', '01717940150', 'Nikunja', '1229', 'Dhaka', '20', 'active', '2016-03-24 19:01:22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_title` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `banner_status` enum('Active','Inactive') NOT NULL,
  `banner_created_on` datetime NOT NULL,
  `banner_created_by` int(11) NOT NULL,
  `banner_updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `banner_updated_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_title`, `banner_image`, `banner_status`, `banner_created_on`, `banner_created_by`, `banner_updated_on`, `banner_updated_by`) VALUES
(1, 'Banner 1', 'PIMG_20160328172134.jpg', 'Active', '2016-03-28 17:21:34', 1, '2016-03-28 11:21:34', 0),
(2, 'Banner 2', 'PIMG_20160328172153.jpg', 'Active', '2016-03-28 17:21:53', 1, '2016-03-28 11:21:53', 0),
(3, 'Banner 3', 'PIMG_20160328172231.jpg', 'Active', '2016-03-28 17:22:31', 1, '2016-03-28 11:22:32', 0),
(4, 'Banner 4', 'PIMG_20160328173154.jpg', 'Active', '2016-03-28 17:31:54', 1, '2016-03-28 11:32:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_message` text NOT NULL,
  `contact_subject` varchar(255) NOT NULL,
  `contact_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=253 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'Afghanistan'),
(2, 'Albania'),
(3, 'Algeria'),
(4, 'American Samoa'),
(5, 'Andorra'),
(6, 'Angola'),
(7, 'Anguilla'),
(8, 'Antarctica'),
(9, 'Antigua and Barbuda'),
(10, 'Argentina'),
(11, 'Armenia'),
(12, 'Armenia'),
(13, 'Aruba'),
(14, 'Australia'),
(15, 'Austria'),
(16, 'Azerbaijan'),
(17, 'Azerbaijan'),
(18, 'Bahamas'),
(19, 'Bahrain'),
(20, 'Bangladesh'),
(21, 'Barbados'),
(22, 'Belarus'),
(23, 'Belgium'),
(24, 'Belize'),
(25, 'Benin'),
(26, 'Bermuda'),
(27, 'Bhutan'),
(28, 'Bolivia'),
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
(52, 'Congo, The Democratic Republic of The'),
(53, 'Cook Islands'),
(54, 'Costa Rica'),
(55, 'Cote D''ivoire'),
(56, 'Croatia'),
(57, 'Cuba'),
(58, 'Cyprus'),
(60, 'Czech Republic'),
(61, 'Denmark'),
(62, 'Djibouti'),
(63, 'Dominica'),
(64, 'Dominican Republic'),
(65, 'Easter Island'),
(66, 'Ecuador'),
(67, 'Egypt'),
(68, 'El Salvador'),
(69, 'Equatorial Guinea'),
(70, 'Eritrea'),
(71, 'Estonia'),
(72, 'Ethiopia'),
(73, 'Falkland Islands (Malvinas)'),
(74, 'Faroe Islands'),
(75, 'Fiji'),
(76, 'Finland'),
(77, 'France'),
(78, 'French Guiana'),
(79, 'French Polynesia'),
(80, 'French Southern Territories'),
(81, 'Gabon'),
(82, 'Gambia'),
(83, 'Georgia'),
(85, 'Germany'),
(86, 'Ghana'),
(87, 'Gibraltar'),
(88, 'Greece'),
(89, 'Greenland'),
(91, 'Grenada'),
(92, 'Guadeloupe'),
(93, 'Guam'),
(94, 'Guatemala'),
(95, 'Guinea'),
(96, 'Guinea-bissau'),
(97, 'Guyana'),
(98, 'Haiti'),
(99, 'Heard Island and Mcdonald Islands'),
(100, 'Honduras'),
(101, 'Hong Kong'),
(102, 'Hungary'),
(103, 'Iceland'),
(104, 'India'),
(105, 'Indonesia'),
(106, 'Indonesia'),
(107, 'Iran'),
(108, 'Iraq'),
(109, 'Ireland'),
(110, 'Israel'),
(111, 'Italy'),
(112, 'Jamaica'),
(113, 'Japan'),
(114, 'Jordan'),
(115, 'Kazakhstan'),
(116, 'Kazakhstan'),
(117, 'Kenya'),
(118, 'Kiribati'),
(119, 'Korea, North'),
(120, 'Korea, South'),
(121, 'Kosovo'),
(122, 'Kuwait'),
(123, 'Kyrgyzstan'),
(124, 'Laos'),
(125, 'Latvia'),
(126, 'Lebanon'),
(127, 'Lesotho'),
(128, 'Liberia'),
(129, 'Libyan Arab Jamahiriya'),
(130, 'Liechtenstein'),
(131, 'Lithuania'),
(132, 'Luxembourg'),
(133, 'Macau'),
(134, 'Macedonia'),
(135, 'Madagascar'),
(136, 'Malawi'),
(137, 'Malaysia'),
(138, 'Maldives'),
(139, 'Mali'),
(140, 'Malta'),
(141, 'Marshall Islands'),
(142, 'Martinique'),
(143, 'Mauritania'),
(144, 'Mauritius'),
(145, 'Mayotte'),
(146, 'Mexico'),
(147, 'Micronesia, Federated States of'),
(148, 'Moldova, Republic of'),
(149, 'Monaco'),
(150, 'Mongolia'),
(151, 'Montenegro'),
(152, 'Montserrat'),
(153, 'Morocco'),
(154, 'Mozambique'),
(155, 'Myanmar'),
(156, 'Namibia'),
(157, 'Nauru'),
(158, 'Nepal'),
(159, 'Netherlands'),
(160, 'Netherlands Antilles'),
(161, 'New Caledonia'),
(162, 'New Zealand'),
(163, 'Nicaragua'),
(164, 'Niger'),
(165, 'Nigeria'),
(166, 'Niue'),
(167, 'Norfolk Island'),
(168, 'Northern Mariana Islands'),
(169, 'Norway'),
(170, 'Oman'),
(171, 'Pakistan'),
(172, 'Palau'),
(173, 'Palestinian Territory'),
(174, 'Panama'),
(175, 'Papua New Guinea'),
(176, 'Paraguay'),
(177, 'Peru'),
(178, 'Philippines'),
(179, 'Pitcairn'),
(180, 'Poland'),
(181, 'Portugal'),
(182, 'Puerto Rico'),
(183, 'Qatar'),
(184, 'Reunion'),
(185, 'Romania'),
(186, 'Russia'),
(187, 'Russia'),
(188, 'Rwanda'),
(189, 'Saint Helena'),
(190, 'Saint Kitts and Nevis'),
(191, 'Saint Lucia'),
(192, 'Saint Pierre and Miquelon'),
(193, 'Saint Vincent and The Grenadines'),
(194, 'Samoa'),
(195, 'San Marino'),
(196, 'Sao Tome and Principe'),
(197, 'Saudi Arabia'),
(198, 'Senegal'),
(199, 'Serbia and Montenegro'),
(200, 'Seychelles'),
(201, 'Sierra Leone'),
(202, 'Singapore'),
(203, 'Slovakia'),
(204, 'Slovenia'),
(205, 'Solomon Islands'),
(206, 'Somalia'),
(207, 'South Africa'),
(208, 'South Georgia and The South Sandwich Islands'),
(209, 'Spain'),
(210, 'Sri Lanka'),
(211, 'Sudan'),
(212, 'Suriname'),
(213, 'Svalbard and Jan Mayen'),
(214, 'Swaziland'),
(215, 'Sweden'),
(216, 'Switzerland'),
(217, 'Syria'),
(218, 'Taiwan'),
(219, 'Tajikistan'),
(220, 'Tanzania, United Republic of'),
(221, 'Thailand'),
(222, 'Timor-leste'),
(223, 'Togo'),
(224, 'Tokelau'),
(225, 'Tonga'),
(226, 'Trinidad and Tobago'),
(227, 'Tunisia'),
(228, 'Turkey'),
(229, 'Turkey'),
(230, 'Turkmenistan'),
(231, 'Turks and Caicos Islands'),
(232, 'Tuvalu'),
(233, 'Uganda'),
(234, 'Ukraine'),
(235, 'United Arab Emirates'),
(236, 'United Kingdom'),
(237, 'United States'),
(238, 'United States Minor Outlying Islands'),
(239, 'Uruguay'),
(240, 'Uzbekistan'),
(241, 'Vanuatu'),
(242, 'Vatican City'),
(243, 'Venezuela'),
(244, 'Vietnam'),
(245, 'Virgin Islands, British'),
(246, 'Virgin Islands, U.S.'),
(247, 'Wallis and Futuna'),
(248, 'Western Sahara'),
(249, 'Yemen'),
(250, 'Yemen'),
(251, 'Zambia'),
(252, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_details` text NOT NULL,
  `product_status` enum('Active','Inactive') NOT NULL,
  `product_created_on` datetime NOT NULL,
  `product_created_by` int(11) NOT NULL,
  `product_updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_updated_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_title`, `product_image`, `product_details`, `product_status`, `product_created_on`, `product_created_by`, `product_updated_on`, `product_updated_by`) VALUES
(1, 'Suji', 'PIMG_20160328110418.jpg', '&lt;h2 style="box-sizing:border-box;font-family:loveloblack;font-weight:500;line-height:1.1;color:#e74c3c;margin-top:20px;margin-bottom:10px;font-size:30px;font-style:normal;font-variant:normal;letter-spacing:normal;orphans:auto;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:1;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#ffffff;"&gt;সুজি (৫০০ গ্রাম)&lt;/h2&gt;&lt;p style="box-sizing:border-box;margin:0px 0px 10px;text-align:justify;font-size:14px;line-height:25px;color:#666666;font-family:Roboto, sans-serif;font-style:normal;font-variant:normal;font-weight:300;letter-spacing:normal;orphans:auto;text-indent:0px;text-transform:none;white-space:normal;widows:1;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#ffffff;"&gt;&amp;nbsp;বাছাইকৃত উন্নত গম থেকে প্রস্তুত&lt;/p&gt;&lt;p style="box-sizing:border-box;margin:0px 0px 10px;text-align:justify;font-size:14px;line-height:25px;color:#666666;font-family:Roboto, sans-serif;font-style:normal;font-variant:normal;font-weight:300;letter-spacing:normal;orphans:auto;text-indent:0px;text-transform:none;white-space:normal;widows:1;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#ffffff;"&gt;&amp;nbsp;অত্যাধুনিক স্বয়ংক্রিয় মেশিনে প্রক্রিয়াজাত&lt;/p&gt;&lt;p style="box-sizing:border-box;margin:0px 0px 10px;text-align:justify;font-size:14px;line-height:25px;color:#666666;font-family:Roboto, sans-serif;font-style:normal;font-variant:normal;font-weight:300;letter-spacing:normal;orphans:auto;text-indent:0px;text-transform:none;white-space:normal;widows:1;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#ffffff;"&gt;&amp;nbsp;সুইজারল্যান্ডের বুলার মেশিনে তৈরী ১০০%&lt;/p&gt;&lt;p style="box-sizing:border-box;margin:0px 0px 10px;text-align:justify;font-size:14px;line-height:25px;color:#666666;font-family:Roboto, sans-serif;font-style:normal;font-variant:normal;font-weight:300;letter-spacing:normal;orphans:auto;text-indent:0px;text-transform:none;white-space:normal;widows:1;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#ffffff;"&gt;&amp;nbsp;ভিটামিন , মিনারেল ও প্রোটিনসমৃদ্ধ&lt;/p&gt;&lt;p style="box-sizing:border-box;margin:0px 0px 10px;text-align:justify;font-size:14px;line-height:25px;color:#666666;font-family:Roboto, sans-serif;font-style:normal;font-variant:normal;font-weight:300;letter-spacing:normal;orphans:auto;text-indent:0px;text-transform:none;white-space:normal;widows:1;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#ffffff;"&gt;&amp;nbsp;উন্নত প্যাকেটে বাজারকৃত&lt;/p&gt;&lt;p style="border:0px;font-family:''Open Sans'', sans-serif;font-size:15.2316px;font-style:normal;font-weight:normal;margin:1em 0px;outline:0px;padding:0px;vertical-align:baseline;color:#666666;font-variant:normal;letter-spacing:normal;line-height:23.8927px;orphans:auto;text-indent:0px;text-transform:none;white-space:normal;widows:1;word-spacing:0px;-webkit-text-stroke-width:0px;text-align:left;background-color:#fcfcfc;"&gt;&lt;/p&gt;&lt;p style="border:0px;font-family:''Open Sans'', sans-serif;font-size:15.2316px;font-style:normal;font-weight:normal;margin:1em 0px 0px;outline:0px;padding:0px;vertical-align:baseline;color:#666666;font-variant:normal;letter-spacing:normal;line-height:23.8927px;orphans:auto;text-indent:0px;text-transform:none;white-space:normal;widows:1;word-spacing:0px;-webkit-text-stroke-width:0px;text-align:left;background-color:#fcfcfc;"&gt;&lt;/p&gt;', 'Active', '2016-03-28 11:04:18', 1, '2016-03-28 05:04:18', 0),
(2, 'Moyda', 'PIMG_20160328110916.jpg', '&lt;h2 style="box-sizing:border-box;font-family:loveloblack;font-weight:500;line-height:1.1;color:#e74c3c;margin-top:20px;margin-bottom:10px;font-size:30px;font-style:normal;font-variant:normal;letter-spacing:normal;orphans:auto;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:1;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#ffffff;"&gt;ময়দা (১ কেজি)&lt;/h2&gt;&lt;p style="box-sizing:border-box;margin:0px 0px 10px;text-align:justify;font-size:14px;line-height:25px;color:#666666;font-family:Roboto, sans-serif;font-style:normal;font-variant:normal;font-weight:300;letter-spacing:normal;orphans:auto;text-indent:0px;text-transform:none;white-space:normal;widows:1;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#ffffff;"&gt;&amp;nbsp;বাছাইকৃত উন্নত গম থেকে প্রস্তুত&lt;/p&gt;&lt;p style="box-sizing:border-box;margin:0px 0px 10px;text-align:justify;font-size:14px;line-height:25px;color:#666666;font-family:Roboto, sans-serif;font-style:normal;font-variant:normal;font-weight:300;letter-spacing:normal;orphans:auto;text-indent:0px;text-transform:none;white-space:normal;widows:1;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#ffffff;"&gt;&amp;nbsp;দেশের সর্ববৃহৎ অত্যাধুনিক স্বয়ংক্রিয় মেশিনে প্রক্রিয়াজাত&lt;/p&gt;&lt;p style="box-sizing:border-box;margin:0px 0px 10px;text-align:justify;font-size:14px;line-height:25px;color:#666666;font-family:Roboto, sans-serif;font-style:normal;font-variant:normal;font-weight:300;letter-spacing:normal;orphans:auto;text-indent:0px;text-transform:none;white-space:normal;widows:1;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#ffffff;"&gt;&amp;nbsp;সুইজারল্যান্ডের বুলার মেশিনে তৈরী ১০০%&lt;/p&gt;&lt;p style="box-sizing:border-box;margin:0px 0px 10px;text-align:justify;font-size:14px;line-height:25px;color:#666666;font-family:Roboto, sans-serif;font-style:normal;font-variant:normal;font-weight:300;letter-spacing:normal;orphans:auto;text-indent:0px;text-transform:none;white-space:normal;widows:1;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#ffffff;"&gt;&amp;nbsp;ভিটামিন , মিনারেল ও প্রোটিনসমৃদ্ধ&lt;/p&gt;&lt;p style="box-sizing:border-box;margin:0px 0px 10px;text-align:justify;font-size:14px;line-height:25px;color:#666666;font-family:Roboto, sans-serif;font-style:normal;font-variant:normal;font-weight:300;letter-spacing:normal;orphans:auto;text-indent:0px;text-transform:none;white-space:normal;widows:1;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#ffffff;"&gt;&amp;nbsp;উন্নত প্যাকেটে বাজারকৃত&lt;/p&gt;', 'Active', '2016-03-28 11:09:16', 1, '2016-03-28 05:09:16', 0),
(3, 'Atta', 'PIMG_20160328111042.jpg', '&lt;h2 style="box-sizing:border-box;font-family:loveloblack;font-weight:500;line-height:1.1;color:#e74c3c;margin-top:20px;margin-bottom:10px;font-size:30px;font-style:normal;font-variant:normal;letter-spacing:normal;orphans:auto;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:1;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#ffffff;"&gt;আটা (২ কেজি)&lt;/h2&gt;&lt;p style="box-sizing:border-box;margin:0px 0px 10px;text-align:justify;font-size:14px;line-height:25px;color:#666666;font-family:Roboto, sans-serif;font-style:normal;font-variant:normal;font-weight:300;letter-spacing:normal;orphans:auto;text-indent:0px;text-transform:none;white-space:normal;widows:1;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#ffffff;"&gt;&amp;nbsp;বাছাইকৃত উন্নত গম থেকে প্রস্তুত&lt;/p&gt;&lt;p style="box-sizing:border-box;margin:0px 0px 10px;text-align:justify;font-size:14px;line-height:25px;color:#666666;font-family:Roboto, sans-serif;font-style:normal;font-variant:normal;font-weight:300;letter-spacing:normal;orphans:auto;text-indent:0px;text-transform:none;white-space:normal;widows:1;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#ffffff;"&gt;&amp;nbsp;দেশের সর্ববৃহৎ অত্যাধুনিক স্বয়ংক্রিয় মেশিনে প্রক্রিয়াজাত&lt;/p&gt;&lt;p style="box-sizing:border-box;margin:0px 0px 10px;text-align:justify;font-size:14px;line-height:25px;color:#666666;font-family:Roboto, sans-serif;font-style:normal;font-variant:normal;font-weight:300;letter-spacing:normal;orphans:auto;text-indent:0px;text-transform:none;white-space:normal;widows:1;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#ffffff;"&gt;&amp;nbsp;সুইজারল্যান্ডের বুলার মেশিনে তৈরী ১০০%&lt;/p&gt;&lt;p style="box-sizing:border-box;margin:0px 0px 10px;text-align:justify;font-size:14px;line-height:25px;color:#666666;font-family:Roboto, sans-serif;font-style:normal;font-variant:normal;font-weight:300;letter-spacing:normal;orphans:auto;text-indent:0px;text-transform:none;white-space:normal;widows:1;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#ffffff;"&gt;&amp;nbsp;ভিটামিন , মিনারেল ও প্রোটিনসমৃদ্ধ&lt;/p&gt;&lt;p style="box-sizing:border-box;margin:0px 0px 10px;text-align:justify;font-size:14px;line-height:25px;color:#666666;font-family:Roboto, sans-serif;font-style:normal;font-variant:normal;font-weight:300;letter-spacing:normal;orphans:auto;text-indent:0px;text-transform:none;white-space:normal;widows:1;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#ffffff;"&gt;&amp;nbsp;উন্নত প্যাকেটে বাজারকৃত&lt;/p&gt;', 'Active', '2016-03-28 11:10:42', 1, '2016-03-28 05:10:42', 0),
(4, 'Onno', 'PIMG_20160328111139.jpg', '', 'Active', '2016-03-28 11:11:39', 1, '2016-03-28 05:11:39', 0),
(5, 'Waterbond Shipyard', 'PIMG_20160328111219.jpg', '', 'Active', '2016-03-28 11:12:19', 1, '2016-03-28 05:12:19', 0),
(6, 'Piran', 'PIMG_20160328111332.jpg', '', 'Active', '2016-03-28 11:13:32', 1, '2016-03-28 05:13:32', 0),
(7, 'Today''s Food', 'PIMG_20160328142713.jpg', '', 'Active', '2016-03-28 14:27:13', 1, '2016-03-28 08:27:13', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sister_concern`
--

CREATE TABLE IF NOT EXISTS `sister_concern` (
  `sister_concern_id` int(11) NOT NULL,
  `sister_concern_name` varchar(255) NOT NULL,
  `sister_concern_link` varchar(255) NOT NULL,
  `sister_concern_image` varchar(255) NOT NULL,
  `sister_concern_status` enum('Active','Inactive') NOT NULL,
  `sister_concern_created_by` int(11) NOT NULL,
  `sister_concern_created_on` datetime NOT NULL,
  `sister_concern_updated_by` int(11) NOT NULL,
  `sister_concern_updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sister_concern`
--

INSERT INTO `sister_concern` (`sister_concern_id`, `sister_concern_name`, `sister_concern_link`, `sister_concern_image`, `sister_concern_status`, `sister_concern_created_by`, `sister_concern_created_on`, `sister_concern_updated_by`, `sister_concern_updated_on`) VALUES
(1, 'Waterbond Shipyard', 'http://www.google.com', 'PIMG_20160328205401.jpg', 'Active', 1, '2016-03-28 20:54:01', 0, '2016-03-28 14:54:01'),
(2, 'Bidya Bhuvon', 'http://www.outlook.com', 'PIMG_20160328210200.jpg', 'Active', 1, '2016-03-28 21:02:00', 0, '2016-03-28 15:02:00'),
(3, 'Atnews BD', 'http://www.atnewsbd.com', 'PIMG_20160328210249.jpg', 'Active', 1, '2016-03-28 21:02:49', 1, '2016-03-28 15:17:35'),
(4, 'Angon', 'http://www.yahoo.com', 'PIMG_20160328211903.png', 'Active', 1, '2016-03-28 21:19:03', 1, '2016-03-28 16:04:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sister_concern`
--
ALTER TABLE `sister_concern`
  ADD PRIMARY KEY (`sister_concern_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=253;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sister_concern`
--
ALTER TABLE `sister_concern`
  MODIFY `sister_concern_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
