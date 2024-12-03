<!DOCTYPE html>
<html lang="ja">
<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- リセットCSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
    <!-- 共通定義のCSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/def.css">
    <!-- ヘッダーのCSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/header.css">
    <!-- ボディのCSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/body.css">
    <!-- フッターのCSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/footer.css">
    <!-- 記事一覧のCSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/article-list.css">
    <!-- 記事詳細のCSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/article-detail.css">
    <!-- テーマのCSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <title>ムリコクリエイション</title>
</head>
<body>
    <!-- ヘッダー -->
    <header>
        <div id="header-logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/logo_main_triming.png" alt="むりこクリエイション">
            </a>
        </div>
        <div id="header-nav">
            <ul>
                <li class="header-nav-item"><a href="<?php echo home_url(); ?>">トップ</a></li>
                <li class="header-nav-item"><a href="<?php echo home_url(); ?>/game">ゲーム開発</a></li>
                <li class="header-nav-item"><a href="<?php echo home_url(); ?>/web">Web開発</a></li>
                <li class="header-nav-item"><a href="<?php echo home_url(); ?>/other">その他開発</a></li>
                <li class="header-nav-item"><a href="<?php echo home_url(); ?>/diary">開発日記</a></li>
            </ul>
        </div>
    </header>