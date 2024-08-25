<?php
/*
Template Name: page-aboutus
*/
get_header();
?>
    <main class="bgc-beige">
      <section class="u-about-us">
        <div class="u-about-us-container">
          <h2 class="section-title">About us</h2>
          <p class="section-subtitle">・私たちについて・</p>
          <div class="u-about-us-img-container"></div>
          <div class="u-about-us-text">
            <h3>カーライフをもっと楽しく。</h3>
            <p class="text-large">
              私たちGBTサービスが大切にしていることは、<br />車と一緒に、より豊かで楽しい日常をお客様に届けるということ。
            </p>
            <p class="text-small">
              自動車販売、新車から中古車やカスタムカーなど様々な種類を取り扱いしており、<br />お客様の満足のいくお車をお探しいたします。<br />自社で鈑金塗装修理をしておりますので購入してからのアフターケアもお任せください。<br />また、鈑金、塗装、車検、修理や、今お乗りのお車を自分好みの色にカスタムしたいなど車のことなら<br />何でもご相談ください。
            </p>
          </div>
        </div>
      </section>
      <section class="company">
        <div class="company-container">
          <h2 class="section-title">Company</h2>
          <p class="section-subtitle">・会社案内・</p>
          <dl>
            <div>
              <dt>会社名</dt>
              <dd>GBTサービス</dd>
            </div>
            <div>
              <dt>代表</dt>
              <dd>加藤 峻二</dd>
            </div>
            <div>
              <dt>住所</dt>
              <dd>
                〒444-0951
                <span class="text-newline">岡崎市北野町字一番訳5番地1</span>
              </dd>
            </div>
            <div>
              <dt>営業時間</dt>
              <dd>9:00～18:00 <span class="space">定休日：不定休</span></dd>
            </div>
            <div>
              <dt>電話 / FAX</dt>
              <dd>0564-31-7273 / 0564-34-3773</dd>
            </div>
            <div>
              <dt>事業内容</dt>
              <dd>
                自動車販売、修理、車検、鈑金塗装、カスタムカー製作、カスタムカー販売、エアロ取付<br />全塗装、保険代理店、保険事故修理、軽鈑金修理、ナビ取付、電装品取付、ルームクリーニング
              </dd>
            </div>
          </dl>
        </div>
      </section>
      <section class="access" id="href-access">
        <div class="access-container">
          <h2 class="section-title">Access</h2>
          <p class="section-subtitle">・アクセス・</p>
          <div>
            <div class="access-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3268.5789469748215!2d137.1396116763649!3d34.99220996751483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6004a27c3f20312b%3A0xf268fdd14db757b2!2z44CSNDQ0LTA5NTEg5oSb55-l55yM5bKh5bSO5biC5YyX6YeO55S65LiA55Wq6Kiz77yV4oiS77yR!5e0!3m2!1sja!2sjp!4v1723983342590!5m2!1sja!2sjp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="flex-container">
              <address class="access-address">
                〒444-0951
                <span class="text-newline">岡崎市北野町字一番訳5番地1</span>
              </address>
              <div class="access-link-container">
                <a class="access-link" href="<?php echo esc_url( 'https://www.google.co.jp/maps/place/G.B.T%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9/@34.992211,137.1396299,17z/data=!3m1!4b1!4m6!3m5!1s0x6004a27c3edfa847:0x6f3291a7e40a93d2!8m2!3d34.992211!4d137.1422048!16s%2Fg%2F11snnk8pfq?hl=ja&entry=ttu' ); ?>" target="_blank" rel="noopener noreferrer">
                  <p class="text">Google map</p>
                  <p class="arrow">→</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="bgc-white">
        <div class="contact-bg-top"></div>
        <section class="contact">
          <h2
            class="section-title-shadow"
            id="href-contact"
            data-text="Contact"
          >
            Contact
          </h2>
          <p class="section-subtitle">・お問い合わせ・</p>
          <div class="contact-info-container">
            <dl>
              <div>
                <dt>お電話でお問い合わせ</dt>
                <dd>0564-31-7273</dd>
              </div>
              <div>
                <dt>メールでお問い合わせ</dt>
                <dd>poccharihoney@gmail.com</dd>
              </div>
              <div>
                <dt>インスタDM</dt>
                <dd>gbtservice</dd>
              </div>
            </dl>
          </div>
        </section>
        <div class="contact-bg-bottom"></div>
        <div class="bgc-beige"></div>
      </div>
    </main>
    <?php get_footer(); ?>
  </body>
</html>
