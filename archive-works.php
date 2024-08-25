<?php get_header(); ?>

<main class="u-bgc-lightblue">
  <section class="u-works">
    <h2 class="section-title">Works</h2>
    <p class="section-subtitle">・施工実績・</p>
    <div class="card-container">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post();?>
          <?php get_template_part( 'works-card' ); ?>
        <?php endwhile; ?>
      <?php else: ?>
        <div class="card-else">
            <p>投稿がありません</p>
        </div>
      <?php endif; ?>
    </div>
  </section>
</main>

    <?php get_footer(); ?>
  </body>
</html>
