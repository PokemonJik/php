<?php
require_once '../inc/session.php';
require_once '../inc/common.php';
if( login($_POST['name'] , $_POST['password']) ){
	redirect_to('../admin/index.php');	
}else{		
	redirect_back();	
}
?> 