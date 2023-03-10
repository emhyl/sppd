-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 16, 2023 at 04:53 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `bidang` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`, `bidang`, `foto`) VALUES
(1, 'Dillah', '123', 'staf', 'default-avatar.png'),
(2, 'bendahara', '123', 'bendahara', 'xxx\r\n'),
(3, 'pimpinan', '123', 'pimpinan', 'xxx\r\n'),
(4, 'staf2', 'staf2', 'staf', 'Koala.jpg'),
(5, 'staf3', 'staf3', 'staf', 'xxxx'),
(6, 'staf4', 'staf4', 'staf', 'xxxx'),
(7, 'staf5', 'staf5', 'staf', 'xxx'),
(8, 'staf6', 'staf6', 'staf', 'xxx\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_formulir`
--

CREATE TABLE `tb_formulir` (
  `id` int(11) NOT NULL,
  `kepala_dinas` varchar(100) NOT NULL,
  `sekertaris` varchar(100) NOT NULL,
  `pptk` varchar(100) NOT NULL,
  `nip_pptk` varchar(20) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `kode_kegiatan` varchar(100) NOT NULL,
  `bendahara` varchar(100) NOT NULL,
  `nip_bendahara` varchar(20) NOT NULL,
  `no_surat_tugas_kepala_dinas` varchar(100) NOT NULL,
  `no_surat_tugas_umum` varchar(100) NOT NULL,
  `no_sppd` varchar(20) NOT NULL,
  `alat_angkut` varchar(100) NOT NULL,
  `tempat_berangkat` varchar(50) NOT NULL,
  `tempat_tujuan` varchar(100) NOT NULL,
  `mata_anggaran` varchar(50) NOT NULL,
  `dasar_surat_tugas` text NOT NULL,
  `maksud_tujuan` text NOT NULL,
  `lama_perjalanan` varchar(100) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `tgl_surat_tugas` date NOT NULL,
  `tgl_laporan` date NOT NULL,
  `no_surat_tugas_driver` varchar(50) NOT NULL,
  `hasil_perjalanan_dinas` text NOT NULL,
  `kesimpulan` text NOT NULL,
  `keperluan_bayar_kwitansi` text NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `id_kecematan` int(11) NOT NULL,
  `terbilang` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_formulir`
--

INSERT INTO `tb_formulir` (`id`, `kepala_dinas`, `sekertaris`, `pptk`, `nip_pptk`, `nama_kegiatan`, `kode_kegiatan`, `bendahara`, `nip_bendahara`, `no_surat_tugas_kepala_dinas`, `no_surat_tugas_umum`, `no_sppd`, `alat_angkut`, `tempat_berangkat`, `tempat_tujuan`, `mata_anggaran`, `dasar_surat_tugas`, `maksud_tujuan`, `lama_perjalanan`, `tgl_berangkat`, `tgl_kembali`, `tgl_surat_tugas`, `tgl_laporan`, `no_surat_tugas_driver`, `hasil_perjalanan_dinas`, `kesimpulan`, `keperluan_bayar_kwitansi`, `nama`, `nip`, `pangkat`, `jabatan`, `id_kecematan`, `terbilang`, `status`) VALUES
(29, 'Muh Ali Saleng,SH,M.Si', 'Muh Ali Saleng,SH,M.Si', 'Muh Ali Saleng,SH,M.Si', '196812311994031051', 'Penyusunan Dokumen Perencanaan Perangkat Daerah', '001', 'Muh Ali Saleng,SH,M.Si', '196812311994031051', '094 /....... /Pariwisata/III/2021', '094 /....... /Pariwisata/III/2021', '....... /Dispar.1/II', 'Roda Tiga', 'BULUKUMBA', 'KAJANG', '5.1.02.04.01.0003', 'Berdasarkan surat Bupati Bulukumba, Nomor: 050.2/72/Bappeda, Tanggal 20 Januari 2021 perihal Jadawal Pelaksanaan Musrenbang Tingkat Kecamatan Tahun 2021, Maka dipandang perlu:', 'Masing-masing menghadiri rapat Musrenbang Tingkat Kecamatan Tahun 2021 sesuai jadwal yang telah ditetapkan dan tetap mengutamakan protokol kesehatan Covid-19 (3M).', '1', '2020-08-09', '2020-08-09', '2020-08-09', '2020-08-09', '00', 'Telah Masing-masing menghadiri rapat Musrenbang Tingkat Kecamatan Tahun 2021 sesuai jadwal yang telah ditetapkan dan tetap mengutamakan protokol kesehatan Covid-19 (3M).', '1.Usulan dari masing-masing desa maksimal 3 usulan program kegiatan.2.Usulan akan ditindak lanjuti di Musrenbang Kabupaeten yang akan dikawal oleh tim yang ditunjuk oleh Camat Kajang', 'Biaya perjalanan dinas dalam rangka Menghadiri Musrembang tingkat Kecamatan di Kecamatan Kajang sesuai SPPD terlampir.', 'Syahriadi, SS.,MM', '198102102005021005', 'Pembina / IV.a', 'Kepala Sub Bagian Program & Pelaporan', 2, 'cob coba', 'arsip'),
(35, 'Muh Ali Saleng,SH,M.Si', 'Muh Ali Saleng,SH,M.Si', 'Muh Ali Saleng,SH,M.Si', '196812311994031051', 'Penyusunan Dokumen Perencanaan Perangkat Daerah', '001', 'Muh Ali Saleng,SH,M.Si', '196812311994031051', '094 /....... /Pariwisata/III/2021', '094 /....... /Pariwisata/III/2021', '....... /Dispar.1/II', 'Roda Dua', 'BULUKUMBA', 'GANTARANG', '5.1.02.04.01.0003', 'Berdasarkan surat Bupati Bulukumba, Nomor: 050.2/72/Bappeda, Tanggal 20 Januari 2021 perihal Jadawal Pelaksanaan Musrenbang Tingkat Kecamatan Tahun 2021, Maka dipandang perlu:', 'Masing-masing menghadiri rapat Musrenbang Tingkat Kecamatan Tahun 2021 sesuai jadwal yang telah ditetapkan dan tetap mengutamakan protokol kesehatan Covid-19 (3M).', '1', '2020-08-09', '2020-08-09', '2020-08-09', '2020-08-09', '00', 'Telah Masing-masing menghadiri rapat Musrenbang Tingkat Kecamatan Tahun 2021 sesuai jadwal yang telah ditetapkan dan tetap mengutamakan protokol kesehatan Covid-19 (3M).', '1.Usulan dari masing-masing desa maksimal 3 usulan program kegiatan.2.Usulan akan ditindak lanjuti di Musrenbang Kabupaeten yang akan dikawal oleh tim yang ditunjuk oleh Camat Kajang', 'Biaya perjalanan dinas dalam rangka Menghadiri Musrembang tingkat Kecamatan di Kecamatan Kajang sesuai SPPD terlampir.', 'Andi Aryono, S.IP.,MM', '19770226 200212 1 008	', 'Penata / III.c	', 'Kepala Seksi Hubungan Kelembagaan Kepariwisataan', 2, 'tts', 'arsip'),
(36, 'Muh Ali Saleng,SH,M.Si', 'Muh Ali Saleng,SH,M.Si', 'Muh Ali Saleng,SH,M.Si', '196812311994031051', 'Penyusunan Dokumen Perencanaan Perangkat Daerah', '001', 'Muh Ali Saleng,SH,M.Si', '196812311994031051', '094 /....... /Pariwisata/III/2021', '094 /....... /Pariwisata/III/2021', '....... /Dispar.1/II', 'Roda Dua', 'BULUKUMBA', 'KAJANG', '5.1.02.04.01.0003', 'Berdasarkan surat Bupati Bulukumba, Nomor: 050.2/72/Bappeda, Tanggal 20 Januari 2021 perihal Jadawal Pelaksanaan Musrenbang Tingkat Kecamatan Tahun 2021, Maka dipandang perlu:', 'Masing-masing menghadiri rapat Musrenbang Tingkat Kecamatan Tahun 2021 sesuai jadwal yang telah ditetapkan dan tetap mengutamakan protokol kesehatan Covid-19 (3M).', '3', '2020-08-10', '2020-08-13', '2020-08-09', '2020-08-09', '00', 'Telah Masing-masing menghadiri rapat Musrenbang Tingkat Kecamatan Tahun 2021 sesuai jadwal yang telah ditetapkan dan tetap mengutamakan protokol kesehatan Covid-19 (3M).', '1.Usulan dari masing-masing desa maksimal 3 usulan program kegiatan.2.Usulan akan ditindak lanjuti di Musrenbang Kabupaeten yang akan dikawal oleh tim yang ditunjuk oleh Camat Kajang', 'Biaya perjalanan dinas dalam rangka Menghadiri Musrembang tingkat Kecamatan di Kecamatan Kajang sesuai SPPD terlampir.', 'M.Sabir Rauf,S.Sos', '19730303 200801 1 014		', 'Penata Muda Tk. I / III.b				', 'Staf', 2, 'satu', 'arsip'),
(37, 'Muh Ali Saleng,SH,M.Si', 'Muh Ali Saleng,SH,M.Si', 'Muh Ali Saleng,SH,M.Si', '196812311994031051', 'Penyusunan Dokumen Perencanaan Perangkat Daerah', '001', 'Muh Ali Saleng,SH,M.Si', '196812311994031051', '094 /....... /Pariwisata/III/2021', '094 /....... /Pariwisata/III/2021', '....... /Dispar.1/II', 'Roda Dua', 'BULUKUMBA', 'KAJANG', '5.1.02.04.01.0003', 'Berdasarkan surat Bupati Bulukumba, Nomor: 050.2/72/Bappeda, Tanggal 20 Januari 2021 perihal Jadawal Pelaksanaan Musrenbang Tingkat Kecamatan Tahun 2021, Maka dipandang perlu:', 'Masing-masing menghadiri rapat Musrenbang Tingkat Kecamatan Tahun 2021 sesuai jadwal yang telah ditetapkan dan tetap mengutamakan protokol kesehatan Covid-19 (3M).', '1', '2020-08-10', '2020-08-12', '2020-08-09', '2020-08-09', '00', 'Telah Masing-masing menghadiri rapat Musrenbang Tingkat Kecamatan Tahun 2021 sesuai jadwal yang telah ditetapkan dan tetap mengutamakan protokol kesehatan Covid-19 (3M).', '1.Usulan dari masing-masing desa maksimal 3 usulan program kegiatan.2.Usulan akan ditindak lanjuti di Musrenbang Kabupaeten yang akan dikawal oleh tim yang ditunjuk oleh Camat Kajang', 'Biaya perjalanan dinas dalam rangka Menghadiri Musrembang tingkat Kecamatan di Kecamatan Kajang sesuai SPPD terlampir.', 'Rabiatul Adawiyah Syam, SE', '19861217 201101 2 012', 'Penata / III.c		', 'Kepala Seksi Pengembangan SDM Kepariwisataan', 2, 'dua', 'arsip'),
(38, 'Muh Ali Saleng,SH,M.Si', 'Muh Ali Saleng,SH,M.Si', 'Muh Ali Saleng,SH,M.Si', '196812311994031051', 'Penyusunan Dokumen Perencanaan Perangkat Daerah', '001', 'Muh Ali Saleng,SH,M.Si', '196812311994031051', '094 /....... /Pariwisata/III/2021', '094 /....... /Pariwisata/III/2021', '....... /Dispar.1/II', 'Roda Dua', 'BULUKUMBA', 'KAJANG', '5.1.02.04.01.0003', 'Berdasarkan surat Bupati Bulukumba, Nomor: 050.2/72/Bappeda, Tanggal 20 Januari 2021 perihal Jadawal Pelaksanaan Musrenbang Tingkat Kecamatan Tahun 2021, Maka dipandang perlu:', 'Masing-masing menghadiri rapat Musrenbang Tingkat Kecamatan Tahun 2021 sesuai jadwal yang telah ditetapkan dan tetap mengutamakan protokol kesehatan Covid-19 (3M).', '1', '2020-08-10', '2020-08-09', '2020-08-09', '2020-08-09', '00', 'Telah Masing-masing menghadiri rapat Musrenbang Tingkat Kecamatan Tahun 2021 sesuai jadwal yang telah ditetapkan dan tetap mengutamakan protokol kesehatan Covid-19 (3M).', '1.Usulan dari masing-masing desa maksimal 3 usulan program kegiatan.2.Usulan akan ditindak lanjuti di Musrenbang Kabupaeten yang akan dikawal oleh tim yang ditunjuk oleh Camat Kajang', 'Biaya perjalanan dinas dalam rangka Menghadiri Musrembang tingkat Kecamatan di Kecamatan Kajang sesuai SPPD terlampir.', 'Mulyati,SE', '19670714 200701 2 019		', 'Penata Muda Tk. I / III.b		', 'Staf							', 2, 'asas', 'arsip'),
(39, 'Muh Ali Saleng,SH,M.Si', 'Muh Ali Saleng,SH,M.Si', 'Muh Ali Saleng,SH,M.Si', '196812311994031051', 'Penyusunan Dokumen Perencanaan Perangkat Daerah', '001', 'Muh Ali Saleng,SH,M.Si', '196812311994031051', '094 /....... /Pariwisata/III/2021', '094 /....... /Pariwisata/III/2021', '....... /Dispar.1/II', 'Roda Dua', 'BULUKUMBA', 'KAJANG', '5.1.02.04.01.0003', 'Berdasarkan surat Bupati Bulukumba, Nomor: 050.2/72/Bappeda, Tanggal 20 Januari 2021 perihal Jadawal Pelaksanaan Musrenbang Tingkat Kecamatan Tahun 2021, Maka dipandang perlu:', 'Masing-masing menghadiri rapat Musrenbang Tingkat Kecamatan Tahun 2021 sesuai jadwal yang telah ditetapkan dan tetap mengutamakan protokol kesehatan Covid-19 (3M).', '1', '2020-08-09', '2020-08-09', '2020-08-09', '2020-08-09', '00', 'Telah Masing-masing menghadiri rapat Musrenbang Tingkat Kecamatan Tahun 2021 sesuai jadwal yang telah ditetapkan dan tetap mengutamakan protokol kesehatan Covid-19 (3M).', '1.Usulan dari masing-masing desa maksimal 3 usulan program kegiatan.2.Usulan akan ditindak lanjuti di Musrenbang Kabupaeten yang akan dikawal oleh tim yang ditunjuk oleh Camat Kajang', 'Biaya perjalanan dinas dalam rangka Menghadiri Musrembang tingkat Kecamatan di Kecamatan Kajang sesuai SPPD terlampir.', 'Rabiatul Adawiyah Syam, SE', '19861217 201101 2 012', 'Penata / III.c		', 'Kepala Seksi Pengembangan SDM Kepariwisataan', 2, 'asas', 'berlansung');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id` int(11) NOT NULL,
  `nm_kegiatan` varchar(100) NOT NULL,
  `kd_kegiatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id`, `nm_kegiatan`, `kd_kegiatan`) VALUES
(1, 'Penyusunan Dokumen Perencanaan Perangkat Daerah', '001001'),
(2, 'Penyediaan Gaji dan Tunjangan ASN', '002121');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kendaraan`
--

CREATE TABLE `tb_kendaraan` (
  `id` int(11) NOT NULL,
  `nm_kendaraan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kendaraan`
--

INSERT INTO `tb_kendaraan` (`id`, `nm_kendaraan`) VALUES
(6, 'Roda Dua'),
(7, 'Roda Tiga'),
(8, 'Roda Empat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_list_nama`
--

CREATE TABLE `tb_list_nama` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_list_nama`
--

INSERT INTO `tb_list_nama` (`id`, `nama`) VALUES
(1, 'Muh Ali Saleng,SH,M.Si'),
(3, 'Muhammad Akil, S.Sos, M.Si');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id` int(11) NOT NULL,
  `nm_pegawai` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id`, `nm_pegawai`, `nip`, `pangkat`, `jabatan`) VALUES
(1, 'Muh Ali Saleng,SH,M.Si', '196812311994031051', 'Pembina Utama Muda / IV.c', 'Kepala Dinas'),
(6, 'Syahriadi, SS.,MM', '198102102005021005', 'Pembina / IV.a', 'Kepala Sub Bagian Program & Pelaporan'),
(7, 'Andi Aryono, S.IP.,MM', '19770226 200212 1 008	', 'Penata / III.c	', 'Kepala Seksi Hubungan Kelembagaan Kepariwisataan'),
(8, 'Rabiatul Adawiyah Syam, SE', '19861217 201101 2 012', 'Penata / III.c		', 'Kepala Seksi Pengembangan SDM Kepariwisataan'),
(9, 'Mulyati,SE', '19670714 200701 2 019		', 'Penata Muda Tk. I / III.b		', 'Staf							'),
(10, 'M.Sabir Rauf,S.Sos', '19730303 200801 1 014		', 'Penata Muda Tk. I / III.b				', 'Staf'),
(11, 'Drs. H. Muhammad Daud Kahal, M. Si', '19680105 199703 1 011', 'Pembina Utama Muda/IV. c', 'Kepala Dinas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_riwayat`
--

CREATE TABLE `tb_riwayat` (
  `id` int(11) NOT NULL,
  `id_formulir` int(11) NOT NULL,
  `tujuan` varchar(100) DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_riwayat`
--

INSERT INTO `tb_riwayat` (`id`, `id_formulir`, `tujuan`, `tgl`) VALUES
(21, 29, 'KAJANG', '2020-08-09'),
(22, 35, 'GANTARANG', '2020-08-09'),
(23, 36, 'KAJANG', '2020-08-10'),
(24, 37, 'KAJANG', '2020-08-10'),
(25, 38, 'KAJANG', '2020-08-10');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sbu`
--

CREATE TABLE `tb_sbu` (
  `id` int(11) NOT NULL,
  `kecematan` varchar(100) NOT NULL,
  `uang_harian` int(11) NOT NULL,
  `transport` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sbu`
--

INSERT INTO `tb_sbu` (`id`, `kecematan`, `uang_harian`, `transport`) VALUES
(1, 'KEC. KAJANG ( GOL II / GOL. I )', 45000, 64000),
(2, 'KEC. KAJANG ( SUPIR )', 160000, 35000),
(3, 'KEC. KINDANG', 20000, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `tempat_tujuan`
--

CREATE TABLE `tempat_tujuan` (
  `id` int(11) NOT NULL,
  `tujuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempat_tujuan`
--

INSERT INTO `tempat_tujuan` (`id`, `tujuan`) VALUES
(1, 'KAJANG'),
(2, 'GANTARANG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_formulir`
--
ALTER TABLE `tb_formulir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kecematan` (`id_kecematan`);

--
-- Indexes for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_list_nama`
--
ALTER TABLE `tb_list_nama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_riwayat`
--
ALTER TABLE `tb_riwayat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sbu`
--
ALTER TABLE `tb_sbu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempat_tujuan`
--
ALTER TABLE `tempat_tujuan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_formulir`
--
ALTER TABLE `tb_formulir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_list_nama`
--
ALTER TABLE `tb_list_nama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_riwayat`
--
ALTER TABLE `tb_riwayat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_sbu`
--
ALTER TABLE `tb_sbu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tempat_tujuan`
--
ALTER TABLE `tempat_tujuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_formulir`
--
ALTER TABLE `tb_formulir`
  ADD CONSTRAINT `tb_formulir_ibfk_1` FOREIGN KEY (`id_kecematan`) REFERENCES `tb_sbu` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
