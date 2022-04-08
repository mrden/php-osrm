<?php
include __DIR__ . '/../vendor/autoload.php';

$tile = new \OSRM\Service\TileService();

try {
	$response = $tile
        ->setProfile('car')
        ->fetch('tile(1310,3166,18).mvt');
	if ($response->isOK())
    {
		echo '<pre>';
		print_r($response->toArray());
	} else {
		echo 'Tile not found.';
	}
} catch (\OSRM\Exception $e) {
	echo $e->getMessage();
} catch (Exception $e) {
	echo $e->getMessage();
}
