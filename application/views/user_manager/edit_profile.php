<div class="wrapper">
	<div class="form1">
		<div class="row">
	    	<?php echo $this->session->flashdata('verify_msg'); ?>
			<?php echo $this->session->flashdata('msg'); ?>
		</div>

		<div class="formtitle"> Edit Your Profile</div>

		<?php echo form_open(base_url()."webapp/edit_profile/")?>
		<span class="error"><?php echo validation_errors() ?></span>

		<div class="input">
			<div class="inputtext">Your Username</div>
			<div>
				<?php echo $username ?>
			</div>
		</div>

		<div class="input">
			<div class="inputtext">Profile Picture</div>
			<div>
				<img src="<? echo base_url().$dp; ?>_thumb.jpg" />
				<input type="file" name="dp" />
			</div>
			<div><label><input type="checkbox" name="deletedp" />Delete my profile picture</label></div>
		</div>


		<div class="input">
			<div class="inputtext">Your First Name</div>
			<div class="inputcontent">
				<input type="text" name="firstname" placeholder="Your First Name" value="<?php echo set_value('firstname') ?>" />
			</div>
		</div>

		<div class="input">
			<div class="inputtext">Your Last Name</div>
			<div class="inputcontent">
				<input type="text" name="lastname" placeholder="Your Last Name" value="<?php echo set_value('lastname') ?>" />
			</div>
		</div>

		
		<div class="input">
			<div class="inputtext">Your Password</div>
			<div class="inputcontent">
				<input type="password" name="password" placeholder="Your Password" value="<?php echo set_value('password') ?>" />
			</div>
		</div>

		<div class="input">
			<div class="inputtext">Confirm Your Password</div>
			<div class="inputcontent">
				<input type="password" name="passconf" placeholder="Your Password" value="<?php echo set_value('passconf') ?>" />
			</div>
		</div>

		<div class="input">
			<div class="inputtext">Country</div>
			<select name="country">
				<option value="">Select Country</option>
				<option value="Vietnam" <?php echo set_select('country', 'Vietnam'); ?> >Vietnam</option>
				<option value="Laos" <?php echo set_select('country', 'Laos'); ?> >Laos</option>
				<option value="Brunei" <?php echo set_select('country', 'Brunei'); ?> >Brunei</option>
				<option value="Cambodia" <?php echo set_select('country', 'Cambodia'); ?> >Cambodia</option>
				<option value="Myanmar" <?php echo set_select('country', 'Myanmar'); ?> >Myanmar</option>
				<option value="Thailand" <?php echo set_select('country', 'Thailand'); ?> >Thailand</option>
			</select>
		</div>

		<div class="input">
			<div class="inputtext">Your Address</div>
			<div>
				<textarea class="textarea" name="address" placeholder="Your Address"><?php echo set_value('address') ?></textarea>
			</div>
		</div>

		<div class="input">
			<div class="inputtext">Your Gender</div>
			<input type="radio" name="gender" value="Male"  <?php echo set_radio('gender', 'Male'); ?> /> Male &nbsp;&nbsp;   <input type="radio" name="gender" value="Female"  <?php echo set_radio('gender', 'Female'); ?> />   Female
		</div>

		<div class="input">
			<div class="inputtext">Profile Privacy</div>
			<input type="radio" name="profileprivacy" value="Male"  <?php echo set_radio($profileprivacy, 'Private'); ?> /> Private &nbsp;&nbsp;   <input type="radio" name="profileprivacy" value="Female"  <?php echo set_radio($profileprivacy, 'Public'); ?> />   Public
		</div>
		
		<div><input class="orangebutton" type="submit" value="Submit" name="submit"/></div>
	</div>
</div>

<?php echo form_close()?>
