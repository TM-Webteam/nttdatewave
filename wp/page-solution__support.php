<?php get_header(); ?>

<main class="support">

  <section class="hero-m core">
    <div class="containers">
      <h1 class="ttl-primary-s wave"><span>サ</span><span>ポ</span><span>ー</span><span>ト</span><span>サ</span><span>ー</span><span>ビ</span><span>ス</span></h1>
      <div class="ttl-catch" data-aos="fade" data-aos-delay="600">ヘルプデスク、セキュリティ対策、資産管理などトータルでサポートいたします</div>
      <a href="/catalog/" class="more bg-o dl"><span>サービス資料ダウンロード</span></a>
    </div>
  </section>

  <section class="alternate cube">
    <div class="containers">
      <h2 class="ttl-secondary">一元窓口としてヘルプデスクを設置し、<br>エンドユーザーからの問い合わせ～問題解決まで対応します。</h2>
      <ul class="group">
        <li class="flex aiC">
          <figure class="group__img" data-aos="fade-right"><img src="<?php echo assets_path() ?>img/solution/support/img-alternate01.jpg" alt="社員様からのサポートを一元対応"></figure>
          <summary class="group__box">
            <div class="group__box--ttl">社員様からのサポートを一元対応</div>
            <div class="group__box--txt">
              <ul>
                <li>ヘルプデスク、e-ヘルプデスク、リモート障害対応など、PCに関する問題を解決するための充実したサポート体制を標準提供。（一次受けスタッフで90%以上の回答率）</li>
                <li>窓口対応だけでなく、業務改善を日々実施しています。（コール状況のモニタリング、分析、評価）</li>
                <li>自身での解決をサポートするポータルサイト（FAQ、手順書など）もご提供いたします。</li>
              </ul>
            </div>
          </summary>
        </li>
        <li class="flex aiC sp-reverse">
          <summary class="group__box">
            <div class="group__box--ttl">情報システム部門様の運用管理業務を代行</div>
            <div class="group__box--txt">
              <p>本来取り組むべきIT推進の企画・立案業務に専念できるよう、PC運用における日常のオペレーション業務を代行しサービス状況をレポートいたします。<br>＜代行する運用管理業務＞</p>
              <ul>
                <li>セキュリティ対策状況管理、ファイル配布状況管理、インシデント管理</li>
                <li>Windows修正適用状況管理、構成検討支援、導入計画作成支援</li>
                <li>ヘルプデスクと連動した問題管理（問題の根本分析で再発を防止）</li>
              </ul>
            </div>
          </summary>
          <figure class="group__img" data-aos="fade-left"><img src="<?php echo assets_path() ?>img/solution/support/img-alternate02.jpg" alt="情報システム部門様の運用管理業務を代行"></figure>
        </li>
        <li class="flex aiC">
          <figure class="group__img" data-aos="fade-right"><img src="<?php echo assets_path() ?>img/solution/support/img-alternate03.jpg" alt="各種ソフトウェアのアップデート"></figure>
          <summary class="group__box">
            <div class="group__box--ttl">各種ソフトウェアのアップデート</div>
            <div class="group__box--txt">
              <p>PC資産構成情報の登録・更新およびインベントリ収集による定期監査を行い、ソフトウェアのアップデート対応をご提供します。</p>
              <ul>
                <li>Windows Update、緊急修正</li>
                <li>セキュリティパッチ</li>
                <li>ウイルス対策パターンファイルなどのオンライン配布</li>
              </ul>
            </div>
          </summary>
        </li>
        <li class="flex aiC sp-reverse">
          <summary class="group__box">
            <div class="group__box--ttl">IT資産管理をサポート</div>
            <div class="group__box--txt">資産管理ツールにより、クライアントPC情報およびソフトウェア情報を一元管理できます。</div>
          </summary>
          <figure class="group__img" data-aos="fade-left"><img src="<?php echo assets_path() ?>img/solution/support/img-alternate04.jpg" alt="IT資産管理をサポート"></figure>
        </li>
      </ul>
    </div>
  </section>

  <section class="measures bg-LB">
    <div class="containers">
      <h2 class="ttl-secondary">徹底したセキュリティ対策</h2>
      <div class="lead">お客様に安心してサービスをご利用いただくために、徹底したセキュリティ対策をおこなっています。</div>
      <ul class="flex">
        <li class="card fadein">
          <div class="card__ttl">端末アクセスルーム</div>
          <figure class="card__img"><img src="<?php echo assets_path() ?>img/solution/support/img-measures01.jpg" alt="端末アクセスルーム"></figure>
          <summary class="card__txt">お客様毎に区画分けされた厳重な<br>セキュリティブースでのリモート操作</summary>
        </li>
        <li class="card fadein">
          <div class="card__ttl">検証環境</div>
          <figure class="card__img"><img src="<?php echo assets_path() ?>img/solution/support/img-measures02.jpg" alt="検証環境"></figure>
          <summary class="card__txt">お客様環境と同一機器を準備<br>スムーズなコミュニケーションを実現</summary>
        </li>
        <li class="card fadein">
          <div class="card__ttl">ヘルプデスク</div>
          <figure class="card__img"><img src="<?php echo assets_path() ?>img/solution/support/img-measures03.jpg" alt="ヘルプデスク"></figure>
          <summary class="card__txt">コール対応状況の<br>モニタリングと評価改善</summary>
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
        <li>サポートサービス</li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>