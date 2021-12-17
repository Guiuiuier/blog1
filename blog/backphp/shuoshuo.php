<?php

  date_default_timezone_set("PRC");
    //设置文件编码
    header("Content-type:text/html;charset=utf-8");
    $shuoshuosql="select * from root ORDER BY id desc ";
    $mysqli=new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($mysqli -> connect_error) {
        die("连接错误：".$mysqli -> connect_error);
    }
    
    $mysqli ->set_charset(DB_CHARSET);
    $result=$mysqli ->query($shuoshuosql);
    
    while ($row = $result -> fetch_assoc()) {
        $shuoshuo[] = $row;   //$rows中保存user表中所有记录
          }



?>