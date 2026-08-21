<?php get_header('blog'); ?>

<main class="p-blog-single">

    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
    ?>

        <article class="p-blog-single__article">

            <div class="l-section-inner">

                <div class="p-blog-single__cat">
                    <?php
                    $categories = get_the_category();

                    if (!empty($categories)) {
                        echo esc_html($categories[0]->name);
                    }
                    ?>
                </div>

                <h1 class="p-blog-single__title">
                    <?php the_title(); ?>
                </h1>

                <p class="p-blog-single__date">
                    <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                        <i class="far fa-calendar-alt"></i>
                        <?php echo esc_html(get_the_date('Y/m/d')); ?>
                    </time>
                </p>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="p-blog-single__thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <div class="p-blog-single__content">
                    <?php the_content(); ?>
                </div>

            </div>

        </article>

    <?php
        endwhile;
    endif;
    ?>

</main>

<?php get_footer(); ?>