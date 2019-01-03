
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>精灵主页</title>
<style type="text/css">
body{
  background: url(/picture/背景1.jpg);
  background-size: cover;
}
<style type="text/css">
.nav{       
  height:80px;       
  line-height:80px;       
  background:#a1ffa0;       
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
    color:gold;          
    background:black;
  }


</style>
</head>	
<body>
<?php 
require_once '../inc/session.php';
require_once '../inc/db.php';
?>
  <?php if(is_login()) echo '当前用户: ' . current_user()->name ;?>
<div class="nav">
   <!--  <img src=" /picture/firpicture.jpg" alt="some_text" width="400px" height="500px" style="position:absolute; left:10px; top:128px; "> -->
<ul>
  <li><a href="/sessions/delete.php"><font size="6" color="#ff0000">退出  </font></a></li>
  <li><a href=" BBS.php?id=1"><font size="6" color="#ff0000">讨论区</font></a></li>
</ul>
 <!--  <img src=" /picture/picture2.jpg" alt="some_text" width="400px" height="500px" style="position:absolute; left:1500px; top:128px; "> -->
</div>
<br>
<br>
<br>

<br>
<br>
<br>


<div style="border: 10px solid #f122ff; width: 678px; height: 500px;margin: 0 auto; background-color: rgba(255,255,255,0.6);">
			<span><font size="5" color="#000000">————口袋妖怪系列以角色扮演（RPG）为主，辅以战略和动作游戏。在这一系列的游戏中，玩家总是作为一位PM（pokemon）训练家到各地旅行，完成各种交付的任务，并沿途与PM训练家挑战，不断提升自己的战斗能力，最终打败8大会馆的首领和四大天王，取得最后的胜利。当然，游戏最大的乐趣并不只是在战斗，而是收集、捕捉各种各样可爱的精灵，完成口袋妖怪图鉴。由于许多精灵在游戏中只有1只，而且一旦捕捉失败就没有第二次的机会，可以说非常珍贵，加上每部作品的最后一只精灵更是要通过特殊的方法才能得到，因此，精灵的捕捉更是成为游戏一大乐趣。</font></span>
		</div>


<br>

<br>


</body>
</html>