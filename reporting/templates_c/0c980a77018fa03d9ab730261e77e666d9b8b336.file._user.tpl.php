<?php /* Smarty version Smarty-3.1.13, created on 2020-05-04 10:30:45
         compiled from "./templates/_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:923745015eaf8c655523d2-19274210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c980a77018fa03d9ab730261e77e666d9b8b336' => 
    array (
      0 => './templates/_user.tpl',
      1 => 1588560808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '923745015eaf8c655523d2-19274210',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'rsUser' => 0,
    'row' => 0,
    'sys_email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5eaf8c655fd8c2_03743547',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eaf8c655fd8c2_03743547')) {function content_5eaf8c655fd8c2_03743547($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
         

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
                              <span class="m-nav__link-text">Manage User</span>
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
                                 Manage User
                              </h3>
                           </div>
                        </div>
                        <div class="m-portlet__head-tools">
                           <ul class="m-portlet__nav">
                              <li class="m-portlet__nav-item">
                                 <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
users/manage-user/add" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air">
                                    <span>
                                       <i class="la la-plus"></i>
                                       <span>Add User</span>
                                    </span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="m-portlet__body">

                        <!--begin: Datatable -->
                        <table class="table table-striped- table-bordered table-hover table-checkable" id="data-score">
                           <thead>
                              <tr>
                                 <th>No.</th>
                                 <th>Name</th>
                                 <th>Username</th>
                                 <th>Email</th>
                                 <th>Rules</th>
                                 <th>Activation</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsUser']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['iteration']++;
?>
                              <tr>
                                 <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['iteration'];?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['row']->value['position'];?>
</td>
                                 <td><?php if ($_smarty_tpl->tpl_vars['row']->value['activation']=='1'){?>Active<?php }else{ ?>Inactive<?php }?></td>
                                 <td>
                                    <?php if ($_smarty_tpl->tpl_vars['sys_email']->value!=$_smarty_tpl->tpl_vars['row']->value['email']){?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
users/manage-user/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Edit"><i class="la la-edit"></i></a> |
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
users/manage-user/delete/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Delete"><i class="la la-trash"></i></a>
                                    <?php }?>
                                 </td>
                              </tr>
                              <?php } ?>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <th>No.</th>
                                 <th>Name</th>
                                 <th>Username</th>
                                 <th>Email</th>
                                 <th>Rules</th>
                                 <th>Activation</th>
                                 <th>Action</th>
                              </tr>
                           </tfoot>
                        </table>
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