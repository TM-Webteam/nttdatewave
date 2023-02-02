<?php get_header(); ?>

<main class="column">

  <section class="hero-m core">
    <div class="containers">
      <h1 class="ttl-primary-s wave"><span>お</span><span>役</span><span>立</span><span>ち</span><span>コ</span><span>ラ</span><span>ム</span></h1>
      <div class="ttl-catch" data-aos="fade" data-aos-delay="600">PCやITインフラの管理業務に関するお役立ち情報をお届けするコラムです。</div>
    </div>
  </section>

  <section class="sort">
    <div class="containers">
      <div class="search">
        <form method="get" action="<?php echo home_url('/'); ?>" class="search__form">
          <input name="s" class="search__input" type="search" placeholder="キーワードから探す">
          <input type="hidden" name="post_type" value="column">
          <button accesskey="f" class="search__btn" type="submit"><img src="<?php echo assets_path() ?>img/common/icon-search.svg"></button>
        </form>
      </div>

      <div class="flex fS inherit">
        <?php
        $args = array(
          'post_type'    => 'column',
          'taxonomy'  => 'column_category',
        );
        $categories = get_terms($args);
        $cnt = 0;
        foreach ($categories as $category) :
          $cnt++;
        ?>
          <a href="<?php echo esc_url(get_term_link($category)); ?>" class="sort__box"><?php echo esc_html($category->name); ?></a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="latest bg-B">
    <div class="containers">
      <h2 class="ttl-secondary">最新コラム</h2>
      <div class="flex">
        <?php
        $args = array(
          'posts_per_page'   => 2,
          'post_type'    => 'column',
          'paged' => $paged,
          'order' => 'DESC',
          'orderby' => 'post_date',
          'post_status' => 'publish',
          // 'meta_key' => 'blog_date',
          // 'orderby' => 'meta_value',
        );
        ?>
        <?php
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
        ?>
          <?php while ($the_query->have_posts()) : $the_query->the_post();
            $post_id = get_the_ID();
            $post_terms = get_the_terms($post_id, 'column_category');
          ?>
            <a href="<?php the_permalink(); ?>" class="flex card fadein">
              <div class="card__ttl"><?php the_title(); ?></div>
              <div class="card__img"><?php the_post_thumbnail(); ?></div>
              <div class="card__box">
                <?php if ($post_terms) : ?>
                  <?php foreach ($post_terms as $post_term) : ?>
                    <div class="cat"><?php echo esc_html($post_term->name); ?></div>
                  <?php endforeach; ?>
                <?php endif; ?>
                <div class="card__box--txt"><?php echo CFS()->get('lead'); ?></div>
                <div class="card__box--time"><time><?php echo get_the_date('Y.m.d'); ?></time></div>
              </div>
            </a>
        <?php
          endwhile;
        endif; ?>
      </div>
    </div>
  </section>

  <section class="grid">
    <div class="containers">

      <ul class="flex grid__card">

        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'posts_per_page' => 12,
          'post_type' => 'column',
          'paged' => $paged,
          'order' => 'DESC',
          'orderby' => 'post_date',
          'post_status' => 'publish',
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
        ?>

          <?php while ($the_query->have_posts()) : $the_query->the_post();
            $post_id = get_the_ID();
            $post_terms = get_the_terms($post_id, 'column_category');
          ?>

            <li>
              <a href="<?php the_permalink(); ?>">
                <div class="grid__card--img"><?php the_post_thumbnail(); ?></div>
                <div class="flex fS">
                  <?php if ($categories) : ?>
                    <?php foreach ($post_terms as $post_term) : ?>
                      <div class="cat"><?php echo esc_html($post_term->name); ?></div>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </div>
                <div class="grid__card--ttl"><?php the_title(); ?></div>
                <span class="grid__card--time"><time><?php echo get_the_date('Y.m.d', $post_id); ?></time></span>
              </a>
            </li>

          <?php endwhile; ?>
        <?php endif; ?>

      </ul>

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
  </section>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="/">トップ</a></li>
        <li>お役立ちコラム</li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>