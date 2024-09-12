-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 04:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cuyapo_municipals`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_db`
--

CREATE TABLE `admin_db` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_db`
--

INSERT INTO `admin_db` (`id`, `username`, `password`, `name`, `email`) VALUES
(11, 'admin', 'newadmin', 'Administrator', 'abadleomar875@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `captain_db`
--

CREATE TABLE `captain_db` (
  `captain_id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `captain_db`
--

INSERT INTO `captain_db` (`captain_id`, `photo`, `fullname`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 'uploads/Leomar .jpg', 'Jane Doe', 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Captain', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09020202022', 'abadleomar875@gmail.com', 'Jane Doe', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `image_data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image_data`) VALUES
(0, ''),
(1, ''),
(0, '');

-- --------------------------------------------------------

--
-- Table structure for table `kgwd1-db`
--

CREATE TABLE `kgwd1-db` (
  `id` int(11) NOT NULL,
  `photo` longblob NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_numbers` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kgwd1-db`
--

INSERT INTO `kgwd1-db` (`id`, `photo`, `fullname`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_numbers`, `email`, `ec_name`, `ec_number`) VALUES
(0, 0x75706c6f6164732f4c656f6d6172202e6a7067, 'Marx Dom', 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Kagawad 1', 'Cacapasan ,Cuyapo ,Nueva Ecija', '0923578686', 'marx875@gmail.com', 'Merry Dom', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `kgwd2-db`
--

CREATE TABLE `kgwd2-db` (
  `id` int(11) NOT NULL,
  `photo` longblob NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kgwd2-db`
--

INSERT INTO `kgwd2-db` (`id`, `photo`, `fullname`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 0x75706c6f6164732f4c656f6d6172202e6a7067, 'Jackie Domingo', 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Kagawad 2', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09020202022', 'jackie123@gmail.com', 'Jacks Domingo', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `kgwd3-db`
--

CREATE TABLE `kgwd3-db` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kgwd3-db`
--

INSERT INTO `kgwd3-db` (`id`, `photo`, `fullname`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 'uploads/Leomar .jpg', 'Dherwin Ladon', 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Kagawad 3', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09020202022', 'dherwin@gmail.com', 'Darlyn Ladon', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `kgwd4-db`
--

CREATE TABLE `kgwd4-db` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kgwd4-db`
--

INSERT INTO `kgwd4-db` (`id`, `photo`, `fullname`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 'uploads/1by1 blue attire for men.jpg', 'Leomar Abad', 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Kagawad 4', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09169232347', 'abad.leomar@gmail.com', 'Rosalie Abad', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `kgwd5-db`
--

CREATE TABLE `kgwd5-db` (
  `id` int(11) NOT NULL,
  `photo` longblob NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kgwd5-db`
--

INSERT INTO `kgwd5-db` (`id`, `photo`, `fullname`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 0x75706c6f6164732f3162793120626c75652061747469726520666f72206d656e2e6a7067, 'Chris John Matias', 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Kagawad 5', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09020202022', 'chm568@gmail.com', 'Christine Matias', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `kgwd6-db`
--

CREATE TABLE `kgwd6-db` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kgwd6-db`
--

INSERT INTO `kgwd6-db` (`id`, `photo`, `fullname`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 'uploads/1by1 blue attire for men.jpg', 'Orlan James', 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Kagawad 6', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09169232343', 'orlan123@gmail.com', 'Angeline Sta Ana', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `kgwd7`
--

CREATE TABLE `kgwd7` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kgwd7`
--

INSERT INTO `kgwd7` (`id`, `photo`, `fullname`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 'uploads/1by1 blue attire for men.jpg', 'Cezar Sadio', 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Kagawad 7', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09020202022', 'cell@gmail.com', 'Cezy Sadio', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` char(64) NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `secretary-db`
--

CREATE TABLE `secretary-db` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `secretary-db`
--

INSERT INTO `secretary-db` (`id`, `photo`, `fullname`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 'uploads/1by1 blue attire for men.jpg', 'Santos Garcia', 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Secretary', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09020202022', 'santos@gmail.com', 'Samantha Garcia', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `sk-chairman`
--

CREATE TABLE `sk-chairman` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sk-chairman`
--

INSERT INTO `sk-chairman` (`id`, `fullname`, `photo`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 'Angelo Dacayo', 'uploads/1by1 blue attire for men.jpg', 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Sk Chairman', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09020202022', 'angelo32@gmail.com', 'Angela Dacayo', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `sk-kgwd-db`
--

CREATE TABLE `sk-kgwd-db` (
  `id` int(11) NOT NULL,
  `photo` longblob NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sk-kgwd-db`
--

INSERT INTO `sk-kgwd-db` (`id`, `photo`, `fullname`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 0x75706c6f6164732f3162793120626c75652061747469726520666f72206d656e2e6a7067, 'Lebron James', 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Sk Kagawad 1', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09020202022', 'lebronjame@gmail.com', 'Janna lebron', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `sk-kgwd2-db`
--

CREATE TABLE `sk-kgwd2-db` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sk-kgwd2-db`
--

INSERT INTO `sk-kgwd2-db` (`id`, `fullname`, `photo`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 'Diwata Pares', 'uploads/1by1 blue attire for men.jpg', 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Sk Kagawad 2', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09020202022', 'diwata@gmail.com', 'Overload pares', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `sk-kgwd3-db`
--

CREATE TABLE `sk-kgwd3-db` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sk-kgwd3-db`
--

INSERT INTO `sk-kgwd3-db` (`id`, `fullname`, `photo`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 'Otlum Snatcher', 'uploads/1by1 blue attire for men.jpg', 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Sk Kagawad 3', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09020202022', 'otlum@gmail.com', 'Otlum Snatch', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `sk-kgwd4-db`
--

CREATE TABLE `sk-kgwd4-db` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `photo` longblob NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sk-kgwd4-db`
--

INSERT INTO `sk-kgwd4-db` (`id`, `fullname`, `photo`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 'Stephen Curry', 0x75706c6f6164732f3162793120626c75652061747469726520666f72206d656e2e6a7067, 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Sk Kagawad 4', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09020202022', 'stephen325@gmail.com', 'Stephane Curry', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `sk-kgwd5-db`
--

CREATE TABLE `sk-kgwd5-db` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `photo` longblob NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sk-kgwd5-db`
--

INSERT INTO `sk-kgwd5-db` (`id`, `fullname`, `photo`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 'Kyrie Irving ', 0x75706c6f6164732f3162793120626c75652061747469726520666f72206d656e2e6a7067, 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Sk Kagawad 5', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09169232347', 'kyr@gmail.com', 'Kyra Irving ', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `sk-kgwd6-db`
--

CREATE TABLE `sk-kgwd6-db` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `photo` longblob NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sk-kgwd6-db`
--

INSERT INTO `sk-kgwd6-db` (`id`, `fullname`, `photo`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 'Katuro Vlog', 0x75706c6f6164732f3162793120626c75652061747469726520666f72206d656e2e6a7067, 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Sk Kagawad 6', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09020202022', 'katuro@gmail.com', 'Katara vlog', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `sk-kgwd7-db`
--

CREATE TABLE `sk-kgwd7-db` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `photo` longblob NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sk-kgwd7-db`
--

INSERT INTO `sk-kgwd7-db` (`id`, `fullname`, `photo`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 'Digong Duterte', 0x75706c6f6164732f3162793120626c75652061747469726520666f72206d656e2e6a7067, 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Sk Kagawad 7', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09020202022', 'digong@gmail.com', 'Digong Duts', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `treasurer-db`
--

CREATE TABLE `treasurer-db` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `treasurer-db`
--

INSERT INTO `treasurer-db` (`id`, `photo`, `fullname`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 'uploads/1by1 blue attire for men.jpg', 'Angel Galapo', 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Treasurer', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09020202022', 'angel123@gmail.com', 'Angelito Galapon', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `reference_number` varchar(255) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `proponent` varchar(50) NOT NULL,
  `seconded` varchar(200) NOT NULL,
  `committe` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `fname`, `name`, `reference_number`, `date_time`, `proponent`, `seconded`, `committe`) VALUES
(54, '20240511050600_fontss.pdf', 'fontss.pdf', '8767567', 'May 11, 2024', 'John Doe', 'Jane Doe', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `upload_cso`
--

CREATE TABLE `upload_cso` (
  `id` int(11) NOT NULL,
  `fname` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `reference_number` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_time` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `proponent` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `seconded` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `committe` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `view_count` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upload_cso`
--

INSERT INTO `upload_cso` (`id`, `fname`, `name`, `reference_number`, `date_time`, `proponent`, `seconded`, `committe`, `view_count`) VALUES
(2, '20240514162514_Doc1.docx', 'Doc1.docx', '', '', '', '', '', 11);

-- --------------------------------------------------------

--
-- Table structure for table `upload_lrc`
--

CREATE TABLE `upload_lrc` (
  `id` int(11) NOT NULL,
  `fname` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `reference_number` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_time` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `proponent` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `seconded` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `committe` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `view_count` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upload_lrc`
--

INSERT INTO `upload_lrc` (`id`, `fname`, `name`, `reference_number`, `date_time`, `proponent`, `seconded`, `committe`, `view_count`) VALUES
(2, '20240514173312_EVENT TIMELINE.docx', 'EVENT TIMELINE.docx', '', '', '', '', '', 6);

-- --------------------------------------------------------

--
-- Table structure for table `upload_ord`
--

CREATE TABLE `upload_ord` (
  `id` int(11) NOT NULL,
  `fname` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `reference_number` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `proponent` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `seconded` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `committe` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `view_count` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upload_ord`
--

INSERT INTO `upload_ord` (`id`, `fname`, `name`, `reference_number`, `date_time`, `proponent`, `seconded`, `committe`, `view_count`) VALUES
(3, '20240510111646_fontss.pdf', 'fontss_2.pdf', '43045943', 'May 11, 2024', 'John Doe', 'Jane Doe', 'N/A', 3),
(5, '20240512153521_Read_Me.docx', 'Read_Me.docx', '8328449', 'May 12, 2024', 'SBM Jaime L. Batac', 'SBM Virgilio C. Aquino', 'N/A', 4);

-- --------------------------------------------------------

--
-- Table structure for table `upload_res`
--

CREATE TABLE `upload_res` (
  `id` int(11) NOT NULL,
  `fname` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `reference_number` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `proponent` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `seconded` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `committe` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `view_count` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upload_res`
--

INSERT INTO `upload_res` (`id`, `fname`, `name`, `reference_number`, `date_time`, `proponent`, `seconded`, `committe`, `view_count`) VALUES
(10, '20240512144215_Read_Me.docx', 'Read_Me.docx', '8328449 Municipal Cuyapo', 'May 14, 2024', 'John Doe', 'Jane Doe', 'N/A', 3),
(12, '20240513041848_Geometric Company Profile Presentation.pdf', 'Geometric Company Profile Presentation.pdf', '7764545', 'May 14, 2024', 'John Doe', 'Jane Doe', 'N/A', 5);

-- --------------------------------------------------------

--
-- Table structure for table `upload_toda`
--

CREATE TABLE `upload_toda` (
  `id` int(11) NOT NULL,
  `fname` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `reference_number` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_time` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `proponent` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `seconded` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `committe` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `view_count` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upload_toda`
--

INSERT INTO `upload_toda` (`id`, `fname`, `name`, `reference_number`, `date_time`, `proponent`, `seconded`, `committe`, `view_count`) VALUES
(2, '20240514170826_EVENT PLAN.docx', 'EVENT PLAN.docx', '', '', '', '', '', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_db`
--
ALTER TABLE `admin_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `captain_db`
--
ALTER TABLE `captain_db`
  ADD PRIMARY KEY (`captain_id`);

--
-- Indexes for table `kgwd1-db`
--
ALTER TABLE `kgwd1-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kgwd2-db`
--
ALTER TABLE `kgwd2-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kgwd3-db`
--
ALTER TABLE `kgwd3-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kgwd4-db`
--
ALTER TABLE `kgwd4-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kgwd6-db`
--
ALTER TABLE `kgwd6-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kgwd7`
--
ALTER TABLE `kgwd7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secretary-db`
--
ALTER TABLE `secretary-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk-chairman`
--
ALTER TABLE `sk-chairman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk-kgwd-db`
--
ALTER TABLE `sk-kgwd-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk-kgwd2-db`
--
ALTER TABLE `sk-kgwd2-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk-kgwd3-db`
--
ALTER TABLE `sk-kgwd3-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk-kgwd4-db`
--
ALTER TABLE `sk-kgwd4-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk-kgwd5-db`
--
ALTER TABLE `sk-kgwd5-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk-kgwd6-db`
--
ALTER TABLE `sk-kgwd6-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk-kgwd7-db`
--
ALTER TABLE `sk-kgwd7-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treasurer-db`
--
ALTER TABLE `treasurer-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_cso`
--
ALTER TABLE `upload_cso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_lrc`
--
ALTER TABLE `upload_lrc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_ord`
--
ALTER TABLE `upload_ord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_res`
--
ALTER TABLE `upload_res`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_toda`
--
ALTER TABLE `upload_toda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `upload_cso`
--
ALTER TABLE `upload_cso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `upload_lrc`
--
ALTER TABLE `upload_lrc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `upload_ord`
--
ALTER TABLE `upload_ord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `upload_res`
--
ALTER TABLE `upload_res`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `upload_toda`
--
ALTER TABLE `upload_toda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
