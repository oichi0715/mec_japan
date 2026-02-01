<?php
/*
Template Name: Entry Page
*/
get_header();
?>

<main class="lower-page">

    <section class="page-visual">
        <div class="container">
            <h1 class="gradation-text">ENTRY</h1>
        </div>
    </section>

    <div class="container">

        <section class="entry-section">
            <h2 class="section-title left">Entry fee</h2>

            <div class="fee-table">
                <div class="fee-row">
                    <div class="fee-label">Overseas Standard</div>
                    <div class="fee-value">
                        <span class="price-usd">$300</span>
                        <span class="price-yen">(¥45,000) / 1人</span>
                    </div>
                </div>
                <div class="fee-row">
                    <div class="fee-label">Japan Special</div>
                    <div class="fee-value">
                        <span class="price-yen-only">¥30,000 / 1チーム</span>
                    </div>
                </div>
                <div class="fee-row">
                    <div class="fee-label">Japan Early Bird Discount</div>
                    <div class="fee-value">
                        <span class="price-yen-only">¥18,000 / 1チーム</span>
                    </div>
                </div>
                <div class="fee-row benefit-row">
                    <div class="fee-label">Entry benefit</div>
                    <div class="fee-value">
                        <ul class="benefit-list">
                            <li>Valuable feedback</li>
                            <li>Volunteer participation rights</li>
                            <li>Final viewing pass</li>
                            <li>English proofreading</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="decoration-dots-circle"></div>
            <div class="decoration-zigzag"></div>
        </section>





        <section>
            <h2 class="section-title left">Entry Form</h2>

            <div class="form-wrapper">
                <?php
                // ★外観→パターン　の　ブロック番号
                $form_block_id = 3319;

                $form_block_post = get_post($form_block_id);
                if ($form_block_post) {
                    echo do_blocks($form_block_post->post_content);
                }
                ?>
            </div>
        </section>


        <section class="location-section">
            <h2 class="section-title left gradation-text">Event Locations</h2>

            <div class="map-wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.4866847863!2d139.7564!3d35.6923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzXCsDQxJzMyLjMiTiAxMznCsDQ1JzIzLjAiRQ!5e0!3m2!1sja!2sjp!4v1600000000000!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>


            <div class="access-info">
                <div class="access-row">
                    <div class="access-label">address</div>
                    <div class="access-value">
                        Japan, 〒101-0003 Tokyo, Chiyoda City, Hitotsubashi, 2 Chome-1-2 学術総合センター 2F
                    </div>
                </div>
                <div class="access-row">
                    <div class="access-label">phone</div>
                    <div class="access-value">
                        Phone: +81 3-4212-3930
                    </div>
                </div>
                <div class="access-row">
                    <div class="access-label">train</div>
                    <div class="access-value">
                        Tokyo Metro Hanzomon Line / Toei Mita Line / Toei Shinjuku Line: "Jimbocho Station(神保町駅)," Exit A8<br>
                        Tokyo Metro Tozai Line: "Takebashi Station(竹橋駅)," Exit 1b<br>
                        3–5 minutes’ walk from either station
                    </div>
                </div>
            </div>

            <div class="decoration-triangle-right"></div>
        </section>

    </div>
</main>

<?php get_footer(); ?>