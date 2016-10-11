-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2016 at 07:13 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `Id` int(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`Id`, `title`, `content`) VALUES
(1, 'What is Lorem Ipsum?', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n                            \r\n                                                        '),
(2, 'Why do we use it?', '<p>\r\n                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n                            </p>'),
(3, 'Where does it come from?', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>\r\n                            <p>\r\n                                <blockquote>"Qysh ka thane ai i moqmi: Ma mire nje dreq i joti se sa nje melaqe e huaj!"</blockquote>\r\n                            </p>\r\n                            <ul>\r\n                                <li>Lorem Ipsum comes from sections 1.10.32</li>\r\n                                <li>Contrary to popular belief, Lorem Ipsum is not simply random text.</li>\r\n                                <li>Lorem Ipsum is that it has a more-or-less normal distribution of letters.</li>\r\n                            </ul>\r\n                        <p>\r\n                            Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. \r\n                        </p>\r\n                        <p>\r\n                            <blockquote>"Qysh ka thane ai i moqmi: Ma mire nje dreq i joti se sa nje melaqe e huaj!"</blockquote>\r\n                        </p>'),
(4, 'Why do we use it?', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>'),
(5, 'Titulli ', 'Pershkrimi ... ');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `ID` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_location` varchar(100) NOT NULL,
  `company_address` varchar(100) NOT NULL,
  `company_tel` varchar(100) NOT NULL,
  `company_email` varchar(100) NOT NULL,
  `company_subject` varchar(100) NOT NULL,
  `company_info` text NOT NULL,
  `company_image` longblob NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `product_category` varchar(200) NOT NULL,
  `product_info` text NOT NULL,
  `price` double NOT NULL,
  `product_image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_add`
--

CREATE TABLE `company_add` (
  `ID` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_location` varchar(100) NOT NULL,
  `company_address` varchar(100) NOT NULL,
  `company_tel` varchar(100) NOT NULL,
  `company_email` varchar(100) NOT NULL,
  `company_subject` varchar(100) NOT NULL,
  `company_info` text NOT NULL,
  `company_image` longblob NOT NULL,
  `product_name` varchar(300) NOT NULL,
  `product_id` varchar(300) NOT NULL,
  `product_category` varchar(300) NOT NULL,
  `product_info` text NOT NULL,
  `price` double NOT NULL,
  `product_image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_add`
--

INSERT INTO `company_add` (`ID`, `company_name`, `company_location`, `company_address`, `company_tel`, `company_email`, `company_subject`, `company_info`, `company_image`, `product_name`, `product_id`, `product_category`, `product_info`, `price`, `product_image`) VALUES
(17, 'MissinSweet', 'Mitrovice', 'Sheshi Adem Jashari', '049 25 25 24 ', 'missini@mitrovica.com', 'Insertimi i kompanise/produktit', 'Dicka e re po vjen !', 0x70726f647563744d697373696e692e6a7067, 'Dolche Vanilla', '23456', 'Embelsira', 'Info ...', 1.8, 0x646f6c6368652d76616e696c6c612e706e67),
(18, 'MaBelle', 'Mitrovice', 'Rr. ', '028 535 536', 'mitrovica@mabellehouse.com', 'Insertimi i kompanise/produktit', 'Nga Jemeni se shpejti u perhap ne Meke e ne Medine, aty ku u ngjizen tiparet me te qenesishme te njerezise â€“ mikpritja dhe shoqerimi. Nga bota muslimane, kafja u perhap ne Itali e pastaj ne pjesen e mbetur te Evropes, ne Indonezi e ne Amerike. ', 0x6d6162656c6c652d636f6d70616e792e6a7067, 'Chocolate truffles ala Ma belle', '34567', 'Embelsira', 'Na shoqero ne udhetimin madheshtor ... Coffe House !', 2.8, 0x43686f636f6c6174652074727566666c657320616c61204d612062656c6c652e6a7067),
(20, 'PESTOVA', 'Vushtrri', 'Fshati PestovÃ« Vushtrri 42000 KosovÃ«', '+38649000000', 'vipa@pestova.org', 'Insertimi i kompanise/produktit', 'Pestova eshte kompani vertikalisht e integruar, e cila fillon nga prodhimi i fares se patates,  kultivimit te patates per konsum dhe perpunim, si shitje dhe distribuimin e patates dhe produkteve tÃ« saj.\r\n', 0x706573746f76612d636f6d70616e792e6a7067, 'Vipa', '123xxx', 'Chips', 'Patatet e para te ferguara u paraqiten ne New England (Anglia e Re) si variacion i patateve te skuqura ... !', 1.5, 0x766970612070726f647563742e6a7067),
(22, 'DEVOLLI GROUP', 'Peje', 'Rudesh, Istog 31000', '+381 0 39 450 553', 'info@devolligroup.com', 'Insertimi i kompanise/produktit', 'Per dekada ne kemi qene lider ne tregun e Kosoves per inovacione ne produkte te ndryshme.', 0x6465766f6c6c692d636f6d70616e792e6a7067, 'Vita', '234vvv', 'Jogurt', 'Jogurti VITA eshte produkti me i ri i qumeshtores VITA i cili eshte prodhuar qe tâ€™i pÃ«rshtatet shijes tuaj ...', 2.5, 0xe281ae766974612d70726f647563742e6a7067),
(23, 'NUKA GROUP', 'Mitrovice', 'Rr. Mbreteresha Teute', ' 044 565 155', 'nuka@mitrovice.com', 'Insertimi i kompanise/produktit', 'Kompania " NUKA ", e cila ka filluar nga nje punetori e vogel, e themeluar ne vitin 1952. Sot eshte lidere ne tregun Kosovare ne lemin e produkteve shtepiake nga tekstili. ', 0x6e756b612d67726f75702e706e67, 'Perde', 'eee444', 'Tekstil', 'Perdet jane nje element shume i rendesishem ne dizajnin e brendshem, prandaj zgjedhja e duhur e perdeve apo kombinimin i ngjyrave dhe stileve(tradicional apo modern) shprehin individualitetin dhe personalitetin tuaj.', 350, 0x70657264652d70726f647563742e706e67),
(24, 'Mobileria Desave', 'Prizren', 'Kilometri i parÃ« nga Prizreni drejtÃ« ShqipÃ«risÃ«.', '+377 44 112360', 'desave@prizreni.net', 'Insertimi i kompanise/produktit', 'Mobilje vendore me porosi. Bartje, montim falas ne Kosove. 5 vite garancÃ« pÃ«r tÃ« gjitha prodhimet.', 0x6465736176652d636f6d70616e792e6a7067, 'Kolltuk', '777aaa', 'Druri', '5 vite garancion ...', 200, 0x6465736176652d70726f647563742e6a7067),
(25, 'MEKA Hallall Food', 'Prizren', 'PLAVE NN 22000  SHARR ( DRAGASH )', '044 119 434', 'porosi@meka-mish.com', 'Insertimi i kompanise/produktit', 'Kompania MEKA e ka filluar punen me kapital 100% privat si biznes familjar ...', 0x6d656b612d636f6d70616e792e6a7067, 'Chicken salami', '456789', 'Ushqim', 'Mish i fresket ... !', 5.5, 0x6d656b612d70726f647563742e6a7067),
(26, 'Bylmeti', 'Fushe Kosove', 'Fshati Miradi', '044 167 194', 'bylmeti@gmail.com', 'Insertimi i kompanise/produktit', 'Kompania " Bylmeti " me seli ne fshatin Miradi e Eperme komuna e Fushe Kosoves, eshte ndermarrje private e themeluar me kapital privat ne vitin 1996.', 0x62796c6d6574692d636f6d70616e792e706e67, 'Ayron', '999nnn', 'Qumesht', 'Produkt cilesor !', 3.5, 0x6179726f6e2d70726f647563742e706e67),
(27, 'AlbaQeramika', 'Prishtine', 'Kilometri IV, Magjistralja PrishtinÃ« â€“ Ferizaj, 10000 PrishtinÃ«', '+386 (0) 49 20 60 60', 'office@albaqeramika.com', 'Insertimi i kompanise/produktit', 'ALBA QERAMIKA eshte kompani lidere nÃ« Kosove ne sektorin e qeramikes.\r\n\r\nU themelua ne vitin 1993, ne qytetin e Pejes', 0x616c6261716572616d696b612d636f6d70616e792e706e67, 'Pllaka dekoruese', '111111', 'Qeramika', '- Oferta e produkteve nga prodhues me renome boterore !', 500, 0x706c6c616b612d64656b6f72756573652e706e67),
(28, 'Lesna', 'Prishtine', 'Rr. Maliq Pashe Gjinolli', '+377 44 112233', 'lesna@kosova.net', 'Insertimi i kompanise/produktit', 'Informacion ...', 0x6c65736e612d636f6d70616e792e706e67, 'Dru Merant', '222nnn', 'Druri', 'Informacion ...', 600.5, 0x6472752d6d6572616e742e706e67),
(33, 'BuÃ§aj', 'Prishtine', 'Zona Industriale p.n. 10000 Prishtine, KOSOVE', '+381 (0)38 601771', 'info@bucaj-ks.com', 'Insertimi i kompanise/produktit', 'Korporata BuÃ§aj disponon me me shume se 120 automjete te ndryshme, duke filluar nga veturat e deri te kamionet pÃ«r pesha disa toneshe. Kjo flote e motorizuar perkrahet nga nje infrastrukture e sofistikuar e depove dhe zyrave, te cilat kane nje ambient modern dhe te kendshem per pune.', 0x427563616a204b6f6d70616e69612e6a7067, 'Fineti Sticks & Dips', '888888', 'Cokollade', 'Fineti Sticks & Dips\r\nTe reja nga Fineti Sticks & Dips ha dhe luaj, mbledhi te gjitha gomat e famshme.', 2.5, 0x737469636b7326646970732e6a7067),
(34, 'NUKA GROUP', 'Mitrovice', 'Mitrovice', '044 565 155', 'nuka@mitrovice.com', 'Insertimi i kompanise/produktit', 'Nese vendosni te hyne ne shtepi te re, vizitoni dyqanet tona ... !', 0x6e756b612d67726f75702e706e67, 'Tepiha', '123456', 'Tekstil', 'Tepihi Ã«shtÃ« njÃ« foto nÃ« dysheme, dhe bukuria e tij Ã«shtÃ« nÃ« detaje...', 459, 0x7465706968612d70726f647563742e706e67),
(35, 'BINNI', 'Vushtrri', 'Rr. Bahtir Percuku', '+377 (0) 45 520-205', 'info@binni.biz', 'Insertimi i kompanise/produktit', 'Binni eshte nje nder kompanite e para te Kosoves ne fushen e sherbimeve dhe prodhimeve te dyerve, dritareve dhe produkteve te tjera ne fushen e mobilierise, qe nga viti 1989.', 0x42696e6e692d636f6d70616e792e706e67, 'Kuzhina', '234888', 'Druri', 'Historia e Binni-t eshte nje histori suksesi dhe zhvillimi ne sherbim te te gjithe adhuruesve te ambienteve komode, realizimit te ideve kreative dhe sterhollimit te shijes!', 499.9, 0x6b757a68696e612d70726f647563742e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `username`, `password`) VALUES
(2, 'saura', 'dinarama'),
(3, 'Product', 'product');

-- --------------------------------------------------------

--
-- Table structure for table `product_add`
--

CREATE TABLE `product_add` (
  `Id` int(200) NOT NULL,
  `product_name` varchar(300) NOT NULL,
  `product_id` varchar(200) NOT NULL,
  `product_category` varchar(200) NOT NULL,
  `product_info` varchar(300) NOT NULL,
  `product_image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `company_add`
--
ALTER TABLE `company_add`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product_add`
--
ALTER TABLE `product_add`
  ADD UNIQUE KEY `ID` (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `company_add`
--
ALTER TABLE `company_add`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product_add`
--
ALTER TABLE `product_add`
  MODIFY `Id` int(200) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
