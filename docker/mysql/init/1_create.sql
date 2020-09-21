/*
 Laravelのマイグレーションでテーブルを作成する
 */

/*
use test_db;
SET NAMES UTF8;

CREATE TABLE people
(
    id INT(11) AUTO_INCREMENT NOT NULL,
    name VARCHAR(255) NOT NULL,
    mail VARCHAR(255),
    age TINYINT UNSIGNED,
    create_at TIMESTAMP DEFAULT NULL,
    create_at TIMESTAMP DEFAULT NULL,
    PRIMARY KEY (id)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='人';
INSERT INTO people (name, mail, age) VALUES ('taro', 'taro@example.com', 10, NOW(), NOW());
INSERT INTO people (name, mail, age) VALUES ('jiro', 'jiro@example.com', 20, NOW(), NOW());
*/