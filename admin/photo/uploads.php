<?PHP
include '../../DataBase/DB.php';
include '../../functions/Login.php';
LoggedIn::isLoggedIN();
$params = WhoIsLoggedIn::whoislogged();
$user_id = $params[0];

$postdata = file_get_contents("php://input");
$data     = json_decode($postdata, true);
if (isset($_FILES) && (count($_FILES)) > 0) {
    $cnt = count($_FILES);

    $last = DB::query('SELECT * FROM markers WHERE user_id=:user_id ORDER BY url DESC LIMIT 1', array(':user_id'=>$user_id));
    	foreach ($last as $key) {
    		$lastinsertid = $key['url'];
    	}

    foreach ($_FILES as $key => $file) {
        $filename      = basename($_FILES[$key]['name']);            
        $ext           = pathinfo($filename, PATHINFO_EXTENSION);
        $file1         = $_FILES[$key]['tmp_name'];
        $base_dir      = 'fileUpload/';
        $new_file_name = time() . '.' . $ext;
        $target        = $base_dir . date('YMDHI') . $filename;
        $move          = move_uploaded_file($file1, $target);
        DB::query('INSERT INTO photos VALUES (photo_id, :post_id, :user_id, :photo_name)', array(':post_id'=>$lastinsertid, ':user_id'=>$user_id, ':photo_name'=>date('YMDHI').$filename));
    }
    if ($move) {
    } else {
        echo json_encode(array(
            'status' => 'failure',
            'message' => 'Upload failed'
        ));
    }
    
} else {
    echo json_encode(array(
        'status' => 'failure',
       'message' => 'Select File'
    ));
}
?>