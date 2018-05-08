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
  <table class="table table-striped table-bordered namatable">
 
<div class="col-md-4">
 
<thead>
                    <tr>          
                        <th>ID</th>
                        <th>Judul Artikel</th>
                        <th>Author</th>
                        <th>Tanggal</th>
                        <th>Detail</th>
                        <th>Hapus</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($all_artikel as $key) { ?>
 
                    <tr>
                        <td><?php echo $key->id ?></td>
                        <td><?php echo $key->title ?></td>
                        <td><?php echo $key->author ?></td>
                        <td><?php echo $key->date ?></td>
 
                        <td>

                        </td>
                        <td>
                            <form action="<?php echo site_url('blogcreate/hapus') ?>" method="post">
                                <input type="hidden" name="id" value="<?php echo $key->id ?>">
                                <button class="btn btn-danger" onclick="return confirm('yakin akan menghapus data ini?')" style="margin-bottom: 10px;">HAPUS</button>
                            </form>
                        </td>
                        <td>
                            <form action="<?php echo site_url('blogcreate/addartikel/') ?>" method="post">
                                <input type="hidden" name="id" value="<?php echo $key->id ?>">
                                <button class="btn btn-success" style="margin-bottom: 10px;">EDIT</button>
                            </form>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
 
<script type="text/javascript">
        $(document).ready(function(){
            $('.namatable').DataTable();
        });
    </script>
</div>
</div>
</body>
</html>