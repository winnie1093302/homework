<?php
session_start();
session_destroy();

header('Location: 登入.php');
?>