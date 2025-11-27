CREATE DATABASE multi_user

CREATE TABLE USER (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nama VARCHAR(255) NOT NULL,
  username VARCHAR(255) NOT NULL,
  PASSWORD VARCHAR(255) NOT NULL,
  LEVEL VARCHAR(20) NOT NULL,
  PRIMARY KEY (id)
);

-- Insert data dummy untuk tes login
INSERT INTO USER (nama, username, PASSWORD, LEVEL) VALUES
('Malas Ngoding', 'admin', 'admin123', 'admin'),
('Diki Alfarabi', 'pegawai', 'pegawai123', 'pegawai'),
('Jamaludin', 'pengurus', 'pengurus123', 'pengurus');

-- Tabel untuk menyimpan data barang
CREATE TABLE barang (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nama_barang VARCHAR(255) NOT NULL,
  stok INT(11) NOT NULL,
  harga INT(11) NOT NULL,
  PRIMARY KEY (id)
);

-- Data dummy barang
INSERT INTO barang (nama_barang, stok, harga) VALUES
('Laptop Asus', 10, 7000000),
('Mouse Logitech', 50, 85000),
('Monitor Samsung', 20, 1500000);