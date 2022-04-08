<?php
include __DIR__ . '/../vendor/autoload.php';

$route = new \OSRM\Service\RouteService();

try {
	$response = $route
        ->setSteps('true')
        ->fetch('13.388860,52.517037;13.397634,52.529407');
	if ($response->isOK())
    {
		echo '<pre>';
		print_r($response->toArray());
	} else {
		echo 'Route not found.';
	}
} catch (\OSRM\Exception $e) {
	echo $e->getMessage();
} catch (Exception $e) {
	echo $e->getMessage();
}
