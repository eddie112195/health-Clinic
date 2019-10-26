/*
SQLyog Enterprise v12.4.3 (64 bit)
MySQL - 10.1.36-MariaDB : Database - db_galvezdentalclinic
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `icDoctor` bigint(12) NOT NULL AUTO_INCREMENT,
  `password` varchar(20) NOT NULL,
  `doctorId` int(12) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `doctorFirstName` varchar(59) NOT NULL,
  `doctorMiddleName` varchar(3) NOT NULL,
  `doctorLastName` varchar(50) NOT NULL,
  `doctorAddress` varchar(100) NOT NULL,
  `doctorPhone` varchar(15) NOT NULL,
  `doctorEmail` varchar(100) NOT NULL,
  `doctorDOB` date NOT NULL,
  PRIMARY KEY (`icDoctor`,`doctorId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`icDoctor`,`password`,`doctorId`,`Username`,`doctorFirstName`,`doctorMiddleName`,`doctorLastName`,`doctorAddress`,`doctorPhone`,`doctorEmail`,`doctorDOB`) values 
(1,'admin',12,'admin','Eddie','G.','Madrona Jr','Tanza Cavite Tanza\r\n','09123456789','eddiemadrona@gmail.com','1995-11-21');

/*Table structure for table `appointment` */

DROP TABLE IF EXISTS `appointment`;

CREATE TABLE `appointment` (
  `appId` int(12) NOT NULL AUTO_INCREMENT,
  `patientIc` bigint(20) NOT NULL,
  `appToday` date NOT NULL,
  `appDate` date NOT NULL,
  `startTime` varchar(50) NOT NULL,
  `endTime` varchar(50) NOT NULL,
  `appService` varchar(100) NOT NULL,
  `Price` varchar(20) NOT NULL,
  `appComment` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  `status1` varchar(20) NOT NULL,
  PRIMARY KEY (`appId`)
) ENGINE=InnoDB AUTO_INCREMENT=226 DEFAULT CHARSET=latin1;

/*Data for the table `appointment` */

insert  into `appointment`(`appId`,`patientIc`,`appToday`,`appDate`,`startTime`,`endTime`,`appService`,`Price`,`appComment`,`status`,`status1`) values 
(196,1232,'2018-11-24','2018-11-27','12:00 PM','1:00 PM','','','adfqw','done','read'),
(197,123,'2018-11-24','2018-11-28','9:00 AM','10:00 AM','','','acac','done','read'),
(198,123,'2018-11-25','2018-11-27','9:00 AM','10:00 AM','','','sdvsf','done','read'),
(199,123,'2018-11-25','2018-11-30','12:00 PM','1:00 PM','','','sdvss','process','read'),
(200,123,'2018-11-26','2018-11-28','11:00 AM','12:00 PM','','','qwdqwdq','process','read'),
(201,123,'2018-11-26','2018-12-06','9:00 AM','10:00 AM','Impaction / Impacted Tooth Extraction','500.00','wdqwdwq','process','read'),
(202,123,'2018-11-26','2018-11-28','2:00 PM','3:00 PM','Presurgical Orthodon','','aefeqwf','process','read'),
(203,123,'2018-11-26','2018-11-28','3:00 PM','4:00 PM','Impaction / Impacted Tooth Extraction','','qwdqwd','process','read'),
(204,123,'2018-11-26','2018-11-28','4:00 PM','5:00 PM','Crowns and Bridges Fixing','','dqwdqw','process','read'),
(205,123,'2018-11-26','2018-11-30','9:00 AM','10:00 AM','BPS Dentures','','wdqwd','process','read'),
(206,123,'2018-11-26','2018-11-29','9:00 AM','10:00 AM','Braces','','aefqwf','process','read'),
(207,123,'2018-11-26','2018-11-28','11:00 AM','12:00 PM','Aesthetic Dentistry','','qdq','done','read'),
(208,123,'2018-11-26','2018-11-27','1:00 PM','2:00 PM','Presurgical Orthodon','','wefewwef','done','read'),
(209,123,'2018-11-26','2018-11-30','11:00 AM','12:00 PM','Presurgical Orthodon','','awdqwdwq','process','read'),
(210,123,'2018-11-26','2018-11-30','2:00 PM','3:00 PM','Crowns and Bridges Fixing','','afwqfwq','process','read'),
(211,123,'2018-11-26','2018-12-08','9:00 AM','10:00 AM','Bleaching','','adwqd','process','read'),
(212,123,'2018-11-26','2018-12-08','2:00 PM','3:00 PM','Presurgical Orthodon','','dwdwq','done','read'),
(213,123,'2018-11-26','2018-11-29','12:00 PM','1:00 PM','8','','afqwefw','done','read'),
(214,123,'2018-11-26','2018-12-08','2:00 PM','3:00 PM','10','','qwdqwd','done','read'),
(215,123,'2018-11-26','2018-12-07','9:00 AM','10:00 AM','','','efewfwe','done','read'),
(216,123,'2018-11-26','2018-12-01','11:00 AM','12:00 PM','4','','qwdqwd','done','read'),
(217,123,'2018-11-26','2018-11-30','12:00 PM','1:00 PM','6','','adqwd','process','unread'),
(218,0,'2018-11-26','2018-12-05','9:00 AM','10:00 AM','5','','wefwef','process','unread'),
(219,0,'2018-11-26','2018-12-08','10:00 AM','11:00 AM','11','','qwdqwd','process','unread'),
(220,0,'2018-11-26','2018-12-07','2:00 PM','3:00 PM','12','','qwdqw','process','unread'),
(221,0,'2018-11-26','2018-12-08','9:00 AM','10:00 AM','11','','fftftf','process','unread'),
(222,0,'2018-11-26','2018-12-08','4:00 PM','5:00 PM','10','','sdfwef','process','unread'),
(223,0,'2018-11-27','2018-12-06','10:00 AM','11:00 AM','9','','xc xcvsd','process','unread'),
(224,0,'2018-11-27','2018-12-01','2:00 PM','3:00 PM','Aesthetic Crown and bridges','123.00','sdfwsefwe','process','unread'),
(225,0,'2018-11-27','2018-11-30','3:00 PM','4:00 PM','Crowns and Bridges Fixing','123.00','dcsdfew','process','unread');

/*Table structure for table `doctor` */

DROP TABLE IF EXISTS `doctor`;

CREATE TABLE `doctor` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `doctorIc` bigint(20) NOT NULL,
  `doctorFirstName` varchar(50) NOT NULL,
  `doctorLastName` varchar(50) NOT NULL,
  `doctorAddress` varchar(50) NOT NULL,
  `doctorPhone` varchar(50) NOT NULL,
  `doctorEmail` varchar(100) NOT NULL,
  `doctorDOB` date NOT NULL,
  `doctorGender` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `doctor` */

insert  into `doctor`(`id`,`doctorIc`,`doctorFirstName`,`doctorLastName`,`doctorAddress`,`doctorPhone`,`doctorEmail`,`doctorDOB`,`doctorGender`) values 
(13,123,'eddie','kewfdnweif','dwedqwdqwd','0912342354','eddieweqw@gmail.com','1995-02-11','male');

/*Table structure for table `doctorschedule` */

DROP TABLE IF EXISTS `doctorschedule`;

CREATE TABLE `doctorschedule` (
  `scheduleId` int(11) NOT NULL AUTO_INCREMENT,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `bookAvail` varchar(10) NOT NULL,
  PRIMARY KEY (`scheduleId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `doctorschedule` */

/*Table structure for table `information` */

DROP TABLE IF EXISTS `information`;

CREATE TABLE `information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `information` */

insert  into `information`(`id`,`Name`,`Email`,`Subject`,`Message`,`status`) values 
(1,'Eddie','eddiemadrona30@gmail.com','qwedqwewq','verere','read'),
(2,'Eddie','eddiemadrona30@gmail.com','qwedqwewq','verere','read');

/*Table structure for table `message` */

DROP TABLE IF EXISTS `message`;

CREATE TABLE `message` (
  `messageId` int(11) NOT NULL AUTO_INCREMENT,
  `PatientIc` varchar(20) NOT NULL,
  `staff` varchar(20) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `status` varchar(50) NOT NULL,
  `timeDate` datetime NOT NULL,
  PRIMARY KEY (`messageId`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `message` */

insert  into `message`(`messageId`,`PatientIc`,`staff`,`message`,`status`,`timeDate`) values 
(18,'','','sdfsdfsdfs','unread','2018-11-27 11:31:27'),
(19,'123','doctor','sdvsdvfwefwe','unread','2018-11-27 11:33:31'),
(20,'123','staff','dvsdvwefwe','unread','2018-11-27 11:34:34');

/*Table structure for table `patient` */

DROP TABLE IF EXISTS `patient`;

CREATE TABLE `patient` (
  `patientId` int(12) NOT NULL AUTO_INCREMENT,
  `icPatient` bigint(12) NOT NULL,
  `Username` varchar(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  `patientFirstName` varchar(20) NOT NULL,
  `patientLastName` varchar(20) NOT NULL,
  `patientMaritialStatus` varchar(10) NOT NULL,
  `patientDOB` date NOT NULL,
  `patientGender` varchar(10) NOT NULL,
  `patientAddress` varbinary(100) NOT NULL,
  `patientPhone` varchar(20) NOT NULL,
  `patientEmail` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `tokenExpire` datetime NOT NULL,
  `status` varchar(20) NOT NULL,
  `registerDate` datetime NOT NULL,
  PRIMARY KEY (`patientId`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

/*Data for the table `patient` */

insert  into `patient`(`patientId`,`icPatient`,`Username`,`password`,`patientFirstName`,`patientLastName`,`patientMaritialStatus`,`patientDOB`,`patientGender`,`patientAddress`,`patientPhone`,`patientEmail`,`token`,`tokenExpire`,`status`,`registerDate`) values 
(29,21,'qwer','123','eddie','mad','single','2003-12-21','male','tanza cavite','09123456789','qwe@gmail.com','','0000-00-00 00:00:00','unread','2018-11-20 05:28:56'),
(30,123,'eddie12','123','eddie','madrona','single','1995-11-21','male','e23e23e2','09123456789','eddiemadrona30@gmail.com','','0000-00-00 00:00:00','read','2018-11-23 08:46:31'),
(31,1232,'eddie21','eddie112195','eddie','madrona','married','1995-11-21','male','qwdqww','09123456789','eddiemadrona@gmail.com','','0000-00-00 00:00:00','read','2018-11-24 06:34:57'),
(32,2121,'eddie2111','123','eddie','Madrona Jr','','1982-12-21','male','','','eddie@gmail.com','','0000-00-00 00:00:00','read','2018-11-25 05:41:10'),
(33,21223,'qweqweq','qwe','eddie','madrona','','1994-12-17','male','','','dfwewece@gmail.com','','0000-00-00 00:00:00','read','2018-11-26 16:35:11'),
(34,3,'sdqwdq','qwe','fvbhrdyjj','dfwferfwe','','1997-01-23','male','','','w23rew@gmail.com','','0000-00-00 00:00:00','read','2018-11-27 00:35:58');

/*Table structure for table `services` */

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `servicesId` int(20) NOT NULL AUTO_INCREMENT,
  `Services` varchar(100) NOT NULL,
  `Price` varchar(20) NOT NULL,
  KEY `servicesId` (`servicesId`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `services` */

insert  into `services`(`servicesId`,`Services`,`Price`) values 
(1,'Acrylic Partial Dent','500.00'),
(2,'Artificial Teeth','400.00'),
(3,'Cast Partial Denture','123.00'),
(4,'General Dentistry','123.00'),
(5,'Braces','123.00'),
(6,'Crowns and Bridges Fixing','123.00'),
(7,'Impaction / Impacted Tooth Extraction','600.00'),
(8,'Orthodonics','123.00'),
(9,'Bleaching','123.00'),
(10,'Presurgical Orthodon','123.00'),
(11,'BPS Dentures Fixing','123.00'),
(12,'Aesthetic Crown and bridges','123.00'),
(13,'Aesthetic Dentistry','123.00'),
(14,'BPS Dentures','123.00');

/*Table structure for table `staff` */

DROP TABLE IF EXISTS `staff`;

CREATE TABLE `staff` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `icNumber` varchar(20) NOT NULL,
  `staff` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `staffFirstName` varchar(20) NOT NULL,
  `staffLastName` varchar(20) NOT NULL,
  `staffAddress` varchar(100) NOT NULL,
  `staffPhone` varchar(20) NOT NULL,
  `staffGender` varchar(20) NOT NULL,
  `staffEmail` varchar(20) NOT NULL,
  `staffDOB` date NOT NULL,
  `Position` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `staff` */

insert  into `staff`(`id`,`icNumber`,`staff`,`password`,`staffFirstName`,`staffLastName`,`staffAddress`,`staffPhone`,`staffGender`,`staffEmail`,`staffDOB`,`Position`) values 
(1,'','staff','staff','Eddie ','MadronaE','tanza','1234567890','','eddie@gmail.com','1999-07-08','staff'),
(2,'','fwefe','sfwefwe','dqdqw','ascwefwe','','','','','0000-00-00','staff'),
(3,'','12qw','123','dqdqw','ascwefwe','','09121212312','','','0000-00-00','doctor');

/*Table structure for table `timeschedule` */

DROP TABLE IF EXISTS `timeschedule`;

CREATE TABLE `timeschedule` (
  `timeId` int(11) NOT NULL AUTO_INCREMENT,
  `TimeSchedule` varchar(20) NOT NULL,
  KEY `timeId` (`timeId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `timeschedule` */

insert  into `timeschedule`(`timeId`,`TimeSchedule`) values 
(1,'09:00AM - 10:00AM'),
(2,'10:00AM - 11:00AM'),
(3,'11:00AM - 12:00PM'),
(4,'01:30PM - 02:30PM'),
(5,'02:30PM - 03:30PM'),
(6,'03:30PM - 04:30PM'),
(7,'04:30PM - 05:30PM');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
