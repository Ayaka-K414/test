<footer>
    <?php if (is_front_page() || is_page(array('service')) || is_post_type_archive('works') || is_404()) : ?>
        <div class="footer-high">

    <?php elseif (is_page('aboutus')) : ?>
        <div class="footer-high bg-beige">

    <?php elseif (is_singular('works')) : ?>
        <div class="footer-high bg-white">

    <?php endif; ?>

<?php get_template_part( 'footer', 'common' ); ?>