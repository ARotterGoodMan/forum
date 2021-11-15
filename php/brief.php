<?php
if (!empty($_POST)){
    $key = $_POST['key'];
    $sql = "select * from user_information where Name like '%$key%'";
}else{
	
    $sql = "select * from user_information";
	
}
$b = fetchAll($sql);