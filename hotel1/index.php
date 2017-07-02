<!DOCTYPE html>
<html>
<head>
  <title>hotel</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" type="text/css" href="jquery-ui/jquery-ui.css">
    <script type="text/javascript" src="jquery-ui/external/jquery/jquery.js"></script>
    <script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>
       <script src="jsImgSlider/themes/1/js-image-slider.js" type="text/javascript"></script>
       <link href="jsImgSlider/themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- image slider starts-->
 <div id="container">

             <img class="slides" src="pictures/p1.jpg"></img>
  <img class="slides" src="pictures/p2.jpg"></img>
        <img class="slides" src="pictures/p3.jpg"></img>
        <button class="btn" onclick="plusDivs(-1)" id="btn1">&#10094;</button>
          <button class="btn" onclick="plusDivs(1)" id="btn2">&#10095;</button>
         <!-- image slider ends -->
       <!-- navigation bar -->
    <div id="div2">

        <img src="pictures/logo1.png" style="width: 200px;">
          <div id="nav_wrapper">
          <head> 
            
          </head>
            <ul id="navbar">
              <li><a href="#" class="active">Home</a></li>
              <li><a href="#" id="linkref">Rooms and suits</a>
                        <ul>
                          <li><a href="#">Single room</a></li>
                          <li><a href="#">Double room</a></li>
                          <li><a href="#">Family Room</a></li>
                          <li><a href="#">Suits</a></li>
                        </ul>

              </li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Menu </a>
                          <ul>
                            <li><a href="#" class="active1">Dining and bars</a></li>
                            <li><a href="#">Amenities</a></li>
                            <li><a href="#">Blogs</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Contact Us</a></li>

                          </ul>

              </li>
            </ul> 
          </div>
               

        </div>
            <!-- navigation bar -->
            <!-- book now bar-->
        <div id="divi">
         <div id="cont" class="logo"><p class="title">Book<br>Now</p></div> 
         <form action="submitted_data.php" method="post" style="font-size: 17px;padding-left: 200px;padding-right: 50px;">
                 
                 <label>Destination
                 <select type="text" placeholder="Destination" name="destination" required="required" style="width: 110%;height: 40px;text-align: center;">
                         <option value="1" ></option>
                        <option value="1" >Kolkata</option>
                                    <option value="2" >Mumbai</option>
                                    <option value="3" >Chennai</option>
                                    <option value="4" >Punjab</option>
                                    <option value="5" >Patna</option>
                                    <option value="6" >Ranchi</option>
                                    <option value="7" >Goa</option>
                                    <option value="8" >Jammu and Kashmir</option>
                                    <option value="9" >Gujarat</option>
                                    <option value="10" >Bhopal</option>
                                </select>

                    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>Check in<input type="text" id="datepicker" style="width: 100%;height: 40px;text-align: center;"></input></label>&nbsp;&nbsp;&nbsp;
               <label>Check out<input type="text" id="datepicker1" style="width: 100%;height: 40px;text-align: center;"></input></label>&nbsp;&nbsp;&nbsp;
        
              <label>Adults <select type="text" placeholder="Adults" name="Adults" required="required" style="padding-right: 10%;padding-left: 10%;width: 200%;height: 40px;text-align: center;">
              <option value="1" >1</option>
                                    <option value="2" >2</option>
                                    <option value="3" >3</option>
                                    <option value="4" >4</option>
                                    <option value="5" >5</option>
                                    <option value="6" >6</option>
                                    <option value="7" >7</option>
                                    <option value="8" >8</option>
                                    <option value="9" >9</option>
                                    <option value="10" >10</option>
                                </select></label>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <label>Child <select type="text" placeholder="Child" name="Child" required="required" style="width: 200%;height: 40px;text-align: right;">
               <option value="0" >0</option>
              <option value="1" >1</option>
                                    <option value="2" >2</option>
                                    <option value="3" >3</option>
                                    <option value="4" >4</option>
                                    <option value="5" >5</option>
                                    <option value="6" >6</option>
                                    <option value="7" >7</option>
                                    <option value="8" >8</option>
                                    <option value="9" >9</option>
                                    <option value="10" >10</option>
                                </select></label>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <label><input type="submit" name="submit" value="Check Availability" class ="submit" style="width: 150%;height: 70px;text-align: center; font-size: 18px; border: 2px solid red;
                background: yellow;">
                   
               </input></label>                                
            </form>
        

             
        </div>
            
        <!-- book now bar ends -->
        
 </div>
 <br> <br> <br> <br> <br> <br> <br> <br><br>
<div id="wrapper1">
<div id="intro">
    <img src="pictures/pict.jpg">
</div>
   <div id="intro1">
   <br><br><br><br><br><br>
   <h3>WELCOME</h3>
   <br>
    <h5>The Ultimate Hotel for Both Leisure and Business Goers</h5>
    <br><br><br>
    <p id="p1">The hotel is a welcoming retreat for either people traveling across the country or businessmen, visiting our Rustbelt state for some commercial affairs.</p>
    <br>
    <p>Here, we always make sure that you will have any of your needs satisfied, be it a comfortable hotel room with a strong WiFi signal and a diligent room service, a dining and lounge zone or any additional amenities a traveller might want…</p>
    <div id="button-re">
        <a href="#read more">Read more</a>
    </div>
</div>
</div>
<br><br><br><br><br><br><br>
<div id="wrapper2">
    <div id="row">
     <div id="row1">
         <img src="pictures/wi-fi-zone-icon.png">
     </div>  
     <div id="roww">
     <br><br>
         <h3>FREE WIFI</h3><br>
         <p id="text">Because both businessmen and travelers need to access the Internet anywhere!</p>
     </div> 
    </div>
    <div id="row">
     <div id="row1">
         <img src="pictures/service-512.png">
     </div>  
     <div id="roww">
     <br><br>
         <h3>ROOM SERVICE</h3><br>
          <p id="text">Enjoy a full-blown room service, enhanced by an option to order food and beverages!</p>
     </div> 
    </div>
    <div id="row">
      <div id="row1">
          <img src="pictures/parked-car.png">
      </div>  
     <div id="roww">
     <br><br>
         <h3>FREE PARKING LOTS</h3><br>
          <p id="text">Book a suite and the parking lot will be yours, free of any additional charge!</p>
     </div>    
    </div>
    <div id="row">
      <div id="row1">
          <img src="pictures/Luggage-storage-512.png">
      </div>  
     <div id="roww">
     <br><br>
         <h3>EARLY CHECK-IN, LATE CHECK-OUT</h3><br>
          <p id="text">More flexible than ever, made with our guests’ comfort and timing in mind…</p>
     </div>   
    </div>
</div>
<br><br><br><br><br><br>
<div id="wrapper4">
    <h2>Rooms & Suites</h2>
    <p>__________________</p><br>
    <p>Haveli has 35 elegantly furnished and air conditioned classic rooms, which will be a perfect pick both for<br> business and leisure travelers...</p>
</div>

<div id="wrapper3">
    <div id="col">
    <img src="pictures/Hotel-Suite_01.jpg">
     <br>
     <h2>Suite</h2>
     <ul>
         <li>Only 5 rooms are available</li>
         <li>Breakfast included</li>
         <li>Price does not include VAT & services fee</li>
     </ul>
     <div id="book"><a href="">Book Now</a></div>
    </div>
    <div id="col">
          <img src="pictures/Hotel-Suite_02.jpg">
           <br>
     <h2>Double Room</h2>
     <ul>
         <li>Perfect for traveling couples</li>
         <li>Breakfast not included</li>
         <li>Concierge services</li>
     </ul>
      <div id="book"><a href="">Book Now</a></div>
    </div>
    <div id="col">
          <img src="pictures/Hotel-Suite_03.jpg">
           <br>
     <h2>Family Room</h2>
     <ul>
         <li>Two double beds</li>
         <li>Babysitting facilities</li>
         <li>1 free bed available on request</li>
     </ul>
      <div id="book"><a href="#book now">Book Now</a></div>
    </div>
</div>
        <br><br><br><br><br>
<div id="heading">
    <h1>Hotel's Amenities</h1>
    <p>__________________________</p><br>
    <p>As a part of our effort to enhance our guest’s stay at our hotel, recently we’ve rolled out a pack of additional hotel services, such as airport shuttle, a business conference hall and much more…
     <br>
     All of these amenities come at a reasonable pricing and with an excellent quality! Be sure, that besides having a nice stay at our place, you will be able to accomplish any additional errands you need…</p>
</div>

        <br><br>

<div id="slides">
    <div id="slide1">
    <div id="subslides1">
            <div id="over"><h1> Delicious<br> food</h1></div>
        </div>
        <div id="subslides2">
            <div id="over"><h1> Pools</h1></div>
        </div>
        <div id="subslides3">
            <div id="over"><h1> Gymkhana</h1></div>
        </div>
        <div id="subslides4">
            <div id="over"><h1> Spa & Beauty</h1></div>
        </div>
    </div>
    <div id="slide2">
        <div id="slides1">
             <div id="over"><h1> Game Palour</h1></div>
        </div>
         <div id="slides2">
              <div id="over"><h1> Banquet Hall</h1></div>
         </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br>
<div id="wrapper5">
<h3>GUEST  REVIEWS</h3>
    <div id="subwrap">
    <img src="pictures/pro1.jpg">
    <h1>Mary jane</h1>
    <p>Thank you for a truly amazing stay! Your hospitality is quite outstanding. The sports centre is also very good. I hope to be back soon.</p>
    </div>
    <div id="subwrap">
    <img src="pictures/pro2.jpg">
    <h1>Peter parker</h1>
    <p>The service here has just been fantastic; whatever we needed was brought to us right away. The entire experience was really great!</p>
    </div>
    <div id="subwrap">
    <img src="pictures/pro3.jpg">
    <h1>Alia mehra</h1>
    <p>I just don't know how to describe your services... They are extraordinary! I am quite happy with them! Just keep up going this way!</p>
    </div>
</div>
<br><br><br><br><br>
<div id="register">
    <div id="subregister1">
        <h2>Sign Up for a Newsletter...</h2>
        <p>...AND NEVER MISS OUR SPECIAL OFFERS AND NEWS!</p>
    </div>
    <div id="subregister2">
        <form>
            <input type="email" name="email" placeholder="Enter your e-mail" required="required" style="width: 550px; height: 50px; margin-top: 90px;margin-left: 30px;font-size: 20px;
            text-align: center; "></input>
            <input type="submit" name="submit" value="Register" style="width: 120px; height: 50px; margin-top: 40px;font-size: 20px"></input>
        </form>
    </div>
</div>
<br><br>
<div id="footer">
    <div id="wrapfoot1">
        <div id="title">
            <img src="pictures/logo.png">
        </div>
         <p>BEST HOTELS <br>@ All RIGHTS RESERVED </p>
    </div>
    <div id="wrapfoot2">
        <h1>Contact us</h1>
        <div id="conto"><img src="pictures/location.png"><p>410 S Missouri St, Indianapolis, PIN 46225, INDIA</p></div>
         <div id="conto"><img src="pictures/call.png"><p>Contact us directly at +(033) 2789-5789</p></div>
          <div id="conto"><img src="pictures/mail.png"><p>info@demolink.org</p></div>
    </div>
    <div id="wrapfoot3">
       <h1>FOLLOW US ON</h1> 
       <div id="sogo1"><img src="pictures/facebook.png"></div>
       <div id="sogo2"><img src="pictures/twitter.png"></div>
       <div id="sogo3"><img src="pictures/instagram1.png"></div>
       <div id="sogo4"><img src="pictures/googleplus.png"></div>
       <div id="sogo5"><img src="pictures/youtube.png"></div>
    </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
</body>
<script>
    $(document).ready(function(){
        $("#datepicker").datepicker();
     $("#datepicker1").datepicker();});
    
</script>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("slides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("slides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000); // Change image every 5 seconds
}
</script>

<script>
// When the user scrolls down 100px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
</html>