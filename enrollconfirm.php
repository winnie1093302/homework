<?php
ob_start();
require("DBconnect.php");
$name=$_POST["u"];
$pwd=$_POST["p1"];
$role=$_POST["role"];

echo $name .$pwd .$role ;

 $SQL="INSERT INTO info (name,pwd,role) VALUES ('$name','$pwd','$role')";

 if(mysqli_query($link,$SQL))
 {
     echo "<script type='text/javascript'>";
     echo "alert('註冊成功')";
     echo "</script>";
     echo "<meta http-equiv='Refresh' content='0; url=list.php'>";
 }
 else
 {
     echo "<script type='text/javascript'>";
     echo "alert('註冊失敗')";
     echo "</script>";
 }
ob_flush();

?>