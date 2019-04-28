<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
         
            <h5 class="card-title text-center">Sign In</h5>
            <?php $error = $this->session->flashdata("error"); ?>
            <div class="alert alert-<?php echo $error ? 'warning' : 'info' ?> alert-dismissible" role="alert">
  			    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  				<?php echo $error ? $error : 'Enter your username and password' ?>
  			</div>
            <form action="Auth" class="form-signin" method="POST">
            <?php $error = form_error("username","<p class='text-danger'>","</p>") ?>
              <div class="form-label-group <?php echo $error ? 'has-error' : '' ?>">
                <input type="text" class="form-control" placeholder="Username" value="<?php echo set_value("username") ?>" name="username" id="username" autofocus>
                <label for="username">Username</label>
              </div>
              <?php echo $error; ?>
              <?php $error = form_error("password","<p class='text-danger'>","</p>") ?>
              <div class="form-label-group <?php echo $error ? 'has-error' : '' ?>">
                <input type="password" id="password" name="password" id="password" class="form-control" placeholder="Password" autofocus>
                <label for="password">Password</label>
              </div>
              <?php echo $error; ?>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>