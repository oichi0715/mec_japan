<?php
/*
Template Name: About MEC
*/
get_header();
?>

<main class="lower-page">

    <!-- ページトップ（タイトルエリア） -->
    <section class="page-visual">
        <div class="container">
            <h1 class="gradation-text">ABOUT MEC</h1>
        </div>
    </section>

    <div class="container">

        <!-- 1. Intro (概要) -->
        <section class="about-section intro-area">
            <div class="intro-grid">
                <div class="intro-head">
                    <h2 class="section-title left gradation-text">
                        Mission & Vision<br>
                        <span>MECの使命</span>
                    </h2>
                    <p class="intro-lead">
                        Model Entrepreneur Competition (MEC) is the world's first entrepreneur competition founded at an Ivy League university.
                    </p>
                </div>
                <div class="intro-body">
                    <p>
                        Launched 11 years ago by Columbia Business School‘s Venture For All (VFA) in collaboration with IEG Global Association, MEC has aimed to inspire and empower young talents to present innovative ideas with real business potential.
                    </p>
                    <p>
                        Through unwavering dedication, it has become a standout among global competitions, nurturing the next generation of visionary business leaders.
                    </p>
                </div>
            </div>
        </section>

        <!-- 2. Numbers (数字の実績・カードデザイン) -->
        <section class="about-section numbers-area">
            <div class="section-header center">
                <h2 class="section-title gradation-text" style="text-align: center; margin-bottom: 40px;">MEC by the Numbers</h2>
            </div>

            <div class="numbers-grid">
                <!-- 11周年 -->
                <div class="number-card">
                    <span class="num-icon">🏆</span>
                    <div class="num-data">
                        <span class="num-val">11<span class="unit">th</span></span>
                        <span class="num-label">Anniversary</span>
                    </div>
                    <p class="num-desc">Celebrating over a decade of excellence.</p>
                </div>
                <!-- 賞金 -->
                <div class="number-card">
                    <span class="num-icon">💰</span>
                    <div class="num-data">
                        <span class="num-val"><span class="unit">$</span>100<span class="unit">k+</span></span>
                        <span class="num-label">Total Prize</span>
                    </div>
                    <p class="num-desc">Over $100,000 contributed each year.</p>
                </div>
                <!-- 起源 -->
                <div class="number-card">
                    <span class="num-icon">🏛️</span>
                    <div class="num-data">
                        <span class="num-val" style="font-size: 2.5rem;">Ivy League</span>
                        <span class="num-label">Origins</span>
                    </div>
                    <p class="num-desc">Founded at Columbia Business School.</p>
                </div>
            </div>
        </section>

        <!-- 3. University List (合格実績) -->
        <section class="about-section university-area">
            <div class="univ-content">
                <div class="univ-text">
                    <h2 class="section-title left gradation-text">
                        Acceptance Record<br>
                        <span>主な合格実績</span>
                    </h2>
                    <p>MEC winners have gained acceptance into prestigious institutions worldwide.</p>
                </div>

                <div class="univ-list-wrapper">
                    <ul class="university-list">
                        <li>Harvard University</li>
                        <li>Stanford University</li>
                        <li>Yale University</li>
                        <li>University of Pennsylvania</li>
                        <li>Johns Hopkins University</li>
                        <li>Northwestern University</li>
                        <li>Columbia University</li>
                        <li>Cornell University</li>
                        <li>University of Chicago</li>
                        <li>UC Berkeley</li>
                        <li>New York University</li>
                        <li>Oxford University</li>
                        <li>Imperial College London</li>
                        <li>University of Toronto</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- 4. Awards & Prizes (賞と特典) -->
        <section class="about-section prize-area">
            <h2 class="section-title gradation-text">Awards & Prizes</h2>

            <div class="prize-grid">
                <!-- 特典リスト -->
                <div class="prize-card benefit-card">
                    <div class="card-head">
                        <h3>🎉 Key Takeaways</h3>
                    </div>
                    <ul class="check-list">
                        <li>Recommendation Letter <small>(from Judges)</small></li>
                        <li>Awards <small>(gold certificate/trophy)</small></li>
                        <li>Printed Certificate of Participation</li>
                        <li>Valuable feedback from experts</li>
                    </ul>
                </div>

                <!-- 賞金リスト -->
                <div class="prize-card cash-card">
                    <div class="card-head">
                        <h3>💎 Cash Prize</h3>
                        <p class="sub">For Global Final Round winners</p>
                    </div>
                    <ul class="rank-list">
                        <li><span class="rank gold">1st</span><span class="amount">$1,500</span></li>
                        <li><span class="rank silver">2nd</span><span class="amount">$1,000</span></li>
                        <li><span class="rank bronze">3rd</span><span class="amount">$800</span></li>
                        <li><span class="rank">4th</span><span class="amount">$500</span></li>
                        <li><span class="rank">5th</span><span class="amount">$300</span></li>
                    </ul>
                </div>
            </div>
        </section>



    </div>
</main>

<?php get_footer(); ?>