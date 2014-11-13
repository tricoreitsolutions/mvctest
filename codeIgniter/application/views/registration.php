<html>
<head>
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>	
	<body>
		<div id="page">
				<?php //echo validation_errors(''); ?>
				<?php echo form_open('registration'); ?> 
				
				<h1>REGISTRATION FORM</h1>
				
				<div class="input-field">
					<label for="First Name">Email<span class="required">*</span></label>  
					<input type='text' name='email' id='email' value="<?php echo set_value('email'); ?>" placeholder='Email' >
					<?php echo form_error('email'); ?>
				</div>
				<div class="input-field">
					<label for="Password">Password<span class="required">*</span></label>
					<input type='password' id='password' name='password' value="<?php echo set_value('password'); ?>" placeholder='Password'></label>
					<?php echo form_error('password'); ?>

				</div>
				<div class="input-field">
					<label for="Last Name">Profile For<span class="required">*</span></label> 
					<select name='profile' id='profile'>
					<option value='0'>Select Profile</option>	
					<?php foreach($groups as $each){ ?>
						<option valuea="<?php echo $each->pr_name; ?>" ><?php echo $each->pr_name; ?></option>';
					<?php } ?>
					</select>					
					<?php echo form_error('profile'); ?>

				</div>
				<div class="input-field">
					<label for="User Name">FullName<span class="required">*</span></label>
					<input type='text' name='fullname' id='fullname' value="<?php echo set_value('fullname'); ?>" placeholder='Fullname' >
                    <?php echo form_error('fullname'); ?>				
				</div>				
				<div class="input-field">
					<label for="gender">Gender<span class="required">*</span></label>
					<div class="subradio" >
						Male : <input type='radio' id='radio' name='gender' value='male'>
						Female : <input type='radio' id='radio' name='gender' value='female'>		
					</div>
					<?php echo form_error('gender'); ?>			
				</div>
				<div class="input-field">
					<label for="Date">Date Of Birth<span class="required">*</span></label>
					<input type='text' id='date' name='date' placeholder='Date Of Birth'>
					<?php echo form_error('date'); ?>
				</div>
				<div class="input-field">
					<label for="religion">Religion<span class="required">*</span></label> 
					<select name='religion' id='religion'>
						<option value='0'>Select Religion</option> 
						<?php foreach($religion as $rel){ ?>
						<option value="<?php echo $rel->rel_name; ?>"><?php echo $rel->rel_name; ?></option>';
						<?php } ?>
						</select>					
                    <?php echo form_error('religion'); ?> 				
				</div>
				<div class="input-field">
					<label for="mother-tongue">Mother Tongue<span class="required">*</span></label> 
					<select name='mother-tongue' id='mother-tongue'>
						<option value='0'>Select Mother-Tongue</option> 
					    <?php foreach($mtongue as $tongue){ ?>
						<option value="<?php echo $tongue->mo_name; ?>"><?php echo $tongue->mo_name; ?></option>';
						<?php } ?>	
					</select>					
				    <?php echo form_error('mother-tongue'); ?> 
				</div>
				<div class="input-field">
					<label for="living">Living In<span class="required">*</span></label> 
					<select name='living-in' id='living-in'>
						<option value='0'>Select</option> 
						<?php foreach($living as $live){ ?>
						<option value="<?php echo $live->li_name; ?>"><?php echo $live->li_name; ?></option>';
						<?php } ?>							
						</select>					
				    <?php echo form_error('living-in'); ?>
				</div>
				<div class="input-field">
					<label for="mobile">Mobile No.<span class="required">*</span></label> 
					<!--<select name='mobile'><option value='0'>Select</option></select> -->
					<input type='text' id='mobile' name='mobile' placeholder='Mobile No'>					
				    <?php echo form_error('mobile'); ?>
				</div>				
				<div class="input-field">
					<label for="Submit"><input type='submit' value='submit' class='myButton'></label>
				</div>
				
			<?php echo form_close(); ?>                    
		</div>
	</body>	
</html>		
