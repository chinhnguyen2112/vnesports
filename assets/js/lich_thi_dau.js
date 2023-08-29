$(".floating_panel").css({
	display: "none",
});
$("#iframe_esport").find(".floating_panel").remove();
function test() {
	$("iframe").contents().find("div[class='floating_panel']").remove();
}
