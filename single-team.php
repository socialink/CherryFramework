<?php get_header(); ?>

<div class="motopress-wrapper content-holder clearfix">
	<div class="container">
		<div class="row">
			<div class="span12" data-motopress-wrapper-file="single-team.php" data-motopress-wrapper-type="content">
				<div class="row">
					<div class="span8 <?php echo of_get_option('blog_sidebar_pos'); ?>" id="content" data-motopress-type="loop" data-motopress-loop-file="loop/loop-single-team.php">
						<?php get_template_part("loop/loop-single-team"); ?>
					</div>
					<div class="span4 sidebar" id="sidebar" data-motopress-type="static-sidebar"  data-motopress-sidebar-file="sidebar.php">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>