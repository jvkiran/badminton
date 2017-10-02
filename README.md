# badminton
php, mysql

Please. create table users

CREATE TABLE IF NOT EXISTS `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
 `password` varchar(50) NOT NULL,
 `mobile_number` varchar(15) NOT NULL,
 `gender` varchar(10) NOT NULL,
 PRIMARY KEY (`id`)
 );