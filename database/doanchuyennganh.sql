-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2024 at 03:03 AM
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
-- Database: `doanchuyennganh`
--

-- --------------------------------------------------------

--
-- Table structure for table `bai_dangs`
--

CREATE TABLE `bai_dangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `TieuDeBD` varchar(200) NOT NULL,
  `NoiDungBD` text NOT NULL,
  `HinhAnh` varchar(100) DEFAULT NULL,
  `NgayDang` date NOT NULL,
  `TrangThai` varchar(255) NOT NULL DEFAULT 'Chờ duyệt',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `TenDangNhap` varchar(10) NOT NULL,
  `MaChuDe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bai_dangs`
--

INSERT INTO `bai_dangs` (`id`, `TieuDeBD`, `NoiDungBD`, `HinhAnh`, `NgayDang`, `TrangThai`, `created_at`, `updated_at`, `TenDangNhap`, `MaChuDe`) VALUES
(18, 'Tìm trọ gần TVU', 'Hong đòi hỏi quá nhiều, rộng rãi, thoáng mát, giá 500k quay đầu', NULL, '2024-01-07', 'đã duyệt', '2024-01-07 00:45:59', '2024-01-07 00:48:54', '110120054', 'TNT'),
(19, 'Tìm tài liệu môn Phát triển ứng dụng web mã nguồn mở', 'Ai có tài liệu chia lại cho tôi với (cho luôn thì rất vui ạ)', NULL, '2024-01-07', 'đã duyệt', '2024-01-07 00:52:31', '2024-01-07 00:52:39', '110120002', 'TGT'),
(20, 'Tìm lớp học cải thiện giáo dục thể chất 1', 'Các bạn ơi. Có ai cần cải thiện điểm gdtc1. Để lại \"chấm\" tui liên hệ ạ', NULL, '2024-01-07', 'đã duyệt', '2024-01-07 00:54:06', '2024-01-07 00:54:15', '110120010', 'HCT'),
(21, 'Cần tìm lớp học cải thiện', 'Mình cần tìm lớp học cải thiện một số môn để tốt nghiệp loại Giỏi. Ai có nhu cầu thì liên hệ với mình ạ', NULL, '2024-01-12', 'chờ duyệt', '2024-01-11 18:56:59', '2024-01-11 18:56:59', '110120128', 'HCT'),
(22, 'Tìm lớp học cải thiện anh văn không chuyên 1', 'Do hk đầu học dở tiếng Anh nên hiện tại mình cần tìm lớp học cải thiện điểm để đạt loại KHÁ. Ai có lớp . giúp để tôi liên hệ.', NULL, '2024-01-15', 'đã duyệt', '2024-01-15 01:26:19', '2024-01-15 01:26:34', '110120128', 'TLHG'),
(23, 'Tặng sách', 'Hiện tại, cô có vài cuốn sách về CSDL nhưng lâu ngày không đọc. Ai cần thì liên hệ cô để cô tặng cho', NULL, '2024-01-15', 'đã duyệt', '2024-01-15 01:36:12', '2024-01-15 01:36:22', 'MSGV001', 'TaSa');

-- --------------------------------------------------------

--
-- Table structure for table `binh_luans`
--

CREATE TABLE `binh_luans` (
  `MaBL` int(11) NOT NULL,
  `NoiDungBL` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `TenDangNhap` varchar(10) NOT NULL,
  `bai_dangs_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `binh_luans`
--

INSERT INTO `binh_luans` (`MaBL`, `NoiDungBL`, `created_at`, `updated_at`, `TenDangNhap`, `bai_dangs_id`) VALUES
(11, 'Bạn có chịu ở ghép với tui hôn', '2024-01-07 00:59:55', '2024-01-07 00:59:55', '110120010', 18);

-- --------------------------------------------------------

--
-- Table structure for table `chu_des`
--

CREATE TABLE `chu_des` (
  `MaChuDe` varchar(10) NOT NULL,
  `TenChuDe` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chu_des`
--

INSERT INTO `chu_des` (`MaChuDe`, `TenChuDe`, `created_at`, `updated_at`) VALUES
('HCT', 'Học cải thiện', '2024-01-02 00:32:17', '2024-01-02 00:32:17'),
('TaSa', 'Tặng sách', '2024-01-15 01:35:17', '2024-01-15 01:35:17'),
('TGT', 'Tìm giáo trình', '2024-01-06 10:25:51', '2024-01-06 10:25:51'),
('TLHG', 'Tìm lớp học ghép', '2024-01-06 10:26:15', '2024-01-06 10:26:15'),
('TNT', 'Tìm nhà trọ', '2024-01-02 00:32:08', '2024-01-02 00:32:08'),
('TS', 'Tìm sách', '2024-01-06 10:25:38', '2024-01-06 10:25:38');

-- --------------------------------------------------------

--
-- Table structure for table `co_vans`
--

CREATE TABLE `co_vans` (
  `MaGV` varchar(10) NOT NULL,
  `MaLop` varchar(10) NOT NULL,
  `ThoiGianBDCV` date NOT NULL,
  `ThoiGianKTCV` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `TrangThai` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `co_vans`
--

INSERT INTO `co_vans` (`MaGV`, `MaLop`, `ThoiGianBDCV`, `ThoiGianKTCV`, `created_at`, `updated_at`, `TrangThai`) VALUES
('MSGV001', 'DA20TTA', '2020-08-15', '2024-06-15', '2024-01-03 02:13:34', '2024-01-03 02:13:34', 'Đang cố vấn'),
('MSGV002', 'DA20TTB', '2020-08-15', '2024-06-15', '2024-01-03 07:02:53', '2024-01-03 07:02:53', 'Đang cố vấn'),
('MSGV003', 'DA20TTA', '2020-08-15', '2024-06-15', '2024-01-03 07:38:09', '2024-01-03 07:38:09', 'Không còn có vấn');

-- --------------------------------------------------------

--
-- Table structure for table `dao_taos`
--

CREATE TABLE `dao_taos` (
  `MaDaoTao` varchar(20) NOT NULL,
  `SoQuyetDinh` varchar(25) NOT NULL,
  `TinChi` int(11) NOT NULL,
  `TCLyThuyet` int(11) NOT NULL,
  `TCThucHanh` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dao_taos`
--

INSERT INTO `dao_taos` (`MaDaoTao`, `SoQuyetDinh`, `TinChi`, `TCLyThuyet`, `TCThucHanh`, `created_at`, `updated_at`) VALUES
('CNTT-CQ-2020', '3327/QĐ-ĐHTV', 150, 86, 64, '2024-01-02 00:32:30', '2024-01-02 00:32:30'),
('CNTT-CQ2018', '1265/QĐ-ĐHTV', 150, 84, 66, '2024-01-02 00:32:47', '2024-01-02 00:32:47');

-- --------------------------------------------------------

--
-- Table structure for table `giang_viens`
--

CREATE TABLE `giang_viens` (
  `MaGV` varchar(10) NOT NULL,
  `HoGV` varchar(20) NOT NULL,
  `TenGV` varchar(20) NOT NULL,
  `GioiTinh` varchar(5) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `DienThoai` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `SoQuyetDinhCV` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `giang_viens`
--

INSERT INTO `giang_viens` (`MaGV`, `HoGV`, `TenGV`, `GioiTinh`, `DiaChi`, `DienThoai`, `Email`, `SoQuyetDinhCV`, `created_at`, `updated_at`) VALUES
('MSGV001', 'Nguyễn Ngọc', 'Đan Thanh', 'Nữ', 'Trà Vinh', '0916741252', 'ngocdanthanhdt@tvu.edu.vn', NULL, '2024-01-03 00:29:10', '2024-01-17 18:55:00'),
('MSGV002', 'Phạm Thị', 'Trúc Mai', 'Nữ', 'Trà Vinh', '0936010206', 'pttmai@tvu.edu.vn', NULL, '2024-01-03 00:28:18', '2024-01-17 18:55:24'),
('MSGV003', 'Phạm', 'Minh Đương', 'Nam', 'Trà Vinh', '0396487693', 'duongminhpham@tvu.edu.vn', NULL, '2024-01-03 07:37:16', '2024-01-17 18:56:07'),
('MSGV004', 'Đoàn', 'Phước Miền', 'Nam', 'Trà Vinh', '0978962954', 'phuocmien@tvu.edu.vn', NULL, '2024-01-07 03:40:02', '2024-01-17 18:56:28'),
('MSGV005', 'Nguyễn', 'Bảo Ân', 'Nam', 'Trà Vinh', '0908961632', 'annb@tvu.edu.vn', NULL, '2024-01-07 03:41:18', '2024-01-17 18:56:49'),
('MSGV006', 'Ngô', 'Thanh Huy', 'Nam', 'Trà Vinh', '0989623237', 'thanhhuydhbk@gmail.com', NULL, '2024-01-17 18:54:32', '2024-01-17 18:54:32'),
('MSGV007', 'Nguyễn', 'Khắc Quốc', 'Nam', 'Trà Vinh', '0918085180', 'nkquoc@tvu.edu.vn', NULL, '2024-01-17 18:57:45', '2024-01-17 18:57:45'),
('MSGV008', 'Phan Thị', 'Phương Nam', 'Nữ', 'Trà Vinh', '0989236166', 'ptpnam@tvu.edu.vn', NULL, '2024-01-17 18:58:28', '2024-01-17 18:58:28'),
('MSGV009', 'Nhan', 'Minh Phúc', 'Nam', 'Trà Vinh', '0975999579', 'nhanminhphuc@tvu.edu.vn', NULL, '2024-01-17 19:00:07', '2024-01-17 19:00:07'),
('MSGV010', 'Võ', 'Thành C', 'Nam', 'Trà Vinh', '0909119657', 'vothanhc@tvu.edu.vn', NULL, '2024-01-17 19:01:11', '2024-01-17 19:01:11');

-- --------------------------------------------------------

--
-- Table structure for table `lops`
--

CREATE TABLE `lops` (
  `MaLop` varchar(10) NOT NULL,
  `TenLop` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `MaDaoTao` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lops`
--

INSERT INTO `lops` (`MaLop`, `TenLop`, `created_at`, `updated_at`, `MaDaoTao`) VALUES
('DA20TTA', 'Công nghệ thông tin A', '2024-01-02 00:33:14', '2024-01-02 00:33:14', 'CNTT-CQ-2020'),
('DA20TTB', 'Công nghệ thông tin B', '2024-01-02 00:33:00', '2024-01-02 00:33:00', 'CNTT-CQ-2020');

-- --------------------------------------------------------

--
-- Table structure for table `ly_lich_trich_ngangs`
--

CREATE TABLE `ly_lich_trich_ngangs` (
  `MaLyLich` varchar(10) NOT NULL,
  `HoTenCha` varchar(30) NOT NULL,
  `NamSinhCha` date NOT NULL,
  `DienThoaiCha` varchar(10) NOT NULL,
  `DanTocCha` varchar(10) NOT NULL,
  `TonGiaoCha` varchar(10) NOT NULL,
  `NgheNghiepCha` varchar(30) NOT NULL,
  `HoTenMe` varchar(30) NOT NULL,
  `NamSinhMe` date NOT NULL,
  `DienThoaiMe` varchar(10) NOT NULL,
  `DanTocMe` varchar(10) NOT NULL,
  `TonGiaoMe` varchar(10) NOT NULL,
  `NgheNghiepMe` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `MSSV` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ly_lich_trich_ngangs`
--

INSERT INTO `ly_lich_trich_ngangs` (`MaLyLich`, `HoTenCha`, `NamSinhCha`, `DienThoaiCha`, `DanTocCha`, `TonGiaoCha`, `NgheNghiepCha`, `HoTenMe`, `NamSinhMe`, `DienThoaiMe`, `DanTocMe`, `TonGiaoMe`, `NgheNghiepMe`, `created_at`, `updated_at`, `MSSV`) VALUES
('110120054', 'Lê Đức Lập', '1965-01-01', '0858224466', 'Kinh', 'Không', 'Buôn bán', 'Lương Thị Thu Hà', '1969-03-17', '0945434434', 'Kinh', 'Không', 'Thợ may', '2024-01-03 22:55:37', '2024-01-11 04:53:52', '110120054');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_12_02_162213_create_dao_taos_table', 1),
(3, '2023_12_02_163406_create_chu_des_table', 1),
(4, '2023_12_02_163437_create_tu_khoas_table', 1),
(5, '2023_12_03_143053_create_lops_table', 1),
(6, '2023_12_03_150637_create_sinh_viens_table', 1),
(7, '2023_12_03_150758_create_giang_viens_table', 1),
(8, '2023_12_03_150841_create_nguoi_dungs_table', 1),
(9, '2023_12_03_151739_create_bai_dangs_table', 1),
(10, '2023_12_03_151818_create_binh_luans_table', 1),
(11, '2023_12_03_151856_create_co_vans_table', 1),
(12, '2023_12_22_074447_create_ly_lich_trich_ngangs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nguoi_dungs`
--

CREATE TABLE `nguoi_dungs` (
  `TenDangNhap` varchar(10) NOT NULL,
  `MatKhau` varchar(255) NOT NULL,
  `VaiTro` varchar(20) NOT NULL,
  `AnhDaiDien` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `MaGV` varchar(10) DEFAULT NULL,
  `MSSV` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nguoi_dungs`
--

INSERT INTO `nguoi_dungs` (`TenDangNhap`, `MatKhau`, `VaiTro`, `AnhDaiDien`, `created_at`, `updated_at`, `MaGV`, `MSSV`) VALUES
('110120002', '$2y$12$.C68i5WhinjesIvc0q./CeR8EetpEq7uOmcU/BUONvegsVdTmm8O2', 'sinh_vien', NULL, '2024-01-03 22:57:48', '2024-01-03 22:57:48', NULL, '110120002'),
('110120004', '$2y$12$dAfXcQdGPeiPrbsgEVk2Nur9hZpicmJ2SXOo5vSNmpN4Rgq8SGFWO', 'sinh_vien', NULL, '2024-01-15 02:10:15', '2024-01-15 02:10:15', NULL, '110120004'),
('110120006', '$2y$12$bHFRJfH9KlSuWy8dYPKmpOkAQJVkkMv/oKricd9sQnzxG1yJCEZBK', 'sinh_vien', NULL, '2024-01-15 02:11:21', '2024-01-15 02:11:21', NULL, '110120006'),
('110120008', '$2y$12$PFkds2bi37Hd5/6qw.gngea.hH7MddHPCLL/M5f.TCJtwZ/G9nvL.', 'sinh_vien', NULL, '2024-01-15 02:12:40', '2024-01-15 02:12:40', NULL, '110120008'),
('110120010', '$2y$12$sFJ114UEjpukW5NGeSJSeel.c3WaYSG7AUnZ2QQIFrY4F31.1y66e', 'sinh_vien', NULL, '2024-01-07 00:38:53', '2024-01-07 00:38:53', NULL, '110120010'),
('110120013', '$2y$12$JKG/1bf5L1Cu./2Pl5EcneBnQo/hExVLdgLZiE5Iivpaqi7l2OY5a', 'sinh_vien', NULL, '2024-01-15 08:58:14', '2024-01-15 08:58:14', NULL, '110120013'),
('110120014', '$2y$12$R6d8eDVt1T0vhSKj56IVLu.9sWuJXTTLmXBY6mOfSINYU9ZhZBLni', 'sinh_vien', NULL, '2024-01-15 02:14:09', '2024-01-15 02:14:09', NULL, '110120014'),
('110120016', '$2y$12$/ss8dMWXcx7D80VpDbdtluAr.6qn7.OkqolSAdGp1TEP5tUFQUsnO', 'sinh_vien', NULL, '2024-01-15 08:59:17', '2024-01-15 08:59:17', NULL, '110120016'),
('110120019', '$2y$12$U2tHh7NLfC1tGbojjL/Gt.YhnASlbb0.r.LzXITZdpHcnPW4ITNcO', 'sinh_vien', NULL, '2024-01-15 07:32:34', '2024-01-15 07:32:34', NULL, '110120019'),
('110120020', '$2y$12$FiRh2EpODMBRiIv0JcmbyOYYVo.nJrcmRnnjxQT/qvaBndBAu9b56', 'sinh_vien', NULL, '2024-01-15 08:01:04', '2024-01-15 08:01:04', NULL, '110120020'),
('110120021', '$2y$12$rCPqAFzp/p9qLn2WXPXTq.wOdIGRxFijxsv6ptIn5i/Bu5AGer5bS', 'sinh_vien', NULL, '2024-01-15 02:20:10', '2024-01-15 02:20:10', NULL, '110120021'),
('110120026', '$2y$12$L0WhPNcOC9/vbZslak/D5OfQNnQCZo5k0XXcnL8Ajyk4H8csW.iL6', 'sinh_vien', NULL, '2024-01-15 02:21:04', '2024-01-15 02:21:04', NULL, '110120026'),
('110120027', '$2y$12$EyZSrBcr8fRyW98TOkZm2OTVIbc0ZxIrMFM15VZfFThMsPONeYgPu', 'sinh_vien', NULL, '2024-01-15 02:21:47', '2024-01-15 02:21:47', NULL, '110120027'),
('110120028', '$2y$12$LEVRfKMnRK3s1MmqpQck3uQ4Gx0itQnw839Zt3RBpP8AB/o/CaB.C', 'sinh_vien', NULL, '2024-01-07 00:42:58', '2024-01-07 00:42:58', NULL, '110120028'),
('110120031', '$2y$12$b8WDFVbkLNUkjfASWSJn7O0CNF/0m8OSqAbe7vmUwKbAiTg2Ta8S6', 'sinh_vien', NULL, '2024-01-15 09:00:10', '2024-01-15 09:00:10', NULL, '110120031'),
('110120034', '$2y$12$3jdgRxN0i8bf1cRc9Ltsy.UfVhfL9wIk2EEuoOvDERfGw7TmgR7r2', 'sinh_vien', NULL, '2024-01-07 00:43:55', '2024-01-07 00:43:55', NULL, '110120034'),
('110120037', '$2y$12$6zMjLWvNJ5q1B3vBWxojC.NvAY8sepOQwQc098ZR16ImeOclirL1K', 'sinh_vien', NULL, '2024-01-15 08:12:04', '2024-01-15 08:12:04', NULL, '110120037'),
('110120038', '$2y$12$.S1r0mBSnHrR11ApGFQ8VedTbMsoeBAbCZ0FjGxxFZbMb7F2MTTt6', 'sinh_vien', NULL, '2024-01-15 09:01:53', '2024-01-15 09:01:53', NULL, '110120038'),
('110120041', '$2y$12$uqpNXcA8MrH./B7RG1S.7O7ZaXteiOxCK1UxLSEu0KLRbG8H/o/2y', 'sinh_vien', NULL, '2024-01-15 08:35:05', '2024-01-15 08:35:05', NULL, '110120041'),
('110120044', '$2y$12$7o1NlpZWRlZeUMYxZgT3JO2GmQuCIpPVEzWnmBIsvY7Nzbv6y0AMW', 'sinh_vien', 'images/1705304018.jpg', '2024-01-14 23:52:52', '2024-01-15 00:33:38', NULL, '110120044'),
('110120046', '$2y$12$BdYG8R20xetQ9FWEVKTzMObxldEo7zVdcWU3Jz6Fyj1TWwVoRwcB6', 'sinh_vien', NULL, '2024-01-15 08:36:07', '2024-01-15 08:36:07', NULL, '110120046'),
('110120047', '$2y$12$pCTZ0cV6OfQjl6PGnGJXnOfHZM/zTCu5Cc/zV2tsrnvDfQccNaGGC', 'sinh_vien', NULL, '2024-01-15 02:23:44', '2024-01-15 02:23:44', NULL, '110120047'),
('110120049', '$2y$12$BYcrqWBZlDgFGZHD.OFby.RtPRTPSmmkSeinLYeDno2BxDb2ehg1W', 'sinh_vien', NULL, '2024-01-15 02:24:24', '2024-01-15 02:24:24', NULL, '110120049'),
('110120051', '$2y$12$Mfike75l0xkurm0zscOnpOpgHCYKrAtAVew/Ll6e.e2.R5uWDHKhO', 'sinh_vien', NULL, '2024-01-15 02:25:45', '2024-01-15 02:25:45', NULL, '110120051'),
('110120053', '$2y$12$26OO9W.t5HABMLrMbPNP2eLk8lfdr2XPqOGn/xDpTnEAl3DTqrpbm', 'sinh_vien', NULL, '2024-01-15 09:02:55', '2024-01-15 09:02:55', NULL, '110120053'),
('110120054', '$2y$12$XuHKkcZcmuDJ1TX9WCyYM.FiAzz5qgWmmH6w4UARvnPsdzr18qxCy', 'sinh_vien', 'images/1705419002.jpg', '2024-01-02 00:33:41', '2024-01-16 08:30:02', NULL, '110120054'),
('110120055', '$2y$12$IbYKAvDSRVp8sHlYYTgJouDir3q76HSb5VmciNr1B.HCF6W84wb4q', 'sinh_vien', NULL, '2024-01-15 08:37:23', '2024-01-15 08:37:23', NULL, '110120055'),
('110120059', '$2y$12$hxpKGOm4r3XuldB1zdygZ./nQ7GAhEpFgIAODzEvLmJtyOWNHnmSa', 'sinh_vien', NULL, '2024-01-15 09:04:13', '2024-01-15 09:04:13', NULL, '110120059'),
('110120060', '$2y$12$tD7nnwjpjQIMtqEd/8/kNel4iU5dtkmXbYFXx/GcFVovHYJ7eVXwO', 'sinh_vien', NULL, '2024-01-15 02:26:48', '2024-01-15 02:26:48', NULL, '110120060'),
('110120063', '$2y$12$ZT0BmX7akliC4YzMg82FS.AzJbKgrQy6DMFwu0Ah1AYol91psLvDW', 'sinh_vien', NULL, '2024-01-15 02:27:28', '2024-01-15 02:27:28', NULL, '110120063'),
('110120067', '$2y$12$1fWOny/R/TVU5PmUUt.BrO4kcpXdGASsLYYBcglPumtMIXQi1ifmC', 'sinh_vien', NULL, '2024-01-15 02:28:33', '2024-01-15 02:28:33', NULL, '110120067'),
('110120070', '$2y$12$QTgdRzGKq4DR6C.z4yqlBuczCs9YdJd5Whz4xsbQTo3P0cCXIdrae', 'sinh_vien', NULL, '2024-01-15 09:05:43', '2024-01-15 09:05:43', NULL, '110120070'),
('110120071', '$2y$12$QsS9hkqL5cquZgGDiybxA.lQFk.hxGZTC.GWfxvkxVTdWhDZYCACG', 'sinh_vien', NULL, '2024-01-15 02:29:26', '2024-01-15 02:29:26', NULL, '110120071'),
('110120077', '$2y$12$HOXpvUii1tRtHbjoquPAEu7ygTtYSAFKy0HeVe873hPN7PgZ/JJxG', 'sinh_vien', NULL, '2024-01-15 02:31:11', '2024-01-15 02:31:11', NULL, '110120077'),
('110120078', '$2y$12$U83c1uzwB08Y/TiSgErOWujfefEijkgXem6vnlWzuVFmfT/arob4W', 'sinh_vien', NULL, '2024-01-15 08:38:28', '2024-01-15 08:38:28', NULL, '110120078'),
('110120081', '$2y$12$AJdidA9fypnzHoIMpyRZRuut9GGKKeoGPkQQlwaAU2.NjoB/POnPG', 'sinh_vien', NULL, '2024-01-15 02:31:55', '2024-01-15 02:31:55', NULL, '110120081'),
('110120082', '$2y$12$Vq/qb3UYSmTvg5lgVVDXqeIIoUu7agh877/kupny6ihMWMt1adXHC', 'sinh_vien', NULL, '2024-01-15 02:32:32', '2024-01-15 02:32:32', NULL, '110120082'),
('110120083', '$2y$12$.kX5gxs8EIGcJfKqE5gTtO.dI27j3nf.Jz6AMQHEKZVyv2cuFZr4C', 'sinh_vien', NULL, '2024-01-15 02:33:14', '2024-01-15 02:33:14', NULL, '110120083'),
('110120084', '$2y$12$T.gpmoGvoikj67PgxerTGuSYCfxZBdaZPSuZkJZV2ZdNIRhUIl/yi', 'sinh_vien', NULL, '2024-01-15 02:34:45', '2024-01-15 02:34:45', NULL, '110120084'),
('110120085', '$2y$12$eQXeqHIPkmyr0cvSg8XqnOj0alndWCRzg4CFlIgZbcElxRbd71l1e', 'sinh_vien', NULL, '2024-01-15 08:39:41', '2024-01-15 08:39:41', NULL, '110120085'),
('110120087', '$2y$12$dwD4wTSI2vOLdYM.DDChJOQjGfyAxX5e47qtbXsLih3mxFvokF55C', 'sinh_vien', NULL, '2024-01-15 08:41:13', '2024-01-15 08:41:13', NULL, '110120087'),
('110120090', '$2y$12$NeUbXcez/ACjT/3BuroP4uG3ELi7eediy5220k/VaPfaX8xSAMeYq', 'sinh_vien', NULL, '2024-01-15 08:43:24', '2024-01-15 08:43:24', NULL, '110120090'),
('110120091', '$2y$12$eWzINsW5dY5pI484cZTMWuoyGFmwKADd7y5Zi45.Z2fgQQeUMc1f2', 'sinh_vien', NULL, '2024-01-15 08:44:22', '2024-01-15 08:44:22', NULL, '110120091'),
('110120092', '$2y$12$QSzpQR1TX5NipaQb6y78LOulwdLSQQVLkDdbuGy6D3sDn27tWati2', 'sinh_vien', NULL, '2024-01-15 09:06:24', '2024-01-15 09:06:24', NULL, '110120092'),
('110120104', '$2y$12$Vjf7PHtJmLt49yjInyichu1fdxT0S4u9Oaozwa4E8J6EjX4ypd906', 'sinh_vien', NULL, '2024-01-15 08:46:27', '2024-01-15 08:46:27', NULL, '110120104'),
('110120115', '$2y$12$V9DVJdQT/ygwiN2wldl69.kPodf2EZ892B8t9aDvljUcqsTHzyKNe', 'sinh_vien', NULL, '2024-01-15 08:47:21', '2024-01-15 08:47:21', NULL, '110120115'),
('110120116', '$2y$12$L02oTTY3SMXp6pGBxSQlaOcdbT4qLw9ujvqDT8fsxqqNTbLt.r2lu', 'sinh_vien', NULL, '2024-01-15 08:48:45', '2024-01-15 08:48:45', NULL, '110120116'),
('110120119', '$2y$12$VpVMpxkS0ekF/SSYP0ihzeX.bYvxc7BhJHTPEJJon9DVeJMl/T1oC', 'sinh_vien', NULL, '2024-01-15 08:49:52', '2024-01-15 08:49:52', NULL, '110120119'),
('110120122', '$2y$12$MdHdxmuw2tlcJB5SWykn3OTjiT0bT2tQfF/qQH.itZtTqk7P14WMu', 'sinh_vien', NULL, '2024-01-15 08:51:26', '2024-01-15 08:51:26', NULL, '110120122'),
('110120127', '$2y$12$wjZNsOYkDAb42OJ2rrDxm.y5rqRSPVcUIxwgX5ntCcTz2wtUg.N/y', 'sinh_vien', NULL, '2024-01-15 08:52:38', '2024-01-15 08:52:38', NULL, '110120127'),
('110120128', '$2y$12$aot78st2bBmKyZVZV0oVVe2cI87iayRa4Wm9gW7Y6/WbmVwnED3P.', 'sinh_vien', 'images/1705304632.jpg', '2024-01-07 00:40:25', '2024-01-15 00:43:52', NULL, '110120128'),
('110120132', '$2y$12$t.9kdndT5Eq0RNz7YfXJ5ui3Hy681SYYBoxcDN7ZuGLtsvkKjPy.a', 'sinh_vien', NULL, '2024-01-15 08:53:45', '2024-01-15 08:53:45', NULL, '110120132'),
('110120161', '$2y$12$1w77l42Qq0fTj3gmtSe0.uI.hGgrz6SCimdAo35jsLkYY4nbDL0zq', 'sinh_vien', NULL, '2024-01-15 08:54:56', '2024-01-15 08:54:56', NULL, '110120161'),
('110120164', '$2y$12$vWQSeR0wbWF72F108ShZIu47F/PXx1GYvtlBvGA83SOuKEQE7GdXq', 'sinh_vien', NULL, '2024-01-15 02:36:27', '2024-01-15 02:36:27', NULL, '110120164'),
('110120166', '$2y$12$qssdC9bFnHFRJHL2.trUSu/i6NcwvE4L3PrsMhi6vvLQAdyRAKGV6', 'sinh_vien', NULL, '2024-01-15 02:37:13', '2024-01-15 02:37:13', NULL, '110120166'),
('110120167', '$2y$12$dvViaYqjIJtZlD8K6kKjKOgrcd2iYyOV9o4lm0kHztQGBl5BeTqvy', 'sinh_vien', NULL, '2024-01-15 02:37:53', '2024-01-15 02:37:53', NULL, '110120167'),
('110120170', '$2y$12$9cPc28M4nb89MkWf.CgoNO.NYdib5xfqRyyDH.DpP67jYi/vlrAsm', 'sinh_vien', NULL, '2024-01-15 02:39:00', '2024-01-15 02:39:00', NULL, '110120170'),
('110120171', '$2y$12$/ek1TgtaPZAiLG6F5vE1dOsjGdHMxvAAvLhLPX5yXqFZkTdwcRVES', 'sinh_vien', NULL, '2024-01-15 08:55:40', '2024-01-15 08:55:40', NULL, '110120171'),
('117520005', '$2y$12$AVRXcaM.pqgF2G3zwtpIsOC09j/ktA.d5AqdNzDNoSx9Wcakucjl2', 'sinh_vien', NULL, '2024-01-15 08:56:42', '2024-01-15 08:56:42', NULL, '117520005'),
('MSGV001', '$2y$12$ejCK12/eFcILLXA.PUTtdeuM5LrNLSo25X9UXXV0oKaFjPLBE7x3O', 'giang_vien', NULL, '2024-01-03 00:29:11', '2024-01-03 00:29:11', 'MSGV001', NULL),
('MSGV002', '$2y$12$IIiUWr9FF3sxypdLy6OFvucECUu.XIAu7hQAQJWB8YPckh8sVFsfq', 'admin', NULL, '2024-01-03 00:28:19', '2024-01-03 00:28:19', 'MSGV002', NULL),
('MSGV003', '$2y$12$bH1NrgvtNsk1DM56KITkfuvBdPcAqj2iLqQQcbVtpKj0W/J40kM5i', 'giang_vien', NULL, '2024-01-03 07:37:17', '2024-01-03 07:37:17', 'MSGV003', NULL),
('MSGV004', '$2y$12$kccNCK7AQ/jW86B85We0eubR0W7UYTEz5l9Oenq.ovYc3Hpv6Bxyy', 'giang_vien', NULL, '2024-01-07 03:40:02', '2024-01-07 03:40:02', 'MSGV004', NULL),
('MSGV005', '$2y$12$j3yfEYsfb5WCK7Rp77OFFeFFo6xx1A4RPfFGI2XN4RvNZJGRwGKgW', 'giang_vien', NULL, '2024-01-07 03:41:18', '2024-01-07 03:41:18', 'MSGV005', NULL),
('MSGV006', '$2y$12$IfRTK9fY3YFDcfvrduoOgOAgNKhbPoOSDkN/ZkhFqc6kANtV/wUEK', 'giang_vien', NULL, '2024-01-17 18:54:33', '2024-01-17 18:54:33', 'MSGV006', NULL),
('MSGV007', '$2y$12$33yVwsB.QZfrQgnnj8dUV.lw3PCpEE/ysF4.9x6oZQbkivRJNI3I.', 'giang_vien', NULL, '2024-01-17 18:57:45', '2024-01-17 18:57:45', 'MSGV007', NULL),
('MSGV008', '$2y$12$TGtiVG.xEgpgGDxo0/axm.cTOYo6b/dMyeVsDNJ/JLeLE0ZmsGcwS', 'giang_vien', NULL, '2024-01-17 18:58:28', '2024-01-17 18:58:28', 'MSGV008', NULL),
('MSGV009', '$2y$12$rW0FOXfscxt/ME0xJC.kauFUT34hTA3yOWbhl4DeXwjQvXM///Tmi', 'giang_vien', NULL, '2024-01-17 19:00:07', '2024-01-17 19:00:07', 'MSGV009', NULL),
('MSGV010', '$2y$12$glbNZEHGpJQtwTOye428w.fG93RIgjL33jL1WMnb0VqoJ8wsJcfEW', 'giang_vien', NULL, '2024-01-17 19:01:11', '2024-01-17 19:01:11', 'MSGV010', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sinh_viens`
--

CREATE TABLE `sinh_viens` (
  `MSSV` varchar(10) NOT NULL,
  `TenSV` varchar(20) NOT NULL,
  `HoSV` varchar(20) NOT NULL,
  `GioiTinh` varchar(5) NOT NULL,
  `NgaySinh` date NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `DienThoai` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `TinhTrang` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `MaLop` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sinh_viens`
--

INSERT INTO `sinh_viens` (`MSSV`, `TenSV`, `HoSV`, `GioiTinh`, `NgaySinh`, `DiaChi`, `DienThoai`, `Email`, `TinhTrang`, `created_at`, `updated_at`, `MaLop`) VALUES
('110120002', 'Tuấn Anh', 'Huỳnh Trần', 'Nam', '1994-03-26', 'Trà Vinh', '0832765383', 'httanh@gmail.com', 'Học', '2024-01-03 22:57:47', '2024-01-03 22:57:47', 'DA20TTA'),
('110120004', 'Tiến Anh', 'Trần', 'Nam', '2002-11-03', 'Trà Vinh', '0888741258', 'ttanh@gmail.com', 'Học', '2024-01-15 02:10:15', '2024-01-15 02:18:05', 'DA20TTA'),
('110120006', 'Kim Bắc', 'Đặng', 'Nam', '2002-06-14', 'Trà Vinh', '0963214578', 'dkbac@gmail.com', 'Học', '2024-01-15 02:11:20', '2024-01-15 02:17:49', 'DA20TTA'),
('110120008', 'Ngọc Chăm', 'Nguyễn Thị', 'Nữ', '2002-05-09', 'Trà Vinh', '0321456789', 'ntncham@gmail.com', 'Học', '2024-01-15 02:12:40', '2024-01-15 02:17:17', 'DA20TTA'),
('110120010', 'Minh Chiến', 'Hà', 'Nam', '2002-06-10', 'Trà Vinh', '0832732854', 'haminhchien@gmail.com', 'Học', '2024-01-07 00:38:52', '2024-01-07 00:38:52', 'DA20TTA'),
('110120013', 'Minh Đăng', 'Nguyễn', 'Nam', '2002-05-14', 'Trà Vinh', '0973214565', 'nmdang@gmail.com', 'Học', '2024-01-15 08:58:14', '2024-01-15 08:58:14', 'DA20TTB'),
('110120014', 'Võ Minh Đăng', 'Trần Nguyễn', 'Nam', '2002-03-25', 'Trà Vinh', '0345698745', 'tnvmdang@gmail.com', 'Học', '2024-01-15 02:14:08', '2024-01-15 02:14:08', 'DA20TTA'),
('110120016', 'Phúc Đạt', 'Huỳnh', 'Nam', '2002-11-13', 'Trà Vinh', '0912887590', 'hpdat@gmail.com', 'Học', '2024-01-15 08:59:17', '2024-01-15 08:59:17', 'DA20TTB'),
('110120019', 'Quyển Đình', 'Phạm', 'Nữ', '2002-02-10', 'Trà Vinh', '0835697888', 'pqdinh@gmail.com', 'Học', '2024-01-15 07:32:34', '2024-01-15 07:32:34', 'DA20TTB'),
('110120020', 'Minh Đức', 'Nguyễn', 'Nam', '2002-04-07', 'Trà Vinh', '0654218523', 'nmduc@gmail.com', 'Học', '2024-01-15 08:01:04', '2024-01-15 08:01:04', 'DA20TTB'),
('110120021', 'Duy Đức', 'Vủ', 'Nam', '2002-10-05', 'Trà Vinh', '0852369741', 'vdduc@gmail.com', 'Học', '2024-01-15 02:20:10', '2024-01-15 02:20:10', 'DA20TTA'),
('110120026', 'Ngọc Hân', 'Lâm', 'Nữ', '2001-09-02', 'Trà Vinh', '0741852963', 'lnhan@gmail.com', 'Học', '2024-01-15 02:21:04', '2024-01-15 02:24:52', 'DA20TTA'),
('110120027', 'Minh Hận', 'Lê', 'Nam', '2002-02-15', 'Trà Vinh', '0987321456', 'lmhan@gmail.com', 'Học', '2024-01-15 02:21:47', '2024-01-15 02:21:47', 'DA20TTA'),
('110120028', 'Hữu Hiếu', 'Huỳnh', 'Nam', '2002-08-15', 'Trà Vinh', '0832574000', 'hhhieu@gmail.com', 'Học', '2024-01-07 00:42:57', '2024-01-07 00:42:57', 'DA20TTA'),
('110120031', 'Thái Hưng', 'Trần', 'Nam', '2001-09-15', 'Trà Vinh', '0944656113', 'tthung@gmail.com', 'Học', '2024-01-15 09:00:10', '2024-01-15 09:00:10', 'DA20TTB'),
('110120034', 'Vũ Huy', 'Trương', 'Nam', '2002-09-10', 'Trà Vinh', '0384256984', 'trvuhuy@gmail.com', 'Học', '2024-01-07 00:43:54', '2024-01-07 00:43:54', 'DA20TTA'),
('110120037', 'Vĩ Khang', 'Phan', 'Nam', '2002-04-24', 'Trà Vinh', '0812987345', 'pvkhang@gmail.com', 'Học', '2024-01-15 08:12:03', '2024-01-15 08:12:03', 'DA20TTB'),
('110120038', 'Mỹ Khánh', 'Trần Thị', 'Nữ', '2002-02-02', 'Trà Vinh', '0889374123', 'ttmykhanh@gmail.com', 'Học', '2024-01-15 09:01:53', '2024-01-15 09:01:53', 'DA20TTB'),
('110120041', 'Bách Khôi', 'Nguyễn Huỳnh', 'Nam', '2002-10-31', 'Trà Vinh', '0833870234', 'nhbkhoi@gmail.com', 'Học', '2024-01-15 08:35:04', '2024-01-15 08:35:04', 'DA20TTB'),
('110120044', 'Tấn Lộc', 'Huỳnh', 'Nam', '2002-04-02', 'Càng Long', '0932341051', 'huynhloc0944@gmail.com', 'Học', '2024-01-14 23:52:51', '2024-01-15 00:05:20', 'DA20TTB'),
('110120046', 'Xuân Lộc', 'Tăng', 'Nam', '2002-05-27', 'Trà Vinh', '0819870325', 'txloc@gmail.com', 'Học', '2024-01-15 08:36:07', '2024-01-15 08:36:07', 'DA20TTB'),
('110120047', 'Hữu Lợi', 'Trầm', 'Nam', '2002-04-05', 'Trà Vinh', '0321852951', 'thloi@gmail.com', 'Học', '2024-01-15 02:23:44', '2024-01-15 02:23:44', 'DA20TTA'),
('110120049', 'Bảo Nghi', 'Lê', 'Nữ', '2002-10-02', 'Trà Vinh', '0984621357', 'lbnghi@gmail.com', 'Học', '2024-01-15 02:24:23', '2024-01-15 02:24:23', 'DA20TTA'),
('110120051', 'Trọng Nhân', 'Trần', 'Nam', '2002-09-06', 'Trà Vinh', '0357456753', 'ttnhan@gmail.com', 'Học', '2024-01-15 02:25:45', '2024-01-15 02:25:45', 'DA20TTA'),
('110120053', 'Huỳnh Nhiên', 'Nguyễn', 'Nam', '2000-02-15', 'Trà Vinh', '0992385476', 'nhnhien@gmail.com', 'Học', '2024-01-15 09:02:54', '2024-01-15 09:04:42', 'DA20TTB'),
('110120054', 'Đức Nhuận', 'Lê', 'Nam', '2002-12-27', 'Trà Vinh', '0949944002', 'leducnhuan2014@gmail.com', 'Học', '2024-01-02 00:33:41', '2024-01-10 09:40:29', 'DA20TTA'),
('110120055', 'Nhựt Ninh', 'Nguyễn', 'Nam', '2002-11-09', 'Trà Vinh', '0922765123', 'nnninh@gmail.com', 'Học', '2024-01-15 08:37:22', '2024-01-15 08:37:22', 'DA20TTB'),
('110120059', 'Sô Phát', 'Trương Sơn', 'Nữ', '2002-10-11', 'Trà Vinh', '0854467010', 'tssphat@gmail.com', 'Học', '2024-01-15 09:04:13', '2024-01-15 09:04:13', 'DA20TTB'),
('110120060', 'Sô Phi', 'Kim Thị', 'Nữ', '2000-01-11', 'Trà Vinh', '0159654812', 'ktsphi@gmail.com', 'Học', '2024-01-15 02:26:48', '2024-01-15 02:26:48', 'DA20TTA'),
('110120063', 'Khánh Quy', 'Lâm', 'Nam', '2002-12-09', 'Trà Vinh', '0345867931', 'lkquy@gmail.com', 'Học', '2024-01-15 02:27:28', '2024-01-15 02:27:28', 'DA20TTA'),
('110120067', 'Diễm Sương', 'Nguyễn Thị', 'Nữ', '2001-04-04', 'Trà Vinh', '0245316951', 'ntdsuong@gmail.com', 'Học', '2024-01-15 02:28:33', '2024-01-15 02:28:33', 'DA20TTA'),
('110120070', 'Hiếu Thảo', 'Lê Thị', 'Nữ', '2001-05-05', 'Trà Vinh', '0821340576', 'lththao@gmail.com', 'Học', '2024-01-15 09:05:43', '2024-01-15 09:05:43', 'DA20TTB'),
('110120071', 'Ngọc Thịnh', 'Nguyễn', 'Nam', '2002-09-25', 'Trà Vinh', '0312869745', 'nnthinh@gmail.com', 'Học', '2024-01-15 02:29:26', '2024-01-15 02:29:26', 'DA20TTA'),
('110120077', 'Quang Tiến', 'Trần', 'Nam', '2002-09-04', 'Trà Vinh', '0897351426', 'tqtien@gmail.com', 'Học', '2024-01-15 02:31:11', '2024-01-15 02:31:11', 'DA20TTA'),
('110120078', 'Trọng Tín', 'Nguyễn', 'Nam', '2002-04-28', 'Trà Vinh', '0812309775', 'nttin@gmail.com', 'Học', '2024-01-15 08:38:27', '2024-01-15 08:38:27', 'DA20TTB'),
('110120081', 'Triến', 'Nguyễn', 'Nam', '2002-02-17', 'Trà Vinh', '0876359761', 'ngtrien@gmail.com', 'Học', '2024-01-15 02:31:54', '2024-01-15 02:31:54', 'DA20TTA'),
('110120082', 'Vỹ Triết', 'Trần', 'Nam', '2002-08-26', 'Trà Vinh', '0986357951', 'tvtriet@gmail.com', 'Học', '2024-01-15 02:32:32', '2024-01-15 02:32:32', 'DA20TTA'),
('110120083', 'Dương Tuấn', 'Kim', 'Nam', '2002-09-11', 'Trà Vinh', '0387932156', 'kdtuan@gmail.com', 'Học', '2024-01-15 02:33:13', '2024-01-15 02:33:13', 'DA20TTA'),
('110120084', 'Phúc Vĩ', 'Trần', 'Nam', '2002-08-23', 'Trà Vinh', '0362148863', 'tpvi@gmail.com', 'Học', '2024-01-15 02:34:44', '2024-01-15 02:34:44', 'DA20TTA'),
('110120085', 'Xuân Vinh', 'Nguyễn', 'Nam', '2002-12-06', 'Trà Vinh', '0844098265', 'nxvinh@gmail.com', 'Học', '2024-01-15 08:39:41', '2024-01-15 08:39:41', 'DA20TTB'),
('110120087', 'Mỹ Yến', 'Nguyễn Thị', 'Nữ', '2002-09-26', 'Trà Vinh', '0833634909', 'ntmyen@gmail.com', 'Học', '2024-01-15 08:41:13', '2024-01-15 08:41:13', 'DA20TTB'),
('110120090', 'Quốc Cảnh', 'Từ', 'Nam', '2002-06-07', 'Trà Vinh', '0831585387', 'tqcanh@gmail.com', 'Học', '2024-01-15 08:43:24', '2024-01-15 08:43:24', 'DA20TTB'),
('110120091', 'Oanh Đi', 'Thạch Lâm', 'Nam', '2002-06-24', 'Trà Vinh', '0832980345', 'tlodi@gmail.com', 'Học', '2024-01-15 08:44:22', '2024-01-15 08:44:22', 'DA20TTB'),
('110120092', 'Thái Điền', 'Nguyễn', 'Nam', '2002-04-10', 'Trà Vinh', '0981210745', 'ntdien@gmail.com', 'Học', '2024-01-15 09:06:23', '2024-01-15 09:06:23', 'DA20TTB'),
('110120104', 'Tuấn Kiệt', 'Nguyễn', 'Nam', '2002-11-09', 'Trà Vinh', '0984101848', 'ntkiet@gmail.com', 'Học', '2024-01-15 08:46:27', '2024-01-15 08:46:27', 'DA20TTB'),
('110120115', 'Tuấn Sơn', 'Trần', 'Nam', '2002-06-10', 'Trà Vinh', '0916743290', 'ttson@gmail.com', 'Học', '2024-01-15 08:47:21', '2024-01-15 08:47:21', 'DA20TTB'),
('110120116', 'Anh Tài', 'Thân', 'Nam', '2002-01-31', 'Trà Vinh', '0977387451', 'tatai@gmail.com', 'Học', '2024-01-15 08:48:45', '2024-01-15 08:48:45', 'DA20TTB'),
('110120119', 'Nhựt Thoại', 'Lê Dương', 'Nam', '2002-05-23', 'Trà Vinh', '0932598014', 'ldnthoai@gmail.com', 'Học', '2024-01-15 08:49:51', '2024-01-15 08:49:51', 'DA20TTB'),
('110120122', 'Minh Trí', 'Trần', 'Nam', '2002-01-09', 'Trà Vinh', '0876201923', 'tmtri@gmail.com', 'Học', '2024-01-15 08:51:26', '2024-01-15 08:51:26', 'DA20TTB'),
('110120127', 'Cẩm Xuyên', 'Nguyễn Thị', 'Nữ', '2002-01-21', 'Trà Vinh', '0966385410', 'ntcxuyen@gmail.com', 'Học', '2024-01-15 08:52:38', '2024-01-15 08:52:38', 'DA20TTB'),
('110120128', 'Gia Bảo', 'Huỳnh', 'Nam', '2002-03-26', 'Trà Vinh', '0934678432', 'hgiabao@gmail.com', 'Học', '2024-01-07 00:40:25', '2024-01-07 00:40:25', 'DA20TTA'),
('110120132', 'Tuấn Dạng', 'Lê', 'Nam', '2002-09-30', 'Trà Vinh', '0878001496', 'ltdang@gmail.com', 'Học', '2024-01-15 08:53:44', '2024-01-15 08:53:44', 'DA20TTB'),
('110120161', 'Minh Trọng', 'Nhan Lê', 'Nam', '2002-08-14', 'Trà Vinh', '0912075346', 'nlmtrong@gmail.com', 'Học', '2024-01-15 08:54:55', '2024-01-15 08:54:55', 'DA20TTB'),
('110120164', 'Khánh Duy', 'Mạch', 'Nam', '2001-08-03', 'Trà Vinh', '0812547896', 'mkduy@gmail.com', 'Học', '2024-01-15 02:36:26', '2024-01-15 02:36:26', 'DA20TTA'),
('110120166', 'Tấn Lợi', 'Ngô', 'Nam', '2002-12-04', 'Trà Vinh', '0312645798', 'ntloi@gmail.com', 'Học', '2024-01-15 02:37:12', '2024-01-15 02:37:12', 'DA20TTA'),
('110120167', 'Anh Duy', 'Võ', 'Nam', '2002-02-27', 'Trà Vinh', '0834164759', 'vaduy@gmail.com', 'Học', '2024-01-15 02:37:53', '2024-01-15 02:37:53', 'DA20TTA'),
('110120170', 'Trọng Nghĩa', 'Phạm', 'Nam', '2002-12-13', 'Trà Vinh', '0365987123', 'ptnghia@gmail.com', 'Học', '2024-01-15 02:39:00', '2024-01-15 02:39:00', 'DA20TTA'),
('110120171', 'Huỳnh Khang', 'Trần', 'Nam', '2002-11-23', 'Trà Vinh', '0909255634', 'thkhang@gmail.com', 'Học', '2024-01-15 08:55:40', '2024-01-15 08:55:40', 'DA20TTB'),
('117520005', 'Thanh Trúc', 'Nguyễn', 'Nữ', '2002-02-03', 'Trà Vinh', '0843076123', 'nttruc@gmail.com', 'Học', '2024-01-15 08:56:42', '2024-01-15 08:56:42', 'DA20TTB');

-- --------------------------------------------------------

--
-- Table structure for table `tu_khoas`
--

CREATE TABLE `tu_khoas` (
  `MaTuKhoa` varchar(10) NOT NULL,
  `TuKhoa` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `MaChuDe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bai_dangs`
--
ALTER TABLE `bai_dangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bai_dangs_tendangnhap_foreign` (`TenDangNhap`),
  ADD KEY `bai_dangs_machude_foreign` (`MaChuDe`);

--
-- Indexes for table `binh_luans`
--
ALTER TABLE `binh_luans`
  ADD PRIMARY KEY (`MaBL`),
  ADD KEY `binh_luans_tendangnhap_foreign` (`TenDangNhap`),
  ADD KEY `binh_luans_bai_dangs_id_foreign` (`bai_dangs_id`);

--
-- Indexes for table `chu_des`
--
ALTER TABLE `chu_des`
  ADD PRIMARY KEY (`MaChuDe`);

--
-- Indexes for table `co_vans`
--
ALTER TABLE `co_vans`
  ADD PRIMARY KEY (`MaGV`,`MaLop`),
  ADD KEY `co_vans_malop_foreign` (`MaLop`);

--
-- Indexes for table `dao_taos`
--
ALTER TABLE `dao_taos`
  ADD PRIMARY KEY (`MaDaoTao`);

--
-- Indexes for table `giang_viens`
--
ALTER TABLE `giang_viens`
  ADD PRIMARY KEY (`MaGV`);

--
-- Indexes for table `lops`
--
ALTER TABLE `lops`
  ADD PRIMARY KEY (`MaLop`),
  ADD KEY `lops_madaotao_foreign` (`MaDaoTao`);

--
-- Indexes for table `ly_lich_trich_ngangs`
--
ALTER TABLE `ly_lich_trich_ngangs`
  ADD PRIMARY KEY (`MaLyLich`),
  ADD KEY `ly_lich_trich_ngangs_mssv_foreign` (`MSSV`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nguoi_dungs`
--
ALTER TABLE `nguoi_dungs`
  ADD PRIMARY KEY (`TenDangNhap`),
  ADD KEY `nguoi_dungs_magv_foreign` (`MaGV`),
  ADD KEY `nguoi_dungs_mssv_foreign` (`MSSV`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sinh_viens`
--
ALTER TABLE `sinh_viens`
  ADD PRIMARY KEY (`MSSV`),
  ADD KEY `sinh_viens_malop_foreign` (`MaLop`);

--
-- Indexes for table `tu_khoas`
--
ALTER TABLE `tu_khoas`
  ADD PRIMARY KEY (`MaTuKhoa`),
  ADD KEY `tu_khoas_machude_foreign` (`MaChuDe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bai_dangs`
--
ALTER TABLE `bai_dangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `binh_luans`
--
ALTER TABLE `binh_luans`
  MODIFY `MaBL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bai_dangs`
--
ALTER TABLE `bai_dangs`
  ADD CONSTRAINT `bai_dangs_machude_foreign` FOREIGN KEY (`MaChuDe`) REFERENCES `chu_des` (`MaChuDe`),
  ADD CONSTRAINT `bai_dangs_tendangnhap_foreign` FOREIGN KEY (`TenDangNhap`) REFERENCES `nguoi_dungs` (`TenDangNhap`);

--
-- Constraints for table `binh_luans`
--
ALTER TABLE `binh_luans`
  ADD CONSTRAINT `binh_luans_bai_dangs_id_foreign` FOREIGN KEY (`bai_dangs_id`) REFERENCES `bai_dangs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `binh_luans_tendangnhap_foreign` FOREIGN KEY (`TenDangNhap`) REFERENCES `nguoi_dungs` (`TenDangNhap`);

--
-- Constraints for table `co_vans`
--
ALTER TABLE `co_vans`
  ADD CONSTRAINT `co_vans_magv_foreign` FOREIGN KEY (`MaGV`) REFERENCES `giang_viens` (`MaGV`),
  ADD CONSTRAINT `co_vans_malop_foreign` FOREIGN KEY (`MaLop`) REFERENCES `lops` (`MaLop`);

--
-- Constraints for table `lops`
--
ALTER TABLE `lops`
  ADD CONSTRAINT `lops_madaotao_foreign` FOREIGN KEY (`MaDaoTao`) REFERENCES `dao_taos` (`MaDaoTao`);

--
-- Constraints for table `ly_lich_trich_ngangs`
--
ALTER TABLE `ly_lich_trich_ngangs`
  ADD CONSTRAINT `ly_lich_trich_ngangs_mssv_foreign` FOREIGN KEY (`MSSV`) REFERENCES `sinh_viens` (`MSSV`);

--
-- Constraints for table `nguoi_dungs`
--
ALTER TABLE `nguoi_dungs`
  ADD CONSTRAINT `nguoi_dungs_magv_foreign` FOREIGN KEY (`MaGV`) REFERENCES `giang_viens` (`MaGV`),
  ADD CONSTRAINT `nguoi_dungs_mssv_foreign` FOREIGN KEY (`MSSV`) REFERENCES `sinh_viens` (`MSSV`);

--
-- Constraints for table `sinh_viens`
--
ALTER TABLE `sinh_viens`
  ADD CONSTRAINT `sinh_viens_malop_foreign` FOREIGN KEY (`MaLop`) REFERENCES `lops` (`MaLop`);

--
-- Constraints for table `tu_khoas`
--
ALTER TABLE `tu_khoas`
  ADD CONSTRAINT `tu_khoas_machude_foreign` FOREIGN KEY (`MaChuDe`) REFERENCES `chu_des` (`MaChuDe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
