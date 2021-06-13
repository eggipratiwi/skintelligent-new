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
                        <h3 class="m-subheader__title m-subheader__title--separator">My Profile</h3>
                        <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                           <li class="m-nav__item m-nav__item--home">
                              <a href="{$base_url}" class="m-nav__link m-nav__link--icon">
                              <i class="m-nav__link-icon la la-home"></i>
                              </a>
                           </li>
                           <li class="m-nav__separator">-</li>
                           <li class="m-nav__item">
                              <a href="{$base_url}" class="m-nav__link">
                              <span class="m-nav__link-text">Home</span>
                              </a>
                           </li>
                           <li class="m-nav__separator">-</li>
                           <li class="m-nav__item">
                              <a href="{$base_url}profile" class="m-nav__link">
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
                                       <img src="{$base_url}img/users/{$sys_image}" alt="">
                                    </div>
                                 </div>
                                 <div class="m-card-profile__details">
                                    <span class="m-card-profile__name">{$sys_firstname} {$sys_lastname}</span>
                                    <a href="" class="m-card-profile__email m-link">{$sys_email}</a><br>
                                    <b>{$sys_position}</b>
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
                                 <form class="m-form m-form--fit m-form--label-align-right" method="POST" action="{$base_url}profile/update" enctype="multipart/form-data">
                                    <div class="m-portlet__body">
                                       
                                       {if $message != '' or $url1 == 'success'}
                                       <div class="form-group m-form__group m--margin-top-10">
                                          <div class="alert m-alert m-alert--{$flag}{$url1}" role="alert">
                                             {if $url1 == 'success'}Success update data user.{else}{$message}{/if}
                                          </div>
                                       </div>
                                       {else}
                                       {/if}

                                       <div class="form-group m-form__group row">
                                          <div class="col-10 ml-auto">
                                             <h3 class="m-form__section">1. Personal Details</h3>
                                          </div>
                                       </div>

                                       <div class="form-group m-form__group row">
                                          <label for="example-text-input" class="col-2 col-form-label">Firstname</label>
                                          <div class="col-7">
                                             <input class="form-control m-input" type="text" name="firstname" value="{$firstname}">
                                          </div>
                                       </div>
                                       <div class="form-group m-form__group row">
                                          <label for="example-text-input" class="col-2 col-form-label">Lastname</label>
                                          <div class="col-7">
                                             <input class="form-control m-input" type="text" name="lastname" value="{$lastname}">
                                          </div>
                                       </div>
                                       <div class="form-group m-form__group row">
                                          <label for="example-text-input" class="col-2 col-form-label">Email</label>
                                          <div class="col-7">
                                             <input class="form-control m-input" type="email" name="email" value="{$email}" disabled="disabled">
                                          </div>
                                       </div>
                                       <div class="form-group m-form__group row">
                                          <label for="example-text-input" class="col-2 col-form-label">File Browser</label>
                                          <div class="col-7">
                                             <img src="{$base_url}img/users/{$image}" width="100px" style="margin: 5px 0">
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
                                             <input class="form-control m-input" type="text" name="username" value="{$username}" disabled="disabled">
                                          </div>
                                       </div>
                                       <div class="form-group m-form__group row">
                                          <label for="example-text-input" class="col-2 col-form-label">Rules</label>
                                          <div class="col-7">
                                             <input class="form-control m-input" type="text" name="rules" value="{$rules}" disabled="disabled">
                                          </div>
                                       </div>
                                       <div class="form-group m-form__group row">
                                          <label for="example-text-input" class="col-2 col-form-label">Activation</label>
                                          <div class="col-7">
                                             <span style="font-weight: bold; padding: 0 5px; line-height: 40px;">{if $activation == '1'}Active{else}Inactive{/if}</span>
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
         <script src="{$base_url}assets/app/js/row-callback.js" type="text/javascript"></script>
         <!--end::Page Resources --> 
         
{include file = '_footer.tpl'}