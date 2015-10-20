<?php

namespace farrosoft\wpinstaller;

require_once 'helper.php';

class Executor {
	public static function runCommand( $command ) {
		$date = new \DateTime();
		echo 'DEBUG [' . $date->getTimestamp() . '] - ' . $command . "\n";
		$result = exec( getWpCliExec() . ' ' . $command ) . "\n";
		echo $result;
		return trim($result);
	}
}