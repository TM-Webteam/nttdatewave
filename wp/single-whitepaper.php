<?php
$whitepaper_title = get_the_title();
?>
<?php get_header(); ?>

<main class="whitepaper-single" id="page-top">

  <div class="containers flex">

    <article class="Contents article">

      <h1 class="article__ttl"><?php the_title(); ?></h1>

      <div id="wp-slick" class="wp-slick">
        <figure class="article__img"><?php the_post_thumbnail(); ?></figure>
        <?php if (!empty(CFS()->get('img-wp2'))) : ?>
          <figure class="article__img"><img src="<?php echo esc_url(CFS()->get('img-wp2')); ?>" alt=""></figure>
        <?php endif; ?>
        <?php if (!empty(CFS()->get('img-wp3'))) : ?>
          <figure class="article__img"><img src="<?php echo esc_url(CFS()->get('img-wp3')); ?>" alt=""></figure>
        <?php endif; ?>
      </div>

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
        <div class="containers">
          <div class="form__ttl">ダウンロード申込みフォーム</div>
          <input type="hidden" id="lf_form_uid" value="11830" />
          <input type="hidden" id="lf_form_formid" value="0QytcLTn" />
          <div id="lf_form_div" class="form__table"></div>
          <script type="text/javascript" src="//lmsg.jp/js/ja/form.js"></script>
          <!-- <form action="">
            <div class="form__ttl">ダウンロード申込みフォーム</div>
            <div class="form__table">
              <table>
                <colgroup>
                  <col>
                  <col>
                </colgroup>
                <tr>
                  <th class="flex aiC">
                    <span class="item">会社名</span>
                    <span class="required">必須</span>
                  </th>
                  <td><input type="text" placeholder="例）NTTデータウェーブ株式会社"></td>
                </tr>
                <tr>
                  <th class="flex aiC">
                    <span class="item">部署名</span>
                    <span class="required">必須</span>
                  </th>
                  <td><input type="text" placeholder="例）システム管理室"></td>
                </tr>
                <tr>
                  <th class="flex aiC">
                    <span class="item">ご担当者名</span>
                    <span class="required">必須</span>
                  </th>
                  <td>
                    <div class="flex aiC">
                      <p class="flex fS aiC half"><span>氏：</span><input type="text" placeholder="例）佐藤"></p>
                      <p class="flex fS aiC half"><span>名：</span><input type="text" placeholder="例）太郎"></p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th class="flex aiC">
                    <span class="item">メールアドレス</span>
                    <span class="required">必須</span>
                  </th>
                  <td><input type="email" placeholder="例）sample@gmail.com.jp"></td>
                </tr>
                <tr>
                  <th class="flex aiC">
                    <span class="item">電話番号</span>
                    <span class="required">必須</span>
                  </th>
                  <td><input type="tel" placeholder="例）090-1234-5678"></td>
                </tr>
                <tr>
                  <th class="flex aiC">
                    <span class="item">お問合せ・相談事項がある方<br class="pc-only">はご記入ください。</span>
                    <span class="optional">任意</span>
                  </th>
                  <td><textarea placeholder="例）ダウンロード資料を見ながら説明もしてほしい。"></textarea></td>
                </tr>
                <tr>
                  <th class="flex aiC">
                    <span class="item">個人情報の取扱いについて</span>
                    <span class="required">必須</span>
                  </th>
                  <td>
                    <div class="flex fS aiC"><input type="checkbox">同意する</div>
                    <p>弊社Webサイトの<a href="/privacy/">プライバシーポリシー</a>をご確認の上、ご同意いただき送信をお願いいたします。</p>
                  </td>
                </tr>
              </table>
              <button type="submit" class="more bg-o">確認画面へ進む</button>
            </div>
          </form> -->
        </div>
      </section>

    </aside>

  </div>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="/">トップ</a></li>
        <li><a href="/whitepaper/">お役立ち資料</a></li>
        <li><?php echo strip_tags($whitepaper_title); ?></li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>