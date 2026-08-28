<section class="p-blog-breadcrumb">
    <p class="p-blog-breadcrumb__txt">
        <i class="fas fa-home"></i>
        <a href="<?php echo esc_url(home_url('/')); ?>">
            HOME
        </a>
        <span>/</span>
        <a href="<?php echo esc_url(home_url('/blog/')); ?>">
            ブログ一覧
        </a>
        <?php if (is_single()) : ?>
            <span>/</span>
            <?php
            $categories = get_the_category();
            if (!empty($categories)) :
            ?>
                <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>">
                    <?php echo esc_html($categories[0]->name); ?>
                </a>
                <span>/</span>
            <?php endif; ?>
            <?php the_title(); ?>
        <?php elseif (is_category()) : ?>
            <span>/</span>
            <?php single_cat_title(); ?>
        <?php endif; ?>
    </p>
</section>