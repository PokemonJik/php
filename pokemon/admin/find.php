<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>文章1</title>
<a > <font size="10" color="#ff0000"> 查找结果:↓↓↓</font></a>
<br>
<br>
<br>
<?php
        require_once '../inc/db.php';
        $id=$_POST["fname"];
        $query = $db->query("select * from posts where catalog_id='$id' ");
        while ( $post = $query->fetchObject()) {
      ?>
          <tr>
            <td><a href="article1.php?id=<?php print $post->id; ?>"><?php echo $post->title; ?></a></td>
            <td><?php echo $post->created_at; ?></td>
    
          </tr>
          <br>
<?php  } ?>
<br>
<br>
<br>
<a href="search.php"> <font size="10" color="#ff0000"> 返回</font></a>