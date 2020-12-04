-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 04, 2020 at 04:17 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slec_dl`
--
CREATE DATABASE IF NOT EXISTS `slec_dl` DEFAULT CHARACTER SET utf16 COLLATE utf16_general_ci;
USE `slec_dl`;

-- --------------------------------------------------------

--
-- Table structure for table `rights`
--

DROP TABLE IF EXISTS `rights`;
CREATE TABLE IF NOT EXISTS `rights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rights` varchar(120) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf16;

--
-- Dumping data for table `rights`
--

INSERT INTO `rights` (`id`, `rights`) VALUES
(1, 'In Copyright'),
(2, 'In Copyright - EU Orphan Work'),
(3, 'In Copyright - Educational Use Permitted'),
(4, 'In Copyright - Non-Commercial Use Permitted'),
(5, 'In Copyright - Rights-holder(s) Unlocatable or Unidentifiable'),
(6, 'No Copyright - Contractual Restrictions'),
(7, 'No Copyright - Non-Commercial Use Only'),
(8, 'No Copyright - Other Known Legal Restrictions'),
(9, 'No Copyright - United States'),
(10, 'Public Domain'),
(11, 'Copyright Not Evaluated'),
(12, 'Copyright Undetermined'),
(13, 'No Known Copyright');

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

DROP TABLE IF EXISTS `scores`;
CREATE TABLE IF NOT EXISTS `scores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) CHARACTER SET utf8 NOT NULL,
  `composer` varchar(120) CHARACTER SET utf8 DEFAULT NULL,
  `date` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `season` int(11) NOT NULL,
  `medium` varchar(45) CHARACTER SET utf8 NOT NULL,
  `call_no` varchar(25) CHARACTER SET utf8 NOT NULL,
  `publisher` varchar(120) CHARACTER SET utf8 DEFAULT NULL,
  `rights` int(11) NOT NULL,
  `file` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_season_id` (`season`),
  KEY `FK_rights_id` (`rights`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf16;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `title`, `composer`, `date`, `season`, `medium`, `call_no`, `publisher`, `rights`, `file`) VALUES
(1, 'A Hymn to God the Father', 'Beck, John Ness, 1930-1987', '1982', 4, 'mixed chorus', 'SLE.0909', 'Beckenhorst Press, Inc', 1, '02ef502c-c153-4b04-ae17-1ddc36d55587.pdf'),
(2, 'A Mighty Fortress Is Our God : (Isometric)', 'Costello, Michael D.', '2017', 8, 'mixed chorus', 'SLE.0924', 'Morning Star Publishers', 1, 'd46d0bd5-800c-4ad8-b772-4f57a795e5a0.pdf'),
(3, 'A Virgin Unspotted : A Christmas Carol', 'Billings, William, 1746-1800', '1778', 2, 'mixed chorus', 'SLE.0113', 'Mercury Music Corporation', 1, '02d78737-bcef-4cee-892e-68b8c1ca9be0.pdf'),
(4, 'Run to Bethlehem', 'Adams, Peter', '1997', 2, 'mixed chorus', 'SLE.0555', 'n.p.', 1, '84892fe3-dcde-4c65-86cd-ebb650e159d1.pdf'),
(5, 'Hallelujah : from Mount of Olives', 'Beethoven, Ludwig van, 1770-1827', '1802', 6, 'mixed chorus', 'SLE.0020', 'G. Schirmer, Inc.', 13, 'ae473312-ac1e-40b2-9ff8-2c2fad077a25.pdf'),
(6, 'The Shepherd\'s Farewell : from L\'Enfance du Christ', 'Berlioz, Hector, 1803-1869', '1854', 2, 'mixed chorus', 'SLE.0395', 'Belwin-Mills Publishing Corp.', 1, '57b3c0f1-6b57-4f2d-b8aa-4d57f76740bc.pdf'),
(7, 'Hilariter : Easter anthem', 'Dirksen, Richard, 1921-2003', '1960', 6, 'mixed chorus', 'SLE.0001', 'H. W. Gray Co., Inc.', 1, '745f18d8-c8ad-4527-9ddd-0cb5bf6e5b09.pdf'),
(8, 'Alleluia', 'Thompson, Randall, 1899-1984', '1940', 6, 'mixed chorus', 'SLE.0003', 'E. C. Schirmer Music Company', 1, 'cf965b1b-a890-443d-955a-f423182488fb.pdf'),
(9, 'Fanfare for Christmas Day : Gloria in excelsis Deo', 'Shaw, Martin, 1875-1958', '1922', 2, 'mixed chorus', 'SLE.0004', 'J. Curwen & Sons, Ltd.', 10, '4894f545-8335-42a1-bd64-8236d8b7ff61.pdf'),
(10, 'Hodie Christus natus est', 'Willan, Healey, 1880-1968', '1925', 2, 'mixed chorus', 'SLE.0005', 'Carl Fischer, Inc.', 1, 'c1e40039-8063-4c4b-9953-26fc90fcdfb5.pdf'),
(11, 'Heilig', 'Mendelssohn-Bartholdy, Felix, 1809-1847', '1846', 8, 'mixed chorus', 'SLE.0006', 'Walton Music Corporation', 1, 'ec7772f7-62d7-4e18-9826-9d99c937b4b7.pdf'),
(12, 'Almighty Father : Chorale from Mass', 'Bernstein, Leonard, 1918-1990', '1971', 8, 'mixed chorus', 'SLE.0008', 'G. Schirmer, Inc.', 1, '403e1f94-9c52-4cf0-b5dd-92e331010caf.pdf'),
(13, 'Sing aloud with gladness : Exsultate Deo', 'Scarlatti, Alessandro, 1660-1725', '1702', 8, 'mixed chorus', 'SLE.0009', 'Hinshaw Music, Inc.', 1, '921468a9-3e50-4fcd-b86a-9087121aa234.pdf'),
(14, 'I was glad when they said unto me', 'Parry, C. Hubert H. (Charles Hubert Hastings), 1848-1918', '1902', 8, 'mixed chorus', 'SLE.0010', 'Novello & Company, Ltd.', 13, '18f2b2bd-b15d-4362-a263-ea770eb6afd5.pdf'),
(15, 'Rejoice ye pure in heart : Vinyard Haven', 'Dirksen, Richard, 1921-2003', '1974', 8, 'mixed chorus', 'SLE.0012', 'Harold Flammer, Inc.', 1, '1d177598-2a80-4f66-87a9-08880b86eeb3.pdf'),
(16, 'Hear, O Israel : from Three Ancient Prayers', 'Nelson, Ron, 1929-', '1962', 8, 'mixed chorus', 'SLE.0013', 'Boosey & Hawkes', 1, 'b1922c46-ee32-470e-8732-7e1f7941652d.pdf'),
(17, 'E\'en So, Lord Jesus, Quickly Come', 'Manz, Paul, 1919-2009', '1954', 1, 'mixed chorus', 'SLE.0015', 'Morning Star Publishers', 1, '0aad95b7-0880-4580-a00b-2368aa500b4c.pdf'),
(18, 'O sacrum convivium!', 'Messiaen, Olivier, 1908-1992', '1937', 8, 'mixed chorus', 'SLE.0016', 'A. Durand & fils', 1, '43994abb-3c01-457f-addc-208e59ca607e.pdf'),
(19, 'Praise God in His Holiness : short anthem', 'Shaw, Geoffrey, 1879-1943', '1918', 8, 'mixed chorus', 'SLE.0017', 'J. Curwen & Sons, Ltd.', 10, '9556783b-71b0-4acb-8cc2-e2b00dce7111.pdf'),
(20, 'In Thee, O Lord', 'Haydn, Joseph, 1732-1809', 'n.d.', 8, 'mixed chorus', 'SLE.0019', 'Sam Fox Publishing Company, Inc.', 1, '38d7e758-349a-46f7-84d4-7a2be8d238db.pdf'),
(21, 'O, Pray for the peace of Jerusalem : from Four Anthems', 'Howells, Herbert, 1892-1983', '1943', 8, 'mixed chorus', 'SLE.0021', 'Oxford University Press', 1, 'd14870fe-5772-40c5-801c-ae89175dd537.pdf'),
(22, 'If God Be For Us : Ist Gott fÃ¼r uns', 'Franck, Melchior, -1639', 'n.d.', 8, 'mixed chorus', 'SLE.0022', 'GIA Publications', 1, 'bccb07c8-92b4-4eb1-aa56-204a1526d9a9.pdf'),
(23, 'Jesu, by Thee I would be blessed : Jesu, dein\' Seel\' lass heilig\'n mich', 'Franck, Melchior, -1639', 'n.d.', 8, 'mixed chorus', 'SLE.0024', 'G. Schirmer, Inc.', 12, 'a1e1b6ee-e0d7-4af3-b889-f393aaefd519.pdf'),
(24, 'Hosanna to the Son of David', 'Praetorius, Michael, 1571-1621', 'n.d.', 5, 'mixed chorus', 'SLE.0025', 'Boosey & Hawkes', 1, 'ad0971a0-8973-410b-917c-9052fc8e0f27.pdf'),
(25, 'Over the Hils Young Mary Hastes : Ãœbers Gebirg Maria geht', 'Eccard, Johann, 1553-1611', 'n.d.', 1, 'mixed chorus', 'SLE.0026', 'Concordia Publishing House, Inc.', 1, '41248916-082a-4592-bc24-aba0f433c950.pdf'),
(26, 'Psalm One Hundred : Jubilate Deo', 'Roth, Robert N., 1928-', '1958', 8, 'unison chorus', 'SLE.0028', 'Canyon Press, Inc.', 1, '7959fadc-0642-405b-90b4-528a6a1d091e.pdf'),
(29, 'Hosanna to the Son of David', 'Weelkes, Thomas, approximately 1575-1623', 'n.d.', 5, 'mixed chorus', 'SLE.0029', 'Oxford University Press', 10, '5fc3d75577ff5_weelkeshosanna.pdf'),
(33, 'Now Let Us All Praise God and Sing', 'Young, Gordon, 1919-1998', '1956', 8, 'mixed chorus', 'SLE.0030', 'Galaxy Music Corporation', 1, '5fc3ec87ccef4.pdf'),
(34, 'Jubilate Deo', 'Sowerby, Leo, 1895-1968', '1943', 8, 'unison chorus', 'SLE.0033', 'H. W. Gray Co., Inc.', 1, '5fc3f5a6130a5.pdf'),
(35, 'Et incarnatus est : from the Mass in B-minor', 'Bach, Johann Sebastian, 1685-1750', '1749', 2, 'mixed chorus', 'SLE.0034', 'E. C. Schirmer Music Company', 12, '5fc3f6c414839.pdf'),
(36, 'Creator Spirit : based on the chorale melody Vater Unser', 'Stout, Richard, 1955-', '1966', 7, 'unison chorus', 'SLE.0035', 'C. F. Peters Corporation', 1, '5fc3f6f2a05cf.pdf'),
(37, 'I waited for the Lord : from Cantata Hymn of Praise', 'Mendelssohn-Bartholdy, Felix, 1809-1847', '1840', 8, 'mixed chorus', 'SLE.0036', 'G. Schirmer, Inc.', 13, '5fc3f8aa68c35.pdf'),
(38, 'Now Greet the Swiftly Changing Year : Sixth Night', 'Fedak, Alfred', '1985', 3, 'mixed chorus', 'SLE.0038', 'Concordia Publishing House, Inc.', 1, '5fc3f91529ff9.pdf'),
(39, 'Evening Hymn : Te lucis ante terminum', 'Gardiner, H. Balfour (Henry Balfour), 1877-1950', '1908', 8, 'mixed chorus', 'SLE.0039', 'E. C. Schirmer Music Company', 12, '5fc3f95b2483b.pdf'),
(40, 'Jubilate Deo', 'Britten, Benjamin, 1913-1976', '1961', 8, 'mixed chorus', 'SLE.0040', 'Jubilate Deo', 12, '5fc3f9a91e6e2.pdf'),
(41, 'Sacerdotes Domini : Then did priests make offering', 'Byrd, William, 1539 or 1540-1623', '1605', 8, 'mixed chorus', 'SLE.0041', 'Oxford University Press', 1, '5fc3fa07c387f.pdf'),
(42, 'Humbly I Adore Thee : Communion Hymn', 'Walter, Samuel, 1916-1987', '1954', 8, 'mixed chorus', 'SLE.0042', 'Galaxy Music Corporation', 12, '5fc3fa992cf1b.pdf'),
(43, 'Cause us, O Lord : from Three Ancient Prayers', 'Nelson, Ron, 1929-', '1962', 8, 'mixed chorus', 'SLE.0043', 'Boosey & Hawkes', 1, '5fc3faf6ac480.pdf'),
(44, 'Thy Perfect Love', 'Rutter, John, 1945-', '1975', 8, 'mixed chorus', 'SLE.0045', 'Oxford University Press', 1, '5fc3fba667ce5.pdf'),
(45, 'Ubi Caritas : from Quatre Motets sur des thÃ¨mes grÃ©goriens', 'DuruflÃ©, Maurice, 1902-1986', '1960', 5, 'mixed chorus', 'SLE.0046', 'A. Durand & fils', 1, '5fc3fc1a3dab8.pdf'),
(46, 'Draw Us In the Spirit\'s Tether : A Short Communion Motet or Introit', 'Ossewaarde, Jack H. (Jack Herman), 1918-2004', '1957', 8, 'mixed chorus', 'SLE.0048', 'H. W. Gray Co., Inc.', 1, '5fc3fc682765e.pdf'),
(47, 'In Thee Is Gladness : Anthem for General Use', 'Ley, Henry G. (Henry George), 1887-1962', '1956', 8, 'mixed chorus', 'SLE.0049', 'The Royal School of Church Music', 1, '5fc3fc9d476d0.pdf'),
(48, 'Expectans Expectavi', 'Wood, Charles, 1866-1926', '1919', 3, 'mixed chorus', 'SLE.0050', 'The Year Book Press, Ltd.', 10, '5fc3fce61fc5b.pdf'),
(49, 'Christ ist erstanden : Christ is arisen', 'Schubert, Franz, 1797-1828', '1816', 6, 'mixed chorus', 'SLE.0031', 'Tetra Music Corporation', 1, '5fc5a6848ff9d.pdf'),
(50, 'Dear Lord and Father of Mankind : Hymn-anthem', 'Parry, C. Hubert H. (Charles Hubert Hastings), 1848-1918', '1888', 8, 'mixed chorus', 'SLE.0051', 'Novello & Company, Ltd.', 1, '5fc6c00e5b979.pdf'),
(52, 'Come, Thou Long Expected Jesus', 'Gawthrop, Daniel E., 1949-', '2012', 1, 'mixed chorus', 'SLE.0902', 'Dunstan House', 1, '5fc7d621aca25.pdf'),
(55, 'Advent Supplication : Creator of the stars of night', 'Hopson, Hal H.', '2002', 1, 'mixed chorus', 'SLE.0737', 'Morning Star Publishers', 1, '5fc7df744a2b3.pdf'),
(57, 'Adam lay ybounden : carol', 'Ord, Boris', '1957', 1, 'mixed chorus', 'SLE.0435', 'Novello & Company, Ltd.', 1, '5fc991bdbca41.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `seasons`
--

DROP TABLE IF EXISTS `seasons`;
CREATE TABLE IF NOT EXISTS `seasons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `season` varchar(45) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seasons`
--

INSERT INTO `seasons` (`id`, `season`) VALUES
(1, 'Advent'),
(2, 'Christmas'),
(3, 'Epiphany'),
(4, 'Lent'),
(5, 'Holy Week'),
(6, 'Easter'),
(7, 'Pentecost'),
(8, 'General Use');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf16;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'test', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'test@test.com');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `rights`
--
ALTER TABLE `rights` ADD FULLTEXT KEY `rights` (`rights`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores` ADD FULLTEXT KEY `composer` (`composer`);
ALTER TABLE `scores` ADD FULLTEXT KEY `date` (`date`);
ALTER TABLE `scores` ADD FULLTEXT KEY `medium` (`medium`);
ALTER TABLE `scores` ADD FULLTEXT KEY `call_no` (`call_no`);
ALTER TABLE `scores` ADD FULLTEXT KEY `publisher` (`publisher`);
ALTER TABLE `scores` ADD FULLTEXT KEY `title` (`title`);
ALTER TABLE `scores` ADD FULLTEXT KEY `keyword` (`title`,`composer`,`date`,`medium`,`call_no`,`publisher`);

--
-- Indexes for table `seasons`
--
ALTER TABLE `seasons` ADD FULLTEXT KEY `season` (`season`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `scores`
--
ALTER TABLE `scores`
  ADD CONSTRAINT `FK_rights_id` FOREIGN KEY (`rights`) REFERENCES `rights` (`id`),
  ADD CONSTRAINT `FK_season_id` FOREIGN KEY (`season`) REFERENCES `seasons` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
