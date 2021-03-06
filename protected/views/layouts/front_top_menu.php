
<div class="top-menu-wrapper <?php echo "top-".$action;?>" style="background:##00ccbc !important;">

<div class="container border" >
  <div class="col-md-3 col-xs-3 border col-a">
    <?php if ( $theme_hide_logo<>2):?>
    <a href="<?php echo websiteUrl()?>">
     <img src="<?php echo FunctionsV3::getDesktopLogo();?>" class="logo logo-desktop">
     <img src="<?php echo FunctionsV3::getMobileLogo();?>" class="logo logo-mobile">
    </a>
    <?php endif;?>
  </div>

  <div class="col-xs-1 menu-nav-mobile border relative">
     <a href="#"><i class="ion-android-menu"></i></a>
  </div>

  <a href="tel:+50425124060">
    <div class="col-xs-1 menu-nav-mobile border relative">
        <img src="<?php echo assetsURL()."/images/telefonoblanco.png"?>" alt="" style="min-width: 26px;min-height: 26px;">
    </div>
  </a>
  <!--menu-nav-mobile-->

  <?php if ( Yii::app()->controller->action->id =="menu"):?>
  <div class="col-xs-1 cart-mobile-handle border relative hidden">
      <div class="badge cart_count"></div>
     <a href="<?php echo Yii::app()->createUrl('store/cart')?>">
       <i class="ion-ios-cart"></i>
     </a>
  </div> <!--cart-mobile-handle-->
  <?php endif;?>


  <div class="col-md-9 border col-b">
    <?php $this->widget('zii.widgets.CMenu', FunctionsV3::getMenu() );?>
    <div class="clear"></div>
  </div>

</div> <!--container-->

</div> <!--END top-menu-->

<div class="menu-top-menu">
    <?php $this->widget('zii.widgets.CMenu', FunctionsV3::getMenu('mobile-menu') );?>
    <div class="clear"></div>
</div> <!--menu-top-menu-->
