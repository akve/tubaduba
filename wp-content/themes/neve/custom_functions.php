<?php

function trn_menu() {
	add_menu_page("TubaManage", "TubaManage", 'administrator', 'tuba_manage', 'tuba_manage_page');
}

function WPParseAndGet($template, $r = false)
{
	if (file_exists("{$template}.html")) {
		$file = file_get_contents("{$template}.html");
		$file = preg_replace("/%%TEMPLATE_Directory%%/", get_template_directory_uri(), $file);

		if ($r)
			return $file;
		else
			echo $file;
	} else {
		echo "";
	}
}

function tuba_manage_page() {
	# angular handles the rest
	WPParseAndGet(dirname(__FILE__) . "/../../../app/admin/newadmin/admin");
}

add_action('admin_menu', 'trn_menu');

?>
