/* ===============================================*/
/* # オープンアニメーション
/*=============================================== */
$(function() {
	setTimeout(function(){
		$('.start, .start p').fadeIn(1600);
	},500); //0.5秒後にロゴをフェードイン!
	setTimeout(function(){
		$('.start').fadeOut(1000);
	},2500); //2.5秒後にロゴ含め真っ白背景をフェードアウト！
});

/* ===============================================*/
/* フォームバリデーション
/*=============================================== */
(function() {
	window.addEventListener('load', function() {
		var forms = document.getElementsByClassName('needs-validation');
		var validation = Array.prototype.filter.call(forms, function(form) {
			form.addEventListener('submit', function(event) {
				if (form.checkValidity() === false) {
					event.preventDefault();
					event.stopPropagation();
				}
				form.classList.add('was-validated');
			}, false);
		});
	}, false);
})();

/* ===============================================*/
/* /* smooth scroll */
/*=============================================== */
$(window).on('load',function(){
	var locUrl = location.href;
	var setHash = locUrl.split('#');
	//現在のページURLに#が含まれる場合はスクロール移動
	if(setHash[1]){
			hashMove("#"+setHash[1]);
	}
	//#pagetop
	$('#pagetop a').on('click',function() {
			var href = $(this).attr("href");
			var clkUrl = href.split('#');
			hashMove("#"+clkUrl[1]);
			return false;
	});
	//#から始まるリンクはスクロール
	$('a[href^="#"]').on('click',function() {
			var href = $(this).attr("href");
			var clkUrl = href.split('#');
			hashMove("#"+clkUrl[1]);
	});
	//#を含むリンクは、リンク先と現在のページのURLを比較して判断
	$('a[href*="#"]').on('click',function() {
			var href = $(this).attr("href");
			var pageURL = location.pathname;
			reg = new RegExp(pageURL);
			//ページ名が同じならスクロール移動
			if (href.match(reg)) {
					var clkUrl = href.split('#');
					hashMove("#"+clkUrl[1]);
			}
	});

	function hashMove(trg){
			var position = $(trg).offset().top;
			if($('body').hasClass('admin-bar')){
					position = position - 50;
			}else{
					position = position - 20;
			}
			if($('body').width() <= 980){
					position = position - 50; //見出しの文字が切れるのを防ぐ
			}else{
					position = position - 150; //見出しの文字が切れるのを防ぐ
			}
			$('body,html').animate({scrollTop:position}, '800', 'swing');
	}
});

/* ===============================================*/
/*  slick
/*=============================================== */
$(function() {
	$('.slider').slick({
    autoplay:true,
    autoplaySpeed:5000,
    dots:true,
	});
});

/* ===============================================*/
/*  アニメーションスクロール
/*=============================================== */
$(function() {
	AOS.init()
});

/* ===============================================*/
/*  ハンバーガーメニュー
/*=============================================== */
$(function() {
	$('#js-buttonHamburger').click(function () {
    $('body').toggleClass('is-drawerActive');
    if ($(this).attr('aria-expanded') == 'false') {
      $(this).attr('aria-expanded', true);
			$('.hamburger__nav').fadeIn(800);
			$("body ,html").css('overflow','hidden');
    } else {
			$(this).attr('aria-expanded', false);
			$('.hamburger__nav').fadeOut(800);
			$("body, html").css('overflow','auto');
    }
  });
});