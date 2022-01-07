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
    PRIMARY KEY(`id`);

CREATE TABLE `foundItems`(
    `idFound` int(255) NOT NULL AUTO_INCREMENT,
    `img` LONGBLOB NOT NULL,
    `category` varchar(255) NOT NULL,
    `serial` varchar(255),
    `brand` varchar(255) NOT NULL,
    `colour` varchar(255) NOT NULL,
    `datetime` DATE NOT NULL,
    `location` varchar(255) NOT NULL,
    `description` text NOT NULL,
    `credentials_id` int(11) NOT NULL,
    PRIMARY KEY (`idFound`),
    CONSTRAINT FK_foundItems_1
    FOREIGN KEY (credentials_id) REFERENCES credentials(id)
    ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE `lostItems`(
    `idLost` int(255) NOT NULL AUTO_INCREMENT,
    `img` LONGBLOB NOT NULL,
    `category` varchar(255) NOT NULL,
    `serial` varchar(255),
    `brand` varchar(255) NOT NULL,
    `colour` varchar(255) NOT NULL,
    `datetime` DATE NOT NULL,
    `location` varchar(255) NOT NULL,
    `description` text NOT NULL,
    `credentials_id` int(11) NOT NULL,
    PRIMARY KEY (`idLost`),
    CONSTRAINT FK_lostItems_1
    FOREIGN KEY (credentials_id) REFERENCES credentials(id)
    ON UPDATE CASCADE ON DELETE CASCADE
);