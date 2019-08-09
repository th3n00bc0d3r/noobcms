<?php 

    include('../includes/config.php');

    $start = '2019-08-01 01:00:00';

    for ($i=0; $i < 100; $i++) { 
        
        $sql = "INSERT INTO news () VALUES ()";
        
        echo date('Y-m-d H:i:s',strtotime('+' .$i .' hour',strtotime($start)));
        echo '<br>';
    }

?>