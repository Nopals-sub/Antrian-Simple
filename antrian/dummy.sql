CREATE DATABASE IF NOT EXISTS `your_database_name`;

USE `your_database_name`;

-- Tabel pengguna (users)
CREATE TABLE IF NOT EXISTS `users` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` VARCHAR(50) NOT NULL,
  `password` VARCHAR(255) NOT NULL
);

-- Dummy data pengguna
INSERT INTO `users` (`username`, `password`) VALUES
('admin', 'admin'),
('user1', 'password1'),
('user2', 'password2'),
('user3', 'password3');
