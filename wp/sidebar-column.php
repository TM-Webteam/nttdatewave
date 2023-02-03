<?php
global $right_wp_bnr;
?>
<aside class="Sidebar">

  <a href="/contact/" class="bnr-contact"><img src="<?php echo assets_path() ?>img/common/bnr-contact.png" alt="導入前のご質問・ご相談はお気軽にご相談お見積り"></a>

  <a href="/catalog/" class="bnr-catalog"><img src="<?php echo assets_path() ?>img/common/bnr-catalog.png" alt="Wave PC Mateの詳細がわかる！ サービス資料ダウンロード"></a>

  <div class="search">
    <form method="get" action="<?php echo home_url('/'); ?>" class="search__form">
      <input name="s" class="search__input" type="search" placeholder="キーワードから探す">
      <input type="hidden" name="post_type" value="column">
      <button accesskey="f" class="search__btn" type="submit"><img src="<?php echo assets_path() ?>img/common/icon-search.svg"></button>
    </form>
  </div>

  <?php
  $args = array(
    'taxonomy' => 'column_category',
  );
  $categories = get_categories($args);
  if (!empty($categories)) :
  ?>
    <div class="catSearch">
      <h3 class="ttl-tertiary">カテゴリで探す</h3>
      <ul class="catSearch__list">
        <?php foreach ((array)$categories as $category) : ?>
          <li><a href="<?php echo get_category_link($category->term_id); ?>" class="cat"><?php echo $category->name; ?></a></li>
        <?php endforeach; ?>

      </ul>
    </div>
  <?php endif; ?>

  <?php if (!empty($right_wp_bnr)) : ?>
    <?php foreach ($right_wp_bnr as $right_wp_bnr_val) :
    ?>
    <div class="sidenav-wrap">
      <div class="speech"><span><?php echo CFS()->get('right_wp_ttl'); ?></span></div>
      <a href="<?php echo get_permalink($right_wp_bnr_val); ?>" class="sidenav__bnr">
        <div class="sidenav__bnr--ttl"><?php echo get_the_title($right_wp_bnr_val); ?></div>
        <div class="sidenav__bnr--img">
          <img src="<?php echo get_the_post_thumbnail_url($right_wp_bnr_val, 'medium'); ?>" alt="<?php echo get_the_title($right_wp_bnr_val); ?>">
        </div>
      </a>
    </div>
    <?php endforeach; ?>
  <?php endif; ?>

  <!-- <div class="blogList">
    <h3 class="ttl-tertiary">よく読まれている記事</h3>
    <a href="#" class="flex aiC inherit item">
      <div class="item__img"><img src="<?php echo assets_path() ?>img/common/img-blog01.jpg" alt=""></div>
      <div class="item__ttl">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。</div>
    </a>
    <a href="#" class="flex aiC inherit item">
      <div class="item__img"><img src="<?php echo assets_path() ?>img/common/img-blog02.jpg" alt=""></div>
      <div class="item__ttl">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。</div>
    </a>
    <a href="#" class="flex aiC inherit item">
      <div class="item__img"><img src="<?php echo assets_path() ?>img/common/img-blog03.jpg" alt=""></div>
      <div class="item__ttl">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。</div>
    </a>
    <a href="#" class="flex aiC inherit item">
      <div class="item__img"><img src="<?php echo assets_path() ?>img/common/img-blog04.jpg" alt=""></div>
      <div class="item__ttl">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。</div>
    </a>
    <a href="#" class="flex aiC inherit item">
      <div class="item__img"><img src="<?php echo assets_path() ?>img/common/img-blog05.jpg" alt=""></div>
      <div class="item__ttl">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。</div>
    </a>
  </div> -->

</aside>