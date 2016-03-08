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
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8;

/*Data for the table `tblprereg` */

insert  into `tblprereg`(`userID`,`username`,`password`,`YearLevel`,`Status`,`SchoolYear`,`Student_ID`,`Lastname`,`Firstname`,`Middlename`,`Gender`,`BirthDate`,`Age`,`BirthPlace`,`Religion`,`Email`,`Address`,`Guardian`,`Relationship`,`Emergency`,`ERelationship`,`EAddress`,`CPnumber`) values (105,'Emmanuel','1322b2a58a24544392a2a47dbfa88affc0d0762dfd0c7490a9aebbeba71eaedf','Grade 7','Old Student','2010-2011','111','Soriano','Emmanuel','Dotimas','Male','August 19, 1992','23','Munguia, Dupax del Norte Nueva Vizcaya','Jehova\'s Witnesses','emcareforjw12@gmail.com','Munguia, Dupax del Norte Nueva Vizcaya',NULL,NULL,NULL,NULL,'Munguia, Dupax del Norte Nueva Vizcaya','09267953558'),(106,'Raymond','bfd09491b6fdef174b4b28702900bb28d5664ae55bd5f42489d65c24c0133957','Grade 7','Old Student','2012-2013','222','Cuaresma','Raymond','Lubong','Male','October 14, 1994','20','Bambang Nueva Vizcaya','Roman Catolic','raymondcuaresma21@yahoo.com','Bambang Nueva Vizcaya',NULL,NULL,NULL,NULL,'Bambang Nueva Vizcaya','09368729236'),(107,'Alona','c7566ffd7b1cd9d4f6a82d408426837e29c4f8c8592d45c012fea990115293bc','Grade 7','Old Student','2010-2011','333','Vargaz','Alona mae','Viloria','Female','May 30, 1994','24','Munguia, Dupax del Norte Nueva Vizcaya','INC','alonamae@yahoo.com','Munguia, Dupax del Norte Nueva Vizcaya',NULL,NULL,NULL,NULL,'Munguia, Dupax del Norte Nueva Vizcaya','09366536242');

/*Table structure for table `tblsubjects` */

DROP TABLE IF EXISTS `tblsubjects`;

CREATE TABLE `tblsubjects` (
  `RecNo` bigint(10) NOT NULL AUTO_INCREMENT,
  `Level` varchar(100) DEFAULT NULL,
  `Subject` varchar(100) DEFAULT NULL,
  `Teacher` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`RecNo`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

/*Data for the table `tblsubjects` */

insert  into `tblsubjects`(`RecNo`,`Level`,`Subject`,`Teacher`) values (1,'Grade 7','English 1','Alecmas, Joan P.'),(2,'Grade 7','Mathematics 1','Corpuz, Samuel G. Jr.'),(3,'Grade 7','Filipino 1','Lileses, Josephine D.'),(4,'Grade 7','Science 1','Jazareno, Divina Gracia M.'),(5,'Grade 7','TLE 1','Tugab, Edna Dolores T.'),(6,'Grade 7','MAPEH 1','Bacquiran, Donalyn H.'),(7,'Grade 8','English 2','Marquez, Corazon C.'),(8,'Grade 8','Mathematics 2','Ballesteros, Belda A.'),(9,'Grade 8','Filipino 2','Rilloraza, Janice B.'),(10,'Grade 8','Science 2','Atabay, Bethel D.'),(11,'Grade 8','TLE 2','Patricio Dindo I.'),(12,'Grade 8','MAPEH 2','Bonifacio, Louie D.'),(13,'Grade 9','English 3','Dafang, Armando, E.'),(14,'Grade 9','Mathematics 3','Benoza, Agnes D.'),(15,'Grade 9','Filipino 3','Asunza, Ruby E.'),(16,'Grade 9','Science 3','Calores, Lournes A.'),(17,'Grade 9','TLE 3','Simbulan, Clarence T.'),(18,'Grade 9','MAPEH 3','Duerme, Ma. Teresa H.'),(19,'Grade 10','English 4','Baladad, Feliza A.'),(20,'Grade 10','Mathematics 4','Salinas, Evalyn T.'),(21,'Grade 10','Filipino 4','Pascua, Hajie Jay B.'),(22,'Grade 10','Science 4','Corpuz, Orlando G.'),(23,'Grade 10','TLE 4','Garcia, Elizabeth C.'),(24,'Grade 10','MAPEH 4','Adais, Efren D.'),(25,'Grade 11','English 5','Alecmas, Joan P.'),(26,'Grade 11','Mathematics 5','Benoza, Agnes D.'),(27,'Grade 11','Filipino 5','Ponso, Lito I.'),(28,'Grade 11','Science 5','Padua, Mariel M.'),(29,'Grade 11','TLE 5','Embong, Olivia D.'),(30,'Grade 11','MAPEH 5','Dela Cruz, Rowald E.'),(31,'Grade 12','English 6','Buan, Jocelyn A.'),(32,'Grade 12','Mathematics 6','Pamittan, Jonathan C.'),(33,'Grade 12','Filipino 6','Pacia, Ritchie C.'),(34,'Grade 12','Science 6','Domingo, Rosellier I.'),(35,'Grade 12','TLE 6','Omanito, Marilyn P.'),(36,'Grade 12','MAPEH 6','Madet, Leslie Ann R.');

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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`userID`,`username`,`password`) values (20,'admin','65b07af0391855176483c0949c23e487742d965f589f31ee05a1045d6a110812');

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
