<aside class="Sidebar">
  <?php
  $args = array(
    'taxonomy' => 'news_category',
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

  <a href="/contact/" class="bnr-contact"><img src="<?php echo assets_path() ?>img/common/bnr-contact.png" alt="導入前のご質問・ご相談はお気軽にご相談お見積り"></a>

  <a href="/catalog/" class="bnr-catalog"><img src="<?php echo assets_path() ?>img/common/bnr-catalog.png" alt="Wave PC Mateの詳細がわかる！ サービス資料ダウンロード"></a>

</aside>