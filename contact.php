 <!-- Map Column -->
            <div class="col-md-8">
 School Location
                <!-- Embedded Google Map -->
                <!-- <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=green%20valley%20%20General%20Paulino%20Santos%20Drive%2C%20Koronadal%20City%2C%209506%20South%20Cotabato%2C%20Philippines"></iframe> -->
           <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
           <div style="overflow:hidden;height:400px;width:100%;"><div id="gmap_canvas" style="height:100%;width:400px;">
           <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
           <a class="google-map-code" href="http://www.map-embed.com" id="get-map-data">embed google map</a>
           </div>
           <script type="text/javascript">
<<<<<<< Updated upstream
            function init_map(){var myOptions = {zoom:19,center:new google.maps.LatLng(6.491144065749442,124.85594889087679),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(6.491144065749442, 124.85594889087679)});infowindow = new google.maps.InfoWindow({content:"<b>ACLC College of Iriga City, Inc.</b><br/>Km. 2, Bo. 2, General Santos Drive<br/>9506  Philippines" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
=======
            function init_map(){var myOptions = {zoom:19,center:new google.maps.LatLng(13.421336994102615,123.40858899359932),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(13.421336994102615, 123.40858899359932)});infowindow = new google.maps.InfoWindow({content:"<b>Aclc College Of Iriga, Inc.</b><br/>2nd Floor, Jasaca Building San Miguel Iriga City<br/>9506  Philippines" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
>>>>>>> Stashed changes
</div>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>
                    ACLC College of Iriga City, Inc. 
                    <br>2nd Floor, Jasaca Building H1 San Miguel, Iriga City, Philippines<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: (054) 299-5884</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">Email</abbr>: <a href="mailto:name@example.com">Admission@aclcirigaph.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>

 