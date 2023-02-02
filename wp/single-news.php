<?php
$column_title = get_the_title();
$post_id = get_the_ID();
$post_terms = get_the_terms($post_id, 'news_category');
?>
<?php get_header(); ?>

<main class="news-single">

  <div class="containers flex">

    <article class="Contents article">

      <div class="flex fS aiC article__time">
        <span class="time"><?php echo get_the_date('Y.m.d', $post_id); ?></span>
        <?php if ($post_terms) : ?>
          <?php foreach ($post_terms as $post_term) : ?>
            <div class="cat"><?php echo esc_html($post_term->name); ?></div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>

      <h1 class="article__ttl"><?php the_title(); ?></h1>

      <div class="article__lead"><?php echo CFS()->get('lead'); ?></div>

      <div class="article__conts"><?php the_content(); ?></div>

    </article>

    <?php get_sidebar('news'); ?>


  </div>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="/">トップ</a></li>
        <li><a href="/news/">お知らせ</a></li>
        <li><?php echo strip_tags($column_title); ?></li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>