<!DOCTYPE html>
<html lang="<?php print $language->language; ?>"  dir="<?php print $language->dir; ?>"
  <?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="main-body <?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip">
    <a href="#main-menu"><?php print t('Jump to Navigation'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

<!-- Piwik --> 
<script type="text/javascript">
 var pkBaseURL = (("https:" == document.location.protocol) ? "https://analytics.andrewasquith.com/" : "http://analytics.andrewasquith.com/");
 document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
 </script><script type="text/javascript">
 try {
 var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 2);
 piwikTracker.trackPageView();
 piwikTracker.enableLinkTracking();
 } catch( err ) {}
 </script><noscript><p><img src="//analytics.andrewasquith.com/piwik.php?idsite=2" style="border:0" alt="" /></p></noscript>
 <!-- End Piwik Tracking Code -->
</body>
</html>
