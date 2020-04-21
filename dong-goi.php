<?php

// Tính đóng Gói

// VD 1

class Admin{

	private $addUser;
    protected $addPost = 'thêm bài 1';

	 function setUser($new)
	 {
	 	$this->addUser = $new;
	 }
	 function getUser(){
	 	return $this->addUser;
	 }
	 function setPost($new){
        $this->addPost = $new;
	 }
}

Class Ctv extends Admin{
     function getPost(){
     	return $this->addPost;
     }

}

// lấy private
$them = new Admin();
$them->setUser('thêm User thành công');
echo $them->getUser();

// Ctv set cho thuộc tính protected

$nhanvien = new Ctv();
$nhanvien->setPost('thêm bài 2');
echo $nhanvien->getPost();




?>
