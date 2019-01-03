<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>new | 博客</title>
</head>
<body>
<h1>New post</h1>


<form action="save.php" method="post" enctype="multipart/form-data">
  <label for="title">标题</label>
  <input type="text" name="title" value="" />
  <br/>
  <label for="pic">图片</label>
  <input type="file" name="pic" >
  <br/>
  <label for="catalog">分类</label>
  <select name="catalog">
  <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/db.php';
    $query = $db->query('select * from catelogries');
    while ( $catalog =  $query->fetchObject() ) {
  ?>
    <option value="<?php echo $catalog->id ?>"><?php echo $catalog->name ?></option>

  <?php } ?>
  </select>
  <br/>
  <label for="tags">标签（多个标签使用,分隔）：</label>
  <input type="text" name="tags" />
  <br/>
  <label for="body">内容</label>
  <textarea name="body"></textarea>
  <br/>
  <input type="submit" value="提交" />
</form>

</body>
</html>