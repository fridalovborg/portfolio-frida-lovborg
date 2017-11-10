<?php 

function get_request_uri() {
	$uri = $_SERVER['REQUEST_URI'];

	return str_replace('/fridalovborg/', '', $uri);
}

function is_current_page($page) {
	if (get_request_uri() == $page) {
		return true;
	} else {
		return false;
	}
}

function menu_class($page) {
	if (is_current_page($page)) {
		return 'active';
	} else {
		return '';
	}
}

?>