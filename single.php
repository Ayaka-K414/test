<?php get_header(); ?>
<main>
  <article>
    <div class="title">
          <div class="category">
            <p class="category-title">Works</p>
            <p class="category-subtitle">・施工実績・</p>
          </div>
          <span class="year-month"><?php the_field('year_month'); ?></span>
          <span class="tag"><?php the_field('tag_text'); ?></span>
          <p class="title-text"><?php the_title(); ?></p>
        </div>
        <div class="img-container">
          <div class="before img-contents">
            <p class="vertical-title">before</p>
            <div class="before-img">
              <?php
                $image_url = get_field('before_left');
                $no_image_url = get_theme_file_uri('/images/icon/noimage.jpg');
                if( $image_url ) {
                    echo '<img src="' . esc_url( $image_url ) . '" alt="beforeの写真">';
                } else {
                    echo '<img src="' . esc_url( $no_image_url ) . '" alt="NoImage">';
                }
              ?>
              <?php
                $image_url = get_field('before_right');
                $no_image_url = get_theme_file_uri('/images/icon/noimage.jpg');
                if( $image_url ) {
                    echo '<img src="' . esc_url( $image_url ) . '" alt="beforeの写真">';
                } else {
                    echo '<img src="' . esc_url( $no_image_url ) . '" alt="NoImage">';
                }
              ?>
            </div>
          </div>
          <div class="process img-contents">
            <p class="vertical-title">process</p>
            <div class="process-img">
              <?php
                $image_url = get_field('process_left');
                $no_image_url = get_theme_file_uri('/images/icon/noimage.jpg');
                if( $image_url ) {
                    echo '<img src="' . esc_url( $image_url ) . '" alt="processの写真">';
                } else {
                    echo '<img src="' . esc_url( $no_image_url ) . '" alt="NoImage">';
                }
              ?>
              <?php
                $image_url = get_field('process_center');
                $no_image_url = get_theme_file_uri('/images/icon/noimage.jpg');
                if( $image_url ) {
                    echo '<img src="' . esc_url( $image_url ) . '" alt="processの写真">';
                } else {
                    echo '<img src="' . esc_url( $no_image_url ) . '" alt="NoImage">';
                }
              ?>
              <?php
                $image_url = get_field('process_right');
                $no_image_url = get_theme_file_uri('/images/icon/noimage.jpg');
                if( $image_url ) {
                    echo '<img src="' . esc_url( $image_url ) . '" alt="processの写真">';
                } else {
                    echo '<img src="' . esc_url( $no_image_url ) . '" alt="NoImage">';
                }
              ?>
            </div>
          </div>
          <div class="after img-contents">
            <p class="vertical-title">after</p>
            <div class="after-img">
              <?php
                $image_url = get_field('after_left');
                $no_image_url = get_theme_file_uri('/images/icon/noimage.jpg');
                if( $image_url ) {
                    echo '<img src="' . esc_url( $image_url ) . '" alt="afterの写真">';
                } else {
                    echo '<img src="' . esc_url( $no_image_url ) . '" alt="NoImage">';
                }
              ?>
              <?php
                $image_url = get_field('after_right');
                $no_image_url = get_theme_file_uri('/images/icon/noimage.jpg');
                if( $image_url ) {
                    echo '<img src="' . esc_url( $image_url ) . '" alt="afterの写真">';
                } else {
                    echo '<img src="' . esc_url( $no_image_url ) . '" alt="NoImage">';
                }
              ?>
            </div>
          </div>
        </div>
        <div class="text-container">
          <?php the_field('works_description'); ?>
        </div>

        <div class="pagenation">
          <div class="prev">
            <?php previous_post_link('%link','前の記事へ'); ?>
          </div>
          <a class="list" href="<?php echo esc_url( get_post_type_archive_link( 'works' ) ); ?>">一覧へ戻る</a>
          <div class="next">
            <?php next_post_link('%link','次の記事へ'); ?>
          </div>
        </div>

      </article>
    </main>
    <?php get_footer(); ?>
  </body>
</html>
