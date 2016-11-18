<?php $this->load->helper('date'); ?>

<div class="wrapper">
	<div class="form1">
		<div class="row">
	    	<?php echo $this->session->flashdata('verify_msg'); ?>
			<?php echo $this->session->flashdata('msg'); ?>
		</div>

		<div class="formtitle"> Your Profile </div>

		<?php echo form_open(base_url()."webapp/profile/")?>

		<div class="input">
			<div class="inputtext">Your User Name</div>
			<div>
				<?php echo $username; ?>
			</div>
		</div>

		<div class="input">
			<div class="inputtext">Your First Name</div>
			<div class="inputcontent">
				<?php echo $firstname; ?>
			</div>
		</div>

		<div class="input">
			<div class="inputtext">Your Last Name</div>
			<div class="inputcontent">
				<?php echo $lastname ?>
			</div>
		</div>

		<div class="input">
			<div class="inputtext">Your Gender</div>
			<?php echo $gender ?>
		</div>

		<div class="input">
			<div class="inputtext">Profile Privacy</div>
			<div class="inputcontent">
				<?php echo $profileprivacy ?>
			</div>
		</div>

		<div class="input">
			<div class="inputtext">Your Email</div>
			<div class="inputcontent">
				<?php echo $email ?>
			</div>
		</div>

		<div class="input">
			<div class="inputtext">Country</div>
			<div class="inputcontent">
				<?php echo $country ?>
			</div>
		</div>

		<div class="input">
			<div class="inputtext">Your Address</div>
			<div>
				<?php echo $address ?>
			</div>
		</div>

		<div class="input">
			<div class="inputtext">You Registered On</div>
			<div>
				<?php echo unix_to_human($registereddate) ?>
			</div>
		</div>

		<div style="margin-top: 20px">You are logged in your profile <br/> <br/> <a href="<?php echo base_url('webapp/logout') ?>"> Click here </a> to logout</div>
		
		<?php
			 
			if ($this->user_manager->is_this_admin()) {
				echo '<a href="'. base_url().'webapp/edit_profile/'.$username.'">Edit this persons Profile</a>';
			}
			elseif ($this->user_manager->this_user_name() == $username){
				echo '<a href="'. base_url().'webapp/edit_profile/">Edit Profile</a>';
			}
		?>
	</div>
</div>

<?php echo form_close()?>
