-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Nov 2022 pada 16.55
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mediab`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `materils`
--

CREATE TABLE `materils` (
  `id` int(11) NOT NULL,
  `fpdf` varchar(255) NOT NULL,
  `vone` varchar(255) NOT NULL,
  `vtwo` varchar(255) NOT NULL,
  `pustakaone` varchar(255) NOT NULL,
  `pustakatwo` varchar(255) NOT NULL,
  `pustakatree` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `materils`
--

INSERT INTO `materils` (`id`, `fpdf`, `vone`, `vtwo`, `pustakaone`, `pustakatwo`, `pustakatree`) VALUES
(1, 'pd.pdf', 'https://www.youtube.com/embed/fSGSzAYftz0', 'https://www.youtube.com/embed/C7AkrIZ94lU', 'Rika, Agus Tri, dan Ali Sucipto, Taufiq Lilo. 2013. Sistem Komputer. Jakarta: Politeknik Negeri Media Kreatif', 'Rara, Agus Tri, dan Ali Sucipto, Taufiq Lilo. 2013. Sistem Komputer. Jakarta: Politeknik Negeri Media Kreatif', 'Rara, Agus Tri, dan Ali Sucipto, Taufiq Lilo. 2013. Sistem Komputer. Jakarta: Politeknik Negeri Media Kreatif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilais`
--

CREATE TABLE `nilais` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nilai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilais`
--

INSERT INTO `nilais` (`id`, `username`, `nilai`) VALUES
(109, 'Muhammad Rizal Pane', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soals`
--

CREATE TABLE `soals` (
  `id` int(11) NOT NULL,
  `soal` text NOT NULL,
  `a` varchar(50) NOT NULL,
  `b` varchar(50) NOT NULL,
  `c` varchar(50) NOT NULL,
  `d` varchar(50) NOT NULL,
  `kunci` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soals`
--

INSERT INTO `soals` (`id`, `soal`, `a`, `b`, `c`, `d`, `kunci`, `tanggal`, `aktif`) VALUES
(2, 'Sistem bilangan yang identik sebagai gabungan angka dan huruf adalah ....', 'Desimal', 'Biner', 'Heksadesimal', 'Oktal', 'c', '2022-10-30', 'Y'),
(3, 'Metode untuk mengkonversikan dari sistem bilangan desimal ke sistem bilangan biner yang paling mudah adalah metode ......\r\n', 'Sisa', 'Bagi', 'Kali', 'Kurang', 'b', '2022-10-30', 'Y'),
(4, 'Sistem  bilangan menggunakan bilangan dasar atau basis tertentu yang disebut ....\r\n', 'Radix', 'Konversi', 'Sisa Bagi', 'Digit Biner', 'a', '2022-10-30', 'Y'),
(5, 'Hasil konversi bilangan biner 10101 ke desimal adalah ....', '12', '22', '21', '20', 'c', '2022-10-30', 'Y'),
(6, 'Hasil konversi bilangan heksadesimal 982 ke biner adalah ....\r\n', '0101101101', '1001110001	', '1100110100', '1111010110', 'd', '2022-10-30', 'Y'),
(7, 'Hasil konversi bilangan desimal 127 ke biner adalah .....', '1111111', '1101101', '1111110', '1001100', 'a', '2022-10-30', 'Y'),
(8, 'Suatu proses dimana satu sistem bilangan dengan basis tertentu akan dijadikan bilagan dengan basis yang lain disebut...', 'Biner', 'Desimal', 'Logika Informatika', 'Konversi Bilangan', 'd', '2022-10-30', 'Y'),
(11, 'Suatu langkah untuk menyelesaikan sebuah masalah secara logis dan sistematis adalah…', 'Pseudocode', 'Fungsi', 'Algoritma', 'Pemrograman', 'a', '2022-11-03', 'Y'),
(12, 'Pseudocode yang dipakai dalam penulisan algoritma adalah…', 'Bahasa pemrograman', 'Bahasa latin', ' Bahasa Indonesia', 'Bahasa terstruktur', 'b', '2022-11-03', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `kelas`, `gender`, `password`) VALUES
(12, 'Arika Ulaya', 'X', 'Perempuan', '123'),
(13, 'Dedek Syerly', 'X', 'Perempuan', '123'),
(14, 'Muhammad Rizal Pane', 'X', 'Laki-Laki', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usersadm`
--

CREATE TABLE `usersadm` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `usersadm`
--

INSERT INTO `usersadm` (`id`, `username`, `password`) VALUES
(1, 'Guru', 'Guru');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `materils`
--
ALTER TABLE `materils`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilais`
--
ALTER TABLE `nilais`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soals`
--
ALTER TABLE `soals`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `usersadm`
--
ALTER TABLE `usersadm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `materils`
--
ALTER TABLE `materils`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `nilais`
--
ALTER TABLE `nilais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT untuk tabel `soals`
--
ALTER TABLE `soals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `usersadm`
--
ALTER TABLE `usersadm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
