<?php get_header(); ?>
<!-- ボディ -->
<main>
    <div id="main-category-block">
        <div class="category-title">
            <h2>Article</h2>
        </div>
        <ul id="main-article-list">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 10,
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                    <li class="article-list-item round-corner-box">
                        <a href="<?php the_permalink(); ?>">
                            <span class="article-list-item-title"><?php the_title(); ?></span>
                            <span class="article-list-item-date"><?php echo get_the_date('Y-m-d'); ?></span>
                        </a>
                    </li>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <li class="article-list-item round-corner-box">
                    <span class="article-list-item-title">記事が見つかりませんでした。</span>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</main>

<?php get_footer(); ?>
