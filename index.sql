DROP DATABASE foo;
CREATE DATABASE foo;
USE foo;
CREATE TABLE param (id INT(3), name VARCHAR(10), class VARCHAR(10), subject VARCHAR(10), score INT(3));
delimiter //
create procedure loop_insert(in maxNum int)
begin
  declare i int default 0;
  declare str varchar(45);
  while i < maxNum do
    set i = i + 1;
    set str = lpad(i, 3, '0');
    INSERT INTO param(id, name, class, subject, score) VALUES (str, LEFT(UUID(),rand()*10), floor(rand()*100), LEFT(UUID(),rand()*10), floor(rand()*100));
  end while;
end
//
call loop_insert(100);
SELECT * FROM param;
