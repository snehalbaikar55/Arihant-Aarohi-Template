<?php
    session_start();
    $sessionid = session_id();
?>
<?php include "include/head.php";?>

<!-- /* Banner Slider */ -->

<div class="flex-row  position-relative no-gutter">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <?php for ($i=1;$i<count($banner);$i++){?>
            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i;?>"></li>
            <?php }?>
        </ol>
        <div class="carousel-inner">

            <div class="carousel-item active">
                <image class="d-block w-100 resposive_height img_top" width="900" height="800" src="./img/<?php echo $banner[0];?>"/>
                    <div class="carousel-caption d-none d-md-block">
                    </div>
            </div>
            <?php for ($i=0;$i<count($banner)-1;$i++){?>
            <div class="carousel-item">
                <image class="d-block w-100 resposive_height img_top" width="900" height="800" src="./img/<?php echo $banner[$i+1];?>" />
                    <div class="carousel-caption d-none d-md-block">
                    </div>  
            </div>
            <?php } ?>
        </div>
    </div>

    <div class="bg_trans text-ce" id="bookpanel">
        <div class="bg-success bhead1 effetMoveGradient" id="bookopen">BOOKING OPEN</div>
        <div class="p-2 poscenter">
            <div><h4 class="text-uppercase"><?php echo $propertydetails['PropertyName'];?></h4></div>
            <div>
                <h6>
                        At <?php echo $propertydetails['Location'];?><br>
                        By <?php echo $propertydetails['Developer'];?>
                </h6>
            </div>
        </div>
        <div>
            <ul class="list-unstyled padding">
                <p>
                <i class="fa fa-caret-left p-2"></i> Land Area : <span style="padding:5px;"><?php echo $propertydetails['t1'];?></span>
                <br>
                    <i class="fa fa-caret-left p-2"></i><span style="padding:5px;"><?php echo $propertydetails['t2'];?></span>
                </p>
            </ul>
        </div>
        <div class="bg-success effetMoveGradient text-center p-1"><?php echo $propertydetails['t3'];?></div>
        <div class="aa p-2 animate__bounceIn text-center"><?php echo $propertydetails['t4'];?></div>
        <div class="bg-success effetMoveGradient text-center p-1"><?php echo $propertydetails['t5'];?></div>
        <div class="bg-success effetMoveGradient text-center p-1 mt-1"><?php echo $propertydetails['t6'];?></div>
        <div class="p-2 poscenter">
        <?php echo $propertydetails['te7'];?>
        </div>
        <div class="p-2 poscenter">
            <h4>
            <?php echo $propertydetails['Price'];?></h4>
            <button id="enquire-now" class=" btn btn-success effetMoveGradient animate__swing" data-toggle="modal" data-target="#myModal"  data-title="Enquire Now" >Enquire Now</button>
        </div>
        
        <div class="show" style="margin-top: 24px;">
<h6 class="aa animate__bounceIn infinite" style="animation-duration: 3s;"><div class="form-last-heading" style="padding: 2px 8px;
    background: #e8e8e8;
    display: flex;
    align-items: center;
    flex-direction: column;"><img src="img/ola.jpeg" style="width: 50px;"> Free cab facility for site visit</div></h6>
</div>
    </div>
<!-- /* Banner Slider End */ -->

<div class="col-md-12 col-sm-12 col-xs-12">
 
            <!-- /* About section */ -->
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <h4 class="card-title text-center">At <?php echo $propertydetails['Location'];?></h4>
                            <p class="card-text">
                            <?php echo $propertydetails['d1'];?>
                            </p>
                            <div class="d-grid gap-2 text-center mx-auto">
                                <button id="download-brochure" type="button" class="btn btn-success effetMoveGradient" data-toggle="modal" data-target="#myModal"  data-title="Download Brochure">Download Brochure</button>
                            </div>
                        </div>
                    <!-- <img class="card-img-top" src="lodha-quality-homes-feautred-image.jpg" alt="Card image cap"> -->
                        <div class="card-body">
                        <h4 class="card-title text-center txtupper">About <?php echo $propertydetails['Developer'];?></h4>
                         
                        <p class="card-text">
                        <?php echo $propertydetails['d2'];?>
                         <span id="price"></span>
                        </p>
                         
                    </div>
                 
                </div>
            <!-- /* About section End */ -->
   
            <!-- /* Price section  */ -->
          
                <div class="card bg-light mb-3" >
                  
                    <div class="card-header text-center"><h4>Price</h4>
                    
                    </div>
                      
                    <div class="card-body">
                        <div class="card-columns1">
                            <div class="card">
                                <div class="md-col-9">
                                    <div class="">
                                        <table class="table table-hover">
                                            <tr>
                                                <th style="text-align:center;">Type</th>
                                                <th style="text-align:center;">Carpet Area</th>
                                                <th style="text-align:center;">Price</th>
                                            </tr>
                                            <?php for($i=0;$i<count($priceType);$i++){
                                                  for($i=0;$i<count($priceCA);$i++){
                                                  for($i=0;$i<count($price);$i++){
                                            ?>
                                            <tr>
                                                <td style="text-align:center;"><?php echo $priceType[$i];?></td>
                                                <td style="text-align:center;"><?php echo $priceCA[$i];?></td>
                                                <td style="text-align:center;">&#8377;<?php echo $price[$i];?>&nbsp;&nbsp;<button type="button" class="btn btn-success effetMoveGradient btn-sm" data-toggle="modal" data-target="#myModal"  data-title="Send Me Pricing Details" id="price_equ">Price Breakup</button></td>
                                            </tr>
                                            <?php }}}?>
                                          
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card card1 no_mar_l_r w-100">
                                <div class="md-col-3">
                                    <svg class="bd-placeholder-img card-img-top" width="100%" height="160" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Complete Costing Details">
                                        <title>Complete Costing Details</title>
                                        <defs>
                                            <clipPath id="myrec">
                                                <rect width="100%" height="100%" fill="#868e96"></rect>
                                            </clipPath>
                                        </defs>
                                        <text x="35%" y="50%" fill="#dee2e6" dy=".3em">Complete Costing Details</text>
                                        <image width="100%" height="100%" xlink:href="img/costingdetails.jpg" clip-path="url(#myrec)" />
                                    </svg>
                                    <div class="overlay">
                                        <div class="text overlay-text" data-toggle="modal" data-target="#myModal"  data-title="Send Me Costing Details" id="costing">ENQUIRE NOW</div>
                                    </div>
                                    <div class="p-2 bg-success effetMoveGradient text-center aq at-property-item">
                                        <h5 class="card-title text-light">Complete Costing Details</h5>
                                        <span id="floorplan"></span>
                                    </div>
                                      
                                </div>
                               
                            </div>
                              
                        </div>
                     

                    </div>
                </div>
                
            <!-- /* Price section End */ -->

            <!-- /* Floorplan section */ -->
                <div class="card bg-light mb-3">
                    <div class="card-header text-center"><h4>Floor Plan</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                        <?php for($i=0;$i<count($floorplanimage);$i++){
                              for($i=0;$i<count($title);$i++){
                        ?>
                            <div class="col-md-4" style="margin-bottom: 10px;">
                                <div class="card1" >
                                    <svg class="bd-placeholder-img card-img-top" width="100%" height="160" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="<?php echo $title[$i];?>">
                                        <title><?php echo $title[$i];?></title>
                                        <defs>
                                            <clipPath id="fl1">
                                                <rect width="100%" height="100%" fill="#868e96"></rect>
                                                <text x="35%" y="50%" fill="#dee2e6" dy=".3em"><?php echo $title[$i];?></text>
                                            </clipPath>
                                        </defs>
                                        <image width="100%" height="100%" xlink:href="img/<?php echo $floorplanimage[$i];?>" clip-path="url(#fl1)" />
                                    </svg>
                                    <div class="p-2 bg-success effetMoveGradient text-center aq ">
                                        <h5 class="card-title text-light"><?php echo $title[$i];?></h5>
                                      
                                    </div>
                                     
                                    <div class="overlay">
                                        <div class="text overlay-text" data-toggle="modal" data-target="#myModal"  data-title="Send Me Floor Plan Details" id="floorplan">ENQUIRE NOW</div>
                                    </div>
                                    
                                </div>
                            </div>
                            <?php }}?>
                            
                        </div>
                         <span id="images"></span>
                    </div>
                </div>
            <!-- /* Floorplan section End */ -->

            <!-- /* Gallery section  */ -->
                <div class="card bg-light mb-3">
                    <div class="card-header text-center"><h4>Gallery</h4></div>
                    <div class="card-body">
                        <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                                <?php for($i=0;$i<count($gallery)-1;$i++){ ?>

                                <li data-target="#carouselExampleIndicators1" data-slide-to=""></li>
                                <?php } ?>

                            </ol>
                            
                            <div class="carousel-inner">


                                <div class="carousel-item active">
                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="100%" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="<?php echo $propertydetails['PropertyName'];?> Gallery 1">
                                        <title><?php echo $propertydetails['PropertyName'];?> Gallery 1</title>
                                        <defs>
                                            <clipPath id="gsl1">
                                                <rect width="100%" height="100%" fill="#555"></rect>
                                            </clipPath>
                                            <text x="50%" y="50%" fill="#333" dy=".3em"><?php echo $propertydetails['PropertyName'];?> Gallery 1</text>
                                        </defs>
                                        <image width="100%" height="100%" xlink:href="./img/<?php echo $gallery[0];?>" clip-path="url(#gsl1)" />
                                    </svg>
                                </div>
                                <?php for($i=0;$i<count($gallery)-1;$i++){ ?>

                                <div class="carousel-item">
                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="<?php echo $propertydetails['PropertyName'];?> Gallery <?php echo $i;?>">
                                        <title><?php echo $propertydetails['PropertyName'];?> Gallery <?php echo $i+2;?></title>
                                        <defs>
                                            <clipPath id="gsl2">
                                                <rect width="100%" height="100%" fill="#555"></rect>
                                            </clipPath>
                                            <text x="50%" y="50%" fill="#333" dy=".3em"><?php echo $propertydetails['PropertyName'];?> Gallery <?php echo $i;?></text>
                                        </defs>
                                        <image width="100%" height="100%" xlink:href="./img/<?php echo $gallery[$i+1];?>" clip-path="url(#gsl2)" />
                                    </svg>
                                </div>
                                <?php } ?>
                              
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                                <span id="amenities"></span>
                            </a>
                             
                        </div>
                    </div>
                </div>
            <!-- /* Gallery section End*/ -->

            <!-- /* Amenities section */ -->
            <div class="card bg-light mb-3">
                <div class="card-header text-center">
                    <h4>Amenities</h4>
                </div>
                <div class="card-body">
                    <div class="row"> 
                        <?php for($i=0;$i<count($amenities)-1;$i++){ ?>
                            <div class="col-md-6 my-2"><i class="far fa-hand-point-right icon_style"></i><?php echo $amenities[$i];?></div> 
                        <?php } ?>
                        <span id="map"> </span>
                    </div>
                </div>
            </div>
            <!-- /* Amenities section End */ -->


            <!-- /* Map View section */ -->
            <div class="card bg-light mb-3">
                <div class="card-body">
                   
                    <div class="card-header text-center">
                        <h4>Map View</h4>
                    </div>
                    <p class="card-text"><!--Google map-->
                    <div id="map-container-google-1" class="z-depth-1-half map-container">
                    <?php echo $location['URL'];?>
                    </div>
                    <div>
                        <p class="card-text"> <?php echo $propertydetails['d3'];?></p>
                    </div>
                    <div class="row">
                 
                            <?php for($i=0;$i<count($nearbyloc);$i++){ ?>

                                <div class="col-md-6 my-2"  style="overflow-x:unset;"><span class="dots"><i class="fa fa-circle"></i></span><?php echo $nearbyloc[$i];?></b></div>
                                <!-- <td><b><?php 
                                //echo $nearbyloc['l'];
                                ?>
                                </td>
                                <td><b>BKC Connector</b> - 400 mtr</td>
                                <td><b>Orchid International School</b> - 5 min (2.4 km)</td>
                           
                                <td><b>International School</b> - 3 min (600 mtr)</td>
                                <td><b>Sumaiya Hospital</b> - 3 min (0.7 km)</td>
                                <td><b>D-mart</b> - 5 min (1 km)</td> -->
                                <?php }?>
                                <span id="NRI"> </span>

                            </div>
                           
                </div>
            </div>
            <!-- /* Map View section End */ -->


            <!-- /* NRI section */ -->
            <div class="card bg-light mb-3" >
                <div class="card-body">
                    <h4 class="card-title text-center">NRI Services</h4><br>
                    <p class="card-text">
                            We provides better, excellent, and different service from what is usual especially to NRI's. As we have huge team exclusively for NRI clients, We understand your demand and desire deeply and provides you with profound facilities as
                            per your need and preferences.We provide better, greater, and different service from what is usual especially to NRI's. As we have huge team exclusively for NRI clients, we understand your demand and desire deeply and provide you
                            with profound facilities as per your need and preferences. We have a different massive team for NRI client thus they perform their role as per their convenience of meeting and guide them with their budgeting, location confusion,
                            configuration selection and documentation process. With us you have to sit and enjoy your hot coffee and rest is our duty
                    </p>
                </div>
            </div>
          
 <!--for mobile footer End-->
      
<?php include "include/footer.php";?>



