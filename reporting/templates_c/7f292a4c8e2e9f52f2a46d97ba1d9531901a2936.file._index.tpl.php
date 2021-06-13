<?php /* Smarty version Smarty-3.1.13, created on 2020-06-17 10:44:44
         compiled from "./templates/_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11853402615eaf8bfa1350f5-28024988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f292a4c8e2e9f52f2a46d97ba1d9531901a2936' => 
    array (
      0 => './templates/_index.tpl',
      1 => 1592365482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11853402615eaf8bfa1350f5-28024988',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5eaf8bfa1ffba3_21016318',
  'variables' => 
  array (
    'correspondents_count' => 0,
    'i' => 0,
    'rsUpdateMonth' => 0,
    'a' => 0,
    'row' => 0,
    'rsUpdateAll' => 0,
    'tr_pending' => 0,
    'jml_all' => 0,
    'tr_finish' => 0,
    'jml_finish' => 0,
    'rsTopConcern' => 0,
    'rsSummaryMonth' => 0,
    'rsSummaryAll' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eaf8bfa1ffba3_21016318')) {function content_5eaf8bfa1ffba3_21016318($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/skintelligent.id/httpdocs/reporting/lib/smarty/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
         

         <!-- begin::Body -->
         <div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop m-page__container m-body">
            <div class="m-grid__item m-grid__item--fluid m-wrapper">
               <!-- BEGIN: Subheader -->
               <div class="m-subheader ">
                  <div class="d-flex align-items-center">
                     <div class="mr-auto">
                        <h3 class="m-subheader__title m-subheader__title--separator">Dashboard</h3>
                        <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                           <li class="m-nav__item m-nav__item--home">
                              <a href="" class="m-nav__link m-nav__link--icon">
                              <i class="m-nav__link-icon la la-home"></i>
                              </a>
                           </li>
                           <li class="m-nav__separator">-</li>
                           <li class="m-nav__item">
                              <a href="" class="m-nav__link">
                              <span class="m-nav__link-text">Dashboard</span>
                              </a>
                           </li>
                           <li class="m-nav__separator">-</li>
                           <li class="m-nav__item">
                              <a href="" class="m-nav__link">
                              <span class="m-nav__link-text">Summary</span>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!-- END: Subheader -->           
               <div class="m-content">
                  <!--Begin::Section-->
                  <div class="row">
                     <div class="col-xl-4">
                        <!--begin:: Widgets/Blog-->
                        <div class="m-portlet m-portlet--head-overlay m-portlet--full-height  m-portlet--rounded m-portlet--rounded-force">
                           <div class="m-portlet__head m-portlet__head--fit-">
                              <div class="m-portlet__head-caption">
                                 <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text m--font-light">
                                       Correspondents Count
                                    </h3>
                                 </div>
                              </div>
                           </div>
                           <div class="m-portlet__body">
                              <div class="m-widget27 m-portlet-fit--sides">
                                 <div class="m-widget27__pic">
                                    <img src="assets/app/media/img//bg/bg-4.jpg" alt=""> 
                                    <h3 class="m-widget27__title m--font-light">              
                                       <span><br><?php echo $_smarty_tpl->tpl_vars['correspondents_count']->value;?>
</span>           
                                    </h3>
                                    <div class="m-widget27__btn">
                                       <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--bolder">Inclusive All Survey</button>    
                                    </div>
                                 </div>
                                 <div class="m-widget27__container">
                                    <!-- begin::Nav pills -->              
                                    <ul class="m-widget27__nav-items nav nav-pills nav-fill" role="tablist">
                                       <li class="m-widget27__nav-item nav-item">
                                          <a class="nav-link" data-toggle="pill" href="#m_personal_income_quater_4">Trimester 4</a> 
                                       </li>
                                       <li class="m-widget27__nav-item nav-item">
                                          <a class="nav-link" data-toggle="pill" href="#m_personal_income_quater_3">Trimester 3</a>    
                                       </li>
                                       <li class="m-widget27__nav-item nav-item">
                                          <a class="nav-link active" data-toggle="pill" href="#m_personal_income_quater_2">Trimester 2</a>       
                                       </li>
                                       <li class="m-widget27__nav-item nav-item">
                                          <a class="nav-link" data-toggle="pill" href="#m_personal_income_quater_1">Trimester 1</a>
                                       </li>
                                    </ul>
                                    <!-- end::Nav pills -->        
                                    <!-- begin::Tab Content -->
                                    <div class="m-widget27__tab tab-content m-widget27--no-padding">
                                       <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 4+1 - (1) : 1-(4)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?> 
                                       <div id="m_personal_income_quater_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['i']->value==2){?>active<?php }else{ ?>fade<?php }?>">
                                          <div class="row  align-items-center">
                                             <div class="col">
                                                <div id="m_chart_personal_income_quater_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="m-widget27__chart" style="height: 160px">
                                                   <div class="m-widget27__stat"><?php echo $_smarty_tpl->tpl_vars['quarterjml'.($_smarty_tpl->tpl_vars['i']->value)]->value;?>
</div>
                                                </div>
                                             </div>
                                             <div class="col">
                                                <div class="m-widget27__legends quater_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                                   <div class="m-widget27__legend">
                                                      <span class="m-widget27__legend-bullet m--bg-success"></span>
                                                      <span class="m-widget27__legend-text processing" data-processing="<?php echo $_smarty_tpl->tpl_vars['finish'.($_smarty_tpl->tpl_vars['i']->value)]->value;?>
"><?php if ($_smarty_tpl->tpl_vars['finish'.($_smarty_tpl->tpl_vars['i']->value)]->value==''){?>0<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['finish'.($_smarty_tpl->tpl_vars['i']->value)]->value;?>
<?php }?>% Finish</span>
                                                   </div>
                                                   <div class="m-widget27__legend">
                                                      <span class="m-widget27__legend-bullet m--bg-danger"></span>
                                                      <span class="m-widget27__legend-text expired" data-expired="<?php echo $_smarty_tpl->tpl_vars['pending'.($_smarty_tpl->tpl_vars['i']->value)]->value;?>
"><?php if ($_smarty_tpl->tpl_vars['pending'.($_smarty_tpl->tpl_vars['i']->value)]->value==''){?>0<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['pending'.($_smarty_tpl->tpl_vars['i']->value)]->value;?>
<?php }?>% Pending</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    <?php }} ?>
                                    </div>
                                    <!-- end::Tab Content -->
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--end:: Widgets/Blog-->
                     </div>
                     <div class="col-xl-8">
                        <!--begin:: Widgets/Application Sales-->
                        <div class="m-portlet m-portlet--full-height  m-portlet--rounded">
                           <div class="m-portlet__head">
                              <div class="m-portlet__head-caption">
                                 <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                       Survey Update
                                    </h3>
                                 </div>
                              </div>
                              <div class="m-portlet__head-tools">
                                 <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                                    <li class="nav-item m-tabs__item">
                                       <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget11_tab1_content" role="tab">
                                       Last Month
                                       </a>
                                    </li>
                                    <li class="nav-item m-tabs__item">
                                       <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget11_tab2_content" role="tab">
                                       All Time
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="m-portlet__body">
                              <div class="tab-content">
                                 <div class="tab-pane active" id="m_widget11_tab1_content">
                                    <!--begin::Widget 11--> 
                                    <div class="m-widget11">
                                       <div class="table-responsive">
                                          <!--begin::Table-->                        
                                          <table class="table">
                                             <!--begin::Thead-->
                                             <thead>
                                                <tr>
                                                   <td class="m-widget11__label">No</td>
                                                   <td class="m-widget11__app">Name</td>
                                                   <td class="m-widget11__sales">Age</td>
                                                   <td class="m-widget11__change">Profesi</td>
                                                   <td class="m-widget11__price">City</td>
                                                   <td class="m-widget11__total m--align-right">Date</td>
                                                </tr>
                                             </thead>
                                             <!--end::Thead-->
                                             <!--begin::Tbody-->
                                             <tbody>
                                                <?php $_smarty_tpl->tpl_vars['a'] = new Smarty_variable(1, null, 0);?>
                                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsUpdateMonth']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                                <tr>
                                                   <td>
                                                      <?php echo $_smarty_tpl->tpl_vars['a']->value++;?>

                                                   </td>
                                                   <td>
                                                      <span class="m-widget11__title"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</span>
                                                      
                                                   </td>
                                                   <td><?php echo $_smarty_tpl->tpl_vars['row']->value['age'];?>
</td>
                                                   <td><?php echo $_smarty_tpl->tpl_vars['row']->value['profession'];?>
</td>
                                                   <td><?php echo ucfirst(mb_strtolower($_smarty_tpl->tpl_vars['row']->value['nama_kota'], 'UTF-8'));?>
</td>
                                                   <td class="m--align-right m--font-brand"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['create_date'],"%d %b");?>
</td>
                                                </tr>
                                                <?php } ?>
                                             </tbody>
                                             <!--end::Tbody-->                                 
                                          </table>
                                          <!--end::Table-->
                                       </div>
                                    </div>
                                    <!--end::Widget 11-->                               
                                 </div>
                                 <div class="tab-pane" id="m_widget11_tab2_content">
                                    <!--begin::Widget 11--> 
                                    <div class="m-widget11">
                                       <div class="table-responsive">
                                          <!--begin::Table-->                        
                                          <table class="table">
                                             <!--begin::Thead-->
                                             <thead>
                                                <tr>
                                                   <td class="m-widget11__label">No</td>
                                                   <td class="m-widget11__app">Name</td>
                                                   <td class="m-widget11__sales">Age</td>
                                                   <td class="m-widget11__change">Profesi</td>
                                                   <td class="m-widget11__price">City</td>
                                                   <td class="m-widget11__total m--align-right">Date</td>
                                                </tr>
                                             </thead>
                                             <!--end::Thead-->
                                             <!--begin::Tbody-->
                                             <tbody>
                                                <?php $_smarty_tpl->tpl_vars['a'] = new Smarty_variable(1, null, 0);?>
                                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsUpdateAll']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                                <tr>
                                                   <td>
                                                      <?php echo $_smarty_tpl->tpl_vars['a']->value++;?>

                                                   </td>
                                                   <td>
                                                      <span class="m-widget11__title"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</span>
                                                      
                                                   </td>
                                                   <td><?php echo $_smarty_tpl->tpl_vars['row']->value['age'];?>
</td>
                                                   <td><?php echo $_smarty_tpl->tpl_vars['row']->value['profession'];?>
</td>
                                                   <td><?php echo ucfirst(mb_strtolower($_smarty_tpl->tpl_vars['row']->value['nama_kota'], 'UTF-8'));?>
</td>
                                                   <td class="m--align-right m--font-brand"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['create_date'],"%d %b");?>
</td>
                                                </tr>
                                                <?php } ?>
                                             </tbody>
                                             <!--end::Tbody-->                                 
                                          </table>
                                          <!--end::Table-->
                                       </div>
                                    </div>
                                    <!--end::Widget 11-->       
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--end:: Widgets/Application Sales--> 
                     </div>
                  </div>
                  <!--End::Section-->
                  <!--Begin::Section-->
                  <div class="row">
                     <div class="col-xl-4">
                        <!--begin:: Widgets/Quick Stats-->
                        <div class="row m-row--full-height">
                           <div class="col-sm-12 col-md-12 col-lg-6">
                              <div class="m-portlet m-portlet--half-height m-portlet--border-bottom-danger  m-portlet--rounded">
                                 <div class="m-portlet__body">
                                    <div class="m-widget26">
                                       <div class="m-widget26__number">
                                          <?php echo $_smarty_tpl->tpl_vars['tr_pending']->value;?>

                                          <small><b>Survey Pending</b> Current Trimester</small>
                                       </div>
                                       <div class="m-widget26__chart" style="height:90px; width: 220px;">
                                          <canvas id="m_chart_quick_stats_2"></canvas>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="m--space-30"></div>
                              <div class="m-portlet m-portlet--half-height m-portlet--border-bottom-brand  m-portlet--rounded">
                                 <div class="m-portlet__body">
                                    <div class="m-widget26">
                                       <div class="m-widget26__number">
                                          <?php echo $_smarty_tpl->tpl_vars['jml_all']->value;?>

                                          <small>All Data</small>
                                       </div>
                                       <div class="m-widget26__chart" style="height:90px; width: 220px;">
                                          <canvas id="m_chart_quick_stats_1"></canvas>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-12 col-md-12 col-lg-6">
                              <div class="m-portlet m-portlet--half-height m-portlet--border-bottom-success  m-portlet--rounded">
                                 <div class="m-portlet__body">
                                    <div class="m-widget26">
                                       <div class="m-widget26__number">
                                          <?php echo $_smarty_tpl->tpl_vars['tr_finish']->value;?>

                                          <small><b>Survey Finish</b> Current Trimester</small>
                                       </div>
                                       <div class="m-widget26__chart" style="height:90px; width: 220px;">
                                          <canvas id="m_chart_quick_stats_3"></canvas>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="m--space-30"></div>
                              <div class="m-portlet m-portlet--half-height m-portlet--border-bottom-accent  m-portlet--rounded">
                                 <div class="m-portlet__body">
                                    <div class="m-widget26">
                                       <div class="m-widget26__number">
                                          <?php echo $_smarty_tpl->tpl_vars['jml_finish']->value;?>

                                          <small>All Finish</small>
                                       </div>
                                       <div class="m-widget26__chart" style="height:90px; width: 220px;">
                                          <canvas id="m_chart_quick_stats_4"></canvas>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--end:: Widgets/Quick Stats-->  
                     </div>
                     <div class="col-xl-4">
                        <!--begin:: Widgets/Top Products-->
                        <div class="m-portlet m-portlet--full-height m-portlet--fit  m-portlet--rounded">
                           <div class="m-portlet__head">
                              <div class="m-portlet__head-caption">
                                 <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                       Top Concern
                                    </h3>
                                 </div>
                              </div>
                           </div>
                           <div class="m-portlet__body">
                              <!--begin::Widget5-->
                              <div class="m-widget4 m-widget4--chart-bottom" style="min-height: 480px">
                                 <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsTopConcern']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                 <div class="m-widget4__item">
                                    <div class="m-widget4__info">
                                       <span class="m-widget4__title">
                                       <?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
  
                                       </span><br> 
                                       <span class="m-widget4__sub">
                                       <span style="background: #<?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
;padding: 0 20px; font-size: 6px;">&nbsp;</span>
                                       <br>
                                       Concern of <?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>

                                       </span>      
                                    </div>
                                    <span class="m-widget4__ext">
                                    <span class="m-widget4__number m--font-brand"><?php echo $_smarty_tpl->tpl_vars['row']->value['total'];?>
</span>
                                    </span>  
                                 </div>
                                 <?php } ?>
                                 <div class="m-widget4__chart m-portlet-fit--sides m--margin-top-20" style="height:200px;">
                                    <canvas id="m_chart_trends_stats_2"></canvas>
                                 </div>
                              </div>
                              <!--end::Widget 5-->           
                           </div>
                        </div>
                        <!--end:: Widgets/Top Products-->  
                     </div>
                     <div class="col-xl-4">
                        <!--begin:: Widgets/Finance Summary-->
                        <div class="m-portlet m-portlet--full-height m-portlet--fit  m-portlet--rounded">
                           <div class="m-portlet__head">
                              <div class="m-portlet__head-caption">
                                 <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                       Survey Summary 
                                    </h3>
                                 </div>
                              </div>
                              <div class="m-portlet__head-tools">
                                 <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                                    <li class="nav-item m-tabs__item">
                                       <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget4_tab1_content" role="tab">
                                       Month
                                       </a>
                                    </li>
                                    <li class="nav-item m-tabs__item">
                                       <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content" role="tab">
                                       All Time
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="m-portlet__body">
                              <div class="tab-content">
                                 <div class="tab-pane active" id="m_widget4_tab1_content">
                                    <div class="m-widget4 m-widget4--chart-bottom m--margin-top-10" style="min-height: 450px">
                                       <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(4, null, 0);?>
                                       <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsSummaryMonth']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                          <?php if ($_smarty_tpl->tpl_vars['i']->value%4==0){?>
                                             <div class="m-widget4__item">
                                                <div class="m-widget4__info">
                                                   <span class="m-widget4__title">
                                                   #<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
  
                                                   </span><br> 
                                                   <span class="m-widget4__sub">
                                          <?php }?>

                                                   <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value-1, null, 0);?>

                                                   <?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
 <b><?php echo number_format($_smarty_tpl->tpl_vars['row']->value['skor'],1,",",".");?>
</b><br>

                                          <?php if ($_smarty_tpl->tpl_vars['i']->value==0){?>        
                                                   </span>      
                                                </div>
                                                <span class="m-widget4__ext">
                                                <span class="m-widget4__number m--font-brand"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['create_date'],"%d %b");?>
</span>
                                                </span>  
                                             </div>

                                             <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(4, null, 0);?>
                                          <?php }?>
                                          
                                       <?php } ?>
                                    </div>
                                 </div>
                                 <div class="tab-pane" id="m_widget4_tab2_content">
                                    <div class="m-widget4 m-widget4--chart-bottom m--margin-top-10" style="min-height: 450px">
                                       <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(4, null, 0);?>
                                       <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsSummaryAll']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                          <?php if ($_smarty_tpl->tpl_vars['i']->value%4==0){?>
                                             <div class="m-widget4__item">
                                                <div class="m-widget4__info">
                                                   <span class="m-widget4__title">
                                                   #<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
  
                                                   </span><br> 
                                                   <span class="m-widget4__sub">
                                          <?php }?>

                                                   <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value-1, null, 0);?>

                                                   <?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
 <b><?php echo number_format($_smarty_tpl->tpl_vars['row']->value['skor'],1,",",".");?>
</b><br>

                                          <?php if ($_smarty_tpl->tpl_vars['i']->value==0){?>        
                                                   </span>      
                                                </div>
                                                <span class="m-widget4__ext">
                                                <span class="m-widget4__number m--font-brand"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['create_date'],"%d %b");?>
</span>
                                                </span>  
                                             </div>

                                             <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(4, null, 0);?>
                                          <?php }?>
                                          
                                       <?php } ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--end:: Widgets/Finance Summary-->  
                     </div>
                  </div>
                  <!--End::Section-->
               </div>
            </div>
         </div>
         <!-- end::Body -->

         <!--begin::Page Snippets --> 
         <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/app/js/dashboard.js" type="text/javascript"></script>
         <!--end::Page Snippets -->  

<?php echo $_smarty_tpl->getSubTemplate ('_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>