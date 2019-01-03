<?php
$db = mysqli_connect('127.0.0.1','root','root','postplat');
if (mysqli_connect_errno($db)) {
  echo "连接 MySQL 失败: " . mysqli_connect_error();
  exit;
}
mysqli_query($db,"SET NAMES utf8");
?>