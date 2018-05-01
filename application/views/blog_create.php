<div class="form-group">
   <label>Kategori</label>
   <select name="cat_id" class="form-control" required>
       <option value="">Pilih Kategori</option>
       <?php foreach($categories as $category): ?>
       <option value="<?php echo $category->id; ?>"><?php echo $category->cat_name; ?></option>
       <?php endforeach; ?>
   </select>
   <div class="invalid-feedback">Pilih dulu kategorinya gan</div>
</div>