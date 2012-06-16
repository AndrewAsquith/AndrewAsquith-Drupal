<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <!--  HEADER -->

  <div id="header" class="container"> 
  <div id="site-name-and-slogan">
    <?php if ($site_name || $site_slogan): ?>
      <div id="name-and-slogan">

        <?php if ($site_name): ?>
          <?php if ($title): ?>
            <div id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
            </div>
          <?php else: /* Use h1 when the content title is empty */ ?>
            <h1 id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
            </h1>
          <?php endif; ?>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>

      </div>
    <?php endif; ?>
     </div> <!-- div.site-name-and-slogan -->
    <?php if ($logo): ?>
      <div id="logo">
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo-link">
        <img src="<?php print $logo; ?>" alt="<?php print t('Andrew Asquith Logo'); ?>"/>
      </a>
      </div>
    <?php endif; ?>



  </div> <!-- div.header -->

    <?php if ($page['header']): ?>
      <div id="header-region" class="container">
        <?php print render($page['header']); ?>
      </div>
    <?php endif; ?>

  <?php if ($main_menu || $secondary_menu): ?>
    <div id="navigation" class="container menu">
      <?php print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'primary', 'class' => array('links', 'clearfix', 'main-menu')))); ?>
      <?php print theme('links', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary', 'class' => array('links', 'clearfix', 'sub-menu')))); ?>
    </div> <!-- div.nav -->
  <?php endif; ?>

  
  <!--  MAIN  -->

  <div id="main" class="container">

    <div id="content">
      <div id="content-inner" class="inner column center">

        <?php if ($breadcrumb || $title|| $messages || $tabs || $action_links): ?>
          <div id="content-header">

            <?php print $breadcrumb; ?>

            <?php if ($page['highlight']): ?>
              <div id="highlight"><?php print render($page['highlight']) ?></div>
            <?php endif; ?>

            <?php if ($title): ?>
              <h1 class="title"><?php print $title; ?></h1>
            <?php endif; ?>

            <?php print $messages; ?>
            <?php print render($page['help']); ?>

            <?php if ($tabs): ?>
              <div class="tabs"><?php print render($tabs); ?></div>
            <?php endif; ?>

            <?php if ($action_links): ?>
              <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
            
          </div> <!-- /#content-header -->
        <?php endif; ?>

        <div id="content-area">
          <?php print render($page['content']) ?>
        </div>

      </div>
    </div> <!-- div.content -->
    <?php if ($page['sidebar']): ?>
      <div id="sidebar" class="column sidebar">
        <div id="sidebar-inner" class="inner">
          <?php print render($page['sidebar']); ?>
        </div>
      </div> <!-- div.sidebar -->
    <?php endif; ?> 

  </div> <!-- div.main -->

  <!--  FOOTER  -->

  <div id="footer" class="container">
    <div id="footer-content">
     <?php if ($page['footer']) { print render($page['footer']); } ?>
     <p class="footer-text">&copy; <a href="http://www.AndrewAsquith.com" title="Andrew Asquith">Andrew Asquith</a></p>
    </div>
  </div> <!-- div.footer -->
  

</div> <!-- div.page -->
