<?php
    require('array.php');
?>
<section>
    <?php
         if($_GET['page'] =='about'){
            require ("about.php");
         }
    error_info();
    var_dump();
    ?>
</section>

