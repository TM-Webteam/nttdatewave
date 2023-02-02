<section class="caseConts bg-LB">
  <div class="containers">
    <h2 class="ttl-secondary">Wave PC Mateの導入事例</h2>
    <div class="flex">

      <?php
      $args = array(
        'posts_per_page' => 2,
        'post_type' => 'case',
        'paged' => $paged,
        'order' => 'DESC',
        'post_status' => 'publish',
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
      ?>

        <?php while ($the_query->have_posts()) : $the_query->the_post();
          $post_id = get_the_ID();
          $post_terms = get_the_terms($post_id, 'case_category');
          $detail_page = CFS()->get('detail_page');
        ?>

          <div class="wrap fadein">
            <ul class="flex fS group">
              <?php if ($post_terms) : ?>
                <?php foreach ($post_terms as $post_term) : ?>
                  <li class="cat"><?php echo esc_html($post_term->name); ?></li>
                <?php endforeach; ?>
              <?php endif; ?>
            </ul>
            <?php if ($detail_page == "1") { ?>
              <div class="flex card">
              <?php } else { ?>
                <a href="<?php the_permalink(); ?>" class="flex card">
                <?php } ?>
                <figure class="card__img"><?php the_post_thumbnail(); ?></figure>
                <summary class="card__box">
                  <div class="card__box--ttl"><?php the_title(); ?></div>
                  <div class="card__box--company"><?php echo CFS()->get('company'); ?></div>
                </summary>
                <?php if ($detail_page == "1") { ?>
              </div>
            <?php } else { ?>
              </a>
            <?php } ?>
          </div>

        <?php endwhile; ?>
      <?php endif; ?>

    </div>
    <a href="/case/" class="more">導入事例を見る</a>
  </div>
</section>