<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Isi</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($ten as $ab): ?>
    <tr>
      <th scope="row"><?php echo $ab['aboutid'] ?> </th>
      <td><?php echo $ab['isi'] ?></td>
       <td><a href="<?php echo site_url('about/getID').'/'.$ab['aboutid']?>" class="btn btn-primary btn-xs" role="button"><span class="glyphicon glyphicon-pencil">Edit</span></a></td>
    <td style="width:20px;"><p data-placement="top" data-toggle="tooltip" title="delete">  <a href="<?php echo site_url('about/delete').'/'.$ab['aboutid']?>" class="btn btn-primary btn-xs" data-toggle="modal">Delete</a>
   </p>  </td> 
    </tr>
    <?php endforeach; ?> 


  </tbody>
</table>