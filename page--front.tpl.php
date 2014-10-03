<div id="container"> 
  <div id="page-top">
    <div id="header-wrapper">
   <div id="login">
   <?php if($logged_in):?>
   <a href="/user/logout">Logout</a>
   <?php else: ?>
   <a href="/user/login">Log in</a>
   <?php endif; ?>
   </div>
      <div id="header">
	
   <div id="logo">
	<?php if ($logo): ?>
	<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
	</a>
	<?php endif; ?>

        <a href="<?php print $front_page; ?>"><div id="site-name"><?php print $site_name;?></div></a>
   </div>	
        <div id="menu-wrapper">
         
          <div id="smoothmenu1" class="ddsmoothmenu">
	    <?php print drupal_render(menu_tree('main-menu')); ?>
          </div>
	  
        </div>
      </div>
    </div>
   <?php print render($messages); ?>  
  </div>
  

  
<!-- Begin Slider -->
  <div id="piecemaker-container">
   <div text-align:"center">
  <h6>[Hover your mouse over the image for more information.]</h6>
  </div>
    <div id="piecemaker">
      <h1>Uh Oh!</h1>
   <p>It looks like your browser does not support Flash. You can download the Flash player from
   <a href="http://get.adobe.com/flashplayer/">the Adobe software download site</a>, or you can 
   <a href="http://think.csail.mit.edu/publications-and-news/publications">check out the content
   that the slide show links to.</a></p>
    </div>
  </div>
  <!-- End Slider --> 

  <!-- Begin Wrapper -->
  <div id="wrapper"> 
    
    <!-- Begin Intro -->
    <div class="intro">
   <h1><?php print $site_slogan; ?></h1>
    </div>
    <!-- End Intro --> 
    

    
  </div>




<div id="footer-wrapper">
  <div id="footer">
    <div id="footer-content"> 
      <!-- Begin Copyright -->
      <div id="copyright">
        <p>© Copyright 2014 MIT and Lahey Clinic</p>
      </div>
      <!-- End Copyright --> 
      
      <!-- begin logos  OMIT LOGOS on main page -->
      <div id="logos">
     <a href="http://web.mit.edu"><img src="sites/all/themes/delphic/images/MITLogoFooter.png" alt="MIT CSAIL" /></a>
     <a href="http://www.Lahey.org"><img src="sites/all/themes/delphic/images/LaheyLogoFooter.png" alt="Lahey Clinic" /></a>
      </div>
      <!-- End logos --> 
    </div>
  </div>
</div>

