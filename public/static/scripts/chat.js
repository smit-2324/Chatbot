// Collapsible

var coll = document.getElementsByClassName("collapsible");

for (let i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function () {
        this.classList.toggle("active");

        var content = this.nextElementSibling;

        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }

    });
}

function getTime() {
    let today = new Date();
    hours = today.getHours();
    minutes = today.getMinutes();

    if (hours < 10) {
        hours = "0" + hours;
    }

    if (minutes < 10) {
        minutes = "0" + minutes;
    }

    let time = hours + ":" + minutes;
    return time;
}

// Gets the first message
function firstBotMessage() {
    let firstMessage = "<span class='.direct-chat-text'>Hello Test3,<br><br>This is an Virtual Address Confirmation system on behalf of your new employer, kindly complete the process to proceed further,<br><br>To Proceed further Please Click On Yes and Allow Location Services<br> <button type='button' onclick='yes()' class='btn btn-info col-sm-5'>YES</button>"
    + "<button type='button' onclick='no()' class='btn btn-danger float-right col-sm-5'>NO</button></span>";
  
    document.getElementById("botStarterMessage").innerHTML = '<p class="botText"><span>' + firstMessage  + '</span></p>';

    let time = getTime();

    $("#chat-timestamp").append(time);
    document.getElementById("userInput").scrollIntoView(false);
  
}

firstBotMessage();


// Retrieves the response
function getHardResponse(userText,step) {
    let botResponse = getBotResponse(userText,step);
    let botHtml = '<p class="botText"><span>' + botResponse + '</span></p>';
    $("#chatbox").append(botHtml);

    document.getElementById("chat-bar-bottom").scrollIntoView(true);
}

//Gets the text text from the input box and processes it
function getResponse(step) {
  console.log("5656");
    let userText = $("#textInput").val();

    // if (userText == "") {
    //     userText = "I love Code Palace!";
    // }

     let userHtml = '<p class="userText"><span>' + userText + '</span></p>';

    $("#textInput").val("");
    if(userText !== ""){
    $("#chatbox").append(userHtml);
    }
    document.getElementById("chat-bar-bottom").scrollIntoView(true);

    setTimeout(() => {
        getHardResponse(userText,step);
    }, 1000)

}

// Handles sending text via button clicks
function buttonSendText(sampleText) {
    let userHtml = '<p class="userText"><span>' + sampleText + '</span></p>';

    $("#textInput").val("");
    $("#chatbox").append(userHtml);
    document.getElementById("chat-bar-bottom").scrollIntoView(true);

    //Uncomment this if you want the bot to respond to this buttonSendText event
    // setTimeout(() => {
    //     getHardResponse(sampleText);
    // }, 1000)
}

function sendButton() {
    getResponse();
}

function heartButton() {
    buttonSendText("Heart clicked!")
}

// Press enter to send a message
$("#textInput").keypress(function (e) {
    if (e.which == 13) {
        getResponse();
    }
});


function yes(){
  var value =  $("#textInput").val('yes');
    var step = 1;
    getResponse(step);
    
}

function latitude(){
   
    var lat = $("#lat").val();
    var log = $("#log").val();
  
    var session = sessionStorage.setItem("lat" , lat);
    var session = sessionStorage.setItem("log" , log);
    var session = sessionStorage.setItem("lat1" , "23.345");
    var session = sessionStorage.setItem("log1" , "72.3456");

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

    $.ajax({
       type:'POST',
       url:'ajaxRequest?step=1',
       data:{lat,log},
       success:function(data){
        $("#external").val(data);
        var step = 2;
        getResponse(step);
       }
    });
}

function mapnext(){
    var step = 3;
    getResponse(step);
}
function imageUpload(){
    var external_id = $("#external").val();
    var selfie_path = new FormData();
    var files = $('#file')[0].files[0];
    selfie_path.append('file', files);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

        $.ajax({
           type:'POST',
           url:'ajaxRequest?external_id=' + external_id + '&step=3',
           data:selfie_path,
           contentType: false,
           processData: false,
           success:function(data){
            var step = 4;
            getResponse(step);
           }
        });
}

function addressProof(){
    var external_id = $("#external").val();
    var session = sessionStorage.setItem("external_id", external_id);;
    console.log('session',session);
    var fd = new FormData();
    var files = $('#file')[0].files[0];
    fd.append('file', files);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

        $.ajax({
           type:'POST',
           url:'ajaxRequest?external_id=' + external_id + '&step=4',
           data:fd,
           contentType: false,
           processData: false,
           success:function(){
            var step = 5;
            getResponse(step);
           }
        });
}
function idProof(){
    var external_id = $("#external").val();
    var fd = new FormData();
    var files = $('#file')[0].files[0];
    fd.append('file', files);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

        $.ajax({
           type:'POST',
           url:'ajaxRequest?external_id=' + external_id + '&step=5',
           data:fd,
           contentType: false,
           processData: false,
           success:function(){
            var step = 6;
            getResponse(step);
           }
        });
}

function submitDocument(){
  var external_id = $("#external").val();
  var currentAddress = $("#currentAddress").val();
  var residentialType = $("#residentialType").val();
  var addressProof = $("#AddressProof").val();
  var submitdocument = $("#submitdocument").val();

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

    $.ajax({
       type:'POST',
       url:'ajaxRequest?external_id=' + external_id + '&step=6',
       data:{currentAddress,residentialType,addressProof,submitdocument},
       success:function(){
        var step = 7;
        getResponse(step);
       }
    });
}





  
