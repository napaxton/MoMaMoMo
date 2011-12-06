	<div id="sidebar">
		<ul>
		
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
			

			
			<!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
			<li><h2><?php _e('Author'); ?></h2>
			<p>A little something about you, the author. Nothing lengthy, just an overview.</p>
			</li>
			-->
				
			<li><?php get_calendar(); ?></li>	

			<li>
			<?php /* If this is a category archive */ if (is_category()) { ?>
			<p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>
			
			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<p>You are currently browsing the <a href="<?php echo get_settings('siteurl'); ?>"><?php echo bloginfo('name'); ?></a> weblog archives
			for the day <?php the_time('l, F jS, Y'); ?>.</p>
			
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>

			<p>You are currently browsing the <a href="<?php echo get_settings('siteurl'); ?>"><?php echo bloginfo('name'); ?></a> weblog archives
			for <?php the_time('F, Y'); ?>.</p>

      <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p>You are currently browsing the <a href="<?php echo get_settings('siteurl'); ?>"><?php echo bloginfo('name'); ?></a> weblog archives
			for the year <?php the_time('Y'); ?>.</p>
			
		 <?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
			<p>You have searched the <a href="<?php echo get_settings('siteurl'); ?>"><?php echo bloginfo('name'); ?></a> weblog archives
			for <strong>'<?php echo wp_specialchars($s); ?>'</strong>. If you are unable to find anything in these search results, please modify your search or try one of the navigation links below.</p>

			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p>You are currently browsing the <a href="<?php echo get_settings('siteurl'); ?>"><?php echo bloginfo('name'); ?></a> weblog archives.</p>

			<?php } ?>
			</li>

			
			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>			

			<?php } ?>

			<li><h2><?php _e('Archives: Temporal and Categorical'); ?></h2>
<!--
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
--!>
				<form name="archiveform" action="">
				<select name="archive_chrono" onchange="window.location = (document.forms.archiveform.archive_chrono[document.forms.archiveform.archive_chrono.selectedIndex].value);">
				<option value=''>Select Month:</option>
				<?php wp_get_archives('format=option'); ?>
				</select>
				</form>


			<!-- </li>

			<li><h2><?php _e('Categories'); ?></h2>
				<ul>
				<?php list_cats(0, '', 'name', 'asc', '', 1, 0, 1, 1, 1, 1, 0,'','','','','') ?>
				</ul> -->
<form action="<?php echo $PHP_SELF ?>" method="get">
<?php dropdown_cats(1,'All Categories','name','',0,1,1); ?>
<input type="submit" name="submit" value="view"></input>
</form>
			</li>


				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
				
			<?php wp_list_pages('title_li=<h2>' . __('Pages') . '</h2>' ); ?>

				<?php get_links_list(_name); ?>
			

			<?php if (function_exists('wp_theme_switcher')) { ?>
			<li><h2><?php _e('Themes'); ?></h2>
			<?php wp_theme_switcher(); ?>
			</li>
			<?php } ?>
						
			<h2><?php _e('Meta'); ?></h2>
				<ul>
                                <?php if (function_exists('bccl_license_image_hyperlink')) {?>
                                <li><?php bccl_license_image_hyperlink(); ?>
                                </li>
				<?php } ?>
                               			
                         	<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<li><a href="http://validator.w3.org/check/referer" title="<?php _e('This page validates as XHTML 1.0 Transitional'); ?>"><?php _e('Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr>'); ?></a></li>

				<li><a href="http://jigsaw.w3.org/css-validator/check/referer" title="<?php _e('This validates the CSS for this site'); ?>"><?php _e('Valid <abbr title="Cascading Style Sheets">CSS</abbr>'); ?></a></li>

				<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>

				<li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS 2.0'); ?>"><?php _e('Entries <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>

				<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>

				<li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.'); ?>">WordPress</a></li>

					<?php wp_meta(); ?>
				</ul>
				</li>
			
		<?php endif; ?>	

                        <li>

			</li>
		</ul>
	</div>