<?php
require_once '../inc/db1.php';
require_once '../inc/common.php';
$id = $_POST['id'];
$sql = 	"delete from posts where id = {$id};" ;
if (!mysqli_query($db,$sql)) {
	echo mysqli_error();
	echo '<br>' .  $sql;
}else{
	redirect_to("./BBS.php?id={$id}");
};
?>