<?php
/**
 * Created by PhpStorm.
 * User: 'Patrick
 * Date: 13/12/2014
 * Time: 08:52
 */

//$servername = "localhost";
//$username = "root";
//$password = "";
//$db = "bikeon";

$servername = "localhost";
$username = "ia8combr_bikeon";
$password = "ia8bikeon!@#";
$db = "ia8combr_bikeon";

$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$return_arr = array();
$fetch = mysqli_query($conn,"SELECT * FROM parkings");

while ($row = mysqli_fetch_array($fetch,MYSQLI_BOTH)) {
    $row_array['id'] = $row['id'];
    $row_array['latitude'] = $row['latitude'];
    $row_array['longitude'] = $row['longitude'];
    $row_array['local'] = $row['local'];
    array_push($return_arr,$row_array);
}

echo json_encode(utf8ize($return_arr));

function utf8ize($d) {
    if (is_array($d)) {
        foreach ($d as $k => $v) {
            $d[$k] = utf8ize($v);
        }
    } else if (is_string ($d)) {
        return utf8_encode($d);
    }
    return $d;
}



