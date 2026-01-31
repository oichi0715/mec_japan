<?php
/*
Template Name: Schools
*/
get_header();
?>

<main class="lower-page">

    <section class="page-visual">
        <div class="container">
            <h1 class="gradation-text">SCHOOL LIST</h1>
        </div>
    </section>

    <div class="container">

        <div class="filter-buttons-wrapper">
            <button class="filter-btn active" data-target="group-ae">A - E</button>
            <button class="filter-btn" data-target="group-fj">F - J</button>
            <button class="filter-btn" data-target="group-ko">K - O</button>
            <button class="filter-btn" data-target="group-pt">P - T</button>
            <button class="filter-btn" data-target="group-uz">U - Z</button>
        </div>

        <?php
        // --- 2. データの取得と振り分け処理（ロジックは前回と同じ） ---
        $args = array(
            'post_type'      => 'attachment',
            'post_mime_type' => 'image',
            'post_status'    => 'inherit',
            'posts_per_page' => -1,
            'orderby'        => 'title',
            'order'          => 'ASC',
        );
        $images = get_posts($args);

        // 箱を用意
        $groups = array(
            'group-ae' => array(),
            'group-fj' => array(),
            'group-ko' => array(),
            'group-pt' => array(),
            'group-uz' => array(),
        );

        // 振り分け実行
        if ($images) {
            foreach ($images as $img) {
                // ファイル名の1文字目を取得（タイトルが空ならファイル名を使う処理を追加しても良い）
                $title_check = $img->post_title;
                $first_char = strtoupper(substr($title_check, 0, 1));

                if (preg_match('/[A-E]/', $first_char)) {
                    $groups['group-ae'][] = $img;
                } elseif (preg_match('/[F-J]/', $first_char)) {
                    $groups['group-fj'][] = $img;
                } elseif (preg_match('/[K-O]/', $first_char)) {
                    $groups['group-ko'][] = $img;
                } elseif (preg_match('/[P-T]/', $first_char)) {
                    $groups['group-pt'][] = $img;
                } elseif (preg_match('/[U-Z]/', $first_char)) {
                    $groups['group-uz'][] = $img;
                }
            }
        }
        ?>

        <?php foreach ($groups as $group_id => $group_images) : ?>
            <div id="<?php echo esc_attr($group_id); ?>" class="logo-grid <?php if ($group_id === 'group-ae') echo 'active'; ?>">

                <?php if (empty($group_images)) : ?>
                    <p style="text-align:center; width:100%; grid-column: 1 / -1;">No logos found in this category.</p>
                <?php else : ?>
                    <?php foreach ($group_images as $img) : ?>
                        <div class="logo-item">
                            <?php echo wp_get_attachment_image($img->ID, 'medium', false, ['loading' => 'lazy']); ?>

                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

            </div>
        <?php endforeach; ?>

    </div>
</main>

<script>
    // --- 4. 切り替え用JavaScript ---
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('.filter-btn');
        const grids = document.querySelectorAll('.logo-grid');

        buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                // ボタンの見た目を切り替え
                buttons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                // 表示エリアを切り替え
                const targetId = btn.getAttribute('data-target');

                grids.forEach(g => {
                    g.classList.remove('active');
                    if (g.id === targetId) {
                        // 少し遅らせてactiveをつけるとアニメーションっぽくなりますが、今回は即時反映
                        g.classList.add('active');
                    }
                });
            });
        });
    });
</script>

<?php get_footer(); ?>