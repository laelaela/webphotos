-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Apr 2024 pada 02.30
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_album`
--

CREATE TABLE `tbl_album` (
  `album_ID` int(10) NOT NULL,
  `nama_album` varchar(100) NOT NULL,
  `deskripsi_album` varchar(100) NOT NULL,
  `user_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='tabel album foto';

--
-- Dumping data untuk tabel `tbl_album`
--

INSERT INTO `tbl_album` (`album_ID`, `nama_album`, `deskripsi_album`, `user_ID`) VALUES
(1, 'vacation', 'holiday dan vacation', 7),
(2, 'sekolah', 'masa-masa sekolah', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_foto`
--

CREATE TABLE `tbl_foto` (
  `foto_id` int(11) NOT NULL,
  `judul_foto` varchar(60) NOT NULL,
  `deskripsi_foto` varchar(125) NOT NULL,
  `tgl_unggah` datetime NOT NULL DEFAULT current_timestamp(),
  `lokasi_file` varchar(100) DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='tabel foto';

--
-- Dumping data untuk tabel `tbl_foto`
--

INSERT INTO `tbl_foto` (`foto_id`, `judul_foto`, `deskripsi_foto`, `tgl_unggah`, `lokasi_file`) VALUES
(23, 'Study is fun', 'Belajar itu adalah kegiatan yang mengasyikan', '2024-02-22 08:31:44', 'demo-mahasiswa-ui-_120704145804-175.jpg'),
(24, 'projek penelitian', 'diskusi projek penelitian', '2024-02-23 08:25:13', '56951-ilustrasi-mahasiswa-biaya-pendaftaran-seleksi-mandiri-2023-freepik.jpg'),
(27, 'back to school', 'kemabli ke sekolah image form freepick', '2024-04-25 04:55:59', '—Pngtree—blue_cartoon_back_to_school_5007039.png'),
(28, 'perpustakaan sekolah', 'perpus', '2024-04-25 04:57:41', 'Picture1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komentarfoto`
--

CREATE TABLE `tbl_komentarfoto` (
  `komentarID` int(10) NOT NULL,
  `fotoID` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `isiKomentar` text NOT NULL,
  `tanggalKomentar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='table komentar';

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_likefoto`
--

CREATE TABLE `tbl_likefoto` (
  `likeID` int(10) NOT NULL,
  `fotoID` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `tglLike` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='table likes';

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `isAktif` int(3) NOT NULL,
  `createdAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='tabel pengguna';

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`userID`, `username`, `email`, `password`, `fullName`, `isAktif`, `createdAt`) VALUES
(5, 'reja', 'reja@gmail.com', '$2y$10$j1sBJeTKzLKZSX2lg4v6BuwUjs7ymtwvfDZIShbRkiMboNT/h.0dm', 'reja setiawan', 1, '2024-01-24'),
(6, 'ilham', 'ilham@gmail.com', '$2y$10$AUP4qyMMFk6BN5PZLJdp2.k.rDLtH3EgGOFqcXP45RSy6cGhn4hyO', 'ilham ramdani', 1, '2024-01-24'),
(7, 'dimas', 'dimas@yahoo.com', '$2y$10$fjFEud8MlrlsEyIwNvzGEuL6VAugZAw0py.R3.bsfRZgxrug5PFYm', 'dimas back', 1, '2024-01-24'),
(8, 'asep', 'asep@gmail.com', '$2y$10$1QgRfUME7lApan5XrvUode1HQRUCZdO18UVwqPKrW5/8hC8tx3FwK', 'asep muhlis', 1, '2024-01-25'),
(9, 'orange', 'oyen@gmail.com', '$2y$10$kaI3QqP90ZaTrgucbqR7be3STmJLVrL8UEU9QxIkgPipn0ZUffNRu', 'kucing orange', 1, '2024-01-28'),
(10, 'lutfinm', 'lutfi@yahoo.com', '$2y$10$iXa5DFVTTE4X8LDAIDxMq.5xURyZVPFK.Cr9jN65kyz/iVPjlJ6y2', 'lutfi nurdin', 1, '2024-01-30'),
(11, 'ares', 'arespandi758@gmail.com', '$2y$10$r0rHpESN0gRqzcWuJ4bUwu7qdSX1is1/9QDayZQpCxspmTbJYHzZO', 'aries pande', 1, '2024-02-12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_album`
--
ALTER TABLE `tbl_album`
  ADD PRIMARY KEY (`album_ID`);

--
-- Indeks untuk tabel `tbl_foto`
--
ALTER TABLE `tbl_foto`
  ADD PRIMARY KEY (`foto_id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_album`
--
ALTER TABLE `tbl_album`
  MODIFY `album_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_foto`
--
ALTER TABLE `tbl_foto`
  MODIFY `foto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
