<?php
global $right_wp_bnr;
$column_title = get_the_title();
$rec_column_title = CFS()->get('rec_column_title');
$rec_column = CFS()->get('rec_column');
$right_wp_bnr = CFS()->get('right_wp_bnr');
?>
<?php get_header(); ?>

<main class="column-single">
  <div class="containers flex">

    <article class="Contents article single">

      <h1 class="single__h1"><?php the_title(); ?></h1>

      <div class="single__time"><time><?php echo get_the_modified_date(); ?></time></div>

      <div class="single__lead"><?php echo CFS()->get('lead'); ?></div>


      <div class="single__toc">
        <div class="single__toc--ttl">目次</div>
        <dl>
          <?php
          $paragraph_arr = CFS()->get('paragraph');
          $i = 0;
          ?>
          <?php if ($paragraph_arr) : foreach ($paragraph_arr as $paragraph) :
              $i++;
              $i2 = 0;
          ?>
              <dt><a href="#toc<?php echo $i ?>"><?php echo esc_html(strip_tags($paragraph['title'])) ?></a></dt>
              <?php if ($paragraph['caption']) : ?>
                <dd>
                  <ul>
                    <?php foreach ((array)$paragraph['caption'] as $caption) :
                      $i2++;
                      if (!empty($caption['caption_title'])) :
                    ?>
                        <li><a href="#toc<?php echo $i ?>-<?php echo $i2 ?>"><?php echo esc_html(strip_tags($caption['caption_title'])) ?></a></li>
                    <?php
                      endif;
                    endforeach; ?>
                  </ul>
                </dd>
              <?php endif; ?>
          <?php endforeach;
          endif; ?>
          <!-- <dt><a href="#">段落（タイトル）が入ります。段落（タイトル）が入ります。</a></dt>
          <dd>
            <ul>
              <li><a href="#">小見出し（タイトル）が入ります。</a></li>
              <li><a href="#">小見出し（タイトル）が入ります。</a></li>
            </ul>
          </dd>
          <dt><a href="#">段落（タイトル）が入ります。段落（タイトル）が入ります。</a></dt>
          <dd>
            <ul>
              <li><a href="#">小見出し（タイトル）が入ります。</a></li>
              <li><a href="#">小見出し（タイトル）が入ります。</a></li>
            </ul>
          </dd>
          <dt><a href="#">段落（タイトル）が入ります。段落（タイトル）が入ります。</a></dt>
          <dd>
            <ul>
              <li><a href="#">小見出し（タイトル）が入ります。</a></li>
              <li><a href="#">小見出し（タイトル）が入ります。</a></li>
            </ul>
          </dd> -->
        </dl>
      </div>

      <?php
      $i = 0;
      if ($paragraph_arr) : foreach ($paragraph_arr as $paragraph) :
          $i++;
          $i2 = 0;
      ?>
          <h2 id="toc<?php echo $i; ?>" class="single__h2"><?php echo $paragraph['title'] ?></h2>
          <div class="single__txt">
            <?php echo $paragraph['comment'] ?>
            <!-- <a href="#" class="flex cardLink">
              <figure class="cardLink__img"><img src="<?php echo assets_path() ?>img/column/img-cardlink.jpg" alt=""></figure>
              <summary class="cardLink__box">
                <div class="cardLink__box--ttl">コラムタイトルが入ります。コラムタイトルが入ります。</div>
                <div class="cardLink__box--txt">リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。</div>
              </summary>
            </a> -->
          </div>
          <?php foreach ((array)$paragraph['caption'] as $caption) :
            $i2++;
          ?>
            <h3 id="toc<?php echo $i; ?>-<?php echo $i2 ?>" class="single__h3"><?php echo $caption['caption_title'] ?></h3>
            <div class="single__txt">
              <?php echo wp_kses_post($caption['caption_comment']) ?>
            </div>
          <?php endforeach ?>
      <?php endforeach;
      endif; ?>

      <!-- 
        <h2 class="single__h2">段落（タイトル）が入ります。段落（タイトル）が入ります。</h2>

        <div class="single__img">
          <img src="<?php echo assets_path() ?>img/column/img-single01.jpg" alt="" class="full">
        </div>

        <div class="single__txt">
          <p>段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。</p>
          <p>段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。</p>
        </div>

        <a href="#" class="flex cardLink">
          <figure class="cardLink__img"><img src="<?php echo assets_path() ?>img/column/img-cardlink.jpg" alt=""></figure>
          <summary class="cardLink__box">
            <div class="cardLink__box--ttl">コラムタイトルが入ります。コラムタイトルが入ります。</div>
            <div class="cardLink__box--txt">リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。</div>
          </summary>
        </a>

        <h3 class="single__h3">小見出し（タイトル）が入ります。小見出し（タイトル）が入ります。</h3>

        <div class="single__txt">
          <p>小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。</p>
          <p>小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。<br>小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。</p>
          <p>小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。</p>
        </div>

        <h2 class="single__h2">段落（タイトル）が入ります。段落（タイトル）が入ります。</h2>

        <div class="single__img">
          <img src="<?php echo assets_path() ?>img/column/img-single02.jpg" alt="" class="full">
        </div>

        <div class="single__txt">
          <p>小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。</p>
          <p>小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。<br>小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。</p>
          <p>小見出し（本文）が入ります。小見出し（本文）が入ります。小見出し（本文）が入ります。</p>
        </div>

        <h3 class="single__h3">小見出し（タイトル）が入ります。小見出し（タイトル）が入ります。</h3>

        <div class="single__txt">
          <p>段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。</p>
          <p>段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。段落（本文）が入ります。</p>
        </div> -->


      <?php
      if (!empty(CFS()->get('whitepaper'))) :
      ?>
        <div class="single__ttl">お役立ち資料</div>
        <?php foreach (CFS()->get('whitepaper') as $val) : ?>

          <div class="flex item">
            <figure class="item__img"><?php echo get_the_post_thumbnail($val, 'medium') ?></figure>
            <summary class="item__box">
              <div class="item__box--ttl"><?php echo get_post($val)->post_title; ?></div>
              <div class="item__box--txt"><?php echo get_post_meta($val, 'lead', true); ?></div>
              <a href="<?php echo get_permalink($val); ?>" class="more bg-o dl"><span>資料ダウンロード</span></a>
            </summary>
          </div>

          <!-- <div class="flex item">
            <div class="item__img">
              <figure><?php echo get_the_post_thumbnail($val, 'medium') ?></figure>
            </div>
            <div class="item__box">
              <div class="item__box--ttl"><?php echo get_post($val)->post_title; ?></div>
              <div class="item__box--txt"><?php echo get_post_meta($val, 'lead_sentence', true); ?></div>
              <a href="<?php echo get_permalink($val); ?>" class="dl-btn"><span>資料ダウンロード</span></a>
            </div>
          </div> -->
        <?php endforeach; ?>

      <?php endif; ?>


      <!-- <div class="single__ttl">お役立ち資料</div>
<div class="flex item">
  <figure class="item__img"><img src="<?php echo assets_path() ?>img/column/img-single03.jpg" alt=""></figure>
  <summary class="item__box">
    <div class="item__box--ttl">資料タイトルが入ります。資料タイトルが入</div>
    <div class="item__box--txt">資料キャッチコピーが入ります。資料キャッチコピーが入ります。資料キャッチコピーが入ります。</div>
    <a href="#" class="more bg-o dl"><span>資料ダウンロード</span></a>
  </summary>
</div> -->

      <?php
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $args = array(
        'posts_per_page'   => 3,
        'post_type'    => 'column',
        // 'post__not_in' => $p_id_b,
        'post_status' => 'publish',
        'tax_query' => array(
          'relation' => 'AND',
          array(
            'taxonomy' => 'column_category',
            'field' => 'id',
            'terms' => $column_cate,
            'operator' => 'IN'
          )
        ),
        'paged' => $paged,
        'order' => 'DESC',
      );
      $the_query = new WP_Query($args);
      $num_c = $the_query->post_count;
      if ($the_query->have_posts()) :
      ?>
        <div class="single__ttl">関連コラム</div>
        <div class="relation">
          <?php
          while ($the_query->have_posts()) : $the_query->the_post();
            $post_rec_id = get_the_ID();
            $p_id_b[] = $post_rec_id;
          ?>
            <a href="<?php the_permalink(); ?>" class="flex aiC inherit relation__box">
              <div class="relation__box--img"><?php the_post_thumbnail(); ?></div>
              <div class="relation__box--txt"><?php the_title(); ?></div>
            </a>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>

      <?php
      if (!empty($rec_column_title)) :
      ?>
        <div class="relatedItem">
          <div class="relatedItem__ttl"><?php echo $rec_column_title; ?></div>
          <?php if (!empty($rec_column)) : ?>
            <ul class="relatedItem__box">
              <?php foreach ($rec_column as $val_rec) : ?>
                <li class="relatedItem__box--list"><a href="<?php echo $val_rec['url']; ?>"><?php echo $val_rec['title']; ?></a></li>
              <?php endforeach; ?>
              <!-- <li class="relatedItem__box--list"><a href="#">テキストが入ります。テキストが入ります。</a></li>
              <li class="relatedItem__box--list"><a href="#">テキストが入ります。テキストが入ります。</a></li>
              <li class="relatedItem__box--list"><a href="#">テキストが入ります。テキストが入ります。</a></li>
              <li class="relatedItem__box--list"><a href="#">テキストが入ります。テキストが入ります。</a></li> -->
            </ul>
          <?php endif; ?>
        </div>
      <?php endif; ?>

      <div class="ttl-writer">このコラムを書いたライター</div>
      <div class="flex aiC writer-card">
        <figure><img src="<?php echo assets_path() ?>img/common/img-writer.png" alt="Wave PC Mate 運営事務局"></figure>
        <dl>
          <dt>Wave PC Mate 運営事務局</dt>
          <dd>Wave PC Mateは、NTTデータ ウェーブが提供するハードウェアの調達から導入、運用管理、撤去・廃棄までのPCライフサイクルマネジメントのトータルアウトソーシングサービスです。本サイトでは、法人企業のPC運用管理業務の課題解決に役立つ様々な情報をお届けします。</dd>
        </dl>
      </div>


    </article>

    <?php get_sidebar('column'); ?>

  </div>
  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="/">トップ</a></li>
        <li><a href="/column/">お役立ちコラム</a></li>
        <li><?php echo strip_tags($column_title); ?></li>
      </ul>
    </div>
  </section>
</main>

<?php get_footer(); ?>