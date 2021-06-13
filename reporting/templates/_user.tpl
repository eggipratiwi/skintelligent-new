{include file = '_header.tpl'}         

         <!--begin::Page Vendors -->
         <link href="{$base_url}assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
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
                              <a href="{$base_url}" class="m-nav__link m-nav__link--icon">
                              <i class="m-nav__link-icon la la-home"></i>
                              </a>
                           </li>
                           <li class="m-nav__separator">-</li>
                           <li class="m-nav__item">
                              <a href="{$base_url}users/manage-user" class="m-nav__link">
                              <span class="m-nav__link-text">User</span>
                              </a>
                           </li>
                           <li class="m-nav__separator">-</li>
                           <li class="m-nav__item">
                              <a href="{$base_url}users/manage-user" class="m-nav__link">
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
                                 <a href="{$base_url}users/manage-user/add" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air">
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
                              {foreach from=$rsUser item=row name=foo}
                              <tr>
                                 <td>{$smarty.foreach.foo.iteration}</td>
                                 <td>{$row.name}</td>
                                 <td>{$row.username}</td>
                                 <td>{$row.email}</td>
                                 <td>{$row.position}</td>
                                 <td>{if $row.activation == '1'}Active{else}Inactive{/if}</td>
                                 <td>
                                    {if $sys_email != $row.email}
                                    <a href="{$base_url}users/manage-user/edit/{$row.user_id}" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Edit"><i class="la la-edit"></i></a> |
                                    <a href="{$base_url}users/manage-user/delete/{$row.user_id}" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Delete"><i class="la la-trash"></i></a>
                                    {/if}
                                 </td>
                              </tr>
                              {/foreach}
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
         <script src="{$base_url}assets/app/js/row-callback.js" type="text/javascript"></script>
         <!--end::Page Resources --> 
         
{include file = '_footer.tpl'}