<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <?php 
    $this->load->view("header.php");
    ?>
<body>
  <!--/.ASIQUE -->
  <?php 			  
  foreach ($datablog as $key) {
        $itungan = 3; 
				if($itungan%3==0) {?>
<?php } ?>
  <div class="container">
  <form action="<?php echo site_url('bloglist/blogdetail') ?>" method="post">
  <input type="hidden" name="id" value="<?php echo $key->id  ?>"> <!--/.ngambil ID untuk detail -->
  
  
  <div class="card" style="width:400px">
                <?php $dirName = '/asset/img/'; //ngambil path gambar
 	        		  $fileName = $key->image_file; //ngambil file
		        		$imageUrl = $dirName . $fileName; ?>
  <img class="card-img-top" src="<?php echo base_url($imageUrl); ?>" alt="Card image">
  <div class="card-body">
    <h4 class="card-title"><?php echo $key->title  ?></h4>
              
    <p class="card-text">Author: <?php echo $key->author ?></p>
    <p class="card-text">Tanggal: <?php echo $key->date ?></p>
    <button class="btn btn-primary">Selengkapnya</button>
    <?php $itungan = $itungan + 1;
			    if($itungan%3==0){ ?>
    
      <?php } ?>
			<?php } ?>
  </div>
  </form>
</div>

</div>
</body>
</html>