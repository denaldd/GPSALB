<?PHP 
include '../../DataBase/DB.php';
include '../../functions/Login.php';
LoggedIn::isLoggedIN();
$params = WhoIsLoggedIn::whoislogged();
$user_id = $params[0];

$post = DB::query('SELECT post_id FROM photos WHERE user_id = :user_id ORDER BY post_id DESC LIMIT 1', array(':user_id'=>$user_id));
foreach ($post as $key) {
	$post_id = $key['post_id'];
}

$photo = DB::query('SELECT photos.photo_name FROM photos WHERE photos.user_id = :user_id AND photos.post_id = :post_id', array(':user_id'=>$user_id, ':post_id'=>$post_id));

echo "<table width=50%>";
echo "<tr>";
foreach ($photo as $key) {
		$photos = $key['photo_name'];
		echo "<td>";
		echo "<img src='fileUpload/".$photos."' width='300' height='300' /> ";
		echo "</td>";
}
echo "</tr>";
echo "</table>";
?>