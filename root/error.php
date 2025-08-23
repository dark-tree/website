<?php

$status  = $_SERVER['REDIRECT_STATUS'] ?? 500;
$request = $_SERVER['REQUEST_URI'] ?? '/';

// build redirect
$query  = http_build_query([
	'i' => $status,
	'q' => $request
]);

header("Location: /error/index.html?$query");
exit;
