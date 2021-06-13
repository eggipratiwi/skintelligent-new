var base_url = 'https://skintelligent.id/';

function blurEmail() {
    var dataEmail = document.getElementById("email").value;    
    if(dataEmail != '')
    {
        // fire off the request to /ajax.php
        request = jQuery.ajax({
            url: base_url+"ajax",
            type: "post",
            data: ({email:dataEmail,  flag:'cekuser'}),
            success: function (data) {
                jQuery('#hidden-value').html(data);


                var cu_id_register = $('#cu_id_register').val();
                var cu_first_name = $('#cu_first_name').val();
                var cu_last_name = $('#cu_last_name').val();
                var cu_age = $('#cu_age').val();
                var cu_gender = $('#cu_gender').val();
                var cu_phone = $('#cu_phone').val();
                var cu_email = $('#cu_email').val();
                var cu_profession = $('#cu_profession').val();
                var cu_detail_profession = $('#cu_detail_profession').val();
                var cu_id_provinsi = $('#cu_id_provinsi').val();
                var cu_id_kota = $('#cu_id_kota').val();
                var cu_id_kecamatan = $('#cu_id_kecamatan').val();
                var cu_id_kelurahan = $('#cu_id_kelurahan').val(); 
                var cu_nama_kota = $('#cu_nama_kota').val();
                var cu_nama_kecamatan = $('#cu_nama_kecamatan').val();
                var cu_nama_kelurahan = $('#cu_nama_kelurahan').val(); 

                if(cu_first_name == '0'){
                }else{
                    jQuery( "#firstname" ).attr("value", cu_first_name);
                    jQuery( "#lastname" ).attr("value", cu_last_name);
                    jQuery( "#age" ).attr("value", cu_age);
                    jQuery( "#phonenumber" ).attr("value", cu_phone);
                    jQuery("select#dd-profesi").val(cu_profession);
                    jQuery( "#detail-profesi" ).attr("value", cu_detail_profession);
                    jQuery("select#dd-provinsi").val(cu_id_provinsi);
                    jQuery("#dd-kota").html("<option value='"+cu_id_kota+"'>"+cu_nama_kota+"</option>");
                    jQuery("#dd-kecamatan").html("<option value='"+cu_id_kecamatan+"'>"+cu_nama_kecamatan+"</option>");
                    jQuery("#dd-kelurahan").html("<option value='"+cu_id_kelurahan+"'>"+cu_nama_kelurahan+"</option>");
                    document.getElementById("r_"+cu_gender).checked = true;
                }
                //console.log(data);
            }
        });

        // callback handler that will be called on success
        request.done(function (response, textStatus, jqXHR, data){
            // log a message to the console
            //console.log("Hooray, it worked!");
        });
                         
    }
}

function filterkota(){


    var idprovinsi= $('#dd-provinsi').find('option:selected').val();


    // fire off the request to /ajax.php
    request = jQuery.ajax({
        url: base_url+"ajax",
        type: "post",
        data: ({idprovinsi:idprovinsi,  flag:'filterkota'}),
        success: function (data) {
            jQuery( '#dd-kota' ).html(data);
        }
    });

    // callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR, data){
        // log a message to the console
        //console.log("Hooray, it worked!");
    });

}

function filterkecamatan(){


    var idkota= $('#dd-kota').find('option:selected').val();


    // fire off the request to /ajax.php
    request = jQuery.ajax({
        url: base_url+"ajax",
        type: "post",
        data: ({idkota:idkota,  flag:'filterkecamatan'}),
        success: function (data) {
            jQuery( '#dd-kecamatan' ).html(data);
        }
    });

    // callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR, data){
        // log a message to the console
        //console.log("Hooray, it worked!");
    });

}

function filterkelurahan(){


    var idkecamatan= $('#dd-kecamatan').find('option:selected').val();


    // fire off the request to /ajax.php
    request = jQuery.ajax({
        url: base_url+"ajax",
        type: "post",
        data: ({idkecamatan:idkecamatan,  flag:'filterkelurahan'}),
        success: function (data) {
            jQuery( '#dd-kelurahan' ).html(data);
        }
    });

    // callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR, data){
        // log a message to the console
        //console.log("Hooray, it worked!");
    });

}


function register(handledata){

    var fname = document.getElementsByName("firstname")[0].value;
    var lname = document.getElementsByName("lastname")[0].value;
    var email = document.getElementsByName("email")[0].value;
    var pnumber = document.getElementsByName("phonenumber")[0].value;
    var age = document.getElementsByName("age")[0].value;
    var dprofesi = document.getElementsByName("detail-profesi")[0].value;
    var gender = $('input[name="gender"]:checked').val();

    var idprovinsi= $('#dd-provinsi').find('option:selected').val();
    var idkota= $('#dd-kota').find('option:selected').val();
    var idkecamatan= $('#dd-kecamatan').find('option:selected').val();
    var idkelurahan= $('#dd-kelurahan').find('option:selected').val();
    var profesi= $('#dd-profesi').find('option:selected').val();

    if ($('#term').is(":checked"))
    {
      var term= "term";
    }
    
    // fire off the request to /ajax.php
    request = jQuery.ajax({
        url: base_url+"ajax",
        type: "post",
        data: ({firstname:fname, term:term, lastname:lname, email:email, phonenumber:pnumber, age:age, profesi:profesi, dprofesi:dprofesi, gender:gender, idprovinsi:idprovinsi, idkota:idkota, idkecamatan:idkecamatan, idkelurahan:idkelurahan, flag:'register'}),
        success: function (data) {
            if(data == "TRUE"){

            }else if (data == "FALSE_EMAIL"){
                alert("Email telah digunakan!");

            }else if (data == "FALSE_TERM"){
                alert("Setujui persyaratan dan ketentuan atau klik untuk membaca!");

            }else{
                alert("Lengkapi data diri Anda!");
                //alert(data);
            }

            handledata(data);
            
        }
    });


    // callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR, data){

        // log a message to the console
        //console.log("Hooray, it worked!");
    });
    
    // prevent default posting of form
    event.preventDefault();   

}

function savedata(x,y,z,i){

    var answear = $('input[name="quest'+x+i+'"]:checked').val();

    // fire off the request to /ajax.php
    request = jQuery.ajax({
        url: base_url+"ajax",
        type: "post",
        data: ({id_concern:x, id_question:y, id_option:z, answear:answear,  flag:'savedata'}),
        success: function (data) {
            //console.log(data);
        }
    });

    // callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR, data){
        // log a message to the console
        //console.log("Hooray, it worked!");
    });
    
}

function closePopup(){
    $("#popup1").removeClass('show');
    $("#popup1").addClass('hide');
}

// ================ Main Code : STEPS ======================//

$(function(){
	$("#wizard").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true, 
        transitionEffectSpeed: 500,
        labels: {
            finish: "Submit",
            next: "Forward",  
            previous: "Backward"
        }
    });
    $('.wizard > .steps li a').click(function(){
    	$(this).parent().addClass('checked');
		$(this).parent().prevAll().addClass('checked');
		$(this).parent().nextAll().removeClass('checked');
    });


    // Custome JQuery to Data Process

    $('.forward.register').click(function(){

        register(function(output){
            if(output == "TRUE"){
                $("#wizard").steps('next');
                //alert($(window).height());
                //var elmnt = document.getElementById("myDIV");
                $(window).scrollTop -= 5000; 
            }
        });
        
    })

    $('.forward.sub').click(function(){
        var x = $(this).data("conid");
        var questcount = document.getElementsByName("quesCount-"+x)[0].value;
        var hasil = 0;
        for (var i = 1 ; i <= questcount; i++) {
            var answears = $('input[name="quest'+x+i+'"]:checked').val();
            var hasil = (answears*1)+(hasil*1);
        }   

        // fire off the request to /ajax.php
        request = jQuery.ajax({
            url: base_url+"ajax",
            type: "POST",
            data: ({id_concern:x, flag:'cekdataconcern'}),
            success: function (data) {
                if(data == "TRUE"){
                    // fire off the request to /ajax.php
                    request = jQuery.ajax({
                        url: base_url+"ajax",
                        type: "post",
                        data: ({id_concern:x, hasil:hasil,  flag:'result'}),
                        success: function (data) {

                            //console.log(data);
                            
                            $("#popup1 .content .hasil").html(data);
                            $("#popup1 img").attr('src', base_url+'images/emoji/'+data+'.gif');

                            $("#popup1").removeClass('hide');
                            $("#popup1").addClass('show');
                            $("#wizard").steps('next');
                        }
                    });
                }else{
                    alert("Lengkapi jawaban Anda "+data+" untuk melanjutkan!");
                }
            }
        });

        // callback handler that will be called on success
        request.done(function (response, textStatus, jqXHR, data){
            // log a message to the console
            //console.log("Hooray, it worked!");
        });

        
    })


    // Custome Jquery Step Button
    $('.finish').click(function(){
        var x = $(this).data("conid");
        var questcount = document.getElementsByName("quesCount-"+x)[0].value;
        var hasil = 0;
        for (var i = 1 ; i <= questcount; i++) {
            var answears = $('input[name="quest'+x+i+'"]:checked').val();
            var hasil = (answears*1)+(hasil*1);
        }   

        // fire off the request to /ajax.php
        request = jQuery.ajax({
            url: base_url+"ajax",
            type: "POST",
            data: ({id_concern:x, flag:'cekdataconcern'}),
            success: function (data) {
                //console.log(data);
                if(data == "TRUE"){
                    // fire off the request to /ajax.php
                    request = jQuery.ajax({
                        url: base_url+"ajax",
                        type: "post",
                        data: ({id_concern:x, hasil:hasil,  flag:'result'}),
                        success: function (data) {
                            // fire off the request to /ajax.php
                            request = jQuery.ajax({
                                url: base_url+"ajax",
                                type: "POST",
                                data: ({flag:'finish'}),
                                success: function (data) {
                                    if(data == "FALSE"){
                                        
                                        alert("Lengkapi jawaban Anda untuk melanjutkan!");        

                                    }else{

                                        window.location.href = base_url+"result";
                                    }

                                }
                            });
                            

                        }
                    });
                }else{
                    alert("Lengkapi jawaban Anda untuk melanjutkan!");
                }
            }
        });
        

        // callback handler that will be called on success
        request.done(function (response, textStatus, jqXHR, data){
            // log a message to the console
            //console.log("Hooray, it worked!");
        });
    
    })

    $('.forward').click(function(){
    	
    })
    $('.backward').click(function(){
        $("#wizard").steps('previous');
    })
    // Select Dropdown
    $('html').click(function() {
        $('.select .dropdown').hide(); 
    });
    $('.select').click(function(event){
        event.stopPropagation();
    });
    $('.select .select-control').click(function(){
        $(this).parent().next().toggle();
    })    
    $('.select .dropdown li').click(function(){
        $(this).parent().toggle();
        var text = $(this).attr('rel');
        $(this).parent().prev().find('div').text(text);
    })

})