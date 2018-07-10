<?php
include 'DataBase/DB.php';   
$file = 'form2.txt';
$postdata = file_get_contents("php://input");     
$data = json_decode($postdata, true);

DB::query('INSERT INTO gps_users VALUES(user_id, :first_name, :last_name, :user_mail, :date_registered, :user_password, :user_adress, user_ip, user_last_login, user_online)', array(
        ':first_name'=>$data['firstName'],
        ':last_name'=>$data['lastName'],
        ':user_mail'=>$data['userEmail'],
        ':user_password'=>$data['userPassword'],
        ':user_adress'=>$data['userAddres'],
        ':date_registered'=>date('Y-M-l')
        ));


?>