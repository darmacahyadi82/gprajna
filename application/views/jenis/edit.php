        <?php echo form_open('jenis/update'); ?>
        <div class="container">
            <div class="row">
    <div class="col-xs-3">
        <div class="form-group">
        <label for="idjenis" style="color:#81CFE0">ID Jenis: </label>
        <input type="text" name="idjenis" id="idjenis" class="form-control" value="<?php echo $jenis['idjenis']?>" style="width:500px" readonly>
        </div>
    </div>

    <div class="col-xs-6">
        <div class="form-group">
            <label for="nama_jenis" style="color:#81CFE0">Nama Jenis </label>
        <input type="text" name="nama_jenis" id="nama_jenis" class="form-control"  value="<?php echo $jenis['nama_jenis']?>" style="width:500px">
    
        </div>
           
        </div>
            
        <button type="submit" value="submit" class="btn btn-default" style="background-color:;"/>Submit</button>
                </form>
            </div>
                </div>
    <?php echo form_close(); ?>
  