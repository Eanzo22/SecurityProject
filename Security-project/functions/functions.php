<?php
function encrypt($data, $key, $mode, $block_size)
{
    $iv = "U�1��yU3>ݏ4F,"; //initial vector 
    $encrypted_data ="";//initializing data
    $cipher = "aes-" . $block_size . "-" . $mode;//specifying encryption scheme to the OpenSSl function
    
     if ($mode === "ecb")  // user chose ECB encryption mode of operation 
    {   // ecb encryption
        $encrypted_data = openssl_encrypt($data, $cipher, $key, OPENSSL_RAW_DATA);
    }
     elseif ($mode === "cbc") //user chose CBC encryption mode of operation
    {   //cbc encryption
        $encrypted_data = openssl_encrypt($data, $cipher, $key, 0, $iv);
    }
     elseif ($mode === "ctr")//user chose CTR encryption mode of operation 
    { //ctr encryption
        $encrypted_data = openssl_encrypt($data, $cipher, $key, OPENSSL_RAW_DATA, $iv);
    }
    return  $encrypted_data;//return $encrypted_data
}

    function decrypt($data, $key, $mode, $block_size)
{
   
    $iv = "U�1��yU3>ݏ4F,"; //initial vector of decryption
    $decrypted_data = ""; //initialization of decrypted data
    $cipher = "aes-" . $block_size . "-" . $mode;////specifying encryption scheme to the OpenSSl function

     if ($mode === "ecb") //user chose ECB decryption mode of operation
    {  //ecb decryption
        $decrypted_data = openssl_decrypt($data, $cipher, $key, OPENSSL_RAW_DATA);
    }
     elseif ($mode === "cbc")//user chose CBC decryption mode of operation 
    {   //cbc decryption
        $decrypted_data = openssl_decrypt($data, $cipher, $key, 0, $iv);
    }
     elseif ($mode === "ctr")//user chose CTR decryption mode of operation
    {   //ctr decryption
        $decrypted_data = openssl_decrypt($data, $cipher, $key, OPENSSL_RAW_DATA, $iv);
    }
    return $decrypted_data;//return decrypted data
}
function ModifyInput($input)//to modify input string from spaces 
{
    return trim(htmlspecialchars(htmlentities($input)));
}