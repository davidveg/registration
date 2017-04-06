

    <!-- Page Content -->

	<a  name="register"></a>
    <div class="content-section-a">

        <div class="container">
					<div class="panel panel-default">
						<div class="panel-body">
							<?php if(Session::get_flash('success')) : ?>
								<div class="alert alert-success"> <?php echo Session::get_flash('success') ?></div>
							<?php endif; ?>
							<?php if(Session::get_flash('error')) : ?>
								<div class="alert alert-danger"> <?php echo Session::get_flash('error') ?></div>
							<?php endif; ?>
 						</div>
					</div>
					<div class="panel panel-default">
					<div class="panel-body">
	          <?php echo Form::open(array('id' => 'form_validation', 'action' => 'registration/index', 'method' => 'post')) ?>
	            <div class="form-group">
								<label for="email">Email address:</label>
								<?php echo Form::input('email', $val->validated('email'), array('placeholder' => 'Your Email', 'class' => 'form-control', 'type' => 'email', 'size' => '50')) ?>
								<?php echo $val->error('email') ?>
							</div>
	            <div class="form-group">
	              <label for="confirm_email">Confirm Email:</label>
	              <?php echo Form::input('confirm_email', $val->validated('confirm_email'), array('placeholder' => 'Confirm Your Email', 'class' => 'form-control')) ?>
								<?php echo $val->error('confirm_email') ?>
							</div>
	            <div class="form-group">
	              <label for="pwd">Password:</label>
								<?php echo Form::password('password', $val->validated('password'), array('placeholder' => 'Your Password', 'class' => 'form-control', 'id' => 'password')) ?>
								<?php echo $val->error('password') ?>
	            </div>
	            <div class="form-group">
	              <label for="confirm_pwd">Confirm Password:</label>
	              <?php echo Form::password('confirm_password', $val->validated('confirm_password'), array('placeholder' => 'Confirm Your Password', 'class' => 'form-control')) ?>
								<?php echo $val->error('confirm_password') ?>
	            </div>
	            <div class="form-group">
	              <label for="firstname">First Name:</label>
								<?php echo Form::input('firstname', $val->validated('firstname'), array('class' => 'form-control')) ?>
								<?php echo $val->error('firstname') ?>
	            </div>
	            <div class="form-group">
	              <label for="lastname">Last Name:</label>
								<?php echo Form::input('lastname', $val->validated('lastname'), array('class' => 'form-control')) ?>
								<?php echo $val->error('lastname') ?>
	            </div>
	            <div class="form-group">
	              <label for="street_address">Address:</label>
								<?php echo Form::input('street_address', $val->validated('street_address'), array('class' => 'form-control')) ?>
								<?php echo $val->error('street_address') ?>
	            </div>

	            <div class="form-group">
	              <label for="country">Country:</label>
	              <select class="form-control" name="country" id="country">
	                <option selected disabled>Choose one...</option>
	                <?php foreach ($countries as $country) : ?>
	                  <option <?php if ($val->validated('country') == $country -> id) { ?>selected<?php }; ?> value="<?php echo $country -> id ?>"><?php echo $country -> name ?></option>;
	                 <?php endforeach; ?>
	              </select>
	            </div>

	            <div class="form-group">
	              <label for="zipcode">Zip Code:</label>
								<?php echo Form::input('zipcode', $val->validated('zipcode') , array('class' => 'form-control zipcode')) ?>
								<?php echo $val->error('zipcode') ?>
	            </div>
	            <div class="form-group">
	              <label for="location">Location:</label>
								<?php echo Form::input('location', $val->validated('location'), array('placeholder' => 'State/District/Location', 'class' => 'form-control')) ?>
								<?php echo $val->error('location') ?>
	            </div>
	            <div class="form-group">
	              <label for="nif">NIF:</label>
								<?php echo Form::input('nif', $val->validated('nif'), array('class' => 'form-control nif', 'type' => 'number')) ?>
								<?php echo $val->error('nif') ?>
	            </div>
	            <div class="form-group">
	              <label for="phone_number">Phone Number:</label>
								<?php echo Form::input('phone_number', $val->validated('phone_number'), array('class' => 'form-control', 'type' => 'number')) ?>
								<?php echo $val->error('phone_number') ?>
							</div>
							<div class="actions">
							<?php echo Form::submit('send', 'Submit',  array('class' => 'btn btn-default')) ?>
							</div>
	        	</form>
					</div>
				</div>
        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->
