<?php

function pagination($base_url, $total_row, $per_page, $segment = '')
{
	$CI = &get_instance();
	$CI->load->library("pagination");
	$config['base_url'] = $base_url;
	$config['total_rows'] = $total_row;
	$config['per_page'] = $per_page;
	$config["use_page_numbers"] = true;
	$config["reuse_query_string"] = true;
	$config["prefix"] = '/';
	if ($segment > 0) {
		$config['uri_segment'] = 3;
	}
	// full tag pagination
	$config["full_tag_open"] = " <nav class='list_pagination' >
        <ul class='pagination'>";
	$config["full_tag_close"] = "</ul>
        </nav>";
	// first link
	$config["first_link"] = "&lt&lt";
	$config["first_tag_open"] = "<li class='page-item update-page-item'>";
	$config["first_tag_close"] = "</li>";

	// last link
	$config["last_link"] = "&gt&gt";
	$config["last_tag_open"] = "<li class='page-item update-page-item'>";
	$config["last_tag_close"] = "</li>";

	// next link
	$config["next_link"] = "&gt";
	$config["next_tag_open"] = "<li class='page-item update-page-item'>";
	$config["next_tag_close"] = "</li>";

	// pre link
	$config["prev_link"] = "&lt";
	$config["prev_tag_open"] = "<li class='page-item update-page-item'>";
	$config["prev_tag_close"] = "</li>";

	// cur link 
	$config["cur_tag_open"] = "<li class='page-item update-page-item active_pagin'><a class='page-link'>";
	$config["cur_tag_close"] = "</a></li>";
	$config['num_links'] = 1;

	$config["num_tag_open"] = "<li class='page-item update-page-item'>";
	$config["num_tag_close"] = "</li>";
	$config['attributes'] = array('class' => 'page-link');
	$CI->pagination->initialize($config);
}
function admin()
{
	if (isset($_SESSION['admin']) && $_SESSION['admin']['id'] > 0) {
		return true;
	} else {
		return false;
	}
}
function check_admin()
{
	if (isset($_SESSION['admin']) && $_SESSION['admin']['id'] > 0 && $_SESSION['admin']['type'] == 1) {
		return 1; // admin
	} else if (isset($_SESSION['admin']) && $_SESSION['admin']['id'] > 0 && $_SESSION['admin']['type'] == 2) {
		return 2; // biên tập
	} else if (isset($_SESSION['admin']) && $_SESSION['admin']['id'] > 0 && $_SESSION['admin']['type'] == 3) {
		return 3; // cộng tác viên
	}
}
function chuyen_muc($cate = null)
{
	$CI = &get_instance();
	$CI->load->database();

	$CI->db->select('*');
	if ($cate != null) {
		$CI->db->where($cate);
	}
	$array  = $CI->db->get('category')->result_array();
	return $array;
}
function tag($tag = null)
{
	$CI = &get_instance();
	$CI->load->database();

	$CI->db->select('*');
	if ($tag != null) {
		$CI->db->where($tag);
	}
	$array  = $CI->db->get('tags')->result_array();
	return $array;
}
function replaceTitles($title)
{
	$title = html_entity_decode($title, ENT_COMPAT, 'UTF-8');
	$title  = remove_accent($title);
	$title = str_replace('/', '', $title);
	$title = preg_replace('/[^\00-\255]+/u', '', $title);

	if (preg_match("/[\p{Han}]/simu", $title)) {
		$title = str_replace(' ', '-', $title);
	} else {
		$arr_str  = array("&lt;", "&gt;", "/", " / ", "\\", "&apos;", "&quot;", "&amp;", "lt;", "gt;", "apos;", "quot;", "amp;", "&lt", "&gt", "&apos", "&quot", "&amp", "&#34;", "&#39;", "&#38;", "&#60;", "&#62;");

		$title  = str_replace($arr_str, " ", $title);
		$title  = preg_replace('/\p{P}|\p{S}/u', ' ', $title);
		$title = preg_replace('/[^0-9a-zA-Z\s]+/', ' ', $title);

		//Remove double space
		$array = array(
			'    ' => ' ',
			'   ' => ' ',
			'  ' => ' ',
		);
		$title = trim(strtr($title, $array));
		$title  = str_replace(" ", "-", $title);
		$title  = urlencode($title);
		// remove cac ky tu dac biet sau khi urlencode
		$array_apter = array("%0D%0A", "%", "&");
		$title  = str_replace($array_apter, "-", $title);
		$title  = strtolower($title);
	}
	return $title;
}
function remove_accent($mystring)
{
	$marTViet = array(
		"à", "á", "ạ", "ả", "ã", "â", "ầ", "ấ", "ậ", "ẩ", "ẫ", "ă", "ằ", "ắ", "ặ", "ẳ", "ẵ",
		"è", "é", "ẹ", "ẻ", "ẽ", "ê", "ề", "ế", "ệ", "ể", "ễ",
		"ì", "í", "ị", "ỉ", "ĩ",
		"ò", "ó", "ọ", "ỏ", "õ", "ô", "ồ", "ố", "ộ", "ổ", "ỗ", "ơ", "ờ", "ớ", "ợ", "ở", "ỡ",
		"ù", "ú", "ụ", "ủ", "ũ", "ư", "ừ", "ứ", "ự", "ử", "ữ",
		"ỳ", "ý", "ỵ", "ỷ", "ỹ",
		"đ",
		"À", "Á", "Ạ", "Ả", "Ã", "Â", "Ầ", "Ấ", "Ậ", "Ẩ", "Ẫ", "Ă", "Ằ", "Ắ", "Ặ", "Ẳ", "Ẵ",
		"È", "É", "Ẹ", "Ẻ", "Ẽ", "Ê", "Ề", "Ế", "Ệ", "Ể", "Ễ",
		"Ì", "Í", "Ị", "Ỉ", "Ĩ",
		"Ò", "Ó", "Ọ", "Ỏ", "Õ", "Ô", "Ồ", "Ố", "Ộ", "Ổ", "Ỗ", "Ơ", "Ờ", "Ớ", "Ợ", "Ở", "Ỡ",
		"Ù", "Ú", "Ụ", "Ủ", "Ũ", "Ư", "Ừ", "Ứ", "Ự", "Ử", "Ữ",
		"Ỳ", "Ý", "Ỵ", "Ỷ", "Ỹ",
		"Đ",
		"'"
	);

	$marKoDau = array(
		"a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a",
		"e", "e", "e", "e", "e", "e", "e", "e", "e", "e", "e",
		"i", "i", "i", "i", "i",
		"o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o",
		"u", "u", "u", "u", "u", "u", "u", "u", "u", "u", "u",
		"y", "y", "y", "y", "y",
		"d",
		"A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A",
		"E", "E", "E", "E", "E", "E", "E", "E", "E", "E", "E",
		"I", "I", "I", "I", "I",
		"O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O",
		"U", "U", "U", "U", "U", "U", "U", "U", "U", "U", "U",
		"Y", "Y", "Y", "Y", "Y",
		"D",
		""
	);

	return str_replace($marTViet, $marKoDau, $mystring);
}

function replace_date($time)
{
	$weekday = date("l", $time);
	$weekday = strtolower($weekday);
	switch ($weekday) {
		case 'monday':
			$weekday = 'Thứ hai';
			break;
		case 'tuesday':
			$weekday = 'Thứ ba';
			break;
		case 'wednesday':
			$weekday = 'Thứ tư';
			break;
		case 'thursday':
			$weekday = 'Thứ năm';
			break;
		case 'friday':
			$weekday = 'Thứ sáu';
			break;
		case 'saturday':
			$weekday = 'Thứ bảy';
			break;
		default:
			$weekday = 'Chủ nhật';
			break;
	}
	return $weekday . ', ' . date('d/m/Y - H:i ', $time);
}
function alias_301($alias)
{
	if ($alias == '/review-trai-nghiem-choi-game-hit-club-tu-cong-dong-game-thu/') {
		$alias = '/review-trai-nghiem-choi-game-tu-cong-dong-game-thu/';
	}
	if ($alias == '/hi88-dia-chi-choi-game-truc-tuyen-hap-dan-cho-game-thu/') {
		$alias = '/dia-chi-choi-game-truc-tuyen-hap-dan-cho-game-thu/';
	}
	if ($alias == '/bsport-nen-tang-choi-game-truc-tuyen-dinh-cao-uy-tin-nhat/') {
		$alias = '/nen-tang-choi-game-truc-tuyen-dinh-cao-uy-tin-nhat/';
	}
	if ($alias == '/hi88-trai-nghiem-trang-game-the-thao-dinh-cao-hoi-hop/') {
		$alias = '/trai-nghiem-trang-game-the-thao-dinh-cao-hoi-hop/';
	}
	if ($alias == '/web-game-b52club-san-choi-uy-tin-cho-cac-game-thu') {
		$alias = '/san-choi-game-dinh-cao-chat-luong/';
	}
	if ($alias == '/bi-kip-choi-nohu-tai-game-bai-doi-thuong-hieu-qua-nhat/') {
		$alias = '/bi-kip-choi-nohu-tai-trang-game-hieu-qua-nhat/';
	}
	if ($alias == '/web-game-b52club-san-choi-uy-tin-cho-cac-game-thu') {
		$alias = '/web-game-san-choi-uy-tin-cho-cac-game-thu';
	}
	if ($alias == '/huong-dan-tan-thu-cach-choi-poker-de-dang-cung-hitclub') {
		$alias = '/huong-dan-tan-thu-cach-choi-poker-de-dang';
	}
	if ($alias == '/xo-so-go789-doi-doi-sau-17gio-30-phut-hang-ngay') {
		$alias = '/xo-so-doi-doi-sau-17gio-30-phut-hang-ngay';
	}
	if ($alias == '/lien-minh-huyen-thoai-meo-choi-gianh-thang-dam-tai-win55') {
		$alias = '/lien-minh-huyen-thoai-meo-choi-gianh-thang-dam';
	}
	if ($alias == '/trai-nghiem-chan-thuc-tai-sanh-truc-tuyen-hitclub') {
		$alias = '/trai-nghiem-chan-thuc-tai-sanh-truc-tuyen';
	}
	if ($alias == '/68-game-bai/') {
		$alias = '/review-68-nen-tang-game-hap-dan-hang-dau-hien-nay/';
	}
	if ($alias == '/review-1xbet-san-choi-game-uy-tin-hang-dau-tai-viet-nam/') {
		$alias = '/review-san-choi-game-uy-tin-hang-dau-tai-viet-nam/';
	}
	if ($alias == '/huong-dan-cach-tai-go88-apk-va-cai-dat-cho-dien-thoai-android/') {
		$alias = '/';
	}

	return $alias;
}