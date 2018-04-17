<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <?php 
    $this->load->view("header.php");
    ?>
<body>
<!--/.ASIQUE -->
<div class="container">
<?php if(isset($_SESSION['pesan'])){
  $error = $_SESSION['pesan'];
  echo $error['title'];
}
?>
  <?php echo form_open_multipart("blogcreate/simpanblog"); ?>
  <div class="form-group">
  <input type="hidden" value="<?php if(isset($id)){ echo $blog['id']; } ?>" name="id">
  <label name="title">Judul:</label>
  <input type="text" class="form-control" name="title" value="<?php if(isset($id)){ echo $blog['title']; } ?>">
</div>
<div class="form-group">
  <label name="author">Author:</label>
  <input type="text" class="form-control" name="author" value="<?php if(isset($id)){ echo $blog['author']; } ?>">
</div>
<div class="form-group">
  <label name="date">Tanggal:</label>
  <input type="date" class="form-control" name="date" value="<?php if(isset($id)){ echo $blog['date']; } ?>">
</div>
<div class="form-group">
  <label name="content">isi blog:</label>
  <textarea class="form-control" name="content">
  <?php if(isset($id)){ echo $blog['content']; } ?> 
  </textarea>
</div>
<?php if(isset($id)){
?>
<img src="<?php echo base_url("asset/img/").$blog['image_file']?>">
<?php
 } ?> 

<div class="form-group">
upload gambar:
<div class="file btn btn-sm btn-primary">
							Upload
							<input type="file" name="userfile"/>
						</div>

     
</div>
<button type="submit">SIMPAN</button>
<?php echo 
form_close();
?>
</div>
</div>
</body>
</html>