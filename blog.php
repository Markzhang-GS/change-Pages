<!DOCTYPE html>
<html lang="cmn-Hant-TW">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3個meta標籤*必須*放在最前面，任何其他內容都*必須*跟隨其後！ -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-58537071-1"></script>
    <script async src="https://static.addtoany.com/menu/page.js"></script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-P9PW5ZX');</script>
    <!-- End Google Tag Manager -->
    <script src="http://www.finereport.com/tw/wp-includes/js/jquery.min.js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-58537071-1');
    </script>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9PW5ZX" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    </script>


    <!-- 自定義TDK -->
    <?php
//    function get_first_p($post){
//        //如果是使用 Windows Live Writer 这些工具写日志，可能使用<p>和</p>进行分段
//        if(preg_match('/<p>(.*)<\/p>/iU',trim(strip_tags($post->post_content,"<p>")),$matches)){
//            return $matches[1];
//        } else {
//            //如果直接在 WordPress 写日志，使用换行符（\n）来分段
//            $post_content = explode("\n",trim(strip_tags($post->post_content)));
//            return $post_content ['0'];
//        }
//    }


    ?>
    <title>
<!--        --><?php //if (is_home()) {echo "FineReport-最強大動態報表與BI商業智慧軟體，高效、靈活的資料視覺化";}
//        elseif(is_page() or is_single())  {echo get_post_meta($post->ID,"title_single", true);}
//        elseif (is_search()) {echo "搜索結果 | FineReport-最強大動態報表與BI商業智慧軟體，高效、靈活的資料視覺化";} elseif (is_404())
//        {echo "页面未找到!";}else {wp_title('',true);echo " | FineReport-最強大動態報表與BI商業智慧軟體";} ?>
    </title>
<!--    --><?php //if ( is_home() ) { ?>
<!--        <meta name="keywords" content="finereport,報表,報表軟體,報表工具,報表開發工具,資料視覺化工具,資料分析工具,報表開發工具,BI工具,商業智慧工具" />-->
<!--        <meta name="description" content="FineReport是一款純Java的動態報表與BI商業智慧軟體，採用類似Excel操作，高效開發各種資料視覺化報表，整合幾乎所有異質資料庫，輕鬆搭建統一的資料決策平台，行動端、PC端、大屏中隨時查閱和資料回填。" />-->
<!--    --><?php //} ?>
<!--    --><?php //if ( is_single() || is_page() ) { ?>
<!--        <meta name="keywords" content="--><?php //$key="keywords"; echo get_post_meta($post->ID, $key, true); ?><!--" />-->
<!--        <meta name="description" content="--><?php //$key="description"; echo get_post_meta($post->ID, $key, true); ?><!--" />-->
<!--        <meta property="og:locale" content="cmn-Hant-TW"/>-->
<!--        <meta property="og:type" content="article"/>-->
<!--        <meta property="og:title" content="--><?php //echo get_the_title($post->ID);?><!--"/>-->
<!--        <meta property="og:description" content="--><?php //echo get_first_p($post); ?><!--"/>-->
<!--        <meta property="og:url" content="--><?php //echo get_permalink($post->ID); ?><!--"/>-->
<!--        <meta property="og:site_name" content="FineReport"/>-->
<!--        <meta property="og:image" content="--><?php //echo catch_that_image(); ?><!--"/> -->
<!--    --><?php //} ?>

       <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="http://www.finereport.com/tw/wp-content/themes/BusinessNews/bootstrap.min.css?111" >
    <!--    <link rel="stylesheet" type="text/css" href="http://www.finereport.com/tw/wp-content/themes/BusinessNews/common-v3.css">-->

<!--    <link href="http://www.finereport.com/tw/wp-content/themes/BusinessNews/outside/font-awesome.min.css" rel="stylesheet">-->
<!--    <link rel="stylesheet" type="text/css" href="http://www.finereport.com/tw/wp-content/themes/BusinessNews/outside/jquery.fancybox.min.css">-->
    <!-- <link rel="stylesheet" id="addtoany-css" href="https://www.finereport.com/en/wp-content/plugins/add-to-any/addtoany.min.css?ver=1.15" type="text/css" media="all"> -->
    <script type="text/javascript" src="https://www.finereport.com/tw/wp-content/plugins/add-to-any/addtoany.min.js?ver=1.1"></script>
    <style type="text/css">
        @media (min-width: 1200px){
            .container {
                width: 1200px;
                height: 60px;
            }
            .navbar{
                height:60px
            }
        }

        .a2a_menu, .a2a_menu * {
            -moz-box-sizing: content-box;
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            float: none;
            margin: 0;
            padding: 0;
            position: static;
            height: auto;
            width: auto
        }

        .a2a_menu {
            border-radius: 6px;
            display: none;
            direction: ltr;
            background: #FFF;
            font: 16px sans-serif-light, HelveticaNeue-Light, "Helvetica Neue Light", "Helvetica Neue", Arial, Helvetica, "Liberation Sans", sans-serif;
            color: #000;
            line-height: 12px;
            border: 1px solid #CCC;
            vertical-align: baseline;
            overflow: hidden
        }

        .a2a_mini {
            min-width: 200px;
            position: absolute;
            width: 300px;
            z-index: 9999997
        }

        .a2a_overlay {
            display: none;
            background: #616c7d;
            _height: expression( ((e=document.documentElement.clientHeight)?e:document.body.clientHeight)+"px" );
            _width: expression( ((e=document.documentElement.clientWidth)?e:document.body.clientWidth)+"px" );
            filter: alpha(opacity=90);
            opacity: .92;
            backdrop-filter: blur(8px);
            position: fixed;
            _position: absolute;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            z-index: 9999998;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            transition: opacity .14s, backdrop-filter .14s
        }

        .a2a_full {
            background: #FFF;
            border: 1px solid #FFF;
            height: auto;
            height: calc(320px);
            top: 15%;
            _top: expression(40+((e=document.documentElement.scrollTop)?e:document.body.scrollTop)+"px");
            left: 50%;
            margin-left: -320px;
            position: fixed;
            _position: absolute;
            text-align: center;
            width: 640px;
            z-index: 9999999;
            transition: transform .14s, opacity .14s
        }

        .a2a_full_footer, .a2a_full_header, .a2a_full_services {
            border: 0;
            margin: 0;
            padding: 12px;
            box-sizing: border-box
        }

        .a2a_full_header {
            padding-bottom: 8px
        }

        .a2a_full_services {
            height: 280px;
            overflow-y: scroll;
            padding: 0 12px;
            -webkit-overflow-scrolling: touch
        }

        .a2a_full_services .a2a_i {
            display: inline-block;
            float: none;
            width: 181px;
            width: calc(33.334% - 18px)
        }

        div.a2a_full_footer {
            font-size: 12px;
            text-align: center;
            padding: 8px 14px
        }

        div.a2a_full_footer a, div.a2a_full_footer a:visited {
            display: inline;
            font-size: 12px;
            line-height: 14px;
            padding: 8px 14px
        }

        div.a2a_full_footer a:focus, div.a2a_full_footer a:hover {
            background: 0 0;
            border: 0;
            color: #0166FF
        }

        div.a2a_full_footer a span.a2a_s_a2a, div.a2a_full_footer a span.a2a_w_a2a {
            background-size: 14px;
            border-radius: 3px;
            display: inline-block;
            height: 14px;
            line-height: 14px;
            margin: 0 3px 0 0;
            vertical-align: top;
            *vertical-align: middle;
            width: 14px
        }

        .a2a_modal {
            height: 0;
            left: 50%;
            margin-left: -320px;
            position: fixed;
            _position: absolute;
            text-align: center;
            top: 15%;
            _top: expression(40+((e=document.documentElement.scrollTop)?e:document.body.scrollTop)+"px");
            width: 640px;
            z-index: 9999999;
            transition: transform .14s, opacity .14s;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
        }

        .a2a_modal_body {
            background: 0 0;
            border: 0;
            font: 24px sans-serif-light, HelveticaNeue-Light, "Helvetica Neue Light", "Helvetica Neue", Arial, Helvetica, "Liberation Sans", sans-serif;
            position: relative;
            height: auto;
            width: auto
        }

        .a2a_thanks {
            color: #fff;
            height: auto;
            margin-top: 20px;
            width: auto
        }

        .a2a_thanks > div:first-child {
            margin: 0 0 40px 0
        }

        .a2a_thanks div * {
            height: inherit
        }

        #a2a_copy_link {
            background: #FFF;
            border: 1px solid #FFF;
            margin-top: 15%
        }

        span.a2a_s_link#a2a_copy_link_icon, span.a2a_w_link#a2a_copy_link_icon {
            background-size: 48px;
            border-radius: 0;
            display: inline-block;
            height: 48px;
            left: 0;
            line-height: 48px;
            margin: 0 3px 0 0;
            position: absolute;
            vertical-align: top;
            *vertical-align: middle;
            width: 48px
        }

        #a2a_modal input#a2a_copy_link_text {
            background-color: transparent;
            _background-color: #FFF;
            border: 0;
            color: #2A2A2A;
            font: inherit;
            height: 48px;
            left: 62px;
            max-width: initial;
            padding: 0;
            position: relative;
            width: 564px;
            width: calc(100% - 76px)
        }

        #a2a_copy_link_copied {
            background-color: #0166ff;
            color: #fff;
            display: none;
            font: inherit;
            font-size: 16px;
            margin-top: 1px;
            padding: 3px 8px
        }

        @media (prefers-color-scheme: dark) {
            .a2a_menu a, .a2a_menu a.a2a_i, .a2a_menu a.a2a_i:visited, .a2a_menu a.a2a_more, i.a2a_i {
                border-color: #2a2a2a !important;
                color: #fff !important
            }

            .a2a_menu a.a2a_i:active, .a2a_menu a.a2a_i:focus, .a2a_menu a.a2a_i:hover, .a2a_menu a.a2a_more:active, .a2a_menu a.a2a_more:focus, .a2a_menu a.a2a_more:hover, .a2a_menu_find_container {
                border-color: #444 !important;
                background-color: #444 !important
            }

            .a2a_menu {
                background-color: #2a2a2a;
                border-color: #2a2a2a
            }

            .a2a_menu_find {
                color: #fff !important
            }

            .a2a_menu span.a2a_s_find svg {
                background-color: transparent !important
            }

            .a2a_menu span.a2a_s_find svg path {
                fill: #fff !important
            }
        }

        @media print {
            .a2a_kit, .a2a_menu, .a2a_overlay {
                visibility: hidden
            }
        }

        @keyframes a2aFadeIn {
            from {
                opacity: 0
            }
            to {
                opacity: 1
            }
        }

        .a2a_starting {
            opacity: 0
        }

        .a2a_starting.a2a_full, .a2a_starting.a2a_modal {
            transform: scale(.8)
        }

        @media (max-width: 639px) {
            .a2a_full {
                border-radius: 0;
                top: 15%;
                left: 0;
                margin-left: auto;
                width: 100%
            }

            .a2a_modal {
                left: 0;
                margin-left: 10px;
                width: calc(100% - 20px)
            }
        }

        @media (min-width: 318px) and (max-width: 437px) {
            .a2a_full .a2a_full_services .a2a_i {
                width: calc(50% - 18px)
            }
        }

        @media (max-width: 317px) {
            .a2a_full .a2a_full_services .a2a_i {
                width: calc(100% - 18px)
            }
        }

        @media (max-height: 436px) {
            .a2a_full {
                bottom: 40px;
                height: auto;
                top: 40px
            }
        }

        @media (max-height: 550px) {
            .a2a_modal {
                top: 30px
            }
        }

        @media (max-height: 360px) {
            .a2a_modal {
                top: 20px
            }

            .a2a_thanks > div:first-child {
                margin-bottom: 20px
            }
        }

        .a2a_menu a {
            color: #0166FF;
            text-decoration: none;
            font: 16px sans-serif-light, HelveticaNeue-Light, "Helvetica Neue Light", "Helvetica Neue", Arial, Helvetica, "Liberation Sans", sans-serif;
            line-height: 14px;
            height: auto;
            width: auto;
            outline: 0
        }

        .a2a_menu a.a2a_i:visited, .a2a_menu a.a2a_more {
            color: #0166FF
        }

        .a2a_menu a.a2a_i:active, .a2a_menu a.a2a_i:focus, .a2a_menu a.a2a_i:hover, .a2a_menu a.a2a_more:active, .a2a_menu a.a2a_more:focus, .a2a_menu a.a2a_more:hover {
            color: #2A2A2A;
            border-color: #EEE;
            border-style: solid;
            background-color: #EEE;
            text-decoration: none
        }

        .a2a_menu span.a2a_s_find {
            background-size: 24px;
            height: 24px;
            left: 8px;
            position: absolute;
            top: 7px;
            width: 24px
        }

        .a2a_menu span.a2a_s_find svg {
            background-color: #FFF
        }

        .a2a_menu span.a2a_s_find svg path {
            fill: #CCC
        }

        #a2a_menu_container {
            display: inline-block
        }

        #a2a_menu_container {
            _display: inline
        }

        .a2a_menu_find_container {
            border: 1px solid #CCC;
            border-radius: 6px;
            padding: 2px 24px 2px 0;
            position: relative;
            text-align: left
        }

        .a2a_cols_container .a2a_col1 {
            overflow-x: hidden;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch
        }

        #a2a_modal input, #a2a_modal input[type=text], .a2a_menu input, .a2a_menu input[type=text] {
            display: block;
            background-image: none;
            box-shadow: none;
            line-height: 100%;
            margin: 0;
            outline: 0;
            overflow: hidden;
            padding: 0;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            -webkit-appearance: none
        }

        #a2apage_find_container input, #a2apage_find_container input[type=text] {
            background-color: transparent;
            _background-color: #FFF;
            border: 0;
            box-sizing: content-box;
            color: #2A2A2A;
            font: inherit;
            font-size: 16px;
            height: 28px;
            line-height: 20px;
            left: 38px;
            outline: 0;
            margin: 0;
            max-width: initial;
            padding: 2px 0;
            position: relative;
            width: 99%
        }

        .a2a_clear {
            clear: both
        }

        .a2a_svg {
            background-repeat: no-repeat;
            display: block;
            overflow: hidden;
            height: 32px;
            line-height: 32px;
            padding: 0;
            width: 32px
        }

        .a2a_svg svg {
            background-repeat: no-repeat;
            background-position: 50% 50%;
            border: none;
            display: block;
            left: 0;
            margin: 0 auto;
            overflow: hidden;
            padding: 0;
            position: relative;
            top: 0;
            width: auto;
            height: auto
        }

        a.a2a_i, i.a2a_i {
            display: block;
            float: left;
            border: 1px solid #FFF;
            line-height: 24px;
            padding: 6px 8px;
            text-align: left;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            width: 132px
        }

        a.a2a_i span, a.a2a_more span {
            display: inline-block;
            overflow: hidden;
            vertical-align: top;
            *vertical-align: middle
        }

        a.a2a_i .a2a_svg {
            margin: 0 6px 0 0
        }

        a.a2a_i .a2a_svg, a.a2a_more .a2a_svg {
            background-size: 24px;
            height: 24px;
            line-height: 24px;
            width: 24px
        }

        a.a2a_sss:hover {
            border-left: 1px solid #CCC
        }

        a.a2a_menu_show_more_less {
            border-bottom: 1px solid #FFF;
            border-left: 0;
            border-right: 0;
            line-height: 24px;
            margin: 6px 0 0;
            padding: 6px;
            -webkit-touch-callout: none
        }

        a.a2a_menu_show_more_less span {
            display: inline-block;
            height: 24px;
            margin: 0 6px 0 0
        }

        .a2a_kit .a2a_svg {
            background-repeat: repeat
        }

        .a2a_default_style a {
            float: left;
            line-height: 16px;
            padding: 0 2px
        }

        .a2a_default_style a:hover .a2a_svg, .a2a_kit a:hover .a2a_svg, .a2a_overlay_style a:hover .a2a_svg svg {
            opacity: .7
        }

        .a2a_overlay_style.a2a_default_style a:hover .a2a_svg {
            opacity: 1
        }

        .a2a_default_style .a2a_count, .a2a_default_style .a2a_svg, .a2a_kit .a2a_svg, .a2a_menu .a2a_svg, .a2a_kit .a2a_count, .a2a_kit .a2a_svg {
            border-radius: 4px
        }

        .a2a_default_style .a2a_counter img, .a2a_default_style .a2a_dd, .a2a_default_style .a2a_svg {
            float: left
        }

        .a2a_default_style .a2a_img_text {
            margin-right: 4px
        }

        .a2a_default_style .a2a_divider {
            border-left: 1px solid #000;
            display: inline;
            float: left;
            height: 16px;
            line-height: 16px;
            margin: 0 5px
        }

        .a2a_kit a {
            cursor: pointer
        }

        .a2a_kit {
            background-color: #fff;
            border-radius: 6px;
            position: fixed;
            z-index: 9999995
        }

        .a2a_overlay_style {
            z-index: 2147483647
        }

        .a2a_kit, .a2a_overlay_style {
            animation: a2aFadeIn .2s ease-in;
            padding: 4px
        }

        .a2a_kit a {
            clear: left;
            display: block;
            overflow: hidden;
            padding: 4px;
            text-decoration: none
        }

        .a2a_kit.a2a_default_style {
            bottom: 0
        }

        .a2a_kit.a2a_default_style a, .a2a_overlay_style.a2a_default_style a {
            padding: 4px
        }

        .a2a_count {
            background-color: #fff;
            border: 1px solid #ccc;
            box-sizing: border-box;
            color: #2a2a2a;
            display: block;
            float: left;
            font: 12px Arial, Helvetica, sans-serif;
            height: 16px;
            margin-left: 4px;
            position: relative;
            text-align: center;
            width: 50px
        }

        .a2a_count:after, .a2a_count:before {
            border: solid transparent;
            border-width: 4px 4px 4px 0;
            content: "";
            height: 0;
            left: 0;
            line-height: 0;
            margin: -4px 0 0 -4px;
            position: absolute;
            top: 50%;
            width: 0
        }

        .a2a_count:before {
            border-right-color: #ccc
        }

        .a2a_count:after {
            border-right-color: #fff;
            margin-left: -3px
        }

        .a2a_count span {
            animation: a2aFadeIn .14s ease-in
        }

        .a2a_kit .a2a_counter img {
            display: block
        }

        .a2a_kit .a2a_count {
            float: none;
            margin-left: 0;
            margin-top: 6px
        }

        .a2a_kit .a2a_count:after, .a2a_kit .a2a_count:before {
            border: solid transparent;
            border-width: 0 4px 4px 4px;
            content: "";
            height: 0;
            left: 50%;
            line-height: 0;
            margin: -4px 0 0 -4px;
            position: absolute;
            top: 0;
            width: 0
        }

        .a2a_kit .a2a_count:before {
            border-bottom-color: #ccc
        }

        .a2a_kit .a2a_count:after {
            border-bottom-color: #fff;
            margin-top: -3px
        }

        .a2a_nowrap {
            white-space: nowrap
        }

        .a2a_note {
            margin: 0 auto;
            padding: 9px;
            font-size: 12px;
            text-align: center
        }

        .a2a_note .a2a_note_note {
            margin: 0;
            color: #2A2A2A
        }

        .a2a_wide a {
            display: block;
            margin-top: 3px;
            border-top: 1px solid #EEE;
            text-align: center
        }

        .a2a_label {
            position: absolute !important;
            clip: rect(1px 1px 1px 1px);
            clip: rect(1px, 1px, 1px, 1px);
            clip-path: polygon(0 0, 0 0, 0 0);
            -webkit-clip-path: polygon(0 0, 0 0, 0 0);
            overflow: hidden;
            height: 1px;
            width: 1px
        }

        .a2a_kit, .a2a_menu, .a2a_modal, .a2a_overlay {
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            outline: 0
        }

        .a2a_dd img {
            border: 0
        }

        .a2a_button_facebook_like iframe {
            max-width: none

        }

        .a2a_kit{
            left: 0px;  background-color: transparent; line-height: 32px;
        }

        @media screen and (max-width: 600px) {
            .a2a_kit{
                left: 0px; bottom: 0px; background-color: transparent; line-height: 32px;
            }
            .addtoany_content {
                clear: both;
                margin: 16px 0
            }

            .addtoany_header {
                margin: 0 0 16px
            }

            .addtoany_list {
                display: inline;
                line-height: 16px
            }

            .addtoany_list a,.widget .addtoany_list a {
                border: 0;
                box-shadow: none;
                display: inline-block;
                font-size: 16px;
                padding: 0 4px;
                vertical-align: middle
            }

            .addtoany_list a img {
                border: 0;
                display: inline-block;
                opacity: 1;
                overflow: hidden;
                vertical-align: baseline
            }

            .addtoany_list a span {
                display: inline-block;
                float: none
            }

            .addtoany_list.a2a_kit_size_32 a {
                font-size: 32px
            }

            .addtoany_list.a2a_kit_size_32 a:not(.addtoany_special_service)>span {
                height: 32px;
                line-height: 32px;
                width: 32px
            }

            .addtoany_list a:not(.addtoany_special_service)>span {
                border-radius: 4px;
                display: inline-block;
                opacity: 1
            }

            .addtoany_list a .a2a_count {
                position: relative;
                vertical-align: top
            }

            .addtoany_list a:hover,.widget .addtoany_list a:hover {
                border: 0;
                box-shadow: none
            }

            .addtoany_list a:hover img,.addtoany_list a:hover span {
                opacity: .7
            }

            .addtoany_list a.addtoany_special_service:hover img,.addtoany_list a.addtoany_special_service:hover span {
                opacity: 1
            }

            .addtoany_special_service {
                display: inline-block;
                vertical-align: middle
            }

            .addtoany_special_service a,.addtoany_special_service div,.addtoany_special_service div.fb_iframe_widget,.addtoany_special_service iframe,.addtoany_special_service span {
                margin: 0;
                vertical-align: baseline!important
            }

            .addtoany_special_service iframe {
                display: inline;
                max-width: none
            }

            a.addtoany_share.addtoany_no_icon span.a2a_img_text {
                display: none
            }

            a.addtoany_share img {
                border: 0;
                width: auto;
                height: auto
            }


        }


    </style>
    <style type="text/css">
        body,html{
            font-family:'PingFangSC-Light','Hiragino Sans GB','Microsoft YaHei','OpenSans','Myriad Pro','Verdana';
        }
        h1 {color: #191e28;font-size: 24px;}
        h2 {color: #191e28;font-size: 24px;}
        h3,h4 {color: #191e28;font-size: 16px;}
        p {color: #7d8189;font-size: 16px; line-height: 25px;}
        .navbar {
            min-height: 60px;
        }
        .navbar-brand {
            padding: 15px;
            height: 60px;
            width: 146px;
        }
        .navbar-default .navbar-nav>li {
            padding: 10px 15px;
        }
        .navbar-default .navbar-nav>li>a {
            font-size: 16px;
            color: #333;
            padding: 12px 0;
            line-height: 16px;
            letter-spacing: 1px;
        }
        #headnav li a.download {
            border: 1px solid #20ade5;
            border-radius: 3px;
            color: #20ade5;
            padding: 10px 18px;
            font-size: 16px;
            line-height: 16px;
            width: auto;
            color: #ffffff;
            background-color:#3c61fd;
        }





        .dropdown-menu>li>a {font-size: 14px;color: #7d8189;padding:5px 15px;}
        .dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus{color: #20ade5;background-color: #f2f3f4;}

        .
        /*巨型导航*/
        .megamenu {width: 250px; background-color: #fafdff;}
        .megamenu>li>ul {padding-left: 0;}
        .megamenu>li>ul>li {
            list-style: none;
        }
        .megamenu .dropdown-header{
            padding: 5px 0px;
            font-size: 14px;
            color: #20ade5;
        }
        .dropdown-menu .divider{margin: 3px 0;}
        .megamenu>li>ul>li>a {
            font-size: 15px;
            display: block;
            padding: 10px 0px;
            clear: both;
            font-weight: normal;
            color: #7d8189;
            white-space: normal;
        }
        .megamenu>li>ul>li>a:hover, .megamenu>li>ul>li>a:focus {
            text-decoration: none;
            color: #20ade5;
            background-color: #f2f3f4;
        }
        .jumbotron h1 {color: #f2f4f6;font-size: 36px;}
        .fastlink {padding-top:30px;padding-bottom:60px;}
        .thumbnail a>img, .thumbnail>img{max-height:100px;}

        /*返回顶部*/
        p#back-to-top{
            position:fixed;
            display:none;
            bottom:50px;
            right:40px;
        }
        p#back-to-top a{
            text-align:center;
            text-decoration:none;
            color:#d1d1d1;
            display:block;
            width:64px;
            /*使用CSS3中的transition属性给跳转链接中的文字添加渐变效果*/
            -moz-transition:color 0.5s;
            -webkit-transition:color 0.5s;
            -o-transition:color 0.5s;
        }
        p#back-to-top a:hover{
            color:#979797;
        }
        p#back-to-top a span{
            background:transparent url(/tw/wp-content/themes/BusinessNews/images/top.png) no-repeat;
            border-radius:6px;
            display:block;
            height:60px;
            width:60px;
            margin:auto;
            margin-bottom:5px;
            /*使用CSS3中的transition属性给<span>标签背景颜色添加渐变效果*/
            -moz-transition:background 0.5s;
            -webkit-transition:background 0.5s;
            -o-transition:background 0.5s;
        }
        #back-to-top a:hover span{
            background:transparent url(/tw/wp-content/themes/BusinessNews/images/top.png) no-repeat;
        }
        @media screen and (max-width: 600px) {
            #back-to-top{
                position:fixed;
                display:none;
                bottom:10px;
                right:10px;
            }
            /*.navbar-brand > img{		width:250px;	}	*/
            .bot-nav .container .col-xs-6{		height:200px;	}
        }

        #headnav li a.download{
        /*    border: 1px solid #20ade5;*/
        /*    border-radius: 3px;*/

        /*    padding: 10px 18px;*/
        /*    width: auto;*/
        /*    letter-spacing: 1px;*/
        /*    margin:5px 30px;*/
        /*    text-align:center;*/
        }


    </style>
    <style type="text/css">
        .bot-nav{
            padding-top: 30px;
            padding-bottom: 30px;
            background-color: #191e28;
        }
        .bot-nav ol, ul {padding-left: 0;}
        .bot-nav .list-group-item{
            background-color: #191e28;
            padding-top: 5px;
            padding-bottom: 5px;
            border: 0;
        }
        /* 首页  頂部廣告位*/
        .topad {
            background-size: cover;
            background-position: center;
            padding-top: 60px;
        }
        .topad img { height: auto; width: auto\9; width:100%; position: fixed;background-color: #000;  z-index: 999 ; }

        .bot-nav h4{color: #20ade5;}
        .bot-nav h5{color: #20ade5;font-size: 12px;}
        .list-group-item a{color: #7d8189; font-size: 14px;}
        .abstract>.col-md-9 h3{color:#20ade5;}
        .singleimg{
            margin: auto;
            padding-bottom: 20px;
        }
        @media screen and (max-width: 600px){
            img{
                padding-bottom: 0px;
            }
        }

    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="http://www.finereport.com/tw/wp-content/themes/BusinessNews/tracker.js"></script>

    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?43132450b0024686537065a45a188634";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
            document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1348010421977092');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1348010421977092&ev=PageView&noscript=1"/></noscript>
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->

    <!-- Global site tag (gtag.js) - Google Ads: 956130027 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-956130027"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'AW-956130027');
    </script>
    <style>
        .ad-title {
            font-size: 24px;
            font-weight: 500;
            color: rgba(51,51,51,1);
            line-height: 33px;
            margin-bottom: 16px;
            margin-top: 28px;
        }
        .ad {
            background: rgba(255,255,255,1);
            border: 1px solid rgba(211,211,211,1);
            padding: 10px;
            margin-bottom: 8px;
        }
        .ad .ad-img {
            margin-bottom: 5px;
        }
        .ad a {
            text-decoration: none;
        }
        .ad-btn {
            width: 100%;
            padding: 9px 0;
            margin-top: 24px;
            margin-bottom: 16px;
            text-align: center;
            cursor: pointer;
            background: rgba(21,191,204,1);
            border-radius: 20px;
            font-size: 16px;
            color: rgba(255,255,255,1);
            line-height: 22px;
        }
        .ad-text {
            margin-top: 0;
            margin-bottom: 14px;
            margin-left: 12px;
            margin-right: 12px;
            color: #7d8189;
            font-size: 13px;
            line-height: 26px;
        }
        #fixAd {

            top: 60px;
            /*width: 100%;*/
            position: fixed;
            z-index: 9;
            right: 0;
        }
    </style>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            $(".dropdown").hover(
                function() { $('.dropdown-menu', this).stop().fadeIn("fast");
                },
                function() { $('.dropdown-menu', this).stop().fadeOut("fast");
                });
        });
    </script>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.8";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
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


</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            　<!-- .navbar-toggle样式用于toggle收缩的内容，即nav-collapse collapse样式所在元素 -->
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- 确保无论是宽屏还是窄屏，navbar-brand都显示 -->
            <a href="http://www.fanruan.com" class="navbar-brand"><img src="//www.fanruan.com/images/logo-fanruan.png" alt="帆软LOGO" height="30"></a>
        </div>

        <div class="collapse navbar-collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav hidden-xs hidden-sm" id="headnav">
                <li><a href="https://www.finereport.com/tw/">產品介紹</a></li>
                <li><a href="https://www.finereport.com/tw/success/casecenter">成功案例</a></li>
                <li><a href="https://www.finereport.com/tw/success/manufacture">行業方案</a></li>
                <li><a href="https://www.finereport.com/tw/company">關於帆軟</a></li>
                <li><a href="https://www.finereport.com/tw/products/frlogin" class="download">免费试用</a></li>
            </ul>

            <ul class="nav navbar-nav hidden-md hidden-lg" id="headnav">
                <li><a href="https://www.finereport.com/tw/">產品介紹</a></li>
                <li><a href="https://www.finereport.com/tw/success/casecenter">成功案例</a></li>
                <li><a href="https://www.finereport.com/tw/success/manufacture">行業方案</a></li>
                <li><a href="https://www.finereport.com/tw/company">關於帆軟</a></li>
                <li><a href="https://www.finereport.com/tw/products/frlogin" class="download">免费试用</a></li>
            </ul>

        </div>
    </div>
</nav>
<!--<script type="text/javascript">-->
<!--    if (top.location != self.location)top.location=self.location;-->
<!--    if (document.domain != 'finereport.com' && document.domain != 'www.finereport.com'){-->
<!--        window.location.href='http://www.finereport.com/tw';-->
<!--    }-->
<!--</script>-->
<?php //if (have_posts()) : the_post(); update_post_caches($posts); ?>

<!-- <div class="topad">
        <a href="https://www.accupass.com/go/fr20200918" target="_blank">
       <img src="https://www.finereport.com/tw/wp-content/themes/BusinessNews/images/CityClass_GaoXiong.png"></a>
    </div>

 -->
<div class="container  singlebox main-container" >
    <div class="row">
        <div class="col-md-009" id="bwMainContent">
            <div class="content row">
                <div class="newstitle">
                    <h1>
<?php //the_title(); ?>
                        sd
                    </h1>
                    <p class="author">文 | 軟妹
                        <span class="time">
<?php //the_modified_time('Y-m-d G:i:s'); ?>
                            wewrerw
                        </span>

                    </p>
                </div>
                <div class="newstext">
<?php //the_content(); ?>
                    <p>fsdfsd<br></p>
                    <p>fsdfsd<br></p>
                    <p>fsdfsd<br></p>
                    <p>fsdfsd<br></p>
                    <p>fsdfsd<br></p>
                    <p>fsdfsd<br></p>
                    <p>fsdfsd<br></p>
                    <p>fsdfsd<br></p>
                    <p>fsdfsd<br></p>
                    <p>fsdfsd<br></p>
                    <p>fsdfsd<br></p>
                    <p>fsdfsd<br></p>
                    <p>fsdfsd<br></p>
                    <p>fsdfsd<br></p>
                    <p>fsdfsd<br></p>
                    <p>fsdfsd<br></p>
                    <p>fsdfsd<br></p>
                    <p>fsdfsd<br></p>
                    <p>fsdfsd<br></p>
                    <p>fsdfsd<br></p>
                    <p>fsdfsd<br></p>
                    <p>fsdfsd<br></p>
                    <p>fsdfsd<br></p>
                    <p>fsdfsd<br></p>
                    <p>fsdfsd<br></p>
                    <p>fsdfsd<br></p>
                    <p>fsdfsd<br></p>
                    <p>fsdfsd<br></p>
                    <p>fsdfsd<br></p>

                    <p>

                    </p>
                    <p style="font-size: 20px;margin-top: 9px;">喜歡這篇文章嗎？歡迎分享按讚，給予我們支持和鼓勵！</p>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3 class="recommend-title">相关文章推荐</h3>
                </div>


                <div class="col-md-12">
                    <div class="row single-recommend-div">
                        <a style="display: block" href="https://www.fanruan.com/bw/alsjz">
                            <div class="col-md-4">
                                <div class="recommend-head-div" style="background: url('https://www.fanruan.com/bw/wp-content/uploads/2020/09/数据中台-数据湖1.jpg');
                                                             background-repeat: no-repeat;background-size: cover;background-position: center;">
                                    <!--                                                    <div class="single-recommend-title-div">-->
                                    <!--                                                        <h3 class="single-recommend-title">-->
                                    <!--                                                            --><!--                                                        </h3>-->
                                    <!--                                                    </div>-->
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3 class="single-recommend-title">
                                    阿里数据中台大火，国外却在建设数据湖，这两者什么关系？                                            </h3>
                                <p class="single-recommend-content">
                                    不知道大家有没有发现，这几年的数据领域有好多的概念，例如：大数据、人工智能、物联网、边缘计算、数据治理、数据湖、数据中台、数据可视化……。这说明数据...                                            </p>
                                <p class="single-recommend-author"><span>文&nbsp;|&nbsp;</span><span>商业智能研究</span></p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row single-recommend-div">
                        <a style="display: block" href="https://www.fanruan.com/bw/brdm">
                            <div class="col-md-4">
                                <div class="recommend-head-div" style="background: url('https://www.fanruan.com/bw/wp-content/uploads/2020/07/数据中台与数据湖1.jpg');
                                                             background-repeat: no-repeat;background-size: cover;background-position: center;">
                                    <!--                                                    <div class="single-recommend-title-div">-->
                                    <!--                                                        <h3 class="single-recommend-title">-->
                                    <!--                                                            --><!--                                                        </h3>-->
                                    <!--                                                    </div>-->
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3 class="single-recommend-title">
                                    别人都没这样讲过数据中台：数据湖会是中台的“后浪”吗？                                            </h3>
                                <p class="single-recommend-content">
                                    好久不写数据中台了，但是我发现大家都很感兴趣，今天就从数据中台的建设方针来解决各位的疑惑。
                                    横向规划即在数据中台规划初期，需要打通企业各个业务系，打...                                            </p>
                                <p class="single-recommend-author"><span>文&nbsp;|&nbsp;</span><span>商业智能研究</span></p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row single-recommend-div">
                        <a style="display: block" href="https://www.fanruan.com/bw/sjgcs">
                            <div class="col-md-4">
                                <div class="recommend-head-div" style="background: url('https://www.fanruan.com/bw/wp-content/uploads/2020/07/大数据数据分析1.jpg');
                                                             background-repeat: no-repeat;background-size: cover;background-position: center;">
                                    <!--                                                    <div class="single-recommend-title-div">-->
                                    <!--                                                        <h3 class="single-recommend-title">-->
                                    <!--                                                            --><!--                                                        </h3>-->
                                    <!--                                                    </div>-->
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3 class="single-recommend-title">
                                    32岁阿里数据工程师辞职后：做报表3年，我发现比996还累                                            </h3>
                                <p class="single-recommend-content">
                                    最近有一个趋势，无论是很多IT互联网巨头公司，还是和同行的交流，发现大家都在向B端迈进，也就是做出为企业服务的东西，比如阿里云。
                                    C端，也就是我们每个人...                                            </p>
                                <p class="single-recommend-author"><span>文&nbsp;|&nbsp;</span><span>商业智能研究</span></p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row single-recommend-div">
                        <a style="display: block" href="https://www.fanruan.com/bw/nymy">
                            <div class="col-md-4">
                                <div class="recommend-head-div" style="background: url('https://www.fanruan.com/bw/wp-content/uploads/2020/07/数据中台和数据仓库1.jpg');
                                                             background-repeat: no-repeat;background-size: cover;background-position: center;">
                                    <!--                                                    <div class="single-recommend-title-div">-->
                                    <!--                                                        <h3 class="single-recommend-title">-->
                                    <!--                                                            --><!--                                                        </h3>-->
                                    <!--                                                    </div>-->
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3 class="single-recommend-title">
                                    你有没有想过，其实数据仓库和数据中台没有区别？                                            </h3>
                                <p class="single-recommend-content">
                                    要说当下在企业服务领域什么字眼最火？一定是数字化转型。什么又代表数字化转型？应该当属是数据中台战略。
                                    今天就来讲讲比较火的几个概念，先简单理解数仓、...                                            </p>
                                <p class="single-recommend-author"><span>文&nbsp;|&nbsp;</span><span>商业智能研究</span></p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row single-recommend-div">
                        <a style="display: block" href="https://www.fanruan.com/bw/alsjzj">
                            <div class="col-md-4">
                                <div class="recommend-head-div" style="background: url('https://www.fanruan.com/bw/wp-content/uploads/2020/08/数据中台与数据仓库1.jpg');
                                                             background-repeat: no-repeat;background-size: cover;background-position: center;">
                                    <!--                                                    <div class="single-recommend-title-div">-->
                                    <!--                                                        <h3 class="single-recommend-title">-->
                                    <!--                                                            --><!--                                                        </h3>-->
                                    <!--                                                    </div>-->
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3 class="single-recommend-title">
                                    阿里数据总监来谈谈中台、数仓和报表平台的区别，你看的都不对                                            </h3>
                                <p class="single-recommend-content">
                                    我对一些当下较为热门的概念做了一些梳理，其实想要了解区别，我觉得得先知道它们各自的定义。
                                    1、先说数据中台
                                    它的起源我就不说了，相信大家或多或少都看过...                                            </p>
                                <p class="single-recommend-author"><span>文&nbsp;|&nbsp;</span><span>商业智能研究</span></p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row single-recommend-div">
                        <a style="display: block" href="https://www.fanruan.com/bw/dsjxz">
                            <div class="col-md-4">
                                <div class="recommend-head-div" style="background: url('https://www.fanruan.com/bw/wp-content/uploads/2020/03/大屏_地产_2.jpg');
                                                             background-repeat: no-repeat;background-size: cover;background-position: center;">
                                    <!--                                                    <div class="single-recommend-title-div">-->
                                    <!--                                                        <h3 class="single-recommend-title">-->
                                    <!--                                                            --><!--                                                        </h3>-->
                                    <!--                                                    </div>-->
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3 class="single-recommend-title">
                                    大数据可视化展示的现状怎么样？7款大屏系统全面测评                                            </h3>
                                <p class="single-recommend-content">
                                    随着大数据时代的到来，越来越多的公司开始实现数据资源的管理和应用。比如阿里 DataV 的双十一的天猫可视化大屏、360的企业文化大屏、帆软的FineReport大屏...                                            </p>
                                <p class="single-recommend-author"><span>文&nbsp;|&nbsp;</span><span>商业智能研究</span></p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row single-recommend-div">
                        <a style="display: block" href="https://www.fanruan.com/bw/jianshe-2">
                            <div class="col-md-4">
                                <div class="recommend-head-div" style="background: url('https://www.fanruan.com/bw/wp-content/uploads/2020/03/大屏_其他_4_1.jpg');
                                                             background-repeat: no-repeat;background-size: cover;background-position: center;">
                                    <!--                                                    <div class="single-recommend-title-div">-->
                                    <!--                                                        <h3 class="single-recommend-title">-->
                                    <!--                                                            --><!--                                                        </h3>-->
                                    <!--                                                    </div>-->
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3 class="single-recommend-title">
                                    企业为什么要建设数据分析平台？应该怎么建？                                            </h3>
                                <p class="single-recommend-content">
                                    大数据时代，几乎每一个企业都对数据分析平台趋之若鹜，尤其是在今年疫情爆发之后，更多的企业主意识到了数据所具有的的极大商业价值，以及其作为支撑企业信...                                            </p>
                                <p class="single-recommend-author"><span>文&nbsp;|&nbsp;</span><span>商业智能研究</span></p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row single-recommend-div">
                        <a style="display: block" href="https://www.fanruan.com/bw/qyjsjck">
                            <div class="col-md-4">
                                <div class="recommend-head-div" style="background: url('https://www.fanruan.com/bw/wp-content/uploads/2020/05/数据仓库的概念1.jpg');
                                                             background-repeat: no-repeat;background-size: cover;background-position: center;">
                                    <!--                                                    <div class="single-recommend-title-div">-->
                                    <!--                                                        <h3 class="single-recommend-title">-->
                                    <!--                                                            --><!--                                                        </h3>-->
                                    <!--                                                    </div>-->
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3 class="single-recommend-title">
                                    1000字详解企业级数据仓库的概念，大数据etl工程师和大数据应用前景                                            </h3>
                                <p class="single-recommend-content">
                                    BI工程师、数据仓库工程师、ETL工程师、数据开发工程师（大数据开发工程师） 有什么区别？一味的解释数据仓库概念可能没意思，我们从不同角色出发吧！
                                    一、企...                                            </p>
                                <p class="single-recommend-author"><span>文&nbsp;|&nbsp;</span><span>商业智能研究</span></p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row single-recommend-div">
                        <a style="display: block" href="https://www.fanruan.com/bw/wrdz">
                            <div class="col-md-4">
                                <div class="recommend-head-div" style="background: url('https://www.fanruan.com/bw/wp-content/uploads/2020/07/数据部门搭建1.jpg');
                                                             background-repeat: no-repeat;background-size: cover;background-position: center;">
                                    <!--                                                    <div class="single-recommend-title-div">-->
                                    <!--                                                        <h3 class="single-recommend-title">-->
                                    <!--                                                            --><!--                                                        </h3>-->
                                    <!--                                                    </div>-->
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3 class="single-recommend-title">
                                    万人点赞的干货！大数据部门只能是做报表的？别逗了                                            </h3>
                                <p class="single-recommend-content">
                                    这是一篇比较有深度且全面的长文，但是看完对你肯定有帮助，这篇文章我理了四天四夜，写了一万多字，希望大家能耐心阅读，这篇文章也是万人点赞的干货。
                                    作为...                                            </p>
                                <p class="single-recommend-author"><span>文&nbsp;|&nbsp;</span><span>商业智能研究</span></p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row single-recommend-div">
                        <a style="display: block" href="https://www.fanruan.com/bw/ptjy">
                            <div class="col-md-4">
                                <div class="recommend-head-div" style="background: url('https://www.fanruan.com/bw/wp-content/uploads/2020/08/数据平台建设1.jpg');
                                                             background-repeat: no-repeat;background-size: cover;background-position: center;">

                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3 class="single-recommend-title">
                                    10年大数据平台经验，总结出这份数据建设干货（内含多张架构图）                                            </h3>
                                <p class="single-recommend-content">
                                    在业务增长过程中，每个企业不知不觉积累积累了一些数据。无论数据是多是少，企业都希望让“数据说话”，通过对数据的采集、存储、分析、计算最终提供对业务有...                                            </p>
                                <p class="single-recommend-author"><span>文&nbsp;|&nbsp;</span><span>商业智能研究</span></p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row single-recommend-div">
                        <a style="display: block" href="https://www.fanruan.com/bw/rhsjf">
                            <div class="col-md-4">
                                <div class="recommend-head-div" style="background: url('https://www.fanruan.com/bw/wp-content/uploads/2020/09/数据分析入门1.png');
                                                             background-repeat: no-repeat;background-size: cover;background-position: center;">
                                    <!--                                                    <div class="single-recommend-title-div">-->
                                    <!--                                                        <h3 class="single-recommend-title">-->
                                    <!--                                                            --><!--                                                        </h3>-->
                                    <!--                                                    </div>-->
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3 class="single-recommend-title">
                                    入行数据分析要学啥？分享一份高清数据分析知识图谱                                            </h3>
                                <p class="single-recommend-content">
                                    作者：黄伟呢
                                    今天给大家分享数据分析的8张高清知识图谱，详细介绍了一个数据分析师人所应该具备的素质，相信这也是很多转行的小白所需要的。如果您是一个想...                                            </p>
                                <p class="single-recommend-author"><span>文&nbsp;|&nbsp;</span><span>商业智能研究</span></p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row single-recommend-div">
                        <a style="display: block" href="https://www.fanruan.com/bw/zlsws">
                            <div class="col-md-4">
                                <div class="recommend-head-div" style="background: url('https://www.fanruan.com/bw/wp-content/uploads/2020/09/数据仓库理论1.jpg');
                                                             background-repeat: no-repeat;background-size: cover;background-position: center;">
                                    <!--                                                    <div class="single-recommend-title-div">-->
                                    <!--                                                        <h3 class="single-recommend-title">-->
                                    <!--                                                            --><!--                                                        </h3>-->
                                    <!--                                                    </div>-->
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3 class="single-recommend-title">
                                    做了15年数据，曾是阿里P7的我，对实时数据仓库的一些总结                                            </h3>
                                <p class="single-recommend-content">
                                    去年开始，实时数仓的概念突然火了。也许是传统的离线数仓搞了很多年，技术相对成熟了，因此大家都把注意力放到了挑战性更高的实时上来；也许是随着存量市场...                                            </p>
                                <p class="single-recommend-author"><span>文&nbsp;|&nbsp;</span><span>商业智能研究</span></p>
                            </div>
                        </a>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-md-003" id="originAdDiv">
            <h3 class="ad-title">产品推荐</h3>
            <div class="ad" style="width: 300px">
                <img class="img-responsive ad-img center-block" src="https://www.finebi.com/images/finebiad.gif">
                <a href="https://www.fanruan.com/finebi/active?utm_source=seo&amp;utm_medium=seo&amp;utm_campaign=bw&amp;utm_term=xuanfu" target="_blank">
                    <div class="ad-btn">免费试用FineBI</div>
                </a>
                <p class="ad-text"> 仅需1分钟，即可体验新一代自助式大数据BI工具，充分释放企业数据价值，引爆增长！</p>
            </div>
        </div>

        <?php //else : ?>
        <!--            <div class="errorbox">-->
        <!--                没有文章！-->
        <!--            </div>-->

        <?php //endif; ?>
    </div>
</div>
<div id="fixAd" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-9 col-md-3 hidden-xs hidden-sm">
                <h3 class="ad-title">产品推荐</h3>

                <div class="ad">
                    <img class="img-responsive ad-img center-block" src="https://www.finebi.com/images/finebiad.gif">
                    <a href="https://www.fanruan.com/finebi/active?utm_source=seo&amp;utm_medium=seo&amp;utm_campaign=bw&amp;utm_term=xuanfu" target="_blank">
                        <div class="ad-btn">免费试用FineBI</div>
                    </a>
                    <p class="ad-text"> 仅需1分钟，即可体验新一代自助式大数据BI工具，充分释放企业数据价值，引爆增长！</p>
                </div>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var windowWidth = $(window).width();
    if (windowWidth >= 768) {
        var scroH = $(document).scrollTop();
        // var navH = $(".navbar:first").height();
        // var main_content_top = $('#bwMainContent').offset().top;
        // var right_content_height = $('#fixAd').height();

        // var bottom_content_top = $('.bot-nav:last').offset().top;
        // if (scroH > main_content_top-navH) {
        //     if (scroH + right_content_height +navH+ 150 >= bottom_content_top) {
        //         $('#fixAd').hide();
        //         $('#originAdDiv').hide();
        //     } else {
        //         $('#fixAd').show();
        //         $('#originAdDiv').hide();
        //     }
        // } else {
        //     $('#fixAd').hide();
        //     $('#originAdDiv').show();
        // }

    }
</script>


</body>
</html>
