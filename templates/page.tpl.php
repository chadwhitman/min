<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 */
?>
<header role="banner" class="clearfix">
  <div id="logo">
    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
       <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>
  </div>
  <div id="site-info">
    <?php if ($site_name || $site_slogan): ?>
      <hgroup id="name-and-slogan">
        <?php if ($site_name): ?>
          <h1 id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
              <span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>
        <div id="menu">
          <?php
           print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'class' => array('links', 'inline', 'clearfix'),
            ),
          )); ?>
     </hgroup>
    <?php endif; ?>
  </div>
  <?php print render($page['header']); ?>
</header> <!-- /header -->
<div id="page">
  <?php print $messages; ?>
    <div id="main-wrapper" class="clearfix">
      <?php print render($page['sidebar_first']); ?>
        <div role="main">
          <?php print render($page['highlighted']); ?>
            <a id="main-content"></a>
              <?php print render($title_prefix); ?>
                <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1>
                <?php endif; ?>
                <?php print render($title_suffix); ?>
                <?php if ($tabs = render($tabs)): ?><div class="tabs"><?php print $tabs; ?></div>
                <?php endif; ?>
                <?php print render($page['help']); ?>
                <?php if ($action_links = render($action_links)): ?>
                <ul class="action-links"><?php print $action_links; ?></ul>
                <?php endif; ?>
                <?php print render($page['content']); ?>
                <div id="feed"><?php print $feed_icons; ?></div>
        </div> <!-- /main -->
        <?php print render($page['sidebar_second']); ?>
     </div> <!-- /#main -->
   <?php print render($page['footer']); ?>
</div> <!-- /#page -->
