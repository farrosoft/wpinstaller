<?php

namespace farrosoft\wpinstaller\commands;

use farrosoft\wpinstaller\Executor;

require_once (__DIR__ . '/../executor.php');

class Template {
	public static function setPageTemplate($pageId, $pageTemplate) {
		Executor::runCommand( 'post meta set ' . $pageId . ' _wp_page_template ' . $pageTemplate);
	}
}