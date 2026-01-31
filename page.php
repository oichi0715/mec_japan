<?php get_header(); ?>

<main class="lower-page">

    <section class="page-visual">
        <div class="container">
            <h1 class="gradation-text"><?php the_title(); ?></h1>
        </div>
    </section>

    <div class="container">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </div>
    </div>

    <div class="container">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article class="single-article">

                    <div class="article-content">
                        <?php the_content(); ?>
                    </div>

                </article>

        <?php endwhile;
        endif; ?>

    </div>
</main>

<?php get_footer(); ?>