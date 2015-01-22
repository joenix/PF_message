<?php

// Project: /blank
$project = '';

// Load Manifest
require_once('manifest.php');

// Page Array
$pages = array('index', 'catelog');


// Web Init
class Init {
	// Require General
	function init( $u ){
		// Do ...
	}

	// Require Template
	static function template( $u, $page ){

		$u -> set('resource', 'public/resource.html');
		$u -> set('header',   'public/header.html');
		$u -> set('page',     $page . '.html');
		$u -> set('footer',   'public/footer.html');
		$u -> set('init',     'public/init.html');

		$view = new Template;
		echo $view -> render('public/render.html');
	}

	// Page Render
	static function render( $u, $page ){
		$u -> set('active', $page);
		self::template( $u, $page );
	}
}

// Web Class
class Web extends Init {

	// Page Index
	static function index( $u ){
		self::render( $u, 'index' );
	}

	// Page Demo
	static function catelog( $u ){
		self::render( $u, 'catelog' );
	}

	// Page Error
	static function error( $u ){
		self::render( $u, 'error' );
	}

}

// On Error
$u -> set('ONERROR', function( $u ){
	// ERROR -> status | code | text
	// Web::error($u, 'error');

	// Error Report Debug
	console($u -> ERROR);
});

// Route Page
foreach( $pages as $page ){
	$u -> route('GET ' . ( $page == 'index' ? '/' : '/' . $page . '.html' ), 'Web->' . $page);
};


// 业务哟
$u -> route('GET /');


$u -> run();
