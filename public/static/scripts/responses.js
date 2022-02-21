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


    switch (5) {
        case 1:
            return "<label for='myfile'>SUpload your selfie: (Take the Selfie infront of your house):</label><input type='file' id='file' name='file' /><button type='submit' value='submit' onclick='imageUpload()'>Submit</button>"; 
             break;
        case 2:
            return "<label for='myfile'>Upload Any One of the following Address Proof:( Driving Licence, Aadhar Card, Ration Card, Voter's Id, Pass Port )</label><input type='file' id='file' name='file' ><button type='submit' value='submit' onclick='addressProof()'>Submit</button>"; 
            break;
        case 3:
            return "<label for='myfile'>Upload any one of your following ID Proof(Pan Card Aadhar Card, Driving licence, Pass Port )</label><input type='file' id='file' name='file'><button type='submit' value='submit' onclick='idProof()'>Submit</button>"; 
            break;
        case 4:
            return "<label for='currentAddress'>Period of Stay at Current Address</label><br><input type='text' id='currentAddress' name='fname'>  <br> <label for='fname'>Residential Type</label> <br> <select name='languages' id='residentialType'><option value='Ownned'>Ownned</option><option value='Rented'>Rented</option><option value='Parental'>Parental</option><option value='PG'>PG</option><option value='others'>others</option></select>  <br> <label for='fname'>Address Type</label> <br>  <select name='languages' id='AddressProof'><option value='Permanent'>Permanent</option><option value='Present'>Present</option></select> </br> <label for='fname'>Period of Stay at Current </label><br><input type='text' id='submitdocument' name='fname'> <button onclick='submitDocument()'>submit</button>";
        case 5:
            return "<iframe style='border-color: black; border-width: 5px;height: 175px; width: 240px' src='/sign' title='W3Schools Free Online Web Tutorials'></iframe>";
              
    }            
          
            
}