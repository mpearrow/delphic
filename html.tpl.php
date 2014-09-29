<?php

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
<script type="text/javascript">
    var flashvars = {};
    flashvars.cssSource = "sites/all/themes/delphic/piecemaker/web/piecemaker.css";
    flashvars.xmlSource = "sites/all/themes/delphic/piecemaker/web/piecemaker.xml";

    var params = {};
    params.play = "true";
    params.menu = "false";
    params.scale = "showall";
    params.wmode = "transparent";
    params.allowfullscreen = "true";
    params.allowscriptaccess = "always";
    params.allownetworking = "all";
  
    swfobject.embedSWF('sites/all/themes/delphic/piecemaker/web/piecemaker.swf', 'piecemaker', '960', '450', '10', null, flashvars,    
		   params, null);

</script>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
