<!DOCTYPE HTML>
<html lang="ja" prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="utf-8">
  <title>はむれっつ</title>
  <link rel="shortcut icon" type="image/x-icon" href="<?= get_template_directory_uri();?>/static/favicon.ico">
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
  <meta property="og:image" content="static/ogp.png">
  <link href="<?= get_template_directory_uri();?>/static/css/reset.css" rel="stylesheet" type="text/css" media="all" />
  <link href="<?= get_template_directory_uri();?>/static/css/style.css" rel="stylesheet" type="text/css" media="all" />
  <link href="<?= get_template_directory_uri();?>/static/animate/animate.min.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri();?>/static/js/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri();?>/static/js/slick/slick-theme.css"/>
  <link rel="apple-touch-icon" href="<?= get_template_directory_uri();?>/static/webclip.png">
  <script type="text/javascript" src="<?= get_template_directory_uri();?>/static/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="<?= get_template_directory_uri();?>/static/js/slick/slick.min.js"></script>
  <script src="<?= get_template_directory_uri();?>/static/animate/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <!---mplus 1p--->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@300;400;500;700;800;900&display=swap" rel="stylesheet">
  <!---/mplus 1p--->
  <!---Oswald--->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
  <!---/Oswald--->
</head>
 <body>
   <header>
     <div class="header_wrap">
       <div class="header_inner">
         <a href="index.html" class="header_logo">
           <img src="<?= get_template_directory_uri();?>/static/images/common/logo.svg" alt="はむれっつ">
         </a>
         <div class="header_menu_btn_wrap" type="button" id="MenuOpen">
           <div class="header_menu_btn_hamburger">
             <img src="<?= get_template_directory_uri();?>/static/images/common/menu_hamburger.svg" alt="MENU">
           </div>
           <div class="header_menu_btn_ham animate__animated animate__headShake animate__infinite wow" data-wow-duration="2s" data-wow-iteration="3">
             <img src="<?= get_template_directory_uri();?>/static/images/common/menu_img.svg" alt="はむれっつ">
           </div>
         </div>
       </div>
     </div>
     <div class="header_popup_block" id="HeaderMenu">
       <div class="header_popup_inner">
         <div class="header_close_btn_wrap">
           <div class="header_close_btn" id="MenuClose">
            <img src="<?= get_template_directory_uri();?>/static/images/common/menu_close.svg" alt="メニュー">
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
     <div class="common_page_content Top_back" id="top_content">
       <div class="common_wrap">
         <div class="common_inner">
           <div class="pankuzu_wrap">
             <ul class="pankuzu_list">
               <li class="pankuzu_item">
                 <a href="index.html" class="pankuzu_link">
                   <img src="<?= get_template_directory_uri();?>/static/images/common/icon_home.svg" alt="" class="home_icon">
                 </a>
               </li>
               <li class="pankuzu_item">
                 <a href="column.html" class="pankuzu_link">
                   記事一覧
                 </a>
               </li>
               <li class="pankuzu_item">
                 記事タイトル
               </li>
             </ul>
           </div><!---/pankuzu--->
           <div class="common_layout_wrap">
             <div class="common_layout_main">
               <section class="page_column">
                 <div class="column_detail_category_date">
                   <a href="column_list.html" class="column_detail_category">
                     よくある質問
                   </a>
                   <p class="column_detail_date">
                     <img src="<?= get_template_directory_uri();?>/static/images/common/icon_date.svg" alt="更新日">
                     2022.07.07
                   </p>
                 </div>
                 <h1 class="column_detail_title">
                   記事タイトルが入ります記事タイトルが入ります記事タイトルが入ります記事タイトルが入ります
                 </h1>
                 <div class="column_detail_main_img box_img" style="background-image:url(static/images/sample/sample01.jpg);">
                 </div>
                 <div id="column_editor">
                   <p class="text">
                     はむれっつとははむれっつとははむれっつとははむれっつとははむれっつとははむれっつとははむれっつとははむれっつとは<br>
                     <br>
                     はむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむ<br>
                     である。
                   </p>
                   <ul class="hamu_list">
                     <li class="hamu_item">
                       リストのテキストが入ります
                     </li>
                     <li class="hamu_item">
                       リストのテキストが入ります
                     </li>
                     <li class="hamu_item">
                       リストのテキストが入ります
                     </li>
                   </ul>
                   <h2 class="h2">
                     h2が入りますh2が入りますh2が入ります
                   </h2>
                   <p class="text">
                     はむれっつとははむれっつとははむれっつとははむれっつとははむれっつとははむれっつとははむれっつとははむれっつとは<br>
                     <br>
                     はむはむはむはむはむはむはむはむはむはむはむはむはむはむ<a href="#">リンク</a>はむはむはむはむはむはむはむはむはむはむはむはむはむはむ<br>
                     である。
                   </p>
                   <img src="<?= get_template_directory_uri();?>/static/images/sample/sample01.jpg" alt="">
                   <h2 class="h2">
                     h2が入りますh2が入りますh2が入ります
                   </h2>
                   <p class="text">
                     <span class="t_purple blod">はむれっつ</span>とははむれっつとははむれっつとははむれっつとははむれっつとははむれっつとははむれっつとははむれっつとは<br>
                     <br>
                     はむはむはむはむはむはむはむはむはむはむはむはむはむはむ<a href="#">リンク</a>はむはむはむはむはむはむはむはむはむはむはむはむはむはむ<br>
                     である。
                   </p>
                   <h3 class="h3">
                     h3が入りますh3が入りますh3が入りますh3が入ります
                   </h3>
                   <p class="text">
                     <span class="b_yellow">はむれっつ</span>とははむれっつとははむれっつとははむれっつとははむれっつとははむれっつとははむれっつとははむれっつとは<span class="b_purple">はむれっつ</span>とははむれっつとははむれっつとははむれっつとははむれっつとははむれっつとははむれっつとははむれっつとは<br>
                     <br>
                     はむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむ<br>
                     である。
                   </p>
                   <h4 class="h4">
                     h4が入りますh4が入りますh4が入りますh4が入ります
                   </h4>
                   <p class="text">
                     <span class="b_yellow">はむれっつ</span>とははむれっつとははむれっつとははむれっつとははむれっつとははむれっつとははむれっつとははむれっつとは<span class="b_purple">はむれっつ</span>とははむれっつとははむれっつとははむれっつとははむれっつとははむれっつとははむれっつとははむれっつとは<br>
                     <br>
                     はむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむはむ<br>
                     である。
                   </p>
                   <!---中央寄せテキスト--->
                   <p class="text center">
                     中央寄せテキスト
                   </p>
                   <!---/中央寄せテキスト--->
                   <!---うましスター--->
                   <div class="umashi_wrap">
                     <div class="umashi_img_block">
                       <img src="<?= get_template_directory_uri();?>/static/images/editor/icon_umashi.svg" alt="はむれっつ">
                     </div>
                     <div class="umashi_star_block">
                       <h2 class="umashi_star_title">
                         <span class="t_purple">はむれっつ</span>の<span class="big">うましスター</span>
                       </h2>
                       <div class="umashi_star">
                         <img src="<?= get_template_directory_uri();?>/static/images/editor/icon_star10.svg" alt="">
                         <img src="<?= get_template_directory_uri();?>/static/images/editor/icon_star10.svg" alt="">
                         <img src="<?= get_template_directory_uri();?>/static/images/editor/icon_star10.svg" alt="">
                         <img src="<?= get_template_directory_uri();?>/static/images/editor/icon_star05.svg" alt="">
                         <img src="<?= get_template_directory_uri();?>/static/images/editor/icon_star0.svg" alt="">
                         <p class="umashi_star_text">3.5</p>
                       </div>
                     </div>
                   </div>
                   <!---/うましスター--->
                   <!---うましスター星5はむミシュラン--->
                   <div class="umashi_wrap">
                     <div class="umashi_img_block ham_michelin">
                       <img src="<?= get_template_directory_uri();?>/static/images/editor/icon_ham_michelin.svg" alt="はむれっつ">
                     </div>
                     <div class="umashi_star_block">
                       <h2 class="umashi_star_title">
                         <span class="t_purple">はむれっつ</span>の<span class="big">うましスター</span>
                       </h2>
                       <div class="hamu_michelin_block">
                         <div class="umashi_star">
                           <img src="<?= get_template_directory_uri();?>/static/images/editor/icon_star10.svg" alt="">
                           <img src="<?= get_template_directory_uri();?>/static/images/editor/icon_star10.svg" alt="">
                           <img src="<?= get_template_directory_uri();?>/static/images/editor/icon_star10.svg" alt="">
                           <img src="<?= get_template_directory_uri();?>/static/images/editor/icon_star10.svg" alt="">
                           <img src="<?= get_template_directory_uri();?>/static/images/editor/icon_star10.svg" alt="">
                           <p class="umashi_star_text michelin">5</p>
                         </div>
                         <p class="hamu_michelin">はむミシュラン獲得</p>
                       </div>
                     </div>
                   </div>
                   <!---/うましスター星5はむミシュラン--->
                   <!---introduction_box--->
                   <div class="introduction_box">
                     <h2 class="introduction_box_name">
                       外部ブログ紹介タイトルが入ります外部ブログ紹介タイトルが入ります
                     </h2>
                     <div class="introduction_box_content">
                       <div class="introduction_box_img">
                         <img src="<?= get_template_directory_uri();?>/static/images/editor/sample_sushi.jpg" alt="">
                       </div>
                       <div class="introduction_box_detail">
                         <h3 class="introduction_box_detail_title">
                           タイトルが入りますタイトルが入ります
                         </h3>
                         <p class="introduction_box_detail_text">
                           テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                         </p>
                         <a href="#" class="introduction_box_detail_link_btn">
                           このブログを見る
                         </a>
                       </div>
                     </div>
                   </div>
                   <!---/introduction_box--->
                   <!---voice_box--->
                   <div class="voice_box">
                     <h2 class="voice_box_title">
                       訪れた方の声
                     </h2>
                     <p class="voice_box_text">
                       テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                     </p>
                   </div>
                   <!---/voice_box--->
                   <!---evaluation_box--->
                   <div class="evaluation_box">
                     <div class="evaluation_box_name_score">
                       <p class="evaluation_box_name">
                         30代　男性
                       </p>
                       <div class="evaluation_box_score">
                         <img src="<?= get_template_directory_uri();?>/static/images/editor/icon_star10.svg" alt="">
                         <img src="<?= get_template_directory_uri();?>/static/images/editor/icon_star10.svg" alt="">
                         <img src="<?= get_template_directory_uri();?>/static/images/editor/icon_star10.svg" alt="">
                         <img src="<?= get_template_directory_uri();?>/static/images/editor/icon_star05.svg" alt="">
                         <img src="<?= get_template_directory_uri();?>/static/images/editor/icon_star0.svg" alt="">
                       </div>
                     </div>
                     <p class="evaluation_box_text">
                       評価コメント評価コメント評価コメント評価コメント評価コメント評価コメント
                     </p>
                     <p class="evaluation_box_date">
                       投稿日：2022.08.08
                     </p>
                   </div>
                   <!---/evaluation_box--->
                   <!---chat_block--->
                   <div class="chat_block">
                     <ul class="chat_list">
                       <li class="chat_item">
                         <div class="chat_icon">
                           <img src="<?= get_template_directory_uri();?>/static/images/editor/icon_ham01.svg" alt="">
                           <span class="name">はむれっつ</span>
                         </div>
                         <div class="chat_detail">
                           <p class="chat_text">
      											テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
      										</p>
                         </div>
                       </li>
                       <li class="chat_item">
                         <div class="chat_icon">
                           <img src="<?= get_template_directory_uri();?>/static/images/editor/icon_ham02.svg" alt="">
                           <span class="name">はむれっつ</span>
                         </div>
                         <div class="chat_detail">
                           <p class="chat_text">
      											テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                           </p>
                         </div>
                       </li>
                       <li class="chat_item">
                         <div class="chat_icon">
                           <img src="<?= get_template_directory_uri();?>/static/images/editor/icon_ham03.svg" alt="">
                           <span class="name">はむれっつ</span>
                         </div>
                         <div class="chat_detail">
                           <p class="chat_text">
      											テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                           </p>
                         </div>
                       </li>
                       <li class="chat_item">
                         <div class="chat_icon">
                           <img src="<?= get_template_directory_uri();?>/static/images/editor/icon_ham04.svg" alt="">
                           <span class="name">はむれっつ</span>
                         </div>
                         <div class="chat_detail">
                           <p class="chat_text">
      											テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                           </p>
                         </div>
                       </li>
                       <li class="chat_item">
                         <div class="chat_icon">
                           <img src="<?= get_template_directory_uri();?>/static/images/editor/icon_ham05.svg" alt="">
                           <span class="name">はむれっつ</span>
                         </div>
                         <div class="chat_detail">
                           <p class="chat_text">
      											テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                           </p>
                         </div>
                       </li>
                       <li class="chat_item">
                         <div class="chat_icon">
                           <img src="<?= get_template_directory_uri();?>/static/images/editor/icon_friends01.svg" alt="">
                           <span class="name">はむれっつの友達1</span>
                         </div>
                         <div class="chat_detail">
                           <p class="chat_text">
      											テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                           </p>
                         </div>
                       </li>
                       <li class="chat_item">
                         <div class="chat_icon">
                           <img src="<?= get_template_directory_uri();?>/static/images/editor/icon_friends02.svg" alt="">
                           <span class="name">はむれっつの友達2</span>
                         </div>
                         <div class="chat_detail">
                           <p class="chat_text">
      											テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                           </p>
                         </div>
                       </li>
                       <li class="chat_item">
                         <div class="chat_icon">
                           <img src="<?= get_template_directory_uri();?>/static/images/editor/icon_friends03.svg" alt="">
                           <span class="name">はむれっつの友達3</span>
                         </div>
                         <div class="chat_detail">
                           <p class="chat_text">
      											テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                           </p>
                         </div>
                       </li>
                       <li class="chat_item">
                         <div class="chat_icon">
                           <img src="<?= get_template_directory_uri();?>/static/images/editor/icon_friends04.svg" alt="">
                           <span class="name">はむれっつの友達4</span>
                         </div>
                         <div class="chat_detail">
                           <p class="chat_text">
      											テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                           </p>
                         </div>
                       </li>
                     </ul>
                   </div>
                   <!---/chat_block--->
                   <!---heding_content_list_block--->
                   <div class="heding_content_list_block">
                     <h2 class="heding_content_list_block_title">
                       目次
                     </h2>
                     <ul class="heding_content_list">
                       <li class="heding_content_item">
                         <a href="#" class="heding_content_link">
                           <div class="heding_content_nem">
                             1.
                           </div>
                           <div class="heding_content_detail">
                             テキストが入りますテキストが入りますテキストが入ります
                           </div>
                         </a>
                       </li>
                       <li class="heding_content_item">
                         <a href="#" class="heding_content_link">
                           <div class="heding_content_nem">
                             2.
                           </div>
                           <div class="heding_content_detail">
                             テキストが入りますテキストが入りますテキストが入ります
                           </div>
                         </a>
                       </li>
                       <li class="heding_content_item">
                         <a href="#" class="heding_content_link">
                           <div class="heding_content_nem">
                             3.
                           </div>
                           <div class="heding_content_detail">
                             テキストが入りますテキストが入りますテキストが入ります
                           </div>
                         </a>
                       </li>
                     </ul>
                   </div>
                   <!---/heding_content_list_block--->
                   <!---info_block--->
                   <div class="info_block">
                     <h2 class="info_block_title">
                       店名が入ります店名が入ります
                     </h2>
                     <ul class="info_list">
                       <li class="info_item">
                         <h3 class="info_item_title dress">
                           ドレスコード・ルール
                         </h3>
                         <p class="info_item_text">
                           テキストテキスト
                         </p>
                       </li>
                       <li class="info_item">
                         <h3 class="info_item_title price">
                           参考価格
                         </h3>
                         <p class="info_item_text">
                           ディナー10,000円〜
                         </p>
                       </li>
                       <li class="info_item">
                         <h3 class="info_item_title site">
                           公式サイト
                         </h3>
                         <p class="info_item_text">
                           https://field.asia/
                         </p>
                       </li>
                       <li class="info_item">
                         <h3 class="info_item_title time">
                           営業時間
                         </h3>
                         <p class="info_item_text">
                           テキストテキスト
                         </p>
                       </li>
                       <li class="info_item">
                         <h3 class="info_item_title schedule">
                           定休日
                         </h3>
                         <p class="info_item_text">
                           テキストテキスト
                         </p>
                       </li>
                       <li class="info_item">
                         <h3 class="info_item_title map">
                           Google map
                         </h3>
                         <p class="info_item_text">
                           テキストテキスト
                         </p>
                       </li>
                       <li class="info_item">
                         <h3 class="info_item_title tel">
                           電話番号
                         </h3>
                         <p class="info_item_text">
                           03-3333-3333
                         </p>
                       </li>
                       <li class="info_item">
                         <h3 class="info_item_title note">
                           その他
                         </h3>
                         <p class="info_item_text">
                           テキストテキスト
                         </p>
                       </li>
                     </ul>
                   </div>
                   <!---/info_block--->
                   <!---link_btn_block--->
                   <div class="link_btn_block">
                     <a href="#" class="big_link_btn">
                       公式サイトで予約
                     </a>
                     <ul class="small_link_btn_list">
                       <li class="small_link_btn_item">
                         <a href="#" class="small_link_btn">
                           食べログで予約
                         </a>
                       </li>
                       <li class="small_link_btn_item">
                         <a href="#" class="small_link_btn">
                           Rettyで予約
                         </a>
                       </li>
                       <li class="small_link_btn_item">
                         <a href="#" class="small_link_btn">
                           ぐるなびで予約
                         </a>
                       </li>
                       <li class="small_link_btn_item">
                         <a href="#" class="small_link_btn">
                           ヒトサラで予約
                         </a>
                       </li>
                     </ul>
                   </div>
                   <!---/link_btn_block--->
                   <a href="#" class="link_btn_type01">
                     リンクボタン
                   </a>
                   <a href="#" class="link_btn_type02">
                     リンクボタン
                   </a>
                 </div><!---/#column_editor--->
                 <div class="share_btn_block_wrap">
                   <div class="share_btn_block">
                     <div class="shere_ham_img">
                       <img src="<?= get_template_directory_uri();?>/static/images/common/img_share.svg" alt="記事をシェア">
                     </div>
                     <p class="share_btn_block_text">
                       この記事をシェア
                     </p>
                     <ul class="shere_sns_btn_list">
                       <li class="shere_sns_btn_item">
                         <a href="#" class="shere_sns_btn_link">
                           <img src="<?= get_template_directory_uri();?>/static/images/common/icon_fb.svg" alt="facebook">
                         </a>
                       </li>
                       <li class="shere_sns_btn_item">
                         <a href="#" class="shere_sns_btn_link">
                           <img src="<?= get_template_directory_uri();?>/static/images/common/icon_line.svg" alt="LINE">
                         </a>
                       </li>
                       <li class="shere_sns_btn_item">
                         <a href="#" class="shere_sns_btn_link">
                           <img src="<?= get_template_directory_uri();?>/static/images/common/icon_twitter.svg" alt="twitter">
                         </a>
                       </li>
                       <li class="shere_sns_btn_item">
                         <a href="#" class="shere_sns_btn_link">
                           <img src="<?= get_template_directory_uri();?>/static/images/common/icon_insta.svg" alt="instagram">
                         </a>
                       </li>
                     </ul>
                   </div>
                 </div>
               </section>
               <section class="relation_column">
                 <div class="common_title_block">
                   <h2 class="common_title">
                     関連記事
                   </h2>
                   <p class="common_title_en">
                     RELATION COLUMN
                   </p>
                 </div>
                 <div class="column_box_wrap">
                   <div class="column_box">
                     <div class="new">
                       <img src="<?= get_template_directory_uri();?>/static/images/common/icon_new.svg" alt="NEW">
                     </div>
                     <a href="column_detail.html" class="column_box_img box_img" style="background-image:url(static/images/sample/sample01.jpg);">
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
                       <img src="<?= get_template_directory_uri();?>/static/images/common/icon_new.svg" alt="NEW">
                     </div>
                     <a href="column_detail.html" class="column_box_img box_img" style="background-image:url(static/images/sample/sample01.jpg);">
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
                   <a href="column_list.html" class="common_more_btn">
                     関連記事をもっと見る
                   </a>
                 </div>
               </section>
             </div><!---/common_layout_main--->
             <div class="common_layout_side">
               <div class="side_block">
                 <ul class="side_banner_list">
                   <li class="side_banner_item">
                     <a href="#" class="side_banner_link">
                       <img src="<?= get_template_directory_uri();?>/static/images/sample/sample_banner.png" alt="">
                     </a>
                   </li>
                   <li class="side_banner_item">
                     <a href="#" class="side_banner_link">
                       <img src="<?= get_template_directory_uri();?>/static/images/sample/sample_banner.png" alt="">
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
                         <img src="<?= get_template_directory_uri();?>/static/images/common/icon_search.svg" alt="記事を検索">
                       </div>
                     </button>
                   </div>
                 </form>
               </div>
               <div class="side_block">
                 <div class="side_block_title_wrap">
                   <div class="side_block_title_icon">
                     <img src="<?= get_template_directory_uri();?>/static/images/common/icon_category.svg" alt="記事カテゴリー">
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
                     <img src="<?= get_template_directory_uri();?>/static/images/common/icon_ranking.svg" alt="記事ランキング">
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
                         <img src="<?= get_template_directory_uri();?>/static/images/ranking/rank01.svg" alt="1">
                       </div>
                       <div class="side_column_ranking_box_img" style="background-image:url(static/images/sample/sample01.jpg);">
                       </div>
                       <h3 class="side_column_ranking_box_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！
                       </h3>
                     </a>
                   </li>
                   <li class="side_column_ranking_item">
                     <a href="column_detail.html" class="side_column_ranking_box">
                       <div class="side_column_ranking_box_icon">
                         <img src="<?= get_template_directory_uri();?>/static/images/ranking/rank02.svg" alt="2">
                       </div>
                       <div class="side_column_ranking_box_img" style="background-image:url(static/images/sample/sample01.jpg);">
                       </div>
                       <h3 class="side_column_ranking_box_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！
                       </h3>
                     </a>
                   </li>
                   <li class="side_column_ranking_item">
                     <a href="column_detail.html" class="side_column_ranking_box">
                       <div class="side_column_ranking_box_icon">
                         <img src="<?= get_template_directory_uri();?>/static/images/ranking/rank03.svg" alt="3">
                       </div>
                       <div class="side_column_ranking_box_img" style="background-image:url(static/images/sample/sample01.jpg);">
                       </div>
                       <h3 class="side_column_ranking_box_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！
                       </h3>
                     </a>
                   </li>
                   <li class="side_column_ranking_item">
                     <a href="column_detail.html" class="side_column_ranking_box">
                       <div class="side_column_ranking_box_icon">
                         <img src="<?= get_template_directory_uri();?>/static/images/ranking/rank04.svg" alt="4">
                       </div>
                       <div class="side_column_ranking_box_img" style="background-image:url(static/images/sample/sample01.jpg);">
                       </div>
                       <h3 class="side_column_ranking_box_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！
                       </h3>
                     </a>
                   </li>
                   <li class="side_column_ranking_item">
                     <a href="column_detail.html" class="side_column_ranking_box">
                       <div class="side_column_ranking_box_icon">
                         <img src="<?= get_template_directory_uri();?>/static/images/ranking/rank05.svg" alt="5">
                       </div>
                       <div class="side_column_ranking_box_img" style="background-image:url(static/images/sample/sample01.jpg);">
                       </div>
                       <h3 class="side_column_ranking_box_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！
                       </h3>
                     </a>
                   </li>
                   <li class="side_column_ranking_item">
                     <a href="column_detail.html" class="side_column_ranking_box">
                       <div class="side_column_ranking_box_icon">
                         <img src="<?= get_template_directory_uri();?>/static/images/ranking/rank06.svg" alt="6">
                       </div>
                       <div class="side_column_ranking_box_img" style="background-image:url(static/images/sample/sample01.jpg);">
                       </div>
                       <h3 class="side_column_ranking_box_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！
                       </h3>
                     </a>
                   </li>
                   <li class="side_column_ranking_item">
                     <a href="column_detail.html" class="side_column_ranking_box">
                       <div class="side_column_ranking_box_icon">
                         <img src="<?= get_template_directory_uri();?>/static/images/ranking/rank07.svg" alt="7">
                       </div>
                       <div class="side_column_ranking_box_img" style="background-image:url(static/images/sample/sample01.jpg);">
                       </div>
                       <h3 class="side_column_ranking_box_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！
                       </h3>
                     </a>
                   </li>
                   <li class="side_column_ranking_item">
                     <a href="column_detail.html" class="side_column_ranking_box">
                       <div class="side_column_ranking_box_icon">
                         <img src="<?= get_template_directory_uri();?>/static/images/ranking/rank08.svg" alt="8">
                       </div>
                       <div class="side_column_ranking_box_img" style="background-image:url(static/images/sample/sample01.jpg);">
                       </div>
                       <h3 class="side_column_ranking_box_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！
                       </h3>
                     </a>
                   </li>
                   <li class="side_column_ranking_item">
                     <a href="column_detail.html" class="side_column_ranking_box">
                       <div class="side_column_ranking_box_icon">
                         <img src="<?= get_template_directory_uri();?>/static/images/ranking/rank09.svg" alt="9">
                       </div>
                       <div class="side_column_ranking_box_img" style="background-image:url(static/images/sample/sample01.jpg);">
                       </div>
                       <h3 class="side_column_ranking_box_title">
                         はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！はむれっつはハムスター？宇宙からきたの？？気になる疑問にお答えします！
                       </h3>
                     </a>
                   </li>
                   <li class="side_column_ranking_item">
                     <a href="column_detail.html" class="side_column_ranking_box">
                       <div class="side_column_ranking_box_icon">
                         <img src="<?= get_template_directory_uri();?>/static/images/ranking/rank10.svg" alt="10">
                       </div>
                       <div class="side_column_ranking_box_img" style="background-image:url(static/images/sample/sample01.jpg);">
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
     </div><!---/common_page_content--->
   </main>
   <footer>
     <div class="footer_ham_wrap">
       <div class="footer_ham animate__animated animate__bounce animate__infinite wow" data-wow-duration="2s">
         <img src="<?= get_template_directory_uri();?>/static/images/common/img_footer_top.svg" alt="はむれっつ">
       </div>
     </div>
     <div class="footer_main">
       <div class="common_wrap">
         <div class="common_inner">
           <div class="footer_main_content">
             <div class="footer_main_ham_block">
               <a href="index.html" class="footer_logo">
                 <img src="<?= get_template_directory_uri();?>/static/images/common/logo.svg" alt="はむれっつ">
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
           <img src="<?= get_template_directory_uri();?>/static/images/common/img_top_link.svg" alt="TOPに戻る">
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
   <script type="text/javascript" src="<?= get_template_directory_uri();?>/static/js/common.js">
   </script>
 </body>
</html>
