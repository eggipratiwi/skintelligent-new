<?php /* Smarty version Smarty-3.1.13, created on 2020-05-04 10:30:54
         compiled from "./templates/_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17621050145eaf8c6e49a579-32142714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6215cb4147b5ff3e6fd7c9c8022dd05599e2f94d' => 
    array (
      0 => './templates/_profile.tpl',
      1 => 1588560808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17621050145eaf8c6e49a579-32142714',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'sys_image' => 0,
    'sys_firstname' => 0,
    'sys_lastname' => 0,
    'sys_email' => 0,
    'sys_position' => 0,
    'message' => 0,
    'url1' => 0,
    'flag' => 0,
    'firstname' => 0,
    'lastname' => 0,
    'email' => 0,
    'image' => 0,
    'username' => 0,
    'rules' => 0,
    'activation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5eaf8c6e4f84f2_50937967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eaf8c6e4f84f2_50937967')) {function content_5eaf8c6e4f84f2_50937967($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
         
            <style type="text/css">
               .m-alert--error{
                  background: #f7dede;
               }
               .m-alert--success{
                  background: #e1f7de;
               }
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
                        <h3 class="m-subheader__title m-subheader__title--separator">My Profile</h3>
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
" class="m-nav__link">
                              <span class="m-nav__link-text">Home</span>
                              </a>
                           </li>
                           <li class="m-nav__separator">-</li>
                           <li class="m-nav__item">
                              <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
profile" class="m-nav__link">
                              <span class="m-nav__link-text">My Profile</span>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!-- END: Subheader -->            
               <div class="m-content"> 

                  <div class="row">
                     <div class="col-xl-3 col-lg-4">
                        <div class="m-portlet m-portlet--full-height   m-portlet--rounded">
                           <div class="m-portlet__body">
                              <div class="m-card-profile">
                                 <div class="m-card-profile__title m--hide">
                                    Your Profile
                                 </div>
                                 <div class="m-card-profile__pic">
                                    <div class="m-card-profile__pic-wrapper"> 
                                       <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/users/<?php echo $_smarty_tpl->tpl_vars['sys_image']->value;?>
" alt="">
                                    </div>
                                 </div>
                                 <div class="m-card-profile__details">
                                    <span class="m-card-profile__name"><?php echo $_smarty_tpl->tpl_vars['sys_firstname']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['sys_lastname']->value;?>
</span>
                                    <a href="" class="m-card-profile__email m-link"><?php echo $_smarty_tpl->tpl_vars['sys_email']->value;?>
</a><br>
                                    <b><?php echo $_smarty_tpl->tpl_vars['sys_position']->value;?>
</b>
                                 </div>
                              </div>   
                              

                              <div class="m-portlet__body-separator"></div>

                           </div>         
                        </div>   
                     </div>
                     <div class="col-xl-9 col-lg-8">
                        <div class="m-portlet m-portlet--full-height m-portlet--tabs   m-portlet--rounded">
                           <div class="m-portlet__head">
                              <div class="m-portlet__head-tools">
                                 <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
                                    <li class="nav-item m-tabs__item">
                                       <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_user_profile_tab_1" role="tab">
                                          <i class="flaticon-share m--hide"></i>
                                          Update Profile
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="tab-content">
                              <div class="tab-pane active" id="m_user_profile_tab_1">
                                 <form class="m-form m-form--fit m-form--label-align-right" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
profile/update" enctype="multipart/form-data">
                                    <div class="m-portlet__body">
                                       
                                       <?php if ($_smarty_tpl->tpl_vars['message']->value!=''||$_smarty_tpl->tpl_vars['url1']->value=='success'){?>
                                       <div class="form-group m-form__group m--margin-top-10">
                                          <div class="alert m-alert m-alert--<?php echo $_smarty_tpl->tpl_vars['flag']->value;?>
<?php echo $_smarty_tpl->tpl_vars['url1']->value;?>
" role="alert">
                                             <?php if ($_smarty_tpl->tpl_vars['url1']->value=='success'){?>Success update data user.<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<?php }?>
                                          </div>
                                       </div>
                                       <?php }else{ ?>
                                       <?php }?>

                                       <div class="form-group m-form__group row">
                                          <div class="col-10 ml-auto">
                                             <h3 class="m-form__section">1. Personal Details</h3>
                                          </div>
                                       </div>

                                       <div class="form-group m-form__group row">
                                          <label for="example-text-input" class="col-2 col-form-label">Firstname</label>
                                          <div class="col-7">
                                             <input class="form-control m-input" type="text" name="firstname" value="<?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
">
                                          </div>
                                       </div>
                                       <div class="form-group m-form__group row">
                                          <label for="example-text-input" class="col-2 col-form-label">Lastname</label>
                                          <div class="col-7">
                                             <input class="form-control m-input" type="text" name="lastname" value="<?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
">
                                          </div>
                                       </div>
                                       <div class="form-group m-form__group row">
                                          <label for="example-text-input" class="col-2 col-form-label">Email</label>
                                          <div class="col-7">
                                             <input class="form-control m-input" type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" disabled="disabled">
                                          </div>
                                       </div>
                                       <div class="form-group m-form__group row">
                                          <label for="example-text-input" class="col-2 col-form-label">File Browser</label>
                                          <div class="col-7">
                                             <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/users/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" width="100px" style="margin: 5px 0">
                                             <input class="form-control m-input" type="file"  name="image">
                                             <span class="m-form__help">*) Max. Size 1 MB</span>
                                          </div>
                                       </div>
                                       
                                       <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>

                                       <div class="form-group m-form__group row">
                                          <div class="col-10 ml-auto">
                                             <h3 class="m-form__section">2. Account Detail</h3>
                                          </div>
                                       </div>

                                       <div class="form-group m-form__group row">
                                          <label for="example-text-input" class="col-2 col-form-label">Username</label>
                                          <div class="col-7">
                                             <input class="form-control m-input" type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" disabled="disabled">
                                          </div>
                                       </div>
                                       <div class="form-group m-form__group row">
                                          <label for="example-text-input" class="col-2 col-form-label">Rules</label>
                                          <div class="col-7">
                                             <input class="form-control m-input" type="text" name="rules" value="<?php echo $_smarty_tpl->tpl_vars['rules']->value;?>
" disabled="disabled">
                                          </div>
                                       </div>
                                       <div class="form-group m-form__group row">
                                          <label for="example-text-input" class="col-2 col-form-label">Activation</label>
                                          <div class="col-7">
                                             <span style="font-weight: bold; padding: 0 5px; line-height: 40px;"><?php if ($_smarty_tpl->tpl_vars['activation']->value=='1'){?>Active<?php }else{ ?>Inactive<?php }?></span>
                                          </div>
                                       </div>

                                       <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>

                                       <div class="form-group m-form__group row">
                                          <div class="col-10 ml-auto">
                                             <h3 class="m-form__section">3. Update Password</h3>
                                          </div>
                                       </div>

                                       <div class="form-group m-form__group row">
                                          <label for="example-text-input" class="col-2 col-form-label">Old Password</label>
                                          <div class="col-7">
                                             <input class="form-control m-input" type="password" name="oldpassword" value="">
                                          </div>
                                       </div>

                                       <div class="form-group m-form__group row">
                                          <label for="example-text-input" class="col-2 col-form-label">New Password</label>
                                          <div class="col-7">
                                             <input class="form-control m-input" type="password" name="newpassword" value="">
                                          </div>
                                       </div>
                                       <div class="form-group m-form__group row">
                                          <label for="example-text-input" class="col-2 col-form-label">Confirm Password</label>
                                          <div class="col-7">
                                             <input class="form-control m-input" type="password" name="confirmpassword" value="">
                                          </div>
                                       </div>


                                    </div>
                                    <div class="m-portlet__foot m-portlet__foot--fit">
                                       <div class="m-form__actions">
                                          <div class="row">
                                             <div class="col-2">
                                             </div>
                                             <div class="col-7">
                                                <button type="Submit" name="save" class="btn btn-accent m-btn m-btn--air m-btn--custom">Save changes</button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>   


               </div>
            </div>
         </div>
         <!-- end::Body -->

         <!--end::Page Vendors -->  
         <!--begin::Page Resources --> 
         <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/app/js/row-callback.js" type="text/javascript"></script>
         <!--end::Page Resources --> 
         
<?php echo $_smarty_tpl->getSubTemplate ('_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>