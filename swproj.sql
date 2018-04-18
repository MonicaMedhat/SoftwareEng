-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2018 at 04:05 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swproj`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `ID` int(11) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Mobile` varchar(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Nationality_ID` int(11) NOT NULL,
  `Education_ID` int(11) NOT NULL,
  `Degree_enrollment_ID` int(11) NOT NULL,
  `Apply_for_ID` int(11) NOT NULL,
  `Demand_salary` int(20) NOT NULL,
  `Starting_in` varchar(100) NOT NULL,
  `Came_From` varchar(500) NOT NULL,
  `Reason` text NOT NULL,
  `Comments` varchar(500) NOT NULL,
  `Month_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`ID`, `FullName`, `Mobile`, `Email`, `Address`, `Nationality_ID`, `Education_ID`, `Degree_enrollment_ID`, `Apply_for_ID`, `Demand_salary`, `Starting_in`, `Came_From`, `Reason`, `Comments`, `Month_ID`, `User_ID`) VALUES
(1, 'محمد حمدي سالم', '01243589721', 'mohmad@gmail.com', '5 مدينة نصر', 1, 1, 2, 1, 2000, 'الشهر القادم', 'مكتب المحامي علي احمد', 'التخصص في العمل', 'سيكون لي الشرف بالعمل مع سيادتكم', 2, 1),
(2, 'ماجد موسي ابراهيم', '01061212534', 'Maged@gmail.com', '15 شارع المنتزة هيليوبوليس ', 1, 1, 1, 1, 1500, 'الاسبوع المقبل', 'مكتب محاماة بالدقي', 'لاكتساب خبرات جديدة ', 'اني استطيع العمل تحت ضغط', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `apply_for`
--

CREATE TABLE `apply_for` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apply_for`
--

INSERT INTO `apply_for` (`ID`, `Name`) VALUES
(1, 'محامي');

-- --------------------------------------------------------

--
-- Table structure for table `approve`
--

CREATE TABLE `approve` (
  `ID` int(11) NOT NULL,
  `App_ID` int(11) NOT NULL,
  `TransactionLog_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `approve`
--

INSERT INTO `approve` (`ID`, `App_ID`, `TransactionLog_ID`) VALUES
(1, 1, 1),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `casedetails`
--

CREATE TABLE `casedetails` (
  `ID` int(11) NOT NULL,
  `Document_ID` int(11) NOT NULL,
  `Pay_O_Value_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `casedetails`
--

INSERT INTO `casedetails` (`ID`, `Document_ID`, `Pay_O_Value_ID`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `ID` int(11) NOT NULL,
  `CaseNumber` int(20) NOT NULL,
  `Tare5_raf3_eld3wa` int(11) NOT NULL,
  `Date_Of_Case_ID` int(11) NOT NULL,
  `Lawyer_ID` int(11) NOT NULL,
  `Client_ID` int(11) NOT NULL,
  `ClientType_ID` int(11) NOT NULL,
  `5esm_ID` int(11) NOT NULL,
  `CaseType_ID` int(11) NOT NULL,
  `Place_Of_Case_ID` int(11) NOT NULL,
  `CourtName_ID` int(11) NOT NULL,
  `Status_ID` int(11) NOT NULL,
  `Dayra_ID` int(11) NOT NULL,
  `CaseDetails_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`ID`, `CaseNumber`, `Tare5_raf3_eld3wa`, `Date_Of_Case_ID`, `Lawyer_ID`, `Client_ID`, `ClientType_ID`, `5esm_ID`, `CaseType_ID`, `Place_Of_Case_ID`, `CourtName_ID`, `Status_ID`, `Dayra_ID`, `CaseDetails_ID`) VALUES
(1, 12345, 2, 1, 2, 3, 2, 4, 3, 3, 2, 2, 4, 1),
(28, 5435555, 1, 2, 2, 3, 1, 4, 1, 2, 1, 2, 1, 1),
(29, 543435, 3, 3, 2, 3, 1, 4, 2, 3, 2, 1, 3, 1),
(31, 50000, 1, 1, 3, 3, 2, 3, 2, 1, 2, 2, 2, 1),
(35, 80912, 1, 1, 2, 3, 1, 4, 2, 2, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `casetype`
--

CREATE TABLE `casetype` (
  `ID` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `casetype`
--

INSERT INTO `casetype` (`ID`, `Name`) VALUES
(1, 'دستورية'),
(2, 'جنائية'),
(3, 'اسرة');

-- --------------------------------------------------------

--
-- Table structure for table `case_status`
--

CREATE TABLE `case_status` (
  `ID` int(11) NOT NULL,
  `Status` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `case_status`
--

INSERT INTO `case_status` (`ID`, `Status`) VALUES
(1, 'براءة'),
(2, 'تأجيل إلي يوم 16/10/2019');

-- --------------------------------------------------------

--
-- Table structure for table `clienttype`
--

CREATE TABLE `clienttype` (
  `ID` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clienttype`
--

INSERT INTO `clienttype` (`ID`, `Type`) VALUES
(1, 'مدعي'),
(2, 'مدعي عليه');

-- --------------------------------------------------------

--
-- Table structure for table `courtname`
--

CREATE TABLE `courtname` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courtname`
--

INSERT INTO `courtname` (`ID`, `Name`) VALUES
(1, 'محكمة الشمال'),
(2, 'محكمة الجنوب'),
(3, 'تتاتم');

-- --------------------------------------------------------

--
-- Table structure for table `date_of_case`
--

CREATE TABLE `date_of_case` (
  `ID` int(11) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `date_of_case`
--

INSERT INTO `date_of_case` (`ID`, `Date`, `Time`) VALUES
(1, '12-11-2018', '12:00 pm'),
(2, '11/12/2019', '8:00am'),
(3, '20/9/2015', '9:00 am');

-- --------------------------------------------------------

--
-- Table structure for table `degree_enrollment`
--

CREATE TABLE `degree_enrollment` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `degree_enrollment`
--

INSERT INTO `degree_enrollment` (`ID`, `Name`) VALUES
(1, 'محامي بالنقض'),
(2, 'محامي استئناف');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `ID` int(11) NOT NULL,
  `DocumentType_ID` int(11) NOT NULL,
  `احراز` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`ID`, `DocumentType_ID`, `احراز`) VALUES
(1, 2, 'فديو مسجل');

-- --------------------------------------------------------

--
-- Table structure for table `documenttype_id`
--

CREATE TABLE `documenttype_id` (
  `ID` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `documenttype_id`
--

INSERT INTO `documenttype_id` (`ID`, `Type`) VALUES
(1, 'عقود'),
(2, 'مستندات');

-- --------------------------------------------------------

--
-- Table structure for table `education_id`
--

CREATE TABLE `education_id` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `education_id`
--

INSERT INTO `education_id` (`ID`, `Name`) VALUES
(1, 'ليسانس حقوق'),
(2, 'ليسانس حقوق');

-- --------------------------------------------------------

--
-- Table structure for table `eldayra`
--

CREATE TABLE `eldayra` (
  `ID` int(11) NOT NULL,
  `Dayra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eldayra`
--

INSERT INTO `eldayra` (`ID`, `Dayra`) VALUES
(1, 40),
(2, 5),
(3, 2),
(4, 33);

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`ID`, `User_ID`, `Value`) VALUES
(1, 1, 'Nada@gmail.com'),
(2, 2, 'mm@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `expensetypes`
--

CREATE TABLE `expensetypes` (
  `ID` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expensetypes`
--

INSERT INTO `expensetypes` (`ID`, `Type`) VALUES
(1, 'غاز'),
(2, 'كهرباء');

-- --------------------------------------------------------

--
-- Table structure for table `fatora`
--

CREATE TABLE `fatora` (
  `ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fatora`
--

INSERT INTO `fatora` (`ID`, `User_ID`, `Total`) VALUES
(1, 1, 3000),
(2, 2, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `fatora_details`
--

CREATE TABLE `fatora_details` (
  `ID` int(11) NOT NULL,
  `ExpenseType_ID` int(11) NOT NULL,
  `Fatora_ID` int(11) NOT NULL,
  `Month_ID` int(11) NOT NULL,
  `Paid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fatora_details`
--

INSERT INTO `fatora_details` (`ID`, `ExpenseType_ID`, `Fatora_ID`, `Month_ID`, `Paid`) VALUES
(1, 1, 1, 1, 2000),
(2, 2, 1, 2, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `monthes`
--

CREATE TABLE `monthes` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `monthes`
--

INSERT INTO `monthes` (`ID`, `Name`) VALUES
(1, 'اكتوبر2018'),
(2, 'سبتمبر2017');

-- --------------------------------------------------------

--
-- Table structure for table `nationality`
--

CREATE TABLE `nationality` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nationality`
--

INSERT INTO `nationality` (`ID`, `Name`) VALUES
(1, 'Egyption-مصري'),
(2, 'American');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`ID`, `Name`, `Type`) VALUES
(1, 'تاريخ انتهاء الفيزا', 'int'),
(2, 'المبلغ الكلي', 'int'),
(3, 'Code', 'int'),
(4, 'رقم الحساب', 'int'),
(5, 'فرع البنك', 'string');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `ID` int(11) NOT NULL,
  `FriendlyName` varchar(255) NOT NULL,
  `PhysicalPath` varchar(1000) NOT NULL,
  `Html` mediumtext CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`ID`, `FriendlyName`, `PhysicalPath`, `Html`) VALUES
(1, 'AddCase', 'C:\\xampp\\htdocs\\SE_Project\\addCase.php', '<?php\r\n\r\n\r\nrequire (\"db.php\");\r\n\r\n $db_obj = new dbconnect;\r\n		$con = $db_obj->connect();\r\n    $con->set_charset(\"utf8\");\r\n\r\nheader(\'Content-Type: text/html; charset=utf-8\');\r\n?>\r\n<html>\r\n     <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\r\n<head>\r\n    <script src=\"jquery-3.2.1.min.js\"></script>\r\n    <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">\r\n</head>\r\n<body>\r\n   <main>\r\n       \r\n       \r\n       <img id=\"casepic\" src=\"case.png\" width=\"60px\" hight=\"60px\" onclick =\"div_show()\">\r\n       \r\n       <div  id=\"popup\" >\r\n           \r\n       \r\n       \r\n           <form  id=\"addcase\"  name=\"form\" action=\"addCase.php\" method=\"POST\" >\r\n            \r\n           <div id=\"form\" name=\"form\">\r\n          \r\n\r\n            <img id=\"close\" src=\"close.png\" width=\"40px\" hight=\"40px\" onclick =\"div_hide()\">\r\n               \r\n            <b> رقم القضية </b>\r\n            <br>\r\n            <input type =\"text\" name = \"CaseNumber\">\r\n            <br>\r\n            <br>\r\n            <b> نوع القضية </b>\r\n            <br>\r\n             <?php\r\n              \r\n               $sql=\"SELECT ID,Name FROM casetype\";\r\n	       $result=$db_obj->executesql($sql);\r\n   \r\n           echo \"<select name=\'CaseT\'>\"; // start a table tag in the HTML\r\n\r\n               while($row = mysqli_fetch_array($result)){  ?>  \r\n    \r\n                   <option value=\"<?php echo $row[\'ID\'];?>\"><?php echo $row[\'Name\']; ?></option>\r\n<!--    //$row[\'index\'] the index here is a field name-->\r\n      <?php\r\n               }\r\n\r\n               echo \"</select>\"; \r\n               ?>\r\n            <br>\r\n            <br>\r\n            <b> تاريخ رفع الدعوة </b>\r\n            <br>\r\n                <?php\r\n               $sql=\"SELECT ID,Date FROM date_of_case\";\r\n	       $result=$db_obj->executesql($sql);\r\n   \r\n           echo \" <select name=\'Date\'>\"; // start a table tag in the HTML\r\n\r\n               while($row = mysqli_fetch_array($result)){  ?>  \r\n    \r\n                   <option value=\"<?php echo $row[\'ID\'];?>\"><?php echo $row[\'Date\']; ?></option>\r\n<!--    //$row[\'index\'] the index here is a field name-->\r\n      <?php\r\n               }\r\n\r\n               echo \"</select>\"; \r\n               ?>\r\n               \r\n<!--\r\n<select name=\"Day\" id=\"d\">\r\n	<option> - Day - </option>\r\n	<option value=\"1\">1</option>\r\n	<option value=\"2\">2</option>\r\n	<option value=\"3\">3</option>\r\n	<option value=\"4\">4</option>\r\n	<option value=\"5\">5</option>\r\n	<option value=\"6\">6</option>\r\n	<option value=\"7\">7</option>\r\n	<option value=\"8\">8</option>\r\n	<option value=\"9\">9</option>\r\n	<option value=\"10\">10</option>\r\n	<option value=\"11\">11</option>\r\n	<option value=\"12\">12</option>\r\n	<option value=\"13\">13</option>\r\n	<option value=\"14\">14</option>\r\n	<option value=\"15\">15</option>\r\n	<option value=\"16\">16</option>\r\n	<option value=\"17\">17</option>\r\n	<option value=\"18\">18</option>\r\n	<option value=\"19\">19</option>\r\n	<option value=\"20\">20</option>\r\n	<option value=\"21\">21</option>\r\n	<option value=\"22\">22</option>\r\n	<option value=\"23\">23</option>\r\n	<option value=\"24\">24</option>\r\n	<option value=\"25\">25</option>\r\n	<option value=\"26\">26</option>\r\n	<option value=\"27\">27</option>\r\n	<option value=\"28\">28</option>\r\n	<option value=\"29\">29</option>\r\n	<option value=\"30\">30</option>\r\n	<option value=\"31\">31</option>\r\n</select>\r\n\r\n<select name=\"Month\" id=\"m\">\r\n	<option> - Month - </option>\r\n	<option value=\"January\">January</option>\r\n	<option value=\"Febuary\">Febuary</option>\r\n	<option value=\"March\">March</option>\r\n	<option value=\"April\">April</option>\r\n	<option value=\"May\">May</option>\r\n	<option value=\"June\">June</option>\r\n	<option value=\"July\">July</option>\r\n	<option value=\"August\">August</option>\r\n	<option value=\"September\">September</option>\r\n	<option value=\"October\">October</option>\r\n	<option value=\"November\">November</option>\r\n	<option value=\"December\">December</option>\r\n</select>\r\n\r\n<select name=\"Year\" id=\"y\">\r\n	<option> - Year - </option>\r\n	<option value=\"2018\">2018</option>\r\n	<option value=\"2019\">2019</option>\r\n	<option value=\"2020\">2020</option>\r\n	<option value=\"2021\">2021</option>\r\n	<option value=\"2022\">2022</option>\r\n</select>\r\n-->\r\n            <br>\r\n            <br>\r\n            <b> المحكمة </b>\r\n            <br>\r\n            \r\n               \r\n                 <?php\r\n               $sql=\"SELECT ID,Name FROM courtname\";\r\n	       $result=$db_obj->executesql($sql);\r\n   \r\n           echo \" <select name=\'court\'>\"; // start a table tag in the HTML\r\n\r\n               while($row = mysqli_fetch_array($result)){  ?>  \r\n    \r\n                   <option value=\"<?php echo $row[\'ID\'];?>\"><?php echo $row[\'Name\']; ?></option>\r\n<!--    //$row[\'index\'] the index here is a field name-->\r\n      <?php\r\n               }\r\n\r\n               echo \"</select>\"; \r\n               ?>\r\n               \r\n            <br>\r\n            <br>\r\n            <b> الدائرة </b>\r\n            <br>\r\n           \r\n               \r\n               \r\n                 <?php\r\n               $sql=\"SELECT ID,Dayra FROM eldayra\";\r\n	       $result=$db_obj->executesql($sql);\r\n   \r\n           echo \" <select name=\'circle\'>\"; // start a table tag in the HTML\r\n\r\n               while($row = mysqli_fetch_array($result)){  ?>  \r\n    \r\n                   <option value=\"<?php echo $row[\'ID\'];?>\"><?php echo $row[\'Dayra\']; ?></option>\r\n<!--    //$row[\'index\'] the index here is a field name-->\r\n      <?php\r\n               }\r\n\r\n               echo \"</select>\"; \r\n               ?>\r\n               \r\n            <br>\r\n            <br>\r\n            <b> معاد الجلسة </b>\r\n            <br>\r\n               <?php\r\n               $sql=\"SELECT ID,Date  FROM date_of_case\";\r\n	       $result=$db_obj->executesql($sql);\r\n   \r\n           echo \" <select name=\'Date2\'>\"; // start a table tag in the HTML\r\n\r\n               while($row = mysqli_fetch_array($result)){  ?>  \r\n    \r\n                   <option value=\"<?php echo $row[\'ID\'];?>\"><?php echo $row[\'Date\']; ?></option>\r\n<!--    //$row[\'index\'] the index here is a field name-->\r\n      <?php\r\n               }\r\n\r\n               echo \"</select>\"; \r\n               ?>\r\n               \r\n               \r\n<!--\r\n<select name=\"Day2\" id=\"d\">\r\n	<option> - Day - </option>\r\n	<option value=\"1\">1</option>\r\n	<option value=\"2\">2</option>\r\n	<option value=\"3\">3</option>\r\n	<option value=\"4\">4</option>\r\n	<option value=\"5\">5</option>\r\n	<option value=\"6\">6</option>\r\n	<option value=\"7\">7</option>\r\n	<option value=\"8\">8</option>\r\n	<option value=\"9\">9</option>\r\n	<option value=\"10\">10</option>\r\n	<option value=\"11\">11</option>\r\n	<option value=\"12\">12</option>\r\n	<option value=\"13\">13</option>\r\n	<option value=\"14\">14</option>\r\n	<option value=\"15\">15</option>\r\n	<option value=\"16\">16</option>\r\n	<option value=\"17\">17</option>\r\n	<option value=\"18\">18</option>\r\n	<option value=\"19\">19</option>\r\n	<option value=\"20\">20</option>\r\n	<option value=\"21\">21</option>\r\n	<option value=\"22\">22</option>\r\n	<option value=\"23\">23</option>\r\n	<option value=\"24\">24</option>\r\n	<option value=\"25\">25</option>\r\n	<option value=\"26\">26</option>\r\n	<option value=\"27\">27</option>\r\n	<option value=\"28\">28</option>\r\n	<option value=\"29\">29</option>\r\n	<option value=\"30\">30</option>\r\n	<option value=\"31\">31</option>\r\n</select>\r\n\r\n<select name=\"Month2\" id=\"m\">\r\n	<option> - Month - </option>\r\n	<option value=\"January\">January</option>\r\n	<option value=\"Febuary\">Febuary</option>\r\n	<option value=\"March\">March</option>\r\n	<option value=\"April\">April</option>\r\n	<option value=\"May\">May</option>\r\n	<option value=\"June\">June</option>\r\n	<option value=\"July\">July</option>\r\n	<option value=\"August\">August</option>\r\n	<option value=\"September\">September</option>\r\n	<option value=\"October\">October</option>\r\n	<option value=\"November\">November</option>\r\n	<option value=\"December\">December</option>\r\n</select>\r\n\r\n<select name=\"Year2\" id=\"y\">\r\n	<option> - Year - </option>\r\n	<option value=\"2018\">2018</option>\r\n	<option value=\"2019\">2019</option>\r\n	<option value=\"2020\">2020</option>\r\n	<option value=\"2021\">2021</option>\r\n	<option value=\"2022\">2022</option>\r\n</select>\r\n               \r\n<select name=\"Time\" id=\"T\">\r\n	<option> - Time - </option>\r\n	<option value=\"1\">1</option>\r\n	<option value=\"2\">2</option>\r\n	<option value=\"3\">3</option>\r\n	<option value=\"4\">4</option>\r\n	<option value=\"5\">5</option>\r\n	<option value=\"6\">6</option>\r\n	<option value=\"7\">7</option>\r\n	<option value=\"8\">8</option>\r\n	<option value=\"9\">9</option>\r\n	<option value=\"10\">10</option>\r\n	<option value=\"11\">11</option>\r\n	<option value=\"12\">12</option>\r\n</select>\r\n<select name=\"ampm\" id=\"a\">\r\n<option value=\"am\">AM</option>\r\n<option value=\"pm\">PM</option>\r\n</select>\r\n-->\r\n               <br>\r\n               <br>\r\n            <b> مكان الجلسة </b>\r\n            <br>\r\n           \r\n               \r\n                <?php\r\n               $sql=\"SELECT ID,Place FROM places\";\r\n	       $result=$db_obj->executesql($sql);\r\n   \r\n           echo \" <select name=\'sessionplace\'>\"; // start a table tag in the HTML\r\n\r\n               while($row = mysqli_fetch_array($result)){  ?>  \r\n    \r\n                   <option value=\"<?php echo $row[\'ID\'];?>\"><?php echo $row[\'Place\']; ?></option>\r\n<!--    //$row[\'index\'] the index here is a field name-->\r\n      <?php\r\n               }\r\n\r\n               echo \"</select>\"; \r\n               ?>\r\n               \r\n               \r\n               \r\n               \r\n            <br>\r\n            <br>\r\n            <br>\r\n            <b> التفاصيل </b>\r\n<!--             <textarea id=\"TA\" name=\"details\" rows=\"5\" cols=\"30\"></textarea>-->\r\n               \r\n                <?php\r\n               $sql=\"SELECT ID,Status FROM case_status\";\r\n	       $result=$db_obj->executesql($sql);\r\n   \r\n           echo \"<select name=\'details\'>\"; // start a table tag in the HTML\r\n\r\n               while($row = mysqli_fetch_array($result)){  ?>  \r\n    \r\n                   <option value=\"<?php echo $row[\'ID\'];?>\"><?php echo $row[\'Status\']; ?></option>\r\n<!--    //$row[\'index\'] the index here is a field name-->\r\n      <?php\r\n               }\r\n\r\n               echo \"</select>\"; \r\n               ?>\r\n               \r\n               <br>\r\n               <br>\r\n            <button class=\"m\" type=\"button\" onclick =\"form1_show(); \">التالي</button>\r\n           </div>\r\n           \r\n           \r\n           <div id=\"form1\" name=\'form1\'>\r\n            <img id=\"close\" src=\"close.png\" width=\"40px\" hight=\"40px\" onclick =\"div_hide()\">\r\n               \r\n            <b> اسم المحامي </b>\r\n            <br>\r\n          <?php\r\n               $sql=\"SELECT ID,FullName FROM User WHERE UserType_ID=2\";\r\n	       $result=$db_obj->executesql($sql);\r\n   \r\n           echo \"<select name=\'SelectLawyer\'>\"; // start a table tag in the HTML\r\n\r\n               while($row = mysqli_fetch_array($result)){  ?>  \r\n    \r\n                   <option value=\"<?php echo $row[\'ID\'];?>\"><?php echo $row[\'FullName\']; ?></option>\r\n<!--    //$row[\'index\'] the index here is a field name-->\r\n      <?php\r\n               }\r\n\r\n               echo \"</select>\"; \r\n               ?>\r\n               \r\n            <br>\r\n            <br>\r\n            <b> اسم الخصم </b>\r\n            <br>\r\n            <input type =\"text\" name = \"opponent\">\r\n             \r\n            <br>\r\n            <br>\r\n            <b> العنوان </b>\r\n            <br>\r\n            \r\n               <?php\r\n               $sql=\"SELECT ID,Place FROM places\";\r\n	       $result=$db_obj->executesql($sql);\r\n   \r\n           echo \" <select name=\'address5esm\'>\"; // start a table tag in the HTML\r\n\r\n               while($row = mysqli_fetch_array($result)){  ?>  \r\n    \r\n                   <option value=\"<?php echo $row[\'ID\'];?>\"><?php echo $row[\'Place\']; ?></option>\r\n<!--    //$row[\'index\'] the index here is a field name-->\r\n      <?php\r\n               }\r\n\r\n               echo \"</select>\"; \r\n               ?>\r\n               \r\n            <br>\r\n            <br>\r\n            <b> الهاتف </b>\r\n            <br>\r\n            <input type =\"text\" name = \"mobile5esm\">\r\n            <br>\r\n            <br>\r\n            \r\n            <br>\r\n            <br>\r\n            <button class=\"m\" type=\"button\" onclick =\"form1_hide() \">رجوع</button>\r\n            <button class=\"m\" type=\"button\" onclick =\"form2_show() \">التالي</button>\r\n           \r\n           </div>\r\n           <div id=\"form2\" name=\"form2\">\r\n            <img id=\"close\" src=\"close.png\" width=\"40px\" hight=\"40px\" onclick =\"div_hide()\">\r\n               \r\n            <b> اسم الموكل </b>\r\n            <br>\r\n           <h4 >ابحث عن الموكل هنا</h4>\r\n                <?php\r\n               $sql=\"SELECT ID,FullName FROM User WHERE UserType_ID=4\";\r\n	           $result=$db_obj->executesql($sql);\r\n   \r\n           echo \"<select name=\'SelectClient\'>\"; // start a table tag in the HTML\r\n\r\n               while($row = mysqli_fetch_array($result)){  ?>  \r\n    \r\n                   <option value=\"<?php echo $row[\'ID\'];?>\"><?php echo $row[\'FullName\']; ?></option>\r\n<!--    //$row[\'index\'] the index here is a field name-->\r\n      <?php\r\n               }\r\n\r\n               echo \"</select>\"; \r\n               ?>\r\n            <br>\r\n            <br>\r\n            <button class=\"m\" type=\"button\" onclick =\"client_show() \">اضافة موكل</button>\r\n            <br>\r\n            <br>\r\n            <button class=\"m\" type=\"button\" onclick =\"form2_hide() \">رجوع</button>\r\n            <button class=\"m\" type=\"button\" onclick =\"form3_show() \">التالي</button>\r\n           </div>\r\n           \r\n           <div id=\"client\" name=\'client\' >\r\n            <img id=\"close\" src=\"close.png\" width=\"40px\" hight=\"40px\" onclick =\"div_hide()\">\r\n               \r\n            <b> اسم </b>\r\n            <br>\r\n            <input type =\"text\" name = \"ClientName\">\r\n               <br>\r\n           <b>صفته </b>\r\n               <br>\r\n             <?php\r\n               $sql=\"SELECT ID,Type FROM clienttype\";\r\n	       $result=$db_obj->executesql($sql);\r\n   \r\n           echo \" <select name=\'Sefato\' id=\'side\'>\"; // start a table tag in the HTML\r\n\r\n               while($row = mysqli_fetch_array($result)){  ?>  \r\n    \r\n                   <option value=\"<?php echo $row[\'ID\'];?>\"><?php echo $row[\'Type\']; ?></option>\r\n<!--    //$row[\'index\'] the index here is a field name-->\r\n      <?php\r\n               }\r\n\r\n               echo \"</select>\"; \r\n               ?>\r\n            <br>\r\n            <br>\r\n            <b> العنوان </b>\r\n            <br>\r\n            \r\n               <?php\r\n               $sql=\"SELECT ID,Place FROM places\";\r\n	       $result=$db_obj->executesql($sql);\r\n   \r\n           echo \" <select name=\'addressC\'>\"; // start a table tag in the HTML\r\n\r\n               while($row = mysqli_fetch_array($result)){  ?>  \r\n    \r\n                   <option value=\"<?php echo $row[\'ID\'];?>\"><?php echo $row[\'Place\']; ?></option>\r\n<!--    //$row[\'index\'] the index here is a field name-->\r\n      <?php\r\n               }\r\n\r\n               echo \"</select>\"; \r\n               ?>\r\n               \r\n            <br>\r\n            <br>\r\n            <b> الهاتف </b>\r\n            <br>\r\n            <input type =\"text\" name = \"mobileC\">\r\n            <br>\r\n            <br>\r\n            <button class=\"m\" type=\"button\" onclick =\"client_show() \"> اوراق الموكل </button>\r\n            <br>\r\n            <br>\r\n            <button class=\"m\" type=\"button\" onclick =\"form2_show() \">رجوع</button>\r\n            <button class=\"m\" type=\"button\" onclick =\"form3_show() \">التالي</button>\r\n           </div>\r\n           \r\n           <div id=\"form3\" name=\"form3\">\r\n            <img id=\"close\" src=\"close.png\" width=\"40px\" hight=\"40px\" onclick =\"div_hide()\">\r\n               \r\n            <b> طريقة الدفع </b>\r\n            <br>\r\n            \r\n               \r\n               <?php\r\n               $sql=\"SELECT ID,Name FROM payment\";\r\n	       $result=$db_obj->executesql($sql);\r\n   \r\n           echo \" <select name=\'payment\'>\"; // start a table tag in the HTML\r\n\r\n               while($row = mysqli_fetch_array($result)){  ?>  \r\n    \r\n                   <option value=\"<?php echo $row[\'ID\'];?>\"><?php echo $row[\'Name\']; ?></option>\r\n<!--    //$row[\'index\'] the index here is a field name-->\r\n      <?php\r\n               }\r\n\r\n               echo \"</select>\"; \r\n               ?>\r\n               \r\n               \r\n               \r\n               \r\n               \r\n               \r\n               \r\n            <br>\r\n            <br>\r\n            <button class=\"m\" type=\"button\" onclick =\"form3_hide() \">رجوع</button>\r\n            <button class=\"m\" type=\"submit\">حفظ</button>\r\n               </div>\r\n    \r\n       \r\n        </form>\r\n        \r\n       </div>\r\n          \r\n       \r\n   </main> \r\n    \r\n    <script>\r\n        function div_show() {\r\n        document.getElementById(\'popup\').style.display = \"block\";\r\n        }\r\n        function form1_show() {\r\n        document.getElementById(\'form\').style.display = \"none\";\r\n        document.getElementById(\'form1\').style.display = \"block\"; \r\n        }\r\n         function form1_hide() {\r\n        document.getElementById(\'form1\').style.display = \"none\";\r\n        document.getElementById(\'form\').style.display = \"block\"; \r\n        }\r\n        function form2_show() {\r\n        document.getElementById(\'form\').style.display = \"none\";\r\n        document.getElementById(\'form1\').style.display = \"none\";\r\n        document.getElementById(\'client\').style.display = \"none\"; \r\n        document.getElementById(\'form2\').style.display = \"block\"; \r\n        }\r\n         function form2_hide() {\r\n        document.getElementById(\'form\').style.display = \"none\";\r\n         document.getElementById(\'form2\').style.display = \"none\";\r\n        document.getElementById(\'form1\').style.display = \"block\"; \r\n        }\r\n         function form3_show() {\r\n        document.getElementById(\'form\').style.display = \"none\";\r\n        document.getElementById(\'form1\').style.display = \"none\";\r\n        document.getElementById(\'form2\').style.display = \"none\";\r\n        document.getElementById(\'client\').style.display = \"none\"; \r\n        document.getElementById(\'form3\').style.display = \"block\"; \r\n        }\r\n        function form3_hide() {\r\n        document.getElementById(\'form\').style.display = \"none\";\r\n        document.getElementById(\'form1\').style.display = \"none\";\r\n        document.getElementById(\'form3\').style.display = \"none\";\r\n        document.getElementById(\'form2\').style.display = \"block\"; \r\n        }\r\n        function client_show() {\r\n        document.getElementById(\'form\').style.display = \"none\";\r\n        document.getElementById(\'form1\').style.display = \"none\";\r\n        document.getElementById(\'form2\').style.display = \"none\";\r\n        document.getElementById(\'form3\').style.display = \"none\"; \r\n        document.getElementById(\'client\').style.display = \"block\"; \r\n        }\r\n        function div_hide(){\r\n        document.getElementById(\'popup\').style.display = \"none\";\r\n        }\r\n\r\n    </script>\r\n</body>\r\n</html>\r\n'),
(2, 'index.php', '', '<!DOCTYPE html>\r\n<html>\r\n<title>Home</title>\r\n<meta charset=\"UTF-8\">\r\n<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\r\n<link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">\r\n<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Raleway\">\r\n<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">\r\n\r\n    <link rel=\"stylesheet\" type=\"text/css\" href=\"style2.css\">\r\n\r\n<body  id=\'b1\' class=\"w3-light-grey w3-content \" >\r\n\r\n<!-- Sidebar/menu -->\r\n<nav class=\"w3-sidebar w3-collapse w3-black w3-animate-right \" style=\"width:25%; right:0\"  id=\"mySidebar\"><br>\r\n  <div class=\"w3-container\"  >\r\n    <a href=\"#\" onclick=\"w3_close()\" class=\"w3-hide-large w3-left w3-jumbo w3-padding w3-hover-grey\" title=\"close menu\">\r\n      <i class=\"fa fa-remove\"></i>\r\n    </a>\r\n    <img src=\"img.jpg\" id=\"imgLogo\"  class=\"w3-round\" style=\"margin-left:150px\"><br><br>\r\n    <h4  onclick=\"location.href = \'addCaseHH.php\';\" style=\"margin-left:220px\"><b >الرئيسية</b></h4>\r\n\r\n  </div>\r\n  <div class=\"w3-bar-block\" dir=\"rtl\"  style=\"margin-left:220px\" >\r\n    <a href=\"#portfolio\" onclick=\"w3_close()\"  content=\"text/html;charset=UTF-8\" class=\"w3-bar-item w3-button w3-padding w3-text-teal\"><i class=\"fa fa-balance-scale fa-fw\" lang=\"ar\" ></i ><b>القضايا</b></a>\r\n    <a href=\"#almozfen\" onclick=\"w3_close()\" class=\"w3-bar-item w3-button w3-padding\"><i class=\"fa fa-users fa-fw \"></i><b>الموظفين</b></a>\r\n        <a href=\"secrtary.html\" onclick=\"w3_close()\" class=\"w3-bar-item w3-button w3-padding\"  style=\"margin-left:250px\"><i class=\"fa fa-calendar fa-fw \" ></i><b>السكرتارية</b></a>\r\n\r\n      <a href=\"#Agenda\" onclick=\"w3_close()\" class=\"w3-bar-item w3-button w3-padding\"  style=\"margin-left:250px\"><i class=\"fa fa-calendar fa-fw \" ></i><b>الاجندة</b></a>\r\n\r\n  </div>\r\n  <div class=\"w3-panel w3-xxlarge\" dir=\"rtl\"  style=\"margin-right:23px\">\r\n    <i class=\"fa fa-facebook-official w3-hover-opacity\"></i>\r\n\r\n    <i class=\"fa fa-twitter w3-hover-opacity\"></i>\r\n\r\n  </div>\r\n</nav>\r\n\r\n<!-- Overlay effect when opening sidebar on small screens -->\r\n<div class=\"w3-overlay w3-hide-large w3-animate-opacity\" onclick=\"w3_close()\" style=\"cursor:pointer\" title=\"close side menu\" id=\"myOverlay\"></div>\r\n\r\n<!-- !PAGE CONTENT! -->\r\n<div class=\"w3-main\" style=\"margin-right:330px\">\r\n\r\n  <!-- Header -->\r\n  <header id=\"portfolio\">\r\n\r\n   <div class=\"w3-container\">\r\n        <h1 style=\"margin-left:900px\" ><b>القضايا</b></h1>\r\n\r\n    </div>\r\n  </header>\r\n\r\n  <!-- First Photo Grid-->\r\n  <div class=\"w3-row-padding\">\r\n    <div class=\"w3-third w3-container w3-margin-bottom\">\r\n\r\n      <div  onclick=\"location.href = \'addCaseHH.php\';\" class=\"w3-container w3-white\">\r\n        <h2><b class=\"fa fa-paperclip\"> اضافة قضية جديدة</b></h2>\r\n\r\n      </div>\r\n    </div>\r\n    <div class=\"w3-third w3-container w3-margin-bottom\">\r\n      <div onclick=\"location.href = \'cases.php\';\" class=\"w3-container w3-white\">\r\n         <h2><b class=\"fa fa-file-text\" > اظهار قضية</b></h2>\r\n\r\n      </div>\r\n    </div>\r\n    <div class=\"w3-third w3-container\">\r\n\r\n      <div  class=\"w3-container w3-white\">\r\n         <h2><b  class=\"fa fa-times\" > مسح قضية</b></h2>\r\n\r\n      </div>\r\n    </div>\r\n  </div>\r\n\r\n  <!-- Second Photo Grid-->\r\n  <div class=\"w3-row-padding\">\r\n    <div class=\"w3-third w3-container w3-margin-bottom\">\r\n\r\n      <div onclick=\"location.href = \'fees.php\';\" class=\"w3-container w3-white\">\r\n        <h2><b class=\"fa fa-money\"> اتعاب قضية</b></h2>\r\n      </div>\r\n    </div>\r\n    <div class=\"w3-third w3-container w3-margin-bottom\">\r\n\r\n      <div onclick=\"location.href = \'Bill.php\';\" class=\"w3-container w3-white\">\r\n         <h2><b  class=\"fa fa-money\"> مصاريف قضية</b></h2>\r\n      </div>\r\n    </div>\r\n    <div class=\"w3-third w3-container\">\r\n\r\n      <div class=\"w3-container w3-white\">\r\n         <h2><b  class=\"fa fa-calendar-o\"> مفكرة</b></h2>\r\n\r\n      </div>\r\n    </div>\r\n  </div>\r\n\r\n <div id=\"almozfen\">\r\n     <h1  style=\"margin-left:890px\" class=\"w3-row-padding\"><b>الموظفين</b></h1>\r\n\r\n    <div class=\"w3-row-padding\">\r\n    <div class=\"w3-third w3-container w3-margin-bottom\">\r\n\r\n      <div class=\"w3-container w3-white\">\r\n        <h2><b class=\"fa fa-user-plus\"> اظهار طلب التوظيف</b></h2>\r\n\r\n      </div>\r\n    </div>\r\n    <div class=\"w3-third w3-container w3-margin-bottom\">\r\n      <div onclick=\"location.href = \'lawyer.html\';\" class=\"w3-container w3-white\">\r\n        <h2><b class=\"fa fa-user-plus\"> تعديل بيانات محامي</b></h2>\r\n\r\n      </div>\r\n    </div>\r\n    <div class=\"w3-third w3-container\">\r\n\r\n      <div class=\"w3-container w3-white\">\r\n         <h2><b  class=\"fa fa-times\" > مسح موظف</b></h2>\r\n\r\n      </div>\r\n    </div>\r\n  </div>\r\n\r\n  <!-- Second Photo Grid-->\r\n  <div class=\"w3-row-padding\">\r\n    <div class=\"w3-third w3-container w3-margin-bottom\">\r\n\r\n      <div class=\"w3-container w3-white\">\r\n        <h2><b class=\"fa fa-money\"> مرتبات</b></h2>\r\n      </div>\r\n    </div>\r\n    <div class=\"w3-third w3-container w3-margin-bottom\">\r\n\r\n      <div class=\"w3-container w3-white\">\r\n         <h2><b  class=\"fa fa-money\"> مصاريف</b></h2>\r\n      </div>\r\n    </div>\r\n    <div class=\"w3-third w3-container\">\r\n\r\n      <div class=\"w3-container w3-white\">\r\n         <h2><b  class=\"fa fa-calendar-o\"> مفكرة</b></h2>\r\n\r\n      </div>\r\n    </div>\r\n  </div>\r\n    </div>\r\n\r\n\r\n\r\n\r\n  <!-- Footer -->\r\n  <footer class=\"w3-container w3-padding-32 w3-dark-grey\" id=\"footer\">\r\n  <div class=\"w3-row-padding w3-xlarge \">\r\n    <div class=\"w3-second\">\r\n\r\n\r\n    </div>\r\n      <div id=\"Agenda\"class=\"w3-third\">\r\n          <h3>اجندة</h3>\r\n    </div>\r\n  <!-- -------------------------------------message---------------------------->\r\n    <div class=\"w3-third\">\r\n      <div class=\"bgimg w3-display-container w3-text-white\">\r\n <div class=\"w3-display-topleft w3-container w3-xlarge\">\r\n\r\n    <p><button onclick=\"document.getElementById(\'contact\').style.display=\'block\'\" style=\"margin-left:500px\"class=\"w3-button w3-black\">رسالة</button></p>\r\n  </div>\r\n        </div>\r\n\r\n        <!-- Contact Modal -->\r\n<div id=\"contact\" class=\"w3-modal\">\r\n  <div class=\"w3-modal-content w3-animate-zoom\">\r\n    <div class=\"w3-container w3-black\">\r\n      <span onclick=\"document.getElementById(\'contact\').style.display=\'none\'\" class=\"w3-button w3-display-topright w3-large\">x</span>\r\n      <h1>رسالة</h1>\r\n    </div>\r\n    <div class=\"w3-container\">\r\n      \r\n      <form action=\"/action_page.php\" target=\"_blank\">\r\n          <p><input class=\"w3-input w3-padding-16 w3-border\" type=\"text\" placeholder=\"الرسالة..\" required name=\"Message\"></p>\r\n        <p><input class=\"w3-input w3-padding-16 w3-border\" type=\"datetime-local\" placeholder=\"Date and time\" required name=\"date\" value=\"2017-11-16T20:00\"></p>\r\n      \r\n        <p><button class=\"w3-button\" type=\"submit\">إرسال الرسالة</button></p>\r\n      </form>\r\n    </div>\r\n  </div>\r\n</div>\r\n\r\n\r\n    </div>\r\n\r\n\r\n\r\n  </div>\r\n  </footer>\r\n\r\n  <div class=\"w3-black w3-center w3-padding-24\">&copy; Copyright </div>\r\n\r\n<!-- End page content -->\r\n</div>\r\n\r\n<script>\r\n// Script to open and close sidebar\r\nfunction w3_open() {\r\n    document.getElementById(\"mySidebar\").style.display = \"block\";\r\n    document.getElementById(\"myOverlay\").style.display = \"block\";\r\n}\r\n\r\nfunction w3_close() {\r\n    document.getElementById(\"mySidebar\").style.display = \"none\";\r\n    document.getElementById(\"myOverlay\").style.display = \"none\";\r\n}\r\n</script>\r\n\r\n</body>\r\n</html>\r\n'),
(3, 'main.html', '', '<!DOCTYPE html>\r\n<html>\r\n<title>Home</title>\r\n<meta charset=\"UTF-8\">\r\n<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\r\n<link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">\r\n<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Raleway\">\r\n<style>\r\nbody,h1,h5 {font-family: \"Raleway\", sans-serif}\r\nbody, html {height: 100%}\r\n.bgimg {\r\n    background-image: url(\'img2.jpg\');\r\n    min-height: 100%;\r\n    background-position: center;\r\n    background-size: cover;\r\n}\r\n</style>\r\n<body>\r\n\r\n<div class=\"bgimg w3-display-container w3-text-white\">\r\n  <div class=\"w3-display-middle w3-jumbo\">\r\n    <img src=\"img.jpg\" id=\"imgLogo\"  class=\"w3-circle\"  style=\"position: center;margin-top: 150px;\"><br><br>\r\n  </div>\r\n  <div class=\"w3-display-topright w3-container w3-xlarge\">\r\n    \r\n    <p><button onclick=\"document.getElementById(\'contact\').style.display=\'block\'\" class=\"w3-button w3-black \">تسجيل الدخول</button></p>\r\n  </div>\r\n  <div class=\"w3-display-bottomright w3-container\">\r\n<!--\r\n    <script>  n =  new Date();\r\ny = n.getFullYear();\r\nm = n.getMonth() + 1;\r\nd = n.getDate();\r\ndocument.getElementById(\"date\").innerHTML = m + \"/\" + d + \"/\" + y;\r\n        </script>\r\n\r\n<p id=\"date\" dir=\"rtl\" class=\"w3-xlarge\"></p>\r\n-->\r\n     <h2 dir=\"rtl\" class=\"w3-xxlarge\"><b>المستشار : مدحت الغندور</b> </h2>\r\n    \r\n    <p class=\"w3-xxlarge\"><b>١٦٣ شارع النزهة -مصر الجديدة</b></p>\r\n   \r\n  </div>\r\n</div>\r\n\r\n\r\n\r\n<!-- Contact Modal -->\r\n<div id=\"contact\" class=\"w3-modal\" >\r\n  <div class=\"w3-modal-content w3-animate-zoom\">\r\n    <div class=\"w3-container w3-black\">\r\n      <span onclick=\"document.getElementById(\'contact\').style.display=\'none\'\" class=\"w3-button w3-display-topright w3-large\">x</span>\r\n      <h1>Contact</h1>\r\n    </div>\r\n    <div class=\"w3-container\">\r\n      \r\n      <form action=\"/action_page.php\" target=\"_blank\">\r\n       <h1> تسجيل الدخول </h1>\r\n\r\n<b> البريد الألكتروني </b>\r\n<br>\r\n<input type = \"text\" name = \"Email\">\r\n<br>\r\n<br>\r\n<b> كلمة السر </b>\r\n<br>\r\n<input type = \"Password\" name = \"password\">\r\n<br>\r\n<br>\r\n<input class=\"m\" type=\"submit\" value=\"دخول\" id=\"loginbtn\">\r\n<button class=\"m\" type=\"Reset\">اعادة</button>\r\n      </form>\r\n    </div>\r\n  </div>\r\n</div>\r\n\r\n</body>\r\n</html>\r\n\r\n'),
(4, 'applications.php', '', '<?php\r\n//require(\"application.php\");\r\nrequire (\"db.php\");\r\n\r\n$db_obj = new dbconnect;\r\n$con = $db_obj->connect();\r\n?>\r\n<!-- saved from url=(0042)file:///C:/Users/Amer/Desktop/new%202.html -->\r\n<html>\r\n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\r\n<body>\r\n<img src=\"123.jpg\" alt=\"logo\" />\r\n<center style=\" font-size : 30px;\">استماره طلب وظيفه</center>\r\n<form action=\"application.php\" method=\"POST\">\r\n<fieldset>\r\n<legend>البيانات الشخصيه </legend>\r\n<div style=\"padding-bottom: 18px;\">الاسم الثلاثى <br>\r\n<input type=\"text\" id=\"data_1\" name=\"FullName\" style=\"width: 450px;\" class=\"form-control\">\r\n</div>\r\n<div style=\"padding-bottom: 18px;\">رقم الموبيل <br>\r\n<input type=\"text\" id=\"data_3\" name=\"Mobile\" style=\"width : 450px;\" class=\"form-control\">\r\n</div>\r\n<div style=\"padding-bottom: 18px;\">البريد الاكترونى <br>\r\n<input type=\"text\" id=\"data_12\" name=\"E-mail\" style=\"width : 450px;\" class=\"form-control\">\r\n</div>\r\n<div style=\"padding-bottom: 18px;\">العنوان <br>\r\n<input type=\"text\" id=\"data_13\" name=\"Address\" style=\"width : 450px;\" class=\"form-control\">\r\n</div>\r\n<div style=\"padding-bottom: 18px;\">الجنسيه <br>\r\n<input type=\"text\" id=\"data_14\" name=\"Nationality\" style=\"width : 450px;\" class=\"form-control\">\r\n</div>\r\n</fieldset>\r\n\r\n<fieldset>\r\n<legend>خاص بالتوظيف </legend>\r\n<div style=\"padding-bottom: 18px;\">الجهه الدراسيه <br>\r\n<input type=\"text\" id=\"data_11\" name=\"Education\" style=\"width : 450px;\" class=\"form-control\">\r\n</div>\r\n<div style=\"padding-bottom: 18px;\">درجه القيد<br>\r\n<input type=\"text\" id=\"data_10\" name=\"Degree_enrollment\" style=\"width : 450px;\" class=\"form-control\">\r\n</div>\r\n<div style=\"padding-bottom: 18px;\">الوظيفه المقدم عليها<br>\r\n<input type=\"text\" id=\"data_5\" name=\"Apply_for\" style=\"width : 450px;\" class=\"form-control\">\r\n</div>\r\n<div style=\"padding-bottom: 18px;\">المرتب المطلوب<br>\r\n<input type=\"text\" id=\"data_6\" name=\"Demand_salary\" style=\"width : 450px;\" class=\"form-control\">\r\n</div>\r\n<div style=\"padding-bottom: 18px;\">متى يمكن البدء فى العمل <br>\r\n<input type=\"text\" id=\"data_7\" name=\"Starting_in\" style=\"width : 450px;\" class=\"form-control\">\r\n</div>\r\n<div style=\"padding-bottom: 18px;\">جهه العمل السابقه<br>\r\n<input type=\"text\" id=\"data_8\" name=\"Came_From\" style=\"width : 450px;\" class=\"form-control\">\r\n</div>\r\n<div style=\"padding-bottom: 18px;\">سبب ترك العمل السابق<br>\r\n<input type=\"text\" id=\"data_9\" name=\"Reason\" style=\"width : 450px;\" class=\"form-control\">\r\n</div>\r\n</fieldset>\r\n\r\n<fieldset>\r\n<legend>تعليق </legend>\r\n<textarea id=\"data_9\" false=\"\" name=\"Comments\" style=\"width : 450px;\" rows=\"6\" class=\"form-control\"></textarea>\r\n</fieldset>\r\n<div style=\"padding-bottom: 18px;\">التاريخ <br>\r\n<input type=\"text\" id=\"data_15\" name=\"Date\" style=\"width : 450px;\" class=\"form-control\">\r\n</div>\r\n\r\n\r\n<div style=\"padding-bottom: 18px;\"><input name=\"Submit\" value=\"تمت\" type=\"Submit\"></div>\r\n\r\n</form></body></html>\r\n'),
(5, 'addLawyer', '', '\r\n<?php include(\'serve.php\');\r\n\r\n\r\n\r\n//fetch data to be updated\r\nif(isset($_GET[\'edit\'])){\r\n	$id=$_GET[\'edit\'];\r\n	$sql=\"select * from user where id=$id\";\r\n	//echo $sql;\r\n	$rec=mysqli_query($con, $sql);\r\n	$record=mysqli_fetch_array($rec);\r\n	$ID=$record[\'ID\'];\r\n	$FullName=$record[\'FullName\'];\r\n	$Email=$record[\'Email\'];\r\n	$Password=$record[\'Password\'];\r\n	$mobile=$record[\'mobile\'];\r\n	$UserType_id=$record[\'UserType_id\'];\r\n	\r\n}\r\n\r\n ?>\r\n<!DOCTYPE html>\r\n<html>\r\n<head>\r\n<script src=\"https://code.jquery.com/jquery-1.12.4.min.js\"></script>\r\n<script type=\"text/javascript\">\r\n$(document).ready(function(){\r\n    $(\'.search-box input[type=\"text\"]\').on(\"keyup input\", function(){\r\n        /* Get input value on change */\r\n        var inputVal = $(this).val();\r\n        var resultDropdown = $(this).siblings(\".result\");\r\n        if(inputVal.length){\r\n            $.get(\"backend-search.php\", {ID: inputVal}).done(function(data){\r\n                // Display the returned data in browser\r\n                resultDropdown.html(data);\r\n            });\r\n        } else{\r\n            resultDropdown.empty();\r\n        }\r\n    });    \r\n    \r\n});\r\n</script>\r\n<title>add data for employee</title>\r\n</head>\r\n<body>\r\n<table>\r\n<thead>\r\n<tr>\r\n<th>ID</th>\r\n<th>FullName</th>\r\n<th>Email</th>\r\n<th>Password</th>\r\n<th>mobile</th>\r\n<th>UserType_id</th>\r\n<th colspan=\"2\">Actions</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<?php while($row = mysqli_fetch_array($results)){ ?>\r\n<tr>\r\n<td><?php echo  $row[\'ID\']; ?></td>\r\n<td><?php echo  $row[\'FullName\']; ?></td>\r\n<td><?php echo  $row[\'Email\']; ?></td>\r\n<td><?php echo  $row[\'Password\']; ?></td>\r\n<td><?php echo  $row[\'mobile\']; ?></td>\r\n<td><?php echo  $row[\'UserType_id\']; ?></td>\r\n<td>\r\n<a class=\"edit\" href =\"indo.php?edit=<?php echo $row[\'ID\']; ?>\">edit</a>\r\n</td>\r\n\r\n</tr>\r\n<?php } ?>\r\n\r\n</tbody>\r\n</table>\r\n\r\n<form method=\"POST\" action=\"serve.php\">\r\n<input type= \"hidden\" name=\"id\" value=\"<?php echo $id; ?>\">\r\n<div class=\"input-group\">\r\n<label>ID</label>\r\n<input type =\"text\"name=\"ID\" value=\"<?php echo $ID; ?>\">\r\n<br>\r\n</div>\r\n<br>\r\n<div class =\"input-group\">\r\n<label>FullName</label>\r\n<input type =\"text\" name=\"FullName\" value=\"<?php echo $FullName; ?>\">\r\n\r\n</div>\r\n<br>\r\n<div class=\"input-group\">\r\n<label>Email</label>\r\n<input type =\"text\"name=\"Email\" value=\"<?php echo $Email; ?>\">\r\n\r\n</div>\r\n<br>\r\n<div class=\"input-group\">\r\n<label>Password</label>\r\n<input type =\"text\"name=\"Password\" value=\"<?php echo $Password; ?>\">\r\n\r\n</div>\r\n<br>\r\n<div class=\"input-group\">\r\n<label>mobile</label>\r\n<input type =\"text\"name=\"mobile\" value=\"<?php echo $mobile; ?>\">\r\n\r\n</div>\r\n<br>\r\n<div class=\"input-group\">\r\n<label>UserType_id</label>\r\n<input type =\"text\"name=\"UserType_id\" value=\"<?php echo $UserType_id; ?>\">\r\n\r\n</div>\r\n<br>\r\n<div class=\"input-group\">\r\n<button type =\"submit\" name=\"save\" class=\"btn\">save</button>\r\n<button type =\"submit\" name=\"update\" class=\"btn\">update</button>\r\n<button type =\"submit\" name=\"delete\" class=\"btn\">delete</button>\r\n    \r\n</form>\r\n\r\n</div>\r\n<br>\r\n\r\n <style>\r\n            table,tr,th,td\r\n            {\r\n                border: 1px solid black;\r\n            }\r\n        </style>\r\n    </head>\r\n    <body>\r\n	<div class=\"search-box\">\r\n        <input type=\"text\" placeholder=\"Search Name...\" />\r\n        <div class=\"result\"></div>\r\n    </div>\r\n                    \r\n\r\n           <form action=\"indo.php\" method=\"POST\">\r\n			\r\n\r\n            \r\n\r\n            <table>\r\n                <tr>\r\n                    <th>Id</th>\r\n                    <th>FullName</th>\r\n                    <th>Email</th>\r\n                    <th>Password</th>\r\n					<th>mobile</th>\r\n					<th>UserType_id</th>\r\n                </tr>\r\n\r\n      \r\n                \r\n            </table>\r\n</form>\r\n</body>\r\n</html>\r\n\r\n'),
(6, 'fees', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n<link rel=\"stylesheet\" href=\"Bill.css\">\r\n<title>Lawyer Information</title>\r\n</head>\r\n<body>\r\n<header>\r\n<div class=\"container\">\r\n   <h1> رسوم القضية</h1>\r\n   </div>\r\n<div class=\"header\">\r\n\r\n</div>\r\n</header>\r\n<br>\r\n<input type=\"text\"name=\"بحث\">\r\n<button type=\"button\" onclick=\"(\'بحث\')\">بحث</button>\r\n<br>\r\n<br>\r\n<br>\r\n<table align=\"center\">\r\n<table border=\"1\">\r\n<tr>\r\n<th>اجمالي المبلغ المدفوع</th>\r\n<th>تاريخ السداد</th>\r\n<th>الرسم للدفع</th>\r\n<th>نوع القضية</th>\r\n<th>اسم الموكل</th>\r\n\r\n\r\n</tr>\r\n<tr>\r\n<td>2500</td>\r\n<td>20/1/2018</td>\r\n<td>500</td>\r\n<td>جنائية</td>\r\n<td>محمد ابراهيم</td>\r\n\r\n\r\n</tr>\r\n<tr>\r\n<td>5000</td>\r\n<td>3/11/2017</td>\r\n<td>700</td>\r\n<td>اسرة</td>\r\n<td>محمد ابراهيم</td>\r\n</tr> \r\n\r\n\r\n\r\n\r\n</table>\r\n<br>\r\n<center style=\"padding-bottom: 30px\"><input name=\"Submit\" value=\"تمت العمليه بنجاح\" type=\"Submit\"></center>\r\n<br>\r\n<footer> Copyright © 2018</footer>\r\n    </table>\r\n</body>\r\n</html>\r\n\r\n'),
(7, 'secrtary', '', '<!DOCTYPE>\r\n<html>\r\n<head>\r\n<title>Sectary Information</title>\r\n<style>\r\n\r\ndiv.container {\r\n     width: 100%;\r\n     border: 1px black;\r\n    \r\n\r\n}\r\n\r\ndiv.header {\r\n\r\n  position:center;\r\n  float: center;\r\n  width:100%;\r\n  height:100%;\r\n  opacity:0.65;\r\n\r\n}\r\n\r\nheader, footer {\r\n   \r\n    height: 5%;\r\n    padding: 2em;\r\n    color: white;\r\n    background-color: black;\r\n    clear: left;\r\n    text-align: center;\r\n}\r\n\r\nbody\r\n{\r\nfont-family: sans-serif;\r\nfont-size: 11pt;\r\n}\r\n\r\n\r\ntable\r\n{\r\nposition:center;\r\npadding:center;\r\nborder: 1px solid:black;\r\nborder-collapse:collapse;\r\nopacity: 0.95;\r\nwidth:100%;\r\n\r\n\r\n}\r\n\r\nth,td\r\n{\r\npadding:10px;\r\ntext-align:center;\r\n}\r\n\r\ntr:nth-child(even)\r\n{\r\nbackground-color:#e6e6e6;\r\n}\r\n\r\n\r\ntr:nth-child(odd)\r\n{\r\nbackground-color:white;\r\n}\r\n\r\n</style>\r\n</head>\r\n<body>\r\n<header>\r\n<div class=\"container\">\r\n   <h1>السكرتريه</h1>\r\n   </div>\r\n<div class=\"header\">\r\n<img src=\"123.jpg\" alt=\"logo\" />\r\n</div>\r\n</header>\r\n<br>\r\n<br>\r\n<input type=\"text\"name=\"بحث\">\r\n<button type=\"button\" onclick=\"(\'بحث\')\">بحث</button>\r\n<br>\r\n<br>\r\n<br>\r\n<table align=\"center\">\r\n<table border=\"1\">\r\n<tr>\r\n\r\n<th>التعليق</th>\r\n<th>الموعد</th>\r\n<th>اسم العميل</th>\r\n</tr>\r\n<tr>\r\n\r\n<td>لا تعليق</td>\r\n<td>يوم الاثلالثاء مساءا</td>\r\n<td>روان حسام الدين</td>\r\n</tr>\r\n<tr>\r\n\r\n<td>موعد عاجل</td>\r\n<td>يوم الاربعاء مساءا</td>\r\n<td>سارة ناجى على</td>\r\n</tr>\r\n<tr>\r\n<td>لا تعليق</td>\r\n<td>يوم الخميس مساءا</td>\r\n<td>احمد محمد</td>\r\n</tr>\r\n<tr>\r\n\r\n<td>اول مره استشاره</td>\r\n<td>يوم الاحد مساءا</td>\r\n<td>كريم وحيد</td>\r\n</tr>\r\n</table>\r\n<br>\r\n<center style=\"padding-bottom: 30px\"><input name=\"Submit\" value=\"تمت العمليه بنجاح\" type=\"Submit\"></center>\r\n<br>\r\n<br>\r\n<input type=\"text\"name=\"بحث\">\r\n<button type=\"button\" onclick=\"(\'ارسال\')\">ارسال</button>\r\n<br>\r\n<br>\r\n<br>\r\n<br>\r\n<br>\r\n<footer>Copyright © 2018</footer>\r\n    </table>\r\n</body>\r\n</html>\r\n\r\n\r\n\r\n'),
(8, 'Bills', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n<link rel=\"stylesheet\" href=\"Bill.css\">\r\n<title>Lawyer Information</title>\r\n</head>\r\n<body>\r\n<header>\r\n<div class=\"container\">\r\n   <h1>مصروفات المكتب</h1>\r\n   </div>\r\n<div class=\"header\">\r\n</div>\r\n<div id = \"mypic\" img src=\"123.jpg\" alt=\"logo\" />\r\n    \r\n    \r\n\r\n\r\n\r\n</header>\r\n\r\n<br>\r\n<input type=\"text\"name=\"بحث\">\r\n<button type=\"button\" onclick=\"(\'بحث\')\">بحث</button>\r\n<br>\r\n<br>\r\n<br>\r\n<table align=\"center\">\r\n<table border=\"1\">\r\n<tr>\r\n\r\n\r\n<th>مصروفات آخرى</th>\r\n<th>نور</th>\r\n<th>مياه</th>\r\n<th>كهرباء</th>\r\n<th>مرتبات العاملين</th>\r\n\r\n\r\n\r\n\r\n</tr>\r\n<tr>\r\n<td>-</td>\r\n<td>-</td>\r\n<td>-</td>\r\n<td>-</td>\r\n<td>-</td>\r\n\r\n\r\n</tr>\r\n<tr>\r\n<td>-</td>\r\n<td>-</td>\r\n<td>-</td>\r\n<td>-</td>\r\n<td>-</td>\r\n\r\n\r\n</tr> \r\n<tr>\r\n<td>-</td>\r\n<td>-</td>\r\n<td>-</td>\r\n<td>-</td>\r\n<td>-</td>\r\n\r\n\r\n</tr> \r\n<tr>\r\n<td>-</td>\r\n<td>-</td>\r\n<td>-</td>\r\n<td>-</td>\r\n<td>-</td>\r\n\r\n\r\n</tr> \r\n</table>\r\n<br>\r\n<center style=\"padding-bottom: 30px\"><input name=\"Submit\" value=\"تمت العمليه بنجاح\" type=\"Submit\"></center>\r\n<br>\r\n<footer>Copyright © 2018 </footer>\r\n    </table>\r\n</body>\r\n</html>\r\n\r\n');
INSERT INTO `pages` (`ID`, `FriendlyName`, `PhysicalPath`, `Html`) VALUES
(9, 'View_cases', '', '<?php\r\n\r\nrequire_once (\"db.php\");\r\n\r\n $db_obj = new dbconnect;\r\n		$con = $db_obj->connect();\r\n    $con->set_charset(\"utf8\");\r\n\r\nheader(\'Content-Type: text/html; charset=utf-8\');\r\n       \r\n        \r\n        ?>\r\n\r\n\r\n\r\n\r\n\r\n<html>\r\n    \r\n    <?php\r\n\r\n\r\n//require (\"db.php\");\r\n\r\n $db_obj = new dbconnect;\r\n		$con = $db_obj->connect();\r\n    $con->set_charset(\"utf8\");\r\n\r\nheader(\'Content-Type: text/html; charset=utf-8\');\r\n?>\r\n    \r\n    \r\n    <head>\r\n        <title><h1> قضايا </h1></title>\r\n        <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">\r\n    </head>\r\n    \r\n<body>\r\n    <header>\r\n    </header>\r\n    \r\n    <main>\r\n        \r\n        \r\n       \r\n         <form id=\"search\" method=\"POST\" action=\"<?php echo htmlspecialchars($_SERVER[\"PHP_SELF\"]); ?>\">\r\n             <div id=\"search\">\r\n<!--             <input type=\"text\" name=\"Search\"id=\"text\" placeholder=\"Search for names..\" onkeyup=\"myFunction()\">-->\r\n            <input type=\"text\" name=\"Search\"id=\"text\" placeholder=\"بحث...\">\r\n             <?php\r\n              if($_SERVER[\"REQUEST_METHOD\"]==\"POST\")\r\n        {\r\n            $s=$_POST[\"Search\"];\r\n           $sql=\"SELECT ID,FullName FROM User WHERE FullName Like \'\".$s.\"\' \";\r\n	       $result=$db_obj->executesql($sql);\r\n           echo \"<select name=\'SelectCase\'>\"; \r\n                  while($row = mysqli_fetch_array($result)){  ?>  \r\n                   <option value=\"<?php echo $row[\'ID\'];?>\"><?php echo $row[\'FullName\']; ?></option>\r\n             <?php\r\n               }\r\n                  echo \"</select>\";                 \r\n                  \r\n                 //$selectSQL =\"SELECT * FROM cases \";           \r\n              }\r\n  \r\n             ?>\r\n                 </div>\r\n             \r\n             \r\n             <div name=\"cases\">\r\n            <?php\r\n             //$selectSQL = \'SELECT CaseNumber,case_status.Status FROM `cases`JOIN case_status ON cases.Status_ID=case_status.ID\';\r\n                 $selectSQL=\"\r\nSELECT Status,CaseNumber,T1.FullName As 5esm,T2.FullName AS Lawyer ,T3.FullName AS Client, T4.Date As Date , T5.Time As Time ,T6.Dayra AS Dayra ,T7.Name As Name,T8.Place As Place,T9.Date As Date2,T10.Name AS Type  From cases c1\r\nINNER JOIN case_status\r\n	ON case_status.ID=c1.Status_ID\r\nINNER JOIN user T1\r\n	ON T1.ID=c1.5esm_ID\r\nINNER JOIN user T2\r\n	ON T2.ID=c1.Lawyer_ID\r\nINNER JOIN user T3\r\n	ON T3.ID=c1.Client_ID\r\nINNER JOIN date_of_case T4\r\n	ON T4.ID=c1.Date_Of_Case_ID\r\nINNER JOIN date_of_case T5\r\n	ON T5.ID=c1.Date_Of_Case_ID\r\nINNER JOIN eldayra T6\r\n	ON T6.ID=c1.Dayra_ID \r\nINNER JOIN courtname T7\r\n	ON T7.ID=c1.CourtName_ID  \r\nINNER JOIN places T8\r\n	ON T8.ID=c1.Place_Of_Case_ID  \r\nINNER JOIN date_of_case T9\r\n	ON T9.ID=c1.Tare5_raf3_eld3wa \r\nINNER JOIN casetype T10\r\n	ON T10.ID=c1.CaseType_ID  \r\n    \";\r\n                // $select2=\"SELECT FullName FROM user INNER JOIN cases ON cases.5esm_ID=user.ID\";\r\n                // $selectSQL =\"SELECT * FROM cases \"; \r\n                 $result=$db_obj->executesql($selectSQL);\r\n                // $res2=$db_obj->executesql($select2);\r\n                 \r\n # Execute the SELECT Query\r\n  \r\n    ?>\r\n        \r\n        \r\n        <table id=\"casetable\">\r\n            <thead>\r\n              <tr>\r\n                <th>   القرار   </th>\r\n                <th>  ما تم في الجلسة السابقة   </th>\r\n                  <th>  ما تم في الجلسة   </th>\r\n                   <th>الخصم و صفتة</th>\r\n                  <th>اسم الموكل و صفتة</th>\r\n                  <th>اسم المحامي المسؤول</th>\r\n                   <th>معاد الجلسة</th>\r\n                   <th>الدائرة</th>\r\n                   <th>المحكمة</th>\r\n                  <th>مكان المحكمة</th>\r\n                  <th>تاريخ رفع القضية</th>\r\n                   <th>نوع قضية  </th> \r\n                  <th>رقم القضية</th>\r\n               </tr>\r\n                </thead>\r\n            <tbody>\r\n    <?php\r\n      \r\n       \r\n                  while($row = mysqli_fetch_array($result)){   \r\n                echo \"<tr><td>{$row[\'Status\']}</td><td>{$row[\'Status\']}</td><td>{$row[\'Status\']}</td><td>{$row[\'5esm\']}</td><td>{$row[\'Client\']}</td><td>{$row[\'Lawyer\']}</td><td>{$row[\'Date\']}AT: {$row[\'Time\']}</td><td>{$row[\'Dayra\']}</td><td>{$row[\'Name\']}</td><td>{$row[\'Place\']}</td><td>{$row[\'Date2\']}</td><td>{$row[\'Type\']}</td><td>{$row[\'CaseNumber\']}</td>\";\r\n                      ?>\r\n                \r\n                <?php\r\n                    echo \" </tr>\";\r\n                \r\n                     \r\n                      \r\n                   //echo \"<tr><td>{$row[\'name\']}</td><td>{$row[\'addr1\']}</td><td>{$row[\'addr2\']}</td><td>{$row[\'mail\']}</td></tr>\\n\"; \r\n                  \r\n           \r\n               }\r\n                                  \r\n  \r\n      \r\n  \r\n    ?>\r\n  </tbody>\r\n<!--\r\n              <tr>\r\n                <td></td>\r\n                <td><button class=\"m\" id=\"prevdetails\" type=\"button\"  >اكتب\\اظهر</button></td>\r\n                <td><button class=\"m\" id=\"details\" type=\"button\" >اكتب\\اظهر</button></td>\r\n                <td></td> \r\n                <td></td>\r\n                <td></td>\r\n                <td></td> \r\n                <td></td>\r\n                <td></td>\r\n                <td></td> \r\n                <td></td>\r\n                <td></td>\r\n             </tr>\r\n             <tr>\r\n                <td></td>\r\n                <td><button class=\"m\" id=\"prevdetails\" type=\"button\" >اكتب\\اظهر</button></td>\r\n                <td><button class=\"m\" id=\"details\" type=\"button\" >اكتب\\اظهر</button></td>\r\n                <td></td> \r\n                <td></td>\r\n                <td></td>\r\n                <td></td> \r\n                <td></td>\r\n                <td></td>\r\n                <td></td> \r\n                <td></td>\r\n                <td></td>\r\n             </tr>\r\n              \r\n            \r\n-->\r\n        </table>\r\n                 </div>\r\n             </form>\r\n\r\n    </main>\r\n    \r\n    <footer>\r\n    </footer>\r\n    \r\n</body>\r\n</html>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `passwords`
--

CREATE TABLE `passwords` (
  `ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Value` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `passwords`
--

INSERT INTO `passwords` (`ID`, `User_ID`, `Value`) VALUES
(1, 1, '5060'),
(2, 2, '7080mm');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`ID`, `Name`) VALUES
(1, 'visa card'),
(2, 'cheque'),
(3, 'cash'),
(4, 'adfa3_Fel_Bank'),
(6, 'مقدم/مؤخر'),
(7, 'دفعات'),
(8, 'كل مرحلة لها اتعابها');

-- --------------------------------------------------------

--
-- Table structure for table `payment_options`
--

CREATE TABLE `payment_options` (
  `ID` int(11) NOT NULL,
  `Payment_ID` int(11) NOT NULL,
  `Option_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment_options`
--

INSERT INTO `payment_options` (`ID`, `Payment_ID`, `Option_ID`) VALUES
(1, 1, 1),
(2, 3, 2),
(3, 4, 3),
(4, 4, 4),
(5, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `payment_options_value`
--

CREATE TABLE `payment_options_value` (
  `ID` int(11) NOT NULL,
  `PM_option_ID` int(11) NOT NULL,
  `Case_ID` int(11) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment_options_value`
--

INSERT INTO `payment_options_value` (`ID`, `PM_option_ID`, `Case_ID`, `value`) VALUES
(1, 2, 1, '2000'),
(2, 1, 1, '20/10/2019'),
(7, 3, 1, '1512804'),
(8, 4, 1, '9988'),
(9, 5, 1, 'البنك الاهلي مصر-الجديدة');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `ID` int(11) NOT NULL,
  `Place` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`ID`, `Place`) VALUES
(1, 'مدينة نصر'),
(2, 'القضاء العالي'),
(3, 'مصر الجديدة');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `salaryDetails_ID` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`ID`, `User_ID`, `salaryDetails_ID`, `amount`, `Total`) VALUES
(1, 2, 1, 2000, 3000),
(2, 2, 2, 2000, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `salarydetails`
--

CREATE TABLE `salarydetails` (
  `ID` int(11) NOT NULL,
  `Deductable` int(11) NOT NULL,
  `Bonus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salarydetails`
--

INSERT INTO `salarydetails` (`ID`, `Deductable`, `Bonus`) VALUES
(1, 100, 200),
(2, 0, 300);

-- --------------------------------------------------------

--
-- Table structure for table `transactionlog`
--

CREATE TABLE `transactionlog` (
  `ID` int(11) NOT NULL,
  `Value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transactionlog`
--

INSERT INTO `transactionlog` (`ID`, `Value`) VALUES
(1, 'Yes'),
(2, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `mobile` varchar(11) DEFAULT NULL,
  `Address_ID` int(11) NOT NULL,
  `UserType_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `FullName`, `mobile`, `Address_ID`, `UserType_id`) VALUES
(1, 'Nada', '01234567891', 1, 1),
(2, 'ماجد عماد', '01023451289', 2, 2),
(3, 'احمد ابراهيم', '01255564848', 1, 4),
(4, 'محمد احمد', '01255465686', 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `ID` int(11) NOT NULL,
  `Type` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`ID`, `Type`) VALUES
(1, 'Admin'),
(2, 'Lawyer'),
(3, 'Secretary'),
(4, 'Client'),
(5, 'خصم');

-- --------------------------------------------------------

--
-- Table structure for table `usertype_pages`
--

CREATE TABLE `usertype_pages` (
  `ID` int(11) NOT NULL,
  `UserType_ID` int(11) NOT NULL,
  `Pages_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype_pages`
--

INSERT INTO `usertype_pages` (`ID`, `UserType_ID`, `Pages_ID`) VALUES
(1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Month_ID` (`Month_ID`,`User_ID`),
  ADD KEY `Nationality_ID` (`Nationality_ID`),
  ADD KEY `Education_ID` (`Education_ID`),
  ADD KEY `Degree_enrollment_ID` (`Degree_enrollment_ID`),
  ADD KEY `Apply_for_ID` (`Apply_for_ID`),
  ADD KEY `applications_ibfk_1` (`User_ID`);

--
-- Indexes for table `apply_for`
--
ALTER TABLE `apply_for`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `approve`
--
ALTER TABLE `approve`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `App_ID` (`App_ID`,`TransactionLog_ID`),
  ADD KEY `TransactionLog_ID` (`TransactionLog_ID`);

--
-- Indexes for table `casedetails`
--
ALTER TABLE `casedetails`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Document_ID` (`Document_ID`),
  ADD KEY `Pay_O_Value_ID` (`Pay_O_Value_ID`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Date_Of_Case_ID` (`Date_Of_Case_ID`),
  ADD KEY `CaseType_ID` (`CaseType_ID`),
  ADD KEY `Place_Of_Case_ID` (`Place_Of_Case_ID`),
  ADD KEY `User_ID` (`Lawyer_ID`) USING BTREE,
  ADD KEY `Tare5_raf3_eld3wa` (`Tare5_raf3_eld3wa`),
  ADD KEY `Court_Name` (`CourtName_ID`),
  ADD KEY `Status_ID` (`Status_ID`,`Dayra_ID`),
  ADD KEY `5esm_ID` (`5esm_ID`),
  ADD KEY `Client_ID` (`Client_ID`),
  ADD KEY `ClientType_ID` (`ClientType_ID`),
  ADD KEY `casedetails_ID` (`CaseDetails_ID`),
  ADD KEY `cases_ibfk_8` (`Dayra_ID`);

--
-- Indexes for table `casetype`
--
ALTER TABLE `casetype`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `case_status`
--
ALTER TABLE `case_status`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `clienttype`
--
ALTER TABLE `clienttype`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `courtname`
--
ALTER TABLE `courtname`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `date_of_case`
--
ALTER TABLE `date_of_case`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `degree_enrollment`
--
ALTER TABLE `degree_enrollment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `DocumentType_ID` (`DocumentType_ID`);

--
-- Indexes for table `documenttype_id`
--
ALTER TABLE `documenttype_id`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `education_id`
--
ALTER TABLE `education_id`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `eldayra`
--
ALTER TABLE `eldayra`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `expensetypes`
--
ALTER TABLE `expensetypes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fatora`
--
ALTER TABLE `fatora`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `fatora_details`
--
ALTER TABLE `fatora_details`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ExpenseType_ID` (`ExpenseType_ID`),
  ADD KEY `Fatora_ID` (`Fatora_ID`),
  ADD KEY `Month_ID` (`Month_ID`);

--
-- Indexes for table `monthes`
--
ALTER TABLE `monthes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `nationality`
--
ALTER TABLE `nationality`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `passwords`
--
ALTER TABLE `passwords`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `payment_options`
--
ALTER TABLE `payment_options`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Payment_Meth_ID` (`Payment_ID`),
  ADD KEY `Option_ID` (`Option_ID`);

--
-- Indexes for table `payment_options_value`
--
ALTER TABLE `payment_options_value`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `PM_option_ID` (`PM_option_ID`),
  ADD KEY `Case_ID` (`Case_ID`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `User_ID` (`User_ID`),
  ADD KEY `salaryDetails_ID` (`salaryDetails_ID`);

--
-- Indexes for table `salarydetails`
--
ALTER TABLE `salarydetails`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `transactionlog`
--
ALTER TABLE `transactionlog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserType_id` (`UserType_id`),
  ADD KEY `Address_ID` (`Address_ID`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usertype_pages`
--
ALTER TABLE `usertype_pages`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Pages_ID` (`Pages_ID`),
  ADD KEY `UserType_ID` (`UserType_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `apply_for`
--
ALTER TABLE `apply_for`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `approve`
--
ALTER TABLE `approve`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `casedetails`
--
ALTER TABLE `casedetails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `casetype`
--
ALTER TABLE `casetype`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `case_status`
--
ALTER TABLE `case_status`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clienttype`
--
ALTER TABLE `clienttype`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courtname`
--
ALTER TABLE `courtname`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `date_of_case`
--
ALTER TABLE `date_of_case`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `degree_enrollment`
--
ALTER TABLE `degree_enrollment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `documenttype_id`
--
ALTER TABLE `documenttype_id`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `education_id`
--
ALTER TABLE `education_id`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `eldayra`
--
ALTER TABLE `eldayra`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expensetypes`
--
ALTER TABLE `expensetypes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fatora`
--
ALTER TABLE `fatora`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fatora_details`
--
ALTER TABLE `fatora_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `monthes`
--
ALTER TABLE `monthes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nationality`
--
ALTER TABLE `nationality`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `passwords`
--
ALTER TABLE `passwords`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payment_options`
--
ALTER TABLE `payment_options`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment_options_value`
--
ALTER TABLE `payment_options_value`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `salarydetails`
--
ALTER TABLE `salarydetails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transactionlog`
--
ALTER TABLE `transactionlog`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usertype_pages`
--
ALTER TABLE `usertype_pages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applications_ibfk_2` FOREIGN KEY (`Month_ID`) REFERENCES `monthes` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `applications_ibfk_3` FOREIGN KEY (`Nationality_ID`) REFERENCES `nationality` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `applications_ibfk_4` FOREIGN KEY (`Education_ID`) REFERENCES `education_id` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `applications_ibfk_5` FOREIGN KEY (`Degree_enrollment_ID`) REFERENCES `degree_enrollment` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `applications_ibfk_6` FOREIGN KEY (`Apply_for_ID`) REFERENCES `apply_for` (`ID`) ON UPDATE CASCADE;

--
-- Constraints for table `approve`
--
ALTER TABLE `approve`
  ADD CONSTRAINT `approve_ibfk_1` FOREIGN KEY (`App_ID`) REFERENCES `applications` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `approve_ibfk_2` FOREIGN KEY (`TransactionLog_ID`) REFERENCES `transactionlog` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `casedetails`
--
ALTER TABLE `casedetails`
  ADD CONSTRAINT `casedetails_ibfk_1` FOREIGN KEY (`Document_ID`) REFERENCES `documents` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `casedetails_ibfk_2` FOREIGN KEY (`Pay_O_Value_ID`) REFERENCES `payment_options_value` (`ID`) ON UPDATE CASCADE;

--
-- Constraints for table `cases`
--
ALTER TABLE `cases`
  ADD CONSTRAINT `cases_ibfk_10` FOREIGN KEY (`5esm_ID`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cases_ibfk_11` FOREIGN KEY (`Client_ID`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cases_ibfk_12` FOREIGN KEY (`Date_Of_Case_ID`) REFERENCES `date_of_case` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cases_ibfk_13` FOREIGN KEY (`ClientType_ID`) REFERENCES `clienttype` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cases_ibfk_14` FOREIGN KEY (`CaseDetails_ID`) REFERENCES `casedetails` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cases_ibfk_2` FOREIGN KEY (`CaseType_ID`) REFERENCES `casetype` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cases_ibfk_3` FOREIGN KEY (`Place_Of_Case_ID`) REFERENCES `places` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cases_ibfk_4` FOREIGN KEY (`Lawyer_ID`) REFERENCES `user` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cases_ibfk_6` FOREIGN KEY (`Tare5_raf3_eld3wa`) REFERENCES `date_of_case` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cases_ibfk_7` FOREIGN KEY (`CourtName_ID`) REFERENCES `courtname` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cases_ibfk_8` FOREIGN KEY (`Dayra_ID`) REFERENCES `eldayra` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cases_ibfk_9` FOREIGN KEY (`Status_ID`) REFERENCES `case_status` (`ID`) ON UPDATE CASCADE;

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_ibfk_1` FOREIGN KEY (`DocumentType_ID`) REFERENCES `documenttype_id` (`ID`) ON UPDATE CASCADE;

--
-- Constraints for table `email`
--
ALTER TABLE `email`
  ADD CONSTRAINT `email_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fatora`
--
ALTER TABLE `fatora`
  ADD CONSTRAINT `fatora_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fatora_details`
--
ALTER TABLE `fatora_details`
  ADD CONSTRAINT `fatora_details_ibfk_1` FOREIGN KEY (`ExpenseType_ID`) REFERENCES `expensetypes` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fatora_details_ibfk_2` FOREIGN KEY (`Month_ID`) REFERENCES `monthes` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fatora_details_ibfk_3` FOREIGN KEY (`Fatora_ID`) REFERENCES `fatora` (`ID`) ON UPDATE CASCADE;

--
-- Constraints for table `passwords`
--
ALTER TABLE `passwords`
  ADD CONSTRAINT `passwords_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment_options`
--
ALTER TABLE `payment_options`
  ADD CONSTRAINT `payment_options_ibfk_1` FOREIGN KEY (`Payment_ID`) REFERENCES `payment` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_options_ibfk_2` FOREIGN KEY (`Option_ID`) REFERENCES `options` (`ID`) ON UPDATE CASCADE;

--
-- Constraints for table `payment_options_value`
--
ALTER TABLE `payment_options_value`
  ADD CONSTRAINT `payment_options_value_ibfk_2` FOREIGN KEY (`PM_option_ID`) REFERENCES `payment_options` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_options_value_ibfk_3` FOREIGN KEY (`Case_ID`) REFERENCES `cases` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `salary_ibfk_3` FOREIGN KEY (`salaryDetails_ID`) REFERENCES `salarydetails` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`UserType_id`) REFERENCES `usertype` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`Address_ID`) REFERENCES `places` (`ID`) ON UPDATE CASCADE;

--
-- Constraints for table `usertype_pages`
--
ALTER TABLE `usertype_pages`
  ADD CONSTRAINT `usertype_pages_ibfk_1` FOREIGN KEY (`Pages_ID`) REFERENCES `pages` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usertype_pages_ibfk_2` FOREIGN KEY (`UserType_ID`) REFERENCES `usertype` (`ID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
