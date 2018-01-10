-- phpMyAdmin SQL Dump
-- version 4.0.10.17
-- https://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018-01-11 00:43:49
-- 服务器版本: 5.5.52
-- PHP 版本: 5.6.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `scores`
--

-- --------------------------------------------------------

--
-- 表的结构 `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) DEFAULT NULL,
  `stu_num` varchar(10) DEFAULT '0',
  `grade` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `stu_num` (`stu_num`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=30 ;

--
-- 转存表中的数据 `score`
--

INSERT INTO `score` (`id`, `name`, `stu_num`, `grade`) VALUES
(1, '孙伟倩', '2016336102', 100),
(2, '杨婉清', '2016335103', 85),
(12, '霍官媛', '2016336104', 91),
(13, '吕梦华', '2016335105', 90),
(14, '刘杰', '2016335106', 95),
(15, '朱一胜', '2016335107', 70),
(16, '李昊博', '2016335108', 68),
(17, '王卓', '2016335109', 78),
(18, '陆琪', '2016335110', 60),
(19, '刘革', '2016335111', 90),
(20, '张三', '2016335112', 100),
(21, 'tert', '234', 234),
(22, '3sfg', '222', 222),
(27, 'sdf', '3345', 33);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
