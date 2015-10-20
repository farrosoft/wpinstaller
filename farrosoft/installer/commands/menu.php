<?php

namespace farrosoft\wpinstaller\commands;

use farrosoft\wpinstaller\Executor;

require_once (__DIR__ . '/../executor.php');

class Menu {
	public static function create($menuName) {
		Executor::runCommand( "menu create '" . $menuName . "'");
	}

	public static function addItem($page_id, $menuName) {
		return 'menu item add-post "' . $menuName .
		       '" ' . $page_id;
	}
}