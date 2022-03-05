<?php
 header("Content-Type:text/html;charset=utf-8");
 // 定义常量  define(常量名,值)  常量名一般大写
  define('DB_HOST','localhost');
  define('DB_USER','root');
  define('DB_PASS','');
  define('DB_NAME','blog');
  define('DB_CHARSET','utf8');
  
  
    date_default_timezone_set("PRC");
  //作者
  $name=$_POST['name'];
  //时间
  $time=$_POST['time'];
  //内容
  $content=$_POST['content'];
  // 上传文件名字
  $zp_sp_name=$_FILES['uploadfile']['name'];
  // 上传保存的路径
  // var_dump($zp_sp_name);
  $zp_sp_type=$_FILES['uploadfile']['type'];
  $baocun="";
  if($_FILES['uploadfile']['error']==0){
    if($zp_sp_type=="video/mp4"||$zp_sp_type=="video/mov"||$zp_sp_type=="video/quicktime"){
    $baocun="./video/";
  }elseif($zp_sp_type=='image/jpeg'||$zp_sp_type=='image/jpg'||$zp_sp_type=='image/png'){
    $baocun="./img/";
  }

 var_dump($_FILES); 
}
       if($zp_sp_type=="video/mp4"||$zp_sp_type=="video/mov"||$zp_sp_type=="video/quicktime"){
        move_uploaded_file($_FILES["uploadfile"]["tmp_name"],"../video/" . $_FILES["uploadfile"]["name"]);
         
        echo "Stored in: " . "../video/" . $_FILES["uploadfile"]["name"];
        }

        elseif($zp_sp_type=='image/jpeg'||$zp_sp_type=='image/jpg'||$zp_sp_type=='image/png'){
         move_uploaded_file($_FILES["uploadfile"]["tmp_name"], "../img/" . $_FILES["uploadfile"]["name"]);
         echo "Stored in: " . "../img/" . $_FILES["uploadfile"]["name"];
        }
 
    
        // var_dump($_FILES);
        $src=$baocun.$zp_sp_name;
      
          $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
          $mysqli -> set_charset(DB_CHARSET);
             if ($mysqli -> connect_error) {
          
                  die("连接错误：".$mysqli -> connect_error);
          
             }

    // 插入
    if($zp_sp_type=='video/mp4'||$zp_sp_type=="video/mov"||$zp_sp_type=="video/quicktime"){
      $shuosql ="INSERT INTO root VALUES (null,'{$name}','{$content}','{$time}',null,'{$src}')";
      $result = $mysqli -> query($shuosql);
    }elseif($zp_sp_type=='image/jpeg'||$zp_sp_type=='image/jpg'||$zp_sp_type=='image/png'){
      $shuosql ="INSERT INTO root VALUES (null,'{$name}','{$content}','{$time}','{$src}',null)";
      $result = $mysqli -> query($shuosql);
    }
    else{
      $shuosql ="INSERT INTO root VALUES (null,'{$name}','{$content}','{$time}',null,null)";
      $result = $mysqli -> query($shuosql);
    }
    //    if($result){
      
    //        echo "<script>";
    //        echo "alert('发表成功');";
    //        echo "window.location='../back_m.html';";
    //        echo "</script>";
  
    //  }

       
  ?>