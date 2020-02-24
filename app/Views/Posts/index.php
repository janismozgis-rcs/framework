<h2>This is POSTS!</h2>
<ul>
    <?php
        foreach ($posts as $post) {
            echo '<li><a href="?page=post&id=' . $post->id . '">' . $post->title . '</a></li>';
        }
    ?>
</ul>