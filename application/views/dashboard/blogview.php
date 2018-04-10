<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <?php 
    $this->load->view("header.php");
    ?>
<body>
  <!--/.ASIQUE -->
  <?php 			  
  foreach ($datadetail as $key) {
    ?>
  <div class="container">
  <form action="<?php echo site_url('blogview') ?>" method="post">
  <input type="hidden" name="id" value="<?php echo $key->id  ?>"> <!--/.ngambil ID untuk detail -->
  <div class="jumbotron">
                   <?php $dirName = '/asset/img/'; //ngambil path gambar
 	        		$fileName = $key->image_file; //ngambil file
		        	$imageUrl = $dirName . $fileName; ?>
  <img src="<?php echo base_url($imageUrl); ?>">    
  <h1><?php echo $key->title  ?></h1> 
  <p>Tanggal: <?php echo $key->date ?></p>|<p>Author: <?php echo $key->author ?></p></p>
  <p><?php echo $key->content ?></p> 
</div>
  <?php } ?>
</div>
</body>
</html>