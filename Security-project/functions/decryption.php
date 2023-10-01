<?php
session_start();//calling session start to get the site variables 
include("functions.php");
//File uploading functions
$target_dir="uploads/";
$target_file=$target_dir.basename($_FILES["FileToDecrypt"]["name"]);
$image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
move_uploaded_file($_FILES["FileToDecrypt"]["tmp_name"], $target_file);
//================================================================
//Decryption steps
$data = file_get_contents($target_file);//getting file as a string
$decryption_key =ModifyInput($_POST["DecryptionKey"]);//getting the decryption key
$mode = ModifyInput($_POST["Mode"]);// getting the mode
$key_size =ModifyInput( $_POST["KeySize"]); // getting the key size

$decrypted_data=decrypt($data,$key,$mode,$key_size); //Decrypting the image
// saving the decrypted data into a file
file_put_contents("decrypted_data.".$image_file_type,$decrypted_data);
//================================================================
//uploading the file to the client side 
header("content-type: text/plain");
header("content-transfer-encoding:utf-8");
header("content-disposition: attachment; filename=decrypted_data.".$image_file_type);
readfile("decrypted_data." . $image_file_type);
header("location:../decryptions.php");
die();
//keykeykeykeykeyk -16byte example
//keykeykeykeykeykeykeykey-24byte example
//keykeykeykeykeykeykeykeykeykeyke-32byte example
?>
