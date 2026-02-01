<?php get_header(); ?>

<!-- ============================================
         Main Content（メインコンテンツ）
         ============================================ -->
<main class="lower-page">
    <!-- ============================================
             Page Visual（ページビジュアル）
             - ページタイトル表示
             ============================================ -->
    <section class="page-visual">
        <div class="container">
            <h1 class="gradation-text">EVENT INFORMATION</h1>
        </div>
    </section>

    <!-- ============================================
             Schedule Section（スケジュールセクション）
             - エントリーまでの流れをステップ形式で表示
             ============================================ -->
    <section class="section schedule-section">
        <div class="container">
            <h2 class="section-title left gradation-text">Entry Schedule</h2>

            <!-- ステップラッパー -->
            <div class="steps-wrapper">
                <!-- ステップ 1: 登録 -->
                <div class="step-item">
                    <div class="step-date">11 Nov 2025 - 31 Jan 2026</div>
                    <div class="step-content">
                        <h3>Registration</h3>
                        <p>Registration can be accessed from this website.</p>
                    </div>
                </div>

                <!-- 矢印（ステップ間の区切り） -->
                <div class="step-arrow" aria-hidden="true"></div>

                <!-- ステップ 2: ビジネスプラン提出 -->
                <div class="step-item">
                    <div class="step-date">Due date: 15 April 2026</div>
                    <div class="step-content">
                        <h3>Submit Your Business Plan (in word format)
                        </h3>
                    </div>
                </div>

                <!-- 矢印 -->
                <div class="step-arrow" aria-hidden="true"></div>

                <!-- ステップ 3: ファイナリスト発表 -->
                <div class="step-item">
                    <div class="step-date">30 April 2026

                    </div>
                    <div class="step-content">
                        <h3>Selection Notice</h3>
                    </div>
                </div>
                <!-- 矢印 -->
                <div class="step-arrow" aria-hidden="true"></div>


                <!-- ステップ 4 -->
                <div class="step-item">
                    <div class="step-date">Early July 2026



                    </div>
                    <div class="step-content">
                        <h3>Submit the final version of your business plan</h3>
                    </div>
                </div>
                <!-- 矢印 -->
                <div class="step-arrow" aria-hidden="true"></div>


                <!-- ステップ 5 -->
                <div class="step-item">
                    <div class="step-date">3 August – 5 August 2026</div>
                    <div class="step-content">
                        <h3>Participate final round of the competition</h3>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- ============================================
             Location Section（会場情報セクション）
             - Google Map
             - 会場詳細情報（住所、電話、アクセス）
             ============================================ -->
    <section class="p-location">
        <!-- 装飾要素（背景） -->
        <div class="p-location__deco p-location__deco--tri-top" aria-hidden="true"></div>
        <div class="p-location__deco p-location__deco--dots-bottom" aria-hidden="true"></div>

        <div class="container">
            <h2 class="section-title left gradation-text">Event Locations</h2>

            <!-- Google Map 埋め込み -->
            <div class="p-location__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3240.3723226781626!2d139.75563847634962!3d35.69245437935653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z44CSMTAxLTg0MzkgVG9reW8sIENoaXlvZGEgQ2l0eSwgSGl0b3RzdWJhc2hpLCAyIENob21l4oiSMeKIkjIg5a2m6KGT57eP5ZCI44K744Oz44K_44O8IDJG!5e0!3m2!1sja!2sjp!4v1769640708031!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <!-- 会場詳細情報 -->
            <div class="p-location__details">
                <dl class="p-location__list">
                    <!-- 住所 -->
                    <div class="p-location__row">
                        <dt class="p-location__label">address</dt>
                        <dd class="p-location__value">
                            Japan, 〒101-8439 Tokyo, Chiyoda City, Hitotsubashi, 2 Chome-1-2 学術総合センター 2F
                        </dd>
                    </div>
                    <!-- 電話番号 -->
                    <div class="p-location__row">
                        <dt class="p-location__label">phone</dt>
                        <dd class="p-location__value">Phone: +81 3-4212-3900</dd>
                    </div>
                    <!-- アクセス -->
                    <div class="p-location__row">
                        <dt class="p-location__label">train</dt>
                        <dd class="p-location__value">
                            Tokyo Metro Hanzomon Line / Toei Mita Line / Toei Shinjuku Line:
                            "Jimbocho Station(神保町駅)", Exit A9<br>
                            Tokyo Metro Tozai Line: "Takebashi Station(竹橋駅)", Exit 1b<br>
                            3-5 minutes' walk from either station
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>