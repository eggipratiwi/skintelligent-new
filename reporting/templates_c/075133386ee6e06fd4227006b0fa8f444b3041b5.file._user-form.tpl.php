<?php /* Smarty version Smarty-3.1.13, created on 2020-05-04 14:23:13
         compiled from "./templates/_user-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7635296045eafc2e16bd377-35374630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '075133386ee6e06fd4227006b0fa8f444b3041b5' => 
    array (
      0 => './templates/_user-form.tpl',
      1 => 1588560808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7635296045eafc2e16bd377-35374630',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'message' => 0,
    'flag' => 0,
    'firstname' => 0,
    'lastname' => 0,
    'email' => 0,
    'url2' => 0,
    'username' => 0,
    'password' => 0,
    'password2' => 0,
    'rules' => 0,
    'activation' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5eafc2e1777817_31585768',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eafc2e1777817_31585768')) {function content_5eafc2e1777817_31585768($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
         
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
                        <h3 class="m-subheader__title m-subheader__title--separator">User</h3>
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
users/manage-user" class="m-nav__link">
                              <span class="m-nav__link-text">User</span>
                              </a>
                           </li>
                           <li class="m-nav__separator">-</li>
                           <li class="m-nav__item">
                              <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
users/manage-user" class="m-nav__link">
                              <span class="m-nav__link-text">Manage User </span>
                              </a>
                           </li>
                           <li class="m-nav__separator">-</li>
                           <li class="m-nav__item">
                              <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
users/manage-user/add" class="m-nav__link">
                              <span class="m-nav__link-text">Add User </span>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!-- END: Subheader -->            
               <div class="m-content">
                  <div class="col-md-8" style="margin: auto;">
                     <div class="m-portlet m-portlet--tab">
                        <div class="m-portlet__head">
                           <div class="m-portlet__head-caption">
                              <div class="m-portlet__head-title">
                                 <span class="m-portlet__head-icon m--hide">
                                    <i class="la la-gear"></i>
                                 </span>
                                 <h3 class="m-portlet__head-text">
                                    Form User
                                 </h3>
                              </div>
                           </div>
                        </div>

                        <!--begin::Form-->
                        <form class="m-form m-form--fit m-form--label-align-right" method="POST" action="" enctype="multipart/form-data">
                           <div class="m-portlet__body">
                              <?php if ($_smarty_tpl->tpl_vars['message']->value==''){?>
                              <?php }else{ ?>
                              <div class="form-group m-form__group m--margin-top-10">
                                 <div class="alert m-alert m-alert--<?php echo $_smarty_tpl->tpl_vars['flag']->value;?>
" role="alert">
                                    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                                 </div>
                              </div>
                              <?php }?>
                              <div class="form-group m-form__group">
                                 <label for="firstname">First Name</label>
                                 <input type="text" class="form-control m-input" id="firstname" name="firstname" placeholder="First name" value="<?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
">
                              </div>
                              <div class="form-group m-form__group">
                                 <label for="lastname">Last Name</label>
                                 <input type="text" class="form-control m-input" id="lastname" name="lastname" placeholder="Last name" value="<?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
">
                              </div>
                              <div class="form-group m-form__group">
                                 <label for="email">Email address</label>
                                 <input type="email" class="form-control m-input m-input--square" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['url2']->value=='edit'){?> readonly="readonly" <?php }?>>
                                 <span class="m-form__help">We'll never share your email with anyone else.</span>
                              </div>
                              <div class="form-group m-form__group">
                                 <label for="username">Username</label>
                                 <input type="text" class="form-control m-input" id="username" name="username" placeholder="@username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['url2']->value=='edit'){?> readonly="readonly" <?php }?>>
                              </div>
                              <div class="form-group m-form__group">
                                 <label for="password">Password</label>
                                 <input type="password" class="form-control m-input m-input--square" id="password" name="password" placeholder="Password" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
">
                              </div>
                              <div class="form-group m-form__group">
                                 <label for="confirm-password">Confirm-Password</label>
                                 <input type="password" class="form-control m-input m-input--square" id="password2" name="password2" placeholder="Password" value="<?php echo $_smarty_tpl->tpl_vars['password2']->value;?>
">
                              </div>
                              <div class="form-group1 m-form__group">
                                 <label for="exampleInputEmail1">Rules</label>
                                 <div></div>
                                 <select class="custom-select form-control" name="rules">
                                    <option selected="">Open this select menu</option>
                                    <option value="Admin" <?php if ($_smarty_tpl->tpl_vars['rules']->value=='Admin'){?> selected="selected" <?php }?>>Admin</option>
                                    <option value="User" <?php if ($_smarty_tpl->tpl_vars['rules']->value=='User'){?> selected="selected" <?php }?>>User</option>
                                 </select>
                              </div>
                              <div class="m-form__group form-group">
                                 <label for="">Activation</label>
                                 <div class="m-radio-inline">
                                    <label class="m-radio">
                                       <input type="radio" name="activation" value="1" <?php if ($_smarty_tpl->tpl_vars['activation']->value=='1'){?> checked="checked" <?php }?>> Active
                                       <span></span>
                                    </label>
                                    <label class="m-radio">
                                       <input type="radio" name="activation" value="0" <?php if ($_smarty_tpl->tpl_vars['activation']->value=='0'){?> checked="checked" <?php }?>> Inactive
                                       <span></span>
                                    </label>
                                 </div>
                              </div>
                              <div class="form-group m-form__group">
                                 <label for="exampleInputEmail1">File Browser</label>
                                 <?php if ($_smarty_tpl->tpl_vars['url2']->value=='edit'){?><div><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/users/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" width="100px" style="margin: 5px 0"></div><?php }?>
                                 <div></div>
                                 <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="image">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                    <span class="m-form__help">*) Max. Size 1 MB</span>
                                 </div>
                              </div>
                           </div>
                           <div class="m-portlet__foot m-portlet__foot--fit">
                              <div class="m-form__actions">
                                 <button type="Submit" name="save" class="btn btn-primary">Submit</button>
                                 <button type="reset" class="btn btn-secondary" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
users/manage-user'">Cancel</button>
                              </div>
                           </div>
                        </form>

                        <!--end::Form-->
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