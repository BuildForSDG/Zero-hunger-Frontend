<form>
	<div class="form-row">
		<div class="col form-group">
			<label>First name</label>
		  	<input type="text" class="form-control" placeholder="">
		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label>Last name</label>
		  	<input type="text" class="form-control" placeholder="">
		</div> <!-- form-group end.// -->
	</div> <!-- form-row end.// -->
	<div class="form-group">
		<label>Email</label>
		<input type="email" class="form-control" placeholder="">
		<small class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div> <!-- form-group end.// -->
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>City</label>
		  <input type="text" class="form-control">
		</div> <!-- form-group end.// -->
		<div class="form-group col-md-6">
		  <label>Country</label>
		  <select id="inputState" class="form-control custom-select">
		    <option> Choose...</option>
		      <option>Senegal</option>
		      <option>Cameroon</option>
		      <option selected="">Ghana</option>
		      <option>Nigeria</option>
		  </select>
		</div> <!-- form-group end.// -->
	</div> <!-- form-row.// -->
	<div class="form-row">

           
	

		<div class="form-group col-md-12">
			<label>Create password</label>

			<div class="input-group">
				<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
				 </div>
				<input name="password" class="form-control" placeholder="Password" type="password">
				<div class="input-group-append show-password">
				    <span class="input-group-text"> <i class="fa fa-eye"></i> </span>
				 </div>
			</div> <!-- input-group.// -->

		</div> <!-- form-group end.// --> 

		<div class="form-group col-md-12">
			<label>Repeat password</label>

			<div class="input-group">
				<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
				 </div>
				<input name="confirm-password" class="form-control" placeholder="Password" type="password">
				<div class="input-group-append show-password">
				    <span class="input-group-text"> <i class="fa fa-eye"></i> </span>
				 </div>
			</div> <!-- input-group.// -->

		</div> <!-- form-group end.// --> 

	</div>
    <div class="form-group mt-3">
        <button type="submit" class="btn btn-primary btn-block"> Register  </button>
    </div> <!-- form-group// -->      
    <p class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our Terms of use and Privacy Policy.</p>                                          
</form>

<hr>
<div class="alternative-register">
			<a href="#" class="btn btn-facebook btn-block mb-2"> <i class="fab fa-facebook-f"></i> &nbsp  Register with Facebook</a>
      	  <a href="#" class="btn btn-google btn-block mb-4"> <i class="fab fa-google"></i> &nbsp  Register with Google</a>
         </div>

<p class="text-center">Have an account? <a href="./login.php">Log In</a></p>