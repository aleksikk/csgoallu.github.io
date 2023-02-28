<?php

	define('DB_HOST', 'localhost');
	define('DB_NAME', 'gambling');
	define('DB_USER', 'root');
	define('DB_PASS', 'JEZwqGJx');

	define('BASE_URL', 'https://tuz1k.com');

	define('DEFAULT_HOME', 'cases');
	define('VIEW_PATH', 'views/');
	define('LAYOUT_PATH', 'layouts/');
	define('DEBUG', false);

	$cryptoPrivate = '';
	$cryptoPublic = '';
	define('CRYPTOBOX_PRIVATE_KEYS', $cryptoPrivate);

	date_default_timezone_set('America/Indianapolis');

	$steamauth['apikey'] = '';

	$maxCases = 10;
	$minFlipValue = 2;
	$maxItemsFlip = 12;

	$currentVersion = '?v=1.2984';

	$css = 'style.css';

	$js = implode(',', array(
	  'noty/packaged/jquery.noty.packaged.min.js',
	  'jquery.easing.js',
		'jquery.drawsvg.min.js',
	  'skfpay.min.js',
		'cryptobox.min.js',
	  'base.js',
	  'inventory.js',
	));
	$jsfiles = array('case', 'casebrowser', 'casecreator', 'earn', 'tradeup', 'coinflip');

	$offline = false;
