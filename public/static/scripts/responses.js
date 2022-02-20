function getBotResponse(input) {
    //rock paper scissors
    if (input == "rock") {
        return "paper";
    } else if (input == "paper") {
        return "scissors";
    } else if (input == "scissors") {
        return "rock";
    }

    $.ajax({
        type:'POST',
        url:'botman',
        data:'',
        success:function(data) {
       console.log("56");
        }
     });
  }
