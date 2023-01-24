-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jan 2023 pada 06.51
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sppd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_formulir`
--

CREATE TABLE `tb_formulir` (
  `id` int(11) NOT NULL,
  `kepala_dinas` int(11) NOT NULL,
  `sekertaris` int(11) NOT NULL,
  `pptk` int(11) NOT NULL,
  `nm_kegiatan` int(11) NOT NULL,
  `kd_kegiatan` int(11) NOT NULL,
  `bendahara` int(11) NOT NULL,
  `no_surat_tugas_kepala_dinas` int(11) NOT NULL,
  `no_surat_tugas_umum` int(11) NOT NULL,
  `no_sppd` int(11) NOT NULL,
  `alat_angkut` int(11) NOT NULL,
  `tempat_berangkat` int(11) NOT NULL,
  `tempat_tujuan` int(11) NOT NULL,
  `mata_anggaran` int(11) NOT NULL,
  `dasar_surat_tugas` int(11) NOT NULL,
  `maksud_tujuan` int(11) NOT NULL,
  `lama_perjalanan` int(11) NOT NULL,
  `tgl_berangkat` int(11) NOT NULL,
  `tgl_kembali` int(11) NOT NULL,
  `tgl_surat_tugas` int(11) NOT NULL,
  `tgl_laporan` int(11) NOT NULL,
  `no_surat_tugas_driver` int(11) NOT NULL,
  `hasil_perjalanan_dinas` int(11) NOT NULL,
  `kesimpulan` int(11) NOT NULL,
  `keperluan_bayar_kwitansi` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `pangkat` int(11) NOT NULL,
  `jabatan` int(11) NOT NULL,
  `sbu_perjalanan_kecematan` int(11) NOT NULL,
  `uang_perjalanan_dinas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id` int(11) NOT NULL,
  `nm_kegiatan` varchar(100) NOT NULL,
  `kd_kegiatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kendaraan`
--

CREATE TABLE `tb_kendaraan` (
  `id` int(11) NOT NULL,
  `nm_kendaraan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id` int(11) NOT NULL,
  `nm_pegawai` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sbu`
--

CREATE TABLE `tb_sbu` (
  `id` int(11) NOT NULL,
  `kecematan` varchar(100) NOT NULL,
  `biaya` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_sbu`
--
ALTER TABLE `tb_sbu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_sbu`
--
ALTER TABLE `tb_sbu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
