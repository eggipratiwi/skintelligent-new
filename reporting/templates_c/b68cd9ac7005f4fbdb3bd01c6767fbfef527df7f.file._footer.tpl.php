<?php /* Smarty version Smarty-3.1.13, created on 2020-05-04 10:28:58
         compiled from "./templates/_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12403185715eaf8bfa2a8224-16987274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b68cd9ac7005f4fbdb3bd01c6767fbfef527df7f' => 
    array (
      0 => './templates/_footer.tpl',
      1 => 1588560807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12403185715eaf8bfa2a8224-16987274',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'img_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5eaf8bfa2abe83_77850554',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eaf8bfa2abe83_77850554')) {function content_5eaf8bfa2abe83_77850554($_smarty_tpl) {?>         <!-- begin::Footer -->
         <footer class="m-grid__item m-footer ">
            <div class="m-container m-container--fluid m-container--full-height m-page__container">
               <div class="m-footer__wrapper">
                  <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                     <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
                        <span class="m-footer__copyright">
                        2020 &copy; System Reporting by <a href="javascript:;" class="m-link">Ratih Endah Pratiwi</a>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- end::Footer -->   
      </div>
      <!-- end:: Page -->
            
      <!-- begin::Scroll Top -->
      <div id="m_scroll_top" class="m-scroll-top">
         <i class="la la-arrow-up"></i>
      </div>
      <!-- end::Scroll Top -->      <!-- begin::Quick Nav -->
      <ul class="m-nav-sticky" style="margin-top: 30px;">
         <li class="m-nav-sticky__item" data-toggle="m-tooltip" target="_blank" title="Website" data-placement="left">
            <a href="<?php echo $_smarty_tpl->tpl_vars['img_url']->value;?>
" target="_blank"><i class="la la-skyatlas"></i></a>
         </li>
         <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
            <a href="mailto:ratih@allyoung.co.id?subject=ASK: System Reporting Skin Intellegent" target="_blank"><i class="la la-question-circle"></i></a>
         </li>
      </ul>
      <!-- begin::Quick Nav --> 
      <!-- begin::Page Loader -->
      
      <script>
         $(window).on('load', function() {
             $('body').removeClass('m-page--loading');         
         });
      </script>      
       
      <!-- end::Page Loader -->
   </body>
   <!-- end::Body -->
</html><?php }} ?>