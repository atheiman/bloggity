-- Create MySQL User and DB
drop database bloggity ;
create database bloggity ;
drop user 'bloggity'@'localhost' ;
create user 'bloggity'@'localhost' identified by 'bloggity_pass' ;
grant all privileges on bloggity.* to 'bloggity'@'localhost' ;
flush privileges ;
