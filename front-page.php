<?php get_header(); ?>
    <main>
      <div class="main-visual">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/main.jpg" alt="メインビジュアル バナナフィガロの写真" />
        <div>
          <h1 id="textContainer" class="text-container">あなただけの<br/>１台で、<br/>カーライフを<br/>もっと<br/>楽しく。</h1>
          <h1 class="text-container-tablet">あなただけの１台で、<br />カーライフをもっと楽しく。</h1>
          <p><span>Just For One </span>Enjoy Car Life!</p>
        </div>
      </div>
      <div class="bgc-beige">
        <section class="about-us">
          <div class="about-us-container">
            <div>
              <h2 class="section-title">About us</h2>
              <p class="section-subtitle">・私たちについて・</p>
              <div class="about-us-img-tablet">
                <img
                  class="about-us-img-tab"
                  src="<?php echo get_template_directory_uri(); ?>/images/top/aboutus.jpg"
                  alt="会社案内 バナナフィガロの写真"
                />
              </div>
              <div class="about-us-text">
                <p>
                  自動車販売、新車から中古車やカスタムカーなど様々な種類を取り扱いしており、お客様の満足のいくお車をお探しいたします。
                  <br />自社で鈑金塗装修理をしておりますので購入してからのアフターケアもお任せください。
                  <br />また、鈑金、塗装、車検、修理や、今お乗りのお車を自分好みの色にカスタムしたいなど車のことなら何でもご相談してください。
                </p>
                <div class="about-us-link-container">
                  <a class="about-us-link" href="<?php echo esc_url( get_permalink( get_page_by_path('aboutus')->ID )); ?>">
                    <p class="text">会社案内</p>
                    <p class="arrow">→</p>
                  </a>
                </div>
              </div>
            </div>
            <img
              class="about-us-img-pc"
              src="<?php echo get_template_directory_uri(); ?>/images/top/aboutus.jpg"
              alt="会社案内 バナナフィガロの写真"
            />
          </div>
          <div class="feature">
            <h3 class="feature-title">Feature</h3>
            <a
              class="feature-link"
              href="<?php echo esc_url( 'https://www.automesseweb.jp/2021/12/22/862327' ); ?>"
              target="_blank"
              rel="noopener noreferrer"
              ><p>
                当社の看板車「バナナフィガロ」が特集されました。<span
                  >クリックして特集サイトへ</span
                >
              </p></a
            >
          </div>
        </section>
      </div>
      <div class="bgc-lightblue">
        <div class="service-bg-top"></div>
        <section class="service">
          <div class="service-container">
            <h2 class="section-title">Se<span class="mgr">r</span>vice</h2>
            <p class="section-subtitle">・事業内容・</p>
          </div>
          <div class="card-container">
            <figure>
              <a href="<?php echo esc_url( get_permalink( get_page_by_path('service')->ID )); ?>#href-repair">
                <img
                  class="card-img1"
                  src="<?php echo get_template_directory_uri(); ?>/images/top/service01.jpg"
                  alt="鈑金・塗装"
                />
                <figcaption>鈑金・塗装</figcaption>
              </a>
            </figure>
            <figure>
              <a href="<?php echo esc_url( get_permalink( get_page_by_path('service')->ID )); ?>#href-maintenance">
                <img
                  class="card-img2"
                  src="<?php echo get_template_directory_uri(); ?>/images/top/service02.jpg"
                  alt="整備・車検"
                />
                <figcaption>整備・車検</figcaption>
              </a>
            </figure>
            <figure>
              <a href="<?php echo esc_url( get_permalink( get_page_by_path('service')->ID )); ?>#href-sale">
                <img
                  class="card-img3"
                  src="<?php echo get_template_directory_uri(); ?>/images/top/service03.jpg"
                  alt="新車・中古車販売"
                />
                <figcaption>新車・中古車販売</figcaption>
              </a>
            </figure>
            <figure>
              <a href="<?php echo esc_url( get_permalink( get_page_by_path('service')->ID )); ?>#href-custom">
                <img
                  class="card-img4"
                  src="<?php echo get_template_directory_uri(); ?>/images/top/service04.jpg"
                  alt="カスタムペイント"
                />
                <figcaption>カスタムペイント</figcaption>
              </a>
            </figure>
          </div>
        </section>
      </div>
      <div class="bgc-lightblue">
        <section class="works">
          <div class="flex-container">
            <div class="section-title-container">
              <h2 class="section-title">Works</h2>
              <p class="section-subtitle">・施工実績・</p>
            </div>
            <div class="works-link-container">
              <a class="works-link" href="<?php echo esc_url( get_post_type_archive_link('works') ); ?>">
                <p class="text">もっと見る</p>
                <p class="arrow">→</p>
              </a>
            </div>
          </div>
          <div class="card-container">
            <?php
            $args = array(
                'post_type' => 'works', // Worksカテゴリのスラッグ
                'posts_per_page' => 6,      // 6件のみ表示
            );
            $works_query = new WP_Query($args); ?>

            <?php if ($works_query->have_posts()) : ?>
              <?php $count = 0; ?>
              <?php while ($works_query->have_posts()) : $works_query->the_post(); ?>
                  <?php get_template_part('works-card'); ?>
                  <?php $count++; ?>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
              <?php for ($i = $count; $i < 6; $i++) : ?>
                <figure>
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/icon/noimage.jpg')); ?>" alt="NoImage">
                    <figcaption>
                      <p class="card-text-center">只今準備中です</p>
                    </figcaption>
                </figure>
              <?php endfor; ?>
              <?php else : ?>
                  <p>まだ作品がありません。</p>
              <?php endif; ?>
          </div>
          <div class="works-link-container-tablet">
            <a class="works-link-tablet" href="<?php echo esc_url( get_post_type_archive_link( 'works' ) ); ?>">
              <p class="text">もっと見る</p>
              <p class="arrow">→</p>
            </a>
          </div>
        </section>
      </div>
      <div class="bgc-white">
        <div class="insta-bg-top"></div>
        <section class="instagram">
          <h2 class="section-title-shadow" data-text="Instagram">Instagram</h2>
          <div class="instagram-link-container">
            <p class="instagram-link">
              <a
                href="<?php echo esc_url( 'https://www.instagram.com/gbtservise/' ); ?>"
                target="_blank"
                rel="noopener noreferrer"
                >Follow us<span class="arrow"></span
              ></a>
            </p>
          </div>
          <div class="insta-img-container">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/main.jpg" alt="Instagram" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/instagram02.jpg" alt="Instagram" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/instagram03.jpg" alt="Instagram" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/instagram04.jpg" alt="Instagram" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/instagram05.jpg" alt="Instagram" />
          </div>
          <div class="instagram-link-container-tablet">
            <p class="instagram-link-tablet">
              <a
                href="<?php echo esc_url( 'https://www.instagram.com/gbtservise/' ); ?>"
                target="_blank"
                rel="noopener noreferrer"
                >Follow us<span class="arrow"></span
              ></a>
            </p>
          </div>
        </section>
        <div class="insta-bg-bottom"></div>
        <div class="bgc-lightblue"></div>
      </div>
    </main>

    <?php get_footer(); ?>
  </body>
</html>
