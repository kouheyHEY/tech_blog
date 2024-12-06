<!-- SNSシェアボタン -->
<div class="article-share-block">
    <p>SNSでシェア</p>
    <ul>
        <li class="article-share-item round-corner-box-sns share-sns-x">
            <a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&hashtags=<?php echo get_bloginfo('name'); ?>" target="_blank" rel="nofollow noopener noreferrer">X</a>
        </li>
        <li class="article-share-item round-corner-box-sns share-sns-facebook">
            <a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>" target="_blank" rel="nofollow noopener noreferrer">Facebook</a>
        </li>
        <li class="article-share-item round-corner-box-sns share-sns-instagram">
            <a href="https://www.instagram.com/?url=<?php the_permalink(); ?>" target="_blank" rel="nofollow noopener noreferrer">Instagram</a>
        </li>
        <li class="article-share-item round-corner-box-sns share-sns-line">
            <a href="https://line.me/R/msg/text/?<?php the_permalink(); ?>" target="_blank" rel="nofollow noopener noreferrer">LINE</a>
        </li>
        <li class="article-share-item round-corner-box-sns share-sns-bluesky">
            <a href="https://bsky.social/notifications/compose?text=<?php the_permalink(); ?>" target="_blank" rel="nofollow noopener noreferrer">Bluesky</a>
        </li>
    </ul>
</div>