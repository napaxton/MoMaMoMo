<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="content" class="narrowcolumn">

	<div class="pagepost">

	<h2>Last 25 Posts</h2>
	  <ul>
	      <?php get_archives('postbypost', '25', 'other', '<li>', '</li>', false); ?>
	  </ul>
	</h2>
	  
	<h2>Archives by Month:</h2>
	  <ul>
	    <?php wp_get_archives('type=monthly'); ?>
	  </ul>

	<h2>Archives by Subject:</h2>
	  <ul>
	     <?php wp_list_cats(); ?>
	  </ul>
	  
        <h2>Weighted Categories:</h2>

	<div id="categories">
	<ul>
	<?php
 	$minfont = 10;
	$maxfont = 40;
	$fontunit = "pt";
	$category_ids_to_exclude = "1,25";
	weighted_categories($minfont, $maxfont, $fontunit, $category_ids_to_exclude);
	?>
	</ul>
	</div>

	<h2>Weighted Words:</h2>
	<ul>
	<?php
        $mincount = 25;
        $minlength = 3;
        $minfont = 50;
        $maxfont = 250; 
        weighted_words($mincount, $minlength, $minfont, $maxfont)
	?>
	</ul>

	</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>