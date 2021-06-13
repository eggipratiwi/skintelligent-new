var base_url = 'http://localhost/questionnaire/';

function register(){
    
    var fname = document.getElementsByName("firstname")[0].value;
    var lname = document.getElementsByName("lastname")[0].value;
    var email = document.getElementsByName("email")[0].value;
    var pnumber = document.getElementsByName("phonenumber")[0].value;
    var age = document.getElementsByName("age")[0].value;
    var city = $("#city.select-control").html();
    var profession = $("#profession.select-control").html();
    var gender = $('input[name="gender"]:checked').val();
    
    // fire off the request to /ajax.php
    request = jQuery.ajax({
        url: base_url+"ajax",
        type: "post",
        data: ({firstname:fname, lastname:lname, email:email, phonenumber:pnumber, age:age, city:city, profession:profession, gender:gender, flag:'register'}),
        success: function (data) {
            console.log(data);
            
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

function concerns(){

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
        var idcon = $(this).attr("data-con");
        alert(idcon);

        register();
        //alert("register done");
    })

    $('.forward.sub').click(function(){
        concerns();
        //alert("register done");
    })


    // Custome Jquery Step Button

    $('.forward').click(function(){
    	$("#wizard").steps('next');
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




