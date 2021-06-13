<?php /* Smarty version Smarty-3.1.13, created on 2020-07-01 17:30:57
         compiled from "./templates/_result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13097891015ebc769d01ef33-48897529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb764e68818fe5069bd1d6942644256bc2e922e5' => 
    array (
      0 => './templates/_result.tpl',
      1 => 1593599455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13097891015ebc769d01ef33-48897529',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ebc769d5300a9_41676250',
  'variables' => 
  array (
    'base_url' => 0,
    'firstname' => 0,
    'rsSurvey' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ebc769d5300a9_41676250')) {function content_5ebc769d5300a9_41676250($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<body>

    
    <style type="text/css">
        @media (max-width: 767px) {
            .wrapper {
                height: auto !important;
                width: 90%;
                margin: auto; 
            }
        }
    </style>
    
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    

    <div id="preloader"></div>

    <div class="wrapper" style="background: white;">

        <div id="result">
            <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/logo.png" width="140px"><br>
            <div id="content">
                <h1>Hi <?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
, Terima Kasih!</h1><br>
                <h2>kamu telah menyelesaikan survey mengenai jenis kulitmu.<br>
                Hasil survey sudah kami rangkumkan untukmu :)</h2>
                <div class="row">
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsSurvey']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                    <div class="box">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/emoji/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['row']->value['description'], 'UTF-8');?>
.gif">
                        <p><?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
</p>
                        <span>Kamu mendapatkan <font>Skor <?php echo $_smarty_tpl->tpl_vars['row']->value['skor'];?>
</font> untuk kategori <font><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</font></span>
                    </div>
                    <?php } ?> 
                    <div style="clear: both;"></div>
                </div>
            </div>
            <p class="share-button">
                <span style="vertical-align: middle;">Bagikan : </span>
                <a href="https://twitter.com/share?url=http%3A%2F%2Fskintelligent.id&text=Questionnaire - Indonesian’s Skin Type%0d%0a%0d%0aYuk, ikutan test untuk mengetahui tipe kulitmu yang sesungguhnya ! Test ini menggunakan kuesioner yang valid dan berbasis ilmiah. %0d%0a- Supported by Indonesian board certified Dermatologist.%0d%0ahttp%3A%2F%2Fskintelligent.id" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/icon/twt.png"></a>&nbsp;&nbsp;
                <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fskintelligent.id" target="_blank" class="fb-share-button"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/icon/fb.png"></a>&nbsp;&nbsp;
                <a href="https://social-plugins.line.me/lineit/share?url=http%3A%2F%2Fskintelligent.id" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/icon/line.png"></a>&nbsp;&nbsp;
                <a href="mailto:?subject=Questionnaire Skin Type&body=Questionnaire - Indonesian’s Skin Type%0d%0a%0d%0aYuk, ikutan test untuk mengetahui tipe kulitmu yang sesungguhnya ! Test ini menggunakan kuesioner yang valid dan berbasis ilmiah. %0d%0a- Supported by Indonesian board certified Dermatologist.%0d%0ahttp%3A%2F%2Fskintelligent.id" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/icon/email.png"></a>&nbsp;&nbsp;
                <a href="https://api.whatsapp.com/send?text=Questionnaire - Indonesian’s Skin Type%0d%0a%0d%0aYuk, ikutan test untuk mengetahui tipe kulitmu yang sesungguhnya ! Test ini menggunakan kuesioner yang valid dan berbasis ilmiah. %0d%0a- Supported by Indonesian board certified Dermatologist.%0d%0ahttp%3A%2F%2Fskintelligent.id" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/icon/wa.png"></a>&nbsp;&nbsp;
            </p>
        </div>

    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal" style="background: #fff">
        <span class="close-term" style="position: absolute;right: 35px;top: 20px;">skip</span>

      <!-- Modal content -->
      <div class="modal-content" style="background: #f7f3ef">
        <p>Upload Your Photo!</p>
        <h4 style="font-size:20px;">Datamu aman dengan kami!</h4>
        <span style="line-height: 25px;">Upload foto terbarumu untuk hasil yang lebih akurat.<br><br>
        <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/upload-photo.png" style="width: 100px">
        
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

    
    <script type="text/javascript">
        $(window).on("load", function (e) {
             $('#preloader').fadeOut('slow');
        });
    </script>
    

    
    <script>


    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close-term")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }

    function popup(){
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    /*window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }*/
    </script>
    

</body>

</html><?php }} ?>