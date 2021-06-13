<?php /* Smarty version Smarty-3.1.13, created on 2020-05-04 10:28:58
         compiled from "./templates/_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13428509555eaf8bfa825837-01621896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bde2035480315ff8d0dd4d25a662b3c637b701b' => 
    array (
      0 => './templates/_login.tpl',
      1 => 1588560807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13428509555eaf8bfa825837-01621896',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'errorMessage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5eaf8bfa85a742_97376492',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eaf8bfa85a742_97376492')) {function content_5eaf8bfa85a742_97376492($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en" >
   <!-- begin::Head -->
   <head>
      <meta charset="utf-8" />
      <title>Reporting System | Login</title>
      <meta name="description" content="Latest updates and statistic charts">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
      <!--begin::Web font -->
      <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
      
      <script>
         WebFont.load({
           google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700","Asap+Condensed:500"]},
           active: function() {
               sessionStorage.fonts = true;
           }
         });
      </script>
      
      <!--end::Web font -->
      <!--begin::Base Styles -->  
      <link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/base/style.bundle.css" rel="stylesheet" type="text/css" />
      <!--end::Base Styles -->
      <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/images/favicon.png" />
   </head>
   <!-- end::Head -->

	<!-- begin::Body -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

		<!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">
      <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login">
        <div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside" style="background: rgba(101, 135, 196, 0.4);">
          <div class="m-stack m-stack--hor m-stack--desktop">
            <div class="m-stack__item m-stack__item--fluid">
              <div class="m-login__wrapper">
                <div class="m-login__logo">
                  <a href="">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/images/logo.png" style="height: 150px;">
                  </a>
                </div>
                <div class="m-login__signin">
                  <div class="m-login__head">
                    <h3 class="m-login__title">Sign In To Admin</h3>
                  </div>
                  <form class="m-login__form m-form" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
login" method="POST">
                    <?php if ($_smarty_tpl->tpl_vars['errorMessage']->value!=''){?>
                    <div class="m-alert m-alert--outline alert alert-danger alert-dismissible animated fadeIn" role="alert">      <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>     <span><?php echo $_smarty_tpl->tpl_vars['errorMessage']->value;?>
</span>    </div>
                    <?php }?>
                    <div class="form-group m-form__group">
                      <input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off">
                    </div>
                    <div class="form-group m-form__group">
                      <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password" style="margin-top: 10px;">
                    </div>
                    <div class="m-login__form-action">
                      <button type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air" style="background:#0a0a0a;border-color: rgb(56, 56, 56);box-shadow: 0 5px 10px 2px rgba(146,73, 94, .2)!important;">Sign In</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1  m-login__content m-grid-item--center">
          <div class="m-grid__item">
            <h3 class="m-login__welcome">System Reporting</h3>
            <p class="m-login__msg">
              See everything you want, here!
              <br>make a planning for future better than yesterday
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- end:: Page -->

		<!--begin::Base Scripts -->        
    <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/base/scripts.bundle.js" type="text/javascript"></script>
    <!--end::Base Scripts -->

    <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/snippets/custom/pages/user/login.js" type="text/javascript"></script>

	</body>

	<!-- end::Body -->
</html><?php }} ?>