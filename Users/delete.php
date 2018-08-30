<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


// include database and object file
include_once '../config/database.php';
include_once '../objects/users.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare product object
$client = new User($db);

// get client id
$data = json_decode(file_get_contents("php://input"));
print_r($data);
// set client id to be deleted
$client->id = $data->id;
echo "hello";
// delete the client
if($client->delete()){
    echo '{';
        echo '"message": "Client was deleted."';
    echo '}';
}

// if unable to delete the client
else{
    echo '{';
        echo '"message": "Unable to delete object."';
    echo '}';
}
?>
