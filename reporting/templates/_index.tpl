{include file = '_header.tpl'}         

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
                                       <span><br>{$correspondents_count}</span>           
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
                                       {for $i=1 to 4} 
                                       <div id="m_personal_income_quater_{$i}" class="tab-pane {if $i == 2}active{else}fade{/if}">
                                          <div class="row  align-items-center">
                                             <div class="col">
                                                <div id="m_chart_personal_income_quater_{$i}" class="m-widget27__chart" style="height: 160px">
                                                   <div class="m-widget27__stat">{$quarterjml{$i}}</div>
                                                </div>
                                             </div>
                                             <div class="col">
                                                <div class="m-widget27__legends quater_{$i}">
                                                   <div class="m-widget27__legend">
                                                      <span class="m-widget27__legend-bullet m--bg-success"></span>
                                                      <span class="m-widget27__legend-text processing" data-processing="{$finish{$i}}">{if $finish{$i} == ''}0{else}{$finish{$i}}{/if}% Finish</span>
                                                   </div>
                                                   <div class="m-widget27__legend">
                                                      <span class="m-widget27__legend-bullet m--bg-danger"></span>
                                                      <span class="m-widget27__legend-text expired" data-expired="{$pending{$i}}">{if $pending{$i} == ''}0{else}{$pending{$i}}{/if}% Pending</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    {/for}
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
                                                {$a = 1}
                                                {foreach $rsUpdateMonth as $row}
                                                <tr>
                                                   <td>
                                                      {$a++}
                                                   </td>
                                                   <td>
                                                      <span class="m-widget11__title">{$row.name}</span>
                                                      {*<a href="{$base_url}products/sold-product/platform/{$row.order_method|lower|replace:' ':'-'}/last-month"><span class="m-widget11__sub">View detail sold products</span></a>*}
                                                   </td>
                                                   <td>{$row.age}</td>
                                                   <td>{$row.profession}</td>
                                                   <td>{$row.nama_kota|lower|ucfirst}</td>
                                                   <td class="m--align-right m--font-brand">{$row.create_date|date_format:"%d %b"}</td>
                                                </tr>
                                                {/foreach}
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
                                                {$a = 1}
                                                {foreach $rsUpdateAll as $row}
                                                <tr>
                                                   <td>
                                                      {$a++}
                                                   </td>
                                                   <td>
                                                      <span class="m-widget11__title">{$row.name}</span>
                                                      {*<a href="{$base_url}products/sold-product/platform/{$row.order_method|lower|replace:' ':'-'}/last-month"><span class="m-widget11__sub">View detail sold products</span></a>*}
                                                   </td>
                                                   <td>{$row.age}</td>
                                                   <td>{$row.profession}</td>
                                                   <td>{$row.nama_kota|lower|ucfirst}</td>
                                                   <td class="m--align-right m--font-brand">{$row.create_date|date_format:"%d %b"}</td>
                                                </tr>
                                                {/foreach}
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
                                          {$tr_pending}
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
                                          {$jml_all}
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
                                          {$tr_finish}
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
                                          {$jml_finish}
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
                                 {foreach $rsTopConcern as $row}
                                 <div class="m-widget4__item">
                                    <div class="m-widget4__info">
                                       <span class="m-widget4__title">
                                       {$row.description}  
                                       </span><br> 
                                       <span class="m-widget4__sub">
                                       <span style="background: #{$row.color};padding: 0 20px; font-size: 6px;">&nbsp;</span>
                                       <br>
                                       Concern of {$row.title}
                                       </span>      
                                    </div>
                                    <span class="m-widget4__ext">
                                    <span class="m-widget4__number m--font-brand">{$row.total}</span>
                                    </span>  
                                 </div>
                                 {/foreach}
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
                                       {$i = 4}
                                       {foreach $rsSummaryMonth as $row}
                                          {if $i % 4 == 0}
                                             <div class="m-widget4__item">
                                                <div class="m-widget4__info">
                                                   <span class="m-widget4__title">
                                                   #{$row.name}  
                                                   </span><br> 
                                                   <span class="m-widget4__sub">
                                          {/if}

                                                   {$i=$i-1}

                                                   {$row.title} <b>{$row.skor|number_format:1:",":"."}</b><br>

                                          {if $i == 0}        
                                                   </span>      
                                                </div>
                                                <span class="m-widget4__ext">
                                                <span class="m-widget4__number m--font-brand">{$row.create_date|date_format:"%d %b"}</span>
                                                </span>  
                                             </div>

                                             {$i = 4}
                                          {/if}
                                          
                                       {/foreach}
                                    </div>
                                 </div>
                                 <div class="tab-pane" id="m_widget4_tab2_content">
                                    <div class="m-widget4 m-widget4--chart-bottom m--margin-top-10" style="min-height: 450px">
                                       {$i = 4}
                                       {foreach $rsSummaryAll as $row}
                                          {if $i % 4 == 0}
                                             <div class="m-widget4__item">
                                                <div class="m-widget4__info">
                                                   <span class="m-widget4__title">
                                                   #{$row.name}  
                                                   </span><br> 
                                                   <span class="m-widget4__sub">
                                          {/if}

                                                   {$i=$i-1}

                                                   {$row.title} <b>{$row.skor|number_format:1:",":"."}</b><br>

                                          {if $i == 0}        
                                                   </span>      
                                                </div>
                                                <span class="m-widget4__ext">
                                                <span class="m-widget4__number m--font-brand">{$row.create_date|date_format:"%d %b"}</span>
                                                </span>  
                                             </div>

                                             {$i = 4}
                                          {/if}
                                          
                                       {/foreach}
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
         <script src="{$base_url}assets/app/js/dashboard.js" type="text/javascript"></script>
         <!--end::Page Snippets -->  

{include file = '_footer.tpl'}