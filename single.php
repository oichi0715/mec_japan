<?php get_header(); ?>

<main class="lower-page">

    <section class="page-visual">
        <div class="container">
            <h1 class="gradation-text">NEWS</h1>
        </div>
    </section>

    <div class="container">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </div>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article class="single-article">
                    <header class="article-header">
                        <h2 class="article-title"><?php the_title(); ?></h2>
                        <p class="article-date">
                            <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                                <?php echo get_the_date('Y.m.d'); ?>
                            </time>
                        </p>
                    </header>

                    <div class="article-content">
                        <?php the_content(); ?>
                    </div>

                    <footer class="article-footer">
                        <div class="btn-wrapper">
                            <a href="<?php echo home_url('/'); ?>#news" class="btn-school-more">BACK TO NEWS</a>
                        </div>
                    </footer>
                </article>

        <?php endwhile;
        endif; ?>

    </div>
</main>

<?php get_footer(); ?>