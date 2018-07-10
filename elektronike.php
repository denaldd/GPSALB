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

DB::query('INSERT INTO elektronike VALUES(elektronike_id, :elektronike_cmim, :elektronike_title, :elektronike_description, :elektronike_city, elektronike_shikime, :elektronike_sasia, elektronike_status, :user_id, :elektronike_related_map, :elektronike_date)', array(
	':elektronike_cmim' => $data['cmim'],
	':elektronike_title' => $data['titull'],
	':elektronike_description' => $data['pershkrim'],
	':elektronike_city' => $data['adrese'],
	':elektronike_sasia' => $data['sasia'],
	':user_id' => $user_id,
	':elektronike_related_map' => $product_related_map,
	':elektronike_date' =>$datapublikimit
));
$markers_params = array(
	':id' => $product_related_map,
	':name' => $data['titull'],
	':lat' => $data['lat'],
	':lng' => $data['lng'],
	':type'=> 'electronics',
	':url' => $product_related_map
);
DB::query('INSERT INTO markers VALUES (:id, :name, address, :lat, :lng, :type, :url)', $markers_params);

?>