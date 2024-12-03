<?php get_header(); ?>
<?php if (have_posts()):
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
        endif; ?>
        
    <div id="main-category-block">
        <div class="category-title">
            <h2>記事タイトル１</h2>
        </div>
        <div class="article-info-block">
            <p>2024-11-29</p>
        </div>
        <div class="article-text-block">
            <p>記事本文です。</p>
            <p>記事本文です。あああああ<br/>あああああ</p>
            <p>記事本文です。あああああ</p>
            <p>記事本文です。あああああ</p>
            <p>記事本文です。あああああ</p>
        </div>
    </div>
<?php previous_post_link(); ?>
<?php next_post_link(); ?>

<!-- 戻るボタン -->
<div class="round-corner-box" id="back-button">
<a href="<?php echo home_url(); ?>">
        Back
</a>
</div>
<?php get_footer(); ?>