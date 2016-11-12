<div class="wrapper">
	<div class="form1">
		<div class="row">
        	<?php echo $this->session->flashdata('verify_msg'); ?>
			<?php echo $this->session->flashdata('msg'); ?>        	
		</div>

		<?php echo form_open(base_url().'webapp/login/')?>
	
		<div class="formtitle">Login to your account</div>
		
		<span class="error"><?php echo validation_errors(); ?></span>
	
		<span class="error"><b><?php echo $login_failed; ?></b></span>
		<div class="input" style="border-bottom: 0px">
			<div class="inputtext">Username Or Email: </div>
			<div class="inputcontent">
				<input type="text" name="username" placeholder="Your username or email" value="<?php echo set_value('username'); ?>"/>
			</div>
		</div>
			
		<div class="input" style="border-bottom: 0px">
			<div class="inputtext">Password: </div>
			<div class="inputcontent">
				<input type="password" name="password" placeholder="Your Password" value="<?php echo set_value('password'); ?>" /><br/>
			</div>
		</div>



		<p>
			<!-- <?php
				// $link_protocol = USE_SSL ? 'https' : NULL;
			?> -->
			<!-- <a href="<?php  $link_protocol; ?>"> -->
			<a href="<?php echo base_url('webapp/reset'); ?>">
				Can't access your account?
			</a>
		</p>

		<div>
			<input class="orangebutton" type="submit" value="Login" name="submit_login"/>
		</div>
				
		<?php echo form_close()?>
		<div>New User? <a href="<?php echo base_url('webapp/register') ?>">Sign Up Here</a></div>
	</div>
</div>