<?php get_header();?>
<div class="content">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); // the loop ?>
					<h2><a href="<?=get_permalink();?>"><?php the_title(); ?></a></h2>
					<?php the_content(''); ?>
				<?php endwhile; ?>
					<?php wp_pagenavi(); ?>
				<?php else : ?>
				<h2 class="center">Не найдено</h2>
				<p class="center">Попробуйте снова</p>
				<?php include (TEMPLATEPATH . "/searchform.php"); ?>
				<?php endif; ?>
</div>
<?php get_sidebar();?>	
<?php get_footer();?>