

<!DOCTYPE html>
<!--  <link rel="stylesheet" href="css/login.css"> -->

<head>
    <meta charset="UTF-8">
    <!--<script type="text/javascript" src="../js/loginForm.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js" ></script> -->
<title>Login</title>
</head>

<body>
<div id="login-page" class="row">
        <div class="col s12 z-depth-4 card-panel">
          
          
          
          
          <form name="login" action="./loginAction.php" method="post" ><!--onsubmit= "return checkSubmit(); -->
            <div class="row">
              <div class="input-field col s12 center">
               
                <p class="center login-form-text">로그인</p>
              </div>
            </div>
            <div class="row margin">
              <div class="input-field col s12">
                
                <i class="material-icons prefix" style = "margin-right: 28px;">이름:</i>
                <input id="userID" name="userID" type="text" style = "margin-right: 50"/>
                <label for="username" data-error="wrong" class="center-align" data-success="right"></label>            
              </div>
              <br>
            </div>
            <div class="row margin">
              <div class="input-field col s12">
                <!-- <i class="mdi-actiㅌon-lock-outline prefix"></i> -->
                <i class="material-icons prefix">비밀번호:</i>
                <input id="userPassword" name="userPassword" type="userPassword" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII=&quot;);"/>
                <label for="password"></label>
              </div>
            </div>
            <br>
            <div class="row">          
              <div class="input-field col s12 login-text">                   
                  <input type="checkbox" id="test6" checked="checked" />
                  <label for="test6" class="pointer-events">체크시 이름과 비밀번호를 기억합니다</label>
              </div>
            </div>
            <br><br>
            <div class="row">
              <div class="input-field lgoin1">
                <button type="submit" class="btn waves-effect waves-light col s12" 
                ;
                style="width:300px; height:40px; background-color:#66ff66; color:white; font-size:20px;">Login</button>
              </div>
              </form>



        </div>
      </div>
      <!--자바스크립트-->
    <!--  <script type="text/javascript" src="js/login.js"></script> -->
    
    
    </body>
      </html>