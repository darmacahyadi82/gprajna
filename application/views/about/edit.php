
      <title>Tambah Data</title>
        <?php echo form_open('about/update'); ?>
        <div class="container">
            <div class="row">
    <div class="col-xs-3">
        <div class="form-group">
        <label for="aboutid" style="color:#81CFE0">About ID : </label>
        <input type="text" name="aboutid" id="aboutid" class="form-control" value="<?php echo $about['aboutid']?>" style="width:500px" readonly>
        </div>
    </div>

    <div class="col-xs-6">
        <div class="form-group">
            <label for="isi" style="color:#81CFE0">Isi </label>
        <input type="text" name="isi" id="isi" class="form-control"  value="<?php echo $about['isi']?>" style="width:500px">
    
        </div>
           
        </div>
            
        <button type="submit" value="submit" class="btn btn-default" style="background-color:;"/>Submit</button>
                </form>
            </div>
                </div>
    <?php echo form_close(); ?>
  