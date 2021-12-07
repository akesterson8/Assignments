CREATE TABLE `admins` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(250) DEFAULT NULL,
    `email`varchar(250) DEFAULT NULL,
    `password` varchar(250) DEFAULT NULL,
    `status` varchar(250) DEFAULT NULL,
     PRIMARY KEY (`id`)
) ENGINE=InnoDB;