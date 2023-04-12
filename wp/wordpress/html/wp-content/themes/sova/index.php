<!DOCTYPE HTML>
<html lang="ja" prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="utf-8">
  <title>はむれっつ</title>
  <link rel="shortcut icon" type="image/x-icon" href="<?= get_template_directory_uri(); ?>/static/favicon.ico">
  <meta name="viewport" content="width=device-width">
  <!---
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
  --->
  <meta name="description" content="">
  <meta name="keyword
  s" content="">
  <meta name="author" content="">
  <meta property="og:title" content="はむれっつ">
  <meta property="og:type" content="">
  <meta property="og:description" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="はむれっつ">
  <meta property="og:image" content="<?= get_template_directory_uri(); ?>/static/ogp.png">
  <link href="<?= get_template_directory_uri(); ?>/<?= get_template_directory_uri(); ?>/static/css/reset.css" rel="stylesheet" type="text/css" media="all" />
  <link href="<?= get_template_directory_uri(); ?>/static/css/style.css" rel="stylesheet" type="text/css" media="all" />
  <link href="<?= get_template_directory_uri(); ?>/static/animate/animate.min.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/static/js/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/static/js/slick/slick-theme.css"/>
  <link rel="apple-touch-icon" href="<?= get_template_directory_uri(); ?>/static/webclip.png">
  <script type="text/javascript" src="<?= get_template_directory_uri(); ?>/static/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="<?= get_template_directory_uri(); ?>/static/js/slick/slick.min.js"></script>
  <script src="<?= get_template_directory_uri(); ?>/static/animate/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <!---mplus 1p--->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.g<?= get_template_directory_uri(); ?>/static.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@300;400;500;700;800;900&display=swap" rel="stylesheet">
  <!---/mplus 1p--->
  <!---Oswald--->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.g<?= get_template_directory_uri(); ?>/static.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
  <!---/Oswald--->
</head>
 <body>
   <header>
     <div class="header_wrap">
       <div class="header_inner">
         <a href="index.html" class="header_logo">
           <img src="<?= get_template_directory_uri(); ?>/static/images/common/logo.svg" alt="はむれっつ">
         </a>
         <div class="header_menu_btn_wrap" type="button" id="MenuOpen">
           <div class="header_menu_btn_hamburger">
             <img src="<?= get_template_directory_uri(); ?>/static/images/common/menu_hamburger.svg" alt="MENU">
           </div>
           <div class="header_menu_btn_ham animate__animated animate__headShake animate__infinite wow" data-wow-duration="2s" data-wow-iteration="3">
             <img src="<?= get_template_directory_uri(); ?>/static/images/common/menu_img.svg" alt="はむれっつ">
           </div>
         </div>
       </div>
     </div>
     <div class="header_popup_block" id="HeaderMenu">
       <div class="header_popup_inner">
         <div class="header_close_btn_wrap">
           <div class="header_close_btn" id="MenuClose">
            <img src="<?= get_template_directory_uri(); ?>/static/images/common/menu_close.svg" alt="メニュー">
           </div>
         </div>
         <div class="header_menu_wrap">
           <ul class="header_menu_list">
             <li class="header_menu_item">
               <a href="index.html" class="header_menu_link">
                 トップページ
               </a>
             </li>
             <li class="header_menu_item">
               <a href="column.html" class="header_menu_link">
                 記事一覧
               </a>
             </li>
             <li class="header_menu_item">
               <a href="comic.html" class="header_menu_link">
                 漫画一覧
               </a>
             </li>
             <li class="header_menu_item">
               <a href="shop/index.html" class="header_menu_link">
                 オンラインストア
               </a>
             </li>
             <li class="header_menu_item">
               <a href="contact.html" class="header_menu_link">
                 お問い合わせ
               </a>
             </li>
           </ul>
           <ul class="header_sub_menu_list">
             <li class="header_sub_menu_item">
               <a href="https://store.line.me/stickershop/author/68502/ja" class="header_sub_menu_link">
                 LINEスタンプ
               </a>
             </li>
             <li class="header_sub_menu_item">
               <a href="https://field.asia/" class="header_sub_menu_link">
                 運営会社
               </a>
             </li>
             <li class="header_sub_menu_item">
               <a href="http://bar-hamlets.com/" class="header_sub_menu_link">
                 BAR-HAMLETS
               </a>
             </li>
           </ul>
         </div>
       </div>
     </div>
   </header>
   <main id="top">
     <div class="fv">
       <a href="#top_content" class="scroll_link">
         <img src="<?= get_template_directory_uri(); ?>/static/images/top/img_scroll.svg" alt="SCLOLL" class="animate__animated animate__slideInDown wow" data-wow-duration="2s">
       </a>
       <div class="bg_bg_yellow_friend">
         <div class="bg_bg_yellow_friend_inner">
           <img src="<?= get_template_directory_uri(); ?>/static/images/top/fv_friends02.svg" alt="" class="fv_bg_yellow_friends02 animate__bounceOutLeft wow" data-wow-delay="1s" data-wow-duration="4s" data-wow-iteration="1">
           <img src="<?= get_template_directory_uri(); ?>/static/images/top/fv_friends01.svg" alt="" class="fv_bg_yellow_friends01">
         </div>
       </div>
       <div class="fv_bg_yellow">
       </div>
       <div class="common_wrap">
         <div class="common_inner">
           <!---
           <div class="fv_ham_wrap">
             <div class="fv_ham_text_left">
               <img src="<?= get_template_directory_uri(); ?>/static/images/top/text_fv_left.svg" alt="趣味ログのために">
             </div>
             <div class="fv_ham_text_right">
               <img src="<?= get_template_directory_uri(); ?>/static/images/top/text_fv_right.svg" alt="生きましゅらん">
             </div>
             <h2 class="sp_fv_title">
               趣味ログのために<br>
               <span>生きましゅらん</span>
             </h2>
             <div class="fv_ham_friends01 animate__animated animate__bounce wow"  data-wow-delay="0s" data-wow-duration="2s">
               <img src="<?= get_template_directory_uri(); ?>/static/images/top/fv_friends01.svg" alt="">
             </div>
             <div class="fv_ham_friends02 animate__animated animate__bounce wow" data-wow-delay="1s" data-wow-duration="2s">
               <img src="<?= get_template_directory_uri(); ?>/static/images/top/fv_friends02.svg" alt="">
             </div>
             <div class="fv_ham_friends03 animate__animated animate__bounce wow" data-wow-delay="2s" data-wow-duration="2s">
               <img src="<?= get_template_directory_uri(); ?>/static/images/top/fv_friends03.svg" alt="">
             </div>
             <div class="fv_ham_friends04 animate__animated animate__bounce wow" data-wow-delay="3s" data-wow-duration="2s">
               <img src="<?= get_template_directory_uri(); ?>/static/images/top/fv_friends04.svg" alt="">
             </div>
             <div class="fv_ham_img">
               <img src="<?= get_template_directory_uri(); ?>/static/images/top/fv_main.svg" alt="はむれっつ">
             </div>
             <div class="slick_wrap">
               <div class="slick_inner">
                 <ul class="fv_slide_list">
                   <li class="fv_slide_item">
                     <a href="column_detail.html" class="fv_slide_link" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample01.jpg);">
                     </a>
                   </li>
                   <li class="fv_slide_item">
                     <a href="column_detail.html" class="fv_slide_link" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample02.jpg);">
                     </a>
                   </li>
                   <li class="fv_slide_item">
                     <a href="column_detail.html" class="fv_slide_link" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample03.png);">
                     </a>
                   </li>
                   <li class="fv_slide_item">
                     <a href="column_detail.html" class="fv_slide_link" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample04.png);">
                     </a>
                   </li>
                   <li class="fv_slide_item">
                     <a href="column_detail.html" class="fv_slide_link" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample05.png);">
                     </a>
                   </li>
                 </ul>
                 <div class="fv_ham_img_left">
                   <img src="<?= get_template_directory_uri(); ?>/static/images/top/fv_left.svg" alt="">
                 </div>
                 <div class="fv_ham_img_right">
                   <img src="<?= get_template_directory_uri(); ?>/static/images/top/fv_right.svg" alt="">
                 </div>
               </div>
             </div>
           </div>
           --->
           <div class="fv_main_content">
             <div class="fv_main_content_text">
               <h1 class="fv_main_text">
                 <span>はむれっつ</span>は<br>
                 今日も元気です
               </h1>
               <h2 class="fv_main_sub_title">
                 ようこそ！前提の底なし沼へ！
               </h2>
             </div>
             <div class="fv_column_slide_block">
               <div class="slick_container">
                 <div class="slide_top_ham">
                   <img src="<?= get_template_directory_uri(); ?>/static/images/top/img_slide_ham.svg" alt="はむれっつ">
                 </div>
                 <ul class="pick_column_slide">
                   <li class="pick_column_slide_item">
                     <a href="column_detail.html" class="pick_column_slide_img box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample_slide01.jpg);">
                     </a>
                     <div class="pick_column_slide_category_date">
                       <a href="column_list.html" class="pick_column_slide_category">
                         <p>よくある質問</p>
                       </a>
                       <p class="pick_column_slide_date">
                         2022.07.07
                       </p>
                     </div>
                     <a href="column_detail.html" class="pick_column_slide_title_link">
                       <h3 class="pick_column_slide_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問に答えますテキストテキストテキストテキストテキスト
                       </h3>
                     </a>
                     <ul class="pick_column_slide_tag_list">
                       <li class="pick_column_slide_tag_item">
                         <a href="column_list.html" class="pick_column_slide_tag_link">
                           タグ
                         </a>
                       </li>
                       <li class="pick_column_slide_tag_item">
                         <a href="column_list.html" class="pick_column_slide_tag_link">
                           タグ
                         </a>
                       </li>
                       <li class="pick_column_slide_tag_item">
                         <a href="column_list.html" class="pick_column_slide_tag_link">
                           タグ
                         </a>
                       </li>
                     </ul>
                   </li>
                   <li class="pick_column_slide_item">
                     <a href="column_detail.html" class="pick_column_slide_img box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample_slide02.jpg">
                     </a>
                     <div class="pick_column_slide_category_date">
                       <a href="column_list.html" class="pick_column_slide_category">
                         <p>よくある質問</p>
                       </a>
                       <p class="pick_column_slide_date">
                         2022.07.07
                       </p>
                     </div>
                     <a href="column_detail.html" class="pick_column_slide_title_link">
                       <h3 class="pick_column_slide_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問に答えますテキストテキストテキストテキストテキスト
                       </h3>
                     </a>
                     <ul class="pick_column_slide_tag_list">
                       <li class="pick_column_slide_tag_item">
                         <a href="column_list.html" class="pick_column_slide_tag_link">
                           タグ
                         </a>
                       </li>
                       <li class="pick_column_slide_tag_item">
                         <a href="column_list.html" class="pick_column_slide_tag_link">
                           タグ
                         </a>
                       </li>
                       <li class="pick_column_slide_tag_item">
                         <a href="column_list.html" class="pick_column_slide_tag_link">
                           タグ
                         </a>
                       </li>
                     </ul>
                   </li>
                   <li class="pick_column_slide_item">
                     <a href="column_detail.html" class="pick_column_slide_img box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample_slide03.jpg)">
                     </a>
                     <div class="pick_column_slide_category_date">
                       <a href="column_list.html" class="pick_column_slide_category">
                         <p>よくある質問</p>
                       </a>
                       <p class="pick_column_slide_date">
                         2022.07.07
                       </p>
                     </div>
                     <a href="column_detail.html" class="pick_column_slide_title_link">
                       <h3 class="pick_column_slide_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問に答えますテキストテキストテキストテキストテキスト
                       </h3>
                     </a>
                     <ul class="pick_column_slide_tag_list">
                       <li class="pick_column_slide_tag_item">
                         <a href="column_list.html" class="pick_column_slide_tag_link">
                           タグ
                         </a>
                       </li>
                       <li class="pick_column_slide_tag_item">
                         <a href="column_list.html" class="pick_column_slide_tag_link">
                           タグ
                         </a>
                       </li>
                       <li class="pick_column_slide_tag_item">
                         <a href="column_list.html" class="pick_column_slide_tag_link">
                           タグ
                         </a>
                       </li>
                     </ul>
                   </li>
                   <li class="pick_column_slide_item">
                     <a href="column_detail.html" class="pick_column_slide_img box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample_slide02.jpg">
                     </a>
                     <div class="pick_column_slide_category_date">
                       <a href="column_list.html" class="pick_column_slide_category">
                         <p>よくある質問</p>
                       </a>
                       <p class="pick_column_slide_date">
                         2022.07.07
                       </p>
                     </div>
                     <a href="column_detail.html" class="pick_column_slide_title_link">
                       <h3 class="pick_column_slide_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問に答えますテキストテキストテキストテキストテキスト
                       </h3>
                     </a>
                     <ul class="pick_column_slide_tag_list">
                       <li class="pick_column_slide_tag_item">
                         <a href="column_list.html" class="pick_column_slide_tag_link">
                           タグ
                         </a>
                       </li>
                       <li class="pick_column_slide_tag_item">
                         <a href="column_list.html" class="pick_column_slide_tag_link">
                           タグ
                         </a>
                       </li>
                       <li class="pick_column_slide_tag_item">
                         <a href="column_list.html" class="pick_column_slide_tag_link">
                           タグ
                         </a>
                       </li>
                     </ul>
                   </li>
                   <li class="pick_column_slide_item">
                     <a href="column_detail.html" class="pick_column_slide_img box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample_slide03.jpg)">
                     </a>
                     <div class="pick_column_slide_category_date">
                       <a href="column_list.html" class="pick_column_slide_category">
                         <p>よくある質問</p>
                       </a>
                       <p class="pick_column_slide_date">
                         2022.07.07
                       </p>
                     </div>
                     <a href="column_detail.html" class="pick_column_slide_title_link">
                       <h3 class="pick_column_slide_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問に答えますテキストテキストテキストテキストテキスト
                       </h3>
                     </a>
                     <ul class="pick_column_slide_tag_list">
                       <li class="pick_column_slide_tag_item">
                         <a href="column_list.html" class="pick_column_slide_tag_link">
                           タグ
                         </a>
                       </li>
                       <li class="pick_column_slide_tag_item">
                         <a href="column_list.html" class="pick_column_slide_tag_link">
                           タグ
                         </a>
                       </li>
                       <li class="pick_column_slide_tag_item">
                         <a href="column_list.html" class="pick_column_slide_tag_link">
                           タグ
                         </a>
                       </li>
                     </ul>
                   </li>
                 </ul>
                 <div id="pick_column_slide_arrow">
                   <div class="slick-prev">
                     <img src="<?= get_template_directory_uri(); ?>/static/images/top/icon_pick_slide_next.svg" alt="<">
                   </div>
                   <div class="slick-next">
                     <img src="<?= get_template_directory_uri(); ?>/static/images/top/icon_pick_slide_prev.svg" alt=">">
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div><!---/fv--->
     <div class="top_content Top_back" id="top_content">
       <div class="common_wrap">
         <div class="common_inner">
           <div class="common_layout_wrap">
             <div class="common_layout_main">
               <section class="top_about">
                 <div class="top_about_content">
                   <div class="top_about_top_img">
                     <img src="<?= get_template_directory_uri(); ?>/static/images/top/img_about01.svg" alt="ふーん">
                   </div>
                   <div class="top_about_title_text">
                     <div class="top_about_title_block">
                       <h1 class="top_about_title">
                         はむれっつ<br>とは
                       </h1>
                       <p class="top_about_title_en">ABOUT</p>
                     </div>
                     <div class="top_about_text_block">
                       <p class="top_about_text">
                         はむれっつとは合同会社FIELDが飼っている架空のハムスターです。<br>
                         見た目はモッツァレラ、動きは地鶏、触ってみると桜餅。<br>
                         皆さんの頭の中のお花畑を根こそぎ枯らすハムスターです。
                       </p>
                     </div>
                   </div>
                   <ul class="top_about_list">
                     <li class="top_about_item">
                       はむれっつのサービスや商品を購入し続けると、秘密のイベントに招待されます
                     </li>
                     <li class="top_about_item">
                       はむれっつには大抵の仕事が依頼できます
                     </li>
                     <li class="top_about_item">
                       レストランは、うましスター5つではむミシュラン
                     </li>
                   </ul>
                   <div class="top_about_bottom_img">
                     <img src="<?= get_template_directory_uri(); ?>/static/images/top/img_about02.svg" alt="よぉ">
                   </div>
                 </div>
               </section>
               <section class="top_link">
                 <h2 class="top_link_title">
                   \ CHECK /
                 </h2>
                 <div class="top_link_small">
                   <a href="shop/index.html" class="top_link_small_banner">
                     <img src="<?= get_template_directory_uri(); ?>/static/images/top/banner_online store.svg" alt="はむれっつオンラインストア">
                   </a>
                   <a href="https://store.line.me/stickershop/author/68502/ja" class="top_link_small_banner">
                     <img src="<?= get_template_directory_uri(); ?>/static/images/top/banner_line.svg" alt="はむれっつLINEスタンプ">
                   </a>
                 </div>
                 <ul class="top_link_big_banner_list">
                   <li class="top_link_big_banner_item">
                     <a href="https://field.asia/" class="top_link_big_banner_link">
                       <img src="<?= get_template_directory_uri(); ?>/static/images/top/banner_field.svg" alt="合同会社FIELD">
                     </a>
                   </li>
                   <li class="top_link_big_banner_item">
                     <a href="http://bar-hamlets.com/" class="top_link_big_banner_link">
                       <img src="<?= get_template_directory_uri(); ?>/static/images/top/banner_bar.svg" alt="BAR-HAMLETS">
                     </a>
                   </li>
                 </ul>
               </section>
               <section class="top_new_column">
                 <div class="common_title_block">
                   <h2 class="common_title">
                     新着記事
                   </h2>
                   <p class="common_title_en">
                     NEW COLUMN
                   </p>
                 </div>
                 <div class="column_box_wrap">
                   <div class="column_box">
                     <div class="new">
                       <img src="<?= get_template_directory_uri(); ?>/static/images/common/icon_new.svg" alt="NEW">
                     </div>
                     <a href="column_detail.html" class="column_box_img box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample01.jpg);">
                     </a>
                     <div class="column_box_category_date">
                       <a href="column_list.html" class="column_box_category">
                         <p>よくある質問</p>
                       </a>
                       <p class="column_box_date">
                         2022.07.07
                       </p>
                     </div>
                     <a href="column_detail.html" class="column_box_title_link">
                       <h3 class="column_box_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問に答えます！はむれっつはハムスター？宇宙からきたの？？気になる疑問に答えます！
                       </h3>
                     </a>
                     <ul class="column_box_tag_list">
                       <li class="column_box_tag_item">
                         <a href="column_list.html" class="column_box_tag_link">
                           タグ
                         </a>
                       </li>
                       <li class="column_box_tag_item">
                         <a href="column_list.html" class="column_box_tag_link">
                           タグタグ
                         </a>
                       </li>
                       <li class="column_box_tag_item">
                         <a href="column_list.html" class="column_box_tag_link">
                           タグ
                         </a>
                       </li>
                     </ul>
                   </div>
                   <div class="column_box">
                     <div class="new">
                       <img src="<?= get_template_directory_uri(); ?>/static/images/common/icon_new.svg" alt="NEW">
                     </div>
                     <a href="column_detail.html" class="column_box_img box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample01.jpg);">
                     </a>
                     <div class="column_box_category_date">
                       <a href="column_list.html" class="column_box_category">
                         <p>よくある質問</p>
                       </a>
                       <p class="column_box_date">
                         2022.07.07
                       </p>
                     </div>
                     <a href="column_detail.html" class="column_box_title_link">
                       <h3 class="column_box_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問に答えます！はむれっつはハムスター？宇宙からきたの？？気になる疑問に答えます！
                       </h3>
                     </a>
                     <ul class="column_box_tag_list">
                       <li class="column_box_tag_item">
                         <a href="column_list.html" class="column_box_tag_link">
                           タグ
                         </a>
                       </li>
                       <li class="column_box_tag_item">
                         <a href="column_list.html" class="column_box_tag_link">
                           タグタグ
                         </a>
                       </li>
                       <li class="column_box_tag_item">
                         <a href="column_list.html" class="column_box_tag_link">
                           タグ
                         </a>
                       </li>
                     </ul>
                   </div>
                   <div class="column_box">
                     <div class="new">
                       <img src="<?= get_template_directory_uri(); ?>/static/images/common/icon_new.svg" alt="NEW">
                     </div>
                     <a href="column_detail.html" class="column_box_img box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample01.jpg);">
                     </a>
                     <div class="column_box_category_date">
                       <a href="column_list.html" class="column_box_category">
                         <p>よくある質問</p>
                       </a>
                       <p class="column_box_date">
                         2022.07.07
                       </p>
                     </div>
                     <a href="column_detail.html" class="column_box_title_link">
                       <h3 class="column_box_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問に答えます！はむれっつはハムスター？宇宙からきたの？？気になる疑問に答えます！
                       </h3>
                     </a>
                     <ul class="column_box_tag_list">
                       <li class="column_box_tag_item">
                         <a href="column_list.html" class="column_box_tag_link">
                           タグ
                         </a>
                       </li>
                       <li class="column_box_tag_item">
                         <a href="column_list.html" class="column_box_tag_link">
                           タグタグ
                         </a>
                       </li>
                       <li class="column_box_tag_item">
                         <a href="column_list.html" class="column_box_tag_link">
                           タグ
                         </a>
                       </li>
                     </ul>
                   </div>
                   <div class="column_box">
                     <a href="column_detail.html" class="column_box_img box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample01.jpg);">
                     </a>
                     <div class="column_box_category_date">
                       <a href="column_list.html" class="column_box_category">
                         <p>よくある質問</p>
                       </a>
                       <p class="column_box_date">
                         2022.07.07
                       </p>
                     </div>
                     <a href="column_detail.html" class="column_box_title_link">
                       <h3 class="column_box_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問に答えます！はむれっつはハムスター？宇宙からきたの？？気になる疑問に答えます！
                       </h3>
                     </a>
                     <ul class="column_box_tag_list">
                       <li class="column_box_tag_item">
                         <a href="column_list.html" class="column_box_tag_link">
                           タグ
                         </a>
                       </li>
                       <li class="column_box_tag_item">
                         <a href="column_list.html" class="column_box_tag_link">
                           タグタグ
                         </a>
                       </li>
                       <li class="column_box_tag_item">
                         <a href="column_list.html" class="column_box_tag_link">
                           タグ
                         </a>
                       </li>
                     </ul>
                   </div>
                 </div>
                 <div class="common_more_btn_wrap">
                   <a href="column.html" class="common_more_btn">
                     新着記事をもっと見る
                   </a>
                 </div>
               </section>
               <section class="top_new_column">
                 <div class="common_title_block">
                   <h2 class="common_title small">
                     趣味ログのために生きましゅらん
                   </h2>
                   <p class="common_title_en">
                     NEW GOURMET COLUMN
                   </p>
                 </div>
                 <div class="column_box_wrap">
                   <div class="column_box">
                     <div class="new">
                       <img src="<?= get_template_directory_uri(); ?>/static/images/common/icon_new.svg" alt="NEW">
                     </div>
                     <a href="column_detail.html" class="column_box_img box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample01.jpg);">
                     </a>
                     <div class="column_box_category_date">
                       <a href="column_list.html" class="column_box_category">
                         <p>グルメ</p>
                       </a>
                       <p class="column_box_date">
                         2022.07.07
                       </p>
                     </div>
                     <a href="column_detail.html" class="column_box_title_link">
                       <h3 class="column_box_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問に答えます！はむれっつはハムスター？宇宙からきたの？？気になる疑問に答えます！
                       </h3>
                     </a>
                     <ul class="column_box_tag_list">
                       <li class="column_box_tag_item">
                         <a href="column_list.html" class="column_box_tag_link">
                           タグ
                         </a>
                       </li>
                       <li class="column_box_tag_item">
                         <a href="column_list.html" class="column_box_tag_link">
                           タグタグ
                         </a>
                       </li>
                       <li class="column_box_tag_item">
                         <a href="column_list.html" class="column_box_tag_link">
                           タグ
                         </a>
                       </li>
                     </ul>
                   </div>
                   <div class="column_box">
                     <div class="new">
                       <img src="<?= get_template_directory_uri(); ?>/static/images/common/icon_new.svg" alt="NEW">
                     </div>
                     <a href="column_detail.html" class="column_box_img box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample01.jpg);">
                     </a>
                     <div class="column_box_category_date">
                       <a href="column_list.html" class="column_box_category">
                         <p>グルメ</p>
                       </a>
                       <p class="column_box_date">
                         2022.07.07
                       </p>
                     </div>
                     <a href="column_detail.html" class="column_box_title_link">
                       <h3 class="column_box_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問に答えます！はむれっつはハムスター？宇宙からきたの？？気になる疑問に答えます！
                       </h3>
                     </a>
                     <ul class="column_box_tag_list">
                       <li class="column_box_tag_item">
                         <a href="column_list.html" class="column_box_tag_link">
                           タグ
                         </a>
                       </li>
                       <li class="column_box_tag_item">
                         <a href="column_list.html" class="column_box_tag_link">
                           タグタグ
                         </a>
                       </li>
                       <li class="column_box_tag_item">
                         <a href="column_list.html" class="column_box_tag_link">
                           タグ
                         </a>
                       </li>
                     </ul>
                   </div>
                   <div class="column_box">
                     <div class="new">
                       <img src="<?= get_template_directory_uri(); ?>/static/images/common/icon_new.svg" alt="NEW">
                     </div>
                     <a href="column_detail.html" class="column_box_img box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample01.jpg);">
                     </a>
                     <div class="column_box_category_date">
                       <a href="column_list.html" class="column_box_category">
                         <p>グルメ</p>
                       </a>
                       <p class="column_box_date">
                         2022.07.07
                       </p>
                     </div>
                     <a href="column_detail.html" class="column_box_title_link">
                       <h3 class="column_box_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問に答えます！はむれっつはハムスター？宇宙からきたの？？気になる疑問に答えます！
                       </h3>
                     </a>
                     <ul class="column_box_tag_list">
                       <li class="column_box_tag_item">
                         <a href="column_list.html" class="column_box_tag_link">
                           タグ
                         </a>
                       </li>
                       <li class="column_box_tag_item">
                         <a href="column_list.html" class="column_box_tag_link">
                           タグタグ
                         </a>
                       </li>
                       <li class="column_box_tag_item">
                         <a href="column_list.html" class="column_box_tag_link">
                           タグ
                         </a>
                       </li>
                     </ul>
                   </div>
                   <div class="column_box">
                     <a href="column_detail.html" class="column_box_img box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample01.jpg);">
                     </a>
                     <div class="column_box_category_date">
                       <a href="column_list.html" class="column_box_category">
                         <p>グルメ</p>
                       </a>
                       <p class="column_box_date">
                         2022.07.07
                       </p>
                     </div>
                     <a href="column_detail.html" class="column_box_title_link">
                       <h3 class="column_box_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問に答えます！はむれっつはハムスター？宇宙からきたの？？気になる疑問に答えます！
                       </h3>
                     </a>
                     <ul class="column_box_tag_list">
                       <li class="column_box_tag_item">
                         <a href="column_list.html" class="column_box_tag_link">
                           タグ
                         </a>
                       </li>
                       <li class="column_box_tag_item">
                         <a href="column_list.html" class="column_box_tag_link">
                           タグタグ
                         </a>
                       </li>
                       <li class="column_box_tag_item">
                         <a href="column_list.html" class="column_box_tag_link">
                           タグ
                         </a>
                       </li>
                     </ul>
                   </div>
                 </div>
                 <div class="common_more_btn_wrap">
                   <a href="column_list.html" class="common_more_btn">
                     新着グルメ記事をもっと見る
                   </a>
                 </div>
               </section>
               <section class="top_comic">
                 <div class="common_title_block">
                   <h2 class="common_title">
                     新着はむれっつ漫画
                   </h2>
                   <p class="common_title_en">
                     NEW COMIC
                   </p>
                 </div>
                 <div class="comic_box_wrap">
                   <div class="comic_box">
                     <div class="new">
                       <img src="<?= get_template_directory_uri(); ?>/static/images/common/icon_new.svg" alt="NEW">
                     </div>
                     <a href="comic_detail.html" class="comic_box_img box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample03.png);"></a>
                     <div class="comic_box_category_date">
                       <a href="comic_list.html" class="comic_box_category">
                         <p>グルメ</p>
                       </a>
                       <p class="comic_box_date">
                         2022.07.07
                       </p>
                     </div>
                     <a href="comic_detail.html" class="comic_box_title_link">
                       <h3 class="comic_box_title">
                         本気のジャンピング土下座のお話
                       </h3>
                     </a>
                   </div>
                   <div class="comic_box">
                     <div class="new">
                       <img src="<?= get_template_directory_uri(); ?>/static/images/common/icon_new.svg" alt="NEW">
                     </div>
                     <a href="comic_detail.html" class="comic_box_img box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample04.png);"></a>
                     <div class="comic_box_category_date">
                       <a href="comic_list.html" class="comic_box_category">
                         <p>グルメ</p>
                       </a>
                       <p class="comic_box_date">
                         2022.07.07
                       </p>
                     </div>
                     <a href="comic_detail.html" class="comic_box_title_link">
                       <h3 class="comic_box_title">
                         野菜とはむれっつのお話
                       </h3>
                     </a>
                   </div>
                   <div class="comic_box">
                     <div class="new">
                       <img src="<?= get_template_directory_uri(); ?>/static/images/common/icon_new.svg" alt="NEW">
                     </div>
                     <a href="comic_detail.html" class="comic_box_img box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample05.png);"></a>
                     <div class="comic_box_category_date">
                       <a href="comic_list.html" class="comic_box_category">
                         <p>グルメ</p>
                       </a>
                       <p class="comic_box_date">
                         2022.07.07
                       </p>
                     </div>
                     <a href="comic_detail.html" class="comic_box_title_link">
                       <h3 class="comic_box_title">
                         焼肉うまいのお話
                       </h3>
                     </a>
                   </div>
                   <div class="comic_box">
                     <div class="new">
                       <img src="<?= get_template_directory_uri(); ?>/static/images/common/icon_new.svg" alt="NEW">
                     </div>
                     <a href="comic_detail.html" class="comic_box_img box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample06.png);"></a>
                     <div class="comic_box_category_date">
                       <a href="comic_list.html" class="comic_box_category">
                         <p>グルメ</p>
                       </a>
                       <p class="comic_box_date">
                         2022.07.07
                       </p>
                     </div>
                     <a href="comic_detail.html" class="comic_box_title_link">
                       <h3 class="comic_box_title">
                         育てて食べるのお話
                       </h3>
                     </a>
                   </div>
                 </div>
                 <div class="common_more_btn_wrap">
                   <a href="comic.html" class="common_more_btn">
                     新着漫画をもっと見る
                   </a>
                 </div>
               </section>
               <section class="top_online_store">
                 <div class="common_title_block">
                   <h2 class="common_title">
                     オンラインストア新作
                   </h2>
                   <p class="common_title_en">
                     ONLINE STORE
                   </p>
                 </div>
                 <div class="store_item_box_wrap">
                   <a href="shop/item_detail.html" class="store_item_box">
                     <div class="store_item_box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample07.png);">
                     </div>
                     <h3 class="store_item_box_title">
                       もうすぐつくTシャツ
                     </h3>
                     <p class="store_item_box_category">
                       トップス
                     </p>
                     <p class="store_item_box_price">
                       ¥15,000
                     </p>
                   </a>
                   <a href="shop/item_detail.html" class="store_item_box">
                     <div class="store_item_box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample08.png);">
                     </div>
                     <h3 class="store_item_box_title">
                       お寿司Tシャツ
                     </h3>
                     <p class="store_item_box_category">
                       トップス
                     </p>
                     <p class="store_item_box_price">
                       ¥15,000
                     </p>
                   </a>
                   <a href="shop/item_detail.html" class="store_item_box">
                     <div class="store_item_box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample09.png);">
                     </div>
                     <h3 class="store_item_box_title">
                       みちづれTシャツ
                     </h3>
                     <p class="store_item_box_category">
                       トップス
                     </p>
                     <p class="store_item_box_price">
                       ¥15,000
                     </p>
                   </a>
                   <a href="shop/item_detail.html" class="store_item_box">
                     <div class="store_item_box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample07.png);">
                     </div>
                     <h3 class="store_item_box_title">
                       もうすぐつくTシャツ
                     </h3>
                     <p class="store_item_box_category">
                       トップス
                     </p>
                     <p class="store_item_box_price">
                       ¥15,000
                     </p>
                   </a>
                   <a href="shop/item_detail.html" class="store_item_box">
                     <div class="store_item_box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample08.png);">
                     </div>
                     <h3 class="store_item_box_title">
                       お寿司Tシャツ
                     </h3>
                     <p class="store_item_box_category">
                       トップス
                     </p>
                     <p class="store_item_box_price">
                       ¥15,000
                     </p>
                   </a>
                   <a href="shop/item_detail.html" class="store_item_box">
                     <div class="store_item_box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample09.png);">
                     </div>
                     <h3 class="store_item_box_title">
                       みちづれTシャツ
                     </h3>
                     <p class="store_item_box_category">
                       トップス
                     </p>
                     <p class="store_item_box_price">
                       ¥15,000
                     </p>
                   </a>
                 </div>
                 <div class="common_more_btn_wrap">
                   <a href="store/index.html" class="common_more_btn">
                     オンラインストアを見る
                   </a>
                 </div>
               </section>
             </div><!---/common_layout_main--->
             <div class="common_layout_side">
               <div class="side_block">
                 <ul class="side_banner_list">
                   <li class="side_banner_item">
                     <a href="#" class="side_banner_link">
                       <img src="<?= get_template_directory_uri(); ?>/static/images/sample/sample_banner.png" alt="">
                     </a>
                   </li>
                   <li class="side_banner_item">
                     <a href="#" class="side_banner_link">
                       <img src="<?= get_template_directory_uri(); ?>/static/images/sample/sample_banner.png" alt="">
                     </a>
                   </li>
                 </ul>
               </div>
               <div class="side_block">
                 <form class="" action="column_list.html" method="">
                   <div class="common_search_input_wrap">
                     <input type="text" name="" value="" placeholder="はむれっつ記事検索" class="search_input">
                     <button type="submit" name="button" class="search_submit_btn">
                       <div class="search_submit_btn_inner">
                         <img src="<?= get_template_directory_uri(); ?>/static/images/common/icon_search.svg" alt="記事を検索">
                       </div>
                     </button>
                   </div>
                 </form>
               </div>
               <div class="side_block">
                 <div class="side_block_title_wrap">
                   <div class="side_block_title_icon">
                     <img src="<?= get_template_directory_uri(); ?>/static/images/common/icon_category.svg" alt="記事カテゴリー">
                   </div>
                   <div class="side_block_title_detail">
                     <h3 class="side_block_title">
                       記事カテゴリー
                     </h3>
                     <p class="side_block_title_en">
                       COLUMN CATEGORY
                     </p>
                   </div>
                 </div>
                 <ul class="side_category_list">
                   <li class="side_category_item">
                     <a href="column_list.html" class="side_category_link">
                       すべて<span>100</span>
                     </a>
                   </li>
                   <li class="side_category_item">
                     <a href="column_list.html" class="side_category_link">
                       アパレル<span>10</span>
                     </a>
                   </li>
                   <li class="side_category_item">
                     <a href="column_list.html" class="side_category_link">
                       アパレル<span>10</span>
                     </a>
                   </li>
                   <li class="side_category_item">
                     <a href="column_list.html" class="side_category_link">
                       アパレル<span>10</span>
                     </a>
                   </li>
                   <li class="side_category_item">
                     <a href="column_list.html" class="side_category_link">
                       アパレル<span>10</span>
                     </a>
                   </li>
                 </ul>
               </div>
               <div class="side_block">
                 <div class="side_block_title_wrap">
                   <div class="side_block_title_icon">
                     <img src="<?= get_template_directory_uri(); ?>/static/images/common/icon_ranking.svg" alt="記事ランキング">
                   </div>
                   <div class="side_block_title_detail">
                     <h3 class="side_block_title">
                       記事ランキング
                     </h3>
                     <p class="side_block_title_en">
                       COLUMN RANKING
                     </p>
                   </div>
                 </div>
                 <ul class="side_column_ranking_list">
                   <li class="side_column_ranking_item">
                     <a href="column_detail.html" class="side_column_ranking_box">
                       <div class="side_column_ranking_box_icon">
                         <img src="<?= get_template_directory_uri(); ?>/static/images/ranking/rank01.svg" alt="1">
                       </div>
                       <div class="side_column_ranking_box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample01.jpg);">
                       </div>
                       <h3 class="side_column_ranking_box_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！
                       </h3>
                     </a>
                   </li>
                   <li class="side_column_ranking_item">
                     <a href="column_detail.html" class="side_column_ranking_box">
                       <div class="side_column_ranking_box_icon">
                         <img src="<?= get_template_directory_uri(); ?>/static/images/ranking/rank02.svg" alt="2">
                       </div>
                       <div class="side_column_ranking_box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample01.jpg);">
                       </div>
                       <h3 class="side_column_ranking_box_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！
                       </h3>
                     </a>
                   </li>
                   <li class="side_column_ranking_item">
                     <a href="column_detail.html" class="side_column_ranking_box">
                       <div class="side_column_ranking_box_icon">
                         <img src="<?= get_template_directory_uri(); ?>/static/images/ranking/rank03.svg" alt="3">
                       </div>
                       <div class="side_column_ranking_box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample01.jpg);">
                       </div>
                       <h3 class="side_column_ranking_box_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！
                       </h3>
                     </a>
                   </li>
                   <li class="side_column_ranking_item">
                     <a href="column_detail.html" class="side_column_ranking_box">
                       <div class="side_column_ranking_box_icon">
                         <img src="<?= get_template_directory_uri(); ?>/static/images/ranking/rank04.svg" alt="4">
                       </div>
                       <div class="side_column_ranking_box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample01.jpg);">
                       </div>
                       <h3 class="side_column_ranking_box_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！
                       </h3>
                     </a>
                   </li>
                   <li class="side_column_ranking_item">
                     <a href="column_detail.html" class="side_column_ranking_box">
                       <div class="side_column_ranking_box_icon">
                         <img src="<?= get_template_directory_uri(); ?>/static/images/ranking/rank05.svg" alt="5">
                       </div>
                       <div class="side_column_ranking_box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample01.jpg);">
                       </div>
                       <h3 class="side_column_ranking_box_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！
                       </h3>
                     </a>
                   </li>
                   <li class="side_column_ranking_item">
                     <a href="column_detail.html" class="side_column_ranking_box">
                       <div class="side_column_ranking_box_icon">
                         <img src="<?= get_template_directory_uri(); ?>/static/images/ranking/rank06.svg" alt="6">
                       </div>
                       <div class="side_column_ranking_box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample01.jpg);">
                       </div>
                       <h3 class="side_column_ranking_box_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！
                       </h3>
                     </a>
                   </li>
                   <li class="side_column_ranking_item">
                     <a href="column_detail.html" class="side_column_ranking_box">
                       <div class="side_column_ranking_box_icon">
                         <img src="<?= get_template_directory_uri(); ?>/static/images/ranking/rank07.svg" alt="7">
                       </div>
                       <div class="side_column_ranking_box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample01.jpg);">
                       </div>
                       <h3 class="side_column_ranking_box_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！
                       </h3>
                     </a>
                   </li>
                   <li class="side_column_ranking_item">
                     <a href="column_detail.html" class="side_column_ranking_box">
                       <div class="side_column_ranking_box_icon">
                         <img src="<?= get_template_directory_uri(); ?>/static/images/ranking/rank08.svg" alt="8">
                       </div>
                       <div class="side_column_ranking_box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample01.jpg);">
                       </div>
                       <h3 class="side_column_ranking_box_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！
                       </h3>
                     </a>
                   </li>
                   <li class="side_column_ranking_item">
                     <a href="column_detail.html" class="side_column_ranking_box">
                       <div class="side_column_ranking_box_icon">
                         <img src="<?= get_template_directory_uri(); ?>/static/images/ranking/rank09.svg" alt="9">
                       </div>
                       <div class="side_column_ranking_box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample01.jpg);">
                       </div>
                       <h3 class="side_column_ranking_box_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！
                       </h3>
                     </a>
                   </li>
                   <li class="side_column_ranking_item">
                     <a href="column_detail.html" class="side_column_ranking_box">
                       <div class="side_column_ranking_box_icon">
                         <img src="<?= get_template_directory_uri(); ?>/static/images/ranking/rank10.svg" alt="10">
                       </div>
                       <div class="side_column_ranking_box_img" style="background-image:url(<?= get_template_directory_uri(); ?>/static/images/sample/sample01.jpg);">
                       </div>
                       <h3 class="side_column_ranking_box_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！
                       </h3>
                     </a>
                   </li>
                 </ul>
               </div>
             </div><!---/common_layout_side--->
           </div>
         </div>
       </div>
     </div><!---/top_content--->
     <section class="common_column_search">
       <div class="common_wrap">
         <div class="common_inner">
           <div class="common_title_block">
             <h2 class="common_title">
               記事検索
             </h2>
             <p class="common_title_en">
               COLUMN SEARCH
             </p>
           </div>
           <div class="common_column_search_box">
             <div class="common_search_box_top">
               <div class="common_search_title_wrap">
                 <h3 class="common_search_title">
                   <img src="<?= get_template_directory_uri(); ?>/static/images/common/icon_keyword.svg" alt="キーワード">
                   キーワード
                 </h3>
                 <p class="common_search_title_en">
                   KEYWORD
                 </p>
               </div>
               <form class="" action="column_list.html" method="">
                 <div class="common_search_input_wrap">
                   <input type="text" name="" value="" placeholder="はむれっつ記事検索" class="search_input">
                   <button type="submit" name="button" class="search_submit_btn">
                     <div class="search_submit_btn_inner">
                       <img src="<?= get_template_directory_uri(); ?>/static/images/common/icon_search.svg" alt="記事を検索">
                     </div>
                   </button>
                 </div>
               </form>
             </div>
             <div class="common_search_box_bottom">
               <ul class="common_search_box_bottom_list">
                 <li class="common_search_box_bottom_item">
                   <div class="common_search_title_wrap">
                     <h3 class="common_search_title">
                       <img src="<?= get_template_directory_uri(); ?>/static/images/common/icon_category.svg" alt="カテゴリー">
                       カテゴリー
                     </h3>
                     <p class="common_search_title_en">
                       CATEGORY
                     </p>
                   </div>
                   <ul class="common_search_box_category_list">
                     <li class="common_search_box_category_item">
                       <a href="column_list.html" class="common_search_box_category_link">
                         よくある質問
                       </a>
                     </li>
                     <li class="common_search_box_category_item">
                       <a href="column_list.html" class="common_search_box_category_link">
                         よくある質問
                       </a>
                     </li>
                     <li class="common_search_box_category_item">
                       <a href="column_list.html" class="common_search_box_category_link">
                         よくある質問
                       </a>
                     </li>
                     <li class="common_search_box_category_item">
                       <a href="column_list.html" class="common_search_box_category_link">
                         よくある質問
                       </a>
                     </li>
                     <li class="common_search_box_category_item">
                       <a href="column_list.html" class="common_search_box_category_link">
                         よくある質問
                       </a>
                     </li>
                     <li class="common_search_box_category_item">
                       <a href="column_list.html" class="common_search_box_category_link">
                         よくある質問
                       </a>
                     </li>
                   </ul>
                 </li>
                 <li class="common_search_box_bottom_item">
                   <div class="common_search_title_wrap">
                     <h3 class="common_search_title">
                       <img src="<?= get_template_directory_uri(); ?>/static/images/common/icon_tag.svg" alt="タグ">
                       タグ
                     </h3>
                     <p class="common_search_title_en">
                       TAG
                     </p>
                   </div>
                   <ul class="common_search_box_tag_list">
                     <li class="common_search_box_tag_item">
                       <a href="column_list.html" class="common_search_box_tag_link">
                         タグ
                       </a>
                     </li>
                     <li class="common_search_box_tag_item">
                       <a href="column_list.html" class="common_search_box_tag_link">
                         タグタグ
                       </a>
                     </li>
                     <li class="common_search_box_tag_item">
                       <a href="column_list.html" class="common_search_box_tag_link">
                         タグ
                       </a>
                     </li>
                     <li class="common_search_box_tag_item">
                       <a href="column_list.html" class="common_search_box_tag_link">
                         タグタグ
                       </a>
                     </li>
                     <li class="common_search_box_tag_item">
                       <a href="column_list.html" class="common_search_box_tag_link">
                         タグ
                       </a>
                     </li>
                   </ul>
                 </li>
               </ul>
             </div>
           </div>
         </div>
       </div>
     </section>
     <section class="common_comic_search">
       <div class="common_wrap">
         <div class="common_inner">
           <div class="common_title_block">
             <h2 class="common_title">
               漫画検索
             </h2>
             <p class="common_title_en">
               COMIC SEARCH
             </p>
           </div>
           <div class="common_column_search_box">
             <div class="common_search_box_top">
               <div class="common_search_title_wrap">
                 <h3 class="common_search_title">
                   <img src="<?= get_template_directory_uri(); ?>/static/images/common/icon_keyword.svg" alt="キーワード">
                   キーワード
                 </h3>
                 <p class="common_search_title_en">
                   KEYWORD
                 </p>
               </div>
               <form class="" action="comic_list.html" method="">
                 <div class="common_search_input_wrap">
                   <input type="text" name="" value="" placeholder="はむれっつ漫画検索" class="search_input">
                   <button type="submit" name="button" class="search_submit_btn">
                     <div class="search_submit_btn_inner">
                       <img src="<?= get_template_directory_uri(); ?>/static/images/common/icon_search.svg" alt="漫画を検索">
                     </div>
                   </button>
                 </div>
               </form>
             </div>
             <div class="common_search_box_bottom">
               <ul class="common_search_box_bottom_list">
                 <li class="common_search_box_bottom_item">
                   <div class="common_search_title_wrap">
                     <h3 class="common_search_title">
                       <img src="<?= get_template_directory_uri(); ?>/static/images/common/icon_category.svg" alt="カテゴリー">
                       カテゴリー
                     </h3>
                     <p class="common_search_title_en">
                       CATEGORY
                     </p>
                   </div>
                   <ul class="common_search_box_category_list">
                     <li class="common_search_box_category_item">
                       <a href="comic_list.html" class="common_search_box_category_link">
                         グルメ
                       </a>
                     </li>
                     <li class="common_search_box_category_item">
                       <a href="comic_list.html" class="common_search_box_category_link">
                         はむれっつの仲間
                       </a>
                     </li>
                     <li class="common_search_box_category_item">
                       <a href="comic_list.html" class="common_search_box_category_link">
                         日常
                       </a>
                     </li>
                     <li class="common_search_box_category_item">
                       <a href="comic_list.html" class="common_search_box_category_link">
                         日常
                       </a>
                     </li>
                     <li class="common_search_box_category_item">
                       <a href="comic_list.html" class="common_search_box_category_link">
                         日常
                       </a>
                     </li>
                     <li class="common_search_box_category_item">
                       <a href="comic_list.html" class="common_search_box_category_link">
                         日常
                       </a>
                     </li>
                   </ul>
                 </li>
               </ul>
             </div>
           </div>
         </div>
       </div>
     </section>
   </main>
   <footer>
     <div class="footer_ham_wrap">
       <div class="footer_ham animate__animated animate__bounce animate__infinite wow" data-wow-duration="2s">
         <img src="<?= get_template_directory_uri(); ?>/static/images/common/img_footer_top.svg" alt="はむれっつ">
       </div>
     </div>
     <div class="footer_main">
       <div class="common_wrap">
         <div class="common_inner">
           <div class="footer_main_content">
             <div class="footer_main_ham_block">
               <a href="index.html" class="footer_logo">
                 <img src="<?= get_template_directory_uri(); ?>/static/images/common/logo.svg" alt="はむれっつ">
               </a>
               <p class="footer_ham_text">
                 はむれっつとは合同会社FIELDが飼っている架空のハムスターです。<br>
                 見た目はモッツァレラ、動きは地鶏、触ってみると桜餅。<br>
                 皆さんの頭の中のお花畑を根こそぎ枯らすハムスターです。
               </p>
             </div>
             <div class="footer_column_category_block">
               <ul class="footer_main_menu_list">
                 <li class="footer_main_menu_item">
                   <a href="column.html" class="footer_main_menu_link">
                     記事
                   </a>
                 </li>
               </ul>
               <ul class="footer_column_category_list">
                 <li class="footer_column_category_item">
                   <a href="column_list.html" class="footer_column_category_link">
                     よくある質問
                   </a>
                 </li>
                 <li class="footer_column_category_item">
                   <a href="column_list.html" class="footer_column_category_link">
                     よくある質問
                   </a>
                 </li>
                 <li class="footer_column_category_item">
                   <a href="column_list.html" class="footer_column_category_link">
                     よくある質問
                   </a>
                 </li>
                 <li class="footer_column_category_item">
                   <a href="column_list.html" class="footer_column_category_link">
                     よくある質問
                   </a>
                 </li>
                 <li class="footer_column_category_item">
                   <a href="column_list.html" class="footer_column_category_link">
                     よくある質問
                   </a>
                 </li>
                 <li class="footer_column_category_item">
                   <a href="column_list.html" class="footer_column_category_link">
                     よくある質問
                   </a>
                 </li>
                 <li class="footer_column_category_item">
                   <a href="column_list.html" class="footer_column_category_link">
                     よくある質問
                   </a>
                 </li>
                 <li class="footer_column_category_item">
                   <a href="column_list.html" class="footer_column_category_link">
                     よくある質問
                   </a>
                 </li>
               </ul>
             </div>
             <div class="footer_main_menu_block">
               <ul class="footer_main_menu_list">
                 <li class="footer_main_menu_item">
                   <a href="comic.html" class="footer_main_menu_link">
                     漫画
                   </a>
                 </li>
                 <li class="footer_main_menu_item">
                   <a href="shop/index.html" class="footer_main_menu_link">
                     オンラインストア
                   </a>
                 </li>
                 <li class="footer_main_menu_item">
                   <a href="https://store.line.me/stickershop/author/68502/ja" class="footer_main_menu_link">
                     LINEスタンプ
                   </a>
                 </li>
                 <li class="footer_main_menu_item">
                   <a href="http://bar-hamlets.com/" class="footer_main_menu_link">
                     Bar hamlets
                   </a>
                 </li>
                 <li class="footer_main_menu_item">
                   <a href="contact.html" class="footer_main_menu_link">
                     お問い合わせ
                   </a>
                 </li>
               </ul>
             </div>
           </div>
         </div>
       </div>
       <div class="footer_top_link_wrap">
         <a href="#top" class="footer_top_link">
           <img src="<?= get_template_directory_uri(); ?>/static/images/common/img_top_link.svg" alt="TOPに戻る">
         </a>
       </div>
     </div>
     <div class="footer_menu">
       <div class="common_wrap">
         <div class="common_inner">
           <ul class="footer_menu_list">
             <li class="footer_menu_item">
               <a href="https://field.asia/" class="footer_menu_link">
                 運営会社
               </a>
             </li>
             <li class="footer_menu_item">
               <a href="privacy.html" class="footer_menu_link">
                 プライバシーポリシー
               </a>
             </li>
             <li class="footer_menu_item">
               <a href="terms.html" class="footer_menu_link">
                 利用規約
               </a>
             </li>
           </ul>
         </div>
       </div>
     </div>
     <div class="footer_copy">
       <div class="common_wrap">
         <div class="common_inner">
           <p class="copy">
             Copyright &copy;はむれっつ All Rights Reserved.
           </p>
         </div>
       </div>
     </div>
   </footer>
   <script type="text/javascript" src="<?= get_template_directory_uri(); ?>/static/js/common.js">
   </script>
 </body>
</html>
