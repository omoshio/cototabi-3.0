<?php get_header('blog'); ?>

<main class="p-blog-single">
    <article class="p-blog-single__article">
        <div class="l-section-inner">

        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
        ?>
            <!-- カテゴリー一覧 -->
            <div class="p-blog__categories">
                <div class="p-blog__categories-inner">
                    <ul class="p-blog__categories-list">
                        <?php
                        $categories = get_categories(array(
                            'hide_empty' => true,
                        ));
                        // ALL
                        ?>
                        <li class="p-blog__categories-item">
                            <a href="<?php echo esc_url(home_url('/blog/')); ?>">
                                ALL
                            </a>
                        </li>
                        <?php foreach ($categories as $category) : ?>
                            <li class="p-blog__categories-item">
                                <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
                                    <?php echo esc_html($category->name); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php if (count($categories) > 4) : ?>
                        <button
                            type="button"
                            class="p-blog__categories-more"
                            aria-expanded="false"
                        >
                            <span>もっと見る</span>
                            <span class="p-blog__categories-more-icon">＋</span>
                        </button>
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="p-blog-single__wrap">
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
            </div>
            <a class="c-btn u-mt70" href="<?= homeurl() ?>/blog">ブログ記事一覧へ</a>
        </article>

    <?php
        endwhile;
    endif;
    ?>

</main>

<?php //パンくず読み込み ?>
<?php get_template_part('template-parts/breadcrumb'); ?>

<?php get_footer(); ?>