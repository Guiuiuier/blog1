<?php 

include "backphp/config.inc.php";

  date_default_timezone_set("PRC");


$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
$mysqli -> set_charset(DB_CHARSET);
   if ($mysqli -> connect_error) {

        die("连接错误：".$mysqli -> connect_error);

   }

// 查询每日更新
$updatesql ="select *  from updatenews  ";
  $result = $mysqli -> query($updatesql);
 while ($row = $result -> fetch_assoc()) {
    $rows[] = $row;   //$rows中保存user表中所有记录
      }
   
// 每日更新的时间
include "backphp/datetime.php";
//每日音乐
include "backphp/music.php";
//说说
include "backphp/shuoshuo.php";
   
   ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css" />
    <link rel="icon" href="img/icon.png" type="image/x-icon" />
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>

    <script language="javascript" type="text/javascript" src="js/main.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <title>NoBug's blog</title>
    <script language="javascript" type="text/javascript">
        oncontextmenu = "return false"
    </script>

</head>

<body>


    <!-- 导航 -->
    <div class="container nav_length">
        <div class="row">
            <div class="col-md-2">
                <div class="nav_left"></div>
            </div>
            <div class="col-md-8 nav_center">
                <nav class="navbar navbar-default nav_margin" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle nav_anniu" data-toggle="collapse"
                                data-target="#example-navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="row phone_name">
                                <div class="col-md-6" style="font-size:20px">好好学习</div>
                            </div>
                            <!-- <a class="navbar-brand" href="#">菜鸟教程</a> -->
                        </div>
                        <div class="collapse navbar-collapse" id="example-navbar-collapse">
                            <ul class="nav navbar-nav ">
                                <li class="active"><a href="#">首页</a></li>
                                <li><a href="#">个人随笔</a></li>
                                <li><a href="#">技术分享</a></li>
                                <li><a href="#">说点什么</a></li>
                                <li><a href="#">心情说说</a></li>
                                <li><a href="#">关于我</a></li>
                            </ul>
                        </div>
                        <div>
                </nav>
            </div>
        </div>
    </div>

    <!-- 导航结束 -->
    <!-- logo -->
    <div class="container logo">
        <div class="row">
            <div class="col-md-12">

                <h2>不知道写什么,先放着。<br />________</h2>
            </div>
        </div>
    </div>

    <!-- 正文开始 -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="frame">

                    <div class="frame_content">
                        <div class="frame_content_top">
                            <div class="frame_content_top_left" id="frame_content_top_left">
                                <div id="myCarousel" class="carousel slide">
                                    <!-- 轮播号 -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>
                                    <!-- 轮播图片-->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img src="img/11.jpg" alt="First slide">
                                            <div class="carousel-caption">好好学习</div>
                                        </div>
                                        <div class="item">
                                            <img src="img/2.jpg" alt="Second slide">
                                            <div class="carousel-caption">天天向上</div>
                                        </div>
                                        <div class="item">
                                            <img src="img/3.jpg" alt="Third slide">
                                            <div class="carousel-caption">积极生活</div>
                                        </div>
                                    </div>
                                    <!-- 轮播（Carousel）导航 -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button"
                                        data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="frame_content_top_rt">
                                <div class="frame_content_top_rt_name">
                                    <h3>说点什么</h3>
                                </div>
                                <div class="frame_content_top_rt_ct" id="">想找个实习，好好学习一下才行啊。</div>
                            </div>
                            <div class="frame_content_top_rb" id="">不知道写些什么先放着。
                            </div>
                        </div>
                        <div></div>
                        <div class="frame_content_label">

                            <h2>最新内容</h2>

                        </div>
                        <!-- 视频 -->
                        <div class="container frame_content_video_neirong">
                            <!--<?php foreach ($rowmusic as $row) { ?>-->
                            <!--<div class="col-md-12" style="text-align: center;">-->
                            <!--    <div class="row"><?php echo $row["歌曲名"]."——".$row["作者"];?></div>-->
                            <!--    <div class="row"> <audio src="<?php echo $row["src"];?> <?php }?>" controls></audio>-->
                            <!--    </div>-->
                            <!--</div>-->
                           
         

                        <?php foreach ($shuoshuo as $row){ ?>
                        <div class="frame_content_frame">
                            <div class="frame_content_video_neirong_title">
                                <div class="meirong_header">
                                    <div class="row">
                                        <div class="col-md-2 touxiang"><img src="img/1.jpg"
                                                style="border-radius:50%; overflow:hidden;"></div>
                                        <div class="col-md-6 nameinformation" style="font-size: 10px;">
                                            <div class="col-md-12 yonghu_name"><?php echo $row['name'];?></div>
                                            <div class="col-md-12 yonghu_shijian"><?php echo $row['date'];?></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container frame_content_video_neirong_title_content">
                                    <div class="row">
                                        <div class="col-md-12 word">
                                        <?php echo $row['content'];?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <?php if($row['shipinsrc']){?>
                            <div class="contaner frame_content_video_neirong_shipin">
                                <div class="row">
                                    <div class="col-md-12 shiping">
                                        <video controls>
                                            <source src="<?php echo $row['shipinsrc'];?>" type="video/mp4" />
                                            <source src="<?php echo $row['shipinsrc'];?>" type="video/mov"/>
                                            <source src="<?php echo $row['shipinsrc'];?>" type="video/quicktime"/>
                                        </video>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <?php if($row['imgsrc']){?>
                            <div class="contaner frame_content_video_neirong_shipin">
                                <div class="row">
                                    <div class="col-md-12 zhaopian">
                                        <img src="<?php echo $row['imgsrc'];?>" alt="">
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <?php }?>

                            <div class="frame_content_frame">
                            <div class="frame_content_video_neirong_title">
                                <div class="meirong_header">
                                    <div class="row">
                                        <div class="col-md-2 touxiang"><img src="img/1.jpg"
                                                style="border-radius:50%; overflow:hidden;"></div>
                                        <div class="col-md-6 nameinformation" style="font-size: 10px;">
                                            <div class="col-md-12 yonghu_name">小强的一生</div>
                                            <div class="col-md-12 yonghu_shijian"><small>2021/11/14</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container frame_content_video_neirong_title_content">
                                    <div class="row">
                                        <div class="col-md-12 word">
                                        
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="contaner frame_content_video_neirong_shipin">
                                <div class="row">
                                    <div class="col-md-12 shiping">
                                        <video controls>
                                            <source src="video/1.mp4" type="video/mp4" />
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                                                <div class="frame_content_frame">
                            <div class="frame_content_video_neirong_title">
                                <div class="meirong_header">
                                    <div class="row">
                                        <div class="col-md-2 touxiang"><img src="img/1.jpg"
                                                style="border-radius:50%; overflow:hidden;"></div>
                                        <div class="col-md-6 nameinformation" style="font-size: 10px;">
                                            <div class="col-md-12 yonghu_name">小强的一生</div>
                                            <div class="col-md-12 yonghu_shijian"><small>2021/11/24</small>
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-2" style="text-align:right"> <button type="button"
                                                class="close" aria-hidden="true">&times;</button></div> -->
                                    </div>
                                </div>
                                <div class="container frame_content_video_neirong_title_content">
                                    <div class="row">
                                        <div class="col-md-12 word" id="">啥功能都没有的模板</div>
                                    </div>
                                </div>

                            </div>
                            <div class="contaner frame_content_video_neirong_shipin">
                                <div class="row">
                                    <div class="col-md-12 zhaopian">
                                        <img src="img/6.jpg" alt="">
                                    </div>
                                </div>
                            </div>




                            <!-- 评论及点赞部分 -->
                            <div class="container frame_content_video_neirong_bottom">
                                <div class="row  frame_content_video_neirong_bottom_footer_label">

                                    <div class="col-md-6">
                                        <div class="dropdown">
                                            <button type="button " class="btn dropdown-toggle dianzann"
                                                id="dropdownMenu1" data-toggle="dropdown">
                                                点赞
                                                <span class="sss">
                                                    <span class="feng" style="display: none;"><img src="img/zan.png"
                                                            class="icon" alt=""></span>
                                                    <img src="img/zan1.png" class="icon dianzan" alt="">
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">




                                        <div class="dropdown">
                                            <button type="button" class="btn dropdown-toggle fengfeng"
                                                id="dropdownMenu1" data-toggle="dropdown tab" style="cursor: pointer;">
                                                <a href="#home" data-toggle="tab" class="pinglun"> 评论</a>
                                                <img src="img/Comment.png" class="icon" alt="">
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!--评论区功能 -->
                                <div id="myTabContent" class="row tab-content">
                                    <div class="col-md-12 tab-pane fade in active" id="home" style="display:none;">
                                        <form action="">
                                            <span class="col-md-1">1</span>
                                            <span class="col-md-11">互动和点赞都先取消了，审核不太合格啊，超范围</span>
                                            <!-- <span class=col-md-12><button></button></span> -->
                                        </form>
                                    </div>


                                </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="frame_right">
                        <div class="frame_right_update">
                            <div class="frame_right_update_top">

                                <div class="frame_right_update_title">
                                    <div class="frame_right_update_title_left"><?php
                                       foreach ($rows as $row){if(in_array("今日更新", $row)){echo $row["title"];}}?>

                                    </div>
                                    <div class="frame_right_update_title_right"><?php
                                        foreach ($rowstime as $row) {echo $row["date"];}?><br></div>
                                </div>
                                <?php foreach ($rows as $row){ ?>
                                <div class="frame_right_update_content_left"><?php echo $row["content"];?></div>


                                <div class="frame_right_update_content_right">
                                    <div class="frame_right_update_content_right_right"><?php 
                                    
                                        if (in_array("不会", $row))
                                        {
                                            echo '<span class="color1">'.$row["statue"].'</span>';
                                        }
                                        else if(in_array("完成", $row)) {
                                            echo '<span class="color2">'.$row["statue"].'</span>';
                                        }
                                        else if(in_array("结束", $row)) {
                                            echo '<span class="color3">'.$row["statue"].'</span>';
                                        }
                                        else{
                                            echo '<span class="color4">'.$row["statue"].'</span>';
                                        }
                                        ?>
                                    </div>
                                </div>
                                <?php }?>

                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">            
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span>&copy 2021 by fengshanggui All Rights Reserved.</span>
                    <p class="beian"><a href="https://beian.miit.gov.cn/" target="_blank">粤ICP备2021163222号</a></p>
                    <span style="width:300px;margin:0 auto; padding:0px 0;">
                        <a target="_blank"
                            href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=44030602006443"
                            style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img
                                src="img/beian.png" style="float:left;" />
                            <p style="float:left;height:15px;line-height:15px;margin: 0px 0px 0px 5px; color:#939393;">
                                粤公网安备 44030602006443号</p>
                        </a>
                    </span>

                </div>
            </div>
        </div>
    </div>

</body>

</html> 