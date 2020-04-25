<?php
    if(isset($_POST["passengers"])){
    echo "Number of selected passengers are:".$_POST["passengers"];
    $ret = file_put_contents('data.txt', $_POST["passengers"], LOCK_EX);
    } else{
    Echo "Please slide the Slider Bar and Press Submit.";
    }
    ?>