<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Aku Bisa</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="gambar/logo akubisa.jpg" />
        <!-- Template CSS -->
        <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
    </head>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png">
    <meta name="og:type" content="website">
    <link rel="stylesheet" href="css/style.css">
    <meta name="twitter:card" content="photo">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://animaapp.s3.amazonaws.com/launchpad-static/launchpad.js"></script>
    <script id="anima-load-script" src="load.js"></script>
    <script id="anima-hotspots-script" src="hotspots.js"></script>
    <script id="anima-overrides-script" src="overrides.js"></script>
    <script src="https://animaapp.s3.amazonaws.com/js/timeline.js"></script>
</head>


<?php
error_reporting(0);
//Memanipulasi Link
if ($_GET['page'] == 'list') {
include "list.php";
} 
if ($_GET['page'] == 'artikel1') {
include "artikel1.php";
} 
if ($_GET['page'] == 'artikel2') {
include "artikel2.php";
} 
if ($_GET['page'] == 'artikel3') {
include "artikel3.php";
} 
if ($_GET['page'] == 'artikel4') {
include "artikel4.php";
} 
if ($_GET['page'] == 'artikel5') {
include "artikel5.php";
} 
if ($_GET['page'] == 'artikel6') {
include "artikel6.php";
} 
if ($_GET['page'] == 'artikel7') {
include "artikel7.php";
} 
if ($_GET['page'] == 'artikel8') {
include "artikel8.php";
} 
if ($_GET['page'] == 'artikel9') {
include "artikel9.php";
} 
if ($_GET['page'] == 'artikel10') {
include "artikel0.php";
} 
if ($_GET['page'] == 'login') {
include "login.php";
} 
if ($_GET['page'] == 'register') {
include "register.php";
} 
if ($_GET['page'] == 'daftar_observasi_anak') {
include "daftar_observasi_anak.php";
} 
if ($_GET['page'] == 'terapis') {
include "terapis.php";
} 
?>
            