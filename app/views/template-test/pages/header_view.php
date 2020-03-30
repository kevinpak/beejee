<header class="header">
<div class="header__content">
<div class="header__content__left">
<a href="<?=BASE_URL;?>" class="logo-link">Bee<span>Jee</span></a>
</div>
<div class="header__content__right">
<?php
if(isset($_SESSION['admin'])):
  ?>
  <div class="header_login">Admin - <?=$_SESSION['admin']['login'];?></div>
  <a href="<?=BASE_URL.'login/logout'?>" class="connect-link i-link officon- i-icon__">Выйти</a>
  <?php
else:
  ?>
  <a href="<?=BASE_URL.'login'?>" class="connect-link i-link usericon- i-icon__">Войти</a>
  <?php
endif;
?>

</div>
</div>
</header>