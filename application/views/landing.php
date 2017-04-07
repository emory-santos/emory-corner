<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Emory's Corner</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <!-- Bootstrap and Font Awesome css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>web/css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>web/css/custom.css">
    <!-- Favicon to follow-->
    <!--link rel="shortcut icon" href="" -->
  </head>
  <body>
    <div class="main"> 
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="cursive">Emory's Corner</h1>
            <h2 class="sub">Developer is on the way, stay tuned!</h2>
          </div>
        </div>
        <!-- countdown-->
        <div id="countdown" class="countdown">
          <div class="row">
            <div class="countdown-item col-sm-3 col-xs-6">
              <div id="countdown-days" class="countdown-number">195</div>
              <div class="countdown-label">days</div>
            </div>
            <div class="countdown-item col-sm-3 col-xs-6">
              <div id="countdown-hours" class="countdown-number">09</div>
              <div class="countdown-label">hours</div>
            </div>
            <div class="countdown-item col-sm-3 col-xs-6">
              <div id="countdown-minutes" class="countdown-number">44</div>
              <div class="countdown-label">minutes</div>
            </div>
            <div class="countdown-item col-sm-3 col-xs-6">
              <div id="countdown-seconds" class="countdown-number">54</div>
              <div class="countdown-label">seconds</div>
            </div>
          </div>
        </div>
        <!-- /.countdown-->
      </div>
      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>©2017 EDS Systems Inc.</p>
            </div>
            <div class="col-md-6">
              
            </div>
          </div>
        </div>
      </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="<?php echo base_url(); ?>web/js/jquery.countdown.min.js"></script>
<script src="<?php echo base_url(); ?>web/js/front.js"></script>
  
</body></html>
