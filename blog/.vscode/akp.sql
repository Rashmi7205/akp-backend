-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2024 at 01:57 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'USER',
  `reset_password_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `role`, `reset_password_token`) VALUES
(1, 'admin1', 'admin1@email.com', '$2y$10$ezNUzPn0y.NLiueCPqDK2e2VKsP3RG5XqG.vgh.SmTwREX6.QT9z6', 'MANAGER', NULL),
(11, 'admin3', 'tedam21567@bizatop.com', '$2y$10$HfwBRhlrpPX6PdreNz6DQezWznWw2X3aOvhABE8yt5TjgkbK2VW12', 'ADMIN', NULL),
(12, 'alex123', 'testuser1@email.com', '$2y$10$LkXvbbMj2XprcEr/Kb3bK./jUh2McxAOvDoRrb06zv40DBEGtDqw.', 'USER', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `blog_id` int(10) UNSIGNED NOT NULL,
  `blog_title` mediumtext NOT NULL,
  `blog_image` text NOT NULL,
  `blog_content` text NOT NULL,
  `admin_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `blog_desc` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`blog_id`, `blog_title`, `blog_image`, `blog_content`, `admin_id`, `date`, `blog_desc`) VALUES
(23, 'How the Design of a Wash Basin Can Add Luxury to Your Bathroom?', './uploads/April Blog 2.jpg', '<p style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(90, 90, 90);font-family:Lato, sans-serif, Arial, Helvetica;font-size:1.6rem;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:1.5;margin:20px 0px 0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-IN" dir="ltr" xml:lang="EN-IN">Well, times have changed. We have grown from hanging out with friends for some delightful conversation over dinner to admiring (and sometimes criticising) the interiors that shape our homes. Today, even the smallest details, like your </span><a style="background-color:transparent;border-width:0px;box-sizing:border-box;color:rgb(51, 122, 183);margin:0px;padding:0px;text-decoration:none;" href="https://www.cera-india.com/cera/minimalist-wash-basin-designs-modern-bathroom"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-IN" dir="ltr" xml:lang="EN-IN">wash basin design</span></a><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-IN" dir="ltr" xml:lang="EN-IN">, can make a big difference. Indeed, itâ€™s more than just a place to wash hands; it has become a style statement, reflecting your personality.</span></p><p style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(90, 90, 90);font-family:Lato, sans-serif, Arial, Helvetica;font-size:1.6rem;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:1.5;margin:20px 0px 0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-IN" dir="ltr" xml:lang="EN-IN">So, we''ve put together this simple guide to help you understand how a beautifully designed wash basin can add luxury to your bathroom and, of course, home.</span></p><h2 style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(51, 51, 51);font-family:Lato, sans-serif, Arial, Helvetica;font-size:30px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:500 !important;letter-spacing:normal;line-height:1.4;margin:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-GB" dir="ltr" xml:lang="EN-GB"><strong style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;">Factors Influencing Luxury in Wash Basin Design</strong></span></h2><p style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(90, 90, 90);font-family:Lato, sans-serif, Arial, Helvetica;font-size:1.6rem;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:1.5;margin:20px 0px 0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-IN" dir="ltr" xml:lang="EN-IN">Wash basin counter designs have transformed, merging practicality with modern aesthetics. With sleek, minimalist styles and high-end materials like tempered glass, these designs offer visual appeal and durability. The evolution signifies a balanced blend of historical influences and cutting-edge wash basin counter design innovation. Here, we explore key features and variations in these contemporary fixtures:</span></p><h3 style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(0, 0, 0);font-family:Lato, sans-serif, Arial, Helvetica;font-size:2.7rem;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:1.5;margin:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-GB" dir="ltr" xml:lang="EN-GB"><strong style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;">Material Section</strong></span></h3><p style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(90, 90, 90);font-family:Lato, sans-serif, Arial, Helvetica;font-size:1.6rem;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:1.5;margin:20px 0px 0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-IN" dir="ltr" xml:lang="EN-IN">Choose high-quality materials like ceramic, marble, or glass that not only look nice but also add a touch of elegance to your bathroom. The aim is to make your wash basin more than just practical â€“ make it a bit special.</span></p><p style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(90, 90, 90);font-family:Lato, sans-serif, Arial, Helvetica;font-size:1.6rem;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:1.5;margin:20px 0px 0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-IN" dir="ltr" xml:lang="EN-IN">You also need to consider the shape and size. You need a basin that suits the space to make your bathroom feel more upscale. CERAâ€™s </span><a style="background-color:transparent;border-width:0px;box-sizing:border-box;color:rgb(51, 122, 183);margin:0px;padding:0px;text-decoration:none;" href="https://www.cera-india.com/cera/sanitaryware/wash-basins/table-top-wash-basins"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-IN" dir="ltr" xml:lang="EN-IN"><strong style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;">tabletop wash basin </strong></span></a><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-IN" dir="ltr" xml:lang="EN-IN">displays a perfect blend of style and functionality. CERA''s Chatter tabletop wash basin design enhances your overall aesthetic without straining your budget. Crafted from durable ceramic material, this budget-friendly washbasin. With dimensions measuring 305 mm in length, 335 mm in width, and 135 mm in height, the </span><a style="background-color:transparent;border-width:0px;box-sizing:border-box;color:rgb(51, 122, 183);margin:0px;padding:0px;text-decoration:none;" href="https://www.cera-india.com/cera/sanitaryware-wash-basins-table-top-wall-hung-wash-basins/chatter"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-IN" dir="ltr" xml:lang="EN-IN">Chatter</span></a><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-IN" dir="ltr" xml:lang="EN-IN"> design offers durability, easy maintenance, and an affordable touch of elegance, ensuring an enhanced bathroom experience.&nbsp;</span></p><h3 style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(0, 0, 0);font-family:Lato, sans-serif, Arial, Helvetica;font-size:2.7rem;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:1.5;margin:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-GB" dir="ltr" xml:lang="EN-GB"><strong style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;">Innovative Features</strong></span></h3><p style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(90, 90, 90);font-family:Lato, sans-serif, Arial, Helvetica;font-size:1.6rem;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:1.5;margin:20px 0px 0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-IN" dir="ltr" xml:lang="EN-IN">When choosing a washbasin, it''s crucial to consider features that can enhance your washroom experience. Countertop designs, like our </span><a style="background-color:transparent;border-width:0px;box-sizing:border-box;color:rgb(51, 122, 183);margin:0px;padding:0px;text-decoration:none;" href="https://www.cera-india.com/cera/sanitaryware-wash-basins-counter-wash-basins/circle"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-IN" dir="ltr" xml:lang="EN-IN">Circle</span></a><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-IN" dir="ltr" xml:lang="EN-IN">, provide a budget-friendly option with features like a compact round bowl design, tailored for smaller spaces and hassle-free installation for added convenience.</span></p><p style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(90, 90, 90);font-family:Lato, sans-serif, Arial, Helvetica;font-size:1.6rem;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:1.5;margin:20px 0px 0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-IN" dir="ltr" xml:lang="EN-IN">If you want a premium look, you can check out the counter design of the </span><a style="background-color:transparent;border-width:0px;box-sizing:border-box;color:rgb(51, 122, 183);margin:0px;padding:0px;text-decoration:none;" href="https://www.cera-india.com/cera/sanitaryware-wash-basins-counter-wash-basins/coyota"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-IN" dir="ltr" xml:lang="EN-IN">Coyota wash basin</span></a><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-IN" dir="ltr" xml:lang="EN-IN">. This washbasin offers a spacious rectangular bowl, a built-in counter for extra storage, provisions for overflow, and a convenient tap hole.</span></p><h3 style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(0, 0, 0);font-family:Lato, sans-serif, Arial, Helvetica;font-size:2.7rem;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:1.5;margin:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-GB" dir="ltr" xml:lang="EN-GB"><strong style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;">Design Elements</strong></span></h3><p style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(90, 90, 90);font-family:Lato, sans-serif, Arial, Helvetica;font-size:1.6rem;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:1.5;margin:20px 0px 0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-IN" dir="ltr" xml:lang="EN-IN">You can add various design elements to add a touch of luxury to your bathroom design. Remember, home interiors are no more about fitting in, it is about you. So, style and customise it based on your style and personality. You can look for the </span><a style="background-color:transparent;border-width:0px;box-sizing:border-box;color:rgb(51, 122, 183);margin:0px;padding:0px;text-decoration:none;" href="https://www.cera-india.com/cera/choosing-best-bathroom-wash-basin-design"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-IN" dir="ltr" xml:lang="EN-IN">latest wash basin designs</span></a><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-IN" dir="ltr" xml:lang="EN-IN"> to make your bathroom look well put together.</span></p><p style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(90, 90, 90);font-family:Lato, sans-serif, Arial, Helvetica;font-size:1.6rem;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:1.5;margin:20px 0px 0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-IN" dir="ltr" xml:lang="EN-IN">The </span><a style="background-color:transparent;border-width:0px;box-sizing:border-box;color:rgb(51, 122, 183);margin:0px;padding:0px;text-decoration:none;" href="https://www.cera-india.com/cera/sanitaryware-wash-basins-wall-hung-wash-basins-without-pedestal/corner"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-IN" dir="ltr" xml:lang="EN-IN"><strong style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;">corner wash basin design</strong></span></a><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-IN" dir="ltr" xml:lang="EN-IN"> looks sleek and stands out, providing a modern, space-efficient solution. The corner design is a compact choice that fits seamlessly into corners. The oval bowl design adds a touch of elegance, while the provision for a tap hole ensures practicality and convenience.&nbsp;</span></p><p style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(90, 90, 90);font-family:Lato, sans-serif, Arial, Helvetica;font-size:1.6rem;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:1.5;margin:20px 0px 0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-IN" dir="ltr" xml:lang="EN-IN">If you want a modern vibe, think about wall-mounted wash basins â€“ they''re simple, save space, and are practical. These basins enhance the aesthetic of your washroom while providing a functional solution by freeing up floor space. Each style brings something special, making your wash basin stand out in your bathroom.</span></p><p>"&gt;</p><p>"&gt;</p>', 11, '2024-03-07 15:08:32', 'Ever had friends over, and everything''s going great until someone heads to the bathroom? Suddenly, they''re all whispering, not about your fantastic dinner but your wash basin. Awkward, right?'),
(24, 'Modern Kitchen Sink Design Ideas for Your Home', './uploads/bathroom2.jpg', '<p style="margin-left:0px;"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-GB" dir="ltr" xml:lang="EN-GB"><strong style="border-width:0px;box-sizing:border-box;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px;">Types of Sinks to Redefine Your Kitchen</strong></span></p><h4 style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(0, 0, 0);font-family:Lato, sans-serif, Arial, Helvetica;font-size:2.2rem;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:1.5;margin:50px 0px 0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-GB" dir="ltr" xml:lang="EN-GB"><strong style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;">Single Bowl Sink</strong></span></h4><p style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(90, 90, 90);font-family:Lato, sans-serif, Arial, Helvetica;font-size:1.6rem;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:1.5;margin:20px 0px 0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-GB" dir="ltr" xml:lang="EN-GB">A single bowl sink consists of one large basin without any dividers, offering simplicity and sufficient space for various kitchen tasks. With a single bowl sink, you have the flexibility to wash larger utensils with ease.</span></p><h3 style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(0, 0, 0);font-family:Lato, sans-serif, Arial, Helvetica;font-size:2.7rem;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:1.5;margin:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;">&nbsp;</h3><h3 style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(0, 0, 0);font-family:Lato, sans-serif, Arial, Helvetica;font-size:2.7rem;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:1.5;margin:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-GB" dir="ltr" xml:lang="EN-GB"><strong style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;">Double Bowl Sink</strong></span></h3><p style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(90, 90, 90);font-family:Lato, sans-serif, Arial, Helvetica;font-size:1.6rem;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:1.5;margin:20px 0px 0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-GB" dir="ltr" xml:lang="EN-GB">Another popular choice among Indian households is double bowl sinks. These sinks are created with attention-to-detail and offer versatility with two separate bowls. Having a double bowl sink lets you multitask, where you can use one bowl for washing dishes and the other for rinsing.</span></p><p style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(90, 90, 90);font-family:Lato, sans-serif, Arial, Helvetica;font-size:1.6rem;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:1.5;margin:20px 0px 0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-GB" dir="ltr" xml:lang="EN-GB">A double bowl sink lets you add a unique and sturdy modern touch to your Indian kitchen. CERA''s </span><a style="background-color:transparent;border-width:0px;box-sizing:border-box;color:rgb(51, 122, 183);margin:0px;padding:0px;text-decoration:none;" href="https://www.cera-india.com/cera/kitchen-sinks-304-grade-ss-sinks-satin-finish/nico"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-GB" dir="ltr" xml:lang="EN-GB">Nico</span></a><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-GB" dir="ltr" xml:lang="EN-GB"> is an optimal choice as it is designed with a unique satin finish and double bowl design that redefines your kitchen space. It provides sufficient space to wash, rinse, and dry dishes effectively. It also features a round choke stopper and a special water passage to ensure water flows freely.</span></p><h3 style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(0, 0, 0);font-family:Lato, sans-serif, Arial, Helvetica;font-size:2.7rem;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:1.5;margin:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;">&nbsp;</h3><h3 style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(0, 0, 0);font-family:Lato, sans-serif, Arial, Helvetica;font-size:2.7rem;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:1.5;margin:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-GB" dir="ltr" xml:lang="EN-GB"><strong style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;">Undermount Sink</strong></span></h3><p style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(90, 90, 90);font-family:Lato, sans-serif, Arial, Helvetica;font-size:1.6rem;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:1.5;margin:20px 0px 0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-GB" dir="ltr" xml:lang="EN-GB">An undermount sink is installed under the countertop. These sinks are highly popular because they offer your kitchen a seamless and modern look. With an undermount sink, you''ll find cleanup is a breeze since there are no crevices for gathering dirt and grime. That''s why it''s a favourite among those who prefer contemporary kitchen designs like yours.</span></p><p style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(90, 90, 90);font-family:Lato, sans-serif, Arial, Helvetica;font-size:1.6rem;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:1.5;margin:20px 0px 0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-GB" dir="ltr" xml:lang="EN-GB">If you''re looking for an under-mount primary feature, CERA''s </span><a style="background-color:transparent;border-width:0px;box-sizing:border-box;color:rgb(51, 122, 183);margin:0px;padding:0px;text-decoration:none;" href="https://www.cera-india.com/cera/kitchen-sinks-handmade-sink/leah"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-GB" dir="ltr" xml:lang="EN-GB">Leah</span></a><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-GB" dir="ltr" xml:lang="EN-GB"> can be your ideal fit. It is created specifically for under-mount installation, giving your kitchen countertop a sleek and well-defined appearance. This sink also comes with a convenient drain board for easy air drying of dishes. Its smooth satin finish and curved design make cleaning simple and comfortable after each use. Also, Leah''s proper water drainage system helps maintain a bug and odour-free environment.</span></p><h2 style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(51, 51, 51);font-family:Lato, sans-serif, Arial, Helvetica;font-size:30px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:500 !important;letter-spacing:normal;line-height:1.4;margin:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;">&nbsp;</h2><h2 style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(51, 51, 51);font-family:Lato, sans-serif, Arial, Helvetica;font-size:30px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:500 !important;letter-spacing:normal;line-height:1.4;margin:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-GB" dir="ltr" xml:lang="EN-GB"><strong style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;">Conclusion</strong></span></h2><p style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(90, 90, 90);font-family:Lato, sans-serif, Arial, Helvetica;font-size:1.6rem;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:1.5;margin:20px 0px 0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-GB" dir="ltr" xml:lang="EN-GB">When revamping your kitchen, choosing the right sink is crucial for a fresh look. Your sink, whether classic or modern, should complement your kitchen''s style. Don''t underestimate its impactâ€”opt for quality with </span><a style="background-color:transparent;border-width:0px;box-sizing:border-box;color:rgb(51, 122, 183);margin:0px;padding:0px;text-decoration:none;" href="https://www.cera-india.com/cera/kitchen-sinks"><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-GB" dir="ltr" xml:lang="EN-GB">CERA''s range of durable and stylish kitchen sinks</span></a><span style="border-width:0px;box-sizing:border-box;margin:0px;padding:0px;" lang="EN-GB" dir="ltr" xml:lang="EN-GB">.</span></p><p style="margin-left:0px;">"&gt;</p>', 11, '2024-03-07 15:31:17', 'Choosing the right kitchen sink design is a big part of redoing your kitchen. Whether you like the classic design or something more modern like a low divider sink, it is important to pick the right one that fits your kitchen and style.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquire`
--

CREATE TABLE `tbl_enquire` (
  `enquire_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `size` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(50) NOT NULL DEFAULT 'PENDING',
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_enquire`
--

INSERT INTO `tbl_enquire` (`enquire_id`, `user_id`, `product_id`, `quantity`, `size`, `date`, `status`, `message`) VALUES
(1, 3, 1, 2, '100x100', '2024-03-02 14:56:13', 'Pending', 'message'),
(2, 4, 1, 2, '100x100', '2024-03-02 17:37:22', 'Pending', 'message');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pr_id` int(11) NOT NULL,
  `pr_name` varchar(300) NOT NULL,
  `pr_desc` text NOT NULL,
  `pr_img` text NOT NULL,
  `pr_sizes` mediumtext NOT NULL,
  `pr_company` varchar(255) NOT NULL,
  `pr_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`pr_id`, `pr_name`, `pr_desc`, `pr_img`, `pr_sizes`, `pr_company`, `pr_category`) VALUES
(1, 'product1', 'any desc', 'image_link', '100x100,200x200', 'Company1', 'cat1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_contact` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_created`, `user_contact`) VALUES
(4, 'user2', '2024-03-02 17:37:22', 'user1@email.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `tbl_enquire`
--
ALTER TABLE `tbl_enquire`
  ADD PRIMARY KEY (`enquire_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `blog_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_enquire`
--
ALTER TABLE `tbl_enquire`
  MODIFY `enquire_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
