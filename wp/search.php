<?php
$allsearch = new WP_Query("s=$s&posts_per_page=-1");
$key = wp_specialchars($s, 1);
?>
<?php get_header(); ?>

<main class="searchPage">

  <div class="containers flex">

    <article class="Contents article">

      <h1 class="article__ttl">「<span><?php echo $key; ?></span>」で検索した結果：<?php echo $wp_query->found_posts; ?> 件</h1>

      <div class="item">

      <?php
        if (have_posts()) :
        ?>
          <?php while (have_posts()) : the_post();
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
                    <span class="cat"><?php echo esc_html($post_term->name); ?></span>
                  <?php endforeach; ?>
                <?php endif; ?>
              </div>
              <div class="wrap__box--lead"><?php echo CFS()->get('lead'); ?></div>
            </summary>
          </a>

          <?php endwhile; ?>
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
        <li>カテゴリ名が入ります。</li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>