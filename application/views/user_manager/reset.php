<div class="wrapper">
	<div class="form1">
		<div class="row">
			<?php echo $this->session->flashdata('msg'); ?>
		</div>

		<?php echo form_open(base_url().'webapp/reset/')?>
	
		<div class="formtitle">Forgot your password</div>

		<span class="error"><?php echo validation_errors(); ?></span>
		<span class="error"><b><?php echo $reset_failed; ?></b></span>
	
		<div class="input" style="border-bottom: 0px">
			<div class="inputtext">Your Registered Email: </div>
			<div class="inputcontent">
				<input type="text" name="email" placeholder="Your email" value="<?php echo set_value('email'); ?>"/>
			</div>
		</div>

		<div>
			<input class="orangebutton" type="submit" value="Submit" name="submit"/>
		</div>
				
		<?php echo form_close()?>
		<div>New User? <a href="<?php echo base_url('webapp/register') ?>">Sign Up Here</a></div>
	</div>
</div>