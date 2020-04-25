<?php
    if(isset($_POST["passengers"])){
    echo "Throttle Percentage:"$_POST["passengers"];
    $ret = file_put_contents('data.txt', $_POST["passengers"], LOCK_EX);
    } else{
    Echo "Please slide the Slider.";
    }
    ?>