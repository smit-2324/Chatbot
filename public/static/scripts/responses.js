function getBotResponse(input,step) {
    //rock paper scissors
    if (input == 'rock') {
        return 'paper';
    } else if (input == 'paper') {
        return 'scissors';
    } else if (input == 'scissors') {
        return 'rock';
    }

    // Simple responses


    switch (step) {
        case 1:
            return "<label class='form-label' for='latitude'><b>Latitude</b></label><input class='form-control' type='number' id='lat' name='lat' ><br><label class='form-label' for='longitude'><b>Longitude</b></label><input class='form-control' type='number' id='log' name='log' ><br><button id='latlogSubmit' class='btn btn-primary' type='submit' value='submit' onclick='latitude()'>Save</button>";
            break;
        case 2:
            return "<iframe style='border-color: black; border-width: 5px;height: 175px; width: 240px' id='mapid' src='/map' title='W3Schools Free Online Web Tutorials'/><br><button id='NextBtnMAP' class='btn btn-info' type='submit' value='submit' onclick='mapnext()'>Next</button>";
            break;
        case 3:
            return "<label for='myfile' class='fileText'>Upload your selfie: <br>(Take the Selfie infront of your house):</label><br><input class='btn btn-outline-info' type='file' id='file' name='file' /><br><br><button id='sUploadBtn' class='btn btn-success' type='submit' value='submit' onclick='imageUpload()'>Save</button>";
            break;
        case 4:
            return "<label for='myfile' class='fileText'>Upload Any One of the following Address Proof:( Driving Licence, Aadhar Card, Ration Card, Voter's Id, Pass Port )</label><input class='btn btn-outline-info' type='file' id='file' name='file' ><button id='aUploadBtn' class='btn btn-success' type='submit' value='submit' onclick='addressProof()'>Save</button>";
            break;
        case 5:
            return "<label for='myfile' class='fileText'>Upload any one of your following ID Proof(Pan Card Aadhar Card, Driving licence, Pass Port )</label><input class='btn btn-outline-info' type='file' id='file' name='file'><button id='proofeUploadBtn' class='btn btn-success' type='submit' value='submit' onclick='idProof()'>Save</button>";
            break;
        case 6:
            return "<label for='currentAddress' class='form-label'>Period of Stay at Current Address</label><br><input class='form-control' type='text' id='currentAddress' name='fname'>  <br> <label class='form-label' for='fname'>Residential Type</label> <br> <select class='form-select' name='languages' id='residentialType'><option value='Ownned'>Ownned</option><option value='Rented'>Rented</option><option value='Parental'>Parental</option><option value='PG'>PG</option><option value='others'>others</option></select>  <br> <label class='form-label' for='fname'>Address Type</label> <br>  <select class='form-select' name='languages' id='AddressProof'><option value='Permanent'>Permanent</option><option value='Present'>Present</option></select> </br> <label class='form-label' for='fname'>Period of Stay at Current </label><br><input class='form-control' type='text' id='submitdocument' name='fname'><br><button id='addressDataBtn' class='btn btn-success' onclick='submitDocument()'>Save</button>";
            break;
        case 7:
            return "<iframe style='border-color: black; border-width: 5px;height: 175px; width: 240px' src='/sign' title='W3Schools Free Online Web Tutorials'></iframe>";
            break;
    }
}


