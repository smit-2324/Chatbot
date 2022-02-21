<html>
<head>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
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


<button id="save-png" class='btn-success'>Submit</button>
<button id="clear" class='btn-danger'>Clear</button>

</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
<script>
var canvas = document.getElementById('signature-pad');

// Adjust canvas coordinate space taking into account pixel ratio,
// to make it look crisp on mobile devices.
// This also causes canvas to be cleared.
function resizeCanvas() {
    // When zoomed out to less than 100%, for some very strange reason,
    // some browsers report devicePixelRatio as less than 1
    // and only part of the canvas is cleared then.
    var ratio =  Math.max(window.devicePixelRatio || 1, 1);
    canvas.width = canvas.offsetWidth * ratio;
    canvas.height = canvas.offsetHeight * ratio;
    canvas.getContext("2d").scale(ratio, ratio);
}

window.onresize = resizeCanvas;
resizeCanvas();

var signaturePad = new SignaturePad(canvas, {
  backgroundColor: 'rgb(255, 255, 255)' // necessary for saving image as JPEG; can be removed is only saving as PNG or SVG
});

document.getElementById('save-png').addEventListener('click', function () {
  if (signaturePad.isEmpty()) {
    return alert("Please provide a signature first.");
  }
  var data = signaturePad.toDataURL('image/png');
  console.log(data);

});

document.getElementById('clear').addEventListener('click', function () {
  signaturePad.clear();
});


</script>