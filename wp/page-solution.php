<?php get_header(); ?>

<main class="solution">

  <section class="hero-m core">
    <div class="containers">
      <h1 class="ttl-primary-s wave"><span>ソ</span><span>リ</span><span>ュ</span><span>ー</span><span>シ</span><span>ョ</span><span>ン</span><span>一</span><span>覧</span></h1>
      <div class="ttl-catch" data-aos="fade" data-aos-delay="600">企業のITインフラ管理をワンストップでサポートいたします。</div>
    </div>
  </section>

  <section class="about">
    <div class="containers">
      <h2 class="ttl-secondary">Wave PC Mateとは？</h2>
      <div class="lead">ハードウェア・ソフトウェアの調達、セットアップ・デリバリ、運用管理、保守、撤去までを含めたPC運用管理を<br>ワンストップで提供するトータルアウトソーシングサービス です。</div>

      <?php get_template_part('template-parts/circle'); ?>
      
    </div>
  </section>

  <?php get_template_part('template-parts/meritConts'); ?>

  <?php get_template_part('template-parts/material'); ?>

  <?php get_template_part('template-parts/consult'); ?>

  <?php get_template_part('template-parts/infoConts'); ?>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="/">トップ</a></li>
        <li>ソリューション一覧</li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>