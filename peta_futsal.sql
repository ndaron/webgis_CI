/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 100116
Source Host           : localhost:3306
Source Database       : peta_futsal

Target Server Type    : MYSQL
Target Server Version : 100116
File Encoding         : 65001

Date: 2017-06-21 23:37:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for jenis_lap
-- ----------------------------
DROP TABLE IF EXISTS `jenis_lap`;
CREATE TABLE `jenis_lap` (
  `id_jenis` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_lapangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jenis_lap
-- ----------------------------
INSERT INTO `jenis_lap` VALUES ('1', 'kayu');
INSERT INTO `jenis_lap` VALUES ('2', 'vnyl');
INSERT INTO `jenis_lap` VALUES ('3', 'sintetis');
INSERT INTO `jenis_lap` VALUES ('4', 'semen');

-- ----------------------------
-- Table structure for lap_futsal
-- ----------------------------
DROP TABLE IF EXISTS `lap_futsal`;
CREATE TABLE `lap_futsal` (
  `id_lap` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lap` varchar(255) DEFAULT NULL,
  `long` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_telp` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `jenis_lap` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_lap`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lap_futsal
-- ----------------------------
INSERT INTO `lap_futsal` VALUES ('1', 'champions futsal', '112.60582', '-7.964673', 'Jl. Malenggang Pisang Candi, Sukun, Kota Malang', null, 'champion.jpg', 'kayu');
INSERT INTO `lap_futsal` VALUES ('2', 'olimpico futsal', '112.61344', '-7.962171', 'Jl. Bendungan Sutami, Sumbersari, Kec. Lowokwaru, Kota ', '(0341) 572062', 'olimpico.jpg', 'sintetis');
INSERT INTO `lap_futsal` VALUES ('3', 'Ongisnade futsal', '112.605825', '-7.95583', 'Jl. Bend. Sigura-Gura Barat No.3, Karangbesuki, Sukun, Kota Malang, Jawa Timur 65145', null, 'ongisnade.jpg', 'semen');
INSERT INTO `lap_futsal` VALUES ('4', 'Caesar Futsal', '112.605931', '-7.939975', 'Jl. Joyo Raharjo No.281, Merjosari, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144', '0858-5678-2029', 'caesar.jpg', 'sintetis');
INSERT INTO `lap_futsal` VALUES ('5', 'Buana Futsal', '112.60115', '-7.938849', 'Jl. Tlogo Sari No.35, Merjosari, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144', null, 'buana.jpg', 'sistesis');
INSERT INTO `lap_futsal` VALUES ('6', 'Viva Fustal', '112.618143', '-7.947997', 'Jl. Bunga Andong, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', '(0341) 484377', 'viva.png', 'sistetis');
INSERT INTO `lap_futsal` VALUES ('7', 'Zona SM Futsal', '112.63123', '-7.93268', 'Jl. Sudimoro Utara, Mojolangu, Kec. Lowokwaru, Kota Malang, Jawa Timur 65142', '0857-0808-0801', 'zona.png', 'sintetis');
INSERT INTO `lap_futsal` VALUES ('8', 'Angkasa Futsal', '112.627287', '-7.941715', 'Jl. Papa Kuning No.40, Tulusrejo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', '(0341) 4345877', 'angkasa.jpg', 'vnyl');
INSERT INTO `lap_futsal` VALUES ('9', 'ABM Futsal', '112.637893', '-7.941289', 'STIE ABM, Jl. Terusan Candi Kalasan, Mojolangu, Kec. Lowokwaru, Kota Malang, Jawa Timur 65142', '0851-0209-2046', 'anm.jpg', 'sintetis');
INSERT INTO `lap_futsal` VALUES ('10', 'Wijaya Putra Futsal', '112.644035', '-7.944961', 'Jl. Tenaga Selatan No.12, Blimbing, Kota Malang, Jawa Timur', '(0341) 8178899', 'wijaya.jpg', 'sintetis');
INSERT INTO `lap_futsal` VALUES ('11', 'HD Futsal', '112.66951', '-7.96933', 'Jl. Wisnuwardhana No.1, Madyopuro, Kedungkandang, Malang, Jawa Timur 65154', '(0341) 724307', 'hd.png', 'sintetis');
INSERT INTO `lap_futsal` VALUES ('12', 'champions futsal Ma Chung', '112.592585', '-7.957537', 'Jl. Villa Puncak Tidar, Karangwidoro, Dau, Malang, Jawa Timur 65151', '(0341) 580580', 'machung.png', 'sisntetis');

-- ----------------------------
-- Table structure for poi
-- ----------------------------
DROP TABLE IF EXISTS `poi`;
CREATE TABLE `poi` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of poi
-- ----------------------------
INSERT INTO `poi` VALUES ('1', 'lap', 'bola.png');
INSERT INTO `poi` VALUES ('2', 'toko', null);

-- ----------------------------
-- Table structure for toko_sport
-- ----------------------------
DROP TABLE IF EXISTS `toko_sport`;
CREATE TABLE `toko_sport` (
  `id_toko` int(255) NOT NULL AUTO_INCREMENT,
  `nama_toko` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `long` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_telp` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_toko`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of toko_sport
-- ----------------------------
INSERT INTO `toko_sport` VALUES ('1', 'Grazie Store', '-7.955462', '112.607735', 'Ruko Classy Kav. 1, Jalan Bendungan Sigura-Gura Barat, Karangbesuki, Sukun, Karangbesuki, Sukun, Malang, Jawa ', '0813-5700-9342', 'grazie.jpg');
INSERT INTO `toko_sport` VALUES ('2', 'Venus Sport', '-7.966023', '112.615155', 'Jl. Galunggung No.86C, Gading Kasri, Klojen, Kota Malang, Jawa Timur 65115', null, 'venus.png');
INSERT INTO `toko_sport` VALUES ('3', 'Anugrah Sport', '-7.985306', '112.630786', 'Jl. Ade Irma Suryani, Kauman, Klojen, Kota Malang, Jawa Timur 65117', '(0341) 326217', 'anugerah.png');
INSERT INTO `toko_sport` VALUES ('4', 'Arema Sport', '-7.985339', '112.631074', 'Jl. Pasar Besar, Sukoharjo, Klojen, Kota Malang, Jawa Timur 65117', null, 'arema.png');
INSERT INTO `toko_sport` VALUES ('5', 'Ramah Sport', '-7.985634', '112.632231', 'Jl. Pasar Besar No.50, Sukoharjo, Klojen, Kota Malang, Jawa Timur 65118', '(0341) 325304', null);
INSERT INTO `toko_sport` VALUES ('6', 'Rachman Sport', '-7.985087', '112.63153', 'Jl. Pasar Besar, Sukoharjo, Klojen, Kota Malang, Jawa Timur 65118', '(0341) 326922', 'rachman.png');
INSERT INTO `toko_sport` VALUES ('7', 'Bandung Sport', '-7.942442', '112.610641', 'Jl. M.T. Haryono No.98, Dinoyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144', '0853-2772-1111', 'bandung.png');
INSERT INTO `toko_sport` VALUES ('8', 'Aneka Sport Malang', '-7.948864', '112.628327', 'Jl. Kalpataru No.115 A, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65153', '0812-4947-4247', null);
INSERT INTO `toko_sport` VALUES ('9', 'Dunia Bola', '-7.944931', '112.621038', 'Jl. Bunga Coklat, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', '(0341) 483781', 'dunia.png');
INSERT INTO `toko_sport` VALUES ('10', 'Jersey Zone', '-7.945364', '112.618955', 'Jl. Soekarno Hatta, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', '0822-1009-2631', 'jersey.png');
