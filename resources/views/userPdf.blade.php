<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
body {
  width: 230mm;
  height: 100%;
  margin: 0 auto;
  padding: 0;
  font-size: 12pt;
 
}
* {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}
.main-page {
  width: 210mm;
  min-height: 297mm;
  margin: 10mm auto;
  background: white;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
.sub-page {
  padding: 1cm;
  height: 297mm;
}

table{
    border-collapse: collapse;
    font-weight: bold;
    float: left;
    width: 40%;
    padding-left: 30px;
    }
  
      
      .no-outline:focus {
        outline: none;
      }
  
td{
    font-weight: bold;
    padding: 10px;
  
    border-top: 1px solid black;
    border-bottom: 1px solid black;
    border-left: 1px solid black;
    border-right: 1px solid black;
    }

.full-page{
    margin: 4px 100px 42px 100px
}
    .table-title{background:#ccc;color:#333;padding:10px;}
p.bold {font-weight: bold;margin: 5px 0px 5px 15px;}
table.no-border-part{border: none;border-collapse: unset;}
table.no-border-part td{border: none;padding: 5px 0px 5px 10px;}
table.funding-tbl-part td {padding: 5px 0px 5px 10px;}
td.blank-line {border-bottom: 2px solid #000!important;}
table.last-td-border td {
    border-bottom: 1px solid black;
} 
table.tbl-info {
    margin-top: 54px;
    width: 100%;
}
</style>
<body>
  
<div class="main-page">
      <div class="sub-page">
        <h3 align='center'>Employee Residental Address Verification Form</h3>
        <hr>
<table>
    <tbody>
        <tr>
            <td width="40%" >Instruction ID </td>
            <td></td>
        </tr>
        <tr>
            <td width="40%" >Name </td>
            <td> </td>
        </tr>
        <tr>
            <td width="40%">verifier relation:</td>
            <td> $user->respondent_name_and_relation_with_candidate</td>
        </tr>
        <tr>
            <td width="40%" >Address: </td>
            <td> $user->period_of_stay</td>
        </tr>
        <tr>
            <td width="40%" >Type of Address: </td>
            <td> $user->address_type</td>
        </tr>
        <tr>
            <td width="40%">Mobile Number:</td>
            <td> </td>
        </tr>
    </tbody>
</table>
<table style="margin-left:50px">
    <tbody>
        <tr>
            <td width="30%" >Ref id: </td>
            <td> 23233</td>
        </tr>
        <tr>
            <td width="30%" >Verification date </td>
            <td> $user->verified_at</td>
        </tr>
        <tr>
            <td width="30%" >verifier Name </td>
            <td> 23233</td>
        </tr>
        <tr>
            <td width="50%" >Comment </td>
            <td> 23233</td>
        </tr>
        <tr>
            <td width="30%">Verification status </td>
            <td> 23233</td>
        </tr>
    </tbody>
</table>
<br>
<div class="tbl-info">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
      <table class="tbl-info">
    <tbody>
        <tr>
            <td width="30%" >Description: </td>
            <td width="30%" >Source: </td>
            <td width="30%" >Distance: </td>
            <td width="50%" >Location Resolution Logic: </td>
            <td width="30%">Legend: </td>
        </tr>
        <tr>
            <td width="30%" >Description: </td>
            <td width="30%" >Source: </td>
            <td width="30%" >Distance: </td>
            <td width="50%" >Location Resolution Logic: </td>
            <td width="30%">Legend: </td>
        </tr>
        <tr>
            <td width="30%" >Description: </td>
            <td width="30%" >Source: </td>
            <td width="30%" >Distance: </td>
            <td width="50%" >Location Resolution Logic: </td>
            <td width="30%">Legend: </td>
        </tr>
    </tbody>
</table>
</div>   
</div>  
</div>
</body>
</html>
<script>
     