-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2021-09-23 17:38:52
-- 服务器版本： 8.0.12
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `groups_9`
--

-- --------------------------------------------------------

--
-- 表的结构 `massage`
--

CREATE TABLE `massage` (
  `id` int(11) NOT NULL,
  `author` varchar(20) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 转存表中的数据 `massage`
--

INSERT INTO `massage` (`id`, `author`, `content`) VALUES
(1, '123', 'aaaaaaaa'),
(2, '123', 'aaaaaaaaaaa'),
(3, '123', 'aaaaaaaaaaa'),
(4, '123', '11111111'),
(5, '', '00'),
(6, '邵潇遥', '哈哈哈哈哈'),
(7, '邵潇遥', '嘻嘻嘻嘻');

-- --------------------------------------------------------

--
-- 表的结构 `userplay`
--

CREATE TABLE `userplay` (
  `id` int(11) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `UserPsw` char(32) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `Salt` char(32) NOT NULL,
  `jur` enum('0','1') NOT NULL DEFAULT '0',
  `gettime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 转存表中的数据 `userplay`
--

INSERT INTO `userplay` (`id`, `UserName`, `UserPsw`, `Email`, `Salt`, `jur`, `gettime`) VALUES
(23, '邵潇遥', '94e01db4708171683b400a86acf05f08', '2195007463@qq.com', 'c1968dafaabbd5135827f97a5ac9bc9a', '1', '2020-06-27 07:41:07'),
(24, 'sxy', '1e542361c48b38222131ca8f6fb55d86', '111@111.com', '7ca2336126c31b223efa2cd1c81dd115', '0', '2021-09-23 08:48:31');

-- --------------------------------------------------------

--
-- 表的结构 `user_information`
--

CREATE TABLE `user_information` (
  `id` int(11) NOT NULL,
  `XH` varchar(8) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Sex` enum('男','女') NOT NULL DEFAULT '男',
  `Birthday` date NOT NULL,
  `Class` varchar(6) NOT NULL,
  `Major` varchar(20) NOT NULL,
  `Specialty` varchar(50) NOT NULL,
  `Brief` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 转存表中的数据 `user_information`
--

INSERT INTO `user_information` (`id`, `XH`, `Name`, `Sex`, `Birthday`, `Class`, `Major`, `Specialty`, `Brief`) VALUES
(1, 'J1801719', '李府刚', '男', '2000-07-02', 'J18017', '计算机应用技术', '学习', '一个敲代码秃头的男人'),
(2, 'J1801737', '邵潇遥', '男', '2000-01-26', 'J18017', '计算机网络技术', '学习、rap', '一个爱好学习的人');

--
-- 转储表的索引
--

--
-- 表的索引 `massage`
--
ALTER TABLE `massage`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `userplay`
--
ALTER TABLE `userplay`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- 表的索引 `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `massage`
--
ALTER TABLE `massage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用表AUTO_INCREMENT `userplay`
--
ALTER TABLE `userplay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- 使用表AUTO_INCREMENT `user_information`
--
ALTER TABLE `user_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
