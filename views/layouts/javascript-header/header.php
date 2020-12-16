<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>
<div class="header__wrap">

  <div class="header__inner">

    <div class="header__logo">
      <a class="header__logo_link" href="<?php echo Url::home() ?>">
          <?= Html::img('@web/img/js.svg', ['class' => 'header__logo_img']) ?>
      </a>
    </div>
    <!-- /.header__logo -->

    <div class="header__menu">
      <ul class="header__menu_list">
        <li class="header__menu_item">
          <a class="header__menu_link" href="<?php echo Url::home(); ?>">Home</a>
        </li>
        <li class="header__menu_item">
          <a class="header__menu_link" href="<?php echo Url::to(['main/about']) ?>">About</a>
        </li>
        <li class="header__menu_item">
          <a class="header__menu_link" href="<?php echo Url::to(['main/blog']) ?>">Blog</a>
        </li>
      </ul>
    </div>
    <!-- /.header__menu -->

  </div>
  <!-- /.header__inner -->

</div>
<!-- /.header__wrap -->