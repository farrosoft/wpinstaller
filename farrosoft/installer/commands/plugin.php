<?php

namespace farrosoft\wpinstaller\commands;

use farrosoft\wpinstaller\Executor;

require_once (__DIR__ . '/../executor.php');

class Plugin {
	public static function activate($pluginName) {
		Executor::runCommand( 'plugin activate ' . $pluginName );
	}
}