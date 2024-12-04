<?php get_header(); ?>

<main>
    <?php if (have_posts()) :
        while (have_posts()) :
            the_post(); ?>
            <div id="main-category-block article-detail">
                <!-- タイトル -->
                <div class="category-title">
                    <p><?php the_title(); ?></p>
                </div>
                <!-- 投稿日 -->
                <div class="article-info-block">
                    <p><?php echo get_the_date('Y-m-d'); ?></p>
                </div>
                <!-- SNSシェアボタン -->
                <?php get_template_part('template-parts/sns-share-block'); ?>
                <!-- 本文 -->
                <div class="article-text-block">
                    <?php the_content(); ?>
                </div>
                <!-- SNSシェアボタン -->
                <?php get_template_part('template-parts/sns-share-block'); ?>
            </div>
        <?php endwhile;
    endif; ?>

    <!-- 戻るボタン -->
    <div class="round-corner-box" id="back-button">
        <a href="<?php echo home_url(); ?>">
            Back
        </a>
    </div>
</main>
<?php get_footer(); ?>