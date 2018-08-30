<?php

# An HTTP POST request example

# a pass-thru script to call my Play server-side code.
# currently needed in my dev environment because Apache and Play run on
# different ports. (i need to do something like a reverse-proxy from
# Apache to Play.)

# the POST data we receive from Sencha (which is not JSON)

# data needs to be POSTed to the Play url as JSON.
# (some code from http://www.lornajane.net/posts/2011/posting-json-data-with-php-curl)
$data = array(
"user_id_2" => 3,
"first_name" => "hardif",
"email" => "hardif@hotmail.es",
"company" => "cadiharke",
"phone_number" => 22600254,
"fax_number" => 22600254,
"address1" => "heredia san rafael",
"city" => "heredia",
"zip_code" => "1234567",
"state_code" => "FL",
"country_code" => "US",
"active" => "active",
"website" => "www.facebook.com",
"twitter" => "www.facebook.com",
"youtube" => "www.facebook.com",
"youtube_link2" => "www.facebook.com",
"facebook" => "www.facebook.com",
"linkedin" => "www.facebook.com",
"about_me" => "about me",
"google_plus" => "google plus",
"blog" => "blog",
"affiliation" => "aff",
"rep_matters" => "rep_matters",
"lss_keywords" => "keywords",
"since" => date('Y-m-d H:i:s'),
"categories" => "categories",
"awards" => "awards",
"quote" => "quote",
"notes" => "notes",
"private" => "private",
"filename" => "filename",
"update_user_db" => "update_user_db",
"account_type" => "account_type",
"public_key" => "public_key",
"lss_order_id" => "lss_order_id");
$data_string = json_encode($data);


//$ch = curl_init('http://www.site.cards/api/users/create.php');
$ch = curl_init('http://localhost/api/Users/create.php');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);

echo $result;

?>
