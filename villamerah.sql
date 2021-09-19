-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Apr 2020 pada 09.08
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `villamerah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `nama_event` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_event`, `nama_event`, `tanggal`) VALUES
(1, 'Art Camp', '2020-01-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `id_jenis_kelamin` int(11) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`id_jenis_kelamin`, `jenis_kelamin`) VALUES
(1, 'Laki-laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karya_siswa`
--

CREATE TABLE `karya_siswa` (
  `id_karya` int(11) NOT NULL,
  `karya` varchar(1000) DEFAULT NULL,
  `tanggal_upload` date DEFAULT NULL,
  `id_user_data` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'Platinum +'),
(2, 'Platinum'),
(3, 'Gold'),
(4, 'Silver'),
(5, 'Khusus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi_belajar`
--

CREATE TABLE `lokasi_belajar` (
  `id_lokasi` int(11) NOT NULL,
  `lokasi_belajar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lokasi_belajar`
--

INSERT INTO `lokasi_belajar` (`id_lokasi`, `lokasi_belajar`) VALUES
(1, 'Bandung'),
(2, 'Jakarta Selatan'),
(3, 'Jakarta Timur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('fbc0d8ce19-249c0a@inbox.mailtrap.io', '$2y$10$fGa.eJu35sR4EZvwRW/ymOj31P.TuHFzMscCZyy6cYewvrWM5YCIe', '2020-03-17 09:01:19'),
('gifarlygian@gmail.com', '$2y$10$LByFyQ95iUVOLIl.bEfaB.mnlPpRlTj4iY/6RdbZyP4ze4x6snPYK', '2020-03-17 11:11:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program`
--

CREATE TABLE `program` (
  `id_program` int(11) NOT NULL,
  `nama_program` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `program`
--

INSERT INTO `program` (`id_program`, `nama_program`) VALUES
(1, 'Seni Rupa'),
(2, 'Minat'),
(3, 'Arsitektur'),
(4, 'Intensif SNMPTN'),
(5, 'Intensif SBMPTN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `jenis_pendidikan` varchar(10) NOT NULL,
  `status_sekolah` varchar(20) NOT NULL,
  `urutan` int(10) DEFAULT NULL,
  `instansi` varchar(100) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `telp_sekolah` varchar(30) DEFAULT NULL,
  `email_sekolah` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `jenis_pendidikan`, `status_sekolah`, `urutan`, `instansi`, `alamat_sekolah`, `telp_sekolah`, `email_sekolah`) VALUES
(1, 'SMK', 'Negeri', 4, 'Padalarang', 'Jl. Raya Padalarang No.451, Kertajaya, Padalarang, Kabupaten Bandung Barat, Jawa Barat 40553', '0226805406', NULL),
(2, 'SMA', 'Negeri', 11, 'Bandung', 'Jl. Kembar Baru No.23, Cigereleng, Kec. Regol, Kota Bandung, Jawa Barat 40253', '0225201102', ''),
(3, 'SMA', 'Negeri', 1, 'Bandung', 'Jl. Ir. H. Juanda No.93, Lb. Siliwangi, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132', '0222503948', NULL),
(4, 'SMA', 'Negeri', 2, 'Bandung', 'Jl. Cihampelas No.173, Cipaganti, Kecamatan Coblong, Kota Bandung, Jawa Barat 40131', '0222032462', ''),
(5, 'SMA', 'Swasta', NULL, 'Trinitas', 'Jl. Kebon Jati No.209, Ciroyom, Kec. Andir, Kota Bandung, Jawa Barat 40182', '0226019854', ''),
(6, 'SMK', 'Negeri', 10, 'Kota Bandung', 'Jl. Cijawura Hilir No.339, Cijaura, Kec. Buahbatu, Kota Bandung, Jawa Barat 40286', '0227562523', ''),
(7, 'SMK', 'Negeri', 1, 'Cimahi', 'Jl. Mahar Martanegara No.48, Utama, Kec. Cimahi Sel., Kota Cimahi, Jawa Barat 40521', '0226629683', ''),
(8, 'SMK', 'Swasta', NULL, 'Telkom Bandung', 'Jalan Radio Palasari Road, Citeureup, Dayeuhkolot, Bandung, West Java 40257', '0225226016', ''),
(12, 'SMA', 'Negeri', 3, 'Bandung', 'Jl. Belitung No.8, Merdeka, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40113', '0224235154', ''),
(13, 'SMA', 'Negeri', 1, 'Jakarta', 'Jl. Budi Utomo No.7, Ps. Baru, Kecamatan Sawah Besar, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10710', '02138650001', ''),
(14, 'SMA', 'Negeri', 2, 'Jakarta', 'Jalan Gajah Mada No. 175 Keagungan Tamansari RT.1/RW.5 RT.1 4 5, RT.1/RW.5, Keagungan, Kec. Taman Sari, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11130', '0216294318', ''),
(15, 'SMA', 'Negeri', 3, 'Jakarta', 'Jl. Taman Setia Budi II No.1, RT.1/RW.2, Kuningan, Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12910', '0215254663', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id_tahun` int(11) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id_tahun`, `tahun_ajaran`) VALUES
(18, '2018/2019'),
(19, '2019/2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` int(2) NOT NULL,
  `id_user_data` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `status`, `email`, `level`, `id_user_data`) VALUES
(118110000, 'giangifarly', '21232f297a57a5a743894a0e4a801fc3', 1, 'gifarlygian@gmail.com', 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user_data` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `name`, `username`, `email`, `email_verified_at`, `password`, `id_user_data`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Gian Gifarly', 'giangifarly', 'gifarlygian@gmail.com', NULL, '$2y$10$PlVMLx2D2x9QWVtumecNPubn9yh7WUdEgUJQAvYw/hM5NpYBpx8iu', NULL, 'uUoxAesHkF2KwV2mFABfy9h36TLHkmeNxJS4fa7Wz03JEfQkqfO6vIXZRB7N', '2020-03-12 14:36:19', '2020-03-12 14:36:19'),
(2, 'Adinda', 'adinda24', 'fbc0d8ce19-249c0a@inbox.mailtrap.io', NULL, '$2y$10$lANTdERmexqZmQsr/BUh0.aA.WnrVTypi26BSufiBX4/fIVQy8uzy', NULL, NULL, '2020-03-17 09:01:10', '2020-03-17 09:01:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_data`
--

CREATE TABLE `user_data` (
  `id_user_data` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `orang_tua` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `id_jenis_kelamin` int(11) DEFAULT NULL,
  `id_lokasi` int(11) DEFAULT NULL,
  `id_sekolah` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL,
  `id_program` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_data`
--

INSERT INTO `user_data` (`id_user_data`, `nama`, `tempat_lahir`, `tgl_lahir`, `orang_tua`, `alamat`, `telepon`, `id_jenis_kelamin`, `id_lokasi`, `id_sekolah`, `id_kelas`, `id_tahun`, `id_program`) VALUES
(1, 'Gian Gifarly', 'Bandung', '1999-11-18', 'Nurhaeni', 'Griya Sukarame Asri 006/016, Ciptaharja, Cipatat, Kab. Bandung Barat, Jawa Barat 40554', '089617222740', 1, 1, 2, NULL, 18, NULL),
(2, 'Udel', '', '1970-01-01', '', 'Padalarang', '', 1, 2, 1, NULL, 18, NULL),
(3, 'Arliv', NULL, NULL, NULL, 'Gunben', NULL, 1, 3, 2, NULL, 18, NULL),
(4, 'Administrator', NULL, NULL, NULL, 'Jl. Anggrek 49', NULL, 1, 1, 1, NULL, 18, NULL),
(5, 'Intan', NULL, NULL, NULL, 'Lembang, Bandung Barat', NULL, 2, 2, 2, NULL, 18, NULL),
(6, 'Samsudin', '', '1970-01-01', '', 'PPI', '', 1, 3, 1, NULL, 18, NULL),
(7, 'Cepi Riswanto', NULL, NULL, NULL, 'Padalarang', NULL, 1, 1, 2, NULL, 18, NULL),
(9, 'Fauzan', NULL, NULL, NULL, 'PPI', NULL, 1, 3, 2, NULL, 18, NULL),
(10, 'Deden Sureden', '', '1970-01-01', '', 'Griya Sukarame Asri', '', 1, 1, 2, NULL, 18, NULL),
(12, 'Joko', NULL, NULL, NULL, 'Jakarta Timur', NULL, 1, 3, 2, NULL, 18, NULL),
(13, 'Bowo', NULL, NULL, NULL, 'Jakarta Selatan', NULL, 1, 2, 1, NULL, 18, NULL),
(14, 'Uvuvwevwe Osas', NULL, NULL, NULL, 'Zimbabwe', NULL, 1, 2, 2, NULL, 18, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`id_jenis_kelamin`);

--
-- Indeks untuk tabel `karya_siswa`
--
ALTER TABLE `karya_siswa`
  ADD PRIMARY KEY (`id_karya`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `lokasi_belajar`
--
ALTER TABLE `lokasi_belajar`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id_program`);

--
-- Indeks untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indeks untuk tabel `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_user_data` (`id_user_data`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id_user_data`),
  ADD KEY `id_jenis_kelamin` (`id_jenis_kelamin`),
  ADD KEY `id_lokasi` (`id_lokasi`),
  ADD KEY `id_lokasi_2` (`id_lokasi`),
  ADD KEY `id_sekolah` (`id_sekolah`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_program` (`id_program`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  MODIFY `id_jenis_kelamin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `karya_siswa`
--
ALTER TABLE `karya_siswa`
  MODIFY `id_karya` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `lokasi_belajar`
--
ALTER TABLE `lokasi_belajar`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `program`
--
ALTER TABLE `program`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118110001;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id_user_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119319878;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_user_data`) REFERENCES `user_data` (`id_user_data`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user_data`
--
ALTER TABLE `user_data`
  ADD CONSTRAINT `user_data_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tahun_ajaran` (`id_tahun`),
  ADD CONSTRAINT `user_data_ibfk_2` FOREIGN KEY (`id_lokasi`) REFERENCES `lokasi_belajar` (`id_lokasi`),
  ADD CONSTRAINT `user_data_ibfk_3` FOREIGN KEY (`id_jenis_kelamin`) REFERENCES `jenis_kelamin` (`id_jenis_kelamin`),
  ADD CONSTRAINT `user_data_ibfk_4` FOREIGN KEY (`id_sekolah`) REFERENCES `sekolah` (`id_sekolah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
