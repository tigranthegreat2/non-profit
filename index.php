<?php 
    include('Template/Header.php');
?>
        
         <div class="slideshow-container">

            
                <div class="mySlides fade">
                    <img src="Images\Corona Virus.jpg" style="width:100%">
                    <div class="text"></div>
                </div>
          
                <div class="mySlides fade">
                    <img src="Images\Corona Virus.jpg" style="width:100%">
                    <div class="text"></div>
                </div>
          
                <div class="mySlides fade">
                <img src="Images\Corona Virus.jpg" style="width:100%">
                <div class="text"></div>
                </div>
          
            <!-- Arrow Buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
          <br>
          
          
          
          <script>
          var slideIndex = 1;
        showSlides(slideIndex);
        
        // Next/previous controls
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
       
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
        }
        </script>
    <div class="zonePlace1 zoneFooter2">
        <table cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td style="width:75%;">
                      <div style="" data-editablearea="0" data-areaheight="auto">
                      <div class="who-we">
                        <h1 class="new">WHO WE ARE</h1>
                          <p>The <span><font color="#CE1126"><b>Corna Virus Relief Association</b></font></span> (<font color="#CE1126"><b>CRVA</b></font>) is a non-profit organization whose 
                            goal is to promote the community's wellbeing during these difficult times. This includes helping families who are economically 
                            challenged or have been impacted by, but not limited to the coronavirus, and natural disasters.</p>
                      </div>
                      </div>
                    </td>
                    <td style="width:25%;">
                      <div style="" data-editablearea="0" data-areaheight="auto">
                      <div class="right-btn">
                        <a href="/website/user-registration/user-registration.php">Join CVRA</a>
                      </div>
                      </div>
                    </td>
                </tr>
            </tbody>
        </table> 
    </div>    
    <div class="zonePlace zoneFooter1">
        <div>   
            <h1 class="new">Act Local Think Global</h1>
        </div>
        <div class="global" style="background-color:transparent;">
            <table cellspacing="0" cellpadding="0">
                <tbody>
                    <tr>
                        <td style="background-color:#FFFFFF; width: 33%;">
                            
                            <div data-editablearea="0" data-areaheight="auto">
                            <div class="global-section">
                                <a href="https://www.gofundme.com/f/covid19-relief-cause-fund" target="_blank"><img src="Donate.jpg" alt="" title="" border="0"></a>
                                <h1><a href="https://www.gofundme.com/f/covid19-relief-cause-fund" target="_blank">Donate</a></h1>
                                <p><a href="https://www.gofundme.com/f/covid19-relief-cause-fund" target="_blank">Help Our Communitees</a></p>
                            </div>
                            </div>
                        </td>
                        <td style="width:20px;" data-componentid="keaHVsS_separator" class="WaLayoutSeparator">
                            <div style="width: inherit;">
                            </div>
                        </td>
                        <td style="background-color:#FFFFFF; width: 33%;">
                            
                            <div data-editablearea="0" data-areaheight="auto">
                            <div class="global-section">
                                <a href="/website/JoinCommittee.php"><img src="Donate.jpg" alt="" title="" border="0"></a>
                                <h1><a href="/website/JoinCommittee.php">Volunteer</a></h1>
                                <p><a href="/website/JoinCommittee.php">Uniting Our Communitees Together</a></p>
                            </div>
                            </div>
                        </td>
                        <td style="width:20px;" data-componentid="keaHVsS_separator" class="WaLayoutSeparator">
                            <div style="width: inherit;">
                            </div>
                        </td>
                        <td style="background-color:#FFFFFF; width: 33%;">
                            
                            <div data-editablearea="0" data-areaheight="auto">
                            <div class="global-section">
                                <a href="/website/Programs.php" target="_blank"><img src="Donate.jpg" alt="" title="" border="0"></a>
                                <h1><a href="/website/Programs.php" target="_blank">Programs</a></h1>
                                <p><a href="/website/Programs.php" target="_blank">Essential Services For Our Communitees</a></p>
                            </div>
                            </div>
                        </td>
                        
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>  
    <div class="zonePlace2 zoneFooter2">
        <div class="sponsors-home-sec">
            <h1 class="new">OUR SPONSORS</h1>
                <ul>
                    <li><a href="https://www.sjsu.edu/" target="_blank"><img src="Images\sponsor.png" alt="" title="" border="2" width="300" height="150"></a></li>
                </ul>
                <div class="sponser-btn">
                    <a class="btn btn-border-1" href="Sponsors.php">Interested In Sponsorship?</a>
                </div>     
        </div>
    </div> 
     <div class="largespacer"></div>
        <div>
            <?php 
                include('Template/Footer.php');
            ?> 
        </div>
    </body>
</html>
    
