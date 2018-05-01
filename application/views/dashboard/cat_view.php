
<?php foreach($categories as $key): ?>
<?php
    $cat_name = substr($key->cat_name,0,40);
    $desc = substr($key->cat_description,0,40);
  
?>
<div class="card-body">
   <h5><?php echo $cat_name; ?></h5>
   <p class="card-text"><?php echo $desc; ?></p>
  
   <div class="d-flex justify-content-between align-items-center">
       <div class="btn-group">
           <!-- Untuk link detail -->
           <a href="<?php echo base_url('category/'.$key->cat_id) ?>" class="btn btn-outline-secondary">Lihat Artikel</a>
           <a href="<?php echo base_url(). 'category/update/' . $key->cat_id ?>" class="btn btn-outline-secondary">Edit</a>
       </div>
   </div>
</div>
<?php endforeach; ?>
