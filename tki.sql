-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2022 at 04:12 PM
-- Server version: 5.7.33
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tki`
--

-- --------------------------------------------------------

--
-- Table structure for table `blkln`
--

CREATE TABLE `blkln` (
  `id_blk` int(10) NOT NULL,
  `id_dft` int(10) DEFAULT NULL,
  `id_negara` int(10) DEFAULT NULL,
  `jabatan_sektor` varchar(255) NOT NULL,
  `medical` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hongkong`
--

CREATE TABLE `hongkong` (
  `id_hongkong` int(10) NOT NULL,
  `id` int(10) DEFAULT NULL,
  `sektor_hk` varchar(255) NOT NULL,
  `ektp_hk` varchar(255) NOT NULL,
  `kk_hk` varchar(255) NOT NULL,
  `akte_hk` varchar(255) NOT NULL,
  `suratnikah_hk` varchar(255) NOT NULL,
  `suratijin_hk` varchar(255) NOT NULL,
  `expaspor_hk` varchar(255) NOT NULL,
  `skck_hk` varchar(255) NOT NULL,
  `kartukuning_hk` varchar(255) NOT NULL,
  `biometri_hk` varchar(255) NOT NULL,
  `id_tahapdua` int(25) DEFAULT NULL,
  `keterangan_hk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hongkong`
--

INSERT INTO `hongkong` (`id_hongkong`, `id`, `sektor_hk`, `ektp_hk`, `kk_hk`, `akte_hk`, `suratnikah_hk`, `suratijin_hk`, `expaspor_hk`, `skck_hk`, `kartukuning_hk`, `biometri_hk`, `id_tahapdua`, `keterangan_hk`) VALUES
(4, 3, 'ART', '138-Alifa_Hongkong_KTP.jpg', '940-Alifa_hongkong_KK.jpg', '291-Alifa_hongkong_AKTE.jpg', '95-Alifa_Hongkong_ASURANSI.jpg', '332-Alifa_hongkonf_suratijinkeluarga.jpg', '127-Alifa_Hongkong_Medical.jpg', '900-Alifa_hongkonf_suratijinkeluarga.jpg', '744-Alifa_Hongkong_ASURANSI.jpg', '500-Alifa_hongkong_passfoto.jpg', 1, 'done');

-- --------------------------------------------------------

--
-- Table structure for table `malaysia`
--

CREATE TABLE `malaysia` (
  `id_malaysia` int(10) NOT NULL,
  `id_dft` int(10) DEFAULT NULL,
  `sektor_malay` varchar(255) NOT NULL,
  `ektp_malay` varchar(255) NOT NULL,
  `kk_malay` varchar(255) NOT NULL,
  `akte_malay` varchar(255) NOT NULL,
  `suratnikah_malay` varchar(255) NOT NULL,
  `suratijin_malay` varchar(255) NOT NULL,
  `expaspor_malay` varchar(255) NOT NULL,
  `skck_malay` varchar(255) NOT NULL,
  `rekomid_malay` varchar(255) NOT NULL,
  `biometri_malay` varchar(255) NOT NULL,
  `id_tahapdua` int(10) DEFAULT NULL,
  `keterangan_malay` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `negara`
--

CREATE TABLE `negara` (
  `id_negara` int(10) NOT NULL,
  `negara_tujuan` varchar(255) NOT NULL,
  `kriteria` varchar(255) NOT NULL,
  `persyaratan` varchar(255) NOT NULL,
  `jumlah_gaji` varchar(255) NOT NULL,
  `gambar_negara` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `negara`
--

INSERT INTO `negara` (`id_negara`, `negara_tujuan`, `kriteria`, `persyaratan`, `jumlah_gaji`, `gambar_negara`) VALUES
(1, 'Hongkong', 'Pemula: Usia 21-38 tahun, Berat badan ideal atau maksimal 8kg dari berat ideal, Tinggi badan minimal 147cm. Ex: Usia maksimal 42 tahun, berat badan ideal atau maksimal 8kg dari berat ideal, Tinggi badan minimal 144cm', 'E-KTP (asli)Kartu Keluarga (asli)Akta Kelahiran (asli)Izin Orang Tua/ Suami (asli)Ijazah (asli)Surat Keterangan Status/ Surat Nikah (asli)', 'HK$ 4.520 (± Rp. 8.136.000)Potongan HK$ 2.079 x 6 bulan', '818-hongkong.jpg'),
(2, 'Taiwan', 'Pemula: Usia 21-35 tahun, Berat badan ideal atau maksimal 8kg dari berat ideal, Tinggi badan minimal 150cm. Ex: Usia maksimal 40 tahun, berat badan ideal atau maksimal 8kg dari berat ideal, Tinggi badan minimal 147cm', 'E-KTP (asli), Kartu Keluarga (asli), Akta Kelahiran (asli), Izin Orang Tua/ Suami (asli), Ijazah (asli), Surat Keterangan Status/ Surat Nikah (asli), Ex Pasport (bagi yang pernah ke luar negeri), SKCK, Kartu Kuning', 'NT$ 23.100 (± Rp. 10.857.000) Potongan NT$ 6.325 x 6 bulan', '188-taiwan.jpg'),
(3, 'Singapore', 'Tinggi badan mininal 147cm\r\nUsia antara 23 s.d 30 tahun\r\nSehat jasmani dan rohani\r\nPendidikan minimal tamat SLTP\r\nBagi yang Ex. Singapore harus membawa paspor lama', 'E-KTP (asli)\r\nKartu Keluarga (asli)\r\nAkta Kelahiran (asli)\r\nIzin Orang Tua/Suami (asli)\r\nIjazah (asli)\r\nSurat Keterangan Status Nikah (asli)', 'SIN$ 550 ( ± Rp. 5.775.000,- ) Potongan SIN$ 425 x 8 bulan', '877-singapore.jpg'),
(4, 'Malaysia', 'Tinggi badan minimal 147 cm Usia antara 21 – 37 tahun Sehat jasmani dan rohani Pendidikan minimal tamat SD Bisa baca tulis Bagi yang Ex. Malaysia harus membawa Paspor lama', 'KTP (asli) Kartu Keluarga (asli) Akte Lahir (asli) Izin Orang Tua/ Suami (asli) Surat Nikah (asli)', 'RM 1.100 x Rp. 3.500 = Rp. 3.850.000/bln', '785-malaysia.jpg'),
(5, 'Korea Selatan', 'Ex. Luar Negeri (Finish Contract) Harus mampu berbahasa Inggris, Cantonese atau Mandarin (salah satu), Ex. Singapore lebih diutamakan Tinggi badan minimal 147 cm Sehat jasmani dan rohani Pendidikan minimal tamat SLTP Bagi yang Ex. Hongkong harus membawa P', 'E-KTP (asli) Kartu Keluarga (asli) Akta Kelahiran (asli) Izin Orang Tua/Suami (asli) Ijazah (asli) Surat Keterangan Status Nikah (asli)', 'WON 130.000 (± Rp. 16.640.000) ', '180-1.jpg'),
(6, 'Korea Selatan', 'Tinggi badan minimal 165Cm (laki-laki) 150Cm (perempuan) Berat badan proporsional Usia minimal 20 s.d 35 tahun Sehat jasmani dan rohani Pendidikan minimal SLTA / Sederajat Bagi yang Ex. Taiwan harus membawa Paspor lama & ARC', 'E-KTP (asli) Kartu Keluarga (asli) Akta Kelahiran (asli) Izin Orang Tua/ Suami (asli) Ijazah (asli) Surat Keterangan Status/ Surat Nikah (asli) SKCK dari Polda', 'HK$ 4.520 (± Rp. 8.136.000)Potongan HK$ 2.079 x 7 bulan', '277-2bbe67ec4ab3974d310a18cc4ad80617.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_dft` int(10) NOT NULL,
  `id_negara` int(10) DEFAULT NULL,
  `no_telp` int(25) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `id` int(10) DEFAULT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` int(10) NOT NULL,
  `alamat_lengkap` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tb` int(10) NOT NULL,
  `bb` int(10) NOT NULL,
  `pendidikan_terakhir` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `pengalaman_kerja` varchar(255) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `pekerjaan_ayah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `pekerjaan_ibu` varchar(255) NOT NULL,
  `jml_brother` int(10) NOT NULL,
  `jml_sister` int(10) NOT NULL,
  `anak_no` int(10) NOT NULL,
  `nama_pasangan` varchar(255) NOT NULL,
  `pekerjaan_pasangan` varchar(255) NOT NULL,
  `jml_anak` int(10) NOT NULL,
  `umur_anak` int(10) NOT NULL,
  `medical_check` varchar(255) NOT NULL,
  `pas_foto` varchar(255) NOT NULL,
  `id_tahapsatu` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_dft`, `id_negara`, `no_telp`, `nik`, `id`, `tempat_lahir`, `tanggal_lahir`, `umur`, `alamat_lengkap`, `jenis_kelamin`, `tb`, `bb`, `pendidikan_terakhir`, `status`, `agama`, `pengalaman_kerja`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `jml_brother`, `jml_sister`, `anak_no`, `nama_pasangan`, `pekerjaan_pasangan`, `jml_anak`, `umur_anak`, `medical_check`, `pas_foto`, `id_tahapsatu`) VALUES
(26, 1, 0, '3507197103970001', 3, 'Malang', '1997-03-31', 25, 'DK Karangduren RT.02 Rw.02 Desa Karangduren Kec.Pakisaji', 'Wanita', 160, 64, 'SMA', 'Menikah', 'Islam', 'Non', '', '', '', '', 0, 0, 0, '', '', 0, 0, '978-Alifa_Hongkong_Medical.jpg', '262-Alifa_hongkong_passfoto.jpg', 1),
(27, 2, 0, '3507146607010001', 4, 'Malang', '2000-02-26', 22, 'Jl.Raya Agung Bululawang', 'Wanita', 160, 64, 'SMA', 'Menikah', 'Islam', 'Ex', '', '', '', '', 0, 0, 0, '', '', 0, 0, '72-Alifa_Hongkong_Medical.jpg', '320-Alifa_hongkong_passfoto.jpg', 3),
(29, 2, 0, '128391', 13, 'Malang', '2000-02-02', 22, 'Jl.Raya Agung Bululawang', 'Wanita', 165, 65, 'SMA', 'Belum Menikah', 'Islam', 'Non', '', '', '', '', 0, 0, 0, '', '', 0, 0, '91-1.jpg', '294-1.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `quests`
--

CREATE TABLE `quests` (
  `id` int(10) UNSIGNED NOT NULL,
  `quest` varchar(256) NOT NULL,
  `op_a` varchar(256) NOT NULL,
  `op_b` varchar(256) NOT NULL,
  `op_c` varchar(256) NOT NULL,
  `op_d` varchar(265) NOT NULL,
  `correct` varchar(256) NOT NULL,
  `type` varchar(265) NOT NULL,
  `point` int(11) NOT NULL DEFAULT '10'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quests`
--

INSERT INTO `quests` (`id`, `quest`, `op_a`, `op_b`, `op_c`, `op_d`, `correct`, `type`, `point`) VALUES
(7, 'Cupidatat lorem est ', 'Et aliquid sunt eve', 'Non sint et providen', 'Et eu ut id deserun', 'Dolore qui maxime au', 'd', 'cantonese', 1),
(8, 'Voluptatem quis volu', 'Et lorem qui magnam ', 'Voluptatem dolor qu', 'Sed in mollit conseq', 'Repudiandae adipisci', 'c', 'mandarin', 75),
(9, 'Numquam nostrum solu', 'Esse ab commodo con', 'Aut autem autem anim', 'Expedita ducimus au', 'Accusamus tempor lab', 'b', 'mandarin', 33);

-- --------------------------------------------------------

--
-- Table structure for table `sertifhongkong`
--

CREATE TABLE `sertifhongkong` (
  `id_sertif_hk` int(25) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `id_dft` int(10) DEFAULT NULL,
  `perawatanbayi_hk` varchar(255) NOT NULL,
  `pedulianak_hk` varchar(255) NOT NULL,
  `pekerjaanrt_hk` varchar(255) NOT NULL,
  `perawatanortu_hk` varchar(255) NOT NULL,
  `memasak_hk` varchar(255) NOT NULL,
  `inggris_hk` varchar(255) NOT NULL,
  `kantonis_hk` varchar(255) NOT NULL,
  `mandarin_hk` varchar(255) NOT NULL,
  `keahlian_hk` varchar(255) NOT NULL,
  `bahasa_hk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sertifhongkong`
--

INSERT INTO `sertifhongkong` (`id_sertif_hk`, `id`, `id_dft`, `perawatanbayi_hk`, `pedulianak_hk`, `pekerjaanrt_hk`, `perawatanortu_hk`, `memasak_hk`, `inggris_hk`, `kantonis_hk`, `mandarin_hk`, `keahlian_hk`, `bahasa_hk`) VALUES
(31, 3, 26, 'rata-rata', 'rata-rata', 'rata-rata', 'baik', 'baik', 'baik', 'baik sekali', 'baik sekali', '505-Alifa_Hongkong_SertifikasiKeahlian.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `sertiftaiwan`
--

CREATE TABLE `sertiftaiwan` (
  `id_sertif_taiw` int(25) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `perawatanbayi_taiw` varchar(255) NOT NULL,
  `pedulianak_taiw` varchar(255) NOT NULL,
  `pekerjaanrt_taiw` varchar(255) NOT NULL,
  `perawatanortu_taiw` varchar(255) NOT NULL,
  `memasak_taiw` varchar(255) NOT NULL,
  `inggris_taiw` varchar(255) NOT NULL,
  `kantonis_taiw` varchar(255) NOT NULL,
  `mandarin_taiw` varchar(255) NOT NULL,
  `keahlian_taiw` varchar(255) NOT NULL,
  `bahasa_taiw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sertiftaiwan`
--

INSERT INTO `sertiftaiwan` (`id_sertif_taiw`, `id`, `perawatanbayi_taiw`, `pedulianak_taiw`, `pekerjaanrt_taiw`, `perawatanortu_taiw`, `memasak_taiw`, `inggris_taiw`, `kantonis_taiw`, `mandarin_taiw`, `keahlian_taiw`, `bahasa_taiw`) VALUES
(21, 4, 'rata-rata', 'baik', 'baik sekali', 'rata-rata', 'baik', 'baik sekali', 'rata-rata', 'baik', '984-Alifa_Hongkong_SertifikasiKeahlian.jpg', ''),
(22, 13, 'rata-rata', 'baik', 'baik sekali', 'rata-rata', 'rata-rata', 'baik', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `singapore`
--

CREATE TABLE `singapore` (
  `id_singapore` int(10) NOT NULL,
  `id_dft` int(10) DEFAULT NULL,
  `sektor_sing` varchar(255) NOT NULL,
  `ektp_sing` varchar(255) NOT NULL,
  `kk_sing` varchar(255) NOT NULL,
  `akte_sing` varchar(255) NOT NULL,
  `suratnikah_sing` varchar(255) NOT NULL,
  `suratijin_sing` varchar(255) NOT NULL,
  `expaspor_sing` varchar(255) NOT NULL,
  `skck_sing` varchar(255) NOT NULL,
  `rekomid_sing` varchar(255) NOT NULL,
  `biometri_sing` varchar(255) NOT NULL,
  `id_tahapdua` int(25) DEFAULT NULL,
  `keterangan_sing` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tahapdua`
--

CREATE TABLE `tahapdua` (
  `id_tahapdua` int(25) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tahapdua`
--

INSERT INTO `tahapdua` (`id_tahapdua`, `keterangan`) VALUES
(1, 'diajukan'),
(2, 'diverifikasi'),
(3, 'diterima'),
(4, 'ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `tahapsatu`
--

CREATE TABLE `tahapsatu` (
  `id_tahapsatu` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tahapsatu`
--

INSERT INTO `tahapsatu` (`id_tahapsatu`, `keterangan`) VALUES
(1, 'diajukan'),
(2, 'diverifikasi'),
(3, 'diterima'),
(4, 'ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `taiwan`
--

CREATE TABLE `taiwan` (
  `id_taiwan` int(10) NOT NULL,
  `id` int(10) DEFAULT NULL,
  `sektor_taiw` varchar(255) NOT NULL,
  `ektp_taiw` varchar(255) NOT NULL,
  `kk_taiw` varchar(255) NOT NULL,
  `akte_taiw` varchar(255) NOT NULL,
  `suratnikah_taiw` varchar(255) NOT NULL,
  `suratijin_taiw` varchar(255) NOT NULL,
  `expaspor_taiw` varchar(255) NOT NULL,
  `skck_taiw` varchar(255) NOT NULL,
  `kartukuning_taiw` varchar(255) NOT NULL,
  `biometri_taiw` varchar(255) NOT NULL,
  `id_tahapdua` int(25) DEFAULT NULL,
  `keterangan_taiw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taiwan`
--

INSERT INTO `taiwan` (`id_taiwan`, `id`, `sektor_taiw`, `ektp_taiw`, `kk_taiw`, `akte_taiw`, `suratnikah_taiw`, `suratijin_taiw`, `expaspor_taiw`, `skck_taiw`, `kartukuning_taiw`, `biometri_taiw`, `id_tahapdua`, `keterangan_taiw`) VALUES
(2, 4, 'ART', '359-Alifa_Hongkong_KTP.jpg', '67-Alifa_hongkong_KK.jpg', '850-Alifa_hongkong_AKTE.jpg', '551-Alifa_Hongkong_Medical.jpg', '69-Alifa_hongkonf_suratijinkeluarga.jpg', '336-Alifa_hongkong_passfoto.jpg', '966-Alifa_Hongkong_SertifikasiKeahlian.jpg', '562-Alifa_hongkong_passfoto.jpg', '521-Alifa_Hongkong_ASURANSI.jpg', 1, 'done');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id_test` int(25) NOT NULL,
  `id_dft` int(11) DEFAULT NULL,
  `id_negara` int(11) DEFAULT NULL,
  `score` int(11) NOT NULL,
  `type` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id_test`, `id_dft`, `id_negara`, `score`, `type`) VALUES
(6, 26, 1, 1, 'cantonese');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_lengkap`, `username`, `password`, `role`) VALUES
(1, 'ajeng', 'admin', '12345', 1),
(2, 'ratna', 'ratna321', 'ratna123', 1),
(3, 'Alifah Amaliah', 'TKIAlifiah', '12345', 2),
(4, 'Dewi Sinta Bella', 'Dewisinta', '12345', 2),
(5, 'bayu', 'bayuari78', 'bayu78', 2),
(8, '', '', '', 0),
(9, '', '', '', 0),
(10, '', '', '', 0),
(11, '', '', '', 0),
(12, 'Anita Lidya', 'anitalid567', '12345', 1),
(13, 'Melinda Sinthiya', 'melinda', '12345', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blkln`
--
ALTER TABLE `blkln`
  ADD PRIMARY KEY (`id_blk`),
  ADD KEY `FK_pendaftaran_blkln` (`id_dft`),
  ADD KEY `FK_negara_blkln` (`id_negara`);

--
-- Indexes for table `hongkong`
--
ALTER TABLE `hongkong`
  ADD PRIMARY KEY (`id_hongkong`),
  ADD KEY `FK_tahapdua_hongkong` (`id_tahapdua`),
  ADD KEY `FK_user_hongkong` (`id`);

--
-- Indexes for table `malaysia`
--
ALTER TABLE `malaysia`
  ADD PRIMARY KEY (`id_malaysia`),
  ADD KEY `FK_pendaftaran_malaysia` (`id_dft`),
  ADD KEY `FK_tahapdua_malaysia` (`id_tahapdua`);

--
-- Indexes for table `negara`
--
ALTER TABLE `negara`
  ADD PRIMARY KEY (`id_negara`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_dft`),
  ADD KEY `FK_negara_pendaftaran` (`id_negara`),
  ADD KEY `FK_tahapsatu_pendaftaran` (`id_tahapsatu`),
  ADD KEY `FK_user_pendaftaran` (`id`);

--
-- Indexes for table `quests`
--
ALTER TABLE `quests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sertifhongkong`
--
ALTER TABLE `sertifhongkong`
  ADD PRIMARY KEY (`id_sertif_hk`),
  ADD KEY `FK_pendaftaran_sertifhongkong` (`id_dft`),
  ADD KEY `FK_user_sertifhongkong` (`id`);

--
-- Indexes for table `sertiftaiwan`
--
ALTER TABLE `sertiftaiwan`
  ADD PRIMARY KEY (`id_sertif_taiw`),
  ADD KEY `FK_user_sertiftaiwan` (`id`);

--
-- Indexes for table `singapore`
--
ALTER TABLE `singapore`
  ADD PRIMARY KEY (`id_singapore`),
  ADD KEY `FK_pendaftaran_singapore` (`id_dft`),
  ADD KEY `FK_tahapdua_singapore` (`id_tahapdua`);

--
-- Indexes for table `tahapdua`
--
ALTER TABLE `tahapdua`
  ADD PRIMARY KEY (`id_tahapdua`);

--
-- Indexes for table `tahapsatu`
--
ALTER TABLE `tahapsatu`
  ADD PRIMARY KEY (`id_tahapsatu`);

--
-- Indexes for table `taiwan`
--
ALTER TABLE `taiwan`
  ADD PRIMARY KEY (`id_taiwan`),
  ADD KEY `FK_tahapdua_taiwan` (`id_tahapdua`),
  ADD KEY `FK_user_taiwan` (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id_test`),
  ADD KEY `FK_pendaftaran_test` (`id_dft`),
  ADD KEY `FK_negara_test` (`id_negara`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blkln`
--
ALTER TABLE `blkln`
  MODIFY `id_blk` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hongkong`
--
ALTER TABLE `hongkong`
  MODIFY `id_hongkong` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `malaysia`
--
ALTER TABLE `malaysia`
  MODIFY `id_malaysia` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `negara`
--
ALTER TABLE `negara`
  MODIFY `id_negara` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_dft` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `quests`
--
ALTER TABLE `quests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sertifhongkong`
--
ALTER TABLE `sertifhongkong`
  MODIFY `id_sertif_hk` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `sertiftaiwan`
--
ALTER TABLE `sertiftaiwan`
  MODIFY `id_sertif_taiw` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `singapore`
--
ALTER TABLE `singapore`
  MODIFY `id_singapore` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tahapdua`
--
ALTER TABLE `tahapdua`
  MODIFY `id_tahapdua` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tahapsatu`
--
ALTER TABLE `tahapsatu`
  MODIFY `id_tahapsatu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `taiwan`
--
ALTER TABLE `taiwan`
  MODIFY `id_taiwan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id_test` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blkln`
--
ALTER TABLE `blkln`
  ADD CONSTRAINT `FK_negara_blkln` FOREIGN KEY (`id_negara`) REFERENCES `negara` (`id_negara`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_pendaftaran_blkln` FOREIGN KEY (`id_dft`) REFERENCES `pendaftaran` (`id_dft`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hongkong`
--
ALTER TABLE `hongkong`
  ADD CONSTRAINT `FK_tahapdua_hongkong` FOREIGN KEY (`id_tahapdua`) REFERENCES `tahapdua` (`id_tahapdua`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_user_hongkong` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `malaysia`
--
ALTER TABLE `malaysia`
  ADD CONSTRAINT `FK_pendaftaran_malaysia` FOREIGN KEY (`id_dft`) REFERENCES `pendaftaran` (`id_dft`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tahapdua_malaysia` FOREIGN KEY (`id_tahapdua`) REFERENCES `tahapdua` (`id_tahapdua`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `FK_negara_pendaftaran` FOREIGN KEY (`id_negara`) REFERENCES `negara` (`id_negara`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tahapsatu_pendaftaran` FOREIGN KEY (`id_tahapsatu`) REFERENCES `tahapsatu` (`id_tahapsatu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_user_pendaftaran` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sertifhongkong`
--
ALTER TABLE `sertifhongkong`
  ADD CONSTRAINT `FK_pendaftaran_sertifhongkong` FOREIGN KEY (`id_dft`) REFERENCES `pendaftaran` (`id_dft`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_user_sertifhongkong` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sertiftaiwan`
--
ALTER TABLE `sertiftaiwan`
  ADD CONSTRAINT `FK_user_sertiftaiwan` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `singapore`
--
ALTER TABLE `singapore`
  ADD CONSTRAINT `FK_pendaftaran_singapore` FOREIGN KEY (`id_dft`) REFERENCES `pendaftaran` (`id_dft`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tahapdua_singapore` FOREIGN KEY (`id_tahapdua`) REFERENCES `tahapdua` (`id_tahapdua`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `taiwan`
--
ALTER TABLE `taiwan`
  ADD CONSTRAINT `FK_tahapdua_taiwan` FOREIGN KEY (`id_tahapdua`) REFERENCES `tahapdua` (`id_tahapdua`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_user_taiwan` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `FK_negara_test` FOREIGN KEY (`id_negara`) REFERENCES `negara` (`id_negara`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_pendaftaran_test` FOREIGN KEY (`id_dft`) REFERENCES `pendaftaran` (`id_dft`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
