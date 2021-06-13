{include file = '_header.tpl'}

<body>

    <div id="preloader"></div>

    <div id="popup1" class="overlay">
        <div class="popup">
            <img src="{$base_url}images/emoji/wink.gif" width="150px">
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
                                <input type="text" placeholder="Nama depan" id="firstname" name="firstname" value="{$firstname}" class="form-control">
                            </div>
                            <div class="form-holder">
                                <input type="text" placeholder="Nama belakang" id="lastname" name="lastname" value="{$lastname}" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" placeholder="Email" id="email" name="email" value="{$email}" class="form-control" onblur="blurEmail()">
                            </div>
                            <div class="form-holder">
                                <input type="text" placeholder="Telepon" id="phonenumber" name="phonenumber" value="{$phonenumber}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" placeholder="Umur" id="age" name="age" value="{$age}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control">
                            </div>
                            <div class="form-holder" style="align-self: flex-end; transform: translateY(4px);">
                                <div class="checkbox-tick">
                                    <label class="male">
                                        <input type="radio" id="r_male" name="gender" value="male" {if $gender == "male"} checked {/if}> Pria
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="female">
                                        <input type="radio" id="r_female" name="gender" value="female" {if $gender == "female"} checked {/if}> Wanita
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="both">
                                        <input type="radio" id="r_other" name="gender" value="other" {if $gender == "other"} checked {/if}> Lainnya
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <select id="dd-provinsi" class="left" onchange ="filterkota()">
                                <option value="-">Pilih provinsi</option>
                                {foreach $rsProvinsi as $row}
                                <option value="{$row.id_provinsi}" {if $id_provinsi == $row.id_provinsi} selected="selected" {/if}>{$row.nama_provinsi}</option>
                                {/foreach}
                            </select>
                            <select id="dd-kota" onchange ="filterkecamatan()">
                                <option value="{if $kota == ''}-{else}{$id_kota}{/if}">{if $kota == ''}Pilih kota{else}{$kota}{/if}</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <select id="dd-kecamatan" class="left" onchange ="filterkelurahan()">
                                <option value="{if $kecamatan == ''}-{else}{$id_kecamatan}{/if}">{if $kecamatan == ''}Pilih kecamatan{else}{$kecamatan}{/if}</option>
                            </select>
                            <select id="dd-kelurahan">
                                <option value="{if $kelurahan == ''}-{else}{$id_kelurahan}{/if}">{if $kelurahan == ''}Pilih kelurahan{else}{$kelurahan}{/if}</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <select id="dd-profesi" class="left">
                                <option value="Mahasiswa/i" {if $profesi == "Mahasiswa/i"} selected="selected" {/if}>Mahasiswa/i</option>
                                <option value="Karyawan Swasta" {if $profesi == "Karyawan Swasta"} selected="selected" {/if}>Karyawan Swasta</option>
                                <option value="PNS" {if $profesi == "PNS"} selected="selected" {/if}>PNS</option>
                                <option value="Pengusaha" {if $profesi == "Pengusaha"} selected="selected" {/if}>Pengusaha</option>
                                <option value="Lainnya" {if $profesi == "Lainnya"} selected="selected" {/if}>Lainnya</option>
                            </select>
                            <div class="form-holder">
                                <input type="text" placeholder="Divisi pekerjaan" id="detail-profesi" name="detail-profesi" value="{$detail_profesi}" class="form-control">
                            </div>
                        </div>
                        <div class="form-row buttons">
                            <ul>
                                <li style="display: none;">
                                    <a href="#previous" class="backward">Back</a>
                                </li>
                                <li>
                                    <a href="#next" class="forward register">Next</a>
                                </li>
                                <li style="display: none;">
                                    <a href="#finish" class="finish">Finish</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

        {foreach from=$rsConcerns item=con name=foo2}
            <!-- SECTION 2 -->
            <h2></h2>
            <section>
                <div class="inner">
                    <div class="image-holder">
                        <img src="images/banner-concern1.jpg" alt="">
                    </div>
                    <div class="form-content">
                        <div class="form-header">
                            <h3>#{$smarty.foreach.foo2.iteration} {$con.title}</h3>
                        </div>
                        <p>{$con.description}</p>

                    {foreach from=$rsQuestions{$con.id_concern} item=ques name=foo}
                        <div class="form-row">
                            <div class="form-holder" style="width:100%;align-self: flex-end; transform: translateY(4px);">
                              <span>{$smarty.foreach.foo.iteration}. {$ques.description}</span><br>
                                <div class="checkbox-tick ptop10">
                                {foreach from=$rsOptions{$ques.id_question} item=opt name=foo1}
                                    <label class="w100">
                                        <input type="radio" name='quest{$con.id_concern}{$smarty.foreach.foo.iteration}' onclick="savedata('{$opt.id_concern}','{$opt.id_question}','{$opt.id_option}', '{$smarty.foreach.foo.iteration}')"  {if $ans{$opt.id_concern}{$opt.id_question} == $opt.poin} checked {/if} value="{$opt.poin}"> {$opt.description} 
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                {/foreach}    
                                </div>
                            </div>
                        </div>
                    {/foreach}
                        <div class="form-row buttons">
                            <input type="hidden" name="quesCount-{$con.id_concern}" value="{$rsQuesCount{$con.id_concern}}">
                            <ul>
                                <li>
                                    <a href="#previous" class="backward">Back</a>
                                </li>
                                <li {if $smarty.foreach.foo2.last} style="display: none;" {/if}>
                                    <a href="#next" class="forward sub" data-conid="{$con.id_concern}">Next</a>
                                </li>
                                <li {if not $smarty.foreach.foo2.last} style="display: none; {/if}">
                                    <a href="#finish" class="finish" data-conid="{$con.id_concern}">Finish</a>
                                </li>
                            </ul> 
                        </div>
                    </div>
                </div>
            </section>
        {/foreach}

        </form>
    </div>

    <!-- JQUERY -->
    <script src="{$base_url}js/jquery-3.3.1.min.js"></script>

    <!-- JQUERY STEP -->
    <script src="{$base_url}js/jquery.steps.js"></script>
    <script src="{$base_url}js/main.js"></script>
    <!-- Template created and distributed by Colorlib -->

    <script type="text/javascript">
        $(window).on("load", function (e) {
             $('#preloader').fadeOut('slow');
        });
    </script>

</body>

</html>