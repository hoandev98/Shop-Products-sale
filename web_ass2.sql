-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 28, 2019 at 02:11 PM
-- Server version: 5.7.26
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_ass2`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE DATABASE `web_ass2`;
USE `web_ass2`;

DROP TABLE IF EXISTS `chitiethoadon`;
CREATE TABLE IF NOT EXISTS `chitiethoadon` (
  `MaHD` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` float NOT NULL,
  KEY `MaHD` (`MaHD`),
  KEY `MaSP` (`MaSP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

DROP TABLE IF EXISTS `danhgia`;
CREATE TABLE IF NOT EXISTS `danhgia` (
  `MaSP` int(11) NOT NULL,
  `MaND` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `SoSao` int(11) NOT NULL,
  `BinhLuan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NgayLap` datetime NOT NULL,
  KEY `MaSP` (`MaSP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhgia`
--

INSERT INTO `danhgia` (`MaSP`, `MaND`, `SoSao`, `BinhLuan`, `NgayLap`) VALUES
(4, '2', 4, 'Hoàng trần đẹp trai', '2019-05-16 19:28:13'),
(4, '2', 1, 'Chưa tốt! cần cải thiện nhiều', '2019-05-16 19:29:30'),
(2, '2', 4, 'Giảm giá 500k , quá gắt <3', '2019-05-16 19:31:48'),
(46, '2', 4, 'Đỏ may mắn <3', '2019-05-16 19:32:58'),
(44, '4', 5, 'wow, giá rẻ cấu hình ngon đây rồi <3', '2019-05-16 19:38:03'),
(4, '4', 4, 'đẹp', '2019-05-16 19:47:56'),
(2, '4', 3, 'aaa sơn cmn tùng <3', '2019-05-16 19:48:46'),
(44, '4', 3, 'Ram có 1GB tiếc quá', '2019-05-16 19:49:20'),
(46, '4', 2, 'Pin khá tệ ', '2019-05-16 19:49:44'),
(15, '4', 4, 'mua vài chục cái về cho con cháu chọi nhau chơi :v', '2019-05-16 19:52:14');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE IF NOT EXISTS `hoadon` (
  `MaHD` int(11) NOT NULL AUTO_INCREMENT,
  `MaND` int(11) NOT NULL,
  `NgayLap` datetime NOT NULL,
  `NguoiNhan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PhuongThucTT` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TongTien` float NOT NULL,
  `TrangThai` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaHD`),
  KEY `MaKH` (`MaND`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

DROP TABLE IF EXISTS `khuyenmai`;
CREATE TABLE IF NOT EXISTS `khuyenmai` (
  `MaKM` int(11) NOT NULL AUTO_INCREMENT,
  `TenKM` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `LoaiKM` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `GiaTriKM` float NOT NULL,
  `NgayBD` datetime NOT NULL,
  `NgayKT` datetime NOT NULL,
  PRIMARY KEY (`MaKM`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khuyenmai`
--

INSERT INTO `khuyenmai` (`MaKM`, `TenKM`, `LoaiKM`, `GiaTriKM`, `NgayBD`, `NgayKT`) VALUES
(1, 'Không khuyến mãi', 'Nothing', 0, '2019-04-08 00:00:00', '2022-04-17 00:00:00'),
(2, 'Giảm giá', 'GiamGia', 500000, '2019-05-01 00:00:00', '2019-05-31 00:00:00'),
(3, 'Giá rẻ online', 'GiaReOnline', 650000, '2019-05-01 00:00:00', '2019-05-31 00:00:00'),
(4, 'Trả góp', 'TraGop', 0, '2019-05-01 00:00:00', '2019-05-31 00:00:00'),
(5, 'Mới ra mắt', 'MoiRaMat', 0, '2019-05-01 00:00:00', '2019-05-31 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

DROP TABLE IF EXISTS `loaisanpham`;
CREATE TABLE IF NOT EXISTS `loaisanpham` (
  `MaLSP` int(11) NOT NULL AUTO_INCREMENT,
  `TenLSP` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Mota` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaLSP`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLSP`, `TenLSP`, `HinhAnh`, `Mota`) VALUES
(1, 'Apple', 'Apple.jpg', 'Các sản phẩm của Apple'),
(2, 'Coolpad', 'Coolpad.png', 'Các sản phẩm của coolpad'),
(3, 'HTC', 'HTC.jpg', 'Các sản phẩm đến từ HTC'),
(4, 'Itel', 'Itel.jpg', 'Các sản phẩm của Itel'),
(5, 'Mobell', 'Mobell.jpg', 'Các sản phẩm của mobell'),
(6, 'Vivo', 'Vivo.jpg', 'Các sản phẩm của Vivo'),
(7, 'Oppo', 'Oppo.jpg', 'Camara Selphi cuc chat tu Oppo'),
(8, 'SamSung', 'Samsung.jpg', 'Khuyen mai lon tu SamSung'),
(9, 'Phillips', 'Philips.jpg', 'Cac san pham tuyet dep tu Phillip'),
(10, 'Nokia', 'Nokia.jpg', 'Các sản phẩm đến từ thương hiệu Nokia'),
(11, 'Motorola', 'Motorola.jpg', 'Motorola is the best'),
(12, 'Mobiistar', 'Mobiistar.jpg', 'Các sản phẩm đến từ thương hiệu Mobiistar'),
(14, 'Xiaomi', 'Xiaomi.png', 'Các sản phẩm đến từ thương hiệu Xiaomi');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

DROP TABLE IF EXISTS `nguoidung`;
CREATE TABLE IF NOT EXISTS `nguoidung` (
  `MaND` int(11) NOT NULL AUTO_INCREMENT,
  `Ho` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Ten` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `GioiTinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `TaiKhoan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MaQuyen` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL,
  PRIMARY KEY (`MaND`),
  KEY `MaQuyen` (`MaQuyen`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`MaND`, `Ho`, `Ten`, `GioiTinh`, `SDT`, `Email`, `DiaChi`, `TaiKhoan`, `MatKhau`, `MaQuyen`, `TrangThai`) VALUES
(1, 'Tran', 'Hoang', '', '0123456789', 'thoang99@gmail.com', '', 'HoangLol', 'e10adc3949ba59abbe56e057f20f883e', 1, 1),
(2, 'Nguyễn', 'Hoàn', '', '0377601559', '', '', 'hoan', '1', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--

DROP TABLE IF EXISTS `phanquyen`;
CREATE TABLE IF NOT EXISTS `phanquyen` (
  `MaQuyen` int(11) NOT NULL AUTO_INCREMENT,
  `TenQuyen` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ChiTietQuyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaQuyen`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phanquyen`
--

INSERT INTO `phanquyen` (`MaQuyen`, `TenQuyen`, `ChiTietQuyen`) VALUES
(1, 'Customer', 'Khách hàng có tài khoản'),
(2, 'Admin', 'Admin system');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `MaSP` int(11) NOT NULL AUTO_INCREMENT,
  `MaLSP` int(11) NOT NULL,
  `TenSP` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `DonGia` int(11) NOT NULL,
  `SoLuong` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `HinhAnh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `MaKM` int(11) NOT NULL,
  `Details` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `SoSao` int(11) NOT NULL,
  `SoDanhGia` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL,
  PRIMARY KEY (`MaSP`),
  KEY `LoaiSP` (`MaLSP`),
  KEY `MaKM` (`MaKM`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `MaLSP`, `TenSP`, `DonGia`, `SoLuong`, `HinhAnh`, `MaKM`, `Details`, `SoSao`, `SoDanhGia`, `TrangThai`) VALUES
(1, 8, 'SamSung Galaxy J4+', 3490000, 10, 'img/products/samsung-galaxy-j4-plus-pink-400x400.jpg', 4, 'IPS LCD, 6.0\', HD+', 0, 0, 1),
(2, 7, 'Oppo F9', 7690000, 10, 'img/products/oppo-f9-red-600x600.jpg', 2, 'LTPS LCD, 6.3\', Full HD+', 4, 2, 1),
(3, 10, 'Nokia 5.1 Plus', 4790000, 10, 'img/products/nokia-51-plus-black-18thangbh-400x400.jpg', 2, 'IPS LCD, 5.8\', HD+', 0, 0, 1),
(4, 1, 'iPhone X 256GB Silver', 31990000, 10, 'img/products/iphone-x-256gb-silver-400x400.jpg', 3, 'OLED, 5.8\', Super Retina', 3, 3, 1),
(5, 8, 'Samsung Galaxy J8', 6290000, 10, 'img/products/samsung-galaxy-j8-600x600-600x600.jpg', 2, 'Super AMOLED, 6.0\', HD+', 0, 0, 1),
(6, 8, 'Samsung Galaxy A8+ (2018)', 11990000, 10, 'img/products/samsung-galaxy-a8-plus-2018-gold-600x600.jpg', 2, 'Super AMOLED, 6\', Full HD+', 0, 0, 1),
(7, 7, 'Oppo A3s 32GB', 4690000, 10, 'img/products/oppo-a3s-32gb-600x600.jpg', 4, 'IPS LCD, 6.2\', HD+', 0, 0, 1),
(8, 14, 'Xiaomi Mi 8 Lite', 6690000, 10, 'img/products/xiaomi-mi-8-lite-black-1-600x600.jpg', 4, 'IPS LCD, 6.26\', Full HD+', 0, 0, 1),
(9, 1, 'iPad 2018 Wifi 32GB', 8990000, 10, 'img/products/ipad-wifi-32gb-2018-thumb-600x600.jpg', 4, 'LED-backlit LCD, 9.7p\'\'', 0, 0, 1),
(10, 14, 'Xiaomi Mi 8', 12990000, 10, 'img/products/xiaomi-mi-8-1-600x600.jpg', 1, 'IPS LCD, 6.26\', Full HD+', 0, 0, 1),
(11, 1, 'iPhone 7 Plus 32GB', 17000000, 10, 'img/products/iphone-7-plus-32gb-hh-600x600.jpg', 3, 'LED-backlit IPS LCD, 5.5\', Retina HD', 0, 0, 1),
(12, 12, 'Mobiistar X', 3490000, 10, 'img/products/mobiistar-x-3-600x600.jpg', 4, 'IPS LCD, 5.86\', HD+', 0, 0, 1),
(13, 12, 'Mobiistar E Selfie', 2490000, 10, 'img/products/mobiistar-e-selfie-300-1copy-600x600.jpg', 1, 'IPS LCD, 6.0\', HD+', 0, 0, 1),
(14, 12, 'Mobiistar Zumbo S2 Dual', 2850000, 10, 'img/products/mobiistar-zumbo-s2-dual-300x300.jpg', 5, 'IPS LCD, 5.5\', Full HD', 0, 0, 1),
(15, 12, 'Mobiistar B310', 260000, 10, 'img/products/mobiistar-b310-orange-600x600.jpg', 5, 'LCD, 1.8\', QQVGA', 4, 1, 1),
(16, 14, 'Xiaomi Redmi Note 5', 5690000, 10, 'img/products/xiaomi-redmi-note-5-pro-600x600.jpg', 5, 'IPS LCD, 5.99\', Full HD+', 0, 0, 1),
(17, 14, 'Xiaomi Redmi 5 Plus 4GB', 4790000, 10, 'img/products/xiaomi-redmi-5-plus-600x600.jpg', 1, 'IPS LCD, 5.99\', Full HD+', 0, 0, 1),
(21, 10, 'Nokia black future', 999999000, 10, 'https://cdn.tgdd.vn/Products/Images/42/22701/dien-thoai-di-dong-Nokia-1280-dienmay.com-l.jpg', 2, '4K, Chống nước, Chống trầy', 0, 0, 1),
(22, 8, 'Samsung Galaxy A7 (2018)', 8990000, 10, 'https://cdn.tgdd.vn/Products/Images/42/194327/samsung-galaxy-a7-2018-128gb-black-400x400.jpg', 4, 'Super AMOLED, 6.0\', Full HD+', 0, 0, 1),
(30, 6, 'Vivo V9', 7490000, 10, 'https://cdn.tgdd.vn/Products/Images/42/155047/vivo-v9-2-1-600x600-600x600.jpg', 2, 'IPS LCD, 6.3\', Full HD+', 0, 0, 1),
(31, 6, 'Vivo V11', 10990000, 10, 'https://cdn.tgdd.vn/Products/Images/42/188828/vivo-v11-600x600.jpg', 4, 'Super AMOLED, 6.41\', Full HD+', 0, 0, 1),
(32, 6, 'Vivo Y71', 3290000, 10, 'https://cdn.tgdd.vn/Products/Images/42/158585/vivo-y71-docquyen-600x600.jpg', 4, 'IPS LCD, 6.0\', HD+', 0, 0, 1),
(33, 6, 'Vivo Y85', 4990000, 10, 'https://cdn.tgdd.vn/Products/Images/42/156205/vivo-y85-red-docquyen-600x600.jpg', 2, 'IPS LCD, 6.22\', HD+', 0, 0, 1),
(34, 5, 'Mobell M789', 550000, 10, 'https://cdn.tgdd.vn/Products/Images/42/92016/mobell-m789-8-300x300.jpg', 1, 'TFT, 2.4\', 65.536 màu', 0, 0, 1),
(35, 5, 'Mobell Rock 3', 590000, 10, 'https://cdn.tgdd.vn/Products/Images/42/112837/mobell-rock-3-2-300x300.jpg', 1, 'TFT, 2.4\', 65.536 màu', 0, 0, 1),
(36, 5, 'Mobell S60', 1790000, 10, 'https://cdn.tgdd.vn/Products/Images/42/193271/mobell-s60-red-1-600x600.jpg', 5, 'LCD, 5.5\', FWVGA', 0, 0, 1),
(37, 4, 'Itel P32', 1890000, 10, 'https://cdn.tgdd.vn/Products/Images/42/186851/itel-p32-gold-600x600.jpg', 1, 'IPS LCD, 5.45\', qHD', 0, 0, 1),
(38, 4, 'Itel A32F', 1350000, 10, 'https://cdn.tgdd.vn/Products/Images/42/193990/itel-a32f-pink-gold-600x600.jpg', 5, 'TFT, 5\', FWVGA', 0, 0, 1),
(39, 4, 'Itel it2123', 160000, 10, 'https://cdn.tgdd.vn/Products/Images/42/146651/itel-it2123-d-300-300x300.jpg', 1, 'TFT, 1.77\', 65.536 màu', 0, 0, 1),
(40, 4, 'Itel it2161', 170000, 10, 'https://cdn.tgdd.vn/Products/Images/42/193989/itel-it2161-600x600.jpg', 5, 'TFT, 1.77\', WVGA', 0, 0, 1),
(41, 2, 'Coolpad N3D', 2390000, 10, 'https://cdn.tgdd.vn/Products/Images/42/193504/coolpad-n3d-blue-600x600.jpg', 5, 'IPS LCD, 5.45\', HD+', 0, 0, 1),
(42, 3, 'HTC U12 life', 7690000, 10, 'https://cdn.tgdd.vn/Products/Images/42/186397/htc-u12-life-1-600x600.jpg', 5, 'Super LCD, 6\', Full HD+', 0, 0, 1),
(43, 2, 'Coolpad N3 mini', 1390000, 10, 'https://cdn.tgdd.vn/Products/Images/42/193503/coolpad-n3-mini-600x600.jpg', 5, 'IPS LCD, 5\', WVGA', 0, 0, 1),
(44, 2, 'Coolpad N3', 1890000, 10, 'https://cdn.tgdd.vn/Products/Images/42/193502/coolpad-n3-gray-1-600x600.jpg', 5, 'IPS LCD, 5.45\', HD+', 4, 2, 1),
(45, 11, 'Motorola Moto C 4G', 1290000, 10, 'https://cdn.tgdd.vn/Products/Images/42/109099/motorola-moto-c-4g-300-300x300.jpg', 1, 'TFT, 5\', FWVGA', 0, 0, 1),
(46, 1, 'iPhone Xr 128GB', 24990000, 10, 'https://cdn.tgdd.vn/Products/Images/42/191483/iphone-xr-128gb-red-600x600.jpg', 3, 'IPS LCD, 6.1\', IPS LCD, 16 triệu màu', 3, 2, 1),
(47, 1, 'iPhone 8 Plus 64GB', 20990000, 10, 'https://cdn.tgdd.vn/Products/Images/42/114110/iphone-8-plus-hh-600x600.jpg', 4, 'LED-backlit IPS LCD, 5.5\', Retina HD', 0, 0, 1),
(48, 1, 'iPhone Xr 64GB', 22990000, 10, 'https://cdn.tgdd.vn/Products/Images/42/190325/iphone-xr-black-400x460.png', 3, 'IPS LCD, 6.1\', IPS LCD, 16 triệu màu', 0, 0, 1),
(49, 1, 'iPhone 8 Plus 256GB', 25790000, 10, 'https://cdn.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb-red-600x600.jpg', 2, 'LED-backlit IPS LCD, 4.7\', Retina HD', 0, 0, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`),
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`);

--
-- Constraints for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaND`) REFERENCES `nguoidung` (`MaND`);

--
-- Constraints for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`MaQuyen`) REFERENCES `phanquyen` (`MaQuyen`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaLSP`) REFERENCES `loaisanpham` (`MaLSP`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`MaKM`) REFERENCES `khuyenmai` (`MaKM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
