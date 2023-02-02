<?php get_header(); ?>

<main class="strength">

  <section class="hero-m core">
    <div class="containers">
      <h1 class="ttl-primary-s wave"><span>W</span><span>a</span><span>v</span><span>e</span><span>&nbsp;</span><span>P</span><span>C</span><span>&nbsp;</span><span>M</span><span>a</span><span>t</span><span>e</span><span>が</span><span>選</span><span>ば</span><span>れ</span><span>る</span><span>理</span><span>由</span></h1>
      <div class="ttl-catch" data-aos="fade" data-aos-delay="600">Wave PC Mateは、PC運用管理業務に関わるTCO削減、<br class="pc-only">サポートの充実さから多くの企業様に選ばれています。</div>
    </div>
  </section>

  <section class="alternate cube">
    <div class="containers">
      <h2 class="ttl-secondary">Wave PC Mateが選ばれる3つの理由</h2>
      <ul class="group">
        <li class="flex aiC">
          <figure class="group__img" data-aos="fade-right"><img src="<?php echo assets_path() ?>img/strength/img-alternate01.jpg" alt="独自のセットアップツールでご利用者様でもリカバリ実施可能"></figure>
          <summary class="group__box">
            <div class="group__box--ttl">独自のセットアップツールで<br>エンドユーザーでもリカバリ実施可能</div>
            <div class="group__box--txt">PC故障時のリカバリ作業は、独自のセットアップツールによりクリック操作レベルで簡単に実行可能です。<br>システム管理者の対応工数削減だけでなく、トラブル時の復旧時間の短縮にも貢献いたします。</div>
          </summary>
        </li>
        <li class="flex aiC sp-reverse">
          <summary class="group__box">
            <div class="group__box--ttl">専任のサービスマネージャーが<br>お客様と一丸となり課題解決</div>
            <div class="group__box--txt">専任のサービスマネージャーが運用中に発生する課題問題をお客様と一緒に悩み・解決に導きます。<br>サービス全般をトータルマネージメントし、サービス品質の維持に努めます。</div>
          </summary>
          <figure class="group__img" data-aos="fade-left"><img src="<?php echo assets_path() ?>img/strength/img-alternate02.jpg" alt="専任のサービスマネージャーがお客様と一丸となり課題解決"></figure>
        </li>
        <li class="flex aiC">
          <figure class="group__img" data-aos="fade-right"><img src="<?php echo assets_path() ?>img/strength/img-alternate03.jpg" alt="マルチベンダー対応だからお客様優位の機器選定が可能"></figure>
          <summary class="group__box">
            <div class="group__box--ttl">マルチベンダー対応だから<br>お客様優位の機器選定が可能</div>
            <div class="group__box--txt">特定のベンダー製品に縛られず、お客様が必要とされる機器仕様や保守条件など、各PCメーカー品を一括りで見積り・比較検討することが可能です。<br>ヘルプデスク対応もマルチベンダーで対応をします。</div>
          </summary>
        </li>
      </ul>
    </div>
  </section>

  <section class="compare bg-LB">
    <div class="containers">
      <h2 class="ttl-secondary">他社サービスとの違い</h2>
      <div class="lead">Wave PC Mate は、PC運用管理業務のテンプレートを適用しています。<br>その結果PC運用管理、資産管理、セキュリティ管理、TCO削減に大きく貢献しています。</div>
      <div class="scroll">
        <figure class="compare__img"><img src="<?php echo assets_path() ?>img/strength/img-strength.svg" alt="他社サービスとの違い"></figure>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/consult'); ?>

  <?php get_template_part('template-parts/infoConts'); ?>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="/">トップ</a></li>
        <li>選ばれる理由</li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>