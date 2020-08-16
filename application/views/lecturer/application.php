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
			
			
<?php
	  $formhead = array('role' => 'form');
	  $dropdownstyles ='class = "form-control" required';
	  $campus_options = array(''=>'Campus',
								'Mafikeng'  => 'Mafikeng',
								'Vaal'    => 'Vaal',
								'Potch'   => 'Potch');
 
		$title_options = array(''=>'Title',
								'Mr'  => 'Mr',
								'Ms'    => 'Ms',
								'Dr'   => 'Dr',
								'Prof' => 'Prof');
 
		$lastname = array('type' => 'text',
							'class' =>'form-control',
							'style' => 'text-transform: capitalize',
							'required' => 'required',
							'name' => 'surname');

		
		$initial = array('type' => 'text',
							'class' =>'form-control',
							'style' =>'text-transform:uppercase',
							'required' => 'required',
							'name' => 'initial');		
			
		$staffnumber = array('type' => 'text',
							'maxlength' => '8',
							'role' => 'form',
							'pattern' => '[0-9]{8}',
							'title' => 'Strictly staff number',
							'class' =>'form-control',
							'required' => 'required',
							'name' => 'phonenumber'); 
		
		$module = array('type' => 'text',
							'maxlength' => '4',
							'class' =>'form-control',
							'style' =>'text-transform:uppercase',
							'pattern' => '[A-Za-z]{4}',
							'required' => 'required',
							'title' => 'Eg. ACCM, WGMP',
							'name' => 'initial');		
		
		$code = array('type' => 'number',
							'type' => 'text',
							'role' => 'form',
							'maxlength' => '3',
							'pattern' => '[0-9]{3}',
							'title' => 'Three numbers eg. 111, 121',
							'class' =>'form-control',
							'required' => 'required',
							'name' => 'code'); 

		$email = array('type' => 'email',
							'class' =>'form-control',
							'required' => 'required',
							'name' => 'email'); 
 
		$button = array('class' => 'btn btn-info',
						'type'=>'submit',
						'content'=>'Send Nomination');
?>
	  <?= isset($attempt) ? "<i>Student:<h5>$attempt</h5>does not exist ?</i>":"";?>
	  <?= form_open('assist/addstudent_to_register/add_student',$formhead);?>
		
		<h6>Lecturer Info:</h6> 
		<hr>
		<div class="form-row">
		  <div class="form-group col-md-6">					
		<?= form_dropdown('campus',$campus_options,'$campus',$dropdownstyles);?>
		 </div>
		 <div class="form-group col-md-6">			
		<?= form_dropdown('Title',$title_options,'$faculty',$dropdownstyles);?> 
		 </div>
		</div>
	<?= form_label('Staff No', '');?>
	  <?= form_input($staffnumber);?>
	  <div class="form-row">
		<div class="form-group col-md-4">					
	  <?= form_label('Initial', '');?>
	  <?= form_input($initial);?>
	    </div>
		<div class="form-group col-md-8">
		<?= form_label('Last name', 'Lastname');?>
		<?= form_input($lastname);?>
		</div>
	</div>
	<h6>Student Info:</h6> 
	 <hr>
	  <?= form_label('Student email', 'Email');?>
	  <?= form_input($email);?>
	  <?= form_label('Varify student email', 'Email');?>
	  <?= form_input($email);?>
	  <div class="form-row">
		  <div class="form-group col-md-6">					
		  <?= form_label('Module name', 'Module_name');?>
		  <?= form_input($module);?>
		  </div>
		  <div class="form-group col-md-6">					
		  <?= form_label('Code', 'Code');?>
		  <?= form_input($code);?>
		  </div>
	  </div>
	  <br>
	  <?= form_button($button);?>
      <?= form_close();?>
			
			
			</div>
		  </div>
        </div>
      </div>
    </div>
</section>