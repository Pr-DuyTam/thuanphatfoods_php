-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2025 at 05:04 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thuanphatfoods`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`) VALUES
(1, 'BÒ AUKOBE'),
(2, 'LÕI VAI');

-- --------------------------------------------------------

--
-- Table structure for table `diachi`
--

CREATE TABLE `diachi` (
  `id` int(11) NOT NULL,
  `nguoidung_id` int(11) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `macdinh` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `nguoidung_id` int(11) NOT NULL,
  `diachi_id` int(11) DEFAULT NULL,
  `ngay` datetime NOT NULL DEFAULT current_timestamp(),
  `tongtien` float NOT NULL DEFAULT 0,
  `ghichu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donhangct`
--

CREATE TABLE `donhangct` (
  `id` int(11) NOT NULL,
  `donhang_id` int(11) NOT NULL,
  `mathang_id` int(11) NOT NULL,
  `dongia` float NOT NULL DEFAULT 0,
  `soluong` int(11) NOT NULL DEFAULT 1,
  `thanhtien` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mathang`
--

CREATE TABLE `mathang` (
  `id` int(11) NOT NULL,
  `tenmathang` varchar(255) NOT NULL,
  `mota` text DEFAULT NULL,
  `giagoc` float NOT NULL DEFAULT 0,
  `giaban` float NOT NULL DEFAULT 0,
  `soluongton` int(11) NOT NULL DEFAULT 0,
  `hinhanh` varchar(255) DEFAULT NULL,
  `danhmuc_id` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `luotmua` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mathang`
--

INSERT INTO `mathang` (`id`, `tenmathang`, `mota`, `giagoc`, `giaban`, `soluongton`, `hinhanh`, `danhmuc_id`, `luotxem`, `luotmua`) VALUES
(22, 'thăn ngoại striploi', '<p>• Vân mỡ (marbling) đan xen đẹp mắt: Mỡ phân bố đều trong thớ thịt giúp mềm ngọt, béo nhưng không ngấy. • Độ mềm cao: Khi chế biến, thịt tan nhẹ trong miệng, đặc trưng của Wagyu. • Lớp mỡ viền ngoài đặc trưng của Striploin: Giúp giữ nước, tạo độ thơm khi nướng.</p>', 1000000, 600000, 10, 'images/products/anh2.jpg', 1, 2, 0),
(23, 'Lõi vai Topbalade ', '<p>• Thớ thịt mịn, mềm, hương vị đậm đà: Mặc dù là phần vai – vốn được vận động nhiều, nhưng lõi vai lại rất mềm do có phần nạc xen kẽ đều. • Có đường gân mảnh giữa miếng thịt: Khi lọc bỏ gân, sẽ tạo thành Flat Iron Steak – cực kỳ mềm, gần bằng thăn nội với giá rẻ hơn. • Marbling vừa phải: Không quá béo như Ribeye nhưng vẫn giữ được độ ngọt và mọng nước.</p>', 900000, 900000, 0, 'images/products/anh2.jpg', 2, 1, 0),
(24, 'Lõi vai Topbalade ', '<p>• Thớ thịt mịn, mềm, hương vị đậm đà: Mặc dù là phần vai – vốn được vận động nhiều, nhưng lõi vai lại rất mềm do có phần nạc xen kẽ đều. • Có đường gân mảnh giữa miếng thịt: Khi lọc bỏ gân, sẽ tạo thành Flat Iron Steak – cực kỳ mềm, gần bằng thăn nội với giá rẻ hơn. • Marbling vừa phải: Không quá béo như Ribeye nhưng vẫn giữ được độ ngọt và mọng nước.</p>', 900000, 900000, 0, 'images/products/anh2.jpg', 2, 0, 0),
(25, 'Lõi vai Topbalade ', '<p>• Thớ thịt mịn, mềm, hương vị đậm đà: Mặc dù là phần vai – vốn được vận động nhiều, nhưng lõi vai lại rất mềm do có phần nạc xen kẽ đều. • Có đường gân mảnh giữa miếng thịt: Khi lọc bỏ gân, sẽ tạo thành Flat Iron Steak – cực kỳ mềm, gần bằng thăn nội với giá rẻ hơn. • Marbling vừa phải: Không quá béo như Ribeye nhưng vẫn giữ được độ ngọt và mọng nước.</p>', 900000, 900000, 0, 'images/products/anh2.jpg', 2, 0, 0),
(26, 'Lõi vai Topbalade ', '<p>• Thớ thịt mịn, mềm, hương vị đậm đà: Mặc dù là phần vai – vốn được vận động nhiều, nhưng lõi vai lại rất mềm do có phần nạc xen kẽ đều. • Có đường gân mảnh giữa miếng thịt: Khi lọc bỏ gân, sẽ tạo thành Flat Iron Steak – cực kỳ mềm, gần bằng thăn nội với giá rẻ hơn. • Marbling vừa phải: Không quá béo như Ribeye nhưng vẫn giữ được độ ngọt và mọng nước.</p>', 900000, 900000, 0, 'images/products/anh2.jpg', 2, 0, 0),
(27, 'Thăn ngoại striploi', '•	Thớ thịt mịn, mềm, hương vị đậm đà: Mặc dù là phần vai – vốn được vận động nhiều, nhưng lõi vai lại rất mềm do có phần nạc xen kẽ đều.\r\n•	Có đường gân mảnh giữa miếng thịt: Khi lọc bỏ gân, sẽ tạo thành Flat Iron Steak – cực kỳ mềm, gần bằng thăn nội với giá rẻ hơn.\r\n•	Marbling vừa phải: Không quá béo như Ribeye nhưng vẫn giữ được độ ngọt và mọng nước.\r\n', 950000, 950000, 10, 'images/products/anh2.jpg', 1, 0, 0),
(28, 'Thăn ngoại striploi', '•	Thớ thịt mịn, mềm, hương vị đậm đà: Mặc dù là phần vai – vốn được vận động nhiều, nhưng lõi vai lại rất mềm do có phần nạc xen kẽ đều.\r\n•	Có đường gân mảnh giữa miếng thịt: Khi lọc bỏ gân, sẽ tạo thành Flat Iron Steak – cực kỳ mềm, gần bằng thăn nội với giá rẻ hơn.\r\n•	Marbling vừa phải: Không quá béo như Ribeye nhưng vẫn giữ được độ ngọt và mọng nước.\r\n', 950000, 950000, 10, 'images/products/anh2.jpg', 1, 0, 0),
(29, 'Thăn ngoại striploi', '•	Thớ thịt mịn, mềm, hương vị đậm đà: Mặc dù là phần vai – vốn được vận động nhiều, nhưng lõi vai lại rất mềm do có phần nạc xen kẽ đều.\r\n•	Có đường gân mảnh giữa miếng thịt: Khi lọc bỏ gân, sẽ tạo thành Flat Iron Steak – cực kỳ mềm, gần bằng thăn nội với giá rẻ hơn.\r\n•	Marbling vừa phải: Không quá béo như Ribeye nhưng vẫn giữ được độ ngọt và mọng nước.\r\n', 950000, 950000, 10, 'images/products/anh2.jpg', 1, 0, 0),
(30, 'Thăn ngoại striploi', '•	Thớ thịt mịn, mềm, hương vị đậm đà: Mặc dù là phần vai – vốn được vận động nhiều, nhưng lõi vai lại rất mềm do có phần nạc xen kẽ đều.\r\n•	Có đường gân mảnh giữa miếng thịt: Khi lọc bỏ gân, sẽ tạo thành Flat Iron Steak – cực kỳ mềm, gần bằng thăn nội với giá rẻ hơn.\r\n•	Marbling vừa phải: Không quá béo như Ribeye nhưng vẫn giữ được độ ngọt và mọng nước.\r\n', 950000, 950000, 10, 'images/products/anh2.jpg', 1, 0, 0),
(31, 'Thăn ngoại striploi', '<p>• Thớ thịt mịn, mềm, hương vị đậm đà: Mặc dù là phần vai – vốn được vận động nhiều, nhưng lõi vai lại rất mềm do có phần nạc xen kẽ đều. • Có đường gân mảnh giữa miếng thịt: Khi lọc bỏ gân, sẽ tạo thành Flat Iron Steak – cực kỳ mềm, gần bằng thăn nội với giá rẻ hơn. • Marbling vừa phải: Không quá béo như Ribeye nhưng vẫn giữ được độ ngọt và mọng nước.</p>', 950000, 550000, 10, 'images/products/anh2.jpg', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `sodienthoai` varchar(10) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `loai` tinyint(4) NOT NULL DEFAULT 3,
  `trangthai` tinyint(4) NOT NULL DEFAULT 1,
  `hinhanh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `email`, `sodienthoai`, `matkhau`, `hoten`, `loai`, `trangthai`, `hinhanh`) VALUES
(1, 'abc@abc.com', '0988994683', '900150983cd24fb0d6963f7d28e17f72', 'Long Xuyên', 1, 1, 'signup.png'),
(2, 'def@abc.com', '11111111', '900150983cd24fb0d6963f7d28e17f72', 'Mèo máy Doraemon', 2, 1, 'avatar.jpg'),
(3, 'ghi@abc.com', '0988994685', '900150983cd24fb0d6963f7d28e17f72', 'Nhân viên GHI', 2, 1, NULL),
(4, 'kh1@gmail.com', '0988994686', '900150983cd24fb0d6963f7d28e17f72', 'Nguyễn Thị Thu An', 3, 1, NULL),
(5, 'kh2@gmail.com', '0988994687', '900150983cd24fb0d6963f7d28e17f72', 'Hồ Xuân Minh', 3, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diachi`
--
ALTER TABLE `diachi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nguoidung_id` (`nguoidung_id`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nguoidung_id` (`nguoidung_id`),
  ADD KEY `diachi_id` (`diachi_id`);

--
-- Indexes for table `donhangct`
--
ALTER TABLE `donhangct`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donhang_id` (`donhang_id`),
  ADD KEY `mathang_id` (`mathang_id`);

--
-- Indexes for table `mathang`
--
ALTER TABLE `mathang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `danhmuc_id` (`danhmuc_id`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `diachi`
--
ALTER TABLE `diachi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donhangct`
--
ALTER TABLE `donhangct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mathang`
--
ALTER TABLE `mathang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diachi`
--
ALTER TABLE `diachi`
  ADD CONSTRAINT `diachi_ibfk_1` FOREIGN KEY (`nguoidung_id`) REFERENCES `nguoidung` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`nguoidung_id`) REFERENCES `nguoidung` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `donhangct`
--
ALTER TABLE `donhangct`
  ADD CONSTRAINT `donhangct_ibfk_1` FOREIGN KEY (`donhang_id`) REFERENCES `donhang` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `donhangct_ibfk_2` FOREIGN KEY (`mathang_id`) REFERENCES `mathang` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `mathang`
--
ALTER TABLE `mathang`
  ADD CONSTRAINT `mathang_ibfk_1` FOREIGN KEY (`danhmuc_id`) REFERENCES `danhmuc` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
