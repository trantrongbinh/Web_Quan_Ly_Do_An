-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 26, 2018 lúc 03:08 PM
-- Phiên bản máy phục vụ: 10.1.26-MariaDB
-- Phiên bản PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlydoan3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bomon`
--

CREATE TABLE `bomon` (
  `idBM` int(30) NOT NULL,
  `TenBM` varchar(255) NOT NULL,
  `TenBMKD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `bomon`
--

INSERT INTO `bomon` (`idBM`, `TenBM`, `TenBMKD`) VALUES
(1, 'Công Nghệ Phần Mềm', 'Cong-Nghe-Phan-Mem'),
(2, 'Hệ Thống Thông Tin', 'He-Thong-Thong-Tin'),
(3, 'Khoa Học Máy Tính', 'Khoa-Hoc-May-Tinh'),
(4, 'Kỹ Thuật Máy Tính', 'Ky-Thuat-May-Tinh'),
(5, 'Trung Tâm Máy Tính', 'Trung-Tam-May-Tinh'),
(6, 'Truyền Thông&Mạng Máy Tính', 'Truyen-Thong-&-Mang-May-Tinh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet`
--

CREATE TABLE `chitiet` (
  `id` int(30) NOT NULL,
  `idDA` int(30) UNSIGNED NOT NULL,
  `TomTat` text NOT NULL,
  `NoiDung` longtext NOT NULL,
  `NoiBat` int(30) NOT NULL,
  `FileBC` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chitiet`
--

INSERT INTO `chitiet` (`id`, `idDA`, `TomTat`, `NoiDung`, `NoiBat`, `FileBC`) VALUES
(1, 1, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<p><code>Nội dung:</code></p>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 1, 't%E1%BB%95ng%20quan%20v%E1%BB%81%20mongodb(1).pdf'),
(2, 2, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<p><code>Nội dung:</code></p>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 0, 't%E1%BB%95ng%20quan%20v%E1%BB%81%20mongodb(1).pdf'),
(3, 3, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<p><code>Nội dung:</code></p>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 0, NULL),
(4, 4, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<p><code>Nội dung:</code></p>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 0, NULL),
(5, 5, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<p><code>Nội dung:</code></p>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 0, NULL),
(6, 6, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<p><code>Nội dung:</code></p>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 0, NULL),
(7, 7, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<p><code>Nội dung:</code></p>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 1, NULL),
(8, 8, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<p><code>Nội dung:</code></p>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 0, NULL),
(9, 9, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<p><code>Nội dung:</code></p>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 0, NULL),
(10, 10, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<p><code>Nội dung:</code></p>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 1, NULL),
(11, 11, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<p><code>Nội dung:</code></p>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 0, NULL),
(12, 12, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<p><code>Nội dung:</code></p>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 0, NULL),
(13, 13, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<p><code>Nội dung:</code></p>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 0, NULL),
(14, 14, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<p><code>Nội dung:</code></p>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 0, NULL),
(15, 15, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<p><code>Nội dung:</code></p>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 1, NULL),
(16, 16, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<p><code>Nội dung:</code></p>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 1, NULL),
(17, 17, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<p><code>Nội dung:</code></p>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 0, NULL),
(18, 18, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<p><code>Nội dung:</code></p>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 0, NULL),
(19, 19, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<p><code>Nội dung:</code></p>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 0, NULL),
(20, 20, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<p><code>Nội dung:</code></p>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 0, NULL),
(21, 21, '<p>Xây dựng phần mềm quản lý các công văn và tài liệu Khoa CNTT; chuẩn hóa hệ thống các biểu mẫu sử dụng trong khoa; có thể ứng dụng chữ ký điện tử trong công tác quản lý.</p>', '<p><code>Nội dung:</code></p>\r\n<p>Từ các nhu cầu quản lý của khách hàng Công ty thiết kế phần mềm VINASOFT sẻ phát thảo giao diện sao khi hoàng thành cho khách hàng. Các nội dung hiển thị cũng như các nút chức năng về công dụng và vị trí cũng như màu sắc của nó cho khách hàng trước khi thực hiện trên từng màng hình của hệ thống phần mềm.</p>\r\n</br>\r\n<p>Khi khách hàng thống nhất về giao diện và tính năng thì công ty sẻ thực hiện trình bài toàn thể hệ thống phần mềm và cách thức hoạt động một lần nữa cho toàn bộ nhân sự liên quan của khách hàng thống nhất.</p>', 0, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(30) UNSIGNED NOT NULL,
  `mssv` varchar(30) NOT NULL,
  `idDA` int(30) UNSIGNED NOT NULL,
  `NoiDung` varchar(255) NOT NULL,
  `creater_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `mssv`, `idDA`, `NoiDung`, `creater_at`) VALUES
(1, 'SV5', 1, 'tuyệt vời', '2017-10-02 13:38:55'),
(2, 'SV5', 1, 'abc', '2017-10-02 13:51:58'),
(4, 'SV1', 15, 'quá tuyệt vời', '2017-10-02 13:58:16'),
(5, 'SV3', 10, 'thầy cô cho em hỏi: với đề tài này em có thể sử dụng php được không ạ?\r\n', '2017-10-02 14:00:08'),
(6, 'SV3', 6, 'tuyệt cú mèo\r\n', '2017-10-02 14:08:35'),
(7, 'SV1', 7, 'đề tài rất thiết thực.', '2017-10-03 08:43:50'),
(8, 'SV1', 12, 'Hay quá', '2017-10-20 16:30:48'),
(9, 'SV1', 12, 'quá hay quá nguy hiểm\r\n', '2017-10-20 16:36:41'),
(10, 'SV1', 12, 'Hay quá', '2017-10-20 16:36:52'),
(11, 'SV1', 12, 'Hay quá', '2017-10-20 16:38:45'),
(12, 'SV1', 5, '\r\nTuyệt', '2017-10-20 16:51:49'),
(13, 'SV1', 5, '\r\nTuyệt', '2017-10-20 16:56:19'),
(14, 'SV1', 5, '\r\nTuyệt', '2017-10-20 16:57:44'),
(15, 'SV1', 4, 'Em có thể xin file báo cáo bài này ko ạ', '2017-10-20 16:58:43'),
(16, 'SV1', 11, 'quá tuyệt vời', '2017-10-20 17:01:50'),
(17, 'SV1', 11, 'quá tuyệt vời', '2017-10-20 17:04:14'),
(18, 'SV1', 14, 'đã từng làm quá đề tài ntn.', '2017-10-20 17:04:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `doan`
--

CREATE TABLE `doan` (
  `idDA` int(30) UNSIGNED NOT NULL,
  `TênDA` varchar(255) NOT NULL,
  `CongNghe` varchar(255) NOT NULL,
  `idL` int(30) UNSIGNED NOT NULL,
  `mssv` varchar(30) NOT NULL,
  `magv` varchar(30) NOT NULL,
  `TrangThai` varchar(255) NOT NULL,
  `Diem` varchar(30) NOT NULL,
  `idBM` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `doan`
--

INSERT INTO `doan` (`idDA`, `TênDA`, `CongNghe`, `idL`, `mssv`, `magv`, `TrangThai`, `Diem`, `idBM`) VALUES
(1, 'xây dựng hệ thống tìm nhà trọ cho sinh viên', 'PHP & MySQL', 1, 'SV5', 'GV7', 'chờ phê duyệt', '', 1),
(2, 'Xây dựng phần mềm hỗ trợ kế toán', 'WEB', 1, 'SV2', 'GV2', 'chấp nhận', '', 2),
(3, 'Xây dựng hệ thống giám sát phòng học, phòng thi từ xa', 'Web/Lan', 1, 'SV3', 'GV3', 'hoàn thành', '9', 3),
(4, 'Xây dựng hệ thống quản lý giao, nhận việc ở Học viện Chính trị- Hành chính Quốc gia Hồ Chí Minh', 'web', 1, 'SV4', 'GV4', 'hoàn thành', '9', 4),
(5, 'Xây dựng hệ thống Quản lý cho Vụ Quản lý khoa học- Học viện Chính trị- Hành chính Quốc gia Hồ Chí Minh ', 'Java', 1, 'SV5', 'GV5', 'hoàn thành', '9', 5),
(6, 'Xây dựng hệ thống Quản lý thi đua - khen thưởng', 'PHP&MySQL', 1, 'SV6', 'GV2', 'hoàn thành', '8', 6),
(7, 'Quản lý trung tâm y tế', '.NET', 2, 'SV5', 'GV3', 'hoàn thành', '10', 1),
(9, 'Quản lý đào tạo- Quản lý học viên', 'WEB + J2ME', 2, 'SV6', 'GV5', 'hoàn thành', '5', 3),
(11, 'Xây dựng hệ thống Quản lý vật tư- xăng xe', 'Java', 2, 'SV7', 'GV3', 'chấp nhận', '', 5),
(12, 'Xây dựng Website hỗ trợ tra cứu thông tin tuyển sinh.', 'Web', 2, 'SV3', 'GV3', 'chấp nhận', '', 6),
(13, 'Xây dựng cổng thông tin tương tác giữa sinh viên và Khoa CNTT ', 'Java/ HĐH android cho mobile', 3, 'SV2', 'GV4', 'hoàn thành', 'A+', 1),
(14, 'Tìm hiểu phương pháp lập trình Gadgets trên Window...', '.Net/SQL Server or PHP/My SQL', 3, 'SV1', 'GV1', 'hoàn thành', '7', 2),
(15, 'Xây dựng hệ thống hỗ trợ dạy và học tiếng anh trực tuyến', '.Net/SQL Server or PHP/My SQL', 3, 'SV6', 'GV2', 'chờ phê duyệt', '', 3),
(16, 'Xây dựng hệ thống trực tuyến (dạng Web) với tích hợp công nghệ J2ME cho điện thoại di động', 'Java, C#', 3, 'SV1', 'GV5', 'chấp nhận', '', 4),
(17, 'Xây dựng hệ thống từ điển multimedia thuật ngữ tin học.', 'web', 3, 'SV7', 'GV4', 'hoàn thành', '8', 5),
(18, 'Nghiên cứu phương pháp khai phá luật kết hợp mờ dựa trên đại số 2 gia tử.', 'VB, VC++, Java, C#', 3, 'SV2', 'GV4', 'hoàn thành', 'B', 6),
(19, 'Nghiên cứu phương pháp xây dựng hệ luật mờ phân lớp dựa trên đại số 2 gia tử.', 'PHP/ASP/ASP.NET', 1, 'SV7', 'GV3', 'chờ phê duyệt', '', 1),
(20, 'Lập trình ứng ụng để xác thực việc trao đổi dữ liệu trên mạng.', 'C/C++/C#', 1, 'SV5', 'GV3', 'chấp nhận', '', 1),
(21, 'Xây dựng website về môi trường', 'ASP/Asp.NET', 1, 'SV6', 'GV2', 'hoàn thành', 'F', 1),
(23, 'lập trình phần mềm quản lý giờ lượt đi vệ sinh của sinh viên trường đại học BKHN', 'web', 1, 'SV1', 'GV4', 'chờ phê duyệt', '', 4),
(24, 'xây dựng hệ thống website quản lý phòng học.', 'php', 2, 'SV2', 'GV2', 'chờ phê duyệt', '', 1),
(28, 'lập trình game bắn muỗi', 'PHP + MySQL', 3, 'SV3', 'GV2', 'chấp nhận', '9.5', 1),
(31, 'xây dựng hệ thống bán hàng online', 'web ', 3, 'SV1', 'GV1', 'chấp nhận', '', 6),
(33, 'xây dựng phần mềm quản lý thời gian học online của sinh viên', 'NodeJS', 3, 'SV1', 'GV3', 'Chờ phê duyệt', '', 3),
(34, 'lập trình game bắn pháo', 'java', 1, 'SV3', 'GV1', 'hoàn thành', '100', 1),
(35, 'hệ thống quản lý đồ án sinh viên đại học Bách Khoa Hà Nội', 'PHP + MySQL', 1, 'SV7', 'GV1', 'chấp nhận', '', 6),
(36, '123', '123', 2, 'SV1', 'GV1', 'chấp nhận', '1', 1),
(37, 'cccccc', 'php', 2, 'SV1', 'GV7', 'Chờ phê duyệt', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `magv` varchar(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `idBM` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`magv`, `name`, `email`, `password`, `idBM`) VALUES
('GV1', 'Trần Hoàng Đức', 'gv1@gmail.com', '123', 1),
('GV2', 'Trịnh Văn Thịnh', 'gv2@gmail.com', '123', 2),
('GV3', 'Vương Chí Tài', 'gv3@gmail.com', '123', 3),
('GV4', 'Lê Thùy Giang', 'gv4@gmail.com', '123', 4),
('GV5', 'Nguyễn Thảo Mai Anh', 'gv5@gmail.com', '123', 5),
('GV6', 'Vũ Văn Viết', 'vietvv@gmail.com', '123', 6),
('GV7', 'Vương Chí Nhất', 'nhatvc@gmail.com', '123', 1),
('GV8', 'Phạm Đăng Hải', 'haipd@gmail.com', '123', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaovu`
--

CREATE TABLE `giaovu` (
  `magvu` varchar(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `giaovu`
--

INSERT INTO `giaovu` (`magvu`, `name`, `email`, `password`) VALUES
('GVU1', 'Giáo vụ một', 'gvu1@gmail.com', '123'),
('GVU2', 'Giáo Vụ 2', 'gvu2@gmail.com', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `idL` int(30) NOT NULL,
  `TenL` varchar(255) NOT NULL,
  `TenLKD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`idL`, `TenL`, `TenLKD`) VALUES
(1, 'Đồ án chuyên ngành', 'Do-an-chuyen-nganh'),
(2, 'Đồ án tốt nghiệp', 'Do-an-tot-nghiep'),
(3, 'Đồ án tự do', 'Do-an-tu-do');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `mssv` varchar(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`mssv`, `name`, `email`, `password`) VALUES
('SV1', 'Trần Trọng Bình', 'binhtt@gmail.com', '123'),
('SV2', 'Nguyễn Đức Đạt', 'datnd@gmail.com', '123'),
('SV3', 'Trần Gia Bảo', 'baotg@gmail.com', '123'),
('SV4', 'Nguyễn Thị Thảo Mai', 'maitt@gmail.com', '123'),
('SV5', 'Trần Hải Yến', 'yenth@gmail.com', '123'),
('SV6', 'Mai Kiểu Trang', 'trangmk@gmail.com', '123'),
('SV7', 'Lê Văn Khôi', 'khoilv@gmail.com', '123'),
('SV8', 'Nguyễn Thị Ngọc Trinh', 'trinhnt@gmail.com', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `idSL` int(30) UNSIGNED NOT NULL,
  `Ten` varchar(255) NOT NULL,
  `Hinh` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`idSL`, `Ten`, `Hinh`, `link`) VALUES
(1, 'Hình một', '1.png', 'abc.com'),
(2, 'Hình hai', '2.png', 'def.com'),
(3, 'Hình ba', '3.png', 'ghi.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `idTT` int(30) NOT NULL,
  `TieuDe` varchar(255) NOT NULL,
  `TieuDeKD` varchar(255) NOT NULL,
  `TomTat` text NOT NULL,
  `NoiDung` longtext NOT NULL,
  `urlHinh` varchar(255) NOT NULL,
  `Ngay` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `NoiBat` tinyint(1) NOT NULL,
  `SoLuotXem` int(30) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`idTT`, `TieuDe`, `TieuDeKD`, `TomTat`, `NoiDung`, `urlHinh`, `Ngay`, `NoiBat`, `SoLuotXem`) VALUES
(1, 'Nghiên cứu sinh Phạm Ngọc Hưng đã bảo vệ thành công luận án tiến sĩ cấp trường', 'Pham-Ngoc-Hung-bao-ve-thanh-cong-luan-an-tien-si', 'Ngày 04 tháng 8 năm 2017, tại phòng C1-318, nghiên cứu sinh Phạm Ngọc Hưng đã bảo vệ thành công luận án tiến sĩ cấp trường với đề tài “Nhận dạng tự động tiếng nói phát âm liên tục cho các phương ngữ chính của tiếng Việt theo phương thức phát âm”, chuyên ngành Hệ thống thông tin, mã số 62480104 do PGS.TS. Trịnh Văn Loan và TS. Nguyễn Hồng Quang hướng dẫn. Luận án được thực hiện tại Phòng nghiên cứu 802-B1 của Bộ môn Kỹ thuật máy tính dành cho NCS.', '<div>\r\n<p>Các đóng góp chính của luận án:</p>\r\n<ul>\r\n    <li>Xây dựng được bộ ngữ liệu tiếng Việt VDSPEC dùng cho nghiên cứu nhận dạng phương ngữ tiếng Việt và nhận dạng tiếng Việt nói. Bộ ngữ liệu được xây dựng bằng phương pháp ghi âm trực tiếp người nói đại diện cho ba phương ngữ chính của tiếng Việt là Bắc, Trung, Nam.</li>\r\n    <li>Phân tích và chỉ ra các khác biệt về phương thức phát âm theo phương diện xử lý tín hiệu, đặc biệt là phương thức phát âm khác nhau đối với các thanh điệu và sự mũi hóa khác nhau của các phương ngữ tiếng Việt.</li>\r\n    <li>Đề xuất mô hình nhận dạng phương ngữ tiếng Việt dựa trên mô hình GMM và lựa chọn bộ tham số thích hợp cho mô hình bao gồm số thành phần Gauss, các đặc trưng MFCC, tần số cơ bản F0, các biến thể của F0, formant và dải thông tương ứng.</li>\r\n    <li>Nhận dạng tiếng Việt nói trên ngữ liệu có phương ngữ sử dụng mô hình HMM cho thấy thông tin phương ngữ giúp cải thiện hiệu năng hệ thống nhận dạng tiếng Việt nói.</li>\r\n    <li>Đề xuất mô hình mới nhận dạng tiếng Việt nói trong đó tiến hành nhận dạng phương ngữ trước khi nhận dạng nội dung nhằm nâng cao hiệu năng cho hệ thống nhận dạng tiếng Việt nói.</li>\r\n</ul>\r\n<p>Luận án đã công bố 12 công trình trên các tạp chí, kỷ yếu hội nghị khoa học quốc gia và quốc tế uy tín có phản biện độc lập.<p>\r\n</div>\r\n<div class=\"space20\"></div>\r\n<img style=\"display: block; margin-left: auto; margin-right: auto;\" class=\"img-responsive\" src=\"http://localhost:1997/trongbinh/Do_an_MVC_v5/public/upload/image/1-1.jpg\" alt=\"\">\r\n<div class=\"space20\"></div>\r\n<img style=\"display: block; margin-left: auto; margin-right: auto;\" class=\"img-responsive\" src=\"http://localhost:1997/trongbinh/Do_an_MVC_v5/public/upload/image/1-2.jpg\" alt=\"\">\r\n<div class=\"space20\"></div>\r\n<img style=\"display: block; margin-left: auto; margin-right: auto;\" class=\"img-responsive\" src=\"http://localhost:1997/trongbinh/Do_an_MVC_v5/public/upload/image/1-3.jpg\" alt=\"\">', '1.jpg', '2017-10-06 10:23:51', 0, 4),
(2, 'Đại hội Đại biểu Đoàn TNCS Hồ Chí Minh trường Đại học Bách khoa Hà Nội , nhiệm kỳ 2017 – 2019', 'Dai-hoi-dai-bieu-doan-TNCS-HoChiMinh-DHBKHN-2017-2019', 'Với tinh thần đoàn kết và nhất trí, năng động và hiệu quả, ngày 10/8/2017, Đại hội Đại biểu Đoàn Thanh Niên Cộng Sản (TNCS) Hồ Chí Minh Trường ĐHBK Hà Nội lần thứ XXXIV, nhiệm kỳ 2017-2019 đã diễn ra thành công tốt đẹp. Đại hội là một sự kiện chính trị quan trọng, là ngày hội lớn của tuổi trẻ Bách khoa.', '<div class=\"space20\"></div>\r\n<p>Đại hội đã dành thời gian lắng nghe những tham luận, thảo luận, đóng góp ý kiến vào các văn kiện trình bày tại Đại hội. Đại hội thống nhất cao về những nội dung đánh giá, tổng kết công tác Đoàn và PTTN; Báo cáo kiểm điểm của Ban Chấp hành Đoàn trường khóa XXXIII, nhiệm kỳ 2015 – 2017. Các ý kiến đều đưa ra nhiều giải pháp, cách làm hay, nhiều mô hình hoạt động cho phương hướng, nhiệm vụ công tác Đoàn và PTTN nhiệm kỳ 2017 – 2019.<p>\r\n\r\n<p>Trải qua 2 phiên làm việc, phát huy dân chủ với tinh thần trách nhiệm cao, Đại hội đã sáng suốt lựa chọn và bầu ra Ban chấp hành Đoàn trường khóa XXXIV, nhiệm kỳ 2017 – 2019 gồm 33 đồng chí; Ban Chấp hành nhiệm kỳ mới đã tiến hành phiên họp thứ nhất và bầu ra Ban Thường vụ Đoàn trường gồm 11 đồng chí. Cũng trong phiên họp này, đồng chí Nguyễn Tuấn Hải được bầu giữ chức Phó Bí thư Đoàn Trường ĐHBK Hà Nội nhiệm kỳ 2017-2019. Bên cạnh đó, sinh viên Nguyễn Văn Tiến lớp ATTT K58, hiện đang là Phó chủ tịch Hội sinh viên trường Đại học Bách Khoa, được bầu vào Ban Thường vụ Đoàn trường và giữ nhiệm vụ Phó Trưởng ban Thông tin – Tuyên truyền & Đối ngoại Đoàn trường.<p>\r\n\r\n<p>Xin chúc mừng đồng chí Nguyễn Tuấn Hải sức khỏe, thành công và hoàn thành xuất sắc nhiệm vụ trên cương vị mới!</p>\r\n<div class=\"space20\"></div>\r\n<img style=\"display: block; margin-left: auto; margin-right: auto;\" class=\"img-responsive\" src=\"http://localhost:1997/trongbinh/Do_an_MVC_v5/public/upload/image/3.jpg\" alt=\"\">\r\n<p style=\"text-align:center;\"><i>BCH Đoàn Trường nhiệm kỳ 2017 – 2019 ra mắt Đại hội</i></p>\r\n\r\n<img style=\"display: block; margin-left: auto; margin-right: auto;\" class=\"img-responsive\" src=\"http://localhost:1997/trongbinh/Do_an_MVC_v5/public/upload/image/3-1.jpg\" alt=\"\">\r\n<p style=\"text-align:center;\"><i>Đ/c Nguyễn Tuấn Hải và sinh viên Nguyễn Văn Tiến</i></p>', '3.jpg', '2017-10-06 12:06:46', 1, 20),
(3, 'Chuyến thực tập tại Đại học Nông nghiệp và Công nghệ Tokyo', 'Thuc-tap-tai-dai-hoc-nong-nghiep-va-cong-nghe-Tokyo', 'Theo khuôn khổ chương trình hợp tác thường niên giữa JASSO và trường Đại học Bách Khoa Hà Nội cùng Đại học Nông nghiệp và Công nghệ Tokyo ((Tokyo <p>University of Agriculture and Technology-TUAT), trong thời gian từ ngày 14 tháng 6 đến ngày 20 tháng 8, đoàn gồm 3 sinh viên thuộc viện CNTT&TT – Đại học Bách Khoa Hà Nội đã tới thăm và trải nghiệm cuộc sống tại “đất nước mặt trời mọc” với tư cách là những sinh viên trao đổi nghiên cứu khoa học tại trường đại học TUAT. Ba bạn sinh viên gồm có: Lê Mạnh Tiến (CNTT2.03-K57), Phạm Gia Khánh (CNTT2.02-K57) và Đặng Mạnh Cường (CNTT2.04-K58). Ngoài ra, chương trình hè 2016 này còn có sự góp mặt của các bạn sinh viên trường khác như đại học FPT, Đại học Quốc Gia thành phố Hồ Chí Minh và đại học Mahidol (Thái Lan).</p>', '<p>Nhìn chung, chương trình đã tạo một “sân chơi” cho sinh viên trên nhiều vùng lãnh thổ, từ đó nâng cao sự hợp tác nghiên cứu khoa học cũng như gắn chặt tình hữu hảo giữa các dân tộc với nhau.<p>\r\n<div class=\"space20\"></div>\r\n<img style=\"display: block; margin-left: auto; margin-right: auto;\" class=\"img-responsive\" src=\"http://localhost:1997/trongbinh/Do_an_MVC_v5/public/upload/image/4-1.jpg\" alt=\"\">\r\n<p style=\"text-align:center;\"><i>Ảnh trường TUAT</i></p>\r\n<div class=\"space20\"></div>\r\n<img style=\"display: block; margin-left: auto; margin-right: auto;\" class=\"img-responsive\" src=\"http://localhost:1997/trongbinh/Do_an_MVC_v5/public/upload/image/4-2.jpg\" alt=\"\">\r\n<p style=\"text-align:center;\"><i>Các sinh viên đoàn Việt Nam</i></p>\r\n<div class=\"space20\"></div>\r\n<p>Trong thời gian học tập, các sinh viên đã được phân vào các Lab theo nguyện vọng được đăng ký, sau đó được cung cấp đề tài thực hiện. Nhờ có sự giúp đỡ nhiệt tình từ phía các giáo sư và trợ lý, nhóm sinh viên về cơ bản đã hoàn thành các phần công việc được giao.</p>\r\n<div class=\"space20\"></div>\r\n<img style=\"display: block; margin-left: auto; margin-right: auto;\" class=\"img-responsive\" src=\"http://localhost:1997/trongbinh/Do_an_MVC_v5/public/upload/image/4-3.jpg\" alt=\"\">\r\n<p style=\"text-align:center;\"><i>Đề tài của nhóm “Building a small scaled supercomputer”</i></p>\r\n<div class=\"space20\"></div>\r\n<p>Ngoài ra, TUAT cũng tài trợ cho các sinh viên Việt Nam chương trình học tiếng Nhật ngắn hạn, mục đích chủ yếu là giúp các bạn sinh viên làm quen nhanh hơn với môi trường nước sở tại, cũng như có thể thực hiện các sinh hoạt cơ bản hằng ngày như: hỏi đường, mua bán thực phẩm, đi tàu điện (JR line-trên cao và Subway line-ngầm).</p>\r\n\r\n<p>Không chỉ có vậy, các giáo sư và các bạn sinh viên nước bạn cũng cho thấy sự hiếu khách.  Họ còn tổ chức những buổi offline bên ngoài trường, một phần giúp sinh viên giải trí sau những giờ học căng thẳng, một phần thể hiện phần nào đời sống tinh thần của con người Nhật Bản.</p>\r\n<div class=\"space20\"></div>\r\n<img style=\"display: block; margin-left: auto; margin-right: auto;\" class=\"img-responsive\" src=\"http://localhost:1997/trongbinh/Do_an_MVC_v5/public/upload/image/4-4.jpg\" alt=\"\">\r\n<p style=\"text-align:center;\"><i>Ban nhạc Rock GPA của Giáo Sư Nakajo biểu diễn tại Buddy, Tokyo</i></p>\r\n<div class=\"space20\"></div>\r\n<p>Bên cạnh đó, nhóm sinh viên Đại học Bách Khoa trong thời gian tại Nhật Bản còn nhận được sự giúp đỡ tận tình từ phía cộng đồng cựu sinh viên HEDSPI-Bách Khoa Hà Nội đang làm việc tại Nhật. Nhờ sự giúp đỡ này của các anh chị khoá trên mà thời gian để hoà nhập với lối sống, phong tục tập quán của Nhật được rút ngắn đáng kể.</p>\r\n<div class=\"space20\"></div>\r\n<img style=\"display: block; margin-left: auto; margin-right: auto;\" class=\"img-responsive\" src=\"http://localhost:1997/trongbinh/Do_an_MVC_v5/public/upload/image/4-5.jpg\" alt=\"\">\r\n<p style=\"text-align:center;\"><i>Tập thể cựu sinh viên Bách Khoa Hà Nội tại Oak House – Higashi Koganei, Tokyo</i></p>\r\n<div class=\"space20\"></div>\r\n<p>Bữa tiệc nào rồi cũng đến lúc tàn, thời gian 2 tháng dường như chưa đủ lâu để các thành viên trải nghiệm hết các mặt của đất nước Nhật Bản -một trong những nước phát triển hàng đầu thế giới – nhưng đó chính là những kỷ niệm khó phai  của các thành viên trong đoàn trong những năm tháng ngồi trên ghế nhà trường.</p>\r\n\r\n\r\n', '4.jpg', '2017-10-06 15:02:07', 1, 28),
(4, 'Thông bao nhận học bổng năm học 2017', 'Thong-Bao-Nhan-Hoc-Bong-Nam-Hoc-2017', 'hết hạn ngày 3-12-1997', '<p style=\"text-align:center\"><strong>Ng&agrave;y đăng k&iacute;: 3-11-1997</strong></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://localhost:1997/trongbinh/Do_an_MVC_v5/public/upload/image/100a5d99aa67bcca0b4f98ebef868125b2e2b173(1).jpg\" style=\"height:156px; width:300px\" /></p>\r\n\r\n<p style=\"text-align:center\"><strong><a href=\"http://localhost:1997/trongbinh/Do_an_MVC_v5/public/upload/image/t%E1%BB%95ng%20quan%20v%E1%BB%81%20mongodb(1).pdf\"><span style=\"background-color:#e74c3c\">Click view new</span></a></strong></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n', '100a5d99aa67bcca0b4f98ebef868125b2e2b173(1).jpg', '2017-10-15 13:16:50', 0, 24),
(5, 'Số lượng sinh viên tốt nghiệp năm nay tăng vọt so vs mọi năm, tye lệ tốt nghiệp đúng thời hạn đạt 100%', 'So-Luong-Sinh-Vien-Tot-Nghiep-Nam-Nay-Tang-Vot-So-Vs-Moi-Nam,-Tye-Le-Tot-Nghiep-Dung-Thoi-Han-Dat-100%', 'Sinh viên khoa K60 dự tính tỷ lệ tốt nghiệp sẽ còn tằng nữa, có khả năng tăng trên 100%. Qua đó cho thấy sự cố gắng của sinh viên cuãng như giảng viên của toàn trường. Đáng ngưỡng mộ...', '<p>Th&ocirc;ng b&aacute;o n&agrave;y chỉ mang t&iacute;nh chất động vi&ecirc;n tinh thần học tập cũng như giảng dạy của sinh vi&ecirc;n v&agrave; giảng vi&ecirc;n. =))</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://localhost:1997/trongbinh/Do_an_MVC_v5/public/upload/image/a.gif\" style=\"height:200px; width:200px\" /></p>\r\n\r\n<p><a href=\"http://localhost:1997/trongbinh/Do_an_MVC_v5/public/upload/files/pttkht.rtf\"><em><span style=\"color:#c0392b\"><strong>Click to news</strong></span></em></a></p>\r\n', 'a.gif', '2017-10-15 13:13:40', 0, 8),
(18, 'Sinh viên X đạt bằng xuất sắc cùng với một gia đình nhỏ 3 thành viên, trong đó con trai của SV X ms trong 6 tháng tuổi', 'Sinh-Vien-X-Dat-Bang-Xuat-Sac-Cung-Voi-Mot-Gia-Dinh-Nho-3-Thanh-Vien,-Trong-Do-Con-Trai-Cua-Sv-X-Ms-Trong-6-Thang-Tuoi', 'Một chuyện quá lý kì và hấp dẫn', '<p style=\"text-align:center\">đ&acirc;y l&agrave; h&igrave;nh ảnh cậu con trai 6 th&aacute;ng tuổi của gia đ&igrave;nh X chụp tại hội trường ng&agrave;y sinh vi&ecirc;n X nhận bằng tốt nghiệp:</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://localhost:1997/trongbinh/Do_an_MVC_v5/public/upload/images/avatrungthu.png\" style=\"height:200px; width:154px\" /></p>\r\n', 'avatrungthu.png', '2017-10-20 17:54:37', 0, 5);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bomon`
--
ALTER TABLE `bomon`
  ADD PRIMARY KEY (`idBM`);

--
-- Chỉ mục cho bảng `chitiet`
--
ALTER TABLE `chitiet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `doan`
--
ALTER TABLE `doan`
  ADD PRIMARY KEY (`idDA`);

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`magv`);

--
-- Chỉ mục cho bảng `giaovu`
--
ALTER TABLE `giaovu`
  ADD PRIMARY KEY (`magvu`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`idL`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`mssv`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`idSL`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`idTT`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bomon`
--
ALTER TABLE `bomon`
  MODIFY `idBM` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `chitiet`
--
ALTER TABLE `chitiet`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT cho bảng `doan`
--
ALTER TABLE `doan`
  MODIFY `idDA` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `idL` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `idTT` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
