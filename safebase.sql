DROP DATABASE IF EXISTS `safebase`;

CREATE DATABASE `safebase`;
USE `safebase`;


CREATE TABLE `database` (
  id INT AUTO_INCREMENT PRIMARY KEY,
  db_name VARCHAR(100) NOT NULL,            
  db_host VARCHAR(100) NOT NULL,            
  db_port INTEGER DEFAULT 5432,             
  db_user VARCHAR(50) NOT NULL,             
  db_password VARCHAR(100) NOT NULL,        
  db_type VARCHAR(50), 
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
);

CREATE TABLE Type(
   id COUNTER,
   nom VARCHAR(50) NOT NULL,
   version DECIMAL(15,2) NOT NULL,
   PRIMARY KEY(id)
);


CREATE TABLE Dump(
   id COUNTER,
   version DATETIME NOT NULL,
   id_1 INT NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(id_1) REFERENCES Database(id)
);

CREATE TABLE Alert(
   id COUNTER,
   message TEXT,
   dateAlert VARCHAR(50) NOT NULL,
   id_1 INT NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(id_1) REFERENCES Database(id)
);