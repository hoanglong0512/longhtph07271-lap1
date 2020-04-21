<?php
// Tính Kế thừa

// VD 1

class SinhVien{
	var $mssv;
	var $name;
	var $ChuyenNganh;

	function __construct($mssv= 0,$name="",$ChuyenNganh=""){

		$this->mssv = $mssv;
		$this->name = $name;
		$this->ChuyenNganh = $ChuyenNganh;
		
	}

	function getInfo(){
	echo "Tôi Tên Là: ". $this->name. " Mã Sinh Viên: " . $this->mssv . " Chuyên Ngành: ". $this->ChuyenNganh."<br>";
	}
}
 
class SinhVienCntt extends SinhVien{

}

class SinhVienMarket extends SinhVien{

}

$info = new SinhVienCntt(123,'Hoang Long', 'Cntt');
$info->getInfo();
$info = new SinhVienCntt(321,'Trung Dung', 'Marketing');
$info->getInfo();


echo "<hr>";
// VD 2

class NhanVien{
	var $msnv;
	var $name;
	var $PhongLamViec;

	function __construct($msnv= 0,$name="",$PhongLamViec=""){

		$this->msnv = $msnv;
		$this->name = $name;
		$this->PhongLamViec = $PhongLamViec;
		
	}

	function getInfo(){
	echo "Tôi Tên Là: ". $this->name. " Mã Nhân Viên: " . $this->msnv . " Phòng Làm Việc: ". $this->PhongLamViec."<br>";
	}
}
 
class NhanVien1 extends NhanVien{

}

class NhanVien2 extends NhanVien{

}

$info = new NhanVien1(123,'Nguyen Van A', 'Dịch vụ sinh viên');
$info->getInfo();
$info = new NhanVien2(321,'Nguyen Van B', 'Đào tạo');
$info->getInfo();

?>