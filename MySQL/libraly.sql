CREATE DATABASE library;
USE library;

CREATE TABLE TheLoai(
	MaTheLoai 	INT PRIMARY KEY NOT NULL,
    TenTheLoai	VARCHAR(50) NOT NULL
);

CREATE TABLE Sach(
	MaSach 		INT PRIMARY KEY NOT NULL,
    TenSach 	VARCHAR(50) NOT NULL,
    NhaXB		VARCHAR(50) NOT NULL,
    TacGia		VARCHAR(50) NOT NULL,
    NamXB 		YEAR NOT NULL,
    SoLanXB 	INT NOT NULL,
    Gia			INT NOT NULL,
	Anh			VARCHAR(100),
    MaTheLoai	INT NOT NULL,
    FOREIGN KEY (MaTheLoai) REFERENCES TheLoai(MaTheLoai)
);

CREATE TABLE TheSV(
	MaSV		INT PRIMARY KEY NOT NULL,
    TenSV		VARCHAR(50) NOT NULL,
    NgaySinh	DATE NOT NULL,
    DiaChi		VARCHAR(100) NOT NULL,
    Email		VARCHAR(50) NOT NULL,
    SoDienThoai	VARCHAR(15) NOT NULL,
    SoLanBiPhat	INT
);

CREATE TABLE MuonSach(
	MaMuonSach	INT PRIMARY KEY NOT NULL,
    MaSV		INT NOT NULL,
    FOREIGN KEY (MaSV) REFERENCES TheSV(MaSV),
    MaSach		INT NOT NULL,
    FOREIGN KEY (MaSach) REFERENCES Sach(MaSach),
    NgayMuon	DATE NOT NULL,
    NgayTra		DATE,
    HanCuoiTraSach	DATE NOT NULL,
    BiPhat		BOOLEAN
);

INSERT TheLoai VALUE(1,'Hành Động');
INSERT TheLoai VALUE(2,'Kinh Dị');
INSERT TheLoai VALUE(3,'Trinh Thám');
INSERT TheLoai VALUE(4,'Ngôn Tình');
INSERT TheLoai VALUE(5,'Kiến Thức');
INSERT TheLoai VALUE(6,'Hư Cấu');
INSERT Sach VALUE(1,'Thợ cơ khí toán học','Nhà xuất bản Trẻ','Mark Levi',1984,2,79000,'',5);
INSERT Sach VALUE(2,'Thằng quỷ nhỏ','Nhà xuất bản Trẻ','Nguyễn Nhật Ánh',1990,6,79000,'',6);
INSERT Sach VALUE(3,'Mắt Biếc','Nhà xuất bản Trẻ','Nguyễn Nhật Ánh',2019,2,220000,'',4);
INSERT Sach VALUE(4,'Truyện Ma Nguyễn Ngọc Ngạn','Âm Dương','Bác Ngạn',2009,1,42000,'',2);
INSERT Sach VALUE(5,'Solo Leveling','D&C Media Co','Chu-Gong',2020,1,59000,'',1);
INSERT Sach VALUE(6,'Conan','Nhà xuất bản Trẻ','Aoyama Gōshō',1996,12,29000,'',3);
INSERT Sach VALUE(7,'Sherlock Holmes','Nhà xuất bản Trẻ',' Arthur Conan Doyle',1996,12,109000,'',3);
SELECT * FROM Sach;
INSERT TheSV VALUE (1,'Nguyễn Nam Vũ','1995-07-19','3/1 Thái Phiên','kuro1907@gmail.com','0782368848',1);
INSERT TheSV VALUE (2,'Đỗ Thị Thảo Trinh','1997-08-11','Bao Vinh','warwar097@gmail.com','0195574122',0);
INSERT TheSV VALUE (3,'Trần Quang Ychi','1994-02-15','Nguyễn Trãi','ychimusic94@gmail.com','0788884444',0);
INSERT TheSV VALUE (4,'Nguyễn Cương','2002-12-04','Hùng Vương','cuongvan2002@gmail.com','071234444',3);
INSERT TheSV VALUE (5,'Lê Đặng Minh Phúc','1994-12-30','Thánh Gióng','kouta3012@gmail.com','071235525',3);
UPDATE TheSV SET NgaySinh = '2002-12-04' WHERE MaSV = 4;
SELECT * FROM TheSV;
INSERT MuonSach VALUE (1,2,1,'2021-12-1',NULL,'2021-12-15',NULL);
INSERT MuonSach VALUE (2,2,4,'2021-10-1',NULL,'2021-11-15',NULL);
INSERT MuonSach VALUE (3,3,4,'2021-10-1',NULL,'2021-11-15',NULL);
INSERT MuonSach VALUE (4,5,2,'2021-09-1',NULL,'2021-11-15',TRUE);
INSERT MuonSach VALUE (5,4,3,'2021-03-1',NULL,'2021-11-15',TRUE);
INSERT MuonSach VALUE (6,4,1,'2021-03-1',NULL,'2021-11-15',TRUE);
UPDATE MuonSach SET NgayTra = NULL WHERE MaMuonSach = 3;
SELECT * FROM MuonSach;

SELECT * FROM Sach WHERE Gia > 50000;
SELECT * FROM Sach ORDER BY Gia DESC LIMIT 10;
SELECT TheLoai.TenTheLoai,count(Sach.MaTheLoai) as SốLượng  FROM TheLoai
INNER JOIN Sach ON TheLoai.MaTheLoai = Sach.MaTheLoai
GROUP BY Sach.MaTheLoai;
SELECT	t1.TenSach,t2.NgayMuon,t2.NgayTra,t2.HanCuoiTraSach,
		t3.MaSV,t3.TenSV,t3.SoDienThoai FROM Sach t1
INNER JOIN MuonSach t2 ON t1.MaSach = t2.MaSach
INNER JOIN TheSV t3 ON	t2.MaSV = t3.MaSV
WHERE t2.NgayTra IS NULL;
SELECT t1.TenSach,t2.TenTheLoai,count(t3.MaMuonSach) as Sốlầnmượn FROM Sach t1
INNER JOIN TheLoai t2 ON t1.MaTheLoai = t2.MaTheLoai
INNER JOIN MuonSach t3 ON t1.MaSach = t3.MaSach
GROUP BY t1.TenSach
ORDER BY Sốlầnmượn DESC LIMIT 5;
SELECT t1.TenSV,t1.MaSV,count(t2.MaMuonSach) as Sốlầnmượn,t2.BiPhat FROM TheSV t1
INNER JOIN MuonSach t2 ON t1.MaSV = t2.MaSV
GROUP BY t1.TenSV
ORDER BY t1.SoLanBiPhat;