<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
if(!isset($_SESSION['oid'])){
   
    header('location:ologin.php');
    die();
}
$oid= $_SESSION['oid'];
