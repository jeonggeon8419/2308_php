CREATE DATABASE mini_board;

USE mini_board;

CREATE TABLE boards(
	id_no INT PRIMARY KEY AUTO_INCREMENT
	,title VARCHAR(100) NOT NULL
	,content VARCHAR(1000) NOT NULL
	,create_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
	,delete_flg CHAR(1) NOT NULL DEFAULT '0'
	,delete_at DATETIME DEFAULT NULL	
);