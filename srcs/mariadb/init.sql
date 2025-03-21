CREATE DATABASE IF NOT EXISTS wordpress;
CREATE USER 'tgerardi'@'%' IDENTIFIED BY 'securepassword';
GRANT ALL PRIVILEGES ON wordpress.* TO 'tgerardi'@'%';
FLUSH PRIVILEGES;