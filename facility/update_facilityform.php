

<html>
<head>
    <link rel="stylesheet" href="../style.css">
</head>

<div class="container">
    <div class="a-6WXKx-0"><?php include '../menu.php';?></div>

    <div class="main">
        <?php
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['updateData'])) {
            include('../config.php');
            global $mysqli;

            $id = (isset($_POST['fid'])) ? $_POST['fid'] : null;
            $facilityname= (isset($_POST['facilityname'])) ? $_POST['facilityname'] : null;
            $address = (isset($_POST['address'])) ? $_POST['address'] : null;
            $city = (isset($_POST['city'])) ? $_POST['city'] : null;
            $province = (isset($_POST['province'])) ? $_POST['province'] : null;
            $phone = (isset($_POST['phone'])) ? $_POST['phone'] : null;
            $website = (isset($_POST['website'])) ? $_POST['website'] : null;
            $ftype = (isset($_POST['ftype'])) ? $_POST['ftype'] : null;



            $query = "UPDATE VACCINATION_FACILITIES SET FACILITY_NAME='$facilityname', PHONE_NUMBER='$phone' , WEB_ADDRESS='$website' ,FACILITY_TYPE='$ftype' ,ADDRESS='$address' ,PROVINCE='$province' ,CITY='$city' where FACILITY_ID=$id";

            echo 'Executed SQL <br><br>' . $query .'</br></br>';

            if ($mysqli->query($query) === TRUE) {
                echo "<br><br>Record updated successfully";
            } else {
                echo "Error updating record: " . $query->error;
            }
            $mysqli->close();
        }
        ?>
    </div>



</div>

