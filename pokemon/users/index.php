<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>用户列表 - 博客</title>
</head>

<body>
  <table border=1>
    <caption><h1>用户列表</h1></caption>
    <thead>
      <tr>
        <th>id</th>
        <th>姓名</th>
        <th>创建日期</th>      
      </tr>
    </thead>
    <tbody>
      <?php 
        require_once '../inc/db.php';
        
        $query = $db->query('select * from users');
        while ( $user =  $query->fetchObject() ) {
          
      ?>
          <tr>
            <td><?php echo $user->id; ?></td>
            <td><a href="show.php?id=<?php print $user->id; ?>"><?php echo $user->name; ?></a></td>
            <td><?php echo $user->created_at;?></td>
         
            </td>        
          </tr> 
 
      <?php  } ?>
  
    </tbody>
  </table>
  <a href="new.php">新增</a>
</body>
</html>