<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\AppAsset;

use yii\helpers\Html;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
  <!doctype html>
  <html lang="<?= Yii::$app->language ?>">
  <head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
      <?php $this->head() ?>

  </head>
  <body>
  <?php $this->beginBody() ?>

  <header>
      <?php $this->beginContent('@app/views/layouts/javascript-header/header.php') ?>
      <?php $this->endContent() ?>
  </header>

  <?= $content ?>

  <footer>
      <?php $this->beginContent('@app/views/layouts/javascript-footer/footer.php') ?>
      <?php $this->endContent() ?>
  </footer>

  <?php $this->endBody() ?>
  </body>
  </html>
<?php $this->endPage() ?>