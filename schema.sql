-- Host: localhost    Database: bugMeIssue
-- ------------------------------------------------------


DROP DATABASE IF EXISTS bugMeIssue;
CREATE DATABASE bugMeIssue;
USE bugMeIssue;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(15) NOT NULL auto_increment,
  `firstname` varchar(35) NOT NULL default '',
  `lastname` varchar(35) NOT NULL default '',
  `password` varchar(20) NOT NULL default '',
  `email` varchar(55) NOT NULL default '',
  `date_joined` datetime,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4080 DEFAULT CHARSET=utf8mb4;


INSERT INTO `users` VALUES ('1','System','Admin','password123','adminproject2.com',
'24-11-20 10:45:09')


--
-- Table structure for table `issues`
--

DROP TABLE IF EXISTS `issues`;
CREATE TABLE `issues` (
  `id` int(15) NOT NULL auto_increment,
  `title` varchar(35) NOT NULL default '',
  `description` text(55) NOT NULL default '',
  `type` varchar(35) NOT NULL default '',
  `priority` varchar(35) NOT NULL default '',
  `status` varchar(35) NOT NULL default '',
  `assigned_to` int(15) NOT NULL auto_increment,
  `created_by ` int(15) NOT NULL auto_increment,
  `created` datetime,
  `date_joined` datetime,
  `updated` datetime,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4080 DEFAULT CHARSET=utf8mb4;

INSERT INTO `issues` VALUES ('1','Test','Random Test','Random','High','Pending','1','2','24-11-20 10:45:09','25-11-20 10:45:09')
INSERT INTO `issues` VALUES ('1','Test','Random Test','Random','High','Pending','1','2','24-11-20 10:45:09','25-11-20 10:45:09',)


