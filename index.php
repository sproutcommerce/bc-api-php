<?php

	require_once __DIR__.'/vendor/autoload.php';

	Dotenv::load(__DIR__.'/');

	use Bigcommerce\Api\Client as Bigcommerce;

	Bigcommerce::configure(array(
    'store_url' => $_ENV['BC_API_PATH'],
    'username'  => $_ENV['BC_API_USER'],
    'api_key'   => $_ENV['BC_API_TOKEN']
	));

	$ping = Bigcommerce::getTime();

	if ($ping) echo $ping->format('H:i:s').PHP_EOL;
	else echo "Nope: ".print_r(Bigcommerce::getLastError(), true).PHP_EOL;