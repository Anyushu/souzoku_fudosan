<?php get_header(); ?>
<section class="kv">
<div class="container">
<h2><?php the_title(); ?></h2>
</div>
</section>

<section class="sec form bg-gray">
<div class="container">
<?php echo do_shortcode('[contact-form-7 id="16" title="無料相談"]'); ?>
</div>
<!-- container -->
</section>
<?php get_footer();
