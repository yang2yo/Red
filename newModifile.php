<!DOCTYPE html>
<!--
<link rel="stylesheet" href="css/logoutButton.css">
<link rel="stylesheet" href="css/select.css">
<link rel="stylesheet" href="css/checkbox.css">
<link rel="stylesheet" href="css/fileUpDown.css">
<link rel="stylesheet" href="css/table.css">
<link rel="stylesheet" href="css/popupButton.css">
<link rel="stylesheet" href="css/welcome.css">
<link rel="stylesheet" href="css/ndCheckbox.css">
<link rel="stylesheet" href="css/push.css">
-->








<head>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>  
    <title>새로운 수정사항</title>
  
        <meta charset="utf-8"/>

<style>


input::-webkit-input-placeholder{
    font-style: italic;
    font-size: 15px;
}



</style>
<script>
$(document).ready(function() {
    $('#check_all').click();{
        if($('#check_all').is(':checked') == true) {
            $("input[name=chkYn]:checked").attr("checked", true);
        }else{
            $("input[name=chkYn]:checked").attr("checked",false);
        }
    }
})



</script>








</head>
<body>
    <article></article>
   <button id=logout class="btn-3" onclick="showLogout();">Logout</button>
 
 
 <?php
$name = $_SESSION['ses_userName']; 
$message = $name.'님 어서오세요';

    echo $message;
    ?>
    
    


  
  
  
  
  
        
    <!--타이틀,세부타이틀창-->
    <article>
    <span id="select" >
        <select onchange="catagoryChange(this)" style="width:300px;height:40px;">
            <option value="a">타이틀</option>
            <option value="b">프로그래밍</option>
            <option value="c">디자인</option>
            <option value="d"></option>
            
        </select>
    </span>
    </div>
 
    <span id="mainlt">
    <select id="lt" style="width:300px; height:40px">
        <option>세부 타이틀</option>
    </select>
    </span>

    <!--제목창-->
    <span>
        <input type="text" id="inputTitle"   placeholder="제목을 입력해주세요"   style="resize: none;width:800px;height:40px">

    </span>

<div class="push" >
    내용:
</article>
    <!--내용 입련칸-->
    <textarea id="inputText" cols="40" rows="8"  placeholder="내용을 입력해주세요"   style="resize: none; margin-left:200px;  width:1407px; height:200px;"></textarea>
    <!--비고 입렵칸-->
  

<!--파일 업로드-->
    <form id="fileUpDown">
     <fieldset>
         <legend>사진 및 파일 첨부</legend>
         
         올리실 파일을 선택해주세요<input id="files-upload" type="file" multiple><br><br>
         
     </fieldset>    
    </form>
</div>
     

     <!--수정 체크표-->
     
     <div class= "modiList">수정이 필요한 사이트를 선택해주세요</div>
     
     
     <div class="main">
     <!--레드프린팅-->
        <section class="sec1" id="content1">
            <input id="tab1" type="checkbox" name="tabs" >
            <label class="label1" for="tab1">레드 프린팅</label>
                <span class="space1">국내<input type="checkbox" name="chk"></span>
                <span class="space2">해외<input type="checkbox" name="chk"></span>
                <span class="space3">영문<input type="checkbox" name="chk"></span>
                </section>
            

       
        <!--분양몰-->
        <section class="sec2" id="content2">
           <input id="tab2" type="checkbox" name="tabs" >
            <label class="label2" for="tab2">분양몰</label>
                 <span class="space1">로이<input type="checkbox" name="chk"></span>
                 <span class="space2">도아<input type="checkbox" name="chk"></span>
                 <span class="space3">오리다<input type="checkbox" name="chk"></span>
        </section>


            <!--나이키-->
        <section class="sec3" id="content3">     
            <input id="tab3" type="checkbox" name="tabs" >
            <label class="label3" for="tab3">나이키</label>
            <span class="nike">나이키<input type="checkbox" name="chk"></span>
               </section>
        
    
    
    </div>
      

      <!--취소,생성버튼-->
      <br>
      
      <span id="btn_group">
        <button id="create"  onclick="fchk();">생성</button>
    </span>
    <button id="cancel" onclick="showCancel();">취소</button>
      
    






    <!--
<script type="text/javascript" src="js/selectMake.js"></script>
<script type="text/javascript" src="js/fileDownload.js"></script>
<script type="text/javascript" src="js/popup.js"></script>
<script type="text/javascript" src="js/logout.js"></script>
<script type="text/javascript" src="js/createChecking.js"></script>
-->







</body>

</html>