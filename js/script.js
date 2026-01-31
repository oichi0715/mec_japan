document.addEventListener('DOMContentLoaded', function () {

    /* ===================================================
       1. ハンバーガーメニューの開閉動作
       =================================================== */
    const hamburger = document.getElementById('js-hamburger');
    const nav = document.querySelector('.main-nav');

    if (hamburger && nav) {
        hamburger.addEventListener('click', function () {
            // activeクラスをつけ外ししてメニューを表示/非表示
            hamburger.classList.toggle('active');
            nav.classList.toggle('active');

            // アクセシビリティ対応（開いているかどうかをブラウザに伝える）
            const isExpanded = hamburger.classList.contains('active');
            hamburger.setAttribute('aria-expanded', isExpanded);
        });
    }

    /* ===================================================
       2. トップページ：スライドショー設定 (Swiper)
       =================================================== */
    // スライドショーの要素があるページ（トップページ）だけで動かす判定
    const heroSliderElement = document.querySelector('.hero-swiper');

    if (heroSliderElement) {
        const heroSwiper = new Swiper('.hero-swiper', {
            // ループ設定：最後の画像の次は最初に戻る
            loop: true,

            // 切り替えエフェクト：'fade'（ふわっと） または 'slide'（横スライド）
            effect: 'fade',
            fadeEffect: {
                crossFade: true // 画像が重ならずに綺麗に切り替わる設定
            },

            // 切り替えアニメーションにかかる時間（1000ms = 1秒）
            speed: 1000,

            // 自動再生の設定
            autoplay: {
                delay: 4000, // 4秒ごとに自動で切り替え
                disableOnInteraction: false, // ユーザーがクリックしても自動再生を止めない
            },

            // 下の丸いポチポチ（ページネーション）の設定
            pagination: {
                el: '.swiper-pagination',
                clickable: true, // クリックでスライド移動できるようにする
            },
        });
    }

});