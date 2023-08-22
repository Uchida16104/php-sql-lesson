DROP DATABASE foo;
CREATE DATABASE foo;
USE foo;
select user, host from mysql.user;
SELECT CURRENT_USER();
SHOW VARIABLES WHERE Variable_name = 'hostname';
SHOW VARIABLES WHERE Variable_name = 'port';
CREATE TABLE param (id INT(3), name VARCHAR(10), class VARCHAR(10), subject VARCHAR(20), score INT(3));
delimiter //
create procedure loop_insert(in maxNum int)
begin
  declare i int default 0;
  declare str varchar(45);
  declare letter varchar(45);
  while i < maxNum do
    set i = i + 1;
    set str = lpad(i, 3, '0');
    INSERT INTO param(id, name, class, subject, score) VALUES (str, LEFT(UUID(),rand()*5), floor(rand()*100), LEFT(UUID(),rand()*5), floor(rand()*100));
  end while;
end
//
call loop_insert(100);
SELECT * FROM param;

CREATE TABLE `category` (`category_id` int (11) NOT NULL, `category_name` varchar(100) CHARACTER SET utf8 DEFAULT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `category` (`category_id`,`category_name`) VALUES (1, 'vegetables'), (2, 'fruits'), (3, 'meats'), (4, 'fish'), (5, 'spices');
CREATE TABLE `product` (`product_id` int(11) NOT NULL,`product_code` int(11) DEFAULT NULL,`product_name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,`price` decimal(10,0) DEFAULT NULL,`category_id` int(11) DEFAULT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `product` (`product_id`,`product_code`, `product_name`, `price`, `category_id`) VALUES
(1, 1001, 'cabbage', '130', 1),
(2, 1002, 'lettuce', '150', 1),
(3, 1003, 'tomato', '100', 1),
(4, 1004, 'cucumber', '50', 1),
(5, 1005, 'apple', '170', 2),
(6, 1006, 'peach', '250', 2),
(7, 1007, 'pear', '300', 2),
(8, 1008, 'banana', '120', 2),
(9, 1009, 'beef', '500', 3),
(10, 1010, 'pork', '400', 3),
(11, 1011, 'chicken', '300', 3),
(12, 1012, 'pacific saury', '200', 4),
(13, 1013, 'horse mackerel ', '120', 4),
(14, 1014, 'mackerel', '150', 4),
(15, 1015, 'salt', '100', 5),
(16, 1016, 'pepper', '500', 5),
(17, 1017, 'sugar', '100', 5),
(18, 1018, 'soy sauce', '150', 5),
(19, 1019, 'croquette', '100', 6);
ALTER TABLE `category` ADD PRIMARY KEY (`category_id`);
ALTER TABLE `product` ADD PRIMARY KEY (`product_id`);
SELECT * FROM category;
SELECT * FROM product;
SELECT product_name,price FROM product;
SELECT product_name,price FROM product WHERE price >= 200;
SELECT product_name,price FROM product WHERE product_name LIKE '%e';
SELECT product_name,price FROM product WHERE product_name LIKE '_e';
SELECT product_name,price FROM product WHERE product_name LIKE '%r';
SELECT product_name,price FROM product WHERE product_name LIKE '_r';
SELECT product_name,price FROM product WHERE product_name LIKE '%l';
SELECT product_name,price FROM product WHERE product_name LIKE '_l';
SELECT product_name,price FROM product WHERE price >= 200 ORDER BY price;
SELECT product_name,price FROM product WHERE price <= 300 ORDER BY price ASC,category_id DESC;
SELECT product_name,price FROM product WHERE price >= 400 ORDER BY price DESC,category_id ASC;
SELECT category_id FROM product GROUP BY category_id;
SELECT category_id,count(*) AS 'goodscount' FROM product GROUP BY category_id;
SELECT category_id,price,count(1) AS 'countgoods' FROM product GROUP BY category_id,price;
SELECT product.product_name,category.category_name,product.price FROM product INNER JOIN category ON product.category_id = category.category_id WHERE product.price <= 100;
SELECT product.product_name,category.category_name,product.price FROM product LEFT JOIN category ON product.category_id = category.category_id WHERE product.price <= 100;
INSERT INTO product(product_id,product_code,product_name,price,category_id) VALUES
  (20,1020,'bean sprouts',30,1),
  (21,1021,'shallot',200,1);
SELECT * FROM product;
UPDATE product SET price = price * 0.9 WHERE product_id = 20;
SELECT * FROM product;
UPDATE product SET price = price * 0.5, product_name="broccoli" WHERE product_id = 20;
SELECT * FROM product;
DELETE FROM product WHERE product_id = 20;
SELECT * FROM product;
DELETE FROM product WHERE product_id = 21;
SELECT * FROM product;
create user 'hirotoshiuchida'@'localhost' identified by 'user123';
