<?php get_header(); ?>

    <a class="logo hidden-xs" href="index.html"><img src="<?php bloginfo( 'template_directory' ); ?>/bootstrap/img/chez-dodo-logo.png" alt="Chez Dodo Logo"></a>
    
    <!-- Info  Section ================================= -->
    <section id="info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Chez Dodo is part of <a href="https://squareup.com/market/chez-dodo">Square Market</a> and accepts all major credit cards.</h2>
            <h3>Proudly bringing traditional Mauritian food to Portland. Inspired by African, French, Indian, Chinese and Creole cuisines</h3>
          </div>
        </div>
      </div>
    </section>

    <!-- Locations ================================= -->
    <section id="locations" class="">
      <div class="container">

        <div class="row">
          <div class="section-heading col-sm-8 col-sm-offset-2">
            <h2>Location</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-md-offset-3 location">
            <h3>Downtown</h3>
            <ul class="box">
              <li class="box-item">427 SW Stark Street,<br /> Portland OR 97204</li>
              <li class="box-item">(503) 270-9258</li>
              <li class="box-item"><?php the_field("hours_title", 6); ?>
                <span>
                  <ul>
                    <li><small>M-F: <?php the_field("dt_mf_hours", 6); ?></small></li>
                    <li><small>Weekends: <?php the_field("dt_we_hours", 6); ?></small></li>
                  </ul>
                </span>
              </li>

              <li><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2795.4748224583195!2d-122.67590969999999!3d45.52064970000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54950a04282ff6db%3A0x9ef2ed7316c95700!2s427+SW+Stark+St%2C+Portland%2C+OR+97204!5e0!3m2!1sen!2sus!4v1421194320274" width="90%" height="200" frameborder="0" style="border:0"></iframe></li>
            </ul>

          </div>
          <!--
          <div class="col-md-6 location">
            <h3>Woodstock</h3>
            <ul class="box">
              <li class="box-item">4804 SE Woodstock Blvd.<br /> Portland, OR 97206</li>
              <li class="box-item">(503) 270-9258</li>
              <li class="box-item"><?php the_field("hours_title", 6); ?>
                <span>
                  <ul>
                    <li><small>M-F: <?php the_field("ws_mf_hours", 6); ?></small></li>
                    <li><small>Weekends: <?php the_field("ws_we_hours", 6); ?></small></li>
                  </ul>
                </span>
              </li>
              <li><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2797.5288477536938!2d-122.61314206878666!3d45.4792941820459!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5495a009e3476aef%3A0xe54f0af612ea5eb7!2sEl+Gallo+Taqueria!5e0!3m2!1sen!2sus!4v1421194799016" width="90%" height="200" frameborder="0" style="border:0"></iframe></li>
            </ul>
          </div>-->
        </div>
      </div><!-- /container-->
    </section>

    <!-- Menu Section ================================= -->
    <section id="menu" class="">

      <div class="container">
        <div class="row">
          <div class="section-heading col-sm-8 col-sm-offset-2">
            <h2>Menu</h2>
            <h3>Chez Dodo has a wide variety of Vegan (V) and Gluten Free (GF) Options!</h3>
          </div>
        </div>

        <div class="row menu-row">            
          <div class="col-sm-12">
            <h2>Entrees</h2>
          </div>
          <div class="col-sm-4 menu-section">
            <h3>Step1</h3>
            <h4>Pick a Base</h4>
              <ul class="box">
                <li class="box-item">Mine Frire <small>(V)</small>
                  <span>
                    <ul>
                      <li>Pan Fried Noodles Mixed with Vegetables</li>
                    </ul>    
                  </span>
                </li>
                <li class="box-item">Mee Foon <small>(V, GF)</small>
                  <span>
                    <ul>
                      <li>Stir Fried Rice Noodles</li>
                    </ul>    
                  </span>
                </li>
                <li class="box-item">Pulao <small>(V, GF)</small>
                  <span>
                    <ul>
                      <li>Rice with Herbs and Vegetables</li>
                    </ul>    
                  </span>
                </li>
                <li class="box-item">Dholl Puri <small>(V)</small>
                  <span>
                    <ul>
                      <li>Traditional Flatbread of Mauritius</li>
                    </ul>    
                  </span>
                </li>
              </ul>
          </div>
          <div class="col-sm-4 menu-section">
            <h3>Step2</h3>
            <h4>Pick a Curry</h4>
            <ul class="box">
              <li class="box-item">Chicken <small>(GF)</small>
                <span>
                  <ul>
                    <li>Mine Frire: <?php the_field("chicken_price_high", 6); ?></li>
                    <li>Mee Foon: <?php the_field("chicken_price_low", 6); ?></li>
                    <li>Rice Pulao: <?php the_field("chicken_price_low", 6); ?></li>
                    <li>2 Dholl Puri: <?php the_field("chicken_price_low", 6); ?></li>
                  </ul>    
                </span>
              </li>

              <li class="box-item">Lamb <small>(GF)</small>
                <span>
                  <ul>
                    <li>Mine Frire: <?php the_field("lamb_price_high", 6); ?></li>
                    <li>Mee Foon: <?php the_field("lamb_price_low", 6); ?></li>
                    <li>Rice Pulao: <?php the_field("lamb_price_low", 6); ?></li>
                    <li>2 Dholl Puri: <?php the_field("lamb_price_low", 6); ?></li>
                  </ul>    
                </span>
              </li>
              <li class="box-item">Veggie <small>(V, GF)</small><br />
                <small>Choice of any Two...</small><br />
                <small>Mushroom, Eggplant, Tofu, Lentil Fritters (Gateau Piment)</small>
                <span>
                  <ul>
                    <li>Mine Frire: <?php the_field("veggie_price_high", 6); ?></li>
                    <li>Mee Foon: <?php the_field("veggie_price_low", 6); ?></li>
                    <li>Rice Pulao: <?php the_field("veggie_price_low", 6); ?></li>
                    <li>2 Dholl Puri: <?php the_field("veggie_price_low", 6); ?></li>
                  </ul>    
                </span>
              </li>
            </ul>
          </div>
          <div class="col-sm-4 menu-section">
            <h3>Step3</h3>
            <h4>How Spicy?</h4>
            <ul class="box"> 
              <li class="box-item">Mild</li>
              <li class="box-item">Medium</li>
              <li class="box-item">Hot</li>
              <li class="box-item">Island Fever
                <span>
                    <ul>
                      <li>EXTRA HOT!</li>
                      <li>(All GF, V)</li>
                    </ul>    
                  </span>
              </li>
            </ul>
          </div>
        </div><!-- row -->

        <div class="row menu-row">
          <div class="col-sm-4">
            <div class="col-md-12">
              <h2>Shyamosas</h2>
            </div>
            <div class="col-md-12">
              <h3>Chef Shyam's Famous Samosas</h3>
              <h4><?php the_field("shyamosa_price", 6); ?></h4>
              <ul class="box">
                <li class="box-item">Fried Pastry Filled with Spiced Potatoes & Mixed Vegetables</li>
                <li class="box-item">Served with our signature  Mint-Cilantro Chutney & Sweet Chilli Sauce.</li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="col-md-12">
              <h2>Halim</h2>
            </div>
            <div class="col-md-12">
              <h3>Traditional Spicy Lentil Soup</h3>
              <h4>Served with 2 Pieces of Dholl Puri or Rice Pulao</h4>
              <ul class="box">
                <li class="box-item">Vegetable: <?php the_field("halim_vegetable_price", 6); ?></li>
                <li class="box-item">Chicken: <?php the_field("halim_chicken_price", 6); ?></li>
                <li class="box-item">Lamb: <?php the_field("halim_lamb_price", 6); ?></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="col-md-12">
              <h2>Daily Special</h2>
            </div>
            <div class="col-md-12">
              <h3><?php the_field("daily_special", 6); ?></h3>
              <h4><?php the_field("daily_special_price", 6); ?></h4>
              <ul class="box">
                <li class="box-item"><?php the_field("daily_special_description", 6); ?></li>
                <li class="box-item"><?php the_field("daily_special_picture", 6); ?></li>
              </ul>
            </div>
          </div>
        </div>
       
        </div><!-- /container-->

        <!-- Menu Gallery Section ================================= -->

      <!-- Page Content -->
      <div class="container gallery">

        <!-- Page Header -->
        <div class="row menu-row">
          <div class="section-heading col-sm-8 col-sm-offset-2">
            <h2>Gallery</h2>
          </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row menu-row">
            <div class="col-md-4">
                <a href="<?php bloginfo( 'template_directory' ); ?>/bootstrap/img/menu/menu.jpg" alt="Chez Dodo Menu">
                    <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/bootstrap/img/menu/thumb/menu-thumb.jpg" alt="Chez Dodo Menu">
                </a>
                <p>Chez Dodo Regular Menu Items</p>
            </div>
            <div class="col-md-4">
                <a href="<?php bloginfo( 'template_directory' ); ?>/bootstrap/img/menu/halim.jpg">
                    <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/bootstrap/img/menu/thumb/halim-thumb.jpg" alt="Halim">
                </a>
                <p>Halim</p>
            </div>
            <div class="col-md-4">
                <a href="<?php bloginfo( 'template_directory' ); ?>/bootstrap/img/menu/samosa.jpg">
                    <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/bootstrap/img/menu/thumb/samosa-thumb.jpg" alt="Samosas">
                </a>
                <p>Chef Shyam's famous Samosas</p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row menu-row">
            <div class="col-md-4">
                <a href="<?php bloginfo( 'template_directory' ); ?>/bootstrap/img/menu/minefrier.jpg">
                    <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/bootstrap/img/menu/thumb/minefrier-thumb.jpg" alt="Mine Frier">
                </a>
                <p>Mine Frier (stir fried noodles)</p>
            </div>
            <div class="col-md-4">
                <a href="<?php bloginfo( 'template_directory' ); ?>/bootstrap/img/menu/meefoon.jpg">
                    <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/bootstrap/img/menu/thumb/meefoon-thumb.jpg" alt="Mee Foon">
                </a>
                <p>Mee Foon (rice noodles)</p>
            </div>
            <div class="col-md-4">
                <a href="<?php bloginfo( 'template_directory' ); ?>/bootstrap/img/menu/pulao.jpg">
                    <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/bootstrap/img/menu/thumb/pulao-thumb.jpg" alt="Pulao">
                </a>
                <p>Pulao (rice with herbs and vegetables)</p>
            </div>
        </div>

        <!-- Projects Row -->
        <div class="row menu-row">
            <div class="col-md-4">
                <a href="<?php bloginfo( 'template_directory' ); ?>/bootstrap/img/menu/chickencurry.jpg">
                    <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/bootstrap/img/menu/thumb/chickencurry-thumb.jpg" alt="Chicken Curry">
                </a>
                <p>Chicken Curry (GF)</p>
            </div>
            <div class="col-md-4">
                <a href="<?php bloginfo( 'template_directory' ); ?>/bootstrap/img/menu/veggiecurry.jpg">
                    <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/bootstrap/img/menu/thumb/veggiecurry-thumb.jpg" alt="Veggie Curry">
                </a>
                <p>Veggie Curry (V, GF)</p>
            </div>
            <div class="col-md-4">
                <a href="<?php bloginfo( 'template_directory' ); ?>/bootstrap/img/menu/lambcurry.jpg">
                    <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/bootstrap/img/menu/thumb/lambcurry-thumb.jpg" alt="Lamb Curry">
                </a>
                <p>Lamb Curry(GF)</p>
            </div>
        </div><!-- /.row -->
      </div>
    </section>
    </section>



    <?php get_footer(); ?>