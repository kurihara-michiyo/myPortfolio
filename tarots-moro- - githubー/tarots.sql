drop database if exists tarots;
create database tarots default character set utf8 collate utf8_general_ci;
drop user if exists 'tarots' @'localhost';
create user 'tarots' @'localhost' identified by 'password';
grant all on tarots.* to 'tarots' @'localhost';
use tarots;


create table customer (
  id int auto_increment primary key,
  name varchar(100) not null,
  kana varchar(100) not null,
  tel int not null,
  mail varchar(100) not null,
  day int not null,
  time int not null,
  text varchar(255) not null
);