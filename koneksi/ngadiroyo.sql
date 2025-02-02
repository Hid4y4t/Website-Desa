-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jun 2023 pada 21.04
-- Versi server: 10.3.15-MariaDB
-- Versi PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngadiroyo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(2, 'admin', 'admin', '27b99af73fb755bed4961ee219f4ad26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aduan`
--

CREATE TABLE `aduan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `jenis_aduan` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aduan`
--

INSERT INTO `aduan` (`id`, `nama`, `nik`, `jenis_aduan`, `isi`, `foto`, `waktu`) VALUES
(9, 'asd', '12', 'fasilitas', 'asda', '297725085_743C7990-87A5-4E58-9B74-2FB659F4CC85.jpeg', '2022-08-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aparatur_desa`
--

CREATE TABLE `aparatur_desa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `foto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip_foto`
--

CREATE TABLE `arsip_foto` (
  `id_arsip_foto` int(11) NOT NULL,
  `judul_galeri` varchar(200) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `foto1` varchar(200) DEFAULT NULL,
  `foto2` varchar(200) DEFAULT NULL,
  `foto3` varchar(200) DEFAULT NULL,
  `foto4` varchar(200) DEFAULT NULL,
  `foto5` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip_lain`
--

CREATE TABLE `arsip_lain` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `waktu` date NOT NULL,
  `berkas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip_proposal_keluar`
--

CREATE TABLE `arsip_proposal_keluar` (
  `id_proposal_keluar` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip_proposal_masuk`
--

CREATE TABLE `arsip_proposal_masuk` (
  `id_arsip_proposal_masuk` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip_surat_keluar`
--

CREATE TABLE `arsip_surat_keluar` (
  `id_arsip_surat_keluar` int(11) NOT NULL,
  `prihal` varchar(100) NOT NULL,
  `nomor` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip_surat_masuk`
--

CREATE TABLE `arsip_surat_masuk` (
  `id_arsip_surat_masuk` int(11) NOT NULL,
  `prihal` varchar(100) NOT NULL,
  `pengirim` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel_desa`
--

CREATE TABLE `artikel_desa` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(50) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `waktu` date DEFAULT current_timestamp(),
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel_desa`
--

INSERT INTO `artikel_desa` (`id_artikel`, `judul_artikel`, `keterangan`, `waktu`, `foto`) VALUES
(19, 'Sejarah Suruyan', '<p>Sungai Seruyan Menurut laporan Radermacher, pada tahun 1780 yang menjabat kepala daerah Pembuang (sekarang Kabupaten Seruyan) adalah Raden Jaya. Sejak tanggal 13 Agustus 1787, wilayah Pembuang (Kabupaten Seruyan) diserahkan Sunan Nata Alam kepada VOC Belanda. Kepala daerah Pembuang tahun 1834 Kjai ngabei Djaja-negara (hoofd van Pemboewan). Tahun 1847 Djoeragan Brahim (hoofd van Pemboewan, Sampit en Semboeloe). Tahun 1850 Raden Moeda (hoofd van Pemboewan alleen). Tahun 1859 Kjai Djaja-negara (hoofd van Pemboewan en Semboeloe). Yang pernah menjadi Distriktshoofd van Pemboeang: Joeragan Moehammad Seman. Menurut Staatsblad van Nederlandisch Indi&euml; tahun 1849, wilayah ini termasuk dalam zuid-ooster-afdeeling berdasarkan B&ecirc;sluit van den Minister van Staat, Gouverneur-Generaal van Nederlandsch-Indie, pada 27 Agustus 1849, No. 8 Tahun 1855, daerah ini merupakan sebagian dari De zuider-afdeeling van Borneo.</p>', '2022-08-26', '1292373590_20130822logo-seruyan.jpg'),
(20, 'satuy', '<p>asdasdasdasdasd asdfasfdasdasdasd</p>', '2022-09-28', '1334640864_Dayak Ngaju.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `belanja_desa`
--

CREATE TABLE `belanja_desa` (
  `id_belanja` int(11) NOT NULL,
  `belanja` varchar(100) NOT NULL,
  `anggaran` int(11) NOT NULL,
  `realisasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bpd`
--

CREATE TABLE `bpd` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `foto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bpd`
--

INSERT INTO `bpd` (`id`, `nama`, `jabatan`, `foto`) VALUES
(2, 'Muhammad NR Hidayatullah', 'Kepala Desa', '649958157_f40b88a09c7bf13916ef8e932dc2dca8.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `coba_banyak`
--

CREATE TABLE `coba_banyak` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `foto1` text NOT NULL,
  `foto2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `coba_banyak`
--

INSERT INTO `coba_banyak` (`id`, `keterangan`, `foto1`, `foto2`) VALUES
(1, 'as', '869890.png', '164808.png'),
(2, 'as', '830696.png', '38438.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kematian`
--

CREATE TABLE `data_kematian` (
  `id_kematian` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `bulan` varchar(25) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kemiskinan`
--

CREATE TABLE `data_kemiskinan` (
  `id_miskin` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `status_pernikahan` varchar(50) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pindah`
--

CREATE TABLE `data_pindah` (
  `id_pindah` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `alamat_asal` varchar(200) NOT NULL,
  `alamat_baru` varchar(200) NOT NULL,
  `tanggal_pindah` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_warga_desa`
--

CREATE TABLE `data_warga_desa` (
  `id_warga` varchar(20) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `pendidikan` varchar(100) DEFAULT NULL,
  `status_perkawinan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_warga_desa`
--

INSERT INTO `data_warga_desa` (`id_warga`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `agama`, `pendidikan`, `status_perkawinan`) VALUES
('12', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_umum`
--

CREATE TABLE `fasilitas_umum` (
  `id_fasilitas` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitas_umum`
--

INSERT INTO `fasilitas_umum` (`id_fasilitas`, `nama`, `lokasi`, `nomor`, `keterangan`) VALUES
(6, 'asda', 'asd', '5ASD/8ASD', 'asdasdas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri_publik`
--

CREATE TABLE `galeri_publik` (
  `id_galeri` int(11) NOT NULL,
  `judul_galeri` varchar(100) DEFAULT NULL,
  `foto1` varchar(100) DEFAULT NULL,
  `foto2` varchar(100) DEFAULT NULL,
  `foto3` varchar(100) DEFAULT NULL,
  `foto4` varchar(100) DEFAULT NULL,
  `foto5` varchar(100) DEFAULT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri_publik`
--

INSERT INTO `galeri_publik` (`id_galeri`, `judul_galeri`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `waktu`) VALUES
(15, 'kegiatan', '589662.jpg', '166115.png', '581951.png', '912535.png', '20475.jpg', '2022-08-21 17:08:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `waktu` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `judul`, `keterangan`, `waktu`) VALUES
(2, 'pembayaran', '                                                                       di harapkan masyarakat desa bayar pajak         -                                                                                ', '2022-08-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelahiran`
--

CREATE TABLE `kelahiran` (
  `id_kelahiran` int(11) NOT NULL,
  `nama_kepala_keluarga` varchar(100) NOT NULL,
  `no_kk` varchar(100) NOT NULL,
  `nama_bayi` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_dilahirkan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelahiran`
--

INSERT INTO `kelahiran` (`id_kelahiran`, `nama_kepala_keluarga`, `no_kk`, `nama_bayi`, `jenis_kelamin`, `tanggal_lahir`, `tempat_dilahirkan`) VALUES
(2, 'jakaria', '12345678910', 'santa', 'Perempuan', '2022-08-24', ''),
(3, 'tono', '987654321', 'otoy', 'Laki-Laki', '2022-08-09', 'los angles');

-- --------------------------------------------------------

--
-- Struktur dari tabel `khusus`
--

CREATE TABLE `khusus` (
  `npsn` int(11) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `masukan`
--

CREATE TABLE `masukan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `pesan` text NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `non_formal`
--

CREATE TABLE `non_formal` (
  `npsn` int(11) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pdf_arsip`
--

CREATE TABLE `pdf_arsip` (
  `id_pdf` int(11) NOT NULL,
  `pdf` varchar(100) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pdf_arsip`
--

INSERT INTO `pdf_arsip` (`id_pdf`, `pdf`, `waktu`) VALUES
(2, 'ijasah.pdf', '2022-08-08 06:10:48'),
(3, 'ijasah.pdf', '2022-08-08 06:11:08'),
(4, 'CV.pdf', '2022-08-08 06:11:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembiayaan_desa`
--

CREATE TABLE `pembiayaan_desa` (
  `id_pembiayaan` int(11) NOT NULL,
  `pembiayaan` varchar(100) NOT NULL,
  `anggaran` int(11) NOT NULL,
  `realisasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendapatan_desa`
--

CREATE TABLE `pendapatan_desa` (
  `id_pendapatan` int(11) NOT NULL,
  `pendapatan` varchar(100) NOT NULL,
  `anggaran` int(11) NOT NULL,
  `realisasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendapatan_desa`
--

INSERT INTO `pendapatan_desa` (`id_pendapatan`, `pendapatan`, `anggaran`, `realisasi`) VALUES
(29, 'proposal', 1000000, 500000),
(30, 'penjualan', 2000000, 3000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `npsn` varchar(50) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `desa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggunaan_dana_desa`
--

CREATE TABLE `penggunaan_dana_desa` (
  `id_penggunaan_dana` int(11) NOT NULL,
  `penggunaan` varchar(100) NOT NULL,
  `dana` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile_desa`
--

CREATE TABLE `profile_desa` (
  `id_desa` int(11) NOT NULL,
  `nama_desa` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `alamat_kantor` varchar(100) NOT NULL,
  `telp` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kd_wil` varchar(50) NOT NULL,
  `sejarah_desa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profile_desa`
--

INSERT INTO `profile_desa` (`id_desa`, `nama_desa`, `kabupaten`, `kode_pos`, `alamat_kantor`, `telp`, `email`, `kd_wil`, `sejarah_desa`) VALUES
(3, 'Ngadiroyo', 'Wonogiri', 123, 'jl raya', 0, '-@gmail.com', '-', 'Sejarah terbentuknya Kabupaten Wonogiri tidak bisa terlepas dari perjalanan hidup dan perjuangan Raden Mas Said atau dikenal dengan julukan Pangeran Sambernyawa. Asal kata Wonogiri sendiri berasal dari bahasa Jawa wana (alas/hutan/sawah) dan giri (gunung/ pegunungan). Nama ini sangat tepat menggambarkan kondisi wilayah Kabupaten Wonogiri yang memang sebagian besar berupa sawah, hutan dan gunung.\r\n\r\nPemerintahan di Kabupaten Wonogiri awal mulanya merupakan suatu daerah basis perjuangan Raden Mas Said dalam menentang penjajahan Belanda. Raden Mas Said lahir di Kartasura pada hari Minggu Legi, tanggal 4 Ruwah 1650 tahun Jimakir, Windu Adi Wuku Wariagung, atau bertepatan dengan tanggal Masehi 8 April 1725. Raden Mas Said merupakan putra dari Kanjeng Pangeran Aryo Mangkunegoro dan Raden Ayu Wulan yang wafat saat melahirkannya.\r\n\r\nMemasuki usia dua tahun, Raden Mas Said harus kehilangan ayahandanya karena dibuang oleh Belanda ke Tanah Kaap (Ceylon) atau Srilanka. Hal itu karena ulah keji berupa fitnah dari Kanjeng Ratu dan Patih Danurejo. Akibatnya, Raden Mas Said mengalami masa kecil yang jauh dari selayaknya seorang bangsawan Keraton. Raden Mas Said menghabiskan masa kecil bersama anak-anak para abdi dalem lainnya, sehingga mengerti betul bagaimana kehidupan kawula alit. Hikmah dibalik itulah yang menempa Raden Mas Said menjadi seorang yang mempunyai sifat peduli terhadap sesama dan kebersamaan yang tinggi karena kedekatan beliau dengan abdi dalem yang merupakan rakyat kecil biasa.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_kerja`
--

CREATE TABLE `program_kerja` (
  `id_program` int(11) NOT NULL,
  `program_kerja` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `program_kerja`
--

INSERT INTO `program_kerja` (`id_program`, `program_kerja`) VALUES
(3, 'minum air dengan gelas'),
(5, 'membangkitkan desa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proposal_pengajuan`
--

CREATE TABLE `proposal_pengajuan` (
  `id_proposal` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nomo_hp` varchar(100) NOT NULL,
  `jenis_proposal` varchar(100) NOT NULL,
  `proposal` varchar(200) NOT NULL,
  `pesan` varchar(200) NOT NULL,
  `tanggal` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rencana_pembangunan`
--

CREATE TABLE `rencana_pembangunan` (
  `id_pembangunan` int(11) NOT NULL,
  `jenis_pembangunan` varchar(100) NOT NULL,
  `nama_pembangunan` varchar(100) NOT NULL,
  `anggaran` int(11) NOT NULL,
  `rencana_mulai_pembangunan` date NOT NULL,
  `rencana_akhir_pembangunan` date NOT NULL,
  `lokasi_pembangunan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rencana_pembangunan`
--

INSERT INTO `rencana_pembangunan` (`id_pembangunan`, `jenis_pembangunan`, `nama_pembangunan`, `anggaran`, `rencana_mulai_pembangunan`, `rencana_akhir_pembangunan`, `lokasi_pembangunan`) VALUES
(8, 'Fasilitas Umum', 'Rumah Sakit', 1000000, '2022-08-23', '2022-09-06', 'desa banua usang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sd_mi`
--

CREATE TABLE `sd_mi` (
  `npsn` int(11) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sma_slta`
--

CREATE TABLE `sma_slta` (
  `npsn` int(11) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `smp_sltp`
--

CREATE TABLE `smp_sltp` (
  `npsn` int(11) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_pengajuan`
--

CREATE TABLE `surat_pengajuan` (
  `id_surat` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nomo_hp` varchar(100) NOT NULL,
  `jenis_surat` varchar(100) NOT NULL,
  `surat` varchar(200) NOT NULL,
  `pesan` varchar(200) DEFAULT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `universitas`
--

CREATE TABLE `universitas` (
  `npsn` int(11) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `universitas`
--

INSERT INTO `universitas` (`npsn`, `nama_sekolah`, `status`, `alamat`) VALUES
(1, 'asd', 'asd', 'asdsa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id_vs` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `visi_misi`
--

INSERT INTO `visi_misi` (`id_vs`, `visi`, `misi`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi incidunt aspernatur numquam libero vero facere itaque dolor optio consequuntur aut quisquam, tempora voluptatum explicabo nisi deleniti corporis quidem delectus unde aliquam sequi sapiente beatae? Possimus voluptatibus numquam esse dolorem. Hic beatae optio eligendi. ', '<ol>\r\n<li>hasdasdasd</li>\r\n<li>asdasdas</li>\r\n<li>asdasd</li>\r\n<li>asddsasd</li>\r\n</ol>');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `aduan`
--
ALTER TABLE `aduan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`),
  ADD KEY `nik_2` (`nik`);

--
-- Indeks untuk tabel `aparatur_desa`
--
ALTER TABLE `aparatur_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `arsip_foto`
--
ALTER TABLE `arsip_foto`
  ADD PRIMARY KEY (`id_arsip_foto`);

--
-- Indeks untuk tabel `arsip_lain`
--
ALTER TABLE `arsip_lain`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `arsip_proposal_keluar`
--
ALTER TABLE `arsip_proposal_keluar`
  ADD PRIMARY KEY (`id_proposal_keluar`);

--
-- Indeks untuk tabel `arsip_proposal_masuk`
--
ALTER TABLE `arsip_proposal_masuk`
  ADD PRIMARY KEY (`id_arsip_proposal_masuk`);

--
-- Indeks untuk tabel `arsip_surat_keluar`
--
ALTER TABLE `arsip_surat_keluar`
  ADD PRIMARY KEY (`id_arsip_surat_keluar`);

--
-- Indeks untuk tabel `arsip_surat_masuk`
--
ALTER TABLE `arsip_surat_masuk`
  ADD PRIMARY KEY (`id_arsip_surat_masuk`);

--
-- Indeks untuk tabel `artikel_desa`
--
ALTER TABLE `artikel_desa`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `belanja_desa`
--
ALTER TABLE `belanja_desa`
  ADD PRIMARY KEY (`id_belanja`);

--
-- Indeks untuk tabel `bpd`
--
ALTER TABLE `bpd`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `coba_banyak`
--
ALTER TABLE `coba_banyak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_kematian`
--
ALTER TABLE `data_kematian`
  ADD PRIMARY KEY (`id_kematian`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `data_kemiskinan`
--
ALTER TABLE `data_kemiskinan`
  ADD PRIMARY KEY (`id_miskin`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `data_pindah`
--
ALTER TABLE `data_pindah`
  ADD PRIMARY KEY (`id_pindah`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `data_warga_desa`
--
ALTER TABLE `data_warga_desa`
  ADD PRIMARY KEY (`id_warga`);

--
-- Indeks untuk tabel `fasilitas_umum`
--
ALTER TABLE `fasilitas_umum`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `galeri_publik`
--
ALTER TABLE `galeri_publik`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indeks untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`id_kelahiran`);

--
-- Indeks untuk tabel `khusus`
--
ALTER TABLE `khusus`
  ADD PRIMARY KEY (`npsn`);

--
-- Indeks untuk tabel `masukan`
--
ALTER TABLE `masukan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `non_formal`
--
ALTER TABLE `non_formal`
  ADD PRIMARY KEY (`npsn`);

--
-- Indeks untuk tabel `pdf_arsip`
--
ALTER TABLE `pdf_arsip`
  ADD PRIMARY KEY (`id_pdf`);

--
-- Indeks untuk tabel `pembiayaan_desa`
--
ALTER TABLE `pembiayaan_desa`
  ADD PRIMARY KEY (`id_pembiayaan`);

--
-- Indeks untuk tabel `pendapatan_desa`
--
ALTER TABLE `pendapatan_desa`
  ADD PRIMARY KEY (`id_pendapatan`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indeks untuk tabel `penggunaan_dana_desa`
--
ALTER TABLE `penggunaan_dana_desa`
  ADD PRIMARY KEY (`id_penggunaan_dana`);

--
-- Indeks untuk tabel `profile_desa`
--
ALTER TABLE `profile_desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indeks untuk tabel `program_kerja`
--
ALTER TABLE `program_kerja`
  ADD PRIMARY KEY (`id_program`);

--
-- Indeks untuk tabel `proposal_pengajuan`
--
ALTER TABLE `proposal_pengajuan`
  ADD PRIMARY KEY (`id_proposal`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `rencana_pembangunan`
--
ALTER TABLE `rencana_pembangunan`
  ADD PRIMARY KEY (`id_pembangunan`);

--
-- Indeks untuk tabel `sd_mi`
--
ALTER TABLE `sd_mi`
  ADD PRIMARY KEY (`npsn`);

--
-- Indeks untuk tabel `sma_slta`
--
ALTER TABLE `sma_slta`
  ADD PRIMARY KEY (`npsn`);

--
-- Indeks untuk tabel `smp_sltp`
--
ALTER TABLE `smp_sltp`
  ADD PRIMARY KEY (`npsn`);

--
-- Indeks untuk tabel `surat_pengajuan`
--
ALTER TABLE `surat_pengajuan`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `universitas`
--
ALTER TABLE `universitas`
  ADD PRIMARY KEY (`npsn`);

--
-- Indeks untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id_vs`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `aduan`
--
ALTER TABLE `aduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `aparatur_desa`
--
ALTER TABLE `aparatur_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `arsip_foto`
--
ALTER TABLE `arsip_foto`
  MODIFY `id_arsip_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `arsip_lain`
--
ALTER TABLE `arsip_lain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `arsip_proposal_keluar`
--
ALTER TABLE `arsip_proposal_keluar`
  MODIFY `id_proposal_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `arsip_proposal_masuk`
--
ALTER TABLE `arsip_proposal_masuk`
  MODIFY `id_arsip_proposal_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `arsip_surat_keluar`
--
ALTER TABLE `arsip_surat_keluar`
  MODIFY `id_arsip_surat_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `arsip_surat_masuk`
--
ALTER TABLE `arsip_surat_masuk`
  MODIFY `id_arsip_surat_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `artikel_desa`
--
ALTER TABLE `artikel_desa`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `belanja_desa`
--
ALTER TABLE `belanja_desa`
  MODIFY `id_belanja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `bpd`
--
ALTER TABLE `bpd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `coba_banyak`
--
ALTER TABLE `coba_banyak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_kematian`
--
ALTER TABLE `data_kematian`
  MODIFY `id_kematian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_kemiskinan`
--
ALTER TABLE `data_kemiskinan`
  MODIFY `id_miskin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_pindah`
--
ALTER TABLE `data_pindah`
  MODIFY `id_pindah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `fasilitas_umum`
--
ALTER TABLE `fasilitas_umum`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `galeri_publik`
--
ALTER TABLE `galeri_publik`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `id_kelahiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `khusus`
--
ALTER TABLE `khusus`
  MODIFY `npsn` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `masukan`
--
ALTER TABLE `masukan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `non_formal`
--
ALTER TABLE `non_formal`
  MODIFY `npsn` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pdf_arsip`
--
ALTER TABLE `pdf_arsip`
  MODIFY `id_pdf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pembiayaan_desa`
--
ALTER TABLE `pembiayaan_desa`
  MODIFY `id_pembiayaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pendapatan_desa`
--
ALTER TABLE `pendapatan_desa`
  MODIFY `id_pendapatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penggunaan_dana_desa`
--
ALTER TABLE `penggunaan_dana_desa`
  MODIFY `id_penggunaan_dana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `profile_desa`
--
ALTER TABLE `profile_desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `program_kerja`
--
ALTER TABLE `program_kerja`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `proposal_pengajuan`
--
ALTER TABLE `proposal_pengajuan`
  MODIFY `id_proposal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `rencana_pembangunan`
--
ALTER TABLE `rencana_pembangunan`
  MODIFY `id_pembangunan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `sd_mi`
--
ALTER TABLE `sd_mi`
  MODIFY `npsn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT untuk tabel `sma_slta`
--
ALTER TABLE `sma_slta`
  MODIFY `npsn` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `smp_sltp`
--
ALTER TABLE `smp_sltp`
  MODIFY `npsn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12322;

--
-- AUTO_INCREMENT untuk tabel `surat_pengajuan`
--
ALTER TABLE `surat_pengajuan`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `universitas`
--
ALTER TABLE `universitas`
  MODIFY `npsn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id_vs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `aduan`
--
ALTER TABLE `aduan`
  ADD CONSTRAINT `aduan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_warga_desa` (`id_warga`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `data_kemiskinan`
--
ALTER TABLE `data_kemiskinan`
  ADD CONSTRAINT `data_kemiskinan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_warga_desa` (`id_warga`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `masukan`
--
ALTER TABLE `masukan`
  ADD CONSTRAINT `masukan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_warga_desa` (`id_warga`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `proposal_pengajuan`
--
ALTER TABLE `proposal_pengajuan`
  ADD CONSTRAINT `proposal_pengajuan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_warga_desa` (`id_warga`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `surat_pengajuan`
--
ALTER TABLE `surat_pengajuan`
  ADD CONSTRAINT `surat_pengajuan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_warga_desa` (`id_warga`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
