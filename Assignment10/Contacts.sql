CREATE TABLE `contacts` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(250) DEFAULT NULL,
    `address` varchar(250) DEFAULT NULL,
    `city` varchar(250) DEFAULT NULL,
    `state` varchar(250) DEFAULT NULL,
    `phone` varchar(250) DEFAULT NULL,
    `email`varchar(250) DEFAULT NULL,
    `dob` varchar(250) DEFAULT NULL,
    `contactType` varchar(250) DEFAULT NULL,
    `age` varchar(250) DEFAULT NULL,
     PRIMARY KEY (`id`)
) ENGINE=InnoDB;