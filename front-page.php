<?php get_header(); ?>

<!-- ============================================
         Main Content（メインコンテンツ）
         ============================================ -->
<main>
    <!-- ============================================
             Hero Section（ヒーローセクション）
             - メインビジュアル
             ============================================ -->
    <section class="hero swiper hero-swiper" aria-label="メインビジュアル">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/slide1.png" alt="スライド1">
            </div>

            <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/slide2.png" alt="スライド2">
            </div>

            <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/slide3.png" alt="スライド3">
            </div>

        </div>

        <div class="swiper-pagination"></div>
    </section>
    <!-- 背景画像はCSSで設定 -->
    </section>

    <!-- ============================================
             Schedule Bar（スケジュールバー）
             - イベントの主要日程を横並び表示
             - 矢印デザインで時系列を表現
             ============================================ -->
    <section class="schedule-bar" aria-label="主要スケジュール">
        <div class="container-full">
            <ul class="schedule-list">
                <!-- 日程項目 1: 参加登録開始 -->
                <li class="schedule-item">
                    <div class="item-inner">
                        <span class="label">参加登録開始</span>
                        <strong class="date">11/1</strong>
                    </div>
                </li>
                <!-- 日程項目 2: ビジネスプラン提出 -->
                <li class="schedule-item">
                    <div class="item-inner">
                        <span class="label">ビジネスプラン提出</span>
                        <strong class="date">4/15</strong>
                    </div>
                </li>
                <!-- 日程項目 3: 選考通知 -->
                <li class="schedule-item">
                    <div class="item-inner">
                        <span class="label">選考通知</span>
                        <strong class="date">4/31</strong>
                    </div>
                </li>
                <!-- 日程項目 4: 最終提出 -->
                <li class="schedule-item">
                    <div class="item-inner">
                        <span class="label">最終提出</span>
                        <strong class="date">7月中</strong>
                    </div>
                </li>
                <!-- 日程項目 5: ファイナル -->
                <li class="schedule-item">
                    <div class="item-inner">
                        <span class="label">ファイナル</span>
                        <strong class="date">7/29</strong>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- ============================================
             News Section（ニュースセクション）
             - 最新のお知らせを表示
             ============================================ -->
    <section class="section news-section" id="news">
        <div class="container news-inner">
            <div class="news-title-area">
                <h2 class="section-title gradation-text">NEWS</h2>
            </div>

            <ul class="news-list">
                <?php
                // 最新記事を5件取得する魔法の記述
                $news_query = new WP_Query(array(
                    'post_type'      => 'post',
                    'posts_per_page' => 5,    // 表示件数
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                ));

                if ($news_query->have_posts()) :
                    while ($news_query->have_posts()) : $news_query->the_post();
                ?>
                        <li>
                            <span class="date"><?php echo get_the_date('Y.m.d'); ?></span>
                            <p class="title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </p>
                        </li>
                    <?php
                    endwhile;
                    wp_reset_postdata(); // 必ずリセット
                else :
                    ?>
                    <li>現在、お知らせはありません。</li>
                <?php endif; ?>
            </ul>
        </div>
    </section>

    <!-- ============================================
             Introduction Section（イントロダクション）
             - MECの概要説明
             - 紹介動画
             ============================================ -->
    <section class="section intro-section" id="about">
        <div class="container flex-layout">
            <!-- テキストエリア -->
            <div class="intro-content">
                <h2 class="section-title left gradation-text">INTRODUCTION</h2>
                <p>
                    Model Entrepreneur Competition (MEC) was launched 11 years ago by Columbia Business School‘s Venture For All (VFA) in collaboration with IEG Global Association. MEC is the first entrepreneur competition that started at an Ivy League.</p>

                <p>MEC began in 2014, and we’re celebrating its impressive 11th anniversary. From the start, MEC has aimed to inspire and empower young talents to present innovative ideas with real business potential. Through unwavering dedication, it has become a standout among global competitions.</p>

                <p>MEC winners have gained acceptance into prestigious institutions like Harvard, Stanford, Yale, UPenn, Johns Hopkins, Northwestern, Columbia, Cornell, University of Chicago, UC Berkeley, and others. This success showcases the caliber of talent nurtured by MEC, opening doors for aspiring entrepreneurs.</p>

                <p>As we commemorate this milestone, we are proud of MEC’s impact on the next generation of visionary business leaders.</p>


                </p>
            </div>

            <!-- 動画エリア（装飾付き） -->
            <div class="video-decoration-wrapper">
                <!-- 背景装飾ボックス -->
                <div class="bg-box" aria-hidden="true"></div>
                <!-- 動画コンテナ -->
                <div class="video-container">
                    <div class="video-box">動画エリア</div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/wO8EtMIlz9s?si=wyqFtm5xKx7fmjXa" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
             Features Section（特徴セクション）
             - MECの3つの特徴をカード形式で表示
             ============================================ -->
    <section class="section features-section">
        <div class="container grid-3">
            <!-- 特徴カード 1: Official Competition -->
            <article class="feature-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/tokutyou1.png" alt="公式大会アイコン" class="icon">
                <h3>Official Competition</h3>
                <p>
                    The world’s first and only official entrepreneur competition founded at an Ivy League – Columbia Business School. IEG now facilitates all MEC’s across the globe.
                </p>
            </article>

            <!-- 特徴カード 2: Total Prize -->
            <article class="feature-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/tokutyou2.png" alt="賞金アイコン" class="icon">
                <h3>Total Prize Exceeds $100,000</h3>
                <p>
                    IEG is dedicated to bringing the world’s top education experience to students all over the world. As a non-profit organization, IEG contributed more than USD 100,000 each year to MEC.
            </article>

            <!-- 特徴カード 3: Judges -->
            <article class="feature-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/tokutyou3.png" alt="審査員アイコン" class="icon">
                <h3>Judges from Ivy League Schools and Industry Leaders</h3>
                <p>
                    The Judging Panel consists of top executives from Fortune 500 and current professors and instructors from top universities. All team members will have a chance to consult directly with professors and domain experts.
                </p>
            </article>
        </div>
    </section>

    <!-- ============================================
             Guest Section（スペシャルゲストセクション）
             ============================================ -->
    <section class="section guest-section">
        <div class="container">
            <h2 class="section-title gradation-text">Special Guest: Esther Wojcicki</h2>


            <div class="video-box"><iframe width="560" height="315" src="https://www.youtube.com/embed/Cw-qhR7r5NQ?si=Yr2osPdeNdjhcuXC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>


        </div>
    </section>

    <!-- ============================================
             About MEC Section
             - 背景画像付きセクション
             - MECについての詳細説明
             ============================================ -->
    <section class="about-mec">
        <div class="container">
            <h2 class="white-title">ABOUT MEC</h2>
            <p>
                MEC stands as the quintessential entrepreneurship competition. It connects Columbia Business School’s MBA program teachings to aspiring entrepreneurs. It challenges students to tackle real-world business problems by crafting detailed business plans, including product analysis, market research, marketing strategies, financial planning, and risk management. Additionally, participants create promotional videos and deliver compelling presentations to the judging panel. This immersive experience equips students with practical skills and invaluable exposure to the world of entrepreneurship and business.


            </p>
            <div class="prof-btn-area">
                <a href="<?php echo home_url('/entry/'); ?>" class="btn-outline">Entry</a>
                <a href="<?php echo home_url('/inquiry/'); ?>" class="btn-outline">Contact</a>

            </div>
        </div>
    </section>

    <!-- ============================================
             Professor Section（教授紹介セクション）
             - Dr. Anas Chalahの紹介
             - 背景透過エフェクト
             ============================================ -->
    <section class="prof-section">
        <div class="container prof-flex">
            <!-- プロフィール画像 -->
            <div class="prof-img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/images/prof1.png" alt="Dr. Anas Chalah">
            </div>
            <!-- テキスト情報 -->
            <div class="prof-text-box">
                <h2 class="prof-title">
                    Dr. Anas Chalah,<br>
                    Assistant Dean at Harvard SEAS
                </h2>
                <p class="prof-desc">
                    Get ready to be inspired! As the Assistant Dean for Teaching and Learning at Harvard SEAS
                    and a 2023 Hero's Award recipient from the President of Harvard, Dr. Anas Chalah's insights
                    and experience will provide incredible value and inspiration to our participants!
                </p>

            </div>


        </div>
    </section>

    <!-- ============================================
             Ranking Section（入賞者セクション）
             - ファイナルラウンドの入賞チーム表示
             - 1位は大きく、2-5位は小さく表示
             ============================================ -->
    <section class="ranking-section">
        <div class="container">
            <h2 class="section-title gradation-text">Final Round Winners</h2>

            <!-- 1位（メイン表示） -->
            <article class="winner-item first-place">
                <div class="rank-badge gold">1</div>
                <div class="winner-card">
                    <div class="winner-img-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/White-Oaks-Secondary-School-2.png" alt="1位チーム">
                    </div>
                    <div class="winner-info">
                        <h3 class="team-name">Team Name</h3>
                        <div class="info-row">
                            <span class="tag">School name</span>
                            White-Oaks-Secondary-School
                        </div>
                        <div class="info-row">
                            <span class="tag">Matriculation</span>
                            TBT
                        </div>
                    </div>
                </div>
            </article>

            <!-- 2位〜5位（サブグリッド） -->
            <div class="winners-sub-grid">
                <!-- 2位 -->
                <article class="winner-item">
                    <div class="rank-badge silver">2</div>
                    <div class="winner-card">
                        <div class="winner-img-box">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/Wuhan-Britain-China-School-1024x551-3.png" alt="2位チーム">
                        </div>
                    </div>
                    <div class="winner-info mini">
                        <h3 class="team-name">Team Name</h3>
                        <div class="info-row">
                            <span class="tag">School name</span>
                            White-Oaks-Secondary-School
                        </div>
                        <div class="info-row">
                            <span class="tag">Matriculation</span>
                            TBT
                        </div>
                    </div>
                </article>

                <!-- 3位 -->
                <article class="winner-item">
                    <div class="rank-badge bronze">3</div>
                    <div class="winner-card">
                        <div class="winner-img-box">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/Xi_an-Tieyi-High-School-1024x551-3.png" alt="3位チーム">
                        </div>
                    </div>
                    <div class="winner-info mini">
                        <h3 class="team-name">Team Name</h3>
                        <div class="info-row">
                            <span class="tag">School name</span>
                            White-Oaks-Secondary-School
                        </div>
                        <div class="info-row">
                            <span class="tag">Matriculation</span>
                            TBT
                        </div>
                    </div>
                </article>

                <!-- 4位 -->
                <article class="winner-item">
                    <div class="rank-badge bronze">4</div>
                    <div class="winner-card">
                        <div class="winner-img-box">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/Xi_an-Tieyi-High-School-1024x551-3.png" alt="4位チーム">
                        </div>
                    </div>
                    <div class="winner-info mini">
                        <h3 class="team-name">Team Name</h3>
                        <div class="info-row">
                            <span class="tag">School name</span>
                            White-Oaks-Secondary-School
                        </div>
                        <div class="info-row">
                            <span class="tag">Matriculation</span>
                            TBT
                        </div>
                    </div>
                </article>

                <!-- 5位 -->
                <article class="winner-item">
                    <div class="rank-badge bronze">5</div>
                    <div class="winner-card">
                        <div class="winner-img-box">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/Xi_an-Tieyi-High-School-1024x551-3.png" alt="5位チーム">
                        </div>
                    </div>
                    <div class="winner-info mini">
                        <h3 class="team-name">Team Name</h3>
                        <div class="info-row">
                            <span class="tag">School name</span>
                            White-Oaks-Secondary-School
                        </div>
                        <div class="info-row">
                            <span class="tag">Matriculation</span>
                            TBT
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- ============================================
             Schools Section（参加校セクション）
             - 参加校のロゴを表示
             ============================================ -->
    <section class="section schools-section" id="school">
        <div class="container">
            <h2 class="section-title gradation-text">
                Participating Schools<br>
                <span>参加校</span>
            </h2>

            <?php
            $block_id = 3314; // ロゴ一覧のID
            $block_post = get_post($block_id);
            if ($block_post) {
                echo do_blocks($block_post->post_content);
            }
            ?>

            <div class="btn-wrapper">
                <a href="<?php echo home_url('/schools'); ?>" class="btn-outline">SCHOOL MORE</a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>