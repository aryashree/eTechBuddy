<div id="about-me">
	<img src="/sites/default/files/images/round.png">
</div>
<div id="header-wrap">
		<span id="page-top-border"></span>
		
		<div id="header">
			
			<!-- BEGIN logo -->
			<div id="logo">
			<?php if ($logo): ?>
			  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
				<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
			  </a>
			<?php endif; ?>
			</div><!-- End logo -->
				
			<!-- Start header social link block-->		   
			<div id="social-links-block">
				<?php if ($page['social_links']): ?>
				<?php print render($page['social_links']); ?>
				<?php endif; ?>
			</div><br />
			<!-- End header social link block-->				
			
			<!-- BEGIN login -->
			<div id="login-button">
				<?php
				if($user->uid){
				?>
				<a href="/user/logout"><span>Logout </span><span><img alt="Login" src="/sites/all/themes/basic/images/login.png"></span></a>
				<?php
				}else{
				?>
				<a href="/user/login"><span>Login </span><span><img alt="Login" src="/sites/all/themes/basic/images/login.png"></span></a>
				<?php
				}
				?>
			</div>
           <!-- End login -->
			
			<div id="header-search-block">
				<?php if ($page['search']): ?>
				<?php print render($page['search']); ?>
				<?php endif; ?>
			</div><!-- End header search block-->
			
			<br class="clear">
			
			<!-- BEGIN main menu -->
			<div id="main-menu-container">
			<?php if ($main_menu): ?>
				  <?php print render($page['main_menu']); ?>
			<?php endif; ?>	
			</div><!-- End main menu container -->
			
		</div><!-- End header -->
		<!------ SLIDERS ------>
		<div id="pre-body-inner-area">
		<div id="header-intro"></div>
            <?php //if ($title): ?>
			  <!--<div id="header-intro"> 
              <h1><?php //print $title; ?></h1>
			  </div>-->
            <?php //endif; ?>	
		</div><!-- End pre body area -->
</div>
<!---NEWLY ADDED --->
<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>

   <!-- ______________________ MAIN _______________________ -->

  <div id="main" class="clearfix">

    <div id="content" class="aboutMe">
      <div id="content-inner" class="inner column center">
		<div id="content-header">
		</div> <!-- /#content-header -->		
        <div id="content-area">
          <?php print render($page['content']) ?>
        </div>

        <?php print $feed_icons; ?>

      </div>
    </div> <!-- /content-inner /content -->
  </div> <!-- /main -->
</div> <!-- /page -->
  <!-- ______________________ FOOTER _______________________ -->
<div id="footer-wrap">
  <div id="big-footer">
	  <div class="footer-content col-option3">
		  <?php if ($page['footer_first']): ?>
			<div class="footer-column">
			  <?php print render($page['footer_first']); ?>
			</div> <!-- /footer first-->
		  <?php endif; ?>  
		  <?php if ($page['footer_second']): ?>
			<div class="footer-column">
			  <?php print render($page['footer_second']); ?>
			</div> <!-- /footer second-->
		  <?php endif; ?>  
		  <?php if ($page['footer_third']): ?>
			<div class="footer-column">
			  <?php print render($page['footer_third']); ?>
			</div> <!-- /footer third-->
		  <?php endif; ?>
		  <br class="clear">	
	  </div>
  </div>
  <div id="standard-footer">
  <?php if ($page['footer']): ?>
    <div id="footer">
      <?php print render($page['footer']); ?>
    </div> <!-- /footer -->
  <?php endif; ?>
  </div>
</div>

