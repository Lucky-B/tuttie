<?php
helper('form');
$form_attributes = ['class' => 'form-group', 'id' => 'myform'];
$lname = ['name'  => 'lname',
        'id'    => 'lname',
        'class' => 'form-control'];

$module_name = ['name'  => 'module',
        'id'    => 'lname',
        'class' => 'form-control'];
		
$contact = ['name'  => 'contact',
        'id'    => 'lname',
        'class' => 'form-control'];

$email = ['name'  => 'email',
        'id'    => 'lname',
        'class' => 'form-control'];

?>

<?= form_open('lecturer/finished', $form_attributes);?>
 <div class="form-group">
<?= form_label('Lecturer Name','lname');?>
<?= form_input($lname);?>
<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>
<div class="form-group">
<?= form_label('Module','lname');?>
<?= form_input($module_name);?>
</div>
<?= form_input($contact );?>
<?= form_input($email);?>
<?= form_close();?>

