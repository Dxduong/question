-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 28, 2023 lúc 06:54 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `question`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_question`
--

CREATE TABLE `tbl_question` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `option_a` varchar(255) NOT NULL,
  `option_b` varchar(255) NOT NULL,
  `option_c` varchar(255) NOT NULL,
  `option_d` varchar(255) NOT NULL,
  `answer` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_question`
--

INSERT INTO `tbl_question` (`id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `answer`) VALUES
(1, 'Câu hỏi 1:', 'A. Đáp án A', 'B. Đáp án B', 'C. Đáp án C', 'D. Đáp án D', 'C'),
(2, 'Câu hỏi 2:', 'A. Đáp án A', 'B. Đáp án B', 'C. Đáp án C', 'D. Đáp án D', 'A'),
(3, 'Câu hỏi 3:', 'A. Đáp án A', 'B. Đáp án B', 'C. Đáp án C', 'D. Đáp án D', 'C'),
(4, 'Câu hỏi 4:', 'A. Đáp án A', 'B. Đáp án B', 'C. Đáp án C', 'D. Đáp án D', 'C'),
(5, 'Câu hỏi 5:', 'A. Đáp án A', 'B. Đáp án B', 'C. Đáp án C', 'D. Đáp án D', 'B'),
(6, 'Câu hỏi 6:', 'A. Đáp án A', 'B. Đáp án B', 'C. Đáp án C', 'D. Đáp án D', 'B'),
(10, 'Câu hỏi 7:', 'A. Đáp án A', 'B. Đáp án B', 'C. Đáp án C', 'D. Đáp án D', 'D'),
(11, 'Câu hỏi 8:', 'A', 'B', 'C', 'D', 'B'),
(12, 'ch', '1', '2', '3', '4', 'C'),
(13, 'ch', '1', '2', '3', '4', 'A'),
(14, 'ch', '1', '2', '3', '4', 'C');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_question`
--
ALTER TABLE `tbl_question`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_question`
--
ALTER TABLE `tbl_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
