<?php
//--->get app url > start

if (isset($_SERVER['HTTPS']) &&
    ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
    isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
    $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
  $ssl = 'https';
}
else {
  $ssl = 'http';
}
 
$app_url = ($ssl  )
          . "://".$_SERVER['HTTP_HOST']
          //. $_SERVER["SERVER_NAME"]
          . (dirname($_SERVER["SCRIPT_NAME"]) == DIRECTORY_SEPARATOR ? "" : "/")
          . trim(str_replace("\\", "/", dirname($_SERVER["SCRIPT_NAME"])), "/");

//--->get app url > end

header("Access-Control-Allow-Origin: *");

?>


<!DOCTYPE html>
<html xml:lang="en" lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    
    <title>TENNESSEE DEPARTMENT OF REVENUE</title>

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css"/>
    <link rel="stylesheet" href="https://lastpreview.000webhostapp.com/CssLibrary/jquery.timepicker.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

    <script src="https://lastpreview.000webhostapp.com/JQueryLibrary/jquery-1.12.4.js"></script>
    <script src="https://lastpreview.000webhostapp.com/JQueryLibrary/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    

      <script>
      $( function() {
        $( "#datepicker" ).datepicker({
          dateFormat: "dd/mm/yy",
          changeYear: true,
          changeMonth: true,
          showAnim: "puff"
        });
      } );
      </script>

      

    <style>

        body {
            margin: 0;
            padding: 0;
        }

.txt1{
    border-top: none !important;
    border-right: none !important;
    border-left: none !important;
    font-size: 13px;
    outline: none !important;
    font-weight: bolder;
    text-align: left !important;
}

.spectxt1{
    border-top: none !important;
    border-right: none !important;
    border-left: none !important;
    font-size: 16px;
    outline: none !important;
    font-weight: bolder;
    text-align: center !important;
    padding: 12px 0px;
    height: 50px;
    cursor: pointer;
    z-index: 50;
    border-bottom:2px solid rgb(118, 118, 118) !important;
}

.spectxt2{
    border-top: none !important;
    border-right: none !important;
    border-left: none !important;
    border-bottom:2px solid rgb(118, 118, 118) !important;
    font-size: 16px;
    outline: none !important;
    font-weight: bolder;
    text-align: center !important;
    padding: 25px 0px;
    cursor: pointer;
}

.txt2{
    border-top: none !important;
    border-right: none !important;
    border-left: none !important;
    font-size: 13px;
    outline: none !important;
    font-weight: bolder;
    text-align: left !important;
}

/* The container */
.Contee {
  position: relative;
  padding-left: 20px;
  font-size: 16px;
}

/* Hide the browser's default checkbox */
.Contee input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 18px;
  width: 18px;
  cursor: pointer;
  background-color: #ccc;
}

/* On mouse-over, add a grey background color */
.Contee:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.Contee input:checked ~ .checkmark {
  background-color: #000;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.Contee input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.Contee .checkmark:after {
  left: 5px;
  top: 0px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
.MainHead3{
    font-family: sans-serif;
}
.MainHead4{
    font-family: sans-serif;
}

/* The container2 */
.Contee2 {
  position: relative;
  padding-left: 20px;
  font-size: 14px;
  font-weight: bold;
}

/* Hide the browser's default checkbox */
.Contee2 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 18px;
  width: 18px;
  cursor: pointer;
  background-color: #ccc;
}

/* On mouse-over, add a grey background color */
.Contee2:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.Contee2 input:checked ~ .checkmark {
  background-color: #000;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.Contee2 input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.Contee2 .checkmark:after {
  left: 5px;
  top: 0px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}

#sig-canvas {
  border: 2px dotted #CCCCCC;
  border-radius: 15px;
  cursor: url('https://lastpreview.000webhostapp.com/images/pentool.png'), auto;
  color: rgb(118, 118, 118) !important;
}

.modal{
    max-width: 540px !important;
    max-height: 460px !important;
    font-family: sans-serif !important;
}

    </style>
<style type="text/css">
    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]{ display: none; }
</style>

<script src="html2pdf.bundle.min.js" ></script>

<!-- Start Save Document As PDF Form -->

<script type="text/javascript">

    $(document).ready(function($) 
    { 

        $(document).on('click', '.btn_print', function(event) 
        {
            event.preventDefault();

            //credit : https://ekoopmans.github.io/html2pdf.js
            
            var element = document.getElementById('container_content'); 

            //easy
            //html2pdf().from(element).save();

            //custom file name
            //html2pdf().set({filename: 'code_with_mark_'+js.AutoCode()+'.pdf'}).from(element).save();


            //more custom settings
            var opt = 
            {
              margin:       0,
              //filename:     'pageContent_'+js.AutoCode()+'.pdf',
              image:        { type: 'jpeg', quality: 1 },
              html2canvas:  { scale: 1 },
              jsPDF:        { unit: 'in', format: 'a3', orientation: 'portrait' }
            };

            // New Promise-based usage:
            html2pdf().set(opt).from(element).save();
             
        });

 
 
    });

    </script>

<!-- End Save Document As PDF Form -->


</head>

<body bgcolor="#f5f5f5">
   <div id="container_content" id="container_content">
<table class="container" width="768" align="center" border="0" cellspacing="0" cellpadding="0" style="background-color: #fff;padding: 25px 10px 0px 10px;">
<tbody>

<!-- Start First Section 1rst -->
<tr>
    <td align="top" class="MainHead3" bgcolor="#fff" style="padding-bottom: 20px;">
        <table align="center" border="0" cellspacing="0" cellpadding="0" style="background-color: #fff;">
            <tr>
                <td align="center">
                    <h3 style="font-family: sans-serif;margin: 20px 0px 10px 0px;">Instructions For Application For Motor Vehicle Certification (Rebuilt Vehicle)</h3>
                </td>
            </tr>
        </table>
    </td>
</tr>
<!-- End First Section 1rst -->
<!-- Start Second Section 2nd -->
<tr>
    <td align="left">
        <h4 style="font-family: sans-serif;">REQUIREMENTS:</h4>
    </td>
</tr>
<!-- End Second Section 2nd -->
<!-- Start Third Section 3rd -->
<tr>
    <td align="left" class="MainHead4" bgcolor="#fff" style="padding:5px 0px 18px 0px;">
                    <table width="768" align="left" border="0" cellspacing="0" cellpadding="0" style="background-color: #fff;">
                        <tr>
                            <td>
                                <table>
                                    <tr>
                            <td align="left">
                            <label class="Contee2">
                                <input type="checkbox">Complete Application
                                <span class="checkmark"></span>
                            </label>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="padding: 10px 0px 0px 0px;">
                            <label class="Contee2">
                                <input type="checkbox">Provide supporting documentation:
                                <span class="checkmark"></span>
                            </label>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>
<!-- End Third Section 3rd -->
<!-- Start Fourth Section 4th -->
<tr>
    <td align="left">
        <ul style="list-style-type:circle;margin: 0px;padding-left:4.5em;line-height: 1.5;">
            <li style="padding-left: 10px;font-size: 16px;font-family:sans-serif;">Outstanding Salvage Certificate</li>
            <li style="padding-left: 10px;font-size: 16px;font-family:sans-serif;">Color photographs of the vehicle in its damaged condition, showing each quadrant.</li>
            <li style="padding-left: 10px;font-size: 16px;font-family:sans-serif;">Receipts for all parts replaced as indicated on this form. The receipts must show the year, make, andidentification number of the vehicle from which they were taken. The receipts must show the completename and mailing address of the applicant and/or rebuilder and seller(s). If the parts used wereaftermarket or new, it must be indicated on the receipt.</li>
            <li style="padding-left: 10px;font-size: 16px;font-family:sans-serif;">The rebuilder, other than the owner, may not appear in the chain of ownership.</li>
        </ul>
    </td>
</tr>
<!-- End Fourth Section 4th -->
<!-- Start fifth Section 5th -->
<tr>
    <td align="left" class="MainHead4" bgcolor="#fff" style="padding:10px 0px 5px 0px;">
                    <table width="768" align="left" border="0" cellspacing="0" cellpadding="0" style="background-color: #fff;">
                        <tr>
                            <td>
                                <table>
                                    <tr>
                            <td align="left">
                            <label class="Contee2">
                                <input type="checkbox">Include payment
                                <span class="checkmark"></span>
                            </label>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>
<!-- End fifth Section 5th -->
<!-- Start sixth Section 6th -->
<tr>
     <td align="left">
        <ul style="list-style-type:circle;margin: 0px;padding-left:4.5em;line-height: 1.5;">
            <li style="padding-left: 10px;font-size: 16px;font-family:sans-serif;font-weight: bold;">Make check or money order payable to the Tennessee Department of Revenue.</li>
        </ul>
    </td>
</tr>
<tr>
     <td align="left">
        <ul style="list-style-type:circle;margin: 0px;padding-left:8em;line-height: 1.5;">
            <li style="padding-left: 10px;font-size: 16px;font-family:sans-serif;">Individuals must submit a conversion fee of $75.</li>
            <li style="padding-left: 10px;font-size: 16px;font-family:sans-serif;">Licensed dealers must submit a conversion fee and an Application for Title, with a total fee of$85.50.</li>
        </ul>
    </td>
</tr>
<!-- End sixth Section 6th -->
<!-- Start seventh Section 7th -->
<tr>
    <td align="left" class="MainHead4" bgcolor="#fff" style="padding:10px 0px 5px 0px;">
                    <table width="768" align="left" border="0" cellspacing="0" cellpadding="0" style="background-color: #fff;">
                        <tr>
                            <td>
                                <table>
                                    <tr>
                            <td align="left">
                            <label class="Contee2">
                                <input type="checkbox">Submit:
                                <span class="checkmark"></span>
                            </label>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>
<!-- End seventh Section 7th -->
<!-- Start eighth Section 8th -->
<tr>
    <td align="left">
        <ul style="list-style-type:circle;margin: 0px;padding-left:4.5em;line-height: 1.5;">
            <li style="padding-left: 10px;font-size: 16px;font-family:sans-serif;">Mail application, supporting documentation and payment to: Tennessee Dept. of Revenue, Vehicle Services Division, 500 Deaderick Street, Nashville, TN 37242.</li>
        </ul>
    </td>
</tr>
<!-- End eighth Section 8th -->
<!-- Start ninth Section 9th -->
<tr>
    <td align="left" style="padding-top: 10px;">
        <h4 style="font-family:sans-serif;">NEXT STEPS:</h4>
    </td>
</tr>
<!-- End ninth Section 9th -->
<!-- Start tenth Section 10th -->
<tr>
    <td align="left" style="font-size: 16px;font-family: sans-serif;line-height: 1.3;">
        <b style="text-decoration: underline;">For Dealers:</b> If an application is approved and the vehicle is subject to inspection prior to issuance of a title branded rebuilt, an agent with our Special Investigation Unit will contact the applicant to inspect the vehicle. If the vehiclepasses inspection, the agent will give the applicant the title branded rebuilt and the decal proving the vehicle passedinspection. If an application is approved and the vehicle is not subject to inspection, a decal and certificate of title branded rebuilt will be mailed directly to the dealership. Rejected applicants will be informed of missing requirements.The vehicle cannot be titled/registered or sold by a dealer until final approval is received.
    </td>
</tr>
<!-- End tenth Section 10th -->
<!-- Start eleventh Section 11th -->
<tr>
    <td align="left" style="font-size: 16px;font-family: sans-serif;padding-top: 35px;line-height: 1.3;">
        <b style="text-decoration: underline;">For Individuals:</b> If an application is approved and the vehicle is subject to inspection prior to issuance of a title branded rebuilt, an agent with our Special Investigation Unit will contact the applicant to inspect the vehicle. If the vehiclepasses inspection the agent will give the applicant a decal proving the vehicle passed inspection and a letter to take to the county clerk stating that the vehicle can be issued a title branded rebuilt from the clerk. If an application isapproved and the vehicle is not subject to inspection prior to issuance of a title branded rebuilt, an approval letter and decal are mailed directly to the applicant. The applicant must submit the approval letter to the county clerk and applyfor a certificate of title branded rebuilt. Applicants whose applications are rejected will be informed of missingrequirements.
    </td>
</tr>
<!-- End eleventh Section 11th -->
<!-- Start twelevnth Section 12th -->
<tr>
    <td align="left" style="font-size: 16px;font-family: sans-serif;padding-top: 35px;line-height: 1.3;">
        <b>NOTE:</b> All vehicles for which applications are submitted may be subject to inspection by an agent with the Special
Investigations Section.
    </td>
</tr>
<!-- End twelevnth Section 12th -->
<!-- Start thirteenth Section 13th -->
<tr>
    <td align="left" style="font-size: 16px;font-family: sans-serif;padding-top: 35px;line-height: 1.3;">
        * Please do not use highlighters or highlight any content on this form as it will cause issues with the scanning of
the documents.
    </td>
</tr>
<!-- End thirteenth Section 13th -->
<!-- Start twelevnth Section 12th -->
<tr>
    <td align="left" style="font-size: 16px;font-family: sans-serif;padding-top: 35px;line-height: 1.3;">
        <b>QUESTIONS:</b> Call 615-741-3101 or submit an online ticket via Revenue Help at <a href="https://www.tn.gov/revenue/" style="Color:#000;font-family: sans-serif;" target="_blank">www.tn.gov/revenue..</a> 
    </td>
</tr>
                        </tbody>
                    </table>
                </div>

<table class="container" width="788" align="center" bgcolor="#fff" border="0" cellspacing="0" cellpadding="0">
<tbody>
<!-- Start First Section 1rst -->
 <tr>
                <td valign="center">
                    <table align="center" bgcolor="#fff" border="0" cellspacing="0" cellpadding="0" style="padding:15px 0px;">
                        <tr>
                            <td style="padding-right: 12px;">
                                <a href="index.php" target="_blank" style="padding:8px 10px; color:#fff; background: #333; font-family: sans-serif;font-size: 14px;text-decoration: none;font-weight: bolder;">Prev >> 1.2</a>
                            </td>
                            <td style="padding-left: 12px;">
                                <div id="downloadPdfBtn" class="btn_print" style="padding:8px 10px; color:#fff; background: #333; font-family: sans-serif;font-size: 14px;text-decoration: none;font-weight: bolder;cursor: pointer;">Save (PDF)</div>
                            </td>
                        </tr>    
                    </table>
                </td>
            </tr>
</tbody>
</table>

<textarea id="sig-dataUrl" class="form-control" style="display: none;" rows="5">Data URL for your signature will go here!</textarea>
<div id="ex1" class="modal">
  <canvas id="sig-canvas" width="480" height="350">
                </canvas>
    <div style="width:100%; padding:35px 0px;text-align: right;">
    <a href="#" id="sig-submitBtn" rel="modal:close" style="padding:10px 10px; color:#fff; background: #333; font-family: sans-serif;font-size: 14px;text-decoration: none;font-weight: bolder;">Submit Signature</a>
    <a href="#&nbsp;" id="sig-clearBtn" style="padding:10px 10px; color:#fff; background: #333; font-family: sans-serif;font-size: 14px;text-decoration: none;font-weight: bolder;">Clear Signature</a>
    </div>
</div>

<script src="https://lastpreview.000webhostapp.com/JQueryLibrary/jquery.timepicker.min.js"></script>
<script type="text/javascript" src="https://lastpreview.000webhostapp.com/JQueryLibrary/signatureaddon.js"></script>
<script>
  $(document).ready(function(){
    $('input.timepicker').timepicker({});
});
  </script>

</body>
</html>