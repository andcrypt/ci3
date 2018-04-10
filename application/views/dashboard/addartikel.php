<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <?php 
    $this->load->view("header.php");
    ?>
<body>
  <!--/.ASIQUE -->
  <div class="form-group">
  <label for="title">Judul:</label>
  <input type="text" class="form-control" id="title">
</div>
<div class="form-group">
  <label for="author">Author:</label>
  <input type="text" class="form-control" id="author">
</div>
<div class="form-group">
  <label for="date">Tanggal:</label>
  <input type="date" class="form-control" id="date">
</div>
<div class="form-group">
  <label for="isiblog">isi blog:</label>
  <input type="textarea" class="form-control" id="isiblog">
</div>
<div class="form-group">
upload gambar:
<div class="file btn btn-lg btn-primary">
							Upload
							<input type="file" name="file"/>
						</div>
</div>

</div>
</body>
</html>