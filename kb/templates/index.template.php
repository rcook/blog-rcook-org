<?php

$collection = new Collection;
$articles = $collection->getArticles();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Richard's KnowledgeBase</title>
  <link rel="stylesheet" href="/static/style/default.css">
</head>
<body>
<div class="banner">
Richard's KnowledgeBase
</div>
<?
if (count($articles) > 0) {
  echo '<h1>Index of articles</h1>';
  echo '<ul>';
  foreach ($articles as $article) {
    echo '<li><a href="/' . sprintf('kb%03d', $article->getId()) . '/">' . sprintf('KB%03d', $article->getId()) . '&mdash;' . htmlspecialchars($article->getTitle()) . '</a></li>';
  }
  echo '</ul>';
}
else {
  echo '<p>No articles.</p>';
}
?>
</body>
</html>

