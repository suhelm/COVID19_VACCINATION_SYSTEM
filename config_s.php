<?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "SUMMER_MIDTERM";

$servername = "ojc353.encs.concordia.ca";
$username = "ojc353_1";
$password = "2XLander";
$dbname = "ojc353_1";


// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($mysqli ->connect_error) {
    die("Connection failed: " . $mysqli ->connect_error);
}



function getAllPerson()
{
    global $mysqli;
    $query = "SELECT  PERSON_ID ,PERSON_NAME from PERSON";
    $result = mysqli_query($mysqli, $query);
    //$numRows=mysqli_num_rows($result);
    $regions = array();
    while ($row = $result->fetch_row()) {
        echo  "<option value=$row[0] >$row[0] - $row[1] $row[2] </option>";
        $regions[]=$row;
    }
    return $regions;
}

function getFacilityWorker()
{
    global $mysqli;
    $query = "select HEALTH_WORKER_ID,FIRST_NAME,LAST_NAME from PERSON where HEALTH_WORKER='Y'";
    $result = mysqli_query($mysqli, $query);
    //$numRows=mysqli_num_rows($result);
    $regions = array();
    while ($row = $result->fetch_row()) {
        echo  "<option value=$row[0] >$row[0] - $row[1] $row[2] </option>";
        $regions[]=$row;
    }
    return $regions;
}




?>