DROP DATABASE foo;
CREATE DATABASE foo;
USE foo;
SELECT CURRENT_USER();
SHOW VARIABLES WHERE Variable_name = 'hostname';
SHOW VARIABLES WHERE Variable_name = 'port';
CREATE TABLE param (id INT(3), name VARCHAR(10), class VARCHAR(10), subject VARCHAR(20), score INT(3));
delimiter //
create procedure loop_insert(in maxNum int)
begin
  declare i int default 0;
  declare str varchar(45);
  while i < maxNum do
    set i = i + 1;
    set str = lpad(i, 3, '0');
    set @letter=substring('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789', rand()*62+1, 1);
    INSERT INTO param(id, name, class, subject, score) VALUES (str, SELECT concat(@letter,LEFT(UUID(),rand()),@letter,RIGHT(UUID(),rand()),@letter), floor(rand()*100), SELECT concat(@letter,LEFT(UUID(),rand()),@letter,RIGHT(UUID(),rand()),@letter), floor(rand()*100));
  end while;
end
//
call loop_insert(100);
SELECT * FROM param;
