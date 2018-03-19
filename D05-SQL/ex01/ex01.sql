CREATE TABLE ft_table 
(
	id INT PRIMARY KEY AUTO_INCREMENT, 
	login CHAR(8) DEFAULT "toto", 
	groupe ENUM('staff','student','other') NOT NULL,
	date_de_creation DATE NOT NULL
);