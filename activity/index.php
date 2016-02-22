<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title>FGL Merchandising Conference 2016</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="/css/bootstrap.css" rel="stylesheet" media="screen">
        <style>
		@font-face { font-family: GalaxiePolarisCondensed-Book.; src: url('/fonts/GalaxiePolarisCondensed-Book.otf'); } 
		@font-face { font-family: GalaxiePolarisCondensed-Bold; font-weight: bold; src: url('/fonts/GalaxiePolarisCondensed-Bold.otf'); }
		@font-face { font-family: GalaxiePolarisCondensed-Light; font-weight: bold; src: url('/fonts/GalaxiePolarisCondensed-Light.otf'); }        
      /*   body{background: #fff url('images/grey.png') top left repeat; color: #333;} */
      	body{ color: #fff; }
        legend{color: #fff; border: 0;}
        em{color: #468847;}
        .error{color: #c00; font-size: 12px;}
        .container{padding-top: 20px; margin-top: 10px;}
        h2{ font-size: 40px; font-family: GalaxiePolarisCondensed-Book; text-transform: uppercase; padding-right: 20px;}
        h4{ font-size: 25px; font-family: GalaxiePolarisCondensed-Light; text-transform: uppercase;}  
        h4 strong{ font-family: GalaxiePolarisCondensed-Book; font-weight: bold;}      
        h3{ margin-bottom: 20px; text-transform: uppercase; font-size: 40px; font-family: GalaxiePolarisCondensed-Bold; background: url('/images/tag_2016.png') top left no-repeat; height: 195px; padding-left: 195px; padding-top: 10px;}
        h3 span {font-family: GalaxiePolarisCondensed-Light; display: block; font-size: 30px;}
        h3 span.reg{font-family: GalaxiePolarisCondensed-Book; display: block; padding-top: 5px; font-size: 35px;}
        .declinelabel{ font-family: GalaxiePolarisCondensed-Book; font-size: 16px; text-transform: uppercase;}
		.container{ width: 650px !important; padding: 0px 20px; background: transparent url('/images/bg4.png') 0px 0px repeat; }
		label{ font-size: 12px !important; font-weight: normal !important;}
		
		#act-title{ padding-left: 20px; padding-bottom: 15px;}
		#act-title h2, #act-title h4 { display: inline; }
		
		table td{ font-size: 12px; width: 25%; padding: 15px 5px 0px 5px; vertical-align: top;}
		.select-td{ width: 10px !important; }
		
		.checkbox{font-size: 60px;}
		
      </style>
    </head>

    <body>
     
            
    <div class="container">
		
        <form class="form-horizontal" id="regform">
            <fieldset>
                <h3>Merchandising Conference 2016 <span>April 5 - 7, 2016</span><span>Rimrock Hotel &amp; Resort &nbsp;&nbsp;&nbsp; Banff, AB</span> 
									<span class="reg">Activity Selection</span></h3>
				<br />
				<br />
				
<!--
								
            <div class="form-group" style="padding-left: 58px;">
                <label for="firstname" class="col-1 control-label">First Name</label>
                <div class="col-4">
                    <input type="text" name="firstname" class="form-control" id="firstname" placeholder="First Name">
                </div>
                
                <label for="lastname" class="col-lg-1 control-label">Last Name</label>
                <div class="col-lg-4">
                    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name">
                </div>
            </div>
-->
                
			<?php
			//connect to DB
/*
			$host = "internal-db.s51258.gridserver.com";
			$user = "db51258";
			$pass = "3nc50Xj8y5";
			$db = "db51258_merch";
*/
			
			$host = "calmys1db01.fglsports.dmz";
			$user = "merch";
			$pass = "merch";
			$db = "merch_conf";			
			
			$connection = mysql_connect($host, $user, $pass) or die ("Unable to connect!");
			mysql_select_db($db) or die ("Unable to select database!"); 
			
			$q = "SELECT activity1, COUNT(*) AS `num`, activity2, COUNT(*) AS `num2` FROM activities GROUP BY activity1 ORDER BY activity1";
			$result = mysql_query($q) or die ("Error in query: $q. ".mysql_error());
			
			$climbingtotal = 25;
			$spintotal = 14;
			$yogatotal = 20;
			$crossfittotal = 15;
			$basketballtotal = 20;
			$zumbatotal = 15;
			$hiketotal = 25;
					
			while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
			
				switch($row[0]) {
					
					case "climbing":
						$climbingtotal = $climbingtotal - $row[1];
						break;
						
					case "spin":
						$spintotal = $spintotal - $row[1];
						break;
						
					case "yoga":
						$yogatotal = $yogatotal - $row[1];
						break;
						
					case "crossfit":
						$crossfittotal = $crossfittotal - $row[1];
						break;
					
					case "basketball":
						$basketballtotal = $basketballtotal - $row[1];
						break;		

					case "zumba":
						$zumbatotal = $zumbatotal - $row[1];
						break;	

					case "hike":
						$hiketotal = $hiketotal - $row[1];
						break;															
					
				}
				
/*
				switch( $row[3]){
					
					case "climbing":
						$climbingtotal = $climbingtotal - $row[3];
						break;
						
					case "spin":
						$spintotal = $spintotal - $row[3];
						break;
						
					case "yoga":
						$yogatotal = $yogatotal - $row[3];
						break;
						
					case "crossfit":
						$crossfittotal = $crossfittotal - $row[3];
						break;
					
					case "basketball":
						$basketballtotal = $basketballtotal - $row[3];
						break;			
					
					
				}
*/
				
			 
			}
			
			
			?>
         
            <div class="form-group">
            	<h4 style="padding-left: 60px;">Please enter the e-mail address used to initially register</h4>
                <label for="email" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-8">
                    <input type="text" name="email" class="form-control" id="email" placeholder="Email Address">
                </div>
            </div> 

               
			
		<div id="act-title">
			<h2>Activities</h2><h4>Please select <strong>1</strong> activity.</h4> 
		</div>
          
          <table class="table table-striped table-bordered">
          	<tr>
          		<th class="select-td"></th>
	          	<th>Activity</th>
<!-- 			  	<th>Location</th> -->
			  	<th>Capacity</th>			  	
			  	<th>What to Bring</th>			  	
          	</tr>
          	
          	<tr>
	          	<td class="select-td"><input class="checkbox" name="activity" type="checkbox" id="activity-climbing" value="climbing"<?php if($climbingtotal == 0) { echo " disabled";} ?> /></td>
	          	<td>Climbing (1.5 Hours)</td>
	          	<!-- <td>The Banff Centre Climbing Gym</td> -->
	          	<td><?=$climbingtotal?> spots remaining</td>
	          	<td>All equipment provided (including shoes - can wear own clean runners if preferred). Wear clothes that are easy to move/stretch in (remember others will be looking up at you). Bring a water bottle.</td>	          		          		          		          	
          	</tr>
          	
          	<tr>
	          	<td class="select-td"><input class="checkbox" name="activity" type="checkbox" id="activity-spin" value="spin"<?php if($spintotal == 0) { echo " disabled";} ?> /></td>
	          	<td>Spin Class (1 Hour)</td>
	          	<!-- <td>The Banff Centre Spin Class Room</td> -->
	          	<td><?=$spintotal?> spots remaining</td>
	          	<td>Appropriate clean footwear and gym apparel</td>	          		          		          		          	
          	</tr>
          	
          	<tr>
	          	<td class="select-td"><input class="checkbox" name="activity" type="checkbox" id="activity-yoga" value="yoga"<?php if($yogatotal == 0) { echo " disabled";} ?> /></td>
	          	<td>Yoga (1 Hour)</td>
	          	<!-- <td>Fenlands Banff Recreation Centre</td> -->
	          	<td><?=$yogatotal?> spots remaining</td>
	          	<td>Yoga mat and apparel</td>	          		          		          		          	
          	</tr>

          	<tr>
	          	<td class="select-td"><input class="checkbox" name="activity" type="checkbox" id="activity-basketball" value="basketball"<?php if($basketballtotal == 0) { echo " disabled";} ?> /></td>
	          	<td>Basketball (1.5 Hours)</td>
	          	<!-- <td>The Banff Centre Gymnasium</td> -->
	          	<td><?=$basketballtotal?> spots remaining</td>
	          	<td>Appropriate clean footwear and gym apparel</td>	          		          		          		          	
          	</tr>       

			<tr>
	          	<td class="select-td"><input class="checkbox" name="activity" type="checkbox" id="activity-hike" value="hike"<?php if($hiketotal == 0) { echo " disabled";} ?> /></td>
	          	<td>Hike (1.5 Hour)</td>
	          	<!-- <td>Crossfit Banff</td> -->
	          	<td><?=$hiketotal?> spots remaining</td>
	          	<td>Appropriate footwear and outdoor apparel</td>	          		          		          		          	
          	</tr> 

          	<tr>
	          	<td class="select-td"><input class="checkbox" name="activity" type="checkbox" id="activity-crossfit" value="crossfit"<?php if($crossfittotal == 0) { echo " disabled";} ?> /></td>
	          	<td>Cross-fit (1 Hour)</td>
	          	<!-- <td>Crossfit Banff</td> -->
	          	<td><?=$crossfittotal?> spots remaining</td>
	          	<td>Appropriate clean footwear and gym apparel</td>	          		          		          		          	
          	</tr>

          	<tr>
	          	<td class="select-td"><input class="checkbox" name="activity" type="checkbox" id="activity-zumba" value="zumba"<?php if($zumbatotal == 0) { echo " disabled";} ?> /></td>
	          	<td>Zumba (1 Hour)</td>
	          	<!-- <td>Crossfit Banff</td> -->
	          	<td><?=$zumbatotal?> spots remaining</td>
	          	<td>Appropriate clean footwear and gym apparel</td>	          		          		          		          	
          	</tr>          	
          	
       	          	
          	          	          	
          </table>
          

<!--
            <div class="form-group">
                <label for="phone" class="col-lg-2 control-label">Travel</label>
                <div class="col-lg-8">
                    <p>
                    Will you require travel arrangements?
                    <input type="radio" name="flights" value="yes"> Yes
                    <input type="radio" name="flights" value="no"> No 
                    <br /><small><em>Please Note: Flights to Calgary will be arranged in advance</em></small>
                    </p>

                    <p>
                    Will you be taking the bus from Calgary?
                    <input type="radio" name="bus" value="yes"> Yes
                    <input type="radio" name="bus" value="no"> No
                    </p>


                </div>
            </div>  
-->             
<!--                
            <div class="form-group">
                <label for="phone" class="col-lg-2 control-label">Activity</label>
                <div class="col-lg-8">
                    <p>
                    Please select one:<br />
                    <input type="radio" name="activity" value="Wine Tasting"> Wine Tasting
                    <br /><input type="radio" name="activity" value="Hiking"> Hiking
                    <br /><input type="radio" name="activity" value="Mountain Biking"> Mountain Biking
                    <br /><input type="radio" name="activity" value="Scotch Tasting"> Scotch Tasting
                    <br /><input type="radio" name="activity" value="Ultimate Frisbee"> Ultimate Frisbee 
                    <br id="activity" />
                    </p>
                </div>
            </div>                 
    -->     

                   
            <div class="form-group">

            </div>
            
            <div class="form-group">
                <div class="col-lg-8">
                	<p class="pull-left">Transport from the conference hotel to the activities will be provided. </p>
					<!-- <span class="pull-right declinelabel"> <input type="checkbox" name="decline" id="deline" value="decline">&nbsp;&nbsp;Decline invitation to conference </span> -->
                </div>            
                <div class="col-lg-3 pull-right">
	                <div id="sendemail"></div>
                    <button type="submit" id="submit" class="btn btn-success pull-right">Send Activity Selections</button>
                </div>
            </div>
            </fieldset>
        </form>
    </div>    
        
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="/js/bootstrap.min.js"></script>
		<script src="/js/jquery.ez-bg-resize.js"></script>
        <script src="/js/contact-activity.js"></script>
		<script>
		$(document).ready(function() {
		    $("body").ezBgResize({
		        img : "/images/Calgary-To-Banff2.jpg"
		    });
		 		       
		});
		
$(document).ready(function () {

   $("input[name='activity']").change(function () {

      var maxAllowed = 1;

      var cnt = $("input[name='activity']:checked").length;

      if (cnt > maxAllowed)

      {

         $(this).prop("checked", "");

         alert('Select maximum ' + maxAllowed + ' activities');

     }

  });

});
		
		</script>

    </body>
</html>
