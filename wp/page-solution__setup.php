<?php get_header(); ?>

<main class="setup">

  <section class="hero-m core">
    <div class="containers">
      <h1 class="ttl-primary-s wave"><span>セ</span><span>ッ</span><span>ト</span><span>ア</span><span>ッ</span><span>プ</span><span>／</span><span>デ</span><span>リ</span><span>バ</span><span>リ</span><span>サ</span><span>ー</span><span>ビ</span><span>ス</span></h1>
      <div class="ttl-catch" data-aos="fade" data-aos-delay="600">お客様固有の環境にセットアップした上でお届けいたします。</div>
      <a href="/catalog/" class="more bg-o dl"><span>サービス資料ダウンロード</span></a>
    </div>
  </section>

  <section class="alternate cube">
    <div class="containers">
      <h2 class="ttl-secondary">弊社独自ツールにより初期導入時の作業を自動化し、<br>導入費用を大幅に削減できます。</h2>
      <ul class="group">
        <li class="flex aiC">
          <figure class="group__img" data-aos="fade-right"><img src="<?php echo assets_path() ?>img/solution/setup/img-alternate01.jpg" alt="マスタ環境の作成～検証・評価まで代行"></figure>
          <summary class="group__box">
            <div class="group__box--ttl">マスタ環境の作成～検証・評価まで代行</div>
            <div class="group__box--txt">OSおよびお客様ソフトウェアのコンフィグレーション決定・インストール・各種設定をすべて代行します。</div>
          </summary>
        </li>
        <li class="flex aiC sp-reverse">
          <summary class="group__box">
            <div class="group__box--ttl">独自のセットアップ・リカバリシステム</div>
            <div class="group__box--txt">
              <ul>
                <li>PC個別の設定情報を保持するDBと連携して、マスタ環境に最終設定を自動で行うツールをご提供します。（PCごとに搭載ソフトの変更も可能）</li>
                <li>障害時のリカバリ対応等にも効果を発揮し、時間・費用を削減できます。</li>
              </ul>
            </div>
          </summary>
          <figure class="group__img" data-aos="fade-left"><img src="<?php echo assets_path() ?>img/solution/setup/img-alternate02.jpg" alt="独自のセットアップ・リカバリシステム"></figure>
        </li>
        <li class="flex aiC">
          <figure class="group__img" data-aos="fade-right"><img src="<?php echo assets_path() ?>img/solution/setup/img-alternate03.jpg" alt="事前キッティング・機器の配送まで一括管理"></figure>
          <summary class="group__box">
            <div class="group__box--ttl">事前キッティング・機器の配送まで一括管理</div>
            <div class="group__box--txt">提供PCのHDDにマスタ環境を組み込んで出荷。また、同梱物の調整や管理シール貼付なども対応可能です。</div>
          </summary>
        </li>
      </ul>
    </div>
  </section>

  <?php get_template_part('template-parts/material'); ?>

  <?php get_template_part('template-parts/meritConts'); ?>

  <?php get_template_part('template-parts/caseConts'); ?>

  <?php get_template_part('template-parts/supportConts'); ?>

  <?php get_template_part('template-parts/serviceConts'); ?>

  <?php get_template_part('template-parts/infoConts'); ?>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="/">トップ</a></li>
        <li>セットアップ／デリバリサービス</li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>