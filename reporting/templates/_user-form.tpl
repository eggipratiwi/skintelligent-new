{include file = '_header.tpl'} 
         {literal}
            <style type="text/css">
               .m-alert--error{
                  background: #f7dede;
               }
               .m-alert--success{
                  background: #e1f7de;
               }
            </style>
         {/literal}        

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
                              <span class="m-nav__link-text">Manage User </span>
                              </a>
                           </li>
                           <li class="m-nav__separator">-</li>
                           <li class="m-nav__item">
                              <a href="{$base_url}users/manage-user/add" class="m-nav__link">
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
                              {if $message == ''}
                              {else}
                              <div class="form-group m-form__group m--margin-top-10">
                                 <div class="alert m-alert m-alert--{$flag}" role="alert">
                                    {$message}
                                 </div>
                              </div>
                              {/if}
                              <div class="form-group m-form__group">
                                 <label for="firstname">First Name</label>
                                 <input type="text" class="form-control m-input" id="firstname" name="firstname" placeholder="First name" value="{$firstname}">
                              </div>
                              <div class="form-group m-form__group">
                                 <label for="lastname">Last Name</label>
                                 <input type="text" class="form-control m-input" id="lastname" name="lastname" placeholder="Last name" value="{$lastname}">
                              </div>
                              <div class="form-group m-form__group">
                                 <label for="email">Email address</label>
                                 <input type="email" class="form-control m-input m-input--square" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="{$email}" {if $url2 == 'edit'} readonly="readonly" {/if}>
                                 <span class="m-form__help">We'll never share your email with anyone else.</span>
                              </div>
                              <div class="form-group m-form__group">
                                 <label for="username">Username</label>
                                 <input type="text" class="form-control m-input" id="username" name="username" placeholder="@username" value="{$username}" {if $url2 == 'edit'} readonly="readonly" {/if}>
                              </div>
                              <div class="form-group m-form__group">
                                 <label for="password">Password</label>
                                 <input type="password" class="form-control m-input m-input--square" id="password" name="password" placeholder="Password" value="{$password}">
                              </div>
                              <div class="form-group m-form__group">
                                 <label for="confirm-password">Confirm-Password</label>
                                 <input type="password" class="form-control m-input m-input--square" id="password2" name="password2" placeholder="Password" value="{$password2}">
                              </div>
                              <div class="form-group1 m-form__group">
                                 <label for="exampleInputEmail1">Rules</label>
                                 <div></div>
                                 <select class="custom-select form-control" name="rules">
                                    <option selected="">Open this select menu</option>
                                    <option value="Admin" {if $rules == 'Admin'} selected="selected" {/if}>Admin</option>
                                    <option value="User" {if $rules == 'User'} selected="selected" {/if}>User</option>
                                 </select>
                              </div>
                              <div class="m-form__group form-group">
                                 <label for="">Activation</label>
                                 <div class="m-radio-inline">
                                    <label class="m-radio">
                                       <input type="radio" name="activation" value="1" {if $activation == '1'} checked="checked" {/if}> Active
                                       <span></span>
                                    </label>
                                    <label class="m-radio">
                                       <input type="radio" name="activation" value="0" {if $activation == '0'} checked="checked" {/if}> Inactive
                                       <span></span>
                                    </label>
                                 </div>
                              </div>
                              <div class="form-group m-form__group">
                                 <label for="exampleInputEmail1">File Browser</label>
                                 {if $url2 == 'edit'}<div><img src="{$base_url}img/users/{$image}" width="100px" style="margin: 5px 0"></div>{/if}
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
                                 <button type="reset" class="btn btn-secondary" onclick="location.href='{$base_url}users/manage-user'">Cancel</button>
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
         <script src="{$base_url}assets/app/js/row-callback.js" type="text/javascript"></script>
         <!--end::Page Resources --> 
         
{include file = '_footer.tpl'}