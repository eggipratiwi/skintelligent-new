<?php /* Smarty version Smarty-3.1.13, created on 2020-05-14 09:52:51
         compiled from "./templates/ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2044941455ebcb283175d88-69454539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4181ebd89e77e7dca29efbbfd61331e3219d4e1' => 
    array (
      0 => './templates/ajax.tpl',
      1 => 1588560870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2044941455ebcb283175d88-69454539',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'flag' => 0,
    'rskota' => 0,
    'row' => 0,
    'kota' => 0,
    'rskecamatan' => 0,
    'kecamatan' => 0,
    'rskelurahan' => 0,
    'kelurahan' => 0,
    'id_register' => 0,
    'first_name' => 0,
    'last_name' => 0,
    'age' => 0,
    'gender' => 0,
    'phone' => 0,
    'email' => 0,
    'profession' => 0,
    'detail_profession' => 0,
    'id_provinsi' => 0,
    'id_kota' => 0,
    'id_kecamatan' => 0,
    'id_kelurahan' => 0,
    'nama_kota' => 0,
    'nama_kecamatan' => 0,
    'nama_kelurahan' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ebcb2833c5c68_18401525',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ebcb2833c5c68_18401525')) {function content_5ebcb2833c5c68_18401525($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['flag']->value=='filterkota'){?>
    <option value="-">Pilih kota</option>
    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rskota']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id_kota'];?>
" <?php if ($_smarty_tpl->tpl_vars['kota']->value==$_smarty_tpl->tpl_vars['row']->value['id_kota']){?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value['nama_kota'];?>
</option>
    <?php } ?>

<?php }elseif($_smarty_tpl->tpl_vars['flag']->value=='filterkecamatan'){?>
    <option value="-">Pilih kecamatan</option>
    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rskecamatan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id_kecamatan'];?>
" <?php if ($_smarty_tpl->tpl_vars['kecamatan']->value==$_smarty_tpl->tpl_vars['row']->value['id_kecamatan']){?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value['nama_kecamatan'];?>
</option>
    <?php } ?>

<?php }elseif($_smarty_tpl->tpl_vars['flag']->value=='filterkelurahan'){?>
    <option value="-">Pilih kelurahan</option>
    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rskelurahan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id_kelurahan'];?>
" <?php if ($_smarty_tpl->tpl_vars['kelurahan']->value==$_smarty_tpl->tpl_vars['row']->value['id_kelurahan']){?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value['nama_kelurahan'];?>
</option>
    <?php } ?>

<?php }elseif($_smarty_tpl->tpl_vars['flag']->value=='cekuser'){?>
        <input type="hidden" name="cu_id_register" id="cu_id_register" value="<?php echo $_smarty_tpl->tpl_vars['id_register']->value;?>
">

        <input type="hidden" name="cu_first_name" id="cu_first_name" value="<?php if ($_smarty_tpl->tpl_vars['first_name']->value==''){?>0<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['first_name']->value;?>
<?php }?>">


        <input type="hidden" name="cu_last_name" id="cu_last_name" value="<?php echo $_smarty_tpl->tpl_vars['last_name']->value;?>
">
        <input type="hidden" name="cu_age" id="cu_age" value="<?php echo $_smarty_tpl->tpl_vars['age']->value;?>
">
        <input type="hidden" name="cu_gender" id="cu_gender" value="<?php echo $_smarty_tpl->tpl_vars['gender']->value;?>
">
        <input type="hidden" name="cu_phone" id="cu_phone" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
">
        <input type="hidden" name="cu_email" id="cu_email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
        <input type="hidden" name="cu_profession" id="cu_profession" value="<?php echo $_smarty_tpl->tpl_vars['profession']->value;?>
">
        <input type="hidden" name="cu_detail_profession" id="cu_detail_profession" value="<?php echo $_smarty_tpl->tpl_vars['detail_profession']->value;?>
">
        <input type="hidden" name="cu_id_provinsi" id="cu_id_provinsi" value="<?php echo $_smarty_tpl->tpl_vars['id_provinsi']->value;?>
">
        <input type="hidden" name="cu_id_kota" id="cu_id_kota" value="<?php echo $_smarty_tpl->tpl_vars['id_kota']->value;?>
">
        <input type="hidden" name="cu_id_kecamatan" id="cu_id_kecamatan" value="<?php echo $_smarty_tpl->tpl_vars['id_kecamatan']->value;?>
">
        <input type="hidden" name="cu_id_kelurahan" id="cu_id_kelurahan" value="<?php echo $_smarty_tpl->tpl_vars['id_kelurahan']->value;?>
">
        <input type="hidden" name="cu_nama_kota" id="cu_nama_kota" value="<?php echo $_smarty_tpl->tpl_vars['nama_kota']->value;?>
">
        <input type="hidden" name="cu_nama_kecamatan" id="cu_nama_kecamatan" value="<?php echo $_smarty_tpl->tpl_vars['nama_kecamatan']->value;?>
">
        <input type="hidden" name="cu_nama_kelurahan" id="cu_nama_kelurahan" value="<?php echo $_smarty_tpl->tpl_vars['nama_kelurahan']->value;?>
">

<?php }?><?php }} ?>