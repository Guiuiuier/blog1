<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php  
var_dump($_FILES);



  if ($_FILES["uploadfile"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["uploadfile"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["uploadfile"]["name"] . "<br />";
    echo "Type: " . $_FILES["uploadfile"]["type"] . "<br />";
    echo "Size: " . ($_FILES["uploadfile"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["uploadfile"]["tmp_name"] . "<br />";

    if (file_exists("upload/" . $_FILES["uploadfile"]["name"]))
      {
      echo $_FILES["uploadfile"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["uploadfile"]["tmp_name"],
      "../blog/music/" . $_FILES["uploadfile"]["name"]);
      echo "Stored in: " . "../" . $_FILES["uploadfile"]["name"];
      }
    }
  




?>
<div>每日音乐
   <form  method="POST" enctype="multipart/form-data">
   <p>作者<input name="author" type="text" value="" /></p>
   <p>歌曲名<input name="music_name" type="text"  value="" /></p>
   <p>上传文件<input name="uploadfile" type="file"  value="" /></p>
   <p><input type="submit" value="提交">
   </div>
</form>

</body>

</html>