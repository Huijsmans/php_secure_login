<?php
    include '../config/db.php';
    require_once '../vendor/autoload.php';

$posttext = $message = '';
if(isset($_POST['submit'])){
    $message = "works";
    $posttitle = $_POST['titel'];
    $posttext = $_POST['text'];
    
    $sql = "INSERT INTO posts (title, text, date, user) VALUES ('{$posttitle}', '{$posttext}', now(), '1')";
    
    // Create mysql query
    $sqlQuery = mysqli_query($connection, $sql);
    
    if(!$sqlQuery){
        die("MySQL query failed!" . mysqli_error($connection));
    } 
    if($sqlQuery){
        $message = $posttext;
    }
}

?>