<?php get_header(); ?>

<section class="p-blog__achvs">
    <div class="l-section-inner">
        <div class="p-blog__cont-wrap">

```
        <!-- カテゴリー一覧 -->
        <div class="p-blog__categories">
            <div class="p-blog__categories-inner">
                <ul class="p-blog__categories-list">
                    <?php
                    $blog_categories = get_categories(array(
                        'hide_empty' => true,
                    ));
                    ?>

                    <li class="p-blog__categories-item">
                        <a href="<?php echo esc_url(home_url('/blog/')); ?>">
                            ALL
                        </a>
                    </li>

                    <?php foreach ($blog_categories as $blog_category) : ?>
                        <li class="p-blog__categories-item">
                            <a href="<?php echo esc_url(get_category_link($blog_category->term_id)); ?>">
                                <?php echo esc_html($blog_category->name); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php if (count($blog_categories) > 4) : ?>
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

        <!-- 検索結果タイトル -->
        <h1 class="p-blog__cat-ttl">
            「<?php echo esc_html(get_search_query()); ?>」の検索結果
        </h1>

        <!-- 記事一覧 -->
        <ul class="p-blog__cont-list">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <li class="p-blog__cont-item">
                        <a class="p-blog__cont-link" href="<?php the_permalink(); ?>">

                            <div class="p-blog__cont-cat">
                                <?php
                                $post_categories = get_the_category();

                                if (!empty($post_categories)) {
                                    echo esc_html($post_categories[0]->name);
                                }
                                ?>
                            </div>

                            <div class="p-blog__cont-img">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php else : ?>
                                    <img src="<?php tempurl(); ?>/images/no-image.png" alt="">
                                <?php endif; ?>
                            </div>

                            <div class="p-blog__cont-txtbox">

                                <h3 class="p-blog__cont-head3">
                                    <?php
                                    $title = get_the_title();

                                    echo esc_html(
                                        mb_strlen($title) > 30
                                            ? mb_substr($title, 0, 30) . '...'
                                            : $title
                                    );
                                    ?>
                                </h3>

                                <p class="p-blog__cont-txt">
                                    <?php
                                    $excerpt = get_the_excerpt();

                                    echo esc_html(
                                        mb_strlen($excerpt) > 72
                                            ? mb_substr($excerpt, 0, 72) . '...'
                                            : $excerpt
                                    );
                                    ?>
                                </p>

                                <p class="p-blog__cont-time">
                                    <time datetime="<?php echo get_the_date('c'); ?>">
                                        <i class="far fa-calendar-alt"></i>
                                        <span>
                                            <?php echo get_the_date('Y/m/d'); ?>
                                        </span>
                                    </time>
                                </p>

                            </div>
                        </a>
                    </li>

                <?php
                    endwhile;
                else :
                ?>

                    <li>「<?php echo esc_html(get_search_query()); ?>」に一致する記事が見つかりませんでした。</li>

                <?php
                endif;
                ?>
        </ul>

        <!-- ページャー -->
        <div class="p-blog__pagination">
            <?php
            echo paginate_links(array(
                'mid_size'  => 2,
                'prev_text' => '«',
                'next_text' => '»',
            ));
            ?>
        </div>

    </div>
</div>
```

</section>

<?php get_template_part('template-parts/breadcrumb'); ?>

<?php get_footer(); ?>
