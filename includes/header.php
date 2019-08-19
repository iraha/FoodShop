<?php
  $companyName = "Hello company";
  include('includes/arrays.php');
?>

<!DOCTYPE html>
<html>

  <head>
    <title><?php echo TITLE; ?></title>
    <link href="/assets/styles.css" rel="stylesheet">
  </head>
  <body id="final-example">

    <div class="wrapper">

      <div id="banner">

        <a href="/" title="Return to Home">
          <img src="assets/img/banner.png" alt="Okinawa" width="700", height="350">
        </a>
      </div><!-- banner -->

      <div id="nav">
        <?php include('includes/nav.php'); ?>
      </div><!-- nav -->

      <div class="content">
