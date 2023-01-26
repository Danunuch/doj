-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 07:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doj_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(10) NOT NULL,
  `content` longtext NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `content`, `img`) VALUES
(1, '<p>ตั้งแต่ปี พ.ศ. 2550 ทีมงานของเราซึ่งมีประสบการณ์มากมายพยายามอย่างดีที่สุดเพื่อขับเคลื่อนวิศวกรรมการจัดการวัสดุ เราจัดหาและส่งมอบผลิตภัณฑ์ที่เหมาะสมอย่างต่อเนื่องตั้งแต่การออกแบบ การคำนวณ การผลิต การติดตั้ง ตลอดมา การว่าจ้างด้วยราคาตลาด ในระยะแรก บริษัทสร้างชื่อเสียงในด้านระบบสายพานลำเลียงเป็นหลัก ผู้เชี่ยวชาญอุตสากรรม เช่น ปูนซีเมนต์ การผลิตและแปรรูปอาหาร เคมี ปิโตรเคมี และศักยภาพใหม่ในธุรกิจโรงไฟฟ้า อีกทั้งมาตรฐานของเราทัดเทียมกับเทคโนโลยีชั้นนำของโลก ซึ่งทำให้บริษัทเติบโตอย่างต่อเนื่อง</p>', '884320811.webp');

-- --------------------------------------------------------

--
-- Table structure for table `about_us_cn`
--

CREATE TABLE `about_us_cn` (
  `id` int(10) NOT NULL,
  `content` longtext NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `about_us_cn`
--

INSERT INTO `about_us_cn` (`id`, `content`, `img`) VALUES
(1, '自 2007 年以來，我們擁有豐富經驗的團隊竭盡全力推動物料搬運工程。我們不斷地以市場價格提供和交付從設計、計算、製造、安裝到調試的正確產品。在初始階段，該公司主要在水泥、食品製造和加工、化工、石化和電廠業務的新潛力等行業建立了輸送系統專家的聲譽。此外，我們的標準等於世界領先的技術，使公司不斷發展壯大。\n\n2013年，DOJ Industrial Co., Ltd.正式成立，另外專注於糖業、電廠和可再生能源業務。', '1522249072.webp');

-- --------------------------------------------------------

--
-- Table structure for table `about_us_en`
--

CREATE TABLE `about_us_en` (
  `id` int(10) NOT NULL,
  `content` longtext NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `about_us_en`
--

INSERT INTO `about_us_en` (`id`, `content`, `img`) VALUES
(1, '<p>Since 2007, our team with the broad experiences do our best to drive the engineering of materials handling. We constantly supply and deliver the right products from design, calculation, manufacture, installation throughout commissioning with market price. In the initial phase, the company built its reputation primarily as conveying system specialist invidious industries such cement, food manufacturing &amp; processing, chemical, petrochemical, and new potential in power plant business. Besides, our standard is equal to the world\'s leading technology which makes the company grows continuously. In 2013, DOJ Industrial Co., Ltd. was established formally with additional focusing on as sugar industrial ,power plant and renewable energy business.</p>', '884320811.webp');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`, `firstname`, `lastname`) VALUES
(1, 'WebsiteAdmin', '$2y$10$h6ky44HJ.jjWORJ7fipHf.EpR1bN.suYjP/Z2ysdW88aqHt.VfuAK', '2022-12-17 18:26:50', 'DOJ', 'SYSTEM');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `pt_id` int(10) NOT NULL,
  `type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`pt_id`, `type_name`) VALUES
(1, 'หมวดหมู่สินค้า 01'),
(2, 'หมวดหมู่สินค้า 02'),
(3, 'หมวดหมู่สินค้า 03'),
(4, 'หมวดหมู่สินค้า 04'),
(5, 'หมวดหมู่สินค้า 05'),
(6, 'หมวดหมู่สินค้า 06');

-- --------------------------------------------------------

--
-- Table structure for table `category_product_cn`
--

CREATE TABLE `category_product_cn` (
  `pt_id` int(10) NOT NULL,
  `type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `category_product_cn`
--

INSERT INTO `category_product_cn` (`pt_id`, `type_name`) VALUES
(1, '分類產品 01'),
(2, '分類產品 02'),
(3, '分類產品 03'),
(4, '分類產品 04'),
(5, '分類產品 05');

-- --------------------------------------------------------

--
-- Table structure for table `category_product_en`
--

CREATE TABLE `category_product_en` (
  `pt_id` int(10) NOT NULL,
  `type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `category_product_en`
--

INSERT INTO `category_product_en` (`pt_id`, `type_name`) VALUES
(1, 'Category Product 01'),
(2, 'Category Product 02'),
(3, 'Category Product 03'),
(4, 'Category Product 04'),
(5, 'Category Product 05');

-- --------------------------------------------------------

--
-- Table structure for table `category_ref`
--

CREATE TABLE `category_ref` (
  `ref_id` int(10) NOT NULL,
  `ref_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `category_ref`
--

INSERT INTO `category_ref` (`ref_id`, `ref_name`) VALUES
(1, 'หมวดหมู่โครงการที่ 1'),
(2, 'หมวดหมู่โครงการที่ 2'),
(3, 'หมวดหมู่โครงการที่ 3'),
(4, 'หมวดหมู่โครงการที่ 4'),
(5, 'หมวดหมู่โครงการที่ 5'),
(6, 'หมวดหมู่โครงการที่ 6'),
(7, 'หมวดหมู่โครงการที่ 7'),
(8, 'หมวดหมู่โครงการที่ 8');

-- --------------------------------------------------------

--
-- Table structure for table `category_ref_cn`
--

CREATE TABLE `category_ref_cn` (
  `ref_id` int(10) NOT NULL,
  `ref_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `category_ref_cn`
--

INSERT INTO `category_ref_cn` (`ref_id`, `ref_name`) VALUES
(1, '項目類別 1'),
(2, '項目類別 2'),
(3, '項目類別 3'),
(4, '項目類別 4'),
(5, '項目類別 5'),
(6, '項目類別 6'),
(7, '項目類別 7'),
(8, '項目類別 8'),
(9, '項目類別 9');

-- --------------------------------------------------------

--
-- Table structure for table `category_ref_en`
--

CREATE TABLE `category_ref_en` (
  `ref_id` int(10) NOT NULL,
  `ref_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `category_ref_en`
--

INSERT INTO `category_ref_en` (`ref_id`, `ref_name`) VALUES
(1, 'Category Project References 1'),
(2, 'Category Project References 2'),
(3, 'Category Project References 3'),
(4, 'Category Project References 4'),
(5, 'Category Project References 5'),
(6, 'Category Project References 6'),
(7, 'Category Project References 7'),
(8, 'Category Project References 8'),
(9, 'Category Project References 9');

-- --------------------------------------------------------

--
-- Table structure for table `category_sub`
--

CREATE TABLE `category_sub` (
  `id` int(10) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `pt_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `category_sub`
--

INSERT INTO `category_sub` (`id`, `sub_name`, `pt_id`) VALUES
(1, 'สินค้าหมวดย่อย 01', '1'),
(2, 'สินค้าหมวดย่อย 02', '2'),
(3, 'สินค้าหมวดย่อย 03', '5'),
(4, 'สินค้าหมวดย่อย 04', '4');

-- --------------------------------------------------------

--
-- Table structure for table `category_sub_cn`
--

CREATE TABLE `category_sub_cn` (
  `id` int(10) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `pt_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `category_sub_cn`
--

INSERT INTO `category_sub_cn` (`id`, `sub_name`, `pt_id`) VALUES
(1, '第01話', '1'),
(2, '第02話', '2'),
(3, '第03話', '3'),
(6, '第04話', '5'),
(7, '第03話', '2'),
(8, '第03話', '4');

-- --------------------------------------------------------

--
-- Table structure for table `category_sub_en`
--

CREATE TABLE `category_sub_en` (
  `id` int(10) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `pt_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `category_sub_en`
--

INSERT INTO `category_sub_en` (`id`, `sub_name`, `pt_id`) VALUES
(1, 'Sub Category Product 01', '1'),
(2, 'Sub Category Product 02', '2'),
(6, 'Sub Category Product 06', '5');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel1` varchar(255) NOT NULL,
  `tel2` varchar(255) NOT NULL,
  `tel3` varchar(255) NOT NULL,
  `tel4` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `line` varchar(255) NOT NULL,
  `line_qr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `address`, `tel1`, `tel2`, `tel3`, `tel4`, `email`, `line`, `line_qr`) VALUES
(1, '11/18 หมู่ที่ 4 ตำบลโคกช้าง อำเภอบางไทร พระนครศรีอยุธยา 13190', '035-950-279', '035-950-279', '099-415-9992', '094-659-9898', 'dojindustrial.md@gmail.com', '@Dojindustrial', '1775864845.webp');

-- --------------------------------------------------------

--
-- Table structure for table `contact_cn`
--

CREATE TABLE `contact_cn` (
  `id` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel1` varchar(255) NOT NULL,
  `tel2` varchar(255) NOT NULL,
  `tel3` varchar(255) NOT NULL,
  `tel4` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `line` varchar(255) NOT NULL,
  `line_qr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contact_cn`
--

INSERT INTO `contact_cn` (`id`, `address`, `tel1`, `tel2`, `tel3`, `tel4`, `email`, `line`, `line_qr`) VALUES
(1, '11/18 哞哞 4\nKhok Chang 分區，Bang Sai 區，Phra Nakhon Si Ayutthaya 13190', '035-950-279', '035-950-279', '099-415-9992', '094-659-9898', 'dojindustrial.md@gmail.com', '@Dojindustrial', '1775864845.webp');

-- --------------------------------------------------------

--
-- Table structure for table `contact_en`
--

CREATE TABLE `contact_en` (
  `id` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel1` varchar(255) NOT NULL,
  `tel2` varchar(255) NOT NULL,
  `tel3` varchar(255) NOT NULL,
  `tel4` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `line` varchar(255) NOT NULL,
  `line_qr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contact_en`
--

INSERT INTO `contact_en` (`id`, `address`, `tel1`, `tel2`, `tel3`, `tel4`, `email`, `line`, `line_qr`) VALUES
(1, '11/18 Moo 4,Tambon Khok Chang, Bang Sai Districct, Phra Nakhon Si Ayutthaya, 13190', '035-950-279', '035-950-279', '099-415-9992', '094-659-9898', 'dojindustrial.md@gmail.com', '@Dojindustrial', '1775864845.webp');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(10) NOT NULL,
  `content1` longtext NOT NULL,
  `content2` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `content1`, `content2`) VALUES
(1, '<p><span style=\"font-size: 24pt; font-family: \'book antiqua\', palatino, serif;\"><span style=\"color: rgb(17, 42, 153);\">ยินดีต้อนรับสู่</span> <span style=\"font-family: arial, helvetica, sans-serif;\"><strong><span style=\"color: rgb(17, 42, 153);\">DOJ INDUSTRIAL CO., LTD.<br><br></span></strong></span></span><span style=\"color: rgb(52, 73, 94);\">ตั้งแต่ปี พ.ศ. 2550 ทีมงานของเราซึ่งมีประสบการณ์มากมายพยายามอย่างดีที่สุด&nbsp;</span><span style=\"color: rgb(52, 73, 94);\">เพื่อขับเคลื่อนวิศวกรรมการจัดการวัสดุ<br></span><span style=\"color: rgb(52, 73, 94);\">เราจัดหาและส่งมอบผลิตภัณฑ์ที่เหมาะสม </span><span style=\"color: rgb(52, 73, 94);\">อย่างต่อเนื่องตั้งแต่การออกแบบการคำนวณการผลิต การติดตั้ง ตลอดมา <br>การว่าจ้างด้วยราคาตลาดในระยะแรก บริษัทสร้างชื่อเสียงในด้านระบบสายพานลำเลียงเป็นหลัก ผู้เชี่ยวชาญอุตสากรรม<br>เช่น ปูนซีเมนต์ การผลิตและแปรรูปอาหาร เคมี ปิโตรเคมี และศักยภาพใหม่ในธุรกิจโรงไฟฟ้า<br>อีกทั้งมาตรฐานของเราทัดเทียมกับเทคโนโลยีชั้นนำของโลก ซึ่งทำให้บริษัทเติบโตอย่างต่อเนื่อง</span></p>', '<p><span style=\"font-family: arial, helvetica, sans-serif;\"><span style=\"color: rgb(52, 73, 94);\">ในปี พ.ศ. 2556</span> <span style=\"color: rgb(17, 42, 153);\"><strong>DOJ Industrial Co., Ltd. </strong></span><span style=\"color: rgb(52, 73, 94);\">ได้ก่อตั้งขึ้นอย่างเป็นทางการโดยมุ่งเน้นที่การเป็น อุตสาหกรรมโรงไฟฟ้า และธุรกิจพลังงานทดแทน</span></span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `content_cn`
--

CREATE TABLE `content_cn` (
  `id` int(10) NOT NULL,
  `content1` longtext NOT NULL,
  `content2` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `content_cn`
--

INSERT INTO `content_cn` (`id`, `content1`, `content2`) VALUES
(1, '<p><span style=\"font-size: 18pt; color: rgb(17, 42, 153);\">歡迎來到 </span><strong><span style=\"font-size: 24pt; color: rgb(0, 36, 195);\">DOJ INDUSTRIAL CO., LTD.</span></strong></p>\n<pre id=\"tw-target-text\" class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" data-placeholder=\"คำแปล\"><span class=\"Y2IQFc\" lang=\"zh-TW\" style=\"font-size: 14pt;\">自 2007 年以來，我們擁有豐富經驗的團隊盡最大努力推動物料搬運工程。</span></pre>\n<pre class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" data-placeholder=\"คำแปล\"><span class=\"Y2IQFc\" lang=\"zh-TW\" style=\"font-size: 14pt;\">我們不斷以市場價格提供和交付從設計</span>、計算、製造、安裝到調試的正確產品。在初始階段，</pre>\n<pre class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" data-placeholder=\"คำแปล\"><span class=\"Y2IQFc\" lang=\"zh-TW\" style=\"font-size: 14pt;\">公司建立其主要作為輸送系統專家的聲譽在水泥、食品製造加工、化工、石化和電廠業務的新潛力等行業中享有盛譽</span></pre>\n<pre class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" data-placeholder=\"คำแปล\"><span style=\"font-size: 14pt;\"><span class=\"Y2IQFc\" lang=\"zh-TW\">。此外，我們的標準等於世界領先的技術，使公司不斷發展壯大</span><span class=\"Y2IQFc\" lang=\"zh-TW\">。</span></span></pre>', '<p><span style=\"font-size: 14pt;\"><span style=\"color: rgb(52, 73, 94);\">2013年</span>，<span style=\"color: rgb(0, 36, 195);\"><strong>DOJ Industrial Co., Ltd. </strong></span></span><span class=\"Y2IQFc\" lang=\"zh-TW\">。此外，我們的標準等於世界領先的技術，使公司不斷發展壯大</span><span class=\"Y2IQFc\" lang=\"zh-TW\">。</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `content_en`
--

CREATE TABLE `content_en` (
  `id` int(10) NOT NULL,
  `content1` longtext NOT NULL,
  `content2` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `content_en`
--

INSERT INTO `content_en` (`id`, `content1`, `content2`) VALUES
(1, '<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 24pt; color: rgb(17, 42, 153);\">WELCOME TO </span>&nbsp;<span style=\"font-size: 24pt; color: rgb(0, 36, 195);\"><strong>DOJ INDUSTRIAL CO., LTD.<br><br></strong></span><span style=\"color: rgb(52, 73, 94);\">Since 2007, our team with the broad experiences do our best to drive the engineering of materials handling.</span><br><span style=\"color: rgb(52, 73, 94);\">We constantly supply and deliver the right products from design, calculation, manufacture, installation throughout</span><br><span style=\"color: rgb(52, 73, 94);\">commissioning with market price.&nbsp;In the initial phase, the company built its reputation primarily as conveying system</span><br><span style=\"color: rgb(52, 73, 94);\">specialist invidious industries such cement,&nbsp;food manufacturing &amp; processing, chemical, petrochemical,</span><br><span style=\"color: rgb(52, 73, 94);\">and new potential in power plant business.&nbsp;Besides, our standard is equal to the world\'s leading technology</span><br><span style=\"color: rgb(52, 73, 94);\">which makes the company grows continuously.</span></p>', '<p><span style=\"font-family: arial, helvetica, sans-serif; color: rgb(52, 73, 94);\">ตั้งแต่ปี พ.ศ. 2550</span><strong> <span style=\"font-size: 12pt; color: rgb(0, 36, 195);\">DOJ INDUSTRIAL CO., LTD.</span><span style=\"font-size: 24pt; color: rgb(0, 36, 195);\"> </span></strong><span style=\"font-size: 12pt; color: rgb(52, 73, 94); font-family: \'andale mono\', monospace;\">ทีมงานของเราซึ่งมีประสบการณ์มากมายพยายามอย่างดีที่สุด เพื่อขับเคลื่อนวิศวกรรมการจัดการวัสดุ</span><br><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `content_img`
--

CREATE TABLE `content_img` (
  `id` int(10) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `content_img`
--

INSERT INTO `content_img` (`id`, `img`) VALUES
(22, '938361826.webp'),
(23, '987639814.webp'),
(24, '959959098.webp');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `tel`, `message`) VALUES
(1, 'Korawich', 'Korawicl@gmail.com', '0666366666', '	อยากปรึกษาการสร้างบ้านครับอยากปรึกษาการสร้างบ้านครับอยากปรึกษาการสร้างบ้านครับอยากปรึกษาการสร้างบ้านครับอยากปรึกษาการสร้างบ้านครับอยากปรึกษาการสร้างบ้านครับ'),
(2, 'nuch', 'Korawicl@gmail.com', '035621458', 'test111'),
(3, 'job', 'Korawicl@gmail.com', '0756965325', '	อยากปรึกษาการสร้างบ้านครับอยากปรึกษาการสร้างบ้านครับอยากปรึกษาการสร้างบ้านครับอยากปรึกษาการสร้างบ้านครับอยากปรึกษาการสร้างบ้านครับอยากปรึกษาการสร้างบ้านครับ'),
(4, 'jack', 'Korawicl@gmail.com', '09632565498', 'test333');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(10) NOT NULL,
  `news_name` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `status` varchar(10) NOT NULL,
  `cover_img` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_name`, `content`, `status`, `cover_img`, `created_at`) VALUES
(16, 'เราจัดหาและส่งมอบสิทธิ์อย่างต่อเนื่อง', '<p>จัดตั้งขึ้นอย่างเป็นทางการโดยเน้นที่ธุรกิจอุตสาหกรรมน้ำตาล โรงไฟฟ้า และพลังงานทดแทน</p>', 'on', '384060947.webp', '2022-12-22 20:44:40'),
(17, 'เราจัดหาและส่งมอบสิทธิ์อย่างต่อเนื่อง', '<p>จัดตั้งขึ้นอย่างเป็นทางการโดยเน้นที่ธุรกิจอุตสาหกรรมน้ำตาล โรงไฟฟ้า และพลังงานทดแทน</p>', 'on', '1350453804.webp', '2022-12-22 20:44:40'),
(18, 'เราจัดหาและส่งมอบสิทธิ์อย่างต่อเนื่อง', '<p>จัดตั้งขึ้นอย่างเป็นทางการโดยเน้นที่ธุรกิจอุตสาหกรรมน้ำตาล โรงไฟฟ้า และพลังงานทดแทน</p>', 'on', '324213685.webp', '2022-12-22 20:44:40');

-- --------------------------------------------------------

--
-- Table structure for table `news_cn`
--

CREATE TABLE `news_cn` (
  `news_id` int(10) NOT NULL,
  `news_name` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `status` varchar(10) NOT NULL,
  `cover_img` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `news_cn`
--

INSERT INTO `news_cn` (`news_id`, `news_name`, `content`, `status`, `cover_img`, `created_at`) VALUES
(16, '我們不斷供應和交付正確的', '<p>中國現已成為世界工業大國。吸引投資者和各種生產從技術的傳遞中引起</p>', 'on', '356523950.webp', '2022-12-22 20:44:40'),
(17, '我們不斷供應和交付正確的', '<p>中國現已成為世界工業大國。吸引投資者和各種生產從技術的傳遞中引起</p>', 'on', '1543344999.webp', '2022-12-22 20:44:40'),
(18, '我們不斷供應和交付正確的', '<p>中國現已成為世界工業大國。吸引投資者和各種生產從技術的傳遞中引起</p>', 'on', '512543761.webp', '2022-12-22 20:44:40');

-- --------------------------------------------------------

--
-- Table structure for table `news_en`
--

CREATE TABLE `news_en` (
  `news_id` int(10) NOT NULL,
  `news_name` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `status` varchar(10) NOT NULL,
  `cover_img` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `news_en`
--

INSERT INTO `news_en` (`news_id`, `news_name`, `content`, `status`, `cover_img`, `created_at`) VALUES
(16, 'We constantly supply and deliver the right', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat erat placerat mi lacinia viverra. Morbi blandit ex sed leo eleifend lobortis. Quisque interdum ornare felis nec ullamcorper. Phasellus id sollicitudin ipsum, laoreet euismod massa. </p>', 'on', '1571965792.webp', '2022-12-22 20:44:40'),
(17, 'We constantly supply and deliver the right', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat erat placerat mi lacinia viverra. Morbi blandit ex sed leo eleifend lobortis. Quisque interdum ornare felis nec ullamcorper. Phasellus id sollicitudin ipsum, laoreet euismod massa. </p>', 'on', '1894830893.webp', '2022-12-22 20:44:40'),
(18, 'We constantly supply and deliver the right', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat erat placerat mi lacinia viverra. Morbi blandit ex sed leo eleifend lobortis. Quisque interdum ornare felis nec ullamcorper. Phasellus id sollicitudin ipsum, laoreet euismod massa. </p>', 'on', '2062007541.webp', '2022-12-22 20:44:40');

-- --------------------------------------------------------

--
-- Table structure for table `news_img`
--

CREATE TABLE `news_img` (
  `id` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `news_id` int(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `news_img`
--

INSERT INTO `news_img` (`id`, `image`, `news_id`, `created_at`) VALUES
(48, '486677326.webp', 18, '2023-01-19 14:45:02'),
(49, '1345731416.webp', 18, '2023-01-19 14:45:02'),
(50, '341224783.webp', 17, '2023-01-19 14:45:17'),
(51, '1709289150.webp', 16, '2023-01-19 14:45:30'),
(52, '1192907022.webp', 16, '2023-01-19 14:45:30'),
(53, '1216419037.webp', 18, '2023-01-19 15:00:51');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `intro` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `conclude` longtext NOT NULL,
  `link_video` varchar(255) DEFAULT NULL,
  `cover_img` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `pt_id` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `intro`, `content`, `conclude`, `link_video`, `cover_img`, `status`, `pt_id`, `id`, `created_at`) VALUES
(32, 'การจัดหาท่อ1', 'ทดสอบ1', '<p>รายละเอียด1</p>', '<p>สรุป1</p>', 'https://youtu.be/PPQ8MwzkSts', '475145768.webp', 'on', '2', '1', '2022-12-22 12:17:10'),
(33, 'การจัดหาท่อ2', 'ทดสอบ2', '<p>รายละเอียด2</p>', '<p>สรุป2</p>', 'https://youtu.be/PPQ8MwzkSts', '1513071000.webp', 'on', '1', '2', '2022-12-22 12:19:08'),
(35, 'ตลาดสินค้าอุตสาหกรรม', '(ข้อมูลตัวอย่าง)ตลาดสินค้าอุตสาหกรรมเป็นตลาดที่มีการซื้อขายสินค้าอุตสาหกรรม แต่ผู้ซื้อขายนั้นจะไม่ใช่บุคคลทั่วไป แต่มีสภาพเป็นองค์กรหรือนิติบุคคล ไม่ว่าจะเป็นห้างร้านต่างๆ หน่วยงานราชการ หรือบริษัทใหญ่ๆ เป็นต้น โดยองค์กรหรือนิติบุคคลเหล่านี้จะเข้ามาทำการซ', '<p>(ข้อมูลตัวอย่าง)สินค้าอุตสาหกรรมคืออะไร?<br>สินค้าอุตสาหกรรมนั้นเป็นสินค้าที่นำไปใช้ในกระบวนการผลิต หรือใช้เป็นส่วนประกอบต่างๆ เพื่อให้ได้มาซึ่งผลิตภัณฑ์ สินค้า หรือบริการ ยกตัวอย่างเช่น เหล็ก เป็นส่วนประกอบที่ใช้ในการผลิตรถยนต์, ถุงมือที่ใช้ในการผ่าตัด หรืออะลูมิเนียมที่นำไปผลิตเป็นเครื่องครัวต่างๆ เช่น หม้อ ตะหลิว เป็นต้น<br><br>สินค้าอุตสาหกรรมแตกต่างกับสินค้าอุปโภคบริโภคทั่วไปอย่างไร?<br>เนื่องจากสินค้าอุตสาหกรรมจะเป็นสินค้าที่จะนำไปประกอบการผลิตต่างๆ เวลาตัดสินใจซื้อจึงมักจะไม่ค่อยใช้อารมณ์เข้ามาเกี่ยวข้อง อีกทั้งจะไม่ค่อยมีการนำไปโฆษณาทางโทรทัศน์หรือสื่อต่างๆ เนื่องจากลูกค้าส่วนใหญ่เป็นองค์กรหรือนิติบุคคล ที่ต้องนำสินค้าอุตสาหกรรมไปผลิตเป็นสินค้า หรือบริการให้กับลูกค้าต่อๆ ไป การตัดสินใจซื้อจึงคำนึงถึงคุณสมบัติของสินค้า ราคาของสินค้า และความสัมพันธ์ระหว่างผู้ซื้อ ผู้ขาย เป็นหลัก</p>', '<p>(ข้อมูลตัวอย่าง)ยกตัวอย่างกับสินค้าในกลุ่มของศิลปะและหัตถกรรม มีมูลค่ามากถึงประมาณ 80,000 ล้านบาท ต่อปี อีกทั้งการซื้อ-ขายสินค้าในตลาดสินค้าอุตสาหกรรมยังเป็นการช่วยส่งเสริมและกระตุ้นเศรษฐกิจของประเทศ เนื่องจากทำให้เกิดการจ้างงาน และการกระจายรายได้ไปยังพื้นที่ต่างๆ&nbsp;</p>\r\n<p>นอกจากนี้สถิติล่าสุดจากธนาคารแห่งประเทศไทย ในเดือนสิงหาคม 2563 ยังเป็นสิ่งที่แสดงให้เห็นถึงความสำคัญของสินค้าอุตสาหกรรมต่อเศรษฐกิจของประเทศไทยได้เป็นอย่างดี เนื่องจากจากสถิติพบว่า สินค้าส่งออกของประเทศไทยนั้นมีมูลค่าสูงถึง 635,219.53 ล้านบาท และจากสถิติยังได้แสดงให้เห็นอีกว่า สินค้าส่งออกที่มีมูลค่าสูงที่สุดที่มีการจำแนกตามการผลิตนั้นก็คือ &lsquo;สินค้าอุตสาหกรรม&rsquo; ซึ่งคิดเป็นมูลค่า 499,029.91 ล้านบาท&nbsp; หรือคิดเป็นจำนวน 78.56% ของมูลค่าการส่งออกทั้งหมดเลยก็ว่าได้ ดังนั้น สินค้าอุตสาหกรรมจึงมีความสำคัญต่อเศรษฐกิจของประเทศไทยอย่างยิ่ง เพราะเป็นกลุ่มสินค้าที่สามารถสร้างรายได้ให้กับประเทศได้อย่างมหาศาล</p>', 'https://youtu.be/SR_NpKEcH6Q', '1485161557.webp', 'on', '2', '3', '2022-12-22 20:00:57'),
(36, 'ตลาดสินค้าอุตสาหกรรม', '(ข้อมูลตัวอย่าง)ตลาดสินค้าอุตสาหกรรมเป็นตลาดที่มีการซื้อขายสินค้าอุตสาหกรรม แต่ผู้ซื้อขายนั้นจะไม่ใช่บุคคลทั่วไป แต่มีสภาพเป็นองค์กรหรือนิติบุคคล ไม่ว่าจะเป็นห้างร้านต่างๆ หน่วยงานราชการ หรือบริษัทใหญ่ๆ เป็นต้น โดยองค์กรหรือนิติบุคคลเหล่านี้จะเข้ามาทำการซ', '<p>test</p>', '<p>test</p>', 'https://youtu.be/PPQ8MwzkSts', '1374357697.webp', 'on', '2', '4', '2023-01-20 10:14:21');

-- --------------------------------------------------------

--
-- Table structure for table `product_cn`
--

CREATE TABLE `product_cn` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `intro` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `conclude` longtext NOT NULL,
  `link_video` varchar(255) DEFAULT NULL,
  `cover_img` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `pt_id` varchar(10) NOT NULL,
  `id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product_cn`
--

INSERT INTO `product_cn` (`product_id`, `product_name`, `intro`, `content`, `conclude`, `link_video`, `cover_img`, `status`, `pt_id`, `id`, `created_at`) VALUES
(32, '管道供應1', '不滲透', '<p>不滲透</p>', '<p>不滲透</p>', 'https://youtu.be/U3x6PclsXQw', '1376981367.webp', 'on', '1', '2', '2022-12-22 12:17:10'),
(33, '管道供應2', '不滲透', '<p>不滲透</p>', '<p>不滲透</p>', 'https://youtu.be/RZysTBsukFI', '1448967206.webp', 'on', '2', '1', '2022-12-22 12:19:08'),
(35, '工業品市場', '什麼是工業產品？ 工業品是在生產過程中使用的商品。或用作組件例如，為了獲得產品、商品或服務，鋼鐵是用於生產汽車、手術手套的部件。或鋁用於生產各種廚房用具，如鍋、鍋鏟等。', '<pre id=\"tw-target-text\" class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" data-placeholder=\"คำแปล\"><span class=\"Y2IQFc\" lang=\"zh-TW\">例如，工藝品類別的產品。每年價值約800億泰銖。此外，工業市場的貿易也有助於促進和刺<br>激國家經濟。<br>由於就業以及不同地區的收入分配</span></pre>', '<pre id=\"tw-target-text\" class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" data-placeholder=\"คำแปล\"><span class=\"Y2IQFc\" lang=\"zh-TW\">此外，泰國央行的最新統計數據2020年8月，也很好地體現了工業產品對泰國經濟的重要性。因為從統計中發現泰國出口額為6.352億1953億泰銖，<br>統計數據還顯示，按生產分類的最高價值出口是&ldquo;工業品&rdquo;價值49902991萬泰銖，占出口總值的78.56%。</span></pre>', 'https://youtu.be/b5KsmLn9lns', '68238927.webp', 'on', '3', '2', '2022-12-22 20:00:57'),
(36, '工業品市場', '什麼是工業產品？ 工業品是在生產過程中使用的商品。或用作組件例如，為了獲得產品、商品或服務，鋼鐵是用於生產汽車、手術手套的部件。或鋁用於生產各種廚房用具，如鍋、鍋鏟等。', '<p>什麼是工業產品？ 工業品是在生產過程中使用的商品。或用作組件例如，為了獲得產品、商品或服務，鋼鐵是用於生產汽車、手術手套的部件。或鋁用於生產各種廚房用具，如鍋、鍋鏟等。</p>', '<p>什麼是工業產品？ 工業品是在生產過程中使用的商品。或用作組件例如，</p>\r\n<p>為了獲得產品、商品或服務，鋼鐵是用於生產汽車、手術手套的部件。或鋁用於生產各種廚房用具，如鍋、鍋鏟等。</p>', 'https://youtu.be/PPQ8MwzkSts', '435710186.webp', 'on', '3', '2', '2023-01-20 10:20:16'),
(37, '工業品市場', '什麼是工業產品？ 工業品是在生產過程中使用的商品。或用作組件例如，為了獲得產品、商品或服務，鋼鐵是用於生產汽車、手術手套的部件。或鋁用於生產各種廚房用具，如鍋、鍋鏟等。', '<p>什麼是工業產品？ 工業品是在生產過程中使用的商品。或用作組件例如，為了獲得產品、商品或服務，鋼鐵是用於生產汽車、手術手套的部件。或鋁用於生產各種廚房用具，如鍋、鍋鏟等。</p>', '<p>什麼是工業產品？ 工業品是在生產過程中使用的商品。或用作組件例如，</p>\r\n<p>為了獲得產品、商品或服務，鋼鐵是用於生產汽車、手術手套的部件。或鋁用於生產各種廚房用具，如鍋、鍋鏟等。</p>', 'https://youtu.be/PPQ8MwzkSts', '840157765.webp', 'on', '3', '3', '2023-01-20 10:20:16'),
(38, '工業品市場', '什麼是工業產品？ 工業品是在生產過程中使用的商品。或用作組件例如，為了獲得產品、商品或服務，鋼鐵是用於生產汽車、手術手套的部件。或鋁用於生產各種廚房用具，如鍋、鍋鏟等。', '<p>什麼是工業產品？ 工業品是在生產過程中使用的商品。或用作組件例如，為了獲得產品、商品或服務，鋼鐵是用於生產汽車、手術手套的部件。或鋁用於生產各種廚房用具，如鍋、鍋鏟等。</p>', '<p>什麼是工業產品？ 工業品是在生產過程中使用的商品。或用作組件例如，</p>\r\n<p>為了獲得產品、商品或服務，鋼鐵是用於生產汽車、手術手套的部件。或鋁用於生產各種廚房用具，如鍋、鍋鏟等。</p>', 'https://youtu.be/PPQ8MwzkSts', '1749248132.webp', 'on', '1', '2', '2023-01-20 10:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `product_en`
--

CREATE TABLE `product_en` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `intro` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `conclude` longtext NOT NULL,
  `link_video` varchar(255) DEFAULT NULL,
  `cover_img` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `pt_id` varchar(10) NOT NULL,
  `id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product_en`
--

INSERT INTO `product_en` (`product_id`, `product_name`, `intro`, `content`, `conclude`, `link_video`, `cover_img`, `status`, `pt_id`, `id`, `created_at`) VALUES
(32, 'PIPING SUPPLY', 'imperdiet ut ligula. Mauris congue, orci ut gravida dignissim, lacus tortor molestie turpis, nec finibus est velit nec sapien.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat erat placerat mi lacinia viverra. Morbi blandit ex sed leo eleifend lobortis. Quisque interdum ornare felis nec ullamcorper. Phasellus id sollicitudin ipsum, laoreet euismod massa. Duis fringilla a mi vel feugiat. Nulla et pharetra augue. Nam sit amet nunc tincidunt, consequat magna eu, luctus felis. Integer semper felis felis, ut consectetur magna dapibus sed. Praesent posuere massa quis fringilla cursus. Integer a neque sit amet risus suscipit fermentum quis lacinia mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in diam purus. Maecenas diam augue, blandit vitae nisl eget, congue dignissim magna. Quisque leo urna, tincidunt vitae malesuada sed, imperdiet ut ligula. Mauris congue, orci ut gravida dignissim, lacus tortor molestie turpis, nec finibus est velit nec sapien.</p>\r\n<p>Phasellus at lacus quam. Aenean in tellus at libero consequat cursus ut at libero. Morbi mollis ultricies tincidunt. Aliquam erat volutpat. Phasellus euismod mauris et orci gravida, at condimentum massa congue. Etiam cursus volutpat arcu nec maximus. Vestibulum consectetur semper massa, tempor volutpat est fermentum vitae. Cras finibus nec augue ut eleifend. Proin posuere massa sit amet sapien venenatis, at congue dui gravida. Fusce diam ex, placerat sed eros et, lacinia venenatis felis. Aliquam a imperdiet dui. Maecenas odio enim, congue in sem in, ultricies vulputate mi. Nullam ullamcorper lectus vel aliquam faucibus. Pellentesque et eros molestie, mattis nibh et, maximus est. Proin auctor blandit magna et efficitur. Quisque a neque nulla.</p>\r\n<p>Donec venenatis consequat mi, vitae vulputate tortor tristique at. Mauris pretium et neque sit amet rutrum. Aliquam ullamcorper ligula eu lorem accumsan convallis non sit amet nisl. Donec vehicula quam tellus, quis eleifend massa malesuada eu. Nunc ultricies molestie convallis. Fusce ornare nunc aliquet erat maximus malesuada. Praesent eget quam vitae tortor fringilla ultricies in sed ante. Fusce ut ultricies ante. Suspendisse quam orci, euismod vel mollis aliquam, pellentesque eget velit. Cras bibendum fermentum neque ac imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dictum, mi et interdum viverra, diam risus semper velit, et sagittis purus sem a erat. Quisque non tortor lobortis, convallis odio a, consequat felis. Duis ac egestas orci. Suspendisse imperdiet diam non lobortis iaculis. Pellentesque viverra quam diam, tempus venenatis magna fermentum sed.</p>\r\n<p>Quisque mauris nisl, consectetur eu est in, ultricies suscipit lectus. Aenean ligula elit, eleifend eu lorem ut, aliquam ultricies eros. Sed urna magna, bibendum a commodo vitae, finibus at nisi. Aenean finibus massa at sollicitudin vehicula. Sed et consequat elit. Nullam non felis et lectus mattis blandit aliquam tempor neque. Nulla ac nulla ornare, tristique nibh at, imperdiet libero. Maecenas dictum mauris nec elit condimentum, eu lacinia sem ultricies. Morbi rutrum magna quis mattis dapibus.</p>\r\n<p>Pellentesque sodales scelerisque odio, a consectetur nisi aliquam porta. Praesent vel ligula vel quam ullamcorper gravida eget sed lectus. Aliquam vel tempor diam, eu ultrices nunc. Vivamus id purus risus. Nam rhoncus metus sed urna auctor, ac venenatis ante elementum. Suspendisse convallis lorem quis condimentum porta. Cras malesuada fringilla eleifend. Nam vitae urna est. Aliquam erat volutpat.</p>', '<p>Donec venenatis consequat mi, vitae vulputate tortor tristique at. Mauris pretium et neque sit amet rutrum. Aliquam ullamcorper ligula eu lorem accumsan convallis non sit amet nisl. Donec vehicula quam tellus, quis eleifend massa malesuada eu. Nunc ultricies molestie convallis. Fusce ornare nunc aliquet erat maximus malesuada. Praesent eget quam vitae tortor fringilla ultricies in sed ante. Fusce ut ultricies ante. Suspendisse quam orci, euismod vel mollis aliquam, pellentesque eget velit. Cras bibendum fermentum neque ac imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dictum, mi et interdum viverra, diam risus semper velit, et sagittis purus sem a erat. Quisque non tortor lobortis, convallis odio a, consequat felis. Duis ac egestas orci. Suspendisse imperdiet diam non lobortis iaculis. Pellentesque viverra quam diam, tempus venenatis magna fermentum sed.</p>\r\n<p>Quisque mauris nisl, consectetur eu est in, ultricies suscipit lectus. Aenean ligula elit, eleifend eu lorem ut, aliquam ultricies eros. Sed urna magna, bibendum a commodo vitae, finibus at nisi. Aenean finibus massa at sollicitudin vehicula. Sed et consequat elit. Nullam non felis et lectus mattis blandit aliquam tempor neque. Nulla ac nulla ornare, tristique nibh at, imperdiet libero. Maecenas dictum mauris nec elit condimentum, eu lacinia sem ultricies. Morbi rutrum magna quis mattis dapibus.</p>\r\n<p>Pellentesque sodales scelerisque odio, a consectetur nisi aliquam porta. Praesent vel ligula vel quam ullamcorper gravida eget sed lectus. Aliquam vel tempor diam, eu ultrices nunc. Vivamus id purus risus. Nam rhoncus metus sed urna auctor, ac venenatis ante elementum. Suspendisse convallis lorem quis condimentum porta. Cras malesuada fringilla eleifend. Nam vitae urna est. Aliquam erat volutpat.</p>\r\n<div class=\"ratio ratio-16x9\">&nbsp;</div>', 'https://www.youtube.com/watch?v=P3fS01e1RVM', '1334069484.webp', 'on', '1', '1', '2022-12-22 12:17:10'),
(33, 'PIPING SUPPLY', 'imperdiet ut ligula. Mauris congue, orci ut gravida dignissim, lacus tortor molestie turpis, nec finibus est velit nec sapien.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat erat placerat mi lacinia viverra. Morbi blandit ex sed leo eleifend lobortis. Quisque interdum ornare felis nec ullamcorper. Phasellus id sollicitudin ipsum, laoreet euismod massa. Duis fringilla a mi vel feugiat. Nulla et pharetra augue. Nam sit amet nunc tincidunt, consequat magna eu, luctus felis. Integer semper felis felis, ut consectetur magna dapibus sed. Praesent posuere massa quis fringilla cursus. Integer a neque sit amet risus suscipit fermentum quis lacinia mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in diam purus. Maecenas diam augue, blandit vitae nisl eget, congue dignissim magna. Quisque leo urna, tincidunt vitae malesuada sed, imperdiet ut ligula. Mauris congue, orci ut gravida dignissim, lacus tortor molestie turpis, nec finibus est velit nec sapien.</p>\r\n<p>&nbsp;</p>', '<p>Donec venenatis consequat mi, vitae vulputate tortor tristique at. Mauris pretium et neque sit amet rutrum. Aliquam ullamcorper ligula eu lorem accumsan convallis non sit amet nisl. Donec vehicula quam tellus, quis eleifend massa malesuada eu. Nunc ultricies molestie convallis. Fusce ornare nunc aliquet erat maximus malesuada. Praesent eget quam vitae tortor fringilla ultricies in sed ante. Fusce ut ultricies ante. Suspendisse quam orci, euismod vel mollis aliquam, pellentesque eget velit. Cras bibendum fermentum neque ac imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dictum, mi et interdum viverra, diam risus semper velit, et sagittis purus sem a erat. Quisque non tortor lobortis, convallis odio a, consequat felis. Duis ac egestas orci. Suspendisse imperdiet diam non lobortis iaculis. Pellentesque viverra quam diam, tempus venenatis magna fermentum sed.</p>\r\n<p>Quisque mauris nisl, consectetur eu est in, ultricies suscipit lectus. Aenean ligula elit, eleifend eu lorem ut, aliquam ultricies eros. Sed urna magna, bibendum a commodo vitae, finibus at nisi. Aenean finibus massa at sollicitudin vehicula. Sed et consequat elit. Nullam non felis et lectus mattis blandit aliquam tempor neque. Nulla ac nulla ornare, tristique nibh at, imperdiet libero. Maecenas dictum mauris nec elit condimentum, eu lacinia sem ultricies. Morbi rutrum magna quis mattis dapibus.</p>\r\n<p>Pellentesque sodales scelerisque odio, a consectetur nisi aliquam porta. Praesent vel ligula vel quam ullamcorper gravida eget sed lectus. Aliquam vel tempor diam, eu ultrices nunc. Vivamus id purus risus. Nam rhoncus metus sed urna auctor, ac venenatis ante elementum. Suspendisse convallis lorem quis condimentum porta. Cras malesuada fringilla eleifend. Nam vitae urna est. Aliquam erat volutpat.</p>', 'https://www.youtube.com/watch?v=P3fS01e1RVM', '616739819.webp', 'on', '2', '2', '2022-12-22 12:19:08'),
(35, 'PIPING SUPPLY', 'imperdiet ut ligula. Mauris congue, orci ut gravida dignissim, lacus tortor molestie turpis, nec finibus est velit nec sapien.', '<p>test</p>', '<p>test</p>', 'https://www.youtube.com/watch?v=P3fS01e1RVM', '1044439231.webp', 'on', '3', '1', '2022-12-22 20:00:57'),
(36, 'industrial product market', '(Sample data) Industrial goods market is a market where industrial goods are traded. But the trader is not an ordinary person. but has the status of an organization or a juristic person Whether it\'s a department store government agency Or large companies,', '<p>(Sample data) Industrial goods market is a market where industrial goods are traded. But the trader is not an ordinary person. but has the status of an organization or a juristic person Whether it\'s a department store government agency Or large companies, etc. These organizations or juristic persons will come to trade industrial products to produce products. or services that may be sold, rented, or delivered to other traders.</p>', '<p>persons will come to trade industrial products to produce products. or services that may be sold, rented, or delivered to other traders.</p>', 'https://youtu.be/z5nc50q-1Ms', '1375591042.webp', 'on', '3', '2', '2023-01-20 10:22:40');

-- --------------------------------------------------------

--
-- Table structure for table `product_img`
--

CREATE TABLE `product_img` (
  `id` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `product_id` int(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product_img`
--

INSERT INTO `product_img` (`id`, `image`, `product_id`, `created_at`) VALUES
(52, '1057456775.webp', 32, '2022-12-22 12:17:10'),
(53, '2103571066.webp', 32, '2022-12-22 12:17:10'),
(54, '1162102552.webp', 32, '2022-12-22 12:17:10'),
(55, '1777635474.webp', 33, '2022-12-22 12:19:09'),
(56, '1693566412.webp', 33, '2022-12-22 12:19:09'),
(57, '1908400263.webp', 33, '2022-12-22 12:19:09'),
(61, '1023096364.webp', 35, '2022-12-22 20:00:57'),
(62, '570159213.webp', 35, '2022-12-22 20:00:57'),
(63, '1531579740.webp', 35, '2022-12-22 20:00:57'),
(64, '1836315983.webp', 36, '2023-01-20 10:14:21'),
(65, '1695081534.webp', 36, '2023-01-20 10:14:21'),
(66, '1296492114.webp', 36, '2023-01-20 10:20:16'),
(67, '690024261.webp', 36, '2023-01-20 10:20:16'),
(68, '645965818.webp', 36, '2023-01-20 10:20:16'),
(69, '145044897.webp', 36, '2023-01-20 10:22:40'),
(70, '1430725996.webp', 36, '2023-01-20 10:22:40'),
(71, '1460342157.webp', 36, '2023-01-20 10:22:40'),
(72, '839668676.webp', 36, '2023-01-20 10:22:40');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(10) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `customer` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `project_start` varchar(255) NOT NULL,
  `project_finish` varchar(255) NOT NULL,
  `product_list` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `cover_img` varchar(255) NOT NULL,
  `ref_id` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `customer`, `location`, `project_start`, `project_finish`, `product_list`, `status`, `cover_img`, `ref_id`, `created_at`) VALUES
(10, 'ผลงาน 1', 'กทส', 'นครสวรรค์ ,ประเทศไทย', 'กรกฎาคม 2021', 'ธันวาคม 2564', 'สายพานชานอ้อย', 'on', '1830273322.webp', '7', '2022-12-22 22:03:54'),
(11, 'ผลงาน 2', 'กทส', 'นครสวรรค์ ,ประเทศไทย', 'กรกฎาคม 2021', 'ธันวาคม 2564', 'สายพานชานอ้อย', 'on', '540367752.webp', '8', '2022-12-22 22:03:54'),
(12, 'ผลงาน 3', 'กทส', 'นครสวรรค์ ,ประเทศไทย', 'กรกฎาคม 2021', 'ธันวาคม 2564', 'สายพานชานอ้อย', 'on', '2063920277.webp', '5', '2022-12-22 22:03:54'),
(14, 'ผลงาน 4', 'กทส', 'นครสวรรค์ ,ประเทศไทย', 'กรกฎาคม 2021', 'ธันวาคม 2564', 'สายพานชานอ้อย', 'on', '2007739761.webp', '4', '2022-12-22 22:03:54'),
(15, 'ผลงาน 5', 'กทส', 'นครสวรรค์ ,ประเทศไทย', 'กรกฎาคม 2021', 'ธันวาคม 2564', 'สายพานชานอ้อย', 'on', '1923569777.webp', '3', '2022-12-22 22:03:54'),
(16, 'ผลงาน 6', 'กทส', 'นครสวรรค์ ,ประเทศไทย', 'กรกฎาคม 2021', 'ธันวาคม 2564', 'สายพานชานอ้อย', 'on', '481231763.webp', '3', '2022-12-22 22:03:54'),
(18, 'ผลงาน 7', 'กทส', 'กระบี่ ,ประเทศไทย', 'กันยายน 2560', 'กันยายน 2562', 'สายพานชานอ้อย', 'on', '726381066.webp', '6', '2023-01-19 10:24:03'),
(19, 'ผลงาน 8', 'กทส', 'นครศรีธรรมราช ,ประเทศไทย', 'ธันวาคม 2021', 'ธันวาคม 2023', 'สายพานชานอ้อย', 'on', '1112886050.webp', '9', '2023-01-19 13:02:28');

-- --------------------------------------------------------

--
-- Table structure for table `project_cn`
--

CREATE TABLE `project_cn` (
  `project_id` int(10) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `customer` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `project_start` varchar(255) NOT NULL,
  `project_finish` varchar(255) NOT NULL,
  `product_list` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `cover_img` varchar(255) NOT NULL,
  `ref_id` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `project_cn`
--

INSERT INTO `project_cn` (`project_id`, `project_name`, `customer`, `location`, `project_start`, `project_finish`, `product_list`, `status`, `cover_img`, `ref_id`, `created_at`) VALUES
(10, '投資組合 1', '韓國交通信息系統', '泰國那空沙旺', '2021 年 7 月', '2021 年 12 月', '甘蔗渣皮帶輸送機', 'on', '962854820.webp', '1', '2022-12-22 22:03:54'),
(11, '投資組合 2', '韓國交通信息系統1', '泰國那空沙旺1', '2021 年 7 月1', '2021 年 12 月1', '甘蔗渣皮帶輸送機1', 'on', '1542740574.webp', '2', '2023-01-17 09:16:07'),
(12, '投資組合 3', '韓國交通信息系統1', '泰國那空沙旺1', '2021 年 7 月1', '2021 年 12 月1', '甘蔗渣皮帶輸送機1', 'on', '366881950.webp', '3', '2023-01-17 09:16:07'),
(14, '投資組合 5', '韓國交通信息系統1', '泰國那空沙旺1', '2021 年 7 月1', '2021 年 12 月1', '甘蔗渣皮帶輸送機1', 'on', '1855541893.webp', '5', '2023-01-17 09:16:07'),
(15, '投資組合 6', '韓國交通信息系統1', '泰國那空沙旺1', '2021 年 7 月1', '2021 年 12 月1', '甘蔗渣皮帶輸送機1', 'on', '1321728208.webp', '6', '2023-01-17 09:16:07'),
(16, '投資組合 7', '韓國交通信息系統1', '泰國那空沙旺1', '2021 年 7 月1', '2021 年 12 月1', '甘蔗渣皮帶輸送機1', 'on', '1093328704.webp', '7', '2023-01-17 09:16:07'),
(17, '投資組合 4', '韓國交通信息系統', '泰國那空沙旺', '2021 年 7 月', '2023 年 12 月', '甘蔗渣皮帶輸送機', 'on', '1825136957.webp', '5', '2023-01-19 10:28:16'),
(18, '投資組合 8', '韓國交通信息系統', '泰國那空沙旺', '2021 年 7 月', '2022 年 12 月', '甘蔗渣皮帶輸送機', 'on', '910848026.webp', '4', '2023-01-19 13:15:14');

-- --------------------------------------------------------

--
-- Table structure for table `project_en`
--

CREATE TABLE `project_en` (
  `project_id` int(10) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `customer` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `project_start` varchar(255) NOT NULL,
  `project_finish` varchar(255) NOT NULL,
  `product_list` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `cover_img` varchar(255) NOT NULL,
  `ref_id` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `project_en`
--

INSERT INTO `project_en` (`project_id`, `project_name`, `customer`, `location`, `project_start`, `project_finish`, `product_list`, `status`, `cover_img`, `ref_id`, `created_at`) VALUES
(10, 'Portfolio 1', 'KTIS', 'Nakhon Sawan, Thailand', 'July 2021', 'December 2021', 'Bagasse Belt Conveyor', 'on', '1623891714.webp', '1', '2022-12-22 22:03:54'),
(11, 'Portfolio 2', 'KTIS1', 'Nakhon Sawan, Thailand1', 'กรกฎาคม 2021', 'ธันวาคม 2564', 'Bagasse Belt Conveyor1', 'on', '1776949488.webp', '2', '2023-01-17 09:19:47'),
(12, 'Portfolio 3', 'KTIS1', 'Nakhon Sawan, Thailand1', 'กรกฎาคม 2021', 'ธันวาคม 2564', 'Bagasse Belt Conveyor1', 'on', '1335268724.webp', '3', '2023-01-17 09:19:47'),
(14, 'Portfolio 5', 'KTIS1', 'Nakhon Sawan, Thailand1', 'กรกฎาคม 2021', 'ธันวาคม 2564', 'Bagasse Belt Conveyor1', 'on', '1978955106.webp', '5', '2023-01-17 09:19:47'),
(15, 'Portfolio 6', 'KTIS1', 'Nakhon Sawan, Thailand1', 'กรกฎาคม 2021', 'ธันวาคม 2564', 'Bagasse Belt Conveyor1', 'on', '176516534.webp', '6', '2023-01-17 09:19:47'),
(16, 'Portfolio 7', 'KTIS1', 'Nakhon Sawan, Thailand1', 'กรกฎาคม 2021', 'ธันวาคม 2564', 'Bagasse Belt Conveyor1', 'on', '1805494204.webp', '7', '2023-01-17 09:19:47'),
(18, 'Portfolio 4', 'KTIS', 'Krabi, Thailand', 'July 2021', 'December 2023', 'Bagasse Belt Conveyor', 'on', '1619759337.webp', '8', '2023-01-19 10:26:51'),
(19, 'Portfolio 8', 'KTIS', 'Nakhon Sri Thammarat, Thailand1', 'July 2021', 'December 2023', 'Bagasse Belt Conveyor', 'on', '1307345040.webp', '2', '2023-01-19 13:07:39');

-- --------------------------------------------------------

--
-- Table structure for table `project_img`
--

CREATE TABLE `project_img` (
  `id` int(10) NOT NULL,
  `image` longtext NOT NULL,
  `project_id` int(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `project_img`
--

INSERT INTO `project_img` (`id`, `image`, `project_id`, `created_at`) VALUES
(63, '1637407856.webp', 14, '2022-12-22 22:03:55'),
(64, '708552975.webp', 10, '2022-12-22 22:03:55'),
(66, '1731457507.webp', 15, '2023-01-12 10:38:57'),
(67, '1259725621.webp', 15, '2023-01-16 16:36:14'),
(68, '198808900.webp', 12, '2023-01-16 16:36:14'),
(69, '352373466.webp', 15, '2023-01-16 16:36:14'),
(70, '1241635126.webp', 15, '2023-01-16 16:36:29'),
(71, '1653682426.webp', 15, '2023-01-16 16:36:29'),
(72, '547147241.webp', 11, '2023-01-16 16:36:29'),
(76, '1727800817.webp', 14, '2023-01-17 09:16:07'),
(77, '1964731931.webp', 16, '2023-01-17 09:16:07'),
(78, '1490266367.webp', 16, '2023-01-17 09:16:07'),
(79, '1870796061.webp', 14, '2023-01-17 09:19:47'),
(80, '1129676418.webp', 14, '2023-01-17 09:19:47'),
(81, '1285468323.webp', 14, '2023-01-17 09:19:47'),
(82, '553399428.webp', 16, '2023-01-19 10:16:54'),
(83, '862951540.webp', 16, '2023-01-19 10:16:54'),
(84, '34565737.webp', 16, '2023-01-19 10:16:54'),
(85, '713951735.webp', 16, '2023-01-19 10:16:54'),
(86, '754903510.webp', 10, '2023-01-19 10:17:08'),
(87, '1802781148.webp', 10, '2023-01-19 10:17:08'),
(88, '911500175.webp', 10, '2023-01-19 10:17:08'),
(89, '1527458254.webp', 10, '2023-01-19 10:17:08'),
(90, '2029950812.webp', 12, '2023-01-19 10:19:09'),
(91, '1479276809.webp', 12, '2023-01-19 10:19:09'),
(92, '1893387866.webp', 12, '2023-01-19 10:19:09'),
(93, '1397841947.webp', 12, '2023-01-19 10:19:09'),
(94, '498123002.webp', 11, '2023-01-19 10:19:32'),
(95, '158352903.webp', 11, '2023-01-19 10:19:32'),
(96, '1404706825.webp', 11, '2023-01-19 10:19:32'),
(97, '968205790.webp', 11, '2023-01-19 10:19:32'),
(98, '1138141594.webp', 18, '2023-01-19 10:24:34'),
(99, '2015304541.webp', 18, '2023-01-19 10:24:34'),
(100, '251930341.webp', 18, '2023-01-19 10:24:34'),
(101, '461797132.webp', 18, '2023-01-19 10:24:34'),
(102, '961394843.webp', 18, '2023-01-19 10:24:34'),
(103, '1360778104.webp', 18, '2023-01-19 10:26:51'),
(104, '40330643.webp', 18, '2023-01-19 10:26:51'),
(105, '824209022.webp', 18, '2023-01-19 10:26:51'),
(106, '1135204016.webp', 18, '2023-01-19 10:26:51'),
(108, '852602303.webp', 17, '2023-01-19 10:28:32'),
(109, '1116725432.webp', 17, '2023-01-19 10:28:32'),
(110, '863117020.webp', 17, '2023-01-19 10:28:32'),
(111, '504519758.webp', 17, '2023-01-19 10:28:32'),
(112, '1822949811.webp', 17, '2023-01-19 10:29:00'),
(113, '221935787.webp', 19, '2023-01-19 13:02:28'),
(114, '777859974.webp', 19, '2023-01-19 13:02:28'),
(115, '649599616.webp', 19, '2023-01-19 13:02:28'),
(116, '2119163392.webp', 19, '2023-01-19 13:02:28'),
(117, '856112699.webp', 19, '2023-01-19 13:07:39'),
(118, '1070749665.webp', 19, '2023-01-19 13:07:39'),
(119, '823028680.webp', 19, '2023-01-19 13:07:39'),
(120, '667066616.webp', 19, '2023-01-19 13:07:39'),
(121, '1415876616.webp', 18, '2023-01-19 13:15:14'),
(122, '1360069525.webp', 18, '2023-01-19 13:15:14'),
(123, '888754352.webp', 18, '2023-01-19 13:15:14'),
(124, '752206444.webp', 18, '2023-01-19 13:15:14');

-- --------------------------------------------------------

--
-- Table structure for table `service_cn`
--

CREATE TABLE `service_cn` (
  `service_id` int(10) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `status` varchar(10) NOT NULL,
  `cover_img` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `service_cn`
--

INSERT INTO `service_cn` (`service_id`, `service_name`, `content`, `status`, `cover_img`, `created_at`) VALUES
(7, '工程、製造、安裝和調試工作', '測試系統', 'on', '231773355.webp', '2022-12-22 15:11:22'),
(8, '材料和設備工作', '測試系統', 'on', '110896146.webp', '2022-12-22 19:08:48'),
(9, '安裝和調試工作', '<p>測試系統</p>', 'on', '630090109.webp', '2022-12-22 19:08:48'),
(10, '安裝和調試工作222', '<p>測試系統</p>', 'on', '884919766.webp', '2022-12-22 19:08:48'),
(11, '安裝和調試工作23', '<p>測試系統</p>', 'on', '900131641.webp', '2022-12-22 19:08:48'),
(12, '工程、製造、安裝和調試工作1', '測試系統', 'on', '210663315.webp', '2022-12-22 15:11:22');

-- --------------------------------------------------------

--
-- Table structure for table `service_en`
--

CREATE TABLE `service_en` (
  `service_id` int(10) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `status` varchar(10) NOT NULL,
  `cover_img` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `service_en`
--

INSERT INTO `service_en` (`service_id`, `service_name`, `content`, `status`, `cover_img`, `created_at`) VALUES
(7, 'Engineering, Fabrication ,Installation and Commissioning Work', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat erat placerat mi lacinia viverra. Morbi blandit ex sed leo eleifend lobortis. Quisque interdum ornare felis nec ullamcorper. Phasellus id sollicitudin ipsum, laoreet euismod massa. Duis fringilla a mi vel feugiat. Nulla et pharetra augue. Nam sit amet nunc tincidunt, consequat magna eu, luctus felis. Integer semper felis felis, ut consectetur magna dapibus sed. Praesent posuere massa quis fringilla cursus. Integer a neque sit amet risus suscipit fermentum quis lacinia mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in diam purus. Maecenas diam augue, blandit vitae nisl eget, congue dignissim magna. Quisque leo urna, tincidunt vitae malesuada sed, imperdiet ut ligula. Mauris congue, orci ut gravida dignissim, lacus tortor molestie turpis, nec finibus est velit nec sapien.</p>', 'on', '2120932958.webp', '2022-12-22 15:11:22'),
(8, 'Material and Equipment Work', '<p>test</p>', 'on', '362184139.webp', '2022-12-22 19:08:48'),
(9, 'Maintenance and Service Work2', '<p>test system</p>', 'on', '1974762939.webp', '2022-12-22 19:08:48'),
(10, 'Maintenance and Service Work1', '<p>test system</p>', 'on', '1974762939.webp', '2022-12-22 19:08:48'),
(11, 'Engineering, Fabrication ,Installation and Commissioning Work', '<p>Phasellus at lacus quam. Aenean in tellus at libero consequat cursus ut at libero. Morbi mollis ultricies tincidunt. Aliquam erat volutpat. Phasellus euismod mauris et orci gravida, at condimentum massa congue. Etiam cursus volutpat arcu nec maximus. Vestibulum consectetur semper massa, tempor volutpat est fermentum vitae. Cras finibus nec augue ut eleifend. Proin posuere massa sit amet sapien venenatis, at congue dui gravida. Fusce diam ex, placerat sed eros et, lacinia venenatis felis.</p>', 'on', '605348670.webp', '2023-01-18 15:02:18'),
(12, 'Maintenance and Service Work9', '<p>Phasellus at lacus quam. Aenean in tellus at libero consequat cursus ut at libero. Morbi mollis ultricies tincidunt. Aliquam erat volutpat. Phasellus euismod mauris et orci gravida, at condimentum massa congue. Etiam cursus volutpat arcu nec maximus. Vestibulum consectetur semper massa, tempor volutpat est fermentum vitae. Cras finibus nec augue ut eleifend. Proin posuere massa sit amet sapien venenatis, at congue dui gravida. Fusce diam ex, placerat sed eros et, lacinia venenatis felis.</p>', 'on', '73527246.webp', '2023-01-18 15:03:03');

-- --------------------------------------------------------

--
-- Table structure for table `service_img`
--

CREATE TABLE `service_img` (
  `id` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `service_id` int(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `service_img`
--

INSERT INTO `service_img` (`id`, `image`, `service_id`, `created_at`) VALUES
(1, '254478781.webp', 1, '2023-01-12 09:31:06'),
(20, '1289269438.webp', 7, '2022-12-22 15:11:22'),
(24, '1133899507.webp', 8, '2022-12-22 19:08:48'),
(25, '352140716.webp', 7, '2022-12-22 19:30:11'),
(30, '499459718.webp', 9, '2023-01-12 09:30:12'),
(31, '254478781.webp', 9, '2023-01-12 09:31:06'),
(35, '254478781.webp', 2, '2023-01-12 09:31:06'),
(36, '254478781.webp', 3, '2023-01-12 09:31:06'),
(37, '499459718.webp', 4, '2023-01-12 09:30:12'),
(38, '1890935912.webp', 11, '2023-01-18 15:02:18'),
(39, '796230587.webp', 11, '2023-01-18 15:02:18'),
(40, '1028904155.webp', 11, '2023-01-18 15:02:18'),
(41, '665223305.webp', 12, '2023-01-18 15:03:03'),
(42, '734234070.webp', 12, '2023-01-18 15:03:03'),
(43, '979957621.webp', 12, '2023-01-18 15:03:03');

-- --------------------------------------------------------

--
-- Table structure for table `service_th`
--

CREATE TABLE `service_th` (
  `service_id` int(10) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `status` varchar(10) NOT NULL,
  `cover_img` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `service_th`
--

INSERT INTO `service_th` (`service_id`, `service_name`, `content`, `status`, `cover_img`, `created_at`) VALUES
(7, 'งานวิศวกรรม งานประกอบ งานติดตั้ง และงานเดินระบบ', 'ทดสอบ1', 'on', '231773355.webp', '2022-12-22 15:11:22'),
(8, 'งานวัสดุและอุปกรณ์', 'ทดสอบ2', 'on', '1521491195.webp', '2022-12-22 19:08:48'),
(9, 'งานซ่อมบำรุงและบริการ', 'ทดสอบ3', 'on', '496866709.webp', '2022-12-22 19:08:48'),
(10, 'งานซ่อมบำรุงและบริการ1', '<p>ทดสอบ</p>', 'on', '110896146.webp', '2023-01-16 16:23:22'),
(11, 'งานซ่อมบำรุงและบริการ1', '<p>ทดสอบ</p>', 'on', '110896146.webp', '2023-01-16 16:23:22'),
(12, 'งานวิศวกรรม งานประกอบ งานติดตั้ง และงานเดินระบบ', 'ทดสอบ1', 'on', '231773355.webp', '2022-12-22 15:11:22');

-- --------------------------------------------------------

--
-- Table structure for table `slide_img`
--

CREATE TABLE `slide_img` (
  `id` int(10) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `slide_img`
--

INSERT INTO `slide_img` (`id`, `img`) VALUES
(1, '2122320261.webp'),
(2, '370946639.webp'),
(3, 'banner3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slide_text`
--

CREATE TABLE `slide_text` (
  `id` int(10) NOT NULL,
  `slide_text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `slide_text`
--

INSERT INTO `slide_text` (`id`, `slide_text`) VALUES
(1, '<h1><span style=\"font-size: 36pt; color: rgb(255, 255, 255);\"><strong>DOJ Industrial Co., Ltd.</strong></span></h1>\r\n<p style=\"line-height: 1;\"><span style=\"color: rgb(255, 255, 255); font-family: arial, helvetica, sans-serif;\">ก่อตั้งขึ้นอย่างเป็นทางการโดยมุ่งเน้นเพิ่มเติมในด้านอุตสาหกรรม</span></p>\r\n<p style=\"line-height: 1;\"><span style=\"color: rgb(255, 255, 255); font-family: arial, helvetica, sans-serif;\">ธุรกิจโรงไฟฟ้าและพลังงานทดแทน</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `slide_text_cn`
--

CREATE TABLE `slide_text_cn` (
  `id` int(10) NOT NULL,
  `slide_text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `slide_text_cn`
--

INSERT INTO `slide_text_cn` (`id`, `slide_text`) VALUES
(1, '<h1><span style=\"font-size: 36pt; color: rgb(255, 255, 255);\"><strong>DOJ Industrial Co., Ltd.</strong></span></h1>\r\n<p class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" style=\"line-height: 1;\" data-placeholder=\"คำแปล\"><span class=\"Y2IQFc\" lang=\"zh-TW\" style=\"color: rgb(255, 255, 255); font-size: 18pt; font-family: arial, helvetica, sans-serif;\">正式成立，</span></p>\r\n<p class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" style=\"line-height: 1;\" data-placeholder=\"คำแปล\"><span class=\"Y2IQFc\" lang=\"zh-TW\" style=\"color: rgb(255, 255, 255); font-size: 18pt; font-family: arial, helvetica, sans-serif;\">進一步專注糖業 電廠及可再生能源業務</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `slide_text_en`
--

CREATE TABLE `slide_text_en` (
  `id` int(10) NOT NULL,
  `slide_text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `slide_text_en`
--

INSERT INTO `slide_text_en` (`id`, `slide_text`) VALUES
(1, '<h1><span style=\"font-size: 36pt; color: rgb(255, 255, 255);\"><strong>DOJ Industrial Co., Ltd. </strong></span></h1>\r\n<p style=\"line-height: 1;\"><span style=\"font-size: 18pt; color: rgb(255, 255, 255);\">Was established formally with additional focusing on as sugar industrial </span></p>\r\n<p style=\"line-height: 1;\"><span style=\"font-size: 18pt; color: rgb(255, 255, 255);\">power plant and renewable energy business.</span></p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us_cn`
--
ALTER TABLE `about_us_cn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us_en`
--
ALTER TABLE `about_us_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`pt_id`);

--
-- Indexes for table `category_product_cn`
--
ALTER TABLE `category_product_cn`
  ADD PRIMARY KEY (`pt_id`);

--
-- Indexes for table `category_product_en`
--
ALTER TABLE `category_product_en`
  ADD PRIMARY KEY (`pt_id`);

--
-- Indexes for table `category_ref`
--
ALTER TABLE `category_ref`
  ADD PRIMARY KEY (`ref_id`);

--
-- Indexes for table `category_ref_cn`
--
ALTER TABLE `category_ref_cn`
  ADD PRIMARY KEY (`ref_id`);

--
-- Indexes for table `category_ref_en`
--
ALTER TABLE `category_ref_en`
  ADD PRIMARY KEY (`ref_id`);

--
-- Indexes for table `category_sub`
--
ALTER TABLE `category_sub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_sub_cn`
--
ALTER TABLE `category_sub_cn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_sub_en`
--
ALTER TABLE `category_sub_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_cn`
--
ALTER TABLE `contact_cn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_en`
--
ALTER TABLE `contact_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content_cn`
--
ALTER TABLE `content_cn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content_en`
--
ALTER TABLE `content_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content_img`
--
ALTER TABLE `content_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `news_cn`
--
ALTER TABLE `news_cn`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `news_en`
--
ALTER TABLE `news_en`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `news_img`
--
ALTER TABLE `news_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_cn`
--
ALTER TABLE `product_cn`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_en`
--
ALTER TABLE `product_en`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_img`
--
ALTER TABLE `product_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `project_cn`
--
ALTER TABLE `project_cn`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `project_en`
--
ALTER TABLE `project_en`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `project_img`
--
ALTER TABLE `project_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_cn`
--
ALTER TABLE `service_cn`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `service_en`
--
ALTER TABLE `service_en`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `service_img`
--
ALTER TABLE `service_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_th`
--
ALTER TABLE `service_th`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `slide_img`
--
ALTER TABLE `slide_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_text`
--
ALTER TABLE `slide_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_text_cn`
--
ALTER TABLE `slide_text_cn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_text_en`
--
ALTER TABLE `slide_text_en`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_us_cn`
--
ALTER TABLE `about_us_cn`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_us_en`
--
ALTER TABLE `about_us_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `pt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category_product_cn`
--
ALTER TABLE `category_product_cn`
  MODIFY `pt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category_product_en`
--
ALTER TABLE `category_product_en`
  MODIFY `pt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category_ref`
--
ALTER TABLE `category_ref`
  MODIFY `ref_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category_ref_cn`
--
ALTER TABLE `category_ref_cn`
  MODIFY `ref_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category_ref_en`
--
ALTER TABLE `category_ref_en`
  MODIFY `ref_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category_sub`
--
ALTER TABLE `category_sub`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category_sub_cn`
--
ALTER TABLE `category_sub_cn`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category_sub_en`
--
ALTER TABLE `category_sub_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_cn`
--
ALTER TABLE `contact_cn`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_en`
--
ALTER TABLE `contact_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `content_cn`
--
ALTER TABLE `content_cn`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `content_en`
--
ALTER TABLE `content_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `content_img`
--
ALTER TABLE `content_img`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `news_cn`
--
ALTER TABLE `news_cn`
  MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `news_en`
--
ALTER TABLE `news_en`
  MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `news_img`
--
ALTER TABLE `news_img`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `product_cn`
--
ALTER TABLE `product_cn`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `product_en`
--
ALTER TABLE `product_en`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `product_img`
--
ALTER TABLE `product_img`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `project_cn`
--
ALTER TABLE `project_cn`
  MODIFY `project_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `project_en`
--
ALTER TABLE `project_en`
  MODIFY `project_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `project_img`
--
ALTER TABLE `project_img`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `service_cn`
--
ALTER TABLE `service_cn`
  MODIFY `service_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `service_en`
--
ALTER TABLE `service_en`
  MODIFY `service_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `service_img`
--
ALTER TABLE `service_img`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `service_th`
--
ALTER TABLE `service_th`
  MODIFY `service_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `slide_img`
--
ALTER TABLE `slide_img`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slide_text`
--
ALTER TABLE `slide_text`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slide_text_cn`
--
ALTER TABLE `slide_text_cn`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slide_text_en`
--
ALTER TABLE `slide_text_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
