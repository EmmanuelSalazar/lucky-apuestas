<?php 

    $userIP = $_SERVER['REMOTE_ADDR'];
        if (!isset($userIP)) {
            echo "$.getJSON('https://api.ip2location.io/?key=91AEF33269E448BF0428500957D3C69C&ip=".$userIP."&format=json    ', function (data) {
                    var country = data.address.country;
                    alert('País: ' + data.address.country);
                });";
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