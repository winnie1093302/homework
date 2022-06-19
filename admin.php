<?php
session_start();
if(isset($_SESSION["systemlogin"]))
{
    if($_SESSION["systemlogin"]=="ok")
    {
        echo "<a href='logout.php'>登出系統</a>";
        echo '</br>';
        echo "Welcome to Admin!";
    }
    else
    {
        echo "非法進入";
        exit();
    }
}
else{
    echo "非法進入";
    exit();
}
?>