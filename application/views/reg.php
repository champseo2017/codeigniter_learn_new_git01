
        <div class="row centered-form mt-5" style="margin-top:20px;">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Please sign up for Bootsnipp <small>It's free!</small></h3>
			 			</div>
			 			<div class="panel-body">
                        <?php echo form_open('register/signup', array('role'=>'form')) ?>
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
                                      <?php echo form_input(array('name'=>'uname', 'id'=>'inputFname1','placeholder'=>'Username', 'class'=>'form-control input-sm', 'type'=>'text')) ?>
                                      <?php if(form_error('uname')) { ?>
                                        <div class='alert alert-danger' role='alert'>
                                            <?php echo form_error('uname'); ?>
                                        </div>
                                      <?php } ?>
                                    </div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
                                     <?php echo form_input(array('name'=>'first_name', 'id'=>'first_name','placeholder'=>'First name', 'class'=>'form-control input-sm', 'type'=>'text')) ?>
                                    <?php if(form_error('first_name')) { ?>
                                            <div class='alert alert-danger' role='alert'>
                                            <?php echo form_error('first_name'); ?>
                                            </div>
                                    <?php } ?>
			    					</div>
			    				</div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
                                    <?php echo form_input(array('name'=>'last_name', 'id'=>'last_name','placeholder'=>'Last name', 'class'=>'form-control input-sm', 'type'=>'text')) ?>
                                    <?php if(form_error('last_name')) { ?> 
                                    <div class='alert alert-danger' role='alert'>
                                        <?php echo form_error('last_name'); ?>
                                    </div>
                                    <?php } ?>
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
                                <?php echo form_input(array('name'=>'email', 'id'=>'email','placeholder'=>'Email', 'class'=>'form-control input-sm', 'type'=>'email')) ?>
                                <?php if(form_error('email')){ ?>
                                <div class='alert alert-danger' role='alert'>
                                    <?php echo form_error('email'); ?>
                                </div>
                                <?php } ?> 
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
                                    <?php echo form_input(array('name'=>'password', 'id'=>'password','placeholder'=>'Password', 'class'=>'form-control input-sm', 'type'=>'password')) ?>
                                    <?php if(form_error('password')){ ?> 
                                    <div class='alert alert-danger' role='alert'>
                                        <?php echo form_error('password'); ?>
                                    </div>
                                    <?php } ?> 
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
                                        <?php echo form_input(array('name'=>'password_confirmation', 'id'=>'password_confirmation','placeholder'=>'Password confirmation', 'class'=>'form-control input-sm', 'type'=>'password')) ?>
                                        <?php if(form_error('password_confirmation')){ ?>
                                        <div class='alert alert-danger' role='alert'>
                                            <?php echo form_error('password_confirmation'); ?>
                                        </div>
                                        <?php } ?> 
			    					</div>
			    				</div>
                                <input type="hidden" id="is_new_customer" name="is_new_customer" value="1">
                                <input type="hidden" id="email_create" name="email_create" value="1">
			    			</div>	
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name() ?>" value="<?php echo $this->security->get_csrf_hash() ?>">		    			
			    			<input type="submit" value="Register" class="btn btn-info btn-block">
                        <?php echo form_close(); ?>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>