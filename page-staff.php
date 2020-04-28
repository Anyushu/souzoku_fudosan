<?php get_header(); ?>
<section class="kv">
<div class="container">
<h2><?php the_title(); ?></h2>
</div>
</section>

<section class="staff sec bg-gray">
<div class="container">
<div class="staff__wrap">
<div class="staff__wrap__list">
<?php
$args = [
    'posts_per_page' => -1,
    'post_type' => 'staffs',
    'orderby' => 'date',
    'order' => 'DESC',
    'tax_query' => [
      [
        'taxonomy' => 'staffs_cat',
        'field' => 'slug',
        'terms' => 'normal'
      ]
    ]
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$id = get_the_ID();
$t = get_the_title();
$content = strip_tags(get_the_content());
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $i = get_template_directory_uri().'/lib/images/staff_sample.png';
}
?>
<div class="staff__wrap__list__inner">
<div class="staff__wrap__list__inner__img">
<img src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
</div>
<div class="staff__wrap__list__inner__txt"><?php echo $t; ?></div>
<div class="useful__list__inner__info__txt w-100 mt-3">
<a style="cursor:pointer" data-toggle="modal" data-target="#modal-<?php echo $id; ?>" class="w-100 position-static text-left small"><i class="fas fa-caret-right"></i><span>詳しくはこちら</span></a>
</div>
</div>
<!-- staff__wrap__list__inner -->
<?php endforeach; wp_reset_postdata(); ?>
</div>
<!-- staff__wrap__list -->
<?php
$args = [
    'posts_per_page' => -1,
    'post_type' => 'staffs',
    'orderby' => 'date',
    'order' => 'DESC',
    'tax_query' => [
      [
        'taxonomy' => 'staffs_cat',
        'field' => 'slug',
        'terms' => 'normal'
      ]
    ]
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$id = get_the_ID();
$t = get_the_title();
$content = strip_tags(get_the_content());
?>
<div class="modal fade" id="modal-<?php echo $id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<h4 class="h5 text-primary mb-3"><?php echo $t; ?></h4>
<p style="font-size:14px"><?php echo $content; ?></p>
</div>
</div>
</div>
</div>
<?php endforeach; wp_reset_postdata(); ?>
</div>
<!-- staff__wrap -->
</div>
<!-- container -->
</section>

<section class="staff sec bg-gray pt-0">
<div class="container">
<div class="staff__wrap">
<div class="staff__wrap__prolist">
<?php
$args = [
    'posts_per_page' => -1,
    'post_type' => 'staffs',
    'orderby' => 'date',
    'order' => 'DESC',
    'tax_query' => [
      [
        'taxonomy' => 'staffs_cat',
        'field' => 'slug',
        'terms' => 'pro'
      ]
    ]
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$id = get_the_ID();
$t = get_the_title();
$company = get_field('pro_company', $id);
$content = strip_tags(get_the_content());
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $i = get_template_directory_uri().'/lib/images/staff_sample.png';
}
?>
<div class="staff__wrap__prolist__inner">
<h3><?php echo $company; ?>｜<?php echo $t; ?></h3>
<div class="staff__wrap__prolist__inner__content">
<div class="staff__wrap__prolist__inner__content__img">
<img src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
</div>
<div class="staff__wrap__prolist__inner__content__txt"><?php echo $content; ?></div>
</div>
</div>
<!-- staff__wrap__list__inner -->
<?php endforeach; wp_reset_postdata(); ?>
</div>
<!-- staff__wrap__list -->
</div>
<!-- staff__wrap -->
</div>
<!-- container -->
</section>

<?php get_footer();
