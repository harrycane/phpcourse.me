<?php
    if(isset($_COOKIE['count'])){
        $count = $COOKIE['count'] + 1;
    } else {
        $count = 1;
    }
    setcookie('count', $count,time() + 3600);
    var_dump($count) ;
?>