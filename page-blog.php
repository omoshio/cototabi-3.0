<?php get_header(); ?>

<section class="p-blog__achvs">
    <div class="l-section-inner">
        <div class="p-blog__cont-wrap">
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
            <!-- ページ一覧 -->
            <ul class="p-blog__cont-list">
                <?php
                $paged = max(1, get_query_var('paged'));

                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 4,
                    'paged'          => $paged,
                );

                $blog_query = new WP_Query($args);

                if ($blog_query->have_posts()) :
                    while ($blog_query->have_posts()) :
                        $blog_query->the_post();
                ?>

                    <li class="p-blog__cont-item">
                        <a class="p-blog__cont-link" href="<?php the_permalink(); ?>">

                            <div class="p-blog__cont-cat">
                                <?php
                                $categories = get_the_category();

                                if (!empty($categories)) {
                                    echo esc_html($categories[0]->name);
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
                                    <?php echo mb_substr(get_the_title(), 0, 30); ?>
                                </h3>

                                <p class="p-blog__cont-txt">
                                    <?php echo mb_substr(get_the_excerpt(), 0, 72) . '...'; ?>
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
                ?>

            </ul>

            <!-- ページャー -->
            <div class="p-blog__pagination">
                <?php
                echo paginate_links(array(
                    'total'     => $blog_query->max_num_pages,
                    'current'   => $paged,
                    'mid_size'  => 2,
                    'prev_text' => '«',
                    'next_text' => '»',
                ));
                ?>
            </div>

                <?php
                    wp_reset_postdata();
                endif;
                ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>