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
    let firstMessage = "Hello Test3,This is an Virtual Address Confirmation system on behalf of your new employer, kindly complete the process to proceed further,To Proceed further Please Click On Yes and Allow Location Services <button type='button' onclick='yes()' class='btn btn-info col-sm-5'>YES</button>" 
   + "<button type='button' onclick='no()' class='btn btn-danger float-right col-sm-5'>NO</button>"
  
    document.getElementById("botStarterMessage").innerHTML = '<p class="botText"><span>' + firstMessage  + '</span></p>';

    let time = getTime();

    $("#chat-timestamp").append(time);
    document.getElementById("userInput").scrollIntoView(false);
  
}

firstBotMessage();

function yes(){
    $("#textInput").val('yes');
    var step = 1;
    getResponse(step);
}




// Retrieves the response
function getHardResponse(userText,step) {
    let botResponse = getBotResponse(userText,step);
    let botHtml = '<p class="botText"><span>' + botResponse + '</span></p>';
    $("#chatbox").append(botHtml);

    document.getElementById("chat-bar-bottom").scrollIntoView(true);
}

//Gets the text text from the input box and processes it
function getResponse(step) {
  
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


function imageUpload(){
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
           url:"ajaxRequest",
           data:fd,
           contentType: false,
           processData: false,
           success:function(){
            var step = 2;
            getResponse(step);
           }
        });
}

function addressProof(){
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
           url:"ajaxRequest",
           data:fd,
           contentType: false,
           processData: false,
           success:function(){
            var step = 3;
            getResponse(step);
           }
        });
}
function idProof(){
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
           url:"ajaxRequest",
           data:fd,
           contentType: false,
           processData: false,
           success:function(){
            var step = 4;
            getResponse(step);
           }
        });
}

function submitDocument(){
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
       url:"ajaxRequest",
       data:{currentAddress,residentialType,addressProof,submitdocument},
       contentType: false,
       processData: false,
       success:function(){
        var step = 5;
        getResponse(step);
       }
    });
}
  
