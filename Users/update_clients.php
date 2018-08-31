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
$client = new Product($db);

// get id of client to be edited
$data = json_decode(file_get_contents("php://input"));

// set ID property of client to be edited
$user->user_id_2 = $data->id;

// set client property values
$user->first_name = ($data->first_name != "") ? $data->first_name : $user->first_name;
$user->email = ($data->email != "") ? $data->email : $user->email;
$user->company = ($data->company != "") ? $data->company : $user->company;
$user->phone_number = ($data->phone_number != "") ? $data->phone_number : $user->phone_number;
$user->fax_number = ($data->fax_number != "") ? $data->fax_number : $user->fax_number;
$user->address1 = ($data->address1 != "") ? $data->address1 : $user->address1;
$user->city = ($data->city != "") ? $data->city : $user->city;
$user->zip_code = ($data->zip_code != "") ? $data->zip_code : $user->zip_code;
$user->state_code = ($data->state_code != "") ? $data->state_code : $user->state_code;
$user->country_code = ($data->country_code != "") ? $data->country_code : $user->country_code;
$user->country_ln = $country_ln;
$user->website = ($data->website != "") ? $data->website : $user->website;
$user->twitter = ($data->twitter != "") ? $data->twitter : $user->twitter;
$user->youtube = ($data->youtube != "") ? $data->youtube : $user->youtube;
$user->youtube_link2 = ($data->youtube_link2 != "") ? $data->youtube_link2 : $user->youtube_link2;
$user->facebook = ($data->facebook != "") ? $data->facebook : $user->facebook;
$user->linkedin = ($data->linkedin != "") ? $data->linkedin : $user->linkedin;
$user->about_me = ($data->about_me != "") ? $data->about_me : $user->about_me;
$user->google_plus = ($data->google_plus != "") ? $data->google_plus : $user->google_plus;
$user->blog = ($data->blog != "") ? $data->blog : $user->blog;
$user->affiliation = ($data->affiliation != "") ? $data->affiliation : $user->affiliation;
$user->rep_matters = ($data->rep_matters != "") ? $data->rep_matters : $user->rep_matters;
$user->lss_keywords = ($data->lss_keywords != "") ? $data->lss_keywords : $user->lss_keywords;
$user->since = ($data->since != "") ? $data->since : $user->since;
$user->categories = ($data->categories != "") ? $data->categories : $user->categories;
$user->awards = ($data->awards != "") ? $data->awards : $user->awards;
$user->quote = ($data->quote != "") ? $data->quote : $user->quote;
$user->notes = ($data->notes != "") ? $data->notes : $user->notes;
$user->private = ($data->private != "") ? $data->private : $user->private;
$user->update_user_db = ($data->update_user_db != "") ? $data->update_user_db : $user->update_user_db;
$user->public_key = ($data->public_key != "") ? $data->public_key : $user->public_key;
$user->lss_order_i = ($data->lss_order_id != "") ? $data->lss_order_id : $user->lss_order_i;

// update the client
if($client->update()){
    echo '{';
        echo '"message": "Client was updated."';
    echo '}';
}
// if unable to update the client, tell the user
else{
    echo '{';
        echo '"message": "Unable to update Client."';
    echo '}';
}
?>
