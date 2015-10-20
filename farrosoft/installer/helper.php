<?php

function getWpCliExec() {
	if ( isNix() ) {
		return './vendor/bin/wp --allow-root ';
	}

	if ( isWindows() ) {
		return 'vendor\\bin\\wp.bat';
	}
}

function isNix() {
	return DIRECTORY_SEPARATOR == '/';
}

function isWindows() {
	return DIRECTORY_SEPARATOR == '\\';
}
