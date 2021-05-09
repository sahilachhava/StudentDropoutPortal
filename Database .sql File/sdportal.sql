-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 03:58 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `aadhaar_details`
--

CREATE TABLE `aadhaar_details` (
  `aadher_number` bigint(15) NOT NULL,
  `name` char(100) DEFAULT NULL,
  `father_name` char(100) DEFAULT NULL,
  `cast` char(100) DEFAULT NULL,
  `day` int(2) DEFAULT NULL,
  `month` varchar(10) DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `street` varchar(70) DEFAULT NULL,
  `area` varchar(70) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `city` varchar(70) DEFAULT NULL,
  `state` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aadhaar_details`
--

INSERT INTO `aadhaar_details` (`aadher_number`, `name`, `father_name`, `cast`, `day`, `month`, `year`, `gender`, `street`, `area`, `pincode`, `city`, `state`) VALUES
(201525014601, 'Santhanam R.', 'SIVAKUMAR M S', 'Hindu', 11, '01', 2000, 'Male', '123 6th St.', 'Bopal', '380001', ' FL 32904', 'India'),
(201525014602, 'Vijay Kumar Renikuntla', 'VENGADESAN S', 'Hindu', 11, '01', 2001, 'Male', '71 Pilgrim Avenue ', 'Bopal', '380001', 'MD 20815', 'Gujarat'),
(201525014603, 'P.Mahalakshmi', 'RAMASUBBA REDDY M', 'Hindu', 12, '01', 2002, 'Female', '4 Goldfield Rd.', 'Usmanpura', '380001', 'HI 96815', 'Gujarat'),
(201525014604, 'Dhatreyi Boyina', 'ANURADHA BANERJEE', 'Christine 	', 12, '02', 2003, 'Female', '44 Shirley Ave', 'Usmanpura', '380012', 'IL 60185', 'Gujarat'),
(201525014605, 'Joshy P J', 'BABURAJ A P', 'Christine 	', 25, '3', 2004, 'Male', '123 6th St. ', 'Bopal', '380008', ' FL 32806', 'Gujarat'),
(201525014606, 'Kanakapriya K', 'MANIVANNAN M', 'Muslim', 18, '6', 2005, 'Female', '514 S. Magnolia St. ', 'Usmanpura', '380009', 'CT 06074', 'Gujarat'),
(201525014607, 'Sasikumar P', 'SAYAN GUPTA', 'Muslim', 6, '7', 2006, 'Male', '46 Buttonwood St. ', 'Motera', '380009', ' NY 11757', 'Gujarat'),
(201525014608, 'Poornima', 'VENGADESAN S', 'Muslim', 19, '05', 2007, 'Female', '8182 Buttonwood Drive ', 'Bopal', '380006', 'NY 12065', 'Gujarat'),
(201525014609, 'V. Jaganathan', 'RAMASUBBA REDDY M', 'Christine 	', 22, '05', 2008, 'Male', '727 S. Windfall Street ', 'Usmanpura', '380009', 'CA 92220', 'Gujarat'),
(201525014610, 'R. Sujithra', 'SIVAKUMAR M S', 'Hindu', 15, '9', 2009, 'Male', '727 S. Windfall Street', 'Motera', '380012', 'CA 92220', 'Gujarat'),
(201525014611, 'Faizan Md Rashid', 'ANURADHA BANERJEE', 'Christine 	', 12, '06', 2010, 'Male', '1 Country Street ', 'Motera', '380005', 'GA 30809', 'Gujarat'),
(201525014612, 'M.Kavitha', 'RAMASUBBA REDDY M', 'Hindu', 15, '06', 2011, 'Male', '1 Country Street ', 'Usmanpura', '380005', 'GA 30809', 'Gujarat'),
(201525014613, 'Faizan Md Rashid', 'ROCKIARAJAN A', 'Muslim', 20, '5', 2012, 'Male', '9637 East Lakeshore Street ', 'Bopal', '380006', 'PA 15108', 'Gujarat'),
(201525014614, 'Abhijit Biswas', 'MANIVANNAN M', 'Christine', 23, '12', 2013, 'Male', '8182 Buttonwood Drive ', 'NAROL', '380023', 'NY 12065', 'Gujarat'),
(201525014615, 'Prasanth Anand Kumar Lam', 'ARUL PRAKASH K', 'Hindu', 28, '2', 2014, 'Male', '8182 Buttonwood Drive ', 'Ranip', '380023', ' NY 12065', 'Gujarat'),
(201525014616, 'ANURADHA BANERJEE', 'Dhatreyi Boyina', 'Christine', 25, '8', 2015, 'Male', '536 North St. ', 'Bopal', '380023', 'ND 58078', 'Gujarat'),
(201525014617, 'M.Kavitha', 'SAYAN GUPTA', 'Hindu', 30, '01', 2000, 'Female', '36 La Sierra St. ', 'Ranip', '380009', 'CA 95060', 'Gujarat'),
(201525014618, 'Sowmya Sunakraneni', '	BABURAJ A P', 'Hindu', 3, '12', 2000, 'Female', '727 S. Windfall Street', 'Jivraj Park', '380005', 'CA 92220', 'Gujarat'),
(201525014619, 'Anitha Alex', 'RAMAKRISHNAN S', 'Christine', 24, '2', 2000, 'Female', '599 Madison Road ', 'Jivraj Park', '380005', 'MN 55060', 'Gujarat'),
(201525014620, 'Sreenivasa Prasath. S', 'ANURADHA BANERJEE', 'Hindu', 13, '5', 2001, 'Female', '524 Atlantic Street ', 'Jivraj Park', '380002', 'NY 14043', 'Gujarat'),
(201525014621, 'Ayyappadas.A.M', 'MAHESH PANCHAGNULA', 'Muslim', 5, '1', 2001, 'Male', '524 Atlantic Street ', 'Gujarat College', '380001', 'NY 14043', 'Gujarat'),
(201525014622, 'Ashish Mohan', 'ANURADHA BANERJEE', 'Hindu', 25, '12', 2001, 'Male', '727 S. Windfall Street ', 'Usmanpura', '380005', 'CA 92220', 'Gujarat'),
(201525014623, 'RAMASUBBA REDDY M', 'Venkata Satyamu Sanapala', 'Christine', 14, '2', 2001, 'Female', '36 La Sierra St. ', 'Gujarat College', '380005', 'CA 95060', 'Gujarat'),
(201525014624, 'Venkata Satyamu Sanapala', 'RAMAKRISHNAN S', 'Muslim', 19, '1', 2002, 'Female', '8182 Buttonwood Drive ', 'Usmanpura', '380010', 'NY 12065', 'Gujarat'),
(201525014625, 'Ayyappadas.A.M', 'MAHESH PANCHAGNULA', 'Muslim', 7, '5', 2002, 'Male', '599 Madison Road ', 'Bopal', '380005', 'MN 55060', 'Gujarat'),
(201525014626, 'Vandan Pandeji', 'Jayesh Pandeji', 'Hindu', 19, '01', 2002, 'Male', '524 Atlantic Street ', 'Gujarat College', '380015', 'NY 14043', 'Gujarat'),
(201525014627, 'Aditya Pandeji', 'Jayesh Pandeji', 'Hindu', 9, '09', 2003, 'Male', '524 Atlantic Street ', 'Gujarat College', '380015', 'NY 14043', 'Gujarat'),
(201525014628, 'Jeel Shah', 'Haresh Shah', 'Hindu', 11, '07', 2004, 'Female', '524 Atlantic Street ', 'Dariapur', '380015', 'NY 14043', 'Gujarat'),
(201525014629, 'Bhaumin Shah', 'Nelish Shah', 'Hindu', 15, '4', 2005, 'Male', '727 S. Windfall Street ', 'Dariapur', '380016', 'CA 92220', 'Gujarat'),
(201525014630, 'Charmi Shah', 'Nelish Shah', 'Hindu', 25, '6', 2006, 'Female', '727 S. Windfall Street ', 'Dariapur', '380016', 'CA 92220', 'Gujarat'),
(201525014631, 'Dhrumil Raval', 'Aashies Raval', 'Hindu', 2, '12', 2007, 'Male', '46 Buttonwood St.', 'Usmanpura', '380017', 'NY 11757', 'Gujarat'),
(201525014632, 'Het Shah', 'Haresh Shah', 'Hindu', 23, '6', 2008, 'Male', '524 Atlantic Street ', 'Dariapur', '380015', ' NY 14043', 'Gujarat'),
(201525014633, 'Kishan Vandara', 'Jagdish Vandara', 'Hindu', 25, '7', 2008, 'Male', '46 Buttonwood St. ', 'Bopal', '380017', 'NY 11757', 'Gujarat'),
(201525014634, 'Khusi Dalal', 'Jayesh Dalal', 'Hindu', 28, '01', 2009, 'Female', '524 Atlantic Street ', 'Gujarat College', '380015', 'NY 14043', 'Gujarat'),
(201525014635, 'Dhruv Thakker', 'Syan Thakker', 'Hindu', 23, '3', 2010, 'Male', '474 Wild Horse Street ', 'Motera', '380019', 'NC 27526', 'Gujarat'),
(201525014636, 'Vatsal Dave', 'M Dave', 'Hindu', 1, '4', 2011, 'Male', '536 North St.', 'Usmanpura', '380020', 'ND 58078', 'Gujarat'),
(201525014637, 'Prem Raval', 'G Raval', 'Hindu', 25, '3', 2012, 'Male', '8182 Buttonwood Drive ', 'Dariapur', '380021', 'NY 12065', 'Gujarat'),
(201525014638, 'Mansi Patel', 'R.G Patel', 'Hindu', 19, '01', 2012, 'Female', '9637 East Lakeshore Street ', 'Dariapur', '380013', 'PA 15108', 'Gujarat'),
(201525014639, 'Indu Shetty', 'Ravi Shetty', 'Christine', 20, '8', 2013, 'Female', '8182 Buttonwood Drive ', 'Bopal', '380017', ' NY 12065', 'Gujarat'),
(201525014640, 'Aenil Patel', 'B.G Patel', 'Hindu', 10, '12', 2014, 'Male', '599 Madison Road', 'Motera', '380018', 'MN 55060', 'Gujarat'),
(201525014641, 'Aenil Patel', 'B.G Patel', 'Muslim', 4, '5', 2015, 'Male', '536 North St.', 'Railway Colony', '380016', 'ND 58078', 'Gujarat'),
(201525014642, 'Hemang Patel', 'Aenil Patel', 'Hindu', 31, '1', 2001, 'Male', '599 Madison Road ', 'Motera', '380020', 'MN 55060', 'Gujarat'),
(201525014643, 'Shubahm Parmar', 'Nishith Parmar', 'Hindu', 23, '7', 2002, 'Male', '83 South Chestnut Dr', 'Usmanpura', '380051', 'ID 83651', 'Gujarat'),
(201525014644, 'Senehal Jadwala', 'Jagdish Jadwala', 'Hindu', 26, '1', 2003, 'Male', '83 South Chestnut Dr. ', 'Motera', '380051', 'ID 83651', 'Gujarat'),
(201525014645, 'Huzefa Ansari', 'Huzefa Ansari', 'Muslim', 15, '8', 2004, 'Male', '573 Wild Rose St. ', 'NAROL', '380052', 'PA 15102', 'Gujarat'),
(201525014646, 'Savio D`costa', 'Aelx D`costa', 'Christine', 26, '12', 2000, 'Male', '82 Cherry Hill St. ', 'Bopal', '380053', 'TX 75126', 'Gujarat'),
(201525014647, 'Aaron S.Christian', 'Savio Christian', 'Christine', 25, '6', 2000, 'Male', '82 Cherry Hill St. ', 'Bapu Nagar', '380053', 'TX 75126', 'Gujarat'),
(201525014648, 'Ushama Punjabi', 'K.B Punjabi', 'Muslim', 9, '9', 2000, 'Male', '859 West Rockwell Road ', 'NAROL', '380054', 'IL 60062', 'Gujarat'),
(201525014649, 'Aadil Nathani', 'K Nathani', 'Muslim', 4, '12', 2005, 'Male', '859 West Rockwell Road ', 'Railway Colony', '380054', 'IL 60062', 'Gujarat'),
(201525014650, 'Aafin Kagzi', 'Aadil Kagzi', 'Muslim', 23, '5', 2006, 'Male', '32 Manhattan Street ', 'Bapu Nagar', '380055', 'MD 21009', 'Gujarat'),
(201525014651, 'Aakash Agrawal', 'M.C Agrawal', 'Hindu', 23, '6', 2007, 'Male', '32 Manhattan Street ', 'NAROL', '380055', 'MD 21009', 'Gujarat'),
(201525014652, 'Aakash Christian', 'Savio Christian', 'Christine', 23, '2', 2008, 'Male', '32 Manhattan Street ', 'Revdi Bazar', '380055', 'MD 21009', 'Gujarat'),
(201525014653, 'Aakib Memon', 'Aadil Memon', 'Muslim', 28, '2', 2009, 'Male', '32 Manhattan Street ', 'Bopal', '380055', 'MD 21009', 'Gujarat'),
(201525014654, 'Aalav Metha', 'B.G Metha', 'Hindu', 4, '5', 2010, 'Male', '22 El Dorado Drive ', 'Railway Colony', '380056', 'WI 53562', 'Gujarat'),
(201525014655, 'Aamir Saiyed', 'Dhatreyi  Saiyed', 'Muslim', 30, '3', 2011, 'Male', '22 El Dorado Drive ', 'Paldi', '380056', 'WI 53562', 'Gujarat'),
(201525014656, 'Araon Benjamin', 'D.C Benjamin', 'Christine', 24, '12', 2012, 'Male', '22 El Dorado Drive ', 'Paldi', '380056', 'WI 53562', 'Gujarat'),
(201525014657, 'Aashir Khan', 'Salman Kahn', 'Muslim', 15, '5', 2013, 'Male', '22 El Dorado Drive', 'Paldi', '380056', 'WI 53562', 'Gujarat'),
(201525014658, 'Aatif Khan', 'Salman Kahn', 'Muslim', 20, '2', 2001, 'Male', '22 El Dorado Drive ', 'Gujarat College', '380056', 'WI 53562', 'Gujarat'),
(201525014659, 'Aayush Panchal', 'G.K Panchal', 'Hindu', 20, '9', 2005, 'Male', '22 El Dorado Drive ', 'Railway Colony', '380056', 'WI 53562', 'Gujarat'),
(201525014660, 'Abhishek Pujari', 'H.L Pujari', 'Hindu', 25, '3', 2006, 'Male', '22 El Dorado Drive ', 'Bopal', '380056', 'WI 53562', 'Gujarat'),
(201525014661, 'SAYAN GUPTA', 'Mallikarjunachari G', 'Muslim', 20, '9', 2007, 'Female', '7970 Glen Ridge Lane ', 'Usmanpura', '380057', 'MS 39564', 'Gujarat'),
(201525014662, 'Faizan Ulla Khan', 'SUJATHA  Khan', 'Muslim', 10, '11', 2015, 'Male', '7970 Glen Ridge Lane ', 'Revdi Bazar', '380057', 'MS 39564', 'Gujarat'),
(201525014663, 'Paresh Parmar', 'Nishith Parmar', 'Hindu', 22, '2', 2011, 'Male', '7970 Glen Ridge Lane ', 'Revdi Bazar', '380057', 'MS 39564', 'Gujarat'),
(201525014664, 'Parmar Mahesh', 'B.G Parmar', 'Hindu', 23, '6', 2000, 'Male', '7970 Glen Ridge Lane ', 'Gujarat College', '380057', 'MS 39564', 'Gujarat'),
(201525014665, 'Paresh Parmar', 'Nishith Parmar', 'Hindu', 22, '2', 2001, 'Male', '7970 Glen Ridge Lane ', 'Revdi Bazar', '380057', 'MS 39564', 'Gujarat'),
(201525014666, 'Parmar Mahesh', 'B.G Parmar', 'Hindu', 23, '6', 2002, 'Male', '7970 Glen Ridge Lane ', 'Revdi Bazar', '380057', 'MS 39564', 'Gujarat'),
(201525014667, 'Araon Benjamin', 'D.C Benjamin', 'Christine', 24, '12', 2003, 'Male', '22 El Dorado Drive ', 'Revdi Bazar', '380056', 'WI 53562', 'Gujarat'),
(201525014668, 'Aashir Khan', 'Salman Kahn', 'Muslim', 15, '5', 2004, 'Male', '22 El Dorado Drive', 'Bopal', '380056', 'WI 53562', 'Gujarat'),
(201525014669, 'Aatif Khan', 'Salman Kahn', 'Muslim', 20, '2', 2005, 'Male', '22 El Dorado Drive ', 'Railway Colony', '380056', 'WI 53562', 'Gujarat'),
(201525014670, 'Abhishek Pujari', 'H.L Pujari', 'Hindu', 25, '3', 2006, 'Male', '22 El Dorado Drive ', 'Usmanpura', '380056', 'WI 53562', 'Gujarat'),
(201525014671, 'SAYAN GUPTA', 'Mallikarjunachari G', 'Muslim', 20, '9', 2007, 'Female', '7970 Glen Ridge Lane ', 'Revdi Bazar', '380057', 'MS 39564', 'Gujarat'),
(201525014672, 'Faizan Ulla Khan', 'SUJATHA  Khan', 'Muslim', 10, '11', 2008, 'Male', '7970 Glen Ridge Lane ', 'Paldi', '380057', 'MS 39564', 'Gujarat'),
(201525014673, 'Faizan Ulla Khan', 'SUJATHA  Khan', 'Muslim', 10, '11', 2009, 'Male', '7970 Glen Ridge Lane ', 'Gujarat College', '380057', 'MS 39564', 'Gujarat'),
(201525014674, 'Paresh Parmar', 'Nishith Parmar', 'Hindu', 22, '2', 2015, 'Male', '7970 Glen Ridge Lane ', 'Revdi Bazar', '380057', 'MS 39564', 'Gujarat'),
(201525014675, 'Parmar Mahesh', 'B.G Parmar', 'Hindu', 23, '6', 2010, 'Male', '7970 Glen Ridge Lane ', 'Paldi', '380057', 'MS 39564', 'Gujarat'),
(201525014676, 'Paresh Parmar', 'Nishith Parmar', 'Hindu', 22, '2', 2011, 'Male', '7970 Glen Ridge Lane ', 'Bopal', '380057', 'MS 39564', 'Gujarat'),
(201525014677, 'Parmar Mahesh', 'B.G Parmar', 'Hindu', 23, '6', 2012, 'Male', '7970 Glen Ridge Lane ', 'Usmanpura', '380057', 'MS 39564', 'Gujarat'),
(201525014678, 'Abhishek Pujari', 'H.L Pujari', 'Hindu', 25, '3', 2014, 'Male', '22 El Dorado Drive ', 'Railway Colony', '380056', 'WI 53562', 'Gujarat'),
(201525014679, 'Senehal Jadwala', 'Jagdish Jadwala', 'Hindu', 26, '1', 2014, 'Male', '83 South Chestnut Dr. ', 'Railway Colony', '380051', 'ID 83651', 'Gujarat'),
(201525014680, 'Huzefa Ansari', 'Huzefa Ansari', 'Muslim', 15, '8', 2000, 'Male', '573 Wild Rose St. ', 'Bopal', '380052', 'PA 15102', 'Gujarat'),
(201525014681, 'Savio D`costa', 'Aelx D`costa', 'Christine', 26, '12', 2001, 'Male', '82 Cherry Hill St. ', 'Bapu Nagar', '380053', 'TX 75126', 'Gujarat'),
(201525014682, 'Aaron S.Christian', 'Savio Christian', 'Christine', 25, '6', 2002, 'Male', '82 Cherry Hill St. ', 'Usmanpura', '380053', 'TX 75126', 'Gujarat'),
(201525014683, 'Ushama Punjabi', 'K.B Punjabi', 'Muslim', 9, '9', 2003, 'Male', '859 West Rockwell Road ', 'Bopal', '380054', 'IL 60062', 'Gujarat'),
(201525014684, 'Aadil Nathani', 'K Nathani', 'Muslim', 4, '12', 2004, 'Male', '859 West Rockwell Road ', 'Paldi', '380054', 'IL 60062', 'Gujarat'),
(201525014685, 'Aafin Kagzi', 'Aadil Kagzi', 'Muslim', 23, '5', 2005, 'Male', '32 Manhattan Street ', 'Bopal', '380055', 'MD 21009', 'Gujarat'),
(201525014686, 'Vandan Pandeji', 'Jayesh Pandeji', 'Hindu', 19, '01', 2006, 'Male', '524 Atlantic Street ', 'Bapu Nagar', '380015', 'NY 14043', 'Gujarat'),
(201525014687, 'Aditya Pandeji', 'Jayesh Pandeji', 'Hindu', 9, '09', 2007, 'Male', '524 Atlantic Street ', 'Railway Colony', '380015', 'NY 14043', 'Gujarat'),
(201525014688, 'Jeel Shah', 'Haresh Shah', 'Hindu', 11, '07', 2008, 'Female', '524 Atlantic Street ', 'Bopal', '380015', 'NY 14043', 'Gujarat'),
(201525014689, 'Bhaumin Shah', 'Nelish Shah', 'Hindu', 15, '4', 2009, 'Male', '727 S. Windfall Street ', 'Bapu Nagar', '380016', 'CA 92220', 'Gujarat'),
(201525014690, 'Charmi Shah', 'Nelish Shah', 'Hindu', 25, '6', 2010, 'Female', '727 S. Windfall Street ', 'Gujarat College', '380016', 'CA 92220', 'Gujarat'),
(201525014691, 'Dhrumil Raval', 'Aashies Raval', 'Hindu', 2, '12', 2011, 'Male', '46 Buttonwood St.', 'Railway Colony', '380017', 'NY 11757', 'Gujarat'),
(201525014692, 'Het Shah', 'Haresh Shah', 'Hindu', 23, '6', 2012, 'Male', '524 Atlantic Street ', 'Bopal', '380015', ' NY 14043', 'Gujarat'),
(201525014693, 'Kishan Vandara', 'Jagdish Vandara', 'Hindu', 25, '7', 2013, 'Male', '46 Buttonwood St. ', 'Railway Colony', '380017', 'NY 11757', 'Gujarat'),
(201525014694, 'Khusi Dalal', 'Jayesh Dalal', 'Hindu', 28, '01', 2014, 'Female', '524 Atlantic Street ', 'Railway Colony', '380015', 'NY 14043', 'Gujarat'),
(201525014695, 'Dhruv Thakker', 'Syan Thakker', 'Hindu', 23, '3', 2015, 'Male', '474 Wild Horse Street ', 'Revdi Bazar', '380019', 'NC 27526', 'Gujarat'),
(201525014696, 'Vatsal Dave', 'M Dave', 'Hindu', 1, '4', 2016, 'Male', '536 North St.', 'Revdi Bazar', '380020', 'ND 58078', 'Gujarat'),
(201525014697, 'Prem Raval', 'G Raval', 'Hindu', 25, '3', 2000, 'Male', '8182 Buttonwood Drive ', 'Bopal', '380021', 'NY 12065', 'Gujarat'),
(201525014698, 'Abhijit Biswas', 'MANIVANNAN M', 'Christine', 23, '12', 2001, 'Male', '8182 Buttonwood Drive ', 'Paldi', '380023', 'NY 12065', 'Gujarat'),
(201525014699, 'Prasanth Anand Kumar Lam', 'ARUL PRAKASH K', 'Hindu', 28, '2', 2002, 'Male', '8182 Buttonwood Drive ', 'Paldi', '380023', ' NY 12065', 'Gujarat'),
(201525014700, 'ANURADHA BANERJEE', 'Dhatreyi Boyina', 'Christine', 25, '8', 2004, 'Male', '536 North St. ', 'Paldi', '380023', 'ND 58078', 'Gujarat'),
(201525014701, 'M.Kavitha', 'SAYAN GUPTA', 'Hindu', 30, '01', 2005, 'Female', '36 La Sierra St. ', 'Jivraj Park', '380009', 'CA 95060', 'Gujarat'),
(201525014702, 'Sowmya Sunakraneni', '	BABURAJ A P', 'Hindu', 3, '12', 2006, 'Female', '727 S. Windfall Street', 'Bopal', '380005', 'CA 92220', 'Gujarat'),
(201525014703, 'Anitha Alex', 'RAMAKRISHNAN S', 'Christine', 24, '2', 2007, 'Female', '599 Madison Road ', 'Jivraj Park', '380005', 'MN 55060', 'Gujarat'),
(201525014704, 'Sreenivasa Prasath. S', 'ANURADHA BANERJEE', 'Hindu', 13, '5', 2008, 'Female', '524 Atlantic Street ', 'Bopal', '380002', 'NY 14043', 'Gujarat'),
(201525014708, 'M.Kavitha', 'SAYAN GUPTA', 'Hindu', 30, '01', 2005, 'Female', '36 La Sierra St. ', 'Jivraj Park', '380009', 'CA 95060', 'Gujarat'),
(201525014709, 'Sowmya Sunakraneni', '	BABURAJ A P', 'Hindu', 3, '12', 2006, 'Female', '727 S. Windfall Street', 'Bopal', '380005', 'CA 92220', 'Gujarat'),
(201525014710, 'Anitha Alex', 'RAMAKRISHNAN S', 'Christine', 24, '2', 2007, 'Female', '599 Madison Road ', 'Jivraj Park', '380005', 'MN 55060', 'Gujarat'),
(201525014711, 'Sreenivasa Prasath. S', 'ANURADHA BANERJEE', 'Hindu', 13, '5', 2008, 'Female', '524 Atlantic Street ', 'Bopal', '380002', 'NY 14043', 'Gujarat'),
(201525014712, 'Sreenivasa Prasath. S', 'ANURADHA BANERJEE', 'Hindu', 13, '5', 2001, 'Female', '524 Atlantic Street ', 'Jivraj Park', '380002', 'NY 14043', 'Gujarat'),
(201525014713, 'RAMASUBBA REDDY M', 'Venkata Satyamu Sanapala', 'Christine', 14, '2', 2001, 'Female', '36 La Sierra St. ', 'Gujarat College', '380005', 'CA 95060', 'Gujarat'),
(201525014714, 'Venkata Satyamu Sanapala', 'RAMAKRISHNAN S', 'Muslim', 19, '1', 2002, 'Female', '8182 Buttonwood Drive ', 'Usmanpura', '380010', 'NY 12065', 'Gujarat'),
(2015250114705, 'Shikher Shah', 'N.k Shah', 'Muslim', 29, '1', 2002, 'Male', '71 Pilgrim Avenue ', 'Bopal', '380001 	', 'MD 20815', 'Gujarat'),
(2015250114706, 'Fazan Momada', 'Faruk Momada', 'Muslim', 23, '5', 2003, 'Male', '8182 Buttonwood Drive ', 'Paldi', '380023 	', 'NY 12065 	', 'Gujarat'),
(2015250114707, 'Riayz Memoin', 'GR Memoin', 'Muslim', 26, '1', 2005, 'Male', '46 Buttonwood St. ', 'Railway Colony 	', '380017 	', 'NY 11757', 'Gujarat');

-- --------------------------------------------------------

--
-- Table structure for table `admin_detail`
--

CREATE TABLE `admin_detail` (
  `id` int(5) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) NOT NULL DEFAULT '12345678'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_detail`
--

INSERT INTO `admin_detail` (`id`, `name`, `email`, `password`) VALUES
(1, 'government', 'admin@admin.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `deo`
--

CREATE TABLE `deo` (
  `deo_id` int(10) NOT NULL,
  `deo_name` varchar(30) DEFAULT NULL,
  `deo_email` varchar(50) DEFAULT NULL,
  `deo_pass` varchar(20) NOT NULL DEFAULT '12345678'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deo`
--

INSERT INTO `deo` (`deo_id`, `deo_name`, `deo_email`, `deo_pass`) VALUES
(1, 'DEO', 'deo@deo.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `dropout_details`
--

CREATE TABLE `dropout_details` (
  `drop_id` int(10) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `f_name` varchar(30) DEFAULT NULL,
  `street` varchar(30) DEFAULT NULL,
  `area` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `pincode` int(10) DEFAULT NULL,
  `day` int(5) DEFAULT NULL,
  `month` varchar(20) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `cast` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `std` varchar(50) DEFAULT NULL,
  `jyear` year(4) DEFAULT NULL,
  `lyear` year(4) DEFAULT NULL,
  `reason` varchar(200) DEFAULT NULL,
  `aadher_number` bigint(15) DEFAULT NULL,
  `school_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dropout_details`
--

INSERT INTO `dropout_details` (`drop_id`, `name`, `f_name`, `street`, `area`, `city`, `state`, `pincode`, `day`, `month`, `year`, `cast`, `gender`, `std`, `jyear`, `lyear`, `reason`, `aadher_number`, `school_id`) VALUES
(1, 'Anitha Alex', 'RAMAKRISHNAN S', '599 Madison Road ', 'Jivraj Park', 'MN 55060', 'Gujarat', 380005, 24, '2', 2000, 'Christine', 'Female', '12th', 2012, 2015, 'Family Financial Issue', 201525014619, 1),
(4, 'Ayyappadas.A.M', 'MAHESH PANCHAGNULA', '524 Atlantic Street ', 'Gujarat College', 'NY 14043', 'Gujarat', 380001, 5, '1', 2001, 'Muslim', 'Male', '12th', 2011, 2015, 'Lack of Higher Studies in Village', 201525014621, 1),
(6, 'ANURADHA BANERJEE', 'Dhatreyi Boyina', '536 North St. ', 'Bopal', 'ND 58078', 'Gujarat', 380023, 25, '8', 2015, 'Christine', 'Male', '6th', 2007, 2014, 'Not Interested in Further Education', 201525014616, 1),
(7, 'Poornima', 'VENGADESAN S', '8182 Buttonwood Drive ', 'Bopal', 'NY 12065', 'Gujarat', 380006, 19, '05', 2007, 'Muslim', 'Female', '10th', 2009, 2012, 'Social Issue', 201525014608, 1),
(8, 'Sowmya Sunakraneni', '	BABURAJ A P', '727 S. Windfall Street', 'Jivraj Park', 'CA 92220', 'Gujarat', 380005, 3, '12', 2000, 'Hindu', 'Female', '6th', 2009, 2012, 'Social Issue', 201525014618, 1),
(9, 'Faizan Md Rashid', 'ROCKIARAJAN A', '9637 East Lakeshore Street ', 'Bopal', 'PA 15108', 'Gujarat', 380006, 20, '5', 2012, 'Muslim', 'Male', '9th', 2009, 2015, 'Family Financial Issue', 201525014613, 1),
(10, 'Aenil Patel', 'B.G Patel', '536 North St.', 'Railway Colony', 'ND 58078', 'Gujarat', 380016, 4, '5', 2015, 'Muslim', 'Male', '12th', 2011, 2012, 'Family Financial Issue', 201525014641, 2),
(11, 'Charmi Shah', 'Nelish Shah', '727 S. Windfall Street ', 'Dariapur', 'CA 92220', 'Gujarat', 380016, 25, '6', 2006, 'Hindu', 'Female', '12th', 2011, 2013, 'Social Issue', 201525014630, 2),
(12, 'Indu Shetty', 'Ravi Shetty', '8182 Buttonwood Drive ', 'Bopal', ' NY 12065', 'Gujarat', 380017, 20, '8', 2013, 'Christine', 'Female', '11th', 2011, 2012, 'Not Interested in Further Education', 201525014639, 2),
(14, 'Venkata Satyamu Sanapala', 'RAMAKRISHNAN S', '8182 Buttonwood Drive ', 'Usmanpura', 'NY 12065', 'Gujarat', 380010, 19, '1', 2002, 'Muslim', 'Female', '10th', 2011, 2015, 'Lack Of Higher Studies In Village', 201525014624, 2),
(16, 'Jeel Shah', 'Haresh Shah', '524 Atlantic Street ', 'Dariapur', 'NY 14043', 'Gujarat', 380015, 11, '07', 2004, 'Hindu', 'Female', '7th', 2010, 2013, 'Co-Education System', 201525014628, 2),
(17, 'Mansi Patel', 'R.G Patel', '9637 East Lakeshore Street ', 'Dariapur', 'PA 15108', 'Gujarat', 380013, 19, '01', 2012, 'Hindu', 'Female', '7th', 2007, 2011, 'Social Issue', 201525014638, 2),
(19, 'Khusi Dalal', 'Jayesh Dalal', '524 Atlantic Street ', 'Gujarat College', 'NY 14043', 'Gujarat', 380015, 28, '01', 2009, 'Hindu', 'Female', '9th', 2009, 2015, 'Social Issue', 201525014634, 2),
(21, 'Aaron S.Christian', 'Savio Christian', '82 Cherry Hill St. ', 'Usmanpura', 'TX 75126', 'Gujarat', 380053, 25, '6', 2002, 'Christine', 'Male', '10th', 2011, 2015, 'Not Interested in Further Education', 201525014682, 10),
(23, 'Aashir Khan', 'Salman Kahn', '22 El Dorado Drive', 'Bopal', 'WI 53562', 'Gujarat', 380056, 15, '5', 2004, 'Muslim', 'Male', '10th', 2013, 2015, 'Family Financial Issue', 201525014668, 10),
(24, 'Paresh Parmar', 'Nishith Parmar', '7970 Glen Ridge Lane ', 'Revdi Bazar', 'MS 39564', 'Gujarat', 380057, 22, '2', 2001, 'Hindu', 'Male', '12th', 2009, 2011, 'Not Interested in Further Education', 201525014665, 10),
(26, 'Huzefa Ansari', 'Huzefa Ansari', '573 Wild Rose St. ', 'Bopal', 'PA 15102', 'Gujarat', 380052, 15, '8', 2000, 'Muslim', 'Male', '12th', 2009, 2012, 'Social Issue', 201525014680, 10),
(27, 'Paresh Parmar', 'Nishith Parmar', '7970 Glen Ridge Lane ', 'Revdi Bazar', 'MS 39564', 'Gujarat', 380057, 22, '2', 2011, 'Hindu', 'Male', '7th', 2011, 2013, 'Family Financial Issue', 201525014663, 10),
(29, 'Savio D`costa', 'Aelx D`costa', '82 Cherry Hill St. ', 'Bapu Nagar', 'TX 75126', 'Gujarat', 380053, 26, '12', 2001, 'Christine', 'Male', '8th', 2009, 2012, 'Social Issue', 201525014681, 10),
(30, 'SAYAN GUPTA', 'Mallikarjunachari G', '7970 Glen Ridge Lane ', 'Revdi Bazar', 'MS 39564', 'Gujarat', 380057, 20, '9', 2007, 'Muslim', 'Female', '12th', 2013, 2015, 'Co-Education System', 201525014671, 10),
(32, 'Senehal Jadwala', 'Jagdish Jadwala', '83 South Chestnut Dr. ', 'Railway Colony', 'ID 83651', 'Gujarat', 380051, 26, '1', 2014, 'Hindu', 'Male', '12th', 2008, 2011, 'Not Interested in Further Education', 201525014679, 10),
(33, 'Paresh Parmar', 'Nishith Parmar', '7970 Glen Ridge Lane ', 'Revdi Bazar', 'MS 39564', 'Gujarat', 380057, 22, '2', 2015, 'Hindu', 'Male', '11th', 2010, 2014, 'Co-Education System', 201525014674, 10),
(34, 'Abhishek Pujari', 'H.L Pujari', '22 El Dorado Drive ', 'Railway Colony', 'WI 53562', 'Gujarat', 380056, 25, '3', 2014, 'Hindu', 'Male', '11th', 2010, 2013, 'Family Financial Issue', 201525014678, 10),
(35, 'Araon Benjamin', 'D.C Benjamin', '22 El Dorado Drive ', 'Paldi', 'WI 53562', 'Gujarat', 380056, 24, '12', 2012, 'Christine', 'Male', '11th', 2010, 2015, 'Family Financial Issue', 201525014656, 5),
(36, 'Savio D`costa', 'Aelx D`costa', '82 Cherry Hill St. ', 'Bopal', 'TX 75126', 'Gujarat', 380053, 26, '12', 2000, 'Christine', 'Male', '11th', 2009, 2011, 'Co-Education System', 201525014646, 5),
(37, 'Aakash Agrawal', 'M.C Agrawal', '32 Manhattan Street ', 'NAROL', 'MD 21009', 'Gujarat', 380055, 23, '6', 2007, 'Hindu', 'Male', '9th', 2008, 2012, 'Not Interested in Further Education', 201525014651, 5),
(38, 'Aayush Panchal', 'G.K Panchal', '22 El Dorado Drive ', 'Railway Colony', 'WI 53562', 'Gujarat', 380056, 20, '9', 2005, 'Hindu', 'Male', '12th', 2012, 2015, 'Social Issue', 201525014659, 5),
(39, 'Aafin Kagzi', 'Aadil Kagzi', '32 Manhattan Street ', 'Bapu Nagar', 'MD 21009', 'Gujarat', 380055, 23, '5', 2006, 'Muslim', 'Male', '8th', 2009, 2013, 'Family Financial Issue', 201525014650, 5),
(40, 'Aamir Saiyed', 'Dhatreyi  Saiyed', '22 El Dorado Drive ', 'Paldi', 'WI 53562', 'Gujarat', 380056, 30, '3', 2011, 'Muslim', 'Male', '12th', 2011, 2014, 'Social Issue', 201525014655, 5),
(41, 'Aashir Khan', 'Salman Kahn', '22 El Dorado Drive', 'Paldi', 'WI 53562', 'Gujarat', 380056, 15, '5', 2013, 'Muslim', 'Male', '12th', 2012, 2015, 'Not Interested in Further Education', 201525014657, 5),
(42, 'Faizan Ulla Khan', 'SUJATHA  Khan', '7970 Glen Ridge Lane ', 'Revdi Bazar', 'MS 39564', 'Gujarat', 380057, 10, '11', 2015, 'Muslim', 'Male', '11th', 2012, 2013, 'Co-Education System', 201525014662, 5),
(43, 'Aadil Nathani', 'K Nathani', '859 West Rockwell Road ', 'Railway Colony', 'IL 60062', 'Gujarat', 380054, 4, '12', 2005, 'Muslim', 'Male', '10th', 2011, 2015, 'Not Interested in Further Education', 201525014649, 5),
(44, 'Charmi Shah', 'Nelish Shah', '727 S. Windfall Street ', 'Gujarat College', 'CA 92220', 'Gujarat', 380016, 25, '6', 2010, 'Hindu', 'Female', '11th', 2011, 2013, 'Co-Education System', 201525014690, 8),
(45, 'Jeel Shah', 'Haresh Shah', '524 Atlantic Street ', 'Bopal', 'NY 14043', 'Gujarat', 380015, 11, '07', 2008, 'Hindu', 'Female', '11th', 2011, 2014, 'Co-Education System', 201525014688, 8),
(46, 'M.Kavitha', 'SAYAN GUPTA', '36 La Sierra St. ', 'Jivraj Park', 'CA 95060', 'Gujarat', 380009, 30, '01', 2005, 'Hindu', 'Female', '9th', 2009, 2011, 'Social Issue', 201525014701, 8),
(47, 'Ushama Punjabi', 'K.B Punjabi', '859 West Rockwell Road ', 'Bopal', 'IL 60062', 'Gujarat', 380054, 9, '9', 2003, 'Muslim', 'Male', '11th', 2011, 2015, 'Not Interested in Further Education', 201525014683, 8),
(48, 'Khusi Dalal', 'Jayesh Dalal', '524 Atlantic Street ', 'Railway Colony', 'NY 14043', 'Gujarat', 380015, 28, '01', 2014, 'Hindu', 'Female', '10th', 2011, 2014, 'Social Issue', 201525014694, 8),
(49, 'Sowmya Sunakraneni', '	BABURAJ A P', '727 S. Windfall Street', 'Bopal', 'CA 92220', 'Gujarat', 380005, 3, '12', 2006, 'Hindu', 'Female', '8th', 2010, 2015, 'Family Financial Issue', 201525014702, 8),
(50, 'ANURADHA BANERJEE', 'Dhatreyi Boyina', '536 North St. ', 'Paldi', 'ND 58078', 'Gujarat', 380023, 25, '8', 2004, 'Christine', 'Male', '10th', 2011, 2013, 'Family Financial Issue', 201525014700, 8),
(51, 'Aadil Nathani', 'K Nathani', '859 West Rockwell Road ', 'Paldi', 'IL 60062', 'Gujarat', 380054, 4, '12', 2004, 'Muslim', 'Male', '12th', 2010, 2011, 'Social Issue', 201525014684, 8),
(52, 'Abhijit Biswas', 'MANIVANNAN M', '8182 Buttonwood Drive ', 'Paldi', 'NY 12065', 'Gujarat', 380023, 23, '12', 2001, 'Christine', 'Male', '10th', 2011, 2013, 'Not Interested in Further Education', 201525014698, 8),
(53, 'Prem Raval', 'G Raval', '8182 Buttonwood Drive ', 'Bopal', 'NY 12065', 'Gujarat', 380021, 25, '3', 2000, 'Hindu', 'Male', '12th', 2011, 2012, 'Family Financial Issue', 201525014697, 8),
(54, 'Vatsal Dave', 'M Dave', '536 North St.', 'Revdi Bazar', 'ND 58078', 'Gujarat', 380020, 1, '4', 2016, 'Hindu', 'Male', '9th', 2010, 2012, 'Not Interested in Further Education', 201525014696, 8),
(55, 'Dhrumil Raval', 'Aashies Raval', '46 Buttonwood St.', 'Railway Colony', 'NY 11757', 'Gujarat', 380017, 2, '12', 2011, 'Hindu', 'Male', '12th', 2009, 2013, 'Co-Education System', 201525014691, 8),
(56, 'Aditya Pandeji', 'Jayesh Pandeji', '524 Atlantic Street ', 'Railway Colony', 'NY 14043', 'Gujarat', 380015, 9, '09', 2007, 'Hindu', 'Male', '10th', 2010, 2012, 'Family Financial Issue', 201525014687, 8),
(57, 'Bhaumin Shah', 'Nelish Shah', '727 S. Windfall Street ', 'Bapu Nagar', 'CA 92220', 'Gujarat', 380016, 15, '4', 2009, 'Hindu', 'Male', '8th', 2008, 2011, 'Not Interested in Further Education', 201525014689, 8),
(58, 'Kishan Vandara', 'Jagdish Vandara', '46 Buttonwood St. ', 'Railway Colony', 'NY 11757', 'Gujarat', 380017, 25, '7', 2013, 'Hindu', 'Male', '10th', 2012, 2015, 'Family Financial Issue', 201525014693, 8),
(59, 'Aafin Kagzi', 'Aadil Kagzi', '32 Manhattan Street ', 'Bopal', 'MD 21009', 'Gujarat', 380055, 23, '5', 2005, 'Muslim', 'Male', '7th', 2009, 2013, 'Not Interested in Further Education', 201525014685, 8),
(67, 'Dhatreyi Boyina', 'ANURADHA BANERJEE', '44 Shirley Ave', 'Usmanpura', 'IL 60185', 'Gujarat', 380012, 12, '02', 2003, 'Christine 	', 'Female', '11th', 2011, 2012, 'Social Issue', 201525014604, 1),
(68, 'Faizan Ulla Khan', 'SUJATHA  Khan', '7970 Glen Ridge Lane ', 'Gujarat College', 'MS 39564', 'Gujarat', 380057, 10, '11', 2009, 'Muslim', 'Male', '11th', 2015, 2015, 'Other', 201525014673, 1),
(69, 'Joshy P J', 'BABURAJ A P', '123 6th St. ', 'Bopal', ' FL 32806', 'Gujarat', 380008, 25, '3', 2004, 'Christine 	', 'Male', '6th', 2009, 2012, 'Family Financial Issue', 201525014605, 1),
(70, 'P.Mahalakshmi', 'RAMASUBBA REDDY M', '4 Goldfield Rd.', 'Usmanpura', 'HI 96815', 'Gujarat', 380001, 12, '01', 2002, 'Hindu', 'Female', '4th', 2007, 2012, 'Social Issue', 201525014603, 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_details`
--

CREATE TABLE `school_details` (
  `school_id` int(10) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `street` varchar(30) DEFAULT NULL,
  `area` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `pincode` int(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT '12345678',
  `phone` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_details`
--

INSERT INTO `school_details` (`school_id`, `name`, `street`, `area`, `city`, `state`, `pincode`, `email`, `password`, `phone`) VALUES
(1, 'Ankur School', 'Fatehnagar', 'Paldi', 'Ahmedabad', 'Gujarat', 380007, 'ankur@ankur.com', '12345678', 9898787856),
(2, 'Sharda School', 'Jivraj', 'Vejalpur', 'Ahmedabad', 'Gujarat', 380051, 'sharda@sharda.com', '12345678', 9898565674),
(3, 'National School', 'Sarkhej', 'Sarkhej', 'Ahmedabad', 'Gujarat', 380055, 'national@national.com', '12345678', 9898745566),
(4, 'Cresent School', 'Fatehwadi', 'Sarkhej', 'Ahmedabad', 'Gujarat', 380055, 'cresent@cresent.com', '12345678', 9875756545),
(5, 'GLS School', 'Law Garden', 'Ellisbridge', 'Ahmedabad', 'Gujarat', 380006, 'gls@gls.com', '12345678', 7878564512),
(6, 'Nirma School', 'Bopal', 'S G Highway', 'Ahmedabad', 'Gujarat', 382212, 'nirma@nirma.com', '12345678', 7856451232),
(7, 'Lotus School', 'Thaltej', 'Thaltej', 'Ahmedabad', 'Gujarat', 380045, 'lotus@lotus.com', '12345678', 7456512316),
(8, 'Divine School', 'Vasna', 'Vasna', 'Ahmedabad', 'Gujarat', 380012, 'divine@divine.com', '12345678', 9898684523),
(9, 'Nirman School', 'Vastrapur', 'Vastrapur', 'Ahmedabad', 'Gujarat', 380054, 'nirman@nirman.com', '12345678', 9898754561),
(10, 'Diwan School', 'Jamalpur', 'Ellisbridge', 'Ahmedabad', 'Gujarat', 380045, 'diwan@diwan.com', '12345678', 9865653212);

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `student_id` int(10) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `f_name` varchar(30) DEFAULT NULL,
  `street` varchar(30) DEFAULT NULL,
  `area` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `pincode` int(10) DEFAULT NULL,
  `day` int(5) DEFAULT NULL,
  `month` varchar(20) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `cast` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `std` varchar(50) DEFAULT NULL,
  `jyear` year(4) DEFAULT NULL,
  `aadher_number` bigint(15) DEFAULT NULL,
  `school_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`student_id`, `name`, `f_name`, `street`, `area`, `city`, `state`, `pincode`, `day`, `month`, `year`, `cast`, `gender`, `std`, `jyear`, `aadher_number`, `school_id`) VALUES
(1, 'Santhanam R.', 'SIVAKUMAR M S', '123 6th St.', 'Bopal', ' FL 32904', 'India', 380001, 11, '01', 2000, 'Hindu', 'Male', '2nd', 2006, 201525014601, 1),
(2, 'Vijay Kumar Renikuntla', 'VENGADESAN S', '71 Pilgrim Avenue ', 'Bopal', 'MD 20815', 'Gujarat', 380001, 11, '01', 2001, 'Hindu', 'Male', '3rd', 2006, 201525014602, 1),
(6, 'Sasikumar P', 'SAYAN GUPTA', '46 Buttonwood St. ', 'Motera', ' NY 11757', 'Gujarat', 380009, 6, '7', 2006, 'Muslim', 'Male', '7th', 2009, 201525014607, 1),
(8, 'V. Jaganathan', 'RAMASUBBA REDDY M', '727 S. Windfall Street ', 'Usmanpura', 'CA 92220', 'Gujarat', 380009, 22, '05', 2008, 'Christine 	', 'Male', '9th', 2008, 201525014609, 1),
(9, 'R. Sujithra', 'SIVAKUMAR M S', '727 S. Windfall Street', 'Motera', 'CA 92220', 'Gujarat', 380012, 15, '9', 2009, 'Hindu', 'Male', '11th', 2011, 201525014610, 1),
(16, 'M.Kavitha', 'SAYAN GUPTA', '36 La Sierra St. ', 'Ranip', 'CA 95060', 'Gujarat', 380009, 30, '01', 2000, 'Hindu', 'Female', '11th', 2012, 201525014617, 1),
(19, 'Sreenivasa Prasath. S', 'ANURADHA BANERJEE', '524 Atlantic Street ', 'Jivraj Park', 'NY 14043', 'Gujarat', 380002, 13, '5', 2001, 'Hindu', 'Female', '10th', 2012, 201525014620, 1),
(21, 'Ashish Mohan', 'ANURADHA BANERJEE', '727 S. Windfall Street ', 'Usmanpura', 'CA 92220', 'Gujarat', 380005, 25, '12', 2001, 'Hindu', 'Male', '3rd', 2008, 201525014622, 2),
(22, 'RAMASUBBA REDDY M', 'Venkata Satyamu Sanapala', '36 La Sierra St. ', 'Gujarat College', 'CA 95060', 'Gujarat', 380005, 14, '2', 2001, 'Christine', 'Female', '9th', 2009, 201525014623, 2),
(24, 'Ayyappadas.A.M', 'MAHESH PANCHAGNULA', '599 Madison Road ', 'Bopal', 'MN 55060', 'Gujarat', 380005, 7, '5', 2002, 'Muslim', 'Male', '8th', 2009, 201525014625, 2),
(25, 'Vandan Pandeji', 'Jayesh Pandeji', '524 Atlantic Street ', 'Gujarat College', 'NY 14043', 'Gujarat', 380015, 19, '01', 2002, 'Hindu', 'Male', '9th', 2010, 201525014626, 2),
(28, 'Bhaumin Shah', 'Nelish Shah', '727 S. Windfall Street ', 'Dariapur', 'CA 92220', 'Gujarat', 380016, 15, '4', 2005, 'Hindu', 'Male', '9th', 2011, 201525014629, 2),
(32, 'Kishan Vandara', 'Jagdish Vandara', '46 Buttonwood St. ', 'Bopal', 'NY 11757', 'Gujarat', 380017, 25, '7', 2008, 'Hindu', 'Male', '10th', 2013, 201525014633, 2),
(34, 'Dhruv Thakker', 'Syan Thakker', '474 Wild Horse Street ', 'Motera', 'NC 27526', 'Gujarat', 380019, 23, '3', 2010, 'Hindu', 'Male', '10th', 2008, 201525014635, 2),
(35, 'Vatsal Dave', 'M Dave', '536 North St.', 'Usmanpura', 'ND 58078', 'Gujarat', 380020, 1, '4', 2011, 'Hindu', 'Male', '11th', 2012, 201525014636, 2),
(41, 'Hemang Patel', 'Aenil Patel', '599 Madison Road ', 'Motera', 'MN 55060', 'Gujarat', 380020, 31, '1', 2001, 'Hindu', 'Male', '12th', 2011, 201525014642, 5),
(42, 'Shubahm Parmar', 'Nishith Parmar', '83 South Chestnut Dr', 'Usmanpura', 'ID 83651', 'Gujarat', 380051, 23, '7', 2002, 'Hindu', 'Male', '7th', 2010, 201525014643, 5),
(43, 'Senehal Jadwala', 'Jagdish Jadwala', '83 South Chestnut Dr. ', 'Motera', 'ID 83651', 'Gujarat', 380051, 26, '1', 2003, 'Hindu', 'Male', '11th', 2013, 201525014644, 5),
(44, 'Huzefa Ansari', 'Huzefa Ansari', '573 Wild Rose St. ', 'NAROL', 'PA 15102', 'Gujarat', 380052, 15, '8', 2004, 'Muslim', 'Male', '5th', 2006, 201525014645, 5),
(46, 'Aaron S.Christian', 'Savio Christian', '82 Cherry Hill St. ', 'Bapu Nagar', 'TX 75126', 'Gujarat', 380053, 25, '6', 2000, 'Christine', 'Male', '12th', 2013, 201525014647, 5),
(50, 'Aakash Christian', 'Savio Christian', '32 Manhattan Street ', 'Revdi Bazar', 'MD 21009', 'Gujarat', 380055, 23, '2', 2008, 'Christine', 'Male', '12th', 2012, 201525014652, 5),
(51, 'Aakib Memon', 'Aadil Memon', '32 Manhattan Street ', 'Bopal', 'MD 21009', 'Gujarat', 380055, 28, '2', 2009, 'Muslim', 'Male', '12th', 2011, 201525014653, 5),
(52, 'Aalav Metha', 'B.G Metha', '22 El Dorado Drive ', 'Railway Colony', 'WI 53562', 'Gujarat', 380056, 4, '5', 2010, 'Hindu', 'Male', '10th', 2008, 201525014654, 5),
(56, 'Aatif Khan', 'Salman Kahn', '22 El Dorado Drive ', 'Gujarat College', 'WI 53562', 'Gujarat', 380056, 20, '2', 2001, 'Muslim', 'Male', '11th', 2014, 201525014658, 5),
(58, 'Abhishek Pujari', 'H.L Pujari', '22 El Dorado Drive ', 'Bopal', 'WI 53562', 'Gujarat', 380056, 25, '3', 2006, 'Hindu', 'Male', '11th', 2012, 201525014660, 5),
(59, 'SAYAN GUPTA', 'Mallikarjunachari G', '7970 Glen Ridge Lane ', 'Usmanpura', 'MS 39564', 'Gujarat', 380057, 20, '9', 2007, 'Muslim', 'Female', '10th', 2012, 201525014661, 5),
(65, 'Araon Benjamin', 'D.C Benjamin', '22 El Dorado Drive ', 'Revdi Bazar', 'WI 53562', 'Gujarat', 380056, 24, '12', 2003, 'Christine', 'Male', '11th', 2013, 201525014667, 10),
(67, 'Aatif Khan', 'Salman Kahn', '22 El Dorado Drive ', 'Railway Colony', 'WI 53562', 'Gujarat', 380056, 20, '2', 2005, 'Muslim', 'Male', '12th', 2015, 201525014669, 10),
(70, 'Faizan Ulla Khan', 'SUJATHA  Khan', '7970 Glen Ridge Lane ', 'Paldi', 'MS 39564', 'Gujarat', 380057, 10, '11', 2008, 'Muslim', 'Male', '11th', 2012, 201525014672, 10),
(73, 'Parmar Mahesh', 'B.G Parmar', '7970 Glen Ridge Lane ', 'Paldi', 'MS 39564', 'Gujarat', 380057, 23, '6', 2010, 'Hindu', 'Male', '11th', 2011, 201525014675, 10),
(74, 'Paresh Parmar', 'Nishith Parmar', '7970 Glen Ridge Lane ', 'Bopal', 'MS 39564', 'Gujarat', 380057, 22, '2', 2011, 'Hindu', 'Male', '9th', 2011, 201525014676, 10),
(75, 'Parmar Mahesh', 'B.G Parmar', '7970 Glen Ridge Lane ', 'Usmanpura', 'MS 39564', 'Gujarat', 380057, 23, '6', 2012, 'Hindu', 'Male', '9th', 2012, 201525014677, 10),
(84, 'Vandan Pandeji', 'Jayesh Pandeji', '524 Atlantic Street ', 'Bapu Nagar', 'NY 14043', 'Gujarat', 380015, 19, '01', 2006, 'Hindu', 'Male', '11th', 2010, 201525014686, 8),
(90, 'Het Shah', 'Haresh Shah', '524 Atlantic Street ', 'Bopal', ' NY 14043', 'Gujarat', 380015, 23, '6', 2012, 'Hindu', 'Male', '9th', 2008, 201525014692, 8),
(93, 'Dhruv Thakker', 'Syan Thakker', '474 Wild Horse Street ', 'Revdi Bazar', 'NC 27526', 'Gujarat', 380019, 23, '3', 2015, 'Hindu', 'Male', '9th', 2011, 201525014695, 8),
(97, 'Prasanth Anand Kumar Lam', 'ARUL PRAKASH K', '8182 Buttonwood Drive ', 'Paldi', ' NY 12065', 'Gujarat', 380023, 28, '2', 2002, 'Hindu', 'Male', '11th', 2012, 201525014699, 8),
(101, 'Aditya Pandeji', 'Jayesh Pandeji', '524 Atlantic Street ', 'Gujarat College', 'NY 14043', 'Gujarat', 380015, 9, '09', 2003, 'Hindu', 'Male', '9th', 2007, 201525014627, 4),
(102, 'Prasanth Anand Kumar Lam', 'ARUL PRAKASH K', '8182 Buttonwood Drive ', 'Ranip', ' NY 12065', 'Gujarat', 380023, 28, '2', 2014, 'Hindu', 'Male', '10th', 2011, 201525014615, 4),
(103, 'Het Shah', 'Haresh Shah', '524 Atlantic Street ', 'Dariapur', ' NY 14043', 'Gujarat', 380015, 23, '6', 2008, 'Hindu', 'Male', '9th', 2012, 201525014632, 4),
(104, 'Aenil Patel', 'B.G Patel', '599 Madison Road', 'Motera', 'MN 55060', 'Gujarat', 380018, 10, '12', 2014, 'Hindu', 'Male', '8th', 2010, 201525014640, 6),
(105, 'Prem Raval', 'G Raval', '8182 Buttonwood Drive ', 'Dariapur', 'NY 12065', 'Gujarat', 380021, 25, '3', 2012, 'Hindu', 'Male', '7th', 2009, 201525014637, 6),
(106, 'Abhishek Pujari', 'H.L Pujari', '22 El Dorado Drive ', 'Usmanpura', 'WI 53562', 'Gujarat', 380056, 25, '3', 2006, 'Hindu', 'Male', '8th', 2012, 201525014670, 6),
(107, 'Dhrumil Raval', 'Aashies Raval', '46 Buttonwood St.', 'Usmanpura', 'NY 11757', 'Gujarat', 380017, 2, '12', 2007, 'Hindu', 'Male', '11th', 2012, 201525014631, 3),
(108, 'Parmar Mahesh', 'B.G Parmar', '7970 Glen Ridge Lane ', 'Revdi Bazar', 'MS 39564', 'Gujarat', 380057, 23, '6', 2002, 'Hindu', 'Male', '11th', 2012, 201525014666, 3),
(109, 'Parmar Mahesh', 'B.G Parmar', '7970 Glen Ridge Lane ', 'Gujarat College', 'MS 39564', 'Gujarat', 380057, 23, '6', 2000, 'Hindu', 'Male', '11th', 2010, 201525014664, 3),
(117, 'M.Kavitha', 'RAMASUBBA REDDY M', '1 Country Street ', 'Usmanpura', 'GA 30809', 'Gujarat', 380005, 15, '06', 2011, 'Hindu', 'Male', '11th', 2010, 201525014612, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aadhaar_details`
--
ALTER TABLE `aadhaar_details`
  ADD PRIMARY KEY (`aadher_number`);

--
-- Indexes for table `admin_detail`
--
ALTER TABLE `admin_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deo`
--
ALTER TABLE `deo`
  ADD PRIMARY KEY (`deo_id`);

--
-- Indexes for table `dropout_details`
--
ALTER TABLE `dropout_details`
  ADD PRIMARY KEY (`drop_id`);

--
-- Indexes for table `school_details`
--
ALTER TABLE `school_details`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_detail`
--
ALTER TABLE `admin_detail`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `deo`
--
ALTER TABLE `deo`
  MODIFY `deo_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dropout_details`
--
ALTER TABLE `dropout_details`
  MODIFY `drop_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `school_details`
--
ALTER TABLE `school_details`
  MODIFY `school_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `student_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
