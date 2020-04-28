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
    $i = '';
}
?>
<article class="single">
<header class="single__header">
<span class="single__header__time"><?php the_time('Y年m月d日'); ?></span>
<span class="single__header__cat"><?php echo $cat_name; ?></span>
<h2 class="single__header__ttl"><?php echo $t; ?></h2>
</header>
<main class="single__main">
<?php if($i !== ''): ?>
<figure class="single__main__fig">
<img src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
</figure>
<?php endif; ?>
<div class="single__main__inner">
<?php the_content(); ?>
</div>
</main>
<!-- single__header__main -->
<footer class="single__foot">
<div class="my-5 text-center">
<a class="btn btn-secondary" href="<?php e_home_url(); ?>/blog/"><i class="fas fa-caret-right"></i>一覧に戻る</a>
</div>
<div class="single__foot__sns">
<a class="single__foot__sns__tw" href="https://twiter.com/share?url=<?php echo $permalink; ?>" target="_blank" rel="nofollow"><i class="fab fa-twitter"></i></a>
<a class="single__foot__sns__fb" href="http://www.facebook.com/share.php?u=<?php echo $permalink; ?>" target="_blank" rel="nofollow"><i class="fab fa-facebook-f"></i></a>
<a class="single__foot__sns__li" href="https://social-plugins.line.me/lineit/share?url=<?php echo $permalink; ?>" target="_blank" rel="nofollow"><i class="fab fa-line"></i></a>
</div>
</footer>
<!-- single__header__main__foot -->
</article>
<!-- single -->
<?php endwhile; endif; ?>
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
