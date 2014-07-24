<div id="container"> 
  <div id="page-top">
    <div id="header-wrapper">
      <div id="header">
	
	<?php if ($logo): ?>
	<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
	</a>
	<?php endif; ?>
	
        <div id="menu-wrapper">
          <div id="smoothmenu1" class="ddsmoothmenu">
	    <?php print drupal_render(menu_tree('main-menu')); ?>
          </div>
	  
        </div>
      </div>
    </div>
  </div>
  
  
  
  <div id="wrapper">
    <h2><?php print $title; ?></h2>
    <?php print render($page['content']); ?>      
  </div>
  
</div>


<div class="clearfix"></div>
<div class="push"></div>    

<div id="footer-wrapper">
  <div id="footer">
    <div id="footer-content"> 
      
    </div>
  </div>
</div>

