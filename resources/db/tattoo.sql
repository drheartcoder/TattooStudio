-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 21, 2019 at 07:08 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tattoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `admin_username` varchar(256) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `admin_password` varchar(256) NOT NULL,
  `admin_email` varchar(256) NOT NULL,
  `profile_picture` text NOT NULL,
  `admin_contactus` varchar(200) NOT NULL,
  `admin_fax` varchar(128) NOT NULL,
  `admin_address` text NOT NULL,
  `site_status` enum('1','0') NOT NULL,
  `admin_address2` varchar(255) NOT NULL,
  `admin_address3` varchar(255) NOT NULL,
  `admin_country` varchar(255) NOT NULL,
  `admin_state` varchar(255) NOT NULL,
  `admin_city` varchar(255) NOT NULL,
  `admin_postcode` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_username`, `first_name`, `last_name`, `admin_password`, `admin_email`, `profile_picture`, `admin_contactus`, `admin_fax`, `admin_address`, `site_status`, `admin_address2`, `admin_address3`, `admin_country`, `admin_state`, `admin_city`, `admin_postcode`) VALUES
(1, 'Admin', 'Rahul', 'Shinde', 'tattoo', 'yanikluis5@gmail.com', '7289.png', '3422111111', '21112121', 'The LINC, Institute of Technology Blanchardstown, Blanchardstown Road North, Dublin 15, Ireland', '1', '', '', 'India', 'Maharashtra', 'Nashik', '422010');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('e5f93126d4fa6a8ff563f5d37263ce27', '192.168.1.8', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:64.0) Gecko/20100101 Firefox/64.0', 1548150290, 'a:10:{s:9:\"user_data\";s:0:\"\";s:5:\"fname\";s:5:\"Imran\";s:5:\"lname\";s:4:\"Khan\";s:13:\"profile_image\";s:17:\"5b979ea471df1.jpg\";s:10:\"is_special\";s:2:\"NO\";s:7:\"user_id\";s:1:\"2\";s:8:\"email_id\";s:22:\"adolf.rebelo@gmail.com\";s:9:\"user_type\";s:1:\"2\";s:17:\"arr_business_info\";a:28:{s:11:\"business_id\";s:1:\"1\";s:10:\"fk_user_id\";s:1:\"2\";s:11:\"contact_way\";s:1:\"1\";s:11:\"up_to_miles\";N;s:13:\"business_name\";s:31:\"Bodytech Tattooing And Piercing\";s:14:\"business_phone\";N;s:15:\"business_mobile\";s:10:\"9923266699\";s:13:\"business_desc\";s:26:\"The Description Comes here\";s:13:\"business_logo\";s:10:\"165243.jpg\";s:7:\"website\";N;s:8:\"site_url\";N;s:13:\"facebook_link\";N;s:14:\"instagram_link\";N;s:12:\"twitter_link\";N;s:13:\"linkedin_link\";N;s:20:\"business_description\";N;s:19:\"business_attraction\";N;s:20:\"business_competition\";N;s:13:\"training_info\";N;s:10:\"avg_rating\";s:1:\"0\";s:17:\"accept_gift_cards\";s:3:\"YES\";s:14:\"business_email\";N;s:16:\"served_locations\";N;s:13:\"bank_acc_name\";s:10:\"Imran Khan\";s:12:\"bank_acc_num\";s:10:\"5900102340\";s:12:\"bank_aba_num\";s:8:\"21000021\";s:9:\"bank_name\";s:12:\" Zenith Bank\";s:12:\"bank_address\";s:11:\"North USAAA\";}s:11:\"business_id\";s:1:\"1\";}');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `status` enum('0','1') NOT NULL,
  `notification_date` date NOT NULL,
  `is_delete` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add_availibility`
--

CREATE TABLE `tbl_add_availibility` (
  `availibility_id` int(11) NOT NULL,
  `fk_business_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `day_of_week` enum('mon','tue','wed','thu','fri','sat','sun') NOT NULL,
  `date` date DEFAULT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('0','1') NOT NULL COMMENT '0-inactive,1-active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_add_availibility`
--

INSERT INTO `tbl_add_availibility` (`availibility_id`, `fk_business_id`, `staff_id`, `day_of_week`, `date`, `start_time`, `end_time`, `date_time`, `status`) VALUES
(1, 1, 1, 'wed', '2019-01-23', '09:00:00', '11:00:00', '2019-01-07 11:53:28', '1'),
(2, 1, 1, 'wed', '2019-01-23', '12:00:00', '16:00:00', '2019-01-07 11:53:50', '1'),
(3, 1, 1, 'fri', '2019-01-25', '11:00:00', '11:45:00', '2019-01-07 11:55:34', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_stripe_details`
--

CREATE TABLE `tbl_admin_stripe_details` (
  `stripe_id` int(11) NOT NULL,
  `stripe_live_api_key` varchar(255) NOT NULL,
  `stripe_live_public_api_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin_stripe_details`
--

INSERT INTO `tbl_admin_stripe_details` (`stripe_id`, `stripe_live_api_key`, `stripe_live_public_api_key`) VALUES
(1, 'sk_test_randomkey', 'pk_test_randomkey');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appoinment`
--

CREATE TABLE `tbl_appoinment` (
  `appoinment_id` int(11) NOT NULL,
  `deal_id` varchar(40) NOT NULL,
  `fk_user_id` int(10) NOT NULL COMMENT 'Who booked appointment',
  `fk_business_id` int(11) NOT NULL COMMENT 'of which business',
  `fk_business_service_id` int(11) NOT NULL COMMENT 'For which service',
  `fk_client_id` int(11) NOT NULL COMMENT 'If appointment booked by business for client',
  `fk_location_id` int(10) NOT NULL,
  `fk_staff_id` text NOT NULL,
  `fk_package_id` int(11) NOT NULL,
  `service_cost` varchar(100) NOT NULL,
  `total_cost` varchar(128) NOT NULL,
  `apt_date` date NOT NULL,
  `apt_time` time NOT NULL,
  `end_apt_time` time NOT NULL,
  `cancel_time` timestamp NULL DEFAULT NULL,
  `apt_note` text NOT NULL,
  `medical_condition` enum('0','1') NOT NULL DEFAULT '0',
  `medical_description` text NOT NULL,
  `card_token` varchar(128) NOT NULL,
  `transaction_ref_token` varchar(128) NOT NULL,
  `transaction_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `transaction_correlation_id` varchar(255) NOT NULL,
  `apt_repeat_status` enum('0','1','2','3','4','5') NOT NULL DEFAULT '0' COMMENT '0-Do not repeat , 1-Daily , 2-Weekly, 3-Every 2 Weeks , 4-Every 4 Weeks, 5-More options',
  `apt_repeat_more_count` enum('1','2','3','4','5','6','7','8','9','10','11','12') DEFAULT NULL,
  `apt_repeat_more_type` enum('DAYS','WEEKS','MONTHS') DEFAULT NULL,
  `apt_repeat_end` enum('YES','NO') NOT NULL DEFAULT 'NO',
  `apt_repeat_end_date` varchar(100) DEFAULT NULL,
  `apt_status` enum('CANCEL','COMPLETED','PENDING','BOOKED','DELETED') NOT NULL,
  `payment_status` enum('1','0') NOT NULL DEFAULT '1',
  `confirmed_status` enum('1','0') NOT NULL DEFAULT '1',
  `refTransactionId` varchar(120) NOT NULL,
  `refTransactionDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `refAmount` varchar(100) NOT NULL,
  `is_recurring` enum('1','0') NOT NULL DEFAULT '0',
  `recurring_parent` int(11) NOT NULL DEFAULT '0',
  `recurring_data` text NOT NULL,
  `fk_location_hours_id` int(11) NOT NULL,
  `is_present` enum('YES','NO') NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_automated_event`
--

CREATE TABLE `tbl_automated_event` (
  `event_type_id` int(10) NOT NULL,
  `event_category_name` varchar(255) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_sub_title` varchar(255) NOT NULL,
  `message_body_one` varchar(510) NOT NULL,
  `message_body_two` varchar(510) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_automated_message`
--

CREATE TABLE `tbl_automated_message` (
  `auto_id` int(10) NOT NULL,
  `fk_event_id` int(10) NOT NULL COMMENT 'type of event',
  `event_category_name` varchar(255) NOT NULL,
  `message_name` varchar(255) NOT NULL,
  `fk_user_id` int(10) NOT NULL,
  `fk_business_id` int(10) NOT NULL,
  `reply_name` varchar(255) NOT NULL,
  `reply_email` varchar(255) NOT NULL,
  `message_body_one` varchar(510) NOT NULL,
  `message_body_two` varchar(510) NOT NULL,
  `text_message` varchar(500) NOT NULL,
  `default_send_type` enum('Email','Text_message') NOT NULL,
  `subject` varchar(255) NOT NULL,
  `status` enum('ACTIVE','DEACTIVE') NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner_master`
--

CREATE TABLE `tbl_banner_master` (
  `banner_id` int(11) NOT NULL,
  `banner_title` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `banner_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_banner_master`
--

INSERT INTO `tbl_banner_master` (`banner_id`, `banner_title`, `banner_image`, `banner_order`) VALUES
(12, 'slider-3', '5228.jpg', 3),
(13, 'slider-1', '2528.jpg', 2),
(14, 'Tattoo Girl', '1341.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog_master`
--

CREATE TABLE `tbl_blog_master` (
  `blog_id` int(11) NOT NULL,
  `blog_title` text NOT NULL,
  `blog_description` text NOT NULL,
  `blog_status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `walkin_id` int(11) DEFAULT NULL,
  `booking_type` enum('online','walk in') NOT NULL,
  `business_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `tattoo_id` int(11) DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `availibility_id` int(11) DEFAULT NULL,
  `booking_no` varchar(255) DEFAULT NULL,
  `booking_date` date DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `service_name` varchar(255) DEFAULT NULL,
  `service_price` int(11) DEFAULT NULL,
  `esitmated_amount` int(11) DEFAULT NULL,
  `booking_status` set('0','1','2','3','4','5','6','7','8','9') NOT NULL COMMENT '0=nothing,1=New,2=Payment Paid,3=Pending,4=Cancelled,5=Completed,6=Refund,7=Refund Pending,8=Re-Schedule Request,9=Re-Schedule',
  `cancellation_reason` text NOT NULL,
  `reschedule_reason` text NOT NULL,
  `is_refunded` enum('0','1') NOT NULL DEFAULT '0',
  `walkin_status` enum('0','1','2','3','4') NOT NULL DEFAULT '0' COMMENT '0=nothing,1=New,2=Payment Paid,3=Payment Pending,4=Completed',
  `reference_tattoo` varchar(255) DEFAULT NULL,
  `previous_tattoo_img` varchar(255) DEFAULT NULL,
  `cover_up` varchar(255) DEFAULT NULL,
  `booking_desc` varchar(255) DEFAULT NULL,
  `medical_condition` enum('0','1') NOT NULL DEFAULT '0',
  `medical_description` text,
  `payment_method` varchar(255) DEFAULT NULL,
  `admin_seen_status` enum('0','1') NOT NULL DEFAULT '0',
  `incremental_value` int(11) DEFAULT NULL,
  `db_insert_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `txn_id` varchar(220) DEFAULT NULL,
  `balance_transaction` varchar(220) DEFAULT NULL,
  `stripeResponse` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`id`, `user_id`, `walkin_id`, `booking_type`, `business_id`, `service_id`, `tattoo_id`, `start_time`, `end_time`, `availibility_id`, `booking_no`, `booking_date`, `staff_id`, `service_name`, `service_price`, `esitmated_amount`, `booking_status`, `cancellation_reason`, `reschedule_reason`, `is_refunded`, `walkin_status`, `reference_tattoo`, `previous_tattoo_img`, `cover_up`, `booking_desc`, `medical_condition`, `medical_description`, `payment_method`, `admin_seen_status`, `incremental_value`, `db_insert_date`, `txn_id`, `balance_transaction`, `stripeResponse`) VALUES
(1, 5, NULL, 'online', 1, 0, 1, '09:00:00', '09:35:00', NULL, 'BID20191801', '2019-01-23', 1, '20', 68, NULL, '2', '', '', '0', '0', NULL, NULL, NULL, 'asdasdasd', '0', '', NULL, '0', 1801, '2019-01-07 11:54:51', 'ch_1Dpwgw4Tucnt6y0wthL10JBo', 'txn_1Dpwgw4Tucnt6y0w9DpHzLA1', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1Dpwgw4Tucnt6y0wthL10JBo\",\"object\":\"charge\",\"amount\":6800,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1Dpwgw4Tucnt6y0w9DpHzLA1\",\"captured\":true,\"created\":1546862090,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"payment_intent\":null,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}'),
(3, 5, NULL, 'online', 1, 0, 1, '11:00:00', '11:35:00', NULL, 'BID20191802', '2019-01-25', 1, '20', 68, NULL, '2', '', '', '0', '0', NULL, NULL, NULL, 'asdasdas', '0', '', NULL, '0', 1802, '2019-01-07 13:31:23', 'ch_1DpyCM4Tucnt6y0whKttJshJ', 'txn_1DpyCM4Tucnt6y0w0dItqvRz', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1DpyCM4Tucnt6y0whKttJshJ\",\"object\":\"charge\",\"amount\":6800,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1DpyCM4Tucnt6y0w0dItqvRz\",\"captured\":true,\"created\":1546867882,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"payment_intent\":null,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_businessuser_promocode`
--

CREATE TABLE `tbl_businessuser_promocode` (
  `promo_id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL,
  `promo_code` varchar(128) NOT NULL,
  `promo_nickname` varchar(128) NOT NULL,
  `promo_discount` int(11) NOT NULL,
  `discount_type` enum('1','2') NOT NULL COMMENT '1=>$,2=>%',
  `promo_start_date` date NOT NULL,
  `promo_end_date` date NOT NULL,
  `one_use` varchar(128) DEFAULT NULL,
  `new_client` varchar(128) DEFAULT NULL,
  `promo_location` varchar(128) NOT NULL,
  `promo_staff` varchar(128) NOT NULL,
  `promo_services` varchar(255) NOT NULL,
  `promocode_status` enum('AVAILABLE','USED','EXPIRED') DEFAULT 'AVAILABLE' COMMENT '''AVALABLE'',''USED'',''EXPIED''',
  `fk_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_business_cover_information`
--

CREATE TABLE `tbl_business_cover_information` (
  `cover_id` int(11) NOT NULL,
  `fk_business_id` int(11) NOT NULL,
  `cover_photo` varchar(255) NOT NULL,
  `text_one` text NOT NULL,
  `text_two` text NOT NULL,
  `text_three` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_business_information`
--

CREATE TABLE `tbl_business_information` (
  `business_id` int(10) NOT NULL,
  `fk_user_id` int(4) NOT NULL,
  `contact_way` enum('1','2','3') DEFAULT '1' COMMENT '1 = customer travel to me , 2= I travel to customer, 3 =cust. travel to me and I travel to them',
  `up_to_miles` int(3) DEFAULT NULL,
  `business_name` varchar(50) NOT NULL COMMENT 'Business Name',
  `business_phone` varchar(20) DEFAULT NULL COMMENT 'Business Phone Number',
  `business_mobile` varchar(20) DEFAULT NULL COMMENT 'Business MobileNumber',
  `business_desc` text,
  `business_logo` varchar(100) DEFAULT NULL COMMENT 'Business Logo',
  `website` varchar(50) DEFAULT NULL COMMENT 'Business Website',
  `site_url` varchar(50) DEFAULT NULL COMMENT 'Site Url (eg. example.erezervo.com)',
  `facebook_link` varchar(50) DEFAULT NULL COMMENT 'Facebook Link',
  `instagram_link` varchar(50) DEFAULT NULL COMMENT 'Instagram Link',
  `twitter_link` varchar(50) DEFAULT NULL COMMENT 'Twitter Link',
  `linkedin_link` varchar(50) DEFAULT NULL COMMENT 'Linked In Link',
  `business_description` text COMMENT 'Please describe your business',
  `business_attraction` varchar(500) DEFAULT NULL COMMENT 'Why do you love what you do?',
  `business_competition` varchar(500) DEFAULT NULL COMMENT 'What differentiates you from the competition?',
  `training_info` varchar(500) DEFAULT NULL COMMENT 'Where did you receive your training?',
  `avg_rating` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'Average Rating ',
  `accept_gift_cards` enum('YES','NO') NOT NULL DEFAULT 'YES' COMMENT 'Accept Gift Cards(YES/NO)',
  `business_email` varchar(255) DEFAULT NULL,
  `served_locations` text,
  `bank_acc_name` varchar(120) NOT NULL COMMENT 'Business Bank Acount Holder Name',
  `bank_acc_num` varchar(16) DEFAULT NULL COMMENT 'Business Bank Account Number',
  `bank_aba_num` int(9) NOT NULL COMMENT 'Business ABA (American Bankers Association) Number',
  `bank_name` varchar(120) NOT NULL COMMENT 'Business Bank Name',
  `bank_address` text NOT NULL COMMENT 'Business Bank Address'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_business_information`
--

INSERT INTO `tbl_business_information` (`business_id`, `fk_user_id`, `contact_way`, `up_to_miles`, `business_name`, `business_phone`, `business_mobile`, `business_desc`, `business_logo`, `website`, `site_url`, `facebook_link`, `instagram_link`, `twitter_link`, `linkedin_link`, `business_description`, `business_attraction`, `business_competition`, `training_info`, `avg_rating`, `accept_gift_cards`, `business_email`, `served_locations`, `bank_acc_name`, `bank_acc_num`, `bank_aba_num`, `bank_name`, `bank_address`) VALUES
(1, 2, '1', NULL, 'Bodytech Tattooing And Piercing', NULL, '9923266699', 'The Description Comes here', '165243.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'YES', NULL, NULL, 'Imran Khan', '5900102340', 21000021, ' Zenith Bank', 'North USAAA'),
(2, 4, '1', NULL, 'Royal Studio', NULL, '8989898989', 'Royal studio Royal studioRoyal studio   Royal studioRoyal studioRoyal studioRoyal studioRoyal studioRoyal studioRoyal studioRoyal studioRoyal studioRoyal studioRoyal studioRoyal studioRoyal studio Royal studio Royal studioRoyal studio   Royal studioRoyal studioRoyal studioRoyal studioRoyal studioRoyal studioRoyal studioRoyal studioRoyal studioRoyal studioRoyal studioRoyal studioRoyal studio', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'YES', NULL, NULL, '', '', 0, '', ''),
(3, 6, '1', NULL, ' Deesan studio', NULL, '8989898989', 'Hefdfd dfkdfjldfsdfsf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'YES', NULL, NULL, '', '', 0, '', ''),
(4, 9, '1', NULL, ' Adolf Studio ', NULL, '8888230299', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'lion-tattoo.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'YES', NULL, NULL, '', '', 0, '', ''),
(5, 12, '1', NULL, ' INKredible Tattoos', NULL, '8520147963', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,', 'inkredible-tattoo-new.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'YES', NULL, NULL, '', NULL, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_business_labes`
--

CREATE TABLE `tbl_business_labes` (
  `id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `label_name` varchar(255) NOT NULL,
  `fk_business_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_business_locations`
--

CREATE TABLE `tbl_business_locations` (
  `location_id` int(10) NOT NULL,
  `fk_business_id` int(10) NOT NULL COMMENT 'Foreign Key user_Id',
  `travel_to_customer` enum('YES','NO') NOT NULL DEFAULT 'NO' COMMENT 'YES or NO',
  `giolocation` text NOT NULL,
  `street_address` varchar(50) NOT NULL,
  `street_address2` varchar(50) DEFAULT NULL,
  `street_address3` varchar(255) DEFAULT NULL,
  `city` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `district` varchar(20) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `zip` varchar(15) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `ada_accessible` enum('YES','NO') DEFAULT NULL COMMENT 'for information goto www.ADA.gov',
  `parking` varchar(50) DEFAULT NULL COMMENT 'Parking',
  `language` varchar(50) DEFAULT NULL COMMENT 'Language Spoken',
  `location_detail` varchar(500) DEFAULT NULL COMMENT 'Note to customers about this location',
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `is_active` enum('0','1') DEFAULT NULL,
  `event_conduct` text,
  `service_conduct` text,
  `staff_conduct` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_business_locations`
--

INSERT INTO `tbl_business_locations` (`location_id`, `fk_business_id`, `travel_to_customer`, `giolocation`, `street_address`, `street_address2`, `street_address3`, `city`, `district`, `country`, `zip`, `phone`, `ada_accessible`, `parking`, `language`, `location_detail`, `latitude`, `longitude`, `is_active`, `event_conduct`, `service_conduct`, `staff_conduct`) VALUES
(1, 1, 'NO', '806 W University Ave, Gainesville, FL 32601, USA', '806 W University Ave, Gainesville, FL 32601, USA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 29.6522245, -82.33318930000002, NULL, NULL, NULL, NULL),
(2, 3, 'NO', 'Pune, Maharashtra, India', 'Shirpur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 18.5204303, 73.85674369999992, NULL, NULL, NULL, NULL),
(3, 5, 'NO', '', 'NCH Kanjurmarg, Mulund, Mumbai.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_business_mailing_address`
--

CREATE TABLE `tbl_business_mailing_address` (
  `mailing_id` int(10) NOT NULL,
  `fk_business_id` int(10) NOT NULL COMMENT 'foreign key business id',
  `recipient_name` varchar(50) NOT NULL,
  `giolocation` varchar(255) NOT NULL,
  `street_address` varchar(100) NOT NULL,
  `street_address2` varchar(100) NOT NULL,
  `street_address3` varchar(255) NOT NULL,
  `city` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `zip` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_business_photos`
--

CREATE TABLE `tbl_business_photos` (
  `photo_id` int(10) NOT NULL,
  `fk_business_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_business_photos`
--

INSERT INTO `tbl_business_photos` (`photo_id`, `fk_business_id`, `name`, `photo_name`) VALUES
(1, 2, 'Neha', '3417121d699f4840adc565a1f4eef174.jpg'),
(2, 1, 'A', '25a9b1c79c90b86717928120ad5ac72f.jpeg'),
(3, 1, 'B', 'c6744b10df54ea849aedf8ea6871f222.jpg'),
(4, 1, 'C', '48b8b0c49f99469092974c570f404c9a.jpg'),
(5, 3, 'Vinod', '9cf8b2c8f8fcf903f08e00194e6c13d3.jpg'),
(6, 1, 'Josh', '0bdf16a1b902ec62f0babaac080d1721.png'),
(7, 1, 'BlackBack', '8b4cc01dfb8c1a3f225bcb48ec10fc41.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_business_settings`
--

CREATE TABLE `tbl_business_settings` (
  `settings_id` int(11) NOT NULL,
  `fk_business_id` int(4) NOT NULL,
  `calender_system` enum('1') NOT NULL COMMENT 'Calendar System 1- Default ',
  `booking_time_interval` enum('1','2','3','4') NOT NULL DEFAULT '1' COMMENT 'Customers can book on the  1- hour 2- :30 and hours 3- :15 :30 :45 and hour 4-  :20 :40 and hour ',
  `advance_marketplace_notice` int(10) NOT NULL COMMENT 'Advance notice required for marketplace bookings ',
  `advance_booking_time` int(2) NOT NULL COMMENT ' How far in advance can clients book - Number',
  `advance_booking_time_type` enum('DAYS','WEEKS','MONTHS') NOT NULL DEFAULT 'WEEKS' COMMENT ' How far in advance can clients book - (WEEKS,MONTHS)',
  `booking_entity` enum('BOTH','NEW') NOT NULL DEFAULT 'BOTH' COMMENT 'Who can book you online (BOTH/NEW)',
  `booking_auto_accept` enum('YES','NO') NOT NULL DEFAULT 'NO' COMMENT 'Automatically accept marketplace bookings (YES/NO)',
  `marketplace_booking_email` varchar(255) NOT NULL,
  `marketplace_booking_call_no` varchar(50) NOT NULL,
  `marketplace_booking_text_no` varchar(50) NOT NULL,
  `cancel_time` enum('0','1','2','3','4','5','6','7') NOT NULL DEFAULT '0' COMMENT 'Cancelation Time [0 - Anytime, 1 - 7 Days]',
  `communicator_options` enum('YES','NO') NOT NULL DEFAULT 'NO' COMMENT 'Serialize Option',
  `direct_staff_member_booking` enum('YES','NO') NOT NULL DEFAULT 'NO' COMMENT 'Direct Staff Booking (YES/NO) ',
  `price_vary_by_location` enum('YES','NO') NOT NULL DEFAULT 'NO' COMMENT 'Price Vary by location (YES/NO)',
  `scheduler_access_level` enum('OPEN','RESTRICTED') NOT NULL,
  `track_compensation` enum('YES','NO') NOT NULL,
  `clock_in_out` enum('YES','NO') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_business_staff`
--

CREATE TABLE `tbl_business_staff` (
  `staff_id` int(11) NOT NULL COMMENT 'Staff id ',
  `fk_business_id` int(11) NOT NULL,
  `staff_profile_img` varchar(255) DEFAULT NULL COMMENT 'Staff Profile Img',
  `staff_tattoo_img` text,
  `staff_name` varchar(255) NOT NULL COMMENT 'Staff name',
  `staff_lname` varchar(200) NOT NULL,
  `staff_title` varchar(255) DEFAULT NULL COMMENT 'Staff title',
  `staff_email` varchar(255) DEFAULT NULL COMMENT 'Staff email',
  `staff_insta_link` varchar(150) NOT NULL,
  `available_days` varchar(255) DEFAULT NULL,
  `staff_role` tinytext NOT NULL COMMENT 'json encoded array OW- Owner, SP- Service Provide, LM - Location Manager',
  `staff_status` enum('Active','Block') NOT NULL DEFAULT 'Active',
  `managed_location` text CHARACTER SET utf8 COMMENT 'if staff role = location manager, then all managing location stored in json array',
  `served_locations` text CHARACTER SET utf8 COMMENT 'json encoded array of location served by staff',
  `track_compensation` enum('YES','NO') NOT NULL DEFAULT 'NO' COMMENT 'Track Compensation ',
  `regular_pay_per_hour_amt` double(10,2) DEFAULT NULL COMMENT 'Regular Pay In Amt ',
  `regular_percent_revenue` double(10,2) DEFAULT NULL COMMENT 'Regular Pay In Percent ',
  `overtime_pay_per_hour_amt` double(10,2) DEFAULT NULL COMMENT 'Overtime pay In Amt ',
  `overtime_percent_revenue` double(10,2) DEFAULT NULL COMMENT 'Overtime pay  In Percent ',
  `email_me` varchar(255) DEFAULT NULL,
  `call_me` varchar(50) DEFAULT NULL,
  `text_me` varchar(50) DEFAULT NULL,
  `about_me_point_1` text COMMENT 'What makes you different ?',
  `about_me_point_2` text COMMENT 'Where did you receive your training?',
  `services_served` text CHARACTER SET utf8 COMMENT 'json_encode array of service id of  Service Served',
  `is_delete` enum('0','1') NOT NULL,
  `staff_birthdate` date DEFAULT NULL,
  `staff_contact_number` varchar(11) DEFAULT NULL,
  `staff_password` varchar(255) DEFAULT NULL,
  `events_served` text,
  `confirm_code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_business_staff`
--

INSERT INTO `tbl_business_staff` (`staff_id`, `fk_business_id`, `staff_profile_img`, `staff_tattoo_img`, `staff_name`, `staff_lname`, `staff_title`, `staff_email`, `staff_insta_link`, `available_days`, `staff_role`, `staff_status`, `managed_location`, `served_locations`, `track_compensation`, `regular_pay_per_hour_amt`, `regular_percent_revenue`, `overtime_pay_per_hour_amt`, `overtime_percent_revenue`, `email_me`, `call_me`, `text_me`, `about_me_point_1`, `about_me_point_2`, `services_served`, `is_delete`, `staff_birthdate`, `staff_contact_number`, `staff_password`, `events_served`, `confirm_code`) VALUES
(1, 1, '5c0a685a01de2.jpg', NULL, 'Imran', 'Khan', 'Owner', 'imran@webwingtechnologies.com', 'https://www.instagram.com/', NULL, '[\"OW\"]', 'Active', NULL, NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL),
(2, 2, NULL, NULL, 'Vrajesh', 'Pandey', 'Owner', 'wucijinoyi@bit-degree.com', '', NULL, '[\"OW\"]', 'Active', NULL, NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL),
(3, 1, '5c0a67ae86e8c.jpg', '', 'Mahesh', 'Naidoo', NULL, 'mahesh.naidoo@webwing.com', '', NULL, '', 'Active', NULL, NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL),
(4, 3, '5b98ea42bcf88.jpeg', NULL, 'Sagar', 'pawar', 'Owner', 'zefamum@1shivom.com', '', NULL, '[\"OW\"]', 'Active', NULL, NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL),
(5, 3, '5b98ea42bcf88.jpeg', '', 'Dharmendra', 'Pawar', NULL, 'dhrmendra@gmail.com', '', NULL, '', 'Active', NULL, NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL),
(6, 4, '5b9f6e50ae605.jpg', NULL, 'Adolf', 'rebelo', 'Owner', 'adolf.rebelo@gmail.com', '', NULL, '[\"OW\"]', 'Active', NULL, NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL),
(7, 1, '5c0a68865e765.jpg', '', 'Mike', 'Rubendall', NULL, 'mikeRubendall@testmail.com', '', NULL, '', 'Active', NULL, NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL),
(8, 5, NULL, NULL, 'Vrajesh', 'Pandya', 'Owner', 'yanikluis5@gmail.com', '', NULL, '[\"OW\"]', 'Active', NULL, NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL),
(9, 1, '5c46ead6eb6a1.jpg', '', 'Amit', 'Shah', NULL, 'amitshah@mailinator.com', 'https://www.instagram.com/', NULL, '', 'Active', NULL, NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_business_videos`
--

CREATE TABLE `tbl_business_videos` (
  `video_id` int(11) NOT NULL,
  `fk_business_id` int(10) NOT NULL,
  `fk_staff_id` int(11) NOT NULL,
  `video_name` varchar(50) NOT NULL,
  `video_status` set('1','0') NOT NULL DEFAULT '0' COMMENT '1:public ,0:private'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_business_videos`
--

INSERT INTO `tbl_business_videos` (`video_id`, `fk_business_id`, `fk_staff_id`, `video_name`, `video_status`) VALUES
(1, 1, 0, '838c0a30acf548c995aa4c26e8a477ad.mp4', '0'),
(2, 1, 0, '731566b1ade63fdc16ee321be12dfb0e.mp4', '0'),
(3, 1, 0, 'b841320c6bd356deca4f63fa85fe925f.mp4', '0'),
(4, 1, 0, '867ed7626185d55ee390137f3e7a5c94.mp4', '0'),
(5, 1, 0, '8ea20c566cbdca4c4890f5916f5b19fe.mp4', '0'),
(6, 1, 0, 'a964e7fad59896574a3e6168c353ba2b.mp4', '0'),
(7, 1, 0, '1b0382fc1f9ccac823d56ac38c2189ea.mp4', '0'),
(8, 1, 0, '744d62ce216e49ab62a7b097bd677d2c.mp4', '0'),
(9, 1, 0, '9125878ce5e3711aa1166558f8464966.mp4', '0'),
(10, 1, 0, 'bd025ba510890d7dcb8744c23c23c8a2.mp4', '0'),
(11, 1, 0, '673505de4369002d380a9725c13e23c8.mp4', '0'),
(13, 1, 0, 'a3a753116f60d654330fe723b5650976.mp4', '0'),
(14, 1, 0, '9623c7764e1795b140a37449ea47396c.mp4', '0'),
(15, 1, 0, '95a3b6bf801d64e5c08d46dc6640d12e.mp4', '0'),
(16, 1, 0, '49da0e0a8d1532b337672ecb9e59b317.mp4', '0'),
(17, 1, 0, '67e8ef9344f7ff85dc77d2f635bf4f95.mp4', '0'),
(18, 1, 0, 'a8b350fd9356b9933cde86a02562a63e.mp4', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_business_view`
--

CREATE TABLE `tbl_business_view` (
  `view_id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `view_count` int(11) NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_campaign_default`
--

CREATE TABLE `tbl_campaign_default` (
  `campaign_id` int(10) NOT NULL,
  `category` varchar(150) NOT NULL,
  `campaign_name` varchar(150) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `subject_default` text NOT NULL,
  `campaign_body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_campaign_scheduler`
--

CREATE TABLE `tbl_campaign_scheduler` (
  `scheduler_id` int(11) NOT NULL,
  `uniq_tracker_id` varchar(50) NOT NULL,
  `fk_business_id` int(11) NOT NULL,
  `type` enum('SENT','SCHEDULED') NOT NULL,
  `client_id` text NOT NULL,
  `template_id` int(11) NOT NULL,
  `template_name` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `message_body` text NOT NULL,
  `schedule_date` date NOT NULL,
  `schedule_time` time NOT NULL,
  `sent_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `reply_to_name` varchar(255) NOT NULL,
  `reply_to_email` varchar(255) NOT NULL,
  `opened` text NOT NULL,
  `booked` text NOT NULL,
  `bounced` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_campaign_templates`
--

CREATE TABLE `tbl_campaign_templates` (
  `template_id` int(10) NOT NULL,
  `campaign_id` int(10) NOT NULL,
  `fk_business_id` int(10) NOT NULL,
  `template_name` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message_body` longtext NOT NULL,
  `reply_to_name` varchar(100) NOT NULL,
  `reply_to_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cancel_and_refund`
--

CREATE TABLE `tbl_cancel_and_refund` (
  `refund_id` int(11) NOT NULL,
  `fk_business_id` int(11) NOT NULL,
  `fk_business_user_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `fk_cancel_appointment_id` int(11) NOT NULL,
  `refund_amount` double NOT NULL,
  `is_refund` enum('YES','NO') NOT NULL,
  `cancel_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `refund_done_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_card_type`
--

CREATE TABLE `tbl_card_type` (
  `id` int(11) NOT NULL,
  `card_type` varchar(255) NOT NULL,
  `card_logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL,
  `category_slug` varchar(30) NOT NULL,
  `tattoo_commission` int(11) NOT NULL,
  `custom_tattoo_commission` int(11) NOT NULL,
  `deposit_amount` int(11) NOT NULL,
  `cat_logo` varchar(500) NOT NULL,
  `category_status` enum('Active','Block') NOT NULL,
  `is_delete` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0 => no deleted , 1 => deleted'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_slug`, `tattoo_commission`, `custom_tattoo_commission`, `deposit_amount`, `cat_logo`, `category_status`, `is_delete`) VALUES
(1, 'Face', 'face', 0, 10, 20, 'cat_face.jpg', 'Active', '0'),
(2, 'leg', 'leg', 10, 10, 0, 'cat_leg.jpg', 'Active', '0'),
(3, 'hand', 'hand', 0, 0, 10, 'cat_hand.jpg', 'Active', '0'),
(4, 'Abcd', 'abcd', 0, 0, 0, 'cat_977738df4d25478b62a2f38dd8613779--odilon-redon.jpg', 'Active', '1'),
(5, 'dfsd', 'dfsd', 0, 0, 0, 'cat_cranbrook-flower-garden-nature-tour-JQT-270x300.jpg', 'Active', '1'),
(6, 'Back', 'back', 0, 0, 0, '5c0a626fdc96f.jpg', 'Active', '0'),
(7, 'Arms', 'arms', 10, 10, 0, 'cat_est-1993-tattoo-arm-12-6a033952ab5890e0d9b64163e82f41cd-death-moth-r-tattoo-jpg-270x300.jpg', 'Active', '0'),
(8, 'Chest', 'chest', 20, 15, 0, 'cat_3D-compass-tattoo-male-inner-biceps.jpg', 'Block', '1'),
(9, 'Forhead', 'forhead', 50, 20, 0, 'cat_Koala.jpg', 'Active', '1'),
(10, 'Forehead', 'forehead', 10, 10, 0, 'cat_Koala1.jpg', 'Active', '0'),
(11, 'Chest', 'chest', 10, 10, 20, 'cat_Jellyfish.jpg', 'Active', '0'),
(12, 'Shoulder', 'shoulder', 0, 0, 10, 'cat_shoulder_tattoo.jpg', 'Block', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cc_data`
--

CREATE TABLE `tbl_cc_data` (
  `cc_data_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL COMMENT 'Fk user id ',
  `cc_end_number` varchar(10) NOT NULL COMMENT 'Last 4 digitis of Credit Card',
  `data` text NOT NULL COMMENT 'Secured Serialized Array (cc_name, cc_number, cc_expiry_month, cc_expiry_year, cc_security_code, cc_billing_address, cc_city, cc_state, cc_zipcode)',
  `is_active` enum('YES','NO') NOT NULL DEFAULT 'NO' COMMENT 'YES/NO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chat`
--

CREATE TABLE `tbl_chat` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `is_read` enum('0','1') NOT NULL COMMENT '0-unread,1-read',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_chat`
--

INSERT INTO `tbl_chat` (`id`, `sender_id`, `receiver_id`, `message`, `is_read`, `created_at`) VALUES
(1, 5, 2, 'hello', '1', '2018-09-12 06:28:42'),
(2, 1, 2, 'Hi', '1', '2018-09-12 08:37:31'),
(3, 1, 2, 'What\'s up?', '1', '2018-09-12 08:38:38'),
(4, 7, 6, 'Hi', '1', '2018-09-12 09:27:40'),
(5, 6, 7, 'Hello', '1', '2018-09-12 10:22:39'),
(6, 2, 5, 'hi', '0', '2018-09-13 18:52:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `client_id` int(11) NOT NULL,
  `fk_business_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL COMMENT '(from tbl_user_master)',
  `fname` varchar(25) DEFAULT NULL COMMENT 'First Name',
  `lname` varchar(25) DEFAULT NULL COMMENT 'Last Name',
  `email` varchar(255) DEFAULT NULL,
  `mobile_phone` varchar(16) DEFAULT NULL,
  `home_phone` varchar(16) DEFAULT NULL,
  `work_phone` varchar(16) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `client_since` date NOT NULL COMMENT 'Client Since to This Business',
  `fk_location_id` int(11) NOT NULL,
  `fk_staff_id` int(11) NOT NULL,
  `contact_preference` varchar(20) NOT NULL,
  `date_of_birth` datetime NOT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `is_booking` enum('YES','NO') NOT NULL COMMENT 'check that this user able to book this business online or not',
  `client_notes` varchar(250) NOT NULL,
  `edited_on` datetime NOT NULL,
  `is_delete` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client_address`
--

CREATE TABLE `tbl_client_address` (
  `client_address_id` int(11) NOT NULL,
  `fk_client_id` int(11) NOT NULL,
  `street_address_1` varchar(200) NOT NULL,
  `street_address_2` varchar(200) NOT NULL,
  `street_address_3` varchar(255) NOT NULL,
  `country` varchar(15) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(15) NOT NULL,
  `zip` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client_custom_price`
--

CREATE TABLE `tbl_client_custom_price` (
  `custom_price_id` int(11) NOT NULL,
  `fk_client_id` int(11) NOT NULL,
  `fk_service_menu_id` int(11) NOT NULL,
  `fk_staff_id` int(11) NOT NULL,
  `custom_price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client_label`
--

CREATE TABLE `tbl_client_label` (
  `label_id` int(11) NOT NULL,
  `fk_client_id` int(11) NOT NULL,
  `label_name` varchar(50) NOT NULL,
  `fk_business_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_color`
--

CREATE TABLE `tbl_color` (
  `color_id` int(11) NOT NULL,
  `color_name` varchar(30) NOT NULL,
  `color_slug` varchar(30) NOT NULL,
  `color_status` enum('Active','Block') NOT NULL,
  `is_delete` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0 => no deleted , 1 => deleted'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_color`
--

INSERT INTO `tbl_color` (`color_id`, `color_name`, `color_slug`, `color_status`, `is_delete`) VALUES
(1, '#34334', '34334', 'Active', '1'),
(2, 'RAWAN', 'rawan', 'Block', '1'),
(3, 'asdfds dfds df232', 'asdfds-dfds-df232', 'Block', '1'),
(4, 'dfdsdsf', 'dfdsdsf', 'Active', '1'),
(5, 'Red', 'red', 'Active', '0'),
(6, 'Blue', 'blue', 'Block', '0'),
(7, 'Brown', 'brown', 'Active', '0'),
(8, 'Black', 'black', 'Active', '0'),
(9, 'Green', '', 'Active', '0'),
(10, 'Gray', 'gray', 'Active', '0'),
(11, 'Violet', 'violet', 'Active', '0'),
(12, 'Navy Blue', 'navy-blue', 'Active', '0'),
(13, 'Pink', 'pink', 'Block', '0'),
(14, 'Yellow', 'yellow', 'Block', '0'),
(15, 'White', '', 'Block', '0'),
(16, 'scar', 'scar', 'Active', '1'),
(17, 'dfg', '', 'Active', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_communication_preferences`
--

CREATE TABLE `tbl_communication_preferences` (
  `communication_preferences_id` int(11) NOT NULL,
  `fk_user_id` int(4) NOT NULL,
  `receive_product_announcements` enum('YES','NO') NOT NULL COMMENT 'Receive product announcements and important updates from Erezervo',
  `email` enum('YES','NO') NOT NULL COMMENT 'Email alert',
  `sms` enum('YES','NO') NOT NULL COMMENT 'sms alert'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_inquiries`
--

CREATE TABLE `tbl_contact_inquiries` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `subject` varchar(60) NOT NULL,
  `type_of_business` varchar(50) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `message` text NOT NULL,
  `date_time` datetime NOT NULL,
  `seen_status` enum('0','1') NOT NULL DEFAULT '0',
  `country` int(11) NOT NULL,
  `appointment_date` varchar(255) NOT NULL,
  `appointment_time` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_countries`
--

CREATE TABLE `tbl_countries` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `status` enum('1','0','2') NOT NULL COMMENT '1=Active,0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_countries`
--

INSERT INTO `tbl_countries` (`id`, `name`, `status`) VALUES
(1, 'India', '1'),
(3, 'Italy', '1'),
(4, 'Japan', '2'),
(5, 'Chin', '2'),
(6, 'chin', '2'),
(7, 'Chin', '2'),
(8, 'chin', '2'),
(9, 'Japan', '1'),
(10, 'Ireland', '1'),
(11, 'United Kingdom', '1'),
(12, 'United States of America', '1'),
(13, 'Australia', '1'),
(14, 'France', '1'),
(15, 'Germany', '1'),
(16, 'Canada', '1'),
(17, 'Norway', '1'),
(18, 'Sweden', '1'),
(19, 'South Africa', '1'),
(20, 'Finland', '1'),
(21, 'Netherlands', '1'),
(22, 'Portugal', '1'),
(23, 'Spain', '1'),
(24, 'China', '1'),
(25, 'Thailand', '1'),
(26, 'New Zealand', '1'),
(27, 'Austria', '1'),
(28, 'Switzerland', '1'),
(29, 'Mexico', '1'),
(30, 'Antigua Barbuda', '1'),
(31, 'The Bahamas', '1'),
(32, 'Belize', '1'),
(33, 'Dominican Republic', '1'),
(34, 'Grenada', '1'),
(35, 'Guyana', '1'),
(36, 'Jamaica', '1'),
(37, 'St Kitts Nevis', '1'),
(38, 'St Lucia', '1'),
(39, 'Trinidad Tobago', '1'),
(40, 'Egypt', '1'),
(41, 'Poland', '1'),
(42, 'Brazil', '1'),
(43, 'Kenya', '1'),
(44, 'Cameroon', '1'),
(45, 'Russia', '1'),
(46, 'Belgium', '1'),
(47, 'Israel', '1'),
(48, 'Romania', '1'),
(49, 'Greece', '1'),
(50, 'Denmark', '1'),
(51, 'Singapore', '1'),
(52, 'Ghana', '1'),
(53, 'Tanzania', '1'),
(54, 'Hong Kong', '1'),
(55, 'Czech Republic', '1'),
(56, 'Hungary', '1'),
(57, 'Latvia', '2'),
(58, 'Lithuania', '2'),
(59, 'Malta', '2'),
(60, 'Andorra', '2'),
(61, 'Nepal', '0'),
(62, 'Austrial', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country_master`
--

CREATE TABLE `tbl_country_master` (
  `id` int(11) NOT NULL,
  `country` varchar(50) NOT NULL DEFAULT '',
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cover_up`
--

CREATE TABLE `tbl_cover_up` (
  `id` int(11) NOT NULL,
  `cover_up_name` varchar(255) NOT NULL,
  `cover_up_slug` varchar(255) NOT NULL,
  `is_delete` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0=not deleted,1=deleted',
  `cover_up_status` enum('Active','Block') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cover_up`
--

INSERT INTO `tbl_cover_up` (`id`, `cover_up_name`, `cover_up_slug`, `is_delete`, `cover_up_status`) VALUES
(1, 'Formal Tattoo', 'formal-tattoo', '0', 'Block'),
(2, 'Skin Burn', 'skin-burn', '0', 'Block'),
(3, 'Scar', 'scar', '0', 'Block'),
(4, 'Discoloration', 'discoloration', '0', 'Block'),
(5, 'Prance', 'prance', '0', 'Active'),
(6, 'PRANAV', 'pranav', '0', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_deposit_storage`
--

CREATE TABLE `tbl_deposit_storage` (
  `deposit_info_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `direct_deposit` text NOT NULL,
  `paypal_email` varchar(255) NOT NULL,
  `paper_check` varchar(255) NOT NULL,
  `selected` enum('1','2','3') NOT NULL COMMENT '1. For direct_depost 2.For paypal_email  3.For paper_check'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_districts`
--

CREATE TABLE `tbl_districts` (
  `id` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `country_id` int(11) NOT NULL DEFAULT '1',
  `status` enum('1','0','2') NOT NULL COMMENT '1=Active,0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_districts`
--

INSERT INTO `tbl_districts` (`id`, `name`, `country_id`, `status`) VALUES
(1, 'Maharashtra', 1, '1'),
(3, 'Rajstan', 1, '2'),
(4, 'Rome', 3, '1'),
(5, 'Tohoku', 4, '2'),
(6, 'Kitakanto', 4, '2'),
(7, 'Rajsatn', 1, '1'),
(8, 'Gujrat', 1, '1'),
(9, 'asd', 7, '2'),
(10, 'tokio', 8, '2'),
(11, 'jj', 9, '1'),
(12, 'Dublin', 10, '1'),
(13, 'Ards', 10, '1'),
(14, 'Belfast', 10, '1'),
(15, 'Cork', 10, '1'),
(16, 'Galway', 10, '1'),
(17, 'Longford', 10, '1'),
(18, 'Kerry', 10, '1'),
(19, 'Meath', 10, '1'),
(20, 'Wicklow', 10, '1'),
(21, 'Kildare', 10, '1'),
(22, 'Cavan', 10, '1'),
(23, 'Roscommon', 10, '1'),
(24, 'Mayo', 10, '1'),
(25, 'Sligo', 10, '1'),
(26, 'Antrim', 10, '1'),
(27, 'Donegal', 10, '1'),
(28, 'Tipperary', 10, '1'),
(29, 'Limerick', 10, '1'),
(30, 'Clare', 10, '1'),
(31, 'Monaghan', 10, '1'),
(32, 'Fermanagh', 10, '1'),
(33, 'Armagh', 10, '1'),
(34, 'Carlow', 10, '1'),
(35, 'Derry', 10, '1'),
(36, 'Wexford', 10, '1'),
(37, 'Waterford', 10, '1'),
(38, 'Westmeath', 10, '1'),
(39, 'Offaly', 10, '1'),
(40, 'Leitrim', 10, '1'),
(41, 'Kilkenny', 10, '1'),
(42, 'Down', 10, '1'),
(43, 'Tyrone', 10, '1'),
(44, 'Laois', 10, '1'),
(45, 'Wales', 11, '1'),
(46, 'Scotland', 11, '1'),
(47, 'England', 11, '1'),
(48, 'Northern Ireland', 11, '1'),
(49, 'Nashik', 1, '2'),
(50, 'Delhi', 1, '1'),
(51, 'New Delhi', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dynamic_pages`
--

CREATE TABLE `tbl_dynamic_pages` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(256) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `page_title` varchar(256) NOT NULL,
  `front_status` enum('0','1','2') NOT NULL DEFAULT '1',
  `page_description` longtext NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dynamic_pages`
--

INSERT INTO `tbl_dynamic_pages` (`page_id`, `page_name`, `slug`, `page_title`, `front_status`, `page_description`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'How It Works', 'how-it-works', 'How It Works', '2', '<p>How It Works</p>', 'How It Works', 'How It Works', 'How It Works'),
(2, 'About Us', 'about-us', 'About Us', '1', '<p style=\"box-sizing: border-box; margin: 0px 0px 40px; color: rgb(76, 76, 76); font-size: 16px; font-family: work_sanslight; line-height: 30px; overflow: hidden; height: 84px; text-overflow: ellipsis; -webkit-line-clamp: 2; -webkit-box-orient: vertical; display: -webkit-box; letter-spacing: 0.200000002980232px;\">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the World of Grammar.</p>\n\n<div class=\"row\" style=\"box-sizing: border-box; margin-right: -15px; margin-left: -15px; font-family: work_sansregular; font-size: 14px; letter-spacing: 0.200000002980232px; line-height: 20px;\">\n<div class=\"col-sm-6 col-md-6 col-lg-6\" style=\"box-sizing: border-box; position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 330px;\">\n<div class=\"tatto-infom\" style=\"box-sizing: border-box; margin-bottom: 9px;\"><span style=\"box-sizing: border-box; color: rgb(76, 76, 76); font-size: 16px; font-family: work_sanslight;\"><img alt=\"\" src=\"https://webwingdemo.com/node8/demodesign/tattoo/images/tatto-electric.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%;\" /></span>&nbsp;<span class=\"tatto-mar-left\" style=\"box-sizing: border-box; margin-left: 4px; color: rgb(76, 76, 76); font-size: 16px; font-family: work_sanslight;\">Tattoo Design</span></div>\n\n<div class=\"clearfix\" style=\"box-sizing: border-box;\">&nbsp;</div>\n\n<div class=\"tatto-infom\" style=\"box-sizing: border-box; margin-bottom: 9px;\"><span style=\"box-sizing: border-box; color: rgb(76, 76, 76); font-size: 16px; font-family: work_sanslight;\"><img alt=\"\" src=\"https://webwingdemo.com/node8/demodesign/tattoo/images/tatto-electric.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%;\" /></span>&nbsp;<span class=\"tatto-mar-left\" style=\"box-sizing: border-box; margin-left: 4px; color: rgb(76, 76, 76); font-size: 16px; font-family: work_sanslight;\">Tattoo Modification</span></div>\n\n<div class=\"clearfix\" style=\"box-sizing: border-box;\">&nbsp;</div>\n\n<div class=\"tatto-infom\" style=\"box-sizing: border-box; margin-bottom: 9px;\"><span style=\"box-sizing: border-box; color: rgb(76, 76, 76); font-size: 16px; font-family: work_sanslight;\"><img alt=\"\" src=\"https://webwingdemo.com/node8/demodesign/tattoo/images/tatto-electric.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%;\" /></span>&nbsp;<span class=\"tatto-mar-left\" style=\"box-sizing: border-box; margin-left: 4px; color: rgb(76, 76, 76); font-size: 16px; font-family: work_sanslight;\">Piercings</span></div>\n\n<div class=\"clearfix\" style=\"box-sizing: border-box;\">&nbsp;</div>\n</div>\n\n<div class=\"col-sm-6 col-md-6 col-lg-6\" style=\"box-sizing: border-box; position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 330px;\">\n<div class=\"tatto-infom\" style=\"box-sizing: border-box; margin-bottom: 9px;\"><span style=\"box-sizing: border-box; color: rgb(76, 76, 76); font-size: 16px; font-family: work_sanslight;\"><img alt=\"\" src=\"https://webwingdemo.com/node8/demodesign/tattoo/images/tatto-electric.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%;\" /></span>&nbsp;<span class=\"tatto-mar-left\" style=\"box-sizing: border-box; margin-left: 4px; color: rgb(76, 76, 76); font-size: 16px; font-family: work_sanslight;\">Tattoo Modification</span></div>\n\n<div class=\"clearfix\" style=\"box-sizing: border-box;\">&nbsp;</div>\n\n<div class=\"tatto-infom\" style=\"box-sizing: border-box; margin-bottom: 9px;\"><span style=\"box-sizing: border-box; color: rgb(76, 76, 76); font-size: 16px; font-family: work_sanslight;\"><img alt=\"\" src=\"https://webwingdemo.com/node8/demodesign/tattoo/images/tatto-electric.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%;\" /></span>&nbsp;<span class=\"tatto-mar-left\" style=\"box-sizing: border-box; margin-left: 4px; color: rgb(76, 76, 76); font-size: 16px; font-family: work_sanslight;\">Tattoo Consultation</span></div>\n\n<div class=\"clearfix\" style=\"box-sizing: border-box;\">&nbsp;</div>\n\n<div class=\"tatto-infom\" style=\"box-sizing: border-box; margin-bottom: 9px;\"><span style=\"box-sizing: border-box; color: rgb(76, 76, 76); font-size: 16px; font-family: work_sanslight;\"><img alt=\"\" src=\"https://webwingdemo.com/node8/demodesign/tattoo/images/tatto-electric.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%;\" /></span>&nbsp;<span class=\"tatto-mar-left\" style=\"box-sizing: border-box; margin-left: 4px; color: rgb(76, 76, 76); font-size: 16px; font-family: work_sanslight;\">Tattoo Removal</span></div>\n\n<div class=\"tatto-infom\" style=\"box-sizing: border-box; margin-bottom: 9px;\">&nbsp;</div>\n\n<div class=\"tatto-infom\" style=\"box-sizing: border-box; margin-bottom: 9px;\">\n<div class=\"col-sm-6 col-md-6 col-lg-6\" style=\"font-family: work_sansregular; font-size: 14px; letter-spacing: 0.200000002980232px; line-height: 20px; box-sizing: border-box; position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 330px;\">\n<div class=\"tatto-infom\" style=\"box-sizing: border-box; margin-bottom: 9px;\"><span style=\"box-sizing: border-box; color: rgb(76, 76, 76); font-size: 16px; font-family: work_sanslight;\"><img alt=\"\" src=\"https://webwingdemo.com/node8/demodesign/tattoo/images/tatto-electric.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%;\" /></span>&nbsp;<span class=\"tatto-mar-left\" style=\"box-sizing: border-box; margin-left: 4px; color: rgb(76, 76, 76); font-size: 16px; font-family: work_sanslight;\">Tattoo Design</span></div>\n\n<div class=\"clearfix\" style=\"box-sizing: border-box;\">&nbsp;</div>\n\n<div class=\"tatto-infom\" style=\"box-sizing: border-box; margin-bottom: 9px;\"><span style=\"box-sizing: border-box; color: rgb(76, 76, 76); font-size: 16px; font-family: work_sanslight;\"><img alt=\"\" src=\"https://webwingdemo.com/node8/demodesign/tattoo/images/tatto-electric.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%;\" /></span>&nbsp;<span class=\"tatto-mar-left\" style=\"box-sizing: border-box; margin-left: 4px; color: rgb(76, 76, 76); font-size: 16px; font-family: work_sanslight;\">Tattoo Modification</span></div>\n\n<div class=\"clearfix\" style=\"box-sizing: border-box;\">&nbsp;</div>\n\n<div class=\"tatto-infom\" style=\"box-sizing: border-box; margin-bottom: 9px;\"><span style=\"box-sizing: border-box; color: rgb(76, 76, 76); font-size: 16px; font-family: work_sanslight;\"><img alt=\"\" src=\"https://webwingdemo.com/node8/demodesign/tattoo/images/tatto-electric.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%;\" /></span>&nbsp;<span class=\"tatto-mar-left\" style=\"box-sizing: border-box; margin-left: 4px; color: rgb(76, 76, 76); font-size: 16px; font-family: work_sanslight;\">Piercings</span></div>\n\n<div class=\"clearfix\" style=\"box-sizing: border-box;\">&nbsp;</div>\n</div>\n\n<div class=\"col-sm-6 col-md-6 col-lg-6\" style=\"font-family: work_sansregular; font-size: 14px; letter-spacing: 0.200000002980232px; line-height: 20px; box-sizing: border-box; position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 330px;\">\n<div class=\"tatto-infom\" style=\"box-sizing: border-box; margin-bottom: 9px;\"><span style=\"box-sizing: border-box; color: rgb(76, 76, 76); font-size: 16px; font-family: work_sanslight;\"><img alt=\"\" src=\"https://webwingdemo.com/node8/demodesign/tattoo/images/tatto-electric.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%;\" /></span>&nbsp;<span class=\"tatto-mar-left\" style=\"box-sizing: border-box; margin-left: 4px; color: rgb(76, 76, 76); font-size: 16px; font-family: work_sanslight;\">Tattoo Modification</span></div>\n\n<div class=\"clearfix\" style=\"box-sizing: border-box;\">&nbsp;</div>\n\n<div class=\"tatto-infom\" style=\"box-sizing: border-box; margin-bottom: 9px;\"><span style=\"box-sizing: border-box; color: rgb(76, 76, 76); font-size: 16px; font-family: work_sanslight;\"><img alt=\"\" src=\"https://webwingdemo.com/node8/demodesign/tattoo/images/tatto-electric.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%;\" /></span>&nbsp;<span class=\"tatto-mar-left\" style=\"box-sizing: border-box; margin-left: 4px; color: rgb(76, 76, 76); font-size: 16px; font-family: work_sanslight;\">Tattoo Consultation</span></div>\n\n<div class=\"clearfix\" style=\"box-sizing: border-box;\">&nbsp;</div>\n\n<div class=\"tatto-infom\" style=\"box-sizing: border-box; margin-bottom: 9px;\"><span style=\"box-sizing: border-box; color: rgb(76, 76, 76); font-size: 16px; font-family: work_sanslight;\"><img alt=\"\" src=\"https://webwingdemo.com/node8/demodesign/tattoo/images/tatto-electric.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%;\" /></span>&nbsp;<span class=\"tatto-mar-left\" style=\"box-sizing: border-box; margin-left: 4px; color: rgb(76, 76, 76); font-size: 16px; font-family: work_sanslight;\">Tattoo Removal</span></div>\n</div>\n</div>\n</div>\n</div>\n', 'About Us', 'About Us', 'The Idea'),
(3, 'Privacy Policy', 'privacy-policy', 'Privacy Policy', '1', '<p><span style=\"line-height: 20.7999992370605px;\">Tattoo Studio</span> was born out of a passion for boutique floral design. We have a small team of experienced creative florists and a dedicated team of customer care professionals to ensure that your shopping experience is nothing short of perfect.</p>\n\n<p>We pride ourselves in our cutting edge floral designs for the home. Our florists are always on the lookout for exclusive new and rare species of flowers, on trend colours and are constantly evolving the Antheia range. Couture is our signature collection and features our finest all-season bouquets. We create a new range for each season and calendar occasion using the highest quality seasonal flowers and have collections for birthdays, celebrations, romance and many more. A bouquet from Antheia London is more than just flowers, it is hand-tied luxury.</p>\n\n<p><span style=\"line-height: 20.7999992370605px;\">Tattoo Studio</span>&nbsp;believe that everyone should have a little luxury in their life. We take the same level of care and attention in our customer service as to our products and believe that shopping with us should be an experience as luxurious as the flowers themselves.</p>\n\n<p>We are mindful of our environmental impact and strive to be as respectful to our natural environment as possible, after all, our flowers deserve it. When possible we source our flowers from British growers and have designed our packaging to produce as little waste as possible. We do not believe in machine made, all of our bouquets are hand-tied at our UK floristry centre with love and care by our team of experienced florists.</p>\n\n<p>Our Date Reminder Service takes the stress out of shopping, making buying treats for loved ones a treat for you!<br />\nTell us the dates and occasions you would like to be reminded of and we will send you an email reminder two weeks before. We will even include our top gift recommendations from our collections to make giving the perfect gift even easier.</p>\n\n<p>Add as many occasions as you like and control them from your My Appleyard Account. You can add recurring dates like birthdays and anniversaries and we will remember them for you year after year until you tell us otherwise. For one-off occasions simply turn your reminder off from your My Appleyard Account when you don&#39;t need it anymore. It really is that simple.</p>\n', 'Privacy Policy', 'Wellclik', 'Wellclik');
INSERT INTO `tbl_dynamic_pages` (`page_id`, `page_name`, `slug`, `page_title`, `front_status`, `page_description`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(4, 'Terms Of Use', 'terms-of-use', 'Terms Of Use', '1', '<div class=\"middle-content\">\n<div class=\"container\">\n<div class=\"testi-bx\">\n<h3>1. Introduction</h3>\n\n<p>Welcome to <span style=\"line-height: 20.7999992370605px;\">Tattoo Studio</span>.com a website for finding and comparing wellness practitioners globally and a platform for connecting users and practitioners of wellness, health, fitness, holistic and similar services, and other services provided by parties listed on the website&nbsp;<span style=\"line-height: 20.7999992370605px;\">Tattoo Studio</span>.com (these services are referred to in these Terms of Use as &quot;Services&quot; and the providers of the Services are referred to as &quot;Practitioners&quot; and/or &quot;Studios&quot;). It gives you the opportunity to search for, find and contact services provided by Practitioners across the globe. It also provides a platform on which Registered Users (defined below) may purchase vouchers to avail of a Service.&nbsp;<span style=\"line-height: 20.7999992370605px;\">Tattoo Studio</span>.com and the facilities, services and materials available thereon (the &quot;Website&quot;) is owned and operated by <span style=\"line-height: 20.7999992370605px;\">Tattoo Studio</span> Limited, an Irish registered company, number 592705 whose head office is at The LINC, Institute of Technology Blanchardstown, Blanchardstown Road North, Dublin 15, Ireland. For the purpose of these Terms of Use &quot;we&quot;, &quot;our&quot; and &quot;us&quot; refers to Wellclik.com.</p>\n\n<h3>2. Important Notice</h3>\n\n<p>1.<span style=\"line-height: 20.7999992370605px;\">Tattoo Studio</span>.com is not involved in the provision of any healthcare advice or diagnosis. Any information provided on the Website is intended as a guide only and should not be construed as a substitute for professional medical advice. The website is a service that displays information on Practitioners and/or Studios that has been gathered from the Healthcare Provider or the internet and which facilitate Registered Users purchasing Bookings and/or Vouchers. We do not screen or validate any content posted by Practitioners or Studios, nor do we endorse any particular Practitioner or Studio.</p>\n\n<p>If you decide to engage a Practitioner to provide Services to you (including by purchasing a Booking and/or Voucher on our Website), you do so at your own risk. In this regard you should note that certain Practitioners or Studios listed on this Website are located in jurisdictions where insurance is not available or mandatory in respect of the services they offer. We would recommend that you undertake your own research into any Practitioner or Studio listed on the Website and that you should consult with your doctor or primary healthcare provider before engaging any Practitioner from this Website. You should be aware that the results of any search you perform on the Website for Practitioners or Studios should not be construed as endorsement by <span style=\"line-height: 20.7999992370605px;\">Tattoo Studio</span>.com. Where Practitioners &lsquo;profile&rsquo; displays an &lsquo;Accredited Badge&rsquo;, this means we have checked with their certifying body that they are qualified by that certified body, but not that we endorse that Practitioner.</p>\n\n<h3>3. Services We Do Not Provide</h3>\n\n<p>1.Wellclik.com is not a medical referral service. We are not medical professionals nor do we present ourselves to be medical professionals and will not discuss or advise on any issues relating to medical treatment with Clients (defined below) or Practitioners.</p>\n\n<p>2. Wellclik.com uses &lsquo;Stripe&rsquo; for all transactions with Practitioners and Studios who use this Website. If you make a purchase, our only responsibility is to facilitate payment for the booking via Stripe. The responsibility for managing appointments and delivering the relevant services will be solely that of the relevant Practitioner or Studio on whose behalf we have facilitated the booking. We cannot assure that all transactions will be completed nor do we guarantee the ability or intent of any Practitioner or Studio to fulfil their obligations in any transactions.</p>\n\n<p>3. As we cannot control the information provided by any Practitioner or Studio or information sourced by Wellclik.com from the Internet that is made available through this Website, Wellclik.com does not guarantee or endorse the quality, safety or legality of any Practitioner or Studio or the services provided or purported to be provided by any Practitioner or Studio, the accuracy of any listings or any Practitioner or Studio data we may provide to you, or the ability of any Practitioner and/or Studio to complete a transaction. Where Practitioners &lsquo;profile&rsquo; displays an &lsquo;Accredited Badge&rsquo;, this means we have checked with their certifying body that they are qualified by that certified body, but not that we endorse that Practitioner. All matters in regard to their certification should be raised with the certifying body.</p>\n\n<h3>4. Services We Do Provide</h3>\n\n<p>1.Wellclik.com is a website for individuals seeking to access Wellness services (&quot;Users&quot;, &quot;Clients,&quot; &quot;Your&quot; or &quot;You&quot;) and Practitioner and/or Studios situated around the world who want to provide Services. Wellclik.com facilitates introductions and bookings between Users and Practitioners and/or Studios through the Website.Wellclik.com also facilitates Registered Users purchasing Bookings and Vouchers for Services. Wellclik.com is not a provider of Services, and has no responsibility for managing appointments and/or delivering the Services, including where a Booking or Voucher has been purchased on the Website for any Services. You agree that if you purchase a Booking or Voucher through the Website, your contract for delivery of the Services is solely with the relevant Practitioner or Studio on whose behalf we have sold the Booking and/or Voucher, and not Wellclik.com, which is acting as an intermediary only in the sale. Specific terms and conditions relevant to purchasing a Booking and/or Voucher are set out at section 5 below.</p>\n\n<p>2. Wellclik.com gathers information from various worldwide Practitioners and Studios about their facilities and services as well as from a large number of publicly available websites. You can access this information via our Website. This information should assist you in making a decision on choosing your preferred Practitioner or Studio whilst conducting your own research into such Practitioners or Studios. If you choose a Practitioner or Studio to provide services, then we will facilitate contact between you and the Practitioner and/or Studio, by providing your information to the Practitioner and/or Studio (the &quot;Website Service&quot;), facilitating a booking or providing you with the contact information of the Practitioner and/or Studio.</p>\n\n<p>3.You may simply wish to browse through the Website to see what Wellclik.com has to offer. If this is the case, then only some of the provisions of these Terms of Use will be applicable to your use of the Website and other provisions will not be relevant.</p>\n\n<h3>5. Purchase of Bookings and/or Vouchers</h3>\n\n<p>1. If you wish to purchase a Booking and/or Voucher, you must create an account on the Website (and thereby become a &quot;Registered User&quot;), make a payment by credit or debit card, through your Stripe or PayPal account (or other payment mechanisms which we may provide from time to time) and agree to these Terms of Use. To become a Registered User, you must set up a personalised account with a password, give us certain personal information, such as your name, residential address, date of birth, e-mail address and mobile number, and agree to be bound by these Terms of Use. You may only set up one account with Wellclik.com and you may not create multiple accounts using different e-mail addresses.</p>\n\n<p>2. Your completion of an order to purchase a Booking and/or Voucher represents your offer to purchase a Booking and/or Voucher on these Terms of Use, and must be accepted by Wellclik.com. Once an offer has been accepted by us, and purchase of the Booking and/or Voucher is complete we will email you a receipt and the Booking and/or Voucher will appear in your &ldquo;Wellclik Wallet&rdquo;. Your &ldquo;Wellclik Wallet&rdquo; represents an online record of all your bookings and/or vouchers purchased via Wellclik ltd. Wellclik.com is acting solely as an intermediary in the sale of Bookings and/or Vouchers and has no responsibility for any matters associated with the redemption of Bookings and/or Vouchers and/or the Services provided to you on redemption of Bookings and/or Vouchers, which are the sole responsibility of the relevant Practitioner and/or Studio.</p>\n\n<p>3. By submitting an offer to purchase a Booking and/or Voucher you represent and warrant to us that you are at least eighteen years of age and resident in the Ireland or the United Kingdom and your purchase of the Voucher is for your personal, non-commercial use.</p>\n\n<p>4. If we cannot process your offer to purchase a Booking and/or Voucher we will notify you, and (if we have taken payment for the Booking and/or Voucher via Stripe) we will refund you the price of the Booking and/or Voucher. The circumstances where your offer may not be accepted include the promotion no longer being available, or your payment not being authorised. You must provide payment in full to reserve your Booking and/or Voucher.</p>\n\n<p>5. You may cancel your purchase of the Booking and/or Voucher within 24 hours in advance of the date of your intended redemption should you have not redeemed the Booking and/or Voucher during that time already. Partial refunds will not be given and monthly payments once billed are not&nbsp;eligible for cancellation or refund. Cancellations cannot be backdated.</p>\n\n<p>6. Once you have purchased your Booking and/or Voucher, unless the relevant Practitioner and/or Studio allows otherwise, it may not be used in conjunction with any other offers and/or promotions of the Practitioner and/or Studio (whether such offers and/or promotions are made directly by the relevant Practitioner and/or Studio or through other third parties). Your redemption of the Booking and/or Voucher forms a separate contract between you and the relevant Practitioner and/or Studio for the Services and may be subject to the terms and conditions of the Practitioner and/or Studio.</p>\n\n<p>7. You may not alter, reproduce or sell any Booking and/or Voucher. If you do any attempt to do so, we may, at our sole discretion, cancel the Voucher. Passes are valid for use by the named pass holder only and cannot be used&nbsp;by others.</p>\n\n<p>8. Neither Wellclik.com, nor any Practitioner and/or Studio will have any responsibility to you for any lost or stolen Vouchers.</p>\n\n<p>9. You agree that by becoming a Registered User and/or purchasing a Booking and/or Voucher we may send you emails with details of current promotions, your account activity, Booking and/or Vouchers purchased by you and/or updating you on policies, terms and conditions and similar matters relating to the Website. If you do not wish us to contact you for marketing purposes, you may notify us by following the &quot;unsubscribe&quot; links on email communications issued by us.</p>\n\n<p>10. You agree by purchasing a Booking and/or Voucher from a Practitioner and/or Studio that Practitioner and/or Studio may send you emails and/or notifications via Wellclik Ltd with details of their own current promotions, upcoming events, video tutorials and/or podcasts and similar matters related to Bookings you have made with that Practitioners and/or Studio. If you do not wish the Practitioner and/or Studio to contact you for these purposes you may notify them directly.</p>\n\n<div class=\"career-list\">11. Subject to the additional Terms of Use set out at section 14 of these Terms of Use, by purchasing a Booking and/or Voucher you agree and acknowledge that:\n<ul>\n	<li>(a) Wellclik.com is acting merely as intermediary between you and the relevant Practitioner and/or Studio and our obligations are limited to processing payment for the Booking and/or Voucher via Stripe and sending you a notification of purchase; Wellclik.com gives no representations and/or warranties regarding the Services and has no responsibility or liability for any of the Services to be provided on redemption of the Booking and/or Voucher (including but not limited scheduling availability of the Practitioner and/or Studio);</li>\n	<li>(b) The relevant Practitioner and/or Studio shall be solely responsible for all loss, liability, damages, costs, claims, injuries and/or illnesses suffered by you, caused in whole or in part by the relevant Practitioner and/or Studio and/or resulting from the relevant Services rendered on redemption of a Booking and/or Voucher;</li>\n	<li>(c) Your remedies against Wellclik,com are limited to breach of contract of these Terms of Use;</li>\n	<li>(d) The liability of Wellclik.com to you for any loss shall not in any circumstances exceed the of the price of the Booking and/or Voucher.of the price of the Booking and/or Voucher.</li>\n</ul>\n</div>\n\n<h3>6. Content Policy</h3>\n\n<p>1. Wellclik.com acts as a passive conduit for the online distribution and publication of information submitted through the Website, and has no obligation to screen content or information in advance and is not responsible for screening or monitoring material posted by you or Practitioners and/or Studios. You are solely responsible for the content and information you provide to us to be published on the Website through our data entry forms or otherwise. We reserve the right to edit or remove your content if we believe it is untrue or that it may create liability for us.</p>\n\n<p>2. You acknowledge we may publish your reviews of Practitioners and/or Studios for the services provided to you by Practitioners and/or Studios either on the Website or on associated or linked websites and you consent to the unrestricted publication of such reviews. When posting a review of a Practitioner and/or Studio to Wellclik.com you must abide by current review policies which include:</p>\n\n<div class=\"career-list\">\n<ul>\n	<li>Review cannot be defamatory</li>\n	<li>Review must be family friendly (no profanity, etc.)</li>\n	<li>No hearsay. You cannot make a statement about what someone else has said.</li>\n	<li>No personal insults</li>\n	<li>No reports of criminal activity (these must be reported to the proper authority)</li>\n	<li>Commercial information of any kind including email address or phone numbers</li>\n	<li>Content not relevant to other potential customers</li>\n	<li>Review must use standard email etiquette (not all CAPS, no HTML, etc.)</li>\n	<li>We may choose to reject reviews where we cannot contact you by email or phone</li>\n</ul>\n</div>\n\n<p>3. Other terms of the content policy with regard to reviews and other user-provided text on the Website are covered in the review policy.</p>\n\n<h3>7. Age and Responsibility</h3>\n\n<p>1.You should note that the Website Service is only available to, and may only be used by individuals who are legally entitled to form such contracts under law in the jurisdiction in which they reside. If you are under the age of eighteen, you should not access and or use this Website or the Website Services or purchase (or attempt to purchase) any Booking and/or Voucher. By accessing and using this Website, you warrant that you are over the age of eighteen.</p>\n\n<h3>8. Data Protection</h3>\n\n<p>1.For the purpose of these Terms of Use &quot;Data&quot; means all electronic data or information, including personal data as defined in the Data Protection Acts, 1988 and 2003 (the &quot;DP Acts&quot;) submitted by you onto the Website and transferred by Wellclik.com to the Practitioner and/or Studio, the processing of which is necessary to conclude the contract between you and the Practitioner and/or Studio. You recognise and acknowledge that in order to facilitate the provision of Services to you, we will need to provide certain details of your personal information, including any medical information you provide us with, to Practitioner and/or Studio whom you wish to arrange a consultation with. You explicitly consent to the transfer and disclosure of your personal information to such Practitioner and/or Studio even where such Practitioner and/or Studios are based in countries where protections for personal data are not as strong as those in Ireland under the DP Acts or in the European Union generally. We may also use your contact details, including your phone number and email address, to contact you from time to time to update you as to progress in relation to your consultation with a Practitioner and/or Studio and other matters concerning the Website Services. You consent to us contacting you in this regard.</p>\n\n<p>2.Wellclik.com endeavours to protect your privacy and the privacy of others who access the Website and use its facilities. For full details of the manner in which Wellclik.com uses cookies, the type of information we collect, how we use it and further details concerning the circumstances upon which we disclose information, please read the Privacy Statement which is hereby incorporated into and forms part of these Terms of Use.</p>\n\n<p>3.Wellclik.com operates servers outside of the European Union therefore you hereby agree to the transfer of personal data outside the European Union. By using this website, you agree to Wellclik.com holding and processing, both electronically and manually, personal data about you (including sensitive personal data as defined in the Data Protection Acts 1988-2003) for the operation, management, security and administration of Wellclik.com and complying with applicable laws, regulations and procedures, including transfer of personal data outside the European Union.</p>\n\n<p>4.Communication between you and a Practitioner and/or Studio via email may be sent through Wellclik.com. The content of these emails may be retained by Wellclik.com in order to assist Practitioner and/or Studios in tracking their communication.</p>\n\n<p>5. By signing up to become a Registered User you agree that we may send you advertisements and/or promotional material by email, including information about Bookings and/or Vouchers you have purchased. If you do not wish us to contact you for marketing purposes, you may notify us by following the &quot;unsubscribe&quot; links on email communications issued by us.</p>\n\n<h3>9. Provision of Information</h3>\n\n<p>1. If you wish to arrange a consultation with a Practitioner and/or Studio, then you will be asked to provide certain information including details such as your contact details (phone number and email address), age and gender and some medical information to allow us to present your data to Practitioner and/or Studio who may be interested in providing Services to you. You warrant and undertake that the information provided by you is up-to-date, accurate in all material respects, not the confidential property of others or in violation of any third party&#39;s rights, and is sufficient for us to facilitate the Website Services. Although Wellclik.com endeavours at all times to respect your privacy, you should not provide any information that may cause you personal damage if made public.</p>\n\n<p>2.Information sent over the Internet cannot be guaranteed to be completely secure as it is subject to possible interception, loss or alteration. You understand and agree to assume the security risk for any information you provide using the Website. We are not responsible for any information sent over the Internet and will not be liable to you or anyone else for any damages or other loss incurred in connection with any information sent by you to us or to a Practitioner and/or Studio, or any information sent by us, a Practitioner and/or Studio or any third party to you over the internet.</p>\n\n<h3>10. Suspension/ Termination</h3>\n\n<p>1.Wellclik.com may at any time, without notice to you, suspend or terminate your access to this Website, or any service forming part of this Website, wholly or partially, for any reason including, without limitation, where you have provided false or misleading information, or you are in breach of these Terms of Use, or if Wellclik.com cannot verify or authenticate any information submitted to the Website. Wellclik.com is not liable to you or any third party for any suspension or termination of access to this Website.</p>\n\n<h3>11. Use of website</h3>\n\n<p>1.You agree not to use this Website or any of its facilities and/or services for any purpose that is unlawful or prohibited by these Terms of Use including but not limited to:</p>\n\n<div class=\"career-list\">\n<ul>\n	<li>(a). Any commercial purpose including but not limited to creating, checking, confirming, updating or amending your own or someone else&#39;s databases, records, directories, customer lists, mailing or prospecting lists;</li>\n	<li>(b). Any purpose that is fraudulent, unlawful or prohibited by these Terms of Use;</li>\n	<li>(c). Copying, modifying, transmitting, displaying, distributing, performing, reproducing, licensing, publishing, creating derivative works from, transferring or selling any information, software, products and services contained on or forming part of this Website, or otherwise using such content of the Website for resale, redistribution or for any other commercial use whatsoever including but not limited to any other website, surveys, contests or pyramid schemes.</li>\n	<li>(d). Accessing or using the Website in and from jurisdictions which restricts or prohibits same by local law;</li>\n	<li>(e). Accessing or using the Website in any manner which could damage, disable, overload, flood, mail bomb, crash or impair the Website or interfere with any other party&#39;s use and/or enjoyment of the Website;</li>\n	<li>(f). Posting or transmitting, whether on a bulletin board, forum or otherwise, to or from the Website any unlawful, harassing, threatening, libellous, defamatory, tortious, obscene, hateful, scandalous, inflammatory, pornographic or profane material, or any other material that could give rise to any civil or criminal liability under law;</li>\n	<li>(g). Transmitting material which may cause harm to Wellclik.com&rsquo;s or any other party&#39;s computer systems, including but not limited to any material which contains viruses, Trojan horses, worms, spyware, adware, time bombs, cancelbots or other computer programming routines or engines that are intended to damage, destroy or otherwise impair a computer&#39;s functionality or the operation of the Website;</li>\n	<li>(h). Harassing, harming or abusing another person, or contacting, advertising, soliciting, selling to any other person without their prior written consent or transmitting or relaying spam, junk email or chain letters;</li>\n	<li>(i). Accessing data or materials not intended for your use; logging into a server or account which you are not authorised to access; attempting to probe, scan or test the vulnerability of a system or network or to breach security or authentication measures without proper authorisation; or impersonating any person or entity, or falsely stating or otherwise misrepresenting their identity or affiliation in any way;</li>\n	<li>(j). Attempting to gain unauthorised access to the Website, or any computer systems or networks connected to any Wellclik.com website, through hacking, password miming or any other means; or</li>\n	<li>(k). Harvesting or otherwise collecting by any means any programme material or information (including without limitation email address or details of other users) from the Website or monitoring, mirroring or copying any content of the Website without the prior written consent of Wellclik.com.</li>\n</ul>\n</div>\n\n<p>2.The pages contained in this Website may contain technical inaccuracies and typographical errors. The information on this Website may be updated from time to time but we do not accept any responsibility for keeping the information in these pages up-to-date, nor any liability for any failure to do so.</p>\n\n<p>3.Wellclik.com reserves the right, at its sole discretion, to pursue all of its legal remedies upon breach by you of these Terms of Use, including but not limited to removal of your postings and content from this Website, closing your account and/or restricting your ability to access this Website and use the Website Services.</p>\n\n<h3>12. Copyright Notice and Limited Licence</h3>\n\n<p>1.The information, content, graphics, text, sounds, images, buttons, trademarks, service marks, get-up, business names, domain names, rights in good will, know-how, designs and rights in designs, trade names and logos (whether registered or unregistered) (the &quot;Materials&quot;) contained in this Website are protected by copyright, trade mark, database right, sui generis right and other intellectual property laws and are also protected under national laws and international treaties. Wellclik.com and/or its licensors (as the case may be) retain all right, title, interest in and intellectual property rights to the Materials. Use of third party trademarks is for description and identification purposes only. Such trademarks are the registered trademarks of their registered owners. Wellclik.com asserts absolutely no ownership or other rights with respect to such third party trademarks.</p>\n\n<p>2.Any other use of the Materials on this Website, including any form of copying or reproduction, modification, distribution, uploading, re-publication, extraction, re-utilisation, incorporation or integration with other Materials or works or re-delivery using framing technology, without the prior permission of Wellclik.com is strictly prohibited and is a violation of the proprietary rights of Wellclik.com. Other than as expressly provided herein, nothing in these Terms of Use should be construed as conferring, by implication or otherwise, any licence or right under any copyright, patent, trade mark, database right, sui generis right or other intellectual property or proprietary interest of Wellclik.com, its licensors or any third party.</p>\n\n<p>3.You agree to grant Wellclik.com a non-exclusive, royalty free, world-wide, transferable perpetual licence, with the right to sub-licence, reproduce, distribute, transmit, create derivative works of, publicly display and publicly perform any Materials and other information, including without limitation ideas contained therein for new or improved services, when you submit to the Website either during the registration process or otherwise, including any information or materials you post to a bulletin board or evaluation forum on the website.</p>\n\n<h3>13. Disclaimers</h3>\n\n<p>1.This clause limits Wellclik.com&#39;s legal liability to you for your access to and use of the Website. You should read this clause carefully. You acknowledge that you have agreed to these Terms of Use relying on the disclaimers stated herein and that those disclaimers are an essential basis of this contract.</p>\n\n<p>2.The website is available to all users &quot;as is&quot; and, to the greatest extent permitted by applicable law, the website is made available without any representations or warranties of any kind, either express or implied. Wellclik.com makes no representations, warranties or undertakings about the services or materials available on the website, including without limitation, their merchantability, quality or fitness for a particular purpose. All information provided on the website is intended as a guide only and should not be construed as a substitute for professional medical advice and Wellclik.com makes no representations, warranties or undertakings as to the accuracy of any information provided on this website. Wellclik.com makes no representations, warranties or undertakings that the website, or the server that makes it available, will be free from defects, including, but not limited to viruses or other harmful elements. To the maximum extent permitted by applicable law, Wellclik.com accepts no liability for any infection by computer virus, bug, tampering, unauthorised access, intervention, alteration or use, fraud, theft, technical failure, error, omission, interruption, deletion, defect, delay, or any event or occurrence beyond the control of Wellclik.com, which corrupts or affects the administration, security, fairness and the integrity or proper conduct of any aspect of the Website. All use by you of the Website is at your own risk. You assume complete responsibility for, and all risk of loss resulting from, your downloading or using of, or referring to or relying on the facilities, services, materials or products provided on the Website, or any other information obtained from your use of the Website. You agree that, to the maximum extent permitted by applicable law, Wellclik.com and providers of telecommunications and network services to Wellclik.com will not be liable for damages arising out of your use or your inability to use the Website, and you hereby waive any and all claims with respect thereto, whether based on contract, tort or other grounds. No advice or information, whether oral or written, obtained by you from Wellclik.com shall be deemed to alter this disclaimer of warranty, or to create any warranty.</p>\n\n<p>3.To the fullest extent permitted by applicable law, Wellclik.com assumes no responsibility nor do we grant any warranties, express or implied relating to the operation, safety, condition or service of any Practitioner and/or Studio or any healthcare professional that is used by, for or on behalf of, you. Wellclik.com is not liable for the acts, errors, omissions, representations, warranties, breaches or negligences of any Practitioner and/or Studio or any other persons associated with such Practitioner and/or Studio or for losses, damages or expenses resulting therefrom.</p>\n\n<h3>14. Limitation of Liability</h3>\n\n<p>1.To the fullest extent permitted by applicable law, neither Wellclik.com nor any of its officers, directors, employees, affiliates or other representatives will be liable for loss or damages arising out of or in connection with your use of any facilities, services and the website services offered or transactions entered into through or from this Website, including, for the avoidance of doubt, your transactions with Practitioner and/or Studio facilitated through this Website, including, but not limited to, direct, indirect or consequential losses or damages, loss of data, loss of income, profit or opportunity, loss of, or damage to, property and claims of third parties, even if Wellclik.com has been advised of the possibility of such loss or damages, or such loss or damages were reasonably foreseeable.</p>\n\n<p>2.In no event shall Wellclik.com nor any of its officers, directors, employees, affiliates or other representatives be liable for any damages whatsoever resulting from the statements or conduct of any Practitioner and/or Studio or third party or the interruption, suspension or termination of the website services, whether such interruption, suspension or termination was justified or not, negligent or intentional, inadvertent or advertent.</p>\n\n<p>3.Without limiting the foregoing, under no circumstances shall Wellclik.com nor any of its officers, directors, employees, affiliates or other representatives be held liable for any delay or failure in performance of the website or the website services resulting directly or indirectly from acts of nature, forces or causes beyond its reasonable control, including, without limitation, internet failure, computer equipment failures, telecommunication failures, other equipment failures, electrical power failures, strikes, lay-way disputes, riots, interactions, civil disturbances, shortages of labour or materials, fires, floods, storms, explosions, acts of god, war, governmental actions, orders of domestic or foreign courts or tribunals or non-performance of third parties.</p>\n\n<p>4.Wellclik.com does not exclude liability for death or personal injury, caused by its negligence or that of its employees or authorised representatives, or for fraud.</p>\n\n<h3>15. Indemnity</h3>\n\n<p>1.You agree to defend, indemnify and keep indemnified and hold Wellclik.com and, as applicable, its officers, directors, employees, affiliates or other representatives, harmless against any and all claims, proceedings, actions, costs, including legal costs, charges, expenses, damages, liabilities, losses and demands made by, or liabilities to, any third party resulting from any activities conducted under your account, your use or misuse of this Website, including but not limited to posting content on this Website, entering into transactions with Practitioner and/or Studio, contacting others as a result of their postings on this Website, infringing any third party&#39;s intellectual property or other rights, or otherwise arising out of your breach or any breach of these terms of use.</p>\n\n<h3>16. Links to Third Party Websites</h3>\n\n<p>1.This Website contains links to third party websites. Your use of third party websites is subject to the terms and conditions of use contained within each of those websites. Access to any other website through this Website is at your own risk. Wellclik.com is not responsible for, nor liable for, the accuracy of any information, data, opinions, statements made on third party websites or the security of any link or communication with those websites. Wellclik.com reserves the right to terminate a link to a third party website at any time. The fact that Wellclik.com provides a link to a third party website does not mean that Wellclik.com endorses, authorises or sponsors that website, nor does it mean that Wellclik.com is affiliated with the third party websites, owners or sponsors. Wellclik.com provides these links merely as a convenience for those who use this Website.</p>\n\n<h3>17. Availability</h3>\n\n<p>1.Although Wellclik.com endeavours to ensure the Website is available at all times, there may be occasions when access to the Website may be interrupted, e.g. to allow maintenance, upgrades and emergency repairs to take place, or due to failure of telecommunications links and equipment that are beyond our control. You agree that Wellclik.com shall not be liable to you for any loss incurred by you resulting from the modification, suspension or discontinuance of the Website.</p>\n\n<p>2.You have sole responsibility for adequate protection and back-up of any content and data you submit to the Website and for undertaking reasonable and appropriate precautions to scan for computer viruses or other destructive items.</p>\n\n<h3>18. Changes in These Terms of Use</h3>\n\n<p>1.Wellclik.com may modify or terminate any services offered through this website from time to time, for any reason and without notice, and without liability to you, any other client or any third party. Wellclik.com reserves the right to change the content, presentation, performance, user facilities and/or availability of any part of this Website, including these terms of use at its sole discretion from time to time. You should check these terms of use for any changes each time you access this Website. Your continued use of the Website and/or clicking on the &quot;I accept&quot; button will signify your acceptance of revised terms of use.</p>\n\n<h3>19. Jurisdiction and Governing Law</h3>\n\n<p>1.This Website is controlled and operated by Wellclik.com from Ireland. Wellclik.com does not make any representation that the facilities, services, including the website service, and/or materials offered through this Website are appropriate or suitable for use in countries other than Ireland, or that they comply with any legal or regulatory requirements in any other countries. In accessing this Website, you do so at your own risk and on your own initiative, and are responsible for compliance with local laws, to the extent any local laws are applicable. If it is prohibited to make this Website, facilities, services, including the website service, and/or materials offered through this Website or any part of them available in your country, or to you, whether by reason of nationality, residence or otherwise, this website, the facilities, services and/or materials offered through this website or any part of them are not directed at you.</p>\n\n<p>2.These terms of use shall be governed by and construed in accordance with the laws of Ireland and you hereby agree, for the benefit of Wellclik.com, and without prejudice to the right of Wellclik.com to take proceedings in relation to these terms of use before any court of competent jurisdiction and that courts of Ireland shall have jurisdiction to hear and determine any actions or proceedings that may arise out of or in connection with these terms of use, and for such purposes you irrevocably submit to the jurisdiction of such courts.</p>\n\n<p>3.The language of any dispute resolution procedure or any proceedings under these terms of use will be English.</p>\n\n<h3>20. Miscellaneous</h3>\n\n<p>1.Any waiver of any provision of these terms of use must be in writing and signed by Wellclik.com to be valid. Any waiver of any provision hereunder shall not operate as a waiver of any other provision, or a continuing waiver of any provision in the future. Each of the provisions of these terms of use is separate and severable and enforceable accordingly. If, at any time, any provision is judged by any court of competent jurisdiction to be void or unenforceable the validity, legality and enforceability of the remaining provisions shall not in any way be affected or impaired. Nothing in these terms of use shall constitute, or be deemed to constitute, a partnership between you and Wellclik.com, nor shall either party be deemed to be the agent of the other party. These terms of use represent the entire understanding and agreement between you and Wellclik.com relating to use of this website, its facilities and/or services, including the website service, and supersede any and all prior statements, understandings and agreements.</p>\n\n<h3>Fees And Services</h3>\n\n<p>In order to take payment online through Wellclik.com for your services, you must set up a merchant account that is linked to a payment gateway. Currently we integrated with Stripe, therefore you can create a Stripe account directly from your Wellclik profile. There are standard fees applied to all online transactions by our payment gateway partners. For example, Stripe charge 1.4% + 25 cent per transaction for European cards (excluding VAT) for all transactions that are processed through their gateway. Stripe&rsquo;s pricing can be found AT STRIPE.COM. Further, the Subscriber must maintain such Stripe Account to continue to use the Stripe Connect Platform integration. Wellclik is a software as a service business and therefore charge a monthly subscription. We offer a free entry level plan for new customers for a duration of 30 days without payment processing. Thereafter once payments are enabled a Practitioner is moved to a subscription plan. These subscription plans have varying levels of complexity, our fees for these are &euro;45, &euro;90 or &euro;150 per month. View our pricing table for full details. If you are accepting payment via Stripe merchant account you are the owner of the merchant account and are and are responsible for refunds. We help you improve communication with your client which limits the circumstances of refunds happening in the first place. However should a payment be disputed your Wellclik record can be used as evidence of a contact between you and your client. View Stripe dispute FAQ at stripe.com</p>\n\n<p>Practitioners (Business&rsquo;) are charged a monthly subscription fee. Wellcliks fees are subject to change, are incorporated into this Agreement by reference. Increase to the Features &amp; Fees for Wellcliks services are effective after Wellclik provides you with at least thirty (30) days&#39; notice by posting the changes on the Site. However, Wellclik may choose to temporarily change the features and fees its services for promotional events; such changes are effective when Wellclik posts the temporary promotional event on the Site. Wellclik may decrease the fees as stated in the Features &amp; Fees with no notice to you. Wellclik may, at its sole discretion, change some or all of Wellclik&rsquo;s services at any time. In the event Wellclik introduces a new service, the fees for that service are effective at the launch of the new service. Unless otherwise stated, all fees are quoted in Euro (EUR).</p>\n\n<p>Practitioners accounts must stay up-to-date with all fees owed or the account may be suspended until all outstanding fees are paid in full. In the event that a Practitioners business is inactive their profile will no longer show on site but the monthly subscription fee will still be debited from the Practitioners account until their account has been officially closed or downgraded. A Practitioners account can be closed or downgraded at any time and it is the responsibility of the Practitioner to manually terminate their business status from their My Account page.</p>\n\n<p>You are responsible for paying all fees and applicable taxes associated with using Wellclik. Wellclik keeps accepted Practitioners payment information in accordance with its Privacy Policy. If fees are due to Wellclik then we will be invoice the seller for the amount due that month. This amount will be taken automatically by Wellclik from the seller&rsquo;s registered Stripe account 2 working days later.</p>\n\n<p>All fees are inclusive of VAT where applicable. In certain circumstances fees will not be subject to VAT but you may be liable to indirect taxes in your own country. Wellclik recommends that you research whether you are liable to declare such taxes to the relevant tax authorities. A valid VAT identification number is required from EU sellers who are VAT-registered. EU sellers are liable to notify ASOS Marketplace of any change in VAT status. Fees and Termination: If Wellclik terminates a listing or your account, if you close your account, or if the payment of your Wellclik fees cannot be completed for any reason, you remain obligated to pay Wellclik for all unpaid fees plus any penalties, if applicable. If the Practitioners account is not paid in full, the Practitioner risks penalties such as the suspension of privileges, termination of the account and/or legal action. If you have a question or wish to dispute a charge, contact Wellclik.com</p>\n\n<h3>2.Subscription</h3>\n\n<p>Subject to the Subscriber paying the Subscriptions Fees, the restrictions set out and the other terms and conditions of this agreement, the Supplier hereby grants to the Subscriber a non-exclusive, non-transferable right to use the Services during the Subscription Term solely for the Subscriber&#39;s business operations which includes publicly displaying information such as class and appointment schedules, products and services on the Subscriber&rsquo;s website and on the Mobile Applications.</p>\n\n<h4>The Subscriber shall not:</h4>\n\n<p>except as may be allowed by any applicable law which is incapable of exclusion by agreement between the parties: and except to the extent expressly permitted under this agreement, attempt to copy, modify, duplicate, create derivative works from, frame, mirror, republish, download, display, transmit, or distribute all or any portion of the Software in any form or media or by any means; or attempt to reverse compile, disassemble, reverse engineer or otherwise reduce to human-perceivable form all or any part of the Software; or access all or any part of the Services in order to build a product or service which competes with the Services; or license, sell, rent, lease, transfer, assign, distribute, display, disclose, or otherwise commercially exploit the Services or any part thereof. The Subscriber shall use all reasonable endeavours to prevent any unauthorised access to, or use of, the Services and, in the event of any such unauthorised access or use, promptly notify the Supplier.</p>\n\n<h4>Additional user subscriptions</h4>\n\n<p>The Subscriber may, from time to time during any Subscription Term, purchase additional Subscriptions and the Supplier shall grant access to the Services to such additional users in accordance with the provisions of this agreement and at the price agreed between the Supplier and the Subscriber.</p>\n\n<h4>Mobile Applications</h4>\n\n<p>The Mobile Applications are included in the Services provided to the Subscriber under clause 2. The Mobile Applications will be custom branded in accordance with the Subscriber&rsquo;s instructions and the images and logos uploaded by the Subscriber via the User Website. The Subscriber represents to the Supplier and unconditionally guarantees that any content, text, information, or graphics furnished to the Supplier for inclusion in the Mobile Applications are owned by the Subscriber, or that the Subscriber has permission from the rightful owner to use those elements, and will hold harmless, protect, and defend the Supplier and its subcontractors from any claim or suit arising from the use of such elements furnished by the Subscriber. All content provided by the Subscriber, including textual and graphical content, will always remain the property of the Subscriber. For the avoidance of any doubt and regardless of the custom branding of the Mobile Applications with the Subscriber&rsquo;s branding, logos and trademarks, the Intellectual Property Rights in the Mobile Applications are, and at all times shall remain, the property of the Supplier (or the appropriate third-party rights-owner(s), if any). The Supplier shall arrange for the publication of the Mobile Applications to the Apple App Store and the Google Play Store.</p>\n\n<h3>2. Registration</h3>\n\n<p>In order to register on the Wellclik.com site, you must live in the UK, Ireland, France, Germany, Netherlands or the USA. You must be willing to provide personal information including (but not limited to) Your name, address, phone number and email address and this information must be factually correct.Wellclik will not take any responsibility for information which is false or misleading. Wellclik requires that You update Your personal information if and when it changes from time to time. Wellclik requires that all users of the Marketplace are over 18 years old. You are responsible for maintaining the confidentiality of any passwords associated with Your account. You are responsible for any activities under Your account. If You become aware of any unauthorised use of Your account You must notify Wellclik immediately via email at support@wellclik.com. You must not transfer your account or passwords to another user. You may not have more than one account. To register You must create a user identification (&quot;Display Name&quot;) of Your own choice which will appear on the Wellclik.com site.</p>\n\n<h4>Fees And Costs</h4>\n\n<p>In order to take payment online through Wellclik.com for your services, you must set up a merchant account that is linked to a payment gateway. Currently we integrated with Stripe, therefore you can create a Stripe account directly from your Wellclik profile. There are standard fees applied to all online transactions by our payment gateway partners. For example, Stripe charge 1.4% + 25 cent per transaction for European cards (excluding VAT) for all transactions that are processed through their gateway. Stripe&rsquo;s pricing can be found AT STRIPE.COM. Wellclik is a software as a service business and therefore charge a monthly subscription. We offer a free entry level plan for new customers for a duration of 30 days without payment processing. Thereafter once payments are enabled a Practitioner is moved to a subscription plan. These subscription plans have varying levels of complexity, our fees for these are &euro;45, &euro;90 or &euro;150 per month. View our pricing table for full details. If you are accepting payment via Stripe merchant account you are the owner of the merchant account and are and are responsible for refunds. We help you improve communication with your client which limits the circumstances of refunds happening in the first place. However should a payment be disputed your Wellclik record can be used as evidence of a contact between you and your client. View Stripe dispute FAQ at stripe.com</p>\n\n<h4>Listing And Selling</h4>\n\n<p>Listing Description: By listing an item on the Site you warrant that you and all aspects of the service comply with Wellcliks published policies. You also warrant that you may legally offer this service. You must accurately describe your service and all terms of sale in your listing. Your listings may only include text descriptions, pictures and other content relevant to the sale of that service. All services must be listed in an appropriate category with appropriate tags. You must not list a service more than once, unless the services listing has naturally expired.</p>\n\n<p>Binding Sale: All sales are binding. The user is obligated to deliver appropriate payment for services purchased, unless there is an exceptional circumstance.</p>\n\n<p>Fee Avoidance: The price stated in each service listing description must be an accurate representation of the sale. You may not alter the service price after a sale for the purpose of avoiding transaction fees, misrepresent the service location, or use another user&#39;s account without permission. Promotional Codes: Practitioners may issue promotional codes for promotional purposes only and these are to be used against purchases from the issuing seller&rsquo;s profile only. Promotional codes have no cash value and cannot be exchanged for money or credit. Sellers are expressly prohibited from selling promotional codes for their Profile, Wellclik service and/or the Wellclik website. If the Practitioner is found to be selling promotional codes this may constitute fee avoidance. Badge use: If a Seller would like to use the &ldquo;Accredited Badge&rdquo; badge to advertise and promote their listing on Wellclik, they will need Wellclik&rsquo;s prior written permission to do so. Please contact your account manager for more information.</p>\n\n<h3>2. Canceling an Order</h3>\n\n<p>If you wish to cancel an order for a service on Wellclik.com you should contact the Practitioner directly immediately. Contract cancellations and returns are matters between the USER and PRACTITIONER. Wellclik is not a party to the sale or supply of any goods or services between the Practitioner and User.</p>\n\n<p>2.2 You may not be able to cancel your service if it is within 6 hours of its time of occurrence. However, you may be entitled to a partial refund and if you wish to do so you should contact the Practitioner immediately upon cancellation.</p>\n\n<p>2.3 You cannot cancel or receive a refund for a Service (including but not limited to training courses) if the proposed cancellation is to be made within 6 hours of the course or service commencing.</p>\n\n<h4>Prohibited, Questionable And Infringing Items and Activities</h4>\n\n<p>You are solely responsible for your conduct and activities on and regarding to Wellclik.com and any and all data, text, information, usernames, graphics, images, photographs, profiles, audio, video, items, and links (together, &quot;Content&quot;) that you submit, post, and display on Wellclik.com</p>\n\n<h4>Copyright Policy.</h4>\n\n<p>Restricted Activities: Your Content and your use of Wellclik:</p>\n\n<div class=\"career-list\">\n<ul>\n	<li>Must not be false, inaccurate or misleading</li>\n	<li>Must not be fraudulent or involve the sale of illegal, counterfeit or stolen items</li>\n	<li>Must not infringe upon any third-party&#39;s copyright, patent, trademark, trade secret or other proprietary or intellectual property rights or rights of publicity or privacy (see also, ASOS Marketplace&#39;s Copyright Policy)</li>\n	<li>Must not breach this Agreement, any site policy or community guidelines, or any applicable law or regulation (including, but not limited to, those governing export control, consumer protection, unfair competition, anti-discrimination or false advertising)</li>\n	<li>Must not contain items that have been identified as hazardous to consumers</li>\n	<li>Must not be defamatory, libellous, unlawfully threatening, unlawfully harassing, impersonate or intimidate any person (including Wellclik staff or other users), or falsely state or otherwise misrepresent your affiliation with any person, through for example, the use of similar email address, nicknames, or creation of false account(s) or any other method or device</li>\n	<li>Must not be obscene</li>\n	<li>Must not contain or transmit any code of a destructive nature that may damage, interfere with, intercept or expropriate any system, data or personal information</li>\n	<li>Must not modify, adapt or hack Wellclik.com or modify another website so as to falsely imply that it is associated with Wellclik.com;</li>\n	<li>Must not link directly or indirectly, reference or contain descriptions of goods or services that are prohibited under this Agreement or other policy documents as posted on Wellclik.com.</li>\n</ul>\n</div>\n\n<p>Furthermore, you must not list any item on Wellclik (or conclude any transaction that was initiated using Wellclik&rsquo;s service) that could cause Wellclik to violate any applicable law, statute, ordinance or regulation, or that violates the Terms of Use.</p>\n\n<h4>Content</h4>\n\n<p>License: Wellclik does not claim ownership rights in your Content. You grant Wellclik a license solely to enable Wellclik to use any information or Content you supply Wellclik with so that Wellclik is not violating any rights you might have in that Content. You grant Wellclik a non-exclusive, worldwide, perpetual, irrevocable, royalty-free, sublicensable (through multiple tiers) right to exercise the copyright, publicity, and database rights you have in the Content, in any media now known or not currently known, with respect to your Content. You agree to allow Wellclik to store or re-format your Content on Wellclik.com and display your Content on Wellclik.com in any way as Wellclik chooses. Wellclik will only use personal information in accordance with Wellclik&rsquo;s Privacy Policy.</p>\n\n<p>By uploading Content to Wellclik you promise that you own and/or have the right to use such Content in this manner and that such Content does not infringe any third party intellectual property rights. In the event that Wellclik receives a complaint in respect of any Content posted by you it shall be your sole responsibility to deal with such a complaint and to compensate Wellclik for any loss suffered. Wellclik reserves the right to remove any such Content immediately. As part of a transaction, you may obtain personal information, including email address or phone number. Without obtaining prior permission from the other user, this personal information shall only be used for that transaction or for Wellclik-related communications. Wellclik has not granted you a license to use the information for unsolicited commercial messages. For more information, see Wellclik&rsquo;s Privacy Policy. By uploading images to Wellclik, you agree that Wellclik has the right to use your images to promote Wellclik and/or your profile in any external press as well as across all Wellclik Websites and Wellclik social media channels. Re-Posting Content: By posting Content on Wellclik, it is possible for an outside website or a third party to re-post that Content. You agree to hold Wellclik harmless for any dispute concerning this use. If you choose to display your own Wellclik-hosted image on another website, the image must provide a link back to its listing page on Wellclik.com.</p>\n\n<p>Idea Submissions: Wellclik considers any unsolicited suggestions, ideas, proposals or other material submitted to it by users via the Site or otherwise (other than the Content and the tangible items sold on the Site by users) (collectively, the &quot;Material&quot;) to be non-confidential and non-proprietary, and Wellclik shall not be liable for the disclosure or use of such Material. If, at Wellclik&rsquo;s request, any member sends Material to improve the site (for example to customer support), Wellclik will also consider that Material to be non-confidential and non-proprietary and will not be liable for use or disclosure of the Material. Any communication by you to Wellclik is subject to this Agreement. You hereby grant and agree to grant Wellclik, under all of your rights in the Material, a worldwide, non-exclusive, perpetual, irrevocable, royalty-free, fully-paid, sublicensable and transferable right and license to incorporate, use, publish and exploit such Material for any purpose whatsoever, commercial or otherwise, including but not limited to incorporating it in the systems, documentation, or any product or service, without compensation or accounting to you and without further recourse by you.</p>\n\n<h3>Interactions with other users and private Messaging</h3>\n\n<p>Users are solely responsible for interactions with others. Users understand that Wellclik does not in any way screen its users. All users agree to exercise caution and good judgment in all interactions with others, particularly if meeting offline or in person. Messaging is your way to communicate privately with other Wellclik members. It&rsquo;s essentially email, but purely for Wellclik members. Messages are primarily intended for communicating about transactions and services.</p>\n\n<div class=\"career-list\">\n<ul>\n	<li>You must not use Messages to send unsolicited advertising or promotions, request samples, loans, donations or &quot;spam&rdquo;. You must not pass on email addresses or any other information on to third parties.</li>\n	<li>Spamming other Practitioners or Users in order to ask them to &lsquo;follow&rsquo; your own profile will not be tolerated.</li>\n	<li>Please use common sense when giving out personal information to others via messaging, for example don&rsquo;t send someone your credit card details.</li>\n	<li>You must not use messages to knowingly harass, threaten, blackmail or abuse another member.</li>\n	<li>If someone explicitly tells you not to contact them, you must not use Messages to contact them again, unless you are involved in an open transaction.</li>\n	<li>You must not use Messages to interfere with a transaction. This means&hellip;</li>\n	<li>You must not contact another member to buy or sell an item listed on Wellclik outside of the Wellclik.com site. This may also constitute fee avoidance.</li>\n	<li>You must not communicate with a member involved in an active or completed transaction to warn the member away from a particular Practitioner or service.</li>\n</ul>\n</div>\n\n<p>As an anti-spam measure, sending too many messages too quickly may auto-disable your account. Contact support@wellclik.com who will review account activity and enable your account if spam-free.</p>\n\n<h3>Information Control</h3>\n\n<p>Wellclik does not control the Content provided by users that is made available on Wellclik. You may find some Content to be offensive, harmful, inaccurate, or deceptive. There are also risks of dealing with underage persons or people acting under false pretense.</p>\n\n<p>Additionally, there may also be risks dealing with international trade. By using Wellclik, you agree to accept such risks and that Wellclik (and Wellclik&#39;s officers, directors, agents, subsidiaries, joint ventures and employees) is not responsible for any acts or omissions of users on Wellclik. Please use caution, common sense, and practice safe buying and selling when using Wellclik.com. Other Resources: Wellclik is not responsible for the availability of outside websites or resources linked to or referenced on the Site. Wellclik is not responsible or liable for any content, advertising, products, or other materials on or available from such websites or resources. You agree that Wellclik shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with the use of or reliance on any such content, goods or services available on or through any such websites or resources or via pop ups which may appear when accessing the Site from your computer.</p>\n\n<h3>Resolution of Disputes and Release</h3>\n\n<p>In the event a dispute arises between you and Wellclik.com, please contact Wellclik.com. For transactions completed by Stripe: Wellclik will not make judgements regarding legal issues or claims and all disputes related to financial transactions will ultimately be determined by Stripe. Wellclik will only intervene when a Practitioner does resolve a financial transaction which they are rightfully obliged to, in line with these terms and conditions.</p>\n\n<h3>Terms</h3>\n\n<p>Set Up Fees: the fees payable by the Subscriber to customise the software to the Subscriber&rsquo;s specifications and the design of the Mobile Applications. Services: the software services provided by the Supplier to the Subscriber under this agreement via the User Website and the Mobile Applications. The services are identified in the invoice received by the Subscriber upon ordering the Services and is priced according to the particular features required by the Subscriber. Software: the software applications provided by the Supplier as part of the Services. Subscriber&rsquo;s Customers: the individuals who purchase products and services from the Subscriber. Subscription Fees: the subscription fees payable by the Subscriber to the Supplier for the Services either annually or monthly. Subscription Term: being the Initial Subscription Term together with any subsequent Renewal Periods.</p>\n\n<h4>Privacy Statement</h4>\n\n<p>Wellclik Limited, respects and protects your right to privacy in relation to your interactions with this website. We have adopted the following policies to safeguard your personal information and to protect its confidentiality. Any information which is provided by you to wellclik.com via this website or otherwise will be treated in accordance with the terms of the Data Protection Acts 1988 and 2003 (the &quot;Acts&quot;) and/or such amending or replacement legislation as may be adopted in Ireland from time to time. You should read this Privacy Statement carefully before using this website. If you do not read or if you disagree with any aspect of the Privacy Statement, you should not use this website. Your use of this website signifies your agreement to be bound by the terms of this Privacy Statement.</p>\n\n<h4>Access by Minors</h4>\n\n<p>If you are aged 18 or under, you should not use this website nor should you provide any personal information to us via the website.</p>\n\n<h3>Collection and Use of Information</h3>\n\n<h4>Information For Consumers</h4>\n\n<p>Contacting Practitioner and/or Studios via our Website: If you are a consumer seeking to arrange a consultation with a Practitioner and/or Studios of healthcare, wellness, holistic and similar services and other parties listed on the website www.wellclik.com (a &quot;Practitioner and/or Studio&quot;), then you will be asked to provide certain personal information to us so that Practitioners and/or Studios who are registered with us can decide if they wish to offer services to you. Such information will include, without limitation, details such as your name, address, contact details (including email and telephone number) and relevant medical information. If you do not wish to provide your name to us, you may use an alias. If you wish to arrange a consultation with a Practitioner and/or Studio, then you acknowledge that we may provide all information that you have submitted to us via the website including any personal information to that Practitioner and/or Studio and you explicitly consent to such disclosure. This information may also include statistical information concerning your use of the Website.</p>\n\n<p>Registered Users: Certain functions on our Website require you to set up an account and to become a registered user of our Website and requires you to give us details of your name, address, phone number, valid email address and certain other personal information. You may include other information to personalise your account, such as your gender and your reviews of Practitioner and/or Studio. You acknowledge and agree that information which is publicly available on your account (such as your user name, reviews and comments which you post on our Website) may become publicly available and used by third parties, and we have no obligations to you for any information which you made publicly available. You also explicitly consent to our processing your personal data and the transfer and disclosure of your personal information to Practitioner and/or Studio that are based in countries where protections for personal data are not as strong as those in Ireland under the Acts or in the European Union generally.</p>\n\n<p>We use any personal information you provide to identify you as a prospective patient, to process your request for services, and to deliver relevant information about you to Practitioner and/or Studio and to facilitate consultations with Practitioner and/or Studio. We may also use your contact details, phone number and email address, to contact you from time to time to update you as to progress in relation to your consultation with a Practitioner and/or Studio and other matters concerning the service we provide. You consent to us contacting you in this regard. We will not sell your personal information to any third parties for marketing purposes without your consent.</p>\n\n<p>We may from time to time transfer your data to one of our authorised service Practitioner and/or Studio for customer service or service quality purposes. We will ensure that our authorised service Practitioner and/or Studio process your information in a secure manner and in accordance with this Privacy Statement.</p>\n\n<p>We may also receive anonymous data from third parties which, when combined with other data which we retain, may be capable of identifying you. This combined data will be safeguarded by us in the same way as other personal data as described in this Privacy Statement.</p>\n\n<p>We may use the information you make available to us to send you details of promotions or offers. If you do not wish us to contact you for marketing purposes, you may notify us by following the &quot;unsubscribe&quot; links on email communications issued by us and/or contacting us directly at +353 (0)85 7558203</p>\n\n<p>Apart from the information you provide us with during the course of our provision of Services to you, we may also collect and process the following data: When you contact us, we will keep a record of that correspondence; Site visit data, technical and statistical data. See the section on technical and statistical data later below. Information we collect using cookies and/or selected third party websites. See the section on Cookies below. Communication with Us, Practitioner and/or Studio, or other Users of our Services through comments, feedback and either private or public messaging on site services;</p>\n\n<h3>Information For Practitioner and/or Studio</h3>\n\n<p>If you are a Practitioner and/or Studio (or a representative of a Practitioner and/or Studio) who wishes to use wellclik.com&rsquo;s online marketplace, then you will be asked to submit personal information as part of our registration process, for example, name, email address, phone number etc. This personal information will be used to facilitate medical consultations with prospective patients. You explicitly consent to the disclosure of all necessary personal information to prospective patients. Other than this authorised disclosure, wellclik.com will not release any personal information to any third parties without your prior consent except for the purposes of validating information or unless we reasonably believe that we are required to do so by operation of law. Wellclik.com retains the right at all times to contact you in relation to the services provided on this website.</p>\n\n<p>We use any personal information you provide to identify you as a Practitioner and/or Studio, to process your registration, to verify credit or other charge card details, to process your credit card transactions and to deliver relevant information about you to prospective patients and to facilitate consultations with prospective patients. We will not give or sell your personal information to any third parties for marketing purposes without your consent.</p>\n\n<p>You also acknowledge and agree that in certain circumstances we may be obliged to disclose personal information that you have provided to us to third parties, for example, to our credit card payment service provider, in order to conform to any requirements of law or to comply with any legal process, as well as to protect and defend our rights and/or the rights of prospective patients.</p>\n\n<h3>General</h3>\n\n<p>If at any time after giving us this information you decide that you no longer wish us to hold or use this information, or in the case that the information becomes out of date, you are free to notify us, and we will endeavour to remove or rectify the information promptly. We do not collect or keep your personal data unless it is necessary for the purposes(s) set out in this Statement, nor do we keep your personal data for longer than is necessary.</p>\n\n<h4>How we use your information</h4>\n\n<p>Information collected is used by us in order to facilitate your enquiry to Practitioner and/or Studio listed on the site, and for any other purposes set out herein. This includes, in certain circumstances, the transfer of your information to our third party data processors who assist with the performance of certain Services or elements thereof. Your information may be processed in the following ways:</p>\n\n<div class=\"career-list\">\n<ul>\n	<li>for general account management</li>\n	<li>to provide, monitor and improve our Services;</li>\n	<li>to help identify you;</li>\n	<li>to serve appropriate and tailored marketing material and content via SMS, email, phone, push notification, post or otherwise, in accordance with your marketing preferences;</li>\n	<li>to help diagnose system problems and to administer our Website;</li>\n	<li>to gather broad demographic information about you, such as determining your location in relation to the services that are most suitable for your needs;</li>\n	<li>to carry out customer research, testing and analysis;</li>\n	<li>to enable us to comply with any legal or regulatory requirements.</li>\n</ul>\n</div>\n\n<h3>Sharing and Transfer of Information</h3>\n\n<div class=\"career-list\">\n<ul>\n	<li>a. Wellclik.com may share User or Practitioner and/or Studio information with trusted third parties to provide you with services you have indicated you are interested in, to increase site performance or to enhance the end-user experience.</li>\n	<li>b. You also acknowledge and agree that in certain circumstances we may be obliged to disclose personal information that you have provided to us to third parties, including, but not limited to, any relevant regulator and law enforcement agencies for example, in order to conform to any requirements of law or to comply with any legal process, as well as to protect and defend our rights.</li>\n	<li>c. Wellclik.com reserves the right to transfer information (including any personal information you provide) to a third party in the event of a sale, merger, liquidation, receivership or transfer of all or substantially all of the assets of Wellclik.com , a subsidiary or line of business associated with Wellclik.com.</li>\n	<li>d. We may from time to time transfer your data to one of our authorised service providers for customer service, business management or for any of the purposes described herein. We will ensure that service providers process your information under strict contractual instruction, in a secure manner and in accordance with this Privacy Policy.</li>\n</ul>\n</div>\n\n<h3>Links to Third Party Sites</h3>\n\n<p>You should also be aware that where you link to another website from this website, that wellclik.com has no control over that other website. Accordingly, wellclik.com cannot guarantee that the controller of that website will respect your privacy in the same manner as Wellclik.com.</p>\n\n<h3>Access to your Personal Information</h3>\n\n<p>You have the right to request a copy of the information which we hold about you (for which we may charge you a small fee) and to have inaccuracies in your information corrected.</p>\n\n<h3>Use of your Personal Information by Third Parties</h3>\n\n<p>Except as otherwise set out in this Privacy Statement this policy only addresses the use and disclosure of information that wellclik.com collects from you. We cannot guarantee and accept no liability in the event that a Practitioner and/or Studio (if you are a consumer) or any other third party gives your personal data to third parties or in any way impinges upon your data protection or privacy rights.</p>\n\n<h4>Technical and Statistical Data</h4>\n\n<p>Due to the nature of the internet, we cannot guarantee the protection of your personal data and therefore we are not responsible for any loss or damage resulting to you when the website is used. You should be aware that each time you visit a website, two general levels of information about your visit can be retained. The first level comprises statistical and other analytical information collected on an aggregate and non-individual specific basis of all browsers who visit the website and the second is information which is personal or particular to a specific visitor who knowingly chooses to provide that information. The statistical and analytical information provides us with a general and non-individual specific information about the number of people who visit this website; the number of people who return to the website; the pages that they visit; and where they were before they came to the website and the page in the website at which they exited. This information helps us monitor traffic on a website so that we can manage the website&#39;s capacity and efficiency. This type of non-personal information and data can be collected through the standard operation for internet servers and logs as well as &quot;cookies&quot; and other technical mechanisms.</p>\n\n<h4>IP Addresses and Cookies</h4>\n\n<p>Like almost all commercial websites, Wellclik.com records statistical data and uses Cookies to improve site performance.</p>\n\n<h4>Statistical data:</h4>\n\n<p>The Wellclik.com site logs certain statistical data, such as IP address, the type of operating systems used and browser types used. This statistical data is not connected to personal information, and so user information is anonymous. For example, if we know that a growing number of users have a new type of browser, we know that it&rsquo;s a good idea to test new pages and features in that browser.</p>\n\n<h4>What are cookies?</h4>\n\n<p>A Cookie allows websites to remember you, and it helps many of the features of the website to work better. We use Cookies to help our website load faster, and to make it easier and faster for users to log in. These small packets of information are stored on your computer by your browser. Cookies help us learn about how people interact with our site, and so we can make improvements based on the information.</p>\n\n<h4>What kind of Cookies do we use?</h4>\n\n<p>Our site uses two kinds of Cookies; our own, and Cookies from third parties. We use Cookies to operate and personalize the Wellclik.com. They help us to track page views and conversion and also return visits from users over a two year period.</p>\n\n<h4>What third-party services do we use?</h4>\n\n<p>&lsquo;Third parties&rsquo; are approved partner websites and those Cookies can be used for things like measurement and reporting, but may be also used to track your interests and to retarget you on other websites with advertising. We aim to be as transparent as possible around our use of Cookies, so we&#39;ve listed all the third parties we work with below. Google Analytics is used to track general visitor interactions such as page views and conversion. We also use it for demographic and interest reporting and to understand our audience for remarketing purposes. We also use it to measure the success of marketing campaigns using Google Adwords and Bing Ads.</p>\n\n<p>To learn more about Google&#39;s data policy see here http://www.google.com/intl/en/policies/privacy/partners/. Google provides a tool to allow you to prevent your data from being used by Google Analytics. Click here https://tools.google.com/dlpage/gaoptout/ to download it. We use AdRoll to track how you use the site to target ads to you on other websites. Information about how to opt out of AdRoll services can be found here https://help.adroll.com/hc/en-us/articles/203845070-How-do-I-opt-out-. We use a Facebook Cookie for audience building and conversion tracking. Facebook&#39;s Cookie policy can be found here https://www.facebook.com/help/cookies/</p>\n\n<h3>How long do they last?</h3>\n\n<p>Cookies generally have a &lsquo;lifespan&rsquo; and after that period they expire. Some expire as soon as you log off, and some last for weeks or longer. Cookies on our site are renewed when you visit or log in, and usually expire after 7 to 30 days of inactivity. Cookies that we use to personalise the experience for returning visitors may have a lifespan of up to two years.</p>\n\n<h3>Switching off cookies:</h3>\n\n<p>Most web browsers automatically accept Cookies. Your browser should tell you how to turn off the automatic acceptance of Cookies if you look through settings. This will almost certainly create issues when using the Wellclik.com site. Unless you have adjusted your browser setting so that it will refuse all Cookies, our system will issue Cookies when you log on to our site. If you are concerned with 3rd party Cookies (other than our own) there is excellent advice available here: http://www.youronlinechoices.com/ie/</p>\n\n<h3>Disclaimer</h3>\n\n<p>Wellclik.com ITS DIRECTORS, EMPLOYEES, SERVANTS AND AGENTS, AFFILIATES OR OTHER REPRESENTATIVES AND THEIR RESPECTIVE PARENT AND SUBSIDIARY COMPANIES, SHALL NOT BE LIABLE IN RESPECT OF ANY CLAIMS, EMERGENCIES, DEMANDS, CAUSES OF ACTION, DAMAGES, LOSSES, EXPENSES, INCLUDING WITHOUT LIMITATION, REASONABLE LEGAL FEES AND COSTS OF PROCEEDINGS ARISING OUT OF OR IN CONNECTION WITH THE USE AND/OR DISSEMINATION OF PERSONAL INFORMATION RELATING TO YOU IN ACCORDANCE WITH THIS PRIVACY POLICY AND YOUR CONSENTS.</p>\n\n<h4>Amendments</h4>\n\n<p>Wellclik.com reserves the right in its sole discretion to amend this privacy policy at any time, and you should regularly check this privacy policy for any amendments.</p>\n\n<h4>Governing Law and Jurisdiction</h4>\n\n<p>This Privacy Statement is governed by the laws of Ireland and you submit to the exclusive jurisdiction of the Irish courts.</p>\n</div>\n</div>\n</div>\n', 'Terms Of Use', 'Terms Of Use', 'Terms Of Use');
INSERT INTO `tbl_dynamic_pages` (`page_id`, `page_name`, `slug`, `page_title`, `front_status`, `page_description`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(12, 'Cancellation Policies', 'cancellation-policies', 'Cancellation Policies', '1', '<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong><br />\n<br />\nNam varius interdum tellus, in semper nisi commodo id. In hac habitasse platea dictumst. Nam faucibus lacinia arcu sed suscipit. Donec eget turpis a dolor iaculis congue ut quis massa. Aenean lobortis, nibh sed mollis rutrum, tortor dolor tempor quam, vitae tempor neque lacus ut urna. Suspendisse ut sollicitudin magna. Maecenas commodo cursus leo vitae efficitur. Quisque sollicitudin blandit efficitur. Phasellus pulvinar nec erat sed rutrum. Maecenas ut consequat metus, non feugiat turpis. Etiam tempor eu nibh tempor convallis. Nullam vulputate congue accumsan. Quisque a pharetra arcu. Praesent consectetur mi eu ligula pretium ultricies. Morbi ac nulla purus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\n\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Sed sollicitudin ex ut augue aliquet, quis congue ante vehicula. Maecenas mi elit, consectetur ut vehicula sed, posuere eget lorem. Sed eget nisl vel ante sodales rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris scelerisque sapien id blandit fermentum. Donec non sem sapien. Nam convallis lacinia justo semper ornare. Integer accumsan ac purus sit amet bibendum. Pellentesque sed felis varius, tincidunt leo ac, commodo leo. Integer tempus dui quis erat varius sodales. Aenean sapien est, tristique vel elit vel, pellentesque hendrerit mauris. Cras lacinia eu sem non scelerisque. Aenean posuere, dolor sed tincidunt interdum, purus urna dapibus quam, sit amet sollicitudin justo nulla efficitur risus. Duis blandit tortor eu dictum bibendum.</p>\n\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong>In nunc metus, gravida in nunc ut, imperdiet bibendum turpis.</strong><br />\n<br />\nSed ultrices auctor euismod. Maecenas vitae velit auctor, pretium arcu tincidunt, pulvinar felis. Etiam sagittis erat sed mi mattis, a sodales ante mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin tristique lacus sit amet justo luctus laoreet. Maecenas ac ligula ut libero posuere sagittis. Vivamus vitae lacus dapibus, rutrum nulla eget, vehicula ipsum. Cras venenatis ligula vel magna commodo sollicitudin. Maecenas ac blandit lectus. Quisque posuere purus nunc, a semper libero venenatis ut. Phasellus tortor turpis, sodales at massa sit amet, dictum feugiat ipsum.</p>\n\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">In molestie diam massa, non feugiat purus auctor a. Aenean porttitor tortor id urna molestie dignissim. Donec tincidunt, tortor non venenatis tristique, dolor mauris porta sapien, ac vehicula elit tellus at lectus. Ut augue mauris, cursus eu convallis ut, volutpat eu risus. Duis dolor ante, aliquam at accumsan quis, euismod et enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent vitae tincidunt turpis. Maecenas porta vehicula tristique. Phasellus convallis augue vitae massa egestas, vitae gravida risus ultrices. Pellentesque a hendrerit libero, sit amet aliquet ligula. Maecenas sed ante egestas, maximus diam id, pulvinar arcu. Nam non metus et tellus accumsan interdum nec sed felis.</p>\n\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong>Nullam id venenatis purus, in hendrerit elit.</strong><br />\n<br />\nMorbi luctus nisi eu quam tincidunt, vitae dictum augue accumsan. Fusce posuere leo ut enim tincidunt tincidunt. In tincidunt, sapien vitae suscipit porttitor, quam velit cursus orci, vel rhoncus nibh velit et dui. In sit amet purus at nulla suscipit molestie. Suspendisse rutrum, enim nec congue consectetur, dui elit egestas sapien, at venenatis tortor sem eleifend neque. Vivamus vel facilisis ex. Suspendisse vitae dignissim ipsum. Nullam lobortis leo et risus accumsan, ut pharetra enim convallis. Sed eu volutpat nibh.</p>\n\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong>Duis vitae tempor lectus, sit amet eleifend purus.</strong><br />\n<br />\nDonec in est nec dui aliquam laoreet vitae sed nibh. Sed nec sem vestibulum, cursus libero et, tristique sapien. Quisque a ornare augue. Sed id aliquet orci, vel maximus arcu. Sed aliquam tellus dolor, vitae facilisis massa accumsan non. Suspendisse ultrices posuere semper. Aliquam a tempor nibh.</p>\n\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Nullam faucibus, metus sit amet hendrerit imperdiet, odio lacus tempor nunc, vitae pulvinar nulla arcu non risus. Integer rutrum maximus velit, a facilisis est fringilla vel. Fusce quis tortor vehicula, imperdiet magna id, egestas enim. <u><em>Curabitur quis mauris lectus. Suspendisse a finibus quam.</em></u> Pellentesque commodo sed neque non sagittis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum scelerisque lorem eget tristique gravida. Praesent semper arcu sapien, quis volutpat nibh ultrices pretium. Donec tincidunt elit in lacinia scelerisque. Suspendisse potenti. Fusce et nisi et nunc interdum luctus. Mauris sagittis lorem felis, ac blandit lectus ultricies nec. Nulla id pellentesque sem, et mattis felis. Mauris quis consectetur felis.</p>\n\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong>Pellentesque vitae erat erat. Maecenas ac nunc sed nunc dignissim imperdiet vitae eget sem.</strong><br />\n<br />\nDuis porttitor, ex a condimentum pulvinar, dui ex mollis elit, at euismod sapien nibh at magna. Nam nunc nibh, ornare ac vulputate sollicitudin, molestie congue est. Suspendisse vehicula nisl ut risus lacinia sodales. Donec lobortis sem sed tellus vehicula vestibulum. Quisque mauris mi, efficitur at imperdiet sit amet, vulputate vitae felis. Sed lorem nisl, lobortis eget suscipit ut, <em><strong>ullamcorper sed velit</strong></em>. Nullam tortor leo, suscipit a nisl non, vulputate imperdiet lacus. In semper sollicitudin nulla, ut lobortis orci maximus quis. Mauris elementum at quam id laoreet. Fusce accumsan ac nulla ut vehicula. Mauris consectetur a nisi fringilla vehicula. Aliquam at odio est.</p>\n', 'Cancellation Policies', 'CANCELLATION POLICIES  ', 'CANCELLATION POLICIES  '),
(20, 'Page Name ', 'page-name', 'Page Name ', '2', '<p>Page Name</p>\n', 'Page Name ', 'Page Name ', 'Page Name '),
(26, 'How It Works For Studio', 'how-it-works-for-studio', 'how it works for studio', '1', '<p>how-it-works-for-studio</p>\n', 'how it works for studio', 'how it works for studio', 'how it works for studio'),
(27, 'How It Works For Customer', 'how-it-works-for-customer', 'how it works for customer', '1', '<p>This is how it works</p>\n\n<p><img alt=\"\" src=\"https://www.tattooplatform.nl/wp-content/uploads/2014/09/oog-tattoo-620x330.jpg\" style=\"width: 620px; height: 330px;\" /></p>\n', 'how it works for customer', 'how it works for customer', 'how it works for customer'),
(28, 'Contact Us', 'contact-us', 'Contact Us', '2', '<p>Contact Us</p>\n', 'Contact Us', 'Contact Us', 'Contact Us');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email_id_master`
--

CREATE TABLE `tbl_email_id_master` (
  `id` int(5) NOT NULL,
  `contact_email` varchar(128) NOT NULL,
  `info_email` varchar(128) NOT NULL,
  `support_email` varchar(128) NOT NULL,
  `business_email` varchar(128) NOT NULL,
  `media_email` varchar(128) NOT NULL,
  `job_email` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_email_id_master`
--

INSERT INTO `tbl_email_id_master` (`id`, `contact_email`, `info_email`, `support_email`, `business_email`, `media_email`, `job_email`) VALUES
(1, 'cbvc@gmail.com', 'info@wellclik.com', 'support@wellclik.com', 'business@wellclik.com', 'media@wellclik.com', 'career@wellclik.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event_directions`
--

CREATE TABLE `tbl_event_directions` (
  `event_directions_id` int(10) NOT NULL,
  `fk_business_id` int(10) NOT NULL,
  `fk_location_id` int(10) NOT NULL,
  `event_directions_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event_instructions`
--

CREATE TABLE `tbl_event_instructions` (
  `event_instructions_id` int(10) NOT NULL,
  `fk_business_id` int(10) NOT NULL,
  `fk_service_menu_id` int(10) NOT NULL,
  `instruction_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `faq_id` int(11) NOT NULL,
  `faq_type` enum('CONSUMER','MERCHANT') NOT NULL COMMENT '''CONSUMER'',''MERCHANT''',
  `fk_faq_category_id` int(11) NOT NULL COMMENT 'Fk for faq_catrgory_id ',
  `faq_question` varchar(60) NOT NULL,
  `faq_answer` text NOT NULL,
  `faq_status` enum('Active','Block') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`faq_id`, `faq_type`, `fk_faq_category_id`, `faq_question`, `faq_answer`, `faq_status`) VALUES
(27, 'MERCHANT', 22, 'How do I set my regular business hours?', '<p>Setting your regular business hours is easy. You can set availability on a per location or per staff member basis. To set the availability simply click the date and times that location is open or the staff member is available. (You can set staff availability by clicking on the staff member). When setting availability per staff members, the sum of your staff member hours will make up your total business hours.</p>\r\n', 'Block'),
(28, 'MERCHANT', 22, 'How can I change my cancellation policy?', '<p>You can enforce a cancellation policy of up to 7 days before an appointment, which means you&#39;ll still get paid if a customer cancels within 1-7 days of their appointment. Or, let customers cancel anytime. Set your policy on the</p>\r\n', 'Active'),
(29, 'MERCHANT', 22, 'How can I change advanced notice needed for a booking?', '<p>MyTime defaults advanced notice for a booking to 2 hours. If you require more or less notice, click on &ldquo;Edit Settings&rdquo; and choose the time that works best for your business. Most customers tend to book only a day in advance, so we recommend 1 day notice or shorter.</p>\r\n', 'Active'),
(30, 'MERCHANT', 22, 'How can I block out times on my calendar?', '<p>If your calendar is synced with MyTime, we&rsquo;ll automatically block out times that you&rsquo;ve blocked on your own calendar......</p>\r\n', 'Active'),
(31, 'MERCHANT', 22, 'How can I set up buffer times between appointments?', '<p>Go to the Services Menu tab and click on edit next to the service for which you&rsquo;d like to add a buffer time between appointments. Next, click on the checkbox next to &ldquo;Add buffer time&rdquo; and indicate how many minutes you need between each appointment. Remember to save your changes at the bottom of the page.</p>\r\n', 'Active'),
(32, 'MERCHANT', 22, 'What if I use pen & paper?', '<p>If you use a pen &amp; paper calendar, MyTime will still work for you. When an appointment comes in, we will ask you to confirm the time via email, text message, or via your Appointments page. If at any point you decide to set up a calendar, our service team can set you up with a free web calendar, which will make MyTime even better for you!</p>\n', 'Active'),
(33, 'MERCHANT', 23, 'Has this customer already paid for the appointment?', '<p>Yes, all appointments booked on Wellclik are prepaid. You&rsquo;ll receive payment from Erezervo within 7 business days of the appointment via check or PayPal.</p>\n', 'Active'),
(34, 'MERCHANT', 23, 'How do I cancel an appointment?', '<p>To cancel, simply click on the &ldquo;Cancel&rdquo; link under Status. Please let the customer know why you&rsquo;re canceling first!</p>\r\n', 'Active'),
(35, 'MERCHANT', 23, 'How do I reschedule an appointment?', '<p>To update the date or time of an appointment, click the &ldquo;Edit&rdquo; link under the Status column. Please make sure you speak with Erezervo or the customer before rescheduling.</p>\r\n', 'Active'),
(36, 'MERCHANT', 23, 'Why is Gross Received different from Price Paid?', '<p>If you&rsquo;re Promoting, <span style=\"line-height: 20.8px;\">W</span><span style=\"line-height: 20.8px;\">ellcl</span><span style=\"line-height: 20.8px;\">ik</span> charges a nominal commission on just the <u>first booking</u> for each <u>new customer</u> we bring you.</p>\n', 'Active'),
(37, 'MERCHANT', 23, 'Can customers tip me through Erezervo?', '<p>Yes! After the appointment, customers can leave a tip via text message. We&rsquo;ll prompt the customer to add a tip and we waive credit card commissions on tips so you get 100% of the tip amount!</p>\r\n', 'Active'),
(38, 'MERCHANT', 23, 'Why isn\'t the appointment showing up on my calendar?', '<p>If your calendar is synced, it should appear. Please contact us and we&rsquo;ll help troubleshoot the problem so that all appointments booked via Erezervo show up on your calendar.</p>\r\n', 'Active'),
(39, 'MERCHANT', 23, 'Is this appointment confirmed?', '<p>If your calendar is synced with <span style=\"line-height: 20.8px;\">W</span><span style=\"line-height: 20.8px;\">ellcl</span><span style=\"line-height: 20.8px;\">ik</span>, we have checked that this appointment time is available, and sent confirmation to the customer. If your calendar is not synced, we need you to confirm that the time works. This can be done using the &ldquo;Confirm&rdquo; button next to the appointment, by responding to our text message, or by clicking Confirm in the appointment request email you&rsquo;ll receive from Erezervo.</p>\n', 'Active'),
(40, 'MERCHANT', 23, 'What happens if a customer cancels?', '<p>We allow you to offer a 1-7 day cancellation policy, which means you still get paid if a customer cancels within 1-7 days of their scheduled appointment. Set your cancellation policy on the <a href=\"https://www.mytime.com/settings\">Settings page</a>.</p>\r\n', 'Active'),
(41, 'MERCHANT', 23, 'What if the customer wants an additional service during thei', '<p>If a customer ends up changing or adding additional services, you can either 1) charge the customer directly for the additional services, or 2) ask them to add the charges for the additional services into the tip they add after their appointment. In the future, we&rsquo;ll make it easier for you to change the service price during the appointment.</p>\r\n', 'Active'),
(42, 'MERCHANT', 23, 'How can I change the advance notice required for booking me?', '<p>Erezervo defaults advanced notice for a booking to 2 hours. If you require more or less notice, go to the Settings tab to choose the time that works best for your business. Most customers tend to book only a day in advance, so we recommend 1 day notice or shorter.</p>\r\n', 'Active'),
(43, 'CONSUMER', 16, 'How do I activate my account?', '<p>&nbsp;</p>\n\n<p style=\"color: rgb(57, 57, 57); font-family: \'Open Sans\'; line-height: 18.5714px; box-sizing: border-box; margin: 0px 0px 10px; padding: 0px;\">The instructions to activate your account will be sent to your email once you have submitted the registration form. If you did not receive this email, your email service provider&rsquo;s mailing software may be blocking it</p>\n', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq_categories`
--

CREATE TABLE `tbl_faq_categories` (
  `faq_category_id` int(11) NOT NULL,
  `faq_category_name` varchar(255) NOT NULL,
  `faq_category_type` enum('CONSUMER','MERCHANT') NOT NULL,
  `faq_category_status` enum('Active','Block') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faq_categories`
--

INSERT INTO `tbl_faq_categories` (`faq_category_id`, `faq_category_name`, `faq_category_type`, `faq_category_status`) VALUES
(3, 'General', 'MERCHANT', 'Active'),
(4, 'Getting Bookings Through MyTime', 'MERCHANT', 'Active'),
(7, 'Syncing With Third-Party Calendars', 'MERCHANT', 'Active'),
(8, 'Getting New Customers on MyTime', 'MERCHANT', 'Active'),
(9, 'Retaining Existing Customers on MyTime', 'MERCHANT', 'Active'),
(11, 'Accessing Your Account', 'MERCHANT', 'Active'),
(16, 'MyTime\'s Pricing Plans', 'CONSUMER', 'Active'),
(20, 'test1', 'CONSUMER', 'Active'),
(21, 'General', 'CONSUMER', 'Active'),
(22, 'People & Availability', 'MERCHANT', 'Active'),
(23, 'Appointments', 'MERCHANT', 'Active'),
(24, 'test1', 'CONSUMER', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_favorites`
--

CREATE TABLE `tbl_favorites` (
  `favorite_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `fk_business_id` int(11) NOT NULL,
  `favorite_link` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gift_card`
--

CREATE TABLE `tbl_gift_card` (
  `gift_card_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `recipient_name` varchar(100) NOT NULL,
  `recipient_email` varchar(100) NOT NULL,
  `recipient_user_id` int(11) NOT NULL,
  `gift_type` enum('1','2') NOT NULL COMMENT '1 = Service Specific , 2 = General',
  `fk_business_id` int(11) NOT NULL COMMENT 'applicable only when gift type=1 otherwise business_id = 0',
  `fk_service_menu_id` int(11) NOT NULL COMMENT 'applicable only when gift type=1 otherwise service_menu_id = 0',
  `total_amount` double(10,2) NOT NULL COMMENT 'Amount of  Gift Card',
  `remaining_amount` double(10,2) NOT NULL COMMENT 'Amount remaining after use of gift card',
  `gift_card_token` varchar(255) NOT NULL,
  `transaction_ref_token` varchar(255) NOT NULL,
  `transaction_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `transaction_correlation_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_page_content`
--

CREATE TABLE `tbl_home_page_content` (
  `id` int(11) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_home_page_content`
--

INSERT INTO `tbl_home_page_content` (`id`, `content`) VALUES
(1, '<h1>Get the Ideal Look &amp; Your Own Style</h1>\n\n<h4>Tattoo Art, Inspiration, and Custom Tattoo Designs</h4>\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_slider`
--

CREATE TABLE `tbl_home_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_image` varchar(255) NOT NULL,
  `slider_link` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL COMMENT '"0"=>block,"1"=>unblock'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_home_slider`
--

INSERT INTO `tbl_home_slider` (`slider_id`, `slider_image`, `slider_link`, `status`) VALUES
(1, '55eed153d905a.jpg', 'http://www.yahoo.com/', '1'),
(2, '55e40fe348820.jpg', 'http://www.yahoo.com/', '1'),
(3, '55e4110137ecb.jpg', 'http://www.yahoo.com/', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE `tbl_location` (
  `id` int(11) NOT NULL,
  `name` varchar(250) CHARACTER SET utf8 NOT NULL,
  `districts_id` int(11) NOT NULL,
  `status` enum('1','0','2') NOT NULL COMMENT '1=Active,0=Inactive',
  `video` varchar(250) CHARACTER SET utf8 NOT NULL,
  `address` varchar(250) NOT NULL,
  `zipcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`id`, `name`, `districts_id`, `status`, `video`, `address`, `zipcode`) VALUES
(1, 'Nashik', 1, '1', '', 'Canada Corner , Collage Road , Nashik', 0),
(3, 'Mumbai', 1, '1', '', 'abcd', 0),
(4, 'Pune', 1, '1', '', 'Pune', 0),
(5, 'Katagami', 5, '2', '', 'Katagami', 423112),
(6, 'malegaon', 1, '1', '', 'college stop', 423204),
(7, 'asd', 7, '1', '', 'asd', 123123),
(8, 'jjj', 11, '1', '', 'jjj', 235689),
(9, 'Belfast', 14, '1', '', 'Belfast BT3 9JH Northern Ireland', 234324),
(10, 'Dublin', 12, '1', '', '1 O\'Connell St', 0),
(11, 'Blanchardstown', 12, '1', '', 'The LINC, Institute of Technology Blanchardstown, Blanchardstown Road North, Dublin 15, Ireland', 0),
(12, 'RANELAGH', 12, '1', '', 'RANELAGH', 0),
(13, 'banglore', 1, '1', '', '', 123456),
(14, 'dhanakwadi', 1, '1', '', '', 0),
(15, 'Nashik Road', 1, '1', '', '', 422006),
(16, 'Aagra', 50, '1', '', '', 4220),
(17, 'Panchmi', 51, '1', '', '', 422010);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_membership_master`
--

CREATE TABLE `tbl_membership_master` (
  `membership_id` int(11) NOT NULL,
  `membership_plan` varchar(200) NOT NULL,
  `membership_price` varchar(200) NOT NULL,
  `special_user_price` varchar(255) NOT NULL DEFAULT '0',
  `membership_period` int(11) NOT NULL,
  `membership_discount_price` int(11) NOT NULL,
  `membership_discount` int(11) NOT NULL,
  `membership_type` enum('month','year') NOT NULL DEFAULT 'month',
  `membership_plan_short_desc` varchar(1255) NOT NULL,
  `membership_plan_long_desc` varchar(1566) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message_to_business`
--

CREATE TABLE `tbl_message_to_business` (
  `message_id` int(50) NOT NULL,
  `fk_business_id` int(11) NOT NULL,
  `email_id` varchar(256) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_myplan_master`
--

CREATE TABLE `tbl_myplan_master` (
  `myplan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bussiness_id` int(11) NOT NULL,
  `plan_type` int(11) NOT NULL COMMENT '(membership_id  from tbl_membership_master)',
  `amount` varchar(128) NOT NULL,
  `plan_duration` varchar(128) NOT NULL,
  `myplan_card_token` varchar(128) NOT NULL,
  `transaction_ref_token` varchar(128) NOT NULL,
  `transaction_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '(start date)',
  `transaction_end_date` date NOT NULL COMMENT '(yyyy-mm-dd)',
  `transaction_correlation_id` varchar(255) NOT NULL,
  `status` enum('0','1','2') NOT NULL DEFAULT '0' COMMENT '0 = unblock , 1= block , 2 = delete',
  `is_paid` enum('unpaid','paid') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_my_styles`
--

CREATE TABLE `tbl_my_styles` (
  `id` int(11) NOT NULL,
  `style_id` int(11) NOT NULL COMMENT 'style_id of tbl  tbl_style',
  `business_user_id` int(11) NOT NULL COMMENT 'Business user ID'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_my_styles`
--

INSERT INTO `tbl_my_styles` (`id`, `style_id`, `business_user_id`) VALUES
(1, 1, 2),
(2, 2, 2),
(3, 3, 2),
(4, 4, 2),
(5, 5, 2),
(6, 6, 2),
(7, 7, 2),
(8, 1, 1),
(9, 4, 1),
(10, 7, 1),
(11, 5, 1),
(12, 2, 1),
(13, 6, 1),
(14, 3, 1),
(15, 1, 1),
(16, 2, 1),
(17, 3, 1),
(18, 4, 1),
(19, 5, 1),
(20, 6, 1),
(21, 7, 1),
(22, 1, 1),
(23, 2, 1),
(24, 3, 1),
(25, 4, 1),
(26, 5, 1),
(27, 6, 1),
(28, 7, 1),
(29, 1, 1),
(30, 2, 1),
(31, 3, 1),
(32, 4, 1),
(33, 5, 1),
(34, 6, 1),
(35, 7, 1),
(36, 1, 2),
(37, 2, 2),
(38, 3, 2),
(39, 4, 2),
(40, 5, 2),
(41, 6, 2),
(42, 7, 2),
(43, 1, 1),
(44, 2, 1),
(45, 3, 1),
(46, 4, 1),
(47, 5, 1),
(48, 6, 1),
(49, 7, 1),
(50, 1, 2),
(51, 2, 2),
(52, 3, 2),
(53, 4, 2),
(54, 5, 2),
(55, 6, 2),
(56, 7, 2),
(57, 1, 1),
(58, 2, 1),
(59, 3, 1),
(60, 4, 1),
(61, 5, 1),
(62, 6, 1),
(63, 7, 1),
(64, 1, 1),
(65, 2, 1),
(66, 3, 1),
(67, 4, 1),
(68, 5, 1),
(69, 6, 1),
(70, 7, 1),
(71, 1, 2),
(72, 2, 2),
(73, 3, 2),
(74, 4, 2),
(75, 5, 2),
(76, 6, 2),
(77, 7, 2),
(78, 1, 2),
(79, 2, 2),
(80, 3, 2),
(81, 4, 2),
(82, 5, 2),
(83, 6, 2),
(84, 7, 2),
(85, 1, 2),
(86, 2, 2),
(87, 3, 2),
(88, 4, 2),
(89, 5, 2),
(90, 6, 2),
(91, 7, 2),
(92, 1, 2),
(93, 2, 2),
(94, 3, 2),
(95, 4, 2),
(96, 5, 2),
(97, 6, 2),
(98, 7, 2),
(99, 1, 2),
(100, 2, 2),
(101, 3, 2),
(102, 4, 2),
(103, 5, 2),
(104, 6, 2),
(105, 7, 2),
(106, 1, 2),
(107, 2, 2),
(108, 3, 2),
(109, 4, 2),
(110, 5, 2),
(111, 6, 2),
(112, 7, 2),
(113, 1, 2),
(114, 2, 2),
(115, 3, 2),
(116, 4, 2),
(117, 5, 2),
(118, 6, 2),
(119, 7, 2),
(120, 1, 2),
(121, 2, 2),
(122, 3, 2),
(123, 4, 2),
(124, 5, 2),
(125, 6, 2),
(126, 7, 2),
(127, 1, 2),
(128, 2, 2),
(129, 3, 2),
(130, 4, 2),
(131, 5, 2),
(132, 6, 2),
(133, 7, 2),
(134, 1, 2),
(135, 2, 2),
(136, 3, 2),
(137, 4, 2),
(138, 5, 2),
(139, 6, 2),
(140, 7, 2),
(141, 1, 2),
(142, 2, 2),
(143, 3, 2),
(144, 4, 2),
(145, 5, 2),
(146, 6, 2),
(147, 7, 2),
(148, 1, 2),
(149, 2, 2),
(150, 3, 2),
(151, 4, 2),
(152, 5, 2),
(153, 6, 2),
(154, 7, 2),
(155, 1, 2),
(156, 2, 2),
(157, 3, 2),
(158, 4, 2),
(159, 5, 2),
(160, 6, 2),
(161, 7, 2),
(162, 1, 2),
(163, 2, 2),
(164, 3, 2),
(165, 4, 2),
(166, 5, 2),
(167, 6, 2),
(168, 7, 2),
(169, 1, 2),
(170, 2, 2),
(171, 3, 2),
(172, 4, 2),
(173, 5, 2),
(174, 6, 2),
(175, 7, 2),
(176, 1, 2),
(177, 2, 2),
(178, 3, 2),
(179, 4, 2),
(180, 5, 2),
(181, 6, 2),
(182, 7, 2),
(183, 1, 2),
(184, 2, 2),
(185, 3, 2),
(186, 4, 2),
(187, 5, 2),
(188, 6, 2),
(189, 7, 2),
(190, 1, 2),
(191, 2, 2),
(192, 3, 2),
(193, 4, 2),
(194, 5, 2),
(195, 6, 2),
(196, 7, 2),
(197, 1, 2),
(198, 2, 2),
(199, 3, 2),
(200, 4, 2),
(201, 5, 2),
(202, 6, 2),
(203, 7, 2),
(204, 1, 2),
(205, 2, 2),
(206, 3, 2),
(207, 4, 2),
(208, 5, 2),
(209, 6, 2),
(210, 7, 2),
(211, 1, 2),
(212, 2, 2),
(213, 3, 2),
(214, 4, 2),
(215, 5, 2),
(216, 6, 2),
(217, 7, 2),
(218, 1, 2),
(219, 2, 2),
(220, 3, 2),
(221, 4, 2),
(222, 5, 2),
(223, 6, 2),
(224, 7, 2),
(225, 1, 2),
(226, 2, 2),
(227, 3, 2),
(228, 4, 2),
(229, 5, 2),
(230, 6, 2),
(231, 7, 2),
(232, 1, 2),
(233, 2, 2),
(234, 3, 2),
(235, 4, 2),
(236, 5, 2),
(237, 6, 2),
(238, 7, 2),
(239, 1, 2),
(240, 2, 2),
(241, 3, 2),
(242, 4, 2),
(243, 5, 2),
(244, 6, 2),
(245, 7, 2),
(246, 1, 2),
(247, 2, 2),
(248, 3, 2),
(249, 4, 2),
(250, 5, 2),
(251, 6, 2),
(252, 7, 2),
(253, 1, 2),
(254, 2, 2),
(255, 3, 2),
(256, 4, 2),
(257, 5, 2),
(258, 6, 2),
(259, 7, 2),
(260, 1, 2),
(261, 2, 2),
(262, 3, 2),
(263, 4, 2),
(264, 5, 2),
(265, 6, 2),
(266, 7, 2),
(267, 1, 2),
(268, 2, 2),
(269, 3, 2),
(270, 4, 2),
(271, 5, 2),
(272, 6, 2),
(273, 7, 2),
(274, 1, 2),
(275, 2, 2),
(276, 3, 2),
(277, 4, 2),
(278, 5, 2),
(279, 6, 2),
(280, 7, 2),
(281, 1, 2),
(282, 2, 2),
(283, 3, 2),
(284, 4, 2),
(285, 5, 2),
(286, 6, 2),
(287, 7, 2),
(288, 1, 2),
(289, 2, 2),
(290, 3, 2),
(291, 4, 2),
(292, 5, 2),
(293, 6, 2),
(294, 7, 2),
(295, 1, 2),
(296, 2, 2),
(297, 3, 2),
(298, 4, 2),
(299, 5, 2),
(300, 6, 2),
(301, 7, 2),
(302, 1, 2),
(303, 2, 2),
(304, 3, 2),
(305, 4, 2),
(306, 5, 2),
(307, 6, 2),
(308, 7, 2),
(309, 1, 2),
(310, 2, 2),
(311, 3, 2),
(312, 4, 2),
(313, 5, 2),
(314, 6, 2),
(315, 7, 2),
(316, 1, 2),
(317, 2, 2),
(318, 3, 2),
(319, 4, 2),
(320, 5, 2),
(321, 6, 2),
(322, 7, 2),
(323, 1, 2),
(324, 2, 2),
(325, 3, 2),
(326, 4, 2),
(327, 5, 2),
(328, 6, 2),
(329, 7, 2),
(330, 1, 2),
(331, 2, 2),
(332, 3, 2),
(333, 4, 2),
(334, 5, 2),
(335, 6, 2),
(336, 7, 2),
(337, 1, 2),
(338, 2, 2),
(339, 3, 2),
(340, 4, 2),
(341, 5, 2),
(342, 6, 2),
(343, 7, 2),
(344, 1, 2),
(345, 2, 2),
(346, 3, 2),
(347, 4, 2),
(348, 5, 2),
(349, 6, 2),
(350, 7, 2),
(351, 1, 2),
(352, 2, 2),
(353, 3, 2),
(354, 4, 2),
(355, 5, 2),
(356, 6, 2),
(357, 7, 2),
(358, 1, 2),
(359, 2, 2),
(360, 3, 2),
(361, 4, 2),
(362, 5, 2),
(363, 6, 2),
(364, 7, 2),
(365, 1, 2),
(366, 2, 2),
(367, 3, 2),
(368, 4, 2),
(369, 5, 2),
(370, 6, 2),
(371, 7, 2),
(372, 1, 2),
(373, 2, 2),
(374, 3, 2),
(375, 4, 2),
(376, 5, 2),
(377, 6, 2),
(378, 7, 2),
(379, 1, 2),
(380, 2, 2),
(381, 3, 2),
(382, 4, 2),
(383, 5, 2),
(384, 6, 2),
(385, 7, 2),
(386, 1, 2),
(387, 2, 2),
(388, 3, 2),
(389, 4, 2),
(390, 5, 2),
(391, 6, 2),
(392, 7, 2),
(393, 1, 2),
(394, 2, 2),
(395, 3, 2),
(396, 4, 2),
(397, 5, 2),
(398, 6, 2),
(399, 7, 2),
(400, 1, 2),
(401, 2, 2),
(402, 3, 2),
(403, 4, 2),
(404, 5, 2),
(405, 6, 2),
(406, 7, 2),
(407, 1, 2),
(408, 2, 2),
(409, 3, 2),
(410, 4, 2),
(411, 5, 2),
(412, 6, 2),
(413, 7, 2),
(414, 1, 2),
(415, 2, 2),
(416, 3, 2),
(417, 4, 2),
(418, 5, 2),
(419, 6, 2),
(420, 7, 2),
(421, 1, 2),
(422, 2, 2),
(423, 3, 2),
(424, 4, 2),
(425, 5, 2),
(426, 6, 2),
(427, 7, 2),
(428, 1, 2),
(429, 2, 2),
(430, 3, 2),
(431, 4, 2),
(432, 5, 2),
(433, 6, 2),
(434, 7, 2),
(435, 1, 2),
(436, 2, 2),
(437, 3, 2),
(438, 4, 2),
(439, 5, 2),
(440, 6, 2),
(441, 7, 2),
(442, 1, 2),
(443, 2, 2),
(444, 3, 2),
(445, 4, 2),
(446, 5, 2),
(447, 6, 2),
(448, 7, 2),
(449, 1, 2),
(450, 2, 2),
(451, 3, 2),
(452, 4, 2),
(453, 5, 2),
(454, 6, 2),
(455, 7, 2),
(456, 1, 2),
(457, 2, 2),
(458, 3, 2),
(459, 4, 2),
(460, 5, 2),
(461, 6, 2),
(462, 7, 2),
(463, 1, 2),
(464, 2, 2),
(465, 3, 2),
(466, 4, 2),
(467, 5, 2),
(468, 6, 2),
(469, 7, 2),
(470, 1, 2),
(471, 2, 2),
(472, 3, 2),
(473, 4, 2),
(474, 5, 2),
(475, 6, 2),
(476, 7, 2),
(477, 1, 2),
(478, 2, 2),
(479, 3, 2),
(480, 4, 2),
(481, 5, 2),
(482, 6, 2),
(483, 7, 2),
(484, 1, 2),
(485, 2, 2),
(486, 3, 2),
(487, 4, 2),
(488, 5, 2),
(489, 6, 2),
(490, 7, 2),
(491, 1, 2),
(492, 2, 2),
(493, 3, 2),
(494, 4, 2),
(495, 5, 2),
(496, 6, 2),
(497, 7, 2),
(498, 1, 2),
(499, 2, 2),
(500, 3, 2),
(501, 4, 2),
(502, 5, 2),
(503, 6, 2),
(504, 7, 2),
(505, 1, 2),
(506, 2, 2),
(507, 3, 2),
(508, 4, 2),
(509, 5, 2),
(510, 6, 2),
(511, 7, 2),
(512, 1, 2),
(513, 2, 2),
(514, 3, 2),
(515, 4, 2),
(516, 5, 2),
(517, 6, 2),
(518, 7, 2),
(519, 1, 2),
(520, 2, 2),
(521, 3, 2),
(522, 4, 2),
(523, 5, 2),
(524, 6, 2),
(525, 7, 2),
(526, 1, 2),
(527, 2, 2),
(528, 3, 2),
(529, 4, 2),
(530, 5, 2),
(531, 6, 2),
(532, 7, 2),
(533, 1, 2),
(534, 2, 2),
(535, 3, 2),
(536, 4, 2),
(537, 5, 2),
(538, 6, 2),
(539, 7, 2),
(540, 1, 2),
(541, 2, 2),
(542, 3, 2),
(543, 4, 2),
(544, 5, 2),
(545, 6, 2),
(546, 7, 2),
(547, 1, 2),
(548, 2, 2),
(549, 3, 2),
(550, 4, 2),
(551, 5, 2),
(552, 6, 2),
(553, 7, 2),
(554, 1, 2),
(555, 2, 2),
(556, 3, 2),
(557, 4, 2),
(558, 5, 2),
(559, 6, 2),
(560, 7, 2),
(561, 1, 2),
(562, 2, 2),
(563, 3, 2),
(564, 4, 2),
(565, 5, 2),
(566, 6, 2),
(567, 7, 2),
(568, 1, 2),
(569, 2, 2),
(570, 3, 2),
(571, 4, 2),
(572, 5, 2),
(573, 6, 2),
(574, 7, 2),
(575, 1, 3),
(576, 4, 3),
(577, 7, 3),
(583, 8, 4),
(584, 5, 4),
(585, 2, 4),
(586, 4, 5),
(587, 1, 5),
(588, 5, 5),
(589, 2, 5),
(590, 1, 5),
(591, 2, 5),
(592, 4, 5),
(593, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(60) NOT NULL,
  `news_desc` text NOT NULL,
  `news_image` varchar(30) NOT NULL,
  `news_status` enum('Active','Block') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `news_title`, `news_desc`, `news_image`, `news_status`) VALUES
(1, 'df', '<p>dsf</p>\n', 'noimage.jpg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newsletter_master`
--

CREATE TABLE `tbl_newsletter_master` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(256) CHARACTER SET utf8 NOT NULL,
  `news_description` text CHARACTER SET utf8 NOT NULL,
  `newsletter_subject` varchar(250) CHARACTER SET utf8 NOT NULL,
  `news_status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_newsletter_master`
--

INSERT INTO `tbl_newsletter_master` (`news_id`, `news_title`, `news_description`, `newsletter_subject`, `news_status`) VALUES
(1, 'test', '<p>&nbsp; &nbsp; &nbsp; &nbsp; test</p>\n', 'test', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newsletter_subscriber`
--

CREATE TABLE `tbl_newsletter_subscriber` (
  `sub_id` int(11) NOT NULL,
  `sub_email` varchar(256) NOT NULL,
  `sub_name` varchar(128) NOT NULL DEFAULT 'NA',
  `sub_zipcode` varchar(10) NOT NULL DEFAULT 'NA',
  `sub_city` varchar(100) NOT NULL DEFAULT 'NA',
  `sub_status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_newsletter_subscriber`
--

INSERT INTO `tbl_newsletter_subscriber` (`sub_id`, `sub_email`, `sub_name`, `sub_zipcode`, `sub_city`, `sub_status`) VALUES
(1, 'sayalip@webwingtechnologies.com', 'NA', 'NA', 'Deçan', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notifications`
--

CREATE TABLE `tbl_notifications` (
  `notification_id` int(11) NOT NULL,
  `sender_id` int(11) DEFAULT NULL COMMENT '1= User, 2= Business User from tbl_user_master',
  `receiver_id` int(11) DEFAULT NULL COMMENT '(form tbl_user_master)',
  `to_staff_id` int(11) DEFAULT NULL,
  `notification` varchar(1000) DEFAULT NULL,
  `booking_type` enum('walk in','online') DEFAULT NULL,
  `walkin_id` int(11) DEFAULT NULL,
  `links` varchar(255) DEFAULT NULL,
  `is_read` enum('YES','NO') NOT NULL DEFAULT 'NO',
  `admin_read` enum('YES','NO') NOT NULL DEFAULT 'NO',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notifications`
--

INSERT INTO `tbl_notifications` (`notification_id`, `sender_id`, `receiver_id`, `to_staff_id`, `notification`, `booking_type`, `walkin_id`, `links`, `is_read`, `admin_read`, `date`) VALUES
(1, 2, 5, NULL, 'Thanks for booking service of Bodytech Tattooing And Piercing', 'online', NULL, NULL, 'YES', 'NO', '2018-09-11 11:13:01'),
(3, 2, 1, NULL, 'Thanks for booking tattoo of Bodytech Tattooing And Piercing', 'online', NULL, NULL, 'YES', 'NO', '2018-09-11 12:22:20'),
(5, 2, 1, NULL, 'Thanks for booking service of Bodytech Tattooing And Piercing', 'online', NULL, NULL, 'YES', 'NO', '2018-09-11 13:23:24'),
(7, NULL, 2, NULL, 'New booking has been received from&nbspSelena&nbsp;Gomez', 'walk in', 2, NULL, 'NO', 'NO', '2018-09-12 06:38:28'),
(8, 6, 7, NULL, 'Thanks for booking service of  Deesan studio', 'online', NULL, NULL, 'NO', 'NO', '2018-09-12 09:22:58'),
(9, 7, 6, NULL, 'New booking has been received from&nbspUser&nbsp;Patil', 'online', NULL, NULL, 'NO', 'NO', '2018-09-12 09:22:58'),
(10, NULL, 6, NULL, 'New booking has been received from&nbspVrajesh&nbsp;Pandey', 'walk in', 4, NULL, 'NO', 'NO', '2018-09-12 09:31:53'),
(11, NULL, 6, NULL, 'New booking has been received from&nbspdemo &nbsp;customer', 'walk in', 7, NULL, 'YES', 'NO', '2018-09-12 09:43:17'),
(12, 2, 5, NULL, 'Thanks for booking tattoo of Bodytech Tattooing And Piercing', 'online', NULL, NULL, 'NO', 'NO', '2018-09-12 11:30:04'),
(13, 5, 2, NULL, 'New booking has been received from&nbspSachin&nbsp;Jagtap', 'online', NULL, NULL, 'NO', 'NO', '2018-09-12 11:30:04'),
(14, NULL, 5, NULL, 'Thanks for booking tattoo of ', 'online', NULL, NULL, 'NO', 'NO', '2018-09-12 11:32:25'),
(15, 5, NULL, NULL, 'New booking has been received from&nbspSachin&nbsp;Jagtap', 'online', NULL, NULL, 'NO', 'NO', '2018-09-12 11:32:25'),
(16, 2, 5, NULL, 'Thanks for booking tattoo of Bodytech Tattooing And Piercing', 'online', NULL, NULL, 'NO', 'NO', '2018-09-12 12:29:49'),
(17, 5, 2, NULL, 'New booking has been received from&nbspSachin&nbsp;Jagtap', 'online', NULL, NULL, 'NO', 'NO', '2018-09-12 12:29:49'),
(18, NULL, 2, NULL, 'New booking has been received from&nbspSachin&nbsp;Jagtap', 'walk in', 8, NULL, 'NO', 'NO', '2018-09-13 09:26:41'),
(19, NULL, 5, NULL, 'Thanks for booking service of ', 'online', NULL, NULL, 'NO', 'NO', '2018-09-26 12:51:55'),
(20, 5, NULL, NULL, 'New booking has been received from&nbspSachin&nbsp;Jagtap', 'online', NULL, NULL, 'NO', 'NO', '2018-09-26 12:51:55'),
(21, NULL, 4, NULL, 'New booking has been received from&nbspRavikant&nbsp;Shinde', 'walk in', 9, NULL, 'NO', 'NO', '2018-09-27 10:36:34'),
(22, NULL, 5, NULL, 'Thanks for booking service of ', 'online', NULL, NULL, 'NO', 'NO', '2018-10-24 10:49:30'),
(23, 5, NULL, NULL, 'New booking has been received from&nbspSachin&nbsp;Jagtap', 'online', NULL, NULL, 'NO', 'NO', '2018-10-24 10:49:30'),
(24, 2, 5, NULL, 'Thanks for booking service of Bodytech Tattooing And Piercing', 'online', NULL, NULL, 'NO', 'NO', '2018-10-24 12:31:33'),
(25, 5, 2, NULL, 'New booking has been received from&nbspSachin&nbsp;Jagtap', 'online', NULL, NULL, 'NO', 'NO', '2018-10-24 12:31:33'),
(26, NULL, 9, NULL, 'Thanks for booking tattoo of ', 'online', NULL, NULL, 'NO', 'NO', '2018-10-25 08:46:38'),
(27, 9, NULL, NULL, 'New booking has been received from&nbspAdolf&nbsp;rebelo', 'online', NULL, NULL, 'NO', 'NO', '2018-10-25 08:46:38'),
(28, 2, 9, NULL, 'Thanks for booking tattoo of Bodytech Tattooing And Piercing', 'online', NULL, NULL, 'NO', 'NO', '2018-10-25 08:48:17'),
(29, 9, 2, NULL, 'New booking has been received from&nbspAdolf&nbsp;rebelo', 'online', NULL, NULL, 'NO', 'NO', '2018-10-25 08:48:17'),
(30, 2, 11, NULL, 'Thanks for booking tattoo of Bodytech Tattooing And Piercing', 'online', NULL, NULL, 'NO', 'NO', '2018-10-25 08:53:55'),
(31, 11, 2, NULL, 'New booking has been received from&nbspWebwing&nbsp;Technologies', 'online', NULL, NULL, 'NO', 'NO', '2018-10-25 08:53:55'),
(32, 2, 11, NULL, 'Thanks for booking service of Bodytech Tattooing And Piercing', 'online', NULL, NULL, 'NO', 'NO', '2018-10-25 09:41:07'),
(33, 11, 2, NULL, 'New booking has been received from&nbspWebwing&nbsp;Technologies', 'online', NULL, NULL, 'NO', 'NO', '2018-10-25 09:41:07'),
(34, 2, 5, NULL, 'Thanks for booking tattoo of Bodytech Tattooing And Piercing', 'online', NULL, NULL, 'NO', 'NO', '2018-10-30 06:43:46'),
(35, 5, 2, NULL, 'New booking has been received from&nbspSachin&nbsp;Jagtap', 'online', NULL, NULL, 'NO', 'NO', '2018-10-30 06:43:46'),
(36, 2, 5, NULL, 'Thanks for booking tattoo of Bodytech Tattooing And Piercing', 'online', NULL, NULL, 'NO', 'NO', '2018-10-30 06:44:23'),
(37, 5, 2, NULL, 'New booking has been received from&nbspSachin&nbsp;Jagtap', 'online', NULL, NULL, 'NO', 'NO', '2018-10-30 06:44:24'),
(38, 2, 5, NULL, 'Thanks for booking tattoo of Bodytech Tattooing And Piercing', 'online', NULL, NULL, 'NO', 'NO', '2018-10-30 06:45:00'),
(39, 5, 2, NULL, 'New booking has been received from&nbspSachin&nbsp;Jagtap', 'online', NULL, NULL, 'NO', 'NO', '2018-10-30 06:45:00'),
(40, 2, 5, NULL, 'Thanks for booking tattoo of Bodytech Tattooing And Piercing', 'online', NULL, NULL, 'NO', 'NO', '2018-10-31 09:04:01'),
(41, 5, 2, NULL, 'New booking has been received from&nbspSachin&nbsp;Jagtap', 'online', NULL, NULL, 'NO', 'NO', '2018-10-31 09:04:01'),
(42, 2, 5, NULL, 'Thanks for booking tattoo of Bodytech Tattooing And Piercing', 'online', NULL, NULL, 'NO', 'NO', '2018-10-31 09:44:07'),
(43, 5, 2, NULL, 'New booking has been received from&nbspSachin&nbsp;Jagtap', 'online', NULL, NULL, 'NO', 'NO', '2018-10-31 09:44:07'),
(44, 2, 5, NULL, 'Thanks for booking tattoo of Bodytech Tattooing And Piercing', 'online', NULL, NULL, 'NO', 'NO', '2018-10-31 10:02:35'),
(45, 5, 2, NULL, 'New booking has been received from&nbspSachin&nbsp;Jagtap', 'online', NULL, NULL, 'NO', 'NO', '2018-10-31 10:02:35'),
(46, 2, 5, NULL, 'Thanks for booking tattoo of Bodytech Tattooing And Piercing', 'online', NULL, NULL, 'NO', 'NO', '2018-10-31 10:04:54'),
(47, 5, 2, NULL, 'New booking has been received from&nbspSachin&nbsp;Jagtap', 'online', NULL, NULL, 'NO', 'NO', '2018-10-31 10:04:54'),
(48, 2, 5, NULL, 'Thanks for booking tattoo of Bodytech Tattooing And Piercing', 'online', NULL, NULL, 'NO', 'NO', '2018-10-31 10:05:34'),
(49, 5, 2, NULL, 'New booking has been received from&nbspSachin&nbsp;Jagtap', 'online', NULL, NULL, 'NO', 'NO', '2018-10-31 10:05:34'),
(50, 2, 5, NULL, 'Thanks for booking tattoo of Bodytech Tattooing And Piercing', 'online', NULL, NULL, 'NO', 'NO', '2018-10-31 10:06:17'),
(51, 5, 2, NULL, 'New booking has been received from&nbspSachin&nbsp;Jagtap', 'online', NULL, NULL, 'NO', 'NO', '2018-10-31 10:06:17'),
(52, 2, 5, NULL, 'Thanks for booking service of Bodytech Tattooing And Piercing', 'online', NULL, NULL, 'NO', 'NO', '2018-10-31 10:31:42'),
(53, 5, 2, NULL, 'New booking has been received from&nbspSachin&nbsp;Jagtap', 'online', NULL, NULL, 'NO', 'NO', '2018-10-31 10:31:42'),
(54, 2, 5, NULL, 'Thanks for booking tattoo of Bodytech Tattooing And Piercing', 'online', NULL, NULL, 'NO', 'NO', '2019-01-07 04:37:15'),
(55, 5, 2, NULL, 'New booking has been received from&nbspSachin&nbsp;Jagtap', 'online', NULL, NULL, 'NO', 'NO', '2019-01-07 04:37:15'),
(56, 2, 5, NULL, 'Thanks for booking tattoo of Bodytech Tattooing And Piercing', 'online', NULL, NULL, 'NO', 'NO', '2019-01-07 06:11:41'),
(57, 5, 2, NULL, 'New booking has been received from&nbspSachin&nbsp;Jagtap', 'online', NULL, NULL, 'NO', 'NO', '2019-01-07 06:11:42'),
(58, 2, 5, NULL, 'Thanks for booking service of Bodytech Tattooing And Piercing', 'online', NULL, NULL, 'NO', 'NO', '2019-01-07 07:08:15'),
(59, 5, 2, NULL, 'New booking has been received from&nbspSachin&nbsp;Jagtap', 'online', NULL, NULL, 'NO', 'NO', '2019-01-07 07:08:15'),
(60, 2, 5, NULL, 'Thanks for booking service of Bodytech Tattooing And Piercing', 'online', NULL, NULL, 'NO', 'NO', '2019-01-07 09:18:56'),
(61, 5, 2, NULL, 'New booking has been received from&nbspSachin&nbsp;Jagtap', 'online', NULL, NULL, 'NO', 'NO', '2019-01-07 09:18:56'),
(62, 2, 5, NULL, 'Thanks for booking tattoo of Bodytech Tattooing And Piercing', 'online', NULL, NULL, 'NO', 'NO', '2019-01-07 11:54:56'),
(63, 5, 2, NULL, 'New booking has been received from&nbspSachin&nbsp;Jagtap', 'online', NULL, NULL, 'NO', 'NO', '2019-01-07 11:54:56'),
(64, 2, 5, NULL, 'Thanks for booking tattoo of Bodytech Tattooing And Piercing', 'online', NULL, NULL, 'NO', 'NO', '2019-01-07 11:56:19'),
(65, 5, 2, NULL, 'New booking has been received from&nbspSachin&nbsp;Jagtap', 'online', NULL, NULL, 'NO', 'NO', '2019-01-07 11:56:19'),
(66, 2, 5, NULL, 'Thanks for booking tattoo of Bodytech Tattooing And Piercing', 'online', NULL, NULL, 'NO', 'NO', '2019-01-07 13:31:27'),
(67, 5, 2, NULL, 'New booking has been received from&nbspSachin&nbsp;Jagtap', 'online', NULL, NULL, 'NO', 'NO', '2019-01-07 13:31:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `card_no` varchar(255) NOT NULL,
  `card_cvc` int(11) NOT NULL,
  `card_exp_month` varchar(255) NOT NULL,
  `card_exp_year` varchar(255) NOT NULL,
  `paid_amount` varchar(255) NOT NULL,
  `txn_id` varchar(220) NOT NULL,
  `balance_transaction` varchar(220) NOT NULL,
  `stripeResponse` text,
  `payment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`id`, `user_id`, `card_no`, `card_cvc`, `card_exp_month`, `card_exp_year`, `paid_amount`, `txn_id`, `balance_transaction`, `stripeResponse`, `payment_date`) VALUES
(1, 5, '4242424242424242', 123, '05', '2020', '55.00', 'ch_1D99nh4Tucnt6y0wI0ES1uuF', 'txn_1D99nh4Tucnt6y0wuAqQUKp5', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1D99nh4Tucnt6y0wI0ES1uuF\",\"object\":\"charge\",\"amount\":5500,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1D99nh4Tucnt6y0wuAqQUKp5\",\"captured\":true,\"created\":1536664377,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2018-09-11 11:12:58'),
(2, 1, '5555555555554444', 123, '12', '2022', '68', 'ch_1D9Asl4Tucnt6y0w92oWf03f', 'txn_1D9Asl4Tucnt6y0wMPcbZHme', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1D9Asl4Tucnt6y0w92oWf03f\",\"object\":\"charge\",\"amount\":6800,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1D9Asl4Tucnt6y0wMPcbZHme\",\"captured\":true,\"created\":1536668535,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2018-09-11 12:22:16'),
(3, 1, '5555555555554444', 123, '12', '2022', '55.00', 'ch_1D9Bps4Tucnt6y0wFcmDdjIw', 'txn_1D9Bps4Tucnt6y0wb4nviP5F', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1D9Bps4Tucnt6y0wFcmDdjIw\",\"object\":\"charge\",\"amount\":5500,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1D9Bps4Tucnt6y0wb4nviP5F\",\"captured\":true,\"created\":1536672200,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2018-09-11 13:23:20'),
(4, 7, '5555555555554444', 123, '12', '2022', '150.00', 'ch_1D9UYk4Tucnt6y0webma2FRl', 'txn_1D9UYl4Tucnt6y0wtggc7kED', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1D9UYk4Tucnt6y0webma2FRl\",\"object\":\"charge\",\"amount\":15000,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1D9UYl4Tucnt6y0wtggc7kED\",\"captured\":true,\"created\":1536744174,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2018-09-12 09:22:55'),
(5, 5, '4242424242424242', 123, '05', '2020', '68', 'ch_1D9WXj4Tucnt6y0wUmWvAmaI', 'txn_1D9WXj4Tucnt6y0wgWDI8Tmm', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1D9WXj4Tucnt6y0wUmWvAmaI\",\"object\":\"charge\",\"amount\":6800,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1D9WXj4Tucnt6y0wgWDI8Tmm\",\"captured\":true,\"created\":1536751799,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2018-09-12 11:29:59'),
(6, 5, '4242424242424242', 123, '05', '2020', '193', 'ch_1D9Wa14Tucnt6y0w8NHOpVGk', 'txn_1D9Wa14Tucnt6y0wYMgqHjmG', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1D9Wa14Tucnt6y0w8NHOpVGk\",\"object\":\"charge\",\"amount\":19300,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1D9Wa14Tucnt6y0wYMgqHjmG\",\"captured\":true,\"created\":1536751941,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2018-09-12 11:32:22'),
(7, 5, '4242424242424242', 123, '05', '2020', '68', 'ch_1D9XTY4Tucnt6y0wCQAer0IW', 'txn_1D9XTY4Tucnt6y0wXziwpTAP', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1D9XTY4Tucnt6y0wCQAer0IW\",\"object\":\"charge\",\"amount\":6800,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1D9XTY4Tucnt6y0wXziwpTAP\",\"captured\":true,\"created\":1536755384,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2018-09-12 12:29:45'),
(8, 5, '5105105105105100', 325, '11', '2022', '120.00', 'ch_1DEcUc4Tucnt6y0w3fJudCr4', 'txn_1DEcUc4Tucnt6y0wBp4VPl61', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1DEcUc4Tucnt6y0w3fJudCr4\",\"object\":\"charge\",\"amount\":12000,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1DEcUc4Tucnt6y0wBp4VPl61\",\"captured\":true,\"created\":1537966310,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"payment_intent\":null,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2018-09-26 12:51:51'),
(9, 5, '4111111111111111', 121, '12', '2021', '120.00', 'ch_1DOjvU4Tucnt6y0wdbwwCuk9', 'txn_1DOjvU4Tucnt6y0wPL1n3IDo', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1DOjvU4Tucnt6y0wdbwwCuk9\",\"object\":\"charge\",\"amount\":12000,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1DOjvU4Tucnt6y0wPL1n3IDo\",\"captured\":true,\"created\":1540378164,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"payment_intent\":null,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2018-10-24 10:49:24'),
(10, 5, '5105105105105100', 121, '11', '2022', '13', 'ch_1DOlWF4Tucnt6y0wSErxS7vN', 'txn_1DOlWF4Tucnt6y0wC9GVIfNj', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1DOlWF4Tucnt6y0wSErxS7vN\",\"object\":\"charge\",\"amount\":1300,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1DOlWF4Tucnt6y0wC9GVIfNj\",\"captured\":true,\"created\":1540384287,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"payment_intent\":null,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2018-10-24 12:31:27'),
(11, 9, '5105105105105100', 121, '10', '2022', '193', 'ch_1DP4U94Tucnt6y0whcc42o5k', 'txn_1DP4U94Tucnt6y0wlPL9bQLt', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1DP4U94Tucnt6y0whcc42o5k\",\"object\":\"charge\",\"amount\":19300,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1DP4U94Tucnt6y0wlPL9bQLt\",\"captured\":true,\"created\":1540457193,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"payment_intent\":null,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2018-10-25 08:46:34'),
(12, 9, '5105105105105100', 212, '10', '2021', '74', 'ch_1DP4Vk4Tucnt6y0wJiLYzhuc', 'txn_1DP4Vk4Tucnt6y0wmok8A01V', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1DP4Vk4Tucnt6y0wJiLYzhuc\",\"object\":\"charge\",\"amount\":7400,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1DP4Vk4Tucnt6y0wmok8A01V\",\"captured\":true,\"created\":1540457292,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"payment_intent\":null,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2018-10-25 08:48:13'),
(13, 11, '5105105105105100', 321, '11', '2022', '74', 'ch_1DP4bC4Tucnt6y0wOfTGSddr', 'txn_1DP4bD4Tucnt6y0wxwN6gyk1', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1DP4bC4Tucnt6y0wOfTGSddr\",\"object\":\"charge\",\"amount\":7400,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1DP4bD4Tucnt6y0wxwN6gyk1\",\"captured\":true,\"created\":1540457630,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"payment_intent\":null,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2018-10-25 08:53:51'),
(14, 11, '5105105105105100', 212, '10', '2021', '6', 'ch_1DP5Kr4Tucnt6y0wAHLioZFb', 'txn_1DP5Kr4Tucnt6y0wkDdI6pO2', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1DP5Kr4Tucnt6y0wAHLioZFb\",\"object\":\"charge\",\"amount\":600,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1DP5Kr4Tucnt6y0wkDdI6pO2\",\"captured\":true,\"created\":1540460461,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"payment_intent\":null,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2018-10-25 09:41:02'),
(15, 5, '5105105105105100', 213, '10', '2022', '68', 'ch_1DQqwz4Tucnt6y0w8ZewaUy2', 'txn_1DQqwz4Tucnt6y0wCcIalZrh', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1DQqwz4Tucnt6y0w8ZewaUy2\",\"object\":\"charge\",\"amount\":6800,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1DQqwz4Tucnt6y0wCcIalZrh\",\"captured\":true,\"created\":1540881821,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"payment_intent\":null,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2018-10-30 06:43:42'),
(16, 5, '5105105105105100', 432, '11', '2025', '68', 'ch_1DQqxb4Tucnt6y0w2GpA0FUC', 'txn_1DQqxb4Tucnt6y0wMkRS6oBM', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1DQqxb4Tucnt6y0w2GpA0FUC\",\"object\":\"charge\",\"amount\":6800,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1DQqxb4Tucnt6y0wMkRS6oBM\",\"captured\":true,\"created\":1540881859,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"payment_intent\":null,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2018-10-30 06:44:19'),
(17, 5, '5105105105105100', 324, '11', '2022', '68', 'ch_1DQqyB4Tucnt6y0wtvRtqwol', 'txn_1DQqyB4Tucnt6y0wlJLP4oLn', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1DQqyB4Tucnt6y0wtvRtqwol\",\"object\":\"charge\",\"amount\":6800,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1DQqyB4Tucnt6y0wlJLP4oLn\",\"captured\":true,\"created\":1540881895,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"payment_intent\":null,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2018-10-30 06:44:56'),
(18, 5, '4111111111111111', 212, '10', '2022', '68', 'ch_1DRFcH4Tucnt6y0wWWv8E3bY', 'txn_1DRFcH4Tucnt6y0wMygW80fH', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1DRFcH4Tucnt6y0wWWv8E3bY\",\"object\":\"charge\",\"amount\":6800,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1DRFcH4Tucnt6y0wMygW80fH\",\"captured\":true,\"created\":1540976637,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"payment_intent\":null,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2018-10-31 09:03:57'),
(19, 5, '4111111111111111', 352, '10', '2021', '68', 'ch_1DRGF44Tucnt6y0wY7Ls7hAK', 'txn_1DRGF44Tucnt6y0wKUzFVGKM', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1DRGF44Tucnt6y0wY7Ls7hAK\",\"object\":\"charge\",\"amount\":6800,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1DRGF44Tucnt6y0wKUzFVGKM\",\"captured\":true,\"created\":1540979042,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"payment_intent\":null,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2018-10-31 09:44:03'),
(20, 5, '4111111111111111', 468, '12', '2022', '68', 'ch_1DRGWx4Tucnt6y0w1H2Vua0x', 'txn_1DRGWx4Tucnt6y0wfN2dwCqk', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1DRGWx4Tucnt6y0w1H2Vua0x\",\"object\":\"charge\",\"amount\":6800,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1DRGWx4Tucnt6y0wfN2dwCqk\",\"captured\":true,\"created\":1540980151,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"payment_intent\":null,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2018-10-31 10:02:31'),
(21, 5, '4111111111111111', 280, '11', '2022', '68', 'ch_1DRGZC4Tucnt6y0wDXLdPyR8', 'txn_1DRGZC4Tucnt6y0wI4n4PcgF', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1DRGZC4Tucnt6y0wDXLdPyR8\",\"object\":\"charge\",\"amount\":6800,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1DRGZC4Tucnt6y0wI4n4PcgF\",\"captured\":true,\"created\":1540980290,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"payment_intent\":null,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2018-10-31 10:04:51'),
(22, 5, '4111111111111111', 652, '10', '2022', '68', 'ch_1DRGZq4Tucnt6y0w41HzRYxw', 'txn_1DRGZq4Tucnt6y0w48SwVLp2', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1DRGZq4Tucnt6y0w41HzRYxw\",\"object\":\"charge\",\"amount\":6800,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1DRGZq4Tucnt6y0w48SwVLp2\",\"captured\":true,\"created\":1540980330,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"payment_intent\":null,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2018-10-31 10:05:30'),
(23, 5, '4111111111111111', 41, '10', '2022', '68', 'ch_1DRGaV4Tucnt6y0wuBeLZgSV', 'txn_1DRGaV4Tucnt6y0wnL16LdF1', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1DRGaV4Tucnt6y0wuBeLZgSV\",\"object\":\"charge\",\"amount\":6800,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1DRGaV4Tucnt6y0wnL16LdF1\",\"captured\":true,\"created\":1540980371,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"payment_intent\":null,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2018-10-31 10:06:12'),
(24, 5, '5105105105105100', 263, '12', '2025', '37', 'ch_1DRGz74Tucnt6y0wfmcBA5Zm', 'txn_1DRGz84Tucnt6y0wO6l6lohd', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1DRGz74Tucnt6y0wfmcBA5Zm\",\"object\":\"charge\",\"amount\":3700,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1DRGz84Tucnt6y0wO6l6lohd\",\"captured\":true,\"created\":1540981897,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"payment_intent\":null,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2018-10-31 10:31:38'),
(25, 5, '4012888888881881', 258, '11', '2022', '68', 'ch_1DpprP4Tucnt6y0wZHgADqwE', 'txn_1DpprP4Tucnt6y0w5Cuw4zJ3', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1DpprP4Tucnt6y0wZHgADqwE\",\"object\":\"charge\",\"amount\":6800,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1DpprP4Tucnt6y0w5Cuw4zJ3\",\"captured\":true,\"created\":1546835831,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"payment_intent\":null,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2019-01-07 04:37:11'),
(26, 5, '4111111111111111', 145, '06', '2021', '68', 'ch_1DprKm4Tucnt6y0wjnJ9T2uG', 'txn_1DprKn4Tucnt6y0w9lFeRI5p', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1DprKm4Tucnt6y0wjnJ9T2uG\",\"object\":\"charge\",\"amount\":6800,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1DprKn4Tucnt6y0w9lFeRI5p\",\"captured\":true,\"created\":1546841496,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"payment_intent\":null,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2019-01-07 06:11:37'),
(27, 5, '4111111111111111', 213, '10', '2022', '22', 'ch_1DpsDW4Tucnt6y0wfwiDb5Xj', 'txn_1DpsDX4Tucnt6y0wX8PmCk72', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1DpsDW4Tucnt6y0wfwiDb5Xj\",\"object\":\"charge\",\"amount\":2200,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1DpsDX4Tucnt6y0wX8PmCk72\",\"captured\":true,\"created\":1546844890,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"payment_intent\":null,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2019-01-07 07:08:11'),
(28, 5, '4111111111111111', 413, '06', '2022', '1', 'ch_1DpuFz4Tucnt6y0wGqOdhO9P', 'txn_1DpuFz4Tucnt6y0wxQEgdnYj', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1DpuFz4Tucnt6y0wGqOdhO9P\",\"object\":\"charge\",\"amount\":100,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1DpuFz4Tucnt6y0wxQEgdnYj\",\"captured\":true,\"created\":1546852731,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"payment_intent\":null,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2019-01-07 09:18:52'),
(29, 5, '4111111111111111', 852, '11', '2022', '68', 'ch_1Dpwgw4Tucnt6y0wthL10JBo', 'txn_1Dpwgw4Tucnt6y0w9DpHzLA1', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1Dpwgw4Tucnt6y0wthL10JBo\",\"object\":\"charge\",\"amount\":6800,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1Dpwgw4Tucnt6y0w9DpHzLA1\",\"captured\":true,\"created\":1546862090,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"payment_intent\":null,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2019-01-07 11:54:51'),
(30, 5, '4111111111111111', 213, '10', '2022', '68', 'ch_1DpwiI4Tucnt6y0wsSzDLNnn', 'txn_1DpwiI4Tucnt6y0wdQuyv6xT', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1DpwiI4Tucnt6y0wsSzDLNnn\",\"object\":\"charge\",\"amount\":6800,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1DpwiI4Tucnt6y0wdQuyv6xT\",\"captured\":true,\"created\":1546862174,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"payment_intent\":null,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2019-01-07 11:56:14'),
(31, 5, '4012888888881881', 123, '10', '2021', '68', 'ch_1DpyCM4Tucnt6y0whKttJshJ', 'txn_1DpyCM4Tucnt6y0w0dItqvRz', '{\"\\u0000*\\u0000_apiKey\":\"sk_test_randomkey\",\"\\u0000*\\u0000_values\":{\"id\":\"ch_1DpyCM4Tucnt6y0whKttJshJ\",\"object\":\"charge\",\"amount\":6800,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"balance_transaction\":\"txn_1DpyCM4Tucnt6y0w0dItqvRz\",\"captured\":true,\"created\":1546867882,\"currency\":\"usd\",\"customer\":null,\"description\":\"Tattoo Charges\",\"destination\":null,\"dispute\":null,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{},\"on_behalf_of\":null,\"order\":null,\"outcome\":{},\"paid\":true,\"payment_intent\":null,\"receipt_email\":null,\"receipt_number\":null,\"refunded\":false,\"refunds\":{},\"review\":null,\"shipping\":null,\"source\":{},\"source_transfer\":null,\"statement_descriptor\":null,\"status\":\"succeeded\",\"transfer_group\":null},\"\\u0000*\\u0000_unsavedValues\":{},\"\\u0000*\\u0000_transientValues\":{},\"\\u0000*\\u0000_retrieveOptions\":[]}', '2019-01-07 13:31:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_price`
--

CREATE TABLE `tbl_price` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL COMMENT 'service_menu_id of tbl_services_menu',
  `color_id` int(11) NOT NULL COMMENT 'color_id of tbl_color',
  `size_id` int(11) NOT NULL COMMENT 'size_id of tbl_size',
  `color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `time` double(20,0) NOT NULL COMMENT 'in minutes',
  `price` decimal(20,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_price`
--

INSERT INTO `tbl_price` (`id`, `service_id`, `color_id`, `size_id`, `color`, `size`, `time`, `price`, `created_at`) VALUES
(3, 10, 7, 9, 'Brown', '20 Cm\'ss', 45, '120.00', '2018-09-11 12:59:05'),
(5, 12, 7, 10, 'Brown', '25 Cm\'ss', 40, '120.00', '2018-09-12 09:21:05'),
(6, 12, 10, 9, 'Gray', '20 Cm\'ss', 50, '150.00', '2018-09-12 09:21:05'),
(21, 11, 5, 1, 'Red', '5 - 10 Cm\'ss', 30, '55.00', '2018-10-25 10:44:00'),
(22, 11, 7, 1, 'Brown', '5 - 10 Cm\'ss', 30, '95.00', '2018-10-25 10:44:00'),
(31, 14, 7, 2, 'Brown', '12 Cm\'ss', 90, '120.00', '2018-10-25 11:10:35'),
(33, 13, 5, 2, 'Red', '12 Cm\'ss', 90, '160.00', '2018-10-25 11:36:37'),
(34, 15, 7, 3, 'Brown', '15 Cm\'ss', 60, '210.00', '2018-10-25 11:46:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_promocode_master`
--

CREATE TABLE `tbl_promocode_master` (
  `promo_id` int(11) NOT NULL,
  `promo_code` varchar(100) NOT NULL,
  `promo_discount` int(11) NOT NULL,
  `promo_exp_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review_ratings`
--

CREATE TABLE `tbl_review_ratings` (
  `id` int(11) NOT NULL,
  `rating_user_id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL,
  `professional` varchar(255) NOT NULL,
  `hard_worker` varchar(255) NOT NULL,
  `excellent_hire` varchar(255) NOT NULL,
  `trust_worthy` varchar(255) NOT NULL,
  `friendly` varchar(255) NOT NULL,
  `overall_rating` varchar(255) NOT NULL,
  `review_msg` varchar(255) NOT NULL,
  `review_status` enum('Active','Block') NOT NULL DEFAULT 'Active',
  `is_delete` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0= not delete, 1= delete',
  `rating_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services_menu`
--

CREATE TABLE `tbl_services_menu` (
  `service_menu_id` int(11) NOT NULL,
  `fk_business_id` int(11) NOT NULL,
  `fk_category_id` int(11) NOT NULL,
  `fk_subcat_id` int(11) NOT NULL,
  `service_index` int(10) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `service_cat_name` varchar(50) NOT NULL,
  `service_duration` int(11) DEFAULT NULL COMMENT 'In Minutes',
  `service_capacity` int(11) NOT NULL,
  `service_description` text,
  `questions_answers` text CHARACTER SET utf8 COMMENT 'json_encode array(''question_id''=>''answer_id'')',
  `offered_by` text CHARACTER SET utf8 COMMENT 'json_encode staff_id from  tbl_people_avail',
  `regular_price_new` int(11) DEFAULT NULL,
  `service_style` varchar(250) NOT NULL,
  `service_color` varchar(250) NOT NULL,
  `service_size` varchar(250) NOT NULL,
  `service_status` enum('Active','Block') NOT NULL DEFAULT 'Active',
  `regular_price_exisiting` int(11) DEFAULT NULL,
  `is_offpeak_time` enum('Deactive','Active') NOT NULL DEFAULT 'Deactive',
  `offpeak_type` enum('All','Specific') NOT NULL,
  `offpeak_price_new` int(11) DEFAULT NULL,
  `offpeak_price_exisiting` int(11) DEFAULT NULL,
  `offpeak_times` enum('ALL','MULTIPLE') DEFAULT NULL,
  `pause_status` enum('1','0') NOT NULL DEFAULT '0' COMMENT '1. If Paused  0.If NOT Paused ',
  `is_setup` enum('YES','NO') DEFAULT 'NO' COMMENT 'NO-NOTSETUP   YES-SETUP',
  `time_slot_type` enum('All','Specific') NOT NULL,
  `is_delete` enum('0','1','2') NOT NULL DEFAULT '0' COMMENT '0 => undeleted , 1 => deleted',
  `service_type` enum('service','event') NOT NULL DEFAULT 'service',
  `service_start_date` date DEFAULT NULL,
  `service_end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_services_menu`
--

INSERT INTO `tbl_services_menu` (`service_menu_id`, `fk_business_id`, `fk_category_id`, `fk_subcat_id`, `service_index`, `service_name`, `service_cat_name`, `service_duration`, `service_capacity`, `service_description`, `questions_answers`, `offered_by`, `regular_price_new`, `service_style`, `service_color`, `service_size`, `service_status`, `regular_price_exisiting`, `is_offpeak_time`, `offpeak_type`, `offpeak_price_new`, `offpeak_price_exisiting`, `offpeak_times`, `pause_status`, `is_setup`, `time_slot_type`, `is_delete`, `service_type`, `service_start_date`, `service_end_date`) VALUES
(10, 2, 1, 2, 0, 'eyes', '', NULL, 0, NULL, NULL, NULL, 0, '1,6', '', '', 'Active', NULL, 'Deactive', 'All', NULL, NULL, NULL, '0', 'YES', 'All', '0', 'service', NULL, NULL),
(11, 1, 7, 16, 0, 'Arms', '', NULL, 0, NULL, NULL, NULL, 0, '1,5,7', '', '', 'Active', NULL, 'Deactive', 'All', NULL, NULL, NULL, '0', 'YES', 'All', '0', 'service', NULL, NULL),
(12, 3, 1, 1, 0, 'Head', '', NULL, 0, NULL, NULL, NULL, 0, '1', '7,10', '10,9', 'Active', NULL, 'Deactive', 'All', NULL, NULL, NULL, '0', 'YES', 'All', '0', 'service', NULL, NULL),
(13, 1, 1, 2, 0, 'eyes', 'Face', NULL, 0, NULL, NULL, NULL, 0, '1,3,5', '', '', 'Active', NULL, 'Deactive', 'All', NULL, NULL, NULL, '0', 'YES', 'All', '0', 'service', NULL, NULL),
(14, 1, 6, 15, 0, 'Head', '', NULL, 0, NULL, NULL, NULL, 0, '6,7', '', '', 'Active', NULL, 'Deactive', 'All', NULL, NULL, NULL, '0', 'YES', 'All', '0', 'service', NULL, NULL),
(15, 1, 2, 5, 0, 'heel', 'leg', NULL, 0, NULL, NULL, NULL, 0, '1,7', '7', '3', 'Active', NULL, 'Deactive', 'All', NULL, NULL, NULL, '0', 'YES', 'All', '0', 'service', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services_staff`
--

CREATE TABLE `tbl_services_staff` (
  `id` int(11) NOT NULL,
  `fk_location_id` int(11) DEFAULT NULL,
  `fk_service_id` int(11) NOT NULL,
  `fk_staff_id` text NOT NULL,
  `fk_business_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_services_staff`
--

INSERT INTO `tbl_services_staff` (`id`, `fk_location_id`, `fk_service_id`, `fk_staff_id`, `fk_business_id`) VALUES
(3, NULL, 10, '2', 2),
(6, NULL, 12, '4', 3),
(7, NULL, 12, '5', 3),
(30, NULL, 11, '1', 1),
(31, NULL, 11, '3', 1),
(44, NULL, 14, '3', 1),
(47, NULL, 13, '1', 1),
(48, NULL, 13, '3', 1),
(49, NULL, 15, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_offpeak_times`
--

CREATE TABLE `tbl_service_offpeak_times` (
  `offpeak_time_id` int(11) NOT NULL,
  `fk_service_menu_id` int(11) NOT NULL,
  `day` enum('MON','TUE','WED','THU','FRI','SAT','SUN') NOT NULL COMMENT 'Week day',
  `start_time` time NOT NULL COMMENT 'for display 12 hours / for storing 24 hours',
  `end_time` time NOT NULL COMMENT 'for display 12 hours / for storing 24 hours'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_packages`
--

CREATE TABLE `tbl_service_packages` (
  `package_id` int(11) NOT NULL COMMENT 'PK for packages',
  `fk_business_id` int(11) NOT NULL COMMENT 'Fk business information',
  `fk_subcat_id` int(11) NOT NULL COMMENT 'Fk subcat id',
  `package_name` varchar(255) NOT NULL COMMENT 'Package Name',
  `no_of_appointments` int(2) NOT NULL COMMENT 'Max Appointments',
  `expires` int(3) NOT NULL COMMENT 'In Days',
  `package_details` varchar(500) NOT NULL COMMENT 'Package Description',
  `can_be_used_for` text CHARACTER SET utf8 NOT NULL COMMENT 'Json encoded array of service_menu_id',
  `package_price` double(10,2) NOT NULL COMMENT 'Package price'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_pakages`
--

CREATE TABLE `tbl_service_pakages` (
  `ser_pk_id` int(11) NOT NULL,
  `pakage_name` varchar(50) NOT NULL,
  `pk_service_menu_id` text NOT NULL,
  `fk_business_id` int(11) NOT NULL,
  `pakage_qty` int(11) NOT NULL,
  `pakage_duration` int(11) NOT NULL COMMENT '(days)',
  `price` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_delete` enum('YES','NO') NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_time`
--

CREATE TABLE `tbl_service_time` (
  `time_id` int(11) NOT NULL,
  `fk_business_id` int(11) NOT NULL,
  `service_time_count` int(50) NOT NULL,
  `service_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_time_slots`
--

CREATE TABLE `tbl_service_time_slots` (
  `time_slot_id` int(11) NOT NULL,
  `fk_service_menu_id` int(11) NOT NULL,
  `day` enum('MON','TUE','WED','THU','FRI','SAT','SUN') NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_site_settings`
--

CREATE TABLE `tbl_site_settings` (
  `id` int(11) NOT NULL,
  `stripe_tansaction_fees` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_site_settings`
--

INSERT INTO `tbl_site_settings` (`id`, `stripe_tansaction_fees`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_site_status`
--

CREATE TABLE `tbl_site_status` (
  `site_id` int(11) NOT NULL,
  `site_status` enum('0','1') NOT NULL DEFAULT '1' COMMENT '0=>offline,1=>online'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_site_status`
--

INSERT INTO `tbl_site_status` (`site_id`, `site_status`) VALUES
(1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_size`
--

CREATE TABLE `tbl_size` (
  `id` int(11) NOT NULL,
  `size_name` varchar(255) NOT NULL,
  `size_slug` varchar(255) NOT NULL,
  `is_delete` enum('0','1') NOT NULL DEFAULT '0',
  `size_status` enum('Active','Block') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_size`
--

INSERT INTO `tbl_size` (`id`, `size_name`, `size_slug`, `is_delete`, `size_status`) VALUES
(1, '5 - 10 Cm\'ss', '5-10-cmss', '0', 'Active'),
(2, '12 Cm\'ss', '12-cmss', '0', 'Active'),
(3, '15 Cm\'ss', '15-cmss', '0', 'Active'),
(4, '10', '10', '1', 'Active'),
(5, '121', '121', '1', 'Active'),
(6, '1235', '1235', '1', 'Active'),
(7, '125', '125', '1', 'Active'),
(8, '1236', '1236', '1', 'Active'),
(9, '20 Cm\'ss', '20-cmss', '0', 'Active'),
(10, '25 Cm\'ss', '25-cmss', '0', 'Active'),
(11, '20 Cm\\\\\\\'ss', '20-cmss', '1', 'Active'),
(12, '20 Cm\\\\\\\'ss', '20-cmss', '1', 'Active'),
(13, '5 - 10 cm', '5-10-cm', '0', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social_link`
--

CREATE TABLE `tbl_social_link` (
  `social_id` int(11) NOT NULL,
  `facebook` varchar(256) NOT NULL,
  `twitter` varchar(256) NOT NULL,
  `googleplus` varchar(128) NOT NULL,
  `instagram` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_social_link`
--

INSERT INTO `tbl_social_link` (`social_id`, `facebook`, `twitter`, `googleplus`, `instagram`) VALUES
(1, 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.googleplus.com', 'https://www.instagram.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff_block_off_time`
--

CREATE TABLE `tbl_staff_block_off_time` (
  `block_off_id` int(11) NOT NULL,
  `fk_business_id` int(11) NOT NULL,
  `fk_location_id` int(11) NOT NULL,
  `fk_staff_id` int(11) NOT NULL,
  `block_off_title` varchar(250) NOT NULL,
  `block_off_start_date` date NOT NULL,
  `block_off_end_date` date NOT NULL,
  `block_off_start_time` time NOT NULL,
  `block_off_end_time` time NOT NULL,
  `off_note` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff_location_hours`
--

CREATE TABLE `tbl_staff_location_hours` (
  `location_hours_id` int(11) NOT NULL,
  `fk_staff_id` text NOT NULL COMMENT 'FK tbl_business_staff',
  `fk_location_id` int(11) NOT NULL COMMENT 'FK tbl_business_locations',
  `fk_business_id` int(11) NOT NULL COMMENT 'fk business_id',
  `day_of_week` enum('MON','TUE','WED','THU','FRI','SAT','SUN') NOT NULL COMMENT 'Monday- Sunday',
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `by_appointment` enum('YES','NO') NOT NULL DEFAULT 'NO',
  `in_out` enum('IN','OUT') NOT NULL DEFAULT 'IN',
  `fk_service_menu_id` int(11) NOT NULL,
  `booked_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_staff_location_hours`
--

INSERT INTO `tbl_staff_location_hours` (`location_hours_id`, `fk_staff_id`, `fk_location_id`, `fk_business_id`, `day_of_week`, `start_time`, `end_time`, `by_appointment`, `in_out`, `fk_service_menu_id`, `booked_count`) VALUES
(1, '3,2', 1, 1, 'MON', '08:00:00', '10:00:00', 'NO', 'IN', 1, 1),
(5, '3,2', 1, 1, 'FRI', '09:00:00', '11:00:00', 'NO', 'IN', 1, 7),
(6, '3,2', 1, 1, 'SAT', '12:00:00', '14:00:00', 'NO', 'IN', 1, 5),
(7, '3,2', 1, 1, 'SUN', '13:30:00', '15:30:00', 'NO', 'IN', 1, 2),
(8, '2', 1, 1, 'MON', '01:30:00', '03:30:00', 'NO', 'IN', 2, 1),
(9, '1', 2, 1, 'MON', '09:30:00', '11:30:00', 'NO', 'IN', 2, 0),
(10, '1', 1, 1, 'MON', '07:00:00', '08:00:00', 'NO', 'IN', 3, 0),
(11, '2', 2, 1, 'MON', '07:00:00', '08:00:00', 'NO', 'IN', 3, 1),
(12, '1', 1, 1, 'TUE', '08:30:00', '09:30:00', 'NO', 'IN', 3, 0),
(13, '2', 2, 1, 'TUE', '04:00:00', '05:00:00', 'NO', 'IN', 3, 0),
(14, '2', 2, 1, 'TUE', '09:30:00', '10:30:00', 'NO', 'IN', 3, 0),
(15, '23,24', 9, 16, 'MON', '06:00:00', '08:00:00', 'NO', 'IN', 4, 0),
(16, '23,24', 9, 16, 'MON', '12:00:00', '14:00:00', 'NO', 'IN', 4, 0),
(17, '23,24', 9, 16, 'MON', '16:00:00', '18:00:00', 'NO', 'IN', 4, 0),
(18, '23,24', 9, 16, 'MON', '22:00:00', '00:00:00', 'NO', 'IN', 4, 0),
(19, '23,24', 9, 16, 'MON', '00:00:00', '00:00:00', 'NO', 'IN', 4, 0),
(20, '23,24', 9, 16, 'TUE', '06:00:00', '08:00:00', 'NO', 'IN', 4, 0),
(21, '23,24', 9, 16, 'TUE', '12:00:00', '14:00:00', 'NO', 'IN', 4, 0),
(22, '23,24', 9, 16, 'TUE', '16:00:00', '18:00:00', 'NO', 'IN', 4, 0),
(23, '23,24', 9, 16, 'TUE', '22:00:00', '00:00:00', 'NO', 'IN', 4, 0),
(24, '23,24', 9, 16, 'TUE', '00:00:00', '00:00:00', 'NO', 'IN', 4, 0),
(25, '23,24', 9, 16, 'WED', '06:00:00', '08:00:00', 'NO', 'IN', 4, 0),
(26, '23,24', 9, 16, 'WED', '12:00:00', '14:00:00', 'NO', 'IN', 4, 0),
(27, '23,24', 9, 16, 'WED', '16:00:00', '18:00:00', 'NO', 'IN', 4, 0),
(28, '23,24', 9, 16, 'WED', '22:00:00', '00:00:00', 'NO', 'IN', 4, 0),
(29, '23,24', 9, 16, 'THU', '06:00:00', '08:00:00', 'NO', 'IN', 4, 0),
(30, '23,24', 9, 16, 'THU', '12:00:00', '14:00:00', 'NO', 'IN', 4, 0),
(31, '23,24', 9, 16, 'THU', '16:00:00', '18:00:00', 'NO', 'IN', 4, 0),
(32, '23,24', 9, 16, 'THU', '22:00:00', '00:00:00', 'NO', 'IN', 4, 0),
(33, '23,24', 9, 16, 'FRI', '06:00:00', '08:00:00', 'NO', 'IN', 4, 0),
(34, '23,24', 9, 16, 'FRI', '12:00:00', '14:00:00', 'NO', 'IN', 4, 0),
(35, '23,24', 9, 16, 'FRI', '16:00:00', '18:00:00', 'NO', 'IN', 4, 0),
(36, '23,24', 9, 16, 'FRI', '22:00:00', '00:00:00', 'NO', 'IN', 4, 0),
(37, '24,23', 10, 16, 'MON', '09:30:00', '11:30:00', 'NO', 'IN', 4, 0),
(38, '23', 10, 16, 'MON', '01:00:00', '03:00:00', 'NO', 'IN', 5, 0),
(41, '29,28,24,23', 9, 16, 'MON', '06:00:00', '09:00:00', 'NO', 'IN', 8, 4),
(42, '29,28,24,23', 9, 16, 'TUE', '06:00:00', '09:00:00', 'NO', 'IN', 8, 1),
(43, '29,28,24,23', 9, 16, 'WED', '06:00:00', '09:00:00', 'NO', 'IN', 8, 9),
(44, '29,28,24,23', 9, 16, 'THU', '06:00:00', '09:00:00', 'NO', 'IN', 8, 3),
(45, '29,28,24,23', 9, 16, 'FRI', '06:00:00', '09:00:00', 'NO', 'IN', 8, 1),
(46, '29,28,24,23', 9, 16, 'SAT', '06:30:00', '09:30:00', 'NO', 'IN', 8, 1),
(47, '29,28,24,23', 9, 16, 'MON', '02:00:00', '04:40:00', 'NO', 'IN', 9, 0),
(48, '29,28,24,23', 9, 16, 'TUE', '02:00:00', '04:40:00', 'NO', 'IN', 9, 0),
(49, '29,28,24,23', 9, 16, 'WED', '02:00:00', '04:40:00', 'NO', 'IN', 9, 0),
(50, '29,28,24,23', 9, 16, 'THU', '02:00:00', '04:40:00', 'NO', 'IN', 9, 0),
(51, '29,28,24,23', 9, 16, 'FRI', '02:00:00', '04:40:00', 'NO', 'IN', 9, 0),
(52, '29,28,24,23', 9, 16, 'SAT', '02:00:00', '04:40:00', 'NO', 'IN', 9, 0),
(54, '2', 1, 1, 'SUN', '15:00:00', '17:00:00', 'NO', 'IN', 12, 1),
(55, '1', 2, 1, 'MON', '08:30:00', '10:30:00', 'NO', 'IN', 1, 0),
(56, '1', 8, 1, 'MON', '11:00:00', '13:00:00', 'NO', 'IN', 1, 0),
(57, '38', 19, 25, 'MON', '00:00:00', '00:00:00', 'NO', 'IN', 17, 0),
(58, '38', 19, 25, 'TUE', '00:30:00', '01:30:00', 'NO', 'IN', 17, 0),
(59, '38', 19, 25, 'WED', '01:30:00', '02:30:00', 'NO', 'IN', 17, 0),
(60, '38', 19, 25, 'THU', '02:00:00', '03:00:00', 'NO', 'IN', 17, 0),
(61, '38', 19, 25, 'THU', '05:00:00', '06:00:00', 'NO', 'IN', 17, 0),
(62, '38', 19, 25, 'THU', '02:00:00', '03:00:00', 'NO', 'IN', 17, 0),
(63, '38', 19, 25, 'MON', '13:00:00', '14:00:00', 'NO', 'IN', 19, 1),
(64, '38', 19, 25, 'TUE', '08:00:00', '09:00:00', 'NO', 'IN', 19, 0),
(65, '38', 19, 25, 'WED', '06:00:00', '07:00:00', 'NO', 'IN', 19, 0),
(66, '4', 3, 2, 'MON', '08:00:00', '09:30:00', 'NO', 'IN', 21, 0),
(67, '4', 3, 2, 'MON', '11:00:00', '12:30:00', 'NO', 'IN', 21, 0),
(68, '4', 3, 2, 'WED', '00:00:00', '00:30:00', 'NO', 'IN', 21, 0),
(69, '53,52,21', 25, 14, 'MON', '06:30:00', '06:42:00', 'NO', 'IN', 27, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stripe_details`
--

CREATE TABLE `tbl_stripe_details` (
  `stripe_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL,
  `stripe_live_api_key` varchar(255) NOT NULL,
  `stripe_live_public_api_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_stripe_details`
--

INSERT INTO `tbl_stripe_details` (`stripe_id`, `user_id`, `business_id`, `stripe_live_api_key`, `stripe_live_public_api_key`) VALUES
(1, 14, 7, 'sk_live_randomkey', 'pk_live_randomkey'),
(2, 44, 22, 'sk_live_randomkey', 'pk_live_randomkey'),
(3, 1, 1, 'sk_live_randomkey', 'pk_live_randomkey'),
(4, 2, 0, 'sk_live_randomkey', 'pk_live_randomkey'),
(5, 17, 0, 'sk_live_randomkey', 'pk_live_randomkey'),
(6, 19, 16, 'sk_live_randomkey', 'pk_live_randomkey'),
(7, 39, 25, 'sk_test_randomkey', 'pk_test_randomkey'),
(8, 56, 31, 'dgffthdhthtghgth', 'ghghhgfhghjyjytjuthyjhjhgj');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_studio_tattoos`
--

CREATE TABLE `tbl_studio_tattoos` (
  `id` int(11) NOT NULL,
  `tattoo_title` varchar(150) NOT NULL,
  `tattoo_description` text NOT NULL,
  `duration` int(11) NOT NULL,
  `tatto_staff` int(11) DEFAULT NULL,
  `tattoo_price` float NOT NULL,
  `tattoo_style` varchar(150) NOT NULL,
  `tattoo_image` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `sub_category` int(11) NOT NULL,
  `color` varchar(150) NOT NULL,
  `size` varchar(150) NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_deleted` enum('true','false') NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_studio_tattoos`
--

INSERT INTO `tbl_studio_tattoos` (`id`, `tattoo_title`, `tattoo_description`, `duration`, `tatto_staff`, `tattoo_price`, `tattoo_style`, `tattoo_image`, `category`, `sub_category`, `color`, `size`, `user_id`, `is_deleted`) VALUES
(1, 'Where does it come from?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 35, NULL, 60, '1,4,7', '5b97a19939ca5.jpeg', 7, 20, '5,7', '9', 2, 'false'),
(2, 'Enfield tattoo', 'dffdsfds', 44, NULL, 170, '1,4', '5b97a3ff99b6d.jpg', 2, 5, '7', '3', 4, 'false'),
(3, 'Irusmus wine', 'dffdfd dfskljfd lfdjlsdfjlsdfjlsdfds', 30, NULL, 125, '1,4', '5b98e9bc4b5dd.jpg', 1, 2, '5', '2', 6, 'false'),
(4, 'Sam, Nick, Leo, and Eric', 'Sam, Nick, Leo, and Eric', 55, NULL, 65, '1,4,7', '5b9a2e467e908.jpg', 2, 4, '5,9', '1', 2, 'false');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_style`
--

CREATE TABLE `tbl_style` (
  `style_id` int(11) NOT NULL,
  `style_name` varchar(30) NOT NULL,
  `style_slug` varchar(30) NOT NULL,
  `style_status` enum('Active','Block') NOT NULL,
  `is_delete` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0 => no deleted , 1 => deleted'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_style`
--

INSERT INTO `tbl_style` (`style_id`, `style_name`, `style_slug`, `style_status`, `is_delete`) VALUES
(1, 'Traditional', 'traditional', 'Active', '0'),
(2, 'Realism', 'realism', 'Active', '0'),
(3, 'Watercolor', 'watercolor', 'Active', '0'),
(4, 'Tribal ', 'tribal', 'Active', '0'),
(5, 'Neo Traditional', '', 'Active', '0'),
(6, 'Japanese', 'japanese', 'Active', '0'),
(7, 'Blackwork', '', 'Active', '0'),
(8, 'New School', 'new-school', 'Active', '0'),
(9, 'Style 1', 'style-1', 'Active', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_category`
--

CREATE TABLE `tbl_sub_category` (
  `sub_cat_id` int(11) NOT NULL,
  `sub_category` varchar(20) NOT NULL,
  `fk_category_id` int(3) NOT NULL,
  `fk_sub_category_tag_id` int(4) NOT NULL,
  `sub_cat_status` enum('Active','Block') NOT NULL,
  `is_delete` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0 => undelete , 1 => deleted'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sub_category`
--

INSERT INTO `tbl_sub_category` (`sub_cat_id`, `sub_category`, `fk_category_id`, `fk_sub_category_tag_id`, `sub_cat_status`, `is_delete`) VALUES
(1, 'Head', 1, 0, 'Active', '0'),
(2, 'eyes', 1, 0, 'Active', '0'),
(3, 'Nose', 1, 0, 'Active', '0'),
(4, 'Feet', 2, 0, 'Active', '0'),
(5, 'heel', 2, 0, 'Active', '0'),
(6, 'sole', 2, 0, 'Active', '0'),
(7, 'toe', 2, 0, 'Active', '0'),
(8, 'finger', 3, 0, 'Active', '0'),
(9, 'Wrist', 3, 0, 'Active', '0'),
(10, 'palm', 3, 0, 'Active', '0'),
(11, 'thumb', 3, 0, 'Active', '0'),
(12, 'pamb hand', 3, 0, 'Active', '1'),
(13, 'pamb hand', 3, 0, 'Active', '1'),
(14, 'pamb face', 1, 0, 'Active', '1'),
(15, 'Head', 6, 0, 'Active', '0'),
(16, 'Arms', 6, 0, 'Active', '0'),
(17, 'forearm', 7, 0, 'Active', '0'),
(18, 'upper arm', 7, 0, 'Active', '0'),
(19, 'elbow', 7, 0, 'Active', '0'),
(20, 'shoulder', 7, 0, 'Active', '0'),
(21, 'palm ', 7, 0, 'Active', '0'),
(22, 'Near Head', 10, 0, 'Active', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_category_tag`
--

CREATE TABLE `tbl_sub_category_tag` (
  `sub_category_tag_id` int(5) NOT NULL,
  `sub_category_tag_name` varchar(20) NOT NULL,
  `sub_category_tag_status` enum('Active','Block') NOT NULL,
  `is_delete` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0=> undeleted , 1 => deleted'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tattoos_staff`
--

CREATE TABLE `tbl_tattoos_staff` (
  `id` int(11) NOT NULL,
  `studio_tattoos_id` int(11) NOT NULL,
  `fk_staff_id` text NOT NULL,
  `fk_business_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tattoos_staff`
--

INSERT INTO `tbl_tattoos_staff` (`id`, `studio_tattoos_id`, `fk_staff_id`, `fk_business_id`) VALUES
(8, 15, '1', 1),
(9, 15, '3', 1),
(10, 16, '9', 9),
(11, 16, '10', 9),
(16, 2, '2', 2),
(17, 1, '1', 1),
(18, 1, '3', 1),
(19, 3, '4', 3),
(20, 3, '5', 3),
(21, 4, '1', 1),
(22, 4, '3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team_members`
--

CREATE TABLE `tbl_team_members` (
  `member_id` int(11) NOT NULL,
  `member_name` varchar(100) NOT NULL,
  `member_job_role` varchar(255) NOT NULL,
  `member_desc` text NOT NULL,
  `member_img` varchar(255) NOT NULL DEFAULT 'no-image.jpg',
  `member_status` enum('Active','Block') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_team_members`
--

INSERT INTO `tbl_team_members` (`member_id`, `member_name`, `member_job_role`, `member_desc`, `member_img`, `member_status`) VALUES
(1, 'Paras Kale', 'manage', 'sdasdas', 'no-image.jpg', 'Active'),
(2, 'Erezervo Team', 'Management', 'sadasd', '5673d4c561de3.jpeg', 'Active'),
(3, 'Sleuth', 'Testing', 'Testing', '570ca1ee8d921.jpg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_temp_appointment`
--

CREATE TABLE `tbl_temp_appointment` (
  `id` int(11) NOT NULL,
  `unique_userid` varchar(255) DEFAULT NULL,
  `login_userid` int(11) DEFAULT NULL,
  `business_id` int(11) NOT NULL,
  `service_menu_id` int(11) NOT NULL,
  `tattoo_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `style_id` int(11) DEFAULT NULL,
  `color_id` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `size` varchar(500) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `availibility_id` int(11) DEFAULT NULL,
  `cover_up` varchar(255) DEFAULT NULL,
  `previous_tattoo_img` varchar(255) DEFAULT NULL,
  `reference_tattoo` varchar(255) DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `charges` varchar(255) NOT NULL,
  `esitmated_amount` int(11) DEFAULT NULL,
  `amount_to_be_pay_online` int(11) DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `booking_desc` varchar(255) DEFAULT NULL,
  `medical_condition` enum('0','1') NOT NULL DEFAULT '0',
  `medical_description` text,
  `sub_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_temp_appointment`
--

INSERT INTO `tbl_temp_appointment` (`id`, `unique_userid`, `login_userid`, `business_id`, `service_menu_id`, `tattoo_id`, `category_id`, `sub_cat_id`, `style_id`, `color_id`, `size_id`, `size`, `staff_id`, `availibility_id`, `cover_up`, `previous_tattoo_img`, `reference_tattoo`, `appointment_date`, `charges`, `esitmated_amount`, `amount_to_be_pay_online`, `start_time`, `end_time`, `location`, `duration`, `booking_desc`, `medical_condition`, `medical_description`, `sub_category`) VALUES
(5, NULL, 5, 1, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '68', NULL, NULL, NULL, NULL, '', '35 Minutes', NULL, '0', NULL, '20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `is_delete` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0=not deleted,1=deleted',
  `status` enum('Active','Block') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`id`, `name`, `description`, `is_delete`, `status`) VALUES
(1, 'Shubham Admane', 'Thank you sir, I am happy, you are the best artist.', '0', 'Active'),
(2, 'Nilesh Vibhute', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took', '0', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonials`
--

CREATE TABLE `tbl_testimonials` (
  `testimony_id` int(5) NOT NULL,
  `title` varchar(128) NOT NULL,
  `name` text NOT NULL,
  `address` varchar(128) NOT NULL,
  `desc` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_address_master`
--

CREATE TABLE `tbl_user_address_master` (
  `address_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL COMMENT 'Fk User id ',
  `street_1` varchar(255) NOT NULL,
  `street_2` varchar(255) DEFAULT NULL,
  `street_3` varchar(255) NOT NULL,
  `country` varchar(50) NOT NULL,
  `district` varchar(20) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zipcode` varchar(10) NOT NULL DEFAULT 'NA',
  `is_active` enum('YES','NO') NOT NULL DEFAULT 'NO' COMMENT 'YES/NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_master`
--

CREATE TABLE `tbl_user_master` (
  `user_id` int(4) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `giftcard_remaining_amount` double(10,2) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `zipcode` varchar(10) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `terms_check` varchar(25) DEFAULT NULL,
  `user_type` enum('1','2','3') NOT NULL COMMENT '1 - "Normal",2- bussiness owner,3 - authorized by bussiness owner  ',
  `confirm_code` varchar(255) DEFAULT NULL,
  `is_verified` enum('NO','YES') NOT NULL DEFAULT 'NO',
  `is_special` enum('YES','NO') NOT NULL DEFAULT 'NO',
  `is_assured` enum('YES','NO') NOT NULL DEFAULT 'NO',
  `is_featured` enum('NO','YES') DEFAULT NULL,
  `user_status` enum('Active','Block') NOT NULL,
  `user_city` varchar(255) DEFAULT NULL,
  `user_state` varchar(255) DEFAULT NULL,
  `user_country` varchar(255) DEFAULT NULL,
  `cdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `setup_status` enum('1','2','3','4') NOT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `accredited_batch_request` enum('YES','NO','COMPLETE') NOT NULL DEFAULT 'NO',
  `accredited_batch_info` varchar(255) DEFAULT NULL COMMENT 'University/ College / Association',
  `is_first_time` enum('YES','NO') NOT NULL DEFAULT 'YES',
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `register_type` enum('web','fb','gmail') NOT NULL DEFAULT 'web',
  `city_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `cover_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_master`
--

INSERT INTO `tbl_user_master` (`user_id`, `fname`, `lname`, `email_id`, `giftcard_remaining_amount`, `password`, `zipcode`, `phone`, `terms_check`, `user_type`, `confirm_code`, `is_verified`, `is_special`, `is_assured`, `is_featured`, `user_status`, `user_city`, `user_state`, `user_country`, `cdate`, `setup_status`, `gender`, `birthdate`, `profile_image`, `accredited_batch_request`, `accredited_batch_info`, `is_first_time`, `address1`, `address2`, `register_type`, `city_id`, `country_id`, `state_id`, `cover_img`) VALUES
(1, 'Poojjajaj', 'Patil', 'usdsdsdsdsser@gmail.com', NULL, 'a29c57c6894dee6e8251510d58c07078ee3f49bf', '422001', '9850833148', 'on', '1', NULL, 'YES', 'NO', 'NO', NULL, 'Active', NULL, NULL, NULL, '2018-09-17 12:43:33', '2', NULL, NULL, '5b98d08070799.jpg', 'NO', NULL, 'YES', 'abcd', 'ddd', 'web', 3, 1, 1, '5b98d08090715.jpg'),
(2, 'Imran', 'Khan', 'adolf.rebelo@gmail.com', NULL, '7c4a8d09ca3762af61e59520943dc26494f8941b', '422005', '9923266699', NULL, '2', NULL, 'YES', 'NO', 'NO', 'YES', 'Active', NULL, NULL, NULL, '2018-12-10 11:30:41', '2', NULL, NULL, '5b979ea471df1.jpg', 'NO', NULL, 'YES', '806 W University Ave, 32601 Gainesville FL', '806 W University Ave, 32601 Gainesville FL', 'web', 3, 1, 1, '5b979ea490db3.jpg'),
(3, 'dssd', 'dsdsd', 'tssasaaattoo@gmail.com', NULL, 'a29c57c6894dee6e8251510d58c07078ee3f49bf', '', '78787878', NULL, '2', '873468ba705760546f3e6182fb3cfa2e587041f0', 'YES', 'NO', 'NO', 'YES', 'Active', NULL, NULL, NULL, '2018-09-19 18:49:48', '1', NULL, NULL, NULL, 'NO', NULL, 'YES', NULL, NULL, 'web', NULL, NULL, NULL, NULL),
(4, 'Vrajesh', 'Pandey', 'vrajesh@gmail.com', NULL, '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '898989', NULL, '2', NULL, 'YES', 'NO', 'NO', 'YES', 'Active', NULL, NULL, NULL, '2018-09-25 13:06:28', '2', NULL, NULL, NULL, 'NO', NULL, 'YES', NULL, NULL, 'web', NULL, NULL, NULL, NULL),
(5, 'Sachin', 'Jagtap', 'admin@webwingtechnologies.com', NULL, '7c4a8d09ca3762af61e59520943dc26494f8941b', '422005', '9767366699', 'on', '1', 'aaa8814df6abbb299d26ea31d189ee85c5207382', 'YES', 'NO', 'NO', NULL, 'Active', NULL, NULL, NULL, '2018-09-26 06:16:49', '1', NULL, NULL, '5b98b205ceedb.jpeg', 'NO', NULL, 'YES', '806 W University Ave, 32601 Gainesville FL', '806 W University Ave, 32601 Gainesville FL', 'web', 1, 1, 1, '5b98b1ea66843.jpg'),
(6, 'Studio', 'pawar', 'tattoo@gmail.com', NULL, 'a29c57c6894dee6e8251510d58c07078ee3f49bf', '400001', '898989', NULL, '2', NULL, 'YES', 'NO', 'NO', 'YES', 'Active', NULL, NULL, NULL, '2018-09-17 12:04:09', '2', NULL, NULL, '5b98ed439f6b0.jpg', 'NO', NULL, 'YES', 'adr 1', 'adr 2', 'web', 1, 1, 1, '5b98ea42c2787.jpg'),
(7, 'User', 'Patil', 'user@gmail.com', NULL, 'a29c57c6894dee6e8251510d58c07078ee3f49bf', '422001', '898989', 'on', '1', NULL, 'YES', 'NO', 'NO', NULL, 'Active', NULL, NULL, NULL, '2018-09-12 10:27:29', '2', NULL, NULL, '5b98ea1198a81.jpg', 'NO', NULL, 'YES', 'address line 1', 'address line 2', 'web', 1, 1, 1, '5b98ea11a0a67.jpg'),
(8, 'Bhushan', 'Pagar', 'tester@webwingtechnologies.com', NULL, '1ee6426845a223d3622f39b86a7efadfd6e41dc5', '422010', '8888230299', 'on', '1', NULL, 'YES', 'NO', 'NO', NULL, 'Block', NULL, NULL, NULL, '2018-09-17 13:01:37', '2', NULL, NULL, '5b9cf23ca40c0.jpg', 'NO', NULL, 'YES', 'Panchmi,New Delhi', 'New market yard', 'web', 17, 1, 51, '5b9cf23ca9896.jpg'),
(9, 'Adolf', 'rebelo', 'adolf.rebelo@gmail.com', NULL, '7c4a8d09ca3762af61e59520943dc26494f8941b', '455020', '8888230299', NULL, '2', NULL, 'YES', 'NO', 'NO', 'YES', 'Active', NULL, NULL, NULL, '2018-10-25 08:45:17', '2', NULL, NULL, '5b9f6e50ae605.jpg', 'NO', NULL, 'YES', 'new delhi', 'Janpath,New delhi', 'web', 17, 1, 51, '5b9f6e50b69f3.jpg'),
(10, 'Pranav', 'Shukla', 'testpurpose400@gmail.com', NULL, '0bef749ed36da7db604c417c0142971a61622714', NULL, '9797979797', 'on', '1', NULL, 'YES', 'NO', 'NO', NULL, 'Active', NULL, NULL, NULL, '2018-09-17 13:23:10', '2', NULL, NULL, NULL, 'NO', NULL, 'YES', NULL, NULL, 'web', NULL, NULL, NULL, NULL),
(11, 'Webwing', 'Technologies', 'webwingt@gmail.com', NULL, '1d9c858266eb073590b33387cedccd2a5f85f666', NULL, '9632587412', 'on', '1', NULL, 'YES', 'NO', 'NO', NULL, 'Active', NULL, NULL, NULL, '2018-10-25 08:52:50', '2', NULL, NULL, NULL, 'NO', NULL, 'YES', NULL, NULL, 'web', NULL, NULL, NULL, NULL),
(12, 'Vrajesh', 'Pandya', 'yanikluis5@gmail.com', NULL, 'a29c57c6894dee6e8251510d58c07078ee3f49bf', '', '9561159777', NULL, '2', NULL, 'YES', 'NO', 'NO', NULL, 'Active', NULL, NULL, NULL, '2018-12-10 13:01:25', '2', NULL, NULL, NULL, 'NO', NULL, 'YES', NULL, NULL, 'web', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_package`
--

CREATE TABLE `tbl_user_package` (
  `user_pakage_id` int(11) NOT NULL,
  `pakage_name` varchar(50) NOT NULL,
  `fk_user_id` int(11) NOT NULL COMMENT '(from tbl_user_mastre)',
  `fk_business_id` int(11) NOT NULL,
  `fk_service_menu_id` text NOT NULL,
  `packge_qty` int(11) NOT NULL,
  `fk_pakage_id` int(11) NOT NULL COMMENT '(from tbl_srvice_pakages)',
  `pakage_remaining_qty` int(11) NOT NULL,
  `purchase_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `status` enum('running','expire','complete') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_waiting_list`
--

CREATE TABLE `tbl_waiting_list` (
  `waiting_id` int(11) NOT NULL,
  `selected_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fk_user_id` int(11) NOT NULL,
  `fk_business_id` int(11) NOT NULL,
  `fk_location_id` int(11) NOT NULL,
  `fk_location_hours_id` int(11) NOT NULL,
  `fk_service_menu_id` int(11) NOT NULL,
  `fk_staff_id` text NOT NULL,
  `serv_start_time` time NOT NULL,
  `serv_end_time` time NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('1','0','2') NOT NULL DEFAULT '0' COMMENT '0=>unread 1=>confirm ,2=>cancel,',
  `url_status` enum('Active','Expired') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_walkin_users`
--

CREATE TABLE `tbl_walkin_users` (
  `id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_walkin_users`
--

INSERT INTO `tbl_walkin_users` (`id`, `business_id`, `first_name`, `last_name`, `email_id`, `mobile_no`, `address`, `reg_date`) VALUES
(1, 1, 'Peter', 'Parera', 'peter@webwing.com', '9923266699', 'Nashik', '2018-09-12 06:30:47'),
(2, 1, 'Selena', 'Gomez', 'selena.gomez@webwing.com', '9923266699', 'Nashik', '2018-09-12 06:34:39'),
(3, 1, 'Antonio', 'Pinto', 'antonio.pinto@webwing.com', '9923266699', 'Alto Porvorim, Goa - 403501, Imrit Vaddo, Near Small Chapel, Porvorim Bazar, Porvorim', '2018-09-12 06:40:43'),
(4, 3, 'Vrajesh', 'Pandey', 'vrajesh@gmail.com', '8988989', 'ddd', '2018-09-12 09:31:17'),
(5, 1, 'Michael', 'Dsouza', 'michael.dsouza@webwing.com', '9923266699', 'Nashik', '2018-09-12 09:33:03'),
(6, 3, 'ronit', 'roy', 'ronit@gmail.com', '898989', 'ffsdfd', '2018-09-12 09:39:30'),
(7, 3, 'demo ', 'customer', 'demo@gmail.com', '8989898989', 'fdfsddffd', '2018-09-12 09:42:54'),
(8, 1, 'Sachin', 'Jagtap', 'sachin@webwingtechnologies.com', '9923266699', 'Plot No A 22 Road No 9 Behind Passport Office', '2018-09-13 09:26:01'),
(9, 2, 'Ravikant', 'Shinde', 'aalex4274@gmail.com', '123654498670', 'Nashik', '2018-09-27 10:32:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `tbl_add_availibility`
--
ALTER TABLE `tbl_add_availibility`
  ADD PRIMARY KEY (`availibility_id`);

--
-- Indexes for table `tbl_admin_stripe_details`
--
ALTER TABLE `tbl_admin_stripe_details`
  ADD PRIMARY KEY (`stripe_id`);

--
-- Indexes for table `tbl_appoinment`
--
ALTER TABLE `tbl_appoinment`
  ADD PRIMARY KEY (`appoinment_id`);

--
-- Indexes for table `tbl_automated_event`
--
ALTER TABLE `tbl_automated_event`
  ADD PRIMARY KEY (`event_type_id`);

--
-- Indexes for table `tbl_automated_message`
--
ALTER TABLE `tbl_automated_message`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `tbl_banner_master`
--
ALTER TABLE `tbl_banner_master`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `tbl_blog_master`
--
ALTER TABLE `tbl_blog_master`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_businessuser_promocode`
--
ALTER TABLE `tbl_businessuser_promocode`
  ADD PRIMARY KEY (`promo_id`);

--
-- Indexes for table `tbl_business_information`
--
ALTER TABLE `tbl_business_information`
  ADD PRIMARY KEY (`business_id`);

--
-- Indexes for table `tbl_business_locations`
--
ALTER TABLE `tbl_business_locations`
  ADD PRIMARY KEY (`location_id`);
ALTER TABLE `tbl_business_locations` ADD FULLTEXT KEY `giolocation` (`giolocation`);

--
-- Indexes for table `tbl_business_mailing_address`
--
ALTER TABLE `tbl_business_mailing_address`
  ADD PRIMARY KEY (`mailing_id`);

--
-- Indexes for table `tbl_business_photos`
--
ALTER TABLE `tbl_business_photos`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `tbl_business_settings`
--
ALTER TABLE `tbl_business_settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Indexes for table `tbl_business_staff`
--
ALTER TABLE `tbl_business_staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `fk_business_id` (`fk_business_id`);

--
-- Indexes for table `tbl_business_videos`
--
ALTER TABLE `tbl_business_videos`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `tbl_campaign_default`
--
ALTER TABLE `tbl_campaign_default`
  ADD PRIMARY KEY (`campaign_id`);

--
-- Indexes for table `tbl_campaign_scheduler`
--
ALTER TABLE `tbl_campaign_scheduler`
  ADD PRIMARY KEY (`scheduler_id`);

--
-- Indexes for table `tbl_campaign_templates`
--
ALTER TABLE `tbl_campaign_templates`
  ADD PRIMARY KEY (`template_id`);

--
-- Indexes for table `tbl_cancel_and_refund`
--
ALTER TABLE `tbl_cancel_and_refund`
  ADD PRIMARY KEY (`refund_id`);

--
-- Indexes for table `tbl_card_type`
--
ALTER TABLE `tbl_card_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_cc_data`
--
ALTER TABLE `tbl_cc_data`
  ADD PRIMARY KEY (`cc_data_id`),
  ADD KEY `fk_user_id` (`fk_user_id`),
  ADD KEY `cc_end_number` (`cc_end_number`);

--
-- Indexes for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `tbl_client_address`
--
ALTER TABLE `tbl_client_address`
  ADD PRIMARY KEY (`client_address_id`);

--
-- Indexes for table `tbl_client_custom_price`
--
ALTER TABLE `tbl_client_custom_price`
  ADD PRIMARY KEY (`custom_price_id`);

--
-- Indexes for table `tbl_client_label`
--
ALTER TABLE `tbl_client_label`
  ADD PRIMARY KEY (`label_id`);

--
-- Indexes for table `tbl_color`
--
ALTER TABLE `tbl_color`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `tbl_communication_preferences`
--
ALTER TABLE `tbl_communication_preferences`
  ADD PRIMARY KEY (`communication_preferences_id`);

--
-- Indexes for table `tbl_contact_inquiries`
--
ALTER TABLE `tbl_contact_inquiries`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_countries`
--
ALTER TABLE `tbl_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_country_master`
--
ALTER TABLE `tbl_country_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cover_up`
--
ALTER TABLE `tbl_cover_up`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_deposit_storage`
--
ALTER TABLE `tbl_deposit_storage`
  ADD PRIMARY KEY (`deposit_info_id`);

--
-- Indexes for table `tbl_districts`
--
ALTER TABLE `tbl_districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dynamic_pages`
--
ALTER TABLE `tbl_dynamic_pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `tbl_email_id_master`
--
ALTER TABLE `tbl_email_id_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_event_directions`
--
ALTER TABLE `tbl_event_directions`
  ADD PRIMARY KEY (`event_directions_id`);

--
-- Indexes for table `tbl_event_instructions`
--
ALTER TABLE `tbl_event_instructions`
  ADD PRIMARY KEY (`event_instructions_id`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `tbl_faq_categories`
--
ALTER TABLE `tbl_faq_categories`
  ADD PRIMARY KEY (`faq_category_id`);

--
-- Indexes for table `tbl_favorites`
--
ALTER TABLE `tbl_favorites`
  ADD PRIMARY KEY (`favorite_id`);

--
-- Indexes for table `tbl_gift_card`
--
ALTER TABLE `tbl_gift_card`
  ADD PRIMARY KEY (`gift_card_id`);

--
-- Indexes for table `tbl_home_page_content`
--
ALTER TABLE `tbl_home_page_content`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tbl_home_slider`
--
ALTER TABLE `tbl_home_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_membership_master`
--
ALTER TABLE `tbl_membership_master`
  ADD PRIMARY KEY (`membership_id`);

--
-- Indexes for table `tbl_message_to_business`
--
ALTER TABLE `tbl_message_to_business`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `tbl_myplan_master`
--
ALTER TABLE `tbl_myplan_master`
  ADD PRIMARY KEY (`myplan_id`);

--
-- Indexes for table `tbl_my_styles`
--
ALTER TABLE `tbl_my_styles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_newsletter_master`
--
ALTER TABLE `tbl_newsletter_master`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_newsletter_subscriber`
--
ALTER TABLE `tbl_newsletter_subscriber`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `tbl_notifications`
--
ALTER TABLE `tbl_notifications`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_price`
--
ALTER TABLE `tbl_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_promocode_master`
--
ALTER TABLE `tbl_promocode_master`
  ADD PRIMARY KEY (`promo_id`);

--
-- Indexes for table `tbl_review_ratings`
--
ALTER TABLE `tbl_review_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_services_menu`
--
ALTER TABLE `tbl_services_menu`
  ADD PRIMARY KEY (`service_menu_id`),
  ADD KEY `fk_subcat_id` (`fk_subcat_id`),
  ADD KEY `fk_business_id` (`fk_business_id`);

--
-- Indexes for table `tbl_services_staff`
--
ALTER TABLE `tbl_services_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_service_offpeak_times`
--
ALTER TABLE `tbl_service_offpeak_times`
  ADD PRIMARY KEY (`offpeak_time_id`),
  ADD KEY `fk_service_menu_id` (`fk_service_menu_id`);

--
-- Indexes for table `tbl_service_packages`
--
ALTER TABLE `tbl_service_packages`
  ADD PRIMARY KEY (`package_id`),
  ADD KEY `fk_business_id` (`fk_business_id`),
  ADD KEY `fk_subcat_id` (`fk_subcat_id`);

--
-- Indexes for table `tbl_service_pakages`
--
ALTER TABLE `tbl_service_pakages`
  ADD PRIMARY KEY (`ser_pk_id`);

--
-- Indexes for table `tbl_service_time`
--
ALTER TABLE `tbl_service_time`
  ADD PRIMARY KEY (`time_id`);

--
-- Indexes for table `tbl_service_time_slots`
--
ALTER TABLE `tbl_service_time_slots`
  ADD PRIMARY KEY (`time_slot_id`);

--
-- Indexes for table `tbl_site_settings`
--
ALTER TABLE `tbl_site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_size`
--
ALTER TABLE `tbl_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_social_link`
--
ALTER TABLE `tbl_social_link`
  ADD PRIMARY KEY (`social_id`);

--
-- Indexes for table `tbl_staff_block_off_time`
--
ALTER TABLE `tbl_staff_block_off_time`
  ADD PRIMARY KEY (`block_off_id`);

--
-- Indexes for table `tbl_staff_location_hours`
--
ALTER TABLE `tbl_staff_location_hours`
  ADD PRIMARY KEY (`location_hours_id`);

--
-- Indexes for table `tbl_stripe_details`
--
ALTER TABLE `tbl_stripe_details`
  ADD PRIMARY KEY (`stripe_id`);

--
-- Indexes for table `tbl_studio_tattoos`
--
ALTER TABLE `tbl_studio_tattoos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_style`
--
ALTER TABLE `tbl_style`
  ADD PRIMARY KEY (`style_id`);

--
-- Indexes for table `tbl_sub_category`
--
ALTER TABLE `tbl_sub_category`
  ADD PRIMARY KEY (`sub_cat_id`);

--
-- Indexes for table `tbl_sub_category_tag`
--
ALTER TABLE `tbl_sub_category_tag`
  ADD PRIMARY KEY (`sub_category_tag_id`);

--
-- Indexes for table `tbl_tattoos_staff`
--
ALTER TABLE `tbl_tattoos_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_team_members`
--
ALTER TABLE `tbl_team_members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tbl_temp_appointment`
--
ALTER TABLE `tbl_temp_appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_testimonials`
--
ALTER TABLE `tbl_testimonials`
  ADD PRIMARY KEY (`testimony_id`);

--
-- Indexes for table `tbl_user_address_master`
--
ALTER TABLE `tbl_user_address_master`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `fk_user_id` (`fk_user_id`);

--
-- Indexes for table `tbl_user_master`
--
ALTER TABLE `tbl_user_master`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_user_package`
--
ALTER TABLE `tbl_user_package`
  ADD PRIMARY KEY (`user_pakage_id`);

--
-- Indexes for table `tbl_waiting_list`
--
ALTER TABLE `tbl_waiting_list`
  ADD PRIMARY KEY (`waiting_id`);

--
-- Indexes for table `tbl_walkin_users`
--
ALTER TABLE `tbl_walkin_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_add_availibility`
--
ALTER TABLE `tbl_add_availibility`
  MODIFY `availibility_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_admin_stripe_details`
--
ALTER TABLE `tbl_admin_stripe_details`
  MODIFY `stripe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_appoinment`
--
ALTER TABLE `tbl_appoinment`
  MODIFY `appoinment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_automated_event`
--
ALTER TABLE `tbl_automated_event`
  MODIFY `event_type_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_automated_message`
--
ALTER TABLE `tbl_automated_message`
  MODIFY `auto_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_banner_master`
--
ALTER TABLE `tbl_banner_master`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_blog_master`
--
ALTER TABLE `tbl_blog_master`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_businessuser_promocode`
--
ALTER TABLE `tbl_businessuser_promocode`
  MODIFY `promo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_business_information`
--
ALTER TABLE `tbl_business_information`
  MODIFY `business_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_business_locations`
--
ALTER TABLE `tbl_business_locations`
  MODIFY `location_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_business_mailing_address`
--
ALTER TABLE `tbl_business_mailing_address`
  MODIFY `mailing_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_business_photos`
--
ALTER TABLE `tbl_business_photos`
  MODIFY `photo_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_business_settings`
--
ALTER TABLE `tbl_business_settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_business_staff`
--
ALTER TABLE `tbl_business_staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Staff id ', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_business_videos`
--
ALTER TABLE `tbl_business_videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_campaign_default`
--
ALTER TABLE `tbl_campaign_default`
  MODIFY `campaign_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_campaign_scheduler`
--
ALTER TABLE `tbl_campaign_scheduler`
  MODIFY `scheduler_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_campaign_templates`
--
ALTER TABLE `tbl_campaign_templates`
  MODIFY `template_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_cancel_and_refund`
--
ALTER TABLE `tbl_cancel_and_refund`
  MODIFY `refund_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_card_type`
--
ALTER TABLE `tbl_card_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_cc_data`
--
ALTER TABLE `tbl_cc_data`
  MODIFY `cc_data_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_client_address`
--
ALTER TABLE `tbl_client_address`
  MODIFY `client_address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_client_custom_price`
--
ALTER TABLE `tbl_client_custom_price`
  MODIFY `custom_price_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_client_label`
--
ALTER TABLE `tbl_client_label`
  MODIFY `label_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_color`
--
ALTER TABLE `tbl_color`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_communication_preferences`
--
ALTER TABLE `tbl_communication_preferences`
  MODIFY `communication_preferences_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_contact_inquiries`
--
ALTER TABLE `tbl_contact_inquiries`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_countries`
--
ALTER TABLE `tbl_countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tbl_country_master`
--
ALTER TABLE `tbl_country_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_cover_up`
--
ALTER TABLE `tbl_cover_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_deposit_storage`
--
ALTER TABLE `tbl_deposit_storage`
  MODIFY `deposit_info_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_districts`
--
ALTER TABLE `tbl_districts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tbl_dynamic_pages`
--
ALTER TABLE `tbl_dynamic_pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_email_id_master`
--
ALTER TABLE `tbl_email_id_master`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_event_directions`
--
ALTER TABLE `tbl_event_directions`
  MODIFY `event_directions_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_event_instructions`
--
ALTER TABLE `tbl_event_instructions`
  MODIFY `event_instructions_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_faq_categories`
--
ALTER TABLE `tbl_faq_categories`
  MODIFY `faq_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_favorites`
--
ALTER TABLE `tbl_favorites`
  MODIFY `favorite_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_gift_card`
--
ALTER TABLE `tbl_gift_card`
  MODIFY `gift_card_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_home_page_content`
--
ALTER TABLE `tbl_home_page_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_membership_master`
--
ALTER TABLE `tbl_membership_master`
  MODIFY `membership_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_message_to_business`
--
ALTER TABLE `tbl_message_to_business`
  MODIFY `message_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_myplan_master`
--
ALTER TABLE `tbl_myplan_master`
  MODIFY `myplan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_my_styles`
--
ALTER TABLE `tbl_my_styles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=594;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_newsletter_master`
--
ALTER TABLE `tbl_newsletter_master`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_newsletter_subscriber`
--
ALTER TABLE `tbl_newsletter_subscriber`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_notifications`
--
ALTER TABLE `tbl_notifications`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_price`
--
ALTER TABLE `tbl_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_promocode_master`
--
ALTER TABLE `tbl_promocode_master`
  MODIFY `promo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_review_ratings`
--
ALTER TABLE `tbl_review_ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_services_menu`
--
ALTER TABLE `tbl_services_menu`
  MODIFY `service_menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_services_staff`
--
ALTER TABLE `tbl_services_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tbl_service_offpeak_times`
--
ALTER TABLE `tbl_service_offpeak_times`
  MODIFY `offpeak_time_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_service_packages`
--
ALTER TABLE `tbl_service_packages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK for packages';

--
-- AUTO_INCREMENT for table `tbl_service_pakages`
--
ALTER TABLE `tbl_service_pakages`
  MODIFY `ser_pk_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_service_time`
--
ALTER TABLE `tbl_service_time`
  MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_service_time_slots`
--
ALTER TABLE `tbl_service_time_slots`
  MODIFY `time_slot_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_site_settings`
--
ALTER TABLE `tbl_site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_size`
--
ALTER TABLE `tbl_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_social_link`
--
ALTER TABLE `tbl_social_link`
  MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_staff_block_off_time`
--
ALTER TABLE `tbl_staff_block_off_time`
  MODIFY `block_off_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_staff_location_hours`
--
ALTER TABLE `tbl_staff_location_hours`
  MODIFY `location_hours_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tbl_stripe_details`
--
ALTER TABLE `tbl_stripe_details`
  MODIFY `stripe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_studio_tattoos`
--
ALTER TABLE `tbl_studio_tattoos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_style`
--
ALTER TABLE `tbl_style`
  MODIFY `style_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_sub_category`
--
ALTER TABLE `tbl_sub_category`
  MODIFY `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_sub_category_tag`
--
ALTER TABLE `tbl_sub_category_tag`
  MODIFY `sub_category_tag_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tattoos_staff`
--
ALTER TABLE `tbl_tattoos_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_team_members`
--
ALTER TABLE `tbl_team_members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_temp_appointment`
--
ALTER TABLE `tbl_temp_appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_testimonials`
--
ALTER TABLE `tbl_testimonials`
  MODIFY `testimony_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user_address_master`
--
ALTER TABLE `tbl_user_address_master`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user_master`
--
ALTER TABLE `tbl_user_master`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_user_package`
--
ALTER TABLE `tbl_user_package`
  MODIFY `user_pakage_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_waiting_list`
--
ALTER TABLE `tbl_waiting_list`
  MODIFY `waiting_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_walkin_users`
--
ALTER TABLE `tbl_walkin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_service_offpeak_times`
--
ALTER TABLE `tbl_service_offpeak_times`
  ADD CONSTRAINT `FK_SERVICE_MENU` FOREIGN KEY (`fk_service_menu_id`) REFERENCES `tbl_services_menu` (`service_menu_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
