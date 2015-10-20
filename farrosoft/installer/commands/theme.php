<?php

namespace farrosoft\wpinstaller\commands;

use farrosoft\wpinstaller\Executor;

require_once (__DIR__ . '/../executor.php');

class Theme {
	public static function activate($themeName) {
		Executor::runCommand( 'theme activate ' . $themeName );
	}
}