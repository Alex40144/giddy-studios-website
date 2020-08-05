<?php
    if(isset($_POST["throttle"])){
    echo "Throttle Percentage:".$_POST["throttle"];
    $ret = file_put_contents('data.txt', $_POST["throttle"], LOCK_EX);
    } else{
    Echo "Please slide the Slider.";
    }
    ?>