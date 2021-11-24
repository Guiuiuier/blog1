//<! 不许右键 -->
document.oncontextmenu = function(){

    return false;
    
    }
    
    //轮播 
	$(function(){
		// 初始化轮播
		window.onload=(function(){
			$("#myCarousel").carousel('cycle');
		});

	});

        



// 评论

    $("#dropdownMenu1").ready(function () {
        var pinglune = true;
        $(".pinglun").click(function () {
            if (pinglune) {
                $("#home").show();
                pinglune = false;
            } else {
                $("#home").hide();
               pinglune = true;
            }
        });
    },
    );






    //点赞


    $(document).ready(function () {
        var buttonon = true;
        var clickshu = 1;
        $(".dianzann").click(function () {
            if (buttonon) {
                $(".feng").fadeIn("slow");
                $(".dianzan").hide("slow");
                buttonon = false;
            } else {
                $(".dianzan").fadeIn("slow");
                $(".feng").hide("slow");
                buttonon = true;
            }
        });
    },
    );
    

// js图片轮播

        // window.onload=function(){
        //     var wrap=document.getElementById('wrap'),
        //     pic=document.getElementById('pic').getElementsByTagName("li"),
        //     list=document.getElementById('list').getElementsByTagName('li'),
        //     index=0,
        //     timer=null;
           
        //     // 定义并调用自动播放函数
        //     timer = setInterval(autoPlay, 2000);
           
        //     // 鼠标划过整个容器时停止自动播放
        //     wrap.onmouseover = function () {
        //     clearInterval(timer);
        //     }
           
        //     // 鼠标离开整个容器时继续播放至下一张
        //     wrap.onmouseout = function () {
        //     timer = setInterval(autoPlay, 2000);
        //     }
        //     // 遍历所有数字导航实现划过切换至对应的图片
        //     for (var i = 0; i < list.length; i++) {
        //     list[i].onmouseover = function () {
        //     clearInterval(timer);
        //     index = this.innerText - 1;
        //     changePic(index);
        //     };
        //     };
           
        //     function autoPlay () {
        //     if (++index >= pic.length) index = 0;
        //     changePic(index);
        //     }
           
        //     // 定义图片切换函数
        //     function changePic (curIndex) {
        //     for (var i = 0; i < pic.length; ++i) {
        //     pic[i].style.display = "none";
        //     list[i].className = "";
        //     }
        //     pic[curIndex].style.display = "block";
        //     list[curIndex].className = "on";
        //     }
           
        //     };
           
