<?php
function RootLayout($render)
{
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <title>Quiz SL</title>
  </head>

  <body>
    <?php include __DIR__ . '/../components/layouts/navbar.php'; ?>

    <?php $render(); ?>

    <?php include __DIR__ . '/../components/layouts/footer.php'; ?>

  </body>

  </html>
<?php } ?>