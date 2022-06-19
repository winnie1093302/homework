<?php

require("DBconnect.php");
// $phtooname=$_FILES["photo"]["tmp_name"];
// echo $phtooname;
//取得副檔名
$pathpart=pathinfo($_FILES['photo']['name']);
$extname=$pathpart['extension'];
$now=time();

//產生新檔案名稱
$finalphoto="Photo_".time().".".$extname;
$SQL="INSERT INTO photo (ppath,pdata) VALUES ('$finalphoto','$now')";
// echo $finalphoto;
// echo'<br/>';

//上傳檔案
if(copy($_FILES["photo"]["tmp_name"],$finalphoto))
{
    if(mysqli_query($link,$SQL))
    {
        echo "<script type='text/javascript'>";
        echo "alert('上傳成功')";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=photolist.php'>";
    }
    else
    {
        echo "<script type='text/javascript'>";
        echo "alert('上傳失敗')";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=photo.php'>";
    }
}
else
{
    echo "<script type='text/javascript'>";
    echo "alert('註冊失敗')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=photo.php'>";
}
?>