<?php get_header(); ?>
    <main class="l-main">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="p-page p-<?php echo esc_attr(get_post_field('post_name', get_the_ID())); ?>">
                    <div class="l-section-inner">
                        <div class="p-page__heading">
                            <h1 class="c-head2 --banglaMN">
                                <?php echo esc_html(strtoupper(get_post_field('post_name', get_the_ID()))); ?>
                            </h1>
                            <p class="c-head2--ja u-mb40">
                                <?php the_title(); ?>
                            </p>
                        </div>
                        <div class="p-page__content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </main>
<?php get_footer(); ?>