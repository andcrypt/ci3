<?php echo form_open('user/register', array('class' => 'needs-validation', 'novalidate' => '')); ?>
   <div class="form-group">
       <label>Nama Lengkap</label>
       <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
   </div>
   <div class="form-group">
       <label>Kodepos</label>
       <input type="text" class="form-control" name="kodepos" placeholder="Kodepos">
   </div>
   <div class="form-group">
       <label>Email</label>
       <input type="text" class="form-control" name="email" placeholder="email">
   </div>
   <div class="form-group">
       <label>Username</label>
       <input type="text" class="form-control" name="username" placeholder="username">
   </div>
   <div class="form-group">
       <label>Password</label>
       <input type="password" class="form-control" name="password" placeholder="password">
   </div>
   
   <div class="form-group">
       <label>Konfrim Password</label>
       <input type="password" class="form-control" name="passwordkonfrim" placeholder="password">
   </div>

   

   <button type="submit" class="btn btn-primary btn-block">Daftar</button>
<?php echo form_close(); ?>


