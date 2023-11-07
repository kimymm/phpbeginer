use mysql;
show tables;
select * from user;
select * from db;
delete from db where db = 'sample';
delete from user where user = 'user1';
flush privileges;
show databases;
drop database sample2_C;

create user 'user1'@localhost identified by '1234';
flush privileges;
select host, user, password from user;

create database 2_C;
show databases;

use 2_C;
grant all privileges on 2_c.* to 'user1'@localhost identified by '1234' with grant option;
flush privileges;

show grants for 'user1'@localhost;

drop user 'user1'@localhost; /*삭제*/