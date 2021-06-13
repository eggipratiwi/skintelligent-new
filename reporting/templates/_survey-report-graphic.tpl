{include file = '_header.tpl'}

{literal}
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
                        <h3 class="m-subheader__title m-subheader__title--separator">Survey Report</h3>
                        <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                           <li class="m-nav__item m-nav__item--home">
                              <a href="{$base_url}" class="m-nav__link m-nav__link--icon">
                              <i class="m-nav__link-icon la la-home"></i>
                              </a>
                           </li>
                           <li class="m-nav__separator">-</li>
                           <li class="m-nav__item">
                              <a href="{$base_url}survey-report/{$url1}" class="m-nav__link">
                              <span class="m-nav__link-text">Survey Report</span>
                              </a>
                           </li>
                           <li class="m-nav__separator">-</li>
                           <li class="m-nav__item">
                              <a href="{$base_url}survey-report/{$url1}" class="m-nav__link">
                              <span class="m-nav__link-text">{$url1|ucfirst}</span>
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
                           {foreach $rsSkor as $row}
                           <div class="col-sm-3 cons-value" style="background: #{$row.color}">
                              <h3>{$row.description|ucfirst}</h3>
                              <span>{$row.total}</span>
                           </div>
                           {/foreach}
                           <div style="clear: both;"></div>
                        </div>
                        
                     </div>
                  </div>          
               </div>
            </div>
         </div>
         <!-- end::Body -->

         <!--begin::Page Vendors --> 
         <script src="{$base_url}assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
         <!--end::Page Vendors -->  
         <!--begin::Page Resources --> 
         <script src="{$base_url}assets/app/js/row-callback.js" type="text/javascript"></script>
         <!--end::Page Resources --> 

         
{include file = '_footer.tpl'}