<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/app.css">
    <meta charset="utf-8">
    <title>BoolPress</title>
  </head>
  <body>
    <?php include 'data.php'; ?>
      <div class="container">
        <?php foreach ($posts as $post) { ?>
          <div class="post">
            <div class="titolo">
              <a href="http://localhost/php/php-boolpress/post-detail.php?slug=<?php echo $post['slug']; ?>">
                <h1><?php echo $post['title']; ?></h1>
              </a>
            </div>
            <div class="giorno-pubblicazione">
              <p><?php echo date($post['published_at']); ?></p>
            </div>
            <div class="estratto">
              <?php echo substr($post['content'],0,150); ?>
            </div>
          </div>
        <?php } ?>
      </div>
    </body>
</html>
