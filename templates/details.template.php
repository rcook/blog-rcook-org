<?php

require_once realpath(__DIR__ . '/../classes/Collection.class.php');

$contentPath = realpath(__DIR__ . '/../content/' . sprintf('kb%03d', $id) . '/index.php');
if ($contentPath === false) {
  header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
  die;
}

$metadata = MetadataReader::readMetadata($id);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?= sprintf('KB%03d', $metadata['id']) ?></title>
</head>
<body>
<h1><?= sprintf('KB%03d', $metadata['id']) ?>&mdash;<?= htmlspecialchars($metadata['title']) ?></h1>
<ul>
  <li><a href="/">Index</a></li>
</ul>
<?
  require $contentPath;
?>
</body>
</html>

