-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 14, 2024 lúc 03:48 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_coffee`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sodienthoai` varchar(20) NOT NULL,
  `matkhau` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `email`, `sodienthoai`, `matkhau`) VALUES
(47, 'chudinhnghia', 'chunghiamt123@gmail.com', '0375911716', '539305e07117a40014f2f31ffa63a777'),
(48, 'nghia', 'nghiamt123@gmail.com', '0375911716', '539305e07117a40014f2f31ffa63a777');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(13, 'Cà phê pha Việt', 2),
(14, 'Cà phê cảm hứng', 3),
(15, 'Đồ uống', 4),
(17, 'Cà phê thế giới', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `id_donhang` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `giatridonhang` float NOT NULL,
  `time` date NOT NULL DEFAULT current_timestamp(),
  `id_dangky` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_donhang`
--

INSERT INTO `tbl_donhang` (`id_donhang`, `email`, `hoten`, `sdt`, `diachi`, `giatridonhang`, `time`, `id_dangky`) VALUES
(26, 'chunghiamt123@gmail.com', 'chudinhnghia', '0375911716', 'asda', 90000, '2024-01-12', 47),
(27, 'chunghiamt123@gmail.com', 'chudinhnghia', '0375911716', 'asd', 109000, '2024-01-12', 47),
(28, 'chunghiamt123@gmail.com', 'chudinhnghia', '0375911716', 'sa', 178000, '2024-01-13', 47);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `masp` varchar(11) NOT NULL,
  `tensp` varchar(250) NOT NULL,
  `giasp` double NOT NULL,
  `hinhanh` varchar(254) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `masp`, `tensp`, `giasp`, `hinhanh`, `noidung`, `id_danhmuc`) VALUES
(60, '002', 'Cà phê The Caipirinha', 50000, '1705082571_13.jpg', 'Cà phê The Caipirinha được chọn lọc kỹ lưỡ...', 17),
(61, '003', 'Cà phê mocha', 66000, '1705082606_11.jpg', 'Cà phê mocha được chọn lọc kỹ lưỡng từ vùn...', 17),
(62, '004', 'Cà phê Latte', 130000, '1705082638_10.jpg', 'Cà phê Latte được chọn lọc kỹ lưỡng từ vùn...', 17),
(63, '005', 'Cà phê Cappuccino', 300000, '1705082674_7.jpg', 'Cà phê Cappuccino được chọn lọc kỹ lưỡng t...', 17),
(64, '006', 'Cà phê Espresso con panda', 120000, '1705082740_6.jpg', 'Cà phê Espresso con panda được chọn lọc kỹ..', 17),
(65, '007', 'Cà phê Espresso', 200000, '1705082779_5.jpg', 'Cà phê Espresso được chọn lọc kỹ lưỡng từ ...', 17),
(66, '008', 'Cà phê Americano', 150000, '1705082814_4.jpg', 'Cà phê Americano được chọn lọc kỹ lưỡng từ...', 17),
(68, '010', 'Cà phê Trứng', 50000, '1705082931_23.jpg', 'Cà phê Trứng được chọn lọc kỹ lưỡng từ vùn...', 13),
(69, '011', 'Cà phê Cocoapresso', 79000, '1705082965_20.jpg', 'Cà phê Cocoapresso được chọn lọc kỹ lưỡng ...', 13),
(70, '012', 'Cà phê Matchapresso', 100000, '1705082991_19.jpg', 'Cà phê Matchapresso được chọn lọc kỹ ...', 13),
(71, '013', 'Cà phê The Metro', 69000, '1705083019_16.jpg', 'Cà phê The Metro được chọn lọc kỹ lưỡng từ...', 13),
(72, '014', 'Cà phê Mojto Presso', 110000, '1705083045_14.jpg', 'Cà phê Mojto Presso được chọn lọc kỹ lưỡng...', 13),
(74, '016', 'Bạc sỉu', 90000, '1705083112_3.jpg', 'Thành phần: 100% cafe hạt thượng hạng...', 13),
(75, '017', 'Cà phê đen', 100000, '1705083147_2.jpg', 'Những hạt cà phê được chọn lọc kỹ lưỡng từ...', 13),
(76, '018', 'Cà phê sữa', 100000, '1705083173_1.jpg', 'Cà phê sữa được chọn lọc kỹ lưỡng từ vùng ...', 13),
(78, '020', 'Cà phê The Metro', 69000, '1705083250_16.jpg', 'Cà phê The Metro được chọn lọc kỹ lưỡng từ...', 14),
(79, '021', 'Cà phê The Rainbow', 90000, '1705083276_15.jpg', 'Cà phê The Rainbow được chọn lọc kỹ lưỡng ...', 14),
(80, '022', 'Cà phê Mojto Presso', 110000, '1705083308_14.jpg', 'Cà phê Mojto Presso được chọn lọc kỹ lưỡng...', 14),
(82, '024', 'Cà phê Caramel Macchiato', 180000, '1705083368_12.jpg', 'Cà phê Caramel Macchiato được chọn lọc kỹ ...', 14),
(83, '025', 'Cà phê mocha', 66000, '1705083422_11.jpg', 'Cà phê mocha được chọn lọc kỹ lưỡng từ vùn...\r\n', 14),
(84, '026', 'Cà phê Latte', 130000, '1705083449_10.jpg', 'Cà phê Latte được chọn lọc kỹ lưỡng từ vùn...', 14),
(85, '027', 'Bạc sỉu', 90000, '1705083473_3.jpg', 'Thành phần: 100% cafe hạt thượng hạng...', 14),
(87, '029', 'Cà phê Cococcino Latte', 86000, '1705083539_22.jpg', 'Cà phê Cococcino Latte được chọn lọc kỹ lư...', 15),
(88, '030', 'Cà phê Cocoapresso', 79000, '1705083570_20.jpg', 'Cà phê Cocoapresso được chọn lọc kỹ lưỡng ...', 15),
(89, '031', 'Cà phê Mojto Presso', 110000, '1705083596_14.jpg', 'Cà phê Mojto Presso được chọn lọc kỹ lưỡng...', 15),
(91, '033', 'Cà phê Cappuccino', 300000, '1705083643_7.jpg', 'Cà phê Cappuccino được chọn lọc kỹ lưỡng t...', 15),
(92, '034', 'Cà phê Espresso con panda', 120000, '1705083668_6.jpg', 'Cà phê Espresso con panda được chọn lọc kỹ...', 15);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD PRIMARY KEY (`id_donhang`),
  ADD KEY `id_dangky` (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD CONSTRAINT `tbl_donhang_ibfk_1` FOREIGN KEY (`id_dangky`) REFERENCES `tbl_dangky` (`id_dangky`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
