<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="py-5">
<div class="container">
<?php the_content(); ?>
</div>
</section>
<?php get_footer();