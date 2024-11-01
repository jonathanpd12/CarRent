-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2024 at 07:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbase_carrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `cc`
--

CREATE TABLE `cc` (
  `id_mobil` int(11) NOT NULL,
  `nama_cc` varchar(50) NOT NULL,
  `gambar_cc` varchar(100) NOT NULL,
  `harga_cc` int(11) NOT NULL,
  `transmisi_cc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cc`
--

INSERT INTO `cc` (`id_mobil`, `nama_cc`, `gambar_cc`, `harga_cc`, `transmisi_cc`) VALUES
(4, 'Daihatsu Sirion', 'images/CityCar/Daihatsu-Sirion.png', 350000, 'CVT'),
(1, 'Honda BRIO', 'images/CityCar/Honda-BRIO.png', 350000, 'Manually'),
(2, 'Suzuki Baleno', 'images/CityCar/Suzuki-Baleno.png', 400000, 'Automatic'),
(3, 'Suzuki Karimun', 'images/CityCar/Suzuki-Karimun.png', 500000, 'Manually - Automatic');

-- --------------------------------------------------------

--
-- Table structure for table `co`
--

CREATE TABLE `co` (
  `id_mobil` int(11) NOT NULL,
  `nama_co` varchar(50) NOT NULL,
  `gambar_co` varchar(100) NOT NULL,
  `harga_co` int(11) NOT NULL,
  `transmisi_co` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `co`
--

INSERT INTO `co` (`id_mobil`, `nama_co`, `gambar_co`, `harga_co`, `transmisi_co`) VALUES
(5, 'Daihatsu Terios 2009', 'images/Crossover/Daihatsu-Terios.png', 450000, 'Automatic'),
(6, 'Honda HR-V', 'images/Crossover/Honda-HR-V.png', 400000, 'CVT'),
(7, 'Suzuki XL7', 'images/Crossover/Suzuki-XL7.png', 600000, 'Automatic'),
(8, 'Toyota Rush', 'images/Crossover/Toyota-Rush.png', 550000, 'Automatic');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id_mobil` int(11) NOT NULL,
  `nama_mobil` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tenaga` varchar(50) NOT NULL,
  `jumlah_pintu` varchar(50) NOT NULL,
  `jenis_transmisi` varchar(50) NOT NULL,
  `kapasitas_mesin` varchar(50) NOT NULL,
  `kondisi` varchar(1000) NOT NULL,
  `bahan_bakar` varchar(50) NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id_mobil`, `nama_mobil`, `gambar`, `tenaga`, `jumlah_pintu`, `jenis_transmisi`, `kapasitas_mesin`, `kondisi`, `bahan_bakar`, `harga`) VALUES
(1, 'Honda Brio', 'images/CityCar/Honda-BRIO.png', '89 hp', '5 doors', 'manually', '1199 cc', 'Mesin berfungsi dengan baik tanpa bunyi aneh atau tanda-tanda kebocoran minyak. Interior mobil terawat. bebas dari bau tidak sedap. dan tidak ada tanda-tanda kelembaban atau jamur. Transmisi beroperasi lancar dan responsif pada perpindahan gigi.', 'gasoline oil', 350000),
(2, 'Suzuki Baleno', 'images/CityCar/Suzuki-Baleno.png', '103 hp', '5 doors', 'automatic', '1462 cc', 'Tidak ada kerusakan signifikan pada bodi mobil. dan cat masih dalam kondisi baik. Semua sistem listrik seperti AC. kaca elektrik. dan perangkat audio beroperasi dengan baik. Tidak ada goresan atau kerusakan pada velg. dan baut roda terpasang dengan benar.', 'gasoline oil', 400000),
(3, 'Suzuki Karimun', 'images/CityCar/Suzuki-Karimun.png', '88 hp', '5 doors', 'manually -automatic', '1197 cc', 'Kondisi mobil baik. Sistem rem berfungsi efektif dan merata pada semua roda. tanpa gejala aus atau bocor. Semua lampu depan. belakang. dan lampu rem berfungsi dengan baik. Ban memiliki profil yang mencukupi. dan tekanan angin sesuai dengan rekomendasi produsen.', 'gasoline oil', 500000),
(4, 'Daihatsu Sirion', 'images/CityCar/Daihatsu-Sirion.png', '94 hp', '5 doors', 'CVT', '1329 cc', 'Mesin berfungsi optimal. tanpa bunyi aneh atau tanda-tanda overheating. Tidak ada kebocoran cairan mesin.  Sistem transmisi bekerja dengan mulus. perpindahan gigi responsif. dan tidak ada gejala slipping.  Semua lampu (depan. belakang. lampu rem. lampu sein) berfungsi dengan baik. serta indikator dashboard.', 'gasoline oil', 350000),
(5, 'Daihatsu Terios 2009', 'images/Crossover/Daihatsu-Terios.png', '103 hp', '4 doors', 'automatic', '1496 cc', 'Mesin berfungsi baik.  rem berfungsi efektif pada semua roda. pedal rem responsif. dan tidak ada tanda-tanda keausan berlebihan pada sistem pengereman. Sistem AC dan pemanas beroperasi dengan baik. ', 'gasoline oil', 450000),
(6, 'Honda HR-V', 'images/Crossover/Honda-HR-V.png', '175 hp', '5 doors', 'CVT', '1498 cc', 'Semua sistem listrik seperti kaca elektrik. sistem audio. lampu dalam. dan klakson berfungsi tanpa masalah. Kursi dan dudukan dalam kondisi baik. tanpa sobekan atau kerusakan signifikan. Tidak ada kerusakan besar pada bodi mobil. cat tidak mengelupas atau retak. dan tidak ada tanda-tanda korosi.', 'gasoline oil', 400000),
(7, 'Suzuki XL7', 'images/Crossover/Suzuki-XL7.png', '103 hp', '5 doors', 'automatic', '1462 cc', ' Suspensi memberikan kenyamanan. dan sistem kemudi berrespons tanpa kebocoran minyak atau komponen yang aus. Semua sistem listrik seperti kaca elektrik. sistem audio. lampu dalam. dan klakson berfungsi tanpa masalah.  Mesin berfungsi optimal. tanpa bunyi aneh atau tanda-tanda overheating. ', 'gasoline oil', 600000),
(8, 'Toyota Rush', 'images/Crossover/Toyota-Rush.png', '103 hp', '5 doors', 'automatic', '1496 cc', 'Mesin beroperasi tanpa bunyi aneh. bebas dari kebocoran. dan memberikan kinerja yang stabil. Sistem transmisi berfungsi dengan baik. melakukan perpindahan gigi dengan respons yang baik. idak ada kerusakan signifikan pada bodi mobil. dan cat masih dalam kondisi baik tanpa retakan atau mengelupas.', 'gasoline oil', 550000),
(9, 'Daihatsu Terios 2019', 'images/MPV/Daihatsu-Terios.png', '103 hp', '5 doors', 'automatic', '1496 cc', 'Rem bekerja efektif. memberikan pengereman yang responsif dan merata pada semua roda.  Suspensi memberikan kenyamanan. dan sistem kemudi merespons tanpa gejala aus atau bocor.  Kursi dan panel interior tidak mengalami kerusakan. dan semua komponen berfungsi dengan baik.', 'gasoline oil', 450000),
(10, 'Honda Mobilio', 'images/MPV/Honda-Mobilio.png', '116 hp', '5 doors', 'manually', '1496 cc', 'Profil ban mencukupi dan tidak mengalami keausan berlebihan. serta tekanan udara sesuai dengan rekomendasi produsen. Velg tidak rusak. baut roda terpasang dengan benar. dan roda berputar secara lurus.', 'gasoline oil', 450000),
(11, 'Toyota Avanza', 'images/MPV/Toyota-Avanza.png', '97 hp', '5 doors', 'manually', '1496 cc', 'Interior mobil terjaga kebersihannya dan bebas dari bau tidak sedap atau tanda-tanda kelembaban. Sistem transmisi berfungsi dengan baik. melakukan perpindahan gigi dengan respons yang baik.  Tidak ada kerusakan signifikan pada bodi mobil. dan cat masih dalam kondisi baik.', 'gasoline oil', 450000),
(12, 'Toyota Kijang Inova', 'images/MPV/Toyota-Kijang-Innova.png', '137 hp', '5 doors', 'automatic', '1998 cc', 'Semua lampu (depan. belakang. lampu rem. lampu sein) berfungsi dengan baik. serta indikator dashboard.  Peralatan darurat seperti dongkrak. kunci roda. dan segitiga pengaman ada dan dalam kondisi baik. Mesin berfungsi dengan baik tanpa bunyi aneh atau tanda-tanda kebocoran minyak.', 'gasoline oil', 700000),
(13, 'BMW Series 5', 'images/Sedan/BMW-Series-5.png', '252 hp', '5 doors', 'automatic', '1998 cc', 'Tidak ada kerusakan signifikan pada bodi mobil. dan cat masih dalam kondisi baik. Sistem rem berfungsi efektif dan merata pada semua roda. tanpa gejala aus atau bocor. Kursi dan dudukan dalam kondisi baik tanpa kerusakan atau sobekan yang signifikan.', 'gasoline oil', 700000),
(14, 'Honda Acor', 'images/Sedan/Honda-Acor.png', '243 hp', '4 doors', 'E-CVT', '1993 cc', 'Mesin beroperasi tanpa bunyi aneh. responsif terhadap akselerasi. dan bebas dari kebocoran. Sistem transmisi bekerja dengan mulus. melakukan perpindahan gigi dengan respons yang baik. idak ada kerusakan besar pada bodi mobil. cat masih bersih dan utuh. tanpa retakan atau mengelupas.', 'gasoline oil', 450000),
(15, 'Suzuki Ciaz', 'images/Sedan/Suzuki-Ciaz.png', '91 hp', '4 doors', 'manually', '1373 cc', 'Profil ban mencukupi. tanpa keausan berlebihan. dan tekanan udara sesuai dengan rekomendasi produsen. Peralatan darurat seperti dongkrak. kunci roda. dan segitiga pengaman tersedia dan dalam kondisi baik. Sistem AC dan pemanas beroperasi dengan baik. memberikan kenyamanan pada pengaturan suhu.', 'gasoline oil', 800000),
(16, 'Toyota Vios 2020', 'images/Sedan/Toyota-Vios-2020.png', '105.5 hp', '4 doors', 'automatic CVT', '1500 cc', ' Kaca bebas dari pecah atau retakan. dan semua lampu eksterior berfungsi dengan baik.  Semua sistem audio. kaca elektrik. dan perangkat elektronik berfungsi sesuai dengan spesifikasinya. Tidak ada kerusakan besar pada bodi mobil. cat masih bersih dan utuh. tanpa retakan atau mengelupas.', 'gasoline oil', 350000),
(17, 'Daihatsu Rocky', 'images/SUV/Daihatsu-Rocky.png', '97 hp', '5 doors', 'manually', '998 cc', 'Interior mobil terjaga kebersihannya. bebas dari bau tidak sedap atau kelembaban.  Mesin beroperasi tanpa bunyi aneh. responsif terhadap akselerasi. dan bebas dari kebocoran. Kursi dan panel dalam kondisi baik. tanpa sobekan atau kerusakan yang signifikan.', 'gasoline oil', 500000),
(18, 'Honda BRV', 'images/SUV/Honda-BRV.png', '119 hp', '5 doors', 'manually', '1498 cc', 'idak ada kerusakan signifikan pada bodi mobil. dan cat masih dalam kondisi baik tanpa retakan atau mengelupas. Kaca tidak retak atau pecah. dan semua lampu (depan. belakang. lampu rem) berfungsi dengan baik. Mesin beroperasi tanpa bunyi aneh. bebas dari kebocoran. dan memberikan kinerja yang stabil.', 'gasoline oil', 700000),
(19, 'Toyota Fortuner', 'images/SUV/ToyotaFortuner.png', '161 hp', '5 doors', 'automatic', '2694 cc', 'Sistem AC dan pemanas beroperasi dengan baik.  Interior mobil bersih. bebas bau tidak sedap. dan bebas dari tanda-tanda kelembaban atau jamur. Rem berfungsi efektif pada semua roda. pedal rem responsif. dan tidak ada tanda-tanda keausan berlebihan pada sistem pengereman.', 'gasoline oil', 1750000),
(20, 'Wuling Almaz', 'images/SUV/WUling-Almaz.png', '140 hp', '4 doors', 'CVT', '1451 cc', 'Rem berfungsi efektif pada semua roda. pedal rem responsif. dan tidak ada tanda-tanda keausan berlebihan pada sistem pengereman. Sistem transmisi bekerja dengan mulus. perpindahan gigi responsif. dan tidak ada gejala slipping. Semua indikator dan tombol di dashboard berfungsi dengan baik.', 'gasoline oil', 950000),
(21, 'Honda Brio RS', 'images/Hatchback/Honda-Brio-RS.png', '89 hp', '5 doors', 'manually', '1199 cc', 'Ban memiliki profil yang mencukupi dan tidak mengalami keausan berlebihan.  Peralatan darurat seperti dongkrak. kunci roda. dan segitiga pengaman ada dan dalam kondisi baik. Mesin mobil dalam kondisi baik.', 'gasoline oil', 450000),
(22, 'Nissan March', 'images/Hatchback/Nissan-March-LATAM.png', '75 hp', '5 doors', 'manually', '1198 cc', 'Kondisi mobil baik. Sistem rem berfungsi efektif dan merata pada semua roda. tanpa gejala aus atau bocor. Semua lampu depan. belakang. dan lampu rem berfungsi dengan baik. Ban memiliki profil yang mencukupi. dan tekanan angin sesuai dengan rekomendasi pro', 'gasoline oil', 500000),
(23, 'Toyota Agya', 'images/Hatchback/Toyota-AGYA.png', '87 hp', '5 doors', 'manually', '1198 cc', 'kondisi mesin mobil baik.  Suspensi memberikan kenyamanan dan stabilitas. serta kemudi merespons tanpa getaran atau kebocoran. Interior mobil terjaga kebersihannya. bebas dari bau tidak sedap atau kelembaban.', 'gasoline oil', 400000),
(24, 'Toyota Yaris', 'images/Hatchback/Toyota-Yaris.png', '106 hp', '5 doors', 'manually', '1496 cc', 'Interior mobil terjaga kebersihannya dan bebas dari bau tidak sedap atau tanda-tanda kelembaban.  Kaca tidak retak atau pecah. dan semua lampu (depan. belakang. lampu rem) berfungsi dengan baik. Mesin beroperasi dengan baik.', 'gasoline oil', 600000);

-- --------------------------------------------------------

--
-- Table structure for table `hatchback`
--

CREATE TABLE `hatchback` (
  `id_mobil` int(11) NOT NULL,
  `nama_hb` varchar(50) NOT NULL,
  `gambar_hb` varchar(100) NOT NULL,
  `harga_hb` double NOT NULL,
  `transmisi_hb` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hatchback`
--

INSERT INTO `hatchback` (`id_mobil`, `nama_hb`, `gambar_hb`, `harga_hb`, `transmisi_hb`) VALUES
(21, 'Honda BRIO RS', 'images/Hatchback/Honda-Brio-RS.png', 450000, 'Manually'),
(22, 'Nissan March', 'images/Hatchback/Nissan-March-LATAM.png', 500000, 'Manually'),
(23, 'Toyota AGYA', 'images/Hatchback/Toyota-AGYA.png', 400000, 'Manually'),
(24, 'Toyota Yaris', 'images/Hatchback/Toyota-Yaris.png', 600000, 'Manually');

-- --------------------------------------------------------

--
-- Table structure for table `mpv`
--

CREATE TABLE `mpv` (
  `id_mobil` int(11) NOT NULL,
  `nama_mpv` varchar(50) NOT NULL,
  `gambar_mpv` varchar(100) NOT NULL,
  `harga_mpv` int(11) NOT NULL,
  `transmisi_mpv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mpv`
--

INSERT INTO `mpv` (`id_mobil`, `nama_mpv`, `gambar_mpv`, `harga_mpv`, `transmisi_mpv`) VALUES
(9, 'Daihatsu Terios 2019', 'images/MPV/Daihatsu-Terios.png', 450000, 'Automatic'),
(10, 'Honda Mobilio', 'images/MPV/Honda-Mobilio.png', 450000, 'Manually'),
(11, 'Toyota Avanza', 'images/MPV/Toyota-Avanza.png', 450000, 'Manually'),
(12, 'Kijang Innova', 'images/MPV/Toyota-Kijang-Innova.png', 700000, 'Automatic');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `car_id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `nama_mobil` varchar(50) NOT NULL,
  `harga` double NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `durasi_sewa` int(11) NOT NULL,
  `total_harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`car_id`, `username`, `nama_mobil`, `harga`, `nama_lengkap`, `no_hp`, `tanggal_mulai`, `durasi_sewa`, `total_harga`) VALUES
(20, 'rangga12', 'BMW Series 5', 700000, 'JonathanPD', '082151471005', '2024-03-08', 3, 2100000);

-- --------------------------------------------------------

--
-- Table structure for table `sedan`
--

CREATE TABLE `sedan` (
  `id_mobil` int(11) NOT NULL,
  `nama_sedan` varchar(50) NOT NULL,
  `gambar_sedan` varchar(100) NOT NULL,
  `harga_sedan` double NOT NULL,
  `transmisi_sedan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sedan`
--

INSERT INTO `sedan` (`id_mobil`, `nama_sedan`, `gambar_sedan`, `harga_sedan`, `transmisi_sedan`) VALUES
(14, 'Honda Acor', 'images/Sedan/Honda-Acor.png', 450000, 'E-CVT'),
(13, 'BMW Series 5', 'images/Sedan/BMW-Series-5.png', 700000, 'Automatic'),
(16, 'Toyota Vios 2020', 'images/Sedan/Toyota-Vios-2020.png', 350000, 'Automatic-CVT'),
(15, 'Suzuki Ciaz', 'images/Sedan/Suzuki-Ciaz.png', 800000, 'Manually');

-- --------------------------------------------------------

--
-- Table structure for table `suv`
--

CREATE TABLE `suv` (
  `id_mobil` int(11) NOT NULL,
  `nama_suv` varchar(50) NOT NULL,
  `gambar_suv` varchar(100) NOT NULL,
  `harga_suv` int(11) NOT NULL,
  `transmisi_suv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suv`
--

INSERT INTO `suv` (`id_mobil`, `nama_suv`, `gambar_suv`, `harga_suv`, `transmisi_suv`) VALUES
(17, 'Daihatsu Rocky', 'images/SUV/Daihatsu-Rocky.png', 500000, 'Manually'),
(18, 'Honda BRV', 'images/SUV/Honda-BRV.png', 700000, 'Manually'),
(19, 'Toyota Fortuner', 'images/SUV/ToyotaFortuner.png', 1750000, 'Automatic'),
(20, 'Wuling Almaz', 'images/SUV/WUling-Almaz.png', 950000, 'CVT');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`, `name`) VALUES
('anharK', 'anhark@gmail.com', '$2y$10$vE4Btue9.1ILRzLi3Aq4leS7nu1XxNOM5D8hUsfLLIprXZqviRdbS', 'Anhar Kurniawan'),
('jonathanpd', 'jonathanpratamadinatha@gmail.com', '$2y$10$LRaXUM6s0DtQ0xQEq51WberRRYUqMP1fyZC1DDmJQTX9rWQ0hAW/2', 'Jonathan Pratama D'),
('rangga12', 'rangga@gmail.com', '$2y$10$fi9KD3xJjbPu3X/ut37iueqIuSh7tpI1UDAuKh0JsEwmTcB86VQtu', 'Rangga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
