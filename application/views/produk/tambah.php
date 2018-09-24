
      <title>Tambah Data</title>
        <?php echo form_open('permintaanspC/Insert'); ?>
        <div class="container">
            <div class="row">
    <div class="col-xs-3">
    <div class="form-group" >



        <div class="frmDronpDown">
  <div class="row">
    <label>Jenis :</label><br/>
    <select name="idjenis" id="jenis-list">
    <option value="">Jenis</option>
  <?php
    foreach($jenis as $jenis) {
    ?>
     <option value="<?php echo $jenis["idjenis"]; ?>"><?php echo $jenis["nama_jenis"]; ?></option>
    <?php
    }
    ?>
    </select>
  </div>
</div>


        </div>        
           </div>
           </div>
             <div class="row">
    <div class="col-xs-3">

            <div class="form-group">
            <label for="Nama Produk" style="color:#81CFE0">Nama Produk : </label>
        <input type="text" name="nama_produk" id="nama_produk" class="form-control" style="width:500px" placeholder="Nama Produk">
        </div>
         <div class="form-group">
            <label for="tema" style="color:#81CFE0">Tema : </label>
        <input type="text" name="tema" id="tema" class="form-control" style="width:500px" placeholder="Tema">
        </div>
        <div class="form-group">
            <label for="jenis_kertas" style="color:#81CFE0">Jenis Kertas : </label>
        <input type="text" name="jenis_kertas" id="jenis_kertas" class="form-control" style="width:500px" placeholder="Jenis Kertas">
        </div>
        <div class="form-group">
            <label for="penjelasan" style="color:#81CFE0">Keterangan: </label>
        <input type="Date" name="penjelasan" id="penjelasan" class="form-control" style="width:500px" placeholder="Keterangan">
        <div class="form-group">
        </div>
    </div>
        </div>
    </div>            
        <button type="submit" value="submit" class="btn btn-default" style="background-color:;"/>Submit</button>
                </form>
            </div>
                </div>
    <?php echo form_close(); ?>
