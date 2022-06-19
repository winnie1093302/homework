<?php

require("DBconnect.php");

$sql="SELECT * FROM info";
mysqli_query($link,$sql);
if($result=mysqli_query($link,$sql))
{
    echo "<table border=1>";
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>".$row["Num"]."</td><td>".$row["name"]."</td><td>".$row["pwd"]."</td><td>".$row["role"]."</td><td><a href ='delete.php? Num=".$row["Num"]."'>刪除</a></td><td>修改</td>";
        echo "</tr>";
       
    }
    echo "</table>";
}
?>