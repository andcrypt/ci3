<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <?php 
    $this->load->view("header.php");
    ?>
<body>
  <!--/.ASIQUE -->
  <div class="container">
  <div class="row">
  <?php 			  
  foreach ($datablog as $key){?>


<div class="col-md-4">
  

  <div class="card" style="width:400px ">
                <?php $dirName = '/asset/img/'; //ngambil path gambar
 	        		  $fileName = $key->image_file; //ngambil file
		        		$imageUrl = $dirName . $fileName; ?>
  <img class="card-img-top" src="<?php echo base_url($imageUrl); ?>" alt="Card image" style="width:100px;height:100px;">
  <div class="card-body">
    <h4 class="card-title"><?php echo $key->title  ?></h4>
              
    <p class="card-text">Author: <?php echo $key->author ?></p>
    <p class="card-text">Tanggal: <?php echo $key->date ?></p>
    <button class="btn btn-primary">Selengkapnya</button>
    <a href="<?php echo base_url('blogcreate/addartikel/').$key->id;?>" class="btn btn-primary">Edit</a>
    </div>
    </div>
    </div>

			<?php } ?>

  </form>
</div>

</div>
</div>
</body>
</html>