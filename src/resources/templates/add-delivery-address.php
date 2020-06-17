<div class="modal-backdrop fade show">

</div>
<div style="display: block;" class="modal fade show animated fadeInDown" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">Add New Delivery Address</h3>
          <a href="./checkout.php" type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </a>
        </div>
        <div class="modal-body">
        <form>
	<div class="form-row">
  <div class="form-group col-md-6">
		  <label>Country</label>
		  <select id="inputState" class="form-control">
		    <option> Choose...</option>
		      <option>Senegal</option>
		      <option>Cameroon</option>
		      <option >Ghana</option>
		      <option selected>Nigeria</option>
		  </select>
    </div> <!-- form-group end.// -->
    
    <div class="form-group col-md-6">
		  <label>State/Region/Province</label>
		  <select id="inputState" class="form-control">
		    <option> Choose...</option>
		      <option>Osun</option>
		      <option>Lagos</option>
		      <option selected>Ondo</option>
		      <option>Kwara</option>
		  </select>
    </div> <!-- form-group end.// -->

		<div class="form-group col-md-12">
		  <label>City/Town</label>
		  <input type="text" class="form-control">
    </div> <!-- form-group end.// -->
    
    <div class="form-group col-md-12">
		  <label>Street</label>
		  <input type="text" class="form-control">
		</div> <!-- form-group end.// -->
	
  </div> <!-- form-row.// -->
  
	<div class="form-row">
		<div class="form-group col-md-12">
			<label>Direction to get to you</label>

			<div class="input-group">
				<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fa fa-paper-plane"></i> </span>
				 </div>
				<textarea class="form-control" placeholder="" type="direction"></textarea>
			</div> <!-- input-group.// -->

		</div> <!-- form-group end.// --> 

  </div>
  

    <div class="form-group mt-3 text-right">
        <button type="submit" class="btn btn-light btn-secondary">Submit</button>
    </div> <!-- form-group// -->                                         
</form>
          </div>
    </div>
    </div>
 </div>