<?php
    /*
    *This script echoes "fizz" if $i is divisible by 3
    *and "buzz" if $i is divisible by 5
    */
    for($i = 1; $i < 100; $i++) {
        if($i%3 == 0){
            echo "$i".'fizz'.'<br>';
        }
        if($i%5 == 0){
            echo "$i".'buzz'.'<br>';
        }
    }
    $age = $_GET['age'];
    echo $age;
        //just want to check out how this github works
        // This comment must appear in "branch_with_added_comments_only"
?>