<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// include database and object files
include_once '../config/database.php';
include_once '../objects/users.php';

// instantiate database and product object
$database = new Database();
$db = $database->getConnection();

// initialize object
$users = new User($db);

// query products
$stmt = $users->read();
$num = $stmt->rowCount();

// check if more than 0 record found
if($num>0){

    // products array
    $users_arr=array();
    $users_arr["records"]=array();

    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);

        $user_item=array(
          "user_id" => $user_id,
          "user_id_2" => $user_id_2,
          "first_name" => $first_name,
          "last_name" => $last_name,
          "email" => $email,
          "company" => $company,
          "phone_number" => $phone_number,
          "fax_number" => $fax_number,
          "address1" => $address1,
          "address2" => $address2,
          "city" => $city,
          "zip_code" => $zip_code,
          "state_code" => $state_code,
          "state_ln" => $state_ln,
          "country_code" => $country_code,
          "country_ln" => $country_ln,
          "website" => $website,
          "twitter" => $twitter,
          "youtube" => $youtube,
          "youtube_link2" => $youtube_link2,
          "facebook" => $facebook,
          "linkedin" => $linkedin,
          "blog" => $blog,
          "quote" => $quote,
          "experience" => $experience,
          "affiliation" => $affiliation,
          "awards" => $awards,
          "published" => $published,
          "education" => $education,
          "software" => $software,
          "fees" => $fees,
          "about_me" => $about_me,
          "featured" => $featured,
          "modtime" => $modtime,
          "subscription_id" => $subscription_id,
          "filename" => $filename,
          "box_style" => $box_style,
          "password" => $password,
          "active" => $active,
          "token" => $token,
          "ref_code" => $ref_code,
          "signup_date" => $signup_date,
          "cookie" => $cookie,
          "account_type" => $account_type,
          "page_title" => $page_title,
          "last_login" => $last_login,
          "testimonial" => $testimonial,
          "position" => $position,
          "bitly" => $bitly,
          "preferred" => $preferred,
          "profession_id" => $profession_id,
          "facebook_id" => $facebook_id,
          "facebook_username" => $facebook_username,
          "facebook_email" => $facebook_email,
          "verified" => $verified,
          "pre_hold" => $pre_hold,
          "link" => $link,
          "pinterest" => $pinterest,
          "nationwide" => $nationwide,
          "cv" => $cv,
          "work_experience" => $work_experience,
          "rep_matters" => $rep_matters,
          "speaking_engagements" => $speaking_engagements,
          "current_positions" => $current_positions,
          "gmap" => $gmap,
          "additional_fields" => $additional_fields,
          "video" => $video,
          "keywords" => $keywords,
          "google_plus" => $google_plus,
          "listing_type" => $listing_type,
          "phone_number2" => $phone_number2,
          "lat" => $lat,
          "lon" => $lon,
          "no_geo" => $no_geo,
          "credentials" => $credentials,
          "since" => $since,
          "lss_keywords" => $lss_keywords,
          "notes" => $notes,
          "private" => $private,
          "update_user_db" => $update_user_db,
          "public_key" => $public_key,
          "geo_state" => $geo_state,
          "specialties" => $specialties,
          "products" => $products,
          "categories" => $categories
        );


        array_push($users_arr["records"], $user_item);
    }

    echo json_encode($users_arr);
}

else{
    echo json_encode(
        array("message" => "No products found.")
    );
}
?>
