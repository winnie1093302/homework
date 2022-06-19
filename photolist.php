<?php
require("DBconnect.php");

$SQL="SELECT * FROM photo";

echo "<h1>我的照片</h1>";


if($result=mysqli_query($link,$SQL))
{
    echo "<table border='2' width=20%>";
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<tr><td><img src='".$row['ppath']."' width='100%'></td>";
        echo "<a href='".$row['ppath']."'></a><td><a href='photoupdate.php?ppath=".$row["ppath"]."'>修改</td><br/>";
        echo "</tr>";
    }
    echo "</table>";
}
?>