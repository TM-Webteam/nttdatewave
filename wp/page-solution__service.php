<?php get_header(); ?>

<main class="service">

  <section class="hero-m core">
    <div class="containers">
      <h1 class="ttl-primary-s wave"><span>P</span><span>C</span><span>サ</span><span>ー</span><span>ビ</span><span>ス</span></h1>
      <div class="ttl-catch" data-aos="fade" data-aos-delay="600">最適なPCおよび周辺機器を利用期間にあわせて月額費用でご提供します。</div>
      <a href="/catalog/" class="more bg-o dl"><span>サービス資料ダウンロード</span></a>
    </div>
  </section>

  <section class="alternate cube">
    <div class="containers">
      <h2 class="ttl-secondary">PC運用管理サービスのノウハウを活用し、<br>貴社に最適な機器をご提供いたします。</h2>
      <ul class="group">
        <li class="flex aiC">
          <figure class="group__img" data-aos="fade-right"><img src="<?php echo assets_path() ?>img/solution/service/img-alternate01.jpg" alt="ハードウェア・ソフトウェアを3・4年コースで提供"></figure>
          <summary class="group__box">
            <div class="group__box--ttl">ハードウェア・ソフトウェアを3・4年コースで提供</div>
            <div class="group__box--txt">
              <ul>
                <li>お客様に最適なハードウェアおよび付帯作業をメニュー化して、3年・4年コースでご提供いたします。</li>
                <li>お客様保有のソフトウェアライセンスのご利用も可能です。</li>
              </ul>
            </div>
          </summary>
        </li>
        <li class="flex aiC sp-reverse">
          <summary class="group__box">
            <div class="group__box--ttl">マルチベンダー対応の調達が可能</div>
            <div class="group__box--txt">
              <ul>
                <li>独自の調達スキームで特定ベンダーの製品に縛られず、お客様にとってコスト優位なPCをご提案いたします。</li>
                <li>お客様のニーズに合わせて、機器仕様や保守条件などを評価し、選定いたします。</li>
              </ul>
            </div>
          </summary>
          <figure class="group__img" data-aos="fade-left"><img src="<?php echo assets_path() ?>img/solution/service/img-alternate02.jpg" alt="マルチベンダー対応の調達が可能"></figure>
        </li>
        <li class="flex aiC">
          <figure class="group__img" data-aos="fade-right"><img src="<?php echo assets_path() ?>img/solution/service/img-alternate03.jpg" alt="全国拠点での保守・サポートが可能"></figure>
          <summary class="group__box">
            <div class="group__box--ttl">全国拠点での保守・サポートが可能</div>
            <div class="group__box--txt">
              <ul>
                <li>お客様の拠点が全国にある場合でも、均一で質の高い保守・サポートをご提供いたします。</li>
                <li>機器の不調ないし故障の場合、オンサイト修理も対応いたします。</li>
                <li>PC利用終了時はデータ消去ツールをご提供いたします。</li>
                <li>ハードウェアの引き取り対応も可能です。</li>
              </ul>
            </div>
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
        <li>PCサービス</li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>