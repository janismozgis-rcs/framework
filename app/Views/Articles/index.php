<h2>This is Articles</h2>
<ul>
<?php
foreach ($articles as $article) {
    echo '<li><a href="?page=article&id=' . $article->id . '">' . $article->title . '</a></li>';
}
?>
</ul>