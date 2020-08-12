 <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
	    <h1 class="masthead-heading mb-0">Tutoring </h1>
        <h2 class="masthead-subheading mb-0">Reach Your Academic Goals</h2>
		<br>
		
      </div>
	  
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>
<section>
	<div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/01.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">Nominate a student...</h2>
			<div class="container">
			<form action="<?= base_url();?>/lecturer/finished" >
			  <div class="form-row">
				<div class="form-group col-md-6">
				  <label for="inputEmail4">Email</label>
				  <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
				</div>
				<div class="form-group col-md-6">
				  <label for="inputPassword4">Password</label>
				  <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
				</div>
			  </div>
			  <div class="form-group">
				<label for="inputAddress">Address</label>
				<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
			  </div>
			  <div class="form-group">
				<label for="inputAddress2">Address 2</label>
				<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
			  </div>
			  <div class="form-row">
				<div class="form-group col-md-6">
				  <label for="inputCity">City</label>
				  <input type="text" class="form-control" id="inputCity">
				</div>
				<div class="form-group col-md-4">
				  <label for="inputState">State</label>
				  <select id="inputState" class="form-control">
					<option selected>Choose...</option>
					<option>...</option>
				  </select>
				</div>
				<div class="form-group col-md-2">
				  <label for="inputZip">Zip</label>
				  <input type="text" class="form-control" id="inputZip">
				</div>
			  </div>
			  <div class="form-group">
				<div class="form-check">
				  <input class="form-check-input" type="checkbox" id="gridCheck">
				  <label class="form-check-label" for="gridCheck">
					Check me out
				  </label>
				</div>
			  </div>
			  <button type="submit" class="btn btn-info">Submit</button>
			</form>
			</div>
		  </div>
        </div>
      </div>
    </div>
</section>