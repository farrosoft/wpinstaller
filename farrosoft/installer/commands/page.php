<?php

namespace farrosoft\wpinstaller\commands;

use farrosoft\wpinstaller\Executor;

require_once( __DIR__ . '/../executor.php' );

class Page {
	private $page_id;

	private function __construct( $args ) {
		$this->page_id = Executor::runCommand( $this->getCreatePageCommand( $args ) );
	}

	private function getCreatePageCommand( $args ) {
		$command_line = 'post' .
		                ' create' .
		                ' --post_status="publish"' .
		                ' --post_type="page"' .
		                ' --porcelain';


		if ( $args['title'] ) {
			$command_line .= ' --post_title="' . $args['title'] . '"';
		}

		if ( $args['slug'] ) {
			$command_line .= ' --post_name="' . $args['slug'] . '"';
		}

		return $command_line;
	}

	/**
	 * @param title
	 * @param slug
	 * @param page_template
	 * @param menu_name
	 *
	 */
	public static function createPage( $args ) {
		$page = new Page( $args );

		if ( array_key_exists( 'page_template', $args ) ) {
			Template::setPageTemplate( $page->page_id, $args['page_template'] );
		}

		if ( array_key_exists( 'menu_name', $args ) ) {
			Menu::addItem( $page->page_id, $args['menu_name'] );
		}
	}

	public static function deleteAllPages() {
		Executor::runCommand( "post delete $(" . getWpCliExec() . " post list --post_type=\"page\" --format=\"ids\") --force" );
	}
}