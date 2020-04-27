<?php get_header(); ?>
<section class="kv">
<div class="container">
<h2><?php the_title(); ?></h2>
</div>
</section>

<section class="sec bg-gray price">
<div class="container">
<div class="price__bnr text-center mb-md-5 mb-4">
<img src="<?php e_img_url(); ?>/price_bnr.png" alt="">
</div>
<!-- price__bnr -->
<div class="price__list">
<div class="price__list__inner">
<h3 class="price__list__inner__ttl">名義変更</h3>
<div class="price__list__inner__txt">
<!-- TODO: 料金表 -->
<div class="price__list__inner__txt__box">
</div>
<p class="mb-0">※以下の場合は別途見積となります。
<br>・相続人がご兄弟になる場合/相続人が5名以上の場合
<br>・数次相続になる場合/不動産評価額が1億円を超える場合
<br>※同一管轄不動産で、別名義にされる場合別名義ごと30,000円
<br>※同一金融機関で、別口座をお持ちの場合別口座ごと12,000円</p>
</div>
</div>
</div>
<!-- price__list -->
</div>
<!-- container -->
</section>

<?php get_footer();
