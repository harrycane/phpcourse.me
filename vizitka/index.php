<?php
   require ("header.php");
?>

<section class="main">
    <?php
        if($_GET['page'] =='about'){
            require ("about.php");
        }
        if($_GET['page'] =='contacts'){
            require ("contacts.php");
        }
        if($_GET['page'] =='main'){
            require ("main.php");
        }
    ?>
</section>

<?php
   require ("footer.php");
?>