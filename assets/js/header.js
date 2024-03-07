function show_menu(e, type) {
	if (type == 1) {
		$(".all_menu_drop").css("transform", "scale(1)");
		// $(e).attr("onclick", "show_menu(this,2)");
	} else {
		$(".all_menu_drop").css("transform", "scale(0)");
		// $(e).attr("onclick", "show_menu(this,1)");
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
$(document).ready(function(){
    setTimeout(function(){
        $('.popup_main').show()
    }, 3000); // 15 giây
});
// function show_menu1(e) {
// 	$(".box_menu").show();
// }
// if ($(window).width() <= 1024) {
// 	$(document).click(function (event) {
// 		$target = $(event.target);
// 		if (
// 			!$target.closest(".box_menu").length &&
// 			$(".box_menu").is(":visible") &&
// 			!$target.closest(".img_show_2").length
// 		) {
// 			$(".box_menu").hide(100);
// 		}
// 	});
// }

$('.btn_popup').click(function (event) {
	$('.popup_link').hide();
})
setTimeout(function(){
	$('.popup_link').show();
}, 5000); // 5000 milliseconds = 5 seconds