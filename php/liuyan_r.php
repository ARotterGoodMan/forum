<?php
$sql = "select * from massage";
$b = fetchAll($sql);
$all = array();

foreach ($b as $values) {
    $sql = "select * from userplay where UserName = '$values[author]'";
    $user_reg = fetch($sql);
    isset($user_reg['jur']) ? $jur = $user_reg['jur'] : $jur = "";
    if ($jur === "1") {
        $values['author'] = "<span  class='badge badge-danger rounded-circle'
                                    style='width: 20px;!important;
                                    height: 18px;!important;
                                    line-height: 15px;!important;'>
                             管</span>$values[author]";
    }

    $all[] = $values;
}

