<?php


namespace farrosoft\wpinstaller\commands;

use farrosoft\wpinstaller\Executor;

require_once (__DIR__ . '/../executor.php');

class Db {
	public static function drop() {
		Executor::runCommand( 'db drop --yes' );
	}

	public static function create() {
		Executor::runCommand( 'db create' );
	}
}