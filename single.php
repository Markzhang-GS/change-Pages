<?php
get_header( 'new' );
?>
<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>


    <style type="text/css">

        .singlebox {
            padding: 40px 0;

        }
        .main-container{
            margin-top: 51px;
        }
        .newstitle h1{
            font-size: 25px;
            margin-bottom: 25px;
        }
        .row .addons{margin-top: 30px;}
        .jumbotron{
            background-image: url(http://www.finereport.com/tw/wp-content/themes/BusinessNews/images/single1.jpg);
        }
        .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover{
            color: #f2f3f4;
            background-color: #007ed3;
        }
        .jumbotron h1{
            color: #fff;
        }
        .jumbotron h2{
            font-size: 26px;
            color:#fff;
        }

        .col-md-003 .list-group-item a{color:#20ade5}
        .col-md-009 ul{padding-left:35px;}
        .col-md-009 ul>li{font-size:13px;color:#7d8189;line-height:25px;}


        .singlebox{padding: 40px 0;}
        .content{padding-right: 10px;}
        .newstitle{margin-bottom: 30px;}
        .newstitle h1{font-size: 28px;line-height: 36px;margin-bottom: 30px;letter-spacing: 1px;color: #333;margin-top: -1.5em;font-weight: 600;}
        .newstitle .author{font-size: 15px;color: #3D464D;line-height: 15px;padding: 0;}
        .newstitle .time{color: #7E8FA3;padding-left: 20px;}
        .newstext ul{padding-left:40px;}
        .newstext ul li{color:#7d8189;}
        .newstext p{font-size: 15px;color: #3D464D;line-height: 27px;}
        .newstext h2{font-size: 22px;margin-bottom: 26px;margin-top: 40px;font-weight: 600;letter-spacing: 1px;border-left: 3px solid #007dd2;padding-left: 10px;color: #333;}
        .newstext h3{font-size: 17px;margin-bottom: 20px;margin-top: 40px;font-weight: 600;letter-spacing: 1px;line-height: 16px;color: #333;}
        .newstext h4{font-size: 15px;margin-bottom: 20px;margin-top: 40px;font-weight: 600;letter-spacing: 1px;line-height: 16px;color: #333;}


        .news-rec-title{font-size: 16px;color: #333;font-weight: 600;margin: 10px 0;}
        .news-rec ul{padding-left: 15px;}
        .news-rec li{padding-bottom: 10px;font-size: 15px;}
        .news-rec a{color: #017ed3;font-size:13px;}
        .news-rec a:hover{color: #007dd2;}
        .news-rec img{vertical-align: middle;
            padding-bottom: 20px;
            display: block;
            margin: auto;
            width: 100%;
            height: auto;}
        .news-rec .row{margin-bottom: 5px;line-height: 30px;}
        .pageviews{margin:0;padding-top:20px;text-align:right;}

        @media screen and (max-width: 600px) {
            img{height:auto;}
            .newstitle .author{display: none;}
            .content{padding:0 15px;}
        }

        .btn{
            border-radius: 10px;
            background-color:#2c7adf;
            height: 40px;
            font-size: 16px;
            line-height: 26px;
            width: 200px;
        }
        .outside{
            border: 1px solid #ddd;
        }
        .outside:hover{
            border-color: #017ed3;
        }
        .xwz_bh li{
            list-style:none;
            height:25px;
            line-height:25px;
            font-size:18px;

            margin-bottom:5px;
        }
        .xwz_bh li:before{ color:#fff; margin-right:5px; display:inline-block; width:30px; height:30px;border-radius:3px; text-align:center;}
        .xwz_bh li:nth-child(1):before{content:'NO.1';color:#017ed3;}
        .xwz_bh li:nth-child(3):before{content:'NO.2';color:#017ed3;}


        .xwz_bh1 li{
            list-style:none;
            height:25px;
            line-height:25px;
            font-size:18px;

            margin-bottom:5px;}
        .xwz_bh1 li:before{ color:#fff; margin-right:5px; display:inline-block; width:30px; height:30px;border-radius:3px; text-align:center;}
        .xwz_bh1 li:nth-child(1):before{content:'NO.1';color:#017ed3;}
        .xwz_bh1 li:nth-child(3):before{content:'NO.2';color:#017ed3;}
        .xwz_bh1 li:nth-child(5):before{content:'NO.3';color:#017ed3;}
        .xwz_bh1 li:nth-child(7):before{content:'NO.4';color:#017ed3;}
        .xwz_bh1 li:nth-child(9):before{content:'NO.5';color:#017ed3;}
        .topad {
            background-size: cover;
            background-position: center;
            padding-top:0px;
        }
        .topad img { height: auto; width: auto\9; width:100%; position: fixed;background-color: #000;  z-index: 999 ; }
        .singlebox{margin-top:100px}
        @media screen and (max-width: 768px){
            .singlebox{
                margin-top:0px;
            }

                     @media screen and (max-width: 768px){
            figure img{

                width: 100%;
                height:auto;
            }
            p img{
                width: 100%;
                height:auto;
            }
            .topad {
                padding-top:4px;
            }
        }

    </style>


<!-- <div class="topad">
        <a href="https://www.accupass.com/go/fr20200918" target="_blank">
       <img src="https://www.finereport.com/tw/wp-content/themes/BusinessNews/images/CityClass_GaoXiong.png"></a>
    </div>

                           --><div class="container singlebox" >
    <div class="row">
        <div class="col-md-009">
            <div class="content">
                <div class="newstitle">
                    <h1><?php the_title(); ?></h1>
                    <p class="author">文 | 軟妹 <span class="time">
                          <?php the_modified_time('Y-m-d G:i:s'); ?></span></p>
                </div>

                <div class="newstext">

                    <?php the_content(); ?>
                    <p style="font-size: 20px;margin-top: 9px;">喜歡這篇文章嗎？歡迎分享按讚，給予我們支持和鼓勵！</p>

                </div>

            </div>




        </div>
        <?php else : ?>
            <div class="errorbox">
                没有文章！
            </div>


        <?php endif; ?>

        <div class="col-md-003">


            <div class="list-group news-rec">
                <div class="list-group-item">

                    <p class="news-rec-title">近期熱門</p>

                    <div class="row text-left">
                        <div class="col-xs-12">



                            <ul class="xwz_bh1" style="padding-left:0px">
                                <?php $post_list = new WP_Query(
                                    "tag=hot"
                                );?>
                                <?php if ( $post_list->have_posts() ) : ?>

                                    <?php while ( $post_list->have_posts() ) : $post_list->the_post(); ?>
                                        <li style="margin-top:5px"></li>
                                        <div style="border-bottom:1px solid #ddd;height:90px">
                                            <div style="width:40%;float:left;display:inline;height:80px;margin-bottom:5px;margin-top:0px">
                                                <a href="<?php the_permalink() ?>?utm_source=hotarticle&utm_medium=recommend&utm_campaign=click" class="thumbnail" target="_blank" style="margin-bottom:0px"><img src="<?php echo catch_that_image() ?>" style="display: block;height:70px;padding-bottom: 0px"></a>
                                            </div>
                                            <div style="width:60%;float:left;display:inline;height:80px;padding-left:10px;margin-bottom:5px;margin-top:0px">
                                                <a href="<?php the_permalink() ?>?utm_source=hotarticle&utm_medium=recommend&utm_campaign=click" target="_blank"><h3 style="margin-top:5px;margin-bottom:0px"><?php the_title(); ?></h3></a>

                                            </div>
                                        </div>

                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>

                    </div>





                    <p class="news-rec-title">必讀好文</p>

                    <div class="row text-left">
                        <div class="col-xs-12">
                            <?php $post_list = new WP_Query(
                                "tag=mustread"
                            );?>
                            <?php if ( $post_list->have_posts() ) : ?>

                                <?php while ( $post_list->have_posts() ) : $post_list->the_post(); ?>
                                    <div style="border-bottom:1px solid #ddd;height:100px">
                                        <div style="width:40%;float:left;display:inline;height:80px;margin-bottom:5px;margin-top:10px">
                                            <a href="<?php the_permalink() ?>?utm_source=goodarticle&utm_medium=recommend&utm_campaign=click" class="thumbnail" target="_blank" style="margin-bottom:0px"><img src="<?php echo catch_that_image() ?>" style="display: block;height:70px;padding-bottom: 0px"></a>
                                        </div>
                                        <div style="width:60%;float:left;display:inline;height:80px;padding-left:10px;margin-bottom:5px;margin-top:10px">
                                            <a href="<?php the_permalink() ?>?utm_source=goodarticle&utm_medium=recommend&utm_campaign=click" target="_blank"><h3 style="margin-top:5px;margin-bottom:0px"><?php the_title(); ?></h3></a>
                                        </div>

                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>

                    </div>



                    <p class="news-rec-title">大數據應用案例</p>

                    <div class="row text-left">
                        <div class="col-xs-6">
                            <a href="http://www.finereport.com/tw/success/manufacture?utm_source=case&utm_medium=recommend&utm_campaign=click" target="_blank">製造業</a>
                        </div>
                        <div class="col-xs-6">
                            <a href="http://www.finereport.com/tw/success/retail?utm_source=case&utm_medium=recommend&utm_campaign=click" target="_blank">零售業</a>
                        </div>
                    </div>

                    <div class="row text-left">
                        <div class="col-xs-6">
                            <a href="http://www.finereport.com/tw/success/real-estate?utm_source=case&utm_medium=recommend&utm_campaign=click" target="_blank">不動產業</a>
                        </div>
                        <div class="col-xs-6">
                            <a href="http://www.finereport.com/tw/success/financial?utm_source=case&utm_medium=recommend&utm_campaign=click" target="_blank">金融保險</a>
                        </div>
                    </div>

                    <div class="row text-left">
                        <div class="col-xs-6">
                            <a href="http://www.finereport.com/tw/success/medical?utm_source=case&utm_medium=recommend&utm_campaign=click" target="_blank">醫藥醫療</a>
                        </div>
                        <div class="col-xs-6">
                            <a href="http://www.finereport.com/tw/success/chemical?utm_source=case&utm_medium=recommend&utm_campaign=click" target="_blank">能源化工</a>
                        </div>
                    </div>

                    <div class="row text-left">
                        <div class="col-xs-6">
                            <a href="http://www.finereport.com/tw/success/internet?utm_source=case&utm_medium=recommend&utm_campaign=click" target="_blank">網絡電商業</a>
                        </div>
                        <div class="col-xs-6">
                            <a href="http://www.finereport.com/tw/success/organization?utm_source=case&utm_medium=recommend&utm_campaign=click" target="_blank">政府教育組織</a>
                        </div>
                    </div>

                    <div class="row text-left">
                        <div class="col-xs-6">
                            <a href="http://www.finereport.com/tw/success/service?utm_source=case&utm_medium=recommend&utm_campaign=click" target="_blank">餐飲休閒</a>
                        </div>
                        <div class="col-xs-6">
                            <a href="http://www.finereport.com/tw/success/othersolution?utm_source=case&utm_medium=recommend&utm_campaign=click" target="_blank">更多行業</a>
                        </div>
                    </div>



                </div>
            </div>
        </div>



    </div>


</div>
</div>

<?php get_footer( 'new' ); ?>
