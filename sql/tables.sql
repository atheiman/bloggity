use bloggity ;
-- Build tables and relationships
-- Drop tables
drop table Manages ;
drop table Pages ;
drop table Posts ;
drop table Users ;
drop table UserTypes ;

-- Create tables and relationships
create table UserTypes
(
userType varchar(255) not null,
description varchar(255) not null,
primary key (userType)
) ;
create table Users
(
userID varchar(255) not null,
password varchar(255) not null,
userType varchar(255) not null,
firstName varchar(255) not null,
lastName varchar(255) not null,
email varchar(255),
primary key (userID),
foreign key (userType) references UserTypes(userType)
) ;
create table Posts
(
postID int not null auto_increment,
userID varchar(255) not null,
ts timestamp,
postTitle varchar(255) not null,
postContent text not null,
primary key (postID),
foreign key (userID) references Users(userID)
) ;
create table Pages
(
pageTitle varchar(255) not null,
pageContent text not null,
primary key (pageTitle)
) ;
create table Manages
(
userID varchar(255) not null,
pageTitle varchar(255) not null,
constraint userID_pageTitle primary key ( userID , pageTitle ),
foreign key (userID) references Users(userID),
foreign key (pageTitle) references Pages(pageTitle)
) ;
