<?php
    //设置文件编码
    header("Content-type:text/html;charset=utf-8");
    $musicsql="select * from music ORDER BY id DESC limit 1 ";
    $mysqli=new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($mysqli -> connect_error) {
        die("连接错误：".$mysqli -> connect_error);
    }
    
    $mysqli ->set_charset(DB_CHARSET);
    $result=$mysqli ->query($musicsql);
    
    while ($row = $result -> fetch_assoc()) {
        $rowmusic[] = $row;   //$rows中保存user表中所有记录
          }



?>