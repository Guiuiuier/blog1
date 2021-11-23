//<! 不许右键 -->
document.oncontextmenu = function(){

    return false;
    
    }
    
    //轮播 
    window.onload=(function(){
        // 初始化轮播
        $(".start-slide").click(function(){
            $("#myCarousel").carousel('cycle');
        });
        // 停止轮播
        $(".pause-slide").click(function(){
            $("#myCarousel").carousel('pause');
        });
        // 循环轮播到上一个项目
        $(".prev-slide").click(function(){
            $("#myCarousel").carousel('prev');
        });
        // 循环轮播到下一个项目
        $(".next-slide").click(function(){
            $("#myCarousel").carousel('next');
        });
        // 循环轮播到某个特定的帧 
        $(".slide-one").click(function(){
            $("#myCarousel").carousel(0);
        });
        $(".slide-two").click(function(){
            $("#myCarousel").carousel(1);
        });
        $(".slide-three").click(function(){
            $("#myCarousel").carousel(2);
        });
    });


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
           