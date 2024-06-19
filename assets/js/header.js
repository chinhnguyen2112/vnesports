function show_menu(e, type) {
	if (type == 1) {
		$(".all_menu_drop").css("transform", "scale(1)");
	} else {
		$(".all_menu_drop").css("transform", "scale(0)");
	}
}
function show_menu_mobile(e, type) {
	if (type == 1) {
		$(".all_menu_drop").css("transform", "scale(1)");
		$(e).attr("onclick", "show_menu_mobile(this,2)");
		$("#line_span").addClass("active_span");
	} else {
		$(".all_menu_drop").css("transform", "scale(0)");
		$(e).attr("onclick", "show_menu_mobile(this,1)");
		$("#line_span").removeClass("active_span");
	}
}

window.onscroll = function () {
	scrollFunction();
};
var width = $(window).width();
function scrollFunction() {
	if (
		(document.body.scrollTop > 80 && width > 1280) ||
		(document.documentElement.scrollTop > 80 && width > 1280)
	) {
		document.getElementById("top_header").style.display = "none";
		$(".img_home").css("display", "none");
		$(".icon_hidden").css("display", "block");
	}
}
$(document).ready(function () {
	var banner_header = `<div class="list_banner_top body_width">
	<a href="https://t.me/nguoiduongthoi" target="_blank" rel="nofollow" class="img_banner">
		<img src="/images/site/lienhe.jpg" alt="banner"  width="375px" height="46px">
	</a>
	<img src="/images/icon_cancel.png" alt="đóng" class="close_banner" onclick="$('.list_banner_top').hide()">
</div>`;
	var banner_footer = `<div class="list_banner body_width">
	<a href="https://shlive.tv/" target="_blank" rel="nofollow" class="img_banner">
		<img src="/images/site/SHLIVE.gif" alt="banner" width="375px" height="46px">
	</a>
	<a href="https://shbet24h.info/" target="_blank" rel="nofollow" class="img_banner">
		<img src="/images/site/okvip.gif" alt="banner"  width="375px" height="46px">
	</a>
	<img src="/images/icon_cancel.png" alt="đóng" class="close_banner" onclick="$('.banner_site').hide()">
</div>`;
	setTimeout(function () {
		$('.banner_top').html(banner_header)
		$('.banner_site').html(banner_footer)
	}, 5000); // 15 giây
});