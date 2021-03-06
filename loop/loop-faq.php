<?php /* Loop Name: Faq */ ?>
<?php
	$temp     = $wp_query;
	$wp_query = null;
	$args = array(
		'post_type'        => 'faq',
		'showposts'        => -1,
		'suppress_filters' => $suppress_filters
		);
	$wp_query = new WP_Query($args);

	if (have_posts()) : ?>
	<dl class="faq-list">
	<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		<dt class="faq-list_h">
			<span class="marker"><?php echo theme_locals("q"); ?></span><?php the_title(); ?>
		</dt>
		<dd id="post-<?php the_ID(); ?>" class="faq-list_body">
			<span class="marker"><?php echo theme_locals("a"); ?></span><?php the_content(); ?>
		</dd>
	<?php endwhile; ?>
	</dl>
<?php else: ?> 
<div class="no-results">
	<?php echo '<p><strong>' . theme_locals("there_has") . '</strong></p>'; ?>
	<p><?php echo theme_locals("we_apologize"); ?> <a href="<?php echo home_url(); ?>/" title="<?php bloginfo('description'); ?>"><?php echo theme_locals("return_to"); ?></a> <?php echo theme_locals("search_form"); ?></p>
	<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
</div><!--no-results-->
<?php endif;
	$wp_query = null;
	$wp_query = $temp;
?>