<html>
<head>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<style>
.signature-pad {
    position: absolute;
    left: 0;
    top: 0;
    width: 240px;
    height: 140px;
    background-color: white;
}
button {
    margin-top: 137px;
    margin-left: 5px;
}
</style>
<body>
<canvas id="signature-pad" class="signature-pad" width=239px height=130px></canvas>
<button id="save-png" class='btn-success'>Save</button>
<button id="clear" class='btn-danger'>Clear</button>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="static/scripts/signsave.js"></script>
