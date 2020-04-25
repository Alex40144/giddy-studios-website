<?php
    if(isset($_POST["Throttle"])){
    echo "Throttle Percentage is:".$_POST["Throttle"];
    $ret = file_put_contents('data.txt', $_POST["Throttle"], LOCK_EX);
    } else{
    Echo "Please slide the Slider Bar.";
    }
    ?>