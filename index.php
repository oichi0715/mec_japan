<?php get_header(); ?>

<main class="lower-page">

    <section class="page-visual">
        <div class="container">
            <h1 class="gradation-text"><?php echo get_the_archive_title(); ?></h1>
        </div>
    </section>

    <div class="container">
        <div class="news-list-wrapper" style="padding: 40px 0;">

            <?php if (have_posts()) : ?>
                <ul class="news-list">
                    <?php while (have_posts()) : the_post(); ?>
                        <li style="border-bottom: 1px solid #eee; padding: 15px 0;">
                            <a href="<?php the_permalink(); ?>" style="display:flex; gap:20px; align-items:center;">
                                <span class="date" style="color:#666;"><?php echo get_the_date('Y.m.d'); ?></span>
                                <span class="title" style="font-weight:bold;"><?php the_title(); ?></span>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>

                <div class="pagination" style="margin-top: 40px; text-align: center;">
                    <?php
                    the_posts_pagination(array(
                        'mid_size'  => 2,
                        'prev_text' => '<',
                        'next_text' => '>',
                    ));
                    ?>
                </div>

            <?php else : ?>
                <p>記事が見つかりませんでした。</p>
            <?php endif; ?>

        </div>
    </div>
</main>

<?php get_footer(); ?>