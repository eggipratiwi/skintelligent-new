<?php /* Smarty version Smarty-3.1.13, created on 2020-06-17 11:29:59
         compiled from "./templates/_correspondent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13520491535eaf8c623e6a59-38191489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f78b28f3d24bf8a521bd881cd95ff784e7297c40' => 
    array (
      0 => './templates/_correspondent.tpl',
      1 => 1592368199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13520491535eaf8c623e6a59-38191489',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5eaf8c6246a148_42222229',
  'variables' => 
  array (
    'base_url' => 0,
    'url1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eaf8c6246a148_42222229')) {function content_5eaf8c6246a148_42222229($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/vhosts/skintelligent.id/httpdocs/reporting/lib/smarty/plugins/modifier.replace.php';
?><?php echo $_smarty_tpl->getSubTemplate ('_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
         

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
                        <h3 class="m-subheader__title m-subheader__title--separator">Correspondent</h3>
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
correspondent/<?php echo $_smarty_tpl->tpl_vars['url1']->value;?>
" class="m-nav__link">
                              <span class="m-nav__link-text">Correspondent</span>
                              </a>
                           </li>
                           <li class="m-nav__separator">-</li>
                           <li class="m-nav__item">
                              <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
correspondent/<?php echo $_smarty_tpl->tpl_vars['url1']->value;?>
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
                                 Correspondent <?php echo ucfirst($_smarty_tpl->tpl_vars['url1']->value);?>

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
                        <table class="table table-striped- table-bordered table-hover table-checkable" id="data-correspondent">
                           <thead>
                              <tr>
                                 <th>No.</th>
                                 <th>Name</th>
                                 <th>Age</th>
                                 <th>Gender</th>
                                 <th>Phone Number</th>
                                 <th>Email</th>
                                 <th>Profession</th>
                                 <th>Province</th>
                                 <th>City</th>
                                 <th>Kecamatan</th>
                              </tr>
                           </thead>
                           <tfoot>
                              <tr>
                                 <th>No.</th>
                                 <th>Name</th>
                                 <th>Age</th>
                                 <th>Gender</th>
                                 <th>Phone Number</th>
                                 <th>Email</th>
                                 <th>Profession</th>
                                 <th>Province</th>
                                 <th>City</th>
                                 <th>Kecamatan</th>
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
         <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
         <!--end::Page Vendors -->  
         <!--begin::Page Resources --> 
         <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/app/js/row-callback.js" type="text/javascript"></script>
         <!--end::Page Resources --> 
         
         <script type="text/javascript">
            var DatatablesExtensionButtons = {
             init: function() {
                 var t;
                  t = $("#data-correspondent").DataTable({
                        columnDefs: [
                            { "orderable": false, "targets": 0 }
                        ],
                        buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", {
                           extend: 'pdfHtml5',
                           orientation: 'landscape',
                           title: "Reporting System | List Of Master Data <?php echo ucfirst(smarty_modifier_replace($_smarty_tpl->tpl_vars['url1']->value,'-',' '));?>
",
                           filename: "Master Data <?php echo ucfirst(smarty_modifier_replace($_smarty_tpl->tpl_vars['url1']->value,'-',' '));?>
",
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
                        ajax: "<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
_correspondent-data.php?flag=<?php echo $_smarty_tpl->tpl_vars['url1']->value;?>
",
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
         
         
<?php echo $_smarty_tpl->getSubTemplate ('_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>