
<!DOCTYPE html>
<html>

<head>
     <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title> EndoDev</title>
   <link href='http://fonts.googleapis.com/css?family=Luckiest+Guy' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans|Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/boot.css" />
    <link rel="stylesheet" href="css/page.css" />
    <link rel="stylesheet" href="css/links.css" />
    <style type="text/css">
       #map-canvas { 
           height: 80%;margin-top: 5%; width: 50%;float: right; margin-right: 50px;
           border: 5px solid white;
           border-radius: 5px;
       
       }
        .myinfo{
            padding-top: 180px;
            padding-left: 10px;
            padding-right: 10px;
        }
   #map-canvas img { max-width:none; }
    </style>
   
    <link rel="stylesheet" href="css/main.css" />
    
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxmAmU1B6NXUUUp95m4q5N7FSm--_1Mpw"></script>
    <script src="js/jquery.js" ></script>
<script src="js/page.js" ></script>
    <script src="js/main.js" ></script>
  <script type="text/javascript">
  
      var myLatlng = new google.maps.LatLng(27.2049046,33.8486507);
      function initialize() {
          
        var mapOptions = {
          center: myLatlng,
          zoom: 15,
            draggable :true,
   mapTypeControl: true,
    mapTypeControlOptions: {
      style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
    },
    zoomControl: true,
    zoomControlOptions: {
      style: google.maps.ZoomControlStyle.DEFAULT
    },
            scrollwheel :false,
         
             mapTypeId: google.maps.MapTypeId.ROADMAP,
     
    streetViewControl: false
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
            var marker = new google.maps.Marker({
    position: myLatlng,
    map: map,
    title:"EndoDev"
});
      }
    
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    </head>
    
    <body >
  <script>
  parent.document.title = "EndoDev -Web development & Internet Marketing Solutions";
  </script>      
        <div class="fixed_p my_bar wmiya">
            <a href="/">
            <img src="images/endo_logo.png" class="our_logo lefty" alt="endodev.com"/>
                </a>
               <ul id="myMenu" class="_mgt8 lefty luc">
    <li data-menuanchor="Home" class="active"><a href="#Home">Home</a></li>
    <li data-menuanchor="Techs"><a href="#Techs">Technologies</a></li>
    
    <li data-menuanchor="Contact"><a href="#Contact">Contact</a></li>
</ul>
            </div>
 
      <div id="pagepiling">
          
    <div class="section">
         
          <img src="images/mobiles.png" class="my_mob lefty" />
         <h2 class="bui lefty centery luc"> We build for the web</h2>
        
        <p class="my_p">
        We do amazing and ambitious web applications for desktop and mobile , 
            
            The <span class="idea">Idea</span>  is yours ,and <span class="we">We</span>  do the rest
        
        </p>
          </div>
    <div class="section">
          <h2 class="my_t abs wmiya whity centery luc">
              Technologies we use
        </h2>
        <ul class="techs">
        <li>
            <a href="#">
                <span class="flip whity wmiya centery inline_b _5br"> Ruby on Rails</span>
            <img src="images/railslogo.png" />
            </a>
            
            </li>
             <li>
            <a href="#">
                <span class="flip whity wmiya centery inline_b _5br"> Coffee Script</span>
            <img src="images/coffe.png" />
            </a>
            
            </li>
        
               <li>
            <a href="#">
                <span class="flip whity wmiya centery inline_b _5br"> jQuery</span>
            <img src="images/jquery.png" />
            </a>
            
            </li>
                   <li>
            <a href="#">
                <span class="flip whity wmiya centery inline_b _5br"> AngularJs</span>
            <img src="images/angular.png" />
            </a>
            
            </li>
                   <li>
            <a href="#">
                <span class="flip whity wmiya centery inline_b _5br"> EmberJs</span>
            <img src="images/ember.png" />
            </a>
            
            </li>
                      <li>
            <a href="#">
                <span class="flip whity wmiya centery inline_b _5br"> Php</span>
            <img src="images/php.png" />
            </a>
            
            </li>
                         <li>
            <a href="#">
                <span class="flip whity wmiya centery inline_b _5br"> Html5 & CSS3</span>
            <img src="images/htm5.png" />
            </a>
            
            </li>
                          <li class="mobs _30">
            <a href="#">
                <span class="flip whity wmiya centery inline_b _5br"> Mobile Apps</span>
            <img src="images/mobs2.png" />
            </a>
            
            </li>
                            <li style="font-size: 2em;" class="l_t centery andm">
            <a href="#" class="whity " style="text-decoration:none;">
            and more
            </a>
            
            </li>
        </ul>       
          </div>
          
    
    <div class="section">

        
       <div id="map-canvas"></div>
        
        <span class="myinfo centery blocky lefty _40 whity  _15f">
        EndoDev for web development and internet marketing solutions 
            <br/ >
            Sheraton Road Hurghada-Egypt
            <br/ >
            email: info@endodev.com
        
        </span>
  
        
          </div>
</div>
    </body>
</html>