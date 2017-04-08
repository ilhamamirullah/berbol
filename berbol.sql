-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2017 at 05:47 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `berbol`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
`id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=27168 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `nama`, `email`, `pesan`, `tanggal`) VALUES
(1, 'ilham amirullah', 'ilham.aespi@gmail.com', 'test comment gan', '2017-01-15 09:09:57'),
(2, 'haha', 'haha@gmail.com', 'sama test lagi gan', '2017-01-15 10:54:33'),
(27166, 'semuel', 'sem@gmail.com', 'keren lah', '2017-01-18 08:39:29'),
(27167, 'yandra', 'yan@gmail.com', 'sip sip oke', '2017-01-18 08:39:44');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE IF NOT EXISTS `konten` (
`id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `urlphoto` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=31914 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id`, `judul`, `kategori`, `isi`, `urlphoto`, `tanggal`) VALUES
(3480, 'Hentikan Rekor Madrid, Eks Arsenal Selamati Sevilla', 'spanyol', '<p><span style="color: #000000;">Mantan pemain Arsenal, Lauren, belum lama ini memberikan ucapan selamat pada Sevilla usai berhasil menghentikan rekor tak terkalahkan Real Madrid di pertandingan pekan lalu.</span><br /><br /><span style="color: #000000;">Madrid, yang kini unggul satu angka di atas Sevilla di puncak klasemen La Liga, melalui 40 pertandingan di semua kompetisi tak terkalahkan, jelang kunjungan ke Ramon Sanchez Pizjuan kemarin.</span><br /><br /><span style="color: #000000;">Mereka sempat unggul dulu via penalti Cristiano Ronaldo, namun bunuh diri Sergio Ramos dan gol dari Stevan Jovetic memastikan tim tuan rumah membalikkan keadaan untuk menang dan sekaligus memupus ambisi Los Blancos memperpanjang rekor tak terkalahkan mereka hingga 41 laga.</span><br /><br /><span style="color: #000000;">Lauren, yang merupakan bagian dari Arsenal ketika tim tidak terkalahkan di 49 pertandingan, lantas memberikan selamat pada Sevilla, yang sudah mencegah Madrid mendekati rekor <em>Gunners</em>.</span><br /><br /><span style="color: #000000;">Dengan mengunggah foto Sevilla di <em>Twitter</em>, Lauren memberikan pesan: "Menjadi tak terkalahkan memang tidak mudah. Selamat Sevilla."</span><br /><br /><span style="color: #000000;">Namun demikian, patut dicatat bahwa rekor tak terkalahkan di 49 laga yang dipegang oleh Arsenal hanya terjadi di Premier League, sementara Madrid mencatatkan rekornya di semua ajang. </span></p>', 'sevilla_04a4feb.jpg', '2017-01-17 05:19:29'),
(5156, 'Prediksi Plymouth vs Liverpool 19 Januari 2017', 'inggris', '<p>Raksasa EPL, <strong>Liverpool </strong>bertekad untuk menyudahi rentetan hasil kurang memuaskan yang mereka dapatkan belakangan ini. Oleh karenanya mereka akan membidik kemenangan penuh saat menjalani laga replay FA Cup melawan <strong>Plymouth </strong>pada hari Kamis (19/1) dini hari nanti.<br /><br />Liverpool sendiri memang tengah mengalami periode yang cukup sulit. Semenjak awal tahun kemarin, mereka tercatat menelan 3 hasil imbang dan 1 kekalahan dalam kurun waktu 13 hari saja. Tentu hasil ini jauh dari kata memuaskan, sehingga mereka bertekad untuk mulai mencari momentum kebangkitan saat mereka bertandang ke Home Park pada hari Kamis nanti.<br /><br />Plymouth sendiri sudah membuktikan bahwa mereka lawan yang tidak bisa diremehkan. Berkat strategi ultra defensif yang mereka terapkan, mereka sukses memaksa Liverpool untuk melakoni laga replay FA Cup setelah menahan imbang Liverpool 0-0 di Anfield. Di depan para pendukung mereka sendiri, klub kasta ketiga Inggris itu bertekad untuk menjegal langkah sang raksasa Inggris itu pada hari Kamis nanti.<br /><br />Di kubu tuan rumah, pelatih <strong>Derek Adams </strong>dikabarkan tidak memiliki masalah cedera yang berarti jelang laga pamungkas ini. Ia dikabarkan bisa menurunkan komposisi terbaiknya untuk menjegal langkah Liverpool di ajang piala FA ini.<br /><br />Adams sendiri nampaknya tidak akan mengubah strategi ultra-defensifnya sembari mengandalkan serangan balik. Dengan skema 4-1-4-1, <strong>Arnold Garita </strong>masih ditempatkan di posisi ujung tombak, sementara trio <strong>Oscar Therelkeld, Graham Carey </strong>dan <strong>David Fox </strong>akan bertugas mengatur aliran bola Plymouth, sementara <strong>Luke</strong> <strong>McCormick</strong> akan ditugaskan mengawal gawang Plymouth pada laga ini.<br /><br />Di kubu tim tamu, <strong>Jurgen Klopp </strong>sendiri datang ke markas Plymouth tanpa kekuatan terbaiknya. Tercatat ada nama-nama seperti <strong>Nathaniel Clyne, Marko Grujic, Joel Matip, Adam Bogdan </strong>dan <strong>Danny Ings </strong>yang mengalami cedera. Selain itu ia juga tidak bisa diperkuat oleh <strong>Sadio Mane </strong>yang tampil di Piala Afrika bersama Timnas Senegal.<br /><br />Mengingat Plymouth memainkan skema ultra defensif di pertemuan sebelumnya, Klopp diprediksi akan melakukan sejumlah pergantian untuk membongkar pertahanan mereka. Nama <strong>Daniel Sturridge </strong>kemungkinan akan menjadi starter di lini serang <em>The Reds,</em> di mana ia akan dibantu oleh <strong>Philippe Coutinho </strong>yang sudah pulih dari cedera. Di sektor penjaga gawang, Klopp kemungkinan akan kembali memainkan <strong>Loris Karius</strong>, di mana ia akan dikawal oleh <strong>Ragnar Klavan </strong>dan <strong>Joe Gomez</strong>.<br /><br /><br /><strong>Perkiraan Susunan Pemain<br />Liverpool (4-3-3): </strong>Karius; Moreno, Klavan, Gomez, Arnold; Leiva, Stewart, Can; Coutinho, Sturridge, Ojo<br /><br /><strong>Plymouth (4-1-4-1):</strong> McCormick; Purrington, Bradley, Songo''o, Miller; Fox; Slew, Carey, Threlkeld, Jervis; Garita<br /><br /><strong>Statistik Kedua Tim<br />Head to Head</strong><br />08/01/17&nbsp; Liverpool&nbsp; 0 - 0&nbsp; Plymouth Argyle (FA Cup)<br /><br /><strong>Lima Pertandingan Terakhir Plymouth (S-M-K-S-M)</strong><br />26/12/16&nbsp; Plymouth 3 - 3&nbsp; Wycombe Wanderer (L2)<br />31/12/16&nbsp; <strong>Plymouth&nbsp; </strong>2 - 0&nbsp; Crawley Town (L2) &nbsp;&nbsp; &nbsp;<br />02/01/17&nbsp; <strong>Barnet&nbsp; </strong>1 - 0&nbsp; Plymouth Argyle (L2) &nbsp;&nbsp; &nbsp;<br />08/01/17&nbsp; Liverpool&nbsp; 0 - 0&nbsp; Plymouth (FA Cup)<br />14/01/17&nbsp; <strong>Plymouth&nbsp; </strong>4 - 2&nbsp; Stevenage (L2)<br /><strong>&nbsp;<br />Lima Pertandingan Terakhir Liverpool (M-S-S-K-S)</strong><br />01/01/17&nbsp; <strong>Liverpool&nbsp; </strong>1 - 0&nbsp; Manchester City (EPL)<br />02/01/17&nbsp; Sunderland&nbsp; 2 - 2&nbsp; Liverpool (EPL) &nbsp;&nbsp; &nbsp;<br />08/01/17&nbsp; Liverpool&nbsp; 0 - 0&nbsp; Plymouth Argyle (FA Cup)<br />12/01/17&nbsp; <strong>Southampton&nbsp; </strong>1 - 0&nbsp; Liverpool (EFL Cup)<br />15/01/17&nbsp; Manchester United&nbsp; 1 - 1&nbsp; Liverpool (EPL)<br />&nbsp;<br /><strong>Prediksi Skor</strong><br />Laga replay FA Cup ini bisa dipastikan menjadi ujian yang cukup sulit bagi Liverpool. Hal ini dikarenakan mereka harus menghadapi tim yang bermain sangat defensif yang bermain didepan pendukung mereka sendiri.<br /><br />Secara kasatmata Liverpool masih diunggulkan untuk memenangkan laga ini. Akan tetapi peluang mereka untuk memenangkan laga ini akan sangat bergantung dengan usaha mereka untuk membongkar pertahanan rapat Plymouth yang gagal mereka lakukan di leg pertama kemarin.<br /><br />Bolanet memprediksi laga ini akan dengan kemenangan tim tamu <strong>Liverpool </strong>dengan sko<strong>r 0-2.</strong> Bagaimana Prediksi anda <em>Berbolers?</em></p>', 'preview-plymouth-vs-_2b51424.jpg', '2017-01-17 05:01:39'),
(5898, 'Milan Siap Hadapi Napoli di San Siro', 'italia', '<p><a class="bluelink" title="Lihat Profil Klub AC Milan" href="http://www.bola.net/club/ac-milan.html"><strong>AC Milan</strong></a> meraih hasil imbang 2-2 setelah sempat tertinggal dua gol di babak pertama ketika melawan tuan rumah Torino pada <em>giornata</em> 20 Serie A 2016/17, Selasa (17/1). Lawan Milan berikutnya pada <em>giornata</em> 21 adalah menjamu tim kuat <a class="bluelink" title="Lihat Profil Klub Napoli" href="http://www.bola.net/club/napoli.html"><strong>Napoli</strong></a> di San Siro, Minggu (22/1).<br /><br />Milan tak terkalahkan dalam sembilan laga kandang terakhirnya di semua ajang (M7 S2). Gelandang serang dan penyerang sayap Milan <a class="bluelink" title="Lihat Biografi Suso" href="http://www.bola.net/profile/jesus_joaquin_fernandez_saez_de_la_torre"><strong>Suso</strong></a> berharap timnya bisa meneruskan catatan bagus itu saat melawan Napoli nanti.<br /><br />"Di San Siro, kami selalu bermain dengan bagus. Semoga <em>streak</em> positif itu bisa berlanjut ketika melawan Napoli," kata Suso seperti dilansir situs resmi Milan.<br /><br />Saat ini, Milan menempati peringkat lima dengan perolehan 37 poin dan masih punya tabungan satu pertandingan. Sementara itu, Napoli duduk di tangga ke-3 dengan 41 angka.<br /><br />Senada dengan Suso, pelatih <a class="bluelink" title="Lihat Biografi Vincenzo Montella" href="http://www.bola.net/profile/vincenzo_montella"><strong>Vincenzo Montella</strong></a> juga mengungkapkan optimismenya.<br /><br />"Ini laga yang penting. Kami harus bangga menghadapi Napoli di titik ini. Mereka sudah menjadi salah satu tim terbaik di Italia selama beberapa tahun terakhir."<br /><br />"Ini laga yang menarik, dan kami ingin bermain sebaik mungkin," tegas Montella.<br /><br />Napoli tak terkalahkan dalam 13 laga terakhirnya di semua ajang (M8 S5). Statistik itu menunjukkan kalau Napoli jelas bukan lawan yang mudah, tak terkecuali bagi Milan.<br /><br />Namun, jika mampu mengatasi Napoli di San Siro, Milan bisa mendapatkan suntikan moral yang sangat berharga sebelum melakoni laga berikutnya yang tak kalah menantang. Setelah menjamu Napoli, empat hari berselang, Milan akan tandang ke markas <a class="bluelink" title="Lihat Profil Klub Juventus" href="http://www.bola.net/club/juventus.html"><strong>Juventus</strong></a> untuk melakoni partai perempat final Coppa Italia.</p>', 'unnamed_459c9dc.jpg', '2017-01-17 05:05:15'),
(16942, 'Pogba: Mourinho Beri Saya Kebebasan', 'inggris', '<p><a class="bluelink" title="Lihat Biografi Paul Pogba" href="http://www.bola.net/profile/paul_labile_pogba"><strong>Paul Pogba</strong></a> belum lama ini memberikan tribut pada manajernya di <a class="bluelink" title="Lihat Profil Klub Manchester United" href="http://www.bola.net/club/manchester-united.html"><strong>Manchester United</strong></a>, <a class="bluelink" title="Lihat Biografi Jose Mourinho" href="http://www.bola.net/profile/jose_mario_dos_santos_felix_mourinho"><strong>Jose Mourinho</strong></a>.<br /><br />Mourinho merupakan sosok penting yang bertanggung jawab membujuk Pogba untuk meninggalkan Juventus dan kembali ke United, dengan nilai transfer termahal dunia, 89 juta pounds.<br /><br />Pogba sendiri tak langsung memberikan dampak instan di United, namun belakangan ia mampu mulai tampil impresif. Dan karena itu, sosok yang kabarnya diincar Barcelona dan Real Madrid itu amat berterima kasih pada Jose Mourinho.<br /><br />"Dia memberikan saya cukup banyak kebebasan, terutama dalam menyerang. Dia banyak memberikan saya dorongan," tutur Pogba menurut <em>SFR Sport.</em><br /><br />"Dia tidak ingin kami untuk tidak bertahan, namun ketika kami menguasai bola, dia membebaskan kami."<br /><br />"Dia adalah The Special One. Dia adalah pelatih yang membantu saya banyak sekali. Saya banyak belajar darinya, dari pengalamannya. Saya mendengarkan ketika ia bicara. Dia banyak membantu saya dengan nasihatnya. Dia adalah seseorang yang akan membantu perkembangan karir saya."</p>', 'paul-pogba_f0a72bd.jpg', '2017-01-17 05:13:43'),
(18929, 'Aksi Messi Tak Pernah Dilakukan Cruyff atau Maradona', 'spanyol', '<p><strong>Lionel Messi</strong> belum lama ini mendapatkan pujian yang luar biasa dari manajer Las Palmas, Quique Setien, yang menilai pemain Argentina memiliki kemampuan melebihi legenda sepakbola dunia seperti Diego Maradona dan Johan Cruyff.<br /><br />Messi sendiri ikut mencetak gol ketika Barca menang 5-0 atas Las Palmas di pertandingan lanjutan La Liga yang berlangsung pekan lalu.<br /><br />"Messi tidak terhentikan. Itulah mengapa dia adalah yang terbaik dan dia terus menunjukkannya di akhir pekan," tutur Setien menurut <em>Sport</em>.<br /><br />"Saya tidak mengatakan bahwa Cristiano Ronaldo pemain yang buruk. Dia akan masuk dalam sejarah sepakbola sebagai striker yang hebat, namun dia bukan Messi."<br /><br />Selain itu, Setien juga menjelaskan mengapa Messi adalah pemain terbaik yang pernah ia lihat selama ini.<br /><br />"Messi adalah pemain yang memahami sepakbola, bagaimana mengatur ritme, keseimbangan, menyelesaikan laga dengan gol dan assist, dan dengan konsistensi yang ia punya. Apa yang dilakukan Messi, saya tak pernah melihatnya dalam diri Cruyff, atau Ronaldinho, atau Maradona, atau siapapun. Messi melakukannya tiap hari, mengagumkan rasanya melihat ia berlatih."</p>', 'lionel-messi-14_be417711.jpg', '2017-01-17 05:20:14'),
(25039, 'Ungkapan Kekecewaan Riedl Untuk PSSI', 'lainnya', '<p><a class="bluelink" title="Lihat Biografi Alfred Riedl" href="http://www.bola.net/profile/alfred_riedl"><strong>Alfred Riedl</strong></a> mengirimkan sebuah surat kepada PSSI. Dalam surat tersebut, tertuang ungkapan kekecewaan dirinya yang dianggap terlalu tua oleh PSSI sehingga tak bisa kembali menangani tim nasional Indonesia.<br /><br />Riedl sebelumnya mengaku akan pensiun setelah menangani timnas Indonesia di Piala AFF 2016. Namun setelah kompetisi itu berakhir, dia mengaku siap untuk kembali menukangi skuat Merah Putih.<br /><br />Akan tetapi, ternyata PSSI memutuskan untuk tak lagi memakai jasa pelatih berusia 67 tahun tersebut. PSSI menganggap Rield terlalu tua dan memutuskan untuk menyewa jasa salah satu di antara Luis Fernandez atau Luis Milla.<br /><br />Alasan itu memantik kekecewaan Riedl. Pelatih asal Austria itu pun lantas berkirim surat kepada PSSI, sembari menyatakan bahwa masalah usia sejatinya bukan merupakan sebuah masalah besar karena masih banyak pelatih berusia tua yang beredar di dunia sepakbola saat ini.<br /><br />"Memang tidak ada masalah antara saya dengan PSSI terkait berakhirnya kontrak saya. Hanya saja alasan Ketua Umum PSSI, Edy Rahmayadi yang mempermasalahkan usia saya yang sudah 67 tahun," ujar Riedl.<br /><br />"Di luar sana masih banyak pelatih terkenal yang memiliki usia tidak jauh dari saya. Sebut saja ada Marcello Lippi (68 tahun) yang masih melatih di sepakbola China, Oscar Tabarez (69 tahun) melatih Uruguay, Arsene Wenger (67 tahun) di Arsenal dan masih banyak lagi," sambungnya.<br /><br />Meski kecewa, namun hal tersebut tak lantas membuat mantan pelatih timnas Vietnam itu memendam dendam. Rield justru mendoakan Indonesia bisa meraih prestasi yang lebih baik ke depannya.<br /><br />"Saya tetap berharap PSSI, Timnas Indonesia dengan pelatih barunya akan meraih hasil lebih baik. Dan dapat memberikan suatu perubahan untuk sepakbola Indonesia," tutupnya.</p>', 'alfred-riedl_8b02392.jpg', '2017-01-17 05:15:12'),
(26460, 'Rapuhnya Claudio Bravo', 'inggris', '<p>Di awal musim 2016/17, <a class="bluelink" title="Lihat Profil Klub Manchester City" href="http://www.bola.net/club/manchester-city.html"><strong>Manchester City</strong></a> merekrut <a class="bluelink" title="Lihat Biografi Claudio Bravo" href="http://www.bola.net/profile/claudio_andres_bravo_munoz"><strong>Claudio Bravo</strong></a> dari Barcelona. Manajer anyar <a class="bluelink" title="Lihat Biografi Josep Guardiola" href="http://www.bola.net/profile/josep_guardiola_i_sala"><strong>Josep Guardiola</strong></a> lantas ''membuang'' <a class="bluelink" title="Lihat Biografi Joe Hart" href="http://www.bola.net/profile/joe_hart"><strong>Joe Hart</strong></a> ke Torino. Harapannya adalah agar gawang City lebih aman dari kebobolan. Namun, sejauh ini, harapan itu tinggal harapan.<br /><br />City baru saja dihajar tuan rumah <a class="bluelink" title="Lihat Profil Klub Everton" href="http://www.bola.net/club/everton.html"><strong>Everton</strong></a>. Gawang yang dikawal Bravo terkoyak empat kali dan City tumbang 0-4.<br /><br />Dengan hasil tersebut, berarti Bravo sudah kebobolan total 23 gol dalam 18 penampilan bersama City. Angka kebobolannya adalah yang terbanyak ke-10 dari semua kiper di Premier League musim ini. Rapuh!</p>', 'bravo_cb787bb.jpg', '2017-01-17 05:16:52'),
(27860, 'Hasil Pertandingan Leicester City vs Chelsea: 0-3', 'Liga Inggris', 'Chelsea sukses memperlebar jarak untuk sementara dari kejaran para pesaingnya setelah meraih tiga poin dari Leicester City. Bermain di King Power Stadium, The Blues menang tiga gol tanpa balas.\r\n\r\nChelsea yang tak memainkan Diego Costa langsung tampil menggebrak begitu pertandingan dimulai. Tak butuh waktu lama, tepatnya enam menit pertandingan berjalan, The Blues sukses membuat suporter tuan rumah terdiam setelah Marcos Alonso mencetak gol setelah memanfaatkan umpan dari Eden Hazard.\r\n\r\nUnggul cepat membuat para pemain Chelsea semakin bersemangat menggempur pertahanan tuan rumah. Namun beberapa upaya serangan dari tim tamu mampu diredam dengan baik oleh duet Wes Morgan dan Robert Huth di jantung pertahanan The Foxes.\r\n\r\nTuan rumah sendiri sempat memiliki peluang emas pada menit ke-36. Namun sayang, upaya dari Jamie Vardy dari dalam kotak penalti Chelsea tersebut masih mampu ditepis dengan baik oleh kiper The Blues, Thibaut Courtois. Skor 1-0 untuk keunggulan tim tamu tak berubah hingga babak pertama usai.\r\n\r\nDi paruh kedua, The Blues tak mengendurkan serangan mereka. Pergerakan dari Pedro, Willian dan Eden Hazard yang terus berubah posisi mereka di lini depan membuat para pemain tuan rumah bekerja keras menghalau serangan Chelsea.\r\n\r\nSetelah beberapa upaya mereka menggandakan skor kandas di kaki para pemain bertahan The Foxes, Chelsea akhirnya sukses menggandakan skor pada menit ke-51. Lagi-lagi Marcos Alonso menjadi momok bagi pertahanan tuan rumah setelah tendangan kerasnya gagal dibendung Kasper Schmeichel setelah sempat membentur Wes Morgan.\r\n\r\nSukses menggandakan skor Chelsea semakin bersemangat melakukan serangan ke pertahanan tuan rumah. Pada menit ke-71, giliran Pedro yang sukses mencatatkan namanya di papan skor setelah kerjasamanya dengan Willian mampu dia selesaikan lewat sebuah sundulan. Tiga gol tim tamu memimpin.\r\n\r\nDi sisa pertandingan, Chelsea terus mencoba untuk menambah gol. Namun beberapa serangan dari Michy Batshuayi dan juga upaya dari Cesc Fabregas yang masuk di 10 menit terakhir tak mampu membuahkan gol. Skor 3-0 untuk kemenangan The Blues bertahan hingga pertandingan usai.\r\n\r\nSusunan pemain\r\n\r\nLeicester City: Schmeichel; Fuchs, Morgan, Huth (Shinji Okazaki 60''), Chilwell; Ndidi; Musa (Demarai Gray 71''), Drinkwater, Mendy, Albrighton (Danny Simpson 77''); Vardy.\r\n\r\nChelsea: Courtois; Azpilicueta, Luiz, Cahill; Moses, Kante, Matic, Alonso; Willian (Michy Batshuayi 84''), Hazard (Cesc Fabregas 79''), Pedro (Ruben Loftus-Cheek 84'').', 'marcos-alonso_53f183e.jpg', '2017-01-15 09:04:34'),
(30768, 'Conte Takkan Berdamai dengan Costa', 'inggris', '<p>Manajer <a class="bluelink" title="Lihat Profil Klub Chelsea" href="http://www.bola.net/club/chelsea.html"><strong>Chelsea</strong></a>, <a class="bluelink" title="Lihat Biografi Antonio Conte" href="http://www.bola.net/profile/antonio_conte"><strong>Antonio Conte</strong></a>, disebut tidak akan mengadakan pertemuan guna menyelesaikan masalahnya dengan <a class="bluelink" title="Lihat Biografi Diego Costa" href="http://www.bola.net/profile/diego_da_silva_costa"><strong>Diego Costa</strong></a>, usai beredar spekulasi yang mengatakan sang pemain ingin pergi dari klub.<br /><br />Costa disebut sempat bertengkar dengan Conte dan juga staff kepelatihan terkait cedera punggung yang ia alami pekan lalu dan ia akhirnya tidak masuk skuat ketika tim menang 3-0 atas Leicester City di Premier League.<br /><br />Klub mengklaim bahwa cedera punggung membuat Costa tidak bisa masuk dalam skuat, namun beberapa laporan mengatakan bahwa pemain berusia 28 tahun tertarik untuk pindah ke Liga Super Tiongkok bersama dengan Tianjin Quanjian.<br /><br />Costa menghabiskan awal pekan ini dengan berlatih sendirian, sementara anggota tim lainnya mendapat libur, dan Conte diperkirakan akan menilai situasi sang striker dalam waktu dekat.<br /><br />Namun demikian, <em>Guardian</em> mengatakan bahwa Conte hanya akan menilai Costa berdasarkan performanya ketika berlatih dan tidak punya rencana untuk menggelar pertemuan demi mencapai kata damai dengan sang bintang.<br /><br />Chelsea sendiri ingin mempertahankan sang top skorer liga, yang kontraknya masih tersisa dua setengah tahun dan akan menolak tawaran dari Tiongkok.<br /><br />Meski begitu, Costa sendiri diklaim akan menolak kontrak baru dari Chelsea dan berencana hengkang di musim panas.</p>', 'chelsea-vs-southampt_21a4f48.jpg', '2017-01-17 05:10:41'),
(31913, 'Ternyata Icardi Tolak Tawaran Besar Dari Tiongkok', 'italia', '<p>Istri Mauro Icardi, Wanda Nara mengkonfirmasi bahwa suaminya yang juga penyerang Inter Milan mendapatkan tawaran besar dari Tiongkok.<br /><br />Sepakbola Tiongkok memang tengah gencar mendatangkan para pemain bernama besar di Eropa untuk bermain di sana. Sebut saja nama-nama seperti Oscar, Ezequiel Lavezzi, Axel Witsel hingga Carlos Tevez kini berkompetisi di sana.<br /><br />Nah, ternyata nama Icardi juga sempat dibidik oleh klub Tiongkok, kabarnya klub Tianjin Quanjian yang dilatih Fabio Cannavaro tertarik kepada penyerang asal Argentina tersebut.<br /><br />"Saya bisa mengkonfirmasi bahwa banyak klub Tiongkok menginginkannya, tapi Icardi baru saja menandatangani kontrak baru dengan Inter dan dia sangat bahagia," ungkap Wanda kepada Calciomercato.com.<br /><br />"Inter selalu melakukan apapun untuk mempertahankan Icardi, sama seperti Icardi yang melakukan segalanya untuk tetap jadi kapten Nerazzurri," sambungnya.<br /><br />"Saya sendiri sudah menyaksikan hubungan cinta itu," tutup Wanda.</p>', 'icard_3daf794.jpg', '2017-01-17 05:12:17');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(2, 'si boy', 'ilham', 'ilham'),
(3, 'srigala', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27168;
--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31914;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
