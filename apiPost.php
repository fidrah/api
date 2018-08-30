<?php

$data = array(
"user_id_2" => id,//required
"first_name" => owner,
"email" => email,
"company" => business_name,//required
"phone_number" => phone,
"fax_number" => fax,
"address1" => street,
"city" => city,//required
"zip_code" => zipcode,
"state_code" => state,
"country_code" => country,
"active" => status,
"website" => website,
"twitter" => twitter,
"youtube" => d22,
"youtube_link2" => d23,
"facebook" => facebook,
"linkedin" => linkedin,
"about_me" => description,
"affiliation" => payment,
"rep_matters" => hours,
"lss_keywords" => ,
"since" => since,
"notes" => notes,
"public_key" => publicKey);
$data_string = json_encode($data);


$ch = curl_init('http://www.site.cards/api/users/create.php');
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
