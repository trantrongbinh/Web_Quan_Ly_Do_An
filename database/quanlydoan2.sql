-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2017 at 06:11 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlydoan2`
--

-- --------------------------------------------------------

--
-- Table structure for table `baocao`
--

CREATE TABLE `baocao` (
  `id` int(30) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `idDA` int(30) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bomon`
--

CREATE TABLE `bomon` (
  `idBM` int(30) UNSIGNED NOT NULL,
  `TenBM` varchar(255) NOT NULL,
  `TenBMKD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bomon`
--

INSERT INTO `bomon` (`idBM`, `TenBM`, `TenBMKD`) VALUES
(1, 'Công Nghệ Phần Mềm', 'CNPM'),
(2, 'Hệ Thống Thông Tin', 'HTTT'),
(3, 'Khoa Học Máy Tính', 'KHMT'),
(4, 'Kỹ Thuật Máy Tính', 'KTTM'),
(5, 'Trung Tâm Máy Tính', 'TTMT'),
(6, 'Truyền Thông Và Mạng Máy Tính', 'TTMMT');

-- --------------------------------------------------------

--
-- Table structure for table `chitiet`
--

CREATE TABLE `chitiet` (
  `id` int(30) UNSIGNED NOT NULL,
  `idDA` int(30) UNSIGNED NOT NULL,
  `TomTat` text NOT NULL,
  `NoiDung` longtext NOT NULL,
  `NoiBat` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitiet`
--

INSERT INTO `chitiet` (`id`, `idDA`, `TomTat`, `NoiDung`, `NoiBat`) VALUES
(1, 1, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<h3>Nội dung:</h3>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 1),
(2, 2, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<h3>Nội dung:</h3>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 0),
(3, 3, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<h3>Nội dung:</h3>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 0),
(4, 4, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<h3>Nội dung:</h3>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 1),
(5, 5, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<h3>Nội dung:</h3>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 1),
(6, 6, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<h3>Nội dung:</h3>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 0),
(7, 7, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<h3>Nội dung:</h3>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 0),
(8, 8, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<h3>Nội dung:</h3>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 1),
(9, 9, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<h3>Nội dung:</h3>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 0),
(10, 10, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<h3>Nội dung:</h3>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 1),
(11, 11, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<h3>Nội dung:</h3>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 0),
(12, 12, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<h3>Nội dung:</h3>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 1),
(13, 13, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<h3>Nội dung:</h3>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 0),
(14, 14, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<h3>Nội dung:</h3>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 0),
(15, 15, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<h3>Nội dung:</h3>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 0),
(16, 16, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<h3>Nội dung:</h3>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 0),
(17, 17, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<h3>Nội dung:</h3>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 1),
(18, 18, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<h3>Nội dung:</h3>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 1),
(19, 19, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<h3>Nội dung:</h3>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 0),
(20, 20, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<h3>Nội dung:</h3>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 1),
(21, 21, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<h3>Nội dung:</h3>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `mssv` varchar(30) NOT NULL,
  `idDA` int(30) UNSIGNED NOT NULL,
  `NoiDung` varchar(255) NOT NULL,
  `creater_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `mssv`, `idDA`, `NoiDung`, `creater_at`) VALUES
(1, '1', 1, 'Hay quá.', '2017-09-19 16:00:00'),
(2, '2', 2, 'Tuyệt vời.', '2017-09-20 16:00:00'),
(3, '3', 12, 'Hay quá thầyy cô ơi.', '2017-09-20 16:00:00'),
(4, '3', 7, 'Nhạt nhẽo.', '2017-09-22 16:00:00'),
(5, '2', 10, 'Cũ quá.', '2017-09-29 16:00:00'),
(6, '1', 1, 'tuyệt cú mèo.', NULL),
(7, '1', 10, 'đề tài này rất hay, nhưng theo tôi thì nên abcxyz thì hơn. =))', NULL),
(8, '1', 11, 'quá chán, làm rất nhiều rồi.', NULL),
(9, '3', 19, 'tuyệt cú mèo.', NULL),
(10, '3', 5, '=))', NULL),
(11, 'SV4', 1, 'em tham gia với ạ.\r\n', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doan`
--

CREATE TABLE `doan` (
  `idDA` int(30) UNSIGNED NOT NULL,
  `TênDA` varchar(255) NOT NULL,
  `CongNghe` varchar(255) NOT NULL,
  `idL` int(30) UNSIGNED NOT NULL,
  `mssv` varchar(30) NOT NULL,
  `magv` varchar(30) NOT NULL,
  `TrangThai` varchar(255) NOT NULL,
  `Diem` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doan`
--

INSERT INTO `doan` (`idDA`, `TênDA`, `CongNghe`, `idL`, `mssv`, `magv`, `TrangThai`, `Diem`) VALUES
(1, 'CNPM-Xây dựng phần mềm quản lý công văn và tài liệu Khoa CNTT', 'Web', 1, 'SV1', 'GV1', 'chấp nhận', '9'),
(2, 'Xây dựng phần mềm hỗ trợ kế toán', 'WEB', 2, 'SV2', 'GV2', 'chấp nhận', '9'),
(3, 'Xây dựng hệ thống giám sát phòng học, phòng thi từ xa', 'Web/Lan', 3, 'SV3', 'GV3', 'chấp nhận', '9'),
(4, 'Xây dựng hệ thống quản lý giao, nhận việc ở Học viện Chính trị- Hành chính Quốc gia Hồ Chí Minh', 'web', 4, 'SV4', 'GV4', 'Hoàn thành', '9'),
(5, 'Xây dựng hệ thống Quản lý cho Vụ Quản lý khoa học- Học viện Chính trị- Hành chính Quốc gia Hồ Chí Minh ', 'Java', 5, 'SV5', 'GV5', 'hoàn thành', '9'),
(6, 'Xây dựng hệ thống Quản lý thi đua - khen thưởng', 'PHP&MySQL', 6, 'SV6', 'GV2', 'hoàn thành', '8'),
(7, 'Quản lý trung tâm y tế', '.NET', 7, 'SV5', 'GV3', 'hoàn thành', '10'),
(8, 'Quản lý phòng xe', 'Gadget Platform', 8, 'SV7', 'GV1', 'hoàn thành', '9.5'),
(9, 'Quản lý đào tạo- Quản lý học viên', 'WEB + J2ME', 9, 'SV6', 'GV5', 'hoàn thành', '5'),
(10, 'Quản lí nhân sự và bảo hiểm', 'WEB + J2ME', 10, 'SV2', 'GV1', 'chờ phê duyệt', ''),
(11, 'Xây dựng hệ thống Quản lý vật tư- xăng xe', 'Java', 11, 'SV7', 'GV3', 'Chấp nhận', ''),
(12, 'Xây dựng Website hỗ trợ tra cứu thông tin tuyển sinh.', 'Web', 12, 'SV3', 'GV3', 'chấp nhận', ''),
(13, 'Xây dựng cổng thông tin tương tác giữa sinh viên và Khoa CNTT ', 'Java/ HĐH android cho mobile', 13, 'SV2', 'GV4', 'hoàn thành', 'A+'),
(14, 'Tìm hiểu phương pháp lập trình Gadgets trên Window...', '.Net/SQL Server or PHP/My SQL', 14, 'SV1', 'GV1', 'chấp nhận', ''),
(15, 'Xây dựng hệ thống hỗ trợ dạy và học tiếng anh trực tuyến', '.Net/SQL Server or PHP/My SQL', 15, 'SV6', 'GV2', 'chờ phê duyệt', ''),
(16, 'Xây dựng hệ thống trực tuyến (dạng Web) với tích hợp công nghệ J2ME cho điện thoại di động', 'Java, C#', 16, 'SV1', 'GV5', 'chấp nhận', ''),
(17, 'Xây dựng hệ thống từ điển multimedia thuật ngữ tin học.', 'web', 17, 'SV7', 'GV4', 'hoàn thành', '8'),
(18, 'Nghiên cứu phương pháp khai phá luật kết hợp mờ dựa trên đại số 2 gia tử.', 'VB, VC++, Java, C#', 18, 'SV2', 'GV4', 'hoàn thành', 'B'),
(19, 'CNPM-Nghiên cứu phương pháp xây dựng hệ luật mờ phân lớp dựa trên đại số 2 gia tử.', 'PHP/ASP/ASP.NET', 1, 'SV7', 'GV3', 'chờ phê duyệt', ''),
(20, 'CNPM-Lập trình ứng ụng để xác thực việc trao đổi dữ liệu trên mạng.', 'C/C++/C#', 1, 'SV5', 'GV3', 'chấp nhận', ''),
(21, 'CNPM-Xây dựng website về môi trường', 'ASP/Asp.NET', 1, 'SV6', 'GV2', 'hoàn thành', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

CREATE TABLE `giangvien` (
  `magv` varchar(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`magv`, `name`, `email`, `password`) VALUES
('GV1', 'Trân Hoàng Ca', 'gv1@gmail.com', '123'),
('GV2', 'Trịnh Thanh Tùng', 'gv2@gmail.com', '123'),
('GV3', 'Trịnh Anh Phúc', 'gv3@gmail.com', '123'),
('GV4', 'Lê Thùy Giang', 'gv4@gmail.com', '123'),
('GV5', 'Trần Văn Thiệu', 'gv5@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `idL` int(30) UNSIGNED NOT NULL,
  `TenL` varchar(255) NOT NULL,
  `TenLKD` varchar(255) NOT NULL,
  `idBM` int(30) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`idL`, `TenL`, `TenLKD`, `idBM`) VALUES
(1, 'Đồ án chuyên ngành CNPM', 'ChuyenNganhCNPM', 1),
(2, 'Đồ án tốt nghiệp CNPM', 'TotNghiepCNPM', 1),
(3, 'Đồ án tự do CNPM', 'TuDoCNPM', 1),
(4, 'Đồ án chuyên ngành HTTT', 'ChuyenNganhHTTT', 2),
(5, 'Đồ án tốt nghiệp HTTT', 'TotNghiepHTTT', 2),
(6, 'Đồ án tự do HTTT', 'TuDoHTTT', 2),
(7, 'Đồ án chuyên ngành KHMT', 'ChuyenNganhKHMT', 3),
(8, 'Đồ án tốt nghiệp KHMT', 'TotNghiepKHMT', 3),
(9, 'Đồ án tự do KHMT', 'TuDoKHMT', 3),
(10, 'Đồ án chuyên ngành KTMT', 'ChuyenNganhKTMT', 4),
(11, 'Đồ án tốt nghiệp KTMT', 'TotNghiepKTMT', 4),
(12, 'Đồ án tự do KTMT', 'TuDoKHMT', 4),
(13, 'Đò án chuyên ngành TTMT', 'ChuyenNganhTTMT', 5),
(14, 'Đò án tốt nghiệp TTMT', 'TotNghiepTTMT', 5),
(15, 'Đồ án tự do TTMT', 'TuDoTTMT', 5),
(16, 'Đồ án chuyên ngành TT&MMT', 'ChuyenNganhTTMMT', 6),
(17, 'Đồ án tốt nghiệp TT&MMT', 'TotNghiepTTMMT', 6),
(18, 'Đồ án tự do TT&MMT', 'TuDoTTMMT', 6);

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `mssv` varchar(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`mssv`, `name`, `email`, `password`) VALUES
('SV1', 'Trần Trọng Bình', 'binhtt@gmail.com', '123'),
('SV2', 'Nguyễn Khấc Đạt', 'datkhac@gmail.com', '123'),
('SV3', 'Takuda', 'takuda@gmail.com', '123'),
('SV4', 'Lê Văn Luyện', 'sv4@gmail.com', '123'),
('SV5', 'Sơn Tùng MTP', 'sv5@gmail.com', '123'),
('SV6', 'Mai Kiểu Trang', 'sv6@gmail.com', '123'),
('SV7', 'Angena Phương Trinh', 'sv7@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `idSL` int(30) UNSIGNED NOT NULL,
  `Ten` varchar(255) NOT NULL,
  `Hinh` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`idSL`, `Ten`, `Hinh`, `link`) VALUES
(1, 'Hình một', '1.png', 'vlxxx.com'),
(2, 'Hình hai', '2.png', 'vlxxx.com'),
(3, 'Hình ba', '3.png', 'vlxxx.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baocao`
--
ALTER TABLE `baocao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bomon`
--
ALTER TABLE `bomon`
  ADD PRIMARY KEY (`idBM`);

--
-- Indexes for table `chitiet`
--
ALTER TABLE `chitiet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doan`
--
ALTER TABLE `doan`
  ADD PRIMARY KEY (`idDA`);

--
-- Indexes for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`magv`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`idL`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`mssv`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`idSL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baocao`
--
ALTER TABLE `baocao`
  MODIFY `id` int(30) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chitiet`
--
ALTER TABLE `chitiet`
  MODIFY `id` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `doan`
--
ALTER TABLE `doan`
  MODIFY `idDA` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
