<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
  <head>
    <meta charset="<?php bloginfo ( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name=discription content="<?php bloginfo( 'discription' ); ?>">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
        ><img class="logo" src="<?php echo get_theme_file_uri('/images/icon/logo.svg'); ?>" alt="GTBサービスのロゴ"
      /></a>
      <nav>
        <?php $aboutus_page = get_page_by_path('aboutus');
          $aboutus_page_id = $aboutus_page->ID; ?>
        <?php $service_page = get_page_by_path('service');
          $service_page_id = $service_page->ID; ?>
        <li><a href="<?php echo esc_url( get_permalink( get_page_by_path('aboutus')->ID )); ?>">私たちについて</a></li>
        <li><a href="<?php echo esc_url( get_permalink( get_page_by_path('service')->ID )); ?>">事業案内</a></li>
        <li><a href="<?php echo esc_url( get_permalink( get_page_by_path('aboutus')->ID )); ?>#href-access">アクセス</a></li>
        <li><a href="<?php echo esc_url( get_post_type_archive_link('works') ); ?> ">施工実績</a></li>
        <li class="list-contact">
          <a href="<?php echo esc_url( get_permalink( get_page_by_path('aboutus')->ID ) ); ?>#href-contact">お問い合わせ</a>
        </li>
        <li class="insta">
          <a
            href="<?php echo esc_url( 'https://www.instagram.com/gbtservise/' ); ?>"
            target="_blank"
            rel="noopener noreferrer"
            ><img src="<?php echo get_theme_file_uri('/images/icon/instagram.png'); ?>" alt="Instagramリンク"
          /></a>
        </li>
      </nav>
      <button class="hamburger-button" id="hamburger-button">
        <img
          class="hamburger-icon"
          src="<?php echo get_theme_file_uri('/images/icon/hamburger-button.png'); ?>"
          alt="ハンバーガーメニュー"
        />
      </button>
    </header>
    <div class="menu" id="hamburger-menu">
      <div class="text-align-right">
        <button class="close-button" id="close-button">
          <img
            class="close-icon"
            src="<?php echo get_theme_file_uri('/images/icon/close-button.png'); ?>"
            alt="閉じるボタン"
          />
        </button>
      </div>
      <div class="menu-list">
        <ul>
          <li>
            <a href="<?php echo esc_url( get_permalink( get_page_by_path('aboutus')->ID )); ?>"
              >About us<span>私たちについて</span></a
            >
          </li>
          <li>
            <a href="<?php echo esc_url( get_permalink( get_page_by_path('service')->ID )); ?>">Service<span>事業案内</span></a>
          </li>
          <li>
            <a href="<?php echo esc_url( get_post_type_archive_link('works') ); ?>">Works<span>施工実績</span></a>
          </li>
          <li class="icon">
            <a
              href="<?php echo esc_url( 'https://www.carsensor.net/shop/aichi/319305001/#contents' ); ?>"
              target="_blank"
              rel="noopener noreferrer"
              >Stock List<span>在庫車両掲載サイト</span></a
            >
          </li>
          <li class="icon">
            <a
              href="<?php echo esc_url( 'https://www.automesseweb.jp/2021/12/22/862327' ); ?>"
              target="_blank"
              rel="noopener noreferrer"
              >Feature<span>当社カスタム「バナナフィガロ」特集サイト</span></a
            >
          </li>
          <li class="icon-insta">
            <a
              href="<?php echo esc_url( 'https://www.instagram.com/gbtservise/' ); ?>"
              target="_blank"
              rel="noopener noreferrer"
              >Instagram<span>インスタグラム</span></a
            >
          </li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
          ><img
            class="logo"
            src="<?php echo get_theme_file_uri('/images/icon/logo.svg'); ?>"
            alt="GTBサービスのロゴ"
        /></a>
      </div>
    </div>
