<?php get_header(); ?>
<section class="kv">
<div class="container">
<h2>ブログ</h2>
</div>
</section>

<section class="sec bg-gray archive">
<div class="container">
<div class="archive__wrap">
<div class="archive__wrap__post">
<h2 class="ttl__h2"><?php single_cat_title(); ?></h2>
<?php
if (have_posts()):
while (have_posts()): the_post();
$t = get_the_title();
$category = get_the_category();
$cat_name = $category[0]->name;
$permalink = get_the_permalink();
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $i = get_template_directory_uri().'/lib/images/no_img.png';
}
?>
<div class="archive__wrap__post__inner">
<a href="<?php echo $permalink; ?>">
<div class="archive__wrap__post__inner__img">
<img src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
</div>
<div class="archive__wrap__post__inner__txt">
<div class="archive__wrap__post__inner__txt__meta">
<span class="archive__wrap__post__inner__txt__meta__time"><?php the_time('Y年m月d日'); ?></span>
<span class="archive__wrap__post__inner__txt__meta__cat"><?php echo $cat_name; ?></span>
</div>
<h3><?php echo $t; ?></h3>
</div>
<span class="archive__wrap__post__inner__link"><i class="fas fa-caret-right"></i>続きを見る</span>
</a>
</div>
<!-- archive__wrap__post__inner -->
<?php endwhile; endif; ?>
<?php wp_pagenavi(); ?>
</div>
<!-- archive__wrap__post -->
<div class="archive__wrap__side">
<?php get_sidebar(); ?>
</div>
<!-- archive__wrap__side -->
</div>
<!-- archive__wrap -->
</div>
</section>
<?php get_footer();
