<body style="margin:15%; padding:1px; vertical-align: top;">
<img class="img-fluid" src="<?= base_url()?>img/ctl.png" alt="" width="624">
<p>&nbsp;</p>
<h2>TUTORS APPLICATION FORM 2020<strong> <br /></strong></h2>
<p><strong>&nbsp;</strong></p>
<p>Requirements to be met by Tutor:</p>
<ul>
<li>Must have earned a final mark of 60% or more in the selected module</li>
<li>Have a good academic record</li>
<li>Must attach a copy of an academic transcript to the application form</li>
</ul>
<p>&nbsp;&nbsp; </p>
<table border="1">
<tbody>
<tr>
<td colspan="3" width="624">
<p><?= $verdict == 'R'? "<center><b>APPLICATION/NOMINATION HAS BEEN REJECTED</b></center>":"Personal Information";?></p>
</td>
</tr>
<tr>
<td width="300">
<p>Surname:<br><b><?=$s_lastname;?></b></p>
</td>
<td width="121">
<p>Initials:<br><b><?=$s_initial;?></b></p>
</td>
<td width="203">
<p>Title:<br><b><?=$s_title;?></b></p>
</td>
</tr>
<tr>
<td width="300">
<p>Preferred name:</p>
</td>
<td colspan="2" width="324">
<p>Nationality:<br><b><?=$nationality;?></b></p>
</td>
</tr>
<tr>
<td width="300">
<p>Student number:<br><b><?=$student_id;?></b>
</p>
</td>
<td colspan="2" width="324">
<p>ID /Passport no:<br><b><?=$id_passport;?></b></p>
</td>
</tr>

<tr>
<td width="300">
<p>Cell no:<br><b>0<?=$cell_no1;?><br><?= $cell_no2 != 0 ? "0".$cell_no2 : "" ?></b></p>
</td>
<td colspan="2" width="324">
<p>Email address:<br><b><?=$student_email;?></b></p>
</td>
</tr>
<tr>
<td width="300">
<p>Module to tutor:<br><b><?=$module_name;?> <?=$module_code;?><b/></p>
</td>
<td colspan="2" width="324">
<p>Faculty:<br><b><?=$faculty;?></b></p>
</td>
</tr>
<tr>
<td colspan="3" width="624">
<p>Lecturer:<br><b><?=$l_title;?> <?=$l_initial;?> <?=$l_lastname;?></b></p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp; </p>
<table border="1">
<tbody>
<tr>
<td colspan="2" width="624">
<p>Additional Information</p>
</td>
</tr>
<tr>
<td width="312">
<p>Current program:<br><b><?=$current_program;?></b></p>
</td>
<td width="312">
<p>Current study:<br><b>Year <?=$current_year;?> <?=$current_level;?></b></p>
</td>
</tr>
<tr>
<td colspan="2" width="624">
<p>Explain in a few sentences why you would like to become a Tutor:<br><b><?=$memoir;?></b></p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<table border="1">
<tbody>
<tr>
<td colspan="3" width="624">
<p>Lecturer approval (to be completed by lecturer) <b><?= $staff_no!= 0 ? "":"NOT DONE";?> </b></p>
</td>
</tr>
<tr>
<td width="544">
<p>The nominated Tutor complies with the minimum requirements set for Tutors as stated above</p>
</td>
<td width="45">
<p><?= $staff_no!= 0 ? "YES":"NO" ;?></p>
</td>

</tr>
<tr>
<td width="544">
<p>I agree to meet with the nominated Tutor regularly and assign duties to her/him, and sign registers</p>
</td>
<td width="45">
<p><?= $staff_no!= 0 ? "YES":"NO" ;?></p>
</td>

</tr>
<tr>
<td colspan="3" width="624">
<p>Email address of lecturer:<br><b><?=$lecturere_email;?></b></p>
</td>
</tr>

</tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp; </p>
<p>&nbsp;</p>
<table border="1">
<tbody>


</tbody>
</table>
<p>&nbsp;</p>
</body>