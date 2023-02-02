<aside class="Sidebar">

  <a href="/contact/" class="bnr-contact"><img src="<?php echo assets_path() ?>img/common/bnr-contact.png" alt="導入前のご質問・ご相談はお気軽にご相談お見積り"></a>

  <a href="/catalog/" class="bnr-catalog"><img src="<?php echo assets_path() ?>img/common/bnr-catalog.png" alt="Wave PC Mateの詳細がわかる！ サービス資料ダウンロード"></a>

  <?php
  // $paged = get_query_var('paged') ? get_query_var('paged') : 1;
  $args = array(
    'posts_per_page' => 3,
    'post_type' => 'whitepaper',
    // 'paged' => $paged,
    'order' => 'DESC',
    'post_status' => 'publish',
  );
  $the_query = new WP_Query($args);
  if ($the_query->have_posts()) :
  ?>

    <div class="blogList">
      <h3 class="ttl-tertiary">お役立ち資料</h3>
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="flex aiC inherit item">
          <div class="item__img"><?php the_post_thumbnail(); ?></div>
          <div class="item__ttl"><?php the_title(); ?></div>
        </a>


      <?php endwhile; ?>

    </div>
  <?php endif; ?>
</aside>