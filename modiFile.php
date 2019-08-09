<?php 
include  "./include/connect.php"; 
include  "./include/session.php";


$sql = "SELECT * FROM user WHERE userID = '{$userID}' AND userPassword = '{$userPassword}'" ;

$res = $conn->query($sql);

$row = $res->fetch_array(MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html>
        <link rel="stylesheet" href="css/topMenu.css">
        <link rel="stylesheet" href="css/such.css">
        <link rel="stylesheet" href="css/table.css">
        <link rel="stylesheet" href="css/newModfile.css">
        <link rel="stylesheet" href="css/logoutButton.css">
        <link rel="stylesheet" href="css/paging.css">
        <link rel="stylesheet" href="css/welcome.css">  





<head>
  <meta charset="UTF-8">
  <title>세부사항 확인창</title>
 <!-- <script type="text/javascript" src="js/logout.js"></script>

  <script type="text/javascript" src="js/selectMake.js"></script>
  <script src="http://code.jquery.com/jquery-3.4.1.js"> </script>
  <script src="js/paging.js"> </script>
</head>
<body> -->
       
    <button id="logout"  class="btn-3" onclick="showLogout();">Logout</button>
  <br><br> 
    
    
    <div class="name" style="margin-left:200px;">
    <?php 
    $name = $_SESSION['ses_userName']; 
    $message = $name.'님 어서오세요';
        
        echo $message;
        ?>
    </div>
        
        
         <!-- 제목 -->
         
     
     <!-- 검색창 -->     
     <span id='black_window'>
         <input type="text" placeholder="키워드를 입력해주세요" id="input_text"/> 
     </span>
     <button type="submit" id="sch_smit">검색</button>
     
     
     
     <!-- 수정 리스트  -->
     <table id="products" >
         
             
         <thead>
         <tr>
             <th scope="cols">등록번호</th>
             <th scope="cols">올린사람</th>
             <th scope="cols">부서</th>
             <th scope="cols">수정사항 올라온 시간</th>
             <th scope="cols">최종 수정 시간</th>
             <th scope="cols">수정이 필요한 사이트</th>
             <th scope="cols">최종 수정 상태</th>
             <th scope="cols">세부사항 확인</th>
          
             
         </tr>
         </thead>
         <tbody>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td ></td>
             <td></td>
             <td><button type="button" onclick="location.href='listCheck.html'">확인</button></td>
             
             
         </tbody>
         <tbody>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td ></td>
             <td><button type="button" onclick="location.href='listCheck.html'">확인</button></td>
            
            </tbody>
            <tbody>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td ></td>
             <td><button type="button" onclick="location.href='listCheck.html'">확인</button></td>
             
                    
                </tbody>
                <tbody>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td ></td>
             <td><button type="button" onclick="location.href='listCheck.html'">확인</button></td>
            
                        
               </tbody>  
                <tbody>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td id="colorCheck"></td>
             <td><button type="button" onclick="location.href='listCheck.html'">확인</button></td>
             
                           
             


             
                </tbody>  
         <tbody id="AddOption"></tbody>
         
         </tbody>
     </table>
     
<!-- 페이징-->
     

    <!--현재는 페이징 영역 ID "paging" 으로 고정 -->
    <div id="paging"></div><br><br>
    <div id="log"></div>

     
     <!--새로운 수정사항-->
     
     
        <div class="wrap">
                <button id ="newModfile" class="button" onclick="location.href='NewModifile.php'">수정사항 작성!</button>
              </div>
     
    


  
  




</body>
</html>