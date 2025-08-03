<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="UTF-8">
  <title>قائمة المقالات</title>
</head>

<body>
  <h1>جميع المقالات</h1>
  <?php foreach ($articles as $a): ?>
    <h3><?= htmlspecialchars($a['title']) ?></h3>
    <p><?= nl2br(htmlspecialchars($a['content'])) ?></p>
    <small>بواسطة <?= htmlspecialchars($a['author']) ?></small>
    <hr>
  <?php endforeach; ?>
</body>

</html>