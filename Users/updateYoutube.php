<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// include database and object files
include_once '../config/database.php';
include_once '../objects/user.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare product object
$client = new User($db);

// get id of client to be edited
$data = json_decode(file_get_contents("php://input"));

// set ID property of client to be edited
$client->id = $data->id;

// set client property values

$client->youtube = $data->youtube;

// update the client
if($client->updateYoutube()){
    echo '{';
        echo '"message": "Client youtube was updated."';
    echo '}';
}
// if unable to update the client, tell the user
else{
    echo '{';
        echo '"message": "Unable to update Client youtube."';
    echo '}';
}
?>
