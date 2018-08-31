<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// get database connection
include_once '../config/database.php';

// instantiate product object
include_once '../objects/user.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

// get posted data
$data = json_decode(file_get_contents("php://input"));

//build token for site.cards
$length = 32;
$characters = '0123456789abcdefghijklmnopqrstuvwxyz';
$charactersLength = strlen($characters);
$token = '';
for ($count = 0; $count < $length; $count++) {
    $token .= $characters[rand(0, $charactersLength - 1)];
}

// if is active or not
$status = 2;
//print_r($data);
if ($data->active == 'Active') {
    $status = 2;
}else{
    $status = 1;
}
// set correct country names
$country_ln = "";
if($data->country_code == 'US'){
    $country_ln = "United States";
}else if($data->country_code == 'CA'){
    $country_ln = "Canada";
}else if($data->country_code == 'GB'){
    $country_ln = "United Kingdom";
}else if($data->country_code == 'AU'){
    $country_ln = "Australia";
}else if($data->country_code == 'DE'){
    $country_ln = "Germany";
}else if($data->country_code == 'NZ'){
    $country_ln = "New Zealand";
}else{
    $country_ln = $data->country_code;
}
// Site.card url

$company = str_replace("'", "", $data->company);
$urlNew = trim($company);
$filename = $data->user_id_2 . "/" . str_replace(" ", "-", $data->city) . "/" . str_replace(" ", "-", $urlNew);

// set product property values
$user->user_id_2 = $data->user_id_2;
$user->first_name = $data->first_name;
$user->email = $data->email;
$user->company = $data->company;
$user->phone_number = $data->phone_number;
$user->fax_number = $data->fax_number;
$user->address1 = $data->address1;
$user->city = $data->city;
$user->zip_code = $data->zip_code;
$user->state_code = $data->state_code;
$user->country_code = $data->country_code;
$user->country_ln = $country_ln;
$user->website = $data->website;
$user->twitter = $data->twitter;
$user->youtube = $data->youtube;
$user->youtube_link2 = $data->youtube_link2;
$user->facebook = $data->facebook;
$user->linkedin = $data->linkedin;
$user->subscription_id = 1;
$user->active = $status;
$user->token = $token;
$user->about_me = $data->about_me;
$user->google_plus = $data->google_plus;
$user->blog = $data->blog;
$user->affiliation = $data->affiliation;
$user->rep_matters = $data->rep_matters;
$user->lss_keywords = $data->lss_keywords;
$user->since = $data->since;
$user->categories = $data->categories;
$user->awards = $data->awards;
$user->quote = $data->quote;
$user->notes = $data->notes;
$user->private = $data->private;
$user->filename = $filename;
$user->update_user_db = $data->update_user_db;
$user->account_type = "pro";
$user->public_key = $data->public_key;
$user->lss_order_i = $data->lss_order_id;


// create the product
if($user->create()){
    echo '{';
        echo '"message": "Product was created."';
    echo '}';
}

// if unable to create the product, tell the user
else{
    echo '{';
        echo '"message": "Unable to create product."';
    echo '}';
}
?>
