$("#cate_blog").change(function () {
	window.location.href = $(this).find(":selected").data("alias");
});
var mucluc = document.getElementById("mucluc_blog");
var input1 = document.getElementById("content_blog");
var contentmucluc = document.getElementById("list_mucluc");
var ml = document.getElementById("right_detail");
var title_mucluc = document.getElementById("title_mucluc");
if (mucluc != null && input1 != null) {
	var input2 = input1.getElementsByTagName("*");
	var h2 = input1.getElementsByTagName("H2").length;
	var h3 = input1.getElementsByTagName("H3").length;
	var h4 = input1.getElementsByTagName("H4").length;
	var h5 = input1.getElementsByTagName("H5").length;
	if (h2 > 0 || h3 > 0 || h4 > 0 || h5 > 0) {
		var tieudemucluc = document.getElementById("title_mucluc");
		var strong = document.createElement("strong");
		tieudemucluc.appendChild(strong);
	} else {
		mucluc.style.display = "none";
	}
	for (i = 0; i < input2.length; i++) {
		if (
			input2[i].tagName == "H1" ||
			input2[i].tagName == "IMG" ||
			input2[i].tagName == "H2" ||
			input2[i].tagName == "H3" ||
			input2[i].tagName == "H4" ||
			input2[i].tagName == "H5" ||
			input2[i].tagName == "H6"
		) {
			var uri_ct = input2[i].textContent;
			if (input2[i].tagName == "H1") {
				input2[i].setAttribute("id", uri_ct + i);
				var li = document.createElement("div");
				var href = document.createElement("a");
				if (input2[i].hasAttribute("img")) {
				}
				href.href = "#" + uri_ct + i;
				href.innerHTML = uri_ct;
				href.className = "H1abc";
				li.appendChild(href);
				contentmucluc.appendChild(li);
			}
			if (input2[i].tagName == "H2") {
				input2[i].setAttribute("id", uri_ct + i);
				var li = document.createElement("li");
				var href = document.createElement("a");
				href.href = "#" + uri_ct + i;
				href.innerHTML = uri_ct;
				href.className = "H2abc";
				li.appendChild(href);
				contentmucluc.appendChild(li);
				input2[i].style.marginLeft = "20px";
			}
			if (input2[i].tagName == "H3") {
				input2[i].setAttribute("id", uri_ct + i);
				var li = document.createElement("li");
				var href = document.createElement("a");
				href.href = "#" + uri_ct + i;
				href.className = "H3abc";
				href.innerHTML = uri_ct;
				li.appendChild(href);
				contentmucluc.appendChild(li);
			}
			if (input2[i].tagName == "H4") {
				input2[i].setAttribute("id", uri_ct + i);
				var li = document.createElement("li");
				var href = document.createElement("a");
				href.href = "#" + uri_ct + i;
				href.className = "H4abc";
				href.innerHTML = uri_ct;
				li.appendChild(href);
				contentmucluc.appendChild(li);
			}
		}
		// if (input2[i].tagName == 'IMG') {
		//   input2[i].setAttribute("class", "view");
		// }
	}
}

var page = 2;
$(".load_more").click(function () {
	var show_more = $(this);
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
				$(".load_more").remove();
			} else if (data.status == 1) {
				// $(".list_blog_home").append(data.html);
				show_more.before(data.html);
				if (data.next == 0) {
					$(".load_more").remove();
				}
			}
		},
		error: function () {
			alert("error");
		},
	});
});
$(".name_top").hover(function () {
	var id = $(this).data("id");
	var active = $(".active").data("id");
	if (id != active) {
		$(".active").removeClass("active");
		$(this).addClass("active");
		if (id == 1) {
			$(".box_top").show();
			$(".box_hay").hide();
			$(".box_hot").hide();
		}
		if (id == 2) {
			$(".box_top").hide();
			$(".box_hay").show();
			$(".box_hot").hide();
		}
		if (id == 3) {
			$(".box_top").hide();
			$(".box_hay").hide();
			$(".box_hot").show();
		}
	}
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
		$(".content_blog").css("height", "150px");
	}
	++check_click;
});
