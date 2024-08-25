<figure>
    <a href="<?php the_permalink(); ?>">

        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
        <?php else: ?>
            <img src="<?php echo esc_url(get_theme_file_uri('/images/icon/noimage.jpg')); ?>" alt="NoImage">
        <?php endif; ?>

        <figcaption>
            <p class="card-title"><?php the_field('tag_text'); ?></p>
            <p class="card-text"><?php the_field('excerpt'); ?></p>
        </figcaption>
    </a>
</figure>
