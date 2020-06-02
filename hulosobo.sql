-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2020 at 06:45 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hulosobo`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `tgl` date NOT NULL,
  `slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `foto`, `isi`, `penulis`, `tgl`, `slug`) VALUES
(14, 'Profil Desa Hulosobo, Kaligesing, Purworejo, Jawa Tengah', 'profil.jpg', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Munculnya Desa Hulosobo tidak terlepas dari peristiwa sejarah yang terjadi di Indonesia, khususnya Purworejo. Pada masa Perang Diponegoro sekitar tahun 1830, ada seorang pengikut Pangeran Diponegoro yang tidak mau menyebutkan jati dirinya. Beliau hanya mengaku sebagai Panembahan Sang Ki. Panembahan Sang Ki merupakan seorang pengikut yang melarikan diri ke hutan belantara di wilayah perbukitan Menoreh, yaitu wilayah sebelah barat Yogyakarta sampai di suatu wilayah yang masih sedikit penduduknya dan belum memiliki nama. Beliau melarikan diri dari Belanda setelah peristiwa penangkapan Pangeran Diponegoro, sehingga merahasiakan identitasnya.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pada wilayah tersebut beliau mendirikan padepokan yang diberi nama Andha Sewu, berada pada Bukit Sebucu. Kata Andha Sewu merujuk pada jalan menuju padepokan yang menyerupai tangga yang berundak-undak dari Sumur Sebatur sampai puncak Bukit Sebucu. Saat melarikan diri, beliau membawa tujuh orang rekan, kemudian mengundang rekan lain yaitu Ki Sobo Kerto dan Nyi Sobo Kerto (nama samaran).</p>\r\n\r\n<p>Sang Ki memerintahkan Ki Sobo kerto dan Nyi Sobo Kerto beserta pengikutnya menuju padepokan Andha Sewu dan menugaskan untuk menyediakan logistik perjuangan Pangeran Diponegoro. Suatu ketika, Ki Sobo Kerto dan Nyi Sobo Kerto menghilang dan ditemukan di Kayu Lawang (sekarang menjadi tempat pemakaman umum Desa Hulosobo) hanya tersisa tulang belulangnya karena dimakan harimau. Dalam bahasa Jawa kematian dua orang itu disebut sebagai &ldquo;diucel-ucel macan&rdquo; sehingga di Desa Hulosobo Ki Sobo Kerto dan Nyi Sobo Kerto dikenal sebagai Kyai Ucel dan Nyai Ucel.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Setiap kali ditanyai asal-usulnya, Panembahan Sang Ki hanya menjawab, &ldquo;Kawulo Sesobo&rdquo; atau kawulo berarti saya dan sesobo berarti berkelana. Dari kata tersebut lambat laun istilah Kawulo Sesobo berubah menjadi Kulo sobo, hingga akhirnya wilayah tersebut diberi nama Hulosobo. Pemberian nama tersebut terjadi pada bulan Rajab sekitar tahun 1840. Untuk mengenang peristiwa tersebut, pada setiap bulan Rajab sampai sekarang diperingati dengan acara Merti Desa.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Setelah Panembahan Sang Ki menetap di Padepokan Andha Sewu, datang utusan dari Kerajaan Mataram (Yogyakarta) bernama Ki Bandawi yang ditugaskan untuk menjemput Panembahan Sang Ki kembali ke Keraton Mataram. Namun Panembahan Sang Ki tidak mau kembali ke keraton, ia tetap tinggal di Padepokan Andha Sewu sampai akhir hayatnya dan dimakamkan di Kayu Lawang. Ki Bandawi pun akhirnya ikut menetap di Andha Sewu hingga meninggal dan dimakamkan di dekat makam Panembahan Sang Ki di Kayu Lawang. Panembahan Sang Ki beserta pengikutnya sampai saat ini dijadikan Pepunden/Perintis Desa Hulosobo.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sepeninggalan Panembahan Sang Ki, masyarakat Hulosobo mulai mencari pemimpin/lurah desa. Sampai saat ini sudah ada 10 lurah yang memimpin Desa Hulosobo, namun karena kurangnya pencatatan, hanya 9 lurah saja yang masih diketahui namanya. Lurah yang pernah memimpin Desa Hulosobo antara lain :</p>\r\n\r\n<p>1.&nbsp;&nbsp;&nbsp;&nbsp;Rono Wijoyo</p>\r\n\r\n<p>2.&nbsp;&nbsp;&nbsp;&nbsp;Kerto Wijoyo</p>\r\n\r\n<p>3.&nbsp;&nbsp;&nbsp;&nbsp;Joyo Wijoyo</p>\r\n\r\n<p>4.&nbsp;&nbsp;&nbsp;&nbsp;Cokrorejo</p>\r\n\r\n<p>5.&nbsp;&nbsp;&nbsp;&nbsp;Padmo Wijoyo (1945-1976)</p>\r\n\r\n<p>6.&nbsp;&nbsp;&nbsp;&nbsp;Supardi Kerto Sentono (1976-1989)</p>\r\n\r\n<p>7.&nbsp;&nbsp;&nbsp;&nbsp;Sukirman (1989-1997)</p>\r\n\r\n<p>8.&nbsp;&nbsp;&nbsp;&nbsp;T. Soenaryo (1997-2007)</p>\r\n\r\n<p>9.&nbsp;&nbsp;&nbsp;&nbsp;Ngatiyah (2007-sekarang)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Pasca Kemerdekaan</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Setelah Indonesia merdeka, pihak Belanda yang belum menerima kekalahan mulai melakukan agresi militer ke Wilayah Indonesia. Pada saat Agresi Militer Belanda ke-2, sebagian wilayah Jawa menjadi incaran agresi tersebut, Salah satunya Kabupaten Purworejo. Saat pihak Belanda menyerbu Purworejo dan mencari pemimpinnya, bupati pada masa itu yaitu Muritno mengasingkan diri ke wilayah Hulosobo mengingat wilayah tersebut masih sedikit penduduknya.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Selama Agresi Militer Belanda ke-2, pemerintahan Purworejo untuk sementara dikendalikan dari Hulosobo, sehingga secara tidak langsung Desa Hulosobo pernah menjadi ibukota Purworejo meskipun hanya sementara. Untuk meresmikan pindahnya pusat pemerintahan, Bupati Muritno menulis di sebuah batu dengan aksara jawa dengan isi bahwa Kabupaten Purworejo dikendalikan dari Hulosobo. Namun batu tersebut sekarang sudah hancur dan dijadikan pondasi rumah karena ketidaktahuan masyarakat akan pentingnya batu/monumen tersebut.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Setelah Agresi Militer Belanda reda, Bupati Muritno kembali ke kantornya yang berada di Kota. Sebagai rasa terima kasih terhadap masyarakat Hulosobo, pada saat kembali ke kota bupati Muritno membawa beberapa warga Hulosobo untuk bekerja di Kantor Pemerintahan Purworejo.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Struktur Desa Hulosobo (2016)</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kepala Desa&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Ngatiyah</p>\r\n\r\n<p>Sekretaris Desa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Sumaryanto</p>\r\n\r\n<p>Kaur Pemerintahan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Sanusi</p>\r\n\r\n<p>Kaur Kemasyarakatan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Sudi Utomo</p>\r\n\r\n<p>Kaur Pembangunan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rakhmat Basuki</p>\r\n\r\n<p>Kaur Keuangan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Asman</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Potensi Desa Hulosobo</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Masyarakat Desa Hulosobo sebagian besar bekerja sebagai petani dan peternak. Di desa ini sudah ada kelompok tani atau GAPOKTAN (Gabungan Kelompok Tani). Hasil bumi yang dapat ditemukan di Desa Hulosobo antara lain seperti cengkeh, manggis, durian, kelapa, dan kelengkeng. Sampai sekarang masih perlu adanya peningkatan pengelolaan terhadap hasil bumi tersebut karena kebanyakan hasil bumi yang ada langsung dijual mentah tanpa diolah dahulu, sehingga produksi desa masih kurang.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sedangkan dari sisi peternak Desa Hulosobo hampir semua masyarakatnya memiliki hewan ternak berupa kambing PE (Peranakan Etawa). Dulu Hulosobo pernah menjadi pusat bibit peranakan etawa dengan kualitas paling bagus di Kecamatan Kaligesing, namun karena banyak pejantan yang dijual sehingga sekarang mulai menghilangnya bibit peranakan etawa unggulan di Hulosobo.&nbsp;</p>\r\n', 'Administrator', '2020-06-01', 'profil-desa-hulosobo-kaligesing-purworejo-jawa-tengah.html'),
(15, 'Visi dan Misi Desa Hulosobo', 'misi.jpg', '<h3><strong>1.&nbsp;</strong><strong>Visi Pembangunan Desa</strong></h3>\r\n\r\n<p>Dengan adanya berbagai rencana pembangunan strategis baik regional maupun nasional yang akan dilaksanakan oleh Pemerintah Propinsi&nbsp; Jawa Barat maupun Pemerintah Pusat menjadikan Kebupaten Majalengka umumnya dan masyarakat Desa Kodasari khususnya akan mendapatkan berbagai limpahan manfaat yang besar Pembangunan &ndash; pembangunan strategis diantaranya :</p>\r\n\r\n<ul>\r\n	<li>Rencana Jalan Tol Cikopo &ndash; Palimanan</li>\r\n	<li>Rencana Jalan Tol Cileunyi &ndash; Sumedang &ndash; Kertajati</li>\r\n	<li>Pembangunan Pelabuhan Laut Nasional di Cirebon</li>\r\n	<li>Rencana Bandara Internasional Jawa Barat (BIJB)</li>\r\n	<li>Relokasi Kawasan Industri Tekstil dan Produk Tekstil (TPT)</li>\r\n	<li>Rencana Pembangunan Waduk Jatigede</li>\r\n</ul>\r\n\r\n<p>Memperhatikan proyeksi pembangunan seperti tersebut di atas maka Pemerintah&nbsp; Desa Kodasari perlu ekstra perhatian dalam menangkap peluang pembangunan&nbsp; terutama dalam mengantisipasi dan mensikapi perubahan-perubahan yang muncul sebagai dampak dari pembangunan tersebut.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Berbagai permasalahan yang masih dihadapi oleh Desa Kodasari terutama masih rentannya tingkat kemiskinan sebagai dampak dari internal maupun sebagai dampak global adalah merupakan tantangan kedepan yang perlu dipecahkan bersama melalui penyelenggaraan kepemerintahan yang berpihak kepada rakyat yang didukung keterlibatan dan partisipasi masyarakat dan seluruh stake holder.</p>\r\n\r\n<p>Berdasarkan beberapa pertimbangan tersebut di atas dan komitmen yang berkembang di masyarakat, Desa Kodasari menetapkan visi Pembangunan Desa 2008-2014 yaitu &rdquo;<em>TERWUJUDNYA KEHIDUPAN MASYARAKAT DESA KODASARI YANG&nbsp; RELIGIUS, AMAN,&nbsp; HARMONIS, MAJU, ADIL, DAN TERTIB&nbsp;<strong>(RAHMAT) .</strong></em>&nbsp;&ldquo;<em>&nbsp;</em>dengan misi :</p>\r\n\r\n<ol>\r\n	<li>Meningkatkan kualitas kehidupan beragama dalam mewujudkan masyarakat Kodasari yang beriman dan bertaqwa</li>\r\n	<li>Meningkatkan sistem keamanan swakarsa dalam upaya terciptanya rasa aman di masyarakat Kodasari</li>\r\n	<li>Mewujudkan harmonisasi antar kelembagaan yang ada di Desa Kodasari sehingga terjalin sinergitas kinerja yang optimal</li>\r\n	<li>Mengembangkan kecakapan dan ketrampilan masyarakat Kodasari menuju kemajuan dan peningkatan&nbsp; kesejahtraan</li>\r\n	<li>Optimalisasi pelayanan umum yang berkeadilan bagi seluruh masyarakat Desa Kodasari</li>\r\n	<li>Meningkatkan pemberdayaan masyarakat menuju tertibnya partisipasi dan peranserta masyarakat dalam seluruh aspek pembangunan di Desa Kodasari</li>\r\n</ol>\r\n\r\n<p>Sedangkan arah kebijakan pembangunan ditujukan untuk mewujudkan kulaitas sumberdaya manusia melalui peningkatan derajat kesehatan, peningkatan kualitas pendidikan, peningkatan pemahaman dan pengamalan agama, pengendalian jumlah penduduk, peningkatan peran pemuda dan perempuan dalam pembangunan,&nbsp; peningkatan kualitas tenaga kerja dan pengentasan bagi penyandang masalah kesejahteraan sosial.</p>\r\n\r\n<p>&nbsp;Mewujudkan perekonomian yang stabil melalui pengembangan pertanian, peningkatan nilai tambah produk pertanian, pengembangan produk unggulan,</p>\r\n\r\n<p>Mewujudkan infrastruktur yang proporsional dan berkelanjutan melalui peningkatan kualitas dan kuantitas infrastruktur transportasi, peningkatan kualitas dan kuantitas jaringan irigasi, peningkatan kualitas dan cakupan pelayanan air minum,&nbsp; pengembangan perumahan.</p>\r\n\r\n<p>Mewujudkan tata kelola pemerintahan yang baik melalui peningkatan kualitas aparatur pemerintah desa, dan peningkatan partisipas masyarakat dalam pembangunan.; Mewujudkan kelestarian lingkungan hidup melalui pelestarian sumberdaya alam dan lingkungan hidup.</p>\r\n\r\n<p>Dalam rangka peningkatan kesejahteraan masyarakat sasaran pembangunan bukan hanya difokuskan pada pertumbuhan ekonomi, melainkan juga pada peningkatan kualitas Sumberdaya Manusia (SDM).</p>\r\n\r\n<p>Dengan peningkatan kualitas SDM, diharapkan mampu mengelola potensi desa secara optimal, memenuhi tuntutan kebutuhan dan kemajuan pembangunan Desa Kodasari serta mampu menempatkan manusia sebagai titik sentral, sehingga masyarakat bukan hanya sebagai objek pembangunan tapi juga sebagai subjek yag mampu berperan aktif dalam semua proses kegiatan pembangunan.</p>\r\n\r\n<p>Sebagai akselerasi untuk mewujudkan kesinambungan pembangunan dan cita-cita tersebut, maka Pemerintah Desa Kodasari menetapkan visi Rencana Pembangunan Jangka Menengah (2011-2017) sebagai&nbsp;<em>panduan</em>&nbsp;dalam pelaksanaan pembangunan selama 6 tahun yaitu :</p>\r\n\r\n<p>&rdquo;<em>TERWUJUDNYA KEHIDUPAN MASYARAKAT DESA KODASARI YANG&nbsp; RELIGIUS, AMAN,&nbsp; HARMONIS, MAJU, ADIL, DAN TERTIB&nbsp;<strong>(RAHMAT) &ldquo;.</strong></em></p>\r\n\r\n<p>Penjabaran makna dari Visi Pemerintah Desa Kodasari tersebut adalah sebagai berikut :</p>\r\n\r\n<p><strong>Religius&nbsp;</strong>:Mengandung makna suatu kondisi dimana masyarakat Desa Kodasari dapat meningkatkan pemahaman ajaran agama dan pengamalan agamanya dalam tatanan kehidupan masyarakat.</p>\r\n\r\n<p><strong>Aman&nbsp;</strong>: Mengandung makna terwujudnya Desa Kodasari yang lebih baik dengan meningkatnya sistem keamanan swakarsa dalam upaya terciptanya rasa aman pada masyarakat Kodasari</p>\r\n\r\n<p><strong>Harmonis&nbsp;</strong>: Mengandung makna suatu keadaan dimana terjalinan tata hubungan kerja antar lembaga yang ada di desa sehingga tercipta sinergitas kerja yang optimal dalam pembangunan masyarakat Desa Kodasari.</p>\r\n\r\n<p><strong>Maju :&nbsp;</strong>Mengandung makna meningkatkan dan pengembangan kecakapan hidup dan ketrampilan masyarakat agar tumbuh kemandirian menuju kemajuan kehidupan dan peningkatan kesejahtraan masyarakat Kodasari</p>\r\n\r\n<p><strong>Adil :&nbsp;</strong>Mengandung makna adanya keseimbangan antara hak dan kewajiban masyarakat dalam memperoleh pelayanan publik</p>\r\n\r\n<p><strong>Tertib :&nbsp;</strong>Mengandung makna optimalisasi dari peran serta masyarakat dalam pembangunan melalui pemberdayaan dan partisipasi aktif yang terarah terpadu serta berketertiban</p>\r\n\r\n<h3><strong>2. Misi Pembangunan Desa</strong></h3>\r\n\r\n<p>Dalam Rangka mencapai visi yang telah ditetapkan, maka Visi tersebut diimplementasikan dalam beberapa misi pembangunan sebagai berikut :</p>\r\n\r\n<ol>\r\n	<li>Meningkatkan kualitas kehidupan beragama dalam mewujudkan masyarakat Majalengka beriman dan bertaqwa.</li>\r\n	<li>Meningkatkan kualitas pendidikan dan kesehatan yang merata dan terjangkau.</li>\r\n	<li>Meningkatkan ekonomi kerakyatan yang berbasis agribisnis.</li>\r\n	<li>Meningkatkan pelayanan aparatur desa bagi pemenuhan pelayanan publik.</li>\r\n	<li>Optimalisasi Otonomi Desa melalui Pemberdayaan masyarakat</li>\r\n	<li>Meningkatkan Pembangunan Infrastruktur yang Proporsional, berkualitas dan berkelanjutan</li>\r\n</ol>\r\n\r\n<p>Sasaran yang ingin dicapai dari masing-masing misi tersebut sebagai beikut :</p>\r\n\r\n<p><strong>1.&nbsp;</strong><strong>Meningkatkan kualitas kehidupan beragama dalam mewujudkan masyarakat Kodasari beriman dan bertaqwa.</strong></p>\r\n\r\n<p><strong>Sasaran :</strong></p>\r\n\r\n<p>Terwujudnya kehidupan beragama dan bermasyarakat yang rukun, toleran, aman, nyaman&nbsp; dan berbudaya dengan tatanan masyarakat yang bertaqwa, memahami, dan mengamalkan nilai luhur ajaran agama serta menjunjung tinggi nilai-nilai kearifan budaya lokal yang diimplementasikan pada setiap bentuk kehidupannya.</p>\r\n\r\n<p><strong>2.&nbsp;</strong><strong>Meningkatkan kualitas pendidikan dan kesehatan yang merata dan terjangkau.</strong></p>\r\n\r\n<p><strong>Sasaran :</strong></p>\r\n\r\n<p>Meningkatnya Aksesibilitas, dan kualitas pendidikan dan kesehatan bagi seluruh warga masyarakat Kodasari.</p>\r\n\r\n<p><strong>3.&nbsp;</strong><strong>Meningkatkan ekonomi kerakyatan yang berbasis agribisnis.</strong></p>\r\n\r\n<p><strong>Sasaran :</strong></p>\r\n\r\n<p>Meningkatnya perekonomian desa dengan mengembangkan berbagai potensi unggulan desa terutama sektor pertanian dalam suatu sistem pembangunan agribisnis dengan basis ekonomi kerakyatan yang ditopang oleh usaha mikro, kecil, menengah dan koperasi</p>\r\n\r\n<p><strong>4.&nbsp;</strong><strong>Meningkatkan pelayanan aparatus desa&nbsp; bagi pemenuhan pelayanan publik.</strong></p>\r\n\r\n<p><strong>Sasaran :</strong></p>\r\n\r\n<p>Terciptanya sistem yang transparan, profesional, bersih dan akuntabel sehingga dapat meningkatkan pelayanan umum berdasarkan standar pelayanan minimal.</p>\r\n\r\n<p><strong>5.&nbsp;</strong><strong>Optimalisasi Otonomi Desa melalui pemberdayaan masyarakat.</strong></p>\r\n\r\n<p><strong>Sasaran :</strong></p>\r\n\r\n<p>Meningkatnya kapasitas pemerintahan desa dalam mengatur dan mengurus rumah tangganya sendiri dengan&nbsp; memberdayakan potensi masyarakat desa untuk meningkatkan pelayanan dan kesejahteraan masyarakat desa.</p>\r\n\r\n<p><strong>6.&nbsp;</strong><strong>Meningkatkan Pembangunan Infrastruktur</strong></p>\r\n\r\n<p><strong>Sasaran :</strong></p>\r\n\r\n<p>Tersedianya sarana dan prasarana infrastruktur desa dalam rangka mendukung peningkatan aktifitas sosial ekonomi dan budaya masyarakat, termasuk infrastruktur dasar perdesaan serta pengembangan potensi pusat&ndash;pusat pertumbuhan dengan memperhatikan daya dukung dan daya tampung.</p>\r\n\r\n<h3><strong>3. Program dan Kegiatan Pembangunan Desa</strong></h3>\r\n\r\n<p>sebagai upaya dalam mempercepat pencapaian visi, misi dan sasaran pembangunan, maka ditetapkan prioritas pembangunan yang akan menjadi fokus Penyelenggaraan pembangunan Kepala Desa selama 6 tahun (2011 -2017).</p>\r\n\r\n<p><strong>3.1.&nbsp;</strong><strong>Arah Kebijakan Prioritas Pembangunan</strong></p>\r\n\r\n<p>Dalam rangka mewujudkan prioritas pembangunan 6 tahun kedepan, ditempuh melalui 4 arah kebijakan pembangunan pembangunan, yaitu :</p>\r\n\r\n<ol>\r\n	<li>Meningkatkan kualitas Sumberdaya manusia dalam rangka meningkatkan kualitas kehidupan masyarakat desa Kodasari;</li>\r\n	<li>Mengembangkan perekonomian masyarakat yang stabil melalui optimalisasi pemanfaatan potensi dan sumberdaya yang dimiliki desa Kodasari dengan tetap memperhatikan kualitas dan kelestarian lingkungan hidup;</li>\r\n	<li>Optimalisasi fungsi lembaga pemerintahan desa dalam upaya peningkatan pelayanan publik;</li>\r\n	<li>Melaksanakan pembangunan infrastruktur/sarana prasarana dasar&nbsp; sebagai penunjang kegiatan sosial ekonomi masyarakat.</li>\r\n</ol>\r\n\r\n<p><strong>3.2. Strategi Prioritas Pembangunan</strong></p>\r\n\r\n<p>Dalam rangka mewujudkan prioritas pembangunan 6 tahun kedepan, maka ditetapkan&nbsp;<strong>Strategi Rahmat</strong>&nbsp;(<em>RELIGIUS, AMAN,&nbsp; HARMONIS, MAJU, ADIL, dan TERTIB</em>&nbsp;) yang&nbsp; ditempuh melalui 6 pilar strategi prioritas pembangunan, yaitu :</p>\r\n\r\n<p><strong>Religius&nbsp;</strong>: Mengandung makna suatu kondisi dimana masyarakat Desa Kodasari dapat meningkatkan pemahaman ajaran agama dan pengamalan agamanya dalam tatanan kehidupan masyarakat.</p>\r\n\r\n<p><strong>Aman&nbsp;</strong>: Mengandung makna terwujudnya Desa Kodasari yang lebih baik dengan meningkatnya sistem keamanan swakarsa dalam upaya terciptanya rasa aman pada masyarakat Kodasari.</p>\r\n\r\n<p><strong>Harmonis&nbsp;</strong>: Mengandung makna suatu keadaan dimana terjalinan tata hubungan kerja antar lembaga yang ada di desa sehingga tercipta sinergitas kerja yang optimal dalam pembangunan masyarakat Desa Kodasari.</p>\r\n\r\n<p><strong>Maju&nbsp;</strong>: Mengandung makna meningkatkan dan pengembangan kecakapan hidup dan ketrampilan masyarakat agar tumbuh kemandirian menuju kemajuan kehidupan dan peningkatan kesejahtraan masyarakat Kodasari.</p>\r\n\r\n<p><strong>Adil :&nbsp;</strong>Mengandung makna adanya keseimbangan antara hak dan kewajiban masyarakat dalam memperoleh pelayanan public.</p>\r\n\r\n<p><strong>Tertib :&nbsp;</strong>Mengandung makna optimalisasi dari peran serta masyarakat dalam pembangunan melalui pemberdayaan dan partisipasi aktif yang terarah terpadu serta berketertiban.</p>\r\n\r\n<p><strong>3.3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>Kebijakan dan Prioritas Program Pembangunan</strong></p>\r\n\r\n<p>Kebijakan pembangunan merupakan penjabaran dari arah dan strategi untuk mewujudkan prioritas pembangunan serta merupakan upaya dalam memecahkan permasalahan yang dihadapi. Kebijakan pembangunan ini akan menjadi pedoman dalam melaksanakan program dan kegiatan selama periode tahun 2011-2017yang dijabarkan melalui :</p>\r\n\r\n<p>1.&nbsp;&nbsp;&nbsp; Meningkatkan kualitas kehidupan beragama dalam mewujudkan masyarakat Majalengka beriman dan bertaqwa.</p>\r\n\r\n<p>Program Prioritas :</p>\r\n\r\n<ul>\r\n	<li>Program Peningkatan Pemahaman dan Pengamalan Agama.</li>\r\n	<li>Program Peningkatan Kerukunan Antar Umat Beragama.</li>\r\n	<li>Program Peningkatan Kelestarian Dan Pemeliharaan Kearifan Budaya Lokal.</li>\r\n</ul>\r\n\r\n<p>2.&nbsp;&nbsp;&nbsp; Meningkatkan kualitas pendidikan dan kesehatan yang merata dan terjangkau.</p>\r\n\r\n<p>Program Prioritas :</p>\r\n\r\n<ul>\r\n	<li>Program Peningkatan Pendidikan Masyarakat.</li>\r\n	<li>Program Peningkatan Derajat Kesehatan Masyarakat.</li>\r\n</ul>\r\n\r\n<p>&nbsp;3.&nbsp;&nbsp;&nbsp; Mengembangkan ekonomi kerakyatan yang berbasis agribisnis.</p>\r\n\r\n<p>Program Prioritas :</p>\r\n\r\n<ul>\r\n	<li>Program Peningkatan Produksi dan produktifitas Pertanian/ perkebunan/Kehutanan.</li>\r\n	<li>Program Pengembangan UMKM dan Koperasi.</li>\r\n	<li>Program Pengembangan Investasi.</li>\r\n</ul>\r\n\r\n<p>4.&nbsp;&nbsp;&nbsp; Reformasi birokrasi bagi pemenuhan pelayanan umum.</p>\r\n\r\n<p>Program Prioritas :</p>\r\n\r\n<ul>\r\n	<li>Program Penataan Kelembagaan dan Ketatalaksanaan Pemerintahan Daerah Yang Efektif dan Efisien.</li>\r\n	<li>Program Meningkatkan kapasitas aparatur yang bersih dan profesional.</li>\r\n</ul>\r\n\r\n<p>&nbsp;5.&nbsp;&nbsp;&nbsp; Optimalisasi Pemerintahan Desa.</p>\r\n\r\n<p>Program Prioritas :</p>\r\n\r\n<ul>\r\n	<li>Program Peningkatan kapasitas pemerintahan desa.</li>\r\n	<li>Program Pemberdayaan Lembaga &ndash; lembaga Desa.</li>\r\n	<li>Program Pengembangan Partisipasi Masyarakat dalam pembangunan.</li>\r\n</ul>\r\n\r\n<p>6. Meningkatkan Pembangunan Infrastruktur yang Mendukung Peningkatan Sosial Ekonomi Masyarakat Secara Proporsional, berkualitas dan berkelanjutan</p>\r\n\r\n<p>Program Prioritas :</p>\r\n\r\n<ul>\r\n	<li>Program Peningkatan Infrastruktur Perdesaan.</li>\r\n	<li>Program Pembangunan dan pengembangan Infrastruktur wilayah.</li>\r\n</ul>\r\n\r\n<p>7.&nbsp;&nbsp;&nbsp; Meningkatkan Pemberdayaan masyarakat</p>\r\n\r\n<p>Prioritas Program :</p>\r\n\r\n<ul>\r\n	<li>Program Peningkatan keberdayaan masyarakat perdesaan.</li>\r\n	<li>Program Peningkatan Keahlian dan keterampilan masyarakat perdesaan.</li>\r\n	<li>Program Pengembangan olah raga, pelestarian seni dan budaya.</li>\r\n</ul>\r\n', 'Administrator', '2020-06-01', 'visi-dan-misi-desa-hulosobo.html'),
(16, 'Badan Musyawarah Desa Hulosobo', 'bpd.jpg', '<p>Secara yuridis, tugas Badan Permusyawaratan Desa mengacu kepada regulasi desa yakni Undang-Undang Nomor 6 Tahun 2014 tentang Desa.&nbsp;</p>\r\n\r\n<p>Badan Permusyawaratan Desa yang selanjutnya disingkat BPD atau yang disebut dengan nama lain adalah lembaga yang melaksanakan fungsi pemerintahan yang anggotanya merupakan wakil dari penduduk Desa berdasarkan keterwakilan wilayah dan ditetapkan secara demokratis.</p>\r\n\r\n<p>Dalam Permendagri No.110/2016 Badan Permusyawaratan Desa mempunyai fungsi, membahas dan menyepakati Rancangan Peraturan Desa bersama Kepala Desa, menampung dan menyalurkan aspirasi masyarakat Desa, dan melakukan pengawasan kinerja Kepala Desa.</p>\r\n\r\n<p>Selain melaksanakan fungsi diatas, Badan Permusyawaratan Desa juga mempunyai tugas sebagai berikut.</p>\r\n\r\n<p>BPD mempunyai fungsi:</p>\r\n\r\n<ol>\r\n	<li>membahas dan menyepakati Rancangan Peraturan Desa bersama Kepala Desa;</li>\r\n	<li>menampung dan menyalurkan aspirasi masyarakat Desa; dan</li>\r\n	<li>melakukan pengawasan kinerja Kepala Desa.</li>\r\n</ol>\r\n\r\n<p>BPD mempunyai tugas:</p>\r\n\r\n<ol>\r\n	<li>menggali aspirasi masyarakat;</li>\r\n	<li>menampung aspirasi masyarakat;</li>\r\n	<li>mengelola aspirasi masyarakat;</li>\r\n	<li>menyalurkan aspirasi masyarakat;</li>\r\n	<li>menyelenggarakan musyawarah BPD;</li>\r\n	<li>menyelenggarakan musyawarah Desa;</li>\r\n	<li>membentuk panitia pemilihan Kepala Desa;</li>\r\n	<li>menyelenggarakan musyawarah Desa khusus untuk pemilihan Kepala Desa antarwaktu;</li>\r\n	<li>membahas dan menyepakati rancangan Peraturan Desa bersama Kepala Desa;</li>\r\n	<li>melaksanakan pengawasan terhadap kinerja Kepala Desa;</li>\r\n	<li>melakukan evaluasi laporan keterangan penyelenggaraan Pemerintahan Desa;</li>\r\n	<li>menciptakan hubungan kerja yang harmonis dengan Pemerintah Desa dan lembaga Desa lainnya; dan</li>\r\n	<li>melaksanakan tugas lain yang diatur dalam ketentuan peraturan perundang-undangan.</li>\r\n</ol>\r\n\r\n<p>Sumber : PERMENDAGRI NOMOR 110 TENTANG BADAN PERMUSYAWARATAN DESA</p>\r\n', 'Administrator', '2020-06-01', 'badan-musyawarah-desa-hulosobo.html'),
(17, 'Berada di Lereng Perbukitan Menoreh, Desa Hulosobo di Purworejo Gesit Hadapi Covid-19', 'hulosobo.jpg', '<p>Upaya penanganan pencegahan Covid-19 terus dilakukan sejumlah daerah. Bahkan, Desa Hulosobo di lereng Perbukitan&nbsp;<a href=\"https://www.inews.id/tag/menoreh\">Menoreh</a>, Purworejo pun bergerak mengambil langkah cepat.</p>\r\n\r\n<p>Kepala Desa Hulosobo Bangun Tri Utomo, mengatakan, pemerintah desa dengan warga langsung mengambil langkah tanggap darurat dengan melibatkan Forum Pengurangan Resiko Bencana (FPRB) Desa Hulosobo. Mereka mendirikan&nbsp;<a href=\"https://www.inews.id/tag/posko\">posko</a>&nbsp;siaga bencana sejak tanggal 17 Maret 2020.</p>\r\n\r\n<p>Pendirian posko ini merupakan yang pertama dari 21 desa se-Kecamatan Kaligesing. Posko ini terletak tepat di pintu masuk Desa Hulosobo. Pos siaga Covid-19 ini akan dijaga 14 Tim yang beranggotakan 8-10 orang, termasuk di dalamnya berisi LINMAS dan Kader Kesehatan Desa. Nantinya setiap pendatang yang masuk akan diperiksa kesehatannya.</p>\r\n\r\n<p><img alt=\"\" src=\"https://img.inews.id/files/inews_new/2020/04/24/WhatsApp_Image_2020_04_24_at_12_30_57_PM__1_.jpeg\" style=\"height:188px; width:300px\" /></p>\r\n\r\n<p>Mereka juga diwajibkan memakai masker dan cuci tangan pakai sabun. Sementara kendaraan yang digunakan akan disemprot disinfektan. Pemudik yang masuk desa wajib menjalani isolasi mandiri di rumah masing masing selama 14 hari. Kebutuhan pokok selama masa isolasi akan dibantu oleh pemerintah Desa melalui tim siaga covid 19.</p>\r\n\r\n<p>&quot;Selain tindakan pencegahan di posko siaga, pemerintah desa juga memberikan masker, sabun cuci tangan dan vitamin c ke seluruh warga,&quot; ujar Bangun Tri Utomo dalam keteranganya, Jumat (24/4/2020).</p>\r\n\r\n<p>Pembagian masker dilakukan dengan cara turun langsung ke setiap RT, sehingga warga tidak berkumpul di satu tempat.</p>\r\n\r\n<p>Untuk mengatisipasi penyebaran Covid-19 dari luar, dia mengimbau perantau untuk tidak mudik. Jika ingin berkomunikasi dengan keluarga di kampung, pemerintah desa memberi fasilitas wifi gratis di setiap pedukuhan.</p>\r\n\r\n<p>&quot;Kami siapkan wifi, mengingat kondisi geografis desa yang menyebabkan jangkauan signal dari penyedia jasa seluler kurang maksimal,&quot; ucapnya.</p>\r\n', 'Septian David', '2020-06-02', 'berada-di-lereng-perbukitan-menoreh-desa-hulosobo-di-purworejo-gesit-hadapi-covid19.html'),
(18, 'Fasilitasi Desa Tangguh Bencana Kabupaten Purworejo Di Desa Hulosobo Kecamatan Kaligesing', 'hulosobo1.jpg', '<p><strong>Purworejo</strong>. Sabtu. 23 November 2019. Pembentukan desa yang tangguh menghadapi bencana, melalui Pembentukan Forum Pengurangan Risiko Bencana (FPRB) Desa (Destana Pratama) dan Relawan Siaga PB Desa untuk Desa Hulosobo Kecamatan Kaligesing dalam rangka penguatan kapasitas pengurangan risiko bencana di desa, melakukan kerja-kerja pengurangan risiko bencana di tingkat desa dengan menyelaraskan pembangunan, dan memfasilitasi kerja sama dengan berbagai pihak (jejaring kebencanaan).</p>\r\n\r\n<p>Kegiatan ini dilaksanakan selama dua hari yaitu pada tanggal 23 s.d 24 November 2019 di Desa Hulosobo Kecamatan Kaligesing. Hari Pertama tanggal 23 November 2019. Kegiatan dibuka secara resmi oleh Kepala Desa Hulosobo yang diikuti oleh 25 peserta terdiri dari perangkat desa, bidan, tokoh masyarakat, dan karang taruna. Kegiatan dimulai pada pkl. 09.00 WIB yang diawali registrasi peserta dan kegiatan selanjutnya adalah penyampaian materi tentang Karakteristik Daerah Rawan Bencana yang dalam hal ini Desa Hulosobo Kecamatan Kaligesing merupakan daerah yang rawan terhadap Longsor dan banjir. Materi Kelembagaan FPRB dan Relawan PB Desa disampaikan oleh Kabid Pencegahan dan Kesiapsiagaan.</p>\r\n\r\n<p>Hari kedua tanggal 24 November 2019. Materi SAR dan materi mengenai rencana evakuasi Longsor oleh Kabid Pencegahan dan Kesiapsiagaan BPBD Kab. Purworejo.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Septian David', '2020-06-02', 'fasilitasi-desa-tangguh-bencana-kabupaten-purworejo-di-desa-hulosobo-kecamatan-kaligesing.html'),
(20, 'WAKA POLSEK KALIGESING POLRES PURWOREJO MONITORING UJIAN SELEKSI PENGISIAN PERANGKAT DESA HULOSOBO', 'hulosobo2.jpg', '<p>Polres Purworejo, Polda Jateng &ndash; Tribratanewspurworejo.com, Waka Polsek Kaligesing Polres Purworejo Iptu Ponco Broto bersama unsur Forkompincam melaksanakan monitoring kegiatan seleksi pengisian jabatan Perangkat Desa Hulosobo yang bertempat di Gedung Balai Desa Hulosobo Kecamatan Kaligesing, Rabu (19/02/2020).</p>\r\n\r\n<p>Hadir pada kegiatan seleksi pengisian Perangkat Desa Hulosobo, Camat Kaligesing diwakili oleh Kasi Pemerintahan Bapak Pujo, Danramil 03 Kaligesing Kapten Inf. Suyadi, Team fasilitasi dari Kecamatan, Kepala Desa Hulosobo, Babinsa, Bhabinkamtibmas, BPD, Panitia Pelaksana dan Panitia Seleksi Perangkat Desa Hulosobo.</p>\r\n\r\n<p>Seleksi pengisian Perangkat Desa Hulosobo untuk pengisian Jabatan Kasi Pemerintahan oleh tiga peserta yaitu Sdr. Arif Wahyudi, Sdr. Fajar Anshori dan Sdri. Eva Yuliana Intaningrum, dan pada pelaksanaan ujian seleksi ada tiga tahapan yaitu ujian tertulis, ujian kemampuan berpidato dan ujian kemampuan komputer.</p>\r\n\r\n<p>Pelaksanaan ujian seleksi pengisian perangkat Desa Hulosobo dimulai dari pagi hari, adapun nilai hasil ujian seleksi di umumkan pada waktu siang hari, dengan hasil Sdr. Dewi Arif Wahyudi mendapat total nilai sebesar 117,3, sedangkan Sdr. Fajar Ansori dengan perolehan total nilai sebesar 92, serta Sdri. Eva Yuliana Intaningrum memperoleh total nilai sebesar 99,2 dengan demikian ujian seleksi pengisian Perangkat Desa Hulosobo telah selesai dilaksanakan dengan tertib dan lancar.</p>\r\n\r\n<p>Sementara itu Kapolres Purworejo Polda Jateng AKBP Rizal Marito, SIK, SH, M. Si melalui Kapolsek Kaligesing AKP Joko Nurwanto, SH bahwa dengan telah selesainya pelaksanaan ujian seleksi pengisian Perangkat Desa Hulosobo semua pihak diharapkan bisa menerima dengan legowo hasil yang sudah diumumkan, harapnya. (Humas Polsek Kaligesing)</p>\r\n', 'Septian David', '2020-06-02', 'waka-polsek-kaligesing-polres-purworejo-monitoring-ujian-seleksi-pengisian-perangkat-desa-.html');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `nik` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `j_kel` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `rt_rw` varchar(20) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(40) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `sts_kawin` varchar(20) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `gol_d` enum('A','B','O','AB') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`nik`, `nama`, `tgl_lahir`, `tmp_lahir`, `j_kel`, `alamat`, `rt_rw`, `kelurahan`, `kecamatan`, `agama`, `pendidikan`, `sts_kawin`, `pekerjaan`, `gol_d`) VALUES
('3271046504930002', 'INDAH RATNA FURI', '2020-05-31', 'Kudus', 'L', '3271046504930002', 'Rt 03, Rw 02', 'Mlagen', 'Pamotan', 'islam', 'tidaksekolah', 'b_kw', 'Mahasiswa', 'A'),
('34567890876', 'Berhasil', '2020-05-06', 'khvkv', 'L', '34567890876', 'Rt 04 Rw 07', 'jcc', 'cc', 'budha', 'smp', 'kw', 'cuuvfi', 'B'),
('4356780', 'hgvg', '2020-05-15', 'rbg', 'P', 'jvvjycu', 'ydyt', 'fyt', 'fty', 'islam', 'sd', 'b_kw', 'yvyj', 'O'),
('4356788', 'Yes', '2020-05-15', 'rbg', 'P', '4356788', 'ydyt', 'fyt', 'fty', 'islam', 'tidaksekolah', 'b_kw', 'yvyj', 'AB'),
('76545346789', 'Test', '2020-06-10', 'Kudus', 'P', '76545346789', '02-04', 'ibkhbhk', 'hjvjhvh', 'katolik', 'sma', 'kw', 'Petani', 'O');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `j_surat` varchar(30) NOT NULL,
  `pesan` text NOT NULL,
  `status` enum('1','0') NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `id_user`, `email`, `j_surat`, `pesan`, `status`, `tgl`) VALUES
(2, 8, 'test@gmail.com', 'skk', 'test', '1', '0000-00-00'),
(3, 8, 'test@gmail.com', 'sku', 'jhvhjvjhvj', '1', '2020-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `role` enum('admin','umum') NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `role`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'Septian David', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(7, 'umum', 'test', 'test', '098f6bcd4621d373cade4e832627b4f6'),
(8, 'umum', 'Muhammad Izza Lutfi', 'izza', 'cdb0b6889f4def26f43951b2d5b7a9e3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `nik` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `surat`
--
ALTER TABLE `surat`
  ADD CONSTRAINT `surat_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
