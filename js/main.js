
onclick            /* -------------------------------------------------------------
                                      bootstrapTabControl
                                  ------------------------------------------------------------- */
function bootstrapTabControl() {
    var i, items = $('.nav-link'), pane = $('.tab-pane');
    // next
    $('.nexttab').on('click', function () {
        for (i = 0; i < items.length; i++) {
            if ($(items[i]).hasClass('active') == true) {
                break;
            }
        }
        if (i < items.length - 1) {
            // for tab
            $(items[i]).removeClass('active');
            $(items[i + 1]).addClass('active');
            // for pane
            $(pane[i]).removeClass('show active');
            $(pane[i + 1]).addClass('show active');
        }

    });
    // Prev
    $('.prevtab').on('click', function () {
        for (i = 0; i < items.length; i++) {
            if ($(items[i]).hasClass('active') == true) {
                break;
            }
        }
        if (i != 0) {
            // for tab
            $(items[i]).removeClass('active');
            $(items[i - 1]).addClass('active');
            // for pane
            $(pane[i]).removeClass('show active');
            $(pane[i - 1]).addClass('show active');
        }
    });
}
bootstrapTabControl();

var clicks = 0;
function onClick() {
    clicks += 1;
    document.getElementById("clicks").innerHTML = clicks;
    switch (clicks) {
        case 0:
        case 1:
        case 2:
            document.getElementById("holder").innerHTML = 'LOW.';
            document.getElementById("holder").style.color = '#90ee90';
            document.getElementById("resulthold").innerHTML = 'You may be stressed,get some rest.';
            // code block
            break;
        case 3:
        case 4:
        case 5:
            document.getElementById("holder").innerHTML = 'MEDIUM.';
            document.getElementById("holder").style.color = '#ffbf00';
            document.getElementById("resulthold").innerHTML = 'Drink water regularly and observe personal good hygiene.<br />Pay attention to your health and redo test after two days.';
            // code block
            break;
        case 6:
        case 7:
        case 8:
        case 9:
        case 10:
        case 11:
        case 12:
            document.getElementById("holder").innerHTML = 'HIGH.';
            document.getElementById("holder").style.color = '#ff5500';
            document.getElementById("resulthold").innerHTML = 'Please see a doctor immediately.Do not panic,<br />isolate yourself from friends and family.';

            // code block
            break;
        case 13:
        case 14:
        case 15:
        case 16:
        case 17:
        case 18:
        case 19:
        case 20:
        case 21:
        case 22:
        case 23:
            document.getElementById("holder").innerHTML = 'SEVERE.';
            document.getElementById("holder").style.color = '#FF0000';
            document.getElementById("resulthold").innerHTML = 'Do not panic,isolate yourself from friends and family.<br />Call 0800-9700-0010,SMS: 08099555577 or<br /> WHATSAPP:07087110839';

            // code block
            break;
        default:
            // code block
            document.getElementById("holder").innerHTML = 'HELLO.';
    }
};
function onClickdouble() {
    clicks += 2;
    document.getElementById("clicks").innerHTML = clicks;
    switch (clicks) {
        case 0:
        case 1:
        case 2:
            document.getElementById("holder").innerHTML = 'LOW.';
            document.getElementById("holder").style.color = '#90ee90';
            document.getElementById("resulthold").innerHTML = 'You may be stressed,get some rest.';
            // code block
            break;
        case 3:
        case 4:
        case 5:
            document.getElementById("holder").innerHTML = 'MEDIUM.';
            document.getElementById("holder").style.color = '#ffbf00';
            document.getElementById("resulthold").innerHTML = 'Drink water regularly and observe personal good hygiene.<br />Pay attention to your health and redo test after two days.';
            // code block
            break;
        case 6:
        case 7:
        case 8:
        case 9:
        case 10:
        case 11:
        case 12:
            document.getElementById("holder").innerHTML = 'HIGH.';
            document.getElementById("holder").style.color = '#ff5500';
            document.getElementById("resulthold").innerHTML = 'Please see a doctor immediately.Do not panic,<br />isolate yourself from friends and family.';

            // code block
            break;
        case 13:
        case 14:
        case 15:
        case 16:
        case 17:
        case 18:
        case 19:
        case 20:
        case 21:
        case 22:
        case 23:
            document.getElementById("holder").innerHTML = 'SEVERE.';
            document.getElementById("holder").style.color = '#FF0000';
            document.getElementById("resulthold").innerHTML = 'Do not panic,isolate yourself from friends and family.<br />Call 0800-9700-0010,SMS: 08099555577 or<br /> WHATSAPP:07087110839';

            // code block
            break;
        default:
            // code block
            document.getElementById("holder").innerHTML = 'HELLO.';
    }
};
function onClicktriple() {
    clicks += 3;
    document.getElementById("clicks").innerHTML = clicks;
    switch (clicks) {
        case 0:
        case 1:
        case 2:
            document.getElementById("holder").innerHTML = 'LOW.';
            document.getElementById("holder").style.color = '#90ee90';
            document.getElementById("resulthold").innerHTML = 'You may be stressed,get some rest.';
            // code block
            break;
        case 3:
        case 4:
        case 5:
            document.getElementById("holder").innerHTML = 'MEDIUM.';
            document.getElementById("holder").style.color = '#ffbf00';
            document.getElementById("resulthold").innerHTML = 'Drink water regularly and observe personal good hygiene.<br />Pay attention to your health and redo test after two days.';
            // code block
            break;
        case 6:
        case 7:
        case 8:
        case 9:
        case 10:
        case 11:
        case 12:
            document.getElementById("holder").innerHTML = 'HIGH.';
            document.getElementById("holder").style.color = '#ff5500';
            document.getElementById("resulthold").innerHTML = 'Please see a doctor immediately.Do not panic,<br />isolate yourself from friends and family.';

            // code block
            break;
        case 13:
        case 14:
        case 15:
        case 16:
        case 17:
        case 18:
        case 19:
        case 20:
        case 21:
        case 22:
        case 23:
            document.getElementById("holder").innerHTML = 'SEVERE.';
            document.getElementById("holder").style.color = '#FF0000';
            document.getElementById("resulthold").innerHTML = 'Do not panic,isolate yourself from friends and family.<br />Call 0800-9700-0010,SMS: 08099555577 or<br /> WHATSAPP:07087110839';

            // code block
            break;
        default:
            // code block
            document.getElementById("holder").innerHTML = 'HELLO.';
    }
};

function noClick() {
    clicks += 0;
    document.getElementById("clicks").innerHTML = clicks;
    switch (clicks) {
        case 0:
        case 1:
        case 2:
            document.getElementById("holder").innerHTML = 'LOW.';
            document.getElementById("holder").style.color = '#90ee90';
            document.getElementById("resulthold").innerHTML = 'You may be stressed,get some rest.';
            // code block
            break;
        case 3:
        case 4:
        case 5:
            document.getElementById("holder").innerHTML = 'MEDIUM.';
            document.getElementById("holder").style.color = '#ffbf00';
            document.getElementById("resulthold").innerHTML = 'Drink water regularly and observe personal good hygiene.<br />Pay attention to your health and redo test after two days.';
            // code block
            break;
        case 6:
        case 7:
        case 8:
        case 9:
        case 10:
        case 11:
        case 12:
            document.getElementById("holder").innerHTML = 'HIGH.';
            document.getElementById("holder").style.color = '#ff5500';
            document.getElementById("resulthold").innerHTML = 'Please see a doctor immediately.Do not panic,<br />isolate yourself from friends and family.';

            // code block
            break;
        case 13:
        case 14:
        case 15:
        case 16:
        case 17:
        case 18:
        case 19:
        case 20:
        case 21:
        case 22:
        case 23:
            document.getElementById("holder").innerHTML = 'SEVERE.';
            document.getElementById("holder").style.color = '#FF0000';
            document.getElementById("resulthold").innerHTML = 'Do not panic,isolate yourself from friends and family.<br />Call 0800-9700-0010,SMS: 08099555577 or<br /> WHATSAPP: 07087110839';

            // code block
            break;
        default:
            // code block
            document.getElementById("holder").innerHTML = 'HELLO.';
    }
};

function doRedirect(url){
    window.location.replace(url);
}

$("#form2").submit(function (e) { 
    e.preventDefault(); //prevent default action 
	var post_url = $(this).attr("action"); //get form action url
	var request_method = $(this).attr("method"); //get form GET/POST method
	var form_data = $(this).serialize(); //Encode form elements for submission
    
	$.ajax({
		url : post_url,
		type: request_method,
		data : form_data+"&op=login"
    }).done(function(response){ 
        $parse_response = JSON.parse(response);
        if($parse_response.success == false){
            $("#server-results").html($parse_response.message);
        }
        if($parse_response.success == true){
            doRedirect('home.php');
        }
	});
});


let elementArray = document.querySelectorAll('.nexttab');
let click = 0;
let array = [];
let i = 0; 

elementArray.forEach(element => {
    element.addEventListener('click', (e) => {
        e.preventDefault();
        while(i < elementArray.length){
            array.push(element.value);
            if(element.value == "YES" && i == 0){
                click +=1;
            }
            if(element.value == "YES" && i == 1){
                click +=1;
            }
            if(element.value == "YES" && i == 2){
                click +=1;
            }
            if(element.value == "YES" && i == 3){
                click +=1;
            }
            if(element.value == "YES" && i == 4){
                click +=1;
            }
            if(element.value == "YES" && i == 5){
                click +=1;
            }
            if(element.value == "YES" && i == 6){
                click +=1;
            }
            if(element.value == "YES" && i == 7){
                click +=2;
            }
            if(element.value == "YES" && i == 8){
                click +=2;
            }
            if(element.value == "YES" && i == 9){
                click +=3;
            }
            if(element.value == "YES" && i == 10){
                click +=3;
            }
            if(element.value == "YES" && i == 11){
                click +=3;
            }
            if(array.length == 12){  
                let user_id = $("#user_id").val()
                $.ajax({
                    url : 'utilities.php',
                    type: 'post',
                    data : "data="+array+"&op=submit&click="+click+"&user_id="+user_id
                 }).done(function(response){ 
                    $parse_response = JSON.parse(response);
                    // if($parse_response.success == false){
                    //     $("#server-results").html($parse_response.message);
                    // }
                    // if($parse_response.success == true){
                    // }
                });
            }
            break;
        }
        i++;
    });
});

function validation() {
    if ($("#phone_or_email").val() == "") {
        $("#phone_or_email").addClass("is-invalid");
        return false;
    } else {
        $("#phone_or_email").removeClass("is-invalid");
    }
}
$(document).ready(function(e) {
    $("#phone_or_email").on("keyup", function() {
        // var regPhone = /^[0]\d{10}$/;
        // var regxMail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
        if ($("#phone_or_email").val() == "") {
            $("#phone_or_email").addClass("is-invalid");
            return false;
        } else{
            $("#phone_or_email").removeClass("is-invalid");
        }
    });
});

//index.html 
$("#singnupFrom").submit(function (e) { 
    e.preventDefault(); //prevent default action 
	var post_url = $(this).attr("action"); //get form action url
	var request_method = $(this).attr("method"); //get form GET/POST method
    var form_data = $(this).serialize(); //Encode form elements for submission
    console.log(form_data);
	$.ajax({
		url : post_url,
		type: request_method,
		data : form_data+"&op=signup&tested=NO"
    }).done(function(response){ 
        $parse_response = JSON.parse(response);
        if($parse_response.success == false){
            $("#server-results").empty();
            $("#server-results").html($parse_response.message);
        }
        if($parse_response.success == true){
            doRedirect('login.php');
        }
	});
});

// $("#signinForm").submit(function (e) { 
//     e.preventDefault(); //prevent default action 
// 	//var post_url = $(this).attr("action"); //get form action url
// 	var request_method = $(this).attr("method"); //get form GET/POST method
//     var form_data = $(this).serialize(); //Encode form elements for submission
//     console.log(form_data);
// 	$.ajax({
// 		url : post_url,
// 		type: request_method,
// 		data : form_data+"&op=signin"
//     }).done(function(response){ 
//         $parse_response = JSON.parse(response);
//         if($parse_response.success == false){
//             $("#server-results").empty();
//             $("#server-results").html($parse_response.message);
//         }
//         if($parse_response.success == true){
//             doRedirect('user_home.php');
//         }
// 	});
// });

function getDetails(id){
    $.ajax({
        url: 'utilities.php',
        type: 'get',
        data: {data_id: id}
    }).done(function(response){
        let result = JSON.parse(response);
        let data = result.message;
        
        if(result.success == true){
            let html = `<span>RESULT=> ${data[13]}</span><br/>
            <span>COUGH=> ${data[1]}</span><br/>
            <span>COLD=> ${data[2]}</span><br/>
            <span>DIARRHEA=> ${data[3]}</span><br/>
            <span>SORE THROAT=> ${data[4]}</span><br/>
            <span>BODY ACHE=> ${data[5]}</span><br/>
            <span>HEADACHE=> ${data[6]}</span><br/>
            <span>HIGH TEMPERATURE=> ${data[7]}</span><br/>
            <span>BREATHING DIFFICULTY=> ${data[8]}</span><br/>
            <span>FATIGUE=> ${data[9]}</span><br/>
            <span>TRAVELLED WITHIN 14 DAYS? ${data[10]}</span><br/>
            <span>TRAVELLED TO INFECTED AREA? ${data[11]}</span><br/>
            <span>CONTACT WITH INFECTED PERSON? ${data[12]}</span><br/>`;
            $('.display-details').html(html);
        }else if(result.success == false){
            $('.display-details').html(`<p class='display-4 text-center'>${result.message}</p>`);
        }
    })
}
