<?php
session_start();// TODOcalling session start to get the site variables 
include("functions.php");
//File uploading functions
$target_dir="uploads/";
$target_file=$target_dir.basename($_FILES["FileToEncrypt"]["name"]);
$image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
move_uploaded_file($_FILES["FileToEncrypt"]["tmp_name"], $target_file);
//================================================================================================
//Encryption steps
$data = file_get_contents($target_file); //Get the file contents as a string
$encryption_key = ModifyInput($_POST["EncryptionKey"]); //Get the encryption key
$mode = ModifyInput($_POST["Mode"]); //Get the mode
$key_size = ModifyInput($_POST["KeySize"]); //Get the key size

$encrypted_data=encrypt($data,$key,$mode,$key_size); //Encrypting
//save the encrypted data into a file
file_put_contents("encrypted_data.".$image_file_type,$encrypted_data);
//================================================================
//File uploading to the client 
 header("content-type: text/plain");
 header("content-disposition: attachment; filename=encrypted_data." . $image_file_type);
 readfile("encrypted_data.".$image_file_type);
 header("location:../encryptions.php");
 die(); //endinng the script
//keykeykeykeykeyk -16byte example
//keykeykeykeykeykeykeykey-24byte example
//keykeykeykeykeykeykeykeykeykeyke-32byte example
