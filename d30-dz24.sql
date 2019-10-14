show databases;

-- DROP DATABASE d30test_dz24;
-- CREATE database d30test_dz24;

use d30test_dz24;

-- create table categories (
-- id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
-- name VARCHAR(255),
-- slug VARCHAR(255),
-- created_at DATETIME,
-- updated_at DATETIME
-- );

-- INSERT INTO categories
-- (name,slug,created_at,updated_at)
-- VALUE
-- ('Categorie 1','cat1','2019-10-14','2019-10-14'),
-- ('Categorie 2','cat1','2019-10-14','2019-10-14');

-- create table users (
-- id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
-- name VARCHAR(255),
-- email VARCHAR(255) UNIQUE,
-- password VARCHAR(255),
-- created_at DATETIME,
-- updated_at DATETIME
-- );

-- INSERT INTO users
-- (name,email,password,created_at,updated_at)
-- VALUE
-- ('Sara','sarach.jons@rolty.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','2019-10-14','2019-10-14'),
-- ('Doy','doy.banks@rolty.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','2019-10-14','2019-10-14');

-- create table members (
-- id INT PRIMARY KEY AUTO_INCREMENT,-- NOT NULL,
-- email VARCHAR(255) UNIQUE,
-- password VARCHAR(255),
-- created_at DATETIME
-- );

-- INSERT INTO members
-- (email,password,created_at)
-- VALUE
-- ('sarach.jons@rolty.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','2019-10-14'),
-- ('doy.banks@rolty.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','2019-10-14');

-- select * from categories;
-- select * from posts;
-- select * from users;
select * from members;
