</main>
<?php if (!is_page('partners') && !is_page('contact')): ?>
<section class="cta sec bg-square">
<div class="container">
<h2 class="ttl__h2 text-center">お問い合わせ</h2>
<div class="cta__inner">
<div class="cta__inner__left">
<div class="cta__inner__right__balloon d-md-none d-inline-block">何度でも<span>相談料無料</span>なので<br>お気軽にお問い合わせください。</div>
<div class="cta__inner__left__img">
<img src="<?php e_img_url(); ?>/foot_contact_img.png" alt="">
</div>
<p class="cta__inner__left--ttl">谷町四丁目駅から徒歩2分</p>
<p class="cta__inner__left--txt">大阪府大阪市中央区谷町2丁目4-3 <br class="d-md-none d-md-inline">アイエスビル5F</p>
</div>
<!-- cta__inner__left -->
<div class="cta__inner__right">
<div class="cta__inner__right__balloon d-md-block d-none">何度でも<span>相談料無料</span>なので<br>お気軽にお問い合わせください。</div>
<a class="cta__inner__right__tel d-md-block d-none" href="tel:0120-200-567">
<span class="cta__inner__right__tel--icon"><img src="<?php e_img_url(); ?>/icon_free.png" alt="フリーダイヤル"></span>
<span class="cta__inner__right__tel--num">0120-200-567<span class="cta__inner__right__tel--txt">営業時間：10:00 〜19:00｜定休日：水曜日</span></span>
</a>
<a class="cta__inner__right__tel__sp d-md-none d-block" href="tel:0120-200-567">
<img src="<?php e_img_url(); ?>/btn_tel_sp.png" alt="">
</a>
<p class="cta__inner__right--txt">お電話が苦手という方はまずはメールにてご相談してみてください。</p>
<div class="cta__inner__right__btn">
<a class="btn btn-primary font-weight-bold text-white w-100" href="<?php e_home_url(); ?>/contact/"><i class="far fa-envelope mr-2"></i>無料相談はこちら</a>
</div>
<div class="cta__inner__right__btn__sp d-md-none d-block">
<a class="d-block text-center" href="<?php e_home_url(); ?>/contatc/">
<img class="w-100" src="<?php e_img_url(); ?>/btn_contact_sp.png" srcset="<?php e_img_url(); ?>/btn_contact_sp.png 1x, <?php e_img_url(); ?>/btn_contact_sp@2x.png 2x" alt="">
</a>
</div>
</div>
<!-- cta__inner__right -->
</div>
</div>
</section>
<?php endif; ?>
<footer class="footer">
<div class="container">
<div class="footer__wrap">
<div class="footer__wrap__logo">
<a class="footer__wrap__logo--link m-plus" href="<?php e_home_url(); ?>">相続不動産サポートセンター</a>
<div class="footer__wrap__logo__tel d-md-block d-none">
<a href="tel:0120-200-567">
<img src="<?php e_img_url(); ?>/icon_free_white.png" alt="">
<span>0120-200-567</span>
<p>営業時間：10:00 〜19:00 ｜ 定休日：水曜日</p>
</a>
</div>
<div class="footer__wrap__logo__tel__sp d-md-none d-block">
<a href="tel:0120-200-567">
<img src="<?php e_img_url(); ?>/btn_tel_sp.png" alt="">
</a>
</div>
</div>
<!-- footer__wrap__logo -->
<div class="footer__wrap__links">
<ul>
<li><a href="<?php e_home_url(); ?>/">ホーム</a></li>
<li><a href="<?php e_home_url(); ?>#reason">選ばれる理由</a></li>
<li><a href="<?php e_home_url(); ?>/service/">サービス内容</a></li>
<li><a href="<?php e_home_url(); ?>/staff/">スタッフ紹介</a></li>
<li><a href="<?php e_home_url(); ?>/company/">会社案内</a></li>
</ul>
<ul>
<li><a href="<?php e_home_url(); ?>">相続トラブルでお困りの方へ</a></li>
<li><a href="<?php e_home_url(); ?>">相続手続きについて</a></li>
<li><a href="<?php e_home_url(); ?>">相続税について</a></li>
<li><a href="<?php e_home_url(); ?>">相続不動産の管理・清掃について</a></li>
<li><a href="<?php e_home_url(); ?>">遺品整理について</a></li>
</ul>
<ul>
<li><a href="<?php e_home_url(); ?>">不用品回収について</a></li>
<li><a href="<?php e_home_url(); ?>/akiyakaitori/">空家買取について</a></li>
<li><a href="<?php e_home_url(); ?>/partners/">提携業者募集</a></li>
<li><a href="<?php e_home_url(); ?>/blog/">ブログ</a></li>
<li><a href="<?php e_home_url(); ?>/contact/">無料相談はこちら</a></li>
</ul>
</div>
</div>
<!-- footer__wrap -->
</div>
</footer>
<p class="socket">©2020 souzokufudousan-supportcenter</p>

<a class="fixbtn" href="tel:0120-200-567">
<img src="<?php e_img_url(); ?>/fix_btn_sp.png" alt="">
</a>

<?php wp_footer(); ?>
</body>
</html>