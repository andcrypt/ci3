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
  <!-- jQuery -->
  <script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!--datatable link -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
</head>


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
            <!-- <li><a href="<//?php echo site_url('user/logout')?>">Logout</a></li> -->
          </ul>
          
        </div>
      </div>
    </nav>


        <?php if(!isset($_SESSION['id_user'])){ ?>

      <div class="btn-group" role="group" aria-label="Data baru">
      <?php echo anchor('user/register', 'Register', array('class' => 'btn btn-outline-light')); ?>
      <?php echo anchor('user/login', 'Login', array('class' => 'btn btn-outline-light')); ?>

    </div>

<?php } else {?>

        <?php //if($this->session->userdata('logged_in')) : ?>
        <div class="btn-group" role="group" aria-label="Data baru">

       <?php echo anchor('blog/create', 'Artikel Baru', array('class' => 'btn btn-outline-light')); ?>
       <?php echo anchor('category/create', 'Kategori Baru', array('class' => 'btn btn-outline-light')); ?>
       <?php echo anchor('user/logout', 'Logout', array('class' => 'btn btn-outline-light')); ?>
     </div>
<?php } ?>



    <?php if($this->session->flashdata('user_registered')): ?>
         <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'</div>'; ?>
       <?php endif; ?>

       <?php if($this->session->flashdata('login_failed')): ?>
         <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
       <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedout')): ?>
         <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
       <?php endif; ?>