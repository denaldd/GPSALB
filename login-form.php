<?php
include 'DataBase/DB.php'; 
$file = 'form2.txt';
$postdata = file_get_contents("php://input");     
$data = json_decode($postdata, true);
$userMail = $data['userMail'];
$userPass = $data['userPass'];


if (DB::query('SELECT user_mail FROM gps_users WHERE user_mail=:userMail', array(':userMail' => $userMail)))
    {
    if (DB::query('SELECT user_password FROM gps_users WHERE user_password=:userPass', array(':userPass' => $userPass)))
            {

                header('location: admin.php');
                $cstrong = True;
                $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
                $id = DB::query('SELECT user_id FROM gps_users WHERE user_mail=:userMail', array(
                    ':userMail' => $userMail
                )) [0]['user_id'];
                DB::query('INSERT INTO gps_login_tokens VALUES (id, :token, :id)', array(
                    ':token' => sha1($token) ,
                    'id' => $id
                ));
                setcookie("GPS", $token, time() + 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE);
                setcookie("1_", '1', time() + 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE);
            }

} 

?>