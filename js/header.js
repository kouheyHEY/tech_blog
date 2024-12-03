jQuery(document).ready(function ($) {
    const $hamburger = $('#hamburger-menu');
    const $nav = $('#header-nav');

    $hamburger.on('click', function () {
        $hamburger.toggleClass('open');
        $nav.toggleClass('open');
    });
});