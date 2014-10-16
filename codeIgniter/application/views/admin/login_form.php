	
<div class="row">
	<div class="col-md-12 center login-header">
		<h2>Welcome to your admin panel</h2>
	</div>        
</div>
<div class="row">
	<div class="well col-md-5 center login-box">
		<div class="alert alert-info">
			Please login with your Username and Password.
		</div>
		<?php echo validation_errors(); ?>
		<?php echo form_open('admin/c_verifylogin'); ?> 
		<fieldset>
			<div class="input-group input-group-lg">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
				<input type="text" name='username' class="form-control" placeholder="Username">
			</div>
			<div class="clearfix"></div><br>
			<div class="input-group input-group-lg">
				<span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
				<input type="password" name='password' class="form-control" placeholder="Password">
			</div>
			<div class="clearfix"></div>

			<div class="input-prepend">
				<label class="remember"  name="remember" for="remember"><input type="checkbox" name='remember_me' id="remember"> Remember me</label>
			</div>
			<div class="clearfix"></div>
			
			<p class="center col-md-5">
				<button type="submit" class="btn btn-primary">Login</button>
			</p>
		</fieldset>
		<?php echo form_close(); ?>                    
	</div>
</div>
</div>
