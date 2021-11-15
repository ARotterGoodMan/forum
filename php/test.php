<?php
    require 'function.php';
    $sql = "select * from userplay";
    echo "<pre>";
    print_r(fetchAll($sql));
    echo "</pre>";