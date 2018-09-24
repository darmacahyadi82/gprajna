<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#jenisModal" data-whatever="@mdo">Tambah</button>
<!-- Modal Tambah Permintaan -->
      <div class="modal fade" id="jenisModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Tambah Jenis</h4>
      </div>
      <div class="modal-body">
        <form method="post" accept-charset="utf-8" action="<?php echo site_url('jenis/insert') ?>">
          <div class="form-group">
            <label for="nama_jenis" class="control-label">Nama Jenis:</label>
            <input type="text" class="form-control" id="nama_jenis" name="nama_jenis">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="Submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
      <!--End Modal-->

<!-- Modal Tambah Permintaan -->
      <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Tambah Jenis</h4>
      </div>
      <div class="modal-body">
        <form method="post" accept-charset="utf-8" action="<?php echo site_url('jenis/insert') ?>">
           <div class="form-group">
            <label for="nama_jenis" class="control-label idjenis">Nama Jenis:</label>
            <input type="text" class="form-control idjenis" id="nama_jenis" name="nama_jenis">
          </div>
          <div class="form-group">
            <label for="nama_jenis" class="control-label">Nama Jenis:</label>
            <input type="text" class="form-control" id="nama_jenis" name="nama_jenis">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="Submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
      <!--End Modal-->
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama Jenis</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($jenis as $jen): ?>
    <tr>
      <th scope="row"><?php echo $jen['idjenis'] ?> </th>
      <td><?php echo $jen['nama_jenis'] ?></td>
       <td><a href="<?php echo site_url('jenis/getID').'/'.$jen['idjenis']?>" class="btn btn-primary btn-xs" role="button" ><span class="glyphicon glyphicon-pencil">Edit</span></a>
       <!--   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal" data-whatever="<?php echo $jeniss['idjenis']?>">Tambah</button> -->
       </td>
    <td style="width:20px;"><p data-placement="top" data-toggle="tooltip" title="delete">  <a href="<?php echo site_url('jenis/delete').'/'.$jen['idjenis']?>" class="btn btn-primary btn-xs" data-toggle="modal">Delete</a>
   </p>  </td> 
    </tr>
    <?php endforeach; ?> 


  </tbody>
</table>

<script type="text/javascript">
$('#jenisModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>

<script type="text/javascript">
$('#editModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.idjenis').val(recipient)
})
</script>

