<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="https://www.b-cube.in/wp-content/uploads/2014/05/aditya-300x177.jpg" id="icon" alt="User Icon" />
      <h1>Aditya News</h1>
    </div>

    <!-- Login Form -->
    <?php if($this->session->flashdata('signupSucess')) { ?>
     
     <div class="alert alert-success"><?php echo $this->session->flashdata('signupSucess') ?></div>
        
    <?php } ?>
    
      <input type="text" id="inputUname" class="fadeIn second" name="inputUname" placeholder="Username">
      <input type="password" id="inputPassword" class="fadeIn third" name="inputPassword" placeholder="Password">
      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />	
      <div id="error"></div>
      <input type="submit" id="ulogin" class="fadeIn fourth" value="Log In">
    
    
    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Go to the Site</a>
    </div>

  </div>
</div>