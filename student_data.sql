-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2019 at 10:12 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `adminEmail` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `adminPass` varchar(255) DEFAULT NULL,
  `auth` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `randnum` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `adminEmail`, `mobile`, `adminPass`, `auth`, `picture`, `role`, `randnum`) VALUES
(1, 'asma@gmail.com', NULL, 'd93a5def7511da3d0f2d171d9c344e91', '929292cd9ad807eb2adb2fa578e41eed', 'asma@gmail.comad.gif', 'Authority', NULL),
(3, 'towheed@gmail.com', '01731974045', 'd93a5def7511da3d0f2d171d9c344e91', 'cac606de4fd2564e92b152c7f50a761d', 'towheed@gmail.comad.jpg', 'Admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_info`
--

CREATE TABLE `tbl_admin_info` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `nname` varchar(255) DEFAULT NULL,
  `birthdate` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `mstatus` varchar(255) DEFAULT NULL,
  `blood` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `EmployeeID` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin_info`
--

INSERT INTO `tbl_admin_info` (`id`, `fname`, `lname`, `nname`, `birthdate`, `gender`, `mstatus`, `blood`, `nationality`, `religion`, `EmployeeID`, `mobile`, `email`) VALUES
(1, 'Asma Binte', 'Farazi', 'Asma', '04-01-1995', 'Female', 'Single', 'B+', 'Bangladeshi', 'Islam', '123456789', '01946853237', 'asma@gmail.com'),
(3, 'Md. Towheedul', 'Islam', 'Towheed', '04-01-1995', 'Male', 'Single', 'A+', 'Bangladeshi', 'Islam', '171-15-9275', '01731974045', 'towheed@gmail.com ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_education_info`
--

CREATE TABLE `tbl_education_info` (
  `id` int(11) NOT NULL,
  `Degree` varchar(255) DEFAULT NULL,
  `Institute` varchar(255) DEFAULT NULL,
  `UniversityBoard` varchar(255) DEFAULT NULL,
  `PassingYear` varchar(255) DEFAULT NULL,
  `GradeDevision` varchar(255) DEFAULT NULL,
  `CGPA` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guardian_info`
--

CREATE TABLE `tbl_guardian_info` (
  `id` int(11) NOT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `FatherMobile` varchar(255) DEFAULT NULL,
  `FatherOccupation` varchar(255) DEFAULT NULL,
  `FatherDesignation` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `MotherMobile` varchar(255) DEFAULT NULL,
  `MotherOccupation` varchar(255) DEFAULT NULL,
  `MotherDesignation` varchar(255) DEFAULT NULL,
  `LocalGuardianName` varchar(255) DEFAULT NULL,
  `LocalGuardianContact` varchar(255) DEFAULT NULL,
  `RelationwithLocalGuardian` varchar(255) DEFAULT NULL,
  `LocalGuardianAddress` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guardian_info`
--

INSERT INTO `tbl_guardian_info` (`id`, `father_name`, `FatherMobile`, `FatherOccupation`, `FatherDesignation`, `mother_name`, `MotherMobile`, `MotherOccupation`, `MotherDesignation`, `LocalGuardianName`, `LocalGuardianContact`, `RelationwithLocalGuardian`, `LocalGuardianAddress`, `email`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nasrullah@gmail.com'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tania@gmail.com'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'zahid@gmail.com'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'biprojit@gmail.com'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'towheed@gmail.com'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rezwan@gmail.com'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'riyad@gmail.com'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'anu@gmail.com'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rafiya@gmail.com'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'saad@gmail.com'),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asma@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permanent_info`
--

CREATE TABLE `tbl_permanent_info` (
  `id` int(11) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `PostOffice` varchar(255) DEFAULT NULL,
  `PoliceStation` varchar(255) DEFAULT NULL,
  `DistrictCity` varchar(255) DEFAULT NULL,
  `DivisionState` varchar(255) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `ZipCode` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_permanent_info`
--

INSERT INTO `tbl_permanent_info` (`id`, `Address`, `PostOffice`, `PoliceStation`, `DistrictCity`, `DivisionState`, `Country`, `ZipCode`, `email`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nasrullah@gmail.com'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tania@gmail.com'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'zahid@gmail.com'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'biprojit@gmail.com'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'towheed@gmail.com'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rezwan@gmail.com'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'riyad@gmail.com'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'anu@gmail.com'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rafiya@gmail.com'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'saad@gmail.com'),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asma@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_present_info`
--

CREATE TABLE `tbl_present_info` (
  `id` int(11) NOT NULL,
  `PAddress` varchar(255) DEFAULT NULL,
  `PPostOffice` varchar(255) DEFAULT NULL,
  `PPoliceStation` varchar(255) DEFAULT NULL,
  `PDistrictCity` varchar(255) DEFAULT NULL,
  `PDivisionState` varchar(255) DEFAULT NULL,
  `PCountry` varchar(255) DEFAULT NULL,
  `PZipCode` varchar(255) DEFAULT NULL,
  `PHostelAddress` varchar(255) DEFAULT NULL,
  `PMessAddress` varchar(255) DEFAULT NULL,
  `POtherAddress` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_present_info`
--

INSERT INTO `tbl_present_info` (`id`, `PAddress`, `PPostOffice`, `PPoliceStation`, `PDistrictCity`, `PDivisionState`, `PCountry`, `PZipCode`, `PHostelAddress`, `PMessAddress`, `POtherAddress`, `email`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nasrullah@gmail.com'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tania@gmail.com'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'zahid@gmail.com'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'biprojit@gmail.com'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'towheed@gmail.com'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rezwan@gmail.com'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'riyad@gmail.com'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'anu@gmail.com'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rafiya@gmail.com'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'saad@gmail.com'),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asma@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_signup_info`
--

CREATE TABLE `tbl_signup_info` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `nname` varchar(255) DEFAULT NULL,
  `birthdate` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `mstatus` varchar(255) DEFAULT NULL,
  `blood` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `StudentID` varchar(255) DEFAULT NULL,
  `Department` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_signup_info`
--

INSERT INTO `tbl_signup_info` (`id`, `fname`, `lname`, `nname`, `birthdate`, `gender`, `mstatus`, `blood`, `nationality`, `religion`, `StudentID`, `Department`, `mobile`, `email`) VALUES
(1, 'Nasrullah', 'Al Jadid', 'Jadid', '01-01-1999', 'Male', 'Single', 'B+', 'Bangladeshi', 'Islam', '171-15-9273', 'CSE', '+8801799417831', 'nasrullah@gmail.com '),
(2, 'Tania Akter', 'LIma', 'LIma', '01-01-1999', 'Female', 'Single', 'A+', 'Bangladeshi', 'Islam', '171-15-9266', 'CSE', '+8801799417844', 'tania@gmail.com '),
(3, 'Md Zahid', 'Hasan', 'Zahid', '04-01-1995', 'Male', 'Single', 'A+', 'Bangladeshi', 'Islam', '12456325', 'EEE', '+8801799417952', 'zahid@gmail.com '),
(4, 'Biprojit', 'Biswas', 'Biprojit', '04-01-1995', 'Male', 'Married', 'B+', 'Bangladeshi', 'Hindu', '12454152', 'BBA', '+8801799417458', 'biprojit@gmail.com '),
(5, 'Md. Towheedul', 'Islam', 'Towheed', '04-01-1995', 'Male', 'Single', 'A+', 'Bangladeshi', 'Islam', '171-15--9275', 'CSE', '01946853237', 'towheed@gmail.com '),
(6, 'Md. Rezwan', 'Kabir', 'Rezwan', '04-01-1995', 'Male', 'Single', 'B+', 'Bangladeshi', 'Islam', '12456325', 'MCT', '+8801799417831', 'rezwan@gmail.com '),
(7, 'Md.Mehdi', 'Hasan', 'Riyad', '01-01-1999', 'Male', 'Single', 'B+', 'Bangladeshi', 'Islam', '12456345', 'Civil', '+8801799417855', 'riyad@gmail.com '),
(8, 'Ferdows', 'Ohid', 'Anu', '04-01-1995', 'Male', 'Single', 'A+', 'Bangladeshi', 'Islam', '124541524', 'English', '+8801799417854', 'anu@gmail.com '),
(9, 'Ummay', 'Rafiya', 'Rafiya', '01-01-1999', 'Female', 'Single', 'B+', 'Bangladeshi', 'Islam', '12456327', 'LLB', '+8801799417847', 'rafiya@gmail.com '),
(10, 'Saad Bin', 'Hasan', 'Saad', '04-01-1995', 'Male', 'Single', 'A+', 'Bangladeshi', 'Islam', '12454155', 'ETE', '+8801799417459', 'saad@gmail.com '),
(11, 'Asma Binte', 'Farazi', 'Asma', '04-01-1995', 'Female', 'Single', 'B+', 'Bangladeshi', 'Islam', '201645227', 'CSE', '01946853237', 'asma@gmail.com ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `userPass` varchar(255) DEFAULT NULL,
  `auth` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `randnum` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `userEmail`, `mobile`, `userPass`, `auth`, `picture`, `randnum`) VALUES
(1, 'nasrullah@gmail.com', '+8801799417831', 'd93a5def7511da3d0f2d171d9c344e91', '3ea3733100bd7ee18ec8d08d0cad740c', 'download.png', NULL),
(2, 'tania@gmail.com', '+8801799417844', 'd93a5def7511da3d0f2d171d9c344e91', 'f3554db08f6c9d5672592be5cdb0344b', 'download.png', NULL),
(3, 'zahid@gmail.com', '+8801799417952', 'd93a5def7511da3d0f2d171d9c344e91', 'b4a4017e7fd736ad4007d9b3c62f6f2a', 'download.png', NULL),
(4, 'biprojit@gmail.com', '+8801799417458', 'd93a5def7511da3d0f2d171d9c344e91', '7bb85245cd861daa4d391f807e722b96', 'download.png', NULL),
(5, 'towheed@gmail.com', '01946853237', 'd93a5def7511da3d0f2d171d9c344e91', 'cac606de4fd2564e92b152c7f50a761d', 'download.png', NULL),
(6, 'rezwan@gmail.com', '+8801799417831', 'd93a5def7511da3d0f2d171d9c344e91', 'd00daa4c497b525f4139a3a73780d8e3', 'download.png', NULL),
(7, 'riyad@gmail.com', '+8801799417855', 'd93a5def7511da3d0f2d171d9c344e91', '92920a96d28e145f7b25fab9f04a4664', 'download.png', NULL),
(8, 'anu@gmail.com', '+8801799417854', 'd93a5def7511da3d0f2d171d9c344e91', '861f07446180353df1cc7c0c07d049e9', 'download.png', NULL),
(9, 'rafiya@gmail.com', '+8801799417847', 'd93a5def7511da3d0f2d171d9c344e91', '88def1ff504c10aeedf71b681d61ab19', 'download.png', NULL),
(10, 'saad@gmail.com', '+8801799417459', 'd93a5def7511da3d0f2d171d9c344e91', '339c22750c852d93d75852fd8b2d000f', 'download.png', NULL),
(11, 'asma@gmail.com', '01946853237', 'd93a5def7511da3d0f2d171d9c344e91', '929292cd9ad807eb2adb2fa578e41eed', 'download.png', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`,`adminEmail`);

--
-- Indexes for table `tbl_admin_info`
--
ALTER TABLE `tbl_admin_info`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Indexes for table `tbl_education_info`
--
ALTER TABLE `tbl_education_info`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Indexes for table `tbl_guardian_info`
--
ALTER TABLE `tbl_guardian_info`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Indexes for table `tbl_permanent_info`
--
ALTER TABLE `tbl_permanent_info`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Indexes for table `tbl_present_info`
--
ALTER TABLE `tbl_present_info`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Indexes for table `tbl_signup_info`
--
ALTER TABLE `tbl_signup_info`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`,`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_admin_info`
--
ALTER TABLE `tbl_admin_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_education_info`
--
ALTER TABLE `tbl_education_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_guardian_info`
--
ALTER TABLE `tbl_guardian_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_permanent_info`
--
ALTER TABLE `tbl_permanent_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_present_info`
--
ALTER TABLE `tbl_present_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_signup_info`
--
ALTER TABLE `tbl_signup_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
