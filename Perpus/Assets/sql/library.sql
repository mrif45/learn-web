SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `AdminEmail` varchar(120) DEFAULT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `UpdateDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tBuku` (
  `id` int(11) NOT NULL,
  `NamaBuku` varchar(255) DEFAULT NULL,
  `IdKategori` int(11) DEFAULT NULL,
  `ISBN` int(11) DEFAULT NULL,
  `Harga` int(11) DEFAULT NULL,
  `Dimasukan` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Diperbarui` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tKategori` (
  `id` int(11) NOT NULL,
  `NamaKategori` varchar(150) DEFAULT NULL,
  `Status` int(1) DEFAULT NULL,
  `Dimasukan` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Diperbarui` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tPeminjaman` (
  `id` int(11) NOT NULL,
  `IDBuku` int(11) DEFAULT NULL,
  `IDSiswa` varchar(150) DEFAULT NULL,
  `Dipinjam` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Pengembalian` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `Dikembalikan` int(1) DEFAULT NULL,
  `denda` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tSiswa` (
  `id` int(11) NOT NULL,
  `IDSiswa` varchar(100) DEFAULT NULL,
  `Nama` varchar(120) DEFAULT NULL,
  `IDEmail` varchar(120) DEFAULT NULL,
  `NoTelp` char(11) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `Status` int(1) DEFAULT NULL,
  `Registrasi` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Diperbarui` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;