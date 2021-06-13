{include file = '_header.tpl'}

<body>

    {literal}
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
    {/literal}

    <div id="preloader"></div>

    <div class="wrapper" style="background: white;">

        <div id="result">
            <img src="{$base_url}images/logo.png" width="140px"><br>
            <div id="content">
                <h1>Hi {$firstname}, Terima Kasih!</h1><br>
                <h2>kamu telah menyelesaikan survey mengenai jenis kulitmu.<br>
                Hasil survey sudah kami rangkumkan untukmu :)</h2>
                <div class="row">
                    {foreach $rsSurvey as $row}
                    <div class="box">
                        <img src="{$base_url}images/emoji/{$row.description|lower}.gif">
                        <p>{$row.description}</p>
                        <span>Kamu mendapatkan <font>Skor {$row.skor}</font> untuk kategori <font>{$row.title}</font></span>
                    </div>
                    {/foreach} 
                    <div style="clear: both;"></div>
                </div>
            </div>
            <p class="share-button">
                <span style="vertical-align: middle;">Bagikan : </span>
                <a href="https://twitter.com/share?url=http%3A%2F%2Fskintelligent.id&text=Questionnaire - Indonesian’s Skin Type%0d%0a%0d%0aYuk, ikutan test untuk mengetahui tipe kulitmu yang sesungguhnya ! Test ini menggunakan kuesioner yang valid dan berbasis ilmiah. %0d%0a- Supported by Indonesian board certified Dermatologist.%0d%0ahttp%3A%2F%2Fskintelligent.id" target="_blank"><img src="{$base_url}images/icon/twt.png"></a>&nbsp;&nbsp;
                <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fskintelligent.id" target="_blank" class="fb-share-button"><img src="{$base_url}images/icon/fb.png"></a>&nbsp;&nbsp;
                <a href="https://social-plugins.line.me/lineit/share?url=http%3A%2F%2Fskintelligent.id" target="_blank"><img src="{$base_url}images/icon/line.png"></a>&nbsp;&nbsp;
                <a href="mailto:?subject=Questionnaire Skin Type&body=Questionnaire - Indonesian’s Skin Type%0d%0a%0d%0aYuk, ikutan test untuk mengetahui tipe kulitmu yang sesungguhnya ! Test ini menggunakan kuesioner yang valid dan berbasis ilmiah. %0d%0a- Supported by Indonesian board certified Dermatologist.%0d%0ahttp%3A%2F%2Fskintelligent.id" target="_blank"><img src="{$base_url}images/icon/email.png"></a>&nbsp;&nbsp;
                <a href="https://api.whatsapp.com/send?text=Questionnaire - Indonesian’s Skin Type%0d%0a%0d%0aYuk, ikutan test untuk mengetahui tipe kulitmu yang sesungguhnya ! Test ini menggunakan kuesioner yang valid dan berbasis ilmiah. %0d%0a- Supported by Indonesian board certified Dermatologist.%0d%0ahttp%3A%2F%2Fskintelligent.id" target="_blank"><img src="{$base_url}images/icon/wa.png"></a>&nbsp;&nbsp;
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
        <img src="{$base_url}images/upload-photo.png" style="width: 100px">
        {*<input type="file" name="photo" id="photo">*}
      </div>

    </div>

    {*<button id="myBtn" style="">Open Modal</button>*}

    <!-- JQUERY -->
    <script src="{$base_url}js/jquery-3.3.1.min.js"></script>

    <!-- JQUERY STEP -->
    <script src="{$base_url}js/jquery.steps.js"></script>
    <script src="{$base_url}js/main.js"></script>
    <!-- Template created and distributed by Colorlib -->

    {literal}
    <script type="text/javascript">
        $(window).on("load", function (e) {
             $('#preloader').fadeOut('slow');
        });
    </script>
    {/literal}

    {literal}
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
    {/literal}

</body>

</html>