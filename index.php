<?php get_header(); ?>

<!-- Masthead -->
<?php $image_attributes = !empty( get_the_ID() ) ? wp_get_attachment_image_src( PG_Image::isPostImage() ? get_the_ID() : get_post_thumbnail_id( get_the_ID() ), 'full' ) : null; ?>
<header class="masthead bg-primary text-white" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>">
	<div class="container d-flex">
		<div class="text-container">
			<h1 class="masthead-heading text-capitalize mb-0"><?php the_title(); ?></h1>
			<?php if ( has_excerpt() ) : ?>
				<p class="masthead-subheading font-weight-light mb-0"><?php echo get_the_excerpt(); ?></p>
			<?php endif; ?>
		</div>
		<div class="menu-container">
			<?php wp_nav_menu( array(
					'menu'            => 'hero_menu',
					'menu_class'      => 'mr-auto',
					'menu_id'         => 'hero-nav',
					'before'          => '<span class="icon"></span>',
					'container'       => '<ul>',
					'container_class' => 'menu-container',
			) ); ?>
		</div>
	</div>
</header>
<!-- Content Section -->
<section class="page-section mb-0" id="">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div>
			<div class="col-lg-4">
				<?php dynamic_sidebar('sidebar_area'); ?>
			</div>
		</div>
	</div>
</section>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
	<a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"> <i class="fa fa-chevron-up"></i> </a>
</div>

<?php get_footer(); ?>