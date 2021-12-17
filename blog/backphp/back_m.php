<?php
  header("Content-Type:text/html;charset=utf-8");
  // 定义常量  define(常量名,值)  常量名一般大写
   define('DB_HOST','localhost');
   define('DB_USER','root');
   define('DB_PASS','');
   define('DB_NAME','blog');
   define('DB_CHARSET','utf8');
   date_default_timezone_set("PRC");
   $time=$_POST['time'];
   $content=$_POST['content'];
   $statue=$_POST['statue'];

    $sql="INSERT INTO updatenews VALUES (null,null,'{$time}','{$content}','{$statue}',null)";
    $mysqli=new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($mysqli -> connect_error) {
        die("连接错误：".$mysqli -> connect_error);
    }
    
    $mysqli ->set_charset(DB_CHARSET);
    $result=$mysqli ->query($sql);

    if($result){
    
        echo "<script>";
        // echo "alert('留言成功');";
        echo "window.location='../back_m.html';";
        echo "</script>";

  }


?>