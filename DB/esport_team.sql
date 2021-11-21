-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2021 pada 15.54
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esport_team`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_about`
--

CREATE TABLE `tb_about` (
  `id_about` int(11) NOT NULL,
  `facebook` varchar(455) NOT NULL,
  `instagram` varchar(455) NOT NULL,
  `twitter` varchar(455) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_about`
--

INSERT INTO `tb_about` (`id_about`, `facebook`, `instagram`, `twitter`, `about`) VALUES
(1, 'facebook.com/gloryGreen', 'instagram.com/gloryGreen', 'twitter.com/gloryGreen', '<p><strong>MOBILE LEGENDS : BANG BANG PROFESSIONAL LEAGUE</strong></p><p>is the largest and most prestigious mobile games competition in Southeast Asia. Driven by the determination to elevate the esports ecosystem, in this fourth season, MPL is making the leap by constructing the <strong>first franchised-model esports league in Southeast Asia. </strong>Ensuring the sustainability of the overall community, this franchise model will implement the revenue sharing, salary cap, and other special benefits to the participating teams.</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(455) NOT NULL,
  `isi_berita` text NOT NULL,
  `tgl_post` date NOT NULL,
  `img_berita` varchar(455) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul`, `isi_berita`, `tgl_post`, `img_berita`) VALUES
(1, 'ANALISA BIGETRON ALPHA & META EMPAT CORE DI MPL SEASON 8', '<p><strong>Bigetron Alpha</strong>&nbsp;meraih&nbsp;hasil&nbsp;cukup positif di pekan pertama&nbsp;<strong>MPL Season 8.</strong>&nbsp;Melakoni dua match kontra RBG dan EVOS Legends, mereka berhasil menang di kedua laga meski belum mampu sapu bersih. Setidaknya, ini menunjukan standar performa mereka belum turun sejak final MPL S7 lalu saat mereka finish sebagai runner up.</p><p>Yang menarik dari sang Robot bukan cuma gameplay mereka yang terprogram sangat disiplin, namun kemampuan drafting tak terprediksi. Bila melihat riwayat match mereka dari dua laga di pekan pertama, BTR menggunakan meta empat core yang sebetulnya tidak lazim bagi banyak orang. Mari kita analisa drafting dan meta andalan BTR di MPL Season 8!</p><p><strong>KEJENIUSAN DRAFT BIGETRON ALPHA</strong></p><p>Umumnya, hero dengan kategori core dalam satu tim cuma ada tiga. Paling utama adalah jungler, disusul gold lane kemudian exp lane. Sisanya adalah support, roamer atau tank. Namun, Bigetron mendobrak \"tradisi\" meta tersebut dengan memilih empat core dalam satu tim.</p><p>Strategi ini tak akan berhasil tanpa keluwesan pemainnya seperti Renbo. Musim in, Renbo di plot sebagai all-role, tak lagi mage atau midlaner saja. Renbo menunjukan keluasaan hero poolnya di laga melawan RBG dan EVOS dengan pick kejutan macam Benedetta dan Beatrix midlane. Benedetta memang pernah \"viral\" dijadikan tank, saat itu RRQ Psychoo yang mempopulerkan kebolehan Benedetta tanker.</p><p>Namun, berbeda dengan BTR yang menjadikan Benedetta atau Beatrix sebagai salah satu farmer dan tumpuan dalam tim. Kemampuan Renbo \"menggendong\" BTR terlalu sayang kalau cuma dijadikan sebagai support atau penyokong, sehingga drafting dan gameplay BTR di design sedemikian rupa untuk memaksimalkan mekanik dan makro setiap pemainnya.&nbsp;</p><p><strong>ROTASI PERMAINAN BIGETRON ALPHA</strong></p><p>Musuh juga kelimpungan dengan cara BTR melakukan draft. Mereka tak cuma harus menjegal hero andalan Branz, tapi juga Renbo yang punya jagoan ikonik seperti Cecillion atau Hayabusa support. Satu lagi yang patut diberi kredit dari pemain BTR adalah Matt. Offlaner ini bertransisi jadi gold laner mage seperti player-player side tim Filipina macam Oheb atau Kelra.</p><p>Matt cuma perlu farm di menit awal saat gold siege muncul. Setelahnya, ia berotasi ke midlane menjadi mage pada umumnya dan membiarkan Renbo melakukan farm atau membuat pengalihan.</p><p>Ini yang membuat strategi empat core BTR berfungsi. Distribusi gold dan exp dibuat merata untuk keempat core sehingga tidak ada yang ketinggalan farming. Oleh karenanya, BTR tak cuma agresif di mid game tapi juga kuat di late game.</p><p>Untuk menemani Kyy jadi bantalan pukul, pemilihan hero dari Rippo juga ditentukan dengan memilih hero yang agak tanky. Beberapa hero favoritnya macam Barats,&nbsp;Phoveus&nbsp;atau Gloo bisa jadi penyeimbang dalam tim andai Branz, Renbo dan Matt memakai hero yang rentan di burst.</p><p>Hero-hero Rippo juga unik karena tak mementingkan meta. Alih-alih mengunci Paquito lebih dulu, Rippo lebih handal diberikan Barats sebagai natural counter dari laning Paquito. Bisa dibilang, Rippo difungsikan sebagai counter pick untuk tim lawan terutama offlaner yang aktif melakukan rotasi dan teamfight.</p><p><strong>KEBIASAAN BARU BRANZ</strong></p><p>Branz yang dikenal sebagai user marksman handal kini lebih banyak bermain assassin. Terlihat dari dua match kontra RBG dan EVOS, ia lebih sering menampilkan Ling ketimbang MM andalannya macam Granger atau Claude.</p><p>Sekalinya memakai MM, ia mengadu nyali dengan mengeluarkan&nbsp;Natan&nbsp;yang punya banyak titik lemah. Namun, Branz berhasil menciptakan gaya mainnya sendiri sehingga hero ini begitu kuat sebagai jungler.</p>', '2021-11-10', '1635526581_f50e803cbaec4f8069ca.jpg'),
(2, 'KALAHKAN RRQ, ALTER EGO TEMPATI POSISI PUNCAK KLASEMEN MPL SEASON 8 WEEK 1', '<p>Minggu perdana&nbsp;MPL&nbsp;Season 8 ditutup dengan kemenangan Alter Ego atas RRQ Hoshi. Dua pertandingan terakhir di hari ketiga Week 1 ternyata membuat beberapa perubahan di klasemen MPL Season 8. Di sisi lain, EVOS Legends juga akhirnya berhasil mengamankan satu poin kemenangan di hari terakhir. Berikut kami sajikan rekap pertandingan hari ketiga Week 1 MPL Season 8.</p><p><strong>EVOS LEGENDS VS AURA FIRE</strong></p><p>EVOS Legends berhasil mengalahkan Aura Fire dengan skor penuh. Sungguh tak bisa diduga, lagi-lagi tim Naga Api tak menggunakan Spell Retribution di game pertama. Tim EVOS Legends juga sempat tertekan di&nbsp;<i>early game</i>. Sayangnya Aura Fire tak bisa mempertahankan konsistensi permainan. EVOS Legends dengan percaya diri membalas ketertinggalan.Pada akhirnya, tim Macan Putih-lah yang berhasil mendominasi pertandingan dan mengamankan poin kemenangan.&nbsp;</p><p><strong>ALTER EGO KALAHKAN RRQ HOSHI</strong></p><p>Pertandingan Alter Ego vs&nbsp;RRQ&nbsp;Hoshi di hari ketiga minggu pertama musim menyisakan kesan yang sama seperti final MPL Season 6. Perlawanan yang sengit dari kedua tim serta tarik-ulur yang terjadi di dua pertandingan bikin penonton waswas. Setelah memperlihatkan permainan perdananya di MPL Season 8, RRQ Hoshi membuktikan bahwa formasi saat ini tak kalah dengan musim sebelumnya. Sebaliknya, Alter Ego pun tampil dengan line up terbaiknya untuk menghadapi sang Raja. Rasanya penggemar esports Mobile Legends Indonesia sepakat bahwa pertandingan&nbsp;Alter Ego vs RRQ Hoshi&nbsp;ini terasa seperti&nbsp;<i>deja vu</i>. Hanya saja, kali ini hasil yang didapatkan berbeda dengan pertandingan sebelumnya. Jika di MPL Season 6 Alter Ego terpaksa menelan kekalahan, kali ini Celiboy dan kawan-kawan berhasil menaklukkan RRQ Hoshi dengan skor 2:0. Kemenangan dua kali di minggu pertama berhasil menempatkan Alter Ego di puncak klasemen MPL Season 8. AE Ahmad dan kawan-kawan berhasil menggeser Bigetron Alpha ke posisi kedua dan ONIC Esports di peringkat ketiga. Sampai kapankah posisi ini bisa bertahan? Tentunya akan lebih banyak kejutan lagi yang akan terjadi di minggu kedua nanti. Kita nantikan perkembangannya ya, Sobat Gamers!</p>', '2021-11-10', '1636563350_ff2c1c9e8a806de0e49c.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_jadwal_reguler` int(11) NOT NULL,
  `img_jadwal` varchar(455) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `id_jadwal_reguler`, `img_jadwal`) VALUES
(10, 1, '1635924786_8ef5efcab6ff0ccd0dc9.jpg'),
(11, 2, '1635926397_a0d1f9380d8da7c4dfaa.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal_reguler`
--

CREATE TABLE `tb_jadwal_reguler` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jadwal_reguler`
--

INSERT INTO `tb_jadwal_reguler` (`id`, `nama`) VALUES
(1, 'Minggu 1'),
(2, 'Minggu 2'),
(3, 'Minggu 3'),
(4, 'Minggu 4'),
(5, 'MInggu 5'),
(6, 'Minggu 6'),
(7, 'Minggu 7'),
(8, 'Minggu 8'),
(9, 'playoffs');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_player`
--

CREATE TABLE `tb_player` (
  `id_player` int(11) NOT NULL,
  `id_team` int(11) NOT NULL,
  `nama_player` varchar(255) NOT NULL,
  `ign` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `img_player` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_player`
--

INSERT INTO `tb_player` (`id_player`, `id_team`, `nama_player`, `ign`, `role`, `img_player`) VALUES
(10, 1, 'Albert Neilsen Iskandar', 'ALBERTTT', 'Jungler', '1634825351_8679397c0d2e80cf1968.png'),
(11, 1, 'Calvin', 'VYNNN', 'Support', '1634825392_81a7fc3c34e72f81d26a.png'),
(12, 1, 'Yesaya Omega Armando Wowiling', 'XINNN', 'Goldlaner', '1634825437_5854e9832b82a4fa04df.png'),
(13, 1, 'Rivaldi Fatah', 'R7', 'Offlaner', '1634825474_3e81e99baca4720b4a25.png'),
(14, 4, '-', 'Ahmad', 'Goldlaner', '1634825536_f396447d3e7421b9899d.png'),
(15, 4, '-', 'PAI', 'Offlaner', '1634825573_da375ce8555998774891.png'),
(16, 4, '-', 'LEOMURPHY', 'Tanker', '1634827120_4d02686a61e59150754b.png'),
(17, 4, '-', 'CELIBOY', 'Jungler', '1634827170_2bc3689f5109ba507e8b.png'),
(18, 7, 'Usep Satiawan', 'FACEHUGGER', 'Midlaner', '1634919637_d6c0016542b9fdaaa395.png'),
(19, 7, 'Erico', 'GOD1VA', 'Tanker', '1634919742_1393bb6fe25842063d79.png'),
(20, 7, 'Regi Marviola', 'QEIRA', 'Offlaner', '1634919801_feb19d0ccda9eeef8101.png'),
(21, 7, 'Jehuda Jordan Sumual', 'HIGH', 'Jungler', '1634919875_28f5b86f628fba180122.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_season_mpl`
--

CREATE TABLE `tb_season_mpl` (
  `id_season` int(11) NOT NULL,
  `nama_season` varchar(100) NOT NULL,
  `id_team_juara` int(11) NOT NULL,
  `mvp` int(11) NOT NULL,
  `img_team_juara` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_season_mpl`
--

INSERT INTO `tb_season_mpl` (`id_season`, `nama_season`, `id_team_juara`, `mvp`, `img_team_juara`) VALUES
(3, 'Season 5', 5, 17, '1636649861_0e27b4efca90a565b7a0.jpg'),
(5, 'Season 8', 4, 16, '1636648693_19f8e225d8112a87caba.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_team`
--

CREATE TABLE `tb_team` (
  `id_team` int(11) NOT NULL,
  `nama_team` varchar(255) NOT NULL,
  `jumlah_player` int(11) NOT NULL,
  `about_team` text NOT NULL,
  `achievements` text NOT NULL,
  `img_team` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_team`
--

INSERT INTO `tb_team` (`id_team`, `nama_team`, `jumlah_player`, `about_team`, `achievements`, `img_team`) VALUES
(1, 'RRQ', 4, '<p>Terbentuk pada bulan Agustus 2017, RRQ O2 beranggotakan para pemain terbaik di Mobile Legends yang selalu berada di deretan teratas top global dunia. Keahlian para pemain tersebut bahkan telah diakui oleh pemain Mobile Legends mancanegara. Kini RRQ O2 berganti nama menjadi RRQ Hoshi. Divisi Mobile Legends RRQ menjadi lengkap dengan turut hadirnya RRQ Sena sebagai tim kedua yang juga merupakan anggota dari tim RRQ Hoshi sebelumnya.</p>', '<ul><li>Champion MPL Indonesia Season 2</li><li>Runnerup MPL Indonesia Season 4</li><li>Runnerup M1&nbsp;World Championship</li><li>Champion MPL Season 5</li><li>Champion MPL Indonesia Season 6</li><li>3rd place M2 World Championship</li></ul>', '1634835183_15ae03819fc257515f17.png'),
(4, 'ALTER EGO', 4, '<p>Alter Ego adalah tim yang dijuluki kuda hitam tetapi perlahan-lahan mampu menunjukkan kemampuannya dari waktu ke waktu. Mulai dari MPL S2, Alter Ego tidak lolos. Di MPL S3 Alter Ego meningkatkan peringkatnya ke posisi ke-5, dan akhirnya di MPL S4 Alter Ego berhasil mencapai posisi ke-3, tetapi perjalanannya tidak hanya berakhir di sana. Alter Ego akan terus tumbuh.</p>', '<ul><li>1st Place CODASHOP Weekdays Tournament Qualifiers 4</li><li>1st place MDC Season 1 2018</li><li>1st Place Popcon Online Qualifier (16 September 2018)</li><li>7th Place Popcon Main Event (22 September 2018)</li><li>8th Place SEACA (20 October 2018)</li><li>1st Place Dunia Games League (21 October 2018)</li><li>1st Place Dunia Games League (18 November 2018)</li><li>2nd Place Ultimo Hombre Surabaya (24-25 November 2018)</li><li>3rd/4th Place IPWC Season 3 (26-28 November 2018)</li><li>3rd place Tournament DGL 10 Maret 2019</li><li>2nd place Tournament IPWC s7 26 Maret 2019</li><li>13th place Tournament Piala President 1 April 2019</li><li>5th place Tournament MPL season 3 5 Mei 2019</li><li>3rd place Tournament UMC 16 Maret 2019</li><li>3rd place Tournament IENC 28 July 2019</li><li>3rd/4th Place IPWC Season 4 (7-9 Januari 2019)</li><li>3rd Place MPL Season 4 (26-17 Oktober 2019)</li><li>1st place MPL Invitational Season 2</li><li>2nd place MPL Indonesia Season 6</li><li>4th place M2 World Championship</li></ul>', '1634910449_879d5292a78dd14a2c66.png'),
(5, 'ONIC ESPORTS', 4, '<p>Kami adalah Tim Manajemen E-Sports Profesional. Didirikan pada tahun 2018, kami bertujuan untuk menjadi organisasi e-sports terbaik untuk mewakili Asia Tenggara. Kami mengelola bakat dan membuat mereka bersinar. ONIC dibangun dengan keyakinan di mana kita melihat masa depan hiburan adalah e-sports. Dunia e-sports di Indonesia baru pada tahap awal, dan ONIC ada di sini untuk meningkatkan permainan.</p>', '<ul><li>1ST MPL S2 REGULAR TABLE STANDINGS</li><li>4TH BEKRAF GAMEPRIME 2018</li><li>2ND AGROMAN TOURNAMENT 2018</li><li>2ND IPWC SEASON 2</li><li>1ST GAMELY TOURNAMENT 2018</li><li>3RD UIC TOURNAMENT 2018</li><li>3RD MPL SEASON 2</li><li>2ND IPWC SEASON 3</li><li>2ND GAMELY TOURNAMENT 2018</li><li>1ST LEVEL UP TOURNAMENT WAVE 2 2018</li><li>3RD POPCON ASIA 2018</li><li>1ST UIC TOURNAMENT 2018</li><li>2ND SEACA MLBB 2018</li><li>1ST LEVEL UP TOURNAMENT MLBB 2018</li><li>1ST IPWC SEASON 4 2019</li><li>1ST IEG 2018 – MLBB</li><li>1ST IPWC SEASON 5 2019</li><li>1ST IPWC SEASON 6 2019</li><li>1ST STRAITS CHAMPIONSHIP BY GLOBAL ROGS</li><li>1ST DUNIA GAMES LEAGUE</li><li>1ST PIALA PRESIDEN ESPORTS 2019</li><li>1ST MPL ID REGULAR SEASON S3 STANDINGS</li><li>1ST MPL ID SEASON 3 PLAYOFF</li><li>1ST MSC 2019 PHILIPPINES</li><li>1ST MLBB ALL STAR 2019 (UDIL DAN DRIAN TEAM)</li><li>5TH MPL ID REGULAR SEASON S4 STANDINGS</li><li>4TH MPL ID SEASON 4 PLAYOFF</li><li>5TH MPL ID REGULAR SEASON S5 STANDINGS</li><li>3RD MPL ID SEASON 5 PLAYOFF</li></ul>', '1634757897_e6bbc820b694f6cb38e1.png'),
(6, 'BIGETRON ALPHA', 7, '<p>Perjalan Team Mobile legend Bigetron eSports di mulai pada MpL season 1, Awal mula munculnya team Bigetron sempat mengguncang dunia Mobile Legend dimana bigetron melahirkan bintang- bintang mobile legends yang sekarang menjadi bintang seperti Eiduart,Emperor,Rekt, dan Fabiens Bigetron eSports juga tidak pernah melewatkan season MPL, kita selalu berpartisipasi di setiap season nya sampai sekarang. Pada MPL season 3, Bigetron eSports melakukan perombakan besar-besaran, Berawal dari transisi player dari game PC ke mobile legend, setelah melakukan tryout yang cukup panjang menyisakan 2 player Bravo dan DreamS, Bravo dan Dreams yang mampu overcome dan beradaptasi memulai perjalanan baru bersama bigetron di qualifier MPL Season 3 bersama Vyn,Branz,Lynx,Xora, Taka,zoeybit .dan berhasil lolos ke babak playoff dan muncul sebagai kuda hitam dengan mengalahkan sang raja bertahan RRQ di babak playoff. MPL season 4 , Bigetron kembali lolos kebabak playoff dengan beberapa pemain baru seperti 3yy,Jo, dan hexazor, namun sayang harus terhenti di 5 besar. Kini di MPL season 5 Kami akan menunjukan yang terbaik, setelah melakukan seleksi terhadap pemain berbakat di indonesia akhirnya kita merekrut 3 pemain baru yaitu , kyy, Warlord dan anissa , masi sama dengan team muda kami dan bisa di bilang S5 kemarin kita memberi kejutan dengan mendominasi klasmen atas selama reguler season dan juga pemain kami Branz mendapat MVP reguler season , namun sayang pada saat playoff kami tergelincir dan hanya finish di posisi 4 besar . sekarang di MPL s6 kami kembali dengan formasi baru , dengan didatangkan nya pemain lama kami setelah menyelesaikan pendidikan yaitu TAKA , kami juga merekrut bintang muda Malaysia yaitu Rippo. serta salah satu bintang yng menjuarai MDL s1 yaitu RENBO</p>', '<ul><li>Juara 1 MLI Indonesia Qualifier</li><li>Juara 1 Redbull Gold Cup Indonesia</li></ul>', '1634758050_233a47e94b0bb5076662.png'),
(7, 'AURAFIRE', 4, '<p>AURA dibuat dengan gagasan bahwa orang-orang harus berjuang dan memperjuangkan api mereka di dalamnya, ini lebih dari sekadar menang, lebih dari permainan, ini tentang api yang tidak aktif di dalam kita semua. Kami berjuang untuk api di dalam diri kami. Artinya adalah, berjuang untuk impian kita, berjuang untuk apa yang membuat kita bahagia, berjuang untuk terus memperbaiki diri. Karena kami percaya bahwa memperjuangkan apa yang kami yakini bersama orang yang berpikiran sama akan dapat benar-benar mencapai tujuan kami.</p>', '<ul><li>1st Place, Brasco Champion League Season 1</li><li>1st Place, Ramadhan Level Up</li><li>1st Place, IPWC Series 8</li><li>6th Place, MPL ID Season 4</li><li>7th Place, MPL ID Season 5</li></ul>', '1634910750_2728af6abd0a05d3f2c4.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `img_user` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_lengkap`, `email`, `username`, `password`, `img_user`, `no_telp`) VALUES
(1, 'Anas Nasrullah', 'nasrul@gmail.com', 'anas', '60b348bb250144900f8c45be7f1284f8', '1636456972_50318c6aecf8eece8962.jpg', '081234567890');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_jadwal_reguler` (`id_jadwal_reguler`);

--
-- Indeks untuk tabel `tb_jadwal_reguler`
--
ALTER TABLE `tb_jadwal_reguler`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_player`
--
ALTER TABLE `tb_player`
  ADD PRIMARY KEY (`id_player`),
  ADD KEY `id_team` (`id_team`);

--
-- Indeks untuk tabel `tb_season_mpl`
--
ALTER TABLE `tb_season_mpl`
  ADD PRIMARY KEY (`id_season`),
  ADD KEY `id_team_juara` (`id_team_juara`),
  ADD KEY `mvp` (`mvp`);

--
-- Indeks untuk tabel `tb_team`
--
ALTER TABLE `tb_team`
  ADD PRIMARY KEY (`id_team`),
  ADD UNIQUE KEY `nama_team` (`nama_team`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_about`
--
ALTER TABLE `tb_about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_jadwal_reguler`
--
ALTER TABLE `tb_jadwal_reguler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_player`
--
ALTER TABLE `tb_player`
  MODIFY `id_player` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_season_mpl`
--
ALTER TABLE `tb_season_mpl`
  MODIFY `id_season` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_team`
--
ALTER TABLE `tb_team`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_season_mpl`
--
ALTER TABLE `tb_season_mpl`
  ADD CONSTRAINT `tb_season_mpl_ibfk_1` FOREIGN KEY (`id_team_juara`) REFERENCES `tb_team` (`id_team`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
