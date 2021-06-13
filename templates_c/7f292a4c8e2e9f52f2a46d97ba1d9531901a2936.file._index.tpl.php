<?php /* Smarty version Smarty-3.1.13, created on 2020-07-01 15:42:31
         compiled from "./templates/_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13966703775ebc7063b7f080-61280731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f292a4c8e2e9f52f2a46d97ba1d9531901a2936' => 
    array (
      0 => './templates/_index.tpl',
      1 => 1593592950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13966703775ebc7063b7f080-61280731',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ebc7063d81af9_87391348',
  'variables' => 
  array (
    'base_url' => 0,
    'firstname' => 0,
    'lastname' => 0,
    'email' => 0,
    'phonenumber' => 0,
    'age' => 0,
    'gender' => 0,
    'rsProvinsi' => 0,
    'row' => 0,
    'id_provinsi' => 0,
    'profesi' => 0,
    'kota' => 0,
    'id_kota' => 0,
    'detail_profesi' => 0,
    'kecamatan' => 0,
    'id_kecamatan' => 0,
    'rsConcerns' => 0,
    'con' => 0,
    'ques' => 0,
    'opt' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ebc7063d81af9_87391348')) {function content_5ebc7063d81af9_87391348($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<body>

    <div id="preloader"></div>

    <div id="popup1" class="overlay">
        <div class="popup">
            <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/emoji/wink.gif" width="150px">
            <div class="content">
                <br>
                Hasil survey menunjukan tipe kulitmu adalah
                <span class="hasil"></span>.<br>
                Lanjutkan untuk mengetahui jenis kulitmu lebih detail.
            </div>
            <button class="close" onclick="closePopup()">Next</button>
        </div>
    </div>

    <div class="wrapper">
        <form action="" id="wizard">
            <!-- SECTION 1 -->
            <h2></h2>
            <section>
                <div class="inner">
                    <div id="hidden-value"></div>
                    <div class="image-holder">
                        <img src="images/banner-register.jpg" alt="">
                    </div>
                    <div class="form-content">
                        <div class="form-header">
                            <h3>Registrasi</h3>
                        </div>
                        <p>Lengkapi data diri anda dibawah ini.</p>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" placeholder="Nama depan" id="firstname" name="firstname" value="<?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
" class="form-control">
                            </div>
                            <div class="form-holder">
                                <input type="text" placeholder="Nama belakang" id="lastname" name="lastname" value="<?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" placeholder="Email" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" class="form-control" onblur="blurEmail()">
                            </div>
                            <div class="form-holder">
                                <input type="text" placeholder="Telepon" id="phonenumber" name="phonenumber" value="<?php echo $_smarty_tpl->tpl_vars['phonenumber']->value;?>
" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" placeholder="Umur" id="age" name="age" value="<?php echo $_smarty_tpl->tpl_vars['age']->value;?>
" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control">
                            </div>
                            <div class="form-holder" style="align-self: flex-end; transform: translateY(4px);">
                                <div class="checkbox-tick">
                                    <label class="male">
                                        <input type="radio" id="r_male" name="gender" value="male" <?php if ($_smarty_tpl->tpl_vars['gender']->value=="male"){?> checked <?php }?>> Pria
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="female">
                                        <input type="radio" id="r_female" name="gender" value="female" <?php if ($_smarty_tpl->tpl_vars['gender']->value=="female"){?> checked <?php }?>> Wanita
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="both">
                                        <input type="radio" id="r_other" name="gender" value="other" <?php if ($_smarty_tpl->tpl_vars['gender']->value=="other"){?> checked <?php }?>> Lainnya
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <select id="dd-provinsi" class="left" onchange ="filterkota()">
                                <option value="-">Pilih provinsi</option>
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProvinsi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id_provinsi'];?>
" <?php if ($_smarty_tpl->tpl_vars['id_provinsi']->value==$_smarty_tpl->tpl_vars['row']->value['id_provinsi']){?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value['nama_provinsi'];?>
</option>
                                <?php } ?>
                            </select>
                            <select id="dd-profesi">
                                <option value="Mahasiswa/i" <?php if ($_smarty_tpl->tpl_vars['profesi']->value=="Mahasiswa/i"){?> selected="selected" <?php }?>>Mahasiswa/i</option>
                                <option value="Karyawan Swasta" <?php if ($_smarty_tpl->tpl_vars['profesi']->value=="Karyawan Swasta"){?> selected="selected" <?php }?>>Karyawan Swasta</option>
                                <option value="PNS" <?php if ($_smarty_tpl->tpl_vars['profesi']->value=="PNS"){?> selected="selected" <?php }?>>PNS</option>
                                <option value="Pengusaha" <?php if ($_smarty_tpl->tpl_vars['profesi']->value=="Pengusaha"){?> selected="selected" <?php }?>>Pengusaha</option>
                                <option value="Lainnya" <?php if ($_smarty_tpl->tpl_vars['profesi']->value=="Lainnya"){?> selected="selected" <?php }?>>Lainnya</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <select id="dd-kota" class="left" onchange ="filterkecamatan()">
                                <option value="<?php if ($_smarty_tpl->tpl_vars['kota']->value==''){?>-<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id_kota']->value;?>
<?php }?>"><?php if ($_smarty_tpl->tpl_vars['kota']->value==''){?>Pilih kota<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['kota']->value;?>
<?php }?></option>
                            </select>
                            <div class="form-holder">
                                <input type="text" placeholder="Divisi pekerjaan" id="detail-profesi" name="detail-profesi" value="<?php echo $_smarty_tpl->tpl_vars['detail_profesi']->value;?>
" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <select id="dd-kecamatan" class="left" onchange ="filterkelurahan()">
                                <option value="<?php if ($_smarty_tpl->tpl_vars['kecamatan']->value==''){?>-<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id_kecamatan']->value;?>
<?php }?>"><?php if ($_smarty_tpl->tpl_vars['kecamatan']->value==''){?>Pilih kecamatan<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['kecamatan']->value;?>
<?php }?></option>
                            </select>
                            <div class="form-holder">
                                
                            </div>
                        </div>
                        <div class="form-row buttons">
                            <ul>
                                <li style="display: none;">
                                    <a href="#previous" class="backward">Back</a>
                                </li>
                                <li>
                                    <a href="#next" class="forward register" style="float: right;">Next</a><br>
                                    <div style="width: 100%;float: right;"><input type="checkbox" name="term" id="term" value="term"> <span onclick="popup();" style="color: #6d7f52;cursor: pointer;">Saya setuju dengan term & condition</span></div>
                                </li>
                                <li style="display: none;">
                                    <a href="#finish" class="finish">Finish</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

        <?php  $_smarty_tpl->tpl_vars['con'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['con']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsConcerns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['con']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['con']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo2']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['con']->key => $_smarty_tpl->tpl_vars['con']->value){
$_smarty_tpl->tpl_vars['con']->_loop = true;
 $_smarty_tpl->tpl_vars['con']->iteration++;
 $_smarty_tpl->tpl_vars['con']->last = $_smarty_tpl->tpl_vars['con']->iteration === $_smarty_tpl->tpl_vars['con']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo2']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo2']['last'] = $_smarty_tpl->tpl_vars['con']->last;
?>
            <!-- SECTION 2 -->
            <h2></h2>
            <section>
                <div class="inner">
                    <div class="image-holder">
                        <img src="images/banner-concern1.jpg" alt="">
                    </div>
                    <div class="form-content">
                        <div class="form-header">
                            <h3>#<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo2']['iteration'];?>
 <?php echo $_smarty_tpl->tpl_vars['con']->value['title'];?>
</h3>
                        </div>
                        <p><?php echo $_smarty_tpl->tpl_vars['con']->value['description'];?>
</p>

                    <?php  $_smarty_tpl->tpl_vars['ques'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ques']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsQuestions'.($_smarty_tpl->tpl_vars['con']->value['id_concern'])]->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['ques']->key => $_smarty_tpl->tpl_vars['ques']->value){
$_smarty_tpl->tpl_vars['ques']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['iteration']++;
?>
                        <div class="form-row">
                            <div class="form-holder" style="width:100%;align-self: flex-end; transform: translateY(4px);">
                              <span><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['iteration'];?>
. <?php echo $_smarty_tpl->tpl_vars['ques']->value['description'];?>
</span><br>
                                <div class="checkbox-tick ptop10">
                                <?php  $_smarty_tpl->tpl_vars['opt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['opt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsOptions'.($_smarty_tpl->tpl_vars['ques']->value['id_question'])]->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['opt']->key => $_smarty_tpl->tpl_vars['opt']->value){
$_smarty_tpl->tpl_vars['opt']->_loop = true;
?>
                                    <label class="w100">
                                        <input type="radio" name='quest<?php echo $_smarty_tpl->tpl_vars['con']->value['id_concern'];?>
<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['iteration'];?>
' onclick="savedata('<?php echo $_smarty_tpl->tpl_vars['opt']->value['id_concern'];?>
','<?php echo $_smarty_tpl->tpl_vars['opt']->value['id_question'];?>
','<?php echo $_smarty_tpl->tpl_vars['opt']->value['id_option'];?>
', '<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['iteration'];?>
')"  <?php if ($_smarty_tpl->tpl_vars['ans'.($_smarty_tpl->tpl_vars['opt']->value['id_concern']).($_smarty_tpl->tpl_vars['opt']->value['id_question'])]->value==$_smarty_tpl->tpl_vars['opt']->value['poin']){?> checked <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['opt']->value['poin'];?>
"> <?php echo $_smarty_tpl->tpl_vars['opt']->value['description'];?>
 
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                <?php } ?>    
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                        <div class="form-row">
                            <small><em><p style="font-size: 12px;">*apabila terdapat kendala saat mengisi survey, refresh halaman dan lanjutkan.</p></em></small>
                        </div>
                        <div class="form-row buttons">
                            <input type="hidden" name="quesCount-<?php echo $_smarty_tpl->tpl_vars['con']->value['id_concern'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['rsQuesCount'.($_smarty_tpl->tpl_vars['con']->value['id_concern'])]->value;?>
">
                            <ul>
                                <li>
                                    <a href="#previous" class="backward">Back</a>
                                </li>
                                <li <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo2']['last']){?> style="display: none;" <?php }?>>
                                    <a href="#next" class="forward sub" data-conid="<?php echo $_smarty_tpl->tpl_vars['con']->value['id_concern'];?>
">Next</a>
                                </li>
                                <li <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['foo2']['last']){?> style="display: none; <?php }?>">
                                    <a href="#finish" class="finish" data-conid="<?php echo $_smarty_tpl->tpl_vars['con']->value['id_concern'];?>
">Finish</a>
                                </li>
                            </ul> 
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>

        </form>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <span class="close-term">&times;</span>
        <p>Terms & Conditions</p>
        <h4 style="font-size:20px;">Datamu aman dengan kami!</h4>
        <span style="line-height: 25px;">Kami melakukan segala hal untuk melindungi privasimu<br>
        Semua datamu akan disimpan di server khusus, yang artinya kami tidak menggunakan server berbagi, termasuk Skintelligent tidak akan membagikan kepada pihak ketiga.<br><br>
        Data mengacu pada ;<br>
        Nama, nomor telepon, alamat email, umur, jenis kelamin, alamat rumah, foto, profesi, dan hasil tes. 
        <br><br>
        Saya telah membaca informasi pengguna dan menerima proses data pribadi oleh skintellgent untuk tujuan berikut :
        <ul style="list-style: disc;margin-left: 30px;">
            <li>Memastikan pendaftaran di platform Skintelligent dan penggunaan profil saya</li>
            <li>Melakukan evaluasi kulit saya</li>
            <li>Mengirimkan informasi yang berguna untuk profil, evaluasi kulit, dan resep perawatan.</li>
            <li>Saya diberi tahu, kecuali jika saya menyatakan keberatan, Skintelligent akan menggunakan data pribadi saya untuk penelitian klinis lewat nama samaran sesuai dengan peraturan yang berlaku.</li>
        </ul><br>
        Dengan klik “Next”, saya menyatakan telah membaca syarat dan ketentuan Skintelligent serta menyetujuinya. </span>
      </div>

    </div>

    <button id="myBtn" style="display: none;">Open Modal</button>

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