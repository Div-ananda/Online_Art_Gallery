CREATE DATABASE egm_users;

USE egm_users;

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `password` varchar(150) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY(id)
);

INSERT INTO `tbl_admin` (`id`, `fullname`, `username`, `email`, `gender`, `status`, `password`, `created_date`) VALUES
(1, 'Div Ananda', 'div', 'Divananda370@gmail.com', 'Male', 'Active', 'Div27112001', '2020-04-19 04:10:13');


CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `password` varchar(150) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY(id)
);

INSERT INTO `tbl_users` (`id`, `fullname`, `username`, `email`, `gender`, `status`, `password`, `created_date`) VALUES
(1, 'Div Ananda', 'div', 'Divananda370@gmail.com', 'Male', 'Active', 'Div27112001', '2020-04-19 04:10:13');