<?php

// Github Username and Password
$username = '';
$password = '';

// Archive

$repo = 'iOS';

//Path to save zip file

$path = 'iOS.zip';


// URL Generation 
$url = 'https://github.com/'.$username .'/'.$repo.'/archive/master.zip';

 
    $fp = fopen($path, 'w');
 
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
    curl_setopt($ch, CURLOPT_FILE, $fp);
 
    $data = curl_exec($ch);
 
    curl_close($ch);
    fclose($fp);
    
?>