<?php

require_once("dom.php");


$domdats = dataret("https://www.mohfw.gov.in/");
$Globaldata = file_get_contents('https://coronavirus-19-api.herokuapp.com/all');
$GlobalDecode = json_decode($Globaldata, TRUE);

$Indiadata = file_get_contents('https://coronavirus-19-api.herokuapp.com/countries/india');
$IndiaDecode = json_decode($Indiadata, TRUE);

?>
<!DOCTYPE >
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1 viewport-fit=cover, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="fstdropdown.css">
	<link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRBQ5K5_TRd4uklSwinLV_swkGbksIKPc-xyQ&usqp=CAU" >
	<script type= "text/javascript" src = "countries.js"></script>
    <script type= "text/javascript" src = "fstdropdown.js"></script>
    <script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
</script>
	<title>Covid 19 - Cases </title>
</head>
<body>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><b>&nbsp;&nbsp;STAY HOME.  SAVE LIVES.</b></h4>
        </div>
       
        <!-- Modal body -->
        <div class="modal-body">
<center><img src="data:image/gif;base64,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" height="100px" width="100px" style="margin: 5px">
  			<p class="text-uppercase">&nbsp;&nbsp;<b>Help stop coronavirus</b>&nbsp;&nbsp;</p>
</center>
<ul>
	<li><b>STAY</b> home</li>
	<li><b>KEEP</b> a safe distance</li>
	<li><b>WASH</b> hands often</li>
	<li><b>COVER</b> your cough</li>
</ul>
<hr>
<b>&nbsp;Helpline Number :+91-11-23978046&nbsp;|&nbsp;Toll Free : 1075&nbsp;|&nbsp; Email ID : ncov2019@gov.in&nbsp;</b>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
<div class="jumbotron text-center">
  <h1 class="text-success  text-uppercase"><b>Coronavirus </b></h1>
  <p><b>Global Covid-19 Information</b></p> 
</div>
<div class="col-sm-12">
  	<hr >
  </div>
<div class="alert alert-info col-sm-12">
	<marquee><i class="fa fa-info "></i>&nbsp;&nbsp;More About Coronavirus Updates !!!&nbsp;&nbsp;Visit <a href="https://www.who.int/" class="text-danger" ><b>WORLD HEALTH ORGANIZATION</b></a>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  Govt of India&nbsp;&nbsp;<a href="https://www.mohfw.gov.in/" class="text-danger" ><b>MoHFW - Ministry of Health and Family Welfare</b></a></marquee>
</div>
<div class="col-sm-12">
 <div class="col-sm-12">
  	<hr >
  </div>
    <div class="col-sm-0.5"></div>
    <div class="col-sm-3 alert" style="background-color: #00006f;color: #ffffff;box-shadow: 2px 4px 4px 4px #424242;" >
     <p><span class="glyphicon glyphicon-globe"></span>&nbsp;&nbsp;Global</p>
      <h3><b>Confirmed </b></h3>
      <p><?php echo number_format($GlobalDecode["cases"]); ?></p>
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-3 alert" style="background-color: #005500;color: #ffffff;box-shadow: 2px 4px 4px 4px #424242;" >
    <p><span class="glyphicon glyphicon-globe"></span>&nbsp;&nbsp;Global</p>
      <h3><b>Recovered </b></h3>
      <p><?php echo number_format($GlobalDecode["recovered"]); ?></p>
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-3 alert" style="background-color: #8d0000;color: #ffffff;box-shadow: 2px 4px 4px 4px #424242;" >
      <p><span class="glyphicon glyphicon-stats"></span>&nbsp;&nbsp;Global</p>
      <h3><b>Deaths </b></h3>
      <p><?php echo number_format($GlobalDecode["deaths"]); ?></p>
    </div>
    <div class="col-sm-0.5"></div>
 <div class="col-sm-12">
  	<hr >
  </div>
    <div class="col-sm-0.5"></div>
    <div class="col-sm-3 alert" style="background-color: #00006f;color: #ffffff;box-shadow: 2px 4px 4px 4px #424242;" >
     <p><span class="glyphicon glyphicon-stats"></span>&nbsp;&nbsp;India</p>
      <h3><b>Confirmed </b></h3>
      <p><?php echo number_format($IndiaDecode["cases"]); ?>&nbsp;&nbsp;<span style="color: #000000;"><b>+<?php echo $IndiaDecode["todayCases"];?></b></span></p>
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-3 alert" style="background-color: #005500;color: #ffffff;box-shadow: 2px 4px 4px 4px #424242;" >
    <p><span class="glyphicon glyphicon-stats"></span>&nbsp;&nbsp;India</p>
      <h3><b>Recovered </b></h3>
      <p><?php echo number_format($IndiaDecode["recovered"]); ?>&nbsp;&nbsp;</p>
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-3 alert" style="background-color: #8d0000;color: #ffffff;box-shadow: 2px 4px 4px 4px #424242;" >
      <p><span class="glyphicon glyphicon-stats"></span>&nbsp;&nbsp;India</p>
      <h3><b>Deaths </b></h3>
      <p><?php echo number_format($IndiaDecode["deaths"]); ?>&nbsp;&nbsp;<span style="color: #000000;">+<?php echo number_format($IndiaDecode["todayDeaths"]);?></span></p>
    </div>
    <div class="col-sm-0.5"></div>
 <div class="col-sm-12">
 	<hr />
 </div>
  <div class="col-sm-1"></div>
  	<div class="col-sm-3">
  	<h3 class="text-uppercase text-danger">Search Country</h3>
  	<hr>
  		<div class="form-group">
  			<select class='fstdropdown-select' id="country"  name ="country">
            	<option value="">Select option</option>
        	</select>
  		</div>
  		<div class="form-group">
  			<button class="btn btn-sm btn-success" onclick="shower()" id="submit">SEARCH</button>
  		</div>
  	<hr> 
    </div>
  	<div class="col-sm-7" >
  <h3 align="center" class="alert alert-success text-uppercase"><b><span  id="countryName">Country Name</span></b></h3>
  <hr style="border: 2px solid green">
  <h4 class="text-uppercase">Total Confirmed Cases : <b><span id="ConfirmedCases">0</span></b>&nbsp;&nbsp;&nbsp;<span class="text-primary" id="todayConfimred"></span></h4>
  <h4 class="text-uppercase">Recovered Cases : <b><span id="RecoveredCases">0</span></b></h4>
  <h4 class="text-uppercase">Deaths : <b><span id="DeathCases">0</span></b>&nbsp;&nbsp;&nbsp;<span  class="text-danger" id="todayDeaths"></span></h4>
  <hr>
  <div class="row">
  	<div class="col-sm-6">
  		<h4 class="text-uppercase">Active Cases : <b><span id="Activee">0</span></b></h4>
  	</div>
  	<div class="col-sm-6">
  		<h4 class="text-uppercase">Critical Cases : <b><span id="Critical">0</span></b></h4>
  	</div>
  </div>
  <hr style="border: 2px solid green">
    </div>
  <div class="col-sm-1"></div>
  </div>  
  <div class="row">
  <div class="col-sm-12">
  		<hr >
  		<div style="background-color: #ececec;width: 100%"><br/>
  		<center><img src="data:image/gif;base64,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" height="100px" width="100px" style="margin: 5px">
  			<p class="text-uppercase">&nbsp;&nbsp;<b>Help stop coronavirus</b>&nbsp;&nbsp;</p>
  		</center>
 <div class="alert alert-info">
 	<marquee>
 		<b>&nbsp;&nbsp;&nbsp;&nbsp;Helpline Number :+91-11-23978046&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;Toll Free : 1075&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp; Helpline Email ID : ncov2019@gov.in&nbsp;&nbsp;&nbsp;&nbsp;</b>
 	</marquee>
 </div>
  		<h1 class="text-uppercase"><b>&nbsp;STAY <span class="glyphicon glyphicon-home"></span>.  SAVE LIVES.</b></h1>
  		<ol>
		  	<li><b>STAY</b> home</li>
		  	<li><b>KEEP</b> a safe distance</li>
		  	<li><b>WASH</b> hands often</li>
		  	<li><b>COVER</b> your cough</li>
		  	<li><b>SICK ?</b> Call the helpline</li>
		</ol>
<p style="margin: 5px;" >&nbsp;&nbsp;Protect yourself and others around you by knowing the facts and taking appropriate precautions. Follow advice provided by your local health authority.
To prevent the spread of COVID-19:</p>
<ul>
	<li>Clean your hands often. Use soap and water, or an alcohol-based hand rub.</li>
	<li>Maintain a safe distance from anyone who is coughing or sneezing.</li>
	<li>Wear a mask when physical distancing is not possible.</li>
	<li>Don’t touch your eyes, nose or mouth.</li>
	<li>Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.</li>
	<li>Stay home if you feel unwell.</li>
	<li>If you have a fever, cough and difficulty breathing, seek medical attention.</li>
</ul>
<p style="margin: 5px;" >&nbsp;&nbsp;Calling in advance allows your healthcare provider to quickly direct you to the right health facility. This protects you, and prevents the spread of viruses and other infections.</p><br/>
<hr>
  </div>
  <div class="col-sm-12">
  	<hr>
  </div>
  	</div>
  <div class="col-sm-1"></div>
  <div class="col-sm-10" ><br/>
  <div class="alert alert-info" align="center">
  	<h3 class="text-uppercase text-danger">
<b>&nbsp;Covid -19 Indian Statewise status </b>
  	</h3><span class="text-danger">As per MoHFW</span>
  </div>
  	<div class="col-sm-12" style="overflow: scroll;"> 
  	<table class="table table-striped " align="center">
  		<thead >
  			<td><b>Sl.no</b></td>
  			<td><b>Name of State / UT</b></td>
  			<td><b>Active Cases</b></td>
  			<td><b>Recovered / Migrated </b></td>
  			<td><b>Deaths</b> </td>
  			<td><b>Total Confirmed Cases</b> </td>
  		</thead>
  		<tbody>
  		<?php
  	for($i =0;$i<35;$i++){
  		?>
  			<tr>
  				<td><?php echo $domdats[$i]["S. No."]; ?></td>
  				<td><?php echo $domdats[$i]["Name of State / UT"]; ?></td>
  				<td><?php echo $domdats[$i]["Active Cases*"]; ?></td>
  				<td><?php echo $domdats[$i]["Cured/Discharged/Migrated*"]; ?></td>
  				<td><?php echo $domdats[$i]["Deaths**"]; ?></td>
  				<td><?php echo $domdats[$i]["Total Confirmed cases*"]; ?></td>
  			</tr>
  		<?php
					}
			?>
  		</tbody>
  	</table></div>
  </div>
  <div class="col-sm-1"></div>
  </div>
  
  <div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-10" ><br/>
  	<iframe width="100%" style="border: 4px solid #bebebe;box-shadow: 5px 7px 5px 5px #d3d3d3" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
  	</iframe>
  </div>
  <div class="col-sm-1"></div>
  </div>
  <div class="row"
  <div class="col-sm-12">
  	<hr style="2px solid #000000">
  		<p align="center" >
  			Designed and developed by &nbsp;&nbsp;<b>HAPPY CHANDRU RAJU</b>&nbsp;<br/>
  			<b>DISCLAIMER : Non Commericial Webiste & For More Details <a href="mailto:rajuashwin1410@gmail.com" style="text-decoration: none;text-decoration-line: none;"><b>rajuashwin1410@gmail.com</b></a>  </b>
  		</p>
  </div>
  </div>
<script>
       populateCountries("country", "state");
	   
function Get(yourUrl){
    var Httpreq = new XMLHttpRequest(); // a new request
    Httpreq.open("GET",yourUrl,false);
    Httpreq.send(null);
    return Httpreq.responseText;          
}
	   
       function shower(){
       		var country = document.getElementById("country").value;
	   if(country == ""){   
	   		document.getElementById("countryName").innerHTML = "";
	   }else{
	   		document.getElementById("countryName").innerHTML = country;
	var json_obj = JSON.parse(Get('https://coronavirus-19-api.herokuapp.com/countries/'+country));
	document.getElementById("ConfirmedCases").innerHTML = json_obj.cases;
	document.getElementById("RecoveredCases").innerHTML = json_obj.recovered;
	document.getElementById("DeathCases").innerHTML = json_obj.deaths;
	document.getElementById("Critical").innerHTML = json_obj.critical;
	document.getElementById("Activee").innerHTML = json_obj.active;
	document.getElementById("todayConfimred").innerHTML = "+"+json_obj.todayCases;
	document.getElementById("todayDeaths").innerHTML = "+"+json_obj.todayDeaths;
		   }
       }
       

       
        function addOptions(add) {
            var select = document.getElementById("country");
            for (var i = 0; i < add; i++) {
                var opt = document.createElement("option");
                var o = Array.from(document.getElementById("country").querySelectorAll("option")).slice(-1)[0];
                var last = o == undefined ? 1 : Number(o.value) + 1;
                opt.text = opt.value = last;
                select.add(opt);
            }
        }
        function removeOptions(remove) {
            for (var i = 0; i < remove; i++) {
                var last = Array.from(document.getElementById("country").querySelectorAll("option")).slice(-1)[0];
                if (last == undefined)
                    break;
                Array.from(document.getElementById("country").querySelectorAll("option")).slice(-1)[0].remove();
            }
        }
        function updateDrop() {
            document.getElementById("country").fstdropdown.rebind();
        }
        
        
    </script>
</body>
</html>
