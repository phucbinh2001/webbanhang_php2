-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 26, 2021 lúc 06:55 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phone`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `idBL` int(11) NOT NULL,
  `NoiDungBL` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idDT` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `ThoiDiemBL` datetime DEFAULT NULL,
  `AnHien` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dienthoai`
--

CREATE TABLE `dienthoai` (
  `idDT` int(11) NOT NULL,
  `TenDT` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gia` float DEFAULT NULL,
  `GiaKM` float DEFAULT NULL,
  `urlHinh` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ThoiDiemNhap` datetime DEFAULT current_timestamp(),
  `MoTa` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SoLanXem` int(11) NOT NULL DEFAULT 0,
  `SoLanMua` int(11) NOT NULL DEFAULT 0,
  `Hot` tinyint(1) NOT NULL DEFAULT 0,
  `idNSX` int(11) DEFAULT NULL,
  `AnHien` tinyint(1) NOT NULL DEFAULT 0,
  `SoLuongTonKho` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dienthoai`
--

INSERT INTO `dienthoai` (`idDT`, `TenDT`, `Gia`, `GiaKM`, `urlHinh`, `ThoiDiemNhap`, `MoTa`, `SoLanXem`, `SoLanMua`, `Hot`, `idNSX`, `AnHien`, `SoLuongTonKho`) VALUES
(6, 'Điện thoại iPhone 12 128GB\r\n', 26990000, NULL, 'https://cdn.tgdd.vn/Products/Images/42/228736/iphone-12-trang-new-600x600-600x600.jpg', '2021-01-14 20:20:32', 'Mới đây, Apple đã trình diện đến người dùng mẫu điện thoại iPhone 12 128 GB với sự tuyên bố về một kỷ nguyên mới của iPhone: iPhone 5G siêu nhanh, nâng cấp về màn hình và hiệu năng hứa hẹn đây sẽ là smartphone cao cấp đáng chú ý nhất trong năm nay. \r\n<br>\r\nHiệu năng vượt trội, thách thức mọi giới hạn\r\n<br>\r\niPhone 12 được trang bị chipset A14 Bionic - bộ xử lý được trang bị lần đầu trên iPad Air 4 vừa được ra mắt cách đây không lâu, mở đầu xu thế chip 5 nm thương mại trên toàn thế giới', 576, 678, 0, 14, 0, 999),
(7, 'Điện thoại OPPO Find X2', 19990000, 23990000, 'https://cdn.tgdd.vn/Products/Images/42/198150/oppo-find-x2-blue-600x600-1-600x600.jpg', '2021-01-14 20:24:02', 'Tiếp nối thành công vang dội của thế hệ Find X, OPPO chính thức ra mắt Find X2 với những đường nét thanh lịch từ thiết kế phần cứng cho đến trải nghiệm phần mềm, hứa hẹn một vẻ đẹp hoàn hảo, một sức mạnh xứng tầm.\r\n<br>\r\nTrải nghiệm thị giác tuyệt vời\r\n<br>\r\nFind X2 sở hữu màn hình AMOLED Ultra Vision cao cấp với kích thước lên đến 6.78 inch cùng độ phân giải 2K+ cực nét được bảo vệ bằng kính cường lực Corning Gorilla Glass 6 cao cấp.', 77, 8, 1, 24, 1, 87),
(8, 'Điện thoại iPhone 12 mini 256GB\r\n', 25490000, 23490000, 'https://cdn.tgdd.vn/Products/Images/42/228742/iphone-23-mini-den-new-600x600-600x600.jpg', '2021-01-14 20:28:48', 'Apple vừa giới thiệu đến người dùng 4 phiên bản iPhone mới trong sự kiện Hi, Speed! ngày 14/10, trong đó có iPhone 12 Mini 256 GB, đây là sản phẩm hỗ trợ 5G có thiết nhỏ nhất, nhẹ nhất, mỏng nhất trên thế giới cho đến thời điểm hiện tại (10/2020).<br>\r\nThiết kế cao cấp và cứng cáp\r\n<br>\r\nSau ba năm sử dụng thiết kế của iPhone X thì năm nay Apple đã thay đổi một số đặc điểm của toàn bộ dòng iPhone 12 series của mình.', 888, 999, 1, 29, 1, 899),
(9, 'Điện thoại Galaxy S21 5G', 25000000, 0, 'https://cdn.tgdd.vn/2021/01/campaign/S21Xam-361x432.png', '2021-01-15 12:25:05', '<p>Thời gian đặt gạch: 05/01 - 14/01 Thời gian đặt trước: 15/01 - 28/01 Thời gian nhận h&agrave;ng dự kiến: Từ 29/01 - 04/02 <br /> Gi&aacute; b&aacute;n ch&iacute;nh thức: Galaxy S21 5G: 20.990.000đ (Độc quyền tại TGDD) Galaxy S21+ 5G: 25.990.000đ Galaxy S21 Ultra 5G: 30.990.000đ <br /> Số tiền đặt cọc: 1.000.000đ <br /> QU&Agrave; TẶNG KHI ĐẶT TRƯỚC GALAXY S21 5G - Giảm ngay 2 triệu - Thiết bị định vị th&ocirc;ng minh (chỉ c&oacute; m&agrave;u đen) - Trị gi&aacute; 1.000.000đ - Giảm th&ecirc;m 1.5 triệu khi thanh to&aacute;n VNPAY (Kh&ocirc;ng &aacute;p dụng chung TCĐM v&agrave; Trả g&oacute;p) - Thu cũ đổi mới t&agrave;i trợ 3 triệu - G&oacute;i bảo h&agrave;nh mở rộng Samsung Care+ - Trả g&oacute;p l&atilde;i suất 0% - Ưu đ&atilde;i ph&ograve;ng chờ hạng thương gia - Giảm đến 20% khi mua Phụ Kiện k&egrave;m S21 Series - Giảm đến 40% khi mua Galaxy Fit2 k&egrave;m S21 Series</p>', 21334, 453, 0, 26, 0, 1000),
(10, 'Galaxy 21 Plus 5G', 19990000, NULL, 'https://cdn.tgdd.vn/2021/01/campaign/S21+Bac-361x432.png', '2021-01-15 12:28:36', 'Ấn tượng đầu tiên về Samsung Galaxy S21\r\n<bẻ>\r\n Ultra 5G: Cụm camera độc đáo, dùng chip Exynos 2100, hỗ trợ bút S Pen mới cực hay\r\nTrong buổi tối ngày 14/01, Samsung đã cho ra mắt Galaxy S21 Ultra 5G. Đây chính là chiếc smartphone mà bao anh em \'samfans\' và những người quan tâm Samsung đang rất mong đợi, bởi máy sẽ được trang bị con chip cây nhà lá vườn mới nhất và nhiều nâng cấp đáng giá. ', 45646, 456456, 1, NULL, 1, 234234),
(11, 'Galaxy Ultra 5G', 31000000, NULL, 'https://cdn.tgdd.vn/2021/01/campaign/S21UltraBac-361x432.png', '2021-01-15 12:32:14', 'Bài nhận định và tin tức về siêu phẩm mới\r\nẤn tượng đầu tiên về Samsung Galaxy S21 Ultra 5G: Cụm camera độc đáo, dùng chip Exynos 2100, hỗ trợ bút S Pen mới cực hay\r\nTrong buổi tối ngày 14/01, Samsung đã cho ra mắt Galaxy S21 Ultra 5G. Đây chính là chiếc smartphone mà bao anh em \'samfans\' và những người quan tâm Samsung đang rất mong đợi, bởi máy sẽ được trang bị con chip cây nhà lá vườn mới nhất và nhiều nâng cấp đáng giá. ', 457, 567, 1, NULL, 1, 4566),
(12, 'Điện thoại Xiaomi Redmi 9T', 3500000, NULL, 'https://cdn.tgdd.vn/2020/12/campaign/2-289x400.png', '2021-01-15 12:36:32', 'Chưa có mô tả', 9999, 6786, 1, NULL, 1, 3455),
(13, 'Điện thoại Realme C15', 3900000, NULL, 'https://cdn.tgdd.vn/Products/Images/42/226226/TimerThumb/realme-c15.jpg', '2021-01-15 12:39:27', 'Realme vừa cho ra mắt sản phẩm mới nhất là Realme C15 với mức giá vô cùng phải chăng. Chiếc điện thoại thông minh này đi kèm 4 camera sau và dung lượng pin lên đến 6000 mAh sẵn sàng đồng hành cùng bạn trong mọi lúc.<br>\r\nThiết kế hiện đại, ấn tượng<br>\r\nRealme C15 sở hữu thiết kế bằng nhựa cao cấp, kích thước lớn vừa phải cùng các góc cạnh được bo tròn mềm mại cho cảm giác cầm nắm khá thoải mái cũng như dễ cho vào ví hay túi quần.', 9999, 6786, 1, NULL, 1, 3455),
(14, 'Điện thoại VIVO Y51', 5990000, NULL, 'https://cdn.tgdd.vn/Products/Images/42/228950/vivo-y51-bac-600x600-600x600.jpg', '2021-01-15 12:42:23', 'Vivo đã mang chiếc điện thoại Vivo Y51 một lần nữa quay trở lại với người dùng trong một thiết kế hoàn toàn mới, nâng cấp từ công nghệ màn hình, cụm camera đến hệ điều hành với tên gọi Vivo Y51 (2020).\r\n<br>\r\nMàn hình rộng với màu sắc rực rỡ<br>\r\nY51 2020 sở hữu màn hình 6.58 inch độ phân giải 1080 x 2408 Pixels, có độ tương phản cao đem đến cho người dùng những trải nghiệm hình ảnh chân thực, màu sắc rực rỡ giúp việc sử dụng ứng dụng giải trí trên điện thoại trở nên cuốn hút hơn. ', 9999, 6786, 1, NULL, 1, 3455),
(22, 'iPhone suawr', 9999900, 8888600, 'Dark Mode JPEG.jpg', '2021-01-24 14:58:06', '<p>Ph&uacute;c&nbsp;</p>', 0, 0, 0, 14, 0, 99900),
(24, 'Iphone 9', 0, NULL, '', '2021-01-24 22:50:38', '', 0, 0, 0, 14, 1, 0),
(25, 'Realme R89', 999, 900, '2-289x400.png', '2021-01-24 22:51:01', '<p>890890</p>', 0, 0, 1, 10, 1, 999),
(26, 'Lên là lên', 999999, 988888, 'iphone-12-trang-new-600x600-600x600.jpg', '2021-01-25 15:32:28', '<p>fghfgh dh dh dh dfhdfh dfh dfhd&nbsp;</p>', 0, 0, 1, 10, 1, 98);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `idDH` int(11) NOT NULL,
  `ThoiDiemDatHang` datetime NOT NULL,
  `ThoiDiemGiaoHang` datetime DEFAULT NULL,
  `idUser` int(11) NOT NULL,
  `TenNguoiNhan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EmailNguoiNhan` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiaChiNguoiNhan` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AnHien` tinyint(1) DEFAULT 0,
  `TrangThai` tinyint(1) NOT NULL DEFAULT 0,
  `GhiChuCuaKhach` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GhiChuCuaAdmin` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangchitiet`
--

CREATE TABLE `donhangchitiet` (
  `idCT` int(11) NOT NULL,
  `idDH` int(11) NOT NULL,
  `idDT` int(11) DEFAULT NULL,
  `TenDT` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `Gia` float NOT NULL,
  `urlHinh` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `idNSX` int(11) NOT NULL COMMENT 'Mã nhà sản xuất',
  `TenNSX` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ThuTu` int(11) DEFAULT NULL,
  `AnHien` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`idNSX`, `TenNSX`, `ThuTu`, `AnHien`) VALUES
(8, 'Vivo', NULL, 1),
(10, 'Realme', NULL, 1),
(12, 'Vsmart', NULL, 1),
(14, 'Nokia', NULL, 1),
(24, 'NokiB', NULL, 1),
(26, 'Poco', NULL, 0),
(29, 'Oneplus', 6, 0),
(30, 'Samsung', NULL, 0),
(32, 'Huawei', NULL, 1),
(38, 'Apple', NULL, 0),
(39, 'Sony', NULL, 1),
(40, 'Bphone', NULL, 1),
(41, 'Lenovo', NULL, 1),
(42, 'Asus', NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuoctinhdt`
--

CREATE TABLE `thuoctinhdt` (
  `idDT` int(11) NOT NULL,
  `ManHinh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HeDieuHanh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CameraSau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CameraTruoc` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CPU` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RAM` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BoNhoTrong` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TheNho` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TheSIM` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DungLuongPin` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thuoctinhdt`
--

INSERT INTO `thuoctinhdt` (`idDT`, `ManHinh`, `HeDieuHanh`, `CameraSau`, `CameraTruoc`, `CPU`, `RAM`, `BoNhoTrong`, `TheNho`, `TheSIM`, `DungLuongPin`) VALUES
(3, 'AMOLED, 6.43\", Full HD+', 'Android 11', 'Chính 64 MP & Phụ 8 MP, 2 MP, 2 MP', '44 MP', 'Snapdragon 720G 8 nhân', '8 GB', '128 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '2 Nano SIM, Hỗ trợ 4G', '4310 mAh, có sạc nhanh'),
(4, 'OLED, 6.7\", Super Retina XDR', 'iOS 14', '3 camera 12 MP', '12 MP', 'Apple A14 Bionic 6 nhân', '6 GB', '512 GB', '', '1 Nano SIM & 1 eSIM, Hỗ trợ 5G', '3687 mAh, có sạc nhanh'),
(5, 'Chính: Dynamic AMOLED, Phụ: Super AMOLED, Chính 7.', 'Android 10', '3 camera 12 MP', '10 MP', 'Snapdragon 865+ 8 nhân', '12 GB', '256 GB', '', '1 Nano SIM & 1 eSIM, Hỗ trợ 5G', '4500 mAh, có sạc nhanh'),
(6, 'OLED, 6.1\", Super Retina XDR', 'iOS 14', '2 camera 12 MP', '12 MP', 'Apple A14 Bionic 6 nhân', '4 GB', '128 GB', '', '1 Nano SIM & 1 eSIM, Hỗ trợ 5G', '2815 mAh, có sạc nhanh'),
(7, 'AMOLED, 6.78\", Quad HD+ (2K+)', 'Android 10', 'Chính 48 MP & Phụ 13 MP, 12 MP', '32 MP', 'Snapdragon 865 8 nhân', '12 GB', '256 GB', '', '2 Nano SIM, Hỗ trợ 5G', '4200 mAh, có sạc nhanh'),
(8, 'OLED, 5.4\", Super Retina XDR', 'iOS 14', '2 camera 12 MP', '12 MP', 'Apple A14 Bionic 6 nhân', '4 GB', '256 GB', '', '1 Nano SIM & 1 eSIM, Hỗ trợ 5G', '2227 mAh, có sạc nhanh'),
(9, 'Dynamic AMOLED 2X, 6.2\", Full HD+', 'Android 11', 'Chính 12 MP & Phụ 64 MP, 12 MP', '10 MP', 'Exynos 2100 8 nhân', '8 GB', '128 GB', '', '2 Nano SIM hoặc 1 Nano SIM + 1 eSIM, Hỗ trợ 5G', '4000 mAh, có sạc nhanh'),
(10, 'Dynamic AMOLED 2X, 6.7\", Full HD+', 'Android 11', 'Chính 64 MP & Phụ 8 MP, 2 MP, 2 MP', '12 MP', 'Exynos 2100 8 nhân', '8 GB', '128 GB', '', '1 Nano SIM & 1 eSIM, Hỗ trợ 5G', '4800 mAh, có sạc nhanh'),
(11, 'Dynamic AMOLED 2X, 6.7\", Full HD+', 'Android 11', 'Chính 108 MP & Phụ 12 MP, 10 MP, 10 MP', '40 MP', 'Exynos 2100 8 nhân', '8 GB', '128 GB', '', '1 Nano SIM & 1 eSIM, Hỗ trợ 5G', '4800 mAh, có sạc nhanh'),
(12, 'IPS LCD, 6.53\", Full HD+', 'Android 10', 'Chính 48 MP & Phụ 13 MP, 12 MP', '12 MP', 'Snapdragon 553+ 8 nhân', '8 GB', '64 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '2 Nano SIM, Hỗ trợ 5G', '4500 mAh, có sạc nhanh'),
(13, 'IPS LCD, 6.53\", Full HD+', 'Android 10', 'Chính 13 MP & Phụ 8 MP, 12 MP', '12 MP', 'Snapdragon 460 8 nhân', '8 GB', '64 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '2 Nano SIM, Hỗ trợ 5G', '4500 mAh, có sạc nhanh'),
(14, 'IPS LCD, 6.53\", Full HD+', 'Android 10', 'Chính 13 MP & Phụ 8 MP, 12 MP', '12 MP', 'Snapdragon 460 8 nhân', '8 GB', '64 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '2 Nano SIM, Hỗ trợ 5G', '4500 mAh, có sạc nhanh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `Username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HoTen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KichHoat` tinyint(1) DEFAULT 0,
  `urlHinh` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VaiTro` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 là khách hàng || 1 là admin',
  `AnHien` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`idUser`, `Username`, `Password`, `HoTen`, `KichHoat`, `urlHinh`, `Email`, `VaiTro`, `AnHien`) VALUES
(1, 'admin', '123', 'Phúc Bình', 1, '', 'phucbinh.2001@gmail.com', 1, 1),
(2, 'user1', '111', 'Khách hàng 1', 1, '', 'kh1@gmail.com', 0, 1),
(3, 'usere', '222', 'Khách hàng 2', 1, '', 'kh2@gmail.com', 0, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`idBL`),
  ADD KEY `idDT` (`idDT`,`idUser`),
  ADD KEY `idUser` (`idUser`);

--
-- Chỉ mục cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  ADD PRIMARY KEY (`idDT`),
  ADD KEY `idNSX` (`idNSX`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`idDH`) USING BTREE,
  ADD KEY `idUser` (`idUser`);

--
-- Chỉ mục cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD PRIMARY KEY (`idCT`),
  ADD KEY `idDH` (`idDH`,`idDT`);

--
-- Chỉ mục cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`idNSX`);

--
-- Chỉ mục cho bảng `thuoctinhdt`
--
ALTER TABLE `thuoctinhdt`
  ADD UNIQUE KEY `idDT` (`idDT`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `idBL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  MODIFY `idDT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `idDH` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  MODIFY `idCT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `idNSX` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã nhà sản xuất', AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  ADD CONSTRAINT `dienthoai_ibfk_1` FOREIGN KEY (`idNSX`) REFERENCES `nhasanxuat` (`idNSX`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`idDH`) REFERENCES `donhangchitiet` (`idDH`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
