
      <title>Tambah Data</title>
        <?php echo form_open('servis/update'); ?>
        <div class="container">
            <div class="row">
   		<div class="col-xs-3">
        <div class="form-group">
        <label for="nama_servis" style="color:#81CFE0">Servis ID : </label>
        <input type="text" name="nama_servis" id="nama_servis" class="form-control" value="<?php echo $servis['servisid']?>" style="width:500px" readonly>
   		</div>
   		</div>

    	<div class="col-xs-6">
        <div class="form-group">
            <label for="isi" style="color:#81CFE0">Isi </label>
        <input type="text" name="isi" id="isi" class="form-control"  value="<?php echo $servis['isi']?>" style="width:500px">
    
        </div>
           
        </div>

        <div class="col-xs-6">
        <div class="form-group">
            <label for="icon" style="color:#81CFE0">Icon </label>
        <input type="text" name="icon" id="icon" class="form-control"  value="<?php echo $servis['icon']?>" style="width:500px">
    
        </div>
           
        </div>


        <div class="col-xs-6">
        <div class="form-group">
            <label for="gambar" style="color:#81CFE0">Gambar </label>
        <input type="text" name="gambar" id="gambar" class="form-control"  value="<?php echo $servis['gambar']?>" style="width:500px">
    
        </div>
           
        </div>
            
        <button type="submit" value="submit" class="btn btn-default" style="background-color:;"/>Submit</button>
                </form>
            </div>
                </div>
    <?php echo form_close(); ?>