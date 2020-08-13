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
	  $student_number = array('type' => 'text',
							'class' => 'form-control',
							'size' => '8',
							'maxlength' => '8',
							'role' => 'form',
							'name' => 'student_number',
							'required' => 'required');

		$surname = array('type' => 'text',
							'class' =>'form-control',
							'required' => 'required',
							'name' => 'surname');

		$initial = array('type' => 'text',
							'class' =>'form-control',
							'required' => 'required',
							'name' => 'initial');		
			
		$phonenumber = array('type' => 'number',
							'size' => '10',
							'role' => 'form',
							'min' => '10000000',
							'maxlength' => '10',
							'class' =>'form-control',
							'required' => 'required',
							'name' => 'phonenumber'); 

		$email = array('type' => 'email',
							'class' =>'form-control',
							'required' => 'required',
							'name' => 'email'); 
 
		$title = array('type' => 'text',
							'class' =>'form-control',
							'required' => 'required',
							'name' => 'title'); 

		$dropdownstyles ='class = "form-control" required';
		
		$faculty_options = array(''=>'Select the faculty',
								'FEMS'  => 'FEMS',
								'Education'    => 'Education',
								'Engineering'   => 'Engineering',
								'Health' => 'Health Sciences',
								'Humanities' => 'Humanities',
								'Law' => 'Law',
								'FNAS' => 'FNAS',
								'Theology' => 'Theology');
 
				$lab_options = array('big'=>'big',
									'small'=>'small');
 
		$button = array('class' => 'btn btn-info',
						'type'=>'submit',
						'content'=>'Save');
?>
	  <?= isset($attempt) ? "<i>Student:<h5>$attempt</h5>does not exist ?</i>":"";?>
	  
	  <?= form_open('assist/addstudent_to_register/add_student',$formhead);?>
	  <?= form_label('Student number:', 'Student Number');?>
	  <?= form_input($student_number);?>
	  <?= form_label('Surname', 'surname');?>
	  <?= form_input($surname);?>
	  <?= form_label('Initial', '');?>
	  <?= form_input($initial);?>
	  <?= form_label('Phone Number:', '');?>
	  <?= form_input($phonenumber);?>
	  <?= form_label('Email:', '');?>
	  <?= form_input($email);?>
	  <?= form_label('Faculty:', '');?>
	  <?= form_dropdown('faculty',$faculty_options,'$faculty',$dropdownstyles);?>
	  <?= form_label('Lab:', '');?>
	  <?= form_dropdown('lab',$lab_options,'$lab',$dropdownstyles);?>
	 <br>
	  <?= form_button($button);?>
      <?= form_close();?>
			
			
			</div>
		  </div>
        </div>
      </div>
    </div>
</section>