<?php
    function age_smth($age){
        if($age<20){
            echo $age.'young Jack'.'<br>';
        }
        if((20<$age)&&($age<30)){
            echo $age.' it\'s time to rock, Jack'.'<br>';
        }
        if($age > 30){
            echo $age.'OLd Jack'.'<br>';
        }
    }
    for($age=15; $age<=30; $age++){

        age_smth($age);
    }
?>