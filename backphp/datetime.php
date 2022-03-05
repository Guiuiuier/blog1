<?php
    //设置文件编码
    // 每日更新的时间
    header("Content-type:text/html;charset=utf-8");
    $updatetime="SELECT date from updatenews ORDER by date desc limit 1";
    $mysqli=new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($mysqli -> connect_error) {
        die("连接错误：".$mysqli -> connect_error);
    }
    
    $mysqli ->set_charset(DB_CHARSET);
    $result=$mysqli ->query($updatetime);
    
    while ($row = $result -> fetch_assoc()) {
        $rowstime[] = $row;   //$rows中保存user表中所有记录
          }



?>