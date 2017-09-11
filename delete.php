<?php
//Connect to DB
include "conf.php";
if(!empty($_POST))
{
    $delete_id = $mysqli->real_escape_string($_POST['delete_id']);
    $result = $mysqli->query("DELETE FROM records WHERE `records_id`=".$delete_id);
    if($result !== false) {
        echo 'true';
    }
}
?>
