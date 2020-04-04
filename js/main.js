
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
// $("#form1").submit(function (e) { 
//     e.preventDefault(); //prevent default action 
// 	var post_url = $(this).attr("action"); //get form action url
// 	var request_method = $(this).attr("method"); //get form GET/POST method
// 	var form_data = $(this).serialize(); //Encode form elements for submission
//     console.log(form_data);
//     console.log(post_url);
//     console.log(request_method);
    
	// $.ajax({
	// 	url : post_url,
	// 	type: request_method,
	// 	data : form_data+"&op=submit"
    // }).done(function(response){ 
    //     $parse_response = JSON.parse(response);
    //     if($parse_response.success == false){
    //         $("#server-results").html($parse_response.message);
    //     }
    //     if($parse_response.success == true){
    //         window.location.replace('index.php');
    //     }
	// });
//});

function doRedirect(){
    window.location.replace('home.php');
}


$("#form2").submit(function (e) { 
    e.preventDefault(); //prevent default action 
	var post_url = $(this).attr("action"); //get form action url
	var request_method = $(this).attr("method"); //get form GET/POST method
	var form_data = $(this).serialize(); //Encode form elements for submission
	console.log(form_data);
    
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
console.log(array);

elementArray.forEach(element => {
    element.addEventListener('click', (e) => {
        e.preventDefault();
        while(i < elementArray.length){
            array.push(element.value);
            console.log(array);
            
            // $.ajax({
            //     url : 'utilities.php',
            //     type: 'post',
            //     data : "clicked="+value+"&op=submit"
            //  });//.done(function(response){ 
            //     $parse_response = JSON.parse(response);
            //     if($parse_response.success == false){
            //         $("#server-results").html($parse_response.message);
            //     }
            //     if($parse_response.success == true){
            //         doRedirect();
            //     }
            // });
            break;
        }
        i++;
    });
});

// let val = (value) => {
//     array.push(value);
//     if(array.length == 12){
//         return array;
//     }
// }
// console.log(val);

// let yesbutton = document.querySelectorAll('.nexttab');

// let hiddenbutton = document.querySelectorAll('.hidden');

// for ( var a = 0; a<=yesbutton.length; ++a){

//     if (yesbutton[a].isClick){
//         let value = yesbutton[a].value;
        
//         if (value == "Yes") {
//             weightvalue = hiddenbutton[a].value; 
//         }
//         else {
//             weightvalue = 0;
//         }
//     }
// }
//console.log(yesbutton);
// for ( var a = 0; a<=yesbutton.length; ++a){

//     if (yesbutton[a].clicked){
//         value = yesbutton[a].value;
        
//         if (value == "Yes") {
//         weightvalue = hiddenbutton[a].value;
        
//         }
//         else {
//         weightvalue = 0;
//         }
        
//     }
// }
// for ( var a = 0; a<=yesbutton.length; ++a){

//     if ($(yesbutton[a]).click(function(){
//     value = $(yesbutton[a]).val();
//     console.log(value);
    
//     if (value == "Yes") {
//     weightvalue = $(hiddenbutton[a]).val();
//     console.log(weightvalue);
    
    
//     }
//     else {
//     weightvalue = 0;
//     }
    
//     }));
    
// }
