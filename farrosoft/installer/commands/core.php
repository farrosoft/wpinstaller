<?php

namespace farrosoft\wpinstaller\commands;

use farrosoft\wpinstaller\Executor;

require_once (__DIR__ . '/../executor.php');

class Core {
	public static function install($siteUrl) {
		Executor::runCommand( 'core install --url=' . $siteUrl . ' --title=title --admin_user=admin --admin_password=admin --admin_email=admin@admin.admin' );
	}
}