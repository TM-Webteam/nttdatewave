<?php get_header(); ?>

<main class="news">

  <div class="containers flex">

    <article class="Contents article">

      <h1 class="article__ttl">お知らせ</h1>

      <div class="item">

        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'posts_per_page' => 9,
          'post_type' => 'news',
          'paged' => $paged,
          'order' => 'DESC',
          'post_status' => 'publish',
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
        ?>

          <?php while ($the_query->have_posts()) : $the_query->the_post();
            $post_id = get_the_ID();
            $post_terms = get_the_terms($post_id, 'news_category');
          ?>

            <a href="<?php the_permalink(); ?>" class="wrap">
              <div class="wrap__time">
                <span class="time"><?php echo get_the_date('Y.m.d', $post_id); ?></span>
                <?php if ($post_terms) : ?>
                  <?php foreach ($post_terms as $post_term) : ?>
                    <div class="cat"><?php echo esc_html($post_term->name); ?></div>
                  <?php endforeach; ?>
                <?php endif; ?>
              </div>
              <div class="wrap__ttl"><?php the_title(); ?></div>
            </a>

          <?php endwhile; ?>
        <?php endif; ?>

        <?php
        $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;
        the_posts_pagination(array(
          'mid_size' => 1,
          'prev_text' => '<span></span>',
          'next_text' => '<span></span>'
        ));
        wp_reset_postdata();
        ?>

      </div>

    </article>

    <?php get_sidebar('news'); ?>


  </div>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="/">トップ</a></li>
        <li>お知らせ</li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>