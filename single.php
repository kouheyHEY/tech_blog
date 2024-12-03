<?php get_header(); ?>

<main>
    <?php if (have_posts()) :
        while (have_posts()) :
            the_post(); ?>
            <div id="main-category-block">
                <div class="category-title">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="article-info-block">
                    <p><?php echo get_the_date('Y-m-d'); ?></p>
                </div>
                <div class="article-text-block">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile;
    endif; ?>

    <div id="article-link-block-container">

        <!-- 前の記事へのリンク -->
        <div class="round-corner-box article-link-block <?php if (!get_previous_post()) echo 'hidden'; ?>" id="previous-article-link">
            <?php previous_post_link('%link', '%title'); ?>
        </div>

        <!-- 次の記事へのリンク -->
        <div class="round-corner-box article-link-block <?php if (!get_next_post()) echo 'hidden'; ?>" id="next-article-link">
            <?php next_post_link('%link', '%title'); ?>
        </div>
    </div>

    <!-- 戻るボタン -->
    <div class="round-corner-box" id="back-button">
        <a href="<?php echo home_url(); ?>">
            Back
        </a>
    </div>
</main>
<?php get_footer(); ?>