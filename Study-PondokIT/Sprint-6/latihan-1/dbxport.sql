-- MySQL dump 10.13  Distrib 8.0.21, for Linux (x86_64)
--
-- Host: localhost    Database: login
-- ------------------------------------------------------
-- Server version	8.0.21-0ubuntu0.20.04.4

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `artikel`
--

DROP TABLE IF EXISTS `artikel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `artikel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `judulArtikel` varchar(255) NOT NULL,
  `artikel` text NOT NULL,
  `tanggal` date NOT NULL,
  `kategori` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artikel`
--

LOCK TABLES `artikel` WRITE;
/*!40000 ALTER TABLE `artikel` DISABLE KEYS */;
INSERT INTO `artikel` VALUES (1,'Tambahkan subjudul.png1','Syukur','Syukur secara bahasa,الثناء على المحسِن بما أَوْلاكَهُ من المعروف“Syukur adalah pujian bagi orang yang memberikan kebaikan, atas kebaikannya tersebut” (Lihat Ash Shahhah Fil Lughah karya Al Jauhari). Atau dalam bahasa Indonesia, bersyukur artinya berterima kasih.Sedangkan istilah syukur dalam agama, adalah sebagaimana yang dijabarkan oleh Ibnul Qayyim:الشكر ظهور أثر نعمة الله على لسان عبده: ثناء واعترافا، وعلى قلبه شهودا ومحبة، وعلى جوارحه انقيادا وطاعة“Syukur adalah menunjukkan adanya nikmat Allah pada dirinya. Dengan melalui lisan, yaitu berupa pujian dan mengucapkan kesadaran diri bahwa ia telah diberi nikmat. Dengan melalui hati, berupa persaksian dan kecintaan kepada Allah. Melalui anggota badan, berupa kepatuhan dan ketaatan kepada Allah” (Madarijus Salikin, 2/244).Lawan dari syukur adalah kufur nikmat, yaitu enggan menyadari atau bahkan mengingkari bahwa nikmat yang ia dapatkan adalah dari Allah Ta’ala. Semisal Qarun yang berkata,إِنَّمَا أُوتِيتُهُ عَلَى عِلْمٍ عِنْدِي“Sungguh harta dan kenikmatan yang aku miliki itu aku dapatkan dari ilmu yang aku miliki” (QS. Al-Qashash: 78).Syukur Adalah Salah Satu Sifat AllahKetahuilah bahwa syukur merupakan salah satu sifat dari sifat-sifat Allah yang husna. Yaitu Allah pasti akan membalas setiap amalan kebaikan yang dilakukan oleh hamba-Nya, tanpa luput satu orang pun dan tanpa terlewat satu amalan pun. Allah Ta’ala berfirman,إِنَّ اللَّهَ غَفُورٌ شَكُورٌ“Sesungguhnya Allah itu Ghafur dan Syakur” (QS. Asy-Syura: 23).Seorang ahli tafsir, Imam Abu Jarir Ath-Thabari, menafsirkan ayat ini dengan riwayat dari Qatadah, “Ghafur artinya Allah Maha Pengampun terhadap dosa, dan Syakur artinya Maha Pembalas Kebaikan sehingga Allah lipat-gandakan ganjarannya” (Tafsir Ath Thabari, 21/531).Dalam ayat yang lain, Allah Ta’ala berfirman,وَاللَّهُ شَكُورٌ حَلِيمٌ“Allah itu Syakur lagi Haliim” (QS. At-Taghabun: 17).Ibnu Katsir menafsirkan Syakur dalam ayat ini, “Maksudnya adalah memberi membalas kebaikan yang sedikit dengan ganjaran yang banyak” (Tafsir Al-Qur’an Al-Azhim, 8/141).Sehingga orang yang merenungi bahwa Allah adalah Maha Pembalas Kebaikan, dari Rabb kepada Hamba-Nya, ia akan menyadari bahwa tentu lebih layak lagi seorang hamba bersyukur kepada Rabb-Nya atas begitu banyak nikmat yang ia terima.Simak selengkapnya disini. Klik https://muslim.or.id/30031-jadilah-hamba-allah-yang-bersyukur.html','2020-04-10','Agama'),(2,'pexels-oleg-magni-1040499.jpg','What is Bootsrap 4 Good','Get the book free!\r\nBootstrap stands as one of the most popular, open-source, front-end frameworks on the Web. Since its official release in 2011, it has undergone several changes, and it’s now one of the most stable and responsive frameworks available. It’s loved by web developers of all levels, as it gives them the capability to build a functional, attractive website design within minutes. A novice developer with just some basic knowledge of HTML and little CSS can easily get started with Bootstrap.\r\n\r\nBootstrap provides a solid foundation for any website, irrespective of project size. It contains Reboot, which is based on Normalize.css and helps level out browser differences for various page elements. Bootstrap also provides great typography. Even basic HTML form elements like checkboxes, radio buttons, select options, etc., have been restyled to give them a modern look. I use Bootstrap because it saves me a considerable amount of effort.\r\n\r\nToday’s websites should be modern, sleek, responsive, and “mobile first”. Bootstrap helps us to achieve these goals with minimum fuss. Here are the top five reasons why I love Bootstrap:\r\n\r\nReason 1: The Powerful Grid System\r\nBootstrap has one of the best responsive, mobile-first grid systems available. It’s built with Flexbox and it’s easy to use. It helps in scaling a single website design from the smallest mobile device to high-definition displays, logically dividing the screen into 12 columns, so that you can decide just how much screen real estate each element of your design should take up.\r\n\r\nAlthough developers have CSS Grid Layout for layout building, the Bootstrap Grid component can still be handy for quick prototyping — at least while we get more familiar with the new native CSS tool at our disposal today.\r\n\r\nReason 2: Rapid Development\r\nBootstrap comes complete with many reusable CSS and JavaScript components that can help achieve the functionality needed in almost any kind of website. You just have to use some HTML to plug them into your template, with no need to spend huge amounts of time writing complex CSS and JavaScript. Plus, all these components are responsive, too!\r\n\r\nReason 3: Browser Compatibility\r\nBootstrap is compatible with the latest, stable releases of all major browsers and platforms. With regard to the Windows platform, Bootstrap works in Internet Explorer versions 10–11 and Microsoft Edge. If Bootstrap’s instructions are followed properly, you can create a website design that works in all these browsers.\r\n\r\nOf course, if your employer wants to make a website that looks exactly the same in IE7–8 as it does in modern, standards-compliant browsers, then it might be time to think about switching jobs!\r\n\r\n','2020-04-10','pendidikan'),(3,'1pexels-oleg-magni-1040499.jpg','History Bootsrap 4.1','Mark Otto announced Bootstrap 4 on October 29, 2014.[8] The first alpha version of Bootstrap 4 was released on August 19, 2015.[9] The first beta version was released on 10 August 2017.[10] Mark suspended work on Bootstrap 3 on September 6, 2016, to free up time to work on Bootstrap 4. Bootstrap 4 was finalized on January 18, 2018.[11] Significant changes include: Major rewrite of the code Replacing Less with Sass Addition of Reboot, a collection of element-specific CSS changes in a single file, based on Normalize Dropping support for IE8, IE9,[contradictory] and iOS 6 CSS Flexible Box support Adding navigation customization options Adding responsive spacing and sizing utilities Switching from the pixels unit in CSS to root ems Increasing global font size from 14px to 16px for enhanced readability Dropping the panel, thumbnail, pager, and well components Dropping the Glyphicons icon font Huge number[quantify] of utility classes Improved form styling, buttons, drop-down menus, media objects and image classes Bootstrap 4 supports the latest versions of the Google Chrome, Firefox, Internet Explorer, Opera, and Safari (except on Windows). It additionally supports back to IE9[contradictory] and the latest Firefox Extended Support Release (ESR).[12]','2020-03-10','Sejarah'),(4,'download.jpeg','EXfca','Syukur secara bahasa,الثناء على المحسِن بما أَوْلاكَهُ من المعروف“Syukur adalah pujian bagi orang yang memberikan kebaikan, atas kebaikannya tersebut” (Lihat Ash Shahhah Fil Lughah karya Al Jauhari). Atau dalam bahasa Indonesia, bersyukur artinya berterima kasih.Sedangkan istilah syukur dalam agama, adalah sebagaimana yang dijabarkan oleh Ibnul Qayyim:الشكر ظهور أثر نعمة الله على لسان عبده: ثناء واعترافا، وعلى قلبه شهودا ومحبة، وعلى جوارحه انقيادا وطاعة“Syukur adalah menunjukkan adanya nikmat Allah pada dirinya. Dengan melalui lisan, yaitu berupa pujian dan mengucapkan kesadaran diri bahwa ia telah diberi nikmat. Dengan melalui hati, berupa persaksian dan kecintaan kepada Allah. Melalui anggota badan, berupa kepatuhan dan ketaatan kepada Allah” (Madarijus Salikin, 2/244).Lawan dari syukur adalah kufur nikmat, yaitu enggan menyadari atau bahkan mengingkari bahwa nikmat yang ia dapatkan adalah dari Allah Ta’ala. Semisal Qarun yang berkata,إِنَّمَا أُوتِيتُهُ عَلَى عِلْمٍ عِنْدِي“Sungguh harta dan kenikmatan yan','2020-10-20','Pendidikan');
/*!40000 ALTER TABLE `artikel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login1`
--

DROP TABLE IF EXISTS `login1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `login1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login1`
--

LOCK TABLES `login1` WRITE;
/*!40000 ALTER TABLE `login1` DISABLE KEYS */;
INSERT INTO `login1` VALUES (1,'Teddi','$2y$10$.H1Xu5Iog4JLTD23CA6u7eDioheuDGR5VDYdzdFLIzzkU5.DffZ1e'),(2,'admin','123'),(3,'sofyan','$2y$10$QgmclBzf.1UkxACgOyaFB.nMAVht/JCnZW9ouq5BOdsm6zRKomhh6'),(4,'abraham','$2y$10$W8TAhYuOAFtk1KjWJRxkuuxVr4R6XUndRMjFiEhYbVJqNa69AeKXW');
/*!40000 ALTER TABLE `login1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','123');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-16 22:23:52
