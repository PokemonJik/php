<?php 
require_once './inc/session.php';
require_once './inc/db.php';
require_once './inc/pager.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>精灵主页</title>
<style type="text/css">
body{
  background: url(/picture/背景2.jpg);
  background-size: cover;
   font-family:Arial, Verdana,'Lucida Grande', Helvetica, sans-serif;
    text-align: left;
    color: #ffffff
}
<style type="text/css">

.nav{       
  height:80px;       
  line-height:80px;       
  background:#85a131;       
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
    color:red;          
    background:black;
  }


</style>
</head>	
<body>
<?php if(is_login()) echo '当前用户: ' . current_user()->name ;?>
<div class="nav">
<ul>
	<li><a href="index.php"><font size="5">首页</font></a></li>
  <li><a href=""><font size="5">讨论区</font></a></li>
  <li><a href="search.php"><font size="5">查找分类</font></a></li>

</ul>
</div>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<a > <font size="10" color="#ff0000"> 文章列表:↓↓↓</font></a>
<br>
<br>
<br>
<br>
<br>
<div style="border-style :solid; width: 500px;border-width:10px;border-radius: 10px;border-color: #f0f00f;background-color: rgba(255,255,255,0.2);"> 
<?php
        $pager = new Pager('select * from posts ');
        @$query = $pager->query($_GET['page']);
        while ( $post =  $query->fetchObject() )   {
      ?>

          <tr>
            
            <td><a href="article1.php?id=<?php print $post->id; ?>"><font size="5" color="#000000"><?php echo $post->title; ?></font></a></td>
            <td><?php echo $post->created_at; ?></td>
              <br   >
            </td>
          </tr>
          <br>
 <?php  } ?> 
  </div>
   <?php echo $pager->nav_html(); ?>  


</span>
</article>
</pre>
</body>
</html>