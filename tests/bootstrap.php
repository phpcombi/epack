<?php

use Combi\{
    Helper as helper,
    Abort as abort,
    Runtime as rt
};

if (!($loader = include __DIR__ . '/../vendor/autoload.php')) {
	echo 'Install Nette Tester using `composer install`';
	exit(1);
}

// init combi
const TESTING = true;


