<main class="container_02">
<!-- Left Column / Headphones Image -->
<div class="left-column">
<img data-image="pink" src="<?php echo base_url() ?><?php echo $proDetails['product_image_4'] ?>" alt="">
  <img data-image="black" src="<?php echo base_url() ?><?php echo $proDetails['product_image_3'] ?>" alt="">
  <img data-image="blue" src="<?php echo base_url() ?><?php echo $proDetails['product_image_2'] ?>" alt="">
  <img data-image="red" class="active" src="<?php echo base_url() ?><?php echo $proDetails['product_image_1'] ?>" alt="">
</div>
<!-- Right Column -->
<div class="right-column">

  <!-- Product Description -->
  <div class="product-description">
	<span>Headphones</span>
	<h1><?php echo $proDetails['product_name'] ?></h1>
	<p><?php echo $proDetails['product_desc'] ?></p>
  </div>

  <!-- Product Configuration -->
  <div class="product-configuration">

	<!-- Product Color -->
	<div class="product-color">
	  <span>Color</span>

	  <div class="color-choose">
		<div>
		  <input data-image="red" type="radio" id="red" name="color" value="red" checked>
		  <label for="red"><span></span></label>
		</div>
		<div>
		  <input data-image="blue" type="radio" id="blue" name="color" value="blue">
		  <label for="blue"><span></span></label>
		</div>
		<div>
		  <input data-image="black" type="radio" id="black" name="color" value="black">
		  <label for="black"><span></span></label>
		</div>
		<div>
		  <input data-image="pink" type="radio" id="pink" name="color" value="pink">
		  <label for="pink"><span></span></label>
		</div>
	  </div>

	</div>

	<!-- Cable Configuration -->
	<div class="cable-config">
	  <span>Cable configuration</span>

	  <div class="cable-choose">
		<button>Straight</button>
		<button>Coiled</button>
		<button>Long-coiled</button>
	  </div>

	  <a href="#">How to configurate your headphones</a>
	</div>
  </div>

  <!-- Product Pricing -->
  <div class="product-price">
	<span>Price: <?php echo $proDetails['product_price'] ?></span>
	<a href="#" class="cart-btn">Add to cart</a>
  </div>
</div>
</main>