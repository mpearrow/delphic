<div id="container"> 
  <div id="page-top">
    <div id="header-wrapper">
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
  </div>
  
  
  
  <div id="wrapper">
   <div class="content-center">
    <h2><?php print $title; ?></h2>
   </div>
 <?php if ($tabs = render($tabs)): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
    <div class="boxybox">
      <?php print render($page['content']); ?>      
    </div>
  </div>
  
</div>


<div class="clearfix"></div>
<div class="push"></div>    

<footer class="footer">
   <?php print render($page['footer']); ?>
</footer>
