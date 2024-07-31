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
                        $query = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
                            if($query == true) {
                                $request = array(
                                    'request' => 1,
                                    'userEmail' => "$userEmail"
                                );
                                echo json_encode($request);
                            } else {
                                $request = array(
                                    'request' => 0,
                                    'error' => "Ha fallado: 1"
                                );
                                echo json_encode($request);
                            }
                    } else {
                        $request = array(
                            'request' => 0,
                            'error' => "Ha fallado: 2"
                        );
                        echo json_encode($request);
                    }
            } else{
                $request = array(
                    'request' => 0,
                    'error' => "Ha fallado: 3"
                );
                echo json_encode($request);
            }   
        }
        } else {
            $request = array(
                'request' => 0,
                'error' => "Ha fallado: 4"
            );
            echo json_encode($request);
        }
    } else {
        $request = array(
            'request' => 0,
            'error' => "Ha fallado: 5"
        );
        echo json_encode($request);
    }


?>