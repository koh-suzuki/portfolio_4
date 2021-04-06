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
