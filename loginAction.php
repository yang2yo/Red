<?php
error_reporting(E_ALL);

ini_set("display_errors", 1);


include "./include/session.php";
include "./include/connect.php";

$userID = $_POST['userID'];
$userPassword = $_POST['userPassword'];

$sql = "SELECT * FROM user WHERE userID = '{$userID}' AND userPassword = '{$userPassword}'" ;

$res = $conn->query($sql);

$row = $res->fetch_array(MYSQLI_ASSOC);


if ($row != null) {
    
    
    $_SESSION['ses_userName'] = $row['userName'];
   // echo $_SESSION['ses_userName'];
    header("Location:/modiFile.php");
}

if($row == null){
    
    echo "<script>alert(\"로그인 실패 아이디와 비밀번호가 일치하지 않습니다\");</script>";
    echo "<script> history.back(); </script>";
}




?>
