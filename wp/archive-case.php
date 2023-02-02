<?php get_header(); ?>

<main class="case">

  <section class="hero-m core">
    <div class="containers">
      <h1 class="ttl-primary-s wave"><span>導</span><span>入</span><span>事</span><span>例</span></h1>
      <div class="ttl-catch" data-aos="fade" data-aos-delay="600">2003年のサービス開始より多くのお客様に選ばれてきた「Wave PC Mate」の実績・事例をご紹介します。</div>
    </div>
  </section>

  <section class="grid">
    <div class="containers">
      <div class="note">※本ページは掲載許諾をいただきました企業様のみご紹介しております。</div>
      <div class="flex gather">

        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'posts_per_page' => 6,
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
            <?php if ($detail_page == "1") { ?>
              <div class="card">
              <?php } else { ?>
                <a href="<?php the_permalink(); ?>" class="card">
                <?php } ?>
                <figure class="card__img"><?php the_post_thumbnail(); ?></figure>
                <div class="card__txt"><?php the_title(); ?></div>
                <div class="card__company"><?php echo CFS()->get('company'); ?></div>
                <div class="flex fS card__cat">
                  <?php if ($post_terms) : ?>
                    <?php foreach ($post_terms as $post_term) : ?>
                      <div class="cat"><?php echo esc_html($post_term->name); ?></div>
                    <?php endforeach; ?>
                  <?php endif; ?>
                  <!-- <span class="cat">サービス</span>
                <span class="cat">60拠点</span>
                <span class="cat">2,300台</span> -->
                </div>
                <?php if ($detail_page == "1") { ?>
              </div>
            <?php } else { ?>
              </a>
            <?php } ?>

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

    </div>
  </section>

  <section class="material bg-B">
    <div class="containers">
      <div class="flex item">
        <figure class="item__img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></figure>
        <summary class="item__box">
          <div class="item__box--txt">社内PCの管理でお悩みの企業様へ</div>
          <div class="item__box--ttl">情シス部門の工数逼迫で起こりうるリスクと解決策とは</div>
          <a href="/whitepaper/system_dept_risk_solution/" class="more bg-o dl"><span>資料ダウンロードはこちら</span></a>
        </summary>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/infoConts'); ?>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="/">トップ</a></li>
        <li>実績・事例</li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>