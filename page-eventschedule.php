<?php
/*
Template Name: Event Schedule
*/
get_header();
?>

<main class="lower-page">

    <section class="page-visual">
        <div class="container">
            <h1 class="gradation-text">EVENT SCHEDULE</h1>
        </div>
    </section>

    <div class="container">

        <?php
        // データの取得
        $day1_date = SCF::get('day1_date');
        $day1_list = SCF::get('day1_list');
        ?>

        <?php if (!empty($day1_list[0]['title'])) : ?>
            <section class="section schedule-section">
                <h2 class="section-title left gradation-text">
                    Day 1<br>
                    <span><?php echo esc_html($day1_date); ?></span>
                </h2>

                <div class="timeline">
                    <?php foreach ($day1_list as $item) : ?>
                        <div class="timeline-item">
                            <span class="timeline-time"><?php echo esc_html($item['time']); ?></span>
                            <div class="timeline-content">
                                <h3 class="sub-title blue is-lined"><?php echo nl2br(esc_html($item['title'])); ?></h3>
                                <?php if (!empty($item['location'])): ?>
                                    <p class="timeline-location"><?php echo esc_html($item['location']); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endif; ?>


        <?php
        $day2_date = SCF::get('day2_date');
        $day2_list = SCF::get('day2_list');
        ?>
        <?php if (!empty($day2_list[0]['title'])) : ?>
            <section class="section schedule-section">
                <h2 class="section-title left gradation-text">
                    Day 2<br>
                    <span><?php echo esc_html($day2_date); ?></span>
                </h2>

                <div class="timeline">
                    <?php foreach ($day2_list as $item) : ?>
                        <div class="timeline-item">
                            <span class="timeline-time"><?php echo esc_html($item['time']); ?></span>
                            <div class="timeline-content">
                                <h3 class="sub-title blue is-lined"><?php echo nl2br(esc_html($item['title'])); ?></h3>
                                <?php if (!empty($item['location'])): ?>
                                    <p class="timeline-location"><?php echo esc_html($item['location']); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="schedule-note">
                    *Please note that all participants are required to attend the Talent Show Dinner Party.<br>
                    If any of your teammates are absent without a valid reason, your team may lose its spot in the final round.
                </div>
            </section>
        <?php endif; ?>


        <?php
        $day3_date = SCF::get('day3_date');
        $day3_list = SCF::get('day3_list');
        ?>
        <?php if (!empty($day3_list[0]['title'])) : ?>
            <section class="section schedule-section">
                <h2 class="section-title left gradation-text">
                    Day 3<br>
                    <span><?php echo esc_html($day3_date); ?></span>
                </h2>

                <div class="timeline">
                    <?php foreach ($day3_list as $item) : ?>
                        <div class="timeline-item">
                            <span class="timeline-time"><?php echo esc_html($item['time']); ?></span>
                            <div class="timeline-content">
                                <h3 class="sub-title blue is-lined"><?php echo nl2br(esc_html($item['title'])); ?></h3>
                                <?php if (!empty($item['location'])): ?>
                                    <p class="timeline-location"><?php echo esc_html($item['location']); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endif; ?>


        <section class="section locations-section">
            <h2 class="section-title left gradation-text">
                Event Locations<br>
                <span>会場情報</span>
            </h2>

            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.5097078459894!2d139.7573!3d35.6918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c1d7c0a0001%3A0x5d0d0d0d0d0d0d0d!2z5LiA5qmL6Kyb5aCC!5e0!3m2!1sja!2sjp!4v1234567890"
                    allowfullscreen="" loading="lazy" title="会場の地図">
                </iframe>
            </div>

            <table class="location-info">
                <tr>
                    <th>address</th>
                    <td>Japan, 〒101-8439 Tokyo, Chiyoda City, Hitotsubashi, 2 Chome-1-2 学術総合センター 2F</td>
                </tr>
                <tr>
                    <th>phone</th>
                    <td>Phone: +81 3-4212-3900</td>
                </tr>
                <tr>
                    <th>train</th>
                    <td>
                        Tokyo Metro Hanzomon Line / Toei Mita Line / Toei Shinjuku Line:
                        "Jimbocho Station(神保町駅)," Exit A9<br>
                        Tokyo Metro Tozai Line: "Takebashi Station(竹橋駅)," Exit 1b<br>
                        3-5 minutes' walk from either station
                    </td>
                </tr>
            </table>
        </section>

    </div>
</main>

<?php get_footer(); ?>