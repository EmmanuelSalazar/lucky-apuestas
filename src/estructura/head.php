<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<?php 

    $userIP = $_SERVER['REMOTE_ADDR'];
    echo $userIP;
        if (!empty($userIP)) {
            echo "<script>$.getJSON('https://api.ip2location.io/?key=91AEF33269E448BF0428500957D3C69C&ip=".$userIP."&format=json', function (data) {
                    var country = JSON.parse(data);        
            var country = data.country_code;
                    alert('País: ' + country);
                });</script>";
        } else {
            'Ha ocurrido un error';
        }




?>
   
   
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucky Apuestas</title>
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/index.css">
    <link rel="stylesheet" href="src/css/lottery.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
