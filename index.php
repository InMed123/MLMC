<?php include 'header.php'; ?>
<?php include_once("analyticstracking.php") ?>
<head>


 <style>body { padding-top: 15px; }
#myCarousel .nav a small {
    display:block;

}
#myCarousel .nav  {
   color: #ffffff;
  background-color: #154F89;
  
  border-left: 1px solid #ddd;
  border-right: 1px solid #ddd;

    
    
}

.nav-tabs.nav-justified {
  color: #ffffff;
  background-color: #154F89;


  border-left: 1px solid #fff;
  border-right: 1px solid #fff;
    

}
</style> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


 <script>
 

$('#myCarousel').carousel({
        interval:   4000
    });

 $(".item").click()
    var clickEvent = false;
    $('#myCarousel').on('click', '.nav a', function() {
            clickEvent = true;
            $('.nav li').removeClass('active');
            $(this).parent().addClass('active'); 

    }).on('slid.bs.carousel', function(e) {
        if(!clickEvent) {
            var count = $('.nav').children().length -1;
            var current = $('.nav li.active');
            current.removeClass('active').next().addClass('active');
            var id = parseInt(current.data('slide-to'));
            if(count == id) {
                $('.nav li').first().addClass('active');    
            }
        }
        clickEvent = false;
    });
    </script> 
</head>

<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
      
<!--
        <div class="item active">
        <a href="visitors.php" >
          <img src="img/hosp2.jpg"></a>

           <div class="carousel-caption">
-->
           <!--  <h3>Headline</h3> -->
            <!-- <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p> -->
<!--
          </div>
        </div>
-->
          <!-- End Item -->
 
         <div class="item active">
         <a href="docs/MLMCanswerBookAdMarch2017.pdf" target="_blank">
          <img src="img/OpeningSoonBanner2.jpg"></a>
           <div class="carousel-caption">
            <!-- <h3>Headline</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p> -->
          </div>
        </div><!-- End Item -->
        
<!--
        <div class="item">
        <a href=>
          <img src="img/MLMCHospitalWeek2017.jpg"></a>
           <div class="carousel-caption">
             <h3>Headline</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p> 
          </div>
        </div>--> <!-- End Item 
-->
        
        <div class="item">
        <a href="careers.php">
          <img src="img/Nurses1.jpg"></a>
           <div class="carousel-caption">
           <!--  <h3>Headline</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p> -->
          </div>
        </div><!-- End Item -->
       


      </div><!-- End Carousel Inner -->
 
 
    <ul class="nav nav-pills nav-justified">
<!--          <li data-target="#myCarousel" data-slide-to="0" transition-duration="2s" class="active"><a href="">Our Community,Our Hospital<small></small></a></li>-->
          <li style="border-right:2px solid; background-color:#154F89; " data-target="#myCarousel" data-slide-to="0" class=""><a href="">Coming Soon!<small></small></a></li>
<!--         <li style="border-right:2px solid;" data-target="#myCarousel" data-slide-to="2" class=""><a href="">News<small></small></a></li>-->
          <li data-target="#myCarousel" data-slide-to="1" class=""><a href="">Join Our Team!<small></small></a></li>
        <!--   <li data-target="#myCarousel" data-slide-to="4" class=""><a href="">faceboook<small></small></a></li> -->
    </ul>
 
 
    </div><!-- End Carousel -->
</div>
   
  <!--   <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FGardensofClanton%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe> -->
     <div class="wrapper container">
        
        <div class="container pioneer-section">
            <div class="row">
                <h2 class="pioneer text-center">
                    Our community. Our hospital.
                </h2>
                <h3 class="pioneer-low text-center">
                    Our goal is to provide you with excellent healthcare.
                </h3>
            </div>
        </div>
        <div class="container circles">
            <!-- Example row of columns -->
       <div class="row">
        <div class="col-md-3 text-center">
          <div class="service-item">
            <span><i class="service-icon fa fa-user-md icon-corner"></i>
            <h4 class="circle-text1">Our Doctors</h4></span>
            <p class="circle-text2">Mountain Lakes Medical Center has some of the most highly qualified physicians in the area.</p>
            <a href="doctors.php" class="btn btn-primary">Learn More</a>
          </div>  
        </div>  
        <div class="col-md-3 text-center">
          <div class="service-item">
            <i class="service-icon fa fa-ambulance"></i>
            <h4 class="circle-text1">Our Services</h4> <p class="circle-text2">Mountain Lakes Medical Center offers a wide range of medical services for your benefit.</p>
            <a href="services.php" class="btn btn-primary">Learn More</a>
          </div>  
        </div>
        <div class="col-md-3 text-center">
          <div class="service-item">
            <span><i class="service-icon fa fa-stethoscope"></i>
            <h4 class="circle-text1">Our Careers</h4></span>
            <p class="circle-text2">Mountain Lakes Medical Center is committed to serving Georgia with high-level healthcare.</p>
            <a href="careers.php" class="btn btn-primary">Learn More</a>
          </div>  
        </div>
        <div class="col-md-3 text-center">
          <div class="service-item">
            <i class="service-icon fa fa-medkit"></i>
            <h4 class="circle-text1">Our News</h4> <p class="circle-text2">See all the great news and recent events that are happening at Mountain Lakes Medical Center!</p>
            <a href="https://www.facebook.com/pages/Mountain-Lakes-Medical-Center/481172788680333" target="_blank" class="btn btn-primary">Learn More</a>
          </div>  
        </div>  
      </div><!-- <div class="col-sm-3">
          <img class="img-circle img-responsive text-center" src="http://placehold.it/200x200">
            <h2 class="text-center circle-text1">Health Services</h2>
            <p class="text-center">These marketing boxes are a great place to put some information. </p>
        </div>
        <div class="col-sm-3">
          <img class="img-circle img-responsive text-center" src="http://placehold.it/200x200">
            <h2 class="text-center circle-text1">Health Services</h2>
            <p class="text-center">The images are set to be circular and responsive. </p>
        </div>
        <div class="col-sm-3">
          <img class="img-circle img-responsive text-center" src="http://placehold.it/200x200">
            <h2 class="text-center circle-text1">Health Services</h2>
            <p class="text-center">Donec id elit non mi porta gravida at eget metus. </p>
        </div>
         <div class="col-sm-3">
          <img class="img-circle img-responsive text-center" src="http://placehold.it/200x200">
            <h2 class="text-center circle-text1">Health Services</h2>
            <p class="text-center">Donec id elit non mi porta gravida at eget metus. </p>
        </div> -->
        </div>
        
        <!-- <div class="container">
            <div class="row">
                <h2 class="meet">
                    Meet the Team
                </h2>
                <h5 class="meet-small">
                    Proin molestie, felis in pellentesque malesuada, quam ligula sagittis.
                </h5>
                <div class="col-sm-4">
                    <h3>
                        John Smith <small>Job Title</small>
                    </h3><img class="img-responsive" src="http://placehold.it/750x450">
                    <p>
                        What does this team member do? Keep it short! This is also a great spot for social links!
                    </p>
                </div>
                <div class="col-sm-4">
                  <h3>
                        John Smith <small>Job Title</small>
                    </h3>
                    <img class="img-responsive" src="http://placehold.it/750x450">
                    
                    <p>
                        What does this team member do? Keep it short! This is also a great spot for social links!
                    </p>
                </div>
                <div class="col-sm-4">
                  <h3>
                        John Smith <small>Job Title</small>
                    </h3>
                    <img class="img-responsive" src="http://placehold.it/750x450">
                    
                    <p>
                        What does this team member do? Keep it short! This is also a great spot for social links!
                    </p>
                </div>
            </div>
        </div> -->
        </body>
      
      </div>
       <?php include 'footer.php'; ?>