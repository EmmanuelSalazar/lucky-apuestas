
<?php 
    $userIP = $_SERVER['REMOTE_ADDR'];
        if ($userIP != "" OR NULL) {
            $url = "https://api.ip2location.io/?key=C10B0E4BE7F33D524B83B94DD59B05E4&ip=".$userIP."";
            $geoApi = file_get_contents($url);
            $geoApi = json_decode($geoApi, true);
            if ($geoApi['country_code'] != "CO") { ?>
                <script>window.location = "block.html";</script>
            <?php }     
        } else { ?>
                <script>window.location = "block.html";</script>
        <?php }
?>