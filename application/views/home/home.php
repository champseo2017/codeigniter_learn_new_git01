
          
          <div id="main-slider"> <!-- Slider -->
              <div id="home-slider" class="owl-carousel owl-theme">
                  <div class="item">
                      <img src="<?php echo base_url('assets/images/slider-1.jpg')  ?>" alt="slide-1" class="img-responsive">
                      <div class="slider-desc">
                          <div class="container">
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="slide-offers-left">
                                          <div class="slide-offers-title"><span>Men’s</span><br/>FASHION</div>
                                          <p>New & Fvhresh collection<br/>arraival in believe store</p>
                                          <a href="" class="btn btn-blue">Shop now</a>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                       <div class="slide-offers-right">
                                          <div class="slide-offers-title"><span>Women’s</span><br/>FASHION</div>
                                          <p>New & Fvhresh collection<br/>arraival in believe store</p>
                                          <a href="" class="btn btn-magenta">Shop now</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="item">
                      <img src="<?php echo base_url('assets/images/slider-2.jpg')  ?>" alt="slide-2" class="img-responsive">
                      <div class="slider-desc">
                          <div class="container">
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="slide-offers-left">
                                          <div class="slide-offers-title"><span>50% Price cut</span><br/>for online order</div>
                                          <p>New & Fvhresh collection<br/>arraival in believe store</p>
                                          <a href="" class="btn btn-blue">Shop now</a>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                       
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div> <!-- Slider -->
          
          <div id="content"> <!-- Content -->
              <div class="container">
                  <div class="home-content">
                      <div class="cat-offers">
                          <div class="row">
                              <div class="col-md-4">
                                  <div class="cat-sec-1">
                                      <img src="<?php echo base_url('assets/images/cat-1.jpg')  ?>" class="img-responsive" alt="">
                                      <div class="cat-desc">
                                          <div class="cat-inner">
                                              <div class="cat-title">man<span>Clothing</span></div>
                                              <a href="" class="btn btn-border">Buy Now</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="cat-sec-2">
                                      <img src="<?php echo base_url('assets/images/cat-2.jpg')  ?>" class="img-responsive" alt="">
                                       <div class="cat-desc">
                                           <div class="cat-inner">
                                              <div class="cat-title">woman<span>Clothing</span></div>
                                              <a href="" class="btn btn-border">Buy Now</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="cat-sec-3">
                                      <img src="<?php echo base_url('assets/images/cat-3.jpg')  ?>" class="img-responsive" alt="">
                                       <div class="cat-desc">
                                           <div class="cat-inner">
                                              <div class="cat-title">accessories<span>collections - 2014</span></div>
                                              <a href="" class="btn btn-border">shop Now</a>
                                           </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              
              <div class="newest">
                  <div class="container">
                      <div class="newest-content">
                          <div class="newest-tab">
                              <ul id="myTab" class="nav nav-tabs newest" role="tablist">
                                  <li role="presentation" class="active">
                                      <a href="#1" id="cat-1" role="tab" data-toggle="tab" aria-controls="1" aria-expanded="true">Featured</a>
                                  </li>
                                  <li role="presentation">
                                      <a href="#2" role="tab" id="cat-2" data-toggle="tab" aria-controls="2">New Arrivals</a>
                                  </li>
                                  <li role="presentation">
                                      <a href="#3" role="tab" id="cat-3" data-toggle="tab" aria-controls="3">Best Seller</a>
                                  </li>
                                  <li role="presentation">
                                      <a href="#4" role="tab" id="cat-4" data-toggle="tab" aria-controls="4">Latest Products</a>
                                  </li>
                              </ul>
                              
                              
                              <div id="myTabContent" class="tab-content">
                                  <div role="tabpanel" class="tab-pane fade in active" id="1" aria-labelledby="cat-1">
                                      <div class="row clearfix">
                                      <?php foreach($sub_feature_brogue_shoes as $featureProduct)  { ?> 
                                        <?php
                                        $prodAddDate = $featureProduct['product_time'];
                                        $proTime = strtotime($prodAddDate);
                                        $proDate = date('d-m-Y',$proTime);
                                        $today = date('d-m-Y');
                                        ?>
                                          <div class="col-md-3 prdct-grid">
                                              <div class="product-fade">
													<div class="product-fade-wrap">
                                                    <?php if($proDate == $today) { ?>
                                                    <span>Product New</span>
                                                    <?php } ?>
                                                        <div id="product-image" class="owl-carousel owl-theme">
                                                            <div class="item"><img src="<?php echo base_url()?><?php echo $featureProduct['product_image_1'] ?>" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="<?php echo base_url()?><?php echo $featureProduct['product_image_2'] ?>" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="<?php echo base_url()?><?php echo $featureProduct['product_image_3'] ?>" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="<?php echo base_url()?><?php echo $featureProduct['product_image_4'] ?>" alt="" class="img-responsive"></div>
                                                        </div>
														<div class="product-fade-ct">
                                                            
                                                            <div class="product-fade-control">
                                                                <div class="to-left">
                                                                    <a href=""><i class="fa fa-heart"></i></a>
                                                                    <a href=""><i class="fa fa-retweet"></i></a>
                                                                    <a href=""><i class="fa fa-search"></i></a>
                                                                </div>
                                                                <div class="to-right">
                                                                    <div id="product-control" class="owl-carousel owl-theme clearfix">
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <a href="" class="btn btn-to-cart"><span class="bag"></span><span>Add To cart</span><div class="clearfix"></div></a>
                                                            </div>
                                                            
														</div>
													</div>
                                              </div>
                                              
                                              <div class="product-name">
                                                  <a href="<?php echo base_url('product/productDetails/')?>?pid=<?php echo $featureProduct['product_id'] ?>"><?php echo $featureProduct['product_name'] ?></a>
                                              </div>
                                              <div class="star-1"></div>
                                              <div class="product-price">
                                                  <span><?php echo $featureProduct['product_price'] ?></span>
                                              </div>
                                          </div>
                                      <?php } ?>
                                      </div>
                                  </div>
                                  
                                  <div role="tabpanel" class="tab-pane fade" id="2" aria-labelledby="cat-2">
                                     <div class="row clearfix">
                                      <?php foreach($sub_feature_toe_cap as $featureProduct)  { ?> 
                                        <?php
                                        $prodAddDate = $featureProduct['product_time'];
                                        $proTime = strtotime($prodAddDate);
                                        $proDate = date('d-m-Y',$proTime);
                                        $today = date('d-m-Y');
                                        ?>
                                          <div class="col-md-3 prdct-grid">
                                              <div class="product-fade">
													<div class="product-fade-wrap">
                                                    <?php if($proDate == $today) { ?>
                                                    <span>Product New</span>
                                                    <?php } ?>
                                                        <div id="product-image" class="owl-carousel owl-theme">
                                                            <div class="item"><img src="<?php echo base_url()?><?php echo $featureProduct['product_image_1'] ?>" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="<?php echo base_url()?><?php echo $featureProduct['product_image_2'] ?>" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="<?php echo base_url()?><?php echo $featureProduct['product_image_3'] ?>" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="<?php echo base_url()?><?php echo $featureProduct['product_image_4'] ?>" alt="" class="img-responsive"></div>
                                                        </div>
														<div class="product-fade-ct">
                                                            <div class="product-fade-control">
                                                                <div class="to-left">
                                                                    <a href=""><i class="fa fa-heart"></i></a>
                                                                    <a href=""><i class="fa fa-retweet"></i></a>
                                                                    <a href=""><i class="fa fa-search"></i></a>
                                                                </div>
                                                                <div class="to-right">
                                                                    <div id="product-control" class="owl-carousel owl-theme clearfix">
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <a href="" class="btn btn-to-cart"><span class="bag"></span><span>Add To cart</span><div class="clearfix"></div></a>
                                                            </div>
                                                            
														</div>
													</div>
                                              </div>
                                              
                                              <div class="product-name">
                                                  <a href="<?php echo base_url('product/productDetails/')?>?pid=<?php echo $featureProduct['product_id'] ?>"><?php echo $featureProduct['product_name'] ?></a>
                                              </div>
                                              <div class="star-1"></div>
                                              <div class="product-price">
                                                  <span><?php echo $featureProduct['product_price'] ?></span>
                                              </div>
                                          </div>
                                      <?php } ?>
                                      </div>
                                  </div>
                                  
                                  <div role="tabpanel" class="tab-pane fade" id="3" aria-labelledby="cat-3">
                                  <div class="row clearfix">
                                      <?php foreach($sub_feature_monk_shoes as $featureProduct)  { ?> 
                                        <?php
                                        $prodAddDate = $featureProduct['product_time'];
                                        $proTime = strtotime($prodAddDate);
                                        $proDate = date('d-m-Y',$proTime);
                                        $today = date('d-m-Y');
                                        ?>
                                          <div class="col-md-3 prdct-grid">
                                              <div class="product-fade">
													<div class="product-fade-wrap">
                                                    <?php if($proDate == $today) { ?>
                                                    <span>Product New</span>
                                                    <?php } ?>
                                                        <div id="product-image" class="owl-carousel owl-theme">
                                                            <div class="item"><img src="<?php echo base_url()?><?php echo $featureProduct['product_image_1'] ?>" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="<?php echo base_url()?><?php echo $featureProduct['product_image_2'] ?>" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="<?php echo base_url()?><?php echo $featureProduct['product_image_3'] ?>" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="<?php echo base_url()?><?php echo $featureProduct['product_image_4'] ?>" alt="" class="img-responsive"></div>
                                                        </div>
														<div class="product-fade-ct">
                                                            <div class="product-fade-control">
                                                                <div class="to-left">
                                                                    <a href=""><i class="fa fa-heart"></i></a>
                                                                    <a href=""><i class="fa fa-retweet"></i></a>
                                                                    <a href=""><i class="fa fa-search"></i></a>
                                                                </div>
                                                                <div class="to-right">
                                                                    <div id="product-control" class="owl-carousel owl-theme clearfix">
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <a href="" class="btn btn-to-cart"><span class="bag"></span><span>Add To cart</span><div class="clearfix"></div></a>
                                                            </div>
                                                            
														</div>
													</div>
                                              </div>
                                              
                                              <div class="product-name">
                                                  <a href="<?php echo base_url('product/productDetails/')?>?pid=<?php echo $featureProduct['product_id'] ?>"><?php echo $featureProduct['product_name'] ?></a>
                                              </div>
                                              <div class="star-1"></div>
                                              <div class="product-price">
                                                  <span><?php echo $featureProduct['product_price'] ?></span>
                                              </div>
                                          </div>
                                      <?php } ?>
                                      </div>
                                  </div>
                                  <div role="tabpanel" class="tab-pane fade" id="4" aria-labelledby="cat-4">
                                      <div class="row clearfix">
                                      <?php foreach($sub_latest_product_home as $latest_product)  { ?> 
                                        <?php
                                        $prodAddDate = $latest_product['product_time'];
                                        $proTime = strtotime($prodAddDate);
                                        $proDate = date('d-m-Y',$proTime);
                                        $today = date('d-m-Y');
                                        ?>
                                          <div class="col-md-3 prdct-grid">
                                              <div class="product-fade">
													<div class="product-fade-wrap">
                                                    <?php if($proDate == $today) { ?>
                                                    <span>Product New</span>
                                                    <?php } ?>
                                                        <div id="product-image" class="owl-carousel owl-theme">
                                                            <div class="item"><img src="<?php echo base_url()?><?php echo $latest_product['product_image_1'] ?>" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="<?php echo base_url()?><?php echo $latest_product['product_image_2'] ?>" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="<?php echo base_url()?><?php echo $latest_product['product_image_3'] ?>" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="<?php echo base_url()?><?php echo $latest_product['product_image_4'] ?>" alt="" class="img-responsive"></div>
                                                        </div>
														<div class="product-fade-ct">
                                                            <div class="product-fade-control">
                                                                <div class="to-left">
                                                                    <a href=""><i class="fa fa-heart"></i></a>
                                                                    <a href=""><i class="fa fa-retweet"></i></a>
                                                                    <a href=""><i class="fa fa-search"></i></a>
                                                                </div>
                                                                <div class="to-right">
                                                                    <div id="product-control" class="owl-carousel owl-theme clearfix">
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <a href="" class="btn btn-to-cart"><span class="bag"></span><span>Add To cart</span><div class="clearfix"></div></a>
                                                            </div>
                                                            
														</div>
													</div>
                                              </div>
                                              
                                              <div class="product-name">
                                                  <a href="<?php echo base_url('product/productDetails/')?>?pid=<?php echo $latest_product['product_id'] ?>"><?php echo $latest_product['product_name'] ?></a>
                                              </div>
                                              <div class="star-1"></div>
                                              <div class="product-price">
                                                  <span><?php echo $latest_product['product_price'] ?></span>
                                              </div>
                                          </div>
                                      <?php } ?>
                                      </div>
                                </div>
                              </div>
                              <?php echo form_open('product/searchProduct', array('role'=>'form')) ?>
                              <input id="srchFId" class="" type="text" placeholder="Product Name" name="searchpro">
                              <select class="srchTxt" name="cat_id">
                              <option value="">All</option>
                              <?php foreach($category as $categorys) { ?>
                              <option value="<?php echo $categorys['cat_id'] ?>"><?php echo $categorys['cat_name'] ?></option>
                              <?php } ?>
                              </select>
                              <button type="submit" id="submitButton" class="">Go Search</button>
                              <?php echo form_close(); ?>
                             
                              </div>
                      </div>
                  </div>
              </div>
              <aside id="sidebar">
              <div id="cat_01" style="cursor: pointer;">count all category (450)</div>
                <div id="sidebar_shoes" style="display:none;">
                <?php foreach ($category as $category_all) { ?>
                 <section id="widget_1"><a href="<?php echo base_url('product/category') ?>?cat_id=<?php echo $category_all['cat_id'] ?>" target="_blank"><?php echo $category_all['cat_name'] ?>(100)</a></section>
                <?php } ?>
                </div>
              </aside>
              <div class="content-offers">
                  <div class="container">
                      <div class="ct-offers">
                          <div class="ct-offers-title">Tommy Hilfiger<br/>Women’s</div>
                          <p>The generated Lorem Ipsum is therefore always free from repetition, injected humour</p>
                          <a href="" class="btn btn-blue">Discover more Product</a>
                      </div>
                  </div>
              </div>
              
              <div class="brands">
                  <div class="container">
                      <div class="brands-inner">
                          <div class="brand-title">
                              <span>Brands</span>
                          </div>
                          
                          <div id="slider-home"> <!-- Slider -->
                              <div id="brand-carousel" class="owl-carousel owl-theme">
                                  <div class="item">
                                      <img src="<?php echo base_url('assets/images/brand-2.png')  ?>" alt="slide-1" class="img-responsive">
                                  </div>
                                  <div class="item">
                                      <img src="<?php echo base_url('assets/images/brand-3.png')  ?>" alt="slide-1" class="img-responsive">
                                  </div>
                                  <div class="item">
                                      <img src="<?php echo base_url('assets/images/brand-4.png')  ?>" alt="slide-1" class="img-responsive">
                                  </div>
                                  <div class="item">
                                      <img src="<?php echo base_url('assets/images/brand-1.png')  ?>" alt="slide-1" class="img-responsive">
                                  </div>
                                  <div class="item">
                                      <img src="<?php echo base_url('assets/images/brand-5.png')  ?>" alt="slide-1" class="img-responsive">
                                  </div>
                                  <div class="item">
                                      <img src="<?php echo base_url('assets/images/brand-2.png')  ?>" alt="slide-1" class="img-responsive">
                                  </div>
                                  <div class="item">
                                      <img src="<?php echo base_url('assets/images/brand-3.png')  ?>" alt="slide-1" class="img-responsive">
                                  </div>
                                  <div class="item">
                                      <img src="<?php echo base_url('assets/images/brand-4.png')  ?>" alt="slide-1" class="img-responsive">
                                  </div>
                                  <div class="item">
                                      <img src="<?php echo base_url('assets/images/brand-1.png')  ?>" alt="slide-1" class="img-responsive">
                                  </div>
                                  <div class="item">
                                      <img src="<?php echo base_url('assets/images/brand-5.png')  ?>" alt="slide-1" class="img-responsive">
                                  </div>
                              </div>
                          </div> <!-- Slider -->
                          
                      </div>
                  </div>
              </div>
              
              
              <div class="rec-blog">
                  <div class="container">
                      <div class="rec-blog-inner">
                          <div class="blog-title">
                              <span>The Blog</span>
                          </div>
                          <div class="row">
                              <div class="col-md-4 blog-ct">
                                  <a href=""><img src="<?php echo base_url('assets/images/rec-1.jpg')  ?>" alt="" class="img-responsive"></a>
                                  <div class="blog-ct-title">
                                      <a href="">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque !</a>
                                      <span>May 11,2014</span>
                                  </div>
                              </div>
                              <div class="col-md-4 blog-ct">
                                  <a href=""><img src="<?php echo base_url('assets/images/rec-2.jpg')  ?>" alt="" class="img-responsive"></a>
                                  <div class="blog-ct-title">
                                      <a href="">Voluptatem accusantium doloremque</a>
                                      <span>May 11,2014</span>
                                  </div>
                              </div>
                              <div class="col-md-4 blog-ct">
                                  <a href=""><img src="<?php echo base_url('assets/images/rec-3.jpg')  ?>" alt="" class="img-responsive"></a>
                                  <div class="blog-ct-title">
                                      <a href="">Voluptatem accusantium doloremque</a>
                                      <span>May 11,2014</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              
          </div> <!-- Content -->