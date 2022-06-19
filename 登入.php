<?php
session_start();

$link=mysqli_connect('localhost','root','');
if (isset($_COOKIE["UID"]))
{
    $cookie=$_COOKIE["UID"];
    echo "歡迎 ".$cookie." 回到本系統";
    echo "</br>";
}
else if (isset($_COOKIE["uid"]))
{
    $usercookie=$_COOKIE["uid"];
    echo "歡迎 ".$usercookie." 回到本系統";
    echo "</br>";
}
else
{
    echo "歡迎蒞臨本系統";
}
?>

<!DOCTYPE html>  
<html lang="zh-TW">  
<head>  
    <meta charset="UTF-8">  
    <title>登入</title>  
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
    background-color: #33B0FF;   
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
    color: #FDF748;   
 
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
    width: 90px;   
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
    display:inline-block;
} 
.forgot{
    width: 90px;   
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
    display:inline-block; 
}
.register{
    width: 90px;   
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
    display:inline-block; 
}
    </style>
</head>  
<body>  
    <div id="login">  
        <h1>登入</h1>  
        <form action="" method="post">  
            <input type="text"  placeholder="使用者名稱" name="u"></input>  
            <input type="password"  placeholder="密碼" name="p"></input> 
            <p><button class="forgot" type="submit">忘記密碼</button>  
            <button class="but" type="submit">登入</button>
            <button class="register" type="submit">註冊去</button></p>  
            
        </form>  
    </div>  



<?php

$auser="admin";
$apwd="0000000";

$user="winnie";
$upwd="910814";

date_default_timezone_set('Asia/Taipei');
echo date("F,j,Y g:i a",time());
echo '</br>';
if(isset($_POST["u"]))
{
    if($_POST["u"]!=null)
    {
        $u=$_POST["u"];
        $p=$_POST["p"];

        $SQL="SELECT * FROM info WHERE name='$u' AND pwd='$p'";

        $result=mysqli_query($link,$SQL);

        if(mysqli_num_rows($result)==1)
        {
            $_SESSION["systemlogin"]="ok";
            setcookie("UID",$u,time()+3600);
            header('Location:admin.php');
        }
        else 
        {
            echo "帳號或密碼輸入錯誤!";
        }
        //if($u==$auser&&$p=$apwd)
        //{
        //    $_SESSION["systemlogin"]="ok";
        //    setcookie("UID",$u,time()+3600);
        //    header('Location:admin.php');
            //echo "登入成功!";
        //}
        //else if($u==$user&&$p==$upwd)
        //{
        //    $_SESSION["userlogin"]="self";
        //    setcookie("uid",$u,time()+3600);
        //    header('Location:註冊.php');
        //}
        //else
        //{
        //    echo "帳號或密碼輸入錯誤!";
        //}
        
    }
    else
    {
        echo "您尚未輸入帳號或密碼";
    }
}
else
{
    echo "歡迎登入，請輸入帳號密碼";
}
?>
</body>  



</html>  