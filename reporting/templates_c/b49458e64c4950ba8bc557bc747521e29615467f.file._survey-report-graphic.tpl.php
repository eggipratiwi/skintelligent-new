<?php /* Smarty version Smarty-3.1.13, created on 2020-05-04 14:40:57
         compiled from "./templates/_survey-report-graphic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19421639575eafc709a242c4-61932212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b49458e64c4950ba8bc557bc747521e29615467f' => 
    array (
      0 => './templates/_survey-report-graphic.tpl',
      1 => 1588560808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19421639575eafc709a242c4-61932212',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'url1' => 0,
    'rsSkor' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5eafc709aeef74_23252157',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eafc709aeef74_23252157')) {function content_5eafc709aeef74_23252157($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



   <style type="text/css">
      .cons-value{
         border: 1px solid #eaeaea;
         float: left;
         min-height: 200px;
         text-align: center;
         padding: 70px 0;
         line-height: 50px;
      }
      .cons-value h3{font-size: 1.4rem;}
      .cons-value span{font-size: 1.4rem;}
   </style>
         

         <!--begin::Page Vendors -->
         <link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
         <!--end::Page Vendors -->        

         <!-- begin::Body -->
         <div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop m-page__container m-body">                   
            <div class="m-grid__item m-grid__item--fluid m-wrapper">
               <!-- BEGIN: Subheader -->
               <div class="m-subheader ">
                  <div class="d-flex align-items-center">
                     <div class="mr-auto">
                        <h3 class="m-subheader__title m-subheader__title--separator">Survey Report</h3>
                        <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                           <li class="m-nav__item m-nav__item--home">
                              <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" class="m-nav__link m-nav__link--icon">
                              <i class="m-nav__link-icon la la-home"></i>
                              </a>
                           </li>
                           <li class="m-nav__separator">-</li>
                           <li class="m-nav__item">
                              <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
survey-report/<?php echo $_smarty_tpl->tpl_vars['url1']->value;?>
" class="m-nav__link">
                              <span class="m-nav__link-text">Survey Report</span>
                              </a>
                           </li>
                           <li class="m-nav__separator">-</li>
                           <li class="m-nav__item">
                              <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
survey-report/<?php echo $_smarty_tpl->tpl_vars['url1']->value;?>
" class="m-nav__link">
                              <span class="m-nav__link-text"><?php echo ucfirst($_smarty_tpl->tpl_vars['url1']->value);?>
</span>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!-- END: Subheader -->            
               <div class="m-content">
                  <div class="m-portlet m-portlet--mobile">
                     <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                           <div class="m-portlet__head-title">
                              <h3 class="m-portlet__head-text">
                                 Concern Graphic
                              </h3>
                           </div>
                        </div>
                     </div>
                     <div class="m-portlet__body">

                        <div class="graphic-block">
                           <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsSkor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                           <div class="col-sm-3 cons-value" style="background: #<?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
">
                              <h3><?php echo ucfirst($_smarty_tpl->tpl_vars['row']->value['description']);?>
</h3>
                              <span><?php echo $_smarty_tpl->tpl_vars['row']->value['total'];?>
</span>
                           </div>
                           <?php } ?>
                           <div style="clear: both;"></div>
                        </div>
                        
                     </div>
                  </div>          
               </div>
            </div>
         </div>
         <!-- end::Body -->

         <!--begin::Page Vendors --> 
         <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
         <!--end::Page Vendors -->  
         <!--begin::Page Resources --> 
         <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/app/js/row-callback.js" type="text/javascript"></script>
         <!--end::Page Resources --> 

         
<?php echo $_smarty_tpl->getSubTemplate ('_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>