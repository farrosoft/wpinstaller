<?php

namespace farrosoft\wpinstaller\commands;

use farrosoft\wpinstaller\Executor;

require_once (__DIR__ . '/../executor.php');

class Option {
	public static function update($key, $value) {
		Executor::runCommand( "option update " . $key . ' ' . $value );
	}
}