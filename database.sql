CREATE DATABASE crud;
USE crud;

CREATE TABLE header (
    id INT AUTO_INCREMENT PRIMARY KEY,
    logo_text VARCHAR(100),
    item1 VARCHAR(50),
    item2 VARCHAR(50),
    item3 VARCHAR(50)
);

INSERT INTO header (logo_text, item1, item2, item3)
VALUES ('Cars', 'New Cars', 'Used Cars', 'Contact');

CREATE TABLE banners (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150),
    image VARCHAR(200)
);

CREATE TABLE cars (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    image VARCHAR(200),
    type ENUM('most_searched','latest')
);
