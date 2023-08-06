DROP DATABASE foo;
CREATE DATABASE foo;
USE foo;
SELECT CURRENT_USER();
SHOW VARIABLES WHERE Variable_name = 'hostname';
SHOW VARIABLES WHERE Variable_name = 'port';
CREATE TABLE param (id INT(3), name VARCHAR(10), class VARCHAR(10), subject VARCHAR(10), score INT(3));
delimiter //
create procedure loop_insert(in maxNum int)
begin
  declare i int default 0;
  declare str varchar(45);
  while i < maxNum do
    set i = i + 1;
    set str = lpad(i, 3, '0');
    set @letter=substring('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789', rand()*62+1, 1);
    INSERT INTO param(id) VALUES (str);
    INSERT INTO param(name) VALUES (SELECT concat(@letter,LEFT(UUID(),rand()),@letter,RIGHT(UUID(),rand()),@letter));
    INSERT INTO param(class) VALUES (floor(rand()*100));
    INSERT INTO param(subject) VALUES ('National Language'), ('Mathematics'), ('Foreign Language'), ('Physics'), ('Chemistry'), ('Earth Science'), ('Biology'), ('Geography'), ('History'), ('Political Science'), ('Economics');
    INSERT INTO param(score) VALUES (floor(rand()*100));
  end while;
end
//
call loop_insert(100);
SELECT * FROM param;
