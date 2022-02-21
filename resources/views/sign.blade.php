<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Bot</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="static/css/chat.css">
    <link rel="stylesheet" href="static/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>PHP Signature Pad Example - Tutsmake.com</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script type="text/javascript" src="static/scripts/sign.js"></script>
    <link rel="stylesheet" type="text/css" href="static/css/jquery.signature.css">

    <style>
         #myCanvas {
            border:4px solid #444;
            /* border-radius: 15px; */
            background-color: #fafafa;
            width:239px !important;
            height:130px;
        }

.direct-chat-text {
  border-radius: 0.3rem;
  background: #d2d6de;
  border: 1px solid #d2d6de;
  color: #444;
  position: relative;
}
</style>
</head>

<body>
    <canvas id="myCanvas" ></canvas><br>
    <button class='btn btn-info' type="button" value="Reset" id='resetSign'>Reset</button>
    <button class='btn btn-danger' type="button" value="Submit" id='resetSign'>Submit</button>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function()
        {
            console.log('echoo...');
            $('#myCanvas').sign({
                resetButton: $('#resetSign'),
                lineWidth: 5,
                height:300,
                width:400
            });
        });
</script>
<script src="static/scripts/sign.js"></script>
</html>
