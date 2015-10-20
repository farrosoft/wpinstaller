<?php

namespace farrosoft\wpinstaller\commands;

use farrosoft\wpinstaller\Executor;

require_once (__DIR__ . '/../executor.php');

class Menu {
	public static function create($menuName) {
		Executor::runCommand( "menu create \"" . $menuName. "\"");
	}

	public static function assign($menuName, $location) {
		Executor::runCommand( "menu location assign \"" . $menuName . "\" " . $location);
	}

	public static function addItem($page_id, $menuName) {
		Executor::runCommand( "menu item add-post \"" . $menuName .
		                      "\" ". $page_id );
	}
}