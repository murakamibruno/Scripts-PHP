<?php
 

 
// array for JSON response
$response = array();
 
// include db connect class
require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();
 
// check for post data
if (isset($_GET["course"])) {
    $course = $_GET['course'];
 
    // get a course from products table
    $result = mysql_query("SELECT *FROM tutor WHERE course = $course");
 
    if (!empty($result)) {
        // check for empty result
        if (mysql_num_rows($result) > 0) {
 
            $result = mysql_fetch_array($result);
 
            $tutor = array();
            $tutor["first_name"] = $result["first_name"];
            $tutor["last_name"] = $result["last_name"];
            $tutor["course"] = $result["course"];
            $tutor["time"] = $result["time"];
			$tutor["location"] = $result["location"];

            // success
            $response["success"] = 1;
 
            // user node
            $response["tutor"] = array();
 
            array_push($response["tutor"], $tutor);
 
            // echoing JSON response
            echo json_encode($response);
        } else {
            // no product found
            $response["success"] = 0;
            $response["message"] = "No product found";
 
            // echo no users JSON
            echo json_encode($response);
        }
    } else {
        // no product found
        $response["success"] = 0;
        $response["message"] = "No tutor found";
 
        // echo no users JSON
        echo json_encode($response);
    }
} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    // echoing JSON response
    echo json_encode($response);
}
?>