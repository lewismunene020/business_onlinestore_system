<?php
    

    function convertDollarToKsh($dollar){
        $RATE_OF_DOLLAR_IN_KSH= 121.28 ;
        return round($dollar * $RATE_OF_DOLLAR_IN_KSH);
    }

    $amount = $_GET['amount'];
    echo $amount . " dollars is equivalent to " . convertDollarToKsh($amount) . " Kenyan Shillings";

?>