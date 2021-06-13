<?php /* Smarty version Smarty-3.1.13, created on 2020-05-14 05:12:05
         compiled from "./templates/_404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1919167385ebc70b5a67ee5-51244031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aeaadf862a26ad5b6858ce88ead7e1a71f6699c1' => 
    array (
      0 => './templates/_404.tpl',
      1 => 1588560866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1919167385ebc70b5a67ee5-51244031',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ebc70b5ae2016_39958149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ebc70b5ae2016_39958149')) {function content_5ebc70b5ae2016_39958149($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<body>
    <div class="wrapper">

	    <div id="wizard">
            <!-- SECTION 1 -->
            <section>
                <div class="inner">
                    <div class="image-holder">
                        <img src="images/form-wizard-1.jpg" alt="">
                    </div>
                    <div class="form-content">
                        <!-- PAGE 404 -->
						<div class="wrapper404" style="text-align: center;line-height: 30px; padding: 170px 0 80px; ">
							<h1 style="color: #ff9900;font-size: 42px;font-weight: 900;">UH OH! :(</h1><br>
							<p>The page you are looking for does not exist. Return to the home page</p>
							<a class="btn btn-white" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
home" >Return to home page</a>
						</div>
                    </div>
                </div>
            </section>

	    </div>

	</div>

    <!-- JQUERY -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jquery-3.3.1.min.js"></script>

    <!-- JQUERY STEP -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jquery.steps.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/main.js"></script>
    <!-- Template created and distributed by Colorlib -->
</body>

</html>
		<?php }} ?>