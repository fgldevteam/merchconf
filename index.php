<!DOCTYPE html>
<html lang="en">

    <head>
        <title>FGL Merchandising Conference 2017</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        <style>
		@font-face { font-family: GalaxiePolarisCondensed-Book.; src: url('/fonts/GalaxiePolarisCondensed-Book.otf'); }
		@font-face { font-family: GalaxiePolarisCondensed-Bold; font-weight: bold; src: url('/fonts/GalaxiePolarisCondensed-Bold.otf'); }
		@font-face { font-family: GalaxiePolarisCondensed-Light; font-weight: bold; src: url('/fonts/GalaxiePolarisCondensed-Light.otf'); }
      /*   body{background: #fff url('images/grey.png') top left repeat; color: #333;} */
      	body{ color: #fff; }
        legend{color: #fff; border: 0;}
        em{color: #468847;}
        .error{color: #c00; font-size: 12px;}
        .container{padding-top: 20px;}
        h3{ margin-bottom: 20px; text-transform: uppercase; font-size: 40px; font-family: GalaxiePolarisCondensed-Bold; background: url('images/tag.png') top left no-repeat; height: 195px; padding-left: 195px; padding-top: 10px;}
        h3 span {font-family: GalaxiePolarisCondensed-Light; display: block; font-size: 30px;}
        h3 span.reg{font-family: GalaxiePolarisCondensed-Book; display: block; padding-top: 5px; font-size: 35px;}
        .declinelabel{ font-family: GalaxiePolarisCondensed-Book; font-size: 16px; text-transform: uppercase;}
		.container{ width: 650px !important; padding: 0px 20px; background: transparent url('/images/bg4.png') 0px 10px no-repeat; }
		label{ font-size: 12px !important; font-weight: normal !important;}
      </style>
    </head>

    <body>


    <div class="container">

        <form class="form-horizontal" id="regform">
            <fieldset>
                <h3>Merchandising Conference 2017 <span>April 25 - 27, 2017</span><span>Rimrock Hotel &amp; Resort &nbsp;&nbsp;&nbsp; Banff, AB</span> <span class="reg">Registration</span></h3>
				<br />
				<br />
            <div class="form-group">
                <label for="firstname" class="col-2 control-label">First Name</label>
                <div class="col-8">
                    <input type="text" name="firstname" class="form-control" id="firstname" placeholder="First Name">
                </div>
            </div>

            <div class="form-group">
                <label for="lastname" class="col-lg-2 control-label">Last Name</label>
                <div class="col-lg-8">
                    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name">
                </div>
            </div>


            <div class="form-group">
                <label for="email" class="col-lg-2 control-label">Work Email</label>
                <div class="col-lg-8">
                    <input type="text" name="email" class="form-control" id="email" placeholder="Email Address">
                </div>
            </div>

            <div class="form-group">
                <label for="phone" class="col-lg-2 control-label">Phone</label>
                <div class="col-lg-8">
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number">
                </div>
            </div>

            <div class="form-group">
                <label for="diet" class="col-lg-2 control-label">Dietary Restrictions</label>
                <div class="col-lg-8">
                    <input type="text" name="diet" class="form-control" id="diet" placeholder="Dietary Needs/Restrictions or Allergies">
                </div>
            </div>


            <div class="form-group">
                <label for="roommate" class="col-lg-2 control-label">Requested Roommate</label>
                <div class="col-lg-8">
                    <input type="text" name="roommate" class="form-control" id="roommate" placeholder="Roommate Request">
<!--                     <small><em>Please Note: All AVPs will be sharing rooms, no exceptions</em></small> -->
                </div>
            </div>



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
                <label for="phone" class="col-lg-2 control-label">Sizes</label>
                <div class="col-lg-2">
                    <p>Shirt</p>
                    <select name="shirtsize" id="shirtsize" class="form-control">
                        <option value="">Please Choose</option>
                        <option value="M-S">Men's Small</option>
                        <option value="M-M">Men's Medium</option>
                        <option value="M-L">Men's Large</option>
                        <option value="M-XL">Men's X-Large</option>
                        <option value="M-XXL">Men's XX-Large</option>
                        <option value="W-S">Women's Small</option>
                        <option value="W-M">Women's Medium</option>
                        <option value="W-L">Women's Large</option>
                        <option value="W-XL">Women's X-Large</option>
                    </select>
                </div>
                <div class="col-lg-2">
                    <p>Pants</p>
                    <select name="pantsize" id="pantsize" class="form-control">
                        <option value="">Please Choose</option>
                        <option value="M-S">Men's Small</option>
                        <option value="M-M">Men's Medium</option>
                        <option value="M-L">Men's Large</option>
                        <option value="M-XL">Men's X-Large</option>
                        <option value="M-XXL">Men's XX-Large</option>
                        <option value="W-S">Women's Small</option>
                        <option value="W-M">Women's Medium</option>
                        <option value="W-L">Women's Large</option>
                        <option value="W-XL">Women's X-Large</option>
                    </select>
                </div>
                <div class="col-lg-2">
                    <p>Jacket</p>
                    <select name="jacketsize" id="jacketsize" class="form-control">
                        <option value="">Please Choose</option>
                        <option value="M-S">Men's Small</option>
                        <option value="M-M">Men's Medium</option>
                        <option value="M-L">Men's Large</option>
                        <option value="M-XL">Men's X-Large</option>
                        <option value="M-XXL">Men's XX-Large</option>
                        <option value="W-S">Women's Small</option>
                        <option value="W-M">Women's Medium</option>
                        <option value="W-L">Women's Large</option>
                        <option value="W-XL">Women's X-Large</option>
                    </select>
                </div>
                <div class="col-lg-2">
                    <p>Shoes</p>
                    <select name="shoesize" id="shoesize" class="form-control">
                        <option value="">Please Choose</option>
                        <option value="M-7">Men's 7</option>
                        <option value="M-7.5">Men's 7.5</option>
                        <option value="M-8">Men's 8</option>
                        <option value="M-8.5">Men's 8.5</option>
                        <option value="M-9">Men's 9</option>
                        <option value="M-9.5">Men's 9.5</option>
                        <option value="M-10">Men's 10</option>
                        <option value="M-10.5">Men's 10.5</option>
                        <option value="M-11">Men's 11</option>
                        <option value="M-11.5">Men's 11.5</option>
                        <option value="M-12">Men's 12</option>
                        <option value="M-12.5">Men's 12.5</option>
                        <option value="M-13">Men's 13</option>
                        <option value="W-6">Women's 6</option>
                        <option value="W-6.5">Women's 6.5</option>
                        <option value="W-7">Women's 7</option>
                        <option value="W-7.5">Women's 7.5</option>
                        <option value="W-8">Women's 8</option>
                        <option value="W-8.5">Women's 8.5</option>
                        <option value="W-9">Women's 9</option>
                        <option value="W-9.5">Women's 9.5</option>
                        <option value="W-10">Women's 10</option>
                        <option value="W-10.5">Women's 10.5</option>
                        <option value="W-11">Women's 11</option>
                        <option value="W-11.5">Women's 11.5</option>
                        <option value="W-12">Women's 12</option>
                    </select>
                </div>
            </div>

            <div class="form-group">

            </div>

            <div class="form-group">
                <div class="col-lg-8">
                	<p class="pull-right">Busses will be arranged to depart from Head Office to the Hotel and back to Calgary.</p>
					<!-- <span class="pull-right declinelabel"> <input type="checkbox" name="decline" id="deline" value="decline">&nbsp;&nbsp;Decline invitation to conference </span> -->
                </div>
                <div class="col-lg-3">
	                <div id="sendemail"></div>
                    <button type="submit" id="submit" class="btn btn-success pull-right">Send Registration</button>
                </div>
            </div>
            </fieldset>
        </form>
    </div>

        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.ez-bg-resize.js"></script>
        <script src="js/contact.js"></script>
		<script>
		$(document).ready(function() {
		    $("body").ezBgResize({
		        img : "images/Calgary-To-Banff2.jpg"
		    });
		});
		</script>

    </body>
</html>
