

  <div id="footer"><!-- Footer -->
              <div class="footer-widget">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-3">
                              <div class="text-widget">
                                  <div class="wid-title">Welcome to</div>
                                  <img src="<?php echo base_url('assets/images/logo-white.png')  ?>" alt="ft-logo">
                                  <p>
                                      Believe isCommerce WordPress theme. It has<br/>everything you need to start selling today! <a href="">Get this theme on ThemeForest!</a>
                                  </p>
                                  <ul class="ft-soc clearfix">
                                      <li><a href=""><i class="fa fa-facebook-square"></i></a></li>
                                      <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                      <li><a href=""><i class="fa fa-google-plus-square"></i></a></li>
                                      <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                      <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                                  </ul>
                                  <div class="clearfix"></div>
                              </div>
                          </div>
                          <div class="col-md-2">
                              <div class="quick-links">
                                  <div class="wid-title">Quick Links</div>
                                  <ul>
                                      <li><a href="index.html">Home</a></li>
                                      <li><a href="#">About US</a></li>
                                      <li><a href="contact.html">contact US</a></li>
                                      <li><a href="#">deals</a></li>
                                      <li><a href="blog.html">blog</a></li>
                                      <li><a href="#">help</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="col-md-2">
                              <div class="term">
                                  <div class="wid-title">&nbsp;</div>
                                  <p>
                                      <a href="#">Tearms & condition</a><br/>
                                      <a href="#">FAQs</a><br/>
                                      <a href="#">Privacy Policy</a><br/>
                                      <a href="#">Legal Desclaimer</a><br/>
                                  </p>
                              </div>
                          </div>
                          <div class="col-md-2">
                              <div class="quick-links">
                                  <div class="wid-title">My Account</div>
                                  
                                  <ul>
                                      <li><a href="#">My Account</a></li>
                                      <li><a href="#">Personal Information</a></li>
                                      <li><a href="#">Addresses</a></li>
                                      <li><a href="#">Orders</a></li>
                                      <li><a href="#">Wishlist</a></li>
                                      <li><a href="#">track order</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="subscribe">
                                  <div class="wid-title">Subscribe for OFFERS & UPDATES</div>
                                  <p>
                                      Enter your email and we'll send you a coupon
                                      with 10% off your next order. Add any text here
                                  </p>
                                  <form>
                                      <div class="form-group">
                                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                      </div>
                                      <button type="submit" class="btn btn-default">Subscribe Now</button>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="footer-text">
                  <div class="container">
                      <p>Copyright 2018 All Rights Reserved by Believe. Designed and Developed by <a href="https://bootstrapmart.com/">BootstrapMart </a></p>
                  </div>
              </div>
          </div><!-- Footer -->
</div>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="<?php echo base_url('assets/js/library.js')  ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')  ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/owl.carousel.min.js')  ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.raty.js')  ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/ui.js')  ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.prettyPhoto.js')  ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.selectbox-0.2.js')  ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/theme-script.js')  ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/raw/js/custome.js')  ?>"></script>
<script>
$(document).ready(function() {
    
   
    $("#ulogin").click(function(event){
        event.preventDefault();
        var user_name = $("#inputUname").val();
    	var password = $("#inputPassword").val();
        $.ajaxSetup({
        beforeSend:function(jqXHR, Obj){
            var value = "; " + document.cookie;
            var parts = value.split("; csrf_cookie_name=");
            if(parts.length == 2)   
            Obj.data += '&csrf_token='+parts.pop().split(";").shift();
        }
        });
		$.ajax({
		    method: "POST",
            url: "login/userLogin",
            datatype:'json',
			data: {uname:user_name,pwd:password},
		})
		.done(sucess)
		.fail(function(xhr, textStatus, errorThrown){
			console.log(xhr.responseText);
		});
    });
    function sucess (data)
    {
      if(data === "sucess"){
        window.location.href="<?php echo base_url() ?>";
      }else if(data === "failed") {
          $("#error").html("<div class='alert alert-warning'>worng credential</div>");
      }else if(data === "blank")
      {
          $("#error").html("<div class='alert alert-warning'>all fiealds are mandatory</div>");
      }
    }

    $(".owl-carousel").owlCarousel({
    loop: true,
    pagination: false,
    autoPlay: true,
    autoplayTimeout: 2500,
    slideSpeed : 2500,
    singleItem: true,
    nav: false,
    });

    $('.color-choose input').on('click', function() {
      var headphonesColor = $(this).attr('data-image');

      $('.active').removeClass('active');
      $('.left-column img[data-image = ' + headphonesColor + ']').addClass('active');
      $(this).addClass('active');
  });
    
    $("#cat_01").click(function(){
        $("#sidebar_shoes").toggle();
    });

});
</script>
</body>
</html>