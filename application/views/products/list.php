<br>
<br>
<div class="row">
    <div class="col-lg-12">           
        <h2>Products CRUD         
            <div class="pull-right">
               <a class="btn btn-primary" href="<?php echo base_url(); ?>products/create"> Create New Product</a>
            </div>
        </h2>
     </div>
</div>
<div class="table-responsive">
<table class="table table-bordered">
  <thead>
      <tr>
          <th>Products Name</th>
          <th>Products Info</th>
		  <th>Price</th>
	<th>Action</th>
      </tr>
  </thead>
  <tbody>
   <?php $gross = 0; foreach ($data as $d) { 
   $gross += $d->Price;
   ?>      
      <tr>
          <td><?php echo $d->productname; ?></td>
          <td><?php echo $d->product_info; ?></td>  
		  <td><?php echo $d->Price; ?></td>
	<td>
        <form method="DELETE" action="<?php echo base_url('products/delete/'.$d->id);?>">
         <a class="btn btn-info btn-xs" href="<?php echo base_url('products/edit/'.$d->id) ?>"><i class="glyphicon glyphicon-pencil"></i></a>
          <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></button>
        </form>
      </td>     
      </tr>
      <?php } ?>
  </tbody>
</table>
<p>Gross : <?php echo $gross; ?></p>
<a href="javascript:window.print()">Print</a>
</div>