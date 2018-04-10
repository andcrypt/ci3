<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <?php 
    $this->load->view("header.php");
    ?>
<body>
  <!--/.ASIQUE -->
  <div class="container">
  
  <?php 			  
  foreach ($datablog as $key) {
        $itungan = 3;
				if($itungan%3==0) {?>
<?php } ?>
  <div class="card" style="width:400px">
  <?php $dirName = '/asset/img/'; //ngambil path gambar
 	        		  $fileName = $key->image_file; //ngambil file
		        		$imageUrl = $dirName . $fileName; ?>
  <img class="card-img-top" src="<?php echo base_url($imageUrl); ?>" alt="Card image">
  <div class="card-body">
    <h4 class="card-title"><?php echo $key->title  ?></h4>
              
    <p class="card-text">Author:  <?php echo $key->author ?></p>
    <?php $itungan = $itungan + 1;
			    if($itungan%3==0){ ?>
    <a href="#" class="btn btn-primary">Selengkapnya</a>
      <?php } ?>
+			<?php } ?>
  </div>
</div>

</div>
</body>
</html>