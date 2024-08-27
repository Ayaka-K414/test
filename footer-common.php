    <ul class="footer-high-links">
      <li>
          <a
          href="<?php echo esc_url( 'https://www.carsensor.net/shop/aichi/319305001/#contents' ); ?>"
          target="_blank"
          rel="noopener noreferrer"
          >
          <p class="list-title">Stock List</p>
          <p class="text">在庫車両をご覧になりたい方はこちら</p>
          </a>
      </li>
      <li>
          <a
          href="<?php echo esc_url( 'https://www.automesseweb.jp/2021/12/22/862327' ); ?>"
          target="_blank"
          rel="noopener noreferrer"
          >
          <p class="list-title">Feature</p>
          <p class="text">「バナナフィガロ」の特集サイトへ</p>
          </a>
      </li>
    </ul>
  </div>


  <div class="footer-low">
    <div class="footer-flex-left">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
        ><img
          class="logo"
          src="<?php echo get_template_directory_uri(); ?>/images/icon/logo.svg"
          alt="GTBサービスのロゴ"
      /></a>
      <address>
        <p class="address">
          〒444-0951<br />岡崎市北野町字一番訳5番地1<br /><span
            class="tel-icon"
          ></span
          >0564-31-7273
        </p>
      </address>
    </div>
    <div class="footer-flex-right">
      <ul class="footer-low-links">
        <li>
          <a href="<?php echo esc_url( get_permalink( get_page_by_path('aboutus')->ID )); ?>">私たちについて</a>
          <ul>
            <li class="under-pages-links">
              <a href="<?php echo esc_url( get_permalink( get_page_by_path('aboutus')->ID )); ?>">会社案内</a>
            </li>
            <li class="under-pages-links">
              <a href="<?php echo esc_url( get_permalink( get_page_by_path('aboutus')->ID )); ?>#href-access">アクセス</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="<?php echo esc_url( get_permalink( get_page_by_path('service')->ID )); ?>">事業案内</a>
          <ul>
            <li class="under-pages-links">
              <a href="<?php echo esc_url( get_permalink( get_page_by_path('service')->ID )); ?>#href-repair">鈑金・塗装</a>
            </li>
            <li class="under-pages-links">
              <a href="<?php echo esc_url( get_permalink( get_page_by_path('service')->ID )); ?>#href-maintenance">整備・車検</a>
            </li>
            <li class="under-pages-links">
              <a href="<?php echo esc_url( get_permalink( get_page_by_path('service')->ID )); ?>#href-sale">新車・中古車販売</a>
            </li>
            <li class="under-pages-links">
              <a href="<?php echo esc_url( get_permalink( get_page_by_path('service')->ID )); ?>#href-custom">カスタムペイント</a>
            </li>
          </ul>
        </li>
        <li><a href="<?php echo esc_url( get_post_type_archive_link('works') ); ?>">施工実績</a></li>
        <li><a href="<?php echo esc_url( get_permalink( get_page_by_path('aboutus')->ID ) ); ?>#href-contact">お問い合わせ</a></li>
      </ul>
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
    </div>
  </div>
  <p class="copyright">&copy;2024 GBT service All Rights Reserved.</p>

  <?php wp_footer(); ?>
</footer>
