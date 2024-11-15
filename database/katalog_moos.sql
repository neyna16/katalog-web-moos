-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2024 pada 05.39
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `katalog_moos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1001, 'Moos Original Ori', 'adminmoos', '123456'),
(1002, 'Maulana Yusuf', 'maulmoos', '123456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `deskripsi`
--

CREATE TABLE `deskripsi` (
  `id_deskripsi` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `link_shopee` varchar(255) NOT NULL,
  `link_tokopedia` varchar(255) NOT NULL,
  `link_lazada` varchar(255) NOT NULL,
  `link_tiktok` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `deskripsi`
--

INSERT INTO `deskripsi` (`id_deskripsi`, `nama_barang`, `deskripsi`, `tanggal`, `gambar`, `id_kategori`, `id_admin`, `link_shopee`, `link_tokopedia`, `link_lazada`, `link_tiktok`) VALUES
(11, 'Hi Retro Dress Blue/Gum', 'Sneakers dengan desain basic yang dibuat dengan teknik vulcanized untuk kualitas terbaik. Dengan detail stitching yang menambah kesan retro. <br>\r\n<br>\r\nWarna: Dress Blue/Gum <br>\r\nSize: 37-46 (unisex) <br>\r\n<br>\r\nMaterials <br>\r\nUPPER: <br>\r\nQuarter & Vamp Tongue: Canvas Convy + Canvas lining Dress Blue/Tan<br>\r\nEyestay: Canvas Convy + Canvas lining Dress Blue/Tan<br>\r\n<br>\r\nBOTTOM:<br>\r\nOutsole, foxing, bumper: Rubber<br>\r\nInsole: Eva Foam + Canvas Lining Tan<br>\r\n<br>\r\n\r\nDesign & produksi original oleh MOOS®', '2024-08-09', '23dbbc24-8d5d-44a4-b030-bb602099c7dc.jpg', 1, 1002, 'https://s.shopee.co.id/9f1Ax9r9N5?share_channel_code=1 ', 'https://tokopedia.link/Z6GlXZ2LULb ', '-', '-'),
(14, 'OX GRIND DARK NAVY / OFF WHITE', 'Sneakers dengan desain basic yang dibuat dengan teknik vulcanized untuk kualitas terbaik. Dengan detail stitching yang menambah kesan stylish dan kokoh. <br>\r\n<br>\r\nWarna: DARK NAVY AND OFF WHITE<br>\r\nSize: 37-45 (unisex)<br>\r\n<br>\r\nMaterials<br>\r\nUpper:<br>\r\nEyestay & quarter: Canvas ring + canvas 3oz Black<br>\r\nVamp tongue: canvas ring + foam + minklon mesh black<br>\r\nQuarter LN: Minklon mesh + foam + tricot black<br>\r\nBottom: Outsole, foxing, bumper: rubber<br>\r\nInsole: eva foam + minklon mesh black<br>\r\n<br>\r\n\r\nDesign & produksi original oleh MOOS®\r\nReady stock', '2024-08-12', 'OX Grind Dark Navy Off White.jpg', 1, 1002, 'https://s.shopee.co.id/BAAE5jNgr?share_channel_code=1', 'https://tokopedia.link/nFUMM9kyZLb', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `gambar`, `id_admin`, `keterangan`) VALUES
(7, 'HI Retro Dress Blue.jpg', 1002, 'HI RETRO DRESS BLUE'),
(8, 'logo.png', 1001, 'LOGO MOOS'),
(9, 'OX Grind Dark Navy Off White.jpg', 1002, 'OX GRIND DARK NAVY/OFF WHITE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `id_admin`) VALUES
(1, 'Shoes', 1001),
(2, 'Apparel', 1002),
(3, 'Topi', 1001);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `deskripsi`
--
ALTER TABLE `deskripsi`
  ADD PRIMARY KEY (`id_deskripsi`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT untuk tabel `deskripsi`
--
ALTER TABLE `deskripsi`
  MODIFY `id_deskripsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `deskripsi`
--
ALTER TABLE `deskripsi`
  ADD CONSTRAINT `deskripsi_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `deskripsi_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD CONSTRAINT `kategori_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
