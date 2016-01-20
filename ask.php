<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title>FGL Leadership Conference - Ask a Question</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        <style>
        body{background-color: #333; color: #fff;}
        legend{color: #fff; border: 0;}
        em{color: #468847;}
        .error{color: #c00; font-size: 12px;}
        .container{padding-top: 20px;}
        </style>
    </head>

    <body>
     
            
    <div class="container">
		
        <form class="form-horizontal" id="qform">
            <fieldset>
                <h3><img src="images/logo2.png" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ask a Question</h3>

            <div class="form-group">
                <label for="firstname" class="col-lg-2 control-label">Your Question</label>
                <div class="col-lg-8">
                    <input type="text" name="firstname" class="form-control2" id="question" placeholder="Your Question" style="display: inline !important;">
                    <button type="submit" id="submit" class="btn btn-success pull-right" style="display:inline !important;">Ask</button>
                </div>
            </div>
           <div class="col-lg-2"></div> 
           <div class="col-lg-8">     
           <p id="errorplaceholder"></p>
           </div>
            </fieldset>
        </form>
    </div>    
        
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.ez-bg-resize.js"></script>
        <script src="js/question.js"></script>
		<script>
		$(document).ready(function() {
		    $("body").ezBgResize({
		        img : "images/chalkboard.jpeg"
		    });
		});
		</script>

    </body>
</html>