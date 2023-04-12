

jQuery(function($){


	$("#MenuOpen").on("click",function(){
		$("#MenuClose").addClass("active");
	  $("#HeaderMenu").addClass("active");
  });

  $("#MenuClose").on("click",function(){
	  $("#MenuClose").removeClass("active");
	  $("#HeaderMenu").removeClass("active");
  });

	$("#HeaderFilter").on("click",function(){
	  $("#MenuClose").removeClass("active");
	  $("#HeaderMenu").removeClass("active");
  });
/*
	$(".header_menu_link").on("click",function(){
	  $("#MenuClose").removeClass("active");
	  $("#HeaderMenu").removeClass("active");
  });
	$(".header_sub_menu_link").on("click",function(){
	  $("#MenuClose").removeClass("active");
	  $("#HeaderMenu").removeClass("active");
  });
*/

});

jQuery(window).on('scroll', function () {
	if (400 < jQuery(this).scrollTop()) {
	    jQuery('.header_logo').addClass('size_small');
	  } else {
	    jQuery('.header_logo').removeClass('size_small');
	  }
});

jQuery(window).on('scroll', function () {
	if (400 < jQuery(this).scrollTop()) {
	    jQuery('.header_menu_btn_ham').addClass('d_none');
	  } else {
	    jQuery('.header_menu_btn_ham').removeClass('d_none');
	  }
});


$(function () {
    function resizeboxImage() {
        var box_img_W = $(".box_img").width();
				const boxImages = $('.box_img');
				$.each(boxImages, function(key, boxImage) {
						var box_img_W = $(boxImage).width();
						var box_img_H = box_img_W* 2 / 3;
						$(boxImage).css({ "height": box_img_H });
				});
    }
    $(window).resize(function(){
        resizeboxImage();
    });
    resizeboxImage();
});


$(function () {
    function resizeImage() {
        var store_item_box_img_W = $(".store_item_box_img").width();
        var store_item_box_img_H = store_item_box_img_W;
        $(".store_item_box_img").css({ "height": store_item_box_img_H });
    }
    $(window).resize(function(){
        resizeImage();
    });
    resizeImage();
});


$(function () {
    function rankingresizeboxImage() {
        var side_column_ranking_box_img_W = $(".side_column_ranking_box_img").width();
        var side_column_ranking_box_img_H = side_column_ranking_box_img_W* 1 / 2;
        $(".side_column_ranking_box_img").css({ "height": side_column_ranking_box_img_H });
    }
    $(window).resize(function(){
        rankingresizeboxImage();
    });
    rankingresizeboxImage();
});


$('.fv_slide_list').slick({
	autoplay:true,
	arrows:false,
	dots: true,
	swipe:true,
	slidesToShow:1,
  slidesToScroll:1,
});

$('.pick_column_slide').slick({
	autoplay:true,
	arrows:true,
	dots: true,
	swipe:true,
	slidesToShow:1,
  slidesToScroll:1,
	appendArrows: $('#pick_column_slide_arrow')
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


$(function(){
// ページ下部固定ボタン表示非表示
	  var btnOffset = 0;
		var winH;

    $(window).on('load resize',function(){
        btnOffset = $('.Top_back').offset().top;
        winH = $(window).height();
    });
    $(function() {
        var fixedbtn = $('.footer_top_link_wrap');
        fixedbtn.hide();
        $(window).scroll(function (e) {
						var isScrollTop = ($(this).scrollTop() === 0);
						console.log(isScrollTop);
            if ($(this).scrollTop() > btnOffset - winH && !isScrollTop) {
                fixedbtn.fadeIn();
            } else {
                fixedbtn.fadeOut();
            }
        });
    });
});
