<?php get_header(); ?>
<!-- Main content -->
<!-- /Post header -->
<div class="main-content post-container">
	<div class="main-two-columns">
		<!-- Post content -->
		<article class="page-box">
			<h1 class="title"><?php echo get_the_title(); ?></h1>
			<div class="content">
                <?php the_content(); ?>
				<?php echo wpautop(get_the_content()); ?>
			</div>

        	<?php if (current_user_can("edit_posts")) : ?>
        	<?php $editURL = getPostEditLink($post->ID); ?>
        	<div class="acrticle-edit">
        		<span class="edit">
        			<a href="<?php echo $editURL; ?>">Редактировать</a>
        		</span>
        	</div>
        	<?php endif; ?>

		</article>
		<!-- /Page content -->
	</div>

</div>
<!-- /Main content -->
<?php get_footer(); ?>

