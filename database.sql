create database `ebook`;

use `ebook`;

CREATE TABLE `login` (
  `id` int(9) NOT NULL auto_increment,
  `fname` varchar(100) NOT NULL,
`lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,  
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB;

