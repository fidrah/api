<?php
class User{

    // database connection and table name
    private $conn;
    private $table_name = "users_data";

    // object properties
    public $user_id;
    public $user_id_2;
    public $first_name;
    public $last_name;
    public $email;
    public $company;
    public $phone_number;
    public $fax_number;
    public $address1;
    public $address2;
    public $city;
    public $zip_code;
    public $state_code;
    public $state_ln;
    public $country_code;
    public $country_ln;
    public $website;
    public $twitter;
    public $youtube;
    public $youtube_link2;
    public $facebook;
    public $linkedin;
    public $blog;
    public $quote;
    public $experience;
    public $affiliation;
    public $awards;
    public $published;
    public $education;
    public $software;
    public $fees;
    public $about_me;
    public $featured;
    public $modtime;
    public $subscription_id;
    public $filename;
    public $box_style;
    public $password;
    public $active;
    public $token;
    public $ref_code;
    public $signup_date;
    public $cookie;
    public $account_type;
    public $page_title;
    public $last_login;
    public $testimonial;
    public $position;
    public $bitly;
    public $preferred;
    public $profession_id;
    public $facebook_id;
    public $facebook_username;
    public $facebook_email;
    public $verified;
    public $pre_hold;
    public $link;
    public $pinterest;
    public $nationwide;
    public $cv;
    public $work_experience;
    public $rep_matters;
    public $speaking_engagements;
    public $current_positions;
    public $gmap;
    public $additional_fields;
    public $video;
    public $keywords;
    public $google_plus;
    public $listing_type;
    public $phone_number2;
    public $lat;
    public $lon;
    public $no_geo;
    public $credentials;
    public $since;
    public $lss_keywords;
    public $notes;
    public $private;
    public $update_user_db;
    public $public_key;
    public $geo_state;
    public $specialties;
    public $products;
    public $categories;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

  function read(){

    // select all query
    $query = "SELECT * FROM " . $this->table_name . " ORDER BY user_id DESC LIMIT 1000";

    // prepare query statement
    $stmt = $this->conn->prepare($query);

    // execute query
    $stmt->execute();

    return $stmt;
 }//last read line

 // create client
function create(){

    // query to insert record
    $query = "INSERT INTO
                " . $this->table_name . "
            SET
            user_id_2=:user_id_2,
            first_name=:first_name,
            email=:email,
            company=:company,
            phone_number=:phone_number,
            fax_number=:fax_number,
            address1=:address1,
            city=:city,
            zip_code=:zip_code,
            state_code=:state_code,
            country_code=:country_code,
            country_ln=:country_ln,
            website=:website,
            twitter=:twitter,
            youtube=:youtube,
            youtube_link2=:youtube_link2,
            facebook=:facebook,
            linkedin=:linkedin,
            subscription_id=:subscription_id,
            active=:active,
            token=:token,
            about_me=:about_me,
            google_plus=:google_plus,
            blog=:blog,
            affiliation=:affiliation,
            rep_matters=:rep_matters,
            lss_keywords=:lss_keywords,
            since=:since,
            categories=:categories,
            awards=:awards,
            quote=:quote,
            notes=:notes,
            private=:private,
            filename=:filename,
            update_user_db=:update_user_db,
            account_type=:account_type,
            public_key=:public_key";

    // prepare query
    //die($this->conn->prepare($query));
    $stmt = $this->conn->prepare($query);

    // sanitize
    $this->user_id_2=htmlentities(strip_tags($this->user_id_2));
    $this->first_name=htmlentities(strip_tags($this->first_name));
    $this->email=htmlentities(strip_tags($this->email));
    $this->company=htmlentities(strip_tags($this->company));
    $this->phone_number=htmlentities(strip_tags($this->phone_number));
    $this->fax_number=htmlentities(strip_tags($this->fax_number));
    $this->address1=htmlentities(strip_tags($this->address1));
    $this->city=htmlentities(strip_tags($this->city));
    $this->zip_code=htmlentities(strip_tags($this->zip_code));
    $this->state_code=htmlentities(strip_tags($this->state_code));
    $this->country_code=htmlentities(strip_tags($this->country_code));
    $this->country_ln=htmlentities(strip_tags($this->country_ln));
    $this->website=htmlentities(strip_tags($this->website));
    $this->twitter=htmlentities(strip_tags($this->twitter));
    $this->youtube=htmlentities(strip_tags($this->youtube));
    $this->youtube_link2=htmlentities(strip_tags($this->youtube_link2));
    $this->facebook=htmlentities(strip_tags($this->facebook));
    $this->linkedin=htmlentities(strip_tags($this->linkedin));
    $this->subscription_id=htmlentities(strip_tags($this->subscription_id));
    $this->active=htmlentities(strip_tags($this->active));
    $this->token=htmlentities(strip_tags($this->token));
    $this->about_me=htmlentities(strip_tags($this->about_me));
    $this->google_plus=htmlentities(strip_tags($this->google_plus));
    $this->blog=htmlentities(strip_tags($this->blog));
    $this->affiliation=htmlentities(strip_tags($this->affiliation));
    $this->rep_matters=htmlentities(strip_tags($this->rep_matters));
    $this->lss_keywords=htmlentities(strip_tags($this->lss_keywords));
    $this->since=htmlentities(strip_tags($this->since));
    $this->categories=htmlentities(strip_tags($this->categories));
    $this->awards=htmlentities(strip_tags($this->awards));
    $this->quote=htmlentities(strip_tags($this->quote));
    $this->notes=htmlentities(strip_tags($this->notes));
    $this->private=htmlentities(strip_tags($this->private));
    $this->filename=htmlentities(strip_tags($this->filename));
    $this->update_user_db=htmlentities(strip_tags($this->update_user_db));
    $this->account_type=htmlentities(strip_tags($this->account_type));
    $this->public_key=htmlentities(strip_tags($this->public_key));


    // bind values

    $stmt->bindParam(":user_id_2",$this->user_id_2);
    $stmt->bindParam(":first_name",$this->first_name);
    $stmt->bindParam(":email",$this->email);
    $stmt->bindParam(":company",$this->company);
    $stmt->bindParam(":phone_number",$this->phone_number);
    $stmt->bindParam(":fax_number",$this->fax_number);
    $stmt->bindParam(":address1",$this->address1);
    $stmt->bindParam(":city",$this->city);
    $stmt->bindParam(":zip_code",$this->zip_code);
    $stmt->bindParam(":state_code",$this->state_code);
    $stmt->bindParam(":country_code",$this->country_code);
    $stmt->bindParam(":country_ln",$this->country_ln);
    $stmt->bindParam(":website",$this->website);
    $stmt->bindParam(":twitter",$this->twitter);
    $stmt->bindParam(":youtube",$this->youtube);
    $stmt->bindParam(":youtube_link2",$this->youtube_link2);
    $stmt->bindParam(":facebook",$this->facebook);
    $stmt->bindParam(":linkedin",$this->linkedin);
    $stmt->bindParam(":subscription_id",$this->subscription_id);
    $stmt->bindParam(":active",$this->active);
    $stmt->bindParam(":token",$this->token);
    $stmt->bindParam(":about_me",$this->about_me);
    $stmt->bindParam(":google_plus",$this->google_plus);
    $stmt->bindParam(":blog",$this->blog);
    $stmt->bindParam(":affiliation",$this->affiliation);
    $stmt->bindParam(":rep_matters",$this->rep_matters);
    $stmt->bindParam(":lss_keywords",$this->lss_keywords);
    $stmt->bindParam(":since",$this->since);
    $stmt->bindParam(":categories",$this->categories);
    $stmt->bindParam(":awards",$this->awards);
    $stmt->bindParam(":quote",$this->quote);
    $stmt->bindParam(":notes",$this->notes);
    $stmt->bindParam(":private",$this->private);
    $stmt->bindParam(":filename",$this->filename);
    $stmt->bindParam(":update_user_db",$this->update_user_db);
    $stmt->bindParam(":account_type",$this->account_type);
    $stmt->bindParam(":public_key",$this->public_key);



    // execute query
    //die($stmt);

    print_r($stmt);

    if($stmt->execute()){
      /*  $filename = $this->filename;
        $clientId = $this->user_id_2;
        $sendUrl = "";
        $sendUrl = 'http://www.site.cards/' . $filename;
        $dataUrl = array(
        'client' => $clientId,
        'directory' => 'sitecards',
        'success' => 'true',
        'action'=> "submit",
        'data' => array(
             'url' => $sendUrl
        ),
        'url' => $sendUrl,
        'error' => null
        );

        $data_string = json_encode($dataUrl);

        $chUrl = curl_init('http://p.lssdev.com/legacysubmissiondatas');
        curl_setopt($chUrl, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($chUrl, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($chUrl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($chUrl, CURLOPT_HTTPHEADER, array(
                'x-api-token: 76275900a5195b0c02a6eefe513c0531',
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data_string)
            )
        );
        curl_setopt($chUrl, CURLOPT_TIMEOUT, 5);
        curl_setopt($chUrl, CURLOPT_CONNECTTIMEOUT, 5);

        //execute post
        curl_exec($chUrl);
        /*echo $resultUrl;
        echo '<br>';
        //close connection
        curl_close($chUrl);*/

        return true;
    }

    return false;

}//last create line

function searchByClientId(){

    // query to read single record

    $query = "SELECT * FROM
                " . $this->table_name . "  WHERE user_id_2 = ?
            LIMIT 0,1";

    // prepare query statement
    $stmt = $this->conn->prepare($query);

    // bind id
    $stmt->bindParam(1, $this->id);
    // execute query
    $stmt->execute();

    return $stmt;


}// final searchByClientId line

function searchByClientZipCode(){

    // query to read single record

    $query = "SELECT * FROM
                " . $this->table_name . "  WHERE zip_code = ? ";

                //LIMIT 0,1
    // prepare query statement
    $stmt = $this->conn->prepare($query);

    // bind id
    $stmt->bindParam(1, $this->zip_code);
    // execute query
    $stmt->execute();

    return $stmt;


}// final searchByClientZipCode line

function searchByClientBusinessName(){

    // query to read single record

    $query = "SELECT * FROM
                " . $this->table_name . "  WHERE company = ? ";

    // prepare query statement
    $stmt = $this->conn->prepare($query);

    // bind id
    $stmt->bindParam(1, $this->company);
    // execute query
    $stmt->execute();

    return $stmt;


}// final searchByClientBusinessName line

function searchByClientPhoneNumber(){

    // query to read single record

    $query = "SELECT * FROM
                " . $this->table_name . "  WHERE phone_number = ? ";

    // prepare query statement
    $stmt = $this->conn->prepare($query);

    // bind id
    $stmt->bindParam(1, $this->phone_number);
    // execute query
    $stmt->execute();

    return $stmt;


}// final searchByClientPhoneNumber line

// delete the Client
function delete(){

    // delete query
    $query = "DELETE FROM " . $this->table_name . " WHERE user_id_2 = ?";

    // prepare query
    $stmt = $this->conn->prepare($query);

    // sanitize
    $this->id=htmlspecialchars(strip_tags($this->id));

    // bind id of record to delete
    $stmt->bindParam(1, $this->id);

    // execute query
    if($stmt->execute()){
        return true;
    }

    return false;

}
// update the product
function update(){

    // update query
    $query = "UPDATE
                " . $this->table_name . "
            SET
                name = :name,
                price = :price,
                description = :description,
                category_id = :category_id
            WHERE
                id = :id";

    // prepare query statement
    $stmt = $this->conn->prepare($query);

    // sanitize
    $this->name=htmlspecialchars(strip_tags($this->name));
    $this->price=htmlspecialchars(strip_tags($this->price));
    $this->description=htmlspecialchars(strip_tags($this->description));
    $this->category_id=htmlspecialchars(strip_tags($this->category_id));
    $this->id=htmlspecialchars(strip_tags($this->id));

    // bind new values
    $stmt->bindParam(':name', $this->name);
    $stmt->bindParam(':price', $this->price);
    $stmt->bindParam(':description', $this->description);
    $stmt->bindParam(':category_id', $this->category_id);
    $stmt->bindParam(':id', $this->id);

    // execute the query
    if($stmt->execute()){
        return true;
    }

    return false;
}

/*-------------------------
**************UPDATES
---------------------------*/

// update the Client company
function updateCompany(){

    // update query
    $query = "UPDATE " . $this->table_name . " SET company=:company WHERE user_id_2 = :id";

    // prepare query statement
    $stmt = $this->conn->prepare($query);

    // sanitize
    $this->company=htmlspecialchars(strip_tags($this->company));
    $this->id=htmlspecialchars(strip_tags($this->id));

    // bind new values
    $stmt->bindParam(':company', $this->company);
    $stmt->bindParam(':id', $this->id);

    // execute the query
    if($stmt->execute()){
        return true;
    }

    return false;
}

// update the Client City
function updateCity(){

    // update query
    $query = "UPDATE " . $this->table_name . " SET city=:city WHERE user_id_2 = :id";

    // prepare query statement
    $stmt = $this->conn->prepare($query);

    // sanitize
    $this->city=htmlspecialchars(strip_tags($this->city));
    $this->id=htmlspecialchars(strip_tags($this->id));

    // bind new values
    $stmt->bindParam(':city', $this->city);
    $stmt->bindParam(':id', $this->id);


    // execute the query
    if($stmt->execute()){
        return true;
    }

    return false;
}

// update the Client Description
function updateDescription(){

    // update query
    $query = "UPDATE " . $this->table_name . " SET about_me=:description WHERE user_id_2 = :id";

    // prepare query statement
    $stmt = $this->conn->prepare($query);

    // sanitize
    $this->description=htmlspecialchars(strip_tags($this->description));
    $this->id=htmlspecialchars(strip_tags($this->id));

    // bind new values
    $stmt->bindParam(':description', $this->description);
    $stmt->bindParam(':id', $this->id);


    // execute the query
    if($stmt->execute()){
        return true;
    }

    return false;
}

// update the Client Email
function updateEmail(){

    // update query
    $query = "UPDATE " . $this->table_name . " SET email=:email WHERE user_id_2 = :id";

    // prepare query statement
    $stmt = $this->conn->prepare($query);

    // sanitize
    $this->email=htmlspecialchars(strip_tags($this->email));
    $this->id=htmlspecialchars(strip_tags($this->id));

    // bind new values
    $stmt->bindParam(':email', $this->email);
    $stmt->bindParam(':id', $this->id);


    // execute the query
    if($stmt->execute()){
        return true;
    }

    return false;
}

// update the Client Facebook
function updateFacebook(){

    // update query
    $query = "UPDATE " . $this->table_name . " SET facebook=:facebook WHERE user_id_2 = :id";

    // prepare query statement
    $stmt = $this->conn->prepare($query);

    // sanitize
    $this->facebook=htmlspecialchars(strip_tags($this->facebook));
    $this->id=htmlspecialchars(strip_tags($this->id));

    // bind new values
    $stmt->bindParam(':facebook', $this->facebook);
    $stmt->bindParam(':id', $this->id);


    // execute the query
    if($stmt->execute()){
        return true;
    }

    return false;
}

// update the Client Fax
function updateFax(){

    // update query
    $query = "UPDATE " . $this->table_name . " SET fax_number=:fax WHERE user_id_2 = :id";

    // prepare query statement
    $stmt = $this->conn->prepare($query);

    // sanitize
    $this->fax=htmlspecialchars(strip_tags($this->fax));
    $this->id=htmlspecialchars(strip_tags($this->id));

    // bind new values
    $stmt->bindParam(':fax', $this->fax);
    $stmt->bindParam(':id', $this->id);


    // execute the query
    if($stmt->execute()){
        return true;
    }

    return false;
}

// update the Client Linkedin
function updateLinkedin(){

    // update query
    $query = "UPDATE " . $this->table_name . " SET linkedin=:linkedin WHERE user_id_2 = :id";

    // prepare query statement
    $stmt = $this->conn->prepare($query);

    // sanitize
    $this->linkedin=htmlspecialchars(strip_tags($this->linkedin));
    $this->id=htmlspecialchars(strip_tags($this->id));

    // bind new values
    $stmt->bindParam(':linkedin', $this->linkedin);
    $stmt->bindParam(':id', $this->id);


    // execute the query
    if($stmt->execute()){
        return true;
    }

    return false;
}

// update the Client OwnerName
function updateClientName(){

    // update query
    $query = "UPDATE " . $this->table_name . " SET first_name=:clientName WHERE user_id_2 = :id";

    // prepare query statement
    $stmt = $this->conn->prepare($query);

    // sanitize
    $this->ownerName=htmlspecialchars(strip_tags($this->clientName));
    $this->id=htmlspecialchars(strip_tags($this->id));

    // bind new values
    $stmt->bindParam(':clientName', $this->clientName);
    $stmt->bindParam(':id', $this->id);


    // execute the query
    if($stmt->execute()){
        return true;
    }

    return false;
}
}
