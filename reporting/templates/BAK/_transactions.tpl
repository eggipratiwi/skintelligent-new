{include file = '_header.tpl'} 

         <!--begin::Page Vendors -->
         <link href="{$base_url}assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
         <!--end::Page Vendors -->        

         <!-- begin::Body -->
         <div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop m-page__container m-body"> 
            <!-- BEGIN: Left Aside -->
            <button class="m-aside-left-close m-aside-left-close--skin-light" id="m_aside_left_close_btn"><i class="la la-close"></i></button>
            <div id="m_aside_left" class="m-grid__item m-aside-left ">
               <!-- BEGIN: Aside Menu -->
               <div 
                  id="m_ver_menu" 
                  class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light " 
                  data-menu-vertical="true"
                  m-menu-scrollable="0" m-menu-dropdown-timeout="500"  
                  >
                  <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                     <li class="m-menu__section m-menu__section--first">
                        <h4 class="m-menu__section-text">Filter By</h4>
                        <i class="m-menu__section-icon flaticon-more-v3"></i>
                     </li>
                     <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                        <a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Order Method</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu ">
                           <span class="m-menu__arrow"></span>
                           <ul class="m-menu__subnav">
                              <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" ><span class="m-menu__link"><span class="m-menu__link-text">Website</span></span></li>
                              <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1"><a  href="{$base_url}transactions/{$url1}/order-method/website" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Website</span></a></li>
                              <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1"><a  href="{$base_url}transactions/{$url1}/order-method/whatsapp" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Whatsapp</span></a></li>
                              <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1"><a  href="{$base_url}transactions/{$url1}/order-method/blibli" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Blibli</span></a></li>
                              <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1"><a  href="{$base_url}transactions/{$url1}/order-method/shopee" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Shopee</span></a></li>
                           </ul>
                        </div>
                     </li>
                     <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                        <a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Payment Method</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu ">
                           <span class="m-menu__arrow"></span>
                           <ul class="m-menu__subnav">
                              <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1"><a  href="{$base_url}transactions/{$url1}/payment-method/transfer" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Transfer</span></a></li>
                              <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1"><a  href="{$base_url}transactions/{$url1}/payment-method/credit_card" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Credit Card</span></a></li>
                              <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1"><a  href="{$base_url}transactions/{$url1}/payment-method/gopay" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Gopay</span></a></li>
                           </ul>
                        </div>
                     </li>
                     <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                        <a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Brands</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu ">
                           <span class="m-menu__arrow"></span>
                           <ul class="m-menu__subnav">
                              <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1"><a  href="{$base_url}transactions/{$url1}/brands/bugaboo" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Bugaboo</span></a></li>
                              <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1"><a  href="{$base_url}transactions/{$url1}/brands/cybex" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Cybex</span></a></li>
                              <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1"><a  href="{$base_url}transactions/{$url1}/brands/cocolatte" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Cocolatte</span></a></li>
                              <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1"><a  href="{$base_url}transactions/{$url1}/brands/Birds-N-Bees" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Birds N Bees</span></a></li>
                              <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1"><a  href="{$base_url}transactions/{$url1}/brands/all-brand" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text"><b>All Brands</b></span></a></li>
                           </ul>
                        </div>
                     </li>
                  </ul>
               </div>
               <!-- END: Aside Menu -->
            </div>
            <!-- END: Left Aside -->                     
            <div class="m-grid__item m-grid__item--fluid m-wrapper">
               <!-- BEGIN: Subheader -->
               <div class="m-subheader ">
                  <div class="d-flex align-items-center">
                     <div class="mr-auto">
                        <h3 class="m-subheader__title m-subheader__title--separator">Transaction</h3>
                        <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                           <li class="m-nav__item m-nav__item--home">
                              <a href="{$base_url}" class="m-nav__link m-nav__link--icon">
                              <i class="m-nav__link-icon la la-home"></i>
                              </a>
                           </li>
                           <li class="m-nav__separator">-</li>
                           <li class="m-nav__item">
                              <a href="{$base_url}transactions/orders" class="m-nav__link">
                              <span class="m-nav__link-text">Transaction</span>
                              </a>
                           </li>
                           <li class="m-nav__separator">-</li>
                           <li class="m-nav__item">
                              <a href="" class="m-nav__link">
                              <span class="m-nav__link-text">{$url1|capitalize}</span>
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
                                 {$url1|capitalize|replace:"-":" "}
                              </h3>
                           </div>
                        </div>
                        <div class="m-portlet__head-tools">
                           <ul class="m-portlet__nav">
                              <li class="m-portlet__nav-item">
                                 <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                    <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                       <i class="la la-ellipsis-h m--font-brand"></i>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                       <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                       <div class="m-dropdown__inner">
                                          <div class="m-dropdown__body">
                                             <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                   <li class="m-nav__section m-nav__section--first">
                                                      <span class="m-nav__section-text">Quick Actions</span>
                                                   </li>
                                                   <li class="m-nav__item">
                                                      <a href="#" class="m-nav__link" id="export_print">
                                                         <i class="m-nav__link-icon la la-print"></i>
                                                         <span class="m-nav__link-text">Print</span>
                                                      </a>
                                                   </li>
                                                   <li class="m-nav__item">
                                                      <a href="#" class="m-nav__link" id="export_copy">
                                                         <i class="m-nav__link-icon la la-copy"></i>
                                                         <span class="m-nav__link-text">Copy</span>
                                                      </a>
                                                   </li>
                                                   <li class="m-nav__item">
                                                      <a href="#" class="m-nav__link" id="export_excel">
                                                         <i class="m-nav__link-icon la la-file-excel-o"></i>
                                                         <span class="m-nav__link-text">Excel</span>
                                                      </a>
                                                   </li>
                                                   <li class="m-nav__item">
                                                      <a href="#" class="m-nav__link" id="export_csv">
                                                         <i class="m-nav__link-icon la la-file-text-o"></i>
                                                         <span class="m-nav__link-text">CSV</span>
                                                      </a>
                                                   </li>
                                                   <li class="m-nav__item">
                                                      <a href="#" class="m-nav__link" id="export_pdf">
                                                         <i class="m-nav__link-icon la la-file-pdf-o"></i>
                                                         <span class="m-nav__link-text">PDF</span>
                                                      </a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>

                                    <form action="" method="POST" name="frm_export" id="frm_export" target="_blank">
                                    	<input type="hidden" name="file_export" id="file_export">
                                    </form>

                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="m-portlet__body">

                        <!--begin: Datatable -->
                        <table class="table table-striped- table-bordered table-hover table-checkable" id="data-transaction">
                           <thead>
                              <tr>
                                 <th>No</th>
                                 <th>Date</th>
                                 <th>No Invoice</th>
                                 {if $url2 == 'brands'}
                                 	<th>Order Method</th>
                                 	<th>Barcode</th>
                                 	<th>Product Name</th>
                                 	<th>Qty</th>
                                 	<th>Price</th>
                                 	<th>Brand</th>
                                 {else}
                                 	<th>Customer Name</th>
                                 	<th>Payment Method</th>
	                                <th>Shipping Method</th>
	                                <th>Total Payment</th>
                                 {/if}
                              </tr>
                           </thead>
                           <tfoot>
                              <tr>
                                 <th>No</th>
                                 <th>Date</th>
                                 <th>No Invoice</th>
                                 {if $url2 == 'brands'}
                                 	<th>Order Method</th>
                                 	<th>Barcode</th>
                                 	<th>Product Name</th>
                                 	<th>Qty</th>
                                 	<th>Price</th>
                                 	<th>Brand</th>
                                 {else}
                                 	<th>Customer Name</th>
                                 	<th>Payment Method</th>
	                                <th>Shipping Method</th>
	                                <th>Total Payment</th>
                                 {/if}
                              </tr>
                           </tfoot>
                        </table>
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
         {literal}
         <script type="text/javascript">
            var DatatablesExtensionButtons = {
             init: function() {
                 var t;
                  t = $("#data-transaction").DataTable({
                        columnDefs: [
                            { "orderable": false, "targets": 0 }
                        ],
                        buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", {
                           extend: 'pdfHtml5',
                           orientation: 'potrait',
                           title: "Birds And Bees | List Of Transactions {/literal}{$url1|replace:'-':' '|capitalize} {if $url3 != ''}{$url3|replace:'-':' '|capitalize}{/if}{literal}",
                           filename: "Birdsnbees Transactions {/literal}{$url1|replace:'-':' '|capitalize} {if $url3 != ''}{$url3|replace:'-':' '|capitalize}{/if}{literal}",
                           customize: function(doc) {
                             doc.content[1].margin = [ 0, 0, 0, 0 ],  //left, top, right, botton
                             doc.content[1].alignment = 'center'
                           },
                        }],
                        lengthMenu: [
                           [ 10, 25, 50, 100, -1 ],
                           [ '10', '25', '50', '100', 'Show All' ]
                        ],
                        processing: !0,
                        serverSide: !0,
                        ajax: "{/literal}{$base_url}_transactions-data.php?url1={$url1}{if $url2 != ''}&url2={$url2}&url3={$url3}{/if}{literal}",
                    }), $("#export_print").on("click", function(e) {
                        // t.one('draw', function(){
                           e.preventDefault(), t.button(0).trigger();
                        // }).page.len(100).draw();
                    }), $("#export_copy").on("click", function(e) {
                        // t.one('draw', function(){
                           e.preventDefault(), t.button(1).trigger();
                        // }).page.len(100).draw();
                    }), $("#export_excel").on("click", function(e) {
                        // t.one('draw', function(){
                           e.preventDefault(), t.button(2).trigger();
                        // }).page.len(100).draw();
                    }), $("#export_csv").on("click", function(e) {
                        // t.one('draw', function(){
                           e.preventDefault(), t.button(3).trigger();
                        // }).page.len(100).draw();
                    }), $("#export_pdf").on("click", function(e) {
                        // t.one('draw', function(){
                           e.preventDefault(), t.button(4).trigger();
                        // }).page.len(100).draw();
                    })
                }
            };
            $(document).ready(function() {
                DatatablesExtensionButtons.init()
            });
         </script>
         {/literal}

{include file = '_footer.tpl'}