<html lang="en">
    <head>
        <title>TrackMyStop | Never Miss your Train Stop </title>
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                    <link rel="stylesheet" href="TrackStyle.css">

<style>

.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}


</style>
                  
<script type = "text/javascript">

    function ajaxFunction()
    {
    
        var ajaxRequest;
    
        try{
            ajaxRequest = new XMLHttpRequest();
        }
    
       catch (e){
            // Internet Explorer Browsers
            try{
                ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try{
                    ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e){
                    // Something went wrong
                    alert("Your browser broke!");
                    return false;
                }
            }
        }
    
        ajaxRequest.onreadystatechange = function(){
    
            if(ajaxRequest.readyState == 4){
                document.getElementById("message").innerHTML = ajaxRequest.responseText;
            }
        }
    
        var email = document.getElementById('email').value;
        var queryString = "?email="+ email;
        ajaxRequest.open("GET", "actionnew.php" + queryString, true);
        ajaxRequest.send(null);
    
    }
    
    </script>
                                       </head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    
        <!-- NAVBAR SECTION -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" data-toggle="collapse" data-target=".navbar-collapse" href="#">Home</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a data-toggle="collapse" data-target=".navbar-collapse" href="#about">ABOUT</a></li>
                        <li><a data-toggle="collapse" data-target=".navbar-collapse" href="#features">FEATURES</a></li>
                        <li><a data-toggle="collapse" data-target=".navbar-collapse" href="#screenshots">SCREENSHOTS</a></li>
                        <li><a data-toggle="collapse" data-target=".navbar-collapse" href="#download">DOWNLOAD</a></li>
                        <li><a data-toggle="collapse" data-target=".navbar-collapse" href="#contact">CONTACT</a></li>
                    </ul>
                </div>
        </nav>
        
        <div class="jumbotron text-center">
            <h2>TrackMyStop</h2>
            <p>For easy, safe &amp; relaxing train travel</p>

            
                    <form class = "form-inline" name = "myForm" class="validate" novalidate>
                            
                       
                       <div class = "input-group">
                            <input type="email" name="email" class="form-control" size="50" id="email" placeholder="Enter Your Email Address" required>
                            <div class="input-group-btn">
                                <input type="button" value="Subscribe" name="subscribe" onClick='ajaxFunction()' id="subscribe" class="btn btn-blue" data-toggle="modal" data-target="#myModal">
                            </div>

                        </div>
                       
                   </form>
                   <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content" id="message">
                           
                          </div>
                          
                        </div>
                      </div>
            </div>
            
        
        <!-- Container (About TrackMyStop Section) -->
        <div id="about" class="container-fluid bg-silver">
            <div class="row">
                <div class="col-sm-8">
                    <h3>About TrackMyStop</h3>
                    <h5>TrackMyStop is developed by <a href="http://exultancy.com" target="_blank">Exultancy</a>.</h5>
                    <p>The founder of Exultancy, <a href="https://www.linkedin.com/in/mdiwan" target="_blank">Makarand Diwan</a>, while traveling on a train missed his stop and in the process lost his luggage. This is when the idea of developing TrackMyStop was born. We designed TrackMyStop to help other travelers never ever miss their stop.</p>
                    
                    <p>During your train travel, do you ever lose track of time or your destination while reading a good book, playing an amazing game on your iPhone, chatting with a fellow passenger or simply listening to a new music album you downloaded from iTunes? </p>
                    <p>Do you ever want to catch some sleep and arrive fresh at your destination but are afraid you will miss your stop?</p>
                    <p>Do you ever want to know which city you are passing through?</p>
                    <p>Do you ever wonder when is the right time to call your ride so that they won’t be waiting too long at the station for you?</p>
                    <p>Do you ever fear you will miss your stop because you are taking the train for the first time or you are new to the area or you are visiting a new city?</p>
                    <p>If any of the above situations apply to you, take control of your train travel using TrackMyStop.</p>
                    
                    <p>Whether you are a regular commuter or an occasional traveler, you need TrackMyStop to make your train journey easy, safe and comfortable. Now you will never ever miss your stop.</P>
                    
                    <p>It’s easy - Just select your destination station and an alert distance. TrackMyStop uses your location to track how far you are from your destination and alerts you when you arrive within the selected alert distance while also keeping you informed about your progress throughout the journey.</p>
                    
                    <p>TrackMyStop helps you:</p>
                    <ul>
                     <li>Identify major stations on your train route.</li>
                     <li>Estimate how far you are from your destination.</li>
                     <li>Identify cities you are traveling through.</li>
                     <li>Calculate how fast your train is going (whenever speed can be tracked)</li>
                     <li>Send SMS message to alert your ride to pick you up.</li>
                     <li>Inform your family and friends upon your safe arrival.</li>
                     <li>View station stops on your route on an interactive map.</li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <img alt="TrackMyStop" src="TrackMyStop72.png" class="img-responsive" width="40%">
                </div>
            </div>
        </div>

<!-- Container (Supported Rail Roads Section) -->
        <div class="container-fluid bg-white">
            <div class="row">
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-globe logo"></span>
                </div>
                <div class="col-sm-8">
                    <h3>Supported Rail Roads</h3>
                    <h5><strong>TrackMyStop</strong> currently supports the rail roads listed below. Please check back again for additional rail roads that we plan to add in future versions.</h5>
                    <p>
                    <strong>AMTRAK</strong><br>
                    <strong>BART</strong> Bay Area Rapid Transit<br>
                    <strong>CALTRAIN</strong><br>
                    <strong>CTA EL or 'L'</strong> Chicago Transit Authority<br>
                    <strong>LIRR</strong> Long Island Rail Road<br>
                    <strong>Metro North</strong><br>
                    <strong>DART</strong> Dallas Area Rapid Transit<br>
                    <strong>MBTA Commuter Rail</strong> Metropolitan Boston Transit Authority<br>
                    <strong>NJT</strong> New Jersey Transit<br>
                    <strong>SEPTA</strong> Philadelphia Area Regional Rail</strong><br>
                    </p>
                </div>
            </div>
        </div>

<!-- Container (FEATURES Section) -->
        <div id="features" class="container-fluid text-center bg-silver">
            <h3>FEATURES</h3>
            <h5>TrackMyStop includes following options</h5>
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-bell logo-small"></span>
                    <h4>TRACK</h4>
                    <p>You can select your destination station stop and track it using this option. The app will alert you when you reach near your stop.</p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon glyphicon-list-alt logo-small"></span>
                    <h4>BROWSE</h4>
                    <p>You can use this option to browse routes and stations of the supported rail roads.</p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-wrench logo-small"></span>
                    <h4>SETTINGS</h4>
                    <p>Use this option to set user-defined options that help you customize how TrackMyStop works.</p>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-thumbs-up logo-small"></span>
                    <h4>SHARE</h4>
                    <p>We appreciate your referrals. Use this option to recommend TrackMyStop to your friends and help them travel stress free. Also, please show some love by writing a review on the app store.</p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon glyphicon-question-sign logo-small"></span>
                    <h4>HELP</h4>
                    <p>Use help pages to learn how to use TrackMyStop, its limitations and the privacy statement. Here you can also find answers to frequently asked questions.</p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon glyphicon-info-sign logo-small"></span>
                    <h4>ABOUT</h4>
                    <p>This option will show you which version of TrackMyStop is installed on your device. We include additional features and rail roads in new versions. So update TrackMyStop on your device to have the latest version.</p>
                </div>
            </div>
        </div>
        
        <!-- Container (Portfolio Screenshots Section) -->
        <div id="screenshots" class="container-fluid text-center bg-white">
        <h3>TrackMyStop Screenshots</h3>
        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="screenshot">
                    <img src="IMG_1709.png" class="img-responsive" alt="Track - Select Station to Track">
<!--                        <p>Select your destination stop on this screen and start tracking it.</p> -->
                        </div>
                </div>
                <div class="item">
                    <div class="screenshot">
                        <img src="IMG_1710.png" class="img-responsive" alt="TrackMyStop - See the progress of your trip">
<!--                            <p>You can see the progress of your journey on this screen.</p> -->
                            </div>
                </div>
                <div class="item">
                    <div class="screenshot">
                        <img src="IMG_1711.png" class="img-responsive" alt="Map - Route Map">
<!--                            <p>You can see a map of your route here.</p>  -->
                            </div>
                </div>
                <div class="item">
                    <div class="screenshot">
                        <img src="IMG_1712.png" class="img-responsive" alt="Station Search">
<!--                            <p>You can use this search screen to search any station.</p> -->
                            </div>
                        </div>
                <div class="item">
                    <div class="screenshot">
                        <img src="IMG_1713.png" class="img-responsive" alt="Supported Rail Roads">
<!--                            <p>TrackMyStop Support many Rail Roads.</p> -->
                            </div>
                        </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
        
        <!-- Section for Download -->
        <div id="download" class="container-fluid text-center bg-silver">
            <div class="text-center">
                <h3>Download</h3>
                <h5>Choose a download that works for your device</h5>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>App Store</h1>
                        </div>
                        <div class="panel-body">
                            <p><a href="https://itunes.apple.com/us/app/trackmystop/id558683874?mt=8&amp;uo=4" target="itunes_store"><img alt="TrackMyStop - Exultancy" src="http://r.mzstatic.com/images/web/linkmaker/badge_appstore-lrg.gif" style="border: 0;" /></a> </p>
                        </div>
                        <div class="panel-footer">
                            <button onclick="location.href='https://itunes.apple.com/us/app/trackmystop/id558683874?mt=8'" class="btn btn-lg">Download Now!</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>Google Play Store</h1>
                        </div>
                        <div class="panel-body">
                            <p>Sorry! TrackMyStop is currently not<br>available for Android devices.</p>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-lg">Coming Soon</button>
                        </div>
                    </div> 
                </div> 
            </div>
        </div>
        
        
        <!-- Section for Contact US -->
        <div id="contact" class="container-fluid bg-white">
            <h2 class="text-center">CONTACT</h2>
            <div class="row">
                <div class="col-sm-5">
                    <div class="row">
                    <p>Contact us and we'll get back to you within 24 hours.</p>
                    <img class="img-responsive" src="Exultancy.png" align="left"></p>
                    </div>
                    <div class="row">
                    <p><span class="glyphicon glyphicon-map-marker"></span> 5 Independence Way, Suite 300 <br> Princeton,NJ 08540, USA</p>
                    <p><span class="glyphicon glyphicon-phone"></span> +1 609-514-5111</p>
                    <p><span class="glyphicon glyphicon-envelope"></span> admin@TrackMyStop.com</p>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                                </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                                </div>
                    </div>
                    <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <button class="btn btn-default pull-right" type="submit">Send</button>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        
        
        <!-- Set height and width with CSS -->
        <div id="googleMap" style="height:400px;width:100%;"></div>
        
        <!-- Add Google Maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBF3Rv87lTOjJOY0g5q7ozvWiTv-S4Ud10&callback=initmap"></script>
        <script>
            var myCenter = new google.maps.LatLng(40.3625177, -74.5952527);
            
            function initialize() {
                var mapProp = {
                    center:myCenter,
                    zoom:12,
                    scrollwheel:false,
                    draggable:false,
                    mapTypeId:google.maps.MapTypeId.ROADMAP
                };
                
                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                
                var marker = new google.maps.Marker({
                                                    position:myCenter,
                                                    });
                                                    
                                                    marker.setMap(map);
            }
        
        google.maps.event.addDomListener(window, 'load', initialize);
            </script>
        <style>
            footer .glyphicon {
                font-size: 20px;
                margin-bottom: 20px;
                color: #0468ab
            }
        </style>
        
        <footer class="container-fluid text-center">
            <a href="#myPage" title="To Top">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
            <p>Copyrights © 2012-2018 Exultancy, Inc. All Rights Reserved</p>
            
        </footer>

    
    </body>
</html>
