<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Biodata Web</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?=base_url('asset/css/bootstrap.css');?>" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?=base_url('asset/css/bootstrap-theme.css');?>" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brilyandika WEB</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#"> Home</a></li>
            <li><a href="<?php echo site_url('home/menu1')?>">About</a></li>
            <li><a href="<?php echo site_url('home/menu2')?>">Contact</a></li>

          </ul>
          
        </div>
      </div>
    </nav>

  <!--/.ASIQUE -->
      <div class="col-xs-6 col-md-6 col-sm-6 col-lg-6">
      <div class="table responsive">
        <h1>Biodata Array</h1>
          <div class="table-responsive">
        
        <table class="table tabel-hover">
        <tbody>
          <?php foreach ($biodata_array as $key) { ?>
        <tr>
          <td><?php echo $key['nama']  ?></td>
        </tr>
        <tr>
          <td><?php echo $key['nim']  ?></td>
        </tr>
        <tr>
          <td><?php echo $key['alamat']  ?></td>
        </tr>
          <?php } ?>
        </tbody>
        
        </table>
        </div>
      </div>
    </div>
</body>
</html>