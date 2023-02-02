<?php get_header(); ?>

<main class="whitepaper">

  <section class="hero-m core">
    <div class="containers">
      <h1 class="ttl-primary-s wave"><span>お</span><span>役</span><span>立</span><span>ち</span><span>資</span><span>料</span></h1>
      <div class="ttl-catch" data-aos="fade" data-aos-delay="600">PC・ITインフラ業務の現場課題解決に役立つ資料が無料でダウンロードできます。</div>
    </div>
  </section>

  <section>
    <div class="containers">

      <?php
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $args = array(
        'posts_per_page' => -1,
        'post_type' => 'whitepaper',
        'paged' => $paged,
        'order' => 'DESC',
        'post_status' => 'publish',
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
      ?>

        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

          <a href="<?php the_permalink(); ?>" class="flex card fadein">
            <figure class="card__img core"><?php the_post_thumbnail(); ?></figure>
            <summary class="card__box">
              <div class="card__box--ttl"><?php the_title(); ?></div>
              <div class="card__box--txt"><?php echo CFS()->get('lead'); ?></div>
              <div class="more bg-o">ダウンロードはこちら</div>
            </summary>
          </a>

        <?php endwhile; ?>
      <?php endif; ?>


    </div>
  </section>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="/">トップ</a></li>
        <li>お役立ち資料</li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>