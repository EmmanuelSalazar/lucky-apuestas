<?php
    function saveBill() {
        require 'src/php/db/db.php';
        $query = "INSERT INTO bill (paymentID, paymentStatus, paymentType, ticketID) VALUES ('$_GET[payment_id]', '$_GET[status]', '$_GET[payment_type]', '$_GET[ticketID]')";
        $query = mysqli_query($mysqli, $query);
    };
    function deleteBill() {
        require 'src/php/db/db.php';
        $query = "DELETE FROM ticket WHERE ID='$_GET[ticketID]'";
        $query = mysqli_query($mysqli, $query);
    };
?>