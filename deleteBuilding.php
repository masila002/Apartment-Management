<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'conn.php';
if(isset($_GET['id'])){
 $id= filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);
    $sql = "delete from building where id=$id";
    $con->query($sql);
    session_start();
    unset($_SESSION['alert_message']);
    $_SESSION['alert_message'] = 'Record deleted Successfully.';
    header('location:building.php');
}