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
            <img class="img-fluid rounded-circle" src="img/02.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">Tutor Application:</h2>
            
			<div class="container">
			
			
						
<?php
  $formhead = array('role' => 'form');
  
  $campus_options = array(''=>'Campus',
								'Mafikeng'  => 'Mafikeng',
								'Vaal'    => 'Vaal',
								'Potch'   => 'Potch');
  
  $title_options = array(''=>'Title',
								'Mr'  => 'Mr',
								'Ms'    => 'Ms',
								'Dr'   => 'Dr',
								'Prof' => 'Prof');
 
		$surname = array('type' => 'text',
							'class' =>'form-control',
							'required' => 'required',
							'name' => 'surname');

		
		$initial = array('type' => 'text',
							'class' =>'form-control',
							'style' =>'text-transform:uppercase',
							'required' => 'required',
							'name' => 'initial');		
			
		$studentnumber = array('type' => 'text',
							'maxlength' => '8',
							'role' => 'form',
							'pattern' => '[0-9]{8}',
							'title' => 'Strictly student number',
							'class' =>'form-control',
							'required' => 'required',
							'name' => 'phonenumber'); 

	$surname = array('type' => 'text',
						'class' =>'form-control',
						'required' => 'required',
						'name' => 'surname');
		
		
	$phonenumber_1 = array('type' => 'number',
						'size' => '10',
						'role' => 'form',
						'min' => '10000000',
						'maxlength' => '10',
						'class' =>'form-control',
						'required' => 'required',
						'name' => 'phonenumber_1'); 
	
	$phonenumber_2 = array('type' => 'number',
						'size' => '10',
						'role' => 'form',
						'min' => '10000000',
						'maxlength' => '10',
						'class' =>'form-control',
						'required' => 'required',
						'name' => 'phonenumber_2'); 

	$email_1 = array('type' => 'email',
						'class' =>'form-control',
						'required' => 'required',
						'id' => 'email1',
						'name' => 'email');
	
	$email_2 = array('type' => 'email',
						'class' =>'form-control',
						'required' => 'required',
						'id' => 'email2',
						'name' => 'email'); 

	$title = array('type' => 'text',
						'class' =>'form-control',
						'required' => 'required',
						'name' => 'title'); 
						
	$id_passport = array('type' => 'text',
							'class' =>'form-control',
							'required' => 'required',
							'name' => 'id_passport'); 

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

$country_options = array(''=>'Select your nationality',
							'south african' => 'South African',
							'afghan' => 'Afghan',
							'albanian' => 'Albanian',
							'algerian' => 'Algerian',
							'american' => 'American',
							'andorran' => 'Andorran',
							'angolan' => 'Angolan',
							'antiguans' => 'Antiguans',
							'argentinean' => 'Argentinean',
							'armenian' => 'Armenian',
							'australian' => 'Australian',
							'austrian' => 'Austrian',
							'azerbaijani' => 'Azerbaijani',
							'bahamian' => 'Bahamian',
							'bahraini' => 'Bahraini',
							'bangladeshi' => 'Bangladeshi',
							'barbadian' => 'Barbadian',
							'barbudans' => 'Barbudans',
							'batswana' => 'Batswana',
							'belarusian' => 'Belarusian',
							'belgian' => 'Belgian',
							'belizean' => 'Belizean',
							'beninese' => 'Beninese',
							'bhutanese' => 'Bhutanese',
							'bolivian' => 'Bolivian',
							'bosnian' => 'Bosnian',
							'brazilian' => 'Brazilian',
							'british' => 'British',
							'bruneian' => 'Bruneian',
							'bulgarian' => 'Bulgarian',
							'burkinabe' => 'Burkinabe',
							'burmese' => 'Burmese',
							'burundian' => 'Burundian',
							'cambodian' => 'Cambodian',
							'cameroonian' => 'Cameroonian',
							'canadian' => 'Canadian',
							'cape verdean' => 'Cape Verdean',
							'central african' => 'Central African',
							'chadian' => 'Chadian',
							'chilean' => 'Chilean',
							'chinese' => 'Chinese',
							'colombian' => 'Colombian',
							'comoran' => 'Comoran',
							'congolese' => 'Congolese',
							'costa rican' => 'Costa Rican',
							'croatian' => 'Croatian',
							'cuban' => 'Cuban',
							'cypriot' => 'Cypriot',
							'czech' => 'Czech',
							'danish' => 'Danish',
							'djibouti' => 'Djibouti',
							'dominican' => 'Dominican',
							'dutch' => 'Dutch',
							'east timorese' => 'East Timorese',
							'ecuadorean' => 'Ecuadorean',
							'egyptian' => 'Egyptian',
							'emirian' => 'Emirian',
							'equatorial guinean' => 'Equatorial Guinean',
							'eritrean' => 'Eritrean',
							'estonian' => 'Estonian',
							'ethiopian' => 'Ethiopian',
							'fijian' => 'Fijian',
							'filipino' => 'Filipino',
							'finnish' => 'Finnish',
							'french' => 'French',
							'gabonese' => 'Gabonese',
							'gambian' => 'Gambian',
							'georgian' => 'Georgian',
							'german' => 'German',
							'ghanaian' => 'Ghanaian',
							'greek' => 'Greek',
							'grenadian' => 'Grenadian',
							'guatemalan' => 'Guatemalan',
							'guinea-bissauan' => 'Guinea-Bissauan',
							'guinean' => 'Guinean',
							'guyanese' => 'Guyanese',
							'haitian' => 'Haitian',
							'herzegovinian' => 'Herzegovinian',
							'honduran' => 'Honduran',
							'hungarian' => 'Hungarian',
							'icelander' => 'Icelander',
							'indian' => 'Indian',
							'indonesian' => 'Indonesian',
							'iranian' => 'Iranian',
							'iraqi' => 'Iraqi',
							'irish' => 'Irish',
							'israeli' => 'Israeli',
							'italian' => 'Italian',
							'ivorian' => 'Ivorian',
							'jamaican' => 'Jamaican',
							'japanese' => 'Japanese',
							'jordanian' => 'Jordanian',
							'kazakhstani' => 'Kazakhstani',
							'kenyan' => 'Kenyan',
							'kittian and nevisian' => 'Kittian and Nevisian',
							'kuwaiti' => 'Kuwaiti',
							'kyrgyz' => 'Kyrgyz',
							'laotian' => 'Laotian',
							'latvian' => 'Latvian',
							'lebanese' => 'Lebanese',
							'liberian' => 'Liberian',
							'libyan' => 'Libyan',
							'liechtensteiner' => 'Liechtensteiner',
							'lithuanian' => 'Lithuanian',
							'luxembourger' => 'Luxembourger',
							'macedonian' => 'Macedonian',
							'malagasy' => 'Malagasy',
							'malawian' => 'Malawian',
							'malaysian' => 'Malaysian',
							'maldivan' => 'Maldivan',
							'malian' => 'Malian',
							'maltese' => 'Maltese',
							'marshallese' => 'Marshallese',
							'mauritanian' => 'Mauritanian',
							'mauritian' => 'Mauritian',
							'mexican' => 'Mexican',
							'micronesian' => 'Micronesian',
							'moldovan' => 'Moldovan',
							'monacan' => 'Monacan',
							'mongolian' => 'Mongolian',
							'moroccan' => 'Moroccan',
							'mosotho' => 'Mosotho',
							'motswana' => 'Motswana',
							'mozambican' => 'Mozambican',
							'namibian' => 'Namibian',
							'nauruan' => 'Nauruan',
							'nepalese' => 'Nepalese',
							'new zealander' => 'New Zealander',
							'ni-vanuatu' => 'Ni-Vanuatu',
							'nicaraguan' => 'Nicaraguan',
							'nigerien' => 'Nigerien',
							'north korean' => 'North Korean',
							'northern irish' => 'Northern Irish',
							'norwegian' => 'Norwegian',
							'omani' => 'Omani',
							'pakistani' => 'Pakistani',
							'palauan' => 'Palauan',
							'panamanian' => 'Panamanian',
							'papua new guinean' => 'Papua New Guinean',
							'paraguayan' => 'Paraguayan',
							'peruvian' => 'Peruvian',
							'polish' => 'Polish',
							'portuguese' => 'Portuguese',
							'qatari' => 'Qatari',
							'romanian' => 'Romanian',
							'russian' => 'Russian',
							'rwandan' => 'Rwandan',
							'saint lucian' => 'Saint Lucian',
							'salvadoran' => 'Salvadoran',
							'samoan' => 'Samoan',
							'san marinese' => 'San Marinese',
							'sao tomean' => 'Sao Tomean',
							'saudi' => 'Saudi',
							'scottish' => 'Scottish',
							'senegalese' => 'Senegalese',
							'serbian' => 'Serbian',
							'seychellois' => 'Seychellois',
							'sierra leonean' => 'Sierra Leonean',
							'singaporean' => 'Singaporean',
							'slovakian' => 'Slovakian',
							'slovenian' => 'Slovenian',
							'solomon islander' => 'Solomon Islander',
							'somali' => 'Somali',
							'south korean' => 'South Korean',
							'spanish' => 'Spanish',
							'sri lankan' => 'Sri Lankan',
							'sudanese' => 'Sudanese',
							'surinamer' => 'Surinamer',
							'swazi' => 'Swazi',
							'swedish' => 'Swedish',
							'swiss' => 'Swiss',
							'syrian' => 'Syrian',
							'taiwanese' => 'Taiwanese',
							'tajik' => 'Tajik',
							'tanzanian' => 'Tanzanian',
							'thai' => 'Thai',
							'togolese' => 'Togolese',
							'tongan' => 'Tongan',
							'trinidadian or tobagonian' => 'Trinidadian or Tobagonian',
							'tunisian' => 'Tunisian',
							'turkish' => 'Turkish',
							'tuvaluan' => 'Tuvaluan',
							'ugandan' => 'Ugandan',
							'ukrainian' => 'Ukrainian',
							'uruguayan' => 'Uruguayan',
							'uzbekistani' => 'Uzbekistani',
							'venezuelan' => 'Venezuelan',
							'vietnamese' => 'Vietnamese',
							'welsh' => 'Welsh',
							'yemenite' => 'Yemenite',
							'zambian' => 'Zambian',
							'zimbabwean' => 'Zimbabwean');


		$module = array('type' => 'text',
							'maxlength' => '4',
							'class' =>'form-control',
							'style' =>'text-transform:uppercase',
							'pattern' => '[A-Za-z]{4}',
							'required' => 'required',
							'placeholder'=> 'ACCM',
							'title' => 'Eg. ACCM, WGMP',
							'name' => 'initial');		
		
		$code = array('type' => 'number',
							'type' => 'text',
							'role' => 'form',
							'maxlength' => '3',
							'pattern' => '[0-9]{3}',
							'title' => 'Three numbers eg. 111, 121',
							'class' =>'form-control',
							'placeholder'=> '121',
							'required' => 'required',
							'name' => 'code'); 

		$check = array ( 'class'=>'form-check-input',
						 'type' => 'checkbox',
						 'name' => 'tnc',
						 'value' => 'signed',
						 'required' => 'required'
						);
						
		 $explainer = array('name'    => 'cv_desc',
						'id'     => 'cv_desc',
						'value'  > set_value('cv_desc'),
						'rows'   => '5',
						'cols'   => '10',
						'style'  => 'width:100%',
						'class'  => 'form-control',
						'title' => 'Please tell us why you should get this oppotunity ?',
						'required' => 'required'
						);

	$button = array('class' => 'btn btn-info',
					'type'=>'submit',
					'id'=>'submit_button',
						'content'=>'Save');
?>
	  
	  <?= isset($attempt) ? "<i>Student:<h5>$attempt</h5>does not exist ?</i>":"";?>
	  
	  <?= form_open('assist/addstudent_to_register/add_student',$formhead);?>
	  <h3>Student Info:</h3> 
		<hr>
		<div class="form-row">
		  <div class="form-group col-md-6">					
		<?= form_dropdown('campus',$campus_options,'$campus',$dropdownstyles);?>
		 </div>
		 <div class="form-group col-md-6">			
		<?= form_dropdown('Title',$title_options,'$faculty',$dropdownstyles);?> 
		 </div>
		</div>
	<?= form_label('Student No', '');?>
	  <?= form_input($studentnumber);?>
	  <div class="form-row">
		<div class="form-group col-md-4">					
	  <?= form_label('Initial', '');?>
	  <?= form_input($initial);?>
	    </div>
		<div class="form-group col-md-8">
		<?= form_label('Last name', 'Lastname');?>
		<?= form_input($surname);?>
		</div>
	</div>
	  
	 <?= form_dropdown('Nationality',$country_options,'$country_options',$dropdownstyles);?>
	 <br/>
	  <?= form_label('ID/Passport Number', 'ID no:');?>
	  <?= form_input($id_passport);?>
	  <?= form_label('Cell no 1', 'Cell no:');?>
	  <?= form_input($phonenumber_1);?>
	  <?= form_label('Cell no 2', 'Cell no:');?>
	  <?= form_input($phonenumber_2);?>
	  <?= form_label('Email', 'Email');?>
	  
     <?= form_input($email_2);?>
	 
	 
	 <br/>
	 <h3>Lecturer Info:</h3> 
	<hr>
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
	  <?= form_dropdown('faculty',$faculty_options,'$faculty',$dropdownstyles);?>
	  </br>
	  <?= form_label('Lecturer Email', 'Lecturer');?>
	  <?= form_input($email_1);?>
	  <?= form_label('Lecturer Email', 'Lecturer');?>
	  <?= form_input($email_2);?>
	  
	 <br/>
	 <h3>Terms and conditions:</h3> 
	<hr> 
	  <p>I have earned a final mark of 60% or more in the selected module have a good academic record.
	</p>
	  
	 <p>If appointed, I agree to meet with the lectuerer regularly and  perform assigned duties and sign
attendance registers.
	</p>
	  <?= form_input($check);?>
	  <?= form_label('Agree', 'Agree');?>
	 <hr>
	 <p><b>Explain in a few sentences why you would like to become a Tutor ?</b></p>
	  <?= form_textarea($explainer);?>
	  <br>
	  <?= form_button($button);?>
      <?= form_close();?>
		
			
		</div>
			
		  </div>
        </div>
      </div>
    </div>
  </section>