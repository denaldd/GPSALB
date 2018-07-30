<?php 
include 'DataBase/DB.php';
include 'functions/Login.php';
LoggedIn::isLoggedIN();
$params = WhoIsLoggedIn::whoislogged();
$user_id = $params[0];

$postdata = file_get_contents("php://input");
$data     = json_decode($postdata, true);
$datapublikimit = date('Y-m-d');
$product_user_ip = $_SERVER['REMOTE_ADDR'];

$map = DB::query('SELECT url FROM markers ORDER BY url DESC LIMIT 1');
	foreach ($map as $key) {
		$product_related_map = $key['url'];
	}

	if (empty($product_related_map)) {
		$product_related_map = '1';
	} else {
		$product_related_map =$product_related_map + 1;
	}

DB::query('INSERT INTO shtepimeqera VALUES(shtepi_id, :titull, :pershkrim, :cmim, :user_id, shikime, status, :datapublikimit, :shtepi_related_map)', array(
	':titull' => $data['titull'],
	':pershkrim' => $data['pershkrim'],
	':cmim' => $data['cmim'],
	':user_id' => $user_id,
	':datapublikimit' => $datapublikimit,
	':shtepi_related_map' => $product_related_map
));
$markers_params = array(
	':id' => $product_related_map,
	':name' => $data['titull'],
	':lat' => $data['lat'],
	':lng' => $data['lng'],
	':type'=>'homegardenbusiness',
	':url' => $product_related_map, 
	':user_id' => $user_id
);
DB::query('INSERT INTO markers VALUES (:id, :name, address, :lat, :lng, :type, :url, :user_id)', $markers_params);
?>