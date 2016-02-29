/*
SQLyog Ultimate - MySQL GUI v8.2 
MySQL - 5.5.16-log : Database - codecalltut
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`codecalltut` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `codecalltut`;

/*Table structure for table `studentuser` */

DROP TABLE IF EXISTS `studentuser`;

CREATE TABLE `studentuser` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `studentuser` */

/*Table structure for table `tblgrades` */

DROP TABLE IF EXISTS `tblgrades`;

CREATE TABLE `tblgrades` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `Student_ID` varchar(10) DEFAULT NULL,
  `Level` varchar(100) DEFAULT NULL,
  `SchoolYear` varchar(100) DEFAULT NULL,
  `Filipino` varchar(10) DEFAULT NULL,
  `English` varchar(10) DEFAULT NULL,
  `Mathematics` varchar(10) DEFAULT NULL,
  `Science` varchar(10) DEFAULT NULL,
  `TLE` varchar(10) DEFAULT NULL,
  `History` varchar(10) DEFAULT NULL,
  `MAPEH` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tblgrades` */

/*Table structure for table `tblname` */

DROP TABLE IF EXISTS `tblname`;

CREATE TABLE `tblname` (
  `username` varchar(50) NOT NULL,
  `Last_name` varchar(20) DEFAULT NULL,
  `First_name` varchar(20) DEFAULT NULL,
  `Middle_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tblname` */

/*Table structure for table `tblprereg` */

DROP TABLE IF EXISTS `tblprereg`;

CREATE TABLE `tblprereg` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varbinary(250) DEFAULT NULL,
  `YearLevel` varchar(100) DEFAULT NULL,
  `Status` varchar(100) DEFAULT NULL,
  `SchoolYear` varchar(100) DEFAULT NULL,
  `Student_ID` varchar(10) DEFAULT NULL,
  `Lastname` varchar(100) DEFAULT NULL,
  `Firstname` varchar(100) DEFAULT NULL,
  `Middlename` varchar(100) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `BirthDate` varchar(100) DEFAULT NULL,
  `Age` varchar(3) DEFAULT NULL,
  `BirthPlace` varchar(300) DEFAULT NULL,
  `Religion` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Address` varchar(300) DEFAULT NULL,
  `Guardian` varchar(100) DEFAULT NULL,
  `Relationship` varchar(100) DEFAULT NULL,
  `Emergency` varchar(100) DEFAULT NULL,
  `ERelationship` varchar(100) DEFAULT NULL,
  `EAddress` varchar(300) DEFAULT NULL,
  `CPnumber` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8;

/*Data for the table `tblprereg` */

insert  into `tblprereg`(`userID`,`username`,`password`,`YearLevel`,`Status`,`SchoolYear`,`Student_ID`,`Lastname`,`Firstname`,`Middlename`,`Gender`,`BirthDate`,`Age`,`BirthPlace`,`Religion`,`Email`,`Address`,`Guardian`,`Relationship`,`Emergency`,`ERelationship`,`EAddress`,`CPnumber`) values (103,'emmanuel','1322b2a58a24544392a2a47dbfa88affc0d0762dfd0c7490a9aebbeba71eaedf','Grade 7','Old Student','2011-2012','111','Soriano','Emmanuel','Dotimas','Male','August 19, 1992','23','Munguia, Dupax del Norte Nueva Vizcaya','Jehova\'s Witnesses','emcareforjw12@gmail.com','Munguia, Dupax del Norte Nueva Vizcaya','Wilfredo Soriano','Father','Jovita Soriano','Mother','Munguia, Dupax del Norte Nueva Vizcaya','09267953558');

/*Table structure for table `tblsubjects` */

DROP TABLE IF EXISTS `tblsubjects`;

CREATE TABLE `tblsubjects` (
  `RecNo` bigint(10) NOT NULL AUTO_INCREMENT,
  `Level` varchar(100) DEFAULT NULL,
  `Subject` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`RecNo`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `tblsubjects` */

insert  into `tblsubjects`(`RecNo`,`Level`,`Subject`) values (1,'Grade 7','English 1'),(2,'Grade 7','Mathematics 1'),(3,'Grade 7','Filipino 1'),(4,'Grade 7','Science 1'),(5,'Grade 7','TLE 1'),(6,'Grade 7','MAPEH 1'),(7,'Grade 8','English 2'),(8,'Grade 8','Mathematics 2'),(9,'Grade 8','Filipino 2'),(10,'Grade 8','Science 2'),(11,'Grade 8','TLE 2'),(12,'Grade 8','MAPEH 2'),(13,'Grade 9','English 3'),(14,'Grade 9','Mathematics 3'),(15,'Grade 9','Filipino 3'),(16,'Grade 9','Science 3'),(17,'Grade 9','TLE 3'),(18,'Grade 9','MAPEH 3');

/*Table structure for table `tblyear` */

DROP TABLE IF EXISTS `tblyear`;

CREATE TABLE `tblyear` (
  `year_id` int(11) NOT NULL AUTO_INCREMENT,
  `Year/Grade` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`year_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tblyear` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varbinary(250) NOT NULL,
  PRIMARY KEY (`userID`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`userID`,`username`,`password`) values (18,'admin','65b07af0391855176483c0949c23e487742d965f589f31ee05a1045d6a110812');

/*Table structure for table `name` */

DROP TABLE IF EXISTS `name`;

/*!50001 DROP VIEW IF EXISTS `name` */;
/*!50001 DROP TABLE IF EXISTS `name` */;

/*!50001 CREATE TABLE  `name`(
 `Student_ID` varchar(10) ,
 `Name` varchar(206) 
)*/;

/*Table structure for table `section` */

DROP TABLE IF EXISTS `section`;

/*!50001 DROP VIEW IF EXISTS `section` */;
/*!50001 DROP TABLE IF EXISTS `section` */;

/*!50001 CREATE TABLE  `section`(
 `Student_ID` varchar(10) ,
 `Name` varchar(206) ,
 `YearLevel` varchar(100) ,
 `SchoolYear` varchar(100) 
)*/;

/*View structure for view name */

/*!50001 DROP TABLE IF EXISTS `name` */;
/*!50001 DROP VIEW IF EXISTS `name` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `name` AS select `tblprereg`.`Student_ID` AS `Student_ID`,concat(`tblprereg`.`Lastname`,', ',`tblprereg`.`Firstname`,' ',left(`tblprereg`.`Middlename`,1),'. ') AS `Name` from `tblprereg` order by concat(`tblprereg`.`Lastname`,', ',`tblprereg`.`Firstname`,' ',left(`tblprereg`.`Middlename`,1),'. ') */;

/*View structure for view section */

/*!50001 DROP TABLE IF EXISTS `section` */;
/*!50001 DROP VIEW IF EXISTS `section` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `section` AS select `tblprereg`.`Student_ID` AS `Student_ID`,concat(`tblprereg`.`Lastname`,', ',`tblprereg`.`Firstname`,' ',left(`tblprereg`.`Middlename`,1),'. ') AS `Name`,`tblprereg`.`YearLevel` AS `YearLevel`,`tblprereg`.`SchoolYear` AS `SchoolYear` from `tblprereg` order by `tblprereg`.`SchoolYear` */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;