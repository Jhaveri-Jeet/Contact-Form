DROP DATABASE IF EXISTS `showroom`;

CREATE DATABASE `showroom`;

USE `showroom`;

CREATE TABLE
    `contact_form` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `Full_Name` VARCHAR(255) NOT NULL,
        `Mobile_Number` VARCHAR(255) NOT NULL,
        `Email` VARCHAR(255) NOT NULL,
        `Subject` VARCHAR(255) NOT NULL,
        `Message` VARCHAR(255) NOT NULL,
        `Ip` VARCHAR(255) NOT NULL,
        `Date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
    );