<?php

require("DBconnect.php");
$rolenum=$_GET["Num"];
$SQL="DELETE  FROM info WHERE Num='$rolenum'";
if(mysqli_query($link,$SQL))
{
    echo "<script type='text/javascript'>";
    echo "alert('刪除成功')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0' url='list.php'>";
}
else
{
    echo "<script type='text/javascript'>";
    echo "alert('刪除失敗')";
    echo "</script>";
}
ob_flush();
?>