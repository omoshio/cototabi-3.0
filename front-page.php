<?php get_header(); ?>

<div class="l-wrraper">
    <div class="l-main">
        <section>
            <h1>WordPress × Vue テストページ Today</h1>
            <!--<div id="App"></div>　Vueコンポーネントをまとめて使う場合　-->
            <div id="Hello"></div>
            <div id="Tabs"></div>
        </section>
    
        <!-- FV -->
        <section class="p-fv" style="height: 600px; background-color: #ddd">
            <div id="fv" class="p-fv__image"></div>
            <!--Wave-->
            <div class="p-fv__waves">
            <svg
                class="waves"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 24 150 28"
                preserveAspectRatio="none"
                shape-rendering="auto"
            >
                <!-- 1 -->
                <g transform="translate(48 0)">
                <g class="wave wave01">
                    <path
                    d="M-160 44c30 0 58-18 88-18s58 18 88 18 58-18 88-18 58 18 88 18v44h-352z"
                    fill="rgba(255,255,255,0.7)"
                    />
                </g>
                </g>

                <!-- 2 -->
                <g transform="translate(48 3)">
                <g class="wave wave02">
                    <path
                    d="M-160 44c30 0 58-18 88-18s58 18 88 18 58-18 88-18 58 18 88 18v44h-352z"
                    fill="rgba(255,255,255,0.5)"
                    />
                </g>
                </g>

                <!-- 3 -->
                <g transform="translate(48 5)">
                <g class="wave wave03">
                    <path
                    d="M-160 44c30 0 58-18 88-18s58 18 88 18 58-18 88-18 58 18 88 18v44h-352z"
                    fill="rgba(255,255,255,0.3)"
                    />
                </g>
                </g>

                <!-- 4 -->
                <g transform="translate(48 7)">
                <g class="wave wave04">
                    <path
                    d="M-160 44c30 0 58-18 88-18s58 18 88 18 58-18 88-18 58 18 88 18v44h-352z"
                    fill="#fff"
                    />
                </g>
                </g>
            </svg>
            </div>
        </section>

        <!-- ABOUT -->
        <section class="p-about js-fade">
            <div class="l-section-inner">
                <h2 class="c-head2">about</h2>
                <p class="c-head2--ja">自己紹介</p>
                <div class="p-about__cont">
                    <div class="p-about__top-cont">
                        <h3 class="c-head3 p-about__head3 c-variable-border">
                            <span class="p-about__headtxt">聴く、知る、共感する</span>
                        </h3>
                        <p class="p-about__txt">ことたびデザインがWEB制作において大切にしている3つの姿勢です。<br>
                        WEB制作で最も大事なことは「愛を持ってWEBサイトに向き合うこと」だと考えています。<br>
                        お客様の思いをお聞かせください。そして、その思いを形にするお手伝いをさせていただくのがことたびデザインの役目だと考えています。</p>
                    </div>
                    <div class="p-about__bottom-cont">
                        <h3 class="c-head3 p-about__head3 c-variable-border">
                            <span class="p-about__headtxt">プロフィール</span>
                        </h3>
                        <div class="p-about__bottom-flex">
                            <div class="p-about__img" style="width: 300px; height:300px;background: green">
                                <img src="<?php tempurl(); ?>/images/plofile_image_.jpg" width="300" height="300" loading="lazy" alt="藻塩 修">
                            </div>
                            <div class="p-about__cont-profile">
                                <div class="p-about__namewrap u-flex">
                                    <p class="p-about__name">藻塩 修</p>
                                    <p class="p-about__name--en">Moshio Osamu</p>
                                </div>
                                <p class="p-about__cont-txt">
                                    1979年千葉県生まれ、東京在住。法政大学文学部英文学科卒業。<br>
                                    大学在学中より音楽活動に没頭し、卒業後も楽器店に勤務しながら音楽活動を継続する。<br>
                                    2006年よりネットワークエンジニアとして運用からコンサルまで幅広い業務に従事する。<br>
                                    2018年、侍エンジニア塾在学中に作成したWEBサイトをきっかけとし、いくつかのクライアントワークを経験する。その後、2021年1月〜7月にてデジタルハリウッドSTUDIO上野 by LIGにてWEBデザイン＆プログラミングコースを修了。<br>
                                    2021年〜、SIerでのWEB制作やインハウスフロントエンドエンジニアとして現役で活動中。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- WORK -->
        <section class="p-work js-fade">
            <div class="l-section-inner">
                <h2 class="c-head2">WORK</h2>
                <p class="c-head2--ja">制作実績</p>
                <div class="p-work__cont-wrap">
                    <ul class="p-work__cont-list">
                    <li class="p-work__cont-item">
                        <img src="<?php tempurl(); ?>/images/works-obj-1.png" width="582" height="348" loading="lazy" alt="">
                        <h3 class="c-head3 u-center u-gothic u-normal">美容室「HAIR DESIGN JUMOKU」様ホームページ</h3>
                        <a class="p-work__cont-link" href="https://hairdesign-jumoku.com" target="_blank" rel="noopener">https://hairdesign-jumoku.com</a>
                        <p class="p-work__cont-txt">千葉県我孫子市にある人気美容室「HAIR DESIGN JUMOKU」様のホームページを作成させていただきました。オーナー様から頂いたイメージは「オールドアメリカン」。大人が心地よく過ごせるクラシックなお店の雰囲気がつたわるようにデザイン・色合いを調整しました。</p>
                    </li>
                    <li class="p-work__cont-item">
                        <img src="<?php tempurl(); ?>/images/works-obj-3.png" width="582" height="348" loading="lazy" alt="">
                        <h3 class="c-head3 u-center u-gothic u-normal">ラーメン店「豆でっぽう」様ホームページ</h3>
                        <a class="p-work__cont-link" href="https://mamedp.com" target="_blank" rel="noopener">https://mamedp.com</a>
                        <p class="p-work__cont-txt">千葉県我孫子市にある担々麺が人気のラーメン店「豆でっぽう」様のホームページを作成させて頂きました。オーナー様から頂いたイメージは黒を基調として、こだわりの店内をスタイリッシュに見せて欲しいとのこと。また、飲食店のためスマートフォンでの閲覧に最適なモバイルファーストでサイトを構築いたしました。</p>
                    </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- SERVICE -->
        <section class="p-service js-fade">
            <div class="l-section-inner">
                <h2 class="c-head2">service</h2>
                <p class="c-head2--ja">ご提供サービス</p>
                <div class="p-service__cont-wrap">
                    <ul class="p-service__cont-list">
                        <li class="p-service__cont-item">
                            <img src="<?php tempurl(); ?>/images/service_web.png" width="355" height="355" loading="lazy" alt="ホームページ制作">
                            <h3 class="c-head3 --gothic">
                                <span class="p-service__num">01</span>
                                <p class="p-service__subttl u-center">ホームページ制作</p>
                            </h3>
                            <p class="p-service__text c-variable-border">お店のホームページ、コーポレートサイト、商品・サービス紹介のためのLP（ランディングページ）などを制作いたします。HTML /CSS/JavaScriptを使用してお客様だけのオリジナルデザインを制作する方法から、コスト重視でテンプレートを使用する方法まで、お客様に最適な方法でご提案をさせていただきます。</p>
                        </li>
                        <li class="p-service__cont-item">
                            <img src="<?php tempurl(); ?>/images/service_wordpress.png" width="355" height="355" loading="lazy" alt="WordPress制作">
                            <h3 class="c-head3 --gothic ">
                                <span class="p-service__num">02</span>
                                <p class="p-service__subttl u-center">WordPress制作</p>
                            </h3>
                            <p class="p-service__text c-variable-border">WordPressを使用してお客様のホームページを制作致します。WordPressを使用することにより、「お知らせ」や「ブログ」などのコンテンツをお客様ご自身で更新していただくことが可能です。情報発信やユーザーコミュニケーションを大切に考えているオーナー様にオススメです。</p>
                        </li>
                        <li class="p-service__cont-item">
                            <img src="<?php tempurl(); ?>/images/service_support.png" width="355" height="355" loading="lazy" alt="IT業務サポート">
                            <h3 class="c-head3 --gothic ">
                                <span class="p-service__num">03</span>
                                <p class="p-service__subttl u-center">IT業務サポート</p>
                            </h3>
                            <p class="p-service__text c-variable-border">制作したホームページの運用をはじめ、業務用PCの設定・メンテナンス、またインターネット接続用の回線の運用などシステムに関する業務をサポートさせて頂きます。自社チーム内にITに詳しい方がいない場合など、お気軽にご相談ください。</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- BLOG -->
        <section class="p-blog js-fade">
            <div class="l-section-inner">
                <h2 class="c-head2">blog</h2>
                <p class="c-head2--ja">お知らせ</p>

                <div class="p-blog__cont-wrap">
                    <ul class="p-blog__cont-list">

                        <?php
                        $args = array(
                            'post_type'      => 'post', // 投稿タイプ
                            'posts_per_page' => 4,      // 表示件数
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

                                        if ( !empty($categories) ) {
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
                                        <h3 class="c-head--3">
                                            <?php the_title(); ?>
                                        </h3>
                                        <p class="p-blog__cont-txt">
                                            <?php echo wp_trim_words(get_the_excerpt(), 40, '...'); ?>
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
                            wp_reset_postdata();
                        endif;
                        ?>

                    </ul>
                </div>
                <a class="c-btn u-mt50" href="<?= homeurl() ?>/blog">ブログ記事一覧へ</a>
            </div>
        </section>

        <!-- <section class="p-blog js-fade">
            <div class="l-section-inner">
                <h2 class="c-head2">blog</h2>
                <p class="c-head2--ja">お知らせ</p>

                <div class="p-blog__cont-wrap">
                    <ul class="p-blog__cont-list">
                        <li class="p-blog__cont-item">
                            <a class="p-blog__cont-link" href="">
                                <div class="p-blog__cont-cat">カテゴリ</div>
                                <div class="p-blog__cont-img">
                                    <img src="<?php tempurl(); ?>/images/no-image.png" alt="">
                                </div>
                                <div class="p-blog__cont-txtbox">
                                    <h3 class="c-head--3">記事タイトル記事タイトル記事タイトル</h3>
                                    <p class="p-blog__cont-txt">
                                        本文抜粋テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                    </p>
                                    <p class="p-blog__cont-time">
                                        <time><i class="far fa-calendar-alt"></i><span>2026/01/01</span></time>
                                    </p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section> -->

        <section class="p-instagram js-fade">
            <h2 class="c-head2 --normal-case">Instagram</h2>
            <p class="c-head2--ja">インスタグラム</p>
            <div id="Slider"></div>
        </section>

        <!-- Contact -->
        <section class="p-contact js-fade">
            <div class="l-section-inner">
                <h2 class="c-head2">contact</h2>
                <p class="c-head2--ja">お問合せ</p>
                <div class="p-contact__wrap">
                    <a href="<?= homeurl() ?>/contact" class="c-btn --circle">お問合わせ</a>
                </div>
            </div>
        </section>

    </div>  
</div>

<?php get_footer(); ?>