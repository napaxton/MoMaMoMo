<span id="topdate"> <?php the_date(); ?> </span>

<div class="post">

<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent link to <?php the_title();?>"><?php the_title(); ?></a></h2>

<div class="entry">
<?php the_content('Read more &raquo;'); ?></div>

<small>Posted in <?php the_category(', '); ?> on <?php the_time('j F Y'); ?> at <?php the_time(); ?> by <?php the_author(); ?></small>

<p class="postmetadata"><?php edit_post_link('Edit','',' | '); ?><?php comments_popup_link(' Leave A Comment &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
<?php trackback_rdf(); ?>

</div>