<header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
	    <h1 class="masthead-heading mb-0">Tutoring </h1>
        <h2 class="masthead-subheading mb-0">Reach Your Academic Goals</h2>
		<br>
					  <div class="card-deck mb-3 text-center">
					
					
					<div class="card mb-12 shadow-sm">
					  <div class="card-body">
					   <div class="card-header text-secondary">
							<h1>Admin ?</h1>
						</div>
					<?php
						$formhead = array('role' => 'form');
						$name = array('type' => 'text',
							'class' =>'form-control',
							'pattern' => '[A-Za-z0-9]+',
							'required' => 'required',
							'placeholder'=> 'Wrong User Name',
							'name' => 'name');
						$pass = array('type' => 'password',
							'class' =>'form-control',
							'required' => 'required',
							'placeholder'=> 'Or Wrong Password',
							'name' => 'pass');
						$button = array('class' => 'btn btn-info',
							'type'=>'submit',
							'content'=>'Login');
						?>
						<?= form_open('validate',$formhead);?>
						
						<?= form_label('User', '');?>
						<?= form_input($name);?>
						
						<?= form_label('Password', '');?>
						<?= form_input($pass);?>
						<br/>
						<?= form_button($button);?>
						<?= form_close();?>
						<br/>
						
					  </div>
					</div>
				  
				  </div>
       
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>

