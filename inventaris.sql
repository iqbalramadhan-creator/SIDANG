/*
SQLyog Ultimate v10.42 
MySQL - 5.5.5-10.1.21-MariaDB : Database - inventaris
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`inventaris` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `inventaris`;

/*Table structure for table `barang_keluar` */

DROP TABLE IF EXISTS `barang_keluar`;

CREATE TABLE `barang_keluar` (
  `kode_barang` int(8) NOT NULL AUTO_INCREMENT,
  `kodebarang` varchar(15) NOT NULL,
  `jenis_barang` varchar(50) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `satuan` char(15) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `tgl_input` date NOT NULL,
  PRIMARY KEY (`kode_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `barang_keluar` */

insert  into `barang_keluar`(`kode_barang`,`kodebarang`,`jenis_barang`,`qty`,`satuan`,`keterangan`,`tgl_input`) values (1,'123','kulit','30','lembar','produksi','2018-03-28'),(2,'456','jarum','20','biji','produksi','2018-03-28');

/*Table structure for table `kib_barang` */

DROP TABLE IF EXISTS `kib_barang`;

CREATE TABLE `kib_barang` (
  `kode_barang` int(8) NOT NULL AUTO_INCREMENT,
  `kodebarang` varchar(15) NOT NULL,
  `jenis_barang` varchar(50) NOT NULL,
  `qty` varchar(25) NOT NULL,
  `satuan` char(200) NOT NULL,
  `th_beli` date NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `tgl_input` date NOT NULL,
  `qty_akhir` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`kode_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `kib_barang` */

insert  into `kib_barang`(`kode_barang`,`kodebarang`,`jenis_barang`,`qty`,`satuan`,`th_beli`,`keterangan`,`tgl_input`,`qty_akhir`) values (2,'eerew','efwf','43','efe','2018-04-16','rrsrw','2018-04-16',NULL);

/*Table structure for table `tahun` */

DROP TABLE IF EXISTS `tahun`;

CREATE TABLE `tahun` (
  `id_tahun` char(4) NOT NULL,
  `tahun` date NOT NULL,
  `bulan` varchar(200) NOT NULL,
  PRIMARY KEY (`id_tahun`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tahun` */

insert  into `tahun`(`id_tahun`,`tahun`,`bulan`) values ('1','2018-01-22','Januari 2018'),('10','2018-02-25','Februari 2018'),('11','2018-03-21',''),('12','2018-04-26','2018-01-09'),('13','2018-05-27','2017-12-05'),('14','2018-06-27','2018-01-04'),('15','2018-07-28','2018-01-22'),('16','2018-08-29','0000-00-00'),('17','2018-09-28','0000-00-00'),('18','2018-10-29','0000-00-00'),('19','2018-11-28','0000-00-00'),('2','2018-12-29','0000-00-00'),('20','0000-00-00','0000-00-00'),('21','0000-00-00','0000-00-00'),('22','0000-00-00','0000-00-00'),('23','0000-00-00','0000-00-00'),('24','0000-00-00','0000-00-00'),('25','2018-01-16','0000-00-00'),('26','0000-00-00','0000-00-00'),('27','0000-00-00','0000-00-00'),('28','0000-00-00','0000-00-00'),('29','0000-00-00','0000-00-00'),('3','0000-00-00','0000-00-00'),('30','0000-00-00','0000-00-00'),('31','0000-00-00','0000-00-00'),('32','0000-00-00','0000-00-00'),('33','0000-00-00','0000-00-00'),('4','0000-00-00','0000-00-00'),('5','0000-00-00','0000-00-00'),('6','0000-00-00','0000-00-00'),('7','0000-00-00','0000-00-00'),('8','0000-00-00','0000-00-00'),('9','2018-01-22','0000-00-00');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` char(4) NOT NULL,
  `username` char(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `posisi` varchar(15) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id_user`,`username`,`nama_lengkap`,`password`,`posisi`,`tlp`) values ('1','admin','admin','admin','Administrator','234134'),('5667','iqbal','iqbal','iqbal','Operator','786768687'),('7886','chino','chino','chino','User','7877879');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
