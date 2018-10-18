
<?php
get_header(); ?>

    <div class="banner-container"data-aos="fade" data-aos-easing="linear" data-aos-duration="1000">
    	<img src="<?php echo get_template_directory_uri(); ?>/images/banner.png"/>
    </div>
<div class="Parent-container">
    <!--Banner end-->
    <div class="third-portion">
    	<div class="container-fluid">
            <?php the_field('top_content'); ?>
        </div>
        <img data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" class="for-ds" src="<?php echo get_template_directory_uri(); ?>/images/background1.png"/>
        <img class="for-mb" src="<?php echo get_template_directory_uri(); ?>/images/mb-background1.png"/>
    </div>
    <!-- Third portion End-->
    <div class="fourth-portion">
    	<div class="container-fluid">
    	  <?php the_field('middle_content'); ?>
    	</div>
    	<div class="contact-button">
    		<div class="white-div">
    			<img src="<?php echo get_template_directory_uri(); ?>/images/white-bg.png">
    		</div>
    		  <button class="red-btn" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="500">CONTACT US</button>
    	</div>
    </div>
    <div class="services">
    	<div class="col-lg-5 col-md-5 first">
    		<?php the_field('services_1'); ?>
    	</div>
    	<div class="col-lg-7 col-sm-7 col-xs-12">
        </div>
    </div>
    <div class="service2">
    	<div class="col-lg-5 col-md-5 first">
    		<?php the_field('services_2'); ?>
    	</div>
    	<div class="col-lg-7 col-sm-12 col-xs-12"></div>
    </div>
    <div class="service3">
    	<div class="cs">
    		<?php the_field('services_3'); ?>
    	</div>
    	<div class="Deeper">
    		<h3 data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="500">AIM HIGHER <br> DIG DEEPER <br> DEVOUR THE MARKET</h3>
    	</div>
    </div>
</div><!-- End Parent Container -->
<?php get_footer(); ?>
