<?php 
    include '../db/db.php';

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if ($_POST['date'] != "" OR NULL) {
            if ($_POST['lottery'] != "" OR NULL) {
                if($_POST['numLottery'] != "" OR NULL) {
                    if ($_POST['userEmail'] != "" OR NULL) {
                        $date = $_POST['date'];
                        $lottery = $_POST['lottery'];
                        $numLottery = $_POST['numLottery'];
                        $userEmail = $_POST['userEmail'];
                        $query = "INSERT INTO ticket(datePlay, lotery, numLotery, userEmail) VALUE ('$date', '$lottery', '$numLottery', '$userEmail')";
                        $query = mysqli_query($mysqli, $query);
                            if($query == true) {
                                $request = array(
                                    'request' => 1,
                                    'userEmail' => "$userEmail"
                                );
                                echo json_encode($request);
                            }
                    }
            }   
        }
        } else {
            echo 'Ha ocurrido un error';
        }
    }


?>