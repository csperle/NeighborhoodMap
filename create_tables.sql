CREATE TABLE IF NOT EXISTS `marker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lat` decimal(10,8) NOT NULL,
  `lng` decimal(11,8) NOT NULL,
  `icon` varchar(40) NOT NULL,
  `provider` varchar(80) NOT NULL,
  `title` varchar(80) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `tags` varchar(400) DEFAULT NULL,
  `note` varchar(400) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL,
  `contact` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `homepage` varchar(80) DEFAULT NULL,
  `inserted` datetime NOT NULL,
  `lastupdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
