CREATE TABLE busca (
	id INT PRIMARY KEY AUTO_INCREMENT,
    link VARCHAR(200),
    id_termo INT,
    CONSTRAINT fk_termo FOREIGN KEY (id) REFERENCES termo (id)
);