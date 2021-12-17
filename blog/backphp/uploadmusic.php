<?php
 header("Content-Type:text/html;charset=utf-8");
 // 定义常量  define(常量名,值)  常量名一般大写
  define('DB_HOST','localhost');
  define('DB_USER','root');
  define('DB_PASS','');
  define('DB_NAME','blog');
  define('DB_CHARSET','utf8');

  date_default_timezone_set("PRC");
//  歌曲名
$gequname=$_POST['music_name'];
$author=$_POST['author'];
// 歌曲数组名就是上传的名字
$name=$_FILES['uploadfile']['name'];
// 上传保存的路径
$baocun="../blog/music/";
$src=$baocun.$name;
// var_dump($_FILES);
  $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
  $mysqli -> set_charset(DB_CHARSET);
     if ($mysqli -> connect_error) {
  
          die("连接错误：".$mysqli -> connect_error);
  
     }
  
  // 插入每日更新音乐
  $updatemusicsql ="INSERT INTO music VALUES (null,'{$src}','{$author}','{$gequname}')";
    $result = $mysqli -> query($updatemusicsql);


    //存储
    move_uploaded_file($_FILES["uploadfile"]["tmp_name"],
    "../music/" . $_FILES["uploadfile"]["name"]);
     echo "Stored in: " . "../music/" . $_FILES["uploadfile"]["name"];
  
    if($result){
    
        echo "<script>";
        echo "alert('插入成功');";
        echo "window.location='../back_m.html';";
        echo "</script>";

  }

     
?>