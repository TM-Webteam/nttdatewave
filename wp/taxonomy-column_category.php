<?php get_header(); ?>

<main class="column-category">

  <div class="containers flex">

    <article class="Contents article">

      <h1 class="article__ttl"><span><?php esc_html(single_cat_title()); ?></span>に関するコラム</h1>

      <div class="article__lead"><span><?php esc_html(single_cat_title()); ?></span>に関する記事をお届けしています。</div>

      <div class="item">

        <?php
        $queried_object = get_queried_object();
        $term_id = esc_html($queried_object->term_id);
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'posts_per_page' => 10,
          'post_type' => 'column',
          'paged' => $paged,
          'order' => 'DESC',
          'orderby' => 'post_date',
          'post_status' => 'publish',
          'tax_query'  => array(
            'relation'  => 'AND',
            array(
              'taxonomy' => 'column_category',
              'field' => 'term_id',
              'terms' => array($term_id),
              'operator' => 'IN',
            ),
          ),
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
        ?>
          <?php while ($the_query->have_posts()) : $the_query->the_post();
            $post_id = get_the_ID();
            $post_terms = get_the_terms($post_id, 'column_category');
          ?>
            <a href="<?php the_permalink(); ?>" class="flex wrap">
              <figure class=" wrap__img"><?php the_post_thumbnail(); ?></figure>
              <summary class="wrap__box">
                <div class="wrap__box--ttl"><?php the_title(); ?></div>
                <div class="flex fS aiC wrap__box--row">
                  <span class="time"><?php echo get_the_date('Y.m.d', $post_id); ?></span>
                  <?php if ($post_terms) : ?>
                    <?php foreach ($post_terms as $post_term) : ?>
                      <div class="cat"><?php echo esc_html($post_term->name); ?></div>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </div>
                <div class="wrap__box--lead"><?php echo CFS()->get('lead'); ?></div>
              </summary>
            </a>

          <?php endwhile;
          ?>
        <?php endif; ?>

      </div>

      <?php
      $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;
      the_posts_pagination(array(
        'mid_size' => 1,
        'prev_text' => '<span></span>',
        'next_text' => '<span></span>'
      ));
      wp_reset_postdata();
      ?>

    </article>

    <?php get_sidebar('column'); ?>

  </div>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="/">トップ</a></li>
        <li><a href="/column/">お役立ちコラム</a></li>
        <li><?php esc_html(single_cat_title()); ?></li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>