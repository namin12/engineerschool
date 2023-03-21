jQuery(function($){

  /* header */

/*  $(window).on("load resize",function(){
	  var Header_H = $(".header_wrap").outerHeight();
	  $(".common_main").css({"padding-top":Header_H});

	  $('a[href^="#"]').on("click",function(){
	  	var speed = 500;
	  	var href= $(this).attr("href");
	  	var target = $(href == "#" || href == "" ? 'html' : href);
	  	if(target.length){
	  	  var position = target.offset().top;
	  	}
	  	$("body,html").stop().animate({scrollTop:position-Header_H}, speed, 'swing');
	  	return false;
	  });

  });
*/

  /* menu tag */

  $("#TagAddBtn").on("click",function(){
	  $(".common_tag_filter").fadeIn();
	  $("#TagPopUp").show();
  });

  $("#TagPopClose,.common_tag_filter").on("click",function(){
	  $(".common_tag_filter").fadeOut();
	  $("#TagPopUp").hide();
  });

  $("#TagChecked .common_menu_tag").on("click",function(){
	  $(this).remove();
  });

  /* login */

  $(".LoginBtn").on("click",function(){
	  $(".common_tag_filter").fadeIn();
	  $("#LoginPopUp").show();
  });

  $("#LoginPopClose,.common_tag_filter").on("click",function(){
	  $(".common_tag_filter").fadeOut();
	  $("#LoginPopUp").hide();
  });


  /* aside js */

  $(".common_aside_menu_title").on("click",function(){
	  $(this).toggleClass("active").next().stop().slideToggle();
  });

  /* btn change */

  $(".like_btn,.add_btn,.common_coordinator_follow,.UserFollow").on("click",function(){
	  $(this).toggleClass("active");
  });

  $(".user_like_btn").on("click",function(){
	  $(this).toggleClass("active");
  });

  $(".itemdetail_like_num .like_btn").on("click",function(){
	 	$(this).find("span").toggleClass("no_active");
  });

  $(".userdetail_item_info .item_like,.blogdetail_item_info .item_like,.itemdetail_cart_block .item_like,.brand_like_btn").on("click",function(){
	 	$(this).toggleClass("active").find("p").toggleClass("no_active");
  });

  $(".item_wrap .common_item_info .cart_btn").on("click",function(){
	  $(this).find("img").toggleClass("no_active");
  });

  $(window).on("resize load",function(){
	  PicSize23(".blog_pickup_pic");
	  PicSize23(".blog_common_pic");
	  PicSize76(".itemdetail_main_pic_list");
	  PicSize76(".itemdetail_sub_pic_list .item");
	  PicSize107(".userdetail_pic_block");

	  PicSize76(".common_coordinate_pic_bg");
	  PicSizeSame(".common_item_pic_bg");
	  PicSizeSame(".instagram_link");

  });

  function PicSize23(e){
	  var Width = $(e).width();
	  $(e).css({"height": Width*2/3});
  }

  function PicSizeSame(e){
	  var Width = $(e).width();
	  $(e).css({"height": Width});
  }

  function PicSize76(e){
	  var Width = $(e).width();
	  $(e).css({"height": Width*7/6});
  }
  function PicSize107(e){
	  var Width = $(e).width();
	  $(e).css({"height": Width*10/7});
  }

  /* user */

  $(".UserDownBtn").on("click",function(){
	  $(this).toggleClass("active").prev().toggleClass("active");
  });

  $(".user_tab_item").on("click",function(){
	  var Target = $(this).data("usertab");
	  $(this).addClass("active").siblings().removeClass("active");
	  $(".user_contents_wrap").find("."+Target).fadeIn().siblings().hide();

	  PicSize76(".common_coordinate_pic_bg");
	  PicSizeSame(".instagram_link");

  });

  $(".userdetail_price_btn").on("click",function(){
	  $(this).toggleClass("active").prev().fadeToggle();
  });

  $(".userdetail_see_return_btn,.userdetail_comment_more_btn").on("click",function(){
	  $(this).toggleClass("active").prev().stop().slideToggle();
  });

  $("#UserComment").on("click",function(){
		var result = window.confirm("コメントしますか?");
	  if( result ) {
      $(".comment_filter").fadeIn();
			$("#CommentPopup").show();
    }
  });

  $("#CommentClose,.comment_filter").on("click",function(){
	  $(".comment_filter").fadeOut();
	  $("#CommentPopup").hide();
  });

  /* item detail pic */

  $(".itemdetail_sub_pic_list li").on("click",function(){
	  var Index = $(".itemdetail_sub_pic_list li").index($(this));
	  $(".itemdetail_main_pic_list li").eq(Index).addClass("active").siblings().removeClass("active");
  });

  /* item detail about */

    var $setElm = $('.itemdetail_about_text');
    var cutFigure = '210'; // カットする文字数
    var afterTxt = ' ...'; // 文字カット後に表示するテキスト

    $setElm.each(function(){
	    	var textAll = $(this).html();
        var textLength = $(this).html().length;
        var textTrim = $(this).html().substr(0,(cutFigure));

        if(cutFigure < textLength) {
	        $(".itemdetail_about_seemore_btn").show();
          $(this).html(textTrim + afterTxt).css({visibility:'visible'});

          $(".itemdetail_about_seemore_btn").on("click",function(){
	          $(this).prev().css({"opacity":0});
	          $(this).toggleClass("active");
	          var NowText = $(this).prev().html();
	          if(NowText == textAll){
		          $(this).prev().html(textTrim + afterTxt).animate({ opacity: 1}, 1000 );
	          }else{
		          $(this).prev().html(textAll).animate({ opacity: 1}, 1000 );
	          }
          });

        } else if(cutFigure >= textLength) {
          $(this).css({visibility:'visible'});
          $(".itemdetail_about_seemore_btn").hide();
        }
    });

  /* shop info */

  $(".shop_info_title_block").on("click",function(){
	  $(this).toggleClass("active").next().stop().slideToggle();
  });

  /* shop 絞り込み、columnカテゴリー */

  $("#ShopSetBtn,#ColumnCatBtn,#ChangeBtn").on("click",function(){
	  $(".shop_filter").fadeIn();
	  $(".shop_popup_block").show();
  });

  $("#ShopPopClose,.shop_filter,#ChangePopClose").on("click",function(){
	  $(".shop_filter").fadeOut();
	  $(".shop_popup_block").hide();
  });

  /* history */

  $(".history_list .title").on("click",function(){
	  $(this).toggleClass("active").next().slideToggle();
  });

  $('#ChangeBtn').click(function(e) {
    return e.preventDefault();
});

});





jQuery(function($){


	$("#MenuOpen").on("click",function(){
	  $("#HeaderFilter").fadeIn();
		$("#MenuClose").addClass("active");
	  $("#HeaderMenu").addClass("active");
  });

  $("#MenuClose").on("click",function(){
		$("#HeaderFilter").fadeOut();
	  $("#MenuClose").removeClass("active");
	  $("#HeaderMenu").removeClass("active");
  });

	$("#HeaderFilter").on("click",function(){
		$("#HeaderFilter").fadeOut();
	  $("#MenuClose").removeClass("active");
	  $("#HeaderMenu").removeClass("active");
  });

  $(".sp_main_menu_link").on("click",function(){
		$("#HeaderFilter").fadeOut();
	  $("#MenuClose").removeClass("active");
	  $("#HeaderMenu").removeClass("active");
  });

});


$(function(){
  $('a[href^="#"]').click(function(){
      var headerHeight = $(".header_wrap").height();
      var speed = 1000;
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      var position = target.offset().top - headerHeight; //ターゲットの座標からヘッダの高さ分引く
      $("html, body").animate({scrollTop:position}, speed, "swing");
      return false;
  });
});


$(window).on('load', function() {
// ページのURLを取得
const url = $(location).attr('href'),
// headerの高さを取得してそれに30px追加した値をheaderHeightに代入
headerHeight = $('.header_wrap').outerHeight();

// urlに「#」が含まれていれば
if(url.indexOf("#") != -1){
  // urlを#で分割して配列に格納
  const anchor = url.split("#"),
  // 分割した最後の文字列（#◯◯の部分）をtargetに代入
  target = $('#' + anchor[anchor.length - 1]),
  // リンク先の位置からheaderHeightの高さを引いた値をpositionに代入
  position = Math.floor(target.offset().top) - headerHeight;
  // positionの位置に移動
  $("html, body").animate({scrollTop:position}, 500);
}
});

/*top_slide*/

$('.top_slide_list').slick({
	autoplay:true,
	arrows:false,
	dots: true,
	swipe:true,
	slidesToShow:1,
  slidesToScroll:1,
  autoplaySpeed:3000,
});
