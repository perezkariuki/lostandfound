CREATE DATABASE LostandFound;

CREATE TABLE `credentials` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `FirstName` varchar(255) NOT NULL,
    `LastName` varchar(255) NOT NULL,
    `Phone` varchar(255) NOT NULL,
    `Email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `code` mediumint(50) NOT NULL,
    `status` text NOT NULL,
    PRIMARY KEY(`id`)
)