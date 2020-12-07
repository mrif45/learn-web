SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+07:00";


CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nama_admin` varchar(100) DEFAULT NULL,
  `email_admin` varchar(120) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tgl_reg` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `id_admin` int(11) NOT NULL,
  `nama_kategori` varchar(150) DEFAULT NULL,
  `tgl_reg` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_update` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY(id_admin) REFERENCES admin(id_admin)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `id_admin` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_buku` varchar(255) DEFAULT NULL,
  `ISBN` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `tgl_reg` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_update` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY(id_admin) REFERENCES admin(id_admin),
  FOREIGN KEY(id_kategori) REFERENCES kategori(id_kategori)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `id_buku` int(11) NOT NULL,
  `nama_siswa` varchar(120) DEFAULT NULL,
  `email_siswa` varchar(120) DEFAULT NULL,
  `password` varchar(120) DEFAULT NULL,
  `no_telp` char(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `tgl_reg` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_update` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY(id_buku) REFERENCES buku(id_buku)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `id_buku` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tgl_pinjam` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_kembali` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `denda` int(11) DEFAULT NULL,
  FOREIGN KEY(id_buku) REFERENCES buku(id_buku),
  FOREIGN KEY(id_siswa) REFERENCES siswa(id_siswa),
  FOREIGN KEY(id_kategori) REFERENCES kategori(id_kategori)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



COMMIT;
