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
                        <h3 class="m-subheader__title m-subheader__title--separator">Master Data</h3>
                        <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                           <li class="m-nav__item m-nav__item--home">
                              <a href="{$base_url}" class="m-nav__link m-nav__link--icon">
                              <i class="m-nav__link-icon la la-home"></i>
                              </a>
                           </li>
                           <li class="m-nav__separator">-</li>
                           <li class="m-nav__item">
                              <a href="{$base_url}master-data/concerns" class="m-nav__link">
                              <span class="m-nav__link-text">Master Data</span>
                              </a>
                           </li>
                           <li class="m-nav__separator">-</li>
                           <li class="m-nav__item">
                              <a href="{$base_url}master-data/concerns" class="m-nav__link">
                              <span class="m-nav__link-text">Concerns</span>
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
                                 Concerns
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
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="m-portlet__body">

                        <!--begin: Datatable -->
                        <table class="table table-striped- table-bordered table-hover table-checkable" id="data-concerns">
                           <thead>
                              <tr>
                                 <th>No.</th>
                                 <th>Title</th>
                                 <th>Description</th>
                              </tr>
                           </thead>
                           <tfoot>
                              <tr>
                                 <th>No.</th>
                                 <th>Title</th>
                                 <th>Description</th>
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
                  t = $("#data-concerns").DataTable({
                        columnDefs: [
                            { "orderable": false, "targets": 0 }
                        ],
                        buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", {
                           extend: 'pdfHtml5',
                           orientation: 'landscape',
                           title: "Reporting System | List Of Master Data {/literal}{$url1|replace:'-':' '|ucfirst}{literal}",
                           filename: "Master Data {/literal}{$url1|replace:'-':' '|ucfirst}{literal}",
                           customize: function(doc) {
                             doc.content[1].margin = [ 50, 0, 50, 0 ],  //left, top, right, botton
                             doc.content[1].alignment = 'center'
                           },
                        }],
                        lengthMenu: [
                           [ 10, 25, 50, 100, -1 ],
                           [ '10', '25', '50', '100', 'Show All' ]
                        ],
                        processing: !0,
                        serverSide: !0,
                        ajax: "{/literal}{$base_url}_concerns-data.php?flag={$url2}{literal}",
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