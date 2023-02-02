<?php
global $body_class;
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php esc_html(bloginfo('charset')); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="format-detection" content="telephone=no">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="48x48" href="<?php echo assets_path() ?>img/favicon/favicon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo assets_path() ?>img/favicon/favicon.png">
  <link rel="shortcut icon" href="<?php echo assets_path() ?>img/favicon/favicon.png">

  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="<?php esc_html(bloginfo('name')) ?>">
  <meta itemprop="image" content="<?php esc_html(bloginfo('description')) ?>">

  <!-- Twitter Card data -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Wave PC Mate">
  <meta name="twitter:image:src" content="">

  <!-- Open Graph data -->
  <meta property="og:title" content="<?php esc_html(bloginfo('name')) ?>">
  <meta property="og:description" content="<?php esc_html(bloginfo('description')) ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:image:width" content="">
  <meta property="og:image:height" content="">
  <meta property="og:site_name" content="<?php esc_html(bloginfo('name')) ?>">

  <!-- Web font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=BIZ+UDGothic:wght@400;700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo assets_path() ?>css/main.css">
  <title><?php echo get_post_custom()['_aioseop_title'][0]; ?></title>
  <?php wp_head(); ?>
  <meta name="google-site-verification" content="fyeWzmlfwKzUNmRlxkYqm2HImkqxMN9dcIMJW-Hlm0s" />
</head>

<body class="<?php if ($body_class) {
                echo $body_class;
              } ?>">
  <?php get_header(); ?>
  <header>
    <div class="header">

      <aside class="flex aiC aside pc-only">
        <a href="https://www.nttd-wave.com/" target="_blank" class="aside__logo"><img src="<?php echo assets_path() ?>img/common/h-logo2.svg" alt="NTTDATA 株式会社NTTデータウェーブ"></a>
        <ul class="flex jcE">
          <li><a href="/column/"><span class="icon01">お役立ちコラム</span></a></li>
          <!-- <li><a href="/seminar/"><span class="icon02">セミナー情報</span></a></li> -->
          <li><a href="/whitepaper/"><span class="icon03">お役立ち資料</span></a></li>
        </ul>
      </aside>

      <div class="flex aiC inherit header__wrap">
        <a href="/" class="header__logo"><img src="<?php echo assets_path() ?>img/common/h-logo.svg" alt="Wave PC Mate"></a>
        <nav class="flex jcE header__nav pc-only">
          <ul class="flex jcE">
            <li class="parent">
              <div class="item"><span class="pull">サービス紹介</span></div>
              <div class="flex mega">
                <a href="/solution/" class="mega__ttl core link"><span>Wave PC Mateサービス紹介</span></a>
                <div class="flex mega__nav">
                  <ul class="mega__nav--list">
                    <li><a href="/solution/service/">PCサービス</a></li>
                    <li><a href="/solution/setup/">セットアップ／デリバリサービス</a></li>
                    <li><a href="/solution/support/">サポートサービス</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="parent">
              <div class="item"><span class="pull">課題から探す</span></div>
              <div class="flex mega">
                <div class="mega__ttl core">Wave PC Mate課題から探す</div>
                <div class="flex mega__nav">
                  <ul class="mega__nav--list">
                    <li><a href="/cost/">PCの運用負荷やコストを低減したい</a></li>
                    <li><a href="/replace/">PC導入・移設時の作業負荷を低減したい</a></li>
                    <li><a href="/security/">社内のセキュリティを強化したい</a></li>
                  </ul>
                  <ul class="mega__nav--list">
                    <li><a href="/helpdesk/">トラブルを迅速に解決したい</a></li>
                    <li><a href="/migration/">Windows11・Microsoft365に移行したい</a></li>
                    <li><a href="/itil/">ITILベースの運用管理を実施したい</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li><a href="/case/" class="item">導入事例</a></li>
            <li><a href="/strength/" class="item">当社の強み</a></li>
            <li><a href="/merit/" class="item">導入効果・メリット</a></li>
            <li class="btn"><a href="/catalog/"><span class="icon04">サービス資料</span></a></li>
            <li class="btn"><a href="/contact/"><span class="icon05">ご相談・お見積り</span></a></li>
          </ul>
        </nav>
        <div id="nav-toggle">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

    </div>

    <div id="gloval-nav">
      <ul class="list">
        <li><span>サービス紹介</span></li>
        <li class="child"><a href="/solution/service/">- PCサービス</a></li>
        <li class="child"><a href="/solution/setup/">- セットアップ／デリバリサービス</a></li>
        <li class="child"><a href="/solution/support/">- サポートサービス</a></li>
        <li><span>課題から探す</span></li>
        <li class="child"><a href="/cost/">- PCの運用負荷やコストを低減したい</a></li>
        <li class="child"><a href="/replace/">- PC導入・移設時の作業負荷を低減したい</a></li>
        <li class="child"><a href="/security/">- 社内のセキュリティを強化したい</a></li>
        <li class="child"><a href="/helpdesk/">- トラブルを迅速に解決したい</a></li>
        <li class="child"><a href="/migration/">- Windows11・Microsoft365に移行したい</a></li>
        <li class="child"><a href="/itil/">- ITILベースの運用管理を実施したい</a></li>
        <!--<li class="ttl"><a href="/case/">導入事例</a></li>-->
        <li class="ttl"><a href="/strength/">当社の強み</a></li>
        <li class="ttl"><a href="/merit/">導入効果・メリット</a></li>
        <li class="btn01"><a href="/catalog/"><span>サービス資料</span></a></li>
        <li class="btn02"><a href="/contact/"><span>ご相談・お見積り</span></a></li>
        <li class="btn03"><a href="/column/"><span>お役立ちコラム</span></a></li>
        <!-- <li class="btn04"><a href="/seminar/"><span>セミナー情報</span></a></li> -->
        <li class="btn05"><a href="/whitepaper/"><span>お役立ち資料</span></a></li>
      </ul>
      <div class="other"><a href="https://www.nttd-wave.com/" target="_blank" class="aside__logo"><img src="<?php echo assets_path() ?>img/common/h-logo2.svg" alt="NTTDATA 株式会社NTTデータウェーブ"></a></div>
    </div>

  </header>