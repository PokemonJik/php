<?php
require_once '../inc/db.php';
require_once '../inc/common.php';
$id = $_POST['id'];
$sql = 	"select * from comments where id = {$id};" ;
$query = $db->query($sql);
$com=$query->fetchObject() ;
$post_id=$com->post_id ;
$sql = 	"delete from comments where id = {$id};" ;
$query = $db->prepare($sql);

if (!$query->execute()) {
	print_r($query->errorInfo());
}else{
	redirect_to("./article1.php?id={$post_id}");
};
?>