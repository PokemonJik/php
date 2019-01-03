<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>文章1</title>
<style type="text/css">
.nav{       
  height:80px;       
  line-height:80px;       
  background:#ededed;       
  border-radius:0 0 15px 15px;   
  }
.nav ul{
   margin-left: 600px;
   list-style-type: none;
}
.nav ul li{         
  float:left;         
  width:100px;         
  text-align:center;
  }
.nav ul li a{
  text-decoration: none;         
  display:block;         
  color:black;
  }
.nav ul li a:hover{          
    color:white;          
    background:blue;
  }


</style>
</head>
<body>
<div class="nav">
<ul>
  <li><a href="index.php"><font size="5">首页</font></a></li>
  <li><a href="#"><font size="5">讨论区</font></a></li>
</ul>
</div>

<?php
    require_once '../inc/db.php';
   $query = $db->prepare('select * from posts where id = :id');
    $query->bindValue(':id',$_GET['id'],PDO::PARAM_INT);
    $query->execute();
    $post = $query->fetchObject();   

    $query = $db->prepare('select tag_id from tags_posts where post_id = :id');
    $query->bindValue(':id',$_GET['id'],PDO::PARAM_INT);
    $query->execute();
?>
<img src="<?php echo $post->pic; ?>" alt="for pic"  width="600px" height="700px" style="position:absolute; left:800px; top:98px; ">
  <h1> <?php echo $post->title; ?>  </h1>
  分类：<?php echo $post->catalog_id; ?>

  标签：<?php
    while($tag = $query->fetchObject()){
      $sql = "select name from tags where id = $tag->tag_id";
      $query = $db->prepare($sql);
      $query->execute();
      $result = $query->fetchObject();
      echo $result->name;
     }  
  ?>
<div style="border: 10px solid #aa11cc; width: 678px; height: 500px;margin: 1 auto;">
 <p><font size="5"><?php echo $post->body; ?></font>></p>

</div>>
<pre><article> 
<span style="background: #FFCC99">
<br>
<a ><font size="10">评论</font></a>


  <?php
    $query = $db->query('select * from comments where post_id = ' . $_GET['id']);
    while ( $comment =  $query->fetchObject() ) {
      ?>
           <div style="border-style :solid; width: 500px;border-width: 5px;border-radius: 10px;"> 
          <li>
            <h4><font size="5">评论人：</font><?php echo $comment->title; ?></h4>
      
            <p><font size="5">内容：</font><?php echo $comment->body; ?></p> 
           <td>
              <a href="delete2.php?id=<?php echo $comment->id; ?>"><font size="5" color="#ff5500">删除评论</font></a>
            </td>    
            <br> 
          </li> 
       </div>   
    <?php  } ?>
<p><a href="./BBS.php?">返回</a></p>

      
</span>
</article>
</pre>
</body>
</html>
