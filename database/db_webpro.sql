-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Apr 2019 pada 17.12
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webpro`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idAdmin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `idAkun` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tglLahir` date NOT NULL,
  `noTelp` varchar(13) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`idAkun`, `nama`, `tglLahir`, `noTelp`, `email`, `password`) VALUES
(16, 'Fery Ardiansyah', '1998-01-01', '0813192224581', 'a@a.com', '1'),
(17, 'Oktavianus Jefry', '0000-00-00', '081234456787', 'b@b', 'asd'),
(18, 'Azmi', '1998-01-01', '123', '1@1', 'asd'),
(19, 'Brahma', '2003-02-01', '08122399928', 'q@q', 'asd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alamat`
--

CREATE TABLE `alamat` (
  `idAlamat` int(11) NOT NULL,
  `rincianAlamat` varchar(255) NOT NULL,
  `petunjukAlamat` varchar(255) NOT NULL,
  `id_deskripsi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alamat`
--

INSERT INTO `alamat` (`idAlamat`, `rincianAlamat`, `petunjukAlamat`, `id_deskripsi`) VALUES
(5, 'Pohon Sawo RT 30/45 NO 99', 'Jauh', 1),
(6, 'AZAM', 'AZAM', 2),
(7, 'Asal asalan', 'RT 05', 1),
(8, 'LAST PLEASE', 'LAST PLEASE', 2),
(9, 'JAUUUUHHHH', 'BANGETTTTT', 2),
(10, 'COBA LAGI', 'COBA LAGI', 2),
(11, '10', '10', 2),
(12, 'NEW', 'NEW', 2),
(13, 'AMAN GA ', 'AMAN GA\r\n', 1),
(14, 'COBA INI ', 'COBA INI', 1),
(15, 'ALHAMDULILLAH', 'ALHAMDULILLAH', 2),
(16, 'z', 'z', 2),
(17, 'a', 'a', 1),
(18, 'w', 'w', 1),
(19, '21', '21', 2),
(20, 'baru', 'baru', 1),
(21, 'baru', 'baru', 1),
(22, '3', '3', 2),
(23, '2', '2', 2),
(24, 'PBB', 'Dekeet Kosan', 2),
(25, '123', '123', 1),
(26, 'Jauh ', 'Jauh Banget Tau', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `deskripsi_alamat`
--

CREATE TABLE `deskripsi_alamat` (
  `id_deskripsi` int(11) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `nama_jalan` varchar(255) NOT NULL,
  `nama_tempat` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `deskripsi_alamat`
--

INSERT INTO `deskripsi_alamat` (`id_deskripsi`, `kota`, `nama_jalan`, `nama_tempat`, `kelurahan`) VALUES
(1, 'DEPOK', 'Jln. Masjid Uswatun Hasanah', 'SMK Taruna Bakti', 'Curug'),
(2, 'BANDUNG', 'JL. Sukapura', 'Lapangan Sukapura', 'Bojongsoang'),
(3, 'Lumajang', 'Jln. Arjuna', 'Alun Alun', 'Kembang Desa'),
(4, 'Manado', 'Patimura', 'Balai Kota', 'Kembang Desa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_alamat`
--

CREATE TABLE `detail_alamat` (
  `id_detail` int(11) NOT NULL,
  `idAlamat` int(11) NOT NULL,
  `idAkun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_alamat`
--

INSERT INTO `detail_alamat` (`id_detail`, `idAlamat`, `idAkun`) VALUES
(2, 8, 17),
(3, 9, 17),
(4, 10, 17),
(5, 11, 17),
(6, 12, 17),
(11, 16, 18),
(12, 17, 18),
(13, 18, 18),
(14, 19, 18),
(16, 21, 18),
(17, 22, 16),
(19, 24, 19),
(20, 25, 19),
(21, 26, 19);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_menu`
--

CREATE TABLE `detail_menu` (
  `idTransaksi` int(11) NOT NULL,
  `idMenu` int(11) NOT NULL,
  `jumlahItem` int(11) NOT NULL,
  `idDetail` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_menu`
--

INSERT INTO `detail_menu` (`idTransaksi`, `idMenu`, `jumlahItem`, `idDetail`, `harga`) VALUES
(47, 3, 2, 51, 65000),
(48, 1, 1, 52, 65000),
(49, 3, 3, 53, 65000),
(49, 6, 3, 54, 10000),
(49, 12, 1, 55, 35000),
(50, 3, 1, 56, 65000),
(51, 3, 1, 57, 65000),
(52, 3, 2, 58, 65000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `idMenu` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(10) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`idMenu`, `kategori`, `nama`, `harga`, `gambar`) VALUES
(1, 'istimewa', 'Paket Berdua 1', 65000, 'menu21.png'),
(3, 'istimewa', 'Paket Berdua 2', 65000, 'menu22.png'),
(4, 'istimewa', 'nasi uduk McD', 14000, 'menu41.png'),
(5, 'istimewa', 'Rica Rica Fish Rice', 16500, '1220071.png'),
(6, 'pencucimulut', 'Sundae Chocolate', 10000, '133004.png'),
(12, 'happymeal', 'Cheeseburger', 35000, '107003.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `idTransaksi` int(11) NOT NULL,
  `idAkun` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `total` int(11) DEFAULT NULL,
  `alamatKirim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`idTransaksi`, `idAkun`, `tanggal`, `total`, `alamatKirim`) VALUES
(47, 16, '2019-04-23', 130000, 'BANDUNG Bojongsoang JL. Sukapura Lapangan Sukapura 3'),
(48, 16, '2019-04-23', 65000, 'BANDUNG Bojongsoang JL. Sukapura Lapangan Sukapura 2'),
(49, 19, '2019-04-23', 260000, 'BANDUNG Bojongsoang JL. Sukapura Lapangan Sukapura PBB'),
(50, 16, '2019-04-23', 65000, 'BANDUNG Bojongsoang JL. Sukapura Lapangan Sukapura 3'),
(51, 16, '2019-04-23', 65000, 'BANDUNG Bojongsoang JL. Sukapura Lapangan Sukapura 3'),
(52, 16, '2019-04-23', 130000, 'BANDUNG Bojongsoang JL. Sukapura Lapangan Sukapura 3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`idAkun`);

--
-- Indeks untuk tabel `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`idAlamat`),
  ADD KEY `fk_deskripsi` (`id_deskripsi`);

--
-- Indeks untuk tabel `deskripsi_alamat`
--
ALTER TABLE `deskripsi_alamat`
  ADD PRIMARY KEY (`id_deskripsi`);

--
-- Indeks untuk tabel `detail_alamat`
--
ALTER TABLE `detail_alamat`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `fk_akun` (`idAkun`),
  ADD KEY `alamat` (`idAlamat`);

--
-- Indeks untuk tabel `detail_menu`
--
ALTER TABLE `detail_menu`
  ADD PRIMARY KEY (`idDetail`),
  ADD KEY `menuDetail` (`idMenu`),
  ADD KEY `fkTransaksi` (`idTransaksi`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idMenu`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idTransaksi`),
  ADD KEY `fkAkun` (`idAkun`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `idAkun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `alamat`
--
ALTER TABLE `alamat`
  MODIFY `idAlamat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `deskripsi_alamat`
--
ALTER TABLE `deskripsi_alamat`
  MODIFY `id_deskripsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `detail_alamat`
--
ALTER TABLE `detail_alamat`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `detail_menu`
--
ALTER TABLE `detail_menu`
  MODIFY `idDetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `idMenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idTransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `alamat`
--
ALTER TABLE `alamat`
  ADD CONSTRAINT `fk_deskripsi` FOREIGN KEY (`id_deskripsi`) REFERENCES `deskripsi_alamat` (`id_deskripsi`);

--
-- Ketidakleluasaan untuk tabel `detail_alamat`
--
ALTER TABLE `detail_alamat`
  ADD CONSTRAINT `alamat` FOREIGN KEY (`idAlamat`) REFERENCES `alamat` (`idAlamat`);

--
-- Ketidakleluasaan untuk tabel `detail_menu`
--
ALTER TABLE `detail_menu`
  ADD CONSTRAINT `fkTransaksi` FOREIGN KEY (`idTransaksi`) REFERENCES `transaksi` (`idTransaksi`),
  ADD CONSTRAINT `menuDetail` FOREIGN KEY (`idMenu`) REFERENCES `menu` (`idMenu`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fkAkun` FOREIGN KEY (`idAkun`) REFERENCES `akun` (`idAkun`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
