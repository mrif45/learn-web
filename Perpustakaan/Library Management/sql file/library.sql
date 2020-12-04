SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+07:00";


CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) DEFAULT NULL,
  `email_admin` varchar(120) DEFAULT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `tgl_reg` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `nama_buku` varchar(255) DEFAULT NULL,
  `ISBN` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `tgl_reg` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_update` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `nama_kategori` varchar(150) DEFAULT NULL,
  `tgl_reg` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_update` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `id_siswa` varchar(150) DEFAULT NULL,
  `id_kategori` int(11) NOT NULL,
  `tgl_pinjam` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_kembali` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `denda` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `siswa` (
  `id_siswa` varchar(100) DEFAULT NULL,
  `id_buku` int(11) NOT NULL,
  `nama_siswa` varchar(120) DEFAULT NULL,
  `email_siswa` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `no_telp` char(11) DEFAULT NULL,
  `Status` int(1) DEFAULT NULL,
  `tgl_reg` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_update` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `buku`
  MODIFY `id_buku?` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `kategori`
  MODIFY `id_kategori?` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `siswa`
  MODIFY `id_siswa?` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;
