-- Host: localhost    Database: bugMeIssue
-- ------------------------------------------------------


DROP DATABASE IF EXISTS bugMeIssue;
CREATE DATABASE bugMeIssue;
USE bugMeIssue;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `Users`;
CREATE TABLE `Users` (
  `id` int(15) NOT NULL auto_increment,
  `firstname` varchar(35) NOT NULL default '',
  `lastname` varchar(35) NOT NULL default '',
  `password` varchar(256) NOT NULL default '',
  `email` varchar(55) NOT NULL default '',
  `date_joined` datetime,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4080 DEFAULT CHARSET=utf8mb4;


INSERT INTO Users(firstname, lastname, password, email, date_joined) VALUES ('Michael','Goldson','$2y$10$nsDFOWkT3/wdeawwaD6S8edglzCRcnX9jUlvu8QOZlyJXrna8TThq','admin@project2.com', CURDATE());
INSERT INTO Users(firstname, lastname, password, email, date_joined) VALUES ('Deidre-Ann','Jemison','$2y$10$nsDFOWkT3/wdeawwaD6S8edglzCRcnX9jUlvu8QOZlyJXrna8TThq','admin2@project2.com', CURDATE());
INSERT INTO Users(firstname, lastname, password, email, date_joined) VALUES ('Orlando','Williams','$2y$10$nsDFOWkT3/wdeawwaD6S8edglzCRcnX9jUlvu8QOZlyJXrna8TThq','admin3@project2.com', CURDATE());
INSERT INTO Users(firstname, lastname, password, email, date_joined) VALUES ('Jhevoy','Jacas','$2y$10$nsDFOWkT3/wdeawwaD6S8edglzCRcnX9jUlvu8QOZlyJXrna8TThq','admin4@project2.com', CURDATE());

--
-- Table structure for table `issues`
--
DROP TABLE IF EXISTS `Issues`;
CREATE TABLE `Issues` (
  `id` int(15) NOT NULL auto_increment,
  `title` varchar(35) NOT NULL default '',
  `description` varchar(250) NOT NULL default '',
  `type` varchar(35) NOT NULL default '',
  `priority` varchar(35) NOT NULL default '',
  `status` varchar(35) NOT NULL default '',
  `assigned_to` int(15) NOT NULL,
  `created_by` int(15) NOT NULL,
  `created` datetime,
  `date_joined` datetime,
  `updated` datetime,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4080 DEFAULT CHARSET=utf8mb4;

/*INSERT INTO `issues` VALUES ('Test','Random Test','Random','High','Pending','1','2','24-11-20 10:45:09','25-11-20 10:45:09');
INSERT INTO `issues` VALUES ('Test','Random Test','Random','High','Pending','1','2','24-11-20 10:45:09','25-11-20 10:45:09');*/


