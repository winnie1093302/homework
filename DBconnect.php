<?php
$link=@mysqli_connect('localhost','root','','classphp');
// $dbname="classphp";
// if ( !mysqli_select_db($link, $dbname) )
//    die("無法開啟 $dbname 資料庫!<br/>");
// else
//    echo "資料庫: $dbname 開啟成功!<br/>";

// $sql="SELECT * FROM student";
// if ( $result = mysqli_query($link, $sql) ) 
// {
//     echo "<table border='1'>";
//     while($row=mysqli_fetch_assoc($result))
//     {
//         echo "<tr>";
//         echo "<td>".$row["sid"]."</td><td>".$row["sname"]."</td><td>".$row["sphone"]."</td><td>".$row["slevel"]."</td><td>".$row["sage"]."</td><br/>";
//         echo "</tr>";
//     }
//     echo "</table>";
// }


?>