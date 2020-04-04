
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

function doRedirect(){
    window.location.replace('home.php');
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
            doRedirect();
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
                
                $.ajax({
                    url : 'utilities.php',
                    type: 'post',
                    data : "data="+array+"&op=submit&click="+click
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
