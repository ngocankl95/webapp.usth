<div class="wrapper">
	<div class="form1">
		<div class="row">
			<?php echo $this->session->flashdata('msg'); ?>        	
		</div>

		<?php echo form_open(base_url().'webapp/reset_pass/')?>
	
		<div class="formtitle">Reset your account</div>
		
		<span class="error"><?php echo validation_errors(); ?></span>
	
		<span class="error"><b><?php echo $msg; ?></b></span>
		<div class="input" style="border-bottom: 0px">
			<div class="inputtext">New Password </div>
			<div class="inputcontent">
				<input type="password" name="password" placeholder="Your Password" value="<?php echo set_value('password') ?>" />
			</div>
		</div>
			
		<div class="input" style="border-bottom: 0px">
			<div class="inputtext">Confirm Your Password </div>
			<div class="inputcontent">
				<input type="password" name="passconf" placeholder="Your Password" value="<?php echo set_value('passconf') ?>" />
			</div>
		</div>

		<div>
			<input type="hidden" name="token" value="<?php echo $token; ?>" />
			<input type="hidden" name="email" value="<?php echo $email; ?>" />
		</div>

		<div>
			<input class="orangebutton" type="submit" value="Reset Password" name="submit"/>
		</div>
				
		<?php echo form_close()?>
		<div>New User? <a href="<?php echo base_url('webapp/register') ?>">Sign Up Here</a></div>
	</div>
</div>