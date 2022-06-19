<?php
session_start();
##if(isset($_SESSION["systemlogin"]))
##{
    ##if($_SESSION["systemlogin"]=="ok")
    ##{
    ##    echo "<a href='logout.php'>登出系統</a>";
    ##}
    ##else
    ##{
    ##    echo "非法進入";
    ##}
##}
//if(isset($_SESSION["userlogin"]))
//{
  //  if($_SESSION["userlogin"]=="self")
    //{
      //  echo "<a href='logout.php'>登出系統</a>";
    //}
    //else
    //{
      //  echo "非法進入";
        //exit();
    //} 
//}
//else{
  //  echo "非法進入";
    //exit();
//}
?>

<!DOCTYPE html>  
<html lang="zh-TW">  
<head>  
    <meta charset="UTF-8">  
    <title>註冊</title>  
    <style>
html{   
    width: 100%;   
    height: 100%;   
    overflow: auto;   
    font-style: sans-serif;   
}   
body{   
    width: 100%;   
    height: 100%;   
    font-family: ' DFKai-SB'," DFKai-SB";   
    margin: 0;   
    background-color: #F29E9E;   
}   
#login{   
    position: absolute;   
    top: 50%;   
    left:50%;   
    margin: -150px 0 0 -150px;   
    width: 300px;   
    height: 300px;   
}   
#login h1{   
    color: #304CB1;   

    letter-spacing: 1px;   
    text-align: center;   
}   
h1{   
    font-size: 2em;   
    margin: 0.67em 0;   
}   
 input{   
    width: 300px;   
    height: 30px;   
    margin-bottom: 10px;   
    outline: none;   
    padding: 10px;   
    font-size: 13px;   
    color: #fff;   
    text-shadow:1px 1px 1px;   
    border-top: 1px solid #C7E3D9;   
    border-left: 1px solid #C7E3D9;   
    border-right: 1px solid #C7E3D9;   
    border-bottom: 1px solid #C7E3D9;   
    border-radius: 4px;   
    background-color: #C7E3D9;   
}    
.but{   
    width: 100px;   
    min-height: 20px;   
    display: block;   
    background-color: #304CB1;   
    border: 1px solid #3762bc;   
    color: #fff;   
    padding: 9px 14px;   
    font-size: 15px;   
    line-height: normal;   
    border-radius: 5px;   
    margin: 0;   

}  
    </style>
</head>  
<body>  
    <div id="login">  
        <h1>註冊</h1>  
        <form action ="enrollconfirm.php" method="post">  
            <input type="text" required="required" placeholder="使用者名稱" name="u"></input>  
            <input type="password" required="required" placeholder="密碼" name="p1"></input> 
            <input type="password" required="required" placeholder="密碼確認" name="p2"></input> 
            <input type="email" required="required" placeholder="email" name="e"></input> 
            <input type="tel" required="required" placeholder="電話" name="t"></input> 
            <input type="radio" required="required" name="role" value="user">User<input type="radio" required="required" name="role" value="admin">Admin</input>
            <button class="but" type="submit">註冊</button>  
            
        </form>  
    </div>  
</body>  
</html> 