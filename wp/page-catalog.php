<?php
/*
Template Name:サービス資料
*/
get_header(); ?>

<main class="catalog">

  <!-- <section class="hero-m core">
    <div class="containers flex aiC">
      <figure class="hero-m__img"><img src="<?php echo assets_path() ?>img/catalog/img-hero.png" alt=""></figure>
      <div class="hero-m__box">
        <h1 class="ttl-primary-s wave"><span>サ</span><span>ー</span><span>ビ</span><span>ス</span><span>資</span><span>料</span><span>ダ</span><span>ウ</span><span>ン</span><span>ロ</span><span>ー</span><span>ド</span></h1>
        <div class="ttl-catch">Wave PC Mateに関する詳細な<br class="sp-only">資料ダウンロードはこちらから。</div>
      </div>
    </div>
  </section> -->

  <!-- <section class="form">
    <div class="containers" id="page-top">
      <div class="form__note">
        <p>● 下記フォームに必要事項をご記入の上、「確認画面へ進む」ボタンを押してください</p>
      </div>
      <div class="form__ttl">ダウンロード申込みフォーム</div>
      <input type="hidden" id="lf_form_uid" value="11830" />
      <input type="hidden" id="lf_form_formid" value="kVJebA1s" />
      <div id="lf_form_div" class="form__table"></div>
      <script type="text/javascript" src="//lmsg.jp/js/ja/form.js"></script>
    </div>
  </section> -->

  <div class="containers flex">

    <article class="Contents article">

      <h1 class="article__ttl"><?php the_title(); ?></h1>

      <figure class="article__img"><?php the_post_thumbnail(); ?></figure>

      <div class="article__lead"><?php echo CFS()->get('comment'); ?></div>

      <div class="toc">
        <div class="toc__ttl">本資料の目次</div>
        <div class="toc__list">
          <?php
          $paragraph_arr = CFS()->get('toc');
          ?>
          <?php if ($paragraph_arr) : foreach ($paragraph_arr as $paragraph) :
          ?>
              <dl>
                <dt><?php echo esc_html(strip_tags($paragraph['title'])) ?></dt>
                <?php if ($paragraph['caption']) : ?>
                  <dd>
                    <ul>
                      <?php foreach ((array)$paragraph['caption'] as $caption) :
                      ?>
                        <li><?php echo esc_html(strip_tags($caption['caption_title'])) ?></li>
                      <?php endforeach ?>
                    </ul>
                  </dd>
              </dl>
            <?php endif; ?>
        <?php endforeach;
          endif; ?>

        </div>
      </div>

    </article>

    <aside class="Sidebar">

      <section class="form">
        <div class="containers" id="page-top">
          <!-- <div class="form__note">
            <p>● 下記フォームに必要事項をご記入の上、「確認画面へ進む」ボタンを押してください</p>
          </div> -->
          <div class="form__ttl">ダウンロード申込みフォーム</div>
          <input type="hidden" id="lf_form_uid" value="11830" />
          <input type="hidden" id="lf_form_formid" value="kVJebA1s" />
          <div id="lf_form_div" class="form__table"></div>
          <script type="text/javascript" src="//lmsg.jp/js/ja/form.js"></script>
        </div>
      </section>

    </aside>

  </div>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="/">トップ</a></li>
        <li>サービス資料ダウンロード</li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>