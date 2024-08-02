
<?php 
    $userIP = $_SERVER['REMOTE_ADDR'];
    echo $userIP;
        if ($userIP != "" OR NULL) {
            echo "<script>$.getJSON('https://api.ip2location.io/?key=91AEF33269E448BF0428500957D3C69C&ip=".$userIP."&format=json', function (data) {
                    var country = JSON.parse(data);        
            var country = data.country_code;
                    alert('País: ' + country);
                });</script>";
        } else {
            'Ha ocurrido un error';
        }
?>