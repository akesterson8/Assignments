-- CREATE TABLE table (
--   id int NOT NULL AUTO_INCREMENT,
--   name char(50) NULL,
--   path char(255) NULL,
--   PRIMARY KEY (id)
-- )ENGINE=InnoDB;

CREATE TABLE `files` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `file_name` varchar(250) DEFAULT NULL,
  `file_path` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
