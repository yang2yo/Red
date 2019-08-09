<?php
error_reporting(E_ALL);

ini_set("display_errors", 1);


include "./include/session.php";
include "./include/connect.php";

$userID = $_POST['userID'];
$userPassword = $_POST['userPassword'];
//$userName = $_POST['userName'];

$sql = "SELECT * FROM user WHERE userID = '".$_POST['userID']."'";
$row = $sql->fetch_array();
$hash_pw = $row['pw'];
$hash_name = $orw['name'];


if(password_verify($userPassword, $hash_pw)) //만약 password변수와 hash_pw변수가 같다면 세션값을 저장하고 알림창을 띄운후 main.php파일로 넘어갑니다.
	{
		$_SESSION['userID'] = $row["id"];
        $_SESSION['userpw'] = $row["pw"];
        $_SESSION['userName']= $row["name"];

		echo "<script>alert('로그인되었습니다.'); location.href='modiFile.php';</script>";
	}else{ // 비밀번호가 같지 않다면 알림창을 띄우고 전 페이지로 돌아갑니다
		echo "<script>alert('아이디 혹은 비밀번호를 확인하세요.'); history.back();</script>";
	}








?>
