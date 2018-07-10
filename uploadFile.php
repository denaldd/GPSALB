<?PHP
//include 'DataBase/DB.php';
//$postdata = file_get_contents("php://input");
//$data     = json_decode($postdata, true);
//if (isset($_FILES) && (count($_FILES)) > 0) {
//    $cnt = count($_FILES);
//    foreach ($_FILES as $key => $file) {
//        $filename      = basename($_FILES[$key]['name']);
        //echo '<pre>';print_r($filename);            
//        $ext           = pathinfo($filename, PATHINFO_EXTENSION);
//        $file1         = $_FILES[$key]['tmp_name'];
//        $base_dir      = 'fileUpload/';
//        $new_file_name = time() . '.' . $ext;
//        $target        = $base_dir . $filename;
//        $move          = move_uploaded_file($file1, $target);
//    }
//    if ($move) {
/*        DB::query('INSERT INTO products VALUES(product_id, product_title, :product_description, product_email, product_telephone, product_price, product_user_ip, product_related_map, product_category, product_photo, product_date, product_code, product_view)', array(
            ':product_description' => $data['userMail']
        ));*/
//        echo json_encode(array(
//            'status' => $data['userMail'],
//            'message' => $data['userFile']
//        ));
//    } else {
//        echo json_encode(array(
//            'status' => 'failure',
//            'message' => 'Upload failed'
//        ));
//    }
//    
//} else {
//    echo json_encode(array(
//        'status' => 'failure',
//       'message' => 'Select File'
//    ));
//}
?>

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
	':url' => $product_related_map
);
DB::query('INSERT INTO markers VALUES (:id, :name, address, :lat, :lng, :type, :url)', $markers_params);
?>