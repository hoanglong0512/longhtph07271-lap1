<?php
// Tính đã hình

// VD 1

class NguoiLon{

       function talk(){
             echo "Học Cao Đẳng Poly Dễ Quá Con Không Nên Học ";
       }

}

class HocSinh extends NguoiLon{

}

class SinhVienPoly extends HocSinh{
	function talk(){
		echo "Bác Cứ Cho Con Bác Học Thử Xem Biết Cái Sai Luôn :))";
	}
}

$Sv = new SinhVienPoly();
$Sv->talk();


echo "<hr>";

// VD 2

class OngBa{

       function talk(){
             echo "Mày Phải Học Trường Này ... ";
       }

}

class BoMe extends OngBa{

}

class Con extends BoMe{
	function talk(){
		echo "Nhưng Con Thích Học Trường Poly Cơ :))";
	}
}

$Sv = new Con();
$Sv->talk();

?>