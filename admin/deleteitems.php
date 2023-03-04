<?php
require "include/cheak-admin.php";
if(isset($_GET['id'])){
    require "../config.php";
    $id = $_GET['id'];
    $q = "delete from items where id='{$id}' limit 1";
    $connection->query($q);
    if($connection->affected_rows){
        header("location: viewitems.php");
    }     
}
?>