<?php
    include("includes/connection.php");
    session_start();
    if(!isset($_SESSION['uid']))
    {
        header("location: ../index.php");
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Sairam" content="">
    <title>Document Search Engine | Sairam</title>
    <!-- Bootstrap core CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <!-- Simple header with scrollable tabs. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header" >
  <header class="mdl-layout__header" >
    <div class="mdl-layout__header-row">
    <span class="mdl-layout-title">Admin DSE</span>
    </div>
    <!-- Tabs -->
    <div class="mdl-layout__tab-bar mdl-js-ripple-effect" >
      <a href="#scroll-tab-1" class="mdl-layout__tab is-active" id="uploadT">Upload</a>
      <a href="#scroll-tab-2" class="mdl-layout__tab" id="view_db">View DB</a>
      <a href="#scroll-tab-3" class="mdl-layout__tab" id="admins">Admins</a>
      <a href="../index.php" class="mdl-layout__tab" id="home">Home</a>
      <a href="../signout.php" class="mdl-layout__tab" id="signout">Sign Out</a>
    </div>
  </header>
