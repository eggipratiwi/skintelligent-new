<!DOCTYPE html>
<html lang="en" >
   <!-- begin::Head -->
   <head>
      <meta charset="utf-8" />
      <title>Reporting System | Login</title>
      <meta name="description" content="Latest updates and statistic charts">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
      <!--begin::Web font -->
      <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
      {literal}
      <script>
         WebFont.load({
           google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700","Asap+Condensed:500"]},
           active: function() {
               sessionStorage.fonts = true;
           }
         });
      </script>
      {/literal}
      <!--end::Web font -->
      <!--begin::Base Styles -->  
      <link href="{$base_url}assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
      <link href="{$base_url}assets/base/style.bundle.css" rel="stylesheet" type="text/css" />
      <!--end::Base Styles -->
      <link rel="shortcut icon" href="{$base_url}assets/images/favicon.png" />
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
                    <img src="{$base_url}assets/images/logo.png" style="height: 150px;">
                  </a>
                </div>
                <div class="m-login__signin">
                  <div class="m-login__head">
                    <h3 class="m-login__title">Sign In To Admin</h3>
                  </div>
                  <form class="m-login__form m-form" action="{$base_url}login" method="POST">
                    {if $errorMessage != ''}
                    <div class="m-alert m-alert--outline alert alert-danger alert-dismissible animated fadeIn" role="alert">      <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>     <span>{$errorMessage}</span>    </div>
                    {/if}
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
    <script src="{$base_url}assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
    <script src="{$base_url}assets/base/scripts.bundle.js" type="text/javascript"></script>
    <!--end::Base Scripts -->

    <script src="{$base_url}assets/snippets/custom/pages/user/login.js" type="text/javascript"></script>

	</body>

	<!-- end::Body -->
</html>