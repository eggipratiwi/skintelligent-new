{include file = '_header.tpl'}

<body>
    <div class="wrapper">
        <form action="" id="wizard">
            <!-- SECTION 1 -->
            <h2></h2>
            <section>
                <div class="inner">
                    <div class="image-holder">
                        <img src="images/form-wizard-1.jpg" alt="">
                    </div>
                    <div class="form-content">
                        <div class="form-header">
                            <h3>Registration</h3>
                        </div>
                        <p>Please fill with your details</p>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" placeholder="First Name" class="form-control">
                            </div>
                            <div class="form-holder">
                                <input type="text" placeholder="Last Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" placeholder="Your Email" class="form-control">
                            </div>
                            <div class="form-holder">
                                <input type="text" placeholder="Phone Number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="select">
                                <div class="form-holder">
                                    <div class="select-control">Your city</div>
                                    <i class="zmdi zmdi-caret-down"></i>
                                </div>
                                <ul class="dropdown">
                                    {foreach $rsCity as $row}
                                    <li rel="{$row.city_id}">{$row.city_name}</li>
                                    {/foreach}
                                </ul>
                            </div>
                            <div class="select"  style="margin-right: 0;">
                                <div class="form-holder">
                                    <div class="select-control">Profession</div>
                                    <i class="zmdi zmdi-caret-down"></i>
                                </div>
                                <ul class="dropdown">
                                    <li rel="Mahasiswa/i">Mahasiswa/i</li>
                                    <li rel="Karyawan Swasta">Karyawan Swasta</li>
                                    <li rel="PNS">PNS</li>
                                    <li rel="Pengusaha">Pengusaha</li>
                                    <li rel="Lainnya">Lainnya</li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" placeholder="Age" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control">
                            </div>
                            <div class="form-holder" style="align-self: flex-end; transform: translateY(4px);">
                                <div class="checkbox-tick">
                                    <label class="male">
                                        <input type="radio" name="gender" value="male" checked> Male
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="female">
                                        <input type="radio" name="gender" value="female"> Female
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="both">
                                        <input type="radio" name="gender" value="both"> Both
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION 2 -->
            <h2></h2>
            <section>
                <div class="inner">
                    <div class="image-holder">
                        <img src="images/form-wizard-2.jpg" alt="">
                    </div>
                    <div class="form-content">
                        <div class="form-header">
                            <h3>Berminyak vs Kering</h3>
                        </div>
                        <p>Please fill with additional info</p>
                        <div class="form-row">
                            <div class="form-holder" style="width:100%;align-self: flex-end; transform: translateY(4px);">
                              <span>1. Setiap hari setelah anda membersihkan wajah (jangan dulu menggunakan pelembab/ tabir surya/ toner/ bedak/ produk lain), lalu dua-tiga jam kemudian lihat bayangan kulit anda di cermin dibawah cahaya yang terang. Apakah area dahi dan pipi tampak/ terasa:</span><br>
                                <div class="checkbox-tick ptop10">
                                    <label class="w100">
                                        <input type="radio" name="qestion1" value="1"> Sangat kasar, kering dan kusam
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="w100">
                                        <input type="radio" name="qestion1" value="2"> Kaku/ kencang
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="w100">
                                        <input type="radio" name="qestion1" value="both"> Lembab tanpa pantulan cahaya
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="w100">
                                        <input type="radio" name="qestion1" value="both"> Lembab disertai pantulan cahaya
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder" style="width:100%;align-self: flex-end; transform: translateY(4px);">
                              <span>1. Setiap hari setelah anda membersihkan wajah (jangan dulu menggunakan pelembab/ tabir surya/ toner/ bedak/ produk lain), lalu dua-tiga jam kemudian lihat bayangan kulit anda di cermin dibawah cahaya yang terang. Apakah area dahi dan pipi tampak/ terasa:</span><br>
                                <div class="checkbox-tick ptop10">
                                    <label class="w100">
                                        <input type="radio" name="qestion1" value="1"> Sangat kasar, kering dan kusam
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="w100">
                                        <input type="radio" name="qestion1" value="2"> Kaku/ kencang
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="w100">
                                        <input type="radio" name="qestion1" value="both"> Lembab tanpa pantulan cahaya
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="w100">
                                        <input type="radio" name="qestion1" value="both"> Lembab disertai pantulan cahaya
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder" style="width:100%;align-self: flex-end; transform: translateY(4px);">
                              <span>1. Setiap hari setelah anda membersihkan wajah (jangan dulu menggunakan pelembab/ tabir surya/ toner/ bedak/ produk lain), lalu dua-tiga jam kemudian lihat bayangan kulit anda di cermin dibawah cahaya yang terang. Apakah area dahi dan pipi tampak/ terasa:</span><br>
                                <div class="checkbox-tick ptop10">
                                    <label class="w100">
                                        <input type="radio" name="qestion1" value="1"> Sangat kasar, kering dan kusam
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="w100">
                                        <input type="radio" name="qestion1" value="2"> Kaku/ kencang
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="w100">
                                        <input type="radio" name="qestion1" value="both"> Lembab tanpa pantulan cahaya
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="w100">
                                        <input type="radio" name="qestion1" value="both"> Lembab disertai pantulan cahaya
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder" style="width:100%;align-self: flex-end; transform: translateY(4px);">
                              <span>1. Setiap hari setelah anda membersihkan wajah (jangan dulu menggunakan pelembab/ tabir surya/ toner/ bedak/ produk lain), lalu dua-tiga jam kemudian lihat bayangan kulit anda di cermin dibawah cahaya yang terang. Apakah area dahi dan pipi tampak/ terasa:</span><br>
                                <div class="checkbox-tick ptop10">
                                    <label class="w100">
                                        <input type="radio" name="qestion1" value="1"> Sangat kasar, kering dan kusam
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="w100">
                                        <input type="radio" name="qestion1" value="2"> Kaku/ kencang
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="w100">
                                        <input type="radio" name="qestion1" value="both"> Lembab tanpa pantulan cahaya
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="w100">
                                        <input type="radio" name="qestion1" value="both"> Lembab disertai pantulan cahaya
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder" style="width:100%;align-self: flex-end; transform: translateY(4px);">
                              <span>1. Setiap hari setelah anda membersihkan wajah (jangan dulu menggunakan pelembab/ tabir surya/ toner/ bedak/ produk lain), lalu dua-tiga jam kemudian lihat bayangan kulit anda di cermin dibawah cahaya yang terang. Apakah area dahi dan pipi tampak/ terasa:</span><br>
                                <div class="checkbox-tick ptop10">
                                    <label class="w100">
                                        <input type="radio" name="qestion1" value="1"> Sangat kasar, kering dan kusam
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="w100">
                                        <input type="radio" name="qestion1" value="2"> Kaku/ kencang
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="w100">
                                        <input type="radio" name="qestion1" value="both"> Lembab tanpa pantulan cahaya
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="w100">
                                        <input type="radio" name="qestion1" value="both"> Lembab disertai pantulan cahaya
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION 3 -->
            <h2></h2>
            <section>
                <div class="inner">
                    <div class="image-holder">
                        <img src="images/form-wizard-3.jpg" alt="">
                    </div>
                    <div class="form-content">
                        <div class="form-header">
                            <h3>Registration</h3>
                        </div>
                        <p>Send an optional message</p>
                        <div class="form-row">
                            <div class="form-holder w-100">
                                <textarea name="" id="" placeholder="Your messagere here!" class="form-control" style="height: 99px;"></textarea>
                            </div>
                        </div>
                        <div class="checkbox-circle mt-24">
                            <label>
                                <input type="checkbox" checked> Please accept <a href="#">terms and conditions ?</a>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION 4 -->
            <h2></h2>
            <section>
                <div class="inner">
                    <div class="image-holder">
                        <img src="images/form-wizard-4.jpg" alt="">
                    </div>
                    <div class="form-content">
                        <div class="form-header">
                            <h3>Registration</h3>
                        </div>
                        <p>Please fill with your details</p>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" placeholder="First Name" class="form-control">
                            </div>
                            <div class="form-holder">
                                <input type="text" placeholder="Last Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" placeholder="Your Email" class="form-control">
                            </div>
                            <div class="form-holder">
                                <input type="text" placeholder="Phone Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" placeholder="Age" class="form-control">
                            </div>
                            <div class="form-holder" style="align-self: flex-end; transform: translateY(4px);">
                                <div class="checkbox-tick">
                                    <label class="male">
                                        <input type="radio" name="gender" value="male" checked> Male
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="female">
                                        <input type="radio" name="gender" value="female"> Female
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox-circle">
                            <label>
                                <input type="checkbox" checked> Nor again is there anyone who loves or pursues or desires to obtaini.
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION 5 -->
            <h2></h2>
            <section>
                <div class="inner">
                    <div class="image-holder">
                        <img src="images/form-wizard-2.jpg" alt="">
                    </div>
                    <div class="form-content">
                        <div class="form-header">
                            <h3>Registration</h3>
                        </div>
                        <p>Please fill with your details</p>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" placeholder="First Name" class="form-control">
                            </div>
                            <div class="form-holder">
                                <input type="text" placeholder="Last Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" placeholder="Your Email" class="form-control">
                            </div>
                            <div class="form-holder">
                                <input type="text" placeholder="Phone Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" placeholder="Age" class="form-control">
                            </div>
                            <div class="form-holder" style="align-self: flex-end; transform: translateY(4px);">
                                <div class="checkbox-tick">
                                    <label class="male">
                                        <input type="radio" name="gender" value="male" checked> Male
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="female">
                                        <input type="radio" name="gender" value="female"> Female
                                        <br>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox-circle">
                            <label>
                                <input type="checkbox" checked> Nor again is there anyone who loves or pursues or desires to obtaini.
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>

    <!-- JQUERY -->
    <script src="{$base_url}js/jquery-3.3.1.min.js"></script>

    <!-- JQUERY STEP -->
    <script src="{$base_url}js/jquery.steps.js"></script>
    <script src="{$base_url}js/main.js"></script>
    <!-- Template created and distributed by Colorlib -->
</body>

</html>