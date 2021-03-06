<?php
$CONFIG = [
	'apps_paths' => [
		[
			'path'		=> OC::$SERVERROOT . '/apps',
			'url'		=> '/apps',
			'writable'	=> true,
		],
	],
	'default_language' => 'en',
];

if (is_dir(OC::$SERVERROOT.'/apps2')) {
	$CONFIG['apps_paths'][] = [
		'path' => OC::$SERVERROOT . '/apps2',
		'url' => '/apps2',
		'writable' => false,
	];
}

if (substr(strtolower(PHP_OS), 0, 3) === 'win') {
	$CONFIG['openssl'] = ['config' => OC::$SERVERROOT . '/tests/data/openssl.cnf'];
}

if (getenv("TC") === "selenium") {
	$CONFIG['skeletondirectory'] = OC::$SERVERROOT . '/tests/ui/skeleton';
}
