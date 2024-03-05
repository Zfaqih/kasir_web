-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Mar 2024 pada 02.15
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kasir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nm_member` varchar(255) NOT NULL,
  `alamat_member` text NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `NIK` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `nm_member`, `alamat_member`, `telepon`, `email`, `gambar`, `NIK`) VALUES
(1, 'Fauzan Falah', 'uj harapan', '081234567890', 'example@gmail.com', 'unnamed.jpg', '12314121');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `pelanggan_id` int(11) NOT NULL,
  `toko_id` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`pelanggan_id`, `toko_id`, `nama_pelanggan`, `alamat`, `no_hp`, `created_at`) VALUES
(1, 2, 'f', 'f', 'f', '2024-02-19 02:32:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `pembelian_id` int(11) NOT NULL,
  `toko_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `no_faktur` varchar(50) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `suplier_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `sisa` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_detail`
--

CREATE TABLE `pembelian_detail` (
  `beli_detail_id` int(11) NOT NULL,
  `pembelian_id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `penjualan_id` int(11) NOT NULL,
  `toko_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal_penjualan` date NOT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `sisa` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`penjualan_id`, `toko_id`, `user_id`, `tanggal_penjualan`, `pelanggan_id`, `total`, `bayar`, `sisa`, `keterangan`, `created_at`) VALUES
(29, 2, 2, '2024-02-20', 1, 3000, 10000, 7000, 'bagus', '2024-02-19 20:23:17'),
(30, 2, 2, '2024-02-20', 1, 1500, 10000, 8500, 'bagus', '2024-02-19 20:23:35'),
(31, 2, 2, '2024-02-20', 1, 1500, 10000, 8500, 'bagus', '2024-02-19 20:23:51'),
(32, 2, 2, '2024-02-20', 1, 1500, 10000, 8500, 'bagus', '2024-02-19 20:25:06'),
(33, 2, 2, '2024-02-20', 1, 1500, 10000, 8500, 'bagus', '2024-02-19 20:40:24'),
(34, 2, 2, '2024-02-20', 1, 3000, 10000, 7000, 'bagus', '2024-02-19 20:41:55'),
(35, 2, 2, '2024-02-20', 1, 3000, 10000, 7000, 'bagus', '2024-02-19 20:43:07'),
(36, 2, 2, '2024-02-20', 1, 1500, 10000, 8500, 'bagus', '2024-02-19 21:59:11'),
(37, 2, 2, '2024-02-20', 1, 1500, 10000, 8500, 'bagus', '2024-02-19 22:06:01'),
(38, 2, 2, '2024-02-20', 1, 3000, 10000, 7000, 'bagus', '2024-02-19 22:06:35'),
(40, 2, 4, '2024-02-20', 1, 3000, 90000, 87000, 'bagus', '2024-02-19 22:08:15'),
(41, 2, 2, '2024-02-21', 1, 1500, 10000, 8500, '', '2024-02-20 18:48:42'),
(42, 2, 2, '2024-02-21', 1, 6000, 90000, 84000, '', '2024-02-20 18:49:51'),
(43, 2, 2, '2024-02-21', 1, 6000, 10000, 4000, '', '2024-02-20 18:56:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan_detail`
--

CREATE TABLE `penjualan_detail` (
  `penjualan_detail_id` int(11) NOT NULL,
  `penjualan_id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan_detail`
--

INSERT INTO `penjualan_detail` (`penjualan_detail_id`, `penjualan_id`, `produk_id`, `qty`, `harga_beli`, `harga_jual`, `created_at`) VALUES
(10, 38, 19, 1, 0, 3000, '2024-02-19 22:06:35'),
(11, 40, 19, 1, 0, 3000, '2024-02-19 22:08:15'),
(13, 42, 20, 1, 0, 6000, '2024-02-20 18:49:51'),
(14, 43, 20, 1, 0, 6000, '2024-02-20 18:56:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `produk_id` int(11) NOT NULL,
  `toko_id` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`produk_id`, `toko_id`, `nama_produk`, `kategori_id`, `satuan`, `harga_beli`, `harga_jual`, `created_at`) VALUES
(19, 2, 'roti', 3, '19000', 1000, 3000, 2024),
(20, 2, 'eskrim', 3, '4000', 5000, 6000, 2024);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_kategori`
--

CREATE TABLE `produk_kategori` (
  `kategori_id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk_kategori`
--

INSERT INTO `produk_kategori` (`kategori_id`, `nama_kategori`, `created_at`) VALUES
(3, 'makanan', '2024-02-19 06:15:16'),
(4, 'minuman', '2024-02-19 06:15:22'),
(5, 'rokok', '2024-02-19 06:16:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suplier`
--

CREATE TABLE `suplier` (
  `suplier_id` int(11) NOT NULL,
  `toko_id` int(11) NOT NULL,
  `nama_suplier` varchar(50) NOT NULL,
  `tlp_hp` varchar(50) NOT NULL,
  `alamat_suplier` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suplier`
--

INSERT INTO `suplier` (`suplier_id`, `toko_id`, `nama_suplier`, `tlp_hp`, `alamat_suplier`, `created_at`) VALUES
(3, 2, 'aa', '6747745', 'banajar', '2024-02-20 01:05:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko`
--

CREATE TABLE `toko` (
  `toko_id` int(11) NOT NULL,
  `nama_toko` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tlp_hp` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `toko`
--

INSERT INTO `toko` (`toko_id`, `nama_toko`, `alamat`, `tlp_hp`, `created_at`) VALUES
(2, 'F', 'banjar', '0000000', '2024-02-19 02:14:25'),
(3, 'ff', 'f', 'z', '2024-02-19 02:15:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `toko_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `access_level` varchar(50) NOT NULL,
  `craeted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `toko_id`, `username`, `password`, `email`, `nama_lengkap`, `alamat`, `access_level`, `craeted_at`) VALUES
(2, 2, 'admin', '$2y$10$8EhiAT8nc61fFORYBMGZR.hzUTiLoJwe2104ft/fN/rKhaCHgXrJe', 'Z@gmail.com', 'f', 'f', 'Admin', '2024-02-19 06:13:25'),
(4, 2, 'kasir', '$2y$10$bRB56kHbblxpmleXu9pOt.RY3jV0jb7fFXa8VB.Qp1aKHPBCkz9bO', 'Z@gmail.com', 'f', 'f', 'Kasir', '2024-02-20 01:04:17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`pelanggan_id`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`pembelian_id`);

--
-- Indeks untuk tabel `pembelian_detail`
--
ALTER TABLE `pembelian_detail`
  ADD PRIMARY KEY (`beli_detail_id`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`penjualan_id`);

--
-- Indeks untuk tabel `penjualan_detail`
--
ALTER TABLE `penjualan_detail`
  ADD PRIMARY KEY (`penjualan_detail_id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- Indeks untuk tabel `produk_kategori`
--
ALTER TABLE `produk_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`suplier_id`);

--
-- Indeks untuk tabel `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`toko_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `pelanggan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `pembelian_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pembelian_detail`
--
ALTER TABLE `pembelian_detail`
  MODIFY `beli_detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `penjualan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `penjualan_detail`
--
ALTER TABLE `penjualan_detail`
  MODIFY `penjualan_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `produk_kategori`
--
ALTER TABLE `produk_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `suplier`
--
ALTER TABLE `suplier`
  MODIFY `suplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `toko`
--
ALTER TABLE `toko`
  MODIFY `toko_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
