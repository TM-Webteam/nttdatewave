<?php
$column_title = get_the_title();
$post_id = get_the_ID();
$post_terms = get_the_terms($post_id, 'case_category');
?>
<?php get_header(); ?>

<main class="case-single">

  <section class="mv">
    <div class="containers">
      <div class="mv__box">
        <figure><img src="<?php echo CFS()->get('main_image'); ?>" alt=""></figure>
        <div class="mv__wrap">
          <h1 class="mv__wrap--ttl"><?php the_title(); ?></h1>
          <div class="flex mv__box">
            <figure class="mv__box--img"><img src="<?php echo CFS()->get('logo'); ?>" alt=""></figure>
            <div class="flex mv__box--detail">
              <div class="flex">
                <?php if ($post_terms) : ?>
                  <?php foreach ($post_terms as $post_term) : ?>
                    <div class="cat"><?php echo esc_html($post_term->name); ?></div>
                  <?php endforeach; ?>
                <?php endif; ?>
              </div>
              <dl class="flex">
                <dt>業種</dt>
                <dd><?php echo CFS()->get('industries'); ?></dd>
                <dt>サービス提供内容</dt>
                <dd><?php echo CFS()->get('service'); ?></dd>
                <dt>導入規模</dt>
                <dd><?php echo CFS()->get('introduction_scale'); ?></dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="containers flex">

      <article class="Contents article single">

        <div class="single__lead"><?php echo CFS()->get('lead'); ?></div>

        <div class="single__toc">
          <div class="single__toc--ttl">目次</div>
          <dl>
            <dd>
              <ul>
                <?php
                $paragraph_arr = CFS()->get('paragraph');
                $i = 0;
                ?>
                <?php if ($paragraph_arr) : foreach ($paragraph_arr as $paragraph) :
                    $i++;
                    $i2 = 0;
                ?>
                    <li><a href="#toc<?php echo $i ?>"><?php echo esc_html(strip_tags($paragraph['title'])) ?></a></li>

                <?php endforeach;
                endif; ?>
              </ul>
            </dd>
            <!-- <dd>
              <ul>
                <li><a href="#">株式会社ルネサンスについて</a></li>
                <li><a href="#">NTTデータウェーブから何を導入したか</a></li>
                <li><a href="#">自社スタッフだけで行うシステム運用の限界</a></li>
                <li><a href="#">「何でも出来る」はずだった、IT運用管理ツール</a></li>
                <li><a href="#">リース会社基準の見直しを機に、システムやPCを"所有"ではなく"利用"する環境へ</a></li>
                <li><a href="#">候補企業5社の中から「Wave PC Mate」を選んだ理由</a></li>
                <li><a href="#">PCを入れ替える時の気遣いに感心</a></li>
                <li><a href="#">ヘルプデスクの利用率が向上</a></li>
                <li><a href="#">どのような会社に「Wave PC Mate」は向いているか</a></li>
                <li><a href="#">NTTデータウェーブへのメッセージ</a></li>
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
            </div>
            <?php foreach ($paragraph['caption'] as $caption) :
              $i2++;
            ?>
              <h3 id="toc<?php echo $i; ?>-<?php echo $i2 ?>" class="single__h3"><?php echo $caption['caption_title'] ?></h3>
              <div class="single__txt">
                <?php echo wp_kses_post($caption['caption_comment']) ?>
              </div>
            <?php endforeach ?>
        <?php endforeach;
        endif; ?>
        <!-- <h2 class="single__h2">株式会社ルネサンスについて</h2>

        <h3 class="single__h3">株式会社ルネサンス（以下ルネサンス）について教えてください。</h3>

        <div class="single__txt">
          <p>ルネサンスは1979年に創業した、スポーツクラブの運営を事業としている会社です。フィットネスクラブ、テニススクール、スイミングスクール、ゴルフスクールなどの総合型のスポーツクラブを全国約100ヵ所に展開しています。</p>
          <p>ルネサンスは、「生きがい創造企業」としてお客様に健康で快適なライフスタイルを提案することを企業理念として掲げています。そのため、運動をする器具や場所の提供だけではなく、接客やサポート品質を高めることに注力しています。また、医療機関との提携による介護予防や保健指導などのヘルスケア推進事業にも力を入れています。</p>
          <p>従業員数は595名（2009年3月31日現在）、売上高は356億円（2009年3月期）、会員数は32万9千人（2009年3月期、スクール会員とクラブ会員の合計）です。</p>
        </div>

        <div class="flex single__img">
          <img src="<?php echo assets_path() ?>img/case/img-single02.jpg" alt="">
          <img src="<?php echo assets_path() ?>img/case/img-single03.jpg" alt="">
        </div>

        <h2 class="single__h2">NTTデータ ウェーブから何を導入したか</h2>

        <h3 class="single__h3">ルネサンスでは、NTTデータ ウェーブから何を導入したのですか。</h3>

        <div class="single__txt">
          <p>NTTデータ ウェーブのPC運用管理のアウトソーシングサービス「Wave PC Mate」を導入しました。<br>ルネサンスのITインフラは、事務作業全般を担う情報系と、会員データの処理等のスポーツクラブ運営を担う基幹系に分かれています。「Wave PC Mate」は情報系で使われている全てのPCを対象として導入しました。 PC台数はおよそ1,000台です。従業員（社員、アルバイト、インストラクター等）が全国各地のクラブで使用しています。</p>
        </div>

        <h2 class="single__h2">自社スタッフだけで行うシステム運用の限界</h2>

        <h3 class="single__h3">「Wave PC Mate」導入前の、運用について教えてください。</h3>

        <div class="single__txt">
          <p>これまでルネサンスでは、4～5名のIT担当スタッフで情報系と基幹系の全てのシステムを運用していました。しかし、2003年頃から事業規模の拡大に伴って、PCの見積取得から発注、納品、設置業者の管理といった作業や、日々のトラブル対応などの運用が、自社要員だけでの体制では、困難になってきました。</p>
          <p>また、現場からの問い合わせやPCの障害対応などで大幅に時間をとられることによって、内部統制のことを考えた、より高いレベルの資産管理やセキュリティ管理を徹底するためのシステムや、最も重要なスポーツクラブの運営効率を高めるためのシステムについて、企画検討する時間をなかなか確保できずにいました。</p>
          <p>実は、この問題については2004年に一度手を打っています。<br>自社構築でのIT運用管理ツールの導入や、ヘルプデスクのアウトソーシングを行いました。<br>しかし問題は解決しませんでした。</p>
        </div>

        <h2 class="single__h2">NTTデータ ウェーブへのメッセージ</h2>

        <h3 class="single__h3">最後に、NTTデータ ウェーブへのメッセージをお願いします。</h3>

        <div class="single__img">
          <img src="<?php echo assets_path() ?>img/case/img-single04.jpg" alt="" class="full">
        </div>

        <div class="single__txt">
          <p>アウトソーシングは設備や仕組みでなく、サービスです。私たちの要望をどのように対応できるかを考えてくれるかが大きいと思います。ですから、サービスを提供する人や組織的な要素や、スキームを作ってくれる柔軟性などを重要視して、「Wave PC Mate」を選びました。</p>
          <p>これまでのNTTデータ ウェーブの対応は、期待していた通りでした。安心して、ルネサンスの情報系インフラをお任せしています。<br>今後も引き続き、よろしくお願いします。</p>
          <p>”これからも、きめ細かいサポートを期待しています”<br>写真左：弊社ネットワーク事業部　サービス企画担当　課長の重信<br>写真右：弊社ネットワーク事業部　就任サービスマネージャーの今津<br>お忙しい中、ありがとうございました。</p>
        </div> -->

        <div class="single__ttl">サービス資料</div>
        <div class="flex item">
          <figure class="item__img"><img src="<?php echo assets_path() ?>img/catalog/img-hero.png" alt="Wave PC Mate"></figure>
          <summary class="item__box">
            <div class="item__box--ttl">Wave PC Mate</div>
            <div class="item__box--txt">Wave PC Mateのサービス概要から特徴やメリットをご紹介！<br>解決できる課題から効果などがわかるサービス資料はこちらから</div>
            <a href="/catalog/" class="more bg-o dl"><span>資料ダウンロード</span></a>
          </summary>
        </div>

      </article>

      <?php get_sidebar('case'); ?>

    </div>
  </section>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="/">トップ</a></li>
        <li><a href="/case/">導入事例</a></li>
        <li><?php echo strip_tags($column_title); ?></li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>