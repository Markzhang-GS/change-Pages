<style>
    ._2tga._8j9v {
        border-radius: 3px;
        font-size: 12px;
        width:100px !important;
        height: 30px !important;
        padding: 0 6px;
    }
</style>

<div class="bot-nav">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-2 text-center">
                <div class="list-group">
                    <ul>
                        <li class="list-group-item"><h4>Line【FineReport報表軟體】</h4></li>
                    </ul>


                    <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/Line.png" style="width: 120px;" alt="帆軟FineReport臉書官方賬號"><br>
                    <a href="https://lin.ee/K8bh9iV"><img src="https://scdn.line-apps.com/n/line_add_friends/btn/zh-Hant.png" alt="加入好友" height="30" border="0"></a>
                    <p style="font-size: 12px;"><a href="https://lin.ee/K8bh9iV" target="_blank" style="
    color: #7d8189;">回覆簡報送最新10.0產品簡報</a></p>

                </div>
            </div>
            <div class="col-xs-12 col-md-2 text-center">
                <div class="list-group">
                    <ul>
                        <li class="list-group-item"><h4>臉書【FineReport報表軟體】</h4></li>
                    </ul>


                    <img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/fbqrcode.jpg" style="width: 120px;" alt="帆軟FineReport臉書官方賬號"><br>
                    <div class="fb-like" data-href="https://www.facebook.com/twfinereport/" data-width="100px" data-layout="button_count" data-action="like" data-size="large" data-share="false"></div>

                    <p style="font-size: 12px;"><a href="https://www.facebook.com/twfinereport/" target="_blank" style="
    color: #7d8189;">按讚送資訊人才必備懶人包</a></p>

                </div>
            </div>

            <div class="col-xs-12 col-md-2 text-center">

                <div class="list-group">
                    <ul>
                        <li class="list-group-item"><h4>商務問題諮詢</h4></li><p>王人賢 Brian</p><p>0933-790886</p><p>taiwan@fanruan.com</p>
                    </ul>
                </div>
            </div>

            <div class="col-xs-12 col-md-2 text-center">
                <div class="list-group">
                    <ul>
                        <li class="list-group-item"><h4>技術問題諮詢</h4></li><p>線上客服：點擊右下方「交談」按鈕</p><p>郵件諮詢：support@fanruan.com</p><p>服務時間：工作日 9:00～12:00,13:30～17:30</p>


                    </ul>
                </div>
            </div>


            <div class="col-xs-12 col-md-2 text-center">
                <div class="list-group">
                    <ul style="
">
                        <a href="http://www.finereport.com/tw/"><img src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/logofooter.png" width="120" alt="帆軟logo" tltle="帆軟logo"></a>
                        <p style="font-size: 12px;">版權所有©2020 帆軟軟體有限公司|蘇ICP備14031611號-3</p>
                    </ul>
                </div>
            </div></div>
    </div>
</div>
<p id="back-to-top"><a href="#top"><span></span>返回頂部</a></p>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="http://www.finereport.com/tw/wp-includes/js/jquery.min.js"></script>
<script src="http://www.finereport.com/tw/wp-includes/js/bootstrap.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        $(".dropdown").hover(
            function() { $('.dropdown-menu', this).stop().fadeIn("fast");
            },
            function() { $('.dropdown-menu', this).stop().fadeOut("fast");
            });
    });
</script>

<script type="text/javascript">
    jQuery(document).ready(function(){
//返回顶部
        $(window).scroll(function(){
            if ($(window).scrollTop()>500){
                $("#back-to-top").fadeIn(800);
            }
            else
            {
                $("#back-to-top").fadeOut(800);
            }
        });
        $("#back-to-top").click(function(){
            $('body,html').animate({scrollTop:0},1000);
            return false;
        });

//首页视频展开及关闭
        $(".videopop").click(function(){
            $(".popup").show();
            $("video").trigger('play');
        });
        $(".closeshipin").click(function(){
            $(".popup").hide();
            $("video").trigger('pause');
        });
//finebi视频
        $(".demovideo").click(function(){
            $(".finebidemo").show();
        });

//校招页点击详情及切换
        $(".row.jdtitle").click(function(){
            if ($(this).next().is(":hidden")) {
                $(this).next().show(500);
            }else{
                $(this).next().hide(500);
            }
            if ($(this).parent().css("box-shadow")=="none") {
                $(this).parent().css("box-shadow","0px 0px 2px rgba(25,30,40,0.15)");

            }else{
                $(this).parent().css("box-shadow","none");
            }
        });

        $(".allcat>div>a").click(function(){
            $(".allcat>div>a").removeClass("active");
            $(this).addClass("active");
        });
        $(".allcat>.col-md-3").click(function(){
            var index=$(this).index(); //获取被按下按钮的索引值，需要注意index是从0开始的
            $(".alljd").hide();
            $(".alljd").eq(index).show();
        });
    });


    //采访视频
    $("#video-2018jerry").click(function(){
        $(".video-2018jerry").show();
    });
    $("#video-2018wuzhiping").click(function(){
        $(".video-2018wuzhiping").show();
    });
    $("#video-2018guozhongyi").click(function(){
        $(".video-2018guozhongyi").show();
    });
    $("#video-gyw").click(function(){
        $(".video-gyw").show();
    });
    $("#video-gq").click(function(){
        $(".video-gq").show();
    });
    $("#video-zxf").click(function(){
        $(".video-zxf").show();
    });
    $("#video-wzy").click(function(){
        $(".video-wzy").show();
    });
    $("#video-lcf").click(function(){
        $(".video-lcf").show();
    });
    $("#video-lhq").click(function(){
        $(".video-lhq").show();
    });

    //用户评价页切换
    $(".ratingpage .list-group").hover(function(){
        $(this).find(".list-group-item.active").css("background-color","#20ade5");
        $(this).find("p").css("color","#000");
        $(this).find(".bbs").css("color","#fff");
        $(this).find(".bbsid").css("color","#fff");
    });
    $(".expland4.ratingpage .list-group").mouseleave(function(){
        $(this).find(".list-group-item.active").css("background-color","#f4f5f6");
        $(this).find("p").css("color","#7d8189");
        $(this).find(".bbs").css("color","#7d8189");
        $(this).find(".bbsid").css("color","#000");
    });
    $(".expland5.ratingpage .list-group").mouseleave(function(){
        $(this).find(".list-group-item.active").css("background-color","#d9eef9");
        $(this).find("p").css("color","#7d8189");
        $(this).find(".bbs").css("color","#7d8189");
        $(this).find(".bbsid").css("color","#000");
    });

    $(".expland2.ratingpage .col-md-2").hover(function(){
        $(".expland2 .col-md-2").find(".ratingimg").css("box-shadow","none");
        $(".expland2 .col-md-2").find(".ratingimg").css("border","1px #eee solid");
        $(".expland2 .col-md-2").find("h4").css({"color":"#7d8189","font-size":"14px"});
        $(this).find(".ratingimg").css("box-shadow","0 0 5px #20ade5");
        $(this).find(".ratingimg").css("border","1px #20ade5 solid");
        $(this).find("h4").css({"color":"#20ade5","font-size":"16px"});

        var index=$(this).index();
        $(".story").hide();
        $(".story").eq(index).show();
    });
</script>




<script type="text/javascript">
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fb34b52d2b268ff53ddc20cfa751b5f42' type='text/javascript'%3E%3C/script%3E"));
</script>


<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-58537071-1', 'auto');
    ga('send', 'pageview');

</script>

<!-- Google 再营销代码的内容 -->
<!--------------------------------------------------
再营销代码不得与个人身份信息相关联，也不得放置在与敏感类别相关的网页上。有关如何设置代码的详细信息和说明，请访问：http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
    var google_tag_params = {
        dynx_itemid: 'REPLACE_WITH_VALUE',
        dynx_itemid2: 'REPLACE_WITH_VALUE',
        dynx_pagetype: 'REPLACE_WITH_VALUE',
        dynx_totalvalue: 'REPLACE_WITH_VALUE',
    };
</script>
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 956130027;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/956130027/?guid=ON&script=0"/>
    </div>
</noscript>





<script type="application/javascript">(function(w,d,t,r,u){w[u]=w[u]||[];w[u].push({'projectId':'10000','properties':{'pixelId':'431542'}});var s=d.createElement(t);s.src=r;s.async=true;s.onload=s.onreadystatechange=function(){var y,rs=this.readyState,c=w[u];if(rs&&rs!="complete"&&rs!="loaded"){return}try{y=YAHOO.ywa.I13N.fireBeacon;w[u]=[];w[u].push=function(p){y([p])};y(c)}catch(e){}};var scr=d.getElementsByTagName(t)[0],par=scr.parentNode;par.insertBefore(s,scr)})(window,document,"script","https://s.yimg.com/wi/ytc.js","dotq");</script>


<script type="text/javascript">
    _linkedin_data_partner_id = "42451";
</script><script type="text/javascript">
    (function(){var s = document.getElementsByTagName("script")[0];
        var b = document.createElement("script");
        b.type = "text/javascript";b.async = true;
        b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
        s.parentNode.insertBefore(b, s);})();
</script>


<script type="text/javascript">
    //阿米巴功能切换
    $("#functions .selbtn1").click(function(){
        var index=$(this).index();
        $("#functions .selbox").hide();
        $("#functions .selbox").eq(index).show();
    })
    $("#functions .selbtn1").click(function(){
        $("#functions .selbtn1").removeClass("active");
        $(this).addClass("active");
    })
    //动态切换视频
    $(".lianjie2.playvideo").click(function(){
        $(".popup .fangtan").empty();
        var videourl = $(this).attr('data');
        $(".popup .fangtan").html('<video controls="controls"><source src="'+ videourl +'" type="video/mp4"></video>');
    });
    //视频展开及关闭
    $(".case .lianjie2").click(function(){
        $(".popup").show();
        $("video").trigger('play');
    });
    $(".closeshipin").click(function(){
        $(".popup").hide();
        $(".popup video").trigger('pause');
    });
</script>

</body>
</html>