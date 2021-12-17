//<! 不许右键 -->
document.oncontextmenu = function () {
    return false;
}

//轮播 
$(function () {
    // 初始化轮播
    window.onload = (function () {
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
}, );


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
}, );


$(function () {
    $.ajax({
        url: "../backphp/indexdata.php",
        dataType: "json",
        success: function (data) {
            title = "";
            title = title + data[0].title
            $(".frame_right_update_title_left").append(title);
        }
    })
})


//  输出超字数省略号查看更多
// $(function () {
//     var txt = document.getElementsByClassName("word");
//     var qwe = {};
//     for (var i = 0; i < txt.length; i++) {
//         qwe[i] = txt[i].innerHTML;
//         if (qwe[i].length > 70) {
//             var result = "";
//             result = qwe[i].substring(0, 70) + '.....' + '<button type="button" class="chakangengduo">查看更多</button>';
//             document.getElementsByClassName("word")[i].innerHTML = result;
//         }
//     }
// });