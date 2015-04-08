<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<div id="page">

  <div id="navigation" role="navigation">

    <?php print render($page['navigation']); ?>

  </div>

  <div id="main" class="group">
  	
  	<header class="header" id="header" role="banner">
	  	<?php print render($page['header']); ?>
  	</header>
  	
    <div id="content" class="column group" role="main">
      
      <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_second = render($page['sidebar_second']);
	  	if ($sidebar_second): ?>
      <aside id="sidebar">
        <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>
      
      
      <?php print render($page['highlighted']); ?>
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
      <!--<h1 class="page__title title" id="page-title"><?php print $title; ?></h1>-->
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
      
      
      
    </div>

    <?php $lower_content = render($page['content_lower']); 
	    if ($lower_content): ?>
	    <div id="content-lower" class="column group">
		<?php print $lower_content; ?>
	    </div>
	<?php endif; ?>
	
  </div>

  <?php print render($page['footer']); ?>

</div>

<?php print render($page['bottom']); ?>
