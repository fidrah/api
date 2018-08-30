<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// include database and object files
include_once '../config/database.php';
include_once '../objects/users.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare product object
$client = new User($db);

// get id of client to be edited
$data = json_decode(file_get_contents("php://input"));
echo  $client->user_id_2;
// set ID property of client to be edited
$client->user_id_2 = $data->user_id_2;

// set client property values

$client->company = $data->company;

// update the client
if($client->updateCompany()){
    echo '{';
        echo '"message": "Client Business Name was updated."';
    echo '}';
}
// if unable to update the client, tell the user
else{
    echo '{';
        echo '"message": "Unable to update Client Business Name."';
    echo '}';
}
?>
