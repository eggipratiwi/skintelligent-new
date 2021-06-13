<?php /* Smarty version Smarty-3.1.13, created on 2020-05-04 13:28:36
         compiled from "./templates/_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15384485735eaf8bfa205967-29417231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b326ac44e00b149b8549c8ee66ddc47cd1142923' => 
    array (
      0 => './templates/_header.tpl',
      1 => 1588573638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15384485735eaf8bfa205967-29417231',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5eaf8bfa25b712_75066620',
  'variables' => 
  array (
    'module' => 0,
    'url1' => 0,
    'base_url' => 0,
    'sys_image' => 0,
    'sys_firstname' => 0,
    'sys_last_name' => 0,
    'sys_position' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eaf8bfa25b712_75066620')) {function content_5eaf8bfa25b712_75066620($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/vhosts/skintelligent.id/httpdocs/reporting/lib/smarty/plugins/modifier.replace.php';
?><!DOCTYPE html>
<html lang="en" >
   <!-- begin::Head -->
   <head>
      <meta charset="utf-8" />
      <title>Reporting System | <?php if ($_smarty_tpl->tpl_vars['module']->value==''){?>Dashboard<?php }else{ ?> <?php echo ucfirst(smarty_modifier_replace($_smarty_tpl->tpl_vars['module']->value,'-',' '));?>
 <?php echo ucfirst(smarty_modifier_replace($_smarty_tpl->tpl_vars['url1']->value,'-',' '));?>
 <?php }?></title>
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

      <!--begin::Base Scripts -->        
      <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
      <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/base/scripts.bundle.js" type="text/javascript"></script>
      <!--end::Base Scripts -->    

      <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/images/favicon.png" />
   </head>
   <!-- end::Head -->
   <!-- begin::Body -->
   <body  class="m-page--fluid m-page--loading-enabled m-page--loading m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default"  >
      <!-- begin::Page loader -->
      <div class="m-page-loader m-page-loader--base">
         <div class="m-blockui">
            <span>Please wait...</span>
            <span>
               <div class="m-loader m-loader--brand"></div>
            </span>
         </div>
      </div>
      <!-- end::Page Loader -->        
      <!-- begin:: Page -->
      <div class="m-grid m-grid--hor m-grid--root m-page">
         <!-- begin::Header -->
         <header id="m_header" class="m-grid__item m-header "  m-minimize="minimize" m-minimize-mobile="minimize" m-minimize-offset="10" m-minimize-mobile-offset="10" >
            <div class="m-header__top">
               <div class="m-container m-container--fluid m-container--full-height m-page__container">
                  <div class="m-stack m-stack--ver m-stack--desktop">
                     <!-- begin::Brand -->
                     <div class="m-stack__item m-brand m-stack__item--left">
                        <div class="m-stack m-stack--ver m-stack--general m-stack--inline">
                           <div class="m-stack__item m-stack__item--middle m-brand__logo">
                              <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" class="m-brand__logo-wrapper">
                              <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/images/logo-text.png" class="m-brand__logo-desktop" height="30px"/>
                              <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/images/logo-text.png" class="m-brand__logo-mobile"/>
                              </a>  
                           </div>
                           <div class="m-stack__item m-stack__item--middle m-brand__tools">
                              <!-- begin::Responsive Header Menu Toggler-->
                              <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                              <span></span>
                              </a>
                              <!-- end::Responsive Header Menu Toggler-->
                              <!-- begin::Topbar Toggler-->
                              <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                              <i class="flaticon-more"></i>
                              </a>
                              <!--end::Topbar Toggler-->
                           </div>
                        </div>
                     </div>
                     <!-- end::Brand -->     
                     <!-- begin::Topbar -->
                     <div class="m-stack__item m-stack__item--right m-header-head" id="m_header_nav">
                        <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                           <div class="m-stack__item m-topbar__nav-wrapper">
                              <ul class="m-topbar__nav m-nav m-nav--inline">
                                 <li class="m-nav__item m-nav__item--danger m-dropdown m-dropdown--skin-light m-dropdown--large m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light"  m-dropdown-toggle="click">
                                    <a href="#" class="m-nav__link m-dropdown__toggle">
                                    <span class="m-nav__link-badge m-badge m-badge--dot m-badge--info m--hide"></span>
                                    <span class="m-nav__link-icon"><span class="m-nav__link-icon-wrapper"><i class="flaticon-share"></i></span></span>   
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                       <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                       <div class="m-dropdown__inner">
                                          <div class="m-dropdown__header m--align-center">
                                             <span class="m-dropdown__header-title">Quick Actions</span>
                                             <span class="m-dropdown__header-subtitle">Shortcuts</span>
                                          </div>
                                          <div class="m-dropdown__body m-dropdown__body--paddingless">
                                             <div class="m-dropdown__content">
                                                <div class="m-scrollable" data-scrollable="false" data-height="380" data-mobile-height="200">
                                                   <div class="m-nav-grid m-nav-grid--skin-light">
                                                      <div class="m-nav-grid__row">
                                                         <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
correspondent/all" class="m-nav-grid__item">
                                                         <i class="m-nav-grid__icon flaticon-file"></i>
                                                         <span class="m-nav-grid__text">Correspondent Report</span>
                                                         </a>
                                                         <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
master-data/options" class="m-nav-grid__item">
                                                         <i class="m-nav-grid__icon flaticon-time"></i>
                                                         <span class="m-nav-grid__text">Master Data</span>
                                                         </a>
                                                      </div>
                                                      <div class="m-nav-grid__row">
                                                         <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
survey-report/graphic" class="m-nav-grid__item">
                                                         <i class="m-nav-grid__icon flaticon-analytics"></i>
                                                         <span class="m-nav-grid__text">Graphic Survey</span>
                                                         </a>
                                                         <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
survey-report/list" class="m-nav-grid__item">
                                                         <i class="m-nav-grid__icon flaticon-list"></i>
                                                         <span class="m-nav-grid__text">List Survey</span>
                                                         </a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="m-nav__item m-dropdown m-dropdown--medium m-dropdown--arrow  m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
                                    <a href="#" class="m-nav__link m-dropdown__toggle">
                                    <span class="m-topbar__userpic">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/users/<?php echo $_smarty_tpl->tpl_vars['sys_image']->value;?>
" class="m--img-rounded m--marginless m--img-centered" alt=""/>
                                    </span>
                                    <span class="m-nav__link-icon m-topbar__usericon  m--hide">
                                    <span class="m-nav__link-icon-wrapper"><i class="flaticon-user-ok"></i></span>
                                    </span>
                                    <span class="m-topbar__username m--hide"><?php echo $_smarty_tpl->tpl_vars['sys_firstname']->value;?>
</span>              
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                       <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                       <div class="m-dropdown__inner">
                                          <div class="m-dropdown__header m--align-center">
                                             <div class="m-card-user m-card-user--skin-light">
                                                <div class="m-card-user__pic">
                                                   <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/users/<?php echo $_smarty_tpl->tpl_vars['sys_image']->value;?>
" class="m--img-rounded m--marginless" alt=""/>
                                                </div>
                                                <div class="m-card-user__details">
                                                   <span class="m-card-user__name m--font-weight-500"><?php echo $_smarty_tpl->tpl_vars['sys_firstname']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['sys_last_name']->value;?>
</span>
                                                   <a href="javascript:;" class="m-card-user__email m--font-weight-300 m-link"><?php echo $_smarty_tpl->tpl_vars['sys_position']->value;?>
</a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="m-dropdown__body">
                                             <div class="m-dropdown__content">
                                                <ul class="m-nav m-nav--skin-light">
                                                   <li class="m-nav__section m--hide">
                                                      <span class="m-nav__section-text">Section</span>
                                                   </li>
                                                   <li class="m-nav__item">
                                                      <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
profile" class="m-nav__link">
                                                      <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                      <span class="m-nav__link-title">  
                                                      <span class="m-nav__link-wrap">      
                                                      <span class="m-nav__link-text">My Profile</span>      
                                                       
                                                      </span>
                                                      </span>
                                                      </a>
                                                   </li>
                                                   <li class="m-nav__item">
                                                      <a href="mailto:ratih@allyoung.co.id?subject=ASK: System Reporting Skin Intellegent" class="m-nav__link">
                                                      <i class="m-nav__link-icon flaticon-info"></i>
                                                      <span class="m-nav__link-text">Support</span>
                                                      </a>
                                                   </li>
                                                   <li class="m-nav__separator m-nav__separator--fit">
                                                   </li>
                                                   <li class="m-nav__item">
                                                      <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
logout" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Logout</a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!-- end::Topbar -->       
                  </div>
               </div>
            </div>
            <div class="m-header__bottom">
               <div class="m-container m-container--fluid m-container--full-height m-page__container">
                  <div class="m-stack m-stack--ver m-stack--desktop">
                     <!-- begin::Horizontal Menu -->
                     <div class="m-stack__item m-stack__item--fluid m-header-menu-wrapper">
                        <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                        <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-dark m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light "  >
                           <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                              <li class="m-menu__item  <?php if ($_smarty_tpl->tpl_vars['module']->value==''||$_smarty_tpl->tpl_vars['module']->value=='home'||$_smarty_tpl->tpl_vars['module']->value=='profile'){?>m-menu__item--active  m-menu__item--active-tab<?php }?>  m-menu__item--submenu m-menu__item--tabs"  m-menu-submenu-toggle="tab" aria-haspopup="true">
                                 <a  href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__link-text">Dashboard</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                                 <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">
                                    <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                    <ul class="m-menu__subnav">
                                       <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true"><a  href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" class="m-menu__link "><i class="m-menu__link-icon flaticon-analytics"></i><span class="m-menu__link-text">Summary</span></a></li>
                                    </ul>
                                 </div>
                              </li>
                              <li class="m-menu__item <?php if ($_smarty_tpl->tpl_vars['module']->value=='survey-report'){?>m-menu__item--active  m-menu__item--active-tab<?php }?> m-menu__item--submenu m-menu__item--tabs"  m-menu-submenu-toggle="tab" aria-haspopup="true">
                                 <a  href="javascript:;" class="m-menu__link m-menu__toggle tab-survey-report"><span class="m-menu__link-text">Survey Report</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                                 <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">
                                    <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                    <ul class="m-menu__subnav">
                                       <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true"><a  href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
survey-report/graphic" class="m-menu__link "><i class="m-menu__link-icon flaticon-analytics"></i><span class="m-menu__link-text">Graphic</span></a></li>
                                       <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true"><a  href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
survey-report/list" class="m-menu__link "><i class="m-menu__link-icon flaticon-notes"></i><span class="m-menu__link-text">List</span></a></li>
                                    </ul>
                                 </div>
                              </li>
                              <li class="m-menu__item <?php if ($_smarty_tpl->tpl_vars['module']->value=='correspondent'){?>m-menu__item--active  m-menu__item--active-tab<?php }?> m-menu__item--submenu m-menu__item--tabs"  m-menu-submenu-toggle="tab" aria-haspopup="true">
                                 <a  href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__link-text">Correspondent</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                                 <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">
                                    <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                    <ul class="m-menu__subnav">
                                       <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true"><a  href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
correspondent/all" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-2"></i><span class="m-menu__link-text">All</span></a></li>
                                       <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true"><a  href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
correspondent/pending" class="m-menu__link "><i class="m-menu__link-icon flaticon-analytics"></i><span class="m-menu__link-text">Pending</span></a></li>
                                       <li class="m-menu__item "  aria-haspopup="true"><a  href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
correspondent/finish" class="m-menu__link "><i class="m-menu__link-icon flaticon-notes"></i><span class="m-menu__link-text">Finish</span></a></li>
                                    </ul>
                                 </div>
                              </li>
                              <li class="m-menu__item <?php if ($_smarty_tpl->tpl_vars['module']->value=='master-data'){?>m-menu__item--active  m-menu__item--active-tab<?php }?> m-menu__item--submenu m-menu__item--tabs"  m-menu-submenu-toggle="tab" aria-haspopup="true">
                                 <a  href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__link-text">Master Data</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                                 <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">
                                    <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                    <ul class="m-menu__subnav">
                                       <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true"><a  href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
master-data/concerns" class="m-menu__link "><i class="m-menu__link-icon flaticon-analytics"></i><span class="m-menu__link-text">Concerns</span></a></li>
                                       <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true"><a  href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
master-data/questions" class="m-menu__link "><i class="m-menu__link-icon flaticon-clipboard"></i><span class="m-menu__link-text">Questions</span></a></li>
                                       <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true"><a  href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
master-data/options" class="m-menu__link "><i class="m-menu__link-icon flaticon-notes"></i><span class="m-menu__link-text">Options</span></a></li>
                                       <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true"><a  href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
master-data/score" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-2"></i><span class="m-menu__link-text">Score</span></a></li>
                                    </ul>
                                 </div>
                              </li>
                              <?php if ($_smarty_tpl->tpl_vars['sys_position']->value=='Admin'){?>
                              <li class="m-menu__item <?php if ($_smarty_tpl->tpl_vars['module']->value=='users'){?>m-menu__item--active  m-menu__item--active-tab<?php }?> m-menu__item--submenu m-menu__item--tabs"  m-menu-submenu-toggle="tab" aria-haspopup="true">
                                 <a  href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__link-text">Users</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                                 <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">
                                    <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                    <ul class="m-menu__subnav">
                                       <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true"><a  href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
users/manage-user" class="m-menu__link "><i class="m-menu__link-icon flaticon-notes"></i><span class="m-menu__link-text">Manage User</span></a></li>
                                    </ul>
                                 </div>
                              </li>
                              <?php }?>
                           </ul>
                        </div>
                     </div>
                     <!-- end::Horizontal Menu --> 
                  </div>
               </div>
            </div>
         </header>
         <!-- end::Header --> <?php }} ?>