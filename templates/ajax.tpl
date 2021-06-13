{if $flag == 'filterkota'}
    <option value="-">Pilih kota</option>
    {foreach from=$rskota key=i item=row name=foo}
        <option value="{$row.id_kota}" {if $kota == $row.id_kota} selected="selected" {/if}>{$row.nama_kota}</option>
    {/foreach}

{elseif $flag == 'filterkecamatan'}
    <option value="-">Pilih kecamatan</option>
    {foreach from=$rskecamatan key=i item=row name=foo}
        <option value="{$row.id_kecamatan}" {if $kecamatan == $row.id_kecamatan} selected="selected" {/if}>{$row.nama_kecamatan}</option>
    {/foreach}

{elseif $flag == 'filterkelurahan'}
    <option value="-">Pilih kelurahan</option>
    {foreach from=$rskelurahan key=i item=row name=foo}
        <option value="{$row.id_kelurahan}" {if $kelurahan == $row.id_kelurahan} selected="selected" {/if}>{$row.nama_kelurahan}</option>
    {/foreach}

{elseif $flag == 'cekuser'}
        <input type="hidden" name="cu_id_register" id="cu_id_register" value="{$id_register}">

        <input type="hidden" name="cu_first_name" id="cu_first_name" value="{if $first_name == ''}0{else}{$first_name}{/if}">{* flag untuk di JS *}


        <input type="hidden" name="cu_last_name" id="cu_last_name" value="{$last_name}">
        <input type="hidden" name="cu_age" id="cu_age" value="{$age}">
        <input type="hidden" name="cu_gender" id="cu_gender" value="{$gender}">
        <input type="hidden" name="cu_phone" id="cu_phone" value="{$phone}">
        <input type="hidden" name="cu_email" id="cu_email" value="{$email}">
        <input type="hidden" name="cu_profession" id="cu_profession" value="{$profession}">
        <input type="hidden" name="cu_detail_profession" id="cu_detail_profession" value="{$detail_profession}">
        <input type="hidden" name="cu_id_provinsi" id="cu_id_provinsi" value="{$id_provinsi}">
        <input type="hidden" name="cu_id_kota" id="cu_id_kota" value="{$id_kota}">
        <input type="hidden" name="cu_id_kecamatan" id="cu_id_kecamatan" value="{$id_kecamatan}">
        <input type="hidden" name="cu_id_kelurahan" id="cu_id_kelurahan" value="{$id_kelurahan}">
        <input type="hidden" name="cu_nama_kota" id="cu_nama_kota" value="{$nama_kota}">
        <input type="hidden" name="cu_nama_kecamatan" id="cu_nama_kecamatan" value="{$nama_kecamatan}">
        <input type="hidden" name="cu_nama_kelurahan" id="cu_nama_kelurahan" value="{$nama_kelurahan}">

{/if}