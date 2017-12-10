-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2017 at 02:55 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kopi`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `kategori_slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `kategori_slug`) VALUES
(1, 'KETTLE / TEKO', 'kettle-teko'),
(2, 'COLD BREW & SYPHON', 'cold-brew-syphon'),
(3, 'V60 DRIPPER & SERVER', 'v60-dripper-server'),
(4, 'MANUAL PRESSO & HAND GRINDER', 'manual-presso-hand-grinder'),
(5, 'OTHER EQUIPMENTS', 'other-equipments'),
(6, 'MILK JUG, TIMER & SCALE', 'milk-jug-timer-scale'),
(7, 'GRINDER LISTRIK', 'grinder-listrik'),
(8, 'ESPRESSO MACHINE', 'espresso-machine'),
(9, 'PAKET MESIN ESPRESSO & GRINDER', 'paket-mesin-espresso-grinder');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(10) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nama_slug` varchar(100) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `harga` varchar(100) DEFAULT NULL,
  `detail` text,
  `deskripsi` text,
  `kategori` int(10) DEFAULT NULL,
  `status` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `nama`, `nama_slug`, `img`, `harga`, `detail`, `deskripsi`, `kategori`, `status`) VALUES
(1, 'Bialetti Venus 4 Cups', 'bialetti-venus-4-cups', '57d7b934673141.jpg', '470.000', '<ul style=\"margin-left: 40px;\">\r\n	<li>Merek : Bialetti</li>\r\n	<li>Kapasitas : 4 cup</li>\r\n	<li>Bahan : Stainless steel</li>\r\n	<li>Berat : 509 gram</li>\r\n	<li>Ukuran : P : 12,5 cm, L : 9,8 cm, T : 16 cm</li>\r\n	<li>Developed and Designed in Italy</li>\r\n	<li>Made in China according to Bialetti&#39;s quality standards</li>\r\n</ul>\r\n', '<h4><strong>BIALETTI VENUS</strong></h4>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Bialetti Venus adalah alat pembuat kopi yang diciptakan untuk anda yang mencintai keanggunan bentuk klasik yang fungsional. Didesain dengan bentuk ramping dan simpel, Bialetti Venus semakin sempurna dengan material stainless steel kualitas terbaik yang menjadikannya lebih unggul dibanding jenis moka pot lainnya. Karena terbuat dari stainless steel, Bialetti Venus yang berkapasitas empat cangkir ini juga mampu dimasak di atas kompor biasa maupun pemanas listrik yang praktis. Sangat cocok buat anda yang menjunjung tinggi hidup praktis. Billeti Venus tak hanya cantik dari segi desain, tetapi juga mampu menghasilkan kopi nikmat yang bisa anda nikmati setiap hari. Dengan kehadirannya anda seperti memiliki gerai kopi pribadi di rumah. Bagaimana? Apa anda belum tergoda memilikinya?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4><strong>Cara Pemakaian :</strong></h4>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul style=\"margin-left: 40px;\">\r\n	<li>Bilas semua bagian Bialetti Venus dengan air hangat.</li>\r\n	<li>Keringkan semua bagiannya.</li>\r\n	<li>Isi wadah bagian dasar dengan air tepat di bawah batas katup yang telah disediakan.</li>\r\n	<li>Masukkan corong saringan dan isi dengan bubuk kopi. Jangan padatkan kopi terlalu keras. Pastikan tidak ada bubuk kopi di bagian pinggir saringan.</li>\r\n	<li>Bersihkan dengan seksama.</li>\r\n	<li>Satukan wadah, saringan dan teko bagian atas. Kunci dan eratkan.</li>\r\n	<li>Letakkan moka pot di atas kompor. Dan nyalakan api. Pastikan api tidak lebih besar dari diameter moka pot agar bagian bawah tidak terbakar. Atur besar api dengan hati-hati.</li>\r\n	<li>Tunggu kopi keluar dari teko di bagian atas.</li>\r\n	<li>Saat teko bagian atas telah penuh dengan kopi, matikan kompor. Buih kopi akan keluar saat proses ini selesai. Tunggu sampai seluruh buih hilang.</li>\r\n	<li>Sebelum kopi dapat dinikmati, aduk terlebih dahulu agar kopi tercampur merata dengan hasil terbaik.</li>\r\n	<li>Selamat menikmati.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', 2, 1),
(2, 'Hario Cold Drip VIC-02B', 'hario-cold-drip-vic-02b', '580d8fe751f5d1.jpg', '445.000', '<ul style=\"margin-left: 40px;\">\r\n	<li>Brand : Hario</li>\r\n	<li>Material : Glass &amp; Plastik (handle)</li>\r\n	<li>Kapasitas : 520 ml</li>\r\n	<li>Dimensi : 15 x 15 x 18 cm</li>\r\n	<li>Berat : 900 gram</li>\r\n	<li>Made in Japan</li>\r\n</ul>\r\n', '<h4><strong>Hario Cold Drip VIC - 02B</strong></h4>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Cold drip yang berasal dari Jepang ini diciptakan khusus untuk anda yang menyukai kopi yang disajikan dingin. Dilengkapi dengan wadah kaca khusus dan corong plastik untuk menampung es memungkinkan anda membuat es kopi dengan sangat praktis. Jangan tanya soal hasil kopi yang kelak dihasilkan. Keunggulan kualitas dari cold drip dari Hario ini sungguh tak bisa lagi diragukan. Jadi buat anda yang mungkin sedang bingung memilih cold drip apa yang dibutuhkan? Hario Cold Drip VIC &ndash; 02B adalah pilihan pas yang mampu melengkapi kebutuhan minum kopi anda. Oh satu lagi, harganya yang ekonomis membuat cold drip ini menjadi primadona di kelasnya.</p>\r\n', 2, 0),
(3, 'Casadio Deici A 1 Group', 'casadio-deici-a-1-group', '56f62bfe9f033.jpg', '36.000.000', '<ul style=\"margin-left: 40px;\">\r\n	<li>Brand : Casadio</li>\r\n	<li>Group Head: 1 Group</li>\r\n	<li>Power : 2800 - 3000 W</li>\r\n	<li>Brewing System : Volumetric</li>\r\n	<li>Boiler Size : 5 L</li>\r\n	<li>Boiler Type : Heat Exchanger</li>\r\n	<li>Pump : Rotary</li>\r\n	<li>Dimensi (PxLxT) : 60 x 43 x 57 cm</li>\r\n	<li>Berat : 37 kg</li>\r\n	<li>Made in Italy</li>\r\n</ul>\r\n', '<h4><strong>CASADIO Deici A 1 Group</strong></h4>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>CASADIO telah lama memiliki reputasi sebagai manufacturer yang handal dan terpercaya. Perusahaan Casadio didirikan pada tahun 1950 oleh keluarga Casadio di Bologna. Setelah sekian lama menjadi produk-produk kopi yang cukup digemari di pasar Eropa, kali ini Casadio juga hadir di Otten Coffee untuk melengkapi kebutuhan Anda penikmat kopi.</p>\r\n\r\n<p>Casadio Dieci A1 adalah sebuah mesin espresso komersial 1 grup. Casadio Dieci A1 ini sepenuhnya otomatis, dengan konstruksi yang solid dan dengan sistem kendali yang sederhana. Mesin ini juga memiliki fitur group head berukuran 5.5&rdquo; untuk memudahkan Anda atau barista Anda menyiapkan berbagai minuman berbasis espresso.</p>\r\n\r\n<p>Casadio Dieci A1 memiliki bodi yang bahannya terbuat dari stainless steel dengan desain persegi panjang yang solid. Sementara bagian atas Casadio Dieci berbentuk datar dan planar, membuatnya sebagai wadah sempurna untuk menyimpan dan memanaskan cangkir kopi yang akan Anda gunakan nantinya.<br />\r\nFitur lain yang dimiliki mesin espresso ini adalah single steam wand dan satu outlet untuk air panas. Casadio Dieci A1 benar-benar mesin espresso otomatis yang memiliki boiler dengan kapasitas 5 liter.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4><strong>Spesifikasi lengkap mesin Casadio Dieci A1 grup:</strong></h4>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul style=\"margin-left: 40px;\">\r\n	<li>Steam wands: 1</li>\r\n	<li>Outlet untuk air panas: 1</li>\r\n	<li>Kapasitas boiler: 5 liter</li>\r\n	<li>Lebar: 17 inchi</li>\r\n	<li>Kedalaman:</li>\r\n	<li>Tinggi: 22.5 inchi</li>\r\n	<li>Berat: &plusmn; 37 kg</li>\r\n	<li>Voltase: 120V</li>\r\n	<li>Daya: 1700 watt</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', 8, 0),
(4, 'Orchestrale - Etnica Espresso Machine Proffesional Semi Automatic 2GR (Steel) Gas Kit', 'orchestrale-etnica-espresso-machine-proffesional-semi-automatic-2gr-steel-gas-kit', '5923dfc99f8d4.jpg', '68.850.000', '<ul style=\"margin-left: 40px;\">\r\n	<li>Brand : Orchestrale</li>\r\n	<li>Type : Etnica 2GR</li>\r\n	<li>Power : 3.900 W</li>\r\n	<li>Voltase : 220-240 V ~ 50/60 Hz</li>\r\n	<li>Material : Stainless Steel</li>\r\n	<li>Ukuran (PxLxT) : 74 x 60 x 56 cm</li>\r\n	<li>Berat : 64 kg</li>\r\n	<li>Boiler : 12 Liter</li>\r\n	<li>Garansi 1 tahun</li>\r\n	<li>Made in Italy</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Optional :</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul style=\"margin-left: 40px;\">\r\n	<li>Gas Kit</li>\r\n	<li>Water wand with teflon inside cold touch</li>\r\n	<li>Steam wand with teflon inside cold touch</li>\r\n	<li>Cup warmer surround</li>\r\n</ul>\r\n', '<h4><strong>Orchestrale - Etnica Espresso Machine Proffesional Semi Automatic 2GR</strong></h4>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>MESIN-mesin espresso Orchestrale umumnya terinspirasi dari seni dan musik. Tidak terkecuali Orchestrale Etnica yang merupakan mesin espresso professional yang didedikasikan untuk musik etnik dan folk. Prinsip musik etnik dan folk ini diadaptasi oleh Orchestrale, utamanya pada seri Etnica ini, dalam mencari yang terbaik. Musik etnik selalu memiliki identitas historis yang asli, baik bunyi, melodi dan material-material yang ada dalam instrumennya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4><strong>Mesin espresso Orchestrale Etnica yang tersedia di Otten Coffee adalah versi semi otomatis. Fitur-fitur teknis yang melengkapi mesin ini selengkapnya:</strong></h4>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul style=\"margin-left: 40px;\">\r\n	<li>E61 brewing groups</li>\r\n	<li>Frame adalah polesan murni dari satined stainless steel, tepatnya dari material stainless steel AISI 304 yang kuat dan tahan lama. Di-finish dengan methacrylate yang transparan.</li>\r\n	<li>Material sebagian besar dari copper. Flanged boiler dan pipes dari copper, dan pipe fittings dari brass (kuningan).</li>\r\n	<li>Dual gauges untuk boiler dan pump pressure control. Boiler pressure gauge, untuk membantu mengindikasikan tekanan pada steam boiler. Pump pressure gauge, untuk membantu mengindikasikan tekanan/brew pressure selama proses ekstraksi espresso.</li>\r\n	<li>Automatic boiler water loading.</li>\r\n	<li>Boiler tap untuk manual discharge</li>\r\n	<li>Built-in RPM motor pump dengan WATER cooling / Fluid-o-Tech rotary pump 1 tombol elektromekanikal untuk setiap grup, untuk opsi brewing.</li>\r\n	<li>Lampu indikator untuk menunjukkan &lsquo;info&rsquo; bahwa mesin dan cup-warmer sedang menyala/ON</li>\r\n	<li>Fitur opsional: LED lights pada bagian belakang panel (dengan switch ON/OFF)</li>\r\n	<li>Cold touch untuk kedua water wand dan steam wand. Merupakan fitur opsional yang khusus di-customized untuk Otten Coffee. Bagian wands dilapisi dengan bahan Teflon di bagian dalam, sehingga membuat wands tidak terinsulasi panas dan membuat proses steaming/frothing susu menjadi lebih cepat dan tidak membuat tangan &ldquo;terbakar&rdquo;. Wands bisa digerakkan multi arah sehingga memberikan lebih banyak fleksibilitas.</li>\r\n	<li>Fitur tambahan: mesin espresso Orchestrale Etnica bisa dioperasikan baik dengan gas dan listrik. Opsi gas, membuat mesin espresso Etnica cocok digunakan untuk kafe atau kedai kopi yang sekiranya tidak memiliki daya listrik cukup besar.</li>\r\n</ul>\r\n', 5, 1),
(5, 'Kinto Cafepress Mug Green (22728)', 'kinto-cafepress-mug-green-22728', '58213d54d310c.jpg', '230.000', '<ul style=\"margin-left: 40px;\">\r\n	<li>Merek : Kinto</li>\r\n	<li>Kode : 22728</li>\r\n	<li>Material : ABS resin, polypropylene, stainless steel &amp; silicone</li>\r\n	<li>Berat : 230 gram</li>\r\n	<li>Ukuran (PxLxT) cm : 12.4 x 9 x 12.2</li>\r\n	<li>Kapasitas : 260 ml</li>\r\n	<li>Design by KINTO Japan</li>\r\n	<li>Made in China</li>\r\n</ul>\r\n', '<h4><strong>Kinto Cafepress Mug</strong></h4>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kinto Cafepress Mug adalah satu lagi gear andalan Kinto untuk membuat kopi dan teh. Dengan tambahan fitur plunger yang melengkapi bagian dalamnya, Kinto Cafepress Mug ini bisa menghasilkan minuman dengan rasa dan aroma yang lebih kaya dalam waktu singkat. Rahasianya adalah, tentu saja, plunger-nya yang terbuat dari kombinasi ABS resin, stainless steel dan silikon yang kesemuanya merupakan item-item pilihan. Dengan kata lain, plunger ini ibarat &ldquo;barang kantong ajaib Doraemon&rdquo; yang membuat Anda bisa menyeduh dan menyaring, baik teh atau kopi, di dalam mug.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Cara menggunakannya sangat mudah. Anda hanya perlu menaruh bubuk kopi atau daun teh di dalam plunger, lalu siram dengan air panas dan biarkan terseduh sendiri selama beberapa menit. Setelah ekstrak kopi atau teh terseduh seluruhnya, tekan plunger secara perlahan dan Anda pun sudah bisa menikmati minuman dengan segera. That simply easy.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Cup berdinding ganda (double wall) membuatnya nyaman digenggam sekaligus membuat minuman tetap panas untuk waktu yang lebih lama. Bodi mug-nya terbuat dari ABS resin dan lid (tutupnya) terbuat dari polypropylene. Dan yang penting, Kinto Cafepress Mug ini tidak membutuhkan perawatan yang ribet. Membersihkannya semudah mencuci barang keperluan rumah tangga biasa. Thus all you need is just a press to brew your tea and coffee!</p>\r\n', 1, 1),
(6, 'Kamira - Espresso Maker', 'kamira-espresso-maker', '595758caa1385168833281.jpg', '1.950.000', '<ul style=\"margin-left: 40px;\">\r\n	<li>\r\n	<p>Brand : Kamira</p>\r\n	</li>\r\n	<li>\r\n	<p>Material : Stainless steel</p>\r\n	</li>\r\n	<li>\r\n	<p>Ukuran (DxT) : 14 x 21 cm</p>\r\n	</li>\r\n	<li>\r\n	<p>Berat : 1 Kg</p>\r\n	</li>\r\n	<li>\r\n	<p>Kapasitas Bubuk Kopi : 7 gram (single filter holder) / 12 gram (double filter holder)</p>\r\n	</li>\r\n	<li>\r\n	<p>Kapasitas Air: 30 ml (half a tank) / 60 ml (whole tank)</p>\r\n	</li>\r\n	<li>\r\n	<p>Made in Italy</p>\r\n	</li>\r\n</ul>\r\n', '<h4><strong>KAMIRA ESPRESSO MAKER</strong></h4>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ALAT-alat pembuat espresso rumahan semakin menjadi kebutuhan dan diminati banyak pencinta kopi belakangan ini. Alat-alat pembuat espresso portabel pun termasuk item yang paling banyak dicari di Otten Coffee, dan kini melengkapi koleksi pilihan Anda adalah Kamira Espresso Maker buatan Italia.</p>\r\n\r\n<p>Kamira Espresso Maker dibuat di Italia yang mana cara penggunaannya sangat mudah, namun ia memiliki sejumlah fitur unggulan. Spesifikasi istimewa yang dimiliki Kamira Espresso Maker diantaranya:</p>\r\n\r\n<p>Hasil yang creamy dan intens. Kandungan minyak alami kopi &ldquo;dipindahkan&rdquo; secara elegan ke dalam hasil seduhan, memberikan hasil seduhan kopi yang full flavoured, creamy, dan aromatik sekaligus konsisten,<br />\r\nTerbuat dari material stainless steel. Material ini dikenal sebagai bahan yang bisa panas dengan cepat, sehingga membuat proses ekstraksi/pembuatan espresso pun semakin cepat pula.<br />\r\nTahan lama. Materialnya juga bisa didaur ulang, sehingga membuat alat pembuat espresso ini ramah lingkungan.<br />\r\nTidak membutuhkan penggunaan coffee pods dan juga coffee capsules. Selain membantu menghemat pengeluaran biaya tambahan, Kamira espresso maker juga ekonomis. Anda bisa menggunakan bubuk kopi yang biasa Anda gunakan (seperti untuk mokapot dan espresso).<br />\r\nCocok untuk segala penggunaan. Karena ditujukan untuk kebutuhan keluarga, Kamira Espresso Maker bisa dipakai bersama dengan berbagai macam pemanas, seperti gas atau electric stoves, kompor induksi atau kompor biasa.<br />\r\nMudah dibersihkan dan disimpan.<br />\r\nDibuat di Italia, secara handmade dengan keahlian para artisan alat kopi.</p>\r\n\r\n<p>Kamira Espresso Maker dianggap salah satu alat pembuat espresso portabel terbaik saat ini, dengan hasil yang tak kalah menakjubkan pula. Karenanya segera pesan di Otten Coffee, sebelum kehabisan.</p>\r\n', 8, 0),
(7, 'Bonavita - Double Wall Glass Carafe 5 Cups (BV61500CAD)', 'bonavita-double-wall-glass-carafe-5-cups-bv61500cad', '5916bc9e650a6.jpg', '525.000', '<ul style=\"margin-left: 40px;\">\r\n	<li>Brand: Bonavita</li>\r\n	<li>Kode : BV61500CAD</li>\r\n	<li>Material : Double-walled tempered glass</li>\r\n	<li>Kapasitas : 5 Cups</li>\r\n	<li>Cocok untuk Bonavita - Digital Coffee Brewer with Thermal Carafe 5 Cup (BV1500TD-CEV)</li>\r\n	<li>Made in China</li>\r\n</ul>\r\n', '<h4><strong>Bonavita - Double Wall Glass Carafe 5 Cups (BV61500CAD)</strong></h4>\r\n', 3, 0),
(8, 'Delonghi Dedica EC 680.BK', 'delonghi-dedica-ec-680-bk', '5811a56101fac.jpg', ' 5.500.000', '<ul style=\"margin-left: 40px;\">\r\n	<li>\r\n	<p>Brand : Delonghi</p>\r\n	</li>\r\n	<li>\r\n	<p>Daya: 1.350 W</p>\r\n	</li>\r\n	<li>\r\n	<p>Tegangan : 220-240 Volt ~ 50/60Hz</p>\r\n	</li>\r\n	<li>\r\n	<p>Body material : Stainless steel</p>\r\n	</li>\r\n	<li>\r\n	<p>Dimensi (PxLxT) cm : 33 x 14.9 x 30.5 cm</p>\r\n	</li>\r\n	<li>\r\n	<p>Berat : 4 kg</p>\r\n	</li>\r\n	<li>\r\n	<p>Milk system : Manual</p>\r\n	</li>\r\n	<li>\r\n	<p>Water Tank Capacity : 1 L</p>\r\n	</li>\r\n	<li>\r\n	<p>Heating system : Thermoblock</p>\r\n	</li>\r\n	<li>\r\n	<p>Maximum cup height : 80 cm</p>\r\n	</li>\r\n	<li>\r\n	<p>Pump pressure : 15 bar</p>\r\n	</li>\r\n	<li>\r\n	<p>Kompatibel dengan ESE pods</p>\r\n	</li>\r\n	<li>\r\n	<p>Garansi : 1 Tahun</p>\r\n	</li>\r\n	<li>\r\n	<p>Made in China</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Key features :</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul style=\"margin-left: 40px;\">\r\n	<li>\r\n	<p>Breaktrought Design</p>\r\n	</li>\r\n	<li>\r\n	<p>High Performance</p>\r\n	</li>\r\n	<li>\r\n	<p>Professional Look &amp; Feel</p>\r\n	</li>\r\n</ul>\r\n', '<h4><strong>Delonghi Dedica EC 680.BK</strong></h4>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>MESIN espresso semi otomatis edisi Dedica dari Delonghi ini memiliki performa tinggi yang dibungkus dengan tampilan tradisional dan simpel untuk memudahkan penggunanya mengoperasikan mesin ini. Mesin ini termasuk salah satu rekomendasi Otten Coffee bagi mereka yang menginginkan sistem pengendalian yang mudah, Anda dapat membuat kopi dengan menggunakan bubuk kopi (yang segar) dan melakukan proses frothing susu dengan sangat mudah.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4><strong>Mesin espresso semi otomatis Dedica ini memiliki sejumlah fitur istimewa diantaranya:</strong></h4>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul style=\"margin-left: 40px;\">\r\n	<li>Desain penuh terobosan. Bentuk mesin yang ramping dan sederhana namun kontemporer di saat bersamaan merupakan terobosan terbaru di dunia mesin kopi otomatis. Mesin ini &ldquo;hanya&rdquo; memiliki lebar 15 cm.</li>\r\n	<li>Tampilan professional. Dengan bahan bodi yang terbuat dari metal, chrome finished dan filter holder professional membuat mesin ini terlihat seperti lazimnya alat pembuat kopi professional yang umumnya dipakai oleh para barista dalam membuat espresso. Anda pun bisa menghadirkan suasana profesionalisme itu ke rumah atau kafe Anda.</li>\r\n	<li>Performa tinggi. Mesin Delonghi Dedica EC 680.BK ini dilengkapi dengan opsi thermoblock dan elektronik sehingga bisa semakin meningkatkan kinerja, kualitas, kemudahan pemakaian mesin kopi sekaligus kustomisasi yang panjang dari proses pembuatan kopi.</li>\r\n</ul>\r\n', 4, 1),
(9, 'Motta Milk Jug 350ml', 'motta-milk-jug-350ml', '579726ba4f3d0.jpg', '455.000', '<ul style=\"margin-left: 40px;\">\r\n	<li>Brand : Motta</li>\r\n	<li>Material : Stainless Steel</li>\r\n	<li>Dimensi (PxLxT) : 10,5 x 7,5 x 10 cm</li>\r\n	<li>Berat : 220 gram&nbsp;</li>\r\n	<li>Kapasitas : 350ml</li>\r\n	<li>Warna : Silver</li>\r\n	<li>Made in Italy</li>\r\n</ul>\r\n', '<h4><strong>Motta Milk Jug 350 ml</strong></h4>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Motta yang merupakan perusahaan manufaktur penyedia berbagai macam perlatan yang digunakan bagi para pecinta kopi, kini juga memiliki produk lain yang digunakan untuk memfrothing susu yaitu Motta Milk Jug. Perlatan ini menyerupai teko tanpa tutup dan berbahan dasar stainless steel. Produk ini memiliki kapasitas yang cukup untuk membuat susu berbusa bagi keluarga dan Customer Anda dicafe. Produk milk jug ini telah dikembangkan oleh para barista yang tergabung dalam Italian Barista Asociation.</p>\r\n\r\n<p><br />\r\nMotta Milk Jug &ndash; agar susu tahan lama<br />\r\nProduk Motta Milk Jug ini terbuat dari material padat yaitu stainless steel 18/10 Aisi 304 yang aman digunakan untuk menyimpan makanan. Produk ini sangat cocok untuk mencampur susu dan sangat mudah dalam penggunaannya. Milk jug ini merupakan produk berbahan stainless steel yang diproduksi di Italy.</p>\r\n\r\n<p><br />\r\nMotta Milk Jug berbahan stainlees steel ini sangat aman digunakan sehingga tak salah jika Anda memilih produk ini untuk menyimpan dan mencampur susu yang Anda inginkan.</p>\r\n', 6, 1),
(10, 'Breville Smart Grinder Pro - BCG820BSS', 'breville-smart-grinder-pro-bcg820bss', '56494241b4c0c.jpg', '4.150.000', '<ul style=\"margin-left: 40px;\">\r\n	<li>Brand : Breville</li>\r\n	<li>Daya : 165 Watt</li>\r\n	<li>Tegangan : 220-230 Volt</li>\r\n	<li>Material : Brushed Stainless Steel</li>\r\n	<li>Case Material : Plastic with Metal Finish</li>\r\n	<li>Burr Type : Conical, Steel</li>\r\n	<li>Burr Size : 40mm</li>\r\n	<li>Ukuran : 21 x 15 x 40 cm</li>\r\n	<li>Berat : 2.7 kg</li>\r\n	<li>Kapasitas Hopper : 1 pound (453 gram)</li>\r\n	<li>Garansi 1 Tahun</li>\r\n</ul>\r\n', '<h4><strong>Breville Smart Grinder Pro - BCG820BSS</strong></h4>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Breville, brand yang cukup terkenal di Eropa dan Amerika sebagai salah satu produsen coffee gears ini seperti tidak pernah berhenti mengeluarkan inovasi terbaik mereka demi memanjakan para pecinta kopi. Kali ini salah satu jagoannya adalah Breville Smart Grinder, yang disebut-sebut sebagai grinder (paling) pintar dari semua grinder yang pernah mereka ciptakan. Bukan tanpa alasan, grinder ini bisa secara otomatis mengatur sendiri dosis kopi, apakah shot atau cup, ketika Anda mengubah level grinding-nya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dengan conical burr dari bahan stainless steel plus teknologi Dosing IQ yang melengkapinya, yang Anda perlukan hanya tinggal memilih &ldquo;tipenya&rdquo; saja antara French Press, Filter atau Espresso . Selanjutnya, grinder ini yang akan &ldquo;menentukan&rdquo; sendiri seberapa dosis yang tepat untuk itu. In other words, you choose the grind, it&rsquo;ll choose the dose. Pintar? Sudah pasti.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Beberapa fitur lain yang ikut membuat Breville Smart Grinder ini istimewa adalah opsi LCD display yang menambah kesan hi-tech untuk ukuran grinder-grinder sekelasnya. Lalu, 60 grind setting yang berbeda mulai dari &lsquo;tipe&rsquo; coarsest French press sampai finest espresso, portafilter cradle yang cocok untuk ukuran kecil 50-54 mm maupun ukuran besar 58mm, dan bean hopper atau wadah biji kopi yang mudah dilepas-pasang plus opsi air tight lid yang membuatnya kedap udara dan bisa menjaga kualitas bubuk kopi yang akan dihasilkan. Sudah? Belum dong. Masih ada sejumlah keunggulan lain yang akan terasa lebih efektif jika Anda mencobanya sendiri.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Yang tidak kalah penting dari semuanya itu tentu saja adalah aksesoris-aksesoris Breville Smart Grinder yang mudah dibersihkan. Baik bean hopper atau pun grinds container-nya sangat mudah dilepas-pasang dan dibersihkan. Dan dengan kapasitas tampungan bean hopper sebanyak 1 pound (atau sekitar 453 gram), Breviller Smart Grinder ini adalah pilihan yang tepat untuk memenuhi kebutuhan konsumsi kopi di rumah sehari-hari mau pun untuk kebutuhan caf&eacute; Anda.</p>\r\n', 7, 1),
(11, 'Delonghi EC 860.M + KG89', 'delonghi-ec-860-m-kg89', '594a1cb2190c0359138362.jpg', '16.600.000', '<p>1 Set termasuk:</p>\r\n\r\n<ul style=\"margin-left: 40px;\">\r\n	<li>1 - Delonghi KG89</li>\r\n	<li>1 - Delonghi EC 860.M</li>\r\n</ul>\r\n', '<h4><strong>Delonghi EC 860.M + KG89</strong></h4>\r\n', 9, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin000', '1eea36fbd4f4919251e3192dce2da380'),
(3, 'kopiko', '10d978b9c4f0d930512b33d52682300e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
