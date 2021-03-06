<?php

// Project: /blank
$project = '';

// Load Manifest
require_once('manifest.php');

// Page Array
$pages = array('index', 'msg');


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

		$params = $u -> get('GET');
		$id = REQ::option($params, 'id');

		if( $id ){
			$one = SQL::query('SELECT * FROM message WHERE id = '.$id)[0];

			$title = $one['title'];
			$description = $one['description'];
		}
		else{
			$id = '';
			$title = null;
			$description = null;
		}

		$u -> set( 'id', $id );
		$u -> set( 'title', $title );
		$u -> set( 'description', $description );

		self::render( $u, 'index' );
	}

	// Page Demo
	static function msg( $u ){
		self::render( $u, 'msg' );
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
$u -> route('GET /msg', function( $u ){

	$params = $u -> get('GET');
	$mode = REQ::option($params, 'mode');

	$id = REQ::option($params, 'id');

	$table = 'message';

	switch( $mode ){

		// 单页
		case 'read':

			if( $id ){

				$result = SQL::query('SELECT * FROM message WHERE id = '.$id);

				$u -> set( 'data', $result[0] );

				echo Template::instance() -> render('request/msg_view.html');

			}

			break;

		case 'edit':

			if( $id ){

				$u -> set( 'id', $id );

				Web::index( $u );

			}

			break;

		// 编辑
		default:

			$result = SQL::query('SELECT * FROM message ORDER BY id desc');

			$u -> set( 'data', $result );

			echo Template::instance() -> render('request/msg.html');

			break;
	}

});

$u -> route('POST /msg', function( $u ){

      $params = $u -> get('POST');
	$mode = $params['mode'];

	$table = 'message';

	$result = false;

	switch( $mode ){

		// 插入数据
		case 'insert':

			$title = REQ::option($params, 'title');
			$author = REQ::option($params, 'author');
			$description = REQ::option($params, 'description');

			$result = SQL::insert( $table, array('title'=>$title, 'author'=>$author, 'description'=>$description) );
			break;

		// 更新上/下架
		case 'update':

			$id = REQ::option($params, 'id');
			$audit = REQ::option($params, 'audit');

			$result = SQL::query('UPDATE '.$table.' SET audit = '.$audit.' WHERE id = '.$id);
			break;

		// 编辑
		case 'edit':

			$id = REQ::option($params, 'id');
			$title = REQ::option($params, 'title');
			$author = REQ::option($params, 'author', '');
			$description = REQ::option($params, 'description');

			// $result = SQL::update( $table, array('title'=>$title, 'author'=>$author, 'description'=>$description), array('id'=>$id) );
			// console("UPDATE ".$table." SET `title` = '".$title."', `author` = '".$author."', `description` = '".$description."' WHERE id = ".$id);
			$result = SQL::query("UPDATE ".$table." SET `title` = '".$title."', `author` = '".$author."', `description` = '".$description."' WHERE id = ".$id);

			break;
	}

	echo REQ::request( $result );
});


$u -> run();
