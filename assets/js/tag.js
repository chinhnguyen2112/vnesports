var page = 2;
$(".load_more").click(function () {
	var show_more = $("#table_bot");
	var form_data = new FormData();
	form_data.append("page", page);
	var id_chuyenmuc = $("#chuyen_muc").val();
	form_data.append("id_chuyenmuc", id_chuyenmuc);
	$.ajax({
		url: "/load_more_cate",
		type: "POST",
		processData: false,
		contentType: false,
		dataType: "json",
		data: form_data,
		success: function (data) {
			++page;
			if (data.status == 0) {
				document.getElementById("span_show").style.display = 'none';
				document.getElementById("span_end").style.display = 'block';
			} else if (data.status == 1) {
				// $(".list_blog_home").append(data.html);
				show_more.before(data.html);
				if (data.next == 0) {
					document.getElementById("span_show").style.display = 'none';
					document.getElementById("span_end").style.display = 'block';
				}
			}
			$(".this_train a img").css("height", height_img);
		},
		error: function () {
			alert("error");
		},
	});
});
var check_click = 0;
$(".hide_show_content").click(function () {
	if (check_click % 2 == 0) {
		$(".hide_show_text").text("Ẩn bớt");
		$(".list_img_arrow").css("rotate", "270deg");
		$(".content_blog").css("height", "unset");
	} else {
		$(".hide_show_text").text("Xem thêm");
		$(".list_img_arrow").css("rotate", "90deg");
		$(".content_blog").css("height", "70px");
	}
	++check_click;
});
